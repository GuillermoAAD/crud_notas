<?php 
include('conexion.php');

$id_nota = $_REQUEST['id_nota'];
$titulo = $_REQUEST['titulo'];
$descripcion = $_REQUEST['descripcion'];
$id_usuario = $_REQUEST['id_usuario'];

$query = "UPDATE nota SET titulo='$titulo', 
descripcion='$descripcion'
WHERE id_nota='$id_nota'";

$result = mysqli_query($conn, $query);

header('Location: index.php');

?>