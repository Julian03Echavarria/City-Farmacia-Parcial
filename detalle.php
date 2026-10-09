<?php
require_once __DIR__ . '/includes/header_publico.php';
require_once __DIR__ . '/data/datos_mockup.php';

$producto = $productos_destacados[0]; 
?>

<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-success text-decoration-none">Inicio</a></li>
            <li class="breadcrumb-item"><a href="productos.php" class="text-success text-decoration-none">Productos</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($producto['nombre']) ?></li>
        </ol>
    </nav>

    <!-- FICHA DEL PRODUCTO -->
    <div class="card shadow-sm border-0 mb-5">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <!-- Imagen -->
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img src="<?= $producto['imagen'] ?>" class="img-fluid rounded shadow-sm" alt="<?= htmlspecialchars($producto['nombre']) ?>" style="max-height: 350px; object-fit: contain;">
                </div>

                <!-- Información -->
                <div class="col-md-7">
                    <span class="badge bg-secondary text-uppercase mb-2"><?= htmlspecialchars($producto['marca']) ?></span>
                    <h2 class="fw-bold mb-2"><?= htmlspecialchars($producto['nombre']) ?></h2>
                    
                    <!-- Calificación -->
                    <div class="mb-3 text-warning">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <i class="bi bi-star<?= ($i <= $producto['ranking']) ? '-fill' : '' ?> fs-5"></i>
                        <?php endfor; ?>
                        <span class="text-muted ms-2">(<?= $producto['ranking'] ?> de 5 estrellas)</span>
                    </div>

                    <h3 class="text-success fw-bold display-6 mb-3">$<?= number_format($producto['precio'], 2, ',', '.') ?></h3>
                    
                    <p class="text-muted mb-4">
                        Modelo: <strong><?= htmlspecialchars($producto['modelo']) ?></strong><br>
                        Disponibilidad: <span class="badge bg-success">En Stock</span>
                    </p>

                    <p class="mb-4">
                        Producto de alta calidad formulado bajo estrictos controles dermatológicos. Ideal para el cuidado diario de toda la familia.
                    </p>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="contacto.php" class="btn btn-success btn-lg px-4 me-md-2">
                            <i class="bi bi-chat-dots me-2"></i>Consultar por este producto
                        </a>
                        <a href="productos.php" class="btn btn-outline-secondary btn-lg px-4">
                            Volver al catálogo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Lista de Comentarios -->
        <div class="col-lg-7 mb-4">
            <h4 class="fw-bold mb-4"><i class="bi bi-chat-left-text me-2"></i>Opiniones de clientes</h4>

            <?php foreach ($producto['comentarios'] as $comentario): ?>
                <div class="card mb-3 shadow-sm border-0 bg-light">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="fw-bold mb-0"><?= htmlspecialchars($comentario['usuario']) ?></h6>
                            <small class="text-muted"><?= $comentario['fecha'] ?></small>
                        </div>
                        <div class="text-warning mb-2 small">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <i class="bi bi-star<?= ($i <= $comentario['puntaje']) ? '-fill' : '' ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="card-text text-secondary mb-0"><?= htmlspecialchars($comentario['mensaje']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Formulario -->
        <div class="col-lg-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Dejá tu opinión</h5>
                </div>
                <div class="card-body p-4">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="nombre_comentario" class="form-label font-weight-bold">Tu Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nombre_comentario" name="nombre" required placeholder="Ej: María Gómez">
                        </div>

                        <div class="mb-3">
                            <label for="puntaje" class="form-label font-weight-bold">Puntaje / Calificación <span class="text-danger">*</span></label>
                            <select class="form-select" id="puntaje" name="puntaje" required>
                                <option value="" selected disabled>-- Seleccioná una nota --</option>
                                <option value="5">5 Estrellas - Excelente</option>
                                <option value="4">4 Estrellas - Muy Bueno</option>
                                <option value="3">3 Estrellas - Bueno</option>
                                <option value="2">2 Estrellas - Regular</option>
                                <option value="1">1 Estrella - Malo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="mensaje_comentario" class="form-label font-weight-bold">Comentario <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="mensaje_comentario" name="mensaje" rows="3" required placeholder="¿Qué te pareció el producto?"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Enviar Comentario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/includes/footer_publico.php';
?>