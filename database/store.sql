-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2020 at 02:45 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `level_id` int(11) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`level_id`, `level`) VALUES
(1, 'ADMIN'),
(2, 'CUSTOMER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_detail` text NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `type_id`, `p_price`, `p_detail`, `p_img`, `datesave`) VALUES
(1, 'WHITE T-SHIRT', 1003, 500, 'Features\r\nJust your everyday smooth, comfy tee, a wardrobe staple\r\nSlim fit, so size up if you prefer a looser fit, or check out the Classic T-Shirt\r\nMale model shown is 6\'0\" / 183 cm tall and wearing size Large\r\nFemale model shown is 5\'8\" / 173 cm tall and wearing size Small\r\nMidweight 4.2 oz. / 145 gsm fabric, solid color t-shirts are 100% cotton, heather grey t-shirts are 90% cotton/10% polyester charcoal heather t-shirts are 52% cotton/48% polyester           ', 'p_img204061310420201206_001735.png', '2020-12-05 17:17:36'),
(3, 'BLACK-HOODIE', 1001, 500, 'Features\r\nHeavyweight 8.25 oz. (~280 gsm) cotton-rich fleece\r\nSolid colors are 80% cotton, 20% polyester. Heather Grey is 70% cotton, 30% polyester. Charcoal Heather is 60% cotton, 40% polyester\r\nFront pouch pocket, matching drawstring and rib cuffs\r\nEthically sourced following the World Responsible Apparel Practices Standards\r\nNote: If you like your hoodies baggy go 2 sizes up\r\n', 'p_img184618398520201206_002721.png', '2020-12-05 17:27:21'),
(8, 'YELLOW CAP', 1002, 500, 'YELLOW CAP  ', '9389406920201207_035323.png', '2020-12-06 20:48:03'),
(9, 'BLACK T-SHIRT', 1003, 500, 'Features\r\nJust your everyday smooth, comfy tee, a wardrobe staple\r\nSlim fit, so size up if you prefer a looser fit, or check out the Classic T-Shirt\r\nMale model shown is 6\'0\" / 183 cm tall and wearing size Large\r\nFemale model shown is 5\'8\" / 173 cm tall and wearing size Small\r\nMidweight 4.2 oz. / 145 gsm fabric, solid color t-shirts are 100% cotton, heather grey t-shirts are 90% cotton/10% polyester charcoal heather t-shirts are 52% cotton/48% polyester                          ', 'p_img13774004220201207_034923.png', '2020-12-06 20:49:23'),
(10, 'BLUE HOODIE', 1001, 990, 'Features\r\nHeavyweight 8.25 oz. (~280 gsm) cotton-rich fleece\r\nSolid colors are 80% cotton, 20% polyester. Heather Grey is 70% cotton, 30% polyester. Charcoal Heather is 60% cotton, 40% polyester\r\nFront pouch pocket, matching drawstring and rib cuffs\r\nEthically sourced following the World Responsible Apparel Practices Standards\r\nNote: If you like your hoodies baggy go 2 sizes up\r\n                         ', '100988935320201207_040332.png', '2020-12-06 21:01:53'),
(11, 'WHITE HOODIE', 1001, 990, 'Features\r\nHeavyweight 8.25 oz. (~280 gsm) cotton-rich fleece\r\nSolid colors are 80% cotton, 20% polyester. Heather Grey is 70% cotton, 30% polyester. Charcoal Heather is 60% cotton, 40% polyester\r\nFront pouch pocket, matching drawstring and rib cuffs\r\nEthically sourced following the World Responsible Apparel Practices Standards\r\nNote: If you like your hoodies baggy go 2 sizes up\r\n', 'p_img187999049420201207_040455.png', '2020-12-06 21:04:55'),
(12, 'WHITE HOODIE', 1001, 990, 'Features\r\nHeavyweight 8.25 oz. (~280 gsm) cotton-rich fleece\r\nSolid colors are 80% cotton, 20% polyester. Heather Grey is 70% cotton, 30% polyester. Charcoal Heather is 60% cotton, 40% polyester\r\nFront pouch pocket, matching drawstring and rib cuffs\r\nEthically sourced following the World Responsible Apparel Practices Standards\r\nNote: If you like your hoodies baggy go 2 sizes up\r\n', 'p_img161709480120201211_212054.png', '2020-12-11 14:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`size_id`, `size_name`) VALUES
(1, 'S'),
(2, 'M'),
(4, 'L'),
(7, 'XL'),
(8, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1001, 'OUTERWEAR'),
(1002, 'ACCESSORIES'),
(1003, 'APPAREL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `level_id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `level_id`, `password`, `name`, `email`, `datesave`) VALUES
(6, 'blackjob0', 2, '199804', 'jojob', 'jobnaruto@hotmail.com', '2020-12-11 15:01:51'),
(7, 'Minteu77', 1, '120199', 'mintsu', 'Mintcks.12.01.1999@gmail.com', '2020-12-11 15:06:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
