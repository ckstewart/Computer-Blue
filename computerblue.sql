-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2015 at 02:16 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lricha35`
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
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 2, '15/08/01'),
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 4, '15/08/01'),
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Rosen Inn at Pointe Orlando', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Hard Rock Hotel At Universal Orlando Resort', 1, '15/08/01'),
('jibrilstewart27@gmail.com', 'Nickelodeon Suites Resort', 3, '15/08/01'),
('jibrilstewart27@gmail.com', 'Nickelodeon Suites Resort', 1, '15/08/01'),
('lricha35@fau.edu', 'Hard Rock Hotel At Universal Orlando Resort', 5, '15/08/01');

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
('Jibril Stewart', 'Must of messed up', 1, 'The Beacham', 'August 1, 2015 ', 'Jibrilstewart27@gmail.com'),
('Louis', 'Luma on Park is okay', 3, 'Luma on Park', 'August 1, 2015 ', 'Lricha35@fau.edu'),
('Dan', 'It was alright...', 3, 'Universal Studios', 'August 1, 2015 ', 'Dmena2013@fau.edu'),
('', '', 0, '', 'August 1, 2015 ', ''),
('Louis', 'This place is okay but expensive', 3, 'California Grill', 'August 1, 2015 ', 'Lricha35@fau.edu'),
('Louis', 'Ripleys is ok', 2, 'Ripleys Believe it or Not', 'August 1, 2015 ', 'Lricha35@fau.edu'),
('Louis', 'This place is boring', 1, 'Museum of Seminole County', 'August 1, 2015 ', 'Lricha35@fau.edu');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `locale` text NOT NULL,
  `site` text NOT NULL,
  `img_url` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`locale`, `site`, `img_url`, `keywords`) VALUES
('Orlando Magic', 'Sports.php', 'img/magic.jpg', 'Football Basketball Soccer College Sports Orlando Magic'),
('Luma on Park', 'Restaurants.php', 'img/luma.jpg', 'Food Restaurants Grill Cafe Diner Luma on Park'),
('UCF Football', 'Sports.php', 'img/ucf.jpg', 'Football Basketball Soccer College Sports UCF Football'),
('UCF Basketball', 'Sports.php', 'img/ucfbasketball.jpg', 'Football Basketball Soccer College Sports UCF Basketball'),
('Orlando City SC', 'Sports.php', 'img/orlandocity.jpg', 'Football Basketball Soccer College Sports Orlando City SC'),
('Orlando Predators', 'Sports.php', 'img/predators.jpg', 'Football Basketball Soccer College Sports Orlando Predators'),
('Ravenous Pig', 'Restaurants.php', 'img/pig.jpg', 'Food Restaurants Grill Cafe Diner Ravenous Pig'),
('Hillstone', 'Restaurants.php', 'img/hillstone.jpg', 'Food Restaurants Grill Cafe Diner Hillstone'),
('California Grill', 'Restaurants.php', 'img/caligrill.jpg', 'Food Restaurants Grill Cafe Diner California Grill'),
('Cask and Larder', 'Restaurants.php', 'img/cask.jpg', 'Food Restaurants Grill Cafe Diner Cask and Larder'),
('Universal Studios', 'Theme Park.php', 'img/universal.jpg', 'Theme Park Attraction Amusement Adventure'),
('Disney World', 'Theme Park.php', 'img/disney.jpg', 'Theme Park Attraction Amusement Adventure'),
('Islands of Adventure', 'Theme Park.php', 'img/islands.jpg', 'Theme Park Attraction Amusement Adventure'),
('SeaWorld', 'Theme Park.php', 'img/seaworld.JPG', 'Theme Park Attraction Amusement Adventure'),
('Epcot', 'Theme Park.php', 'img/epcot.jpg', 'Theme Park Attraction Amusement Adventure'),
('Discovery Cove', 'Sight Seeing.php', 'img/cove.jpg', 'Sight Seeing Tour Excursion'),
('Lake Eola Park', 'Sight Seeing.php', 'img/eola.jpg', 'Sight Seeing Tour Excursion'),
('Kelly Park', 'Sight Seeing.php', 'img/kellypark.jpg', 'Sight Seeing Tour Excursion'),
('Orlando Balloon Rides', 'Sight Seeing.php', 'img/balloon.jpg', 'Sight Seeing Tour Excursion'),
('Gatorland', 'Sight Seeing.php', 'img/gator.jpg', 'Sight Seeing Tour Excursion'),
('Orlando Trophy Bass', 'Outdoor Activities.php', 'img/bass.jpg', 'Outdoor Nature Hiking Fishing Water Sports Park'),
('Orlando Watersports Complex', 'Outdoor Activities.php', 'img/watersport.jpg', 'Outdoor Nature Hiking Fishing Water Sports Park'),
('Paddleboard Orlando', 'Outdoor Activities.php', 'img/paddleboard.jpg', 'Outdoor Nature Hiking Fishing Water Sports Park'),
('Divers Direct', 'Outdoor Activities.php', 'img/divers.jpg', 'Outdoor Nature Hiking Fishing Water Sports Park'),
('Grand Cypress', 'Outdoor Activities.php', 'img/golf.jpg', 'Outdoor Nature Hiking Fishing Water Sports Park golf'),
('La Nouba Cirque Du Soleil', 'Theater.php', 'img/nouba.jpg', 'Theater Ampitheater Movie Hall Playhouse circus'),
('Orlando Shakespeare Theater', 'Theater.php', 'img/shakespeare.jpg', 'Theater Ampitheater Movie Hall Playhouse shakespeare'),
('Blue Man Group', 'Theater.php', 'img/blueman.jpg', 'Theater Ampitheater Movie Hall Playhouse'),
('Mad Cow Theater', 'Theater.php', 'img/cow.jpg', 'Theater Ampitheater Movie Hall Playhouse'),
('Waterhouse Residence', 'Art and History.php', 'img/waterhouse.jpg', 'Art History Museum Exhibition'),
('Museum of Seminole County History', 'Art and History.php', 'img/seminole.jpg', 'Art History Museum Exhibition'),
('Ripleys Believe it or not', 'Art and History.php', 'img/ripleys.jpg', 'Art History Museum Exhibition'),
('Museum of Military History', 'Art and History.php', 'img/military.jpg', 'Art History Museum Exhibition'),
('Fort Christmas Historical Park', 'Art and History.php', 'img/christmas.jpg', 'Art History Museum Exhibition'),
('The Spa', 'Recreation.php', 'img/spa.jpg', 'Recreation Wellness Gym Exercise'),
('Fort Gatlin Recreation Complex', 'Recreation.php', 'img/gatlin.jpg', 'Recreation Wellness Gym Exercise'),
('UCF Recreation and Wellness', 'Recreation.php', 'img/ucfrec.jpg', 'Recreation Wellness Gym Exercise'),
('Ritz-Carlton Span', 'Recreation.php', 'img/ritz.jpg', 'Recreation Wellness Gym Exercise'),
('Orlando International Premium Outlets', 'Shopping.php', 'img/outlets.jpg', 'Shopping Mall Purchase Spending'),
('Mall at Millenia', 'Shopping.php', 'img/millenia.jpg', 'Shopping Mall Purchase Spending'),
('Florida Mall', 'Shopping.php', 'img/mall.jpg', 'Shopping Mall Purchase Spending'),
('Pointe Orlando', 'Shopping.php', 'img/pointe.jpg', 'Shopping Mall Purchase Spending'),
('Downtown Disney', 'Shopping.php', 'img/downtown.jpg', 'Shopping Mall Purchase Spending'),
('Icebar', 'Night Life.php', 'img/icebar.jpg', 'Night Life Bar Club Lounge Pub'),
('LUX Ultra Lounge', 'Night Life.php', 'img/lux.jpg', 'Night Life Bar Club Lounge Pub'),
('The Beacham', 'Night Life.php', 'img/beacham.jpg', 'Night Life Bar Club Lounge Pub'),
('Red Coconut Club', 'Night Life.php', 'img/coconut.jpg', 'Night Life Bar Club Lounge Pub'),
('House of Blues', 'Night Life.php', 'img/blues.jpg', 'Night Life Bar Club Lounge Pub');

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
('Jibril Stewart', 'jibrilstewart27@gmail.com', 'Flyers62', 'Jibrilstewart27@gmail.com.jpg'),
('louis', 'lricha35@fau.edu', 'pass', 'Lricha35@fau.edu.jpg'),
('Dan', 'dmena2013@fau.edu', '1234', 'Dmena2013@fau.edu.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
