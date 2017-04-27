-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 05:33 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myrecipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ingredients`
--

CREATE TABLE IF NOT EXISTS `tbl_ingredients` (
`ingredient_id` int(5) NOT NULL,
  `ingredient_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ingredients`
--

INSERT INTO `tbl_ingredients` (`ingredient_id`, `ingredient_name`) VALUES
(1, 'butter '),
(2, 'eggs '),
(3, 'milk '),
(4, 'parmesan '),
(5, 'cheddar'),
(6, 'chicken breast '),
(7, 'ground beef'),
(8, 'garlic '),
(9, 'onion '),
(10, 'olive '),
(11, 'tomato '),
(12, 'canned tuna '),
(13, 'salmon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recipe`
--

CREATE TABLE IF NOT EXISTS `tbl_recipe` (
`recipe_id` int(5) NOT NULL,
  `recipe_name` varchar(200) NOT NULL,
  `cooking_time` int(3) NOT NULL,
  `calories` int(3) NOT NULL,
  `carbs` int(3) NOT NULL,
  `fat` int(3) NOT NULL,
  `protein` int(3) NOT NULL,
  `ingredient_recipe_details` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_recipe`
--

INSERT INTO `tbl_recipe` (`recipe_id`, `recipe_name`, `cooking_time`, `calories`, `carbs`, `fat`, `protein`, `ingredient_recipe_details`, `description`, `image`, `status`) VALUES
(1, 'dfsdf', 10, 11, 20, 20, 220, 'dfdsf dsfdfdsf', 'df dsfsdfsd', '/asset/images/medicine.jpg', 0),
(2, 'dfsdf', 10, 11, 20, 20, 220, 'dfdsf dsfdfdsf', 'df dsfsdfsd', '/asset/images/medicine.jpg', 0),
(3, 'dfdsf', 23, 33, 34, 223, 33, 'fdsfsf', 'dsfsdf', '/asset/images/medicine.jpg', 0),
(4, 'gfdg', 33, 34, 22, 3, 43, 'dfdsfsd', 'ffff', '/asset/images/medicine.jpg', 0),
(5, 'gggfdg', 334, 434, 343, 2, 23, 'ewfrwer', 'ewrewrwer', '/asset/images/medicine.jpg', 0),
(6, 'gfdgfdg', 34, 34, 342, 23, 3, 'dsfdfs', 'fdsfsd', '/asset/images/medicine.jpg', 0),
(7, 'fdvd', 3432, 4324, 32432, 324, 324, 'dfsdf', 'fdsfsd', '/asset/images/medicine.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recipe_ingredients`
--

CREATE TABLE IF NOT EXISTS `tbl_recipe_ingredients` (
`recipe_ingredients_id` int(5) NOT NULL,
  `ingredients_id` int(5) NOT NULL,
  `recipe_id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_recipe_ingredients`
--

INSERT INTO `tbl_recipe_ingredients` (`recipe_ingredients_id`, `ingredients_id`, `recipe_id`) VALUES
(1, 1, 1),
(2, 12, 1),
(3, 4, 1),
(4, 13, 1),
(5, 11, 1),
(6, 1, 2),
(7, 12, 2),
(8, 4, 2),
(9, 13, 2),
(10, 11, 2),
(11, 6, 3),
(12, 3, 3),
(13, 13, 3),
(14, 8, 4),
(15, 3, 4),
(16, 9, 4),
(17, 7, 5),
(18, 4, 5),
(19, 1, 6),
(20, 12, 6),
(21, 1, 7),
(22, 12, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_singredients`
--

CREATE TABLE IF NOT EXISTS `tbl_singredients` (
`singredients_id` int(5) NOT NULL,
  `tbl_ingredient_ingredient_id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_singredients`
--

INSERT INTO `tbl_singredients` (`singredients_id`, `tbl_ingredient_ingredient_id`) VALUES
(1, 1),
(2, 12),
(3, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ingredients`
--
ALTER TABLE `tbl_ingredients`
 ADD PRIMARY KEY (`ingredient_id`);

--
-- Indexes for table `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
 ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `tbl_recipe_ingredients`
--
ALTER TABLE `tbl_recipe_ingredients`
 ADD PRIMARY KEY (`recipe_ingredients_id`);

--
-- Indexes for table `tbl_singredients`
--
ALTER TABLE `tbl_singredients`
 ADD PRIMARY KEY (`singredients_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ingredients`
--
ALTER TABLE `tbl_ingredients`
MODIFY `ingredient_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
MODIFY `recipe_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_recipe_ingredients`
--
ALTER TABLE `tbl_recipe_ingredients`
MODIFY `recipe_ingredients_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_singredients`
--
ALTER TABLE `tbl_singredients`
MODIFY `singredients_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
