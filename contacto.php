<?php

require_once __DIR__ . '/includes/header_publico.php';
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-success text-white text-center py-3">
                    <h3 class="card-title mb-0"><i class="bi bi-envelope-paper me-2"></i>Contáctenos</h3>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted text-center mb-4">Dejanos tu consulta y nos pondremos en contacto a la brevedad.</p>
                    
                    <form action="#" method="POST" class="needs-validation">
                        <!-- Nombre y Apellido -->
                        <div class="mb-3">
                            <label for="nombre_apellido" class="form-label font-weight-bold">Nombre y Apellido <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nombre_apellido" name="nombre_apellido" placeholder="Ej: Juan Pérez" required minlength="3">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label font-weight-bold">Correo Electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
                        </div>

                        <!-- Telefono -->
                        <div class="mb-3">
                            <label for="telefono" class="form-label font-weight-bold">Teléfono <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ej: 1112345678" required pattern="[0-9]{8,15}">
                            <div class="form-text">Solo números, entre 8 y 15 dígitos.</div>
                        </div>

                        <!-- Area -->
                        <div class="mb-3">
                            <label for="area" class="form-label font-weight-bold">Área de la Empresa <span class="text-danger">*</span></label>
                            <select class="form-select" id="area" name="area" required>
                                <option value="" selected disabled>-- Seleccioná un área --</option>
                                <option value="ventas">Ventas y Pedidos</option>
                                <option value="atencion">Atención al Cliente</option>
                                <option value="farmacia">Consultas Farmacéuticas</option>
                                <option value="rrhh">Recursos Humanos</option>
                            </select>
                        </div>

                        <!-- Comentario -->
                        <div class="mb-3">
                            <label for="comentario" class="form-label font-weight-bold">Comentario <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="4" placeholder="Escribí tu mensaje acá..." required minlength="10"></textarea>
                        </div>

                        <!-- Enviar -->
                        <button type="submit" class="btn btn-success w-100 py-2 font-weight-bold">
                            <i class="bi bi-send-fill me-2"></i>Enviar Mensaje
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