<?php
require_once __DIR__ . '/../includes/header_panel.php';

// Mockup de usuarios
$usuarios_admin = [
    ['id' => 1, 'nombre' => 'Administrador General', 'email' => 'admin@cityfarmac.com', 'perfil' => 'Administrador', 'estado' => 'Activo'],
    ['id' => 2, 'nombre' => 'Julián Editor', 'email' => 'julian@cityfarmac.com', 'perfil' => 'Editor', 'estado' => 'Activo'],
    ['id' => 3, 'nombre' => 'María Cliente', 'email' => 'maria@correo.com', 'perfil' => 'Cliente', 'estado' => 'Inactivo'],
];
?>

<div class="container-fluid p-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h2 class="h3 mb-1 text-gray-800"><i class="bi bi-people me-2"></i>Gestión de Usuarios</h2>
            <p class="text-muted mb-0">Administrá las cuentas de acceso al sistema y sus perfiles.</p>
        </div>
        <div>
            <a href="#" class="btn btn-success shadow-sm">
                <i class="bi bi-person-plus me-1"></i>Nuevo Usuario
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
                            <th scope="col">Correo Electrónico</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Estado</th>
                            <th scope="col" class="text-end pe-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios_admin as $usr): ?>
                            <tr>
                                <td class="ps-3 fw-bold">#<?= $usr['id'] ?></td>
                                <td class="fw-semibold"><?= htmlspecialchars($usr['nombre']) ?></td>
                                <td class="text-muted"><?= htmlspecialchars($usr['email']) ?></td>
                                <td><span class="badge bg-secondary"><?= htmlspecialchars($usr['perfil']) ?></span></td>
                                <td>
                                    <?php if ($usr['estado'] === 'Activo'): ?>
                                        <span class="badge bg-success">Activo</span>
                                    <?php else: ?>
                                        <span class="badge bg-danger">Inactivo</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-end pe-3">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-outline-primary" title="Editar"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-outline-warning" title="Cambiar Estado"><i class="bi bi-toggle-on"></i></a>
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