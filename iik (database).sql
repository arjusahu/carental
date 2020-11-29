-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2020 at 07:25 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `logid` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `mobile` bigint(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`logid`, `name`, `email`, `pwd`, `mobile`) VALUES
('arju', 'arju sahu', 'arju12@gmail.com', 'arju123', 11234567),
('aru', 'aru sahu', 'aru12@gmail.com', 'aru', 2536475858);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookingid` int(11) NOT NULL AUTO_INCREMENT,
  `logid` varchar(20) NOT NULL,
  `carname` varchar(20) NOT NULL,
  `bookingdate` varchar(20) NOT NULL,
  `pickuptime` varchar(20) NOT NULL,
  `days` int(11) NOT NULL,
  `location` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB AUTO_INCREMENT=89095 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `logid`, `carname`, `bookingdate`, `pickuptime`, `days`, `location`, `price`, `status`) VALUES
(2, 'arju', 'mahindra XOU-400', '23-03-2019', '3:40', 4, 'DDDDD', '3333', 'GVHVG'),
(3, 'arju', 'Mahindra KUV-100', '2019-06-05', '2:40', 6, 'select location', '11900', 'Booking successfull'),
(4, 'aru33', 'Mahindra KUV-100', '2019-06-05', '2:40', 5, 'select location', '41940', 'Booking successfull'),
(6, 'arju2233', 'Mahindra KUV-100', '2019-06-12', '2:77', 5, 'select location', '9600', 'Booking successfull'),
(7, 'aru', 'mahindra', '3-7-2019', '5:-06', 8, 'nnn', '3400', 'done'),
(60, 'arju', 'mahindra XOU-400', '23-03-2019', '3:40', 4, 'DDDDD', '3333', 'GVHVG'),
(72, 'arju2233', 'Mahindra KUV-100', '2019-06-05', '2:40', 7, 'select location', '', ''),
(73, 'arju2233', 'Mahindra KUV-100', '2019-06-12', '2:40', 7, 'select location', '', ''),
(74, 'arju2233', 'Mahindra KUV-100', '2019-06-13', '2:40', 6, 'select location', '', ''),
(75, 'arju2233', 'Mahindra KUV-100', '2019-06-12', '23:08', 8, 'select location', '', ''),
(76, 'arju2233', 'Mahindra KUV-100', '2019-06-12', '23:06', 7, 'select location', '', ''),
(77, 'arju2233', 'Mahindra KUV-100', '2019-06-12', '23:06', 7, 'select location', '', ''),
(78, 'arju2233', 'Mahindra KUV-100', '2019-06-13', '23:09', 8, 'select location', '', ''),
(79, 'arju2233', 'Mahindra KUV-100', '2019-06-19', '01:07', 6, 'select location', '', ''),
(80, 'arju2233', 'Mahindra KUV-100', '2019-06-08', '22:59', 2, 'Airport terminal 1', '', ''),
(81, 'arju2233', 'Mahindra KUV-100', '2019-06-08', '22:59', 2, 'Airport terminal 1', '', ''),
(82, 'arju2233', 'Mahindra KUV-100', '2019-06-08', '22:59', 2, 'Airport terminal 1', '', ''),
(83, 'arju2233', 'Mahindra KUV-100', '2019-06-12', '05:06', 5, 'select location', '', ''),
(84, 'arju2233', 'Mahindra KUV-100', '2019-06-06', '04:05', 6, 'select location', '11900', 'Booking successfull'),
(85, 'arju2233', 'Mahindra KUV-100', '2019-06-05', '00:59', 5, 'select location', '9600', 'Booking successfull'),
(86, 'arju2233', 'Bugati', '2019-06-05', '00:59', 6, 'select location', '41940', 'Booking successfull'),
(87, 'arju2233', 'Mahindra KUV-100', '2019-06-06', '23:09', 9, 'select location', '18800', 'Booking successfull'),
(88, 'arju2233', 'Mahindra KUV-100', '2019-06-12', '05:07', 3, 'select location', '5000', 'Booking successfull'),
(89087, 'aru', 'mahindra', '3-7-2019', '5:-06', 8, 'nnn', '3400', 'done'),
(89088, 'aru33', 'Mahindra KUV-100', '2019-10-10', '04:08', 9, 'kanpur central', '200', 'boooking successfully'),
(89089, 'aru33', 'Mahindra KUV-100', '2019-10-10', '04:08', 9, 'kanpur central', '18800', 'Booking successfull'),
(89090, 'aru33', 'Mahindra KUV-100', '2019-10-10', '04:59', 9, 'Airport terminal 1', '18800', 'Booking successfull'),
(89091, 'aru', 'Mahindra KUV-100', '0005-04-23', '00:45', 5, 'Airport terminal 1', '9600', 'Booking successfull'),
(89092, 'aru', 'creta', '2006-07-04', '04:05', 7, 'Airport terminal 1', '14600', 'Booking successfull'),
(89093, 'aru', 'creta', '2019-11-04', '23:00', 6, 'Airport terminal 2', '12200', 'Booking successfull'),
(89094, 'vipin', 'Lomborghini', '2020-02-06', '01:30', 1, 'Airport terminal 1', '8800', 'Booking successfull');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `name` varchar(30) DEFAULT NULL,
  `carid` varchar(20) NOT NULL,
  `carimage` varchar(20) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `seat` varchar(20) DEFAULT NULL,
  `des` varchar(30) DEFAULT NULL,
  `price1` varchar(10) DEFAULT NULL,
  `price2` varchar(20) DEFAULT NULL,
  `price3` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`name`, `carid`, `carimage`, `color`, `seat`, `des`, `price1`, `price2`, `price3`) VALUES
('Mahindra KUV-100', '1', 'mahii.jpg', 'Grey', '6 Seater', 'Diesel', '2300', '3400', '5000'),
('Mahindra XUV-100', '2', 'mahii2.png', 'White', '6 Seater', 'Diesel', '3700', '5400', '6000'),
('Toyota Innova Crystal', '3', 'toyato3.jpg', 'saffron', '7 Seater', 'Diesel', '5980', '6790', '7900'),
('Maruti Swift', '4', 'maruti4.jpg', 'White', '6 Seater', 'Diesel', '3100', '4500', '5980'),
('creta', '5', 'creta.jpeg', 'White', '6 Seater', 'Diesel', '2400', '3790', '5000'),
('redi-GO', '6', 'redigo.jpg', 'red', '5 Seater', 'Diesel', '2588', '4690', '5900'),
('Maruti Ertiga', '7', 'marutiertiga.jpg', 'Saffron', '5 Seater', 'Diesel', '2300', '4500', '6000'),
('Maruti Dzire', '8', 'marutidzire.png', 'Blue', '5 Seater', 'Diesel/petrol', '3700', '4690', '7900'),
('Tata Tiago', '9', 'tatatiago.jpg', 'Orange', '5 Seater', 'Diesel/petrol', '2900', '3400', '9000'),
('Maruti Baleno', '10', 'marutibaleno.jpg', 'Blue', '5 Seater', 'Diesel', '3100', '4690', '6000'),
('Hyundai Venue', '11', 'hyundaivenue.jpg', 'Blue', '6 Seater', 'Diesel', '3100', '4690', '7900'),
('Fort Ecosport', '12', 'fortecosport.jpg', 'Grey', '5 Seater', 'Diesel', '3700', '4690', '7900'),
('Bugati', '13', 'bugatti.jpg', 'black/orange', '4 Seater', 'Diesel', '9980', '11000', '12000'),
('Ferrari', '14', 'ferrari.jpg', 'Red', '4 Seater', 'Diesel', '9000', '11900', '12300'),
('Aston Martin', '15', 'astonmartin.jpg', 'Black', '4 Seater', 'Diesel', '8900', '9900', '14000'),
('Lomborghini', '16', 'lamborghini2.png', 'White', '4 Seater', 'Diesel', '8800', '9800', '11900');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `logid` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `number` bigint(30) DEFAULT NULL,
  `msg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`logid`, `name`, `email`, `number`, `msg`) VALUES
('wwww', 'aaa', 'sss@k.l', 3333333333, 'hjfjhvhv');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `logid` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `number` bigint(30) DEFAULT NULL,
  `msg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`logid`, `name`, `email`, `number`, `msg`) VALUES
('arjusahu', 'aaaa', 'aaa@j.b', 222222, 'hvhjhfjgj'),
('arjusahu', 'aaaa', 'aaa@j.b', 222222, 'hvhjhfjgj'),
('arjusahu', 'aaaa', 'aaa@j.b', 222222, 'hvhjhfjgj');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `logid` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `mobile` bigint(30) DEFAULT NULL,
  PRIMARY KEY (`logid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logid`, `name`, `email`, `pwd`, `mobile`) VALUES
('arju', 'piyush patel', 'rishusahdjhu23@gmail.com', 'qqq', 7733879354),
('arju2233', 'iiirr', 'erte@gmail.com', '666', 234566),
('aru', 'arju sahu', '23@gmail.com', 'aru', 7733879354),
('aru33', 'iiii', 'eee@gmail.com', '666', 234566),
('aru77', 'arju sahu', 'xyz@abc.com', '6666', 1234456),
('uuuu', 'arju sahu', 'uuu@gmail.com', 'rrr', 123456789),
('vipin', 'vipin pal', 'arjuvipin12@gmail.com', 'vipin', 7733879354);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
