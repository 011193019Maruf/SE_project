-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 06:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_categorie`
--

CREATE TABLE `admin_categorie` (
  `ID` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_categorie`
--

INSERT INTO `admin_categorie` (`ID`, `categories`, `status`, `added_on`) VALUES
(2, 'Others', 1, '2022-12-05 04:52:56'),
(6, 'Salad', 1, '0000-00-00 00:00:00'),
(7, 'Dessert', 1, '0000-00-00 00:00:00'),
(8, 'Veg', 0, '0000-00-00 00:00:00'),
(9, 'Non-Veg', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`ID`, `username`, `email`, `password`) VALUES
(1, 'admin', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(2, 'mim', 'mim@gmail.com', '01911511509', 'test bug', '2022-12-05 09:51:16'),
(3, 'pasta', 'meherinmim486@gmail.com', '018554991', 'nice', '2022-12-12 11:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `customer_users`
--

CREATE TABLE `customer_users` (
  `ID` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_users`
--

INSERT INTO `customer_users` (`ID`, `name`, `email`, `password`, `phone`, `added_on`) VALUES
(1, 'mim', 'mim1@gmaiil.com', '', 1151152256, '2022-12-05 16:43:36'),
(3, 'pasta', 'meherinmim486@gmail.com', 'gerstgfv', 1895215, '2022-12-12 03:42:20'),
(4, 'mim', 'mim@gmail.com', '1234', 872, '2022-12-12 04:29:12'),
(5, 'x', 'x@gmail.com', '123', 11111, '2022-12-13 07:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy`
--

CREATE TABLE `delivery_boy` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_boy`
--

INSERT INTO `delivery_boy` (`id`, `name`, `mobile`, `password`, `status`, `added_on`) VALUES
(0, '123', '01681161956', 'tamim', 1, '2022-12-25 05:19:40'),
(0, 'tamim', '01681161955', 'fd', 1, '2022-12-25 05:25:02'),
(0, 'Maruf', '01949084534', 'maruf', 1, '2022-12-25 05:27:10'),
(0, 'Bank', '345354545', 'dfds', 1, '2022-12-25 05:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `food_product`
--

CREATE TABLE `food_product` (
  `ID` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `qty` int(11) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_key` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_product`
--

INSERT INTO `food_product` (`ID`, `categories_id`, `name`, `price`, `image`, `qty`, `short_desc`, `description`, `meta_title`, `meta_key`, `status`) VALUES
(3, 9, 'pasta', 800, '711483319_gold (1).png', 0, 'good', 'pasta.cheese', 'pasta', 'p', 0),
(11, 7, 'k', 250, '666512095_images.png', 0, 'viufuasrgvawrhf', 'raegztdh', 'awrgbre', 'awfgrbateg', 0),
(12, 7, 'hsrtx', 50, '228589616_download (2).jpg', 0, 'xdfffsz', 'edbhrszdg', 'fgrvsth', 'hnzdgtrnsj', 0),
(13, 7, 'reah', 100, '322098230_zinc.png', 0, 'bezdvn e', 'nxfgrcvn grsyv', 'csgrn ynj', 'gfvrynj', 0),
(15, 7, 'Pan Cake', 150, '598668205_pancake.jpg', 0, 'pan cake', 'flour,sugar,egg,milk,butter,salt,maple syrup,chocolate syrup', 'pancake', 'p', 1),
(16, 7, 'Chocolate Brownie', 100, '213188509_brownie.jpg', 0, 'Brownie', 'butter,dark chocolat,golden caster sugar,plain flour,baking powder, cocoa', 'dessert', 'd', 1),
(17, 2, 'Burger', 250, '946580007_Burger.jpg', 0, 'burger', 'spices,herbs,chicken,bun,egg,tomato,onion,sauces', 'burger', 'b', 1),
(18, 2, 'Sub Sandwich', 270, '834378328_Sub Sanwich.jpg', 0, 'sandwich', 'bun,chicken,spices,herbs,sauce', 'chikcen sandwich', 'sandwich', 1),
(19, 2, 'Cheese Sandwich', 250, '360900797_cheese sandwich.jpg', 0, 'sandwich', 'chicken,cheese,bun,sauce', 'sandwich', 'sandwich', 1),
(20, 2, 'Pizza', 450, '242375447_pizza.jpg', 0, 'pizza', 'sauce,meat,herbs', 'pizza', 'pizza', 1),
(21, 2, 'Chicken Biriyani', 650, '732537393_Chicken Briyani.jpg', 0, 'biryani', 'bashmati rice, chicken, potato, spices,vegetable oil', 'biriyani', 'biriyani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(250) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(250) NOT NULL,
  `order_status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID`, `user_id`, `name`, `mobile`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `added_on`) VALUES
(3, 5, 'Farhana', '1911511509', 'konapara,demra,dhaka', 'dhaka', 1362, 'Bkash', 250, 'pending', 1, '2022-12-19 10:47:58'),
(4, 4, 'Farhana', '01911511509', 'konapara,demra,dhaka', 'dhaka', 1362, 'COD', 300, 'pending', 1, '2022-12-20 12:34:11'),
(5, 4, 'Farhana', '01911511509', 'konapara,demra,dhaka', 'dhaka', 1362, 'Bkash', 1350, 'pending', 3, '2022-12-20 06:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ID` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ID`, `order_id`, `product_id`, `qty`, `price`) VALUES
(1, 1, 3, 1, 800),
(2, 1, 12, 1, 50),
(3, 2, 12, 1, 50),
(4, 2, 3, 1, 800),
(5, 3, 14, 1, 250),
(6, 4, 14, 1, 250),
(7, 4, 12, 1, 50),
(8, 5, 15, 3, 150),
(9, 5, 20, 2, 450);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`ID`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Delivered'),
(4, 'Canceled'),
(5, 'Complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_categorie`
--
ALTER TABLE `admin_categorie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer_users`
--
ALTER TABLE `customer_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `food_product`
--
ALTER TABLE `food_product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_categorie`
--
ALTER TABLE `admin_categorie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_users`
--
ALTER TABLE `customer_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_product`
--
ALTER TABLE `food_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
