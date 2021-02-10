-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 10:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carpool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`) VALUES
(4, 'admin', 'admin'),
(6, 'admin3', 'admin3'),
(7, 'admin5', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pool`
--

CREATE TABLE `pool` (
  `driverId` int(11) NOT NULL,
  `rideId` int(11) NOT NULL,
  `vehicleId` int(11) NOT NULL,
  `passengerId` int(11) NOT NULL,
  `poolID` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `messageAc` varchar(100) NOT NULL,
  `location` varchar(40) NOT NULL,
  `destination` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `dateAc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pool`
--

INSERT INTO `pool` (`driverId`, `rideId`, `vehicleId`, `passengerId`, `poolID`, `fname`, `lname`, `messageAc`, `location`, `destination`, `date`, `time`, `dateAc`) VALUES
(51, 113, 0, 66, 23, 'Fatihah', 'Yusoff', 'Fatihah Yusoff has accepted your carpool request.', '', '', '0000-00-00', '00:00:00', '2020-06-26 19:21:38'),
(0, 0, 0, 0, 24, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 19:58:53'),
(0, 0, 0, 0, 25, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:00:29'),
(0, 0, 0, 0, 26, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:03:10'),
(0, 0, 0, 0, 27, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:03:14'),
(0, 0, 0, 0, 28, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:07:13'),
(0, 0, 0, 0, 29, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:26:32'),
(0, 0, 0, 0, 30, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:27:16'),
(0, 0, 0, 0, 31, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:27:42'),
(0, 0, 0, 0, 32, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:29:49'),
(0, 0, 0, 0, 33, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:30:21'),
(0, 0, 0, 0, 34, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:32:06'),
(0, 0, 0, 0, 35, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:33:04'),
(0, 0, 0, 0, 36, '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00'),
(0, 0, 0, 0, 37, '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00'),
(0, 0, 0, 0, 38, '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00'),
(0, 0, 0, 0, 39, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:53:02'),
(0, 0, 0, 0, 40, '', '', '', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:54:57'),
(0, 0, 0, 0, 41, '', '', 'atsushi nakajima has accepted your carpool request.', '', '', '0000-00-00', '00:00:00', '2020-09-07 20:57:15'),
(0, 0, 0, 0, 42, '', '', 'atsushi nakajima has accepted your carpool request.', '', '', '0000-00-00', '00:00:00', '2020-09-07 21:01:31'),
(0, 0, 0, 0, 43, '', '', 'Aaira Sofea has accepted your carpool request.', '', '', '0000-00-00', '00:00:00', '2020-09-07 21:11:02'),
(0, 0, 0, 0, 44, '', '', 'atsushi nakajima has accepted your carpool request.', '', '', '0000-00-00', '00:00:00', '2020-09-07 21:14:09'),
(0, 0, 0, 0, 45, '', '', 'atsushi nakajima has accepted your carpool request.', '', '', '0000-00-00', '00:00:00', '2020-09-07 21:18:12'),
(99, 0, 0, 50, 46, '', '', 'atsushi nakajima has accepted your carpool request.', '', '', '0000-00-00', '00:00:00', '2020-09-07 21:27:08'),
(0, 0, 0, 0, 47, '', '', 'atsushi nakajima has accepted your carpool request.', '', '', '0000-00-00', '00:00:00', '2020-09-15 19:54:05'),
(0, 0, 0, 0, 48, '', '', 'azmira       Ahmad       has accepted your carpool request.', '', '', '0000-00-00', '00:00:00', '2020-09-15 19:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `passengerId` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `rideId` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `dateReq` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lname` varchar(40) NOT NULL,
  `driverId` int(10) NOT NULL,
  `location` varchar(40) NOT NULL,
  `destination` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `passengerId`, `fname`, `rideId`, `message`, `dateReq`, `lname`, `driverId`, `location`, `destination`, `date`, `time`) VALUES
(175, 52, 'azmira    ', 113, 'azmira     ahmad     would like to join carpool.', '2020-08-20 10:13:34', 'ahmad    ', 51, '', '', '2020-08-20', '00:00:00'),
(177, 52, 'azmira    ', 113, 'azmira     ahmad     would like to join carpool.', '2020-08-20 10:19:09', 'ahmad    ', 51, '', '', '2020-08-20', '00:00:00'),
(178, 50, 'azmira   ', 114, 'azmira    Ahmad    would like to join carpool.', '2020-09-05 06:21:18', 'Ahmad   ', 55, '', '', '2020-09-05', '00:00:00'),
(179, 50, 'azmira   ', 113, 'azmira    Ahmad    would like to join carpool.', '2020-09-05 06:31:45', 'Ahmad   ', 51, '', '', '2020-09-05', '00:00:00'),
(180, 50, 'azmira   ', 113, 'azmira    Ahmad    would like to join carpool.', '2020-09-05 16:10:24', 'Ahmad   ', 51, '', '', '2020-09-06', '00:00:00'),
(181, 50, 'azmira     ', 117, 'azmira      Ahmad      would like to join carpool.', '2020-09-06 17:47:38', 'Ahmad     ', 65, '', '', '2020-09-07', '00:00:00'),
(196, 99, 'atsushi', 120, 'atsushi nakajima would like to join carpool.', '2020-09-07 19:35:50', 'nakajima', 82, '', '', '2020-09-08', '00:00:00'),
(221, 99, 'atsushi', 120, 'atsushi nakajima would like to join carpool.', '2020-09-07 21:14:28', 'nakajima', 82, '', '', '2020-09-08', '00:00:00'),
(223, 50, 'azmira     ', 120, 'azmira      Ahmad      would like to join carpool.', '2020-09-15 19:44:43', 'Ahmad     ', 82, '', '', '2020-09-16', '00:00:00'),
(224, 50, 'azmira      ', 119, 'azmira       Ahmad       would like to join carpool.', '2020-09-15 19:53:18', 'Ahmad      ', 99, '', '', '2020-09-16', '00:00:00'),
(226, 50, 'azmira      ', 119, 'azmira       Ahmad       would like to join carpool.', '2020-09-15 19:53:44', 'Ahmad      ', 99, '', '', '2020-09-16', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ride`
--

CREATE TABLE `ride` (
  `rideId` int(11) NOT NULL,
  `driverId` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `noPassenger` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `color` varchar(15) NOT NULL,
  `plate_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ride`
--

INSERT INTO `ride` (`rideId`, `driverId`, `location`, `destination`, `date`, `time`, `noPassenger`, `username`, `fname`, `lname`, `model`, `color`, `plate_no`) VALUES
(113, 51, 'Melaka', 'Pahang', '2020-07-10', '22:00:00', 3, '', 'Fatihah', 'Yusoff', 'Proton iriz', 'Maroon', 'VS 1123'),
(114, 55, 'Puchong', 'Melaka  ', '2020-06-28', '14:00:00', 4, '', 'Aaira', 'Sofea', 'Proton saga', 'Black', 'CDC1132'),
(115, 66, 'Puchong', 'Melaka  ', '2020-06-28', '14:00:00', 3, '', 'kenma', 'kozume', 'Proton Iriz', 'Black', 'JHS3211'),
(116, 65, 'Puchong ', 'Melaka    ', '2020-06-28', '14:00:00', 3, '', 'Nabila', 'Amira', 'Perodua Myvi', 'Black', 'NSA2212'),
(117, 65, 'Kelantan', 'Melaka  ', '2020-06-28', '14:00:00', 3, '', 'Nabila ', 'Amira ', 'Perodua myvi', 'Black', 'WSD2499'),
(118, 55, 'Puchong', 'Melaka  ', '2020-06-28', '14:00:00', 3, '', 'Aaira', 'Sofea', 'Perodua myvi', 'Blue', 'VS1134'),
(119, 99, 'Melaka', 'Seremban', '2020-09-10', '15:09:00', 3, '', 'atsushi', 'nakajima', 'Iriz', 'Maroon', 'VS1132'),
(120, 82, 'Melaka', 'Selangor', '2020-09-11', '18:12:00', 3, '', 'Kuroo ', 'Tetsuro ', 'Proton Saga', 'Red', 'TAX11233'),
(121, 50, 'Melaka  ', 'Pahang  ', '2020-09-16', '15:46:00', 5, '', 'azmira     ', 'Ahmad     ', 'Alza', 'Black', 'AMSS1121'),
(122, 50, 'Melaka', 'Puchong', '2020-09-16', '15:58:00', 3, '', 'azmira      ', 'Ahmad      ', 'Proton Iriz', 'Maroon', 'TAX1123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phoneNum` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_image` varchar(10) NOT NULL,
  `dateReg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `fname`, `lname`, `password`, `phoneNum`, `email`, `userType`, `address`, `user_image`, `dateReg`) VALUES
(50, 'azmira       ', 'azmira       ', 'Ahmad       ', '123456', '0104694002    ', 'azmiraahmadd@gmail.com      ', '', '  Puchong, Selangor    ', '', '2020-09-15 19:58:49'),
(51, 'Fatihah Yusoff', 'Fatihah', 'Yusoff', '12345', '012133455', 'nfyusoff@gmail.com', '', '', '', '2020-08-17 11:44:43'),
(55, 'lulu ', 'Aaira', 'Sofea', '123456', '0122434454 ', 'kodzuken@gmail.com ', ' ', ' ', '', '2020-07-17 11:44:43'),
(56, 'lulupyon', 'Fatihah', 'Yusoff', '123', '0122434454', 'fatihah@gmail.com', '', '', '', '2020-07-17 11:44:43'),
(58, 'aira', 'Azmira', 'Ahmad', '123456', '0189854762', 'ara09@gmail.com', 'Passenger', '', '', '2020-07-17 11:44:43'),
(65, 'Bylamira ', 'Nabila ', 'Amira ', '123456', '0123456788 ', 'bylamira@gmail.com ', '', ' ', '', '2020-06-17 11:44:43'),
(66, 'kozume kenma', 'kenma', 'kozume', '123456', '0123456787', 'kodzuken00@gmail.com', '', '', '', '2020-06-17 11:44:43'),
(70, 'aqil', 'Aqil', 'Hikari', '123456', '0128979800', 'aqil@gmail.com', '', '', '', '2020-05-17 11:44:43'),
(71, 'Akaashi', 'Akaashi', 'Keiji', '123abc', '0123456987', 'akaashi@gmail.com', '', '', '', '2020-05-17 11:44:43'),
(72, 'Lulupyon', 'Etasya', 'Hazlin', '123456', '0123452134', 'esya@gmail.com', '', '', '', '2020-05-17 11:44:43'),
(73, 'Ajwad', 'Syahzrul ', 'Ajwad', '123456', '0104694762', 'syah@gmail.com', '', '', '', '2020-05-17 11:44:43'),
(74, 'fatin', 'Fatin', 'Hanani', '123456', '0189854762', 'fnani@gmail.com', '', '', '', '2020-04-17 11:44:43'),
(75, 'aariz ', 'Aariz', 'Danial', '123456', '0189854762', 'aadanial@gmail.com', '', '', '', '2020-04-17 11:44:43'),
(76, 'momo', 'fatin', 'Najihah', '123456', '0147328903', 'fnajihah@gmai.com', '', '', '', '2020-04-17 11:44:43'),
(77, 'Hidayah ', 'Hidayah ', 'Azmi ', '123456', '0129876789 ', 'hidayah@gmail.com ', '', ' Rawang, Selangor', '', '2020-08-17 11:44:43'),
(78, 'Arifah ', 'Arifah ', 'Ahmad ', '123456', '0189854762 ', 'arifah@gmail.com ', '', ' Tanjung karang, selangor', '', '2020-03-17 11:44:43'),
(79, 'Izzat ', 'Izzat ', 'Ali imran', '123456', '0189854762 ', 'izzat@gmail.com ', '', ' Padang jawa,shah alam', '', '2020-08-17 11:44:43'),
(80, 'Hanan ', 'Hanan  ', 'Nuzul ', '123456', '0147328903 ', 'hanan@gmail.com ', '', ' Pasir mas, kelantan', '', '2020-08-17 11:44:43'),
(81, 'Nurfarahin ', 'Farahin ', 'Ahmad ', '123456', '0147328903 ', 'farahin@gmail.com ', '', ' Puchong', '', '2020-08-17 11:44:43'),
(82, 'kuroo ', 'Kuroo ', 'Tetsuro ', '123456', '0123423498 ', 'kurochii@gmail.com ', '', ' Kuala lumpur', '', '2020-08-17 11:44:43'),
(83, 'ajwad ', 'Syahzrul', 'Ajwad', '123456', '0123456789', 'ajwad@gmail.com', '', '', '', '2020-08-30 14:04:53'),
(84, 'azmira       ', 'azmira       ', 'Ahmad       ', '123456', '0104694002    ', 'azmiraahmadd@gmail.com      ', '', '  Puchong, Selangor    ', '', '2020-09-15 19:58:49'),
(85, 'Fareez', 'Fareez', 'Haziq', '123456', '0123456789', 'fhaziq@gmail.com', '', '', '', '2020-04-05 18:10:01'),
(86, 'SAD', 'dfs', 'fds', '123456', '0122434454', 'b031810022@student.utem.edu.my', '', '', '', '2020-04-05 18:13:16'),
(87, 'haha', 'haha', 'haah', '123456', '0123456789', 'a@gmail.com', '', '', '', '2020-04-05 18:45:12'),
(88, 'jagmo1', 'jaja', 'jaja', '123456', '0123456789', 'j@gmail.com', '', '', '', '2020-03-05 18:47:28'),
(89, 'haziq', 'Haziq', 'Ahmad', '123456', '0123456789', 'haziq@gmail.com', '', '', '', '2020-03-05 18:48:54'),
(90, 'mira', 'mira', 'azmira', '123456', '0122434454', 'az@gmail.com', '', '', '', '2020-03-05 18:56:43'),
(91, 'minasan', 'suhaimin', 'mohamad', '123456', '0122434454', 'su@gmail.com', '', '', '', '2020-03-05 19:05:18'),
(92, 'test', 'tester', 'test', '123456', '0122434454 ', 'tester@gmail.com', '', '', '', '2020-03-05 19:25:05'),
(93, 'Hinata', 'Shouyo', 'Hinata', '123456', '0123456711', 'hinata@gmail.com', '', '', '', '2020-02-05 20:09:06'),
(94, 'mira', 'azmira ', 'Ahmad ', '123456', '0122445699', 'duhh.lembap00@gmail.com', '', '', '', '2020-02-05 20:51:22'),
(95, 'azmira       ', 'azmira       ', 'Ahmad       ', '123456', '0104694002    ', 'azmiraahmadd@gmail.com      ', '', '  Puchong, Selangor    ', '', '2020-09-15 19:58:49'),
(96, 'mira', 'Namira', 'Amira', '123456', '0122434454 ', 'namira@gmail.com', '', '', '', '2020-02-05 20:56:28'),
(97, 'wani', 'wan nur', 'wani', '123456', '0123456711', 'waniwan@gmail.com', '', '', '', '2020-01-05 21:00:21'),
(98, 'azmiar', 'mira', 'ahmad', '123456', '0122434454', 'snazmir@gmail.com', '', '', '', '2020-01-06 03:45:47'),
(99, 'jinko', 'atsushi', 'nakajima', '123456', '0123456778', 'jinko@gmail.com', '', '', '', '2020-01-07 12:19:14'),
(100, 'dazai', 'dazai', 'osamu', '123456', '012345677654', 'dazai@gmail.com', '', '', '', '2020-01-07 12:20:27'),
(101, 'dazai', 'dazai', 'osamu', '123456', '012345677654', 'dazai@gmail.com', '', '', '', '2020-01-07 12:21:03'),
(102, 'aira', 'Azmira', 'Ahmad', '123456', '0189854762', 'ara09@gmail.com', 'Passenger', '', '', '2020-09-07 12:22:18'),
(103, 'dazai', 'dazai', 'osamu', '123456', '012345677654', 'dazai@gmail.com', '', '', '', '2020-09-07 12:22:24'),
(104, 'aira', 'Azmira', 'Ahmad', '123456', '0189854762', 'ara09@gmail.com', 'Passenger', '', '', '2020-09-07 12:23:18'),
(105, 'rashomon', 'ryunosuke', 'akutagawa', '123456', '0123456765', 'rashomon@gmail.com', '', '', '', '2020-09-07 12:25:57'),
(106, 'azmira       ', 'azmira       ', 'Ahmad       ', '123456', '0104694002    ', 'azmiraahmadd@gmail.com      ', '', '  Puchong, Selangor    ', '', '2020-09-15 19:58:49'),
(107, 'azmira       ', 'azmira       ', 'Ahmad       ', '123456', '0104694002    ', 'azmiraahmadd@gmail.com      ', '', '  Puchong, Selangor    ', '', '2020-09-15 19:58:49'),
(108, 'aira', 'Azmira', 'Ahmad', '123456', '0189854762', 'ara09@gmail.com', 'Passenger', '', '', '2020-09-07 18:43:36'),
(109, 'admin', 'admn', 'amdin', '123456', '0123456711', 'asdm@fjfj.com', '', '', '', '2020-09-15 19:51:10'),
(110, 'azmira ', 'adminAM', 'admin', '123456', '0122434454 ', 'adimn@gmail.com', '', '', '', '2020-09-15 20:00:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pool`
--
ALTER TABLE `pool`
  ADD PRIMARY KEY (`poolID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ride`
--
ALTER TABLE `ride`
  ADD PRIMARY KEY (`rideId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pool`
--
ALTER TABLE `pool`
  MODIFY `poolID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
--
-- AUTO_INCREMENT for table `ride`
--
ALTER TABLE `ride`
  MODIFY `rideId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
