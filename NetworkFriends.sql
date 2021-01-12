-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-01-2021 a las 19:27:30
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
-- Estructura de tabla para la tabla `chat_login_details`
--

CREATE TABLE `chat_login_details` (
  `id` int(11) NOT NULL,
  `idmembers` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_typing` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chat_login_details`
--

INSERT INTO `chat_login_details` (`id`, `idmembers`, `last_activity`, `is_typing`) VALUES
(5, 1, '2020-12-25 18:23:21', 'no'),
(6, 1, '2020-12-25 20:45:47', 'no'),
(7, 1, '2020-12-25 20:45:57', 'no'),
(8, 1, '2020-12-25 20:47:32', 'yes'),
(9, 2, '2020-12-25 20:48:52', 'no'),
(10, 1, '2020-12-25 21:28:04', 'no'),
(11, 1, '2020-12-25 21:43:36', 'no'),
(12, 1, '2020-12-25 21:43:50', 'no'),
(13, 1, '2020-12-26 00:14:47', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `friends`
--

CREATE TABLE `friends` (
  `idfirends` int(11) NOT NULL,
  `my_id` int(11) NOT NULL,
  `idmembers` int(11) NOT NULL,
  `friend_request` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `friends`
--

INSERT INTO `friends` (`idfirends`, `my_id`, `idmembers`, `friend_request`) VALUES
(31, 1, 2, 2),
(32, 2, 1, 2),
(35, 3, 4, 0),
(36, 4, 3, 0),
(39, 1, 4, 2),
(40, 4, 1, 2),
(41, 1, 7, 2),
(42, 7, 1, 2),
(43, 1, 5, 2),
(44, 5, 1, 2),
(47, 1, 10, 1),
(48, 10, 1, 0),
(49, 1, 3, 1);

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
  `online` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `religion` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `IdTipoUsuario` int(11) NOT NULL,
  `current_session` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`idmembers`, `firstname`, `lastname`, `country`, `email`, `gender`, `username`, `password`, `image`, `birthdate`, `mobile`, `online`, `religion`, `IdTipoUsuario`, `current_session`) VALUES
(1, 'Carlos Daniel', 'Angel Padilla', 'Mexico', 'carlosdanielangelpadilla@gmail.com', 'Masculino', 'carlos', 'carlos', 'images/carlos.jpeg', '2020-11-11', '123123213', '1', 'Cato', 3, 2),
(2, 'Yesenia', 'Diaz Hernandez', 'Mexico', 'yesi@gmail.com', 'Femenino', 'yesi', 'yesi', 'images/yesi.jpeg', '2020-11-10', '3232423432', '0', NULL, 3, 2),
(3, 'Marisol', 'Angel Padilla', 'Mexico', 'mari@gmail.com', 'Femenino', 'mari', 'mari', 'https://scontent.fmtt1-1.fna.fbcdn.net/v/t1.0-9/130259316_1574152512972404_877180100280679757_o.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_ohc=sRu1JCdcZqMAX-N-abg&_nc_ht=scontent.fmtt1-1.fna&oh=fd6b84346c8685ba23786196262bda9e&oe=5FFD1BFD', '2020-11-10', '3213213312', '0', NULL, 3, 1),
(4, 'Maria Guadalupe', 'Gordillo Hernandez', 'Mexico', 'gudez@gmail,com', 'Femenino', 'Godez', 'godez', 'images/godez.jpeg', '2020-11-11', '34324323432', '0', NULL, 3, 1),
(5, 'Guadalupe', 'Vazquez Rivera', 'Mexico', 'blackcobra@gmail.com', 'Masculino', 'black', 'black', 'https://scontent.fmtt1-1.fna.fbcdn.net/v/t1.0-9/26814969_1791187441186213_8322541905814047653_n.jpg?_nc_cat=108&ccb=2&_nc_sid=09cbfe&_nc_ohc=U3dOyAkZVNUAX96jWmg&_nc_ht=scontent.fmtt1-1.fna&oh=416208734ae275a8666e2121232ca444&oe=5FFBF27F', '2020-11-16', '2132312322', '0', NULL, 3, 1),
(6, 'Martha', 'Padilla Espinoza', 'Mexico', 'marthapadillaespinoza@gmail.com', 'Femenino', 'matina', 'matina', 'userpics/user1.jpg', '1976-06-01', '9341138138', '0', NULL, 3, 1),
(7, 'Zujheydy', 'Aguilar De La Rosa', 'AW', 'nick@DarkCobra', 'Famale', 'darkcobra', 'hola', 'userpics/user1.jpg', '2020-12-27', NULL, '', '', 3, 1),
(8, 'CARLOS DANIEL', 'ANGEL PADILLA', 'MX', 'carlosdanielangelpadilla@gmail.com', 'Male', 'darkcobra', 'toor', 'userpics/user1.jpg', '1998-04-24', '', '0', '', 3, 1),
(9, 'yessi', 'gutierrez padilla', 'MX', 'zujheydy@gmail.com', 'Famale', 'AKATSUKI TENSHI-SAMA', '0915', 'userpics/user1.jpg', '2002-06-24', '', '0', '', 3, 1),
(10, 'Alma ', 'Rodriguez Perez', 'Bahamas', 'zujheydy@gmail.com', 'Famale', 'alma', 'alma', 'userpics/user1.jpg', '2021-01-07', '', '0', '', 3, 1),
(11, 'Roberto', 'Gomez Balaños', 'Guam', 'zujheydy@gmail.com', 'Male', 'roberto', 'roberto', NULL, '2021-01-07', '', '0', '', 3, 1),
(12, 'Maria Antonieta', 'De las nieves', 'Yemen', 'zujheydy@gmail.com', 'Famale', 'mari', 'mari', 'userpics/user1.jpg', '2021-01-07', '', '0', '', 3, 1),
(13, 'Ramon', 'Valdez Urtis', 'Armenia', 'zujheydy@gmail.com', 'Male', 'ramon', 'ramon', 'userpics/user5.jpg', '2021-01-07', '934108361', '0', 'Catolico', 3, 1),
(14, 'Florinda', 'Mesa', 'Islas Caimán', 'nick@DarkCobra', 'Famale', 'florinda', 'florinda', 'userpics/user1.jpg', '2004-08-18', '', '0', '', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
  `idmessage` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_idmembers` int(11) NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `data_sended` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `message`
--

INSERT INTO `message` (`idmessage`, `sender_id`, `receiver_idmembers`, `content`, `data_sended`, `status`) VALUES
(1, 1, 2, 'hola yesi', '2020-11-25 17:09:14', 0),
(2, 1, 3, 'hola mari', '2020-11-23 17:09:14', 0),
(3, 1, 4, 'hola godez', '2020-11-30 17:10:44', 0),
(4, 1, 5, 'hola black', '2020-11-24 17:10:44', 0),
(5, 2, 1, 'hola sda', '2020-11-24 17:12:19', 0),
(6, 2, 3, 'holasdda', '2020-11-24 17:12:19', 0),
(7, 2, 4, 'hola dasdas', '2020-11-24 17:13:08', 0),
(8, 2, 5, 'holaasdasdwd', '2020-11-24 17:13:08', 0),
(9, 3, 1, 'que tal', '2020-11-24 17:15:19', 0),
(10, 3, 2, 'que tal', '2020-11-24 17:14:03', 0),
(11, 3, 4, 'que tal', '2020-11-30 17:15:19', 0),
(12, 3, 5, 'que tal', '2020-11-24 17:15:19', 0),
(13, 4, 1, 'mucho gusto', '2020-11-24 17:16:50', 0),
(14, 4, 2, 'hey', '2020-11-24 17:16:50', 0),
(15, 4, 3, 'dsadsad', '2020-11-24 17:17:36', 0),
(16, 4, 5, 'hey que tal', '2020-11-24 17:17:36', 0),
(17, 5, 1, 'hola', '2020-11-11 17:18:31', 0),
(18, 5, 2, 'hey', '2020-11-30 17:18:31', 0),
(19, 5, 3, 'hey que tal', '2020-11-24 17:19:12', 0),
(20, 5, 4, 'hey como estas', '2020-11-24 17:19:12', 0),
(21, 1, 2, 'hoaaa', '2020-12-25 20:48:56', 0),
(22, 2, 1, 'jdfsd', '2020-12-25 20:56:25', 0),
(23, 1, 6, 'hola', '2020-12-25 21:43:59', 1),
(24, 1, 2, 'mamacita chula buenos dias', '2020-12-25 21:44:16', 1);

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
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`idpost`, `idmembers`, `header`, `images`, `footer`, `date_posted`) VALUES
(11, 1, 'Hola chicos buenos dias', 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2020/03/halo-combat-evolved-1883141.jpg', NULL, '2020-11-24 17:24:54'),
(12, 2, 'lista para comenzar un nuevo dia', 'https://concepto.de/wp-content/uploads/2015/03/naturaleza-medio-ambiente-e1505407093531-1.jpeg', NULL, '2020-11-24 17:24:54'),
(13, 3, 'chicos necesito ayuada', 'https://revo300.academy/wp-content/uploads/2019/12/blur-close-up-code-computer-546819-1080x675.jpg', NULL, '2020-11-24 17:27:09'),
(14, 4, 'villahermosa bajo el agua', 'https://www.elheraldodetabasco.com.mx/local/sb2p5b-1.jpg/ALTERNATES/LANDSCAPE_400/1.jpg', 'tabasco hoy-buscan desalojar mas agua del grijalva', '2020-11-24 17:27:09'),
(15, 5, 'Dia fitness o como se escriba', '', NULL, '2020-11-24 17:27:09'),
(16, 7, 'Chequen esta imagen', 'https://ep01.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572453030_noticia_normal.jpg', NULL, '2021-01-07 17:52:34'),
(17, 7, 'Ya veron las nuevas politicas de whatsapp?', 'https://cde.laprensa.e3.pe/ima/0/0/2/3/8/238082.jpg', NULL, '2021-01-07 18:01:02');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_friends`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_friends` (
`idfirends` int(11)
,`my_id` int(11)
,`idmembers` int(11)
,`friend_request` int(1)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`country` varchar(60)
,`image` varchar(300)
,`online` varchar(8)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_message`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_message` (
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_post`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_post` (
`my_id` int(11)
,`idmembers` int(11)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`image` varchar(300)
,`header` varchar(1000)
,`images` varchar(500)
,`footer` varchar(50)
,`date_posted` timestamp
,`friend_request` int(1)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_friends`
--
DROP TABLE IF EXISTS `vw_friends`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_friends`  AS SELECT `friends`.`idfirends` AS `idfirends`, `friends`.`my_id` AS `my_id`, `friends`.`idmembers` AS `idmembers`, `friends`.`friend_request` AS `friend_request`, `members`.`firstname` AS `firstname`, `members`.`lastname` AS `lastname`, `members`.`country` AS `country`, `members`.`image` AS `image`, `members`.`online` AS `online` FROM (`friends` join `members` on(`friends`.`idmembers` = `members`.`idmembers`)) ;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_post`  AS SELECT `friends`.`my_id` AS `my_id`, `friends`.`idmembers` AS `idmembers`, `members`.`firstname` AS `firstname`, `members`.`lastname` AS `lastname`, `members`.`image` AS `image`, `post`.`header` AS `header`, `post`.`images` AS `images`, `post`.`footer` AS `footer`, `post`.`date_posted` AS `date_posted`, `friends`.`friend_request` AS `friend_request` FROM ((`members` join `post` on(`post`.`idmembers` = `members`.`idmembers`)) join `friends` on(`friends`.`idmembers` = `members`.`idmembers`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat_login_details`
--
ALTER TABLE `chat_login_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmembers` (`idmembers`);

--
-- Indices de la tabla `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`idfirends`);

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
-- AUTO_INCREMENT de la tabla `chat_login_details`
--
ALTER TABLE `chat_login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `friends`
--
ALTER TABLE `friends`
  MODIFY `idfirends` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `members`
--
ALTER TABLE `members`
  MODIFY `idmembers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `photos`
--
ALTER TABLE `photos`
  MODIFY `idphotos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chat_login_details`
--
ALTER TABLE `chat_login_details`
  ADD CONSTRAINT `chat_login_details_ibfk_1` FOREIGN KEY (`idmembers`) REFERENCES `members` (`idmembers`);

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
