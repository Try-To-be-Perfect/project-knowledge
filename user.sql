-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 01:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledge`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_u` int(50) NOT NULL,
  `f_name_u` varchar(50) NOT NULL,
  `l_name_u` varchar(50) NOT NULL,
  `email_u` varchar(50) NOT NULL,
  `pwd_u` varchar(40) NOT NULL,
  `mobile_u` int(19) NOT NULL,
  `b_day_u` date NOT NULL,
  `gender_u` varchar(10) NOT NULL,
  `country_u` varchar(50) NOT NULL,
  `interest_u` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_u`, `f_name_u`, `l_name_u`, `email_u`, `pwd_u`, `mobile_u`, `b_day_u`, `gender_u`, `country_u`, `interest_u`) VALUES
(1, 'Asraful', 'Islam Spondon', 'aislamspondon@gmail.com', 'kjkjk', 1963510362, '2019-12-17', 'male', 'Bangladesh', 'engineering'),
(2, 'Asraful', 'Islam Spondon', 'aspodo@gmail.com', 'ijeadl;adkjf', 1963510363, '2019-12-17', 'male', 'Bangladesh', 'english,engineering,commarce'),
(3, 'Asraful', 'Islam Spondon', 'aislamspondon@gmail.com', 'kjhkh', 1963510362, '2019-12-17', 'male', 'Bangladesh', 'english,engineering,commarce'),
(4, 'Mahadi', 'Hasan', 'mahadih150@gmail.com', '9108237409812', 1688008158, '2019-12-17', 'male', 'Bangladesh', 'engineering,science'),
(5, 'Mahadi', 'Hasan', 'mh12@gmail.com', '123456', 1688008158, '2019-12-18', 'male', 'Bangladesh', 'engineering'),
(6, 'Mahadi', 'Hasan', 'mahadih150@gmail.com', 'esw', 1688008158, '2019-12-03', 'male', 'Bangladesh', 'engineering'),
(7, '', '', '', '', 0, '0000-00-00', 'male', 'Afghanistan', ''),
(8, '', '', '', '', 0, '0000-00-00', 'male', 'Afghanistan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`,`email_u`,`mobile_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
