<style>
    /* CARD */
    .table-card {
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    /* HEADER */
    .table-header {
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        color: white;
        padding: 15px 20px;
    }

    /* TABLA */
    .table-modern {
        border-collapse: separate;
        border-spacing: 0 10px;
    }

    .table-modern tbody tr {
        background: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        border-radius: 10px;
    }

    .table-modern td {
        vertical-align: middle;
        padding: 15px;
    }

    /* HOVER */
    .table-modern tbody tr:hover {
        transform: scale(1.01);
        transition: 0.2s;
    }

    /* IMAGEN */
    .img-curso {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 10px;
    }

    /* BADGE */
    .badge-costo {
        background: #ecfdf3;
        color: #027a48;
        padding: 5px 10px;
        border-radius: 8px;
        font-weight: 600;
    }

    /* BOTONES */
    .btn-action {
        border-radius: 8px;
        padding: 5px 10px;
        font-size: 13px;
    }

    .btn-ver {
        background: #6366f1;
        color: white;
    }

    .btn-editar {
        background: #f59e0b;
        color: white;
    }

    .btn-eliminar {
        background: #ef4444;
        color: white;
    }
</style>
<div class="card table-card mb-4">

    <div class="table-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">📚 Listado de Cursos</h4>

        <input type="text" id="buscador" class="form-control w-25" placeholder="Buscar curso...">
    </div>

    <div class="card-body">

        <table id="dt_search" class="table table-modern">
            <thead>
                <tr class="text-gray-500 text-uppercase fs-7">
                    <th>Curso</th>
                    <th>Maestro</th>
                    <th>Descripción</th>
                    <th>Costo</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody id="tbody-cursos">
                <!-- Aquí cargas con JS -->
            </tbody>
        </table>

    </div>
</div>


