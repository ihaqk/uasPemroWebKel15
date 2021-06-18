-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 11:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balakosa`
--

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id_promo` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `bounty` int(50) NOT NULL,
  `hit` int(10) DEFAULT NULL,
  `target` int(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `reward` int(20) NOT NULL,
  `begin` date NOT NULL,
  `store` varchar(50) NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id_promo`, `url`, `bounty`, `hit`, `target`, `description`, `reward`, `begin`, `store`, `id_user`) VALUES
(6, 'https://www.youtube.com/watch?v=vLVWrGGqGJU&t=665s', 40, 0, 1000, 'aaaisyah', 100000, '0000-00-00', 'toko madju jaya', 15),
(7, 'https://www.ytube.com/watch?v=vLVWrGGGJU&t=665s', 100, 0, 10, 'produk kuat dan tahan lama', 100, '0000-00-00', 'rajin jaya', 16),
(8, 'https://shopee.co.id/Sneakers-cat.35.1013', 50, 0, 10, 'sneakers.com rajanya sepatu sneaker', 200000, '0000-00-00', 'sneakers.com', 15);

-- --------------------------------------------------------

--
-- Table structure for table `promo_users`
--

CREATE TABLE `promo_users` (
  `id_promo_user` int(50) NOT NULL,
  `id_promo` int(50) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo_users`
--

INSERT INTO `promo_users` (`id_promo_user`, `id_promo`, `id_user`) VALUES
(1, 7, 15),
(2, 6, 16),
(9, 8, 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `email`, `password`, `nomor_telepon`) VALUES
(15, 'zohal alfinas', 'alfinas', 'zohalalfinas@gmail.com', 'secret123', 2147483647),
(16, 'coba saja', 'zohal', 'dokter@gmail.com', 'secret123', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id_promo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `promo_users`
--
ALTER TABLE `promo_users`
  ADD PRIMARY KEY (`id_promo_user`),
  ADD KEY `id_promo` (`id_promo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `promo_users`
--
ALTER TABLE `promo_users`
  MODIFY `id_promo_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `promos`
--
ALTER TABLE `promos`
  ADD CONSTRAINT `promos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promo_users`
--
ALTER TABLE `promo_users`
  ADD CONSTRAINT `promo_users_ibfk_1` FOREIGN KEY (`id_promo`) REFERENCES `promos` (`id_promo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promo_users_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
