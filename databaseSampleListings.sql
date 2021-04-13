-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2021 at 12:13 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplaceimport`
--

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

DROP TABLE IF EXISTS `listing`;
CREATE TABLE IF NOT EXISTS `listing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(280) NOT NULL,
  `image` text NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`id`, `title`, `description`, `image`, `userid`) VALUES
(1, 'Math test', 'A very hard math test', 'https://noodlepros.ghost.io/content/images/wordpress/2019/04/antoine-dautry-428776-unsplash-scaled.jpg', 1),
(2, 'science test', 'A very simple science test', 'https://www.statnews.com/wp-content/uploads/2016/11/8thGradeScienceTest_Illustration_MollyFerguson_111816-645x645.jpg', 1),
(3, 'motorcycle', 'A super cool high-tech motorcycle', 'https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5dfead704e2917000783aada%2F0x0.jpg', 2),
(4, 'Covid-19 toy', 'a plush toy of the covid 19 virus', 'https://www.gannett-cdn.com/presto/2020/03/27/PDTF/e24f3235-67ed-49a6-a31e-5bd3b46737b9-GIANTmicrobes_Coronavirus_with_card.jpg', 2),
(5, 'The Hitchhikers guide to the galaxy', 'A very cool sci-fi comedy book.', 'https://d3525k1ryd2155.cloudfront.net/h/411/030/1116030411.0.x.jpg', 2),
(6, 'Old Phone', 'An old nokia phone', 'https://static.dezeen.com/uploads/2017/02/nokia_3310_blue_mobile-phone-technology-news_sq2.jpg', 3),
(7, 'New Flip Phone', 'A high-tech flip phone', 'https://static01.nyt.com/images/2020/03/11/business/11techfix-promo/merlin_170030805_0fd3748f-c182-4615-bcf9-cd8d8ceefca4-superJumbo.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromUserid` int(11) NOT NULL,
  `toUserid` int(11) NOT NULL,
  `listingid` int(11) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `offerdesc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `passwordHash` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `passwordHash`) VALUES
(1, 'test', 'pass'),
(2, 'Daniel', 'pass'),
(3, 'Jess', 'pass'),
(4, 'RealHumanPerson', 'pass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
