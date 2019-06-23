-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 08:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salesforce_automation_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `distributors_areas`
--

CREATE TABLE `distributors_areas` (
  `Distributor_Name` varchar(30) NOT NULL COMMENT 'Distributor''s name',
  `Area Code` varchar(20) NOT NULL COMMENT 'Area in which distributor operates',
  `Distributor_ID` varchar(15) NOT NULL COMMENT 'ID of distributor',
  `District` varchar(20) NOT NULL COMMENT 'District of the area',
  `Division` varchar(20) NOT NULL COMMENT 'Division of the area',
  `Territory_Manager` varchar(30) NOT NULL COMMENT 'Territory manager in charge',
  `Regional_Manager` varchar(30) NOT NULL COMMENT 'Regional manager in charge'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributors_areas`
--

INSERT INTO `distributors_areas` (`Distributor_Name`, `Area Code`, `Distributor_ID`, `District`, `Division`, `Territory_Manager`, `Regional_Manager`) VALUES
('Riyad Salehin', 'CTG_1', 'CTGD_1', 'Chattagram', 'Chattagram', 'Iqbal Hafiz', 'Yamin Iqbal'),
('Rahad Islam', 'CTG_2', 'CTGD_2', 'Chattagram', 'Chattagram', 'Iqbal Hafiz', 'Yamin Iqbal'),
('Irfanul Hasan', 'CTG_3', 'CTGD_3', 'Chattagram', 'Chattagram', 'Iqbal Hafiz', 'Yamin Iqbal'),
('Ehsanul Haque', 'DHK_1', 'DHKD_1', 'Dhaka', 'Dhaka', 'Sumnoon Ahmad', 'Aman Ullah'),
('Sakibur Rahman', 'DHK_2', 'DHKD_2', 'Dhaka', 'Dhaka', 'Sumnoon Ahmad', 'Aman Ullah'),
('Zahid Hassan', 'DHK_3', 'DHKD_3', 'Dhaka', 'Dhaka', 'Sumnoon Ahmad', 'Aman Ullah'),
('Rezwan Haque', 'FENI_1', 'FENID_1', 'Feni', 'Chattagram', 'Durjoy Chowdhury', 'Yamin Iqbal'),
('Mohsem Tuhin', 'FENI_2', 'FENID_2', 'Feni', 'Chattagram', 'Durjoy Chowdhury', 'Yamin Iqbal'),
('Mahmudul Hasan', 'FENI_3', 'FENID_3', 'Feni', 'Chattagram', 'Durjoy Chowdhury', 'Yamin Iqbal'),
('Fazle Rahat', 'GP_1', 'GPD_1', 'Gazipur', 'Dhaka', 'Raju Ahmed', 'Aman Ullah'),
('Sajid Rahman', 'GP_2', 'GPD_2', 'Gazipur', 'Dhaka', 'Raju Ahmed', 'Aman Ullah'),
('Akash Bhowmik', 'GP_3', 'GPD_3', 'Gazipur', 'Dhaka', 'Raju Ahmed', 'Aman Ullah');

-- --------------------------------------------------------

--
-- Table structure for table `executives`
--

CREATE TABLE `executives` (
  `Name` varchar(30) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`Name`, `ID`, `Password`) VALUES
('Abdul Halim', 'EX_01', 'e80a0702d314d055d05af996fe60cff9');

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE `markets` (
  `Market Name` varchar(30) NOT NULL,
  `Market ID` varchar(15) NOT NULL,
  `Area Code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`Market Name`, `Market ID`, `Area Code`) VALUES
('Banani 1', 'BAN1', 'DHK_1'),
('Banani 2', 'BAN2', 'DHK_1'),
('Dhanmondi 1', 'DHN1', 'DHK_2'),
('Dhanmondi 2', 'DHN2', 'DHK_2'),
('Feni Bazar', 'FENIBAZ', 'FENI_1'),
('Feni Main Road', 'FENIMAIN', 'FENI_1'),
('Fulgazi Bazar', 'FULBAZ', 'FENI_2'),
('Fulgazi Main Road', 'FULMAIN', 'FENI_2'),
('Gazipur Bazar', 'GPBAZ', 'GP_1'),
('Gazipur Main Road', 'GPMAIN', 'GP_1'),
('Hathazari Bazar', 'HATBAZ', 'CTG_3'),
('Hathazari Main Road', 'HATMAIN', 'CTG_3'),
('Kapasia Bazar', 'KAPBAZ', 'GP_2'),
('Kapasia Main Road', 'KAPMAIN', 'GP_2'),
('Kotowali', 'CTGKOT', 'CTG_1'),
('Reazuddin Bazar', 'CTGREAZ', 'CTG_1'),
('Sitakunda Bazar', 'SITABAZ', 'CTG_2'),
('Sitakunda Main Road', 'SITAMAIN', 'CTG_2'),
('Sonagazi Bazar', 'SONBAZ', 'FENI_3'),
('Sonagazi Main Road', 'SONMAIN', 'FENI_3'),
('Sreepur Bazar', 'SREBAZ', 'GP_3'),
('Sreepur Main Road', 'SREMAIN', 'GP_3'),
('Uttara 1', 'UTT1', 'DHK_3'),
('Uttara 2', 'UTT2', 'DHK_3');

-- --------------------------------------------------------

--
-- Table structure for table `regional managers`
--

CREATE TABLE `regional managers` (
  `Name` varchar(30) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regional managers`
--

INSERT INTO `regional managers` (`Name`, `ID`, `Password`, `Division`) VALUES
('Yamin Iqbal', 'REG_01', 'fdcc5f80661c0b33e24166b6deb58446', 'Chattagram'),
('Aman Ullah', 'REG_02', '95a6080a7a999364880885c180d92bb5', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `sales details`
--

CREATE TABLE `sales details` (
  `Bill no.` int(15) NOT NULL,
  `Date` varchar(2) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Shop ID` varchar(15) NOT NULL,
  `Item 1` int(11) NOT NULL,
  `Item 2` int(11) NOT NULL,
  `Item 3` int(11) NOT NULL,
  `Item 1 p` int(11) NOT NULL,
  `Item 2 p` int(11) NOT NULL,
  `Item 3 p` int(11) NOT NULL,
  `Total sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales details`
--

INSERT INTO `sales details` (`Bill no.`, `Date`, `Month`, `Year`, `Day`, `Shop ID`, `Item 1`, `Item 2`, `Item 3`, `Item 1 p`, `Item 2 p`, `Item 3 p`, `Total sale`) VALUES
(1, '03', 'February', '2019', 'Sunday', 'BAN1_1', 1, 2, 3, 30, 80, 135, 245),
(2, '04', 'February', '2019', 'Sunday', 'BAN1_2', 10, 5, 10, 300, 200, 450, 950),
(8, '04', 'February', '2019', 'Monday', 'BAN2_1', 3, 5, 7, 90, 200, 315, 605),
(9, '05', 'February', '2019', 'Tuesday', 'CTGKOT_1', 5, 7, 8, 150, 280, 360, 790),
(10, '05', 'February', '2019', 'Tuesday', 'CTGREAZ_1', 5, 6, 11, 150, 240, 495, 885),
(11, '05', 'February', '2019', 'Tuesday', 'CTGREAZ_2', 4, 2, 15, 120, 80, 675, 875),
(15, '06', 'February', '2019', 'Wednesday', 'DHN1_1', 15, 10, 5, 450, 400, 225, 1075),
(17, '06', 'February', '2019', 'Wednesday', 'DHN1_2', 4, 3, 12, 120, 120, 540, 780),
(18, '06', 'February', '2019', 'Wednesday', 'DHN2_1', 7, 10, 15, 210, 400, 675, 1285),
(19, '06', 'February', '2019', 'Wednesday', 'FENIBAZ_1', 10, 7, 13, 300, 280, 585, 1165),
(20, '06', 'February', '2019', 'Wednesday', 'FENIBAZ_2', 6, 6, 7, 180, 240, 315, 735),
(21, '06', 'February', '2019', 'Wednesday', 'FENIBAZ_3', 7, 7, 10, 210, 280, 450, 940),
(22, '06', 'February', '2019', 'Wednesday', 'FULBAZ_1', 5, 6, 11, 150, 240, 495, 885),
(23, '07', 'February', '2019', 'Thursday', 'FULBAZ_2', 10, 15, 10, 300, 600, 450, 1350),
(24, '07', 'February', '2019', 'Thursday', 'FULMAIN_1', 12, 2, 3, 360, 80, 135, 575),
(25, '07', 'February', '2019', 'Thursday', 'GPBAZ_1', 15, 21, 3, 450, 840, 135, 1425),
(26, '07', 'February', '2019', 'Thursday', 'GPBAZ_2', 12, 7, 3, 360, 280, 135, 775),
(27, '10', 'February', '2019', 'Sunday', 'GPMAIN_1', 8, 2, 8, 240, 80, 360, 680),
(28, '10', 'February', '2019', 'Sunday', 'HATBAZ_1', 4, 2, 10, 120, 80, 450, 650),
(29, '10', 'February', '2019', 'Sunday', 'HATBAZ_2', 5, 0, 15, 150, 0, 675, 825),
(30, '10', 'February', '2019', 'Sunday', 'HATMAIN_1', 15, 2, 3, 450, 80, 135, 665),
(31, '11', 'February', '2019', 'Monday', 'KAPBAZ_1', 10, 20, 0, 300, 800, 0, 1100),
(32, '11', 'February', '2019', 'Monday', 'KAPBAZ_2', 10, 2, 3, 300, 80, 135, 515),
(33, '11', 'February', '2019', 'Monday', 'KAPMAIN_1', 5, 2, 3, 150, 80, 135, 365),
(34, '13', 'February', '2019', 'Tuesday', 'SITABAZ_1', 6, 2, 6, 180, 80, 270, 530),
(35, '22', 'June', '2019', 'Saturday', 'CTGKOT1', 2, 2, 2, 60, 80, 90, 230),
(36, '22', 'June', '2019', 'Saturday', 'CTGREAZ_2', 1, 2, 3, 30, 80, 135, 245),
(37, '22', 'June', '2019', 'Saturday', 'SITABAZ_1', 1, 5, 3, 30, 200, 135, 365),
(38, '22', 'June', '2019', 'Saturday', 'HATBAZ_1', 1, 2, 3, 30, 80, 135, 245),
(39, '22', 'June', '2019', 'Saturday', 'HATBAZ_2', 1, 2, 6, 30, 80, 270, 380),
(40, '22', 'June', '2019', 'Saturday', 'FENIBAZ_1', 2, 2, 3, 60, 80, 135, 275),
(41, '22', 'June', '2019', 'Saturday', 'FENIBAZ_2', 4, 1, 3, 120, 40, 135, 295),
(42, '22', 'June', '2019', 'Saturday', 'FULBAZ_1', 1, 2, 3, 30, 80, 135, 245),
(43, '22', 'June', '2019', 'Saturday', 'FULBAZ_2', 1, 5, 3, 30, 200, 135, 365),
(44, '22', 'June', '2019', 'Saturday', 'BAN1_1', 1, 2, 3, 30, 80, 135, 245),
(45, '22', 'June', '2019', 'Saturday', 'BAN2_1', 1, 2, 3, 30, 80, 135, 245),
(46, '22', 'June', '2019', 'Saturday', 'GPBAZ_1', 1, 2, 3, 30, 80, 135, 245),
(47, '22', 'June', '2019', 'Saturday', 'GPBAZ_2', 2, 3, 4, 60, 120, 180, 360),
(48, '23', 'June', '2019', 'Sunday', 'HATMAIN_1', 15, 2, 3, 450, 80, 135, 765),
(49, '23', 'June', '2019', 'Sunday', 'KAPBAZ_1', 10, 20, 0, 300, 800, 0, 1000),
(50, '23', 'June', '2019', 'Sunday', 'KAPBAZ_2', 10, 2, 3, 300, 80, 135, 575),
(51, '23', 'June', '2019', 'Sunday', 'KAPMAIN_1', 5, 2, 3, 150, 80, 135, 565),
(52, '23', 'June', '2019', 'Sunday', 'SITABAZ_1', 6, 2, 6, 180, 80, 270, 430),
(53, '23', 'June', '2019', 'Sunday', 'CTGKOT1', 2, 2, 2, 60, 80, 90, 260),
(54, '23', 'June', '2019', 'Sunday', 'CTGREAZ_2', 1, 2, 3, 30, 80, 135, 255),
(55, '23', 'June', '2019', 'Sunday', 'SITABAZ_1', 1, 5, 3, 30, 200, 135, 385),
(56, '23', 'June', '2019', 'Sunday', 'HATBAZ_1', 1, 2, 3, 30, 80, 135, 275),
(57, '23', 'June', '2019', 'Sunday', 'HATBAZ_2', 1, 2, 6, 30, 80, 270, 390),
(58, '23', 'June', '2019', 'Sunday', 'FENIBAZ_1', 2, 2, 3, 60, 80, 135, 265),
(59, '23', 'June', '2019', 'Sunday', 'FENIBAZ_2', 4, 1, 3, 120, 40, 135, 265),
(60, '23', 'June', '2019', 'Sunday', 'FULBAZ_1', 1, 2, 3, 30, 80, 135, 255),
(61, '23', 'June', '2019', 'Sunday', 'FULBAZ_2', 1, 5, 3, 30, 200, 135, 355),
(62, '23', 'June', '2019', 'Sunday', 'BAN1_1', 1, 2, 3, 30, 80, 135, 235),
(63, '23', 'June', '2019', 'Sunday', 'BAN2_1', 1, 2, 3, 30, 80, 135, 245),
(64, '23', 'June', '2019', 'Sunday', 'GPBAZ_1', 1, 2, 3, 30, 80, 135, 245),
(65, '23', 'June', '2019', 'Sunday', 'GPBAZ_2', 2, 3, 4, 60, 120, 180, 350);

-- --------------------------------------------------------

--
-- Table structure for table `salesmen`
--

CREATE TABLE `salesmen` (
  `Name` varchar(30) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Area Code` varchar(15) NOT NULL,
  `Target` int(11) NOT NULL DEFAULT '5000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salesmen`
--

INSERT INTO `salesmen` (`Name`, `ID`, `Password`, `Area Code`, `Target`) VALUES
('Shahriar Ahmed', 'SM_001', '21d1ce58f85b11a469ac9016ed2cdda1', 'CTG_1', 5000),
('Ratul Roy', 'SM_002', '64c08ca6b03ea1e208c7c5bc136a1005', 'CTG_2', 7000),
('Towhidur Alam', 'SM_003', '7fc0f76161f970f34946ceda55d1f0e7', 'CTG_3', 5000),
('Labib Wahid', 'SM_004', '3eb75163c1643c33b3f6d4f24fd80030', 'FENI_1', 4000),
('Souharda Biswas', 'SM_005', 'aeee3683f994e22130d378341c7a687c', 'FENI_2', 5000),
('Yasir Mahbub', 'SM_006', '0eff6ab7e20aa809eaa7cc8ba86c31a0', 'FENI_3', 4000),
('Mahbub Alam', 'SM_007', 'f6ed80ffcb960b7f31ff62da898bbfc0', 'DHK_1', 5000),
('Abdullah Mamun', 'SM_008', '1cbc455c31531a6b16435a0ef32faaf4', 'DHK_2', 6000),
('Iqbal Hossain', 'SM_009', 'b160f903928e387b5f017038d5246db8', 'DHK_3', 5000),
('Kamrul Islam', 'SM_010', '7f69ba1ad3a61c1cd04d16e7bba988d8', 'GP_1', 6000),
('Ashef Habib', 'SM_011', '3305fe548fe60087aa1042e98e16fb4e', 'GP_2', 5000),
('Mahidul Zihan', 'SM_012', 'b8dc54a29df71401c8ee566371859da5', 'GP_3', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `salesmen_tour_programme`
--

CREATE TABLE `salesmen_tour_programme` (
  `Salesman_ID` varchar(15) NOT NULL,
  `Date` varchar(2) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Market_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salesmen_tour_programme`
--

INSERT INTO `salesmen_tour_programme` (`Salesman_ID`, `Date`, `Month`, `Year`, `Day`, `Market_ID`) VALUES
('SM_001', '23', '6', '2019', 'Sunday', 'CTGREAZ'),
('SM_002', '22', '6', '2019', 'Saturday', 'SITABAZ'),
('SM_003', '23', '6', '2019', 'Sunday', 'HATBAZ'),
('SM_004', '22', '6', '2019', 'Saturday', 'FENIBAZ'),
('SM_005', '23', '6', '2019', 'Sunday', 'FULMAIN'),
('SM_006', '23', '6', '2019', 'Sunday', 'SONMAIN'),
('SM_007', '22', '6', '2019', 'Saturday', 'BAN1'),
('SM_008', '23', '6', '2019', 'Sunday', 'DHN1'),
('SM_009', '23', '6', '2019', 'Sunday', 'UTT1'),
('SM_010', '22', '6', '2019', 'Saturday', 'GPBAZ'),
('SM_011', '23', '6', '2019', 'Sunday', 'KAPMAIN'),
('SM_012', '23', '6', '2019', 'Sunday', 'SREBAZ');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `Name` varchar(40) NOT NULL,
  `Shop ID` varchar(15) NOT NULL,
  `Market` varchar(30) NOT NULL,
  `Market ID` varchar(15) NOT NULL,
  `Area Code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`Name`, `Shop ID`, `Market`, `Market ID`, `Area Code`) VALUES
('Store 19', 'BAN1_1', 'Banani 1', 'BAN1', 'DHK_1'),
('Store 20', 'BAN1_2', 'Banani 1', 'BAN1', 'DHK_1'),
('Store 21', 'BAN2_1', 'Banani 2', 'BAN2', 'DHK_1'),
('Store 3', 'CTGKOT_1', 'Kotowali', 'CTGKOT', 'CTG_1'),
('Store 1', 'CTGREAZ_1', 'Reazuddin Bazar', 'CTGREAZ', 'CTG_1'),
('Store 2', 'CTGREAZ_2', 'Reazuddin Bazar', 'CTGREAZ', 'CTG_1'),
('Store 22', 'DHN1_1', 'Dhanmondi 1', 'DHN1', 'DHK_2'),
('Store 23', 'DHN1_2', 'Dhanmondi 1', 'DHN1', 'DHK_2'),
('Store 24', 'DHN2_1', 'Dhanmondi 2', 'DHN2', 'DHK_2'),
('Store 10', 'FENIBAZ_1', 'Feni Bazar', 'FENIBAZ', 'FENI_1'),
('Store 11', 'FENIBAZ_2', 'Feni Bazar', 'FENIBAZ', 'FENI_1'),
('Store 12', 'FENIMAIN_3', 'Feni Main Road', 'FENIMAIN', 'FENI_1'),
('Store 13', 'FULBAZ_1', 'Fulgazi Bazar', 'FULBAZ', 'FENI_2'),
('Store 14', 'FULBAZ_2', 'Fulgazi Bazar', 'FULBAZ', 'FENI_2'),
('Store 15', 'FULMAIN_1', 'Fulgazi Main Road', 'FULMAIN', 'FENI_2'),
('Store 28', 'GPBAZ_1', 'Gazipur Bazar', 'GPBAZ', 'GP_1'),
('Store 29', 'GPBAZ_2', 'Gazipur Bazar', 'GPBAZ', 'GP_1'),
('Store 30', 'GPMAIN_1', 'Gazipur Main Road', 'GPMAIN', 'GP_1'),
('Store 7', 'HATBAZ_1', 'Hathazari Bazar', 'HATBAZ', 'CTG_3'),
('Store 8', 'HATBAZ_2', 'Hathazari Bazar', 'HATBAZ', 'CTG_3'),
('Store 9', 'HATMAIN_1', 'Hathazari Main Road', 'HATMAIN', 'CTG_3'),
('Store 31', 'KAPBAZ_1', 'Kapasia Bazar', 'KAPBAZ', 'GP_2'),
('Store 32', 'KAPBAZ_2', 'Kapasia Bazar', 'KAPBAZ', 'GP_2'),
('Store 33', 'KAPMAIN_1', 'Kapasia Main Road', 'KAPMAIN', 'GP_2'),
('Store 4', 'SITABAZ_1', 'Sitakunda Bazar', 'SITABAZ', 'CTG_2'),
('Store 5', 'SITABAZ_2', 'Sitakunda Bazar', 'SITABAZ', 'CTG_2'),
('Store 6', 'SITAMAIN_3', 'Sitakunda Main Road', 'SITAMAIN', 'CTG_2'),
('Store 16', 'SONBAZ_1', 'Sonagazi Bazar', 'SONBAZ', 'FENI_3'),
('Store 17', 'SONBAZ_2', 'Sonagazi Bazar', 'SONBAZ', 'FENI_3'),
('Store 18', 'SONMAIN_1', 'Sonagazi Main Road', 'SONMAIN', 'FENI_3'),
('Store 34', 'SREBAZ_1', 'Sreepur Bazar', 'SREBAZ', 'GP_3'),
('Store 35', 'SREBAZ_2', 'Sreepur Bazar', 'SREBAZ', 'GP_3'),
('Store 36', 'SREMAIN_1', 'Sreepur Main Road', 'SREMAIN', 'GP_3'),
('Store 25', 'UTT1_1', 'Uttara 1', 'UTT1', 'DHK_3'),
('Store 26', 'UTT1_2', 'Uttara 1', 'UTT1', 'DHK_3'),
('Store 27', 'UTT2_1', 'Uttara 2', 'UTT2', 'DHK_3');

-- --------------------------------------------------------

--
-- Table structure for table `territory managers`
--

CREATE TABLE `territory managers` (
  `Name` varchar(30) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `District` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `territory managers`
--

INSERT INTO `territory managers` (`Name`, `ID`, `Password`, `District`) VALUES
('Iqbal Hafiz', 'TM_01', 'b160f903928e387b5f017038d5246db8', 'Chattagram'),
('Durjoy Chowdhury', 'TM_02', '8cf5c9d9fdf1289aa6a8a70fd60dd559', 'Feni'),
('Sumnoon Ahmad', 'TM_03', '650658be73bd58554bae4471239d5b19', 'Dhaka'),
('Raju Ahmed', 'TM_04', '0de99dbac6f301dcadeb24ae57d976c7', 'Gazipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributors_areas`
--
ALTER TABLE `distributors_areas`
  ADD PRIMARY KEY (`Distributor_ID`);

--
-- Indexes for table `executives`
--
ALTER TABLE `executives`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `markets`
--
ALTER TABLE `markets`
  ADD PRIMARY KEY (`Market Name`);

--
-- Indexes for table `regional managers`
--
ALTER TABLE `regional managers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sales details`
--
ALTER TABLE `sales details`
  ADD PRIMARY KEY (`Bill no.`);

--
-- Indexes for table `salesmen`
--
ALTER TABLE `salesmen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `salesmen_tour_programme`
--
ALTER TABLE `salesmen_tour_programme`
  ADD PRIMARY KEY (`Salesman_ID`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`Shop ID`);

--
-- Indexes for table `territory managers`
--
ALTER TABLE `territory managers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales details`
--
ALTER TABLE `sales details`
  MODIFY `Bill no.` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
