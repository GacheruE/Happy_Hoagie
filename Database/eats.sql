-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 06:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eats`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `images` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `name`, `price`, `images`, `status`) VALUES
(80, 'Hoagie', 450, 'images/sub.jpeg', 'ENABLE'),
(81, 'French fries', 150, 'images/frenchfries.jpg', 'ENABLE'),
(82, 'sandwich', 600, 'images/sandwich.jpg', 'ENABLE'),
(83, 'Tacos', 500, 'images/taco.jpeg', 'ENABLE'),
(84, 'burger', 550, 'images/burger.jpg', 'ENABLE'),
(85, 'Burrito', 500, 'images/burrito.jfif', 'ENABLE'),
(86, 'Churros', 400, 'images/churros.jfif', 'ENABLE'),
(88, 'platter', 1323, 'images/6134b79bc70112.41480732.png', 'ENABLE'),
(90, 'food7', 780, 'images/6134dbc7d78250.41165484.jpeg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `food_orders`
--

CREATE TABLE `food_orders` (
  `ClientName` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_orders`
--

INSERT INTO `food_orders` (`ClientName`, `item_id`, `name`, `price`, `quantity`, `Total`) VALUES
('', '', 'burger', '550', '', ''),
('dssd', 'dssd550', '', '', '', '550'),
('', '', 'burger', '550', '', ''),
('', '', 'burger', '550', '', ''),
('dssd', 'dssd550', '', '', '', '550'),
('', '', 'burger', '550', '', ''),
('', '', 'burger', '550', '2', ''),
('', '', 'burger', '550', '2', ''),
('dssd', 'dssd1100', '', '', '', '1100'),
('', '', 'burger', '550', '2', ''),
('', '', 'French fries', '150', '2', ''),
('', '', 'sandwich', '600', '2', ''),
('', '', 'Tacos', '500', '2', ''),
('', '', 'French fries', '150', '2', ''),
('', '', 'sandwich', '600', '2', ''),
('', '', 'Tacos', '500', '2', ''),
('Fiona', 'Fiona2500', '', '', '', '2500'),
('', '', 'French fries', '150', '2', ''),
('', '', 'sandwich', '600', '2', ''),
('', '', 'Tacos', '500', '2', ''),
('', '', 'French fries', '150', '2', ''),
('', '', 'Tacos', '500', '2', ''),
('', '', 'Tacos', '500', '2', ''),
('', '', 'Tacos', '500', '2', ''),
('Susan', 'Susan1000', '', '', '', '1000'),
('', '', 'Tacos', '500', '2', ''),
('', '', 'Hoagie', '450', '2', ''),
('', '', 'platter', '1323', '2', ''),
('', '', 'platter', '1323', '2', ''),
('', '', 'platter', '1323', '2', ''),
('Cedric', 'Cedric2646', '', '', '', '2646'),
('', '', 'platter', '1323', '2', ''),
('', '', 'Hoagie', '450', '2', ''),
('', '', 'French fries', '150', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Second_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `First_name`, `Second_Name`, `Email`, `password`, `Phone_Number`, `usertype`) VALUES
(1, 'Wewe', 'Yeye', 'lo@gmail.com', '12', '', 'client'),
(3, 'admin', 'admin', 'admin@gmail.com', '12', '', 'admin'),
(5, 'dssd', 'sd', 'sd@gmail.com', '12', '12', 'client'),
(6, 'Esther', 'Gacheru', 'esther@gmail.com', '1234', '098764545', 'admin'),
(7, 'Fiona', 'Wacuka', 'fiona@gmail.com', 'pop', '07998764543', 'client'),
(8, 'Susan', 'Wanjiru', 'susan@gmail.com', 'pin', '0722774632', 'client'),
(9, 'Cedric', 'Okubo', 'cedric@gmail.com', 'eye', '0788998765', 'client'),
(10, 'Peter', 'Gacheru', 'peter@gmail.com', 'yes', '0722356721', 'admin'),
(11, 'admin2', 'Gash', 'admin2@gmail.com', 'eat', '0799876545', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
