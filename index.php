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
      $query = "SELECT *
      FROM nota";

      $result = mysqli_query($conn, $query);

      if(!isset($result)){
         echo "Error al obtener datos.";
      }
      $numRows = mysqli_num_rows($result);
   ?>

   

   <table class='table'>
      <tr>
         <td colspan='6' >
            <h1 class='numAdmins'>Notas: <?= $numRows?> </h1> <hr>
         </td>
      </tr>
      <tr>
                     <!--<td></td>-->
         <td colspan='6'>
            <a href='formulario_insertarProducto.php'> 
               <input class='btnListado inserta' type='button' value='Agregar un nuevo Producto' > 
            </a>
         </td>
      </tr>
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


      <?php
      while( $row = mysqli_fetch_array($result) ) { ?>
         <tr>
            <td><?= $row['titulo'] ?></td>
            <td><?= $row['descripcion'] ?></td>
            <td><?= $row['fecha'] ?></td>
         
            <?php $id= $row['id_nota']; ?>
         
            <td>
               <?php echo "<a href='formulario_modificaProducto.php?id=$id'> " ?>
                  <input class='btnListado modifica' type='button' value='Modificar' >
               </a>
                     
               <?php echo "<a href='eliminaProducto.php?id=$id'> " ?>
                  <input class='btnListado elimina' type='button' value='Eliminar'> 
               </a>
            </td>
               
         </tr>
      <?php } ?>
  
    </table>      
      
   </body>
</html>