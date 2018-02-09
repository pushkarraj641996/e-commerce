-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 10:19 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertdata`(fname varchar(20), lname varchar(20), email varchar(20), password varchar(20))
BEGIN
INSERT INTO signup(FirstName, LastName, EmailId, password) VALUES(fname, lname, email, password);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `bid` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `Title`, `price`, `Image`) VALUES
(1, 'The Time Machine', 81, 'images/1a.jpg'),
(2, 'Hyperion', 127, 'images/2a.jpg'),
(3, 'The Forever War', 730, 'images/3a.jpg'),
(4, 'The Martian', 299, 'images/4a.jpg'),
(5, 'Enders Game', 450, 'images/5a.jpg'),
(6, 'Pride and Prejudice', 199, 'images/6a.jpg'),
(7, 'Fifty Shades of Grey', 160, 'images/7a.jpg'),
(8, 'The Notebook', 203, 'images/8a.jpg'),
(9, 'A Walk To Remember', 203, 'images/9a.jpg'),
(10, 'The Fault In Our Stars', 190, 'images/10a.jpg'),
(11, 'Love Story', 100, 'images/11a.jpg'),
(12, 'The Raven Prince', 258, 'images/12a.jpg'),
(13, 'Wings Of Fire: An Autobiography', 188, 'images/13a.jpg'),
(14, 'The Motorcycle Diaries', 235, 'images/14a.jpg'),
(15, 'Steve Jobs', 278, 'images/15a.jpg'),
(16, 'Travelling To Infinity', 299, 'images/16a.jpg'),
(17, 'The Other Side Of Me', 201, 'images/17a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `Order_id` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `Bookname` varchar(20) NOT NULL,
  `Image` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Total_price` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `temp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Order_id`, `Book_id`, `Bookname`, `Image`, `price`, `quantity`, `Total_price`, `email`, `temp`) VALUES
(1, 1, 'The Time Machine', 'images/1a.jpg', 81, 1, 299, 'raj@gmail.com', '0000-00-00 00:00:00'),
(1, 2, 'Hyperion', 'images/2a.jpg', 127, 1, 426, 'raj@gmail.com', '0000-00-00 00:00:00'),
(2, 4, 'The Martian', 'images/4a.jpg', 299, 2, 1698, 'raj@gmail.com', '0000-00-00 00:00:00'),
(2, 5, 'Enders Game', 'images/5a.jpg', 450, 1, 2148, 'raj@gmail.com', '0000-00-00 00:00:00'),
(3, 2, 'Hyperion', 'images/2a.jpg', 127, 2, 742, 'raj@gmail.com', '0000-00-00 00:00:00'),
(3, 9, 'A Walk To Remember', 'images/9a.jpg', 203, 1, 945, 'raj@gmail.com', '0000-00-00 00:00:00'),
(4, 8, 'The Notebook', 'images/8a.jpg', 203, 1, 1249, 'raj@gmail.com', '0000-00-00 00:00:00'),
(4, 17, 'The Other Side Of Me', 'images/17a.jpg', 201, 3, 1852, 'raj@gmail.com', '0000-00-00 00:00:00'),
(4, 10, 'The Fault In Our Sta', 'images/10a.jpg', 190, 1, 2042, 'raj@gmail.com', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`Name`, `email`, `Subject`, `Message`) VALUES
('', 'raghu@gmail.com', '', 'Testing this function'),
('pushkar', 'raj@gmail.com', 'test2', 'testing again...');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`Order_id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ShippingAddress` varchar(100) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zip_code` int(11) NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `ShippingMethod` varchar(20) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL,
  `Email_id` varchar(20) NOT NULL,
  `Order_Amount` int(11) NOT NULL,
  `temp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `FirstName`, `LastName`, `Email`, `ShippingAddress`, `Country`, `State`, `City`, `Zip_code`, `contactNo`, `ShippingMethod`, `PaymentMethod`, `Email_id`, `Order_Amount`, `temp`) VALUES
(1, 'Pushkar', 'Raj', 'raj@gmail.com', '219, essjay divine bliss', 'India', 'Karnataka', 'Bangalore', 560098, '7899858542', 'Free Shipping', 'Cash on delivery', 'raj@gmail.com', 218, '0000-00-00 00:00:00'),
(2, 'Pushkar', 'Raj', 'raj@gmail.com', '219, essjay divine bliss', 'India', 'Karnataka', 'Bangalore', 560098, '7899858542', 'Free Shipping', 'Credit Card', 'raj@gmail.com', 1100, '0000-00-00 00:00:00'),
(3, 'Pushkar', 'Raj', 'raj@gmail.com', '219, essjay divine bliss', 'India', 'Karnataka', 'Bangalore', 560098, '7899858542', 'Standard Shiping', 'Cash on delivery', 'raj@gmail.com', 488, '0000-00-00 00:00:00'),
(4, 'Pushkar', 'Raj', 'raj@gmail.com', '219, essjay divine bliss', 'India', 'Karnataka', 'Bangalore', 560098, '7899858542', 'Free Shipping', 'Cash on delivery', 'raj@gmail.com', 1046, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
`uid` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `EmailId` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`uid`, `FirstName`, `LastName`, `EmailId`, `password`) VALUES
(1, 'Pushkar', 'Raj', 'raj@gmail.com', 'password123'),
(2, 'Raghav', 'SK', 'raghu@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
