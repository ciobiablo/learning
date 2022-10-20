-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2018 at 04:03 AM
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
-- Database: `loadmore`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data`
(
    `id`    int(11) NOT NULL,
    `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `value`)
VALUES (1, '1. değer'),
       (2, '2. değer'),
       (3, '3. değer'),
       (4, '4. değer'),
       (5, '5. değer'),
       (6, '6. değer'),
       (7, '7. değer'),
       (8, '8. değer'),
       (9, '9. değer'),
       (10, '10. değer'),
       (11, '11. değer'),
       (12, '12. değer'),
       (13, '13. değer'),
       (14, '14. değer'),
       (15, '15. değer'),
       (16, '16. değer'),
       (17, '17. değer'),
       (18, '18. değer'),
       (19, '19. değer'),
       (20, '20. değer'),
       (21, '21. değer'),
       (22, '22. değer'),
       (23, '23. değer'),
       (24, '24. değer'),
       (25, '25. değer'),
       (26, '26. değer'),
       (27, '27. değer'),
       (28, '28. değer'),
       (29, '29. değer'),
       (30, '30. değer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
