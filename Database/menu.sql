-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 11:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffe`
--

CREATE TABLE `coffe` (
  `id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coffe`
--

INSERT INTO `coffe` (`id`, `gambar`, `nama`, `harga`) VALUES
(14, 'cappuchino.jpg', 'Cappuchino', '35.000'),
(15, 'kopi au lait.jpeg', 'Au Ait', '25.000'),
(16, 'kopi mocha.jpeg', 'Mocca', '23.000'),
(17, 'kopi americano.jpeg', 'Americano', '45.000'),
(18, 'kopi late.jpeg', 'Latte', '34.000'),
(19, 'caramel macchiato.jpeg', 'Caramel Macchiato', '20.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffe`
--
ALTER TABLE `coffe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffe`
--
ALTER TABLE `coffe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
