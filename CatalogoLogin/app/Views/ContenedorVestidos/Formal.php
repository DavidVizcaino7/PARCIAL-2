<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Vestidos Formales</title>
    <!-- Enlace al archivo CSS de Bootstrap (modo offline) -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container mt-4">
    <!-- Título principal de la página -->
    <h2>Catálogo Vestidos Formales</h2>

    <!-- Fila de Bootstrap para mostrar los productos en 3 columnas -->
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Imagen local del producto -->
                <img src="<?= base_url('public/img/formal1.jpg') ?>" class="card-img-top" alt="Vestido Formal 1">
                <div class="card-body">
                    <!-- Nombre del producto -->
                    <h5 class="card-title">Vestido Formal 1</h5>
                    <!-- Precio aproximado -->
                    <p class="card-text">Precio: $75.00</p>
                    <!-- Botón simulado para agregar al carrito -->
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= base_url('public/img/formal2.jpg') ?>" class="card-img-top" alt="Vestido Formal 2">
                <div class="card-body">
                    <h5 class="card-title">Vestido Formal 2</h5>
                    <p class="card-text">Precio: $80.00</p>
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= base_url('public/img/formal3.jpg') ?>" class="card-img-top" alt="Vestido Formal 3">
                <div class="card-body">
                    <h5 class="card-title">Vestido Formal 3</h5>
                    <p class="card-text">Precio: $85.00</p>
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón de regreso -->
    <div class="text-center mt-4">
        <a href="<?= base_url('bienvenido') ?>" class="btn btn-secondary">← Volver al menú principal</a>
    </div>
</div>

<!-- Script de Bootstrap offline para que funcionen botones, etc. -->
<script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
