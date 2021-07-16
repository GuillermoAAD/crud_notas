<?php 
//revisa si hay sesion activa, si si manda al index
session_start();
if (isset($_SESSION["id_usuario"])) {
   header('Location: index.php');
} 
?>

<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset='UTF-8'/>
      <title>Login</title>
   </head>
   <body>
      <div class='login'>
      <form action='login_validador.php' method='POST'>
         Usuario:
         <input name='username' type='text' autofocus>
         Contraseña:
         <input name='pass' type='text'>
         <input name='login' type='submit' value='Iniciar Sesion'>
      </form>
      </div>

   </body>
</html>