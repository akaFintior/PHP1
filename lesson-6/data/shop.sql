-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2019 at 11:37 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL,
  `picture_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`, `picture_id`) VALUES
(1, 'Админ!', 'Привет Всем!', 5),
(2, 'user', 'Как дела', 2),
(3, 'Вася', 'Привет', 5),
(4, 'Посетитель111', 'Сайт не работает11', 6),
(5, 'Посетитель222', '111', 5),
(6, 'Посетитель', '444', 4),
(7, 'Олег', '111', 3),
(8, 'Вася', 'Сайт не работает', 2),
(10, 'Посетитель', 'Са', 11),
(12, 'Вася', 'Сайт не работает', 5),
(13, 'Вася', 'Сайт не работает222', 3),
(14, 'Вася', 'Сайт не работает222', 2),
(17, 'Олег', 'Все хорошо', 4),
(18, 'Вася2', 'Сайт не работает2', 3),
(19, 'Alex', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `views`) VALUES
(2, '01.jpg', 17),
(3, '02.jpg', 13),
(4, '03.jpg', 1),
(5, '04.jpg', 2),
(6, '05.jpg', 1),
(7, '06.jpg', 11),
(8, '07.jpg', 1),
(9, '08.jpg', NULL),
(10, '09.jpg', 4),
(11, '10.jpg', 2),
(12, '11.jpg', 4),
(13, '12.jpg', 4),
(14, '13.jpg', 2),
(15, '14.jpg', NULL),
(16, '15.jpg', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
