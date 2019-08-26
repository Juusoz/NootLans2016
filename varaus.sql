-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2016 at 10:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lan`
--

-- --------------------------------------------------------

--
-- Table structure for table `varaus`
--

CREATE TABLE `varaus` (
  `VarausId` int(3) NOT NULL,
  `PoytaId` int(3) NOT NULL,
  `Etunimi` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `Sukunimi` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `Sahkoposti` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `Puhelin` varchar(14) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `varaus`
--
ALTER TABLE `varaus`
  ADD PRIMARY KEY (`VarausId`),
  ADD UNIQUE KEY `Puhelin` (`Puhelin`),
  ADD UNIQUE KEY `Sahkoposti` (`Sahkoposti`),
  ADD UNIQUE KEY `PaikkaId` (`PoytaId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `varaus`
--
ALTER TABLE `varaus`
  MODIFY `VarausId` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
