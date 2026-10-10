<?php
require_once __DIR__ . '/../includes/header_panel.php';
require_once __DIR__ . '/../data/datos_mockup.php';
?>

<div class="container-fluid p-4">
    <!-- Encabezado y botón Nuevo Producto -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h2 class="h3 mb-1 text-gray-800"><i class="bi bi-box-seam me-2"></i>Gestión de Productos</h2>
            <p class="text-muted mb-0">Administrá el catálogo de productos de la farmacia.</p>
        </div>
        <div>
            <a href="#" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle me-1"></i>Nuevo Producto
            </a>
        </div>
    </div>

    <!-- Tabla de Productos -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="ps-3">ID</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Precio</th>
                            <th scope="col" class="text-end pe-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos_destacados as $prod): ?>
                            <tr>
                                <td class="ps-3 fw-bold">#<?= $prod['id'] ?></td>
                                <td>
                                    <img src="../assets/img/<?= $prod['imagen'] ?>" alt="<?= htmlspecialchars($prod['nombre']) ?>" class="rounded" style="width: 48px; height: 48px; object-fit: contain;">
                                </td>
                                <td>
                                    <span class="fw-semibold d-block"><?= htmlspecialchars($prod['nombre']) ?></span>
                                </td>
                                <td><span class="badge bg-light text-dark border"><?= htmlspecialchars($prod['marca']) ?></span></td>
                                <td><small class="text-muted"><?= htmlspecialchars($prod['modelo'] ?? $prod['categoria'] ?? 'N/A') ?></small></td>
                                <td class="fw-bold text-success">$<?= number_format($prod['precio'], 2, ',', '.') ?></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="../detalle.php?id=<?= $prod['id'] ?>" class="btn btn-outline-secondary" title="Ver Detalle" target="_blank">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-danger" title="Eliminar" onclick="return confirm('¿Seguro que querés eliminar este producto?');">
                                            <i class="bi bi-trash"></i>
                                        </a>
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