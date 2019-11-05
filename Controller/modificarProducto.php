<?php


    require '../Model/class.conexion.php';
    require '../Model/class.consultas.php';

    $consultas = new Consultas();
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $id_producto = $_POST['id_producto'];

    if (strlen($nombre)>0 && strlen($descripcion)>0 && strlen($categoria)>0 && strlen($precio)>0) {
        $msj = $consultas->modificarProducto('nombre', $nombre, $id_producto);
        $msj = $consultas->modificarProducto('descripcion', $descripcion, $id_producto);
        $msj = $consultas->modificarProducto('categoria', $categoria, $id_producto);
        $msj = $consultas->modificarProducto('precio', $precio, $id_producto);

        echo '<div class="container card box-shadow-s mt-m">';
            echo '<div class="card-body">';
                echo "<h1>$msj</h1>";
                echo '<a href="../productos.view.php" class="btn btn-plaz"><i class="fas fa-arrow-left"></i> Regresar a lista de procuctos</a>';
            echo '</div>';
        echo '</div>';
    }else {
        echo 'Error: Todos los campos son requeridos';
    }


?>

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <meta name='theme-color' content='#181B32'/><!-- Cambiar Color de Navegador (Mobile) -->
    <link rel='icon' href='../static/img/favicon1.ico' type='image/png' sizes='16x16'><!-- Cargar Fvicon -->
    <title>Cargar productos PDO</title><!-- Título -->
    <script src='https://kit.fontawesome.com/c762757b32.js'></script><!-- Font Awesome -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i,700,900|Zilla+Slab:400,400i,600,700&display=swap' rel='stylesheet'> <!-- Google Fonts -->
    <link rel='stylesheet' href='../static/css/plaz-reset.css'><!-- Cargar PLAZreset -->
    <link rel='stylesheet' href='../static/css/conexion-pdo.css'><!-- Cargar Estilos CSS -->
</head>