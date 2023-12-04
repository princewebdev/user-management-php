-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 12:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_user`
--

CREATE TABLE `all_user` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `short_address` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `join_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 for inactive and 1 for active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_user`
--

INSERT INTO `all_user` (`id`, `full_name`, `short_address`, `email`, `join_date`, `status`) VALUES
(1, 'Shariar Mahmud Prince', 'Porsha', 'coderboyprince@gmail', '2023-11-26', 1),
(2, 'Shariar Mahmud Prince', 'Porsha', 'coderboyprince@gmail', '2023-11-26', 1),
(3, 'Reza', 'Mirpur', 'reza@gamil.com', '2023-11-27', 1),
(5, 'Azam', 'Mirpur', 'azam@gmail.com', '2023-11-27', 1),
(8, 'spider', 'Porsha', 'coderboyprince@gmail', '2023-11-27', 1),
(9, 'Kazi Sadib', 'Porsha', 'reza@gamil.com', '2023-11-27', 1),
(10, 'Murad Takla', 'Dhaka', 'murad@takla.com', '2023-11-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_user`
--
ALTER TABLE `all_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_user`
--
ALTER TABLE `all_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
