const BASE_URL = $('meta[name="base-url"]').attr("content");
const csrfToken = $('meta[name="csrf-token"]').attr("content");

$(document).ready(function () {
    cargarTodos();
    verificarEstadoSuscripcion();
});

function cargarTodos() {
    $.ajax({
        url: `${BASE_URL}/curso/traercursos`,
        type: "GET",
        dataType: "json",
        success: function (res) {
            let html = "";

            res.forEach((r) => {
                html += `
                    <div class="card">
                        <div class="img">
                            <img src="${BASE_URL}/storage/${r.imagen}">
                        </div>

                        <div class="text">
                            <p class="h3">${r.nombre}</p>
                            <p class="p">${r.descripcion}</p>

                            <div class="icon-box">
                                <p class="span">Maestro: ${r.maestro}</p>
                            </div>

                            <div class="icon-box">
                                <p class="span">Costo: $${r.costo}</p>
                            </div>

                          
                                <a class="btn btn-success btn-seleccionar" 
                                    href="${BASE_URL}/detallescurso/${r.hash}">
                                    Seleccionar 
                                </a>
                        </div>
                    </div>
`;
            });

            $("#contenedor-cursos").html(html);
        },
        error: function (xhr) {
            console.error("ERROR:", xhr.responseText);
        },
    });
}

$(document).on("click", ".pagarBtn", function () {
    let cursoId = $(this).data("curso-id");
    let $btn = $("#modalPago").data("btn-target");
    const tarjetaId = $("#tarjetaSelect").val();

    if (!tarjetaId) {
        Swal.fire({
            title: "Sin tarjeta",
            text: "Debes seleccionar una tarjeta registrada para suscribirte.",
            icon: "warning",
            confirmButtonText: "Aceptar",
        });
        return;
    }

    registrarCurso(cursoId, $btn, tarjetaId);
    verificarEstadoSuscripcion();
    cerrarModalPago();
});

$(document).on("click", "#btn-inscripcion", function () {
    const cursoId = $(this).data("curso-id");
    const suscrito = $(this).data("suscrito") === true;

    if (suscrito) {
        Swal.fire({
            title: "¿Deseas desinscribirte?",
            text: "No se devolverá el dinero.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Sí, desinscribirme",
            cancelButtonText: "Cancelar",
        }).then((result) => {
            if (result.isConfirmed) {
                desregistrarCurso(cursoId, $(this));
            }
        });
    } else {
        abrirModalPago(cursoId);
    }
});

function verificarEstadoSuscripcion() {
    const cursoId = $("#btn-inscripcion").data("curso-id");

    if (!cursoId) {
        return;
    }

    $.ajax({
        url: `${BASE_URL}/suscripcion/estado`,
        type: "GET",
        dataType: "json",
        data: { id_curso: cursoId },
        success: function (res) {
            actualizarBotonInscripcion(res.suscrito, $("#btn-inscripcion"));
        },
        error: function (xhr) {
            console.error("ERROR:", xhr.responseText);
        },
    });
}

function actualizarBotonInscripcion(suscrito, $btn) {
    if (!$btn || !$btn.length) {
        return;
    }

    $btn.data("suscrito", suscrito);
    $btn.text(suscrito ? "Desuscribirse" : "Suscribirse");
    $btn.removeClass("btn-primary btn-danger").addClass(suscrito ? "btn-danger" : "btn-primary");
}

function abrirModalPago(cursoId, $btn) {
    $("#modalPago").data("curso-id", cursoId);
    $("#modalPago").data("btn-target", $btn || null);
    $(".pagarBtn").data("curso-id", cursoId);
    $("#modalPago").css("display", "block");
    $("body").addClass("modal-open");
}

function registrarCurso(cursoId, $btn, tarjetaId) {
    $.ajax({
        url: `${BASE_URL}/suscribirse`,
        type: "POST",
        dataType: "json",
        data: {
            id_curso: cursoId,
            id_tarjeta: tarjetaId,
            _token: csrfToken,
        },
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
        success: function (res) {
            actualizarBotonInscripcion(true, $btn);
            Swal.fire({
                title: "¡Éxito!",
                text: res.message,
                icon: "success",
                confirmButtonText: "Aceptar",
            });
        },
        error: function (xhr) {
            console.error("ERROR:", xhr.responseText);
        },
    });
}

function desregistrarCurso(cursoId, $btn) {
    $.ajax({
        url: `${BASE_URL}/desuscribirse`,
        type: "POST",
        dataType: "json",
        data: {
            id_curso: cursoId,
            _token: csrfToken,
        },
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
        success: function (res) {
            actualizarBotonInscripcion(false, $btn);
            Swal.fire({
                title: "Desinscripción",
                text: res.message,
                icon: "warning",
                confirmButtonText: "Aceptar",
            });
        },
        error: function (xhr) {
            console.error("ERROR:", xhr.responseText);
        },
    });
}

document.addEventListener("DOMContentLoaded", function () {
    const abrirBtn = document.getElementById("abrirModalBtn");
    const cerrarBtn = document.getElementById("cerrarModalBtn");
    const modal = document.getElementById("modalPago");

    abrirBtn?.addEventListener("click", () => {
        abrirModalPago($(modal).data("curso-id") || null, null);
    });

    cerrarBtn?.addEventListener("click", () => {
        cerrarModalPago();
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            cerrarModalPago();
        }
    });
});

function cerrarModalPago() {
    $("#modalPago").hide();
    $("body").removeClass("modal-open");
}