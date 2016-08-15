CREATE DATABASE proyecto
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;
USE proyecto;
CREATE TABLE usuario
(usuario VARCHAR(30) NOT NULL PRIMARY KEY,
clave VARCHAR(30) NOT NULL);

CREATE TABLE enfasis
(id_enfasis INT auto_increment PRIMARY KEY,
descripcion VARCHAR(20));

CREATE TABLE persona
(id_persona INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(20),
apellido1 VARCHAR(20),
apellido2 VARCHAR(20),
fechaNacimiento DATE,
correo VARCHAR(30),
usuario VARCHAR(30),
profileImg VARCHAR(100),
id_enfasis INT,
FOREIGN KEY (usuario) REFERENCES usuario(usuario),
FOREIGN KEY (id_enfasis) REFERENCES enfasis(id_enfasis));

CREATE TABLE tipoTelefono
(id_tipoTelefono INT AUTO_INCREMENT PRIMARY KEY,
descripcion VARCHAR (20));

CREATE TABLE telefono 
(telefono INT,
id_tipoTelefono INT, 
FOREIGN KEY (id_tipoTelefono) REFERENCES tipoTelefono(id_tipoTelefono),
id_persona INT,
FOREIGN KEY (id_persona) REFERENCES persona(id_persona));

CREATE TABLE estudios
(id_estudio INT AUTO_INCREMENT PRIMARY KEY,
id_persona INT, 
FOREIGN KEY (id_persona) REFERENCES persona(id_persona),
descripcion VARCHAR(50)
);

CREATE TABLE pasatiempo 
(id_pasatiempo INT AUTO_INCREMENT PRIMARY KEY,
id_persona INT,
FOREIGN KEY (id_persona) REFERENCES persona(id_persona),
descripcion VARCHAR(30),
img VARCHAR(100));

CREATE TABLE proyecto 
(id_proyecto INT AUTO_INCREMENT PRIMARY KEY,
id_persona INT,
FOREIGN KEY (id_persona) REFERENCES persona(id_persona),
nombre VARCHAR(20),
descripcion VARCHAR(30),
img VARCHAR(100));
