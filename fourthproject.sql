-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2021 at 05:51 AM
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
  `summary` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `bywhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `file`, `topic`, `summary`, `description`, `bywhom`) VALUES
(36, 'fullsizeoutput_152.jpeg', 'kajskd', 'ksdjfkl', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Ranjan Thakur'),
(52, '1.jpg', 'kdfjlj', 'kjdlkj', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Ranjan Thakur'),
(53, 'fullsizeoutput_152.jpeg', 'falsk', 'lkdsl;k', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Ranjan Thakur'),
(54, 'fullsizeoutput_5.jpeg', 'asd', 'jkladjslk', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Ranjan Thakur'),
(55, 'farshad-rezvanian-Eelegt4hFNc-unsplash.jpg', 'lkjkjfd', 'kjdslj', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Ranjan Thakur'),
(56, 'aerial-photo-of-mountain-surrounded-by-fog-733174.jpg', 'adskjfl', 'jlkdsjk', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Ranjan Thakur'),
(57, '81589287_489421458383853_971106618320093184_n.jpg', 'fasd', 'dsfa', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Arush Joshi'),
(58, '81589287_489421458383853_971106618320093184_n.jpg', 'kjhjihjkh', 'khkjhkj', 'it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.      ', 'Ranjan Thakur'),
(60, 'abc.jpg', 'ksdlfjals', 'Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.', '      it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.it was great experience learning online classes.', 'Ranjan Thakur');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(100) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bywhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `date`, `bywhom`) VALUES
(23, 'oe ranjan k gardai xas ', '2021-07-26 14:46:04', 'Arush Joshi'),
(24, 'yetekai basiraxu yar talai kasto xa ne', '2021-07-26 14:46:49', 'Ranjan Thakur'),
(25, 'yetekai basiraxu yar talai kasto xa ne', '2021-07-26 14:47:29', 'Ranjan Thakur'),
(26, 'Tejash payment sabbai clear gar hai ', '2021-07-26 14:59:49', 'Ranjan Thakur'),
(27, 'Ranjan Thakur ', '2021-08-06 16:03:54', 'Ranjan Thakur'),
(28, 'oe', '2021-08-12 04:24:45', 'Ranjan Thakur'),
(29, 'sdfa', '2021-08-12 04:26:48', 'Ranjan Thakur'),
(30, 'asdf', '2021-08-12 04:26:51', 'Ranjan Thakur'),
(31, 'fasdfa', '2021-08-12 04:26:54', 'Ranjan Thakur'),
(32, 'fasdfas', '2021-08-12 04:26:57', 'Ranjan Thakur');

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
(25, 'Ranjan Thakur', 'tranjan638@gmail.com', 'faskdfjlasd'),
(26, 'Ranjan thakur', 'tranjan@gmail.com', 'hello'),
(27, 'Ranjan thakur', 'tranjan@gmail.com', 'hello'),
(28, 'Ranjan thakur', 'tranjan@gmail.com', 'hello'),
(29, 'Ranjan thakur', 'tranjan@gmail.com', 'hello'),
(30, 'fsdkj', 't@gmail.com', 'ksjdfklja'),
(31, 'fsdkj', 't@gmail.com', 'ksjdfklja'),
(32, 'fsdkj', 't@gmail.com', 'ksjdfklja');

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
(41, 'fullsizeoutput_152.jpeg', 'lkj', 'kjkj', 'ljlkjlkdgjldndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(42, '2.jpg', 'kdjfgkljqkdj', 'dfkjlsg', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(43, '3.jpg', 'kjkj', 'jhkjh', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(44, 'fullsizeoutput_5.jpeg', 'kjdflg', 'lkjflkjgq`', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(45, '1.jpg', 'kjdfj', 'kdfjlkja', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(46, 'gert-boers-qQC8tyG_JVA-unsplash.jpg', 'jkjkfjdklj', 'kdjkslfjq', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa', 'Ranjan Thakur'),
(47, 'farshad-rezvanian-Eelegt4hFNc-unsplash.jpg', 'dreaddsf', 'dsfadsf', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa', 'Arush Joshi');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `file` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(41, '2021-08-19', 120, 12, 54),
(42, '2021-08-05', 123, 12, 53);

-- --------------------------------------------------------

--
-- Table structure for table `practise`
--

CREATE TABLE `practise` (
  `id` int(234) NOT NULL,
  `name` varchar(34) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `practise`
--

INSERT INTO `practise` (`id`, `name`, `date`) VALUES
(1, '89', '2021-07-26 13:38:34'),
(2, '54', '2021-07-26 13:40:35'),
(3, '54', '2021-07-26 13:41:22'),
(4, '132', '2021-07-26 13:41:25'),
(5, '132', '2021-07-26 13:41:54'),
(6, '21', '2021-07-26 13:47:13'),
(7, '45', '2021-07-26 13:49:31');

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
(42, 'fullsizeoutput_151.jpeg', 'Ranjan Thakur', 'Bhaktapur', 9810209060, 'ranjant401@gmail.com', 'Ranjan Thakur', 'Starter', 'Cash on Hand'),
(47, '81589287_489421458383853_971106618320093184_n.jpg', 'Ram Khatri', 'Kathmandu,Koteshwor', 9810209060, 'ram@gmai.com', 'Arush Joshi', 'Basic', 'Cash on Hand'),
(48, '2.jpg', 'kfajslj', 'jlksdjflk', 8976453212, 'ranjant401@gmail.com', 'Arush Joshi', 'Basic', 'Cash on Hand'),
(49, '81589287_489421458383853_971106618320093184_n.jpg', 'Mrigen Shakshya', 'Kathmandu,Sankhamul', 9810209060, 'roman.mrigen1@gmail.com', 'Arush Joshi', 'Basic', 'Online Transaction'),
(50, '81589287_489421458383853_971106618320093184_n.jpg', 'Serious Gurung', 'jungle', 9876543212, 'sergi@gmail.com', 'Arush Joshi', 'Basic', 'Cash on Hand'),
(51, 'pexels-dreamlens-production-896059.jpg', 'Ranjan Thakur', 'Kathmandu, Shantinagar', 9810209060, 'tranjan638@gmail.com', 'Arush Joshi', 'Pro', 'Cash on Hand'),
(52, 'Screen Shot 2021-01-29 at 11.32.41 PM.png', 'kath', 'kasdjs', 8912345687, 't@gmail.com', 'Ranjan Thakur', 'Starter', 'Cash on Hand'),
(53, '200.jpg', 'Bikram ', 'Baneshwor', 9810209060, 'bikram@gmail.com', 'Ranjan Thakur', 'Basic', 'Online Transaction'),
(54, 'background.jpeg', 'Ranjan thakru', 'kathmandy', 9810209094, 'tranjan@gmail.com', 'Tejash Shrestha', 'Pro', 'Cash on Hand');

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
(8, 'Arush', 'Arush Joshi'),
(9, 'Suresh', 'Suresh Napit'),
(27, 'Ram', 'Suresh Napit'),
(30, 'CONVINCE NEW MEMBER', 'Arush Joshi'),
(43, 'Ranjan Thakur', 'Ranjan Thakur');

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
(1, '51608068_2354505994568285_8140387284319993856_n.jpg', 'Arush Joshi', 'BoDy Builder', 'Former Body Builder Champion      ', 'Ranjan Thakur'),
(2, '83897081_781170779052704_8855224469786984448_n.jpg', 'Suresh Napit', 'Diet Specialist', 'Former Diet Specialist of National Player      ', 'Ranjan Thakur'),
(3, 'fullsizeoutput_17c.jpeg', 'Tejash Shrestha', 'Diet Specialist', 'Former Diet Specialist of President      ', 'Ranjan Thakur'),
(4, '95187246_704119477085242_4262559753412018176_n.jpg', 'Ranjan Thakur', 'Body Builder ', 'Former Body Builder', 'Ranjan Thakur');

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
(20, 'pexels-tima-miroshnichenko-5319439.mp4', 'fkajskldj', 'kjsdlkjf', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa', 'Ranjan Thakur'),
(21, 'pexels-tima-miroshnichenko-5319439.mp4', 'asdkj', 'ksjdk', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(22, 'pexels-tima-miroshnichenko-5319761.mp4', 'kjdxkfj', 'jlksdjf', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(23, 'pexels-tima-miroshnichenko-5319856.mp4', 'jhjkhhl', 'high', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(24, 'video.mp4', 'kvohfo k h', 'hg hgl ', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(25, 'pexels-tima-miroshnichenko-5319761.mp4', 'kjapsdn [', 'ajdp', 'j sndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa     ', 'Ranjan Thakur'),
(26, 'pexels-harvey-tan-villarino-6114481.mp4', 'hjgjlhl ', 'b pgjkghk b', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur'),
(27, 'pexels-tima-miroshnichenko-5319856.mp4', 'BACK WORKOUT', 'Barbel pRes up ksjdk', 'ndspafusdnf akjsdf;ka u adjsfpu askdfjpua sdfpausdf pausdf ausdfjapusdf apus dfapus [auspdfa      ', 'Ranjan Thakur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
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
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD UNIQUE KEY `file` (`file`) USING HASH;

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
-- Indexes for table `practise`
--
ALTER TABLE `practise`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file` (`file`) USING HASH;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `practise`
--
ALTER TABLE `practise`
  MODIFY `id` int(234) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
