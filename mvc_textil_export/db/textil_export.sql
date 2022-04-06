-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2022 a las 05:33:10
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `textil_export`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod`
--

CREATE TABLE `prod` (
  `codigo` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `existencias` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prod`
--

INSERT INTO `prod` (`codigo`, `nombre`, `descripcion`, `img`, `categoria`, `precio`, `existencias`) VALUES
('PROD00001', 'Camiseta de algodon cuello redondo', 'Camiseta Mod 1 elaborada en algodon de 200 grs cuello redondo decorado manga corta costuras en cierres laterales', 'PROD00001.jpg', 'Textil', '2.50', '500'),
('PROD00002', 'Camiseta de algodon cuello V', 'Camiseta Mod. 2, elaborada en algodon de 200 grs. cuello en V decorado, manga corta, costuras en cierres laterales.', 'PROD00002.jpg', 'Textil', '2.90', '462'),
('PROD00003', 'Power Bank', 'Bateria auxiliar externa de aluminio en llamativos colores de 2.200 mAh de capacidad de carga, con bot&#xF3;n y ledes indicadores de carga. Cable micro USB incluido y amplia superficie de marcaje, Presentada en atractiva caja de diseño. Las capacidades mo', 'PROD00003.jpg', 'Promocional', '5.50', '500'),
('PROD00004', 'Celular', 'un celular muy feo con poca resolucion y poca memoria ram seguramente ni puedas jugar al buscaminas aca atarantado asqueroso palurdo sin vida social sali y deja de jugar al clash royal conseguite una vida que si importe y no veas mas anime deja de jugar a', 'aaaaaaaaaaaaaaaaaa.png', 'Promocional', '666', '616'),
('PROD00017', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'un carro feo', '43731.png', 'Promocional', '12', '333'),
('PROD00018', 'El chavo del porro ', 'un carro feo', 'End quico 2.png', 'Promocional', '12', '33'),
('PROD00005', 'Doom Ramon™', 'Doom Ramon™ es un juego shooter en primera persona en el que controlas al clasico seu madruga en un viaje de acido asesinando a los habitantes de la vecindad al confundirlos con demonios, tiene un 10/10 en IGN y es el juego del momento no desaproveches es', 'end don ramon2.png', 'Textil', '456', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usuario` varchar(255) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL,
  `tipoUsuario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
