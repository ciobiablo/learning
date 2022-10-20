-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2018 at 12:04 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ililce`
--

-- --------------------------------------------------------

--
-- Table structure for table `ilceler`
--

CREATE TABLE `ilceler`
(
    `ilce_id`  int(11) NOT NULL,
    `ilce_adi` varchar(255) NOT NULL,
    `il_plaka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ilceler`
--

INSERT INTO `ilceler` (`ilce_id`, `ilce_adi`, `il_plaka`)
VALUES (1, 'Tepebaşı', 26),
       (2, 'Odunpazarı', 26),
       (3, 'Kumburgaz', 34),
       (4, 'Kadıköy', 34);

-- --------------------------------------------------------

--
-- Table structure for table `iller`
--

CREATE TABLE `iller`
(
    `plaka_no` int(11) NOT NULL,
    `il_adi`   varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iller`
--

INSERT INTO `iller` (`plaka_no`, `il_adi`)
VALUES (26, 'Eskişehir'),
       (34, 'İstanbul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ilceler`
--
ALTER TABLE `ilceler`
    ADD PRIMARY KEY (`ilce_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ilceler`
--
ALTER TABLE `ilceler`
    MODIFY `ilce_id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
