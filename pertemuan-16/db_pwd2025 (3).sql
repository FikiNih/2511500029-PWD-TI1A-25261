-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2026 at 04:39 AM
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
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `cmid` int(11) NOT NULL,
  `ckode` varchar(20) NOT NULL,
  `cnama` varchar(100) NOT NULL,
  `calamat` varchar(50) NOT NULL,
  `ctjdosen` date NOT NULL,
  `cjja` varchar(100) NOT NULL,
  `chome` varchar(50) DEFAULT NULL,
  `cnomor` int(50) DEFAULT NULL,
  `cpdosen` varchar(100) NOT NULL,
  `cadosen` varchar(100) DEFAULT NULL,
  `cbidosen` varchar(100) DEFAULT NULL,
  `dcreated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dupdated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `cmid` int(11) NOT NULL,
  `cnim` varchar(20) NOT NULL,
  `cnama` varchar(100) NOT NULL,
  `ctempat_lahir` varchar(50) NOT NULL,
  `ctanggal_lahir` date NOT NULL,
  `chobi` varchar(100) NOT NULL,
  `cpasangan` varchar(50) DEFAULT NULL,
  `cpekerjaan` varchar(50) DEFAULT NULL,
  `cnama_ortu` varchar(100) NOT NULL,
  `cnama_kakak` varchar(100) DEFAULT NULL,
  `cnama_adik` varchar(100) DEFAULT NULL,
  `dcreated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dupdated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`cmid`, `cnim`, `cnama`, `ctempat_lahir`, `ctanggal_lahir`, `chobi`, `cpasangan`, `cpekerjaan`, `cnama_ortu`, `cnama_kakak`, `cnama_adik`, `dcreated_at`, `dupdated_at`) VALUES
(1, '1234555667', 'Fiki', 'Selindung', '2009-05-11', 'brainrot', 'balerina', 'ngawi squad', 'rusdi ganteng', 'si imut', 'farhan kebab', '2026-01-07 06:25:41', '2026-01-07 06:28:23'),
(2, '266788334', 'Raka', 'jebus', '2005-12-22', 'joget keju', 'siapa aja', 'mancing', 'teuku dan pacarnya', 'lampu', 'tidak ada', '2026-01-07 07:35:53', '2026-01-07 07:37:32');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(17, 'anak dosen', 'sigma@a.com', 'aku adalah anaak dosen', '2025-12-24 12:12:46'),
(18, 'aku anak mama', 'a@a.com', 'anomali bgt', '2026-01-07 11:57:03'),
(19, 'aku anak mama', 'a@a.com', 'aaaaaaaaaaaaaaaaaaaa', '2026-01-07 13:10:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`cmid`),
  ADD UNIQUE KEY `cnim` (`cnim`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `cmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
