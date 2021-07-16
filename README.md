# crud_notas

Es un sitema CRUD de notas.


### Base de Datos

Para que funcione correctamente se debe cargar la Base de Datos.

La Base de Datos contiene las tablas usuario y nota.

- Tabla usuario:

  - Contiene los campos id_usuario, username y pass.
  - Tiene precargados 2 usuarios (debido a que no incluí pagina de registro).
  - Los username precargados son root y user, y las contraseñas son sus respectivos username.

- Tabla nota
  - Contiene los campos id_nota, titulo, descripcion, fecha, id_usuario.
  - id_usuario es clave foranea e identifica que notas pertenecen a determinado usuario.
  

### Cargar Base de Datos

Hay 2 opciones:

- Copiar y pegar en la terminal sql todos los comandos del archivo "comandos_bd.sql".
- O importar la bd con el archivo "db_notas.sql"


### Login

Por defecto carga el usuario y la contraseña de root, pero se puede borrar.

Hice uso de sesiones, por lo que si no se ha iniciado sesion mandara a la pagina del login.

![Login](https://github.com/GuillermoAAD/crud_notas/blob/master/Capturas/1.png)

### Index

En la pagina principal se hacer todo
- En la parte superior se muestra el usuario y el numero de notas que tiene, ademas la opción de salir.
- Debajo de eso se muestra el listado con todas las notas, y las opciones para agregar, editar o borrarlas.

![Index sin notas](https://github.com/GuillermoAAD/crud_notas/blob/master/Capturas/2.png)
![Index con notas](https://github.com/GuillermoAAD/crud_notas/blob/master/Capturas/3.png)

