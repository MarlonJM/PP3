INSERT INTO `enfasis` (`id_enfasis`, `descripcion`) VALUES (NULL,'Dise�ador');
INSERT INTO `enfasis` (`id_enfasis`, `descripcion`) VALUES (NULL,'Desarrollador');

INSERT INTO `usuario` (`usuario`, `contrase�a`) VALUES ('MarlonJM', 'marlon');
INSERT INTO `usuario` (`usuario`, `contrase�a`) VALUES ('Pagui', 'paola');
INSERT INTO `usuario` (`usuario`, `contrase�a`) VALUES ('Sershock', 'sergio');
INSERT INTO `usuario` (`usuario`, `contrase�a`) VALUES ('Kate', 'katherinne');


INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `usuario`, `profileImg`, `id_enfasis`) VALUES (NULL, 'Katherinne', 'God�nez', 'D�az', '1994-12-28', 'kategd@hotmail.com', 'Kate', 'profile2.png', '1');
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `usuario`, `profileImg`, `id_enfasis`) VALUES (NULL, 'Marlon', 'Jarqu�n', 'Mu�oz', '1995-08-16', 'marlonjarquin@hotmail.com', 'MarlonJM', 'profile.jpg', '2');
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `usuario`, `profileImg`, `id_enfasis`) VALUES (NULL, 'Sergio', 'Chang', 'Mu�oz', '1996-11-25', 'sergioxd@hotmail.com', 'Sershock', 'profile.jpg', '1');

