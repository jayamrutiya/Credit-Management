-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2019 at 12:57 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `current_credit` int(20) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `phone_no`, `current_credit`, `status`) VALUES
(1, 'Mary S. Shaffer', 'maryshaffe@gmail.com', '6523124578', 10500, 'unselected'),
(2, 'Dollie P. Farley', 'dolliefarley@gmail.com', '7896584520', 50000, 'unselected'),
(3, 'Jaxon Selfe', 'jaxonselfe@gmail.com', '6598784525', 20000, 'unselected'),
(4, 'Dominic Farran-Ridge', 'dominicfarran@gmail.com', '9878451232', 40000, 'unselected'),
(5, 'Samuel Furphy', 'samuelfurphy@gmail.com', '7896547895', 60000, 'unselected'),
(6, 'Noah Hunt', 'noahhunt@gmail.com', '4565987852', 20000, 'unselected'),
(7, 'Luca McMorran', 'lucamcMorran@gmail.com', '9878456532', 10000, 'unselected'),
(8, 'Dean Plain', 'deanplain@gmail.com', '9845657825', 60000, 'unselected'),
(9, 'Alex Beeston', 'alexbeeston@gmail.com', '9575821965', 50000, 'unselected'),
(10, 'Luke OReilly', 'lukeoreilly@gmail.com', '9165457890', 40000, 'unselected');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
