<?php
require_once __DIR__ . '/includes/header_publico.php';
require_once __DIR__ . '/data/datos_mockup.php';

// Variable para simular si un filtro no devuelve resultados
$hay_productos = true; 
?>

<div class="container my-4">
    <div class="row">
        
        <!-- BARRA LATERAL: Filtros y Categorías -->
        <aside class="col-lg-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-funnel me-2"></i>Filtros</h5>
                </div>
                <div class="card-body">
                    
                    <!-- Categorías y Subcategorías -->
                    <h6 class="fw-bold border-bottom pb-2">Categorías</h6>
                    <div class="accordion accordion-flush mb-4" id="accordionCategorias">
                        <!-- Categoría 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="cat1">
                                <button class="accordion-button collapsed px-0 fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#subCat1">
                                    Cuidado Personal
                                </button>
                            </h2>
                            <div id="subCat1" class="accordion-collapse collapse" data-bs-parent="#accordionCategorias">
                                <div class="accordion-body px-2 py-1">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#" class="text-decoration-none text-secondary d-block py-1">Capilar</a></li>
                                        <li><a href="#" class="text-decoration-none text-secondary d-block py-1">Jabones y geles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Categoría 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="cat2">
                                <button class="accordion-button collapsed px-0 fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#subCat2">
                                    Dermocosmética
                                </button>
                            </h2>
                            <div id="subCat2" class="accordion-collapse collapse" data-bs-parent="#accordionCategorias">
                                <div class="accordion-body px-2 py-1">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#" class="text-decoration-none text-secondary d-block py-1">Protectores solares</a></li>
                                        <li><a href="#" class="text-decoration-none text-secondary d-block py-1">Hidratantes faciales</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Filtro  -->
                    <h6 class="fw-bold border-bottom pb-2">Marcas</h6>
                    <form action="#" method="GET">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="marca1" name="marca[]" value="dermaglos">
                            <label class="form-check-label" for="marca1">Dermaglós</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="marca2" name="marca[]" value="laroche">
                            <label class="form-check-label" for="marca2">La Roche-Posay</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="marca3" name="marca[]" value="loreal">
                            <label class="form-check-label" for="marca3">L'Oréal Paris</label>
                        </div>
                        <button type="submit" class="btn btn-outline-success btn-sm w-100 mt-3">Aplicar Filtros</button>
                    </form>

                </div>
            </div>
        </aside>

        <!-- Grilla de Productos -->
        <main class="col-lg-9">
            
            <!-- Selector -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-4 p-3 bg-light rounded shadow-sm">
                <span class="text-muted mb-2 mb-sm-0">Mostrando <strong><?= count($productos_destacados) ?></strong> productos</span>
                <div class="d-flex align-items-center gap-2">
                    <label for="orden" class="form-label mb-0 text-nowrap fw-semibold">Ordenar por:</label>
                    <select class="form-select form-select-sm" id="orden" name="orden">
                        <option value="destacados">Destacados</option>
                        <option value="ranking_desc">Ranqueados (Mayor a menor)</option>
                        <option value="az">A-Z</option>
                        <option value="za">Z-A</option>
                    </select>
                </div>
            </div>

            <!-- Grilla de productos -->
            <?php if ($hay_productos && !empty($productos_destacados)): ?>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($productos_destacados as $prod): ?>
                        <div class="col">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="assets/img/<?= $prod['imagen'] ?>" class="card-img-top" alt="<?= htmlspecialchars($prod['nombre']) ?>">
                                <div class="card-body d-flex flex-column">
                                    <small class="text-muted text-uppercase fw-bold"><?= htmlspecialchars($prod['marca']) ?></small>
                                    <h5 class="card-title my-2 fs-6"><?= htmlspecialchars($prod['nombre']) ?></h5>
                                    
                                    <!-- Ranking -->
                                        <div class="text-warning mb-2 small">
                                            <?php 
                                            $puntaje_promedio = 5;
                                            if (!empty($prod['comentarios'])) {
                                                $suma = array_sum(array_column($prod['comentarios'], 'puntaje'));
                                                $puntaje_promedio = round($suma / count($prod['comentarios']));
                                            }
                                            ?>
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <i class="bi bi-star<?= ($i <= $puntaje_promedio) ? '-fill' : '' ?>"></i>
                                            <?php endfor; ?>
                                            <span class="text-muted ms-1">(<?= !empty($prod['comentarios']) ? count($prod['comentarios']) : 0 ?>)</span>
                                        </div>

                                    <p class="card-text fw-bold fs-5 text-success mt-auto">$<?= number_format($prod['precio'], 2, ',', '.') ?></p>
                                    <a href="detalle.php?id=<?= $prod['id'] ?>" class="btn btn-outline-success btn-sm w-100">Ver Detalle</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- cuando no hay resultados -->
                <div class="text-center py-5 my-5">
                    <i class="bi bi-search display-1 text-muted"></i>
                    <h3 class="mt-3 text-secondary">No hay productos para mostrar</h3>
                    <p class="text-muted">Intenta cambiar los filtros seleccionados o buscar otra categoría.</p>
                    <a href="productos.php" class="btn btn-success mt-2">Limpiar Filtros</a>
                </div>
            <?php endif; ?>

        </main>

    </div>
</div>

<?php
require_once __DIR__ . '/includes/footer_publico.php';
?>