<?php
//Script de conexion a mysql
$servidor = "127.0.0.1";
$usuario = "root";
$pass = "mysql";
$bd = "tienda_kiky";
$conexion = new mysqli($servidor,$usuario,$pass,$bd);

if($conexion -> connect_error){
    die("Error de conexion: " . $conexion -> connect_error);
}
?>