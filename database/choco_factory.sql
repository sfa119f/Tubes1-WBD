-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 11:43 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `choco_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `chocolate`
--

CREATE TABLE `chocolate` (
  `choco_id` int(11) NOT NULL,
  `choco_name` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `amount_sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chocolate`
--

INSERT INTO `chocolate` (`choco_id`, `choco_name`, `image`, `price`, `description`, `amount`, `amount_sold`) VALUES
(1, 'silverqueen', '../assets/img/silverqueen.png', 15000, 'Coklat Silverqueen', 100, 20),
(5, 'cadbury', '../assets/img/cadbury.png\r\n', 20000, 'Coklat batang Cadbury', 100, 20),
(6, 'Toblerone', '../assets/img/toblerone.jpg\r\n', 17500, 'Coklat Toblerone Large', 75, 0),
(7, 'Kitkat', '../assets/img/kitkat.jpg\r\n', 10000, 'Coklat Kitkat Small', 150, 0),
(8, 'BengBeng', '../assets/img/bengbeng.png\r\n', 3000, 'Masa gatau bengbeng', 200, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `choco_id` int(11) NOT NULL,
  `transaction_date` date DEFAULT NULL,
  `transaction_time` int(11) NOT NULL DEFAULT current_timestamp(),
  `transaction_address` varchar(255) DEFAULT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `user_id`, `choco_id`, `transaction_date`, `transaction_time`, `transaction_address`, `transaction_total`, `transaction_amount`) VALUES
(1, 1, 1, '2020-10-22', 216000, 'ITB, Bandung', 300000, 20),
(2, 4, 8, '2020-10-22', 432000, 'Pondok Gede, Bekasi', 9000, 3),
(3, 1, 5, '2020-10-22', 216000, 'ITB, Bandung', 400000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'admin', 'admin@tes.com', 'abcdefgh', 1),
(4, 'putraujay', 'putra@tes.com', 'abcdefgh', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chocolate`
--
ALTER TABLE `chocolate`
  ADD PRIMARY KEY (`choco_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chocolate`
--
ALTER TABLE `chocolate`
  MODIFY `choco_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
