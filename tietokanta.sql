-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23.09.2024 klo 08:34
-- Palvelimen versio: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tieto`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `tietokanta`
--

CREATE TABLE `tietokanta` (
  `Nimi` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Viesti` text DEFAULT NULL,
  `Palaute` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vedos taulusta `tietokanta`
--

INSERT INTO `tietokanta` (`Nimi`, `Email`, `Viesti`, `Palaute`) VALUES
('taniili', 'djukaraiska@gmail.com', 'ADHBAD', 1),
('Daniil ', 'djukaraiska@gmail.com', 'JAK', 1),
('Daniil ', 'djukarainena@gmail.com', '222', 1),
('Daniil ', 'djukaraiska@gmail.com', 'Moi kaikki 5/5', 5),
('Daniil ', 'djukaraiska@gmail.com', '8', 5),
('Daniil ', 'djukaraiska@gmail.com', '8', 5),
('Daniil ', 'djukaraiska@gmail.com', 'Terve', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
