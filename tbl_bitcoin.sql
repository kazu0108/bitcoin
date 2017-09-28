-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 9 月 28 日 11:19
-- サーバのバージョン： 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitcoin`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_bitcoin`
--

CREATE TABLE `tbl_bitcoin` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `avg_from` varchar(10) NOT NULL,
  `avg_to` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `tbl_bitcoin`
--

INSERT INTO `tbl_bitcoin` (`id`, `timestamp`, `name`, `description`, `avg_from`, `avg_to`) VALUES
(2, '2017-09-27 08:30:02', 'faucet aa', 'you can get free bitcoin now', '0.0000001', '0.05'),
(3, '0000-00-00 00:00:00', 'brsgbs', 'rsbstfnstn', '3', '4'),
(8, '0000-00-00 00:00:00', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bitcoin`
--
ALTER TABLE `tbl_bitcoin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bitcoin`
--
ALTER TABLE `tbl_bitcoin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
