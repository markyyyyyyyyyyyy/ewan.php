-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 11:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` int(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `email`, `contact_number`, `branch`, `date`, `time`) VALUES
(17, 'clarkbelleza@gmail.com', 923872123, 'Bago Bantay (Santo Cristo Branch)', '2024-03-30', ''),
(18, 'ronaldoshabugodz@gmail.com', 923872123, 'Bago Bantay (Santo Cristo Branch)', '2024-03-27', '02:28'),
(19, 'clarkbelleza@gmail.com', 923872123, 'Bago Bantay (Santo Cristo Branch)', '2024-03-27', '03:31'),
(20, '', 0, '', '', ''),
(21, 'haha@gmail.com', 923872123, 'Bago Bantay (Santo Cristo Branch)', '2024-03-17', '14:43'),
(22, 'haha@gmail.com', 923872123, 'Bago Bantay (Santo Cristo Branch)', '2024-03-17', '14:43'),
(23, 'ronaldoshabugodz@gmail.com', 923872123, 'Bago Bantay (Santo Cristo Branch)', '2024-03-19', '13:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `email`) VALUES
(48, 'clark@gmail.com', '925cc8d2953eba624b2bfedf91a91613', 'sada', ''),
(49, 'elias@gmail.com', '925cc8d2953eba624b2bfedf91a91613', 'sada', ''),
(50, 'haha@gmail.com', '925cc8d2953eba624b2bfedf91a91613', 'mark', ''),
(51, 'ha@gmail.com', '925cc8d2953eba624b2bfedf91a91613', 'nalds', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
