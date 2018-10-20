-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 03:06 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookit`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` varchar(255) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `ingridientID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`, `ingridientID`) VALUES
('ctg1', 'Meat', 'igd1'),
('ctg2', 'Meat', 'igd2');

-- --------------------------------------------------------

--
-- Table structure for table `ingridient`
--

CREATE TABLE `ingridient` (
  `ingridientID` varchar(255) NOT NULL,
  `ingridient1` varchar(255) DEFAULT NULL,
  `ingridient2` varchar(255) DEFAULT NULL,
  `ingridient3` varchar(255) DEFAULT NULL,
  `ingridient4` varchar(255) DEFAULT NULL,
  `ingridient5` varchar(255) DEFAULT NULL,
  `ingridient6` varchar(255) DEFAULT NULL,
  `ingridient7` varchar(255) DEFAULT NULL,
  `ingridient8` varchar(255) DEFAULT NULL,
  `ingridient9` varchar(255) DEFAULT NULL,
  `ingridient10` varchar(255) DEFAULT NULL,
  `ingridient11` varchar(255) DEFAULT NULL,
  `ingridient12` varchar(255) DEFAULT NULL,
  `ingridient13` varchar(255) DEFAULT NULL,
  `ingridient14` varchar(255) DEFAULT NULL,
  `ingridient15` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingridient`
--

INSERT INTO `ingridient` (`ingridientID`, `ingridient1`, `ingridient2`, `ingridient3`, `ingridient4`, `ingridient5`, `ingridient6`, `ingridient7`, `ingridient8`, `ingridient9`, `ingridient10`, `ingridient11`, `ingridient12`, `ingridient13`, `ingridient14`, `ingridient15`) VALUES
('igd1', 'Beef', 'Coconut Milk', 'Chili', 'Garlic', 'Onion', 'Turmeric', 'Ginger', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('igd2', 'Chicken', 'Flour', 'Mozzarella', 'Chili', 'Egg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipeID` varchar(255) NOT NULL,
  `recipeName` varchar(255) NOT NULL,
  `categoryID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipeID`, `recipeName`, `categoryID`) VALUES
('rcp1', 'Daging Rendang', 'ctg1'),
('rcp2', 'Ayam Geprek', 'ctg2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`),
  ADD KEY `ingridientID` (`ingridientID`);

--
-- Indexes for table `ingridient`
--
ALTER TABLE `ingridient`
  ADD PRIMARY KEY (`ingridientID`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipeID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`ingridientID`) REFERENCES `ingridient` (`ingridientID`);

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
