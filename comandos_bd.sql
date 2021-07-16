CREATE DATABASE db_notas;

CREATE TABLE db_notas.usuario
(id_usuario INT NOT NULL AUTO_INCREMENT , 
username VARCHAR(20) NOT NULL , 
pass VARCHAR(20) NOT NULL , 
PRIMARY KEY (id_usuario) );
 
INSERT INTO usuario
(id_usuario, username, pass) 
VALUES (NULL, 'root', 'root');

INSERT INTO usuario
(id_usuario, username, pass) 
VALUES (NULL, 'user', 'user');

CREATE TABLE db_notas.nota
(id_nota INT NOT NULL AUTO_INCREMENT, 
titulo VARCHAR(50), 
descripcion TEXT, 
fecha DATE NOT NULL DEFAULT CURRENT_TIMESTAMP, 
id_usuario INT NOT NULL, 
PRIMARY KEY (id_nota),
FOREIGN KEY (id_usuario)
        REFERENCES db_notas.usuario(id_usuario)
        ON DELETE CASCADE
        ON UPDATE NO ACTION);

INSERT INTO nota
(id_nota, titulo, descripcion, fecha, id_usuario) 
VALUES (NULL, 'Nota 1', 'Una nota', current_timestamp(), 1);

