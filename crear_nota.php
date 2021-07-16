<?php 
include('conexion.php');

$titulo = $_REQUEST['titulo'];
$descripcion = $_REQUEST['descripcion'];
$id_usuario = $_REQUEST['id_usuario'];

$query = "INSERT INTO nota(id_nota, titulo, descripcion, fecha, id_usuario) 
VALUES (NULL, '$titulo', '$descripcion', current_timestamp(), '$id_usuario')";

$result = mysqli_query($conn, $query);

header('Location: index.php');

?>