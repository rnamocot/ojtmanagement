-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 11:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teacher_ojt_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `ojt_users`
--

CREATE TABLE `ojt_users` (
  `ojt_id` int(255) NOT NULL,
  `ojt_full name` varchar(255) NOT NULL,
  `ojt_username` varchar(255) NOT NULL,
  `ojt_email` varchar(255) NOT NULL,
  `ojt_password` varchar(255) NOT NULL,
  `ojt_access_level` varchar(255) NOT NULL,
  `ojt_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ojt_users`
--

INSERT INTO `ojt_users` (`ojt_id`, `ojt_full name`, `ojt_username`, `ojt_email`, `ojt_password`, `ojt_access_level`, `ojt_date`) VALUES
(1, 'Renie Namocot', 'renie', 'renie@gmail.com', 'password', 'Admin', '2023-02-21 07:43:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ojt_users`
--
ALTER TABLE `ojt_users`
  ADD PRIMARY KEY (`ojt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ojt_users`
--
ALTER TABLE `ojt_users`
  MODIFY `ojt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
