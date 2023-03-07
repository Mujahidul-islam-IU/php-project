-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 10:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `roll`, `session`, `dept`, `district`, `image`) VALUES
(2, 'deep', 'vetu@por.com', '202cb962ac59075b964b07152d234b70', 0, '0', '0', '0', ''),
(4, 'yg', 'mujahid.iu.cse@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '0', '0', '0', ''),
(5, 'ytuy', 'uty@y.com', '250cf8b51c773f3f8dc8b4be867a9a02', 0, '0', '0', '0', ''),
(6, 'deep tasnim', 'deep@gmail.com45', '09def3ebbc44ff3426b28fcd88c83554', 0, '0', '0', '0', 'OIP.jpg'),
(9, 'sourav', 'mujahidsourav7@gmail.com', 'e369853df766fa44e1ed0ff613f563bd', 45, '0', '0', '0', ''),
(10, 'sourav', 'mujahidsourav7@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 45, '0', 'CSE', 'Dhaka', ''),
(11, 'nafis', 'nafi@g.com', 'f4f359372e744a5b19cb63adf9f8ac04', 34, '0', 'mechas5', 'Tangail', ''),
(12, 'sourav', 'mujahidsourav7@gmail.com', 'e9510081ac30ffa83f10b68cde1cac07', 45, '0', 'CSE', 'Tangail', ''),
(13, 'sourav', 'mujahidsourav7@gmail.com', '14c879f3f5d8ed93a09f6090d77c2cc3', 46, '', 'cse', 'tangail', ''),
(14, 'sourav', 'mujahidsourav7@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 477, '', 'mecha', 'tangail', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
