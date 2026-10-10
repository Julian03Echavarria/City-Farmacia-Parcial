<?php
require_once __DIR__ . '/includes/header_publico.php';
?>

<div class="container my-5 py-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow border-0">
                <div class="card-header bg-dark text-white text-center py-3">
                    <h4 class="mb-0"><i class="bi bi-shield-lock me-2"></i>Iniciar Sesión</h4>
                </div>
                <div class="card-body p-4">
                    <form action="panel/index.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="admin@cityfarmac.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 py-2 mt-2 fw-bold">
                            Ingresar al Panel
                        </button>
                    </form>
                    <hr class="my-4">
                    <div class="text-center">
                        <p class="small text-muted mb-0">¿No tenés una cuenta?</p>
                        <a href="registro.php" class="btn btn-outline-secondary btn-sm mt-2">Registrarse como usuario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/includes/footer_publico.php';
?>