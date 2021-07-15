  
<?php

$host = 'localhost';
$user_bd = 'root';
$pass_bd = '';
$bd = 'db_notas';
 
$conn = mysqli_connect($host, $user_bd, $pass_bd, $bd);

if (!isset($conn)) {
   echo "Error al conectar al Servidor de BD.";
}


?>