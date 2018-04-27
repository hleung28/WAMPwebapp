-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 10:19 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tradingcardsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `baseballcards`
--

CREATE TABLE `baseballcards` (
  `id` int(30) NOT NULL,
  `PlayerName` varchar(50) NOT NULL,
  `CardNumber` varchar(20) NOT NULL,
  `PlayerTeam` varchar(50) NOT NULL,
  `ProductCompany` varchar(10) NOT NULL,
  `CardSet` varchar(100) NOT NULL,
  `CardSubset` varchar(100) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `CardCondition` varchar(10) NOT NULL,
  `User` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baseballcards`
--

INSERT INTO `baseballcards` (`id`, `PlayerName`, `CardNumber`, `PlayerTeam`, `ProductCompany`, `CardSet`, `CardSubset`, `Price`, `CardCondition`, `User`) VALUES
(1, 'Kris Bryant', '1', 'Chicago Cubs', 'Topps', '2017 Series 1', 'Base', '1.00', 'Near Mint', 'Test123'),
(2, 'Derek Jeter', '1987A-DJ', 'New York Yankees', 'Topps', '2017 Series 1', '1987 30th Anniversary Autograph', '995.95', 'Near Mint', 'CardCollector87'),
(3, 'Mike Trout', '20', 'Los Angeles Angels', 'Topps', '2017 Series 1', 'Base', '0.89', 'Very Good', 'CardCollector87'),
(6, 'Sonny Gray', '177', 'Oakland Athletics', 'Topps', '2017 Series 1', 'Base', '0.75', 'Near Mint', 'OaklandFan192');

-- --------------------------------------------------------

--
-- Table structure for table `oaklandplayers`
--

CREATE TABLE `oaklandplayers` (
  `id` int(30) NOT NULL DEFAULT '0',
  `PlayerName` varchar(50) NOT NULL,
  `CardNumber` varchar(20) NOT NULL,
  `PlayerTeam` varchar(50) NOT NULL,
  `ProductCompany` varchar(10) NOT NULL,
  `CardSet` varchar(100) NOT NULL,
  `CardSubset` varchar(100) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `CardCondition` varchar(10) NOT NULL,
  `User` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oaklandplayers`
--

INSERT INTO `oaklandplayers` (`id`, `PlayerName`, `CardNumber`, `PlayerTeam`, `ProductCompany`, `CardSet`, `CardSubset`, `Price`, `CardCondition`, `User`) VALUES
(6, 'Sonny Gray', '177', 'Oakland Athletics', 'Topps', '2017 Series 1', 'Base', '0.75', 'Near Mint', 'OaklandFan192');

-- --------------------------------------------------------

--
-- Table structure for table `testlist1`
--

CREATE TABLE `testlist1` (
  `id` int(30) NOT NULL DEFAULT '0',
  `PlayerName` varchar(50) NOT NULL,
  `CardNumber` varchar(20) NOT NULL,
  `PlayerTeam` varchar(50) NOT NULL,
  `ProductCompany` varchar(10) NOT NULL,
  `CardSet` varchar(100) NOT NULL,
  `CardSubset` varchar(100) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `CardCondition` varchar(10) NOT NULL,
  `User` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testlist1`
--

INSERT INTO `testlist1` (`id`, `PlayerName`, `CardNumber`, `PlayerTeam`, `ProductCompany`, `CardSet`, `CardSubset`, `Price`, `CardCondition`, `User`) VALUES
(1, 'Kris Bryant', '1', 'Chicago Cubs', 'Topps', '2017 Series 1', 'Base', '1.00', 'Near Mint', 'Test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baseballcards`
--
ALTER TABLE `baseballcards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baseballcards`
--
ALTER TABLE `baseballcards`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
