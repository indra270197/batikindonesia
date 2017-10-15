-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 11:17 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `produk_id` int(10) NOT NULL,
  `produk_nama` varchar(50) NOT NULL,
  `produk_deskripsi` varchar(200) NOT NULL,
  `produk_harga` int(20) NOT NULL,
  `produk_size` varchar(10) NOT NULL,
  `produk_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`produk_id`, `produk_nama`, `produk_deskripsi`, `produk_harga`, `produk_size`, `produk_image`) VALUES
(1, 'Batik Keris Pekalongan', 'Batik dengan corak wayang dan pewarnaan dengan tampak alami', 800000, 'XL', 'oke2.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `role`) VALUES
('mister', 'keren', 'mister potatoes', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `produk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
