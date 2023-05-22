-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2019 at 01:18 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciwprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `rentcasetable`
--

DROP TABLE IF EXISTS `rentcasetable`;
CREATE TABLE IF NOT EXISTS `rentcasetable` (
  `rentcase_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rentcase_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rentcase_area` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rentcase_rahnprice` int(100) UNSIGNED DEFAULT NULL,
  `rentcase_rentprice` int(100) UNSIGNED DEFAULT NULL,
  `rentcase_meterage` int(50) UNSIGNED DEFAULT NULL,
  `rentcase_roomnum` int(50) UNSIGNED DEFAULT NULL,
  `rentcase_buildyear` int(50) UNSIGNED DEFAULT NULL,
  `rentcase_exp` text COLLATE utf8mb4_unicode_ci,
  `rentcase_userid` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`rentcase_id`),
  KEY `rentcase_userid` (`rentcase_userid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentcasetable`
--

INSERT INTO `rentcasetable` (`rentcase_id`, `rentcase_type`, `rentcase_area`, `rentcase_rahnprice`, `rentcase_rentprice`, `rentcase_meterage`, `rentcase_roomnum`, `rentcase_buildyear`, `rentcase_exp`, `rentcase_userid`) VALUES
(2, 'ویلایی', 'راهنمایی', 100000000, 3000000, 250, 2, 54, '', 23),
(4, 'آپارتمانی', 'قدس', 200000000, 12000000, 230, 4, 74, 'شیبشسیبشسیبشسبشس', 23),
(6, 'آپارتمانی', 'قدس', 200000000, 4000000, 170, 3, 94, 'اکازیون', 21),
(7, 'ویلایی', 'فرهاد', 3000000, 3000000, 444444, 44, 1234, '', 21),
(10, 'ویلایی', 'قدس', 200000000, 2300000, 130, 2, 1394, 'مخصوص زوج های جوان', 39),
(11, 'زمین', 'احمدآباد', 3000000, 2300000, 1000, 4, 1334, 'زمین بایر', 39);

-- --------------------------------------------------------

--
-- Table structure for table `sellcasetable`
--

DROP TABLE IF EXISTS `sellcasetable`;
CREATE TABLE IF NOT EXISTS `sellcasetable` (
  `sellcase_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sellcase_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sellcase_area` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sellcase_sellprice` int(50) UNSIGNED DEFAULT NULL,
  `sellcase_meterage` int(50) UNSIGNED DEFAULT NULL,
  `sellcase_roomnum` int(50) UNSIGNED DEFAULT NULL,
  `sellcase_buildyear` int(50) DEFAULT NULL,
  `sellcase_exp` text COLLATE utf8mb4_unicode_ci,
  `sellcase_userid` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`sellcase_id`),
  KEY `sellcase_userid` (`sellcase_userid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellcasetable`
--

INSERT INTO `sellcasetable` (`sellcase_id`, `sellcase_type`, `sellcase_area`, `sellcase_sellprice`, `sellcase_meterage`, `sellcase_roomnum`, `sellcase_buildyear`, `sellcase_exp`, `sellcase_userid`) VALUES
(10, 'تجاری', 'فرهاد', 1000000000, 50, 0, 77, 'شیک و مرتب', 23),
(12, 'آپارتمانی', 'راهنمایی', 750000000, 150, 3, 92, 'ساخت با بهترین متریال', 21),
(13, 'ویلایی', 'احمدآباد', 4000000000, 250, 4, 63, 'کلنگی مناسب ساخت و ساز', 21),
(18, 'ویلایی', 'راهنمایی', 232323, 9999, 4, 6666, '', 21),
(19, 'ویلایی', 'فرهاد', 450000000, 150, 3, 1385, 'اکازیون', 39);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `user_username`, `user_password`, `user_tel`) VALUES
(21, 'shayan', '4297f44b13955235245b2497399d7a93', '09354578914'),
(23, 'hossein', '4297f44b13955235245b2497399d7a93', '090555575555'),
(24, 'amir', '4297f44b13955235245b2497399d7a93', '09105000766'),
(27, 'hasan', '4297f44b13955235245b2497399d7a93', '09151144234'),
(38, 'omid', '4297f44b13955235245b2497399d7a93', '09453423126'),
(39, 'jafar', '4297f44b13955235245b2497399d7a93', '09151184980');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rentcasetable`
--
ALTER TABLE `rentcasetable`
  ADD CONSTRAINT `rentcasetable_ibfk_1` FOREIGN KEY (`rentcase_userid`) REFERENCES `usertable` (`user_id`);

--
-- Constraints for table `sellcasetable`
--
ALTER TABLE `sellcasetable`
  ADD CONSTRAINT `sellcasetable_ibfk_1` FOREIGN KEY (`sellcase_userid`) REFERENCES `usertable` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
