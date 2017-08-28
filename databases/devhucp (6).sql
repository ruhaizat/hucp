-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 03:16 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devhucp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE IF NOT EXISTS `ci_session` (
  `id` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `data`, `ip_address`, `timestamp`) VALUES
('vua7sshs8l98s1r5muko971u56ekjmd6', '__ci_last_regenerate|i:1503383094;', '::1', '1503383420'),
('03hphcml29oe88g3bfn0cbd5t4n3ihk2', '__ci_last_regenerate|i:1503383421;', '::1', '1503383422'),
('028jtghoa8odlnhckgk8iiull5t7gdqb', '__ci_last_regenerate|i:1503383848;', '::1', '1503384145'),
('h2hgimd86b1r90feb640fqv100qjnq9l', '__ci_last_regenerate|i:1503384165;', '::1', '1503384458'),
('a7lv1ljvppto85v64h6mv5hejdpjaqq9', '__ci_last_regenerate|i:1503384471;', '::1', '1503384615'),
('5smcrt5ak8e8q0d9l3cbn8173d963gc8', '__ci_last_regenerate|i:1503384847;', '::1', '1503385039'),
('crml3csft2phh0ib8c2atkkhk75vrmlc', '__ci_last_regenerate|i:1503385205;', '::1', '1503385488'),
('i8tl43710at5hcrqm1iddb8ic738q5bb', '__ci_last_regenerate|i:1503385598;', '::1', '1503385630'),
('q90mnlgvp9t1l9hlp5s97imit8p5gm6m', '__ci_last_regenerate|i:1503386595;', '::1', '1503386793'),
('8tbje0mnr9ntu1e7jmm08liaumo7g2bk', '__ci_last_regenerate|i:1503386942;', '::1', '1503387103'),
('uqf9s78eih22vmhqof534bs4fb1cnojb', '__ci_last_regenerate|i:1503389192;', '::1', '1503389235'),
('0d2k0hqkp0cgc3cf512rj2j6lp9kgfo7', '__ci_last_regenerate|i:1503390352;', '::1', '1503390352'),
('7q1o0c0befi0o8q8hc4emnp60v6otlel', '__ci_last_regenerate|i:1503391497;', '::1', '1503391603'),
('59rp9p3jp3t3b739oou9jo1372ttt4pd', '__ci_last_regenerate|i:1503406523;LoggedUser|a:5:{s:6:"UserID";s:2:"10";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:14:"me@ruhaizat.my";s:4:"Type";N;s:5:"Group";s:1:"2";}', '::1', '1503406752'),
('dnq61jdjgpnstgqf5gfjnhm5dk7ek4t3', '__ci_last_regenerate|i:1503407032;LoggedUser|a:5:{s:6:"UserID";s:2:"10";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:14:"me@ruhaizat.my";s:4:"Type";N;s:5:"Group";s:1:"2";}', '::1', '1503407374'),
('0arkiojeg2ndm1cdl0p7ktjc6s3rjqte', '__ci_last_regenerate|i:1503407375;LoggedUser|a:5:{s:6:"UserID";s:2:"10";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:14:"me@ruhaizat.my";s:4:"Type";N;s:5:"Group";s:1:"2";}', '::1', '1503407690'),
('5l8vohco97nlbu6lkj4nnh1ui8fl2a4t', '__ci_last_regenerate|i:1503407773;', '::1', '1503408130'),
('gkeiru7ju241ahhs511ricqr7a0sbc4v', '__ci_last_regenerate|i:1503408130;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1503408153'),
('d6h4kbhlncbsbsi2tabb38u6akcvracs', '__ci_last_regenerate|i:1503408440;LoggedUser|a:5:{s:6:"UserID";s:2:"10";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:14:"me@ruhaizat.my";s:4:"Type";N;s:5:"Group";s:1:"2";}', '::1', '1503408526'),
('p27uh2es616ejkp4bj1gjcuq96ulvp22', '__ci_last_regenerate|i:1503410049;LoggedUser|a:5:{s:6:"UserID";s:2:"10";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:14:"me@ruhaizat.my";s:4:"Type";N;s:5:"Group";s:1:"2";}', '::1', '1503410347'),
('lu5hgjjr38odsdla0ljj9kqdgbom5u05', '__ci_last_regenerate|i:1503410382;LoggedUser|a:5:{s:6:"UserID";s:2:"10";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:14:"me@ruhaizat.my";s:4:"Type";N;s:5:"Group";s:1:"2";}', '::1', '1503410383'),
('h69q87sa652ke41nk1h295tinpvarhm0', '__ci_last_regenerate|i:1503410793;LoggedUser|a:5:{s:6:"UserID";s:2:"10";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:14:"me@ruhaizat.my";s:4:"Type";N;s:5:"Group";s:1:"2";}', '::1', '1503411085'),
('r3l5d53ppdmgo3nfdqdd9o9lgj1mo5f0', '__ci_last_regenerate|i:1503411177;', '::1', '1503411366'),
('m3r71245eih7527trkh7jkcqdq6shs3m', '__ci_last_regenerate|i:1503411841;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1503412039'),
('g3iavts41epdlvcdb5fjj41raf620ep7', '__ci_last_regenerate|i:1503412681;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1503412748'),
('u8qup2q5e97rs7n5e6mv4avp50ddfa5h', '__ci_last_regenerate|i:1503413150;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1503413323'),
('kbn1v42e8b2i5sebcn3hkpko6j45dgf8', '__ci_last_regenerate|i:1503449202;', '::1', '1503449500'),
('2g7pfh2dc9e1q50choiqietecs4qu3l1', '__ci_last_regenerate|i:1503449803;', '::1', '1503449803'),
('1rjbgf0bnpgljf5ahpsbphh95503dodf', '__ci_last_regenerate|i:1503450111;', '::1', '1503450130'),
('ajmvlgoqaau1n7rjlvtro86k9objqmsm', '__ci_last_regenerate|i:1503450487;', '::1', '1503450513');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactseller`
--

CREATE TABLE IF NOT EXISTS `tbl_contactseller` (
  `ID` int(11) NOT NULL,
  `FromName` varchar(200) NOT NULL,
  `FromEmail` varchar(200) NOT NULL,
  `ToName` varchar(200) NOT NULL,
  `ToEmail` varchar(200) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `SentOn` datetime NOT NULL,
  `AdsID` int(11) NOT NULL,
  `SellerID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contactseller`
--

INSERT INTO `tbl_contactseller` (`ID`, `FromName`, `FromEmail`, `ToName`, `ToEmail`, `Message`, `SentOn`, `AdsID`, `SellerID`) VALUES
(1, 'M Izat', 'meizat@ruhaizat.my', 'Muhammad Ruhaizat', '0', '0', '2017-08-22 10:45:25', 48, 10),
(2, 'Me Izat Two', 'meizattwo@ruhaizat.my', 'Muhammad Ruhaizat', 'me@ruhaizat.my', 'testing 1234', '2017-08-22 10:46:41', 48, 10),
(3, 'test', 'test@ruhaizat.my', 'Muhammad Ruhaizat', 'me@ruhaizat.my', 'test', '2017-08-22 15:09:34', 61, 10),
(4, 'test', 'test@ruhaizat.my', 'Muhammad Ruhaizat', 'me@ruhaizat.my', 'test', '2017-08-23 03:08:33', 65, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emailsetting`
--

CREATE TABLE IF NOT EXISTS `tbl_emailsetting` (
  `ID` int(11) NOT NULL,
  `Setting` varchar(50) NOT NULL,
  `EmailAddress` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_emailsetting`
--

INSERT INTO `tbl_emailsetting` (`ID`, `Setting`, `EmailAddress`) VALUES
(1, 'Report', 'suhucp4@ruhaizat.my'),
(2, 'New Ads', 'suhucp1@ruhaizat.my'),
(3, 'New User', 'suhucp2@ruhaizat.my'),
(4, 'Contact Seller', 'suhucp3@ruhaizat.my');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favourite`
--

CREATE TABLE IF NOT EXISTS `tbl_favourite` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ListingID` int(11) NOT NULL,
  `AddedOn` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_favourite`
--

INSERT INTO `tbl_favourite` (`ID`, `UserID`, `ListingID`, `AddedOn`) VALUES
(12, 1, 48, '2017-07-30 06:10:39'),
(14, 1, 49, '2017-07-30 06:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listing`
--

CREATE TABLE IF NOT EXISTS `tbl_listing` (
  `ID` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Brand` varchar(255) DEFAULT NULL,
  `body_style` varchar(255) DEFAULT NULL,
  `Model` varchar(255) NOT NULL,
  `ManufacturingYear` varchar(255) NOT NULL,
  `Transmission` varchar(255) NOT NULL,
  `Specification` varchar(255) NOT NULL,
  `Condition` varchar(255) DEFAULT NULL,
  `Mileage` varchar(255) NOT NULL,
  `SellingPrice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `State` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Description` text NOT NULL,
  `en_cc` varchar(255) DEFAULT NULL,
  `gn_seat_capacity` varchar(255) DEFAULT NULL,
  `Colour` varchar(255) NOT NULL,
  `gn_doors` varchar(255) DEFAULT NULL,
  `gn_assembled` varchar(255) DEFAULT NULL,
  `tm_final_drive_ratio` varchar(255) DEFAULT NULL,
  `tm_gears` varchar(255) DEFAULT NULL,
  `en_stroke` varchar(255) DEFAULT NULL,
  `en_peak_power` varchar(255) DEFAULT NULL,
  `en_engine_type` varchar(255) DEFAULT NULL,
  `en_aspiration` varchar(255) DEFAULT NULL,
  `en_bore` varchar(255) DEFAULT NULL,
  `en_compression_ratio` varchar(255) DEFAULT NULL,
  `en_peak_torque` varchar(255) DEFAULT NULL,
  `en_direct_injection` varchar(255) DEFAULT NULL,
  `en_fuel_type` varchar(255) DEFAULT NULL,
  `dm_length` varchar(255) DEFAULT NULL,
  `dm_height` varchar(255) DEFAULT NULL,
  `dm_width` varchar(255) DEFAULT NULL,
  `dm_wheel_base` varchar(255) DEFAULT NULL,
  `dm_front_thread` varchar(255) DEFAULT NULL,
  `dm_rear_thread` varchar(255) DEFAULT NULL,
  `dm_fuel_tank` varchar(255) DEFAULT NULL,
  `br_front` varchar(255) DEFAULT NULL,
  `br_rear` varchar(255) DEFAULT NULL,
  `sus_front` varchar(255) DEFAULT NULL,
  `sus_rear` varchar(255) DEFAULT NULL,
  `tw_front` varchar(255) DEFAULT NULL,
  `tw_rear` varchar(255) DEFAULT NULL,
  `tw_front_rim` varchar(255) DEFAULT NULL,
  `tw_rear_rim` varchar(255) DEFAULT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `AddedOn` datetime NOT NULL,
  `AddedBy` int(11) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `IsFeatured` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_listing`
--

INSERT INTO `tbl_listing` (`ID`, `Status`, `Brand`, `body_style`, `Model`, `ManufacturingYear`, `Transmission`, `Specification`, `Condition`, `Mileage`, `SellingPrice`, `State`, `Address`, `Description`, `en_cc`, `gn_seat_capacity`, `Colour`, `gn_doors`, `gn_assembled`, `tm_final_drive_ratio`, `tm_gears`, `en_stroke`, `en_peak_power`, `en_engine_type`, `en_aspiration`, `en_bore`, `en_compression_ratio`, `en_peak_torque`, `en_direct_injection`, `en_fuel_type`, `dm_length`, `dm_height`, `dm_width`, `dm_wheel_base`, `dm_front_thread`, `dm_rear_thread`, `dm_fuel_tank`, `br_front`, `br_rear`, `sus_front`, `sus_rear`, `tw_front`, `tw_rear`, `tw_front_rim`, `tw_rear_rim`, `Latitude`, `Longitude`, `AddedOn`, `AddedBy`, `ModifiedOn`, `ModifiedBy`, `IsFeatured`) VALUES
(17, 0, 'Hyundai', 'Sedan', 'Accent', '2006', 'Automatic', 'RX-S', 'Used', '', '56200.00', 2, 'Bandar Utama Petaling Jaya Selangor Malaysia', 'testing new form', '1495', '5', '', '4', 'Locally Built', '3.656', '5', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '3.1467185', '101.61190729999998', '2017-06-19 08:13:36', 1, '2017-06-20 08:36:59', 1, 0),
(19, 0, 'Hyundai', 'Sedan', 'Azera', '2006', 'Automatic', 'GLS', 'Used', '', '11111.00', 13, 'Bachok Kelantan Malaysia', 'testingf', '3342', '5', '', '4', 'Official Import', '', '5', '83.8', '235', 'Piston', 'Aspirated', '92', '', '304', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4895', '1490', '1865', '2780', '1580', '1565', '75', 'Ventilated Discs', 'Discs', 'Double Wishbone', 'Multiple links', '225/55 R16', '225/55 R16', '16', '16', '6.0476558', '102.39447799999994', '2017-06-20 07:49:02', 1, '0000-00-00 00:00:00', 0, 0),
(22, 0, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'New', '', '33333.00', 8, 'Felda Seri Pagi Jengka 17 Bandar Tun Razak Pahang Malaysia', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '3.635278', '102.55584099999999', '2017-06-22 05:17:06', 11, '2017-06-22 05:17:34', 11, 0),
(23, 1, 'Hyundai', 'Sedan', 'Elantra', '1994', 'Automatic', 'GLS', 'New', '', '990.00', 3, 'Taman Flora Batu Pahat Johor Malaysia', 'testing hide box', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1.860823', '102.94416899999999', '2017-06-22 10:14:14', 1, '2017-08-19 16:38:26', 1, 0),
(24, 1, 'Hyundai', 'Sedan', 'Accent', '2005', 'Manual', 'RX-S', 'New', '', '67890.00', 3, 'Taman Banang Jaya Batu Pahat Johor Malaysia', 'testing 1234', '1495', '5', '', '4', 'Locally Built', '3.842', '5', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '1.814966', '102.95556910000005', '2017-06-22 10:15:27', 1, '2017-06-22 10:15:30', 1, 0),
(25, 0, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'Used', '4', '112158.00', 5, 'Tanjung Malim Perak Malaysia', 'testing car details', '1495', '5', 'White', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '3.705841499999999', '101.50491629999999', '2017-06-22 11:13:00', 1, '0000-00-00 00:00:00', 0, 0),
(37, -1, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'Used', '45,000 KM - 49,999 KM', '12321.00', 12, 'Jasin Malacca Malaysia', 'test', '1495', '5', 'white', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.311337', '102.43092309999997', '2017-07-04 06:48:32', 1, '0000-00-00 00:00:00', 0, 0),
(39, 0, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'New', '', '12321.00', 7, '', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.472971', '102.23119399999996', '2017-07-10 04:30:27', 1, '0000-00-00 00:00:00', 0, 0),
(40, 0, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'New', '', '12321.00', 7, '', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.472971', '102.23119399999996', '2017-07-10 04:32:38', 10, '0000-00-00 00:00:00', 0, 0),
(41, 0, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'Used', '', '12321.00', 7, '', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.472971', '102.23119399999996', '2017-07-10 04:32:51', 10, '0000-00-00 00:00:00', 0, 0),
(42, 0, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'Used', '', '12321.00', 7, '', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.472971', '102.23119399999996', '2017-07-10 04:33:16', 10, '0000-00-00 00:00:00', 0, 0),
(43, 0, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'New', '', '12321.00', 7, '', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.472971', '102.23119399999996', '2017-07-10 04:41:37', 10, '0000-00-00 00:00:00', 0, 0),
(44, 0, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'Used', '', '12321.00', 7, '', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.472971', '102.23119399999996', '2017-07-10 04:42:35', 10, '0000-00-00 00:00:00', 0, 0),
(45, 3, 'Hyundai', 'Sedan', 'Accent', '2005', 'Manual', 'L', 'Used', '', '111111.00', 12, 'Jasin Malacca Malaysia', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '5', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.311337', '102.43092309999997', '2017-07-10 04:43:03', 10, '2017-07-29 17:56:26', 1, 0),
(46, 1, 'Hyundai', 'Sedan', 'Accent', '2003', 'Automatic', 'L', 'Used', '', '111111.00', 3, 'Pekan Nanas Johor Malaysia', 'test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1.5349418', '103.52087519999998', '2017-07-10 04:44:17', 10, '2017-07-29 17:56:09', 1, 0),
(47, 1, 'Hyundai', 'Sedan', 'Accent', '2005', 'Automatic', 'L', 'New', '', '22222.00', 14, 'Kangar Perlis Malaysia', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '6.440633', '100.19837089999999', '2017-07-10 04:45:48', 10, '2017-07-10 04:46:03', 1, 0),
(48, 1, 'Hyundai', 'Sedan', 'Accent', '2005', 'Automatic', 'L', 'New', '', '22222.00', 14, 'Kangar Perlis Malaysia', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '6.440633', '100.19837089999999', '2017-07-10 04:46:27', 10, '2017-07-10 04:46:34', 1, 0),
(49, 1, 'Hyundai', 'Sedan', 'Accent', '2005', 'Manual', 'RX-S', 'New', '', '33333.00', 10, 'Song Sarawak Malaysia', 'testing 1234', '1495', '5', '', '4', 'Locally Built', '3.842', '5', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.0064401', '112.54976020000004', '2017-07-10 04:49:12', 28, '2017-07-29 18:11:59', 1, 1),
(50, 1, 'Hyundai', 'Sedan', 'Accent', '2005', 'Automatic', 'L', 'Used', '45,000 KM - 49,999 KM', '258951.00', 10, 'Song Sarawak Malaysia', 'test', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.0064401', '112.54976020000004', '2017-07-29 18:19:51', 11, '0000-00-00 00:00:00', 0, 0),
(51, 1, 'Hyundai', 'Sedan', 'Accent', '2005', 'Automatic', 'L', 'Used', '20,000 KM - 24,999 KM', '334455.00', 11, 'Setiu Terengganu Malaysia', 'test condition', '1495', '5', 'Black', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '5.4442314', '102.82847719999995', '2017-08-21 03:14:53', 10, '2017-08-21 03:16:22', 1, 0),
(57, 1, 'Hyundai', 'Sedan', 'Accent', '2005', 'Manual', 'RX-S', 'Used', '25,000 KM - 29,999 KM', '456321.00', 10, 'Song Sarawak Malaysia', 'test', '1495', '5', '', '4', 'Locally Built', '3.842', '5', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.0064401', '112.54976020000004', '2017-08-22 04:21:32', 27, '2017-08-22 04:21:46', 27, 0),
(58, 0, 'Hyundai', 'Sedan', 'Accent', '2005', 'Automatic', 'RX-S', 'Used', '10,000 KM - 14,999 KM', '56456.00', 9, 'Tawau Sabah Malaysia', 'test', '1495', '5', 'Black', '4', 'Locally Built', '3.656', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '4.244651', '117.89118610000003', '2017-08-22 14:57:04', 10, '2017-08-22 14:57:28', 10, 0),
(59, 0, 'Hyundai', 'Sedan', 'Accent', '2003', 'Automatic', 'L', 'Used', '25,000 KM - 29,999 KM', '75489.00', 12, 'Ayer Keroh Malacca Malaysia', 'test', '', '', 'Green', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2.269908', '102.29448909999996', '2017-08-22 14:59:04', 10, '2017-08-22 14:59:10', 10, 0),
(60, 0, 'Hyundai', 'Sedan', 'Accent', '2005', 'Manual', 'RX-S', 'Used', '15,000 KM - 19,999 KM', '123.00', 12, 'Jasin Malacca Malaysia', 'test', '1495', '5', 'B', '4', 'Locally Built', '3.842', '5', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.311337', '102.43092309999997', '2017-08-22 15:04:18', 10, '2017-08-22 15:04:27', 10, 0),
(61, 0, 'Hyundai', 'Sedan', 'Accent', '2004', 'Manual', 'L', 'Used', '25,000 KM - 29,999 KM', '1.00', 12, 'Federal Territory of Kuala Lumpur Malaysia', 'test', '1495', '5', 'f', '4', 'Official Import', '4.443', '5', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '3.1569486', '101.71230300000002', '2017-08-22 15:06:25', 10, '2017-08-22 15:06:39', 10, 0),
(62, 0, 'Hyundai', 'Sedan', 'Accent', '2005', 'Automatic', 'RX-S', 'Used', '20,000 KM - 24,999 KM', '123.00', 13, 'Kota Damansara Petaling Jaya Selangor Malaysia', 'a', '1495', '5', 'a', '4', 'Locally Built', '3.656', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '3.1622148', '101.58693210000001', '2017-08-22 15:11:24', 10, '2017-08-22 15:11:31', 10, 0),
(63, 1, 'Hyundai', 'Sedan', 'Accent', '2005', 'Automatic', 'L', 'Select a Condition', '', '123.00', 12, 'Temerloh Pahang Malaysia', 't e s t', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '3.448649', '102.41634820000002', '2017-08-22 15:14:35', 10, '2017-08-22 15:54:38', 10, 0),
(64, 1, 'Hyundai', 'Sedan', 'Accent', '2004', 'Automatic', 'L', 'Used', '10,000 KM - 14,999 KM', '123.00', 13, 'Temerloh Pahang Malaysia', 'q', '1495', '5', 'q', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '3.448649', '102.41634820000002', '2017-08-22 15:16:34', 10, '2017-08-22 15:54:15', 10, 0),
(65, 1, 'Hyundai', 'Sedan', 'Accent', '2005', 'Automatic', 'L', 'Select a Condition', '', '123.00', 13, 'Temerloh Pahang Malaysia', 'a b c d e', '1495', '5', '', '4', 'Official Import', '4.443', '4', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '3.448649', '102.41634820000002', '2017-08-22 15:19:39', 10, '2017-08-22 15:27:36', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listingimage`
--

CREATE TABLE IF NOT EXISTS `tbl_listingimage` (
  `ID` int(11) NOT NULL,
  `ListingPic` varchar(255) NOT NULL,
  `ListingID` int(11) NOT NULL,
  `AddedOn` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_listingimage`
--

INSERT INTO `tbl_listingimage` (`ID`, `ListingPic`, `ListingID`, `AddedOn`) VALUES
(24, '3.png', 17, '2017-06-20 05:07:01'),
(25, '41.jpg', 22, '2017-06-22 05:17:06'),
(26, 'download.jpg', 36, '2017-07-04 05:55:31'),
(27, 'Accent.png', 37, '2017-07-04 06:48:32'),
(28, 'accent_se_sedan_base_433x190.png', 37, '2017-07-04 06:48:33'),
(29, 'Accent1.png', 38, '2017-07-04 06:49:44'),
(30, 'accent_se_sedan_base_433x1901.png', 38, '2017-07-04 06:49:44'),
(31, 'Accent2.png', 48, '2017-07-10 04:46:27'),
(32, 'accent_se_sedan_base_433x1902.png', 48, '2017-07-10 04:46:27'),
(37, 'download1.jpg', 49, '2017-07-24 10:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE IF NOT EXISTS `tbl_newsletter` (
  `ID` int(11) NOT NULL,
  `HTML` text NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `AddedOn` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`ID`, `HTML`, `Subject`, `AddedOn`, `Status`) VALUES
(1, '<!DOCTYPE html><html lang="en-US">\n<head>\n    <meta charset="UTF-8"/>\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\n    <meta name="author" content="KNI">\n\n    <link href="http://localhost/hucp/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">\n    <link href="http://localhost/hucp/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">\n    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">\n    <link rel="stylesheet" href="http://localhost/hucp/assets/bootstrap/css/bootstrap.css" type="text/css">\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/jquery.nouislider.min.css" type="text/css">\n\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/owl.carousel.css" type="text/css">\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/style.css" type="text/css">\n\n    <title>Hyundai Used Car</title>\n\n</head>\n\n<body class="subpage-detail">\n<div class="page-wrapper">\n\n    <div id="page-content"><center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502631906.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502631907.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502631907.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502631907.png"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502631908.png"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502631909.png"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502631909.png"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center></div>\n    <!--end page-content-->\n\n    <footer id="page-footer">\n\n            <div class="footer-navigation">\n                <div class="container" style="width: 550px;">\n                    <div class="vertical-aligned-elements">\n                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </footer>\n    <!--end page-footer-->\n</div>\n<!--end page-wrapper-->\n<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>\n<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>\n\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery-2.2.1.min.js"></script>\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery-migrate-1.2.1.min.js"></script>\n<script type="text/javascript" src="http://localhost/hucp/assets/bootstrap/js/bootstrap.min.js"></script>\n<script type="text/javascript" src="http://localhost/hucp/assets/js/bootstrap-select.min.js"></script>\n<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>\n<script type="text/javascript" src="http://localhost/hucp/assets/js/richmarker-compiled.js"></script>\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery.validate.min.js"></script>\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery.nouislider.all.min.js"></script>\n<script type="text/javascript" src="http://localhost/hucp/assets/js/owl.carousel.min.js"></script>\n<script type="text/javascript" src="http://localhost/hucp/assets/js/custom.js"></script>\n<script type="text/javascript" src="http://localhost/hucp/assets/js/maps.js"></script>\n\n<script>\n    rating(".visitor-rating");\n    var _latitude = 40.7344458;\n    var _longitude = -73.86704922;\n    var element = "map-detail";\n    simpleMap(_latitude,_longitude, element);\n</script>\n\n</body>\n</html>', 'Test 123', '2017-08-13 15:45:12', 1),
(2, '<!DOCTYPE html>\r\n\r\n<html lang="en-US">\r\n<head>\r\n    <meta charset="UTF-8"/>\r\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\r\n    <meta name="author" content="KNI">\r\n\r\n    <link href="http://localhost/hucp/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">\r\n    <link href="http://localhost/hucp/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">\r\n    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/bootstrap/css/bootstrap.css" type="text/css">\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/jquery.nouislider.min.css" type="text/css">\r\n\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/owl.carousel.css" type="text/css">\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/style.css" type="text/css">\r\n\r\n    <title>Hyundai Used Car</title>\r\n\r\n</head>\r\n\r\n<body class="subpage-detail">\r\n<div class="page-wrapper">\r\n\r\n    <div id="page-content"><center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632583.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632583.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632584.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632584.png"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632585.png"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632585.png"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632586.png"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center></div>\r\n    <!--end page-content-->\r\n\r\n    <footer id="page-footer">\r\n\r\n            <div class="footer-navigation">\r\n                <div class="container" style="width: 550px;">\r\n                    <div class="vertical-aligned-elements">\r\n                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </footer>\r\n    <!--end page-footer-->\r\n</div>\r\n<!--end page-wrapper-->\r\n<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>\r\n<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>\r\n\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery-2.2.1.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery-migrate-1.2.1.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/bootstrap/js/bootstrap.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/bootstrap-select.min.js"></script>\r\n<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/richmarker-compiled.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery.validate.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery.nouislider.all.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/owl.carousel.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/custom.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/maps.js"></script>\r\n\r\n<script>\r\n    rating(".visitor-rating");\r\n    var _latitude = 40.7344458;\r\n    var _longitude = -73.86704922;\r\n    var element = "map-detail";\r\n    simpleMap(_latitude,_longitude, element);\r\n</script>\r\n\r\n</body>\r\n</html>', 'Test 5678', '2017-08-13 15:56:26', 0),
(3, '<!DOCTYPE html>\r\n\r\n<html lang="en-US">\r\n<head>\r\n    <meta charset="UTF-8"/>\r\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\r\n    <meta name="author" content="KNI">\r\n\r\n    <link href="http://localhost/hucp/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">\r\n    <link href="http://localhost/hucp/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">\r\n    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/bootstrap/css/bootstrap.css" type="text/css">\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/jquery.nouislider.min.css" type="text/css">\r\n\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/owl.carousel.css" type="text/css">\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/style.css" type="text/css">\r\n\r\n    <title>Hyundai Used Car</title>\r\n\r\n</head>\r\n\r\n<body class="subpage-detail">\r\n<div class="page-wrapper">\r\n\r\n    <div id="page-content"><center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632648.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632649.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632649.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632649.png"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center></div>\r\n    <!--end page-content-->\r\n\r\n    <footer id="page-footer">\r\n\r\n            <div class="footer-navigation">\r\n                <div class="container" style="width: 550px;">\r\n                    <div class="vertical-aligned-elements">\r\n                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </footer>\r\n    <!--end page-footer-->\r\n</div>\r\n<!--end page-wrapper-->\r\n<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>\r\n<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>\r\n\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery-2.2.1.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery-migrate-1.2.1.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/bootstrap/js/bootstrap.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/bootstrap-select.min.js"></script>\r\n<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/richmarker-compiled.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery.validate.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery.nouislider.all.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/owl.carousel.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/custom.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/maps.js"></script>\r\n\r\n<script>\r\n    rating(".visitor-rating");\r\n    var _latitude = 40.7344458;\r\n    var _longitude = -73.86704922;\r\n    var element = "map-detail";\r\n    simpleMap(_latitude,_longitude, element);\r\n</script>\r\n\r\n</body>\r\n</html>', 'Test0987', '2017-08-13 15:57:30', 1),
(4, '<!DOCTYPE html>\r\n\r\n<html lang="en-US">\r\n<head>\r\n    <meta charset="UTF-8"/>\r\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\r\n    <meta name="author" content="KNI">\r\n\r\n    <link href="http://localhost/hucp/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">\r\n    <link href="http://localhost/hucp/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">\r\n    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/bootstrap/css/bootstrap.css" type="text/css">\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/jquery.nouislider.min.css" type="text/css">\r\n\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/owl.carousel.css" type="text/css">\r\n    <link rel="stylesheet" href="http://localhost/hucp/assets/css/style.css" type="text/css">\r\n\r\n    <title>Hyundai Used Car</title>\r\n\r\n</head>\r\n\r\n<body class="subpage-detail">\r\n<div class="page-wrapper">\r\n\r\n    <div id="page-content"><center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632664.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632664.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502632665.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center></div>\r\n    <!--end page-content-->\r\n\r\n    <footer id="page-footer">\r\n\r\n            <div class="footer-navigation">\r\n                <div class="container" style="width: 550px;">\r\n                    <div class="vertical-aligned-elements">\r\n                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </footer>\r\n    <!--end page-footer-->\r\n</div>\r\n<!--end page-wrapper-->\r\n<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>\r\n<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>\r\n\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery-2.2.1.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery-migrate-1.2.1.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/bootstrap/js/bootstrap.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/bootstrap-select.min.js"></script>\r\n<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/richmarker-compiled.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery.validate.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/jquery.nouislider.all.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/owl.carousel.min.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/custom.js"></script>\r\n<script type="text/javascript" src="http://localhost/hucp/assets/js/maps.js"></script>\r\n\r\n<script>\r\n    rating(".visitor-rating");\r\n    var _latitude = 40.7344458;\r\n    var _longitude = -73.86704922;\r\n    var element = "map-detail";\r\n    simpleMap(_latitude,_longitude, element);\r\n</script>\r\n\r\n</body>\r\n</html>', 'Test6543', '2017-08-13 15:57:46', 0),
(5, '<!DOCTYPE html><html lang="en-US"><head>    <meta charset="UTF-8"/>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="author" content="KNI">    <link href="http://localhost/hucp/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">    <link href="http://localhost/hucp/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/bootstrap/css/bootstrap.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/jquery.nouislider.min.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/owl.carousel.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/style.css" type="text/css">    <title>Hyundai Used Car</title></head><body class="subpage-detail"><div class="page-wrapper">    <div id="page-content">																							  <center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704026.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704027.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704027.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704027.png"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704028.png"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704028.png"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704029.png"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center></div>    <!--end page-content-->    <footer id="page-footer">            <div class="footer-navigation">                <div class="container" style="width: 550px;">                    <div class="vertical-aligned-elements">                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>                    </div>                </div>            </div>        </div>    </footer>    <!--end page-footer--></div><!--end page-wrapper--><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a></body></html>', 'test je', '2017-08-14 11:47:11', 1),
(6, '<!DOCTYPE html><html lang="en-US"><head>    <meta charset="UTF-8"/>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="author" content="KNI">    <link href="http://localhost/hucp/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">    <link href="http://localhost/hucp/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/bootstrap/css/bootstrap.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/jquery.nouislider.min.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/owl.carousel.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/style.css" type="text/css">    <title>Hyundai Used Car</title></head><body class="subpage-detail"><div class="page-wrapper">    <div id="page-content">    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="author" content="KNI">    <link href="http://localhost/hucp/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">    <link href="http://localhost/hucp/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/bootstrap/css/bootstrap.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/jquery.nouislider.min.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/owl.carousel.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/style.css" type="text/css">    <title>Hyundai Used Car</title><div class="page-wrapper">    <div id="page-content" style="transform: translateY(0px);">																							  <center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704238.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704239.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704239.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704240.png"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704240.png"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704241.png"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502704241.png"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center></div>    <!--end page-content-->    <footer id="page-footer">            <div class="footer-navigation">                <div class="container" style="width: 550px;">                    <div class="vertical-aligned-elements">                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>                    </div>                </div>            </div>        </footer></div>        <!--end page-footer--><!--end page-wrapper--><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a></div>    <!--end page-content-->    <footer id="page-footer">            <div class="footer-navigation">                <div class="container" style="width: 550px;">                    <div class="vertical-aligned-elements">                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>                    </div>                </div>            </div>        </div>    </footer>    <!--end page-footer--></div><!--end page-wrapper--><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a></body></html>', 'test 1 2 3', '2017-08-14 11:50:44', 1),
(7, '																							  <center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706210.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706210.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706210.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center>', 'test 9', '2017-08-14 12:23:32', 1),
(8, '<!DOCTYPE html><html lang="en-US"><head>    <meta charset="UTF-8"/>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="author" content="KNI">    <link href="http://localhost/hucp/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">    <link href="http://localhost/hucp/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/bootstrap/css/bootstrap.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/jquery.nouislider.min.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/owl.carousel.css" type="text/css">    <link rel="stylesheet" href="http://localhost/hucp/assets/css/style.css" type="text/css">    <title>Hyundai Used Car</title></head><body class="subpage-detail"><div class="page-wrapper">    <div id="page-content">																							  <center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;font-family: Lato, sans-serif;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706379.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706379.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706380.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706380.png"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706381.png"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706381.png"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502706382.png"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center></div>    <!--end page-content-->    <footer id="page-footer">            <div class="footer-navigation">                <div class="container" style="width: 550px;">                    <div class="vertical-aligned-elements">                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>                    </div>                </div>            </div>        </div>    </footer>    <!--end page-footer--></div><!--end page-wrapper--><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a></body></html>', 'test 8', '2017-08-14 12:26:26', 1),
(9, '<!DOCTYPE html><html lang="en-US"><head>    <meta charset="UTF-8"/>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="author" content="KNI">    <title>Hyundai Used Car</title></head><body class="subpage-detail"><div class="page-wrapper">    <div id="page-content">																							  <center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716452.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716452.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716452.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716453.png"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716454.png"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716454.png"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716455.png"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center></div>    <!--end page-content-->    <footer id="page-footer">            <div class="footer-navigation">                <div class="container" style="width: 550px;">                    <div class="vertical-aligned-elements">                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>                    </div>                </div>            </div>        </div>    </footer>    <!--end page-footer--></div><!--end page-wrapper--><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a><a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a></body></html>', 'test 7', '2017-08-14 15:14:19', 1);
INSERT INTO `tbl_newsletter` (`ID`, `HTML`, `Subject`, `AddedOn`, `Status`) VALUES
(10, '																							  <center><div class="container" style="width: 550px;text-align:left;"><ol class="breadcrumb"></ol><img src="http://localhost/hucp/assets/img/logo_hyundai_grey.png" height="20px"><p class="pull-right"><a href="http://localhost/hucp/listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row"><a href="http://localhost/hucp/listing/details/50/11"><img id="divEROri_1" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716707.png"></a><a href="http://localhost/hucp/listing/details/49/28"><img id="divEROri_2" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716707.png"></a><a href="http://localhost/hucp/listing/details/48/10"><img id="divEROri_3" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716708.png"></a><a href="http://localhost/hucp/listing/details/47/10"><img id="divEROri_4" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716708.png"></a><a href="http://localhost/hucp/listing/details/46/10"><img id="divEROri_5" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716709.png"></a><a href="http://localhost/hucp/listing/details/24/1"><img id="divEROri_6" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716710.png"></a><a href="http://localhost/hucp/listing/details/23/1"><img id="divEROri_7" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="http://localhost/hucp/assets/img/newsletter/1502716710.png"></a></div></section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="http://localhost/hucp/">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="http://localhost/hucp/main/unsubscribe/1">unsubscribe.</a></p></div></center>', 'test 6', '2017-08-14 15:18:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recentlyviewed`
--

CREATE TABLE IF NOT EXISTS `tbl_recentlyviewed` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ListingID` int(11) NOT NULL,
  `IPAddress` varchar(50) NOT NULL,
  `ViewedOn` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=303 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recentlyviewed`
--

INSERT INTO `tbl_recentlyviewed` (`ID`, `UserID`, `ListingID`, `IPAddress`, `ViewedOn`) VALUES
(1, 0, 21, '::1', '2017-06-22 05:11:28'),
(2, 0, 21, '::1', '2017-06-22 05:13:03'),
(3, 0, 21, '::1', '2017-06-22 05:13:18'),
(4, 1, 21, '::1', '2017-06-22 05:13:29'),
(5, 40, 21, '::1', '2017-06-22 05:14:00'),
(6, 40, 21, '::1', '2017-06-22 05:15:08'),
(7, 40, 20, '::1', '2017-06-22 05:15:51'),
(8, 11, 22, '::1', '2017-06-22 05:17:06'),
(9, 11, 22, '::1', '2017-06-22 05:17:15'),
(10, 11, 22, '::1', '2017-06-22 05:17:24'),
(11, 11, 22, '::1', '2017-06-22 05:17:29'),
(12, 11, 22, '::1', '2017-06-22 05:22:28'),
(13, 1, 21, '::1', '2017-06-22 05:29:51'),
(14, 1, 21, '::1', '2017-06-22 05:30:00'),
(15, 1, 21, '::1', '2017-06-22 05:31:34'),
(16, 1, 21, '::1', '2017-06-22 05:32:58'),
(17, 1, 21, '::1', '2017-06-22 05:33:21'),
(18, 1, 21, '::1', '2017-06-22 05:34:08'),
(19, 1, 21, '::1', '2017-06-22 05:34:13'),
(20, 1, 21, '::1', '2017-06-22 05:34:42'),
(21, 1, 21, '::1', '2017-06-22 05:36:07'),
(22, 1, 21, '::1', '2017-06-22 05:36:26'),
(23, 1, 21, '::1', '2017-06-22 05:36:36'),
(24, 1, 21, '::1', '2017-06-22 05:36:44'),
(25, 1, 21, '::1', '2017-06-22 09:33:44'),
(26, 1, 23, '::1', '2017-06-22 10:14:14'),
(27, 1, 23, '::1', '2017-06-22 10:14:30'),
(28, 1, 24, '::1', '2017-06-22 10:15:27'),
(29, 1, 24, '::1', '2017-06-22 10:15:39'),
(30, 1, 24, '::1', '2017-06-22 10:17:45'),
(31, 1, 24, '::1', '2017-06-22 10:35:14'),
(32, 1, 24, '::1', '2017-06-22 10:36:28'),
(33, 1, 24, '::1', '2017-06-22 10:36:57'),
(34, 1, 25, '::1', '2017-06-22 11:13:00'),
(35, 1, 25, '::1', '2017-06-22 11:15:43'),
(36, 1, 26, '::1', '2017-06-22 11:15:53'),
(37, 1, 27, '::1', '2017-06-22 11:16:55'),
(38, 1, 28, '::1', '2017-06-22 11:17:49'),
(39, 1, 28, '::1', '2017-06-22 11:18:18'),
(42, 1, 30, '::1', '2017-06-22 11:19:30'),
(43, 40, 31, '::1', '2017-06-22 17:24:55'),
(44, 40, 32, '::1', '2017-06-22 17:36:54'),
(45, 40, 32, '::1', '2017-06-22 17:37:52'),
(46, 40, 33, '::1', '2017-06-22 17:54:09'),
(47, 40, 33, '::1', '2017-06-22 17:54:46'),
(48, 40, 33, '::1', '2017-06-22 17:55:00'),
(49, 40, 33, '::1', '2017-06-22 17:55:07'),
(50, 40, 33, '::1', '2017-06-22 17:56:54'),
(51, 40, 33, '::1', '2017-06-22 17:56:59'),
(52, 40, 33, '::1', '2017-06-22 17:57:05'),
(53, 40, 33, '::1', '2017-06-22 17:59:09'),
(54, 40, 33, '::1', '2017-06-22 17:59:17'),
(55, 40, 33, '::1', '2017-06-22 18:00:21'),
(56, 40, 34, '::1', '2017-06-22 18:00:53'),
(57, 40, 34, '::1', '2017-06-22 18:01:19'),
(58, 40, 34, '::1', '2017-06-22 18:01:26'),
(59, 40, 34, '::1', '2017-06-22 18:02:33'),
(60, 40, 34, '::1', '2017-06-22 18:02:40'),
(61, 40, 20, '::1', '2017-06-22 18:04:52'),
(62, 40, 20, '::1', '2017-06-22 18:05:36'),
(63, 1, 20, '::1', '2017-06-22 18:07:21'),
(64, 1, 20, '::1', '2017-06-22 18:07:29'),
(65, 1, 20, '::1', '2017-06-22 18:08:33'),
(66, 1, 20, '::1', '2017-06-22 18:10:29'),
(67, 1, 20, '::1', '2017-06-22 18:25:43'),
(68, 1, 20, '::1', '2017-06-22 18:40:36'),
(69, 40, 35, '::1', '2017-07-04 05:47:15'),
(70, 40, 36, '::1', '2017-07-04 05:55:31'),
(71, 0, 36, '::1', '2017-07-04 05:57:40'),
(72, 1, 21, '::1', '2017-07-04 06:15:33'),
(73, 1, 37, '::1', '2017-07-04 06:48:33'),
(74, 1, 37, '::1', '2017-07-04 06:48:43'),
(75, 40, 38, '::1', '2017-07-04 06:49:44'),
(76, 1, 37, '::1', '2017-07-10 04:23:24'),
(77, 1, 23, '::1', '2017-07-10 04:23:36'),
(78, 1, 39, '::1', '2017-07-10 04:30:27'),
(80, 1, 41, '::1', '2017-07-10 04:32:51'),
(81, 1, 42, '::1', '2017-07-10 04:33:17'),
(82, 1, 43, '::1', '2017-07-10 04:41:38'),
(83, 1, 0, '::1', '2017-07-10 04:41:38'),
(84, 1, 0, '::1', '2017-07-10 04:42:35'),
(85, 1, 0, '::1', '2017-07-10 04:43:06'),
(86, 1, 0, '::1', '2017-07-10 04:44:18'),
(87, 1, 47, '::1', '2017-07-10 04:45:49'),
(88, 1, 47, '::1', '2017-07-10 04:46:11'),
(89, 1, 48, '::1', '2017-07-10 04:46:28'),
(90, 1, 48, '::1', '2017-07-10 04:46:40'),
(91, 1, 49, '::1', '2017-07-10 04:49:13'),
(92, 1, 49, '::1', '2017-07-10 06:17:54'),
(93, 1, 49, '::1', '2017-07-10 06:19:24'),
(94, 1, 48, '::1', '2017-07-10 06:19:28'),
(95, 1, 48, '::1', '2017-07-10 06:22:00'),
(96, 1, 24, '::1', '2017-07-10 06:22:55'),
(97, 1, 48, '::1', '2017-07-10 06:24:08'),
(98, 1, 49, '::1', '2017-07-10 06:40:59'),
(99, 1, 48, '::1', '2017-07-10 06:44:16'),
(100, 1, 49, '::1', '2017-07-10 06:44:54'),
(101, 1, 48, '::1', '2017-07-10 08:23:33'),
(102, 1, 48, '::1', '2017-07-10 08:24:35'),
(103, 1, 48, '::1', '2017-07-10 08:32:26'),
(104, 1, 24, '::1', '2017-07-10 08:34:05'),
(105, 1, 36, '::1', '2017-07-10 08:40:12'),
(106, 1, 36, '::1', '2017-07-10 08:40:54'),
(107, 1, 24, '::1', '2017-07-23 14:21:32'),
(108, 1, 49, '::1', '2017-07-23 14:21:46'),
(109, 1, 49, '::1', '2017-07-24 10:17:29'),
(110, 1, 49, '::1', '2017-07-24 10:17:45'),
(111, 1, 49, '::1', '2017-07-24 10:18:08'),
(112, 1, 49, '::1', '2017-07-24 10:41:14'),
(113, 1, 23, '::1', '2017-07-27 14:46:57'),
(114, 1, 23, '::1', '2017-07-27 14:47:12'),
(115, 1, 47, '::1', '2017-07-27 14:47:21'),
(116, 1, 24, '::1', '2017-07-27 14:47:24'),
(117, 1, 49, '::1', '2017-07-27 14:47:28'),
(118, 1, 48, '::1', '2017-07-27 14:47:32'),
(119, 1, 50, '::1', '2017-07-27 14:48:25'),
(120, 1, 50, '::1', '2017-07-27 14:48:52'),
(121, 1, 49, '::1', '2017-07-29 18:11:49'),
(122, 1, 50, '::1', '2017-07-29 18:19:51'),
(123, 1, 50, '::1', '2017-07-29 18:20:44'),
(124, 1, 48, '::1', '2017-07-30 04:48:01'),
(125, 1, 24, '::1', '2017-07-30 04:55:46'),
(126, 1, 49, '::1', '2017-07-30 06:26:48'),
(127, 1, 49, '::1', '2017-07-30 06:27:35'),
(128, 1, 49, '::1', '2017-07-30 06:28:56'),
(129, 1, 49, '::1', '2017-07-30 06:30:02'),
(130, 1, 49, '::1', '2017-07-30 06:30:37'),
(131, 1, 47, '::1', '2017-07-30 06:30:56'),
(132, 1, 48, '::1', '2017-07-30 06:31:19'),
(133, 1, 47, '::1', '2017-07-30 06:31:23'),
(134, 1, 48, '::1', '2017-07-30 06:31:25'),
(135, 1, 48, '::1', '2017-07-30 06:34:28'),
(136, 1, 48, '::1', '2017-07-30 06:34:49'),
(137, 1, 48, '::1', '2017-07-30 07:05:36'),
(138, 1, 50, '::1', '2017-07-30 07:05:49'),
(139, 1, 50, '::1', '2017-07-30 07:07:21'),
(140, 1, 50, '::1', '2017-07-30 07:07:57'),
(141, 1, 50, '::1', '2017-07-30 07:08:23'),
(142, 1, 50, '::1', '2017-07-30 07:08:42'),
(143, 1, 50, '::1', '2017-07-30 07:08:55'),
(144, 1, 50, '::1', '2017-07-30 07:09:09'),
(145, 1, 50, '::1', '2017-07-30 07:09:18'),
(146, 1, 50, '::1', '2017-07-30 07:12:28'),
(147, 1, 50, '::1', '2017-07-30 07:12:34'),
(148, 1, 50, '::1', '2017-07-30 07:12:43'),
(149, 1, 50, '::1', '2017-07-30 07:12:54'),
(150, 1, 50, '::1', '2017-07-30 07:13:05'),
(151, 1, 50, '::1', '2017-07-30 07:13:13'),
(152, 1, 50, '::1', '2017-07-30 07:13:24'),
(153, 1, 50, '::1', '2017-07-30 07:21:59'),
(154, 0, 50, '::1', '2017-07-30 07:22:03'),
(155, 1, 49, '::1', '2017-08-07 11:10:00'),
(156, 1, 50, '::1', '2017-08-08 09:36:44'),
(157, 1, 23, '::1', '2017-08-08 14:40:29'),
(158, 1, 23, '::1', '2017-08-08 14:40:29'),
(159, 1, 49, '::1', '2017-08-14 12:28:23'),
(160, 1, 48, '::1', '2017-08-14 13:40:01'),
(161, 0, 50, '::1', '2017-08-15 07:22:11'),
(162, 0, 50, '::1', '2017-08-15 07:22:19'),
(163, 1, 49, '::1', '2017-08-15 08:12:39'),
(164, 1, 49, '::1', '2017-08-15 08:12:50'),
(165, 1, 49, '::1', '2017-08-15 08:13:32'),
(166, 1, 23, '::1', '2017-08-19 16:32:05'),
(167, 1, 23, '::1', '2017-08-19 16:32:21'),
(168, 1, 23, '::1', '2017-08-19 16:33:41'),
(169, 1, 23, '::1', '2017-08-19 16:34:13'),
(170, 1, 23, '::1', '2017-08-19 16:38:13'),
(171, 1, 23, '::1', '2017-08-19 16:38:19'),
(172, 1, 23, '::1', '2017-08-19 16:38:28'),
(173, 1, 23, '::1', '2017-08-19 16:46:47'),
(174, 1, 49, '::1', '2017-08-19 17:03:30'),
(175, 0, 49, '::1', '2017-08-20 04:13:58'),
(176, 0, 49, '::1', '2017-08-20 04:14:18'),
(177, 10, 40, '::1', '2017-08-21 02:56:34'),
(178, 10, 40, '::1', '2017-08-21 02:58:16'),
(179, 10, 40, '::1', '2017-08-21 02:58:40'),
(180, 10, 40, '::1', '2017-08-21 02:58:53'),
(181, 10, 40, '::1', '2017-08-21 02:59:07'),
(182, 10, 40, '::1', '2017-08-21 02:59:55'),
(183, 10, 41, '::1', '2017-08-21 03:00:02'),
(184, 10, 42, '::1', '2017-08-21 03:00:06'),
(185, 10, 48, '::1', '2017-08-21 03:00:12'),
(186, 10, 51, '::1', '2017-08-21 03:14:53'),
(187, 10, 51, '::1', '2017-08-21 03:15:06'),
(188, 1, 51, '::1', '2017-08-21 03:17:09'),
(189, 1, 51, '::1', '2017-08-21 03:20:19'),
(190, 1, 51, '::1', '2017-08-21 03:21:25'),
(191, 1, 51, '::1', '2017-08-21 03:21:58'),
(192, 1, 51, '::1', '2017-08-21 03:22:23'),
(193, 1, 51, '::1', '2017-08-21 03:29:17'),
(194, 1, 51, '::1', '2017-08-21 03:32:02'),
(195, 1, 51, '::1', '2017-08-21 03:32:43'),
(196, 1, 51, '::1', '2017-08-21 03:33:36'),
(197, 1, 51, '::1', '2017-08-21 03:34:18'),
(198, 1, 51, '::1', '2017-08-21 03:38:59'),
(199, 1, 51, '::1', '2017-08-21 03:40:16'),
(200, 1, 51, '::1', '2017-08-21 03:41:47'),
(201, 1, 51, '::1', '2017-08-21 03:42:13'),
(202, 1, 51, '::1', '2017-08-21 03:43:25'),
(203, 1, 51, '::1', '2017-08-21 03:44:08'),
(204, 1, 51, '::1', '2017-08-21 03:45:40'),
(205, 1, 51, '::1', '2017-08-21 03:46:32'),
(206, 1, 51, '::1', '2017-08-21 03:46:53'),
(207, 0, 49, '::1', '2017-08-22 03:40:35'),
(208, 0, 51, '::1', '2017-08-22 03:41:08'),
(209, 0, 51, '::1', '2017-08-22 03:41:57'),
(210, 0, 51, '::1', '2017-08-22 03:42:47'),
(211, 0, 51, '::1', '2017-08-22 03:43:39'),
(212, 0, 51, '::1', '2017-08-22 03:44:20'),
(213, 0, 51, '::1', '2017-08-22 03:44:53'),
(214, 1, 52, '::1', '2017-08-22 04:03:55'),
(215, 1, 53, '::1', '2017-08-22 04:04:02'),
(216, 1, 54, '::1', '2017-08-22 04:04:06'),
(217, 1, 55, '::1', '2017-08-22 04:05:49'),
(218, 1, 55, '::1', '2017-08-22 04:05:52'),
(219, 1, 55, '::1', '2017-08-22 04:05:56'),
(220, 1, 55, '::1', '2017-08-22 04:06:00'),
(221, 1, 55, '::1', '2017-08-22 04:06:04'),
(222, 1, 55, '::1', '2017-08-22 04:07:04'),
(223, 1, 55, '::1', '2017-08-22 04:16:27'),
(224, 1, 56, '::1', '2017-08-22 04:18:17'),
(225, 1, 56, '::1', '2017-08-22 04:18:25'),
(226, 1, 56, '::1', '2017-08-22 04:18:28'),
(227, 1, 56, '::1', '2017-08-22 04:18:33'),
(228, 1, 56, '::1', '2017-08-22 04:18:37'),
(229, 1, 56, '::1', '2017-08-22 04:18:57'),
(230, 1, 57, '::1', '2017-08-22 04:21:32'),
(231, 1, 57, '::1', '2017-08-22 04:21:36'),
(232, 1, 57, '::1', '2017-08-22 04:21:42'),
(233, 1, 57, '::1', '2017-08-22 04:21:46'),
(234, 1, 57, '::1', '2017-08-22 04:21:49'),
(235, 1, 49, '::1', '2017-08-22 08:24:59'),
(236, 0, 49, '::1', '2017-08-22 08:25:58'),
(237, 0, 49, '::1', '2017-08-22 08:26:30'),
(238, 0, 49, '::1', '2017-08-22 08:27:51'),
(239, 0, 49, '::1', '2017-08-22 08:29:51'),
(240, 0, 49, '::1', '2017-08-22 08:30:21'),
(241, 0, 49, '::1', '2017-08-22 08:37:28'),
(242, 0, 49, '::1', '2017-08-22 08:38:19'),
(243, 0, 49, '::1', '2017-08-22 08:38:54'),
(244, 0, 49, '::1', '2017-08-22 08:40:13'),
(245, 0, 48, '::1', '2017-08-22 08:40:38'),
(246, 0, 48, '::1', '2017-08-22 08:42:24'),
(247, 0, 48, '::1', '2017-08-22 08:42:45'),
(248, 0, 48, '::1', '2017-08-22 08:42:46'),
(249, 0, 48, '::1', '2017-08-22 08:44:27'),
(250, 0, 48, '::1', '2017-08-22 08:44:29'),
(251, 0, 48, '::1', '2017-08-22 08:45:04'),
(252, 0, 48, '::1', '2017-08-22 08:46:36'),
(253, 0, 48, '::1', '2017-08-22 08:46:57'),
(254, 0, 48, '::1', '2017-08-22 08:47:38'),
(255, 0, 48, '::1', '2017-08-22 08:47:51'),
(256, 0, 48, '::1', '2017-08-22 08:48:06'),
(257, 0, 48, '::1', '2017-08-22 08:48:09'),
(258, 0, 48, '::1', '2017-08-22 08:48:50'),
(259, 0, 48, '::1', '2017-08-22 08:49:16'),
(260, 0, 49, '::1', '2017-08-22 08:49:40'),
(261, 0, 49, '::1', '2017-08-22 08:50:14'),
(262, 0, 49, '::1', '2017-08-22 08:54:07'),
(263, 0, 49, '::1', '2017-08-22 08:55:10'),
(264, 0, 49, '::1', '2017-08-22 08:56:19'),
(265, 0, 49, '::1', '2017-08-22 08:56:40'),
(266, 0, 49, '::1', '2017-08-22 08:56:51'),
(267, 0, 49, '::1', '2017-08-22 08:57:18'),
(268, 0, 49, '::1', '2017-08-22 10:06:37'),
(269, 0, 49, '::1', '2017-08-22 10:07:14'),
(270, 0, 48, '::1', '2017-08-22 10:44:57'),
(271, 0, 48, '::1', '2017-08-22 10:45:26'),
(272, 0, 48, '::1', '2017-08-22 10:46:42'),
(273, 10, 58, '::1', '2017-08-22 14:57:04'),
(274, 10, 58, '::1', '2017-08-22 14:57:32'),
(275, 10, 59, '::1', '2017-08-22 14:59:04'),
(276, 10, 59, '::1', '2017-08-22 14:59:11'),
(277, 10, 60, '::1', '2017-08-22 15:04:18'),
(278, 10, 61, '::1', '2017-08-22 15:06:25'),
(279, 10, 61, '::1', '2017-08-22 15:09:35'),
(280, 10, 62, '::1', '2017-08-22 15:11:24'),
(281, 10, 63, '::1', '2017-08-22 15:14:35'),
(282, 10, 64, '::1', '2017-08-22 15:16:35'),
(283, 10, 65, '::1', '2017-08-22 15:19:39'),
(284, 10, 65, '::1', '2017-08-22 15:20:00'),
(285, 1, 65, '::1', '2017-08-22 15:22:27'),
(286, 1, 65, '::1', '2017-08-22 15:27:20'),
(287, 1, 65, '::1', '2017-08-22 15:27:38'),
(288, 1, 65, '::1', '2017-08-22 15:27:49'),
(289, 10, 63, '::1', '2017-08-22 15:28:33'),
(290, 10, 63, '::1', '2017-08-22 15:28:45'),
(291, 10, 48, '::1', '2017-08-22 16:08:39'),
(292, 10, 61, '::1', '2017-08-22 16:08:46'),
(293, 10, 48, '::1', '2017-08-22 16:11:24'),
(294, 1, 61, '::1', '2017-08-22 16:15:28'),
(295, 0, 49, '::1', '2017-08-22 16:15:37'),
(296, 0, 49, '::1', '2017-08-22 16:16:06'),
(297, 0, 49, '::1', '2017-08-22 16:24:01'),
(298, 0, 49, '::1', '2017-08-23 02:48:41'),
(299, 0, 49, '::1', '2017-08-23 03:01:51'),
(300, 0, 65, '::1', '2017-08-23 03:01:57'),
(301, 0, 65, '::1', '2017-08-23 03:02:09'),
(302, 0, 65, '::1', '2017-08-23 03:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE IF NOT EXISTS `tbl_report` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `EmailAddress` varchar(200) NOT NULL,
  `Telephone` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `AdsID` int(11) NOT NULL,
  `SellerID` int(11) NOT NULL,
  `SentOn` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_report`
--

INSERT INTO `tbl_report` (`ID`, `Name`, `EmailAddress`, `Telephone`, `Message`, `AdsID`, `SellerID`, `SentOn`, `Status`) VALUES
(1, 'Testing Name', 'test@ruhaizat.my', '0127874512', 'Testing a report!', 49, 28, '2017-08-22 16:16:04', 0),
(2, 'te', 'test@ruhaizat.my', 'test', 'test', 65, 10, '2017-08-23 03:02:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specificationmaster`
--

CREATE TABLE IF NOT EXISTS `tbl_specificationmaster` (
  `ID` int(11) NOT NULL,
  `car_brand` varchar(255) DEFAULT NULL,
  `gs_model` varchar(255) DEFAULT NULL,
  `gs_manu_year` varchar(255) DEFAULT NULL,
  `tm_transmission` varchar(255) DEFAULT NULL,
  `en_capacity` varchar(255) DEFAULT NULL,
  `gs_variant` varchar(255) DEFAULT NULL,
  `body_style` varchar(255) DEFAULT NULL,
  `tm_final_drive_ratio` varchar(255) DEFAULT NULL,
  `tm_gears` varchar(255) DEFAULT NULL,
  `gn_doors` varchar(255) DEFAULT NULL,
  `gn_assembled` varchar(255) DEFAULT NULL,
  `gn_seat_capacity` varchar(255) DEFAULT NULL,
  `en_cc` varchar(255) DEFAULT NULL,
  `en_stroke` varchar(255) DEFAULT NULL,
  `en_peak_power` varchar(255) DEFAULT NULL,
  `en_engine_type` varchar(255) DEFAULT NULL,
  `en_aspiration` varchar(255) DEFAULT NULL,
  `en_bore` varchar(255) DEFAULT NULL,
  `en_compression_ratio` varchar(255) DEFAULT NULL,
  `en_peak_torque` varchar(255) DEFAULT NULL,
  `en_direct_injection` varchar(255) DEFAULT NULL,
  `en_fuel_type` varchar(255) DEFAULT NULL,
  `dm_length` varchar(255) DEFAULT NULL,
  `dm_height` varchar(255) DEFAULT NULL,
  `dm_width` varchar(255) DEFAULT NULL,
  `dm_kerb_weight` varchar(255) DEFAULT NULL,
  `dm_front_thread` varchar(255) DEFAULT NULL,
  `dm_rear_thread` varchar(255) DEFAULT NULL,
  `dm_wheel_base` varchar(255) DEFAULT NULL,
  `dm_fuel_tank` varchar(255) DEFAULT NULL,
  `br_front` varchar(255) DEFAULT NULL,
  `br_rear` varchar(255) DEFAULT NULL,
  `sus_front` varchar(255) DEFAULT NULL,
  `sus_rear` varchar(255) DEFAULT NULL,
  `tw_front` varchar(255) DEFAULT NULL,
  `tw_rear` varchar(255) DEFAULT NULL,
  `tw_front_rim` varchar(255) DEFAULT NULL,
  `tw_rear_rim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=443 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_specificationmaster`
--

INSERT INTO `tbl_specificationmaster` (`ID`, `car_brand`, `gs_model`, `gs_manu_year`, `tm_transmission`, `en_capacity`, `gs_variant`, `body_style`, `tm_final_drive_ratio`, `tm_gears`, `gn_doors`, `gn_assembled`, `gn_seat_capacity`, `en_cc`, `en_stroke`, `en_peak_power`, `en_engine_type`, `en_aspiration`, `en_bore`, `en_compression_ratio`, `en_peak_torque`, `en_direct_injection`, `en_fuel_type`, `dm_length`, `dm_height`, `dm_width`, `dm_kerb_weight`, `dm_front_thread`, `dm_rear_thread`, `dm_wheel_base`, `dm_fuel_tank`, `br_front`, `br_rear`, `sus_front`, `sus_rear`, `tw_front`, `tw_rear`, `tw_front_rim`, `tw_rear_rim`) VALUES
(1, 'Hyundai', 'Accent', '1995', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Hyundai', 'Accent', '1995', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Hyundai', 'Accent', '1996', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Hyundai', 'Accent', '1996', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Hyundai', 'Accent', '1997', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Hyundai', 'Accent', '1997', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Hyundai', 'Accent', '1998', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'Hyundai', 'Accent', '1998', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Hyundai', 'Accent', '1999', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Hyundai', 'Accent', '1999', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'Hyundai', 'Accent', '2000', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'Hyundai', 'Accent', '2003', 'Automatic', '1.5', 'L', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Hyundai', 'Accent', '2003', 'Manual', '1.5', 'L', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Hyundai', 'Accent', '2004', 'Automatic', '1.5', 'L', 'Sedan', '4.443', '4', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(15, 'Hyundai', 'Accent', '2004', 'Manual', '1.5', 'L', 'Sedan', '4.443', '5', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(16, 'Hyundai', 'Accent', '2005', 'Automatic', '1.5', 'L', 'Sedan', '4.443', '4', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(17, 'Hyundai', 'Accent', '2005', 'Automatic', '1.5', 'RX-S', 'Sedan', '3.656', '4', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(18, 'Hyundai', 'Accent', '2005', 'Manual', '1.5', 'L', 'Sedan', '4.443', '5', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(19, 'Hyundai', 'Accent', '2005', 'Manual', '1.5', 'RX-S', 'Sedan', '3.842', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(20, 'Hyundai', 'Accent', '2006', 'Automatic', '1.5', 'L', 'Sedan', '4.443', '4', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1670', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(21, 'Hyundai', 'Accent', '2006', 'Automatic', '1.5', 'RX-S', 'Sedan', '3.656', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(22, 'Hyundai', 'Accent', '2006', 'Manual', '1.5', 'L', 'Sedan', '', '5', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1670', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(23, 'Hyundai', 'Accent', '2006', 'Manual', '1.5', 'RX-S', 'Sedan', '3.842', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1670', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(24, 'Hyundai', 'Accent', '2007', 'Automatic', '1.5', 'L', 'Sedan', '4.443', '4', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(25, 'Hyundai', 'Accent', '2007', 'Automatic', '1.5', 'RX-S', 'Sedan', '3.656', '4', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(26, 'Hyundai', 'Accent', '2007', 'Automatic', '1.6', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Leaded', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '195', '195', '', ''),
(27, 'Hyundai', 'Accent', '2007', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1133', '1485', '1475', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(28, 'Hyundai', 'Accent', '2007', 'Manual', '1.5', 'L', 'Sedan', '', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(29, 'Hyundai', 'Accent', '2007', 'Manual', '1.5', 'RX-S', 'Sedan', '3.842', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(30, 'Hyundai', 'Accent', '2008', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1133', '1485', '1475', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(31, 'Hyundai', 'Accent', '2008', 'Automatic', '1.6', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '195', '195', '', ''),
(32, 'Hyundai', 'Accent', '2009', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1133', '1485', '1475', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(33, 'Hyundai', 'Accent', '2009', 'Automatic', '1.6', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Leaded', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', '', '195', '195', '', ''),
(34, 'Hyundai', 'Accent', '2010', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '125', 'Multi-Point Injected', 'Petrol - Leaded', '4280', '1470', '1695', '1133', '1485', '1475', '2500', '45', '', '', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(35, 'Hyundai', 'Accent', '2010', 'Automatic', '1.6', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '195', '195', '', ''),
(36, 'Hyundai', 'Accent', '2011', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '125', 'Multi-Point Injected', 'Petrol - Leaded', '4280', '1470', '1695', '1133', '1485', '1475', '2500', '45', '', '', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(37, 'Hyundai', 'Accent', '2011', 'Automatic', '1.6', 'Premium', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '195', '195', '', ''),
(38, 'Hyundai', 'Atos', '1999', 'Manual', '1', 'GL', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '810', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(39, 'Hyundai', 'Atos', '1999', 'Automatic', '1', 'GL', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '810', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(40, 'Hyundai', 'Atos', '1999', 'Automatic', '1', 'GLS', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'Hyundai', 'Atos', '2000', 'Manual', '1', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'Hyundai', 'Atos', '2000', 'Automatic', '1', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'Hyundai', 'Atos', '2000', 'Automatic', '1', 'GLS', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'Hyundai', 'Atos', '2001', 'Manual', '1', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'Hyundai', 'Atos', '2001', 'Automatic', '1', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'Hyundai', 'Atos', '2001', 'Automatic', '1', 'GLS', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'Hyundai', 'Atos', '2002', 'Manual', '1', 'GL', 'Hatchback', '4.529', '5', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '797', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(48, 'Hyundai', 'Atos', '2002', 'Automatic', '1', 'GL', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '810', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(49, 'Hyundai', 'Atos', '2002', 'Automatic', '1', 'GLS', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '817', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(50, 'Hyundai', 'Atos', '2003', 'Manual', '1', 'GL', 'Hatchback', '4.529', '5', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '797', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(51, 'Hyundai', 'Atos', '2003', 'Automatic', '1', 'GL', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '810', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(52, 'Hyundai', 'Atos', '2003', 'Automatic', '1', 'GLS', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '817', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(53, 'Hyundai', 'Atos', '2004', 'Manual', '1', 'GL', 'Hatchback', '4.222', '5', '5', 'Locally Built', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '', '1615', '1495', '845', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(54, 'Hyundai', 'Atos', '2004', 'Automatic', '1', 'GL', 'Hatchback', '4.017', '4', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '858', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(55, 'Hyundai', 'Atos', '2004', 'Automatic', '1', 'GLS', 'Hatchback', '4.017', '4', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '858', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(56, 'Hyundai', 'Atos', '2005', 'Manual', '1', 'GL', 'Hatchback', '4.222', '5', '5', 'Locally Built', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '', '1615', '1495', '845', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(57, 'Hyundai', 'Atos', '2005', 'Automatic', '1', 'GL', 'Hatchback', '4.017', '4', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '858', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(58, 'Hyundai', 'Atos', '2005', 'Automatic', '1', 'GLS', 'Hatchback', '4.017', '4', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '858', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(59, 'Hyundai', 'Atos', '2008', 'Automatic', '1.1', 'GLS', 'Hatchback', '', '', '', '', '', '1100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 'Hyundai', 'Avante', '2008', 'Automatic', '2', '', 'Sedan', '', '', '4', '', '', '1998', '', '', '', '', '', '', '', '', 'Petrol - Unleaded (ULP)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 'Hyundai', 'Avante', '2009', 'Automatic', '2', 'X20', 'Sedan', '', '4', '4', 'Locally Built', '4', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4505', '1490', '1775', '', '1529', '1527', '2650', '53', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '205/55 R16', '205/55 R16', '16', '16'),
(62, 'Hyundai', 'Avante', '2010', 'Automatic', '2', 'X20', 'Sedan', '', '4', '4', 'Locally Built', '4', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4505', '1490', '1775', '', '1529', '1527', '2650', '53', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '205/55 R16', '205/55 R16', '16', '16'),
(63, 'Hyundai', 'Azera', '2006', 'Automatic', '3.3', 'GLS', 'Sedan', '', '5', '4', 'Official Import', '5', '3342', '83.8', '235', 'Piston', 'Aspirated', '92', '', '304', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4895', '1490', '1865', '', '1580', '1565', '2780', '75', 'Ventilated Discs', 'Discs', 'Double Wishbone', 'Multiple links', '225/55 R16', '225/55 R16', '16', '16'),
(64, 'Hyundai', 'Azera', '2007', 'Automatic', '3.3', 'GLS', 'Sedan', '', '5', '4', 'Official Import', '5', '3342', '83.8', '235', 'Piston', 'Aspirated', '92', '', '304', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4895', '1490', '1865', '', '1580', '1565', '2780', '75', 'Ventilated Discs', 'Discs', 'Double Wishbone', 'Multiple links', '225/55 R16', '225/55 R16', '16', '16'),
(65, 'Hyundai', 'Coupe', '1996', 'Manual', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 'Hyundai', 'Coupe', '1996', 'Automatic', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 'Hyundai', 'Coupe', '1997', 'Manual', '1.8', '', 'Coupe', '', '5', '2', 'Official Import', '4', '1795', '', '128', 'Piston', 'Aspirated', '', '', '161', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4338', '1313', '1730', '', '', '', '2475', '', 'Ventilated Discs', 'Discs', '', '', '', '', '', ''),
(68, 'Hyundai', 'Coupe', '1997', 'Automatic', '1.8', '', 'Coupe', '', '4', '2', 'Official Import', '4', '1795', '', '128', 'Piston', 'Aspirated', '', '', '161', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4338', '1313', '1730', '', '', '', '2475', '', 'Ventilated Discs', 'Discs', '', '', '', '', '', ''),
(69, 'Hyundai', 'Coupe', '1998', 'Manual', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, 'Hyundai', 'Coupe', '1998', 'Automatic', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 'Hyundai', 'Coupe', '1999', 'Automatic', '1.6', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 'Hyundai', 'Coupe', '1999', 'Automatic', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 'Hyundai', 'Coupe', '1999', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 'Hyundai', 'Coupe', '2000', 'Automatic', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 'Hyundai', 'Coupe', '2000', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 'Hyundai', 'Coupe', '2001', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 'Hyundai', 'Coupe', '2002', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 'Hyundai', 'Coupe', '2003', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 'Hyundai', 'Coupe', '2004', 'Manual', '2.7', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'Hyundai', 'Coupe', '2004', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 'Hyundai', 'Coupe', '2005', 'Manual', '2.7', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 'Hyundai', 'Coupe', '2005', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 'Hyundai', 'Coupe', '2006', 'Manual', '2.7', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 'Hyundai', 'Coupe', '2006', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 'Hyundai', 'Coupe', '2007', 'Automatic', '2', 'GLS', 'Coupe', '', '4', '2', 'Official Import', '', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4395', '1330', '1760', '', '1490', '1490', '2530', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Coil Spring', '205/55 R16', '205/55 R16', '16', '16'),
(86, 'Hyundai', 'Coupe', '2008', 'Automatic', '2', 'GLS', 'Coupe', '', '4', '2', 'Official Import', '', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4395', '1330', '1760', '', '1490', '1490', '2530', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Coil Spring', '205/55 R16', '205/55 R16', '16', '16'),
(87, 'Hyundai', 'Coupe', '2009', 'Automatic', '2', 'GLS', 'Coupe', '', '4', '2', 'Official Import', '', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4395', '1330', '1760', '', '1490', '1490', '2530', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Coil Spring', '205/55 R16', '205/55 R16', '16', '16'),
(88, 'Hyundai', 'Elantra', '1992', 'Manual', '1.5', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 'Hyundai', 'Elantra', '1992', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 'Hyundai', 'Elantra', '1992', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 'Hyundai', 'Elantra', '1993', 'Manual', '1.5', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 'Hyundai', 'Elantra', '1993', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 'Hyundai', 'Elantra', '1993', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 'Hyundai', 'Elantra', '1994', 'Manual', '1.5', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 'Hyundai', 'Elantra', '1994', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, 'Hyundai', 'Elantra', '1994', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, 'Hyundai', 'Elantra', '1995', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, 'Hyundai', 'Elantra', '1995', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, 'Hyundai', 'Elantra', '1996', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, 'Hyundai', 'Elantra', '1996', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, 'Hyundai', 'Elantra', '1997', 'Manual', '1.6', 'GLS', 'Sedan', '', '5', '4', 'Official Import', '5', '1593', '', '', 'Piston', 'Aspirated', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ventilated Discs', 'Discs', '', '', '', '', '', ''),
(102, 'Hyundai', 'Elantra', '1997', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, 'Hyundai', 'Elantra', '2001', 'Automatic', '1.8', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1795', '', '132', 'Piston', 'Aspirated', '', '', '165', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4495', '1425', '1720', '', '', '', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '', ''),
(104, 'Hyundai', 'Elantra', '2002', 'Automatic', '1.8', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1795', '', '132', 'Piston', 'Aspirated', '', '', '165', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4495', '1425', '1720', '', '', '', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '', ''),
(105, 'Hyundai', 'Elantra', '2003', 'Automatic', '1.8', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1795', '', '132', 'Piston', 'Aspirated', '', '', '165', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4495', '1425', '1720', '', '', '', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '', ''),
(106, 'Hyundai', 'Elantra', '2004', 'Automatic', '1.6', '', 'Sedan', '4.041', '4', '4', 'Official Import', '5', '1599', '87', '105', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '915', '1000', '2610', '45', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(107, 'Hyundai', 'Elantra', '2004', 'Automatic', '1.8', '', 'Sedan', '3.77', '4', '4', 'Official Import', '5', '1795', '85', '122', 'Piston', 'Aspirated', '82', '10.1', '161', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '915', '1000', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(108, 'Hyundai', 'Elantra', '2005', 'Automatic', '1.6', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(109, 'Hyundai', 'Elantra', '2005', 'Automatic', '1.6', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(110, 'Hyundai', 'Elantra', '2005', 'Automatic', '1.8', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(111, 'Hyundai', 'Elantra', '2005', 'Automatic', '1.8', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(112, 'Hyundai', 'Elantra', '2006', 'Automatic', '1.6', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(113, 'Hyundai', 'Elantra', '2006', 'Automatic', '1.6', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(114, 'Hyundai', 'Elantra', '2006', 'Automatic', '1.8', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(115, 'Hyundai', 'Elantra', '2006', 'Automatic', '1.8', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(116, 'Hyundai', 'Elantra', '2007', 'Automatic', '1.8', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(117, 'Hyundai', 'Elantra', '2007', 'Automatic', '1.8', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(118, 'Hyundai', 'Elantra', '2008', 'Automatic', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(119, 'Hyundai', 'Elantra', '2008', 'Automatic', '1.8', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(120, 'Hyundai', 'Elantra', '2008', 'Automatic', '2', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(121, 'Hyundai', 'Elantra', '2008', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(122, 'Hyundai', 'Elantra', '2009', 'Automatic', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123, 'Hyundai', 'Elantra', '2009', 'Automatic', '1.8', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(124, 'Hyundai', 'Elantra', '2009', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(125, 'Hyundai', 'Elantra', '2010', 'Automatic', '1.6', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(126, 'Hyundai', 'Elantra', '2011', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(127, 'Hyundai', 'Elantra', '2012', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(128, 'Hyundai', 'Elantra', '2012', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(129, 'Hyundai', 'Elantra', '2012', 'Manual', '1.6', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(130, 'Hyundai', 'Elantra', '2013', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(131, 'Hyundai', 'Elantra', '2013', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(132, 'Hyundai', 'Elantra', '2013', 'Manual', '1.6', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(133, 'Hyundai', 'Elantra', '2014', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(134, 'Hyundai', 'Elantra', '2014', 'Automatic', '1.6', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(135, 'Hyundai', 'Elantra', '2014', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(136, 'Hyundai', 'Elantra', '2014', 'Automatic', '1.8', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(137, 'Hyundai', 'Elantra', '2014', 'Manual', '1.6', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(138, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.6', 'EX', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(139, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.6', 'EX Plus', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(140, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.6', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(141, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.6', 'EX Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(142, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(143, 'Hyundai', 'Elantra', '2016', 'Automatic', '1.6', 'EX', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(144, 'Hyundai', 'Elantra', '2016', 'Automatic', '1.6', 'EX Plus', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(145, 'Hyundai', 'Elantra', '2016', 'Automatic', '1.6', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(146, 'Hyundai', 'Elantra', '2016', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(147, 'Hyundai', 'Elantra', '2017', 'Automatic', '1.6', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(148, 'Hyundai', 'Elantra', '2017', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(149, 'Hyundai', 'Elantra', '2017', 'Automatic', '2', 'Dynamic', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(150, 'Hyundai', 'Genesis', '2015', 'Automatic', '3.8', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(151, 'Hyundai', 'Genesis', '2016', 'Automatic', '3.8', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(152, 'Hyundai', 'Genesis', '2017', 'Automatic', '3.8', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(153, 'Hyundai', 'Getz', '2003', 'Automatic', '1.3', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(154, 'Hyundai', 'Getz', '2003', 'Automatic', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(155, 'Hyundai', 'Getz', '2004', 'Automatic', '1.3', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(156, 'Hyundai', 'Getz', '2004', 'Automatic', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(157, 'Hyundai', 'Getz', '2005', 'Automatic', '1.1', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(158, 'Hyundai', 'Getz', '2005', 'Automatic', '1.3', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(159, 'Hyundai', 'Getz', '2005', 'Automatic', '1.4', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(160, 'Hyundai', 'Getz', '2005', 'Automatic', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(161, 'Hyundai', 'Getz', '2005', 'Manual', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(162, 'Hyundai', 'Getz', '2006', 'Automatic', '1.3', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(163, 'Hyundai', 'Getz', '2006', 'Automatic', '1.4', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(164, 'Hyundai', 'Getz', '2006', 'Automatic', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(165, 'Hyundai', 'Getz', '2006', 'Manual', '1.4', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(166, 'Hyundai', 'Getz', '2007', 'Automatic', '1.4', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(167, 'Hyundai', 'Getz', '2007', 'Manual', '1.4', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(168, 'Hyundai', 'Getz', '2008', 'Automatic', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(169, 'Hyundai', 'Getz', '2008', 'Manual', '1.4', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(170, 'Hyundai', 'Getz', '2009', 'Automatic', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(171, 'Hyundai', 'Getz', '2009', 'Manual', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(172, 'Hyundai', 'Getz', '2010', 'Automatic', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(173, 'Hyundai', 'Getz', '2010', 'Manual', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(174, 'Hyundai', 'Grand Starex', '2008', 'Automatic', '2.5', 'VGT', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(175, 'Hyundai', 'Grand Starex', '2008', 'Manual', '2.5', '', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(176, 'Hyundai', 'Grand Starex', '2009', 'Automatic', '2.5', 'VGT', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(177, 'Hyundai', 'Grand Starex', '2009', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(178, 'Hyundai', 'Grand Starex', '2010', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(179, 'Hyundai', 'Grand Starex', '2011', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(180, 'Hyundai', 'Grand Starex', '2012', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(181, 'Hyundai', 'Grand Starex', '2013', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(182, 'Hyundai', 'Grand Starex', '2014', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(183, 'Hyundai', 'Grand Starex', '2015', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(184, 'Hyundai', 'Grand Starex', '2016', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(185, 'Hyundai', 'Grand Starex', '2017', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(186, 'Hyundai', 'Granduer XG250', '2003', 'Automatic', '2.5', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(187, 'Hyundai', 'Granduer XG250', '2004', 'Automatic', '2.5', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(188, 'Hyundai', 'i10', '2008', 'Automatic', '1.1', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(189, 'Hyundai', 'i10', '2009', 'Automatic', '1.1', 'Inspired', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(190, 'Hyundai', 'i10', '2009', 'Manual', '1.1', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(191, 'Hyundai', 'i10', '2010', 'Automatic', '1.1', 'Inspired', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(192, 'Hyundai', 'i10', '2010', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(193, 'Hyundai', 'i10', '2011', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194, 'Hyundai', 'i10', '2011', 'Automatic', '1.1', 'Inspired', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(195, 'Hyundai', 'i10', '2011', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(196, 'Hyundai', 'i10', '2012', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `tbl_specificationmaster` (`ID`, `car_brand`, `gs_model`, `gs_manu_year`, `tm_transmission`, `en_capacity`, `gs_variant`, `body_style`, `tm_final_drive_ratio`, `tm_gears`, `gn_doors`, `gn_assembled`, `gn_seat_capacity`, `en_cc`, `en_stroke`, `en_peak_power`, `en_engine_type`, `en_aspiration`, `en_bore`, `en_compression_ratio`, `en_peak_torque`, `en_direct_injection`, `en_fuel_type`, `dm_length`, `dm_height`, `dm_width`, `dm_kerb_weight`, `dm_front_thread`, `dm_rear_thread`, `dm_wheel_base`, `dm_fuel_tank`, `br_front`, `br_rear`, `sus_front`, `sus_rear`, `tw_front`, `tw_rear`, `tw_front_rim`, `tw_rear_rim`) VALUES
(197, 'Hyundai', 'i10', '2012', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(198, 'Hyundai', 'i10', '2013', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(199, 'Hyundai', 'i10', '2013', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(200, 'Hyundai', 'i10', '2014', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(201, 'Hyundai', 'i10', '2014', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(202, 'Hyundai', 'i10', '2015', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(203, 'Hyundai', 'i10', '2015', 'Automatic', '1.1', 'Hatchback', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(204, 'Hyundai', 'i10', '2015', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(205, 'Hyundai', 'i10', '2016', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(206, 'Hyundai', 'i10', '2016', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(207, 'Hyundai', 'i10 Kappa', '2012', 'Automatic', '1.2', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(208, 'Hyundai', 'i10 Kappa', '2015', 'Automatic', '1.3', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(209, 'Hyundai', 'i30', '2009', 'Automatic', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(210, 'Hyundai', 'i30', '2009', 'Automatic', '2', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(211, 'Hyundai', 'i30', '2009', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(212, 'Hyundai', 'i30', '2010', 'Automatic', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(213, 'Hyundai', 'i30', '2010', 'Automatic', '2', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(214, 'Hyundai', 'i30', '2010', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(215, 'Hyundai', 'i30', '2014', 'Automatic', '1.8', 'Sport', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(216, 'Hyundai', 'i30', '2014', 'Automatic', '1.8', 'Executive', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(217, 'Hyundai', 'i30', '2015', 'Automatic', '1.8', 'Sport', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(218, 'Hyundai', 'i30', '2015', 'Automatic', '1.8', 'Executive', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(219, 'Hyundai', 'i40', '2013', 'Automatic', '2', 'GDI', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(220, 'Hyundai', 'i40', '2014', 'Automatic', '2', 'GDI', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(221, 'Hyundai', 'i40', '2015', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(222, 'Hyundai', 'IONIQ', '2016', 'Automatic', '1.6', 'Hybrid', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(223, 'Hyundai', 'IONIQ', '2017', 'Automatic', '1.6', 'Hybrid', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(224, 'Hyundai', 'Matrix', '2000', 'Automatic', '1.6', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(225, 'Hyundai', 'Matrix', '2001', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(226, 'Hyundai', 'Matrix', '2002', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(227, 'Hyundai', 'Matrix', '2002', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(228, 'Hyundai', 'Matrix', '2003', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(229, 'Hyundai', 'Matrix', '2003', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(230, 'Hyundai', 'Matrix', '2003', 'Manual', '1.6', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(231, 'Hyundai', 'Matrix', '2004', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(232, 'Hyundai', 'Matrix', '2004', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(233, 'Hyundai', 'Matrix', '2004', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(234, 'Hyundai', 'Matrix', '2005', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(235, 'Hyundai', 'Matrix', '2005', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(236, 'Hyundai', 'Matrix', '2005', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(237, 'Hyundai', 'Matrix', '2006', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(238, 'Hyundai', 'Matrix', '2006', 'Automatic', '1.8', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(239, 'Hyundai', 'Matrix', '2006', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(240, 'Hyundai', 'Matrix', '2007', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(241, 'Hyundai', 'Matrix', '2007', 'Automatic', '1.8', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(242, 'Hyundai', 'Matrix', '2007', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(243, 'Hyundai', 'Matrix', '2008', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(244, 'Hyundai', 'Matrix', '2008', 'Automatic', '1.8', 'GLA', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(245, 'Hyundai', 'Matrix', '2008', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(246, 'Hyundai', 'Matrix', '2009', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(247, 'Hyundai', 'Matrix', '2009', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(248, 'Hyundai', 'Matrix', '2010', 'Automatic', '1.6', 'Hatchback', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(249, 'Hyundai', 'MD Elantra', '2015', 'Automatic', '1.8', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(250, 'Hyundai', 'Roadrunner', '2015', 'Manual', '4', 'Coaster', 'Bus', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(251, 'Hyundai', 'Santa FE', '2001', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(252, 'Hyundai', 'Santa FE', '2002', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(253, 'Hyundai', 'Santa FE', '2003', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(254, 'Hyundai', 'Santa FE', '2004', 'Automatic', '2.4', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(255, 'Hyundai', 'Santa FE', '2004', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(256, 'Hyundai', 'Santa FE', '2005', 'Automatic', '2.4', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(257, 'Hyundai', 'Santa FE', '2005', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(258, 'Hyundai', 'Santa FE', '2007', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(259, 'Hyundai', 'Santa FE', '2007', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(260, 'Hyundai', 'Santa FE', '2008', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(261, 'Hyundai', 'Santa FE', '2008', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(262, 'Hyundai', 'Santa FE', '2009', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(263, 'Hyundai', 'Santa FE', '2009', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(264, 'Hyundai', 'Santa FE', '2010', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(265, 'Hyundai', 'Santa FE', '2010', 'Automatic', '2.4', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(266, 'Hyundai', 'Santa FE', '2010', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(267, 'Hyundai', 'Santa FE', '2011', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(268, 'Hyundai', 'Santa FE', '2011', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(269, 'Hyundai', 'Santa FE', '2012', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(270, 'Hyundai', 'Santa FE', '2012', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(271, 'Hyundai', 'Santa FE', '2013', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(272, 'Hyundai', 'Santa FE', '2013', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(273, 'Hyundai', 'Santa FE', '2013', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(274, 'Hyundai', 'Santa FE', '2013', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(275, 'Hyundai', 'Santa FE', '2014', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(276, 'Hyundai', 'Santa FE', '2014', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(277, 'Hyundai', 'Santa FE', '2014', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(278, 'Hyundai', 'Santa FE', '2015', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(279, 'Hyundai', 'Santa FE', '2015', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(280, 'Hyundai', 'Santa FE', '2015', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(281, 'Hyundai', 'Santa FE', '2015', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(282, 'Hyundai', 'Santa FE', '2016', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(283, 'Hyundai', 'Santa FE', '2016', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(284, 'Hyundai', 'Santa FE', '2016', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(285, 'Hyundai', 'Santa FE', '2017', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(286, 'Hyundai', 'Santa FE', '2017', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(287, 'Hyundai', 'Santa FE', '2017', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(288, 'Hyundai', 'Scoupe', '1990', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(289, 'Hyundai', 'Scoupe', '1990', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(290, 'Hyundai', 'Scoupe', '1991', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(291, 'Hyundai', 'Scoupe', '1991', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(292, 'Hyundai', 'Scoupe', '1992', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(293, 'Hyundai', 'Scoupe', '1992', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(294, 'Hyundai', 'Scoupe', '1993', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(295, 'Hyundai', 'Scoupe', '1993', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(296, 'Hyundai', 'Scoupe', '1994', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(297, 'Hyundai', 'Scoupe', '1994', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(298, 'Hyundai', 'Scoupe', '1995', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(299, 'Hyundai', 'Scoupe', '1995', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(300, 'Hyundai', 'Sonata', '1991', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(301, 'Hyundai', 'Sonata', '1991', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(302, 'Hyundai', 'Sonata', '1992', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(303, 'Hyundai', 'Sonata', '1992', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(304, 'Hyundai', 'Sonata', '1993', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(305, 'Hyundai', 'Sonata', '1993', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(306, 'Hyundai', 'Sonata', '1994', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(307, 'Hyundai', 'Sonata', '1994', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(308, 'Hyundai', 'Sonata', '1995', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(309, 'Hyundai', 'Sonata', '1995', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(310, 'Hyundai', 'Sonata', '1996', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(311, 'Hyundai', 'Sonata', '1996', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(312, 'Hyundai', 'Sonata', '1997', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(313, 'Hyundai', 'Sonata', '1997', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(314, 'Hyundai', 'Sonata', '1998', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(315, 'Hyundai', 'Sonata', '1998', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(316, 'Hyundai', 'Sonata', '2000', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(317, 'Hyundai', 'Sonata', '2001', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(318, 'Hyundai', 'Sonata', '2002', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(319, 'Hyundai', 'Sonata', '2003', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(320, 'Hyundai', 'Sonata', '2003', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(321, 'Hyundai', 'Sonata', '2004', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(322, 'Hyundai', 'Sonata', '2004', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(323, 'Hyundai', 'Sonata', '2005', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(324, 'Hyundai', 'Sonata', '2005', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(325, 'Hyundai', 'Sonata', '2006', 'Automatic', '2', 'NF', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(326, 'Hyundai', 'Sonata', '2006', 'Automatic', '2.4', 'NF', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(327, 'Hyundai', 'Sonata', '2007', 'Automatic', '2', 'NF', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(328, 'Hyundai', 'Sonata', '2007', 'Automatic', '2.4', 'NF', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(329, 'Hyundai', 'Sonata', '2008', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(330, 'Hyundai', 'Sonata', '2008', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(331, 'Hyundai', 'Sonata', '2009', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(332, 'Hyundai', 'Sonata', '2009', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(333, 'Hyundai', 'Sonata', '2010', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(334, 'Hyundai', 'Sonata', '2010', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(335, 'Hyundai', 'Sonata', '2011', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(336, 'Hyundai', 'Sonata', '2011', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(337, 'Hyundai', 'Sonata', '2012', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(338, 'Hyundai', 'Sonata', '2012', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(339, 'Hyundai', 'Sonata', '2012', 'Automatic', '2', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(340, 'Hyundai', 'Sonata', '2012', 'Automatic', '2.4', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(341, 'Hyundai', 'Sonata', '2012', 'Automatic', '2.4', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(342, 'Hyundai', 'Sonata', '2013', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(343, 'Hyundai', 'Sonata', '2013', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(344, 'Hyundai', 'Sonata', '2013', 'Automatic', '2', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(345, 'Hyundai', 'Sonata', '2013', 'Automatic', '2.4', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(346, 'Hyundai', 'Sonata', '2013', 'Automatic', '2.4', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(347, 'Hyundai', 'Sonata', '2014', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(348, 'Hyundai', 'Sonata', '2014', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(349, 'Hyundai', 'Sonata', '2014', 'Automatic', '2', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(350, 'Hyundai', 'Sonata', '2014', 'Automatic', '2.4', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(351, 'Hyundai', 'Sonata', '2014', 'Automatic', '2.4', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(352, 'Hyundai', 'Sonata', '2015', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(353, 'Hyundai', 'Sonata', '2015', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(354, 'Hyundai', 'Sonata', '2016', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(355, 'Hyundai', 'Sonata', '2016', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(356, 'Hyundai', 'Sonata', '2017', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(357, 'Hyundai', 'Sonata', '2017', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(358, 'Hyundai', 'Starex', '2015', 'Automatic', '2.5', '', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(359, 'Hyundai', 'Starex', '2014', 'Automatic', '2.5', '', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(360, 'Hyundai', 'Terracan', '2002', 'Automatic', '3.5', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(361, 'Hyundai', 'Trajet', '1999', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(362, 'Hyundai', 'Trajet', '2000', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(363, 'Hyundai', 'Trajet', '2000', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(364, 'Hyundai', 'Trajet', '2000', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(365, 'Hyundai', 'Trajet', '2001', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(366, 'Hyundai', 'Trajet', '2001', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(367, 'Hyundai', 'Trajet', '2001', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(368, 'Hyundai', 'Trajet', '2002', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(369, 'Hyundai', 'Trajet', '2002', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(370, 'Hyundai', 'Trajet', '2002', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(371, 'Hyundai', 'Trajet', '2003', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(372, 'Hyundai', 'Trajet', '2003', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(373, 'Hyundai', 'Trajet', '2003', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(374, 'Hyundai', 'Trajet', '2004', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(375, 'Hyundai', 'Trajet', '2004', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(376, 'Hyundai', 'Trajet', '2005', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(377, 'Hyundai', 'Trajet', '2005', 'Automatic', '2', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(378, 'Hyundai', 'Trajet', '2006', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(379, 'Hyundai', 'Trajet', '2006', 'Automatic', '2', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(380, 'Hyundai', 'Trajet', '2006', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(381, 'Hyundai', 'Trajet', '2007', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(382, 'Hyundai', 'Trajet', '2007', 'Automatic', '2', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(383, 'Hyundai', 'Trajet', '2007', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(384, 'Hyundai', 'Trajet', '2008', 'Automatic', '2.7', '', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(385, 'Hyundai', 'Tranz', '2015', 'Manual', '4', '', 'Design Bus', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(386, 'Hyundai', 'Tucson', '2004', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(387, 'Hyundai', 'Tucson', '2005', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(388, 'Hyundai', 'Tucson', '2005', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(389, 'Hyundai', 'Tucson', '2006', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(390, 'Hyundai', 'Tucson', '2006', 'Automatic', '2.7', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(391, 'Hyundai', 'Tucson', '2007', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(392, 'Hyundai', 'Tucson', '2008', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(393, 'Hyundai', 'Tucson', '2009', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(394, 'Hyundai', 'Tucson', '2010', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(395, 'Hyundai', 'Tucson', '2010', 'Automatic', '2', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(396, 'Hyundai', 'Tucson', '2010', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(397, 'Hyundai', 'Tucson', '2011', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(398, 'Hyundai', 'Tucson', '2011', 'Automatic', '2', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(399, 'Hyundai', 'Tucson', '2011', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(400, 'Hyundai', 'Tucson', '2012', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(401, 'Hyundai', 'Tucson', '2012', 'Automatic', '2', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(402, 'Hyundai', 'Tucson', '2012', 'Automatic', '2', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(403, 'Hyundai', 'Tucson', '2012', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(404, 'Hyundai', 'Tucson', '2012', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(405, 'Hyundai', 'Tucson', '2013', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(406, 'Hyundai', 'Tucson', '2013', 'Automatic', '2', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(407, 'Hyundai', 'Tucson', '2013', 'Automatic', '2', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(408, 'Hyundai', 'Tucson', '2013', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(409, 'Hyundai', 'Tucson', '2013', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(410, 'Hyundai', 'Tucson', '2014', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(411, 'Hyundai', 'Tucson', '2014', 'Automatic', '2', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(412, 'Hyundai', 'Tucson', '2014', 'Automatic', '2', 'Sport', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(413, 'Hyundai', 'Tucson', '2014', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(414, 'Hyundai', 'Tucson', '2015', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(415, 'Hyundai', 'Tucson', '2015', 'Automatic', '2', 'Executive', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(416, 'Hyundai', 'Tucson', '2015', 'Automatic', '2', 'Sport', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(417, 'Hyundai', 'Tucson', '2016', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(418, 'Hyundai', 'Tucson', '2016', 'Automatic', '2', 'Executive', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(419, 'Hyundai', 'Tucson', '2017', 'Automatic', '1.6', 'Turbo', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(420, 'Hyundai', 'Tucson', '2017', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(421, 'Hyundai', 'Tucson', '2017', 'Automatic', '2', 'Executive', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(422, 'Hyundai', 'Veloster', '2012', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(423, 'Hyundai', 'Veloster', '2012', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(424, 'Hyundai', 'Veloster', '2013', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(425, 'Hyundai', 'Veloster', '2013', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(426, 'Hyundai', 'Veloster', '2014', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(427, 'Hyundai', 'Veloster', '2014', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(428, 'Hyundai', 'Veloster', '2015', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(429, 'Hyundai', 'Veloster', '2015', 'Automatic', '1.6', 'Turbo', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(430, 'Hyundai', 'Veloster', '2016', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(431, 'Hyundai', 'Veloster', '2016', 'Automatic', '1.6', 'Turbo', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(432, 'Hyundai', 'XG', '2001', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(433, 'Hyundai', 'XG', '2001', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(434, 'Hyundai', 'XG', '2002', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(435, 'Hyundai', 'XG', '2002', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(436, 'Hyundai', 'XG', '2003', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(437, 'Hyundai', 'XG', '2003', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(438, 'Hyundai', 'XG', '2004', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(439, 'Hyundai', 'XG', '2004', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(440, 'Hyundai', 'XG', '2005', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(441, 'Hyundai', 'XG', '2005', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(442, 'Hyundai', 'XG', '2006', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`ID`, `Name`) VALUES
(1, 'Kuala Lumpur'),
(2, 'Selangor'),
(3, 'Johor'),
(4, 'Penang'),
(5, 'Perak'),
(6, 'Kedah'),
(7, 'Negeri Sembilan'),
(8, 'Pahang'),
(9, 'Sabah'),
(10, 'Sarawak'),
(11, 'Terengganu'),
(12, 'Melaka'),
(13, 'Kelantan'),
(14, 'Perlis'),
(15, 'Putrajaya'),
(16, 'Labuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE IF NOT EXISTS `tbl_subscriber` (
  `ID` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `IsSubscribe` int(11) NOT NULL,
  `AddedOn` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subscriber`
--

INSERT INTO `tbl_subscriber` (`ID`, `Type`, `EmailAddress`, `IsSubscribe`, `AddedOn`) VALUES
(1, 1, 'me@ruhaizat.my', 1, '0000-00-00 00:00:00'),
(2, 2, 'mruhaizat88@gmail.com', 1, '0000-00-00 00:00:00'),
(3, 2, 'user1hucp@ruhaizat.my', 0, '0000-00-00 00:00:00'),
(6, 1, 'user4hucp@ruhaizat.my', 1, '2017-08-19 16:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `ID` int(11) NOT NULL,
  `Type` int(11) DEFAULT NULL,
  `Group` int(11) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(5000) DEFAULT NULL,
  `Salutation` varchar(50) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(50) DEFAULT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `AddedOn` datetime DEFAULT NULL,
  `AddedBy` int(11) DEFAULT NULL,
  `ModifiedOn` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `FBUserID` varchar(255) DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `IdentityCardNo` varchar(255) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `ProfilePic` varchar(255) NOT NULL,
  `State` int(11) NOT NULL,
  `MembershipType` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `MobileVerification` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `Type`, `Group`, `Username`, `Password`, `Salutation`, `FirstName`, `LastName`, `MobileNo`, `EmailAddress`, `Status`, `AddedOn`, `AddedBy`, `ModifiedOn`, `ModifiedBy`, `FBUserID`, `LastLogin`, `IdentityCardNo`, `Address`, `ProfilePic`, `State`, `MembershipType`, `Latitude`, `Longitude`, `MobileVerification`) VALUES
(1, 1, 1, 'su', '$2a$08$nFHGkaIbEleYhJifzhhEE.lG8.pX3KmWy3ESxo95s6wb9fR.f0QqO', NULL, 'Administrator', 'Administrator', '+60127872389', 'suhucp@ruhaizat.my', 2, '2017-03-01 00:00:00', 2017, NULL, NULL, NULL, '2017-08-22 16:24:11', '880805-01-5137', 'Malaysian Institute of Road Safety Research (MIROS) Jalan TKS 1 Taman Kajang Sentral Kajang Selangor Malaysia', 'ejen.jpg', 2, 'Administrator', '2.9773322', '101.79753519999997', 1),
(10, NULL, 2, 'mruhaizat88@gmail.com', '$2a$08$xlebgSdW7cZeqOHrbe12JuEn6TcCL8JXfeiKhQ6x.iivw6O5j5jZ6', NULL, 'Muhammad Ruhaizat', 'Abd Ghani', '12', 'me@ruhaizat.my', 2, '2017-05-01 00:00:00', NULL, NULL, NULL, NULL, '2017-08-22 15:28:12', '', 'Pangsapuri Angkasa Indah Kajang Jalan Angkasa Indah 2a Taman Angkasa Indah Kajang Selangor Malaysia', 'me_bio.jpg', 2, 'Basic Member', '3.0001045', '101.79944150000006', 0),
(11, 2, 2, NULL, NULL, NULL, 'Muhammad Ruhaizat', 'Abd Ghani', '+60127872389', 'mruhaizat88@gmail.com', 2, '2017-05-01 00:00:00', NULL, NULL, NULL, NULL, '2017-08-19 15:25:18', '888888-88-8888', 'Ibrahim Maju Restaurant Jalan Saga Emas 8A Taman Saga Emas Kajang Selangor Malaysia', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p720x720/19665362_10213809774383764_2041542046237718140_n.jpg?oh=fecb03c46b319cd3f797b0a99a9671da&oe=5A17FA41', 2, 'Basic Member', '2.9977952', '101.79856489999997', 0),
(27, 1, 2, NULL, '$2a$08$WJKQsICtKQVAaavZ63xy5.4Qy79bo9J0S2a4r4d3AEN.mx2KmtgJy', NULL, 'M. Izat', 'A. Ghani', '', 'myfreelanceprogrammer@gmail.com', 2, '2017-05-24 09:21:50', NULL, NULL, NULL, NULL, '2017-05-24 09:22:14', '1234', 'Malaysian Institute of Road Safety Research (MIROS) Jalan TKS 1 Taman Kajang Sentral Kajang Selangor Malaysia', 'Safer2Schools_Logo2.png', 2, 'Basic Member', '2.9773322', '101.79753519999997', 0),
(28, 1, 2, NULL, '$2a$08$X3KQrBvW/1UWzRoUhuy7gOUnSlu8uUyoItxe5FsYlh5r29SwalSgC', NULL, 'Kenny', 'Lim', '0163046229', 'kenny@kni.com.my', 2, '2017-05-28 01:04:38', NULL, NULL, NULL, NULL, '2017-05-28 16:21:33', '88', 'Aman Heights Condominium Taman Bukit Serdang Seri Kembangan Selangor Malaysia', 'person-021.jpg', 1, 'Basic Member', '3.0266654', '101.69214009999996', 0),
(41, 1, 2, NULL, '$2a$08$IZI/wPfS9.d4w7bozQ2HnepAGuDvDX1Uu6R2szLnLTM24oVLPgU5K', NULL, NULL, NULL, NULL, 'user2hucp@ruhaizat.my', 1, '2017-06-05 15:10:32', NULL, NULL, NULL, NULL, NULL, '', '', 'default.jpg', 0, 'Basic Member', '', '', 0),
(42, 2, 2, NULL, NULL, NULL, 'Lim', 'Kenny', NULL, 'limperz@hotmail.com', 2, '2017-06-09 16:11:09', NULL, NULL, NULL, NULL, '2017-06-09 16:11:23', '', '', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c50.50.621.621/p720x720/942106_10152436871396686_117385609_n.jpg?oh=cc0e6a0e3f76a0e0ac9e77f64c50d864&oe=59A3B3BA', 0, 'Basic Member', '', '', 0),
(62, 1, NULL, NULL, '$2a$08$sCysCZKAbS5uVYGGQta1le6FVlM5/HHJXEAFo6CUs/vUIN28.st.C', NULL, NULL, NULL, '0127872389', 'user3hucp@ruhaizat.my', 1, '2017-06-22 17:48:31', NULL, NULL, NULL, NULL, NULL, '', '', 'default.jpg', 0, 'Basic Member', '', '', 0),
(63, 1, 2, NULL, '$2a$08$XS4ExCKYpTyyxvGSbk/S8ejzY3ae5MHaF9HkxUOjzjHSHDAUg3rOy', NULL, NULL, NULL, '+60127872389', 'user1hucp@ruhaizat.my', 1, '2017-08-19 15:57:21', NULL, NULL, NULL, NULL, NULL, '', '', 'default.jpg', 0, 'Basic Member', '', '', 0),
(69, 1, 2, NULL, '$2a$08$OZQA/Fw9A3j9WFGOVfnjbeTuWzPsXSjv5cad1mK9xnyVIyztRn3ZC', NULL, NULL, NULL, '+60127872389', 'user4hucp@ruhaizat.my', 1, '2017-08-19 16:11:13', NULL, NULL, NULL, NULL, NULL, '', '', 'default.jpg', 0, 'Basic Member', '', '', 0),
(70, 1, 2, NULL, '$2a$08$a0HmAC4eGIFhfPDI0Qd1eO3J8VdEz7a6JeN4BN6b0QepoLwxFXSje', NULL, NULL, NULL, '+60127872389', 'user5hucp@ruhaizat.my', 1, '2017-08-19 16:11:37', NULL, NULL, NULL, NULL, NULL, '', '', 'default.jpg', 0, 'Basic Member', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifyemail`
--

CREATE TABLE IF NOT EXISTS `tbl_verifyemail` (
  `ID` int(11) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Token` varchar(100) NOT NULL,
  `IsVerify` int(11) NOT NULL,
  `ExpiryDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifyemail`
--

INSERT INTO `tbl_verifyemail` (`ID`, `EmailAddress`, `UserID`, `Token`, `IsVerify`, `ExpiryDate`) VALUES
(10, 'myfreelanceprogrammer@gmail.com', 24, 'FD27YNxWHU1u0KfgzCGpOeQ3VEsaXMIb9dnlqLRkcT45Amw8vr', 0, '2017-05-27 00:00:00'),
(11, 'myfreelanceprogrammer@gmail.com', 25, 'FVyQcAl3NCEznYMdXeKPrjBkv4hx0g1JD5tfHoWGI9OpiRwSqb', 0, '2017-05-27 00:00:00'),
(12, 'myfreelanceprogrammer@gmail.com', 26, 'qHlVez4ASm1GnZcPYLCWQa0p3KNf5UsRrI6JhokOtTMvF2idDx', 0, '2017-05-27 00:00:00'),
(13, 'myfreelanceprogrammer@gmail.com', 27, 'aBhmiqGueP3Z0R5TSEofxdNJVv4rYkUlg61wOLyQAIsn9cW7Cz', 1, '2017-05-27 00:00:00'),
(14, 'kenny@kni.com.my', 28, 'Jrqgf8v1C0blwINnskHGmFAcexDBET3oOM964hyQSWUP7KjdVa', 1, '2017-05-31 00:00:00'),
(38, 'user1hucp@ruhaizat.my', 40, 'TnCzxP1iH93EZKDg5wQfMUJoyNSOWGtus7BY2qIvp6kblRae0r', 1, '2017-06-01 00:00:00'),
(39, 'user2hucp@ruhaizat.my', 41, '3VvAtq5KLE2FHNXkO0RrWaQCPfsznTM4Gh7YmwxIoJBie1juUl', 0, '2017-06-07 15:10:33'),
(40, 'user3hucp@ruhaizat.my', 43, '8mfeaLhJjpI9ukHWFgdTcCsyYlOXVNqQA4U2Z0PnB37oMbEvwK', 0, '2017-06-16 15:18:34'),
(41, 'user3hucp@ruhaizat.my', 60, 'jW8lRAr0wbdBS17MpzvFhmsi9nycuEKqtUVIZ23f4LX5JGkPea', 0, '2017-06-25 05:09:08'),
(42, 'user3hucp@ruhaizat.my', 61, 'KSyzMX4xft085UVonGqlp3cdaFsBQWAk7m9ePLY6OHEvw1iNRZ', 0, '2017-06-25 17:47:06'),
(43, 'user3hucp@ruhaizat.my', 62, 'FmOYexCdSuWkK9zJncjRUvGbTQX6IDt2MiPw5A13slroLEByha', 0, '2017-06-25 17:48:31'),
(44, 'user1hucp@ruhaizat.my', 63, 'prkdzA04yJKFVgOSuBfYZILEWv2mwt7XcMlhxHRn96qDNoC31T', 0, '2017-08-22 15:57:21'),
(45, 'user4hucp@ruhaizat.my', 64, 'Nz3q12cBopPM5CeGJnWHtxV4ikZlywRDLrQK7YSEImhFOsAa8U', 0, '2017-08-22 15:57:47'),
(46, 'user4hucp@ruhaizat.my', 65, 'YpxBI1bO8gsXTjiCU3lW0NEmzvRMqcGueAd2VH4oQtFn57a9D6', 0, '2017-08-22 16:00:03'),
(47, 'user5hucp@ruhaizat.my', 66, 'YCwpUeSBuNa9RHvAJEQ7l0Dn43Vm2qj1h5GcWZMPsiK8ky6rIb', 0, '2017-08-22 16:00:42'),
(48, 'user4hucp@ruhaizat.my', 67, 'xfELUG5Akd3JiZ0eYW1hI4u2gQstO7vm9Fc6rplHobjNVRTaDM', 0, '2017-08-22 16:01:43'),
(49, 'user5hucp@ruhaizat.my', 68, 'C9BuHDrQj28VxfitFXZkTeG0cm453EOh6bSRapNYoqUwyWgdLM', 0, '2017-08-22 16:03:19'),
(50, 'user4hucp@ruhaizat.my', 69, 'vbY3Pfuk062R4ts7GXwaDzoFWSpqO1IT8hyNHLxncVAMde9j5J', 0, '2017-08-22 16:11:13'),
(51, 'user5hucp@ruhaizat.my', 70, 's9wj7OFNqrMoCb62zZWHpTinu5DBxhdaXLY8UcRGm0efKIkSP3', 0, '2017-08-22 16:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifymobile`
--

CREATE TABLE IF NOT EXISTS `tbl_verifymobile` (
  `ID` int(11) NOT NULL,
  `MobileNo` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Token` varchar(10) NOT NULL,
  `IsVerify` int(11) NOT NULL,
  `ExpiryDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifymobile`
--

INSERT INTO `tbl_verifymobile` (`ID`, `MobileNo`, `UserID`, `Token`, `IsVerify`, `ExpiryDate`) VALUES
(1, '0123456789', 40, '909283', 0, '2017-06-03 07:24:06'),
(2, '0123456789', 40, '819350', 0, '2017-06-03 07:26:06'),
(3, '0123456789', 40, '534221', 0, '2017-06-03 07:27:16'),
(4, '0123456789', 40, '507989', 0, '2017-06-03 07:29:51'),
(5, '0123456789', 40, '926137', 0, '2017-06-03 07:30:37'),
(6, '0123456789', 40, '207069', 0, '2017-06-03 07:31:05'),
(7, '0123456789', 40, '892741', 0, '2017-06-03 07:31:47'),
(8, '0123456789', 40, '319338', 0, '2017-06-03 07:34:49'),
(9, '0123456789', 40, '667876', 0, '2017-06-03 07:36:06'),
(10, '0123456789', 40, '913804', 0, '2017-06-03 07:37:35'),
(11, '0123456789', 40, '276306', 0, '2017-06-03 07:38:00'),
(12, '0123456789', 40, '783700', 0, '2017-06-03 07:39:19'),
(13, '0123456789', 40, '687117', 1, '2017-06-03 07:47:50'),
(14, '0123456789', 40, '119277', 0, '2017-06-03 08:02:26'),
(15, '0123456789', 40, '796454', 0, '2017-06-03 08:02:48'),
(16, '0123456789', 40, '964598', 0, '2017-06-03 08:05:56'),
(17, '0123456789', 40, '595874', 0, '2017-06-03 08:09:43'),
(18, '0123456789', 40, '941466', 0, '2017-06-03 08:10:38'),
(19, '0123456789', 40, '954626', 0, '2017-06-03 08:13:08'),
(20, '0123456789', 40, '783472', 0, '2017-06-03 08:15:16'),
(21, '0123456789', 40, '508834', 0, '2017-06-03 08:22:41'),
(22, '0123456789', 40, '177669', 0, '2017-06-03 08:23:07'),
(23, '0123456789', 40, '123574', 0, '2017-06-03 08:24:04'),
(24, '0123456789', 40, '938864', 0, '2017-06-03 08:24:55'),
(25, '0123456789', 40, '187026', 0, '2017-06-03 08:25:42'),
(26, '0123456789', 40, '492073', 0, '2017-06-03 08:26:41'),
(27, '0123456789', 40, '909478', 0, '2017-06-03 08:27:06'),
(28, '0123456789', 40, '388415', 0, '2017-06-03 08:28:12'),
(29, '+60127872389', 40, '162961', 0, '2017-06-03 09:10:48'),
(30, '60127872389', 40, '679934', 1, '2017-06-03 09:11:11'),
(31, '60127872389', 40, '200408', 0, '2017-06-03 09:12:43'),
(32, '60127872389', 40, '182120', 0, '2017-06-03 09:14:58'),
(33, '60127872389', 40, '418830', 0, '2017-06-03 09:15:54'),
(34, '60127872389', 40, '704262', 0, '2017-06-03 09:16:12'),
(35, '60127872389', 40, '525527', 0, '2017-06-03 09:19:18'),
(36, '60127872389', 40, '396087', 0, '2017-06-03 09:19:22'),
(37, '60127872389', 40, '922788', 0, '2017-06-03 09:19:24'),
(38, '60127872389', 40, '560950', 0, '2017-06-03 09:19:41'),
(39, '60127872389', 40, '207971', 0, '2017-06-03 09:19:42'),
(40, '60127872389', 40, '751778', 0, '2017-06-03 09:21:05'),
(41, '60127872389', 40, '304895', 0, '2017-06-03 09:21:07'),
(42, '60127872389', 40, '968687', 0, '2017-06-03 09:21:14'),
(43, '60127872389', 40, '189819', 0, '2017-06-03 09:21:54'),
(44, '60127872389', 40, '488719', 0, '2017-06-03 09:21:55'),
(45, '60127872389', 40, '951230', 0, '2017-06-03 09:22:03'),
(46, '60127872389', 40, '743827', 0, '2017-06-03 09:37:35'),
(47, '60127872389', 40, '218848', 0, '2017-06-03 09:37:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contactseller`
--
ALTER TABLE `tbl_contactseller`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_emailsetting`
--
ALTER TABLE `tbl_emailsetting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_favourite`
--
ALTER TABLE `tbl_favourite`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_listing`
--
ALTER TABLE `tbl_listing`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_listingimage`
--
ALTER TABLE `tbl_listingimage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_recentlyviewed`
--
ALTER TABLE `tbl_recentlyviewed`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_specificationmaster`
--
ALTER TABLE `tbl_specificationmaster`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_verifyemail`
--
ALTER TABLE `tbl_verifyemail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_verifymobile`
--
ALTER TABLE `tbl_verifymobile`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contactseller`
--
ALTER TABLE `tbl_contactseller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_emailsetting`
--
ALTER TABLE `tbl_emailsetting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_favourite`
--
ALTER TABLE `tbl_favourite`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_listing`
--
ALTER TABLE `tbl_listing`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tbl_listingimage`
--
ALTER TABLE `tbl_listingimage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_recentlyviewed`
--
ALTER TABLE `tbl_recentlyviewed`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=303;
--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_specificationmaster`
--
ALTER TABLE `tbl_specificationmaster`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=443;
--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `tbl_verifyemail`
--
ALTER TABLE `tbl_verifyemail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `tbl_verifymobile`
--
ALTER TABLE `tbl_verifymobile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
