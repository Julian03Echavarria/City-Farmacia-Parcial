<?php
require_once __DIR__ . '/../includes/header_panel.php';
require_once __DIR__ . '/../data/datos_mockup.php';
?>

<div class="container-fluid p-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h2 class="h3 mb-1 text-gray-800"><i class="bi bi-tags me-2"></i>Gestión de Categorías</h2>
            <p class="text-muted mb-0">Administrá las categorías principales y subcategorías.</p>
        </div>
        <div>
            <a href="#" class="btn btn-primary shadow-sm">
                <i class="bi bi-plus-circle me-1"></i>Nueva Categoría
            </a>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="ps-3">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cant. Productos</th>
                            <th scope="col" class="text-end pe-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorias as $cat): ?>
                            <tr>
                                <td class="ps-3 fw-bold">#<?= $cat['id'] ?></td>
                                <td class="fw-semibold"><?= htmlspecialchars($cat['nombre']) ?></td>
                                <td class="text-muted"><small><?= htmlspecialchars($cat['descripcion']) ?></small></td>
                                <td><span class="badge bg-info text-dark"><?= $cat['productos_count'] ?> productos</span></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-outline-primary" title="Editar"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-outline-danger" title="Eliminar" onclick="return confirm('¿Seguro que querés eliminar esta categoría?');"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/../includes/footer_panel.php';
?>