-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2020 at 10:07 AM
-- Server version: 10.2.36-MariaDB
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
-- Database: `qcojuqqf_insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `about-us`
--

CREATE TABLE `about-us` (
  `about_id` int(11) NOT NULL,
  `about_desc` text NOT NULL,
  `about_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about-us`
--

INSERT INTO `about-us` (`about_id`, `about_desc`, `about_date`) VALUES
(1, '<div class=\"container my-3 p-5\">\r\n<h1 style=\"text-align:center\"><span style=\"color:#7f8c8d\">Who We Are?</span></h1>\r\n\r\n<p>Tirupati Insurance has been serving families and businesses across Haryana for over 10 Years with the motto of providing coverage to customers according to their needs and portfolio. We have years of experience in creating customized solutions for our Health Insurance, Motor Insurance, and Business insurance for our clients.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As Tirupati Insurance we worked with lots of Individuals and business in Hisar, Bhiwani, Sirsa, and Delhi over the years, we&rsquo;ve developed a personal approach that allows us to design coverage that fits your unique needs. Our Personal approaches and commitment of our staff have to lead us to many company awards including being named best performer of the year for five consecutive years</p>\r\n\r\n<p>As we are an independent agency our priority is you &ndash; not the insurance company. We are working with many different insurance companies that offer a variety of plans and coverage. Our expert advice will help you to find the right policy and coverage according to your needs and budget. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"color:#7f8c8d\">What we do?</span></h1>\r\n\r\n<p>Smart Insurance starts with an expert who understands your needs in every aspect according to your portfolio. As one of the largest insurance agencies in Haryana. We as Tirupati Insurance Broking Services built innovative solutions for the toughest risk management challenges. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Tirupati Insurance believes the client&rsquo;s financial security and their healthy lifestyle deserve dedication, expert advice, and personal attention from an expert. We as your insurance advisor. We help you to make the smart choice &ndash; protecting you from unexpected financial losses</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"color:#7f8c8d\">Mission </span></h1>\r\n\r\n<p>We at Tirupati Insurance broking services are committed to providing highly personalized insurance coverage to our customers at reasonable prices and in an efficient and accurate manner. We are committed to managing the unexpected risks that arise in everyday life. We are guided by the highest standard of integrity and professionalism so you can sure that our expert advice will help you obtain the best insurance coverage for your unique needs in the right amount at a price that fits your budget &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\">&nbsp;</h2>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"color:#7f8c8d\">Why We? </span></h1>\r\n\r\n<ul>\r\n	<li><strong>Choice</strong> &ndash; As An independent insurance agency we have a great relationship with many reputable insurance companies giving you the power of choice</li>\r\n	<li><strong>Expertise</strong> &ndash; our Insurance advisors have years of experience in the insurance industry and serve as your advocate from selecting coverage through filing a claim</li>\r\n	<li><strong>Service</strong>- Our Insurance advisors have a strong passion for insurance and protecting what you value most I business and in life. We treat our customers like family.</li>\r\n</ul>\r\n</div>\r\n', '2020-06-06 10:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `admin_refer`
--

CREATE TABLE `admin_refer` (
  `id` int(11) NOT NULL,
  `refer_id` varchar(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `isu_date` varchar(50) NOT NULL,
  `ref_date` varchar(50) NOT NULL,
  `poli_no` varchar(100) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `number` varchar(11) NOT NULL,
  `company` varchar(200) NOT NULL,
  `pro_type` varchar(200) NOT NULL,
  `sub_clas` varchar(200) NOT NULL,
  `Vhichel_name` varchar(200) NOT NULL,
  `registration_no` int(200) NOT NULL,
  `registration_date` varchar(50) NOT NULL,
  `due_date` varchar(50) NOT NULL,
  `money` varchar(50) NOT NULL,
  `insurance_type` varchar(100) NOT NULL DEFAULT 'No Record',
  `total_premium` varchar(100) NOT NULL DEFAULT 'No Record',
  `premium_paid` varchar(100) NOT NULL DEFAULT 'No Record',
  `gross` int(100) NOT NULL,
  `payment_meth` varchar(300) NOT NULL,
  `discount` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_refer`
--

INSERT INTO `admin_refer` (`id`, `refer_id`, `invoice_no`, `isu_date`, `ref_date`, `poli_no`, `reference`, `email`, `number`, `company`, `pro_type`, `sub_clas`, `Vhichel_name`, `registration_no`, `registration_date`, `due_date`, `money`, `insurance_type`, `total_premium`, `premium_paid`, `gross`, `payment_meth`, `discount`, `date`) VALUES
(50, '5f9c589db5242', 1, '16/11/2020', 'himanshu Goyal', '5435345', 'Himanshu Goyal', 'himanshugoyal1591998@gmail.com', '8905366876', 'ehgbr', 'errfee', 'fesdfz', 'efsdsdf', 45345, '45435', '435345', '4555555555554444444', 'dfdfdd', '3333333333333', '555555', 4444, 'vcfgc', '100%', '2020-11-16 22:29:48'),
(51, '5fa5c65145a2e', 2, '16/11/2020', 'Vidya', '876543', 'Vikas', 'vikaspoonia17@gmail.com', '09254000000', 'Jaipur Fever', 'health Insurance ', 'marine', '5775', 6543, '467', '567u', '100', 'Health Insurance', '10000', '9000', 7654, '366', '46', '2020-11-16 23:05:39'),
(54, '5f9c589db5242', 5, '17/11/2020', 'HIMANSHU', '12558', 'HIMANSHU GOYAL', 'himanshugoyal1591998@gmail.com', '08905366876', 'eniacoder', 'health', 'ndfd', 'gfdgdfg', 22588, '342', '544', '25555', 'health', '10000', '8000', 258, 'debit', '100%', '2020-11-17 08:11:22'),
(55, '5f17c3adcc404', 5, '17/11/2020', 'Vikas', '26885', 'Vikas Poonia', 'vikaspoonia234@gmail.com', '09254000000', 'Jaipur Fever', 'health Insurance ', 'marine', 'Fghb', 569, '467', '56767', '1000', 'Health Insurance', '10000', '8500', 568, 'cash', '46', '2020-11-17 08:12:00'),
(56, '5fb337f673719', 6, '17/11/2020', 'Vikas', '26885', 'Vikas Poonia', 'vikaspoonia234@gmail.com', '09254000000', 'Jaipur Fever', 'health Insurance ', 'marine', 'Fghb', 569, '467', '56767', '1000', 'Health Insurance', '10000', '8500', 568, 'cash', '46', '2020-11-17 08:14:06'),
(57, '5f9c589db5242', 7, '17/11/2020', 'hghgdh', '34234', 'jhgfhg', 'himanshugoyal1591998@gmail.com', '8905366876', 'ghgfhgf', 'gfhytghg', 'hgfhgf', 'ggfhgfh', 4532432, '786586', '6756756', '32432423', 'ghfhfdh', '32432423', '5645435', 33243, '33223', '100%', '2020-11-17 10:54:24'),
(58, '5f9c589db5242', 8, '17/11/2020', 'hghgdh', '43354', 'jhgfhg', 'himanshugoyal1591998@gmail.com', '8905366876', 'ghgfhgf', 'gfhytghg', 'hgfhgf', 'ggfhgfh', 5645645, '786586', '6756756', '5464654', 'ghfhfdh', '32432423', '5645435', 65465, '33223', '100%', '2020-11-17 10:56:25'),
(60, '5f17c3adcc404', 9, '17/11/2020', 'Vikas', '122324', 'vikas', 'vikaspoonia234@gmail.com', '895000000', 'icici', 'health Insurance ', 'marine', 'Fghb', 675432, '67543', '786543', '675', 'bgfg', '8765', '7654', 654, 'cash', '20%', '2020-11-17 12:15:40'),
(61, '5fb372729d810', 10, '17/11/2020', 'deepak', '123456', 'pardeep', 'vikaspoonia234@gmaill.com', '09254000000', 'Jaipur Fever', 'motor', 'misc', 'tractor', 0, '11-17-2020', '21-17-2020', '100', 'motor', '10000', '10000', 10000, 'cash', '46%', '2020-11-17 12:22:57'),
(62, '5fb372729d810', 11, '17/11/2020', 'deepak', '123456', 'pardeep', 'vikaspoonia234@gmail.com', '09254000000', 'Jaipur Fever', 'motor', 'misc', 'tractor', 0, '11-17-2020', '21-17-2020', '100', 'motor', '10000', '10000', 10000, 'cash', '46%', '2020-11-17 12:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `bike_brand`
--

CREATE TABLE `bike_brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_brand`
--

INSERT INTO `bike_brand` (`id`, `brand_name`) VALUES
(4, 'Honda'),
(5, 'Hero');

-- --------------------------------------------------------

--
-- Table structure for table `bike_insurance`
--

CREATE TABLE `bike_insurance` (
  `id` int(11) NOT NULL,
  `registration_no` varchar(250) NOT NULL,
  `maufacturer_id` varchar(11) NOT NULL,
  `modal_id` varchar(11) NOT NULL,
  `fuel_type` varchar(250) NOT NULL,
  `variant_id` varchar(11) NOT NULL,
  `registration_year` varchar(11) NOT NULL,
  `policy_expire` varchar(250) NOT NULL,
  `prev_policy` varchar(250) NOT NULL,
  `prev_insurer` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mob` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_insurance`
--

INSERT INTO `bike_insurance` (`id`, `registration_no`, `maufacturer_id`, `modal_id`, `fuel_type`, `variant_id`, `registration_year`, `policy_expire`, `prev_policy`, `prev_insurer`, `email`, `mob`) VALUES
(13, '342', 'Honda', 'XBlade', 'CNG/LPG Externally Fitted', 'activa', '2001', '11/03/2020', 'w', 'MAGMA', 'him@gmail.com', '8905366876'),
(14, '454', 'Honda', 'XBlade', 'Petrol', 'activa', '2001', '11/03/2020', 'a', 'ICICI Lombard', 'him@gmail.com', '8905366876'),
(15, '54543', 'Hero', 'Splender Pl', 'Petrol', '34534', '1998', '', '', '', 'himanshugoyal1591998@gmail.com', '8905366876');

-- --------------------------------------------------------

--
-- Table structure for table `bike_model`
--

CREATE TABLE `bike_model` (
  `id` int(11) NOT NULL,
  `model_name` varchar(250) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_model`
--

INSERT INTO `bike_model` (`id`, `model_name`, `brand_id`) VALUES
(6, 'Splender Plus', 5),
(9, 'Passion Plus', 5),
(10, 'XBlade', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bike_variant`
--

CREATE TABLE `bike_variant` (
  `id` int(11) NOT NULL,
  `variant_name` varchar(250) NOT NULL,
  `model_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_variant`
--

INSERT INTO `bike_variant` (`id`, `variant_name`, `model_id`, `brand_id`) VALUES
(6, 'activa', 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `brandlogo`
--

CREATE TABLE `brandlogo` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `short_desc` varchar(250) NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandlogo`
--

INSERT INTO `brandlogo` (`id`, `title`, `image`, `short_desc`, `update_date`) VALUES
(7, 'Tata AIA Tirupati Insurance', 'https://tirupatiinsurance.com/upload/brands/media-1603083704.jpg', 'Tata AIA Tirupati Insurance', '0000-00-00 00:00:00'),
(8, 'Icici Lombard TIrupati Hisar', 'https://tirupatiinsurance.com/upload/brands/media-1603086064.jpg', 'ICiCI Lombard Tirupati Hisar', '0000-00-00 00:00:00'),
(9, 'IFFco Insurance Hisar', 'https://tirupatiinsurance.com/upload/brands/media-1603086152.jpg', 'IFFCO Insurance Hisar', '0000-00-00 00:00:00'),
(11, 'SBI General Hisar', 'https://tirupatiinsurance.com/upload/brands/media-1603086436.jpg', 'SBI General Hisar', '0000-00-00 00:00:00'),
(12, 'Digit Insurance Hisar', 'https://tirupatiinsurance.com/upload/brands/media-1603086476.jpg', 'Digit Insurance Hisar', '0000-00-00 00:00:00'),
(13, 'Apollo Munich Hisar', 'https://tirupatiinsurance.com/upload/brands/media-1603086637.jpg', 'Apollo Munich Hisar', '0000-00-00 00:00:00'),
(14, 'HDFC ERgo Hisar', 'https://tirupatiinsurance.com/upload/brands/media-1603088069.jpg', 'HDFC Ergo Hisar', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `call_back`
--

CREATE TABLE `call_back` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `service` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `call_back`
--

INSERT INTO `call_back` (`id`, `name`, `mob`, `service`) VALUES
(11, 'Navneet', '935357375', '1'),
(12, 'Navneet', '935357375', '1'),
(13, 'Navneet', '935357375', '2'),
(14, 'Navneet', '935357375', '1'),
(15, 'Navneet', '935357375', '1'),
(18, 'Navneet', '935357375', '1'),
(19, 'Navneet', '935357375', '1'),
(20, 'Navneet', '935357375', '1'),
(21, 'Navneet', '935357375', '1'),
(22, 'Navneet', '935357375', '2'),
(23, 'Navneet', '935357375', '2'),
(24, 'Navneet', '935357375', '2'),
(25, 'Navneet', '935357375', '2'),
(26, 'Navneet', '935357375', '1'),
(27, 'Navneet', '935357375', '2'),
(28, 'Navneet', '935357375', '2'),
(29, 'Navneet', '935357375', '1'),
(30, 'Navneet1', '935357375', '4'),
(31, 'Navneet1', '935357375', '4'),
(32, 'Navneet1', '935357375', '4'),
(33, 'Navneet1', '935357375', '4'),
(34, 'Navneet1', '935357375', '4'),
(36, 'Navneet1', '935357375', '4'),
(39, 'Navneet', '935357375', '1'),
(40, 'Navneet', '935357375', '2'),
(41, 'Navneet', '935357375', '2'),
(42, 'Navneet', '935357375', '2'),
(43, 'Navneet', '935357375', '2'),
(44, 'Navneet', '935357375', '2'),
(45, 'Navneet', '935357375', '3'),
(47, 'Navneet', '935357375', '4'),
(48, 'Navneet', '935357375', '2'),
(49, 'Navneet', '935357375', '2'),
(50, 'Navneet', '935357375', '1'),
(51, 'Navneet', '935357375', '1'),
(52, 'Navneet', '935357375', '3'),
(53, 'Navneet', '935357375', '1'),
(54, 'Navneet', '935357375', '1'),
(55, 'Navneet', '935357375', '4');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `number` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `experiance` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`, `number`, `email`, `experiance`, `position`, `location`, `file`) VALUES
(13, 'HIMANSHU GOYAL', '8905366876', 'him@gmail.com', '2yr', 'developer', 'jaipur', 'https://tirupatiinsurance.com/upload/career/resume-1605153650.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `car_brand`
--

CREATE TABLE `car_brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_brand`
--

INSERT INTO `car_brand` (`id`, `brand_name`) VALUES
(40, 'Maruti');

-- --------------------------------------------------------

--
-- Table structure for table `car_insurance`
--

CREATE TABLE `car_insurance` (
  `id` int(11) NOT NULL,
  `registration_no` varchar(250) NOT NULL,
  `maufacturer_id` varchar(50) NOT NULL,
  `modal_id` varchar(50) NOT NULL,
  `fuel_type` varchar(250) NOT NULL,
  `variant_id` varchar(50) NOT NULL,
  `registration_year` varchar(50) NOT NULL,
  `policy_expire` varchar(11) NOT NULL,
  `prev_policy` varchar(250) NOT NULL,
  `prev_insurer` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mob` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_insurance`
--

INSERT INTO `car_insurance` (`id`, `registration_no`, `maufacturer_id`, `modal_id`, `fuel_type`, `variant_id`, `registration_year`, `policy_expire`, `prev_policy`, `prev_insurer`, `email`, `mob`) VALUES
(113, 'hhhh', 'Maruti', 'hjvjh', 'CNG/LPG Externally Fitted', 'khg', '2001', '11/11/2020', 'Third Party', 'MAGMA', 'himanshugoyal1591998@gmail.com', '8905366876'),
(114, 'hhhh', 'Maruti', 'dfd', 'Petrol', 'khg', '1999', '', '', '', 'himanshugoyal1591998@gmail.com', '8905366876');

-- --------------------------------------------------------

--
-- Table structure for table `car_model`
--

CREATE TABLE `car_model` (
  `id` int(11) NOT NULL,
  `model_name` varchar(250) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_variant`
--

CREATE TABLE `car_variant` (
  `id` int(11) NOT NULL,
  `variant_name` varchar(250) NOT NULL,
  `model_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `ins_pack` varchar(250) NOT NULL,
  `ins` varchar(250) NOT NULL,
  `text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `tel`, `ins_pack`, `ins`, `text`) VALUES
(27, 'HIMANSHU GOYAL', 'him@gmail.com', '8385902167', 'y556', '1', 'gfhfghfgh');

-- --------------------------------------------------------

--
-- Table structure for table `health_insurance`
--

CREATE TABLE `health_insurance` (
  `id` int(11) NOT NULL,
  `adults_num` int(11) NOT NULL,
  `kid_num` int(11) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `f_dob` varchar(11) NOT NULL,
  `s_dob` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_insurance`
--

INSERT INTO `health_insurance` (`id`, `adults_num`, `kid_num`, `mob`, `email`, `f_dob`, `s_dob`) VALUES
(69, 2, 2, '09254000000', 'vikaspoonia17@gmail.com', '10/16/2020', '10/15/2020'),
(71, 2, 2, '09254000000', 'vikaspoonia17@gmail.com', '05/14/2002', '10/07/2020'),
(72, 2, 2, '09254000000', 'vikaspoonia234@gmail.com', '04/16/2012', '03/05/2012'),
(73, 2, 2, '08963006098', 'rc13977@gmail.com', '10/22/2020', '05/23/2019'),
(74, 2, 2, '08905366876', 'HIMANSHUGOYAL1011@GMAIL.COM', '10/30/2020', '10/14/2020'),
(76, 1, 2, '09254000000', 'vikaspoonia17@gmail.com', '10/19/2020', ''),
(77, 2, 2, '08963006098', 'rc13977@gmail.com', '05/01/2020', '04/01/2020'),
(78, 1, 1, '8905366876', 'him@gmail.com', '11/16/2010', ''),
(79, 1, 1, '8905366876', 'goyal@gmail.com', '11/10/2020', ''),
(80, 2, 2, '09254000000', 'vikaspoonia234@gmail.com', '11/02/2020', '11/02/2020'),
(81, 2, 2, '8905366876', 'him@gmail.com', '11/02/2020', '21/12/2020');

-- --------------------------------------------------------

--
-- Table structure for table `houdinv_social_links`
--

CREATE TABLE `houdinv_social_links` (
  `social_id` int(200) NOT NULL,
  `twitter_url` varchar(250) NOT NULL,
  `facebook_url` varchar(250) NOT NULL,
  `youtube_url` varchar(250) NOT NULL,
  `instagram_url` varchar(250) NOT NULL,
  `pinterest_url` varchar(250) NOT NULL,
  `linkedin_url` varchar(250) NOT NULL,
  `date_time` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houdinv_social_links`
--

INSERT INTO `houdinv_social_links` (`social_id`, `twitter_url`, `facebook_url`, `youtube_url`, `instagram_url`, `pinterest_url`, `linkedin_url`, `date_time`) VALUES
(1, 'www.twitter.com', 'www.facebook.com/tirupatiinsurance/', 'www.youtube.com', '', '', 'www.linkedin.com', '1593053665');

-- --------------------------------------------------------

--
-- Table structure for table `houdinv_staff_management`
--

CREATE TABLE `houdinv_staff_management` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_contact_number` varchar(250) NOT NULL,
  `staff_department` varchar(250) NOT NULL,
  `staff_status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `staff_warehouse` int(11) NOT NULL,
  `staff_email` varchar(250) NOT NULL,
  `staff_password` varchar(250) DEFAULT NULL,
  `staff_password_salt` varchar(150) DEFAULT NULL,
  `staff_alternat_contact` varchar(250) DEFAULT NULL,
  `staff_address` longtext NOT NULL,
  `password_send` varchar(250) DEFAULT NULL,
  `houdinv_staff_auth_token` varchar(255) NOT NULL,
  `houdinv_staff_auth_url_token` varchar(255) NOT NULL,
  `create_date` varchar(200) NOT NULL,
  `update_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houdinv_staff_management`
--

INSERT INTO `houdinv_staff_management` (`staff_id`, `staff_name`, `staff_contact_number`, `staff_department`, `staff_status`, `image`, `staff_warehouse`, `staff_email`, `staff_password`, `staff_password_salt`, `staff_alternat_contact`, `staff_address`, `password_send`, `houdinv_staff_auth_token`, `houdinv_staff_auth_url_token`, `create_date`, `update_date`) VALUES
(2, 'Vikas', '', 'Account', 1, 'https://tirupatiinsurance.com/upload/profilepic/image-1604151784.jpg', 4, 'vikaspoonia17@gmail.com', '$2y$10$Ty9vulmZdDgZCGQQx/uAZelDoOjfVAT9txdH3x7OQdyOiFur7YIBi', '$2y$10$Ty9vulmZdDgZCGQQx/uAZeoz56Z8s00CVLjag8KvhpZQDsWdbAnQO', '', '\\', 'email', 'Kv8sDw', 'Kv8sDw', '1532432610', '1604151997'),
(3, 'Vikas', '', '', 1, 'https://tirupatiinsurance.com/upload/profilepic/image-1604151784.jpg', 1, 'vikaspoonia17@gmail.com', '$2y$10$Ty9vulmZdDgZCGQQx/uAZelDoOjfVAT9txdH3x7OQdyOiFur7YIBi', '$2y$10$Ty9vulmZdDgZCGQQx/uAZeoz56Z8s00CVLjag8KvhpZQDsWdbAnQO', NULL, '', NULL, '', '', '', '1604151997'),
(10, 'Vikas', '', 'Account', 1, 'https://tirupatiinsurance.com/upload/profilepic/image-1604151784.jpg', 1, 'vikaspoonia17@gmail.com', '$2y$10$Ty9vulmZdDgZCGQQx/uAZelDoOjfVAT9txdH3x7OQdyOiFur7YIBi', '$2y$10$Ty9vulmZdDgZCGQQx/uAZeoz56Z8s00CVLjag8KvhpZQDsWdbAnQO', NULL, '', NULL, '', '', '', '1604151997');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_type`
--

CREATE TABLE `insurance_type` (
  `id` int(11) NOT NULL,
  `insurance` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance_type`
--

INSERT INTO `insurance_type` (`id`, `insurance`) VALUES
(1, 'Health Insurance'),
(2, 'Term Insurance'),
(3, 'Car Insurance'),
(4, 'Bike Insurance'),
(5, 'Travel Insurance');

-- --------------------------------------------------------

--
-- Table structure for table `invite`
--

CREATE TABLE `invite` (
  `id` int(11) NOT NULL,
  `f_name` varchar(300) NOT NULL,
  `f_email` varchar(300) NOT NULL,
  `f_number` varchar(11) NOT NULL,
  `city` varchar(300) NOT NULL,
  `c_number` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invite`
--

INSERT INTO `invite` (`id`, `f_name`, `f_email`, `f_number`, `city`, `c_number`) VALUES
(39, 'himanshu', 'himanshgoyal1010@gmail.com', '787', 'dfhghfg', '77'),
(40, 'rt', 'himanshgoyal1010@gmail.com', '55', 'dfhghfg', '54');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `referid` varchar(500) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `number` varchar(11) NOT NULL,
  `ins_type` varchar(150) NOT NULL,
  `t_pre` int(100) NOT NULL,
  `paid_pre` int(100) NOT NULL,
  `money` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `referid`, `name`, `email`, `number`, `ins_type`, `t_pre`, `paid_pre`, `money`) VALUES
(1, '5f67276fd8c8a', 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '0909090900', 'health', 10000, 8000, 25555),
(2, '5eea0355e0269', 'Vikas', 'vikaspoonia17@gmail.com', '09254000000', 'Health Insurance', 10000, 9000, 100),
(3, '5eec2109807b6', 'Vikas', 'vikaspoonia17@gmail.com', '09254000000', 'Health Insurance', 10000, 9000, 100),
(4, '5f67276fd8c8a', 'Vikas', 'vikaspoonia17@gmail.com', '09254000000', 'Health Insurance', 10000, 9000, 100),
(5, '5f67276fd8c8a', 'Vikas', 'vikaspoonia17@gmail.com', '09254000000', 'Health Insurance', 10000, 9000, 100),
(6, '5f67276fd8c8a', 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '456', 'health', 10000, 8000, 25555),
(7, '5f67276fd8c8a', 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '7655776576', 'health', 10000, 8000, 25555);

-- --------------------------------------------------------

--
-- Table structure for table `kelam_gallery`
--

CREATE TABLE `kelam_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `short_desc` varchar(250) DEFAULT NULL,
  `update_date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelam_gallery`
--

INSERT INTO `kelam_gallery` (`id`, `title`, `image`, `short_desc`, `update_date`) VALUES
(40, 'dnc iozd', '', 'desc', '1590404572'),
(41, 'dnc iozd', 'http://localhost/insurance/../upload/brands/media-1590404920.jpg', 'desc', '1590404920'),
(42, 'dcfv ', 'http://localhost/insurance/../upload/brands/media-1590404989.jpg', 'dvcf', '1590404989'),
(43, 'dnc iozd', 'http://localhost/insurance/upload/brands/media-1590405341.jpg', 'nuihio', '1590405341'),
(44, 'noino', 'http://localhost/insurance/upload/brands/media-1590405356.jpg', 'nuihio', '1590405356'),
(45, 'dnc iozd', 'http://localhost/insurance/upload/brands/media-1590405385.png', 'nuihibgbo', '1590405385');

-- --------------------------------------------------------

--
-- Table structure for table `new_carpolicy`
--

CREATE TABLE `new_carpolicy` (
  `new_policyId` int(11) NOT NULL,
  `menufacture_name` varchar(100) NOT NULL,
  `manufature_modal` varchar(100) NOT NULL,
  `manufacture_varient` varchar(100) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `registration_year` varchar(30) NOT NULL,
  `policy_expire` varchar(100) NOT NULL,
  `new_policyDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referandearn`
--

CREATE TABLE `referandearn` (
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(11) NOT NULL,
  `addrs` varchar(800) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `referid` varchar(500) NOT NULL,
  `earn` int(200) NOT NULL,
  `ref_count` int(11) NOT NULL,
  `bank_acc` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `acc_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referandearn`
--

INSERT INTO `referandearn` (`email`, `name`, `number`, `addrs`, `Password`, `referid`, `earn`, `ref_count`, `bank_acc`, `ifsc`, `acc_name`) VALUES
('56be3f8aa6f7b28d3c304a8cdb84d42aprx@ssemarketing.net', 'virfyreqfr', '', '', 'n6Lr1Hy2Gx', '5fa5c65145a2e', 0, 0, 'Not Available', 'Not Available', 'Not Available'),
('a@gmail.com', 'bug', '', '', '1234', '5f67276fd8c8a', 0, 0, '56', 'feewr121', 'himanshu'),
('aliciasnyder.sc.139932827@mojorage.life', 'alicia snyder', '', '', 'alicia snyder', '5f1a785a446cb', 0, 0, '56', 'feewr121', 'himanshu'),
('amelieorr.sc.39755695@mojorage.life', 'amelie orr', '', '', 'amelie orr', '5f82c93c581b0', 0, 0, '56', 'feewr121', 'himanshu'),
('anshus2085@gmail.com', 'anshu saxena', '', '', 'anshu151995', '5f17c3adcc404', 0, 0, '56', 'feewr121', 'himanshu'),
('beemabazarsirsa@gmail.com', 'HARSH', '', '', 'Bima@8055', '5f1263d7c3b05', 0, 0, '56', 'feewr121', 'himanshu'),
('bimajarurihai@gmail.com', 'rohit', '', '', 'tirupati@123', '5fb372729d810', 0, 0, 'Not Available', 'Not Available', 'Not Available'),
('e54925ff023024740b9d1cf2623f019bprx@ssemarketing.net', 'vzvpottkir', '', '', 'w5Wg5Bc6Ay', '5fac6c888900f', 0, 0, 'Not Available', 'Not Available', 'Not Available'),
('eniacoder@gmail.com', 'Eniacoder website Design', '', '', '1234', '5f92de9e92011', 0, 0, '56', 'feewr121', 'himanshu'),
('erinpennington.sc.635508205@mojorage.life', 'erin pennington', '', '', 'erin pennington', '5f2d0a804b7cc', 0, 0, '56', 'feewr121', 'himanshu'),
('H@GMAIL.COM', 'HIMANSHU GOYAL', '', '', '1234', '5fb06610bb5d6', 0, 0, 'Not Available', 'Not Available', 'Not Available'),
('him@gmail.com', 'bug', '8905366876', 'fgfdg', '', '', 0, 0, '56', 'feewr121', 'himanshu'),
('himanshugoyal1011@gmail.com', 'HIMANSHU GOYAL', '890536687', 'alwar', '123', '5ee4c79ba8287', 0, 0, '56', 'feewr121', 'himanshu'),
('himanshugoyal1591998@gmail.com', 'HIMANSHU GOYAL', '8905366876', 'uyt6yfy', '1234', '5f9c589db5242', 0, 0, '45', 'kkbk', 'himanshu'),
('jsranahsr@gmail.com', 'Jagdish', '', '', 'tirupati', '5eec2109807b6', 0, 0, '56', 'feewr121', 'himanshu'),
('navneetsingh94600@gmail.com', 'Navneet ', '', '', '@navneet1', '5ee4c3039e5a4', 0, 0, '56', 'feewr121', 'himanshu'),
('roselynwalters.sc.698623272@mojorage.life', 'roselyn walters', '', '', 'roselyn walters', '5efb63b3579fc', 0, 0, '56', 'feewr121', 'himanshu'),
('vikaspoonia17@gmail.com', 'Vikas', '', '', 'Vikas@123', '5ee576c492472', 0, 0, '56', 'feewr121', 'himanshu'),
('vikaspoonia2344@gmail.com', 'vikas1', '', '', 'vikas@123', '5fb2b73134fc1', 0, 0, 'Not Available', 'Not Available', 'Not Available'),
('vikaspoonia234@gmail.com', 'Vikas', '', '', 'vikas@123', '5fb337f673719', 0, 0, 'Not Available', 'Not Available', 'Not Available'),
('vikaspoonia234@gmaill.com', 'Vikas1', '', '', 'Vikas@123', '5eea0355e0269', 0, 0, '56', 'feewr121', 'himanshu');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `logo`, `heading`, `description`) VALUES
(3, 'image-1590809629.jpg', 'Tirupati Insurance', '<p>We are leading Insurance agency </p>');

-- --------------------------------------------------------

--
-- Table structure for table `term_insurance`
--

CREATE TABLE `term_insurance` (
  `id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `income` varchar(150) NOT NULL,
  `education` varchar(250) NOT NULL,
  `amount` varchar(150) NOT NULL,
  `m_condition` varchar(150) NOT NULL,
  `number` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term_insurance`
--

INSERT INTO `term_insurance` (`id`, `gender`, `age`, `occupation`, `income`, `education`, `amount`, `m_condition`, `number`, `email`) VALUES
(11, 'male', 19, 'Salaried', '10 Lakh', '10th Pass', '1 crore', 'Yes', '8905366876', 'himanshugoyal1591998@gmail.com'),
(6, 'female', 28, 'Salaried', '13 Lakh', '12th Pass', '1+ crore', 'male', '', ''),
(7, 'female', 19, 'Salaried', '9 Lakh', '10th Pass', '60 lakh', 'Yes', '', ''),
(9, 'male', 26, 'Salaried', '12 Lakh', '10th Pass', '1 crore', 'Yes', '8905366876', 'him@gmail.com'),
(10, 'female', 18, 'Self Employed', '6 Lakh', 'Post Graduate & above', '40 lakh', 'No', '08963006098', 'rc13977@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `a_number` varchar(100) NOT NULL,
  `a_ifsc` varchar(100) NOT NULL,
  `h_name` varchar(300) NOT NULL,
  `amount` int(100) NOT NULL,
  `account_status` varchar(500) NOT NULL,
  `account_date` varchar(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `email`, `a_number`, `a_ifsc`, `h_name`, `amount`, `account_status`, `account_date`) VALUES
(2, 'himanshugoyal1591998@gmail.com', '54', 'KKBK000', 'hhh', 45, 'Pending', '2147483647'),
(3, 'himanshugoyal1591998@gmail.com', '789', '778', 'hubb', 7887, 'Transfer', '2020-11-02 '),
(4, 'himanshugoyal1591998@gmail.com', '454', '2ewedd', 'himanshu goyal', 54, 'Transfer', '2020-11-06 '),
(5, 'himanshugoyal1591998@gmail.com', '555', '2ewedd', 'himanshu goyal', 6677, 'Transfer', '2020-11-06 '),
(6, 'himanshugoyal1591998@gmail.com', '4545', '2ewedd', 'himanshu goyal', 44, 'Transfer', '2020-11-06 '),
(7, 'vikaspoonia234@gmaill.com', '48390001000900', 'PUNB0483900', 'VIKAS', 500, 'Pending', '2020-11-06 '),
(8, 'himanshugoyal1591998@gmail.com', '3424', 'KKBK000', 'hhh', 5454, 'Transfer', '2020-11-06 '),
(9, 'himanshugoyal1591998@gmail.com', '6554', 'KKBK000', 'hhh', 555, 'Transfer', '2020-11-06 '),
(10, 'himanshugoyal1591998@gmail.com', '4543', 'KKBK000', '21321', 455, 'Transfer', '2020-11-06 '),
(11, 'vikaspoonia234@gmaill.com', '483900010009007', 'ounb0278', 'vikas', 288, 'Transfer', '2020-11-06 '),
(12, 'himanshugoyal1591998@gmail.com', '232', '2ewedd', 'himanshu goyal', 22, 'Transfer', '2020-11-08 '),
(13, 'himanshugoyal1591998@gmail.com', '3232', '2ewedd', 'himanshu goyal', 322, 'Transfer', '2020-11-14 '),
(14, 'himanshugoyal1591998@gmail.com', '232', 'KKBK000', '21321', 43434, 'Pending', '2020-11-15 ');

-- --------------------------------------------------------

--
-- Table structure for table `travel_insurance`
--

CREATE TABLE `travel_insurance` (
  `id` int(11) NOT NULL,
  `destination` varchar(250) NOT NULL,
  `s_trip` varchar(11) NOT NULL,
  `e_trip` varchar(11) NOT NULL,
  `traveler` int(11) NOT NULL,
  `f_traveler` int(11) NOT NULL,
  `s_traveler` int(11) NOT NULL,
  `th_traveler` int(11) NOT NULL,
  `fo_traveler` int(11) NOT NULL,
  `five_traveler` int(11) NOT NULL,
  `six_traveler` int(11) NOT NULL,
  `number` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_insurance`
--

INSERT INTO `travel_insurance` (`id`, `destination`, `s_trip`, `e_trip`, `traveler`, `f_traveler`, `s_traveler`, `th_traveler`, `fo_traveler`, `five_traveler`, `six_traveler`, `number`, `email`) VALUES
(2, 'dellhi', '10/15/2020', '10/20/2020', 1, 22, 22, 0, 0, 0, 0, '0', ''),
(3, 'dellhi', '10/15/2020', '10/20/2020', 1, 22, 22, 0, 0, 0, 0, '0', ''),
(4, 'dellhi', '10/15/2020', '10/20/2020', 1, 22, 22, 0, 0, 0, 0, '0', ''),
(5, 'dellhi', '10/15/2020', '10/20/2020', 1, 22, 22, 0, 0, 0, 0, '0', ''),
(6, 'dellhi', '10/15/2020', '10/20/2020', 1, 22, 22, 0, 0, 0, 0, '0', ''),
(34, 'Austrian Empire', '11/02/2020', '11/11/2020', 6, 22, 11, 33, 33, 66, 44, '8905366876', 'himanshugoyal1591998@gmail.com'),
(12, 'goa', '10/14/2020', '10/31/2020', 2, 21, 22, 0, 0, 0, 0, '0', ''),
(18, 'goa', '10/14/2020', '10/14/2020', 2, 12, 21, 0, 0, 0, 0, '0', ''),
(14, 'amh', '04/21/2011', '10/11/2020', 2, 22, 22, 0, 0, 0, 0, '0', ''),
(19, 'goa', '10/14/2020', '10/14/2020', 2, 13, 12, 0, 0, 0, 0, '0', ''),
(16, 'Macao', '10/06/2020', '10/21/2020', 2, 12, 12, 0, 0, 0, 0, '0', ''),
(35, 'Afghanista', '10/15/2020', '10/15/2020', 6, 10, 1, 2, 22, 22, 4, '8905366876', 'him@gmail.com'),
(20, 'fdgh', '10/14/2020', '10/14/2020', 2, 12, 22, 0, 0, 0, 0, '0', ''),
(21, 'fdgh', '10/14/2020', '10/14/2020', 2, 12, 22, 0, 0, 0, 0, '0', ''),
(22, 'goa', '10/14/2020', '10/14/2020', 2, 22, 32, 0, 0, 0, 0, '0', ''),
(25, 'fdgh', '10/07/2020', '10/15/2020', 2, 1, 2, 0, 0, 0, 0, '0', ''),
(26, 'Macao', '07/14/2011', '10/15/2020', 2, 12, 24, 0, 0, 0, 0, '0', ''),
(27, 'Afghanistan', '10/15/2020', '10/15/2020', 1, 22, 0, 0, 0, 0, 0, '0', ''),
(28, 'Antigua and Barbuda', '10/15/2020', '10/15/2020', 1, 22, 0, 0, 0, 0, 0, '2147483647', 'him@gmail.com'),
(29, 'Antigua and Barbuda', '10/15/2020', '10/15/2020', 1, 23, 0, 0, 0, 0, 0, '8905366876', 'him@gmail.com'),
(30, 'Albania', '10/15/2020', '10/15/2020', 6, 12, 21, 22, 33, 23, 43, '8905366876', 'him@gmail.com'),
(31, 'Australia', '10/14/2020', '10/19/2020', 2, 24, 22, 0, 0, 0, 0, '09254000000', 'vikaspoonia17@gmail.com'),
(32, 'India', '10/14/1985', '10/02/2019', 2, 25, 21, 0, 0, 0, 0, '09254000000', 'vikaspoonia234@gmaill.com');

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2020-10-23 14:39:53', '2020-10-23 14:39:53', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'https://tirupatiinsurance.com/blog', 'yes'),
(2, 'home', 'https://tirupatiinsurance.com/blog', 'yes'),
(3, 'blogname', 'Blogs', 'yes'),
(4, 'blogdescription', 'Just another WordPress site', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'vikaspoonia17@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/index.php/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:79:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:42:\"index.php/feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:37:\"index.php/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:18:\"index.php/embed/?$\";s:21:\"index.php?&embed=true\";s:30:\"index.php/page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:51:\"index.php/comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:46:\"index.php/comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:27:\"index.php/comments/embed/?$\";s:21:\"index.php?&embed=true\";s:54:\"index.php/search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:49:\"index.php/search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:30:\"index.php/search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:42:\"index.php/search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:24:\"index.php/search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:57:\"index.php/author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:52:\"index.php/author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:33:\"index.php/author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:45:\"index.php/author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:27:\"index.php/author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:79:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:74:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:55:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:67:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:49:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:66:\"index.php/([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:61:\"index.php/([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:42:\"index.php/([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:54:\"index.php/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:36:\"index.php/([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:53:\"index.php/([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:48:\"index.php/([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:29:\"index.php/([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:41:\"index.php/([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:23:\"index.php/([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:68:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:78:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:98:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:93:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:93:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:74:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:63:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:67:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:87:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:82:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:75:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:82:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:71:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:57:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:67:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:87:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:82:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:82:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:63:\"index.php/[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:74:\"index.php/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:61:\"index.php/([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:48:\"index.php/([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:37:\"index.php/.?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:47:\"index.php/.?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:67:\"index.php/.?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:62:\"index.php/.?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:62:\"index.php/.?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:43:\"index.php/.?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:26:\"index.php/(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:30:\"index.php/(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:50:\"index.php/(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:45:\"index.php/(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:38:\"index.php/(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:45:\"index.php/(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:34:\"index.php/(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:0:{}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'twentytwenty', 'yes'),
(41, 'stylesheet', 'twentytwenty', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '48748', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'posts', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(77, 'widget_text', 'a:0:{}', 'yes'),
(78, 'widget_rss', 'a:0:{}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', '', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '0', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1619015993', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'initial_db_version', '48748', 'yes'),
(96, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(97, 'fresh_site', '0', 'yes'),
(98, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'sidebars_widgets', 'a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:3:{i:0;s:10:\"archives-2\";i:1;s:12:\"categories-2\";i:2;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(104, 'cron', 'a:7:{i:1605620394;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1605623993;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1605623994;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1605624007;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1605624008;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1605969593;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'yes'),
(105, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(123, 'theme_mods_twentytwenty', 'a:1:{s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(115, 'recovery_keys', 'a:0:{}', 'yes'),
(116, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:3:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:7:\"upgrade\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.5.3.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.5.3.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.5.3-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.5.3-new-bundled.zip\";s:7:\"partial\";s:69:\"https://downloads.wordpress.org/release/wordpress-5.5.3-partial-1.zip\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"5.5.3\";s:7:\"version\";s:5:\"5.5.3\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.3\";s:15:\"partial_version\";s:5:\"5.5.1\";}i:1;O:8:\"stdClass\":11:{s:8:\"response\";s:10:\"autoupdate\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.5.3.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.5.3.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.5.3-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.5.3-new-bundled.zip\";s:7:\"partial\";s:69:\"https://downloads.wordpress.org/release/wordpress-5.5.3-partial-1.zip\";s:8:\"rollback\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.5.3-rollback-1.zip\";}s:7:\"current\";s:5:\"5.5.3\";s:7:\"version\";s:5:\"5.5.3\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.3\";s:15:\"partial_version\";s:5:\"5.5.1\";s:9:\"new_files\";s:0:\"\";}i:2;O:8:\"stdClass\":11:{s:8:\"response\";s:10:\"autoupdate\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.5.2.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.5.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.5.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.5.2-new-bundled.zip\";s:7:\"partial\";s:69:\"https://downloads.wordpress.org/release/wordpress-5.5.2-partial-1.zip\";s:8:\"rollback\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.5.2-rollback-1.zip\";}s:7:\"current\";s:5:\"5.5.2\";s:7:\"version\";s:5:\"5.5.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.3\";s:15:\"partial_version\";s:5:\"5.5.1\";s:9:\"new_files\";s:0:\"\";}}s:12:\"last_checked\";i:1605588495;s:15:\"version_checked\";s:5:\"5.5.1\";s:12:\"translations\";a:0:{}}', 'no'),
(437, '_site_transient_timeout_theme_roots', '1605590297', 'no'),
(438, '_site_transient_theme_roots', 'a:3:{s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:12:\"twentytwenty\";s:7:\"/themes\";}', 'no'),
(121, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1605588497;s:7:\"checked\";a:3:{s:14:\"twentynineteen\";s:3:\"1.7\";s:15:\"twentyseventeen\";s:3:\"2.4\";s:12:\"twentytwenty\";s:3:\"1.5\";}s:8:\"response\";a:0:{}s:9:\"no_update\";a:3:{s:14:\"twentynineteen\";a:6:{s:5:\"theme\";s:14:\"twentynineteen\";s:11:\"new_version\";s:3:\"1.7\";s:3:\"url\";s:44:\"https://wordpress.org/themes/twentynineteen/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/theme/twentynineteen.1.7.zip\";s:8:\"requires\";s:5:\"4.9.6\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:15:\"twentyseventeen\";a:6:{s:5:\"theme\";s:15:\"twentyseventeen\";s:11:\"new_version\";s:3:\"2.4\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentyseventeen/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentyseventeen.2.4.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:12:\"twentytwenty\";a:6:{s:5:\"theme\";s:12:\"twentytwenty\";s:11:\"new_version\";s:3:\"1.5\";s:3:\"url\";s:42:\"https://wordpress.org/themes/twentytwenty/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/theme/twentytwenty.1.5.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}}s:12:\"translations\";a:0:{}}', 'no'),
(439, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1605588497;s:7:\"checked\";a:2:{s:19:\"akismet/akismet.php\";s:5:\"4.1.6\";s:9:\"hello.php\";s:5:\"1.7.2\";}s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.1.7\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.1.7.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.5.3\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:1:{s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(407, '_site_transient_php_check_7772753a7ea0fe5c6dd1e8406c9ba6ba', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(406, '_site_transient_timeout_php_check_7772753a7ea0fe5c6dd1e8406c9ba6ba', '1605971079', 'no'),
(145, 'finished_updating_comment_type', '1', 'yes'),
(136, 'can_compress_scripts', '1', 'no'),
(158, '_transient_health-check-site-status-result', '{\"good\":11,\"recommended\":8,\"critical\":1}', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 1, '_edit_lock', '1603464078:1'),
(4, 5, '_wp_attached_file', '2020/10/sitemap.jpg'),
(5, 5, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1920;s:6:\"height\";i:1516;s:4:\"file\";s:19:\"2020/10/sitemap.jpg\";s:5:\"sizes\";a:2:{s:6:\"medium\";a:4:{s:4:\"file\";s:19:\"sitemap-300x237.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:237;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:20:\"sitemap-1024x809.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:809;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(6, 7, '_edit_lock', '1603464301:1'),
(7, 8, '_wp_attached_file', '2020/10/sitemap-1.jpg'),
(8, 8, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1920;s:6:\"height\";i:1516;s:4:\"file\";s:21:\"2020/10/sitemap-1.jpg\";s:5:\"sizes\";a:2:{s:6:\"medium\";a:4:{s:4:\"file\";s:21:\"sitemap-1-300x237.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:237;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:22:\"sitemap-1-1024x809.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:809;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(11, 7, '_wp_trash_meta_status', 'publish'),
(12, 7, '_wp_trash_meta_time', '1603464445'),
(13, 7, '_wp_desired_post_slug', 'test-post'),
(14, 10, '_edit_lock', '1603807073:1'),
(17, 10, '_wp_trash_meta_status', 'publish'),
(18, 10, '_wp_trash_meta_time', '1603807238'),
(19, 10, '_wp_desired_post_slug', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2020-10-23 14:39:53', '2020-10-23 14:39:53', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"sizeSlug\":\"large\"} -->\n<figure class=\"wp-block-image size-large\"><img/></figure>\n<!-- /wp:image -->', 'Hello world!', '', 'draft', 'open', 'open', '', 'hello-world', '', '', '2020-10-23 14:43:40', '2020-10-23 14:43:40', '', 0, 'https://tirupatiinsurance.com/blog/?p=1', 0, 'post', '', 1),
(2, 1, '2020-10-23 14:39:53', '2020-10-23 14:39:53', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"https://tirupatiinsurance.com/blog/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Sample Page', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2020-10-23 14:39:53', '2020-10-23 14:39:53', '', 0, 'https://tirupatiinsurance.com/blog/?page_id=2', 0, 'page', '', 0),
(3, 1, '2020-10-23 14:39:53', '2020-10-23 14:39:53', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: https://tirupatiinsurance.com/blog.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'draft', 'closed', 'open', '', 'privacy-policy', '', '', '2020-10-23 14:39:53', '2020-10-23 14:39:53', '', 0, 'https://tirupatiinsurance.com/blog/?page_id=3', 0, 'page', '', 0),
(5, 1, '2020-10-23 14:42:57', '2020-10-23 14:42:57', '', 'sitemap', '', 'inherit', 'open', 'closed', '', 'sitemap', '', '', '2020-10-23 14:42:57', '2020-10-23 14:42:57', '', 1, 'https://tirupatiinsurance.com/blog/wp-content/uploads/2020/10/sitemap.jpg', 0, 'attachment', 'image/jpeg', 0),
(6, 1, '2020-10-23 14:43:40', '2020-10-23 14:43:40', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"sizeSlug\":\"large\"} -->\n<figure class=\"wp-block-image size-large\"><img/></figure>\n<!-- /wp:image -->', 'Hello world!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2020-10-23 14:43:40', '2020-10-23 14:43:40', '', 1, 'https://tirupatiinsurance.com/blog/index.php/2020/10/23/1-revision-v1/', 0, 'revision', '', 0),
(7, 1, '2020-10-23 14:46:13', '2020-10-23 14:46:13', '<!-- wp:paragraph -->\n<p>This this my first test post so ignore this at this moment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:gallery {\"ids\":[5]} -->\n<figure class=\"wp-block-gallery columns-1 is-cropped\"><ul class=\"blocks-gallery-grid\"><li class=\"blocks-gallery-item\"><figure><img src=\"https://tirupatiinsurance.com/blog/wp-content/uploads/2020/10/sitemap-1024x809.jpg\" alt=\"\" data-id=\"5\" data-full-url=\"https://tirupatiinsurance.com/blog/wp-content/uploads/2020/10/sitemap.jpg\" data-link=\"https://tirupatiinsurance.com/blog/?attachment_id=5\" class=\"wp-image-5\"/></figure></li></ul></figure>\n<!-- /wp:gallery -->\n\n<!-- wp:paragraph -->\n<p>Thank You </p>\n<!-- /wp:paragraph -->', 'Test Post', '', 'trash', 'open', 'open', '', 'test-post__trashed', '', '', '2020-10-23 14:47:26', '2020-10-23 14:47:26', '', 0, 'https://tirupatiinsurance.com/blog/?p=7', 0, 'post', '', 0),
(8, 1, '2020-10-23 14:45:35', '2020-10-23 14:45:35', '', 'sitemap-1', '', 'inherit', 'open', 'closed', '', 'sitemap-1', '', '', '2020-10-23 14:45:35', '2020-10-23 14:45:35', '', 7, 'https://tirupatiinsurance.com/blog/wp-content/uploads/2020/10/sitemap-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(9, 1, '2020-10-23 14:46:13', '2020-10-23 14:46:13', '<!-- wp:paragraph -->\n<p>This this my first test post so ignore this at this moment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:gallery {\"ids\":[5]} -->\n<figure class=\"wp-block-gallery columns-1 is-cropped\"><ul class=\"blocks-gallery-grid\"><li class=\"blocks-gallery-item\"><figure><img src=\"https://tirupatiinsurance.com/blog/wp-content/uploads/2020/10/sitemap-1024x809.jpg\" alt=\"\" data-id=\"5\" data-full-url=\"https://tirupatiinsurance.com/blog/wp-content/uploads/2020/10/sitemap.jpg\" data-link=\"https://tirupatiinsurance.com/blog/?attachment_id=5\" class=\"wp-image-5\"/></figure></li></ul></figure>\n<!-- /wp:gallery -->\n\n<!-- wp:paragraph -->\n<p>Thank You </p>\n<!-- /wp:paragraph -->', 'Test Post', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2020-10-23 14:46:13', '2020-10-23 14:46:13', '', 7, 'https://tirupatiinsurance.com/blog/index.php/2020/10/23/7-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2020-10-27 13:59:51', '2020-10-27 13:59:51', '<!-- wp:paragraph -->\n<p>dfdsfdsfdfgffg</p>\n<!-- /wp:paragraph -->', 'test', '', 'trash', 'open', 'open', '', 'test__trashed', '', '', '2020-10-27 14:00:38', '2020-10-27 14:00:38', '', 0, 'https://tirupatiinsurance.com/blog/?p=10', 0, 'post', '', 0),
(11, 1, '2020-10-27 13:59:51', '2020-10-27 13:59:51', '<!-- wp:paragraph -->\n<p>dfdsfdsfdfgffg</p>\n<!-- /wp:paragraph -->', 'test', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2020-10-27 13:59:51', '2020-10-27 13:59:51', '', 10, 'https://tirupatiinsurance.com/blog/index.php/2020/10/27/10-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(7, 1, 0),
(10, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'vikas'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', ''),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:1:{s:64:\"93f942d7aa6b627249b1e87fd75aa6e713a5286539220ac4e4fdea494dd14c56\";a:4:{s:10:\"expiration\";i:1603979653;s:2:\"ip\";s:14:\"171.79.187.106\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36\";s:5:\"login\";i:1603806853;}}'),
(17, 1, 'wp_user-settings', 'libraryContent=browse'),
(18, 1, 'wp_user-settings-time', '1603464003'),
(19, 1, 'wp_dashboard_quick_press_last_post_id', '4'),
(20, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:12:\"171.79.187.0\";}');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'vikas', '$P$BK5AdwwfRD1RW4PemdnWqNdpsCAJjr.', 'vikas', 'vikaspoonia17@gmail.com', 'https://tirupatiinsurance.com/blog', '2020-10-23 14:39:53', '', 0, 'vikas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_refer`
--
ALTER TABLE `admin_refer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_brand`
--
ALTER TABLE `bike_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_insurance`
--
ALTER TABLE `bike_insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_model`
--
ALTER TABLE `bike_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_variant`
--
ALTER TABLE `bike_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandlogo`
--
ALTER TABLE `brandlogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `call_back`
--
ALTER TABLE `call_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brand`
--
ALTER TABLE `car_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_insurance`
--
ALTER TABLE `car_insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_model`
--
ALTER TABLE `car_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_variant`
--
ALTER TABLE `car_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_insurance`
--
ALTER TABLE `health_insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houdinv_social_links`
--
ALTER TABLE `houdinv_social_links`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `insurance_type`
--
ALTER TABLE `insurance_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invite`
--
ALTER TABLE `invite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelam_gallery`
--
ALTER TABLE `kelam_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_carpolicy`
--
ALTER TABLE `new_carpolicy`
  ADD PRIMARY KEY (`new_policyId`);

--
-- Indexes for table `referandearn`
--
ALTER TABLE `referandearn`
  ADD PRIMARY KEY (`email`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_insurance`
--
ALTER TABLE `term_insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_insurance`
--
ALTER TABLE `travel_insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_refer`
--
ALTER TABLE `admin_refer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `bike_brand`
--
ALTER TABLE `bike_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bike_insurance`
--
ALTER TABLE `bike_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bike_model`
--
ALTER TABLE `bike_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bike_variant`
--
ALTER TABLE `bike_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brandlogo`
--
ALTER TABLE `brandlogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `call_back`
--
ALTER TABLE `call_back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `car_brand`
--
ALTER TABLE `car_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `car_insurance`
--
ALTER TABLE `car_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `car_model`
--
ALTER TABLE `car_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `car_variant`
--
ALTER TABLE `car_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `health_insurance`
--
ALTER TABLE `health_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `houdinv_social_links`
--
ALTER TABLE `houdinv_social_links`
  MODIFY `social_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `insurance_type`
--
ALTER TABLE `insurance_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invite`
--
ALTER TABLE `invite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelam_gallery`
--
ALTER TABLE `kelam_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `new_carpolicy`
--
ALTER TABLE `new_carpolicy`
  MODIFY `new_policyId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `term_insurance`
--
ALTER TABLE `term_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `travel_insurance`
--
ALTER TABLE `travel_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
