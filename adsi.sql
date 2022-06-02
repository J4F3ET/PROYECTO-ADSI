-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2022 a las 03:17:05
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `comentario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `noticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `comentario`, `fecha`, `noticia`) VALUES
(129, 'hola mundo', '2022-05-22', 1),
(130, 'aver', '2022-05-22', 2),
(131, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis ullamcorper auctor. Suspendisse eros risus, vehicula ac ligula vel, mollis rhoncus sem. Mauris in laoreet nibh. Nulla neque eros, eleifend eget lectus at, lacinia accumsan quam. Quisque in pellentesque sapien, vitae aliquet mauris. Curabitur lobortis mi ac viverra accumsan. Nulla facilisi. In sodales turpis vel enim rhoncus, ut fringilla augue elementum. Aenean non tellus accumsan, gravida felis id, gravida leo. Pellentesque posuere sed nisl sed porttitor. Quisque efficitur rutrum ligula.\r\n\r\nDonec quam erat, viverra et dolor sit amet, pulvinar tincidunt ipsum. Morbi tempor odio at orci vehicula vulputate in eu ipsum. Praesent nisl mi, mollis sit amet quam at, viverra accumsan tellus. Proin magna augue, lobortis quis malesuada quis, euismod vel urna. Aenean quis enim tellus. Mauris eleifend mauris vitae fringilla porttitor. Donec tincidunt metus at fringilla consectetur. Proin non pretium ipsum. Maecenas fringilla velit id lorem aliquam venenatis. Integer laoreet ac urna cursus pulvinar. Nam rutrum tempor lorem eu ornare. Phasellus a justo laoreet, lacinia turpis et, maximus nunc.', '2022-05-23', 1),
(132, '\r\nDonec quam erat, viverra et dolor sit amet, pulvinar tincidunt ipsum. Morbi tempor odio at orci vehicula vulputate in eu ipsum. Praesent nisl mi, mollis sit amet quam at, viverra accumsan tellus. Proin magna augue, lobortis quis malesuada quis, euismod vel urna. Aenean quis enim tellus. Mauris eleifend mauris vitae fringilla porttitor. Donec tincidunt metus at fringilla consectetur. Proin non pretium ipsum. Maecenas fringilla velit id lorem aliquam venenatis. Integer laoreet ac urna cursus pulvinar. Nam rutrum tempor lorem eu ornare. Phasellus a justo laoreet, lacinia turpis et, maximus nunc.', '2022-05-23', 2),
(133, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 1),
(134, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 2),
(135, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 1),
(136, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 2),
(137, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 1),
(138, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 2),
(139, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 1),
(140, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 2),
(141, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 1),
(142, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 2),
(143, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 1),
(144, 'Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.Quisque commodo tortor id scelerisque pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac finibus velit. Aenean mattis risus urna, varius commodo diam porttitor sit amet. Sed placerat sapien vel nisl placerat blandit. Aenean vitae justo ac eros imperdiet porta. Nam mollis dui vulputate massa rutrum faucibus. Aenean viverra lobortis tellus sed fermentum. Aliquam sit amet dolor quis mi scelerisque vestibulum. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam consectetur nunc sed urna feugiat suscipit.', '2022-05-23', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` int(11) NOT NULL,
  `nombreCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `emailCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `celularCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `comentarioCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaIngreso` date NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `nombreCliente`, `emailCliente`, `celularCliente`, `comentarioCliente`, `fechaIngreso`, `estado`) VALUES
(13, 'Pedro', 'pedro@hotmail.com', '3196163119', 'pepepinope', '2022-06-01', 0),
(14, 'jUAN', 'JUAN@hotmail.com', '3196163119', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sodales velit vitae fringilla condimentum. Etiam tristique velit nibh, in viverra lectus condimentum sit amet. Phasellus sem purus, tempor a interdum eu, condimentum tincidunt ante. Nullam bibendum urna ac ullamcorper iaculis. Ut ex sapien, pellentesque pellentesque ligula eget, accumsan blandit leo. Curabitur placerat quam volutpat dapibus vehicula. Pellentesque at urna aliquam, fringilla justo ac, feugiat dui. Vivamus commodo consectetur lectus a tristique. Donec tincidunt est at viverra rhoncus. Vivamus ut elit risus. Mauris nec vehicula turpis, at ullamcorper massa. Praesent facilisis aliquet lacus, et condimentum dui sagittis ut. Fusce in nisl tellus. Donec laoreet, metus non tempor pulvinar, ipsum mauris consectetur leo, pellentesque accumsan augue purus sollicitudin nisl.\r\n\r\nVivamus non dapibus nisi, quis semper leo. Etiam ut nunc quis neque malesuada egestas pulvinar non dolor. Ut non urna nec nunc imperdiet pellentesque. Pellentesque finibus purus eu ipsum aliquet, sed blandit justo commodo. In hac habitasse platea dictumst. Etiam aliquam viverra sapien sit amet ullamcorper. Donec at dolor eu sem tristique molestie. Morbi luctus, felis vitae luctus luctus, elit risus bibendum odio, mattis fermentum eros lorem eget enim. Ut id lectus elementum, dignissim mauris laoreet, sollicitudin mauris. Donec aliquet augue urna, eu vestibulum lectus fringilla porttitor. Mauris erat enim, molestie non ipsum id, rhoncus suscipit orci. Aenean eget dapibus justo.', '2022-06-01', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `queja`
--

CREATE TABLE `queja` (
  `id_queja` int(11) NOT NULL,
  `nombreCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `emailCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `celularCliente` int(20) NOT NULL,
  `comentarioCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaIngreso` date NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `id_reclamo` int(11) NOT NULL,
  `nombreCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `emailCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `celularCliente` int(20) NOT NULL,
  `comentarioCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaIngreso` date NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestapregunta`
--

CREATE TABLE `respuestapregunta` (
  `id_respuesta` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentarioRespuesta` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaRespuesta` date NOT NULL,
  `nombreUsuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `emailCliente` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestaqueja`
--

CREATE TABLE `respuestaqueja` (
  `id_respuesta` int(11) NOT NULL,
  `id_queja` int(11) NOT NULL,
  `comentarioRespuesta` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaRespuesta` date NOT NULL,
  `nombreUsuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `emailCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestareclamo`
--

CREATE TABLE `respuestareclamo` (
  `id_respuesta` int(11) NOT NULL,
  `id_reclamo` int(11) NOT NULL,
  `comentarioRespuesta` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaRespuesta` date NOT NULL,
  `nombreUsuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `emailCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestasugerencia`
--

CREATE TABLE `respuestasugerencia` (
  `id_respuesta` int(11) NOT NULL,
  `id_sugerencia` int(11) NOT NULL,
  `comentarioRespuesta` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaRespuesta` date NOT NULL,
  `nombreUsuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `emailCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencia`
--

CREATE TABLE `sugerencia` (
  `id_sugerencia` int(11) NOT NULL,
  `nombreCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `emailCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `celularCliente` int(20) NOT NULL,
  `comentarioCliente` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaIngreso` date NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(3, 'Admin', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/810.jpg', 1, '2022-06-01 20:11:00', '2022-06-02 01:11:57'),
(15, 'Pepe', 'ejemplo', '$2a$07$asxx54ahjppf45sd87a5auxvaHgd2LKmNso9Z7E5bR19uDcZxfNUK', 'Supervisor', 'vistas/img/usuarios/ejemplo/373.png', 1, '0000-00-00 00:00:00', '2022-05-22 12:46:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `queja`
--
ALTER TABLE `queja`
  ADD PRIMARY KEY (`id_queja`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id_reclamo`);

--
-- Indices de la tabla `respuestapregunta`
--
ALTER TABLE `respuestapregunta`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `respuestaqueja`
--
ALTER TABLE `respuestaqueja`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_queja` (`id_queja`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `respuestareclamo`
--
ALTER TABLE `respuestareclamo`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_reclamo` (`id_reclamo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `respuestasugerencia`
--
ALTER TABLE `respuestasugerencia`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_sugerencia` (`id_sugerencia`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  ADD PRIMARY KEY (`id_sugerencia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `queja`
--
ALTER TABLE `queja`
  MODIFY `id_queja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id_reclamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestapregunta`
--
ALTER TABLE `respuestapregunta`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestaqueja`
--
ALTER TABLE `respuestaqueja`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestareclamo`
--
ALTER TABLE `respuestareclamo`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestasugerencia`
--
ALTER TABLE `respuestasugerencia`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  MODIFY `id_sugerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `respuestapregunta`
--
ALTER TABLE `respuestapregunta`
  ADD CONSTRAINT `respuestapregunta_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id_pregunta`),
  ADD CONSTRAINT `respuestapregunta_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `respuestaqueja`
--
ALTER TABLE `respuestaqueja`
  ADD CONSTRAINT `respuestaqueja_ibfk_1` FOREIGN KEY (`id_queja`) REFERENCES `queja` (`id_queja`),
  ADD CONSTRAINT `respuestaqueja_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `respuestareclamo`
--
ALTER TABLE `respuestareclamo`
  ADD CONSTRAINT `respuestareclamo_ibfk_1` FOREIGN KEY (`id_reclamo`) REFERENCES `reclamo` (`id_reclamo`),
  ADD CONSTRAINT `respuestareclamo_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `respuestasugerencia`
--
ALTER TABLE `respuestasugerencia`
  ADD CONSTRAINT `respuestasugerencia_ibfk_1` FOREIGN KEY (`id_sugerencia`) REFERENCES `sugerencia` (`id_sugerencia`),
  ADD CONSTRAINT `respuestasugerencia_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
