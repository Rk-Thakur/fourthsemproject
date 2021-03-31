-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2021 at 12:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fourthproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `summary` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `bywhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `file`, `topic`, `summary`, `description`, `bywhom`) VALUES
(1, 'fullsizeoutput_5.jpeg', 'EVNET ON MENTAL HEALTH', 'Behalf on the mental healthe wiht fkajsdp bwest coach in World', 'loremloremloremloremloremlorem\r\n\r\n\r\nloremloremloremlorem\r\n\r\nloremloremloremloremloremloremlorem\r\n\r\n\r\nloremloremloremloremlorem', 'ram'),
(2, 'fullsizeoutput_8.jpeg', 'Beginner  Lets Start', 'I always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.', 'I always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.\r\n\r\nI always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.\r\nI always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.\r\nI always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.', 'ram'),
(3, 'fullsizeoutput_176.jpeg', 'EVNET ON MENTAL HEALTH', 'Behalf on the mental healthe wiht fkajsdp bwest coach in World', 'Behalf on the mental healthe wiht fkajsdp bwest coach in WorldBehalf on the mental healthe wiht fkajsdp bwest coach in WorldBehalf on the mental healthe wiht fkajsdp bwest coach in WorldBehalf on the mental healthe wiht fkajsdp bwest coach in World', 'ram'),
(4, 'fullsizeoutput_153.jpeg', 'EVNET ON MENTAL HEALTH', 'I always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.', 'I always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.I always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.\r\nI always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.\r\nI always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.\r\nI always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(9, 'shyam', 'sh@gmail.com', 'ksdjlfajskdjfa'),
(18, 'Nitesh Kumar Shah', 'nitesh@gmail.com', 'I want to join AST . Please contact me!!!!'),
(19, 'ram', 'ram12@gmail.com', 'hello i wanna know more about your gym'),
(21, 'Sita Ram Sharma', 'sita@gmail.com', 'I wanted to be the part of AST gym Khana');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `bywhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file`, `topic`, `name`, `description`, `bywhom`) VALUES
(1, 'wallpapersden.com_mountains-silhouette_3000x1688.jpg', 'fasd', 'fasdfaa', 'sdfa', 'Ranjan'),
(2, 'fullsizeoutput_5.jpeg', 'modeling', 'mausam', 'akjsdfk', 'Ranjan'),
(3, 'abstract-art-blur-blurred-301664.jpg', 'fasadsf', 'asdf', 'safa', 'Ranjan'),
(5, 'aerial-photo-of-mountain-surrounded-by-fog-733174.jpg', 'fasdf', 'asdfa', 'asdfasd', 'Ranjan'),
(6, 'aerial-photo-of-mountain-surrounded-by-fog-733174.jpg', 'fasdf', 'asdfa', 'asdfasfd', 'Ranjan'),
(8, 'fullsizeoutput_5.jpeg', 'EVNET ON MENTAL HEALTH', 'ram', 'sdfasdf', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(12, 'ram', 'ram'),
(14, 'Ranjan', 'Ranjan');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `paymentDate` date DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `paymentDate`, `amount`, `due`, `id`) VALUES
(15, '2021-03-08', 20, 12, 17),
(16, '2021-12-31', 56, 12, 21);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `trainer` varchar(20) NOT NULL,
  `package` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `file`, `name`, `address`, `contact`, `email`, `trainer`, `package`, `payment`) VALUES
(17, 'fullsizeoutput_5.jpeg', 'Ranjan Thakur', 'kathmandu', 9876543211, 'ranjant401@gmail.com', 'Ranjan', 'Starter', 'Cash on Hand'),
(21, 'fullsizeoutput_153.jpeg', 'Dhiren Thapa', 'Saptari', 9810115860, 'dhiren@gmail.com', 'Arush', 'Pro', 'Cash on Hand'),
(22, 'fullsizeoutput_174.jpeg', 'ram', 'ktm', 123456789, 'ranjant401@gmail.com', 'Arush', 'Basic', 'Cash on Hand');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `name` varchar(30) NOT NULL,
  `specialist` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `bywhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `file`, `name`, `specialist`, `description`, `bywhom`) VALUES
(6, 'fullsizeoutput_5.jpeg', 'Rabindra Thapa ', 'Body Builder', 'Trainer of the year!!', 'ram'),
(7, 'fullsizeoutput_5.jpeg', 'Ranjan Thakur', 'Body Builder', 'Trainer of the Year', 'ram'),
(8, 'wallpapersden.com_mountains-silhouette_3000x1688.jpg', 'Ram Thapa', 'Body Builder', 'Trainer of the Year!!', 'ram'),
(9, 'wallpapersden.com_mountains-silhouette_3000x1688.jpg', 'Ranjan Thakur', 'Body Builder', 'Trainer of the Year!!', 'ram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registration` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
