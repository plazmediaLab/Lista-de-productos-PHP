<?php session_start();


    require '../Model/class.conexion.php';
    require '../Model/class.consultas.php';

    // $mensaje = null;

    if (isset($_GET['id_producto'])) {
        $id_producto = $_GET['id_producto'];

        $execute = new Consultas();
        $execute->eliminarProducto($id_producto);

        $_SESSION['mensaje']=true;
        header('Location: ../productos.view.php');
    }


?>