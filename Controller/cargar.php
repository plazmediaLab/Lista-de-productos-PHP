<?php


    function cargar(){
        $consultas = new Consultas();
        $filas = $consultas->cargarProductos();

        echo '<table>
            <tr class="head-producto">
                <th>Nº</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>';

        $conteo = 1;

        foreach ($filas as $fila) {
            echo '<tr class="fila-producto">';
                echo '<td class="dato-producto">'.$conteo++.'</td>';
                // echo '<td class="dato-producto">'.$fila['id_producto'].'</td>';
                echo '<td class="dato-producto" width="150">'.$fila['nombre'].'</td>';
                echo '<td class="dato-producto" width="500" height="1">'.$fila['descripcion'].'</td>';
                echo '<td class="dato-producto">'.$fila['categoria'].'</td>';
                echo '<td class="dato-producto txt-r" width="100">'.'<b>$ '.$fila['precio'].'</b></td>';
                echo '<td class="dato-producto txt-r"><a href="modificar.php?id_producto='.$fila['id_producto'].'" class="btn-s btn-ok"><i class="fas fa-edit"></i></a></td>';
                echo '<td class="dato-producto txt-r"><a href="Controller/eliminar.php?id_producto='.$fila['id_producto'].'" class="btn-s btn-cancel"><i class="fas fa-trash-alt"></i></a></td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    function buscar($nombre){
        $consultas = new Consultas();
        $filas = $consultas->buscarProductos($nombre);

        $conteo = 1;

        echo '<table>
            <tr class="head-producto">
                <th>Nº</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>';

        if (isset($filas)) {
            foreach ($filas as $fila) {
                echo '<tr class="fila-producto">';
                    echo '<td class="dato-producto">'.$conteo++.'</td>';
                    // echo '<td class="dato-producto">'.$fila['id_producto'].'</td>';
                    echo '<td class="dato-producto" width="150">'.$fila['nombre'].'</td>';
                    echo '<td class="dato-producto" width="500" height="1">'.$fila['descripcion'].'</td>';
                    echo '<td class="dato-producto">'.$fila['categoria'].'</td>';
                    echo '<td class="dato-producto txt-r" width="100">'.'<b>$ '.$fila['precio'].'</b></td>';
                    echo '<td class="dato-producto txt-r"><a href="modificar.php?id_producto='.$fila['id_producto'].'" class="btn-s btn-ok"><i class="fas fa-edit"></i></a></td>';
                    echo '<td class="dato-producto txt-r"><a href="Controller/eliminar.php?id_producto='.$fila['id_producto'].'" class="btn-s btn-cancel"><i class="fas fa-trash-alt"></i></a></td>';
                echo '</tr>';
            }
        }
        echo '</table>';
    }


?>