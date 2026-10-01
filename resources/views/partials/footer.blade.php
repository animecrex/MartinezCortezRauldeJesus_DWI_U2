<style>
    .app-footer {
        background-color: #f8f9fa;
        padding: 12px 20px;
        text-align: center;
        font-size: 0.9rem;
        color: #6c757d;
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 100;
        border-top: 1px solid #e4e6ef;
    }

    /* Evita que el contenido se oculte detrás del footer */
    .content-wrapper {
        padding-bottom: 60px;
    }
</style>

<div class="content-wrapper">
    <!-- TU CONTENIDO AQUÍ -->
</div>

<footer class="app-footer">
    <div>© {{ date('Y') }} Curso+</div>
</footer>