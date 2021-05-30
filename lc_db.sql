-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 11:44 AM
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
-- Database: `lc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `password`, `email`, `phone`) VALUES
(1, '', 'luminouscorner21!', 'LuminousCorner21!', 'luminouscorner21@gmail.com', 0),
(2, '', 'lcadmin', 'LC21!', 'luminouscorner21@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `date_time`) VALUES
(2, '0000-00-00 00:00:00'),
(3, '0000-00-00 00:00:00'),
(4, '2021-05-22 12:13:00'),
(5, '2021-05-22 12:13:00'),
(6, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lc_user`
--

CREATE TABLE `lc_user` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lc_user`
--

INSERT INTO `lc_user` (`id`, `fullname`, `username`, `email`, `phone`, `password`) VALUES
(1, 'alen', 'alen', 'alen@canva.com', 2147483647, '21232f297a57a5a743894a0e4a801fc3'),
(2, 'sam alcantara', 'sammy', 'sammy21@gmail.com', 2147483647, 'a395504c4017e423ded68ba449888c5a'),
(3, 'alliah', 'alliaherss', 'alliah@gmail.com', 2147483647, '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `new_admin`
--

CREATE TABLE `new_admin` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_admin`
--

INSERT INTO `new_admin` (`id`, `fullname`, `username`, `email`, `phone`, `password`) VALUES
(1, 'asd', 'asd', 'genzprints123@gmail.com', 2147483647, '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(255) NOT NULL,
  `serviceName` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `serviceImage` varchar(255) NOT NULL,
  `serviceDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `serviceName`, `price`, `serviceImage`, `serviceDesc`) VALUES
(1, 'Hands Down Package', 270, 'hands.jpg', 'Includes: Handspa and Hand Paraffin Wax'),
(2, 'Pamper me Package', 299, 'pamper.jpg', 'Includes: Manicure, Pedicure, and Footspa'),
(3, 'Deluxe Package', 450, 'deluxe.jpg', 'Includes: Gel Polish, Regular Pedicure, and Footspa'),
(4, 'Happy Feet Package', 429, 'happy.jpg', 'Includes: Footspa, Foot Paraffin Wax, and Pedicure'),
(5, 'Sitting Pretty Hand Package\r\n', 450, 'sitting.jpg', 'Includes: Handspa, Hand Paraffin Wax, and Manicure'),
(6, 'Eyebrow Threading', 99, 'eyebrow.jpg', 'Removing excess hair from your eyebrows.'),
(7, 'Keratin Eyelash lift with tint', 399, 'keratin.jpg', 'Eyelash lift is your natural lashes that are lifted.'),
(8, 'Classic Eyelash Extension', 220, 'classic.jpg', 'The classic eyelash extension is simple, beautiful, natural-looking lash extensions.'),
(9, 'Volume Eyelash Extension', 450, 'volume.jpg', 'Volume eyelash extension offers you a full, better-than-falsies look that gives you some serious glamour drama.'),
(10, 'Doll Eyelash Extension', 550, 'doll.jpg', 'This extension involves shorter and longer lashes that will help you achieve a \"doll-like\" set of eyes.'),
(11, 'Cat Eye Extension', 550, 'cateye.png', 'This extension involves shorter and longer lashes that will help you achieve a \"doll-like\" set of eyes.'),
(12, 'Manicure', 80, 'manicure.jpeg', 'involves shaping, removing the cuticles, often painting the nails and softening the skin.'),
(13, 'Pedicure', 90, 'pedicure.jpeg', 'Treatment of the feet, analogous to a manicure.'),
(14, 'Polygel Nail Extension with Free Gel Polish', 999, 'poly.jpeg', 'Nail enhancement that is more flexible and lightweight compared to acrylic, but this is harder than regular gel.'),
(15, 'Footspa', 130, 'footspa.jpeg', 'Nourishes your feet and provides a soothing experience for your mind and body. Foot massage improves circulation, stimulates muscles, reduces tension, and often eases pain.'),
(16, 'Handspa', 110, 'handspa.jpeg', 'Hand Spa helps to remove dead cells and callous.'),
(17, 'Gel Polish', 248, 'gel.jpeg', 'In the gel polish manicure, UV lamps are used to illuminate heat to provide long-lasting gel polish. '),
(18, 'Hand Paraffin Wax', 180, 'handpara.jpeg', 'Helps to make the skin soft and soft. '),
(19, 'Foot Paraffin Wax', 230, 'footpara.jpeg', 'Helps make the skin soft and smooth. 0pen pores and remove dead skin cells. This can help make your skin fresher and feel smoother.'),
(20, 'Luminous Skin IV (push)', 499, 'luminous.jpeg', ''),
(21, 'Korean BB Glow', 950, 'korean.jpg', ''),
(22, 'Celebrity Drip', 750, 'celeb.jpeg', ''),
(23, 'Sakura Drip', 949, 'sakura.jpeg', ''),
(24, 'Apollo Drip', 750, 'apollo.jpg', ''),
(25, 'Glutathione Snow White Drip', 1499, 'apollo.jpg', ''),
(26, 'Fairy White with Vitamin C', 399, 'fair.jpg', ''),
(27, 'IPL / Hair Removal', 99, 'underarm02.jpg', 'improve skin texture and pigmentation, help to reduce acne and even remove some of the signs of sun damage.'),
(28, 'Ear Candling', 99, 'earcandling.jpg', 'Improve general health and well-being by lighting one end of a hollow candle ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `lc_user`
--
ALTER TABLE `lc_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_admin`
--
ALTER TABLE `new_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lc_user`
--
ALTER TABLE `lc_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `new_admin`
--
ALTER TABLE `new_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
