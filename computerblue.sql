-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2015 at 12:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `computerblue`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `bemail` varchar(50) NOT NULL,
  `hotel` varchar(50) NOT NULL,
  `rating` int(100) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bemail`, `hotel`, `rating`, `date`) VALUES
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Hard Rock Hotel At Universal Orlando Resort', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Nickelodeon Suites Resort', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Nickelodeon Suites Resort', 1, '15/08/01');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `user` varchar(50) NOT NULL,
  `comment` longtext,
  `stars` int(5) NOT NULL,
  `place` varchar(25) DEFAULT NULL,
  `cdate` varchar(50) NOT NULL,
  `pemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user`, `comment`, `stars`, `place`, `cdate`, `pemail`) VALUES
('CK Stewart', 'Getting this done', 4, 'Orlando Magic', 'August 1, 2015 ', 'Jibrilstewart@yahoo.com'),
('Jibril Stewart', 'Can I leave a comment?', 1, 'Orlando Magic', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'Got it right finally', 4, 'Orlando Magic', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'Ucf the best', 1, 'UCF Football', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'get my money', 4, 'Orlando Predators', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'This the waterhizzy for shizzy', 1, 'Waterhouse Residence', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'This is universal', 4, 'Universal Studios', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'This is islands', 1, 'Islands of Adventure', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'It was too coo', 5, 'Ice Bar', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'Must of messed up', 1, 'The Beacham', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'Must of messed up', 1, 'The Beacham', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Jibril Stewart', 'Must of messed up', 1, 'The Beacham', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `photo`) VALUES
('CK Stewart', 'jibrilstewart@yahoo.com', 'flyers62', 'Jibrilstewart@yahoo.com.jpg'),
('Jibril Stewart', 'jibrilstewart27@gmail.com', 'Flyers62', 'Jibrilstewart27@gmail.com.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
