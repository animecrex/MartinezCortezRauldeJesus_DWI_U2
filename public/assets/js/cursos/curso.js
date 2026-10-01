const BASE_URL = $('meta[name="base-url"]').attr("content");

$("#guardar_curso").on("click", function (event) {
    event.preventDefault();

    let formData = new FormData();

    formData.append("nombre", $("#nombre").val());
    formData.append("desc", $("#desc").val());
    formData.append("max_alumnos", $("#max_alumnos").val());
    formData.append("maestro", $("#maestro").val());
    formData.append("horas", $("#horas").val());
    formData.append("costo", $("#costo").val());
    formData.append("fecha_fin", $("#fecha_fin").val());
    formData.append("objetivos", $("#objetivos").val());
    formData.append("requisitos", $("#requisitos").val());
    formData.append("fecha_inicio", $("#fecha_inicio").val());

    let imagen = $("#imagen")[0].files[0];

    if (imagen !== undefined) {
        formData.append("imagen", imagen);
    }

    if (
        formData.get("nombre") === "" ||
        formData.get("desc") === "" ||
        formData.get("max_alumnos") === "" ||
        formData.get("maestro") === "" ||
        formData.get("horas") === "" ||
        formData.get("costo") === "" ||
        formData.get("fecha_fin") === "" ||
        formData.get("objetivos") === "" ||
        formData.get("requisitos") === "" ||
        formData.get("fecha_inicio") === ""
    ) {
        Swal.fire({
            icon: "warning",
            title: "Campos obligatorios",
            text: "Completa los campos requeridos",
            confirmButtonColor: "#4f46e5",
        });
        return;
    }

    $.ajax({
        url: BASE_URL + "/registrarcurso",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (response) {
            cargarTodos();
            Swal.fire({
                icon: "success",
                title: "Curso registrado correctamente",
                showConfirmButton: false,
                timer: 1500,
            });
        },

        error: function (xhr) {
            console.log(xhr.responseText);
        },
    });
});

$(document).ready(function () {
    const DataTableFn = $.fn.DataTable || $.fn.dataTable;

    if (!DataTableFn) {
        console.warn("DataTables no está cargado; se omitirá la inicialización de la tabla.");
        cargarTodos();
        return;
    }

    if (DataTableFn.isDataTable("#dt_search")) {
        $("#dt_search").DataTable().destroy();
    }

    window.t = $("#dt_search").DataTable({
        responsive: true,
        autoWidth: false,
        language: {
            processing: "Procesando...",
            search: "Buscar:",
            lengthMenu: "Mostrar _MENU_ registros",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "No hay registros disponibles",
            infoFiltered: "(filtrado de _MAX_ registros totales)",
            emptyTable: "No hay datos disponibles en la tabla",
            zeroRecords: "No se encontraron coincidencias",
            paginate: {
                first: "Primero",
                previous: "Anterior",
                next: "Siguiente",
                last: "Último",
            },
        },
    });

    $("#buscador").on("keyup", function () {
        window.t.search(this.value).draw();
    });

    cargarTodos();
});

function cargarTodos() {
    $.ajax({
        url: `${BASE_URL}/crearcurso/traercursos`,
        type: "GET",
        dataType: "json",
        success: function (res) {
            console.log(res);

            let dataSet = [];

            res.forEach((r) => {
                dataSet.push([
                    `<strong>${r.nombre}</strong>`,
                    r.maestro,
                    r.descripcion,
                    `<span class="badge-costo">$${r.costo}</span>`,
                    `<img src="${BASE_URL}/storage/${r.imagen}" class="img-curso">`,
                    `
                    <a href="${BASE_URL}/detallescurso/${r.hash}" class="btn btn-action btn-ver">Ver</a>
                    <button type="button" class="btn btn-action btn-eliminar" data-id="${r.id}">Eliminar</button>
                    `,
                ]);
            });

            if (window.t) {
                window.t.clear().rows.add(dataSet).draw();
            }
        },
        error: function (xhr) {
            console.error("ERROR:", xhr.responseText);
        },
    });
}

$(document).on("click", ".btn-eliminar", function () {
    let id = $(this).data("id");

    eliminarCurso(id);
});

function eliminarCurso(id) {
    Swal.fire({
        title: "¿Estás seguro?",
        text: "¡No podrás revertir esto!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `${BASE_URL}/crearcurso/eliminarcurso/${id}`,
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content",
                    ),
                },
                success: function () {
                    cargarTodos();
                    Swal.fire(
                        "Eliminado",
                        "Curso eliminado correctamente",
                        "success",
                    );
                },
            });
        }
    });
}
