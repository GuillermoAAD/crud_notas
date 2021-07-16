<?php include('conexion.php')?>

<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset='UTF-8'/>
      <title>Mis notas</title>
      <link rel='stylesheet' href='styles.css'/>
   </head>
   <body>

   <?php 
      $id_usuario = 1; //modificar despues en base al login
      $query = "SELECT *
      FROM nota
      WHERE id_usuario = '$id_usuario'";

      $result = mysqli_query($conn, $query);

      if(!isset($result)){
         echo "Error al obtener datos.";
      }
      $numRows = mysqli_num_rows($result);
   ?>

   <h1>Mis Notas: <?= $numRows?> </h1> <hr>

   <table>
      <tr>
         <td>
            TÍTULO
         </td>
         <td>
            DESCRIPCIÓN
         </td>
         <td>
            FECHA DE CREACION
         </td>
         <td>
            
         </td>
      </tr>

      <!--Para agregar nueva nota -->
      <tr>
         <form action='crear_nota.php' method='POST'>
            <td>
               <input name='titulo' type='text' placeholder='Escribe el título.' autofocus/>
            </td>
            <td>
               <textarea name='descripcion' rows='2' 
               placeholder='Ingresa una descripción.'></textarea>
            </td>
            <td>
               -------
            </td>
            <td>
               <input type='hidden' name='id_usuario' value='<?= $id_usuario ?>' />
               <!-- <?php echo "<a href='q.php'> " ?> -->
                  <input name='crear_nota' type='submit' value='Agregar Nota' >
               <!-- </a> -->
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
                  value='<?= $row['titulo'] ?>'/>
               </td>
               
               <td>
                  <textarea name='descripcion' rows='2' 
                  placeholder='Ingresa una descripción.'><?= $row['descripcion'] ?></textarea>
               </td>

               <td><?= $row['fecha'] ?></td>
            
               <td>
                  <input type='hidden' name='id_nota' value='<?= $id_nota ?>' />
                  <input type='hidden' name='id_usuario' value='<?= $id_usuario ?>' />
                  
                  <input name='actualizar_nota' type='submit' value='Actualizar' >
                  
                  <!--   <input type='button' value='Eliminar'>  -->
                  
               </td>
            </form>
               
         </tr>
      <?php } ?>
  
    </table>      
      
   </body>
</html>