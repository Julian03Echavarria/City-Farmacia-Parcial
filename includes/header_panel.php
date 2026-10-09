<?php
require_once __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - City Farmacia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold text-success" href="<?= BASE_URL ?>panel/index.php">
                <i class="bi bi-speedometer2 me-2"></i>City Farmacia - Admin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPanel">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarPanel">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>panel/index.php"><i class="bi bi-house me-1"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>panel/productos.php"><i class="bi bi-box-seam me-1"></i>Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>panel/categorias.php"><i class="bi bi-tags me-1"></i>Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>panel/marcas.php"><i class="bi bi-award me-1"></i>Marcas</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <a href="<?= BASE_URL ?>index.php" class="btn btn-outline-light btn-sm" target="_blank">
                        <i class="bi bi-box-arrow-up-right me-1"></i>Ver Sitio Público
                    </a>
                    <span class="text-light small"><i class="bi bi-person-circle me-1"></i>Admin</span>
                </div>
            </div>
        </div>
    </nav>