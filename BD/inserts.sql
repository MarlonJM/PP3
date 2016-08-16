INSERT INTO `enfasis` (`id_enfasis`, `descripcion`) VALUES (NULL,'Dise&ntilde;ador');
INSERT INTO `enfasis` (`id_enfasis`, `descripcion`) VALUES (NULL,'Desarrollador');

INSERT INTO `usuario`(`usuario`, `clave`, `id_persona`)  VALUES ('Pagui', 'paola',1);
INSERT INTO `usuario`(`usuario`, `clave`, `id_persona`)  VALUES ('Kate', 'katherinne',2);
INSERT INTO `usuario`(`usuario`, `clave`, `id_persona`)  VALUES ('MarlonJM', 'marlon',3);
INSERT INTO `usuario`(`usuario`, `clave`, `id_persona`)  VALUES ('Sershock', 'sergio',4);

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `profileImg`, `id_enfasis`, `acerca`) VALUES(1, 'Paola', 'Aguirre', 'M&eacute;ndez', '1997-06-04', 'paguimendez@hotmail.com', 'profile2.png', 1, NULL);
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `profileImg`, `id_enfasis`, `acerca`) VALUES(2, 'Katherinne', 'God&iacute;nez', 'D&iacute;az', '1994-12-28', 'kategd@hotmail.com', 'profile2.png', 2, NULL);
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `profileImg`, `id_enfasis`, `acerca`) VALUES(3, 'Marlon', 'Jarqu&iacute;n', 'Mu&ntilde;oz', '1995-08-16', 'marlonjarquin@hotmail.com', 'profile.jpg', 2, NULL);
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `profileImg`, `id_enfasis`, `acerca`) VALUES(4, 'Sergio', 'Chang', 'Mu&ntilde;oz', '1996-11-25', 'sergioxd@hotmail.com', 'profile.jpg', 1, NULL);

INSERT INTO `tipotelefono` (`id_tipoTelefono`, `descripcion`) VALUES ('1', 'movil');
INSERT INTO `tipotelefono` (`id_tipoTelefono`, `descripcion`) VALUES ('2', 'trabajo');
INSERT INTO `tipotelefono` (`id_tipoTelefono`, `descripcion`) VALUES ('3', 'casa');

INSERT INTO `telefono`(`telefono`, `id_tipoTelefono`, `id_persona`) VALUES (86155941,1,1);
INSERT INTO `telefono`(`telefono`, `id_tipoTelefono`, `id_persona`) VALUES (85972520,1,2);
INSERT INTO `telefono`(`telefono`, `id_tipoTelefono`, `id_persona`) VALUES (60670585,1,3);
INSERT INTO `telefono`(`telefono`, `id_tipoTelefono`, `id_persona`) VALUES (89563064,1,4);