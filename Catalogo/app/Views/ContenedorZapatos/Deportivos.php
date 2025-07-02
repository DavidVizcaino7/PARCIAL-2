<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Zapatos Deportivos</title>
    <!-- Enlace al archivo CSS de Bootstrap en modo offline -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container mt-4">
    <!-- Título principal de la página -->
    <h2>Catálogo Zapatos Deportivos</h2>
    
    <!-- Fila para organizar las cards en columnas -->
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Imagen del producto, cargada desde la carpeta pública -->
                <img src="<?= base_url('public/img/deportivo1.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 1">
                
                <!-- Cuerpo de la card con título, precio y botón -->
                <div class="card-body">
                    <!-- Nombre del producto -->
                    <h5 class="card-title">Zapato Deportivo 1</h5>
                    <!-- Precio aproximado -->
                    <p class="card-text">Precio: $45.00</p>
                    <!-- Botón simulado para agregar al carrito -->
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Imagen del producto -->
                <img src="<?= base_url('public/img/deportivo2.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 2">
                <div class="card-body">
                    <h5 class="card-title">Zapato Deportivo 2</h5>
                    <p class="card-text">Precio: $50.00</p>
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Imagen del producto -->
                <img src="<?= base_url('public/img/deportivo3.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 3">
                <div class="card-body">
                    <h5 class="card-title">Zapato Deportivo 3</h5>
                    <p class="card-text">Precio: $55.00</p>
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script de Bootstrap para funcionalidades JavaScript, también en modo offline -->
<script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
