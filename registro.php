<?php
require_once __DIR__ . '/includes/header_publico.php';
?>

<div class="container my-5 py-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow border-0">
                <div class="card-header bg-success text-white text-center py-3">
                    <h4 class="mb-0"><i class="bi bi-person-plus me-2"></i>Crear Cuenta</h4>
                </div>
                <div class="card-body p-4">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-semibold">Nombre Completo <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Correo Electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" minlength="6" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label fw-semibold">Confirmar Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="••••••••" minlength="6" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 py-2 mt-2 fw-bold">
                            Registrarse
                        </button>
                    </form>
                    <hr class="my-4">
                    <div class="text-center">
                        <p class="small text-muted mb-0">¿Ya tenés una cuenta?</p>
                        <a href="login.php" class="btn btn-outline-secondary btn-sm mt-2">Iniciar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/includes/footer_publico.php';
?>