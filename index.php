<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <meta name='theme-color' content='#181B32'/><!-- Cambiar Color de Navegador (Mobile) -->
    <link rel='icon' href='./static/img/favicon1.ico' type='image/png' sizes='16x16'><!-- Cargar Fvicon -->
    <title>Insertar datos PDO</title><!-- Título -->
    <script src='https://kit.fontawesome.com/c762757b32.js'></script><!-- Font Awesome -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i,700,900|Zilla+Slab:400,400i,600,700&display=swap' rel='stylesheet'> <!-- Google Fonts -->
    <link rel='stylesheet' href='./static/css/plaz-reset.css'><!-- Cargar PLAZreset -->
    <link rel='stylesheet' href='./static/css/conexion-pdo.css'><!-- Cargar Estilos CSS -->
</head>
<body>
    <header><!-- Sección Header -->
        
    </header>
    <main class="container vm-m"><!-- Sección Principal -->
        <div class="card box-shadow-s">
            <h1 class="card-header bg-gray-light">Insertar productos</h1>
            <form action="./Controller/insertar.php" method="POST" class="card-body" onsubmit="return validar();">
                    <div>
                        <p>Nombre:</p>
                        <input type="text" name="nombre" id="nombre" autofocus onchange="activar()">
                    </div>
                    <div>
                        <p>Descripción:</p>
                        <textarea name="descripcion" cols="auto" rows="10" id="descripcion" onchange="activar()"></textarea>
                    </div>
                    <div>
                        <p>Categoria:</p>
                        <input type="text" name="categoria" id="categoria" onchange="activar()">
                    </div>
                    <div>
                        <p>Precio:</p>
                        <input type="number" step="0.01" name="precio" id="precio" onchange="activar()">
                    </div>
                    <div>
                        <input type="submit" value="Registrar Producto" class="btn btn-ok" id="btn-submit" disabled>
                    </div>         
            </form>
            <div class="card-footer">
                <a href="productos.view.php">Lista de productos &nbsp;<i class="fas fa-list"></i></a>
            </div>
        </div>
    </main>
    <footer><!-- Sección Footer -->

    </footer>
    <script src='./js/main.js'></script><!-- Cargar Javascript -->
</body>
</html>