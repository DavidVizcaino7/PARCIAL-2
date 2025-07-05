<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Zapatos Deportivos</title>
    <!-- Enlace al CSS de Bootstrap (modo offline con base_url) -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
</head>
<body class="bg-white">
<div class="container py-5">
    <!-- Título principal centrado con color primario y espacio inferior -->
    <h2 class="text-center text-primary mb-5">Catálogo Zapatos Deportivos</h2>
    
    <!-- Fila que centra las cards en el contenedor -->
    <div class="row justify-content-center">
        <!-- Primera tarjeta -->
        <div class="col-md-4 mb-4">
            <div class="card border-primary">
                <img src="<?= base_url('public/img/deportivo1.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Zapato Deportivo 1</h5>
                    <p class="card-text">Precio: $45.00</p>
                    <a href="#" class="btn btn-outline-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <!-- Segunda tarjeta -->
        <div class="col-md-4 mb-4">
            <div class="card border-primary">
                <img src="<?= base_url('public/img/deportivo2.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Zapato Deportivo 2</h5>
                    <p class="card-text">Precio: $50.00</p>
                    <a href="#" class="btn btn-outline-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <!-- Tercera tarjeta -->
        <div class="col-md-4 mb-4">
            <div class="card border-primary">
                <img src="<?= base_url('public/img/deportivo3.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Zapato Deportivo 3</h5>
                    <p class="card-text">Precio: $55.00</p>
                    <a href="#" class="btn btn-outline-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón de regreso -->
    <div class="text-center mt-4">
        <a href="<?= base_url('bienvenido') ?>" class="btn btn-secondary">← Volver al menú principal</a>
    </div>
</div>

<!-- Script de Bootstrap -->
<script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
