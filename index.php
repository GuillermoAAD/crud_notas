<?php 
//revisa si hay sesion activa, si no manda al login
session_start();
if (!isset($_SESSION["id_usuario"])) {
   header('Location: login.php');
}

//Inicia conexion a bd
include('conexion.php')
?>

<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset='UTF-8'/>
      <title>Mis notas</title>
      <link rel='stylesheet' href='styles.css'/>
   </head>
   <body>

   <?php 
      $id_usuario = $_SESSION["id_usuario"];
      $username = $_SESSION["username"];
      $query = "SELECT *
      FROM nota
      WHERE id_usuario = '$id_usuario'";

      $result = mysqli_query($conn, $query);

      if(!isset($result)){
         echo "Error al obtener datos.";
      }
      $numRows = mysqli_num_rows($result);
   ?>

   <div class='cabecera'>
      <div class='contador'>
      <h1>Notas de <?=$username?>: <?= $numRows?>  </h1> 
      </div>
      <div class='logout'>
         <a href='logout.php'>Salir.</a>
      </div>
   </div>

   <hr>

   <table>
      <tr>
         <th>
            TÍTULO
         </th>
         <th>
            DESCRIPCIÓN
         </th>
         <th>
            FECHA DE CREACION
         </th>
         <th colspan='2'>
         </th>
      </tr>

      <!--Para agregar nueva nota -->
      <tr>
         <form action='crear_nota.php' method='POST'>
            <td>
               <input name='titulo' type='text' placeholder='Escribe el título.' 
               autofocus class='titulo'/>
            </td>
            <td>
               <textarea name='descripcion' rows='2' 
               placeholder='Ingresa una descripción.' class='descripcion'></textarea>
            </td>
            <td>
               -------
            </td>
            <td colspan='2' class='td-btn'>
               <input type='hidden' name='id_usuario' value='<?= $id_usuario ?>' />
                  <input name='crear_nota' type='submit' value='Agregar Nota'
                  class='boton'>
            </td>
         </form>
      </tr>
   

      <?php
      while( $row = mysqli_fetch_array($result) ) { ?>
         <tr>
            <form action='actualizar_nota.php' method='POST'>
               <?php 
               $id_nota = $row['id_nota']; 
               $fecha = $row['fecha'];
               ?>
               
               <td> 
                  <input name='titulo' type='text' placeholder='Escribe el título.' 
                  value='<?= $row['titulo'] ?>' class='titulo'/>
               </td>
               
               <td> 
                  <textarea name='descripcion' rows='2' 
                  placeholder='Ingresa una descripción.' 
                  class='descripcion'><?= $row['descripcion'] ?></textarea>
               </td>

               <td><?= $row['fecha'] ?></td>
            
               <td class='td-btn'>
                  <input type='hidden' name='id_nota' value='<?= $id_nota ?>' />
                  <input name='actualizar_nota' type='submit' value='Actualizar' 
                  class='boton btn-verde'>
               </td>
            </form>

            <td class='td-btn'>
               <form action='eliminar_nota.php' method='POST'>
                  <input type='hidden' name='id_nota' value='<?= $id_nota ?>' />
                  <input name='eliminar_nota' type='submit' value='Eliminar' 
                  class='boton btn-rojo'>
               </form>
            </td>
               
         </tr>
      <?php } ?>
  
    </table>      
      
   </body>
</html>