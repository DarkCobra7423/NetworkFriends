-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2020 a las 17:47:42
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `NetworkFriends`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `friends`
--

CREATE TABLE `friends` (
  `idfirends` int(11) NOT NULL,
  `my_id` int(11) NOT NULL,
  `idmembers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `friends`
--

INSERT INTO `friends` (`idfirends`, `my_id`, `idmembers`) VALUES
(1, 1, 5),
(2, 1, 4),
(3, 1, 3),
(4, 1, 2),
(5, 2, 1),
(6, 2, 5),
(7, 2, 3),
(8, 2, 4),
(9, 3, 1),
(10, 3, 2),
(11, 3, 4),
(12, 3, 5),
(13, 4, 1),
(14, 4, 2),
(15, 4, 3),
(16, 4, 5),
(17, 5, 1),
(18, 5, 2),
(19, 5, 3),
(20, 5, 4),
(21, 1, 6),
(22, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE `members` (
  `idmembers` int(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `country` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `gender` varchar(9) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `image` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `birthdate` date NOT NULL,
  `mobile` varchar(13) CHARACTER SET utf8mb4 DEFAULT NULL,
  `status` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `religion` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `IdTipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`idmembers`, `firstname`, `lastname`, `country`, `email`, `gender`, `username`, `password`, `image`, `birthdate`, `mobile`, `status`, `religion`, `IdTipoUsuario`) VALUES
(1, 'Carlos Daniel', 'Angel Padilla', 'Mexico', 'carlosdanielangelpadilla@gmail.com', 'Masculino', 'carlos', 'carlos', 'images/carlos.jpeg', '2020-11-11', '123123213', 'Activo', NULL, 3),
(2, 'Yesenia', 'Diaz Hernandez', 'Mexico', 'yesi@gmail.com', 'Femenino', 'yesi', 'yesi', 'images/yesi.jpeg', '2020-11-10', '3232423432', 'Activo', NULL, 3),
(3, 'Marisol', 'Angel Padilla', 'Mexico', 'mari@gmail.com', 'Femenino', 'mari', 'mari', 'https://scontent.fmtt1-1.fna.fbcdn.net/v/t1.0-9/130259316_1574152512972404_877180100280679757_o.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_ohc=sRu1JCdcZqMAX-N-abg&_nc_ht=scontent.fmtt1-1.fna&oh=fd6b84346c8685ba23786196262bda9e&oe=5FFD1BFD', '2020-11-10', '3213213312', 'Inactivo', NULL, 3),
(4, 'Maria Guadalupe', 'Gordillo Hernandez', 'Mexico', 'gudez@gmail,com', 'Femenino', 'Godez', 'godez', 'images/godez.jpeg', '2020-11-11', '34324323432', 'Inactivo', NULL, 3),
(5, 'Guadalupe', 'Vazquez Rivera', 'Mexico', 'blackcobra@gmail.com', 'Masculino', 'black', 'black', 'https://scontent.fmtt1-1.fna.fbcdn.net/v/t1.0-9/26814969_1791187441186213_8322541905814047653_n.jpg?_nc_cat=108&ccb=2&_nc_sid=09cbfe&_nc_ohc=U3dOyAkZVNUAX96jWmg&_nc_ht=scontent.fmtt1-1.fna&oh=416208734ae275a8666e2121232ca444&oe=5FFBF27F', '2020-11-16', '2132312322', 'Activo', NULL, 3),
(6, 'Martha', 'Padilla Espinoza', 'Mexico', 'marthapadillaespinoza@gmail.com', 'Femenino', 'matina', 'matina', NULL, '1976-06-01', '9341138138', 'Activo', NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
  `idmessage` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_idmembers` int(11) NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `data_sended` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `message`
--

INSERT INTO `message` (`idmessage`, `sender_id`, `receiver_idmembers`, `content`, `data_sended`) VALUES
(1, 1, 2, 'hola yesi', '2020-11-25 11:09:14'),
(2, 1, 3, 'hola mari', '2020-11-23 11:09:14'),
(3, 1, 4, 'hola godez', '2020-11-30 11:10:44'),
(4, 1, 5, 'hola black', '2020-11-24 11:10:44'),
(5, 2, 1, 'hola sda', '2020-11-24 11:12:19'),
(6, 2, 3, 'holasdda', '2020-11-24 11:12:19'),
(7, 2, 4, 'hola dasdas', '2020-11-24 11:13:08'),
(8, 2, 5, 'holaasdasdwd', '2020-11-24 11:13:08'),
(9, 3, 1, 'que tal', '2020-11-24 11:15:19'),
(10, 3, 2, 'que tal', '2020-11-24 11:14:03'),
(11, 3, 4, 'que tal', '2020-11-30 11:15:19'),
(12, 3, 5, 'que tal', '2020-11-24 11:15:19'),
(13, 4, 1, 'mucho gusto', '2020-11-24 11:16:50'),
(14, 4, 2, 'hey', '2020-11-24 11:16:50'),
(15, 4, 3, 'dsadsad', '2020-11-24 11:17:36'),
(16, 4, 5, 'hey que tal', '2020-11-24 11:17:36'),
(17, 5, 1, 'hola', '2020-11-11 11:18:31'),
(18, 5, 2, 'hey', '2020-11-30 11:18:31'),
(19, 5, 3, 'hey que tal', '2020-11-24 11:19:12'),
(20, 5, 4, 'hey como estas', '2020-11-24 11:19:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photos`
--

CREATE TABLE `photos` (
  `idphotos` int(11) NOT NULL,
  `location` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `idmembers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `photos`
--

INSERT INTO `photos` (`idphotos`, `location`, `idmembers`) VALUES
(1, '/icon/images.png', 1),
(2, '/icon/images1.png', 2),
(3, '/icon/images3.png', 3),
(4, '/icon/images4.png', 4),
(5, '/icon/images5.png', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `idmembers` int(11) NOT NULL,
  `header` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `images` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `footer` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`idpost`, `idmembers`, `header`, `images`, `footer`, `date_posted`) VALUES
(11, 1, 'Hola chicos buenos dias', 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2020/03/halo-combat-evolved-1883141.jpg', NULL, '2020-11-24 11:24:54'),
(12, 2, 'lista para comenzar un nuevo dia', 'https://concepto.de/wp-content/uploads/2015/03/naturaleza-medio-ambiente-e1505407093531-1.jpeg', NULL, '2020-11-24 11:24:54'),
(13, 3, 'chicos necesito ayuada', 'https://revo300.academy/wp-content/uploads/2019/12/blur-close-up-code-computer-546819-1080x675.jpg', NULL, '2020-11-24 11:27:09'),
(14, 4, 'villahermosa bajo el agua', 'https://www.elheraldodetabasco.com.mx/local/sb2p5b-1.jpg/ALTERNATES/LANDSCAPE_400/1.jpg', 'tabasco hoy-buscan desalojar mas agua del grijalva', '2020-11-24 11:27:09'),
(15, 5, 'Dia fitness o como se escriba', '', NULL, '2020-11-24 11:27:09');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_friends`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_friends` (
`my_id` int(11)
,`idmembers` int(11)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`country` varchar(60)
,`image` varchar(300)
,`status` varchar(8)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_message`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_message` (
`idmessage` int(11)
,`sender_id` int(11)
,`receiver_idmembers` int(11)
,`content` text
,`data_sended` datetime
,`my_id` int(11)
,`idmembers` int(11)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`image` varchar(300)
,`status` varchar(8)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_post`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_post` (
`idmembers` int(11)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`image` varchar(300)
,`header` varchar(1000)
,`images` varchar(500)
,`footer` varchar(50)
,`date_posted` datetime
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_friends`
--
DROP TABLE IF EXISTS `vw_friends`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_friends`  AS SELECT `friends`.`my_id` AS `my_id`, `friends`.`idmembers` AS `idmembers`, `members`.`firstname` AS `firstname`, `members`.`lastname` AS `lastname`, `members`.`country` AS `country`, `members`.`image` AS `image`, `members`.`status` AS `status` FROM (`friends` join `members` on(`friends`.`idmembers` = `members`.`idmembers`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_message`
--
DROP TABLE IF EXISTS `vw_message`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_message`  AS SELECT `message`.`idmessage` AS `idmessage`, `message`.`sender_id` AS `sender_id`, `message`.`receiver_idmembers` AS `receiver_idmembers`, `message`.`content` AS `content`, `message`.`data_sended` AS `data_sended`, `friends`.`my_id` AS `my_id`, `friends`.`idmembers` AS `idmembers`, `members`.`firstname` AS `firstname`, `members`.`lastname` AS `lastname`, `members`.`image` AS `image`, `members`.`status` AS `status` FROM ((`members` join `friends` on(`friends`.`idmembers` = `members`.`idmembers`)) join `message` on(`message`.`receiver_idmembers` = `members`.`idmembers`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_post`
--
DROP TABLE IF EXISTS `vw_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_post`  AS SELECT `members`.`idmembers` AS `idmembers`, `members`.`firstname` AS `firstname`, `members`.`lastname` AS `lastname`, `members`.`image` AS `image`, `post`.`header` AS `header`, `post`.`images` AS `images`, `post`.`footer` AS `footer`, `post`.`date_posted` AS `date_posted` FROM (`members` join `post` on(`post`.`idmembers` = `members`.`idmembers`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`idfirends`),
  ADD KEY `idmembers` (`idmembers`);

--
-- Indices de la tabla `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`idmembers`);

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `receiver_idmembers` (`receiver_idmembers`);

--
-- Indices de la tabla `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`idphotos`),
  ADD KEY `idmembers` (`idmembers`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `idmembers` (`idmembers`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `friends`
--
ALTER TABLE `friends`
  MODIFY `idfirends` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `members`
--
ALTER TABLE `members`
  MODIFY `idmembers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `photos`
--
ALTER TABLE `photos`
  MODIFY `idphotos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`idmembers`) REFERENCES `members` (`idmembers`);

--
-- Filtros para la tabla `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`receiver_idmembers`) REFERENCES `members` (`idmembers`);

--
-- Filtros para la tabla `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`idmembers`) REFERENCES `members` (`idmembers`);

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idmembers`) REFERENCES `members` (`idmembers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
