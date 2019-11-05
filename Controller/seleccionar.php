<?php


    function seleccionar(){
        if (isset($_GET['id_producto'])) {
            $consultas = new Consultas();
            $id_pruducto = $_GET['id_producto'];

            $filas = $consultas->cargarProducto($id_pruducto);

            foreach ($filas as $fila) {
                echo '
                    <form action="Controller/modificarProducto.php" method="POST" class="form-modificar" name="actualizar">
                        <div>
                            <p>Nombre:</p>
                            <input type="text" name="nombre" value="'.$fila['nombre'].'" autofocus>
                        </div>
                        <div>
                            <p>Descripción:</p>
                            <textarea name="descripcion" cols="auto" rows="10">'.$fila['descripcion'].'</textarea>
                        </div>
                        <div>
                            <p>Categoria:</p>
                            <input type="text" name="categoria" value="'.$fila['categoria'].'">
                        </div>
                        <div>
                            <p>Precio:</p>
                            <input type="text" name="precio" value="'.$fila['precio'].'">
                        </div>
                        <div>
                            <input type="hidden" name="id_producto" value="'.$id_pruducto.'">
                        </div>
                        <div class="mt-m">
                            <a class="btn btn-cancel" href="productos.view.php">Cancelar <i class="fas fa-times"></i></a>
                            <a class="btn btn-ok" onClick="actualizar.submit()">Actualizar producto <i class="fas fa-undo"></i></a>
                        </div> 
                    </form>          
                ';
            }
        }
    }



?>