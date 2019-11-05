<?php


    require '../Model/class.conexion.php';
    require '../Model/class.consultas.php';

    if (!isset($_POST)) {
        header('Location: ../index.php');
    }else {
        $mensaje = null;
    
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        $descrpcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
        $categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
        $precio = $_POST['precio'];
    
        if (strlen($nombre) > 0 && strlen($descrpcion) > 0 && strlen($categoria) > 0 && strlen($precio) > 0) {
            $consulta = new Consultas();
            $mensaje = $consulta->insertarProductos($nombre, $descrpcion, $categoria, $precio);
            echo '<div class="container">';
                echo '<div class="card mt-s">';
                    echo '<a href="../index.php" class="btn btn-ok m-s">Agregar Nuevo Producto &nbsp;<i class="far fa-plus-square"></i></a><br />';
                    echo '<a href="../productos.view.php" class="btn btn-plaz m-s">Ver lista de productos &nbsp;<i class="fas fa-list"></i></a><br />';
                echo '</div>';
            echo '</div>';
        }
    
        echo "<div class='msn msn-info msn-agregado'>$mensaje &nbsp;<i class='fas fa-thumbs-up'></i></div>";
    }


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
    <link rel='stylesheet' href='../static/css/plaz-reset.css'><!-- Cargar PLAZreset -->
    <link rel='stylesheet' href='../static/css/conexion-pdo.css'><!-- Cargar Estilos CSS -->
</head>