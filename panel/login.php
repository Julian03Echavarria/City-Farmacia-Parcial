<?php
require_once __DIR__ . '/includes/header_publico.php';
?>

<div class="container my-5 py-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow border-0">
                <div class="card-header bg-dark text-white text-center py-3">
                    <h4 class="mb-0"><i class="bi bi-shield-lock me-2"></i>Acceso Admin</h4>
                </div>
                <div class="card-body p-4">
                    <form action="panel/index.php" method="POST">
                        <div class="mb-3">
                            <label for="usuario" class="form-label font-weight-bold">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="admin" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label font-weight-bold">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 py-2 mt-2 font-weight-bold">
                            Ingresar al Panel
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/includes/footer_publico.php';
?>