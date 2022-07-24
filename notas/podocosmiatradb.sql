create database podocosmiatradb;

use podocosmiatradb;

create table usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    clave VARCHAR(100) NOT NULL,
    activo TINYINT DEFAULT 1,
    fecha_alta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_modificacion TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
/*
insert into usuarios(email, clave) values ('admin@gmail.com', 'cac2022');

*/

CREATE TABLE contenidos (
  id_contenido INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(500) NOT NULL,
  imagen VARCHAR(500) NOT NULL,
  descripcion text NOT NULL,
  tipo CHAR(1) NOT NULL
);


/*
delete from contenidos
where id_contenido = 5;
*/
ALTER TABLE contenidos
    ADD fecha_alta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ADD fecha_modificacion TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
