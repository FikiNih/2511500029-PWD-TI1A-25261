-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2025 at 01:28 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(1, 'Fiki', 'akumanusia@gmail.com', 'hai hai haii hai  hai hai hai hai hi', '2025-12-16 09:44:48'),
(2, 'Fiki', 'Tester1@gmail.com', 'ayo kita berangkat sekolah\r\n', '2025-12-16 09:44:48'),
(3, 'Wulandari', 'fishit@gmail.com', 'Nur Fadila ngakak cantik banget', '2025-12-16 09:44:48'),
(4, 'Pria fomo', 'Pria@awo.com', 'aku fomo suka ikut ikutan', '2025-12-16 09:44:48'),
(6, 'qq', 'Pria@awo.com', 'fwef', '2025-12-16 09:44:48'),
(9, 'Fiki ngetes', 'Pria@awo.com', 'Ngetes dlu bang kayaknya gagal lagi', '2025-12-16 09:44:48'),
(10, 'Fiki ngetes', 'Pria@awo.com', 'halooooooo', '2025-12-16 09:44:48'),
(11, 'Fiki ngetes', 'Pria@awo.com', 'hayuuuuuuukkk', '2025-12-16 09:44:48'),
(12, 'Sigma boy', 'sigma@a.com', 'aaaaaaaaaaaaaaaa', '2025-12-16 09:44:48'),
(13, 'aku anak mama', 'sigma@a.com', 'hai aku adalah...', '2025-12-16 09:46:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
