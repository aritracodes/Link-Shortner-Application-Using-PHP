-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 07:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shorturl`
--

-- --------------------------------------------------------

--
-- Table structure for table `shorturl`
--

CREATE TABLE `shorturl` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `short_link` varchar(50) NOT NULL,
  `txt` varchar(50) NOT NULL,
  `hit_count` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shorturl`
--

INSERT INTO `shorturl` (`id`, `link`, `short_link`, `txt`, `hit_count`, `status`) VALUES
(2, 'https://www.w3schools.com/cssref/tryit.asp?filename=trycss_table_table-layout', 'css_table', 'css table', 26, 1),
(6, 'https://home.mcafee.com/Downloads/ProductDownload.aspx?appaffid=1045-822&productkey=0728FFB6-AEB8-4A5C-897D-3DEB5D12D8F7&pkg_id=511&wt_pkg_id=511&flex_pkg_id=&pkgid=511&clstype=paid&srctype=website%3a+ecard&df=ECard&&tut=New&tub=New', 'BD', 'Bitdefender Antivirus link', 30, 1),
(15, 'http://codersforum.epizy.com/forum/', 'iuio89', 'codeforum', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shorturl`
--
ALTER TABLE `shorturl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shorturl`
--
ALTER TABLE `shorturl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
