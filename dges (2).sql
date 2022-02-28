-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 01:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dges`
--
CREATE DATABASE IF NOT EXISTS `dges` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dges`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_mgt`
--

DROP TABLE IF EXISTS `tbl_admin_mgt`;
CREATE TABLE `tbl_admin_mgt` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_mgt`
--

INSERT INTO `tbl_admin_mgt` (`ID`, `Name`, `email`, `password`, `created_date`) VALUES
(1, 'DTS Admin', 'dts@dges.lk', 'admin@123', '2022-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career_login`
--

DROP TABLE IF EXISTS `tbl_career_login`;
CREATE TABLE `tbl_career_login` (
  `ID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_career_login`
--

INSERT INTO `tbl_career_login` (`ID`, `name`, `email`, `nic`, `password`) VALUES
(4, 'DGES TEST', 'dges@gmail.com', '973573586V', 'qwe'),
(5, 'Pulasthi Shamil', 'q@g', '973573586V', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career_maindetails`
--

DROP TABLE IF EXISTS `tbl_career_maindetails`;
CREATE TABLE `tbl_career_maindetails` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `age_month` int(11) NOT NULL,
  `age_year` int(11) NOT NULL,
  `maritial_status` varchar(10) NOT NULL,
  `contact_no1` int(11) NOT NULL,
  `contact_no2` int(11) NOT NULL,
  `residence_town` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_career_maindetails`
--

INSERT INTO `tbl_career_maindetails` (`id`, `nic`, `age_month`, `age_year`, `maritial_status`, `contact_no1`, `contact_no2`, `residence_town`) VALUES
(4, '973573586V', 0, 0, 'Married', 0, 0, ''),
(5, '973573586V', 0, 0, 'Married', 0, 0, ''),
(6, '973573586V', 0, 0, 'Married', 0, 0, ''),
(7, '973573586V', 0, 0, 'Married', 0, 0, ''),
(8, '973573586V', 0, 0, 'Married', 0, 0, ''),
(9, '973573586V', 0, 0, 'Married', 0, 0, ''),
(10, '973573586V', 0, 0, 'Married', 0, 0, ''),
(11, '', 0, 0, 'Married', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career_qualifications`
--

DROP TABLE IF EXISTS `tbl_career_qualifications`;
CREATE TABLE `tbl_career_qualifications` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `highest_prof_qual` varchar(200) NOT NULL,
  `highest_acad_qual` varchar(200) NOT NULL,
  `present_occupation` varchar(200) NOT NULL,
  `experience_employer1` varchar(200) NOT NULL,
  `experience_post1` varchar(200) NOT NULL,
  `experience_from1` int(11) NOT NULL,
  `experience_to1` int(11) NOT NULL,
  `experience_employer2` varchar(200) NOT NULL,
  `experience_post2` varchar(200) NOT NULL,
  `experience_from2` int(11) NOT NULL,
  `experience_to2` int(11) NOT NULL,
  `experience_employer3` varchar(200) NOT NULL,
  `experience_post3` varchar(200) NOT NULL,
  `experience_from3` int(11) NOT NULL,
  `experience_to3` int(11) NOT NULL,
  `experience_employer4` varchar(200) NOT NULL,
  `experience_post4` varchar(200) NOT NULL,
  `experience_from4` int(11) NOT NULL,
  `experience_to4` int(11) NOT NULL,
  `experience_employer5` varchar(200) NOT NULL,
  `experience_post5` varchar(200) NOT NULL,
  `experience_from5` int(11) NOT NULL,
  `experience_to5` int(11) NOT NULL,
  `remuneration_present` varchar(200) NOT NULL,
  `remuneration_expected` varchar(200) NOT NULL,
  `remuneration_negotiable` varchar(200) NOT NULL,
  `remuneration_remarks` varchar(200) NOT NULL,
  `expected_date_to_join` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_career_qualifications`
--

INSERT INTO `tbl_career_qualifications` (`id`, `nic`, `highest_prof_qual`, `highest_acad_qual`, `present_occupation`, `experience_employer1`, `experience_post1`, `experience_from1`, `experience_to1`, `experience_employer2`, `experience_post2`, `experience_from2`, `experience_to2`, `experience_employer3`, `experience_post3`, `experience_from3`, `experience_to3`, `experience_employer4`, `experience_post4`, `experience_from4`, `experience_to4`, `experience_employer5`, `experience_post5`, `experience_from5`, `experience_to5`, `remuneration_present`, `remuneration_expected`, `remuneration_negotiable`, `remuneration_remarks`, `expected_date_to_join`) VALUES
(3, '973573586V', '', '', '', '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 'Yes', '', ''),
(4, '973573586V', '', '', '', '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 'Yes', '', ''),
(5, '973573586V', '', '', '', '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 'Yes', '', ''),
(6, '973573586V', '', '', '', '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 'Yes', '', ''),
(7, '973573586V', '', '', '', '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 'Yes', '', ''),
(8, '973573586V', '', '', '', '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 'Yes', '', ''),
(9, '973573586V', '', '', '', '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 'Yes', '', ''),
(10, '', '', '', '', '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', 'Yes', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career_referees`
--

DROP TABLE IF EXISTS `tbl_career_referees`;
CREATE TABLE `tbl_career_referees` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `referee_name1` varchar(40) NOT NULL,
  `referee_occupation1` varchar(40) NOT NULL,
  `referee_contact1` varchar(40) NOT NULL,
  `referee_email1` varchar(40) NOT NULL,
  `referee_address1` varchar(200) NOT NULL,
  `referee_name2` varchar(40) NOT NULL,
  `referee_occupation2` varchar(40) NOT NULL,
  `referee_contact2` varchar(40) NOT NULL,
  `referee_email2` varchar(40) NOT NULL,
  `referee_address2` varchar(200) NOT NULL,
  `special_note` varchar(200) NOT NULL,
  `apply_division` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_career_referees`
--

INSERT INTO `tbl_career_referees` (`id`, `nic`, `referee_name1`, `referee_occupation1`, `referee_contact1`, `referee_email1`, `referee_address1`, `referee_name2`, `referee_occupation2`, `referee_contact2`, `referee_email2`, `referee_address2`, `special_note`, `apply_division`) VALUES
(2, '973573586V', '', '', '', '', '', '', '', '', '', '', '', 'Civil'),
(3, '973573586V', '', '', '', '', '', '', '', '', '', '', '', 'Civil'),
(4, '973573586V', '', '', '', '', '', '', '', '', '', '', '', 'Civil'),
(5, '973573586V', '', '', '', '', '', '', '', '', '', '', '', 'Civil'),
(6, '973573586V', '', '', '', '', '', '', '', '', '', '', '', 'Civil'),
(7, '973573586V', '', '', '', '', '', '', '', '', '', '', '', 'Civil'),
(8, '973573586V', '', '', '', '', '', '', '', '', '', '', '', 'Civil'),
(9, '', '', '', '', '', '', '', '', '', '', '', '', 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career_upload`
--

DROP TABLE IF EXISTS `tbl_career_upload`;
CREATE TABLE `tbl_career_upload` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `profile_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_header_image`
--

DROP TABLE IF EXISTS `tbl_header_image`;
CREATE TABLE `tbl_header_image` (
  `ID` int(11) NOT NULL,
  `pageCat` varchar(300) NOT NULL,
  `imagepath` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_header_image`
--

INSERT INTO `tbl_header_image` (`ID`, `pageCat`, `imagepath`) VALUES
(1, 'services', 'assets/img/services/1/services.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_page`
--

DROP TABLE IF EXISTS `tbl_home_page`;
CREATE TABLE `tbl_home_page` (
  `ID` int(11) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `slide1` varchar(300) NOT NULL,
  `slide2` varchar(300) NOT NULL,
  `slide3` varchar(300) NOT NULL,
  `productName1` varchar(300) NOT NULL,
  `productDes1` varchar(1000) NOT NULL,
  `productImg1` varchar(300) NOT NULL,
  `productName2` varchar(300) NOT NULL,
  `productDes2` varchar(1000) NOT NULL,
  `productImg2` varchar(300) NOT NULL,
  `productName3` varchar(300) NOT NULL,
  `productDes3` varchar(1000) NOT NULL,
  `productImg3` varchar(300) NOT NULL,
  `employeeCount` int(11) NOT NULL,
  `projectsCompleted` int(11) NOT NULL,
  `OngoingProjects` int(11) NOT NULL,
  `Awards` int(11) NOT NULL,
  `Products` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_home_page`
--

INSERT INTO `tbl_home_page` (`ID`, `logo`, `slide1`, `slide2`, `slide3`, `productName1`, `productDes1`, `productImg1`, `productName2`, `productDes2`, `productImg2`, `productName3`, `productDes3`, `productImg3`, `employeeCount`, `projectsCompleted`, `OngoingProjects`, `Awards`, `Products`) VALUES
(1, 'assets/img/dges_img/logo.png', 'assets/img/dges_img/1.jpg', 'assets/img/dges_img/2.jpg', 'assets/img/dges_img/home3.jpg', 'MMA Products', 'Compact, lightweight and capable. Our MMA welding equipment meets professional welding demands in every respect. Arc ignition and stability dynamic control ensure that every electrode burns effortlessly to produce quality welds. All models are power generator compatible and able to operate in a wide range of conditions from sub zero temperatures to desert heat.', 'assets/img/dges_img/kempi.png', 'Sigma Paint', 'Kempact RA is built on Kemppi’s latest power source platform, ensuring optimal welding performance and excellent power cost efficiency. Eleven model options include 180, 250 and 320 ampere power sources, including a choice of either Regular (R) or Adaptive (A) control panel interface, which serve the wide ranging needs of metal fabrication workshops. Delivery specification includes welding gun and earth return lead pack.', 'assets/img/dges_img/sigma.png', 'Garco Products', 'Graco helps you get the job done fast with piston pumps, rotor stator pumps, mixing pumps and continuous mixers. Compared with traditional rotor stator technology, the piston pump uses less power while meeting performance standards ', 'assets/img/dges_img/gracohome.png', 50, 100, 80, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kempiproducts`
--

DROP TABLE IF EXISTS `tbl_kempiproducts`;
CREATE TABLE `tbl_kempiproducts` (
  `ID` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Description` varchar(3000) NOT NULL,
  `Image` varchar(300) NOT NULL,
  `subCat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kempiproducts`
--

INSERT INTO `tbl_kempiproducts` (`ID`, `Name`, `Description`, `Image`, `subCat`) VALUES
(1, 'Master 315', 'Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting.', 'assets/img/products/MMA/Master 315.jpg', 'MMA'),
(2, 'Master MLS', 'Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting.', 'assets/img/products/MMA/product1.jpg', 'MMA'),
(3, 'Master S', 'Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting.', 'assets/img/products/MMA/MasterS.jpg', 'MMA'),
(4, 'Minarc', 'Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting.', 'assets/img/products/MMA/MINARC.jpg', 'MMA'),
(5, 'MasterTig MLS 4000', 'MasterTig MLS sets the standard for industrial TIG welding. Precise and redefinrf welding quality for workshop or site use.', 'assets/img/products/MMA/MASTER MLS.jpg', 'MMA'),
(6, 'MasterTig', 'The new master of AC and DC TIG welding. MasterTig sets new standards for weld quality, usability and power efficiancy. Its modular design ensures that your machine exactly meets your needs.', 'assets/img/products/MMA/Mastetig.jpg', 'TIG'),
(7, 'MasterTig MLS 4000', 'Precise and redefinrf welding quality for workshop or site use, MasterTig MLS has become an industry standard, offering the necessary performance in a lightweight portable design.', 'assets/img/products/MMA/Masters.jpg', 'TIG'),
(8, 'Master S', 'Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting.', 'assets/img/products/MMA/product1.jpg', 'TIG'),
(9, 'MinarcMig Evo', 'Kemppi MIG welder for mobile, adaptive welding in automatic and manual mode.Experience huge MIG/MAG welding capacity and quality in a portable and compact form. The delivery package includes a MIG welding gun, cables, gas hose, and shoulder strap.', 'assets/img/dges_img/product1.jpg', 'TIG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

DROP TABLE IF EXISTS `tbl_projects`;
CREATE TABLE `tbl_projects` (
  `ID` int(11) NOT NULL,
  `ProjectName` varchar(300) NOT NULL,
  `ProjectDescription` varchar(5000) NOT NULL,
  `ProjectStatus` varchar(100) NOT NULL,
  `subTopic1` varchar(1000) NOT NULL,
  `subTopic2` varchar(1000) NOT NULL,
  `subDescription1` varchar(2000) NOT NULL,
  `subDescription2` varchar(2000) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_details`
--

DROP TABLE IF EXISTS `tbl_service_details`;
CREATE TABLE `tbl_service_details` (
  `ID` int(11) NOT NULL,
  `ServiceTypeID` varchar(300) NOT NULL,
  `SubService` varchar(1000) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `CoverImage` varchar(1000) NOT NULL,
  `Image2` varchar(1000) NOT NULL,
  `Image3` varchar(1000) NOT NULL,
  `Image4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service_details`
--

INSERT INTO `tbl_service_details` (`ID`, `ServiceTypeID`, `SubService`, `Description`, `CoverImage`, `Image2`, `Image3`, `Image4`) VALUES
(1, '1', 'Bridges', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results', 'assets/img/services/1/Bridges.jpg', 'assets/img/services/1/Bridges.jpg', 'assets/img/services/1/Bridges.jpg', 'assets/img/services/1/Bridges.jpg'),
(2, '1', 'Plants and Building Complexes', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results', 'assets/img/services/1/plantsandbuiding.jpg', 'assets/img/services/1/plantsandbuiding.jpg', 'assets/img/services/1/plantsandbuiding.jpg', 'assets/img/services/1/plantsandbuiding.jpg'),
(3, '1', 'Water Tanks and Piping Systems', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/1/watertankspiping.jpg', 'assets/img/services/1/watertankspiping.jpg', 'assets/img/services/1/watertankspiping.jpg', 'assets/img/services/1/watertankspiping.jpg'),
(4, '2', 'REHABILITATION OF IRRIGATION SYSTEMS', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/2/sluicegates.jpg', 'assets/img/services/2/sluicegates.jpg', 'assets/img/services/2/sluicegates.jpg', 'assets/img/services/2/sluicegates.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_menu`
--

DROP TABLE IF EXISTS `tbl_service_menu`;
CREATE TABLE `tbl_service_menu` (
  `ID` int(11) NOT NULL,
  `ServiceType` varchar(300) NOT NULL,
  `Description1` varchar(5000) NOT NULL,
  `Description2` varchar(5000) NOT NULL,
  `imagePath` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service_menu`
--

INSERT INTO `tbl_service_menu` (`ID`, `ServiceType`, `Description1`, `Description2`, `imagePath`) VALUES
(1, 'GENERAL INFRASTRUCTURE', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/1/generalInfra.jpg'),
(2, 'IRRIGATION', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/2/DSC05952.jpg'),
(3, 'PETROCHEMICAL', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/3/petro-banner.jpg'),
(4, 'POWER AND ENERGY', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/4/power-energy-banner.jpg'),
(5, 'LAND/ WATER BASED CARRIAGES', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/5/DSCN2940.jpg'),
(6, 'HEAVY STRUCTURES', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/6/HEAVY-STRUCTURE-banner.jpg'),
(7, 'SLOPE STABILIZATION', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/7/SLOPE-STABILIZATION-banner.jpg'),
(8, 'CONCRETE STRUCTURE RESTORATION', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/8/CONCRETE-STRUCTURE-RESTORATION-banner.jpg'),
(9, 'SPECIALISED ENGINEERING', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.\r\n\r\n', 'assets/img/services/9/SPECIALIZED-ENGINEERING-banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

DROP TABLE IF EXISTS `tbl_testimonial`;
CREATE TABLE `tbl_testimonial` (
  `ID` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Designation` varchar(300) NOT NULL,
  `Feedback` varchar(3000) NOT NULL,
  `Profile` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`ID`, `Name`, `Designation`, `Feedback`, `Profile`) VALUES
(1, 'Michael Holz', 'Web Developer / DevCorp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.', 'assets/img/testimonials/testimonials-3.jpg'),
(2, 'Michael Holz', 'Web Developer / DevCorp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.', 'assets/img/testimonials/testimonials-3.jpg'),
(3, 'Michael Holz', 'Web Eng / DevCorp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.', 'assets/img/testimonials/testimonials-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vacancy_insert`
--

DROP TABLE IF EXISTS `tbl_vacancy_insert`;
CREATE TABLE `tbl_vacancy_insert` (
  `ID` int(11) NOT NULL,
  `VacancyName` varchar(100) NOT NULL,
  `VacDescription` varchar(1000) NOT NULL,
  `ImagePath` varchar(500) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vacancy_insert`
--

INSERT INTO `tbl_vacancy_insert` (`ID`, `VacancyName`, `VacDescription`, `ImagePath`, `Status`) VALUES
(1, 'Software Engineer', 'Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting. Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting. Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting.\r\n', 'assets\\img\\dges_img\\career2.jpg', 'Active'),
(2, 'Network Engineer - Intern', 'Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting. Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting. Master 315 is a stylish and practical stick welding machine, that guarantees optimal welding performance and fast parameter setting.\r\n', 'assets/img/dges_img/careers1.png', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_mgt`
--
ALTER TABLE `tbl_admin_mgt`
  ADD PRIMARY KEY (`ID`,`email`);

--
-- Indexes for table `tbl_career_login`
--
ALTER TABLE `tbl_career_login`
  ADD PRIMARY KEY (`ID`,`nic`);

--
-- Indexes for table `tbl_career_maindetails`
--
ALTER TABLE `tbl_career_maindetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_career_qualifications`
--
ALTER TABLE `tbl_career_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_career_referees`
--
ALTER TABLE `tbl_career_referees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_career_upload`
--
ALTER TABLE `tbl_career_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_header_image`
--
ALTER TABLE `tbl_header_image`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_home_page`
--
ALTER TABLE `tbl_home_page`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_kempiproducts`
--
ALTER TABLE `tbl_kempiproducts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_service_details`
--
ALTER TABLE `tbl_service_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_service_menu`
--
ALTER TABLE `tbl_service_menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_vacancy_insert`
--
ALTER TABLE `tbl_vacancy_insert`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_mgt`
--
ALTER TABLE `tbl_admin_mgt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_career_maindetails`
--
ALTER TABLE `tbl_career_maindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_career_qualifications`
--
ALTER TABLE `tbl_career_qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_career_referees`
--
ALTER TABLE `tbl_career_referees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_career_upload`
--
ALTER TABLE `tbl_career_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_header_image`
--
ALTER TABLE `tbl_header_image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home_page`
--
ALTER TABLE `tbl_home_page`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kempiproducts`
--
ALTER TABLE `tbl_kempiproducts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service_details`
--
ALTER TABLE `tbl_service_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_service_menu`
--
ALTER TABLE `tbl_service_menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_vacancy_insert`
--
ALTER TABLE `tbl_vacancy_insert`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
