<?php
require_once __DIR__ . '/includes/header_publico.php';
?>

<div class="container my-5 text-center py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0 p-4">
                <div class="card-body">
                    <h1 class="display-1 fw-bold text-success">404</h1>
                    <i class="bi bi-exclamation-triangle display-3 text-warning my-3 d-block"></i>
                    <h2 class="fw-bold mb-3">Página no encontrada</h2>
                    <p class="text-muted mb-4">
                        Lo sentimos, la sección o el producto que estás buscando no existe, fue movido o cambió de dirección.
                    </p>
                    <a href="index.php" class="btn btn-success btn-lg px-4">
                        <i class="bi bi-house-door me-2"></i>Volver al Inicio
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/includes/footer_publico.php';
?>