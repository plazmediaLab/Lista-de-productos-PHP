<?php

// require 'class.conexion.php';

    class Consultas{
        // Función para incertar productos
        public function insertarProductos($arg_nombre, $arg_descripcion, $arg_categoria, $arg_precio){
            $model = new Conexion();
            $conexion = $model->get_Conexion();
            $sql = "INSERT INTO productos (nombre, descripcion, categoria, precio) VALUES (:nombre, :descripcion, :categoria, :precio)";

            $statement = $conexion->prepare($sql);
            $statement->bindParam(':nombre', $arg_nombre);
            $statement->bindParam(':descripcion', $arg_descripcion);
            $statement->bindParam(':categoria', $arg_categoria);
            $statement->bindParam(':precio', $arg_precio);

            if (!$statement) {
                echo 'Error al crear el registro';
            }else {
                $statement->execute();
                return 'Registro creado correctamente';
            }
        }

        // Función para cargar todos los productos
        public function cargarProductos(){
            $rows = null;

            $model = new Conexion();
            $conexion = $model->get_Conexion();
            $sql = "SELECT * FROM productos";

            $statement = $conexion->prepare($sql);
            $statement->execute();

            while($result = $statement->fetch()){
                $rows[] = $result;
            }

            return $rows;
        }

        // Función para eliminar producto
        public function eliminarProducto($arg_id_producto){
            $model = new Conexion();
            $conexion = $model->get_Conexion();
            $sql = "DELETE FROM productos WHERE id_producto = :id_producto";

            $statement = $conexion->prepare($sql);
            $statement->execute(array(
                ':id_producto' => $arg_id_producto
            ));
        }

        // Función para buscar producto(s)
        public function buscarProductos($arg_nombre){
            $rows = null;

            $model = new Conexion();
            $conexion = $model->get_Conexion();
            $nombre = "%".$arg_nombre."%";
            $sql = "SELECT * FROM productos WHERE nombre LIKE :nombre";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(":nombre", $nombre);
            $statement->execute();

            while($result = $statement->fetch()){
                $rows[] = $result;
            }

            return $rows;
        }

        // Función para cargar el producto a modificar
        public function cargarProducto($arg_id_producto){
            $row = null;
            
            $model = new Conexion();
            $conexion = $model->get_conexion();
            $sql = "SELECT * FROM productos WHERE id_producto = :id_producto";

            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id_producto', $arg_id_producto);
            $statement->execute();

            while ($result = $statement->fetch()) {
                $rows[] = $result;
            }

            return $rows;
        }

        // Función para actualizar el producto modificado
        public function modificarProducto($arg_campo, $arg_valor, $arg_id_producto){
            $model = new Conexion();
            $conexion = $model->get_conexion();
            $sql = "UPDATE productos SET $arg_campo = :valor WHERE id_producto = :id_producto";

            $statement = $conexion->prepare($sql);
            $statement->bindParam(":valor", $arg_valor);
            $statement->bindParam(":id_producto", $arg_id_producto);

            if (!$statement) {
                return 'Error al modificar el producto';
            } else {
                $statement->execute();
                return 'Producto modificado exitosamente';
            }
        }
    }

// Ejecutar insertarProductos() ------------------------------------------------------
    // $insertar = new Consultas();
    // $resultado_ins = $insertar->insertarProductos('Control', 'Prueba', 'electronicos', 531);
    // echo var_dump($resultado_ins);

// Ejecutar cargarProductos() ------------------------------------------------------
    // $cargar = new Consultas();
    // $resultado_car = $cargar->cargarProductos();

    // echo '<pre>';
    //     echo print_r($resultado_car);
    // echo '</pre>';

// Ejecutar eliminarProducto() ------------------------------------------------------
    // $id_producto_a_borrar = 29;
    // echo "Se elimino el producto con el ID : $id_producto_a_borrar";

    // $eliminar = new Consultas();
    // $resultado_eli = $eliminar->eliminarProducto($id_producto_a_borrar);

// Ejecutar buscarProductos() ------------------------------------------------------
    // $buscar = new Consultas();
    // $resultado_bus = $buscar->buscarProductos('celular');

    // echo '<pre>';
    //     echo var_dump($resultado_bus);
    // echo '</pre>';
?>