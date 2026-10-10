<?php
require_once __DIR__ . '/../includes/header_panel.php';
require_once __DIR__ . '/../data/datos_mockup.php';
?>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800"><i class="bi bi-speedometer2 me-2"></i>Panel de Control</h2>
        <span class="badge bg-success fs-6">Bienvenido/a Admin</span>
    </div>

    <!-- TARJETAS -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm border-start border-success border-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-uppercase text-muted fw-bold small">Productos</div>
                            <div class="h3 mb-0 fw-bold"><?= count($productos_destacados) ?></div>
                        </div>
                        <i class="bi bi-box-seam display-6 text-success"></i>
                    </div>
                    <a href="productos.php" class="btn btn-sm btn-outline-success mt-3 w-100">Gestionar Productos</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm border-start border-primary border-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-uppercase text-muted fw-bold small">Categorías</div>
                            <div class="h3 mb-0 fw-bold">4</div>
                        </div>
                        <i class="bi bi-tags display-6 text-primary"></i>
                    </div>
                    <a href="categorias.php" class="btn btn-sm btn-outline-primary mt-3 w-100">Gestionar Categorías</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm border-start border-warning border-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-uppercase text-muted fw-bold small">Marcas</div>
                            <div class="h3 mb-0 fw-bold">4</div>
                        </div>
                        <i class="bi bi-award display-6 text-warning"></i>
                    </div>
                    <a href="marcas.php" class="btn btn-sm btn-outline-warning mt-3 w-100">Gestionar Marcas</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/../includes/footer_panel.php';
?>