<?php
require_once __DIR__ . '/includes/header_publico.php';

require_once __DIR__ . '/data/datos_mockup.php';
?>

<!-- Home -->
<div class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary text-center">
        <h1 class="display-5 fw-bold text-success">Bienvenidos a City Farmac</h1>
        <p class="lead my-3">Tu red de farmacias y perfumerías de confianza.</p>
        <a href="catalogo.php" class="btn btn-success btn-lg">Ver Catálogo</a>
    </div>

    <h2 class="mb-4 text-secondary border-bottom pb-2">Productos Destacados</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($productos_destacados as $prod): ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="<?= $prod['imagen'] ?>" class="card-img-top" alt="<?= htmlspecialchars($prod['nombre']) ?>">
                    <div class="card-body d-flex flex-column">
                        <small class="text-muted text-uppercase fw-bold"><?= htmlspecialchars($prod['marca']) ?></small>
                        <h5 class="card-title my-2"><?= htmlspecialchars($prod['nombre']) ?></h5>
                        <p class="card-text fw-bold fs-4 text-success mt-auto">$<?= number_format($prod['precio'], 2, ',', '.') ?></p>
                        <a href="detalle.php?id=<?= $prod['id'] ?>" class="btn btn-outline-success w-100">Ver Detalle</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
require_once __DIR__ . '/includes/footer_publico.php';
?>