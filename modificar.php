<?php
    require 'Model/class.conexion.php';
    require 'Model/class.consultas.php';
    require 'Controller/seleccionar.php';
?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <meta name='theme-color' content='#181B32'/><!-- Cambiar Color de Navegador (Mobile) -->
    <link rel='icon' href='./static/img/favicon1.ico' type='image/png' sizes='16x16'><!-- Cargar Fvicon -->
    <title>Cargar productos PDO</title><!-- Título -->
    <script src='https://kit.fontawesome.com/c762757b32.js'></script><!-- Font Awesome -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i,700,900|Zilla+Slab:400,400i,600,700&display=swap' rel='stylesheet'> <!-- Google Fonts -->
    <link rel='stylesheet' href='./static/css/plaz-reset.css'><!-- Cargar PLAZreset -->
    <link rel='stylesheet' href='./static/css/conexion-pdo.css'><!-- Cargar Estilos CSS -->
</head>
<body>
    <main class="container">
        <div class="card mt-m box-shadow-s">
            <h1 class="card-header bg-gray-light">Modificar producto</h1>
            <div class="card-body">
                <?php
                    seleccionar();
                ?>
            </div>
        </div>
    </main>
</body>