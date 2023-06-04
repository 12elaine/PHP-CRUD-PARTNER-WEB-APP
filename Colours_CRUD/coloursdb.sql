-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 03, 2023 at 11:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coloursdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Salary` varchar(45) NOT NULL,
  `Possition_Job` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `Name`, `Salary`, `Possition_Job`) VALUES
(1, 'Llacuna Elaine Mae', '250', 'New employed'),
(2, 'Noelito Mabansag', '480', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `inven`
--

CREATE TABLE `inven` (
  `id` int(11) NOT NULL,
  `product` varchar(45) NOT NULL,
  `quantity` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inven`
--

INSERT INTO `inven` (`id`, `product`, `quantity`) VALUES
(1, 'Bond Paper A3', '5 box'),
(2, 'Bond Paper A4', '30 box'),
(3, 'Bond Paper Long ', '30 box'),
(4, 'Bond Paper Short ', '30 box'),
(5, 'Button Pins', '1 box'),
(6, 'Folder (Legal)', '5 box'),
(7, 'Folder (Short)', '3 box'),
(8, 'Ink (CMYK)/color', '10 pcs '),
(9, 'Keychain', '1 box'),
(10, 'Laminating Film A4 Size', '3 Percentile'),
(11, 'Laminating Film Long Size', '3 Percentile'),
(12, 'Laminating Film Short Size', '3 Percentile'),
(13, 'Magic Mugs', '1 box'),
(14, 'Tarpauling Media 3 ft. 10 oz', '5 rolls'),
(15, 'Tarpauling Media 3 ft. 12 oz', '2 rolls'),
(16, 'Tarpauling Media 4 ft. 10 oz', '3 rolls'),
(17, 'Tarpauling Media 5 ft. 10 oz', '2 rolls'),
(18, 'Tarpauling Media 6 ft. 10 oz', '1 roll'),
(19, 'White Mugs', '2 box'),
(20, 'White Sublimation Tshirt', '15 pcs all sizes');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product`, `price`) VALUES
(1, 'Ballpen', 'PhP 10.00'),
(2, 'Brown Envelope (Long)', 'PhP 8.00'),
(3, 'Brown Envelope (Short)', 'PhP 7.00'),
(4, 'Brown Folder', 'PhP 10.00'),
(5, ' Correction Tape', 'PhP 10.00'),
(6, ' Eraser', 'PhP 10.00'),
(7, ' Motorcycke Temporary Plate', 'PhP 150.00'),
(8, ' Folder (Short)', 'PhP 8.00'),
(9, ' Correction Tape', 'PhP 10.00'),
(10, ' Magic Mugs', 'PhP 200.00'),
(11, 'Tarpaulin', '20/sq. ft.'),
(12, 'Plastic Envelope (Long)', 'PHP 16.00'),
(13, 'Keychain (minimum 30 pcs).', 'PHP 30.00'),
(14, 'Paper Clip', 'PHP 2.00'),
(15, 'Photo Sintra Board', '95/sq.ft.'),
(16, 'Plastic Folder (Long)', 'PHP 12.00'),
(17, 'Pencil', 'PHP 10.00'),
(18, 'Ruler', 'PHP 10.00'),
(19, 'White Mugs', 'PHP 120.00'),
(20, 'Fastener', 'PHP 2.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `FirstName`, `LastName`, `Email`, `Number`) VALUES
(1, 'Elaine Mae', 'Llacuna', '202080184@psu.palawan.edu.ph', '09812304890'),
(2, 'Noelito', 'Mabansag', '2019100321q@psu.palawan.edu.ph', '09814568002'),
(3, 'Lester Jay', 'Llacuna', 'LesterJayLlacuna@gmail.com', '09517164008'),
(5, 'Jirah', 'Llacuna', '2019100765q@psu.palawan.edu.ph', '09667238953'),
(7, 'Noelito', 'Mabansag', '2019100321q@psu.palawan.edu.ph', 'HGHHJ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inven`
--
ALTER TABLE `inven`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inven`
--
ALTER TABLE `inven`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
