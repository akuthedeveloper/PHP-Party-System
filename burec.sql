-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2016 at 04:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `burec`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `member` text NOT NULL,
  `name` text NOT NULL,
  `uname` text NOT NULL,
  `dob` text NOT NULL,
  `place` text NOT NULL,
  `province` text NOT NULL,
  `proffesion` text NOT NULL,
  `territory` text NOT NULL,
  `history` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `id` text NOT NULL,
  `nation` text NOT NULL,
  `level` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`member`, `name`, `uname`, `dob`, `place`, `province`, `proffesion`, `territory`, `history`, `email`, `phone`, `id`, `nation`, `level`, `address`, `password`) VALUES
('standard membership', 'muriithi wachira', 'voke', '12/12/1969', 'kivu', 'noth kivu', 'doctor', 'naija', 'none', 'wachira@yahoo.com', '+254721372788', '1234245235', 'kenyan', 'college', 'kivu', '12345678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
