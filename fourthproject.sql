-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2021 at 07:13 PM
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
(13, 'fullsizeoutput_152.jpeg', 'EVNET ON MENTAL HEALTH', 'Behalf on the mental healthe wiht fkajsdp bwest coach in World', 'kfaspudn jakusd; fn pausd fpu paus dfnap. uasdf pa sdfa sdfuapsduf x ajdpfua pauspdf a', 'ranjan'),
(14, 'fullsizeoutput_153.jpeg', 'Event on Mental Health', 'I always wanted to join the gym. Finnaly i am attracted with the environment of AST GYM KHANA.', '      jfkjsd akjdf \r\naksjdf a\r\n kasdfhas\r\n asdjfa;usfnasdfha \r\na;sdfya sdf\r\nasdfya[ sfa dfafhpasep\r\nasdhfapenfa       ', 'ranjan'),
(18, 'fullsizeoutput_152.jpeg', 'Online Classes ', 'it was great experience learning online classes.', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'ram');

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
(21, 'Sita Ram Sharma', 'sita@gmail.com', 'I wanted to be the part of AST gym Khana'),
(22, 'Dhiren Thakur', 'd@gmail.com', 'I wanted to join the AST GYM and I want my dream shape. I HOPE u guys will help me.!!!!😎');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` mediumtext NOT NULL,
  `bywhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file`, `topic`, `name`, `description`, `bywhom`) VALUES
(23, 'michael-liao-8Qr1ixi-rMU-unsplash.jpg', 'EVNET ON MENTAL HEALTH', 'sdkjasdkfjklaj', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa', 'ranjan'),
(24, 'pexels-murilo-botelho-1865131.jpg', 'aksdjf', 'kdsjflkja', ';jdsfklajksdfjkajsdkjfpu apurenapdsfnpoenmxpf sowenaj\r\najsdkjpasndjanpfa\r\na sdhfpasdf ph\r\nasdfap', 'ranjan'),
(25, 'farshad-rezvanian-Eelegt4hFNc-unsplash.jpg', 'kjsdfkj', 'djksf;aj', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa', 'ranjan'),
(26, 'fullsizeoutput_5.jpeg', 'aksdjfpuxncp', 'ndpaudsfmp', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa ', 'ranjan'),
(27, 'fullsizeoutput_152.jpeg', 'ranjan', 'ranjan', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa', 'ranjan'),
(30, 'fullsizeoutput_152.jpeg', 'ranjan', 'ranjan', '                  ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa                  ', 'ram'),
(31, 'wallpapersden.com_mountains-silhouette_3000x1688.jpg', 'Abs', 'Bishal Rai', '            Ranjan than hiaksdjfpa sn iansdph npasi son one of the fitnesses icon youth of the country                      ', 'ram');

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
(15, 'Ranjan Thakur', 'Ranjan'),
(16, 'Arush Joshi', 'Arush'),
(17, 'Tejash Shrestha', 'Tejash'),
(19, 'Suresh Napit', 'Suresh');

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
(25, '2021-03-31', 123, 23, 44),
(26, '2021-04-14', 123, 23, 42);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
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
(41, 'fullsizeoutput_172.jpeg', 'Kabita Thapa', 'Kathmandu', 9810209050, 'kabita123@gmail.com', 'Tejash Shrestha', 'Starter', 'Cash on Hand'),
(42, 'fullsizeoutput_151.jpeg', 'Ranjan Thakur', 'Bhaktapur', 9810209060, 'ranjant401@gmail.com', 'Ranjan Thakur', 'Starter', 'Cash on Hand'),
(44, '22885835_1963559547195178_1990525828235341618_n.jpg', 'Bimala  Thakur', 'Kathmandu,Milijuli Chowk', 9861043599, 'bimala@gmail.com', 'Suresh Napit', 'Pro', 'Cash on Hand');

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
(20, '51608068_2354505994568285_8140387284319993856_n.jpg', 'Arush Joshi', 'Body Builder', 'Former Body Builder National Champion', 'ranjan'),
(21, '83897081_781170779052704_8855224469786984448_n.jpg', 'Suresh Napit', 'Diet Specialist', 'Former Diet Specialist of President', 'ranjan'),
(22, 'fullsizeoutput_17c.jpeg', 'Tejash Shrestha', 'Diet Specialist', 'Former Diet Specialist of National Player', 'ranjan'),
(23, '95187246_704119477085242_4262559753412018176_n.jpg', 'Ranjan Thakur', 'Body Builder', 'Former Body Builder ', 'ranjan');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `workout` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `howtodo` varchar(100) NOT NULL,
  `bywhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`id`, `file`, `workout`, `name`, `howtodo`, `bywhom`) VALUES
(2, 'gym-video.mp4', 'Biceps', 'Barbell Pull Up ', 'hold the bar and lift it slow and increase with the increase in reps', 'ranjan'),
(3, 'video.mp4', 'Abs', 'kajsdf', 'ksdjflkajs', 'ranjan');

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
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
