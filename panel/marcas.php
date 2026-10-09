<?php
require_once __DIR__ . '/../includes/header_panel.php';

// Mockup de marcas para la tabla
$marcas = [
    ['id' => 1, 'nombre' => 'Dermaglós', 'origen' => 'Argentina', 'productos_count' => 6],
    ['id' => 2, 'nombre' => 'La Roche-Posay', 'origen' => 'Francia', 'productos_count' => 4],
    ['id' => 3, 'nombre' => "L'Oréal Paris", 'origen' => 'Francia', 'productos_count' => 5],
    ['id' => 4, 'nombre' => 'Nivea', 'origen' => 'Alemania', 'productos_count' => 7],
];
?>

<div class="container-fluid p-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h2 class="h3 mb-1 text-gray-800"><i class="bi bi-award me-2"></i>Gestión de Marcas</h2>
            <p class="text-muted mb-0">Administrá las marcas comerciales del sistema.</p>
        </div>
        <div>
            <a href="#" class="btn btn-warning text-dark shadow-sm">
                <i class="bi bi-plus-circle me-1"></i>Nueva Marca
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
                            <th scope="col">Marca</th>
                            <th scope="col">Origen</th>
                            <th scope="col">Cant. Productos</th>
                            <th scope="col" class="text-end pe-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($marcas as $marca): ?>
                            <tr>
                                <td class="ps-3 fw-bold">#<?= $marca['id'] ?></td>
                                <td class="fw-semibold"><?= htmlspecialchars($marca['nombre']) ?></td>
                                <td class="text-muted"><?= htmlspecialchars($marca['origen']) ?></td>
                                <td><span class="badge bg-secondary"><?= $marca['productos_count'] ?> asociados</span></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-outline-primary" title="Editar"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-outline-danger" title="Eliminar" onclick="return confirm('¿Seguro que querés eliminar esta marca?');"><i class="bi bi-trash"></i></a>
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