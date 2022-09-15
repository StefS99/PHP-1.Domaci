-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 11:11 PM
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
-- Database: `automobilcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `naziv` varchar(20) NOT NULL,
  `marka` varchar(20) NOT NULL,
  `prodavac` varchar(30) NOT NULL,
  `cena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `naziv`, `marka`, `prodavac`, `cena`) VALUES
(2, 'Fiat500L', 'Fiat', 'Marko', '2345'),
(14, 'AudiA6', 'Audi', 'Marko', '1234'),
(16, 'AudiA6', 'Audi', 'Stefan', '1234'),
(20, 'AudiA6', 'Audi', 'Marko', '1234'),
(42, 'AudiA6', 'Audi', 'Marko', '1234'),
(48, 'Ferarri 2', 'Ferrari', 'Stefan', '123000'),
(55, 'Dacia Duster', 'Dacia', 'Stefan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Stefan', 'xoteyo2887@iunicus.com', 'fbc9391cd07f8c3b5be26545072e2a1e', 'admin'),
(2, 'Stefan', 'dolimoli@gmail.com', 'c78637a77ce823c9ca28a3c902b6822b', 'user'),
(3, 'Stefan', 'dolimoli@gmail.com', '1a6c635887c69786448312a5f21743db', 'admin'),
(4, 'Stefan', 'mile@gmail.com', 'a1c59719c1712f7223cac41faf1401e8', 'user'),
(6, 'Milica', 'milica@gmail.com', '504938a121efec5f4fbdbcc64ca5736e', 'admin'),
(7, 'Milica', 'milica2@gmail.com', '504938a121efec5f4fbdbcc64ca5736e', 'admin'),
(8, 'Milica', 'milica354@gmail.com', '1cac8f91e6a55e9048e1ccdf404009a5', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
