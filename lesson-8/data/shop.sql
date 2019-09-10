-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2019 at 12:03 PM
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
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `goods_id`, `session_id`) VALUES
(1, 1, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(2, 2, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(3, 1, 'unggkdqubc480dpg5ds0krk9t3uri8n7'),
(4, 3, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(5, 1, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(6, 2, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(7, 1, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(8, 1, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(15, 3, 'kji2vlg327bqc374ojj4cai5ruv1g0qi'),
(26, 1, '6d1gtpppromeif5t0hga8id61o3nl96o'),
(27, 1, '6d1gtpppromeif5t0hga8id61o3nl96o'),
(28, 1, '6d1gtpppromeif5t0hga8id61o3nl96o'),
(29, 1, '6d1gtpppromeif5t0hga8id61o3nl96o'),
(35, 1, '290cd0b5f524eccada4b12aec9232977'),
(36, 2, '290cd0b5f524eccada4b12aec9232977'),
(37, 3, '290cd0b5f524eccada4b12aec9232977'),
(38, 2, '290cd0b5f524eccada4b12aec9232977'),
(60, 2, '92d46174129088e026c6619a9317af62'),
(61, 1, '92d46174129088e026c6619a9317af62'),
(63, 2, '5c8a24fd6c3ba8056060f7d188b66bed'),
(64, 2, '5c8a24fd6c3ba8056060f7d188b66bed'),
(65, 2, '5c8a24fd6c3ba8056060f7d188b66bed'),
(66, 3, '5c8a24fd6c3ba8056060f7d188b66bed'),
(67, 3, '5c8a24fd6c3ba8056060f7d188b66bed'),
(68, 3, '5c8a24fd6c3ba8056060f7d188b66bed'),
(69, 1, '5c8a24fd6c3ba8056060f7d188b66bed'),
(70, 1, '5c8a24fd6c3ba8056060f7d188b66bed'),
(71, 1, 'e30f79182f0fdf6a40d813b0fd8f4ff2'),
(72, 1, 'e30f79182f0fdf6a40d813b0fd8f4ff2'),
(73, 1, 'e30f79182f0fdf6a40d813b0fd8f4ff2'),
(74, 2, 'ba8e77719bc315e6109c4d510e817db8'),
(75, 2, 'ba8e77719bc315e6109c4d510e817db8'),
(76, 2, 'ba8e77719bc315e6109c4d510e817db8'),
(77, 3, 'd7f42c805e182bd32271c415cd5b1944'),
(78, 3, 'd7f42c805e182bd32271c415cd5b1944');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Спорт'),
(2, 'Политика');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'Вася', ''),
(2, 'Посетитель111', '45622');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `image`, `name`, `description`, `price`) VALUES
(1, 'metla.png', 'Метла', 'Отличная метла для любого хозяйственного дворника!', 22),
(2, 'matches.png', 'Спички', 'Спички особые, изготовленные из редких пород дерева.', 1),
(3, 'vedro-plastik.jpg', 'Ведро', 'Пластиковое ведро с крепчайшей ручкой для самых сильных хозяев.', 14);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `prev` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category`, `prev`, `text`) VALUES
(1, 2, 'В штабе Зеленского не признают референдум в Крыму', 'КИЕВ, 15 апр — РИА Новости. Пресс-служба кандидата в президенты Украины Владимира Зеленского заявила, что в его штабе не признают референдум о воссоединении Крыма с Россией.\r\n\"Так называемый \"референдум\" не может считаться актом, свидетельствующим о свободном волеизъявлении жителей Крыма\", — говорится в заявлении, которое имеется в распоряжении РИА Новости.'),
(2, 2, 'Путин подписал закон о запрете размещения хостелов в жилых домах', 'МОСКВА, 15 апр - РИА Новости. Владимир Путин подписал закон о запрете размещения хостелов в многоквартирных домах с первого октября 2019 года, соответствующий документ опубликован на официальном портале правовой информации.\r\nЗакон запрещает использовать жилые помещения в качестве гостиницы или другого средства временного размещения. Предусматривается, что оказывать гостиничные услуги можно лишь после перевода жилого помещения в нежилое и оснащения его оборудованием надлежащего качества:');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `adres` text NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `adres`, `session_id`) VALUES
(1, 'Иван', '34234', 'Москва', 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(2, 'Name', '+78978978978', 'Dubai', '92d46174129088e026c6619a9317af62'),
(3, 'NewName', '+7(000)000-0000', 'Paris', '5c8a24fd6c3ba8056060f7d188b66bed'),
(4, 'James', '234235233', 'Berlin', 'e30f79182f0fdf6a40d813b0fd8f4ff2'),
(5, 'Oliver', '+78978978978', 'Oslo', 'ba8e77719bc315e6109c4d510e817db8'),
(6, 'Michele', '+78454545747', 'Rome', 'd7f42c805e182bd32271c415cd5b1944');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$10$GAh95KWqFf1Fw4YyH/BCnuODYbJ1Mln78vDuOIwj7WQvChhR8QcX.', '532000855d6a9f73b24ad4.22882762');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
