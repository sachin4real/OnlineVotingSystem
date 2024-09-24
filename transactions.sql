-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 07:16 PM
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
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `cust_name` varchar(100) NOT NULL,
 `cust_email` varchar(255) NOT NULL,
 `card_number` bigint(20) NOT NULL,
 `card_cvc` int(5) NOT NULL,
 `card_exp_month` varchar(2) NOT NULL,
 `card_exp_year` varchar(5) NOT NULL,
 `noOfTickets` int(50) NOT NULL,
 `ticketTime` time NOT NULL,
 `ticketDate` date NOT NULL,
 `category` varchar(10) NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;