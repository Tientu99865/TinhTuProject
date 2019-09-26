-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 05:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_account` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_account`, `admin_password`) VALUES
(1, 'Tien Tu', 'admin', 'admin123'),
(2, 'Tien Tu', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `url`, `position`, `display`) VALUES
(3, 'Trang chủ ', 'http://localhost/TinhTuProject/', 1, 0),
(4, 'Liên hệ', '', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` decimal(15,2) NOT NULL,
  `selling_price` decimal(15,2) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `introduce` text COLLATE utf8_unicode_ci NOT NULL,
  `made_in` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `product_name`, `product_price`, `selling_price`, `image`, `introduce`, `made_in`, `post_on`) VALUES
(6, 4, 'Son', '1.00', '1.00', 'Editing-Delete-icon.png', '<p>Good</p>\r\n', 'Việt Nam', '2019-09-17 10:57:47'),
(3, 4, 'Son11', '1.00', '1.00', '9b763a6e539c32594990589d88e4b2f7.jpg', '<p>Good</p>\r\n', 'Việt Nam', '2019-09-17 11:17:43'),
(4, 4, 'ádasd', '1.00', '1.00', 'Untitled.png', '<p>sadas</p>\r\n', 'Việt Nam', '2019-09-13 14:05:58'),
(5, 4, 'Son', '1.00', '1.00', '12-Courses-for-Starting-Your-Web-Development-Journ', '<p>adas</p>\r\n', 'Việt Nam', '2019-09-13 14:43:34'),
(7, 4, 'ádasd', '2.00', '2.00', 'giay-sneaker-trang.jpg', '<p>&acirc;</p>\r\n', 'Việt Nam', '2019-09-24 16:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(255) NOT NULL,
  `slide_image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `post_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_image`, `description`, `post_on`) VALUES
(5, 'giay-sneaker-trang.jpg', '<p>ấ</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-09-26 22:10:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
