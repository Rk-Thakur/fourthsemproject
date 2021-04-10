-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2021 at 10:43 PM
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
(36, 'fullsizeoutput_152.jpeg', 'kajskd', 'ksdjfkl', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Ranjan Thakur'),
(37, 'fullsizeoutput_5.jpeg', 'sjfklj', 'ksdjflk', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Ranjan Thakur'),
(38, 'aerial-photo-of-mountain-surrounded-by-fog-733174.jpg', 'kjdklfj', 'ksjdfkaj', '            it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.                  ', 'Ranjan Thakur'),
(40, 'fullsizeoutput_152.jpeg', 'kjdf', 'jkdsjfkl', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Tejash Shrestha'),
(41, 'fullsizeoutput_178.jpeg', 'djf', 'kjdlkfja', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Tejash Shrestha'),
(42, 'pexels-dreamlens-production-896059.jpg', 'kdjsf', 'kjdfkjs', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Tejash Shrestha'),
(43, 'fullsizeoutput_8.jpeg', 'kdsjf', 'kjdlkjf', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Tejash Shrestha');

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
(22, 'Dhiren Thakur', 'd@gmail.com', 'I wanted to join the AST GYM and I want my dream shape. I HOPE u guys will help me.!!!!😎'),
(24, 'Ranjan Thakur', 'tranjan638@gmail.com', 'I want to join the east fitness center');

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
(32, 'aerial-photo-of-mountain-surrounded-by-fog-733174.jpg', 'jfkaj', 'ksjdkfj', '	ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(33, 'wallpapersden.com_mountains-silhouette_3000x1688.jpg', 'sdflkj', 'kdjsf', '	ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(34, 'abstract-art-blur-blurred-301664.jpg', 'kjdf', 'kjkd', '	ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(35, 'fullsizeoutput_5.jpeg', 'adfj', 'kdjfks', 'adj	ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(36, 'fullsizeoutput_9.jpeg', 'dfjklj', 'kjdsklj', '	ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(37, 'fullsizeoutput_1c.jpeg', 'fdjgklkdjafj', 'kdjafkj', '	ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur');

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
(19, 'Suresh Napit', 'Suresh'),
(22, 'ram', 'ram');

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
(26, '2021-04-14', 123, 23, 42),
(29, '2021-02-23', 12, 2, 41),
(30, '2021-02-23', 23, 12, 47);

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
(44, '22885835_1963559547195178_1990525828235341618_n.jpg', 'Bimala  Thakur', 'Kathmandu,Milijuli Chowk', 9861043599, 'bimala@gmail.com', 'Suresh Napit', 'Pro', 'Cash on Hand'),
(47, '81589287_489421458383853_971106618320093184_n.jpg', 'Ram Khatri', 'Kathmandu,Koteshwor', 9810209060, 'ram@gmai.com', 'Arush Joshi', 'Basic', 'Cash on Hand');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `list` varchar(100) NOT NULL,
  `bywhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `list`, `bywhom`) VALUES
(5, 'Ranjan send the text to kathmandu', 'Tejash Shrestha'),
(7, 'Call the new person', 'Ranjan Thakur'),
(8, 'Arush', 'Arush Joshi'),
(9, 'Suresh', 'Suresh Napit'),
(10, 'Ranjan Thakur', 'Ranjan Thakur'),
(23, 'ram', 'Ranjan Thakur');

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
(3, '83897081_781170779052704_8855224469786984448_n.jpg', 'Suresh Napit ', 'Diet Specialist', 'Former Diet specialist of National Player      ', 'Arush Joshi'),
(4, 'fullsizeoutput_17c.jpeg', 'Tejash Shrestha', 'Diet Specialist', 'Former Diet specialist of President      ', 'Arush Joshi'),
(5, '95187246_704119477085242_4262559753412018176_n.jpg', 'Ranjan Thakur', 'Body Builder', 'Former Body Builder      ', 'Arush Joshi'),
(6, '51608068_2354505994568285_8140387284319993856_n.jpg', 'Arush Joshi', 'Body Builder', 'Former Body Builder Champion      ', 'Arush Joshi');

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
(5, 'video.mp4', 'Back', 'Incline Dumbell', '      Mat kar maya ko ahankar Mat kar maya ko ahankar Mat kar maya ko ahankar      \r\n      ', 'Ranjan Thakur'),
(7, 'Masked Wolf - Astronaut In The Ocean (Official Lyric Video).mp4', 'kajsdk', 'kajsdkfj', 'Mat kar maya ko ahankar Mat kar maya ko ahankar Mat kar maya ko ahankar', 'Ranjan Thakur'),
(9, 'pexels-tima-miroshnichenko-5319088.mp4', 'dsfjlk', 'kdjsfjkj', 'Mat kar maya ko ahankar Mat kar maya ko ahankar Mat kar maya ko ahankar      ', 'Arush Joshi'),
(10, 'pexels-tima-miroshnichenko-5319429.mp4', 'kjdfg', 'kjdsfklj', 'Mat kar maya ko ahankar Mat kar maya ko ahankar Mat kar maya ko ahankar      ', 'Arush Joshi'),
(11, 'pexels-tima-miroshnichenko-5319433.mp4', 'jkasdjk', 'ksdjfkj', 'aksdjflkajdskjsdjfaksjdkj     fasdjfas djkljasdkfa sd n askd asdnfashdf a\r\najsdhkfja;sd\r\n      ', 'Arush Joshi'),
(12, 'pexels-tima-miroshnichenko-5319439.mp4', 'djflkjaks', 'kjdsfkljl', 'jaksdjflkajdskjsdjfaksjdkj      aksdjflkajdskjsdjfaksjdkj      aksdjflkasurenas a;ue \r\na ;sdkua\r\ne  ', 'Arush Joshi'),
(13, 'pexels-tima-miroshnichenko-5319756.mp4', 'sdkjfkl', 'jkdjsfklj', 'kdsajfklasjdfnasdfna sdfhas\r\na;sdkufya[ \r\nna;skdufa\r\naksdfa\r\n      ', 'Arush Joshi'),
(14, 'pexels-tima-miroshnichenko-5319856.mp4', 'kdsjf', 'kjdsfklj', 'kdsajfklasjdfnasdfna sdfhas a;sdkufya[ na;skdufa aksdfa      ', 'Arush Joshi'),
(15, 'pexels-tima-miroshnichenko-5319761.mp4', 'dfkjkl', 'djflj', 'kdsajfklasjdfnasdfna sdfhas a;sdkufya[ na;skdufa aksdfa', 'Arush Joshi');

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
-- Indexes for table `todo`
--
ALTER TABLE `todo`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
