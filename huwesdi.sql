-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2024 at 04:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huwesdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `fundraising_campaigns`
--

CREATE TABLE `fundraising_campaigns` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount_raised` decimal(10,2) NOT NULL DEFAULT 0.00,
  `amount_goal` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_donors` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fundraising_campaigns`
--

INSERT INTO `fundraising_campaigns` (`id`, `category`, `title`, `amount_raised`, `amount_goal`, `total_donors`, `created_at`, `updated_at`) VALUES
(1, 'Skill Aquization ', 'Skill up 2 communities in Shisipee village of the FCT. Teaching the women how to make basic home needs.', '1000.00', '10000000.00', 1, '2024-02-20 16:10:46', '2024-02-22 16:46:15'),
(2, 'Education', 'Light up up', '1000.00', '10000000.00', 1, '2024-02-22 16:10:51', '2024-02-22 16:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `HuwesdiContact`
--

CREATE TABLE `HuwesdiContact` (
  `id` int(11) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Usubject` varchar(255) NOT NULL,
  `Umessage` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `Ustatus` varchar(255) DEFAULT NULL,
  `Ureference` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amount` decimal(10,4) NOT NULL,
  `date_purchase` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Uname` varchar(100) NOT NULL,
  `Uemail` varchar(100) NOT NULL,
  `Uphone` varchar(15) NOT NULL,
  `Utalent` varchar(100) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Uname`, `Uemail`, `Uphone`, `Utalent`, `verification_code`, `created_at`) VALUES
(69, 'Stanley Amaziro', 'stanleyamaziro@gmail.com', '07067085121', 'Programming/ICT', 'HUWESDI/2024/02/001', '2024-02-29 12:19:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fundraising_campaigns`
--
ALTER TABLE `fundraising_campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HuwesdiContact`
--
ALTER TABLE `HuwesdiContact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Uemail` (`Uemail`),
  ADD UNIQUE KEY `Uphone` (`Uphone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fundraising_campaigns`
--
ALTER TABLE `fundraising_campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `HuwesdiContact`
--
ALTER TABLE `HuwesdiContact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
