-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 05:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `property_t`
--

CREATE TABLE `property_t` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `access` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `utility` varchar(255) NOT NULL,
  `descrip` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_t`
--

INSERT INTO `property_t` (`id`, `name`, `charge`, `address`, `access`, `floor`, `utility`, `descrip`, `images`) VALUES
(3, 'derv', 'bbuigui', 'uhjvui', 'gui', 'jbug', 'gibb', 'uiuiiuk', 'banner.jpg'),
(4, 'ethrtbd vf', 'gigi', 'iiugui', 'guiigiu', 'guigig', 'gigi', 'gi', 'banner.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property_t`
--
ALTER TABLE `property_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property_t`
--
ALTER TABLE `property_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
