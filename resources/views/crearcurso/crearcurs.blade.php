<style>
    /* CONTENEDOR */
    .form-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    /* LABEL */
    .form-label {
        font-weight: 600;
        font-size: 14px;
        color: #344054;
        margin-bottom: 6px;
    }

    /* INPUTS */
    .form-control,
    .form-select {
        border-radius: 10px !important;
        border: 1px solid #d0d5dd;
        padding: 10px 14px;
        font-size: 14px;
        transition: all 0.2s ease-in-out;
    }

    /* FOCUS */
    .form-control:focus,
    .form-select:focus {
        border-color: #4f46e5 !important;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
    }

    /* TEXTAREA */
    textarea.form-control {
        resize: none;
        min-height: 90px;
    }

    /* INPUT GROUP */
    .input-group-text {
        border-radius: 10px 0 0 10px;
        background: #f2f4f7;
    }

    /* BOTÓN */
    .btn-guardar {
        border-radius: 10px;
        background: #4f46e5;
        border: none;
        padding: 10px;
        font-weight: 600;
        transition: 0.2s;
    }

    .btn-guardar:hover {
        background: #4338ca;
    }
</style>

<div class="form-card">

    <h4 class="mb-4">📚 Registro del Curso</h4>

    <div class="row g-3">

        <div class="col-12 col-sm-6 col-lg-4">
            <label class="form-label">Nombre del curso</label>
            <input type="text" id="nombre" class="form-control">
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <label class="form-label">Descripción</label>
            <textarea id="desc" class="form-control"></textarea>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <label class="form-label">Máx. alumnos</label>
            <input type="number" id="max_alumnos" class="form-control">
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <label class="form-label fw-semibold">Maestro</label>
            <select id="maestro" name="maestro" class="form-select">
                <option value="">Seleccione un maestro</option>
                @foreach ($maestros as $maestro)
                    <option value="{{ $maestro->id }}">
                        {{ $maestro->nombre }} {{ $maestro->apellido_paterno }} {{ $maestro->apellido_materno }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <label class="form-label">Horas por clase</label>
            <input type="number" id="horas" class="form-control">
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <label class="form-label">Imagen</label>
            <input type="file" id="imagen" class="form-control">
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <label class="form-label">Costo</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="number" id="costo" class="form-control">
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <label class="form-label">Fecha inicio</label>
            <input type="date" id="fecha_inicio" class="form-control">
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <label class="form-label">Fecha fin</label>
            <input type="date" id="fecha_fin" class="form-control">
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label">Requisitos</label>
            <textarea id="requisitos" class="form-control"></textarea>
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label">Objetivos</label>
            <textarea id="objetivos" class="form-control"></textarea>
        </div>

    </div>

</div>
