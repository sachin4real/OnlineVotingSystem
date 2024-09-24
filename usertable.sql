-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 12:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_name` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `customer_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_name`, `gender`, `email`, `mobile_number`, `psw`, `customer_id`) VALUES
('Thenura', 0, 'dumidukavishan2@gmail.com', 702217521, 'Dkavishan123@', 1),
('Dumidu', 0, 'dumidukavishan2@gmail.com', 702217521, 'Dkavishan123@', 2),
('Kawya', 0, 'dumidukavishan2@gmail.com', 702217521, 'Dkavishan123@', 3),
('Shaan', 0, 'dumidukavishan2@gmail.com', 702217521, 'Dkavishan123@', 4),
('Mia khalifa', 0, 'dumidukavishan8@gmail.com', 702217521, 'Dkavishan123@', 5),
('Jhonny', 0, 'dumidukavishan2@gmail.com', 702217521, 'Dkavishan123@', 6),
('Amal', 0, 'dumidukavishan2@gmail.com', 702217521, 'Dkavishan123@', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
