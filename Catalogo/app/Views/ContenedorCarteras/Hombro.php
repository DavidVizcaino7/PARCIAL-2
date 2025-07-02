<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Carteras de Hombro</title>
    <!-- Enlace al CSS de Bootstrap offline -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container mt-4">
    <!-- Título principal de la página -->
    <h2>Catálogo Carteras de Hombro</h2>

    <!-- Fila de Bootstrap para mostrar productos en 3 columnas -->
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Imagen local del producto -->
                <img src="<?= base_url('public/img/hombro1.jpg') ?>" class="card-img-top" alt="Cartera de Hombro 1">
                <div class="card-body">
                    <h5 class="card-title">Cartera de Hombro 1</h5>
                    <p class="card-text">Precio: $45.00</p>
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= base_url('public/img/hombro2.jpg') ?>" class="card-img-top" alt="Cartera de Hombro 2">
                <div class="card-body">
                    <h5 class="card-title">Cartera de Hombro 2</h5>
                    <p class="card-text">Precio: $48.00</p>
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= base_url('public/img/hombro3.jpg') ?>" class="card-img-top" alt="Cartera de Hombro 3">
                <div class="card-body">
                    <h5 class="card-title">Cartera de Hombro 3</h5>
                    <p class="card-text">Precio: $50.00</p>
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script de Bootstrap offline para funcionalidades JS -->
<script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
