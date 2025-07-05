<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
</head>
<body style="background-color: #f8f9fa;">
  <div class="container mt-5">
    <h1 class="text-center mb-4">¡Bienvenido!</h1>
    <p class="lead text-center">Selecciona una categoría para ver los productos:</p>

    <ul>
      <li><a href="<?= base_url('zapatos/1') ?>">Zapatos Deportivos</a></li>
      <li><a href="<?= base_url('zapatos/2') ?>">Zapatos Casuales</a></li>
      <li><a href="<?= base_url('vestidos/1') ?>">Vestidos de Fiesta</a></li>
      <li><a href="<?= base_url('vestidos/2') ?>">Vestidos Formales</a></li>
      <li><a href="<?= base_url('carteras/1') ?>">Carteras de Mano</a></li>
      <li><a href="<?= base_url('carteras/2') ?>">Carteras de Hombro</a></li>
    </ul>

    <p class="mt-5"><a href="<?= base_url('login/logout') ?>">Cerrar Sesión</a></p>
  </div>
</body>
</html>
