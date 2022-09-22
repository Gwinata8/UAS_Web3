-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 02:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokohp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `email`, `password`, `status`) VALUES
('admin', 'admin', 'admin@admin.com', 'admin12', 'Enable'),
('gg', 'geylang', 'admin@admin.com', 'aaaaaaa', 'Enable'),
('gg4', 'Gilang Wakuncah', 'gilang@admin.com', '123456', 'Enable'),
('gwin8', 'Gerald', 'gwinata8@gmail.com', '123123', 'Enable'),
('gwinat', 'Gerald', 'gwinata8@gmail.com', '123456', 'Enable'),
('gwinata', 'Gerald', 'gwinata8@gmail.com', '123456', 'Enable'),
('gwinata8', 'Gerald', 'gwinata8@gmail.com', '123123', 'Enable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
