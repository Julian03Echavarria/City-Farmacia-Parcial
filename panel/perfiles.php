<?php
require_once __DIR__ . '/../includes/header_panel.php';
require_once __DIR__ .'/../data/datos_mockup.php';
?>

<div class="container-fluid p-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h2 class="h3 mb-1 text-gray-800"><i class="bi bi-shield-check me-2"></i>Gestión de Perfiles</h2>
            <p class="text-muted mb-0">Configurá los niveles de acceso y permisos del panel.</p>
        </div>
        <div>
            <a href="#" class="btn btn-dark shadow-sm">
                <i class="bi bi-plus-circle me-1"></i>Nuevo Perfil
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
                            <th scope="col">Nombre del Perfil</th>
                            <th scope="col">Descripción de Permisos</th>
                            <th scope="col" class="text-end pe-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($perfiles_admin as $perf): ?>
                            <tr>
                                <td class="ps-3 fw-bold">#<?= $perf['id'] ?></td>
                                <td class="fw-semibold text-dark"><?= htmlspecialchars($perf['nombre']) ?></td>
                                <td class="text-muted"><small><?= htmlspecialchars($perf['permisos']) ?></small></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-outline-primary" title="Editar Permisos"><i class="bi bi-pencil"></i></a>
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