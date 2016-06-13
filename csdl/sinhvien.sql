-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2016 at 07:00 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `kh_id` int(11) NOT NULL,
  `kh_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`kh_id`, `kh_ten`) VALUES
(1, '1'),
(5, 'K57'),
(6, 'K58'),
(7, 'K59'),
(8, 'K60'),
(9, 'K61'),
(10, 'K62');

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE `nganh` (
  `n_id` int(11) NOT NULL,
  `n_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`n_id`, `n_ten`) VALUES
(1, 'cntt'),
(2, 'httt'),
(3, 'mmt'),
(4, 'cncdt'),
(5, 'chkt_tdh'),
(6, 'khmt'),
(9, 'vlkt_cnnn'),
(10, 'dtvt');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `q_id` int(11) NOT NULL,
  `tenquyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`q_id`, `tenquyen`) VALUES
(1, 'sv'),
(2, 'khoahoc'),
(3, 'nganh'),
(4, 'sv khoahoc'),
(5, 'sv nganh'),
(6, 'nganh khoahoc'),
(7, 'sv nganh khoahoc');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `sv_id` int(11) NOT NULL,
  `masv` varchar(255) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `kh_id` int(11) NOT NULL,
  `khoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `n_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `export` tinyint(1) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`sv_id`, `masv`, `hoten`, `kh_id`, `khoa`, `n_id`, `date`, `export`, `datetime`) VALUES
(148, '15020011', 'nguyễn văn toàn', 8, 'công nghệ thông tin', 1, '2016-04-25', 0, '0000-00-00 00:00:00'),
(149, '15020012', 'mai tiến thành', 8, 'công nghệ thông tin', 1, '2016-04-25', 0, '0000-00-00 00:00:00'),
(150, '14020013', 'bùi tiến dũng', 7, 'điện tử viễn thông', 10, '2016-04-25', 1, '0000-00-00 00:00:00'),
(151, '15020014', 'buì xuân phúc', 8, 'điện tử viễn thông', 10, '2016-04-25', 0, '0000-00-00 00:00:00'),
(152, '15020015', 'nguyễn thiện nhân', 8, 'điện tử viễn thông', 10, '2016-04-25', 0, '0000-00-00 00:00:00'),
(153, '14020016', 'ronaldo', 7, 'vật lý kỹ thuật', 9, '2016-04-25', 0, '0000-00-00 00:00:00'),
(154, '15020017', 'nguyễn thành lương', 8, 'vật lý kỹ thuật', 9, '2016-04-25', 0, '0000-00-00 00:00:00'),
(155, '15020018', 'huỳnh tấn tài', 8, 'vật lý kỹ thuật', 5, '2016-04-25', 0, '0000-00-00 00:00:00'),
(156, '14020019', 'mai tiến dũng', 7, 'vật lý kỹ thuật', 5, '2016-04-25', 0, '0000-00-00 00:00:00'),
(157, '15020020', 'phạm đùng tùng', 8, 'vật lý kỹ thuật', 9, '2016-04-25', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `quyen`) VALUES
(5, 'admin', 'admin', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`kh_id`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`sv_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `kh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nganh`
--
ALTER TABLE `nganh`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `sv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
