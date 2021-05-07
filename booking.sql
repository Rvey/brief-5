-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 12:36 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--


# INSERT INTO `users` (`id`, `username`, `password`, `fname`) VALUES
# (1, 'neovic', 'devierte', 'Neovic Devierte'),
# (2, 'gemalyn', 'cepe', 'Gemalyn Cepe');



CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `username` varchar(30) NOT NULL,
                         `password` varchar(30) NOT NULL,
                         `fname` varchar(100) NOT NULL,
                         PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `book` (
  `id` int(11) primary key NOT NULL,
  `room_name` varchar(50) DEFAULT NULL,
  `room_type` varchar(50) DEFAULT NULL,
  `room_view` varchar(50) DEFAULT NULL,
   adult_nbr    varchar(20) DEFAULT NULL,
  adult_choice varchar(20) DEFAULT NULL,
  kids_nbr     varchar(20) DEFAULT NULL,
  babys_nbr    varchar(20) DEFAULT NULL,
  `pension_name` varchar(50) DEFAULT NULL,
  `pension_type` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `unique_id` varchar(50) DEFAULT NULL


) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# create table 'book' (
#     id int(11) primary key auto_increment,
#     room_name varchar(50) default null,
#     room_type varchar(50) default null,
#     room_view varchar(50) default null,
#     pension_name varchar(50) default null,
#     pension_type varchar(50) default null,
#     total varchar(50) default null,
#     unique_id int(11)
#
#
# );




--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `room_name`, `room_type`, `room_view`, `pension_name`, `pension_type`, `total`, `unique_id`) VALUES
(78, 'simple', '', '', 'complete', '', '200', 'Re885470'),
(79, 'appartement', '', 'Vue interieur', 'demi', 'Petit dej/din', '470', 'Re885470'),
(80, 'double', 'lit double', 'Vue interieur', 'complete', '', '240', 'Re930712'),
(81, 'appartement', '', 'Vue interieur', 'demi', 'Petit dej/din', '470', 'Re930712'),
(82, 'double', 'lit double', 'Vue interieur', 'complete', '', '240', 'Re401791'),
(83, 'appartement', '', 'Vue interieur', 'demi', 'Petit dej/din', '470', 'Re401791');

-- --------------------------------------------------------

--
-- Table structure for table `pension`
--

CREATE TABLE `pension` (
  `id` int(11) NOT NULL,
  `pension_name` varchar(50) DEFAULT NULL,
  `pension_price` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pension`
--

INSERT INTO `pension` (`id`, `pension_name`, `pension_price`) VALUES
(1, 'demi', '70'),
(2, 'complete', '120'),
(3, 'sans', '0');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_name` varchar(20) DEFAULT NULL,
  `room_price` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_name`, `room_price`) VALUES
(1, 'simple', '80'),
(2, 'double', '120'),
(3, 'bungalo', '320'),
(4, 'appartement', '400');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_view`
--

CREATE TABLE `room_view` (
  `id` int(11) NOT NULL,
  `view_name` varchar(50) DEFAULT NULL,
  `view_price` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_view`
--

INSERT INTO `room_view` (`id`, `view_name`, `view_price`) VALUES
(1, 'Vue interieur', '0,7'),
(2, 'Vue exterieur', '0,25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_view`
--
ALTER TABLE `room_view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `pension`
--
ALTER TABLE `pension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_view`
--
ALTER TABLE `room_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


select * from book;