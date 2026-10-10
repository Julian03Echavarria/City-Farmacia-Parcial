<?php
require_once __DIR__ . '/../includes/header_panel.php';

// Mockup de comentarios para moderación
$comentarios_admin = [
    ['id' => 1, 'producto' => 'Crema Hidratante Facial', 'usuario' => 'María Gómez', 'puntaje' => 5, 'mensaje' => 'Excelente producto, mi piel se nota mucho más hidratada.', 'estado' => 'Aprobado', 'fecha' => '2026-10-05'],
    ['id' => 2, 'producto' => 'Protector Solar SPF 50', 'usuario' => 'Carlos Pérez', 'puntaje' => 4, 'mensaje' => 'Muy bueno, no deja la piel grasa aunque es un poco espeso.', 'estado' => 'Pendiente', 'fecha' => '2026-10-06'],
    ['id' => 3, 'producto' => 'Shampoo Fortalecedor', 'usuario' => 'Lucía Fernández', 'puntaje' => 1, 'mensaje' => 'No me sirvió para nada, me dejó el pelo reseco.', 'estado' => 'Rechazado', 'fecha' => '2026-10-04'],
];
?>

<div class="container-fluid p-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h2 class="h3 mb-1 text-gray-800"><i class="bi bi-chat-left-text me-2"></i>Moderación de Comentarios</h2>
            <p class="text-muted mb-0">Aprobá o rechazá las opiniones enviadas por los clientes.</p>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="ps-3">ID</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Puntaje</th>
                            <th scope="col">Comentario</th>
                            <th scope="col">Estado</th>
                            <th scope="col" class="text-end pe-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($comentarios_admin as $com): ?>
                            <tr>
                                <td class="ps-3 fw-bold">#<?= $com['id'] ?></td>
                                <td class="fw-semibold text-secondary"><?= htmlspecialchars($com['producto']) ?></td>
                                <td><?= htmlspecialchars($com['usuario']) ?></td>
                                <td>
                                    <span class="text-warning">
                                        <?php for($i=1; $i<=5; $i++): ?>
                                            <i class="bi bi-star<?= ($i <= $com['puntaje']) ? '-fill' : '' ?>"></i>
                                        <?php endfor; ?>
                                    </span>
                                </td>
                                <td><small class="text-muted"><?= htmlspecialchars($com['mensaje']) ?></small></td>
                                <td>
                                    <?php if ($com['estado'] === 'Aprobado'): ?>
                                        <span class="badge bg-success">Aprobado</span>
                                    <?php elseif ($com['estado'] === 'Pendiente'): ?>
                                        <span class="badge bg-warning text-dark">Pendiente</span>
                                    <?php else: ?>
                                        <span class="badge bg-danger">Rechazado</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-end pe-3">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-outline-success" title="Aprobar"><i class="bi bi-check-lg"></i></a>
                                        <a href="#" class="btn btn-outline-danger" title="Rechazar"><i class="bi bi-x-lg"></i></a>
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