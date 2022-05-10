-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 02:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(200) NOT NULL,
  `summary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `job_title`, `experience`, `skills`, `salary`, `location`, `summary`) VALUES
(20, 'Angular Developer', '2-5', 'Angular', '25000', 'Hydrabad', 'Having good knowledge on communication skils'),
(21, 'Angular Developer', '3-5', 'Angular', '25000', 'Hydrabad', 'Having good knowledge on communication skils'),
(22, 'React  Developer', '3-5', 'Angular', '25000', 'Hydrabad', 'Having good knowledge on communication skils'),
(25, 'Sql Developer', '5', 'mongo db', '25000', 'Hydrabad', ' \r\n         good knowledge in sql');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `Texp` varchar(255) NOT NULL,
  `Rexp` varchar(255) NOT NULL,
  `CTC` varchar(255) NOT NULL,
  `ECTC` varchar(200) NOT NULL,
  `NP` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `offer` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `skill`, `location`, `Texp`, `Rexp`, `CTC`, `ECTC`, `NP`, `mobile`, `file`, `offer`) VALUES
(35, 'suryaprakash', 'pavansurya5454@gmail.com', 'javascript', 'hydrabad', '2', '2', '5', '7', '30 days', '6301363981', '2237_vue answare.docx', 'yes'),
(36, 'surya', 'pavansurya5454@gmail.com', 'javascript', 'hydrabad', '2', '2', '5', '7', '30 days', '6301363981', '6913_vue answare.docx', 'yes'),
(37, 'pavan', 'pavansurya5454@gmail.com', 'javascript', 'hydrabad', '2', '2', '5', '7', '30 days', '6301363981', '4061_vue answare.docx', 'yes'),
(38, 'pavan', 'pavansurya5454@gmail.com', 'javascript', 'hydrabad', '2', '2', '5', '7', '30 days', '6301363981', '7932_vue answare.docx', 'yes'),
(39, 'pavan', 'pavansurya5454@gmail.com', 'javascript', 'hydrabad', '2', '2', '5', '7', '30 days', '6301363981', '1428_vue answare.docx', 'yes'),
(40, 'pavan', 'pavansurya5454@gmail.com', 'javascript', 'hydrabad', '2', '2', '5', '7', '30 days', '6301363981', '1367_vue answare.docx', 'yes'),
(41, 'Anusha', 'pavansurya5454@gmail.com', 'javascript', 'hydrabad', '2', '2', '5', '7', '30 days', '6301363981', '8251_VueKT (2).xlsx', 'yes'),
(42, 'Anusha', 'pavansurya5454@gmail.com', 'javascript', 'hydrabad', '2', '2', '5', '7', '30 days', '6301363981', '2643_VueKT (2).xlsx', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
