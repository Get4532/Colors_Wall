-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 05:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colorswall`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `slno` int(11) NOT NULL,
  `username` text NOT NULL,
  `imgName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `slno` int(11) NOT NULL,
  `imgName` text NOT NULL,
  `img` text NOT NULL,
  `Type` text NOT NULL,
  `MRP` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`slno`, `imgName`, `img`, `Type`, `MRP`, `price`) VALUES
(1, 'Holding Hand', 'Images/HHS.jpg', 'Sketch', 1200, 999),
(2, 'Crowed', 'images/Crowed.jpg', 'Sculpture', 4500, 3999),
(3, 'Baby head', 'images/Babyhead.jpg', 'Scuplture', 2000, 1499),
(4, 'Flower Head', 'images/FH.jpg', 'Scuplture', 6000, 4999),
(5, 'String Design', 'images/Ta.jpg', 'Thread Art', 2500, 2199),
(6, 'Budha', 'images/Budha.jpg', 'Scuplture', 7000, 6499),
(7, 'Girl clay Art', 'images/GC.jpg', 'Clay Art', 1500, 1299),
(8, 'Couple', 'images/Couple.jpg', 'Scuplture', 2500, 1999),
(9, 'Three Sclupture', 'images/Sc.jpg', 'Scuplture', 5500, 4499),
(10, 'Flower Clay Art', 'images/FlC.jpg', 'Clay Art', 4000, 2999),
(11, 'Girl cup clay art', 'images/GCA.png', 'Clay Art', 1500, 1299),
(12, 'ButterFly', 'images/BP.jpg', 'Painting', 5000, 3499),
(13, 'Bridge Sketch\r\n', 'images/BS.jpg', 'Sketch', 2000, 1499),
(14, 'Budha Painting', 'images/BudhaP.jpg', 'Painting', 3000, 2199),
(15, 'Cat Painting', 'images/CatP.png', 'Painting', 4500, 3799),
(16, 'Eye Painting\r\n  ', 'images/CEP.jpg', 'Painting', 5500, 4999),
(17, 'Lady painting', 'images/CLP.jpg', 'Painting', 4500, 3999),
(18, 'Old painting', 'images/CP.jpg', 'Painting', 3500, 2499),
(19, 'ChadWickBoseman', 'images/CS.jpg', 'Sketch', 2000, 1499),
(20, 'Cycle thread art', 'images/CT.jpg', 'Thread Art', 5000, 4499),
(21, 'Cycle painting', 'images/CYCLEP.jpg', 'Painting', 3000, 1999),
(22, 'Nature Painting', 'images/DeerP.jpg', 'Painting', 3500, 2999),
(23, 'Dog clay art', 'images/dogC.jpg', 'Clay Art', 7000, 5999),
(24, 'Elephant ', 'images/Ele.jpg', 'Scuplture', 1000, 699),
(25, 'Eye thread art', 'images/ET.jpg', 'Thread Art', 9000, 7999),
(26, 'Fishes threadart', 'images/FFT.jpg', 'Thread Art', 7000, 5499),
(27, 'Flower threadart', 'images/FT.jpg', 'Thread Art', 6000, 4999),
(28, 'Ganesh idol', 'images/Ganesh.jpg', 'Scuplture', 4000, 2999),
(29, 'Ganapathi painting', 'images/GP.jpg', 'Painting', 4500, 3499),
(30, 'Ganesha Sketch', 'images/GS.jpg', 'Sketch', 5000, 3499),
(31, 'Hand Thread art\r\n', 'images/HT.jpg', 'Thread Art', 10000, 8999),
(32, 'House sketch', 'images/HouseS.jpg', 'Sketch', 7000, 4999),
(33, 'Horse sketch', 'images/HS.jpg', 'Sketch', 2000, 1499),
(34, 'Krishna Painting', 'images/KP.jpg', 'Painting', 6000, 4499),
(35, 'Lady sclupture', 'images/LadySc.jpg', 'Scuplture', 8000, 6499),
(36, 'Girl painting', 'images/LP.jpg', 'Painting', 3000, 2499),
(37, 'Lady sketch', 'images/LS.jpg', 'Sketch', 1500, 999),
(38, 'Messi ', 'images/Messi.jpg', 'Sketch', 4000, 2999),
(39, 'Monalisa painting', 'images/MOP.jpg', 'Painting', 5000, 3499),
(40, 'MOM threadart', 'images/MOT.jpg', 'Thread Art', 6000, 4499),
(41, 'Mother painting', 'images/MotherP.jpg', 'Painting', 4000, 2999),
(42, 'Market painting', 'images/MP.jpg', 'Painting', 5000, 4499),
(43, 'Building sketch', 'images/MS.jpg', 'Sketch', 2500, 1999),
(44, 'Monalisa threadart', 'images/MT.jpg', 'Thread Art', 12000, 10999),
(45, 'Nature painting', 'images/nature.jpg', 'Painting', 3500, 2999),
(46, 'Open mind', 'images/Open.jpg', 'Scuplture', 5000, 4499),
(47, 'Sculpture', 'images/Pim.jpg', 'Scuplture', 6500, 5599),
(48, 'Panda thredart', 'images/PT.jpg', 'Thread Art', 6000, 4499),
(49, 'Queen lady sketch', 'images/QLS.jpg', 'Sketch', 2000, 999),
(50, 'Rabbit sculpture', 'images/Rabbit.jpg', 'Scuplture', 8000, 6999),
(51, 'River painting', 'images/RiverP.jpg', 'Painting', 4000, 2499),
(52, 'RadhaKrishna painting ', 'images/RKP.jpg', 'Painting', 6500, 5999),
(53, 'Ronaldo sketch', 'images/RS.jpg', 'Sketch', 4000, 3499),
(54, 'Street painting', 'images/SP.jpg', 'Painting', 5000, 3499),
(55, 'Tree Moon sketch', 'images/TMS.jpg', 'Sketch', 3000, 1999),
(56, 'vasco da gama sketch', 'images/VS.jpg', 'Sketch', 3500, 1999),
(57, 'Window sketch', 'images/WS.jpg', 'Sketch', 1000, 599),
(58, 'Tree clay art', 'images/Tree.jpg', 'Clay Art', 7000, 6499),
(59, 'car painting', 'images/car.jpg', 'Painting', 3000, 2099),
(60, 'Virat sketch', 'images/virat.jpg', 'Sketch', 4500, 3499),
(62, '[value-2]', '[value-3]', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Fullname` text NOT NULL,
  `mob` bigint(20) NOT NULL,
  `DP` text NOT NULL,
  `Address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Fullname`, `mob`, `DP`, `Address`) VALUES
(1, 'Gopi', 'gopi123', 'Gopi M', 9012345678, 'Images/gopi.png', 'Bengaluru'),
(2, 'Adi', 'Adi123', 'Adithya Bharadwaj B V', 9012345679, 'Images/adi.png', 'Mysore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
