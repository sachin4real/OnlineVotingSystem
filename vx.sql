-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 12:08 PM
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
-- Database: `vote_`
--

-- --------------------------------------------------------

--
-- Table structure for table `vx`
--

CREATE TABLE `vx` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vx`
--

INSERT INTO `vx` (`id`, `type`, `name`) VALUES
(1, '', '3'),
(52, '', '3'),
(53, '', '5'),
(54, '', '4'),
(55, '', '3'),
(56, '', '4'),
(57, '', '1'),
(58, '', '1'),
(59, '', '1'),
(60, '', '5'),
(61, '', '1'),
(62, '', '3'),
(63, 'D', '4'),
(64, 'D', '1'),
(65, 'D', '5'),
(66, 'S', '3'),
(67, 'S', '2'),
(68, 'S', '3'),
(69, 'S', '2'),
(70, 'S', '4'),
(71, 'S', '3'),
(72, 'D', '2'),
(73, 'S', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vx`
--
ALTER TABLE `vx`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vx`
--
ALTER TABLE `vx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
