-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2021 at 03:10 PM
-- Server version: 10.3.25-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weislabc_bcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `organization` varchar(200) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `organization`, `message`) VALUES
(1, 'raj', 'saurabhkumar.m@somaiya.edu', 123, 'KJSCE', '1553');

-- --------------------------------------------------------

--
-- Table structure for table `image_data`
--

CREATE TABLE `image_data` (
  `image_id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `confidence_score` double NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_data`
--

INSERT INTO `image_data` (`image_id`, `filename`, `diagnosis`, `confidence_score`, `timestamp`, `user_id`) VALUES
(2, '8_1.png', 'papillary_carcinoma', 0.466042, '2017-11-05 17:48:41', 8),
(3, '8_2.png', 'phyllodes_tumor', 0.409455, '2017-11-05 17:48:41', 8),
(4, '8_3.png', 'fibroadenoma', 0.900835, '2017-11-05 17:48:41', 8),
(5, '8_4.png', 'mucinous_carcinoma', 0.898822, '2017-11-05 17:48:41', 8),
(6, '8_5.png', 'phyllodes_tumor', 0.415723, '2017-11-05 17:48:41', 8),
(7, '8_6.png', 'ductal_carcinoma', 0.96815, '2017-11-05 17:48:41', 8),
(8, '8_7.png', 'fibroadenoma', 0.476693, '2017-11-05 17:48:41', 8),
(11, '8_8.png', 'ductal_carcinoma', 1, '2017-11-05 19:51:32', 8),
(12, '8_9.png', 'adenosis', 0.593539, '2017-11-05 19:52:22', 8),
(13, '8_10.png', 'adenosis', 0.998983, '2017-11-05 19:54:02', 8),
(14, '8_11.png', 'mucinous_carcinoma', 0.999995, '2017-11-05 19:54:23', 8),
(15, '8_12.png', 'tubular_adenoma', 0.999994, '2017-11-05 19:54:43', 8),
(16, '8_13.png', 'tubular_adenoma', 0.544871, '2017-11-05 19:55:14', 8),
(17, '8_14.png', 'adenosis', 0.722744, '2017-11-05 19:55:34', 8),
(18, '8_15.png', 'adenosis', 1, '2017-11-05 19:56:04', 8),
(19, '8_16.png', 'fibroadenoma', 0.999999, '2017-11-05 19:56:35', 8),
(20, '8_17.png', 'adenosis', 0.52339, '2017-11-05 19:57:05', 8),
(21, '11_1.png', '', 0, '2019-12-07 12:10:07', 11),
(22, '11_2.png', '', 0, '2019-12-10 19:55:01', 11),
(23, '11_3.png', '', 0, '2019-12-12 08:18:20', 11),
(24, '11_4.png', '', 0, '2019-12-15 15:16:42', 11),
(25, '11_5.png', '', 0, '2019-12-15 15:17:47', 11),
(26, '11_6.png', '', 0, '2019-12-16 11:34:51', 11),
(27, '11_7.png', '', 0, '2019-12-16 18:13:51', 11),
(28, '11_8.png', '', 0, '2019-12-17 10:10:33', 11),
(29, '11_9.png', '', 0, '2019-12-18 11:02:48', 11),
(30, '11_10.png', '', 0, '2019-12-26 08:42:16', 11),
(31, '11_11.png', '', 0, '2019-12-26 12:13:27', 11),
(32, '11_12.png', '', 0, '2019-12-26 12:23:47', 11),
(33, '11_13.png', '', 0, '2019-12-26 14:16:33', 11),
(34, '11_14.png', '', 0, '2019-12-26 14:21:41', 11),
(35, '11_15.png', '', 0, '2019-12-26 14:21:50', 11),
(36, '11_16.png', '', 0, '2019-12-26 14:37:31', 11),
(37, '11_17.png', '', 0, '2019-12-26 15:43:47', 11),
(38, '11_18.png', '', 0, '2019-12-26 16:57:00', 11),
(39, '11_19.png', '', 0, '2019-12-26 21:29:08', 11),
(40, '11_20.png', '', 0, '2019-12-26 22:17:10', 11),
(41, '11_21.png', '', 0, '2019-12-26 23:55:42', 11),
(42, '11_22.png', '', 0, '2019-12-27 00:05:01', 11),
(43, '11_23.png', '', 0, '2019-12-27 00:14:16', 11),
(44, '11_24.png', '', 0, '2019-12-27 00:31:40', 11),
(45, '11_25.png', '', 0, '2019-12-27 00:33:36', 11),
(46, '11_26.png', '', 0, '2019-12-27 00:38:35', 11),
(47, '11_27.png', '', 0, '2019-12-28 07:30:42', 11),
(48, '11_28.png', '', 0, '2020-01-05 10:27:11', 11),
(49, '11_29.png', '', 0, '2020-01-07 12:09:16', 11),
(50, '11_30.png', '', 0, '2020-01-07 12:15:29', 11),
(51, '12_1.png', '', 0, '2020-01-12 17:01:37', 12),
(52, '11_31.png', '', 0, '2020-01-15 11:17:03', 11),
(53, '11_32.png', '', 0, '2020-04-23 08:16:20', 11),
(54, '13_1.png', '', 0, '2021-05-24 12:40:12', 13),
(55, '13_2.png', '', 0, '2021-06-19 11:11:56', 13);

-- --------------------------------------------------------

--
-- Table structure for table `patient_data`
--

CREATE TABLE `patient_data` (
  `p_id` int(11) NOT NULL,
  `radius_mean` double NOT NULL,
  `texture_mean` double NOT NULL,
  `perimeter_mean` double NOT NULL,
  `area_mean` double NOT NULL,
  `smoothness_mean` double NOT NULL,
  `compactness_mean` double NOT NULL,
  `concavity_mean` double NOT NULL,
  `concave_points_mean` double NOT NULL,
  `symmetry_mean` double NOT NULL,
  `fractal_dimension_mean` double NOT NULL,
  `radius_se` double NOT NULL,
  `texture_se` double NOT NULL,
  `perimeter_se` double NOT NULL,
  `area_se` double NOT NULL,
  `smoothness_se` double NOT NULL,
  `compactness_se` double NOT NULL,
  `concavity_se` double NOT NULL,
  `concave_points_se` double NOT NULL,
  `symmetry_se` double NOT NULL,
  `fractal_dimension_se` double NOT NULL,
  `radius_worst` double NOT NULL,
  `texture_worst` double NOT NULL,
  `perimeter_worst` double NOT NULL,
  `area_worst` double NOT NULL,
  `smoothness_worst` double NOT NULL,
  `compactness_worst` double NOT NULL,
  `concavity_worst` double NOT NULL,
  `concave_points_worst` double NOT NULL,
  `symmetry_worst` double NOT NULL,
  `fractal_dimension_worst` double NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `confidence_score` double NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_data`
--

INSERT INTO `patient_data` (`p_id`, `radius_mean`, `texture_mean`, `perimeter_mean`, `area_mean`, `smoothness_mean`, `compactness_mean`, `concavity_mean`, `concave_points_mean`, `symmetry_mean`, `fractal_dimension_mean`, `radius_se`, `texture_se`, `perimeter_se`, `area_se`, `smoothness_se`, `compactness_se`, `concavity_se`, `concave_points_se`, `symmetry_se`, `fractal_dimension_se`, `radius_worst`, `texture_worst`, `perimeter_worst`, `area_worst`, `smoothness_worst`, `compactness_worst`, `concavity_worst`, `concave_points_worst`, `symmetry_worst`, `fractal_dimension_worst`, `diagnosis`, `confidence_score`, `time`, `user_id`) VALUES
(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Benign', 0, '2017-11-05 14:25:48', 8),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Benign', 0, '2017-11-05 14:25:48', 8),
(4, 17.99, 10.38, 122.8, 1001, 0.1184, 0.2776, 0.3001, 0.1471, 0.2419, 0.07871, 1.095, 0.9053, 8.589, 153.4, 0.006399, 0.04904, 0.05373, 0.01587, 0.03003, 0.006193, 25.38, 17.33, 184.6, 2019, 0.1622, 0.6656, 0.7119, 0.2654, 0.4601, 0.1189, 'Malignant', 0, '2017-11-05 20:25:07', 8),
(5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 0, '2019-12-12 11:09:23', 11),
(6, 0.5, 0.5, 0.5, 0.3, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, '', 0, '2021-05-05 13:35:43', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`, `dob`, `age`, `fname`, `lname`) VALUES
(8, 'raj.dn@somaiya.edu', 'raj', '202cb962ac59075b964b07152d234b70', '1997-11-27', 19, 'Raj', 'Nandu'),
(9, 'saurabhkumar.m@somaiya.edu', 'saurabh', '202cb962ac59075b964b07152d234b70', '2017-10-30', 19, 'Saurabh', 'Makwana'),
(10, 's@gmail.com', 'sat', '202cb962ac59075b964b07152d234b70', '1997-11-27', 19, 'Satyajeet', 'Kamble'),
(11, 'akshay@abc.com', 'akshay', '202cb962ac59075b964b07152d234b70', '2019-01-01', 1, 'Akshay', 'Gautam'),
(12, 'btmayank09@gmail.com', 'btmayank09', '202cb962ac59075b964b07152d234b70', '0000-00-00', 35, 'Shailendra', 'Mishra'),
(13, 'amanbioinfo@gmail.com', 'amanbioinfo', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00', 31, 'Aman', 'Kaushik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_data`
--
ALTER TABLE `image_data`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `patient_data`
--
ALTER TABLE `patient_data`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_data`
--
ALTER TABLE `image_data`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `patient_data`
--
ALTER TABLE `patient_data`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_data`
--
ALTER TABLE `image_data`
  ADD CONSTRAINT `image_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `patient_data`
--
ALTER TABLE `patient_data`
  ADD CONSTRAINT `patient_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
