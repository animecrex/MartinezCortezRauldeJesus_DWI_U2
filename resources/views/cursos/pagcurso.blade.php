<style>
    img {
        width: 500%;
        height: 50%;
        align-items: start;
        height: auto;
    }


    .modal-content {
        background-color: rgb(255, 255, 255);
        color: white;
        margin-top: 20%;
        margin-left: 25%;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<div>
    <button type="button" class="btn btn-info"> <a class="menu-link fs-5 fw-bolder ps-1 py-1"
            href="{{ route('curso') }}" style="color: white">
            Regresar
        </a> </button>
</div>
<div class="container mt-5">
    <div class="row">

        <div class="col-md-6">
            <img src="{{ asset('storage/' . $curso->imagen) }}" class="img-fluid">
        </div>

        <div class="col-md-6">
            <h2>{{ $curso->nombre }}</h2>
            <p>{{ $curso->descripcion }}</p>

            <h4 class="text-success">$ {{ $curso->costo }}</h4>

            <p><strong>Maestro:</strong> {{ $curso->maestro }}</p>

            <p><strong>Horas:</strong> {{ $curso->horas }}</p>

            <p><strong>Fecha de inicio:</strong> {{ $curso->fecha_inicio }}</p>

            <p><strong>Fecha de fin:</strong> {{ $curso->fecha_fin }}</p>

            <p><strong>Objetivos:</strong> {{ $curso->objetivos }}</p>

            <p><strong>Requisitos:</strong> {{ $curso->requisitos }}</p>



            <button type="button" class="btn btn-primary" id="btn-inscripcion" data-curso-id="{{ $curso->id }}">
                Cargando...
            </button>


            <div class="modal" id="modalPago" style="display:none;">
                <div class="modal-content p-4">
                    <h2>{{ $curso->nombre }}</h2>

                    <p style="font-size: 18px; color: #000000;"><strong>Total a Pagar: $ {{ $curso->costo }}</strong>
                    </p>

                    <label>Selecciona una tarjeta para realizar el pago:</label>


                    <div class="form-group">
                        <select class="form-control" id="tarjetaSelect">
                            <option value="">Seleccione una tarjeta</option>
                            @foreach ($tarjetas as $tarjeta)
                                <option value="{{ $tarjeta->id }}">{{ $tarjeta->numero_tarjeta }} -
                                    {{ $tarjeta->banco }}</option>
                            @endforeach
                        </select>
                    </div>

                    @if ($tarjetas->isEmpty())
                        <div class="alert alert-warning mt-3" role="alert">
                            No tienes tarjetas registradas. Regístrala antes de suscribirte.
                        </div>
                    @endif

                    <button type="button" class="pagarBtn btn btn-primary" data-curso-id="{{ $curso->id }}"
                        id="btnSuscribirse">
                        Inscribirse
                    </button>
                    <button type="button" class="btn btn-secondary" id="cerrarModalBtn">Cerrar</button>


                </div>
            </div>


        </div>

    </div>
</div>
