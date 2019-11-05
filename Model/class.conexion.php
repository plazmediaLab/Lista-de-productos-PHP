<?php


    class Conexion{
        public function get_conexion(){
            // $user = 'root';
            // $pass = 'root';
            // $host = 'localhost';
            // $db = 'pdo_practica';

            $user = 'puntowe1_plaz';
            $pass = '10.plaz.01';
            $host = 'localhost';
            $db = 'puntowe1_plazmedia';

            $conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }
    }


?>