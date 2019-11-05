<?php session_start();

    require 'Model/class.conexion.php';
    require 'Model/class.consultas.php';
    require 'Controller/cargar.php';

    $_SESSION['mensaje']=false;
    
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
    <header class="mb-s"><!-- Sección Header -->
        <section class="buscador box-shadow-s">
            <div class="container">
                <form action="" method="GET" name="buscar">
                    <input type="text" name="buscar" class="buscar" placeholder="Buscar producto...">
                    <a onclick="buscar.submit()"><i class="fas fa-search btn btn-gray"></i></a>
                </form>
            </div>
        </section>
    </header>

    <?php if ($_SESSION['mensaje']): ?>
        <div class="msn msn-ok mt-s">
            <p><i class="fas fa-clipboard-check"></i> &nbsp;Se elimino correctamente el producto</p>
            <?php $_SESSION['mensaje']=false; ?>
        </div>
    <?php endif ?>

    <main class="container vm-m"><!-- Sección Principal -->
        <div class="card box-shadow-s mt-s">
            <?php
                if (isset($_GET['buscar'])) {
                    echo '<h1 class="card-header bg-gray-light color-disable">Resultado de busqueda: <span>"'.$_GET['buscar'].'"</span></h1>';
                } else {
                    echo '<h1 class="card-header bg-gray-light">Mis productos</h1>';
                }
                
            ?>
            <div class="card-body lista-productos">
                <?php
                    if (isset($_GET['buscar'])) {
                        buscar($_GET['buscar']);
                        // echo '<br /> Se ejecuto Buscar()';
                    } else {
                        cargar();
                        // echo 'Se ejecuto cargar()';
                    } 
                ?>
            </div>
            <div>
                <div class="card-footer">
                    <a href="index.php" class="btn btn-plaz"><i class="fas fa-arrow-left"></i>&nbsp;Agregar mas productos</a>
                <?php if (isset($_GET['buscar'])): ?>
                    <a href="productos.view.php" class="btn btn-primary">Ver todos los productos <i class="fas fa-list"></i></a>
                <?php endif ?>
                </div>
            </div>
        </div>
    </main>
    <footer><!-- Sección Footer -->

    </footer>
    <script src='#'></script><!-- Cargar Javascript -->
</body>
</html>