<?php 
include('conexion.php');

session_start();

$username = $_REQUEST['username'];
$pass = $_REQUEST['pass'];

$query = "SELECT * FROM usuario 
WHERE username='$username'AND pass='$pass' ";

$result = mysqli_query($conn, $query);

$numRows = mysqli_num_rows($result);

if ($numRows == 0) {
   //alerta si no coincide usuario y contrasena en bd
   echo "<script>
            alert('El usuario o la contraseña son incorrectos.');
            location.href = 'login.php';
        </script>";
} else {
   //extraigo el registro e inicio sesion 
   $row = mysqli_fetch_row($result);
   $id_usuario =$row[0];
   $_SESSION["id_usuario"] = $id_usuario;
   $_SESSION["username"] = $username;
   header('Location: index.php');
}

?>