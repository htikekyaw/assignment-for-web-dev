-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 12:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(255) NOT NULL,
  `photo` varchar(225) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `photo`, `created_at`) VALUES
(1, 'htike htike kyaw', 'htikekyaw2020@gmail.com', 2147483647, '', '2020-11-14 05:41:09'),
(2, 'htike htike kyaw', '', 0, '', '2020-11-14 05:53:13'),
(3, 'htike htike kyaw', '', 0, '', '2020-11-14 05:53:19'),
(4, '', '', 0, '', '2020-11-14 05:53:21'),
(5, '', '', 0, '', '2020-11-14 05:53:22'),
(6, 'htike htike kyaw', '', 0, '', '2020-11-14 05:54:00'),
(7, 'htike htike kyaw', '', 0, '', '2020-11-14 05:54:09'),
(8, 'htike htike kyaw', 'htikekyaw2020@gmail.com', 2147483647, '', '2020-11-14 06:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(255) NOT NULL,
  `photo` varchar(225) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `photo`, `created_at`) VALUES
(1, '', '', 0, 'store/Screenshot (13).png', '2020-11-16 04:10:44'),
(2, 'lhwd;ougi', 'ow8de98w', 0, 'store/Screenshot (10).png', '2020-11-16 04:11:48'),
(3, 'outrl78rfuli', 'iyfrlu7', 87, 'store/Screenshot (49).png', '2020-11-16 04:16:35'),
(4, 'nguyen tran huyen my', 'htikekyaw2020@gmail.com', 2147483647, 'store/nguyen.jpg', '2020-11-16 23:08:12'),
(5, 'htike htike kyaw', 'htikekyaw2020@gmail.com', 2147483647, 'store/FB_IMG_1444499494224.jpg', '2020-11-16 23:21:06'),
(6, 'htike htike kyaw', 'htikekyaw2020@gmail.com', 2147483647, 'store/FB_IMG_1469447144729.jpg', '2020-11-16 23:21:49'),
(7, 'htike htike kyaw', 'admin@gmail.com', 2147483647, 'store/FB_IMG_1444499494224.jpg', '2020-11-16 23:23:08'),
(8, 'htike htike kyaw', 'htikekyaw2020@gmail.com', 2147483647, 'store/FB_IMG_1469447152656.jpg', '2020-11-16 23:27:29'),
(9, 'htike htike kyaw', 'htikekyaw2020@gmail.com', 2147483647, 'store/FB_IMG_1444499494224.jpg', '2020-11-16 23:46:16'),
(10, 'iuhiu', 'ubiu', 0, 'store/111.jpg', '2020-11-17 01:58:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
