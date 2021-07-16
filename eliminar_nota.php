<?php 
include('conexion.php');

$id_nota = $_REQUEST['id_nota'];

$query = "DELETE FROM nota WHERE id_nota='$id_nota'";

$result = mysqli_query($conn, $query);

header('Location: index.php');

?>