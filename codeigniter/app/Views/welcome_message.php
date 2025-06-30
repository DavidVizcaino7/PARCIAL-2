<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tablas de Multiplicar y Potencias</title>
    <!-- Bootstrap offline CSS -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('public/funciones/script.js') ?>"></script>



</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Columna: Tabla de Multiplicar -->
            <div class="col-md-6 mb-4">
                <h4 class="text-center">Tabla de Multiplicar</h4>
                <div class="mb-3">
                    <!-- Input para el número -->
                    <input type="number" class="form-control text-center" id="numMultiplicar" placeholder="Número">
                </div>
                <!-- Botón para generar tabla -->
                <button id="btnMultiplicar" class="btn btn-secondary w-100 mb-3">Generar Tabla</button>
                <!-- Contenedor para mostrar resultados -->
                <div id="resultadoMultiplicar" class="bg-light p-2" style="min-height: 100px;"></div>
            </div>

            <!-- Columna: Potencias -->
            <div class="col-md-6 mb-4">
                <h4 class="text-center">Potencias</h4>
                <div class="mb-2">
                    <!-- Input para la base -->
                    <input type="number" class="form-control text-center" id="basePotencia" placeholder="Base">
                </div>
                <div class="mb-2">
                    <!-- Input para hasta qué exponente -->
                    <input type="number" class="form-control text-center" id="exponentePotencia" placeholder="Hasta qué exponente">
                </div>
                <!-- Botón para calcular potencias -->
                <button id="btnPotencia" class="btn btn-secondary w-100 mb-3">Calcular</button>
                <!-- Contenedor para mostrar resultados -->
                <div id="resultadoPotencia" class="bg-light p-2" style="min-height: 100px;"></div>
            </div>
        </div>
    </div>
</body>

</html>
