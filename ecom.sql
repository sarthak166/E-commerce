-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2016 at 01:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sid` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `quan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sid`, `pid`, `quan`) VALUES
('sarthak1', 'Ecom23473', 3),
('sarthak1', 'Ecom24646', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cname` varchar(100) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cname`, `dat`) VALUES
('Electronics', '2016-06-28 04:21:40'),
('Fashion', '2016-06-28 04:31:06'),
('Home Applicienses', '2016-06-28 04:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sid` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `quan` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fn` varchar(100) NOT NULL,
  `ln` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postal` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `feed` text NOT NULL,
  `orderid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sid`, `pid`, `quan`, `email`, `fn`, `ln`, `address`, `postal`, `country`, `state`, `phone`, `feed`, `orderid`) VALUES
('sarthak1', 'Ecom10916', 3, 'sarthak16657@gmail.com', 'sarthak', 'chaudhary', 'ranjit avenue', 143001, 'United States', 'Maharashtra', '8872845454', 'qwer', 'Order17131');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `scat` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quan` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `feat` text NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `cat`, `scat`, `brand`, `pname`, `model`, `price`, `quan`, `color`, `feat`, `dat`) VALUES
('Ecom10053', 'Electronics', 'Laptops', 'Apple', 'Apple MacBook Air Core i5 (5th Gen) ', 'Ultrabook MMGF2HN/A', 63390, 32, 'Silver', 'Core i5 (5th Gen)\r\n8 GB RAM\r\n128 GB HDD, 128 GB SSD\r\nMac OS X Mountain Lion\r\n', '2016-06-30 16:19:42'),
('Ecom10390', 'Electronics', 'Laptops', 'HP', 'HP Pavilion15 AB Core i5 6th Generation', 'Notebook T0Z73PA', 61000, 7, 'Silver', 'Intel Core i5\r\n8 GB RAM\r\n1 TB HDD\r\nWindows 10\r\n', '2016-06-30 16:19:20'),
('Ecom10916', 'Electronics', 'Headphones', 'Sennheiser', 'Sennheiser In-the-ear Wired Headphones', 'CX213', 899, 37, 'Black', 'In the Ear Headphone<br/>\r\nWired Connectivity\r\nCanalphone\r\n3.5 mm Headphone Jack\r\n', '2016-07-03 10:09:33'),
('Ecom11287', 'Electronics', 'Laptops', 'Lenovo', 'Lenovo G50-80 Core i5 (5th Gen)', 'Notebook 80E503CMIH', 38990, 29, 'Black', 'Core i5 (5th Gen)\r\n8 GB RAM\r\n1 TB HDD\r\nFree DOS\r\n', '2016-06-29 15:33:41'),
('Ecom12854', 'Electronics', 'Mobiles', 'Samsung', 'SAMSUNG Galaxy S7', 'S7', 48900, 120, 'Gold Silver', 'QHD S AMOLED Display\r\n4 GB RAM | 32 GB ROM\r\nDual Pixel Camera\r\n3000 mAh Battery\r\n', '2016-06-29 14:20:09'),
('Ecom131', 'Electronics', 'Mobiles', 'Samsung', 'SAMSUNG Galaxy J5 - 6', 'J5', 12990, 28, 'Gold', '5.2" sAMOLED Display\r\n13MP|5MP; Dual Flash\r\nAndroid Marshmallow 6\r\n3100mAh Battery\r\n', '2016-06-29 13:58:10'),
('Ecom1335', 'Electronics', 'Mobiles', 'Samsung', 'SAMSUNG Galaxy S6 Edge', 'S6 Edge', 40900, 62, 'Gold Platinum', '5.1 inch Touchscreen\r\nAndroid v5 OS\r\nOcta Core Processor\r\n16 MP Primary Camera\r\n3 GB RAM | 32 GB ROM\r\n', '2016-06-29 14:22:56'),
('Ecom13422', 'Electronics', 'Laptops', 'Dell', 'Dell Inspiron Intel Core i3 (4th Gen)', '2 in 1 Laptop Y563501HIN9', 37490, 66, 'Silver', 'Intel Core i3 (4th Gen)\r\n4 GB RAM\r\n500 GB HDD\r\nWindows 10\r\n', '2016-06-30 16:17:55'),
('Ecom14370', 'Electronics', 'Laptops', 'Lenovo', 'Lenovo Core i3 (5th Gen)', 'Notebook 80E502Q3IH', 34989, 36, 'Black', 'Core i3 (5th Gen)\r\n4 GB RAM\r\n1 TB HDD\r\nFree DOS\r\n', '2016-06-30 16:07:25'),
('Ecom14462', 'Electronics', 'Mobiles', 'Motorola', 'Moto X Play', 'X Play', 15499, 74, 'Black', '5.5 inch FHD Screen\r\nCamera: 21MP|5MP\r\n3630 mAh Battery\r\nCorning Gorilla Glass3\r\n', '2016-06-29 14:26:11'),
('Ecom15800', 'Electronics', 'Mobiles', 'Samsung', 'SAMSUNG Galaxy On7', 'On7', 9490, 30, 'Gold', '5.5 Inch HD Display\r\nCamera: 13MP|5MP\r\n3000 mAh Battery\r\nSupports MixRadio\r\n', '2016-06-29 13:56:02'),
('Ecom1680', 'Electronics', 'Mobiles', 'Mi', 'Redmi Note 3', 'Redmi Note 3', 9999, 25, 'Gold', '5.5" FHD Display\r\n16MP|5MP Camera\r\n2GB RAM|16GB ROM\r\nAndriod 5.1 OS\r\n', '2016-06-29 15:09:55'),
('Ecom19492', 'Electronics', 'Mobiles', 'Mi', 'Redmi 2 Prime', 'Redmi 2 Prime', 6999, 33, 'Black', '4.7 inch HD IPS Screen\r\nCamera: 8MP|2MP\r\n4G LTE, Dual SIM\r\n2200 mAh battery\r\n', '2016-06-29 14:59:52'),
('Ecom20056', 'Electronics', 'Laptops', 'HP', 'HP AC 15-AC122TU core i3 (5th Gen)', 'Notebook N8M18PA', 26490, 44, 'Grey', 'Core i3 (5th Gen)\r\n4 GB RAM\r\n1 TB HDD\r\nFree DOS\r\n', '2016-06-29 15:27:13'),
('Ecom20457', 'Electronics', 'Laptops', 'Dell', 'Dell Inspiron 5555 APU Quad Core A10', 'Notebook Z566120HIN9', 37990, 26, 'Black', 'APU Quad Core A10\r\n8 GB RAM\r\n1 TB HDD\r\nWindows 10\r\n', '2016-06-29 15:45:18'),
('Ecom20493', 'Electronics', 'Headphones', 'JBL', 'JBL C300SI Dynamic Wired Headphones', 'C300SI', 1199, 45, 'Black', 'Design: Over the Head', '2016-06-29 16:32:29'),
('Ecom22331', 'Electronics', 'Laptops', 'HP', 'HP 15-af114AU APU Quad Core A8 ', 'A8', 24990, 42, 'Silver', 'APU Quad Core A8\r\n4 GB RAM\r\n1 TB HDD\r\nWindows 10\r\n', '2016-06-29 15:24:54'),
('Ecom23275', 'Fashion', 'Men Footwear', 'True Sole', 'True Sole Loafers', 'Loafers', 777, 52, 'Grey', 'Material: Suede\r\nOccasion: Casual\r\nColor: Grey, Navy\r\n', '2016-07-03 17:01:58'),
('Ecom23433', 'Electronics', 'Mobiles', 'Apple', 'Apple iPhone 6', 'Apple iPhone 6', 36499, 31, 'Space Grey', 'iOS 9 OS\r\n4.7" HD Display\r\nCamera: 8MP|1.2MP\r\nFingerprint Sensor\r\n', '2016-06-29 15:13:36'),
('Ecom23473', 'Electronics', 'Laptops', 'HP', 'HP 15-ac123tx Core i5 (5th Gen)', 'Notebook N8M28PA', 40990, 21, 'Turbo SIlver', 'Core i5 (5th Gen)\r\n4 GB RAM\r\n1 TB HDD\r\nWindows 10\r\n', '2016-06-29 15:29:13'),
('Ecom24646', 'Electronics', 'Headphones', 'Sony', 'Sony mdr zx110a Wired Headphones', 'mdr zx110a', 629, 88, 'White', 'Over the Ear\r\nWired Connectivity\r\nOver the Head\r\n\r\n', '2016-06-29 16:24:29'),
('Ecom25633', 'Electronics', 'Headphones', 'Sennheiser', 'Sennheiser CX 180 In-ear-canalphone', 'CX 180', 889, 56, 'Black Grey', 'In-the-ear Headphones\r\nWired Connectivity\r\nIn-ear-canalphone\r\n20-20000 Hz Frequency\r\n', '2016-06-30 16:08:03'),
('Ecom26510', 'Electronics', 'Mobiles', 'Apple', 'Apple iPhone 5S', 'Apple iPhone 5S', 21499, 21, 'Silver', '8 MP iSight Camera\r\niOS 7\r\nFull HD Recording\r\nFaceTime HD Camera\r\n', '2016-06-29 15:14:58'),
('Ecom27987', 'Electronics', 'Mobiles', 'Mi', 'Mi 4', 'Mi 4', 14999, 22, 'White', '5 inch Touchscreen\r\nAndroid v4.4 OS\r\n13 MP Primary Camera\r\n8 MP Secondary Camera\r\n', '2016-06-29 15:08:27'),
('Ecom28314', 'Electronics', 'Laptops', 'Apple', 'Apple MacBook Air Core i5 (5th Gen) ', 'Ultrabook MJVE2HN/A', 59997, 63, 'Silver', 'Intel Core i5\r\n4 GB RAM\r\n128 GB SSD\r\nMac OS\r\n\r\n', '2016-06-30 14:56:38'),
('Ecom29320', 'Electronics', 'Headphones', 'JBL', 'JBL T250SI On-the-ear Headphone', 'T250SI', 849, 99, 'Black', 'On-the-ear Headphone\r\nOver-the-head\r\nWired Connectivity\r\nSupra-aural Headphone\r\n', '2016-06-29 16:20:46'),
('Ecom29363', 'Electronics', 'Laptops', 'Dell', 'Dell Inspiron 3558 Core i3 (5th Gen)', 'Notebook Z565104HIN9', 29990, 23, 'Black', 'Core i3 (5th Gen)\r\n4 GB RAM\r\n500 GB HDD\r\nWindows 10\r\n', '2016-06-29 15:41:48'),
('Ecom2991', 'Electronics', 'Mobiles', 'Apple', 'Apple iPhone 6S', 'Apple iPhone 6S', 46499, 48, 'Space Grey', 'iOS 9 OS\r\n4.7" Retina HD Display\r\nCamera: 12MP|5MP\r\n3D Touch & Live Photos\r\n', '2016-06-29 15:16:27'),
('Ecom30724', 'Electronics', 'Laptops', 'Lenovo', 'Lenovo IdeaPad Core i3', 'Notebook 80RK002UIH', 27989, 52, 'Black', 'Core i3 (5th Gen)\r\n4 GB RAM\r\n500 GB HDD\r\nWindows 10\r\n', '2016-06-30 16:10:05'),
('Ecom31042', 'Electronics', 'Mobiles', 'Mi', 'Mi 5', 'Mi 5', 24999, 44, 'Black', '5.15" FHD Display\r\nCamera: 16MP|4MP\r\nSnapdragon 820|1.8GHz\r\n3000 mAh Battery\r\n', '2016-06-29 15:02:44'),
('Ecom31676', 'Electronics', 'Mobiles', 'Apple', 'Apple iPhone 5C', 'Apple iPhone 5C', 31000, 10, 'Yellow', 'iOS 7\r\n8 MP iSight Camera\r\nFull HD Recording\r\nFaceTime HD Camera\r\n', '2016-06-29 15:17:44'),
('Ecom3628', 'Electronics', 'Mobiles', 'Motorola', 'Moto Turbo', 'Turbo', 39990, 38, 'Black', 'Turbo Charging\r\n5.2 inch QHD Display\r\n3900 mAh Battery\r\n21 MP Primary Camera\r\n', '2016-06-29 14:55:28'),
('Ecom4208', 'Electronics', 'Laptops', 'Dell', 'Dell Vostro Pentium Dual Core ', 'Notebook dv3805c4500d', 19990, 25, 'Black', 'Pentium Dual Core\r\n4 GB RAM\r\n500 GB HDD\r\nUbuntu\r\n', '2016-06-30 16:20:21'),
('Ecom493', 'Electronics', 'Laptops', 'Lenovo', 'Lenovo Ideapad 15IBD Core i3 ', 'Notebook 80QQ001XIH', 23989, 62, 'Black', 'Core i3 (5th Gen)\r\n4 GB RAM\r\n500 GB HDD\r\nFree DOS\r\n', '2016-06-30 16:11:03'),
('Ecom5005', 'Electronics', 'Mobiles', 'Mi', 'Mi 4i', 'Mi 4i', 11999, 55, 'Grey', '2nd-gen Snapdragon 615\r\n13MP Primary Camera\r\n4.4V 3030 mAh Battery\r\n5 inch Full HD Display\r\n', '2016-06-29 15:01:10'),
('Ecom519', 'Electronics', 'Headphones', 'JBL', 'JBL T26C Wired Headphones', 'T26C', 699, 64, 'Black', 'On the Ear Headphone\r\nWired Connectivity\r\nOver the Head\r\n', '2016-06-29 16:25:56'),
('Ecom554', 'Electronics', 'Mobiles', 'Samsung', '  SAMSUNG Galaxy J7 - 6 ', 'J7 - 6 (New 2016 Edition', 15990, 20, 'Gold', '5.5" sAMOLED Display\r\n13MP|5MP; Dual Flash\r\nAndroid Marshmallow 6\r\n3300mAh Battery\r\n', '2016-06-30 16:12:51'),
('Ecom5878', 'Electronics', 'Mobiles', 'Motorola', 'Moto X (2nd Generation)', 'X (2nd Generation)', 14999, 88, 'Black', 'Android v4.4.4 OS\r\n2.5 GHz Processor\r\n5.2 inch Touchscreen\r\n13 MP Primary Camera\r\n', '2016-06-29 14:57:29'),
('Ecom6056', 'Electronics', 'Laptops', 'Apple', 'Apple MacBook Pro 2015 Core i5', 'Ultrabook MF841HN/A', 136999, 12, 'Silver', 'Core i5 (5th Gen)\r\n8 GB RAM\r\n512 GB SSD\r\nMac OS\r\n', '2016-06-30 16:11:55'),
('Ecom6713', 'Electronics', 'Mobiles', 'Samsung', 'SAMSUNG Tizen Z3', 'Z3', 5753, 45, 'Silver', '5 inch Display\r\nDual Sim (GSM + WCDMA)\r\n8 MP|5 MP Camera\r\nQuad Core Processor\r\n', '2016-06-29 14:17:31'),
('Ecom8671', 'Electronics', 'Mobiles', 'Motorola', 'Moto G (3rd Generation)', 'G (3rd Generation)', 10999, 65, 'White', 'IPX7 Water Resistance\r\nCamera: 13MP|5MP\r\nCorning Gorilla Glass3\r\n2GB RAM|16GB ROM\r\n\r\n', '2016-06-29 14:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`) VALUES
('sarthak1', 'sarthak', 'b5e50dc6642a7fce5f623c097de86fa1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `uq_cart` (`sid`,`pid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cname`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD UNIQUE KEY `uq_orders` (`sid`,`pid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pname` (`pname`,`model`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
