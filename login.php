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
      <link rel='stylesheet' href='styles.css'>
   </head>
   <body>
      <div class='login'>
         <h1>Login</h1>
         <form action='login_validador.php' method='POST'>
            Usuario:
            <br>
            <input name='username' type='text' autofocus 
            placeholder='Ingrese root' value='root'>
            <br>
            Contraseña:
            <br>
            <input name='pass' type='password' 
            placeholder='Ingrese root' value='root'>
            <br>
            <input name='login' type='submit' value='Iniciar Sesion' class='boton'>
         </form>
      </div>

   </body>
</html>