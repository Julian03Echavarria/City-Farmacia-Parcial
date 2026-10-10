<?php

require_once __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Farmac - Farmacia y Perfumería</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= BASE_URL ?>index.php">
                <i class="bi bi-capsule me-2"></i>City Farmac
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navPublica" aria-controls="navPublica" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navPublica">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>catalogo.php">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>contacto.php">Contáctenos</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="<?= BASE_URL ?>login.php" class="btn btn-outline-light btn-sm">
                        <i class="bi bi-person-fill me-1"></i> Acceso Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-shrink-0 my-4"></main>

    