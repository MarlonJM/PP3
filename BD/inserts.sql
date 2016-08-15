INSERT INTO `enfasis` (`id_enfasis`, `descripcion`) VALUES (NULL,'Dise&ntilde;ador');
INSERT INTO `enfasis` (`id_enfasis`, `descripcion`) VALUES (NULL,'Desarrollador');

INSERT INTO `usuario` (`usuario`, `clave`) VALUES ('MarlonJM', 'marlon');
INSERT INTO `usuario` (`usuario`, `clave`) VALUES ('Pagui', 'paola');
INSERT INTO `usuario` (`usuario`, `clave`) VALUES ('Sershock', 'sergio');
INSERT INTO `usuario` (`usuario`, `clave`) VALUES ('Kate', 'katherinne');

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `usuario`, `profileImg`, `id_enfasis`) VALUES (NULL, 'Paola', 'Aguirre', 'M&eacute;ndez', '1997-06-04', 'paguimendez@hotmail.com', 'Pagui', 'profile2.png', '1');
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `usuario`, `profileImg`, `id_enfasis`) VALUES (NULL, 'Katherinne', 'God&iacute;nez', 'D&iacute;az', '1994-12-28', 'kategd@hotmail.com', 'Kate', 'profile2.png', '2');
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `usuario`, `profileImg`, `id_enfasis`) VALUES (NULL, 'Marlon', 'Jarqu&iacute;n', 'Mu&ntilde;oz', '1995-08-16', 'marlonjarquin@hotmail.com', 'MarlonJM', 'profile.jpg', '2');
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `usuario`, `profileImg`, `id_enfasis`) VALUES (NULL, 'Sergio', 'Chang', 'Mu&ntilde;oz', '1996-11-25', 'sergioxd@hotmail.com', 'Sershock', 'profile.jpg', '1');

