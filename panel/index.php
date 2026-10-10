<?php
require_once __DIR__ . '/../includes/header_panel.php';
require_once __DIR__ . '/../data/datos_mockup.php';
?>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800"><i class="bi me-2"></i>Panel de Control</h2>
        <span class="badge bg-success fs-6">Bienvenido/a Admin</span>
    </div>

    <!-- TARJETAS -->
    <div class="row g-4 mb-4">
        <!-- Productos -->
        <div class="col-md-4 col-lg-4">
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

        <!-- Categorías -->
        <div class="col-md-4 col-lg-4">
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

        <!-- Marcas -->
        <div class="col-md-4 col-lg-4">
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

        <!-- Comentarios -->
        <div class="col-md-4 col-lg-4">
            <div class="card border-0 shadow-sm border-start border-info border-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-uppercase text-muted fw-bold small">Comentarios</div>
                            <div class="h3 mb-0 fw-bold">3</div>
                        </div>
                        <i class="bi bi-chat-left-text display-6 text-info"></i>
                    </div>
                    <a href="comentarios.php" class="btn btn-sm btn-outline-info mt-3 w-100">Moderar Comentarios</a>
                </div>
            </div>
        </div>

        <!-- Usuarios -->
        <div class="col-md-4 col-lg-4">
            <div class="card border-0 shadow-sm border-start border-secondary border-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-uppercase text-muted fw-bold small">Usuarios</div>
                            <div class="h3 mb-0 fw-bold">3</div>
                        </div>
                        <i class="bi bi-people display-6 text-secondary"></i>
                    </div>
                    <a href="usuarios.php" class="btn btn-sm btn-outline-secondary mt-3 w-100">Gestionar Usuarios</a>
                </div>
            </div>
        </div>

        <!-- Perfiles -->
        <div class="col-md-4 col-lg-4">
            <div class="card border-0 shadow-sm border-start border-dark border-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-uppercase text-muted fw-bold small">Perfiles</div>
                            <div class="h3 mb-0 fw-bold">3</div>
                        </div>
                        <i class="bi bi-shield-check display-6 text-dark"></i>
                    </div>
                    <a href="perfiles.php" class="btn btn-sm btn-outline-dark mt-3 w-100">Gestionar Perfiles</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/../includes/footer_panel.php';
?>