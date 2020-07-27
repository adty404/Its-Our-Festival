-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 07:15 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iof`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Millenia', 'millacantik', '7c222fb2927d828af22f592134e8932480637c0d');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id_order_table` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_payment_slip` int(11) DEFAULT NULL,
  `order_number` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_number` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id_order_table`, `id_ticket`, `id_payment`, `id_status`, `id_payment_slip`, `order_number`, `name`, `id_number`, `email`, `phone_number`) VALUES
(1, 3, 2, 3, 1, 'IOF20-1587298707', 'Aditya', '3274829182831', 'aditya@gmail.com', '0813827455231'),
(3, 3, 4, 5, 2, 'IOF20-1587312099', 'Milla', '628182858391', 'milla@gmail.com', '081362718273'),
(4, 1, 3, 1, NULL, 'IOF20-1587312157', 'Aditya P', '526172937431', 'adityap@gmail.com', '081372718592'),
(5, 8, 1, 1, NULL, 'IOF20-1587312310', 'Millenia', '71627192', 'millenia@gmail.com', '08136218291'),
(6, 3, 2, 1, NULL, 'IOF20-1587312351', 'Millenia S', '3618281828102', 'millenias@gmail.com', '081362718245'),
(7, 7, 1, 1, NULL, 'IOF20-1587312400', 'Milla S', '728182917231', 'millas@gmail.com', '081372819293');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `rek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `payment`, `rek`) VALUES
(1, 'BCA', '77448572'),
(2, 'BNI', '88229384'),
(3, 'MANDIRI', '11218749'),
(4, 'BRI', '88273859');

-- --------------------------------------------------------

--
-- Table structure for table `payment_slip`
--

CREATE TABLE `payment_slip` (
  `id_payment_slip` int(11) NOT NULL,
  `payment_slip_img` varchar(100) NOT NULL,
  `reasons` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_slip`
--

INSERT INTO `payment_slip` (`id_payment_slip`, `payment_slip_img`, `reasons`) VALUES
(1, '6955-Tulips.jpg', ''),
(2, '2410-Lighthouse.jpg', 'males lah boongan km mah transfernya');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Placed Order'),
(2, 'Payment Slip'),
(3, 'Verifying Payment'),
(4, 'Payment Verified'),
(5, 'Not Verified');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `price_real` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `class`, `price`, `price_real`) VALUES
(1, 'GENERAL', '1,5', '1.500.000'),
(3, 'VIP', '3,8', '3.800.000'),
(7, 'GROUP PACKAGE', '6,0', '6.000.000'),
(8, 'FESTIVAL', '1,7', '1.700.000');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_info`
--

CREATE TABLE `ticket_info` (
  `id_ticket_info` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `info1` varchar(30) NOT NULL,
  `info2` varchar(30) NOT NULL,
  `info3` varchar(30) NOT NULL,
  `info4` varchar(30) NOT NULL,
  `info5` varchar(30) NOT NULL,
  `info6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_info`
--

INSERT INTO `ticket_info` (`id_ticket_info`, `id_ticket`, `info1`, `info2`, `info3`, `info4`, `info5`, `info6`) VALUES
(1, 1, '1 Ticket for 1 Wristband', '3 Day Pass', 'General Admission', 'Price Includes Tax 20%', 'Standing Party', 'No Merchandise'),
(3, 3, '1 Ticket for 1 Wristband', '3 Day Pass', 'Priority Line', 'Price Includes Tax 20%', 'Comfortable Seat', 'Get Merchandise'),
(5, 7, '5 Ticket for 5 Wristband', '3 Day Pass', 'General Admission', 'Price Includes Tax 20%', 'Near the stage', 'Get Merchandise'),
(6, 8, '1 Ticket for 1 Wristband', '3 Day Pass', 'General Admission', 'Price Includes Tax 20%', 'Standing Party', 'No Merchandise');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id_order_table`),
  ADD KEY `id_ticket` (`id_ticket`,`id_payment`),
  ADD KEY `order_table_ibfk_2` (`id_payment`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_payment_slip` (`id_payment_slip`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `payment_slip`
--
ALTER TABLE `payment_slip`
  ADD PRIMARY KEY (`id_payment_slip`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indexes for table `ticket_info`
--
ALTER TABLE `ticket_info`
  ADD PRIMARY KEY (`id_ticket_info`),
  ADD KEY `id_ticket` (`id_ticket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id_order_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_slip`
--
ALTER TABLE `payment_slip`
  MODIFY `id_payment_slip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ticket_info`
--
ALTER TABLE `ticket_info`
  MODIFY `id_ticket_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_table_ibfk_1` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_table_ibfk_2` FOREIGN KEY (`id_payment`) REFERENCES `payment` (`id_payment`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_table_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_table_ibfk_4` FOREIGN KEY (`id_payment_slip`) REFERENCES `payment_slip` (`id_payment_slip`) ON DELETE SET NULL;

--
-- Constraints for table `ticket_info`
--
ALTER TABLE `ticket_info`
  ADD CONSTRAINT `ticket_info_ibfk_1` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
