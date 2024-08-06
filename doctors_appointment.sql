-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 07:54 AM
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
-- Database: `doctors_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(50) NOT NULL,
  `app_email` varchar(50) NOT NULL,
  `app_phone` int(15) NOT NULL,
  `app_doctor` varchar(60) NOT NULL,
  `app_date` varchar(25) NOT NULL,
  `app_time` time NOT NULL,
  `app_msg` varchar(500) NOT NULL,
  `isread` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL COMMENT '0-Booked,1-Cancle, 2-Visited',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`app_id`, `app_name`, `app_email`, `app_phone`, `app_doctor`, `app_date`, `app_time`, `app_msg`, `isread`, `status`, `timestamp`) VALUES
(20, 'REALESTATEProx', 'autoremmont@gmail.com', 2147483647, '', '1980-10-10', '11:15:00', 'hot news of USA We n we publish all of them current and important facts World, analytics experts. All evil on this planet exists with the quiet tacit consent of the indifferent. No one provides us with incentives. We are Enthusiasts. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Civil Society <a href=http://realestate.remmont.com>Malaysia Business</a> \r\n \r\n<img src=\"http://realestate.remmont.com/wp-', 0, 0, '2018-09-07 11:12:22'),
(19, 'Kerpal shing', '291106776625', 2147483647, '', '22.8.2018', '11:00:00', 'Yuroloji  sorb jen\r\n', 0, 0, '2018-08-21 21:22:35'),
(13, 'Kumarss', 'neelesh1222@gmail.com', 2147483647, '', '07/26/2018', '01:15:00', 'test', 0, 0, '2018-06-27 07:02:26'),
(14, 'Harsh ', 'harsh.neekhra1647@gmail.com', 2147483647, '', '08/05/2018', '12:00:00', 'hospital road\r\nrajeev ward', 0, 0, '2018-07-20 04:02:02'),
(15, 'Shammi Raisinghani', 'shammiraisinghani@gmail.com', 2147483647, '', '07/29/2018', '11:30:00', 'Please help', 0, 0, '2018-07-28 13:23:09'),
(16, 'Shammi', 'shammiraisinghani@gmail.com', 2147483647, '', '07/29/2018', '11:30:00', 'Sir,\r\nPlease help', 0, 0, '2018-07-28 13:24:50'),
(17, 'Judix', 'bggfbx@hotmail.com', 2147483647, '', '10121985', '03:15:00', '8jxgDZ http://www.LnAJ7K8QSpfMO2wQ8gO.com', 0, 0, '2018-08-06 05:04:41'),
(18, 'INSURANCEProx', 'aas33de@gmail.com', 2147483647, '', '1979-10-12', '10:00:00', 'USA news. We n we publish all of them fresh and topical news Russia, analytics experts. All evil in the world is created with the quiet tacit consent of the indifferent. No one provides us with incentives. We are Enthusiasts. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Martian Wars <a href=http://www.insurance.remmont.com>Finance News</a> \r\n \r\n<img src=\"http://insurance.remmont.com/wp-admin/images', 0, 0, '2018-08-17 08:16:21'),
(12, 'Kumar', 'neelesh1222@gmail.com', 2147483647, '', '06/16/2018', '02:00:00', 'test', 0, 0, '2018-06-27 06:59:39'),
(10, 'Rajt Pratap Singh', 'rajat@gmail.com', 2147483647, '', '06/30/2018', '11:30:00', 'Cleaning\r\nandcaping', 1, 0, '2018-06-25 05:25:14'),
(11, 'Kumar', 'nkp@gmail.com', 2147483647, '', '06/30/2018', '02:45:00', 'Test message ', 0, 0, '2018-06-27 06:40:35'),
(21, 'CREDITProx', 'aa3ghdd@gmail.com', 2147483647, '', '1977-12-12', '10:45:00', 'Politics of Russia We n we publish all of them hot and important facts World, analytics experts. All negative in the world happens with the quiet tacit consent of the indifferent. No one provides us with incentives. We are Enthusiasts. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Chernobyl <a href=http://www.remmont.com/category/credit/>Uk Finance</a> \r\n \r\n<img src=\"http://remmont.com/wp-admin/imag', 0, 0, '2018-09-08 08:28:23'),
(22, 'RENTAProx', 'auto3car@gmail.com', 2147483647, '', '1979-12-11', '02:00:00', 'Latest news USA We n we publish all of them fresh and important facts USA, estimates experts. All negative in the world exists with the quiet tacit consent of the indifferent. No one provides us with incentives. We are Enthusiasts. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Health <a href=http://www.rental.remmont.com>Jacksonville Finance</a> \r\n \r\n<img src=\"http://rental.remmont.com/wp-admin/imag', 0, 0, '2018-09-09 02:22:07'),
(23, 'TRAVELProx', '0insurance0@gmail.com', 2147483647, '', '1980-12-12', '12:30:00', 'USA news. We n we publish all of them fresh and topical news USA, analytics experts. All bad on this planet exists with the quiet tacit consent of the indifferent. No one provides us with incentives. We are Enthusiasts. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Government <a href=http://www.travel.remmont.com>Renta News</a> \r\n \r\n<img src=\"http://travel.remmont.com/wp-admin/images/1.png\"> \r\n<a hr', 0, 0, '2018-09-09 18:02:01'),
(24, 'REMONTProx', 'aa3ghdd@gmail.com', 2147483647, '', '1977-11-11', '03:15:00', '<b>Hello, let\'s be friends</b> \r\nEconomy of Russia We n we publish all of them current and important events Russia, analytics experts. All bad on this planet is created with the quiet tacit consent of the indifferent. No one provides us with incentives. We are People. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Incidents <a href=http://www.Remmont.Com>Long-beach Business</a> \r\n \r\n<a href=http://na', 0, 0, '2018-09-11 03:40:51'),
(25, 'NEF2Prox', 'aad1ert@gmail.com', 2147483647, '', '1977-10-12', '03:15:00', 'hot news of USA We n we publish all of them fresh and topical news Russia, estimates experts. All negative on this planet is created with the quiet tacit consent of the indifferent. No one provides us with incentives. We are Enthusiasts. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - USA and Europe <a href=http://nef2.com> New-jersey Business </a> \r\n \r\n<img src=\"http://nef2.com/wp-admin/images/1.png\"', 0, 0, '2018-09-11 22:32:45'),
(26, 'NEF6Prox', 'aade4rf@gmail.com', 2147483647, '', '1975-10-11', '12:00:00', 'News portal about Russia We n we publish all of them current and important facts World, estimates experts. All bad in the world is created with the quiet tacit consent of the indifferent. No one provides us with incentives. We are People. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Terror and piracy <a href=http://www.nef6.com>Uganda Finance</a> \r\n \r\n<img src=\"http://nef6.com/wp-admin/images/1.png', 0, 0, '2018-09-12 18:09:26'),
(27, 'LOANProx', 'avinsburg@gmail.com', 2147483647, '', '1980-11-10', '07:15:00', 'Economy of Russia We n we publish all of them current and important events USA, analytics experts. All negative on earth exists with the quiet tacit consent of the indifferent. No one provides us with incentives. We are Disinterested. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Human Rights <a href=http://www.loan.remmont.com>Bahamas Finance</a> \r\n \r\n<img src=\"http://loan.remmont.com/wp-admin/imag', 0, 0, '2018-09-13 14:37:07'),
(28, 'AUTOProx', 'ablatter7@gmail.com', 2147483647, '', '1975-11-11', '02:00:00', 'Latest news USA We n we publish all of them hot and topical facts USA, analytics experts. All negative on earth is created with the quiet tacit consent of the indifferent. No one provides us with incentives. We are Enthusiasts. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Elections <a href=http://www.remmont.com/category/auto>Bahamas Business</a> \r\n \r\n<img src=\"http://remmont.com/wp-admin/images/1.', 0, 0, '2018-09-17 11:54:24'),
(29, 'AUTOProx', 'a.blatter7@gmail.com', 2147483647, '', '1980-12-12', '10:00:00', '??USA political news. We n we publish all of them current and global events Russia, analytics experts. All evil in the world is created with the quiet tacit consent of the indifferent. No one provides us with incentives. We are Volunteers. We are building a civil society. The people are the bearer of sovereignty and the only source of power. No one can usurp power. Useful topics - Capital <a href=http://remmont.com/category/car>San-jose Finance</a> <a href=http://mobile.remmont.com/martina-hingi', 0, 0, '2018-09-29 19:53:57'),
(30, 'Amey Manekar', 'ameymanekar43@gmail.com', 2147483647, '', '10/04/2018', '02:45:00', 'Tooth ache in back of my mouth.', 0, 0, '2018-10-04 01:37:56'),
(31, 'Amey Manekar', 'ameymanekar43@gmail.com', 2147483647, '', '10/04/2018', '03:15:00', 'Tooth ache in back of my mouth', 0, 0, '2018-10-04 01:38:40'),
(32, 'sachin', 'dextersseo@gmail.com', 2147483647, '', '10/26/2018', '06:00:00', 'Could you please inform me about  charges for teeth whitening ', 0, 0, '2018-10-26 02:36:50'),
(33, 'Tapan Kumar', 'tapan.gen@gmail.com', 2147483647, '', '11/24/2018', '11:15:00', 'i want to book appointment for dental/gum checkup with Dr Surendra', 0, 0, '2018-11-22 01:43:11'),
(34, 'Shruti singh baghel ', 'shouvikdutta123456789@gmail.com', 2147483647, '', '01/25/2019', '12:15:00', 'I want an appointment for a oral checkup because i am getting some blood from the teeth. ', 0, 0, '2019-01-23 12:13:03'),
(35, 'REMONTProx', 'aa3.ghd.d@gmail.com', 2147483647, '', '1977-11-12', '05:30:00', 'Lowest airline tickets $ Video\r\n<p>Lowest airline tickets Lowest airline tickets Hello travelers. Where would you like to go? Your privacy is important to us, so weâ€™ll never spam you or share your info with third parties. Take a look at our privacy policy. And, weâ€™d be sad to see you go, but you can unsubscribe at any time. Thank you for signing up. We work with more than 300 partners to bring you better travel deals Your privacy is important to us, so weâ€™ll never spam you or share your in', 0, 0, '2019-06-07 11:54:40'),
(36, 'ElPasoProx', 'aa.3g.h.dd@gmail.com', 2147483647, '', '1976-11-12', '06:45:00', '<a href=http://remmont.com/category/rental/>best rental car rates\r\n</a> \r\nBuy gap insurance online â€“ Video\r\n<p>#Gap #Insurance Buy gap insurance online Gap Insurance Why would you need gap insurance? By Peter Carr on Wednesday 22 November 2017 Our guide to Guaranteed Asset Protection (GAP) insurance explains how GAP insurance works and how you can get the cover you need. In this Article Warranty Direct offer three different types of gap <>]</p>\n<p>The post <a href=http://232.remmont.com/2019/0', 0, 0, '2019-08-23 01:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `clinic_id` int(100) NOT NULL,
  `d_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `location` varchar(150) DEFAULT NULL,
  `timing_ms` varchar(200) NOT NULL,
  `timing_sun` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`clinic_id`, `d_id`, `name`, `address`, `location`, `timing_ms`, `timing_sun`, `contact_no`, `mobile_no`) VALUES
(3, 9, 'Remedy Plus car123', 'M.P. nagar', 'MP Nagar', '4-2pm', '4-2pm', '47544133', '7047087123'),
(4, 10, 'Spiritup Care Clinic', 'Arera colony,bhopal', NULL, '1-8pm', '1-8pm', '5565545', '8989565634'),
(5, 11, 'mamta clinic', 'indrpuri,bhopal', NULL, '10:00am- 5:00pm', 'close', '3203356', '5656432189'),
(6, 11, 'mamta clinic', 'indrpuri,bhopal', NULL, '10:00am- 5:00pm', 'close', '3203356', '5656432189'),
(7, 10, 'Redstar Hospital', 'JK road,near minal', NULL, '7:00 -10:00pm', '7:00 -10:00pm', '5432185', '45989876'),
(8, 12, 'lovable clinic', 'Arera colony,bhopal', NULL, '8 to 10pm', '8 -10pm', '324567', '7047300087'),
(9, 13, 'maple heart care', 'H-20 minal recidency ', NULL, '7 to 11 am// 5 to 9 pm', '7 to 11 am// 5 to 9 pm', '089089', '567899887'),
(10, 13, 'Twin Tulip Hospital', 'shakti nagar', NULL, '10:00am- 5:00pm', '6:00 -9:00pm', '5565545', '56544333232'),
(11, 14, 'Hopewell Hospital', 'aanand nagar', NULL, '10:00am- 5:00pm', '10:00am- 5:00pm', '3244555', '89897654544'),
(12, 15, 'healthy Wing Clinic', 'indrapuri C sector', NULL, '5-9pm', 'close', '54322122', '9867547867'),
(13, 16, 'Goldriver hospoital', 'Qtara hills', NULL, '8am to 10pm', '8am to 10pm', '5656787', '89897654443'),
(14, 16, ' Another life Hospital', 'Jk  road ', NULL, '10:00am- 5:00pm', '10:00am- 5:00pm', '45555555', '7047300087'),
(15, 17, 'Ace hospital', 'kolar,bhopal', NULL, '10:00am- 5:00pm', '10:00am- 5:00pm', '567889999', '897654327'),
(16, 17, 'Ace hospital', 'kolar,bhopal', NULL, '10:00am- 5:00pm', '10:00am- 5:00pm', '567889999', '897654327'),
(17, 18, 'Another life Hospital', 'Qtara hills', NULL, '5-6pm', 'close', '5565545', '67896543333'),
(18, 19, 'Delight Sun CLinic', 'kolar road', NULL, '8 to 10pm', '8 to 10pm', '56565656', '8989765645443'),
(19, 20, 'Redcross Hospital', 'M.P. nagar', NULL, '10:00am- 5:00pm', '10:00am- 5:00pm', '5463244', '78987665555'),
(20, 21, 'Highland hospital', 'minal recidency', NULL, '5-9pm', '5-6pm', '98766566', '8989565098'),
(21, 22, 'lovely life clinic', 'kolar road', NULL, '10:00am- 5:00pm', '10:00am- 5:00pm', '3203356', '569800054'),
(22, 23, 'Peoples clinic', 'aanand nagar', NULL, '10:00am- 5:00pm', 'close', '5678900', '9000078783'),
(23, 24, 'Angelwalk hospital', 'JK road,near minal', NULL, '5-9pm', '5-9pm', '45677877', '890345676'),
(24, 25, 'Truelife care', 'JK road', NULL, '10:00am- 5:00pm', '10:00am- 5:00pm', '3456778', '8900987654'),
(25, 26, 'Mankind clinic', 'aanand nagar', NULL, '5 to 10pm', 'close', '5656789', '6788764543'),
(26, 27, 'Flowerence Clinic', 'indrpuri ,near i mart,bhopal', NULL, '5-9pm', '5-9pm', '5565545', '67898976754');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_list`
--

CREATE TABLE `doctor_list` (
  `did` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `speciality` varchar(1000) NOT NULL,
  `fees` decimal(20,0) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `clinic_ids` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_list`
--

INSERT INTO `doctor_list` (`did`, `name`, `image`, `speciality`, `fees`, `description`, `clinic_ids`) VALUES
(8, 'Dr. Sushil Jindal ', 'doc1.jpg', 'M.D.', '150', ' Dr. Sushil Jindal is the senior most Endocrinologist and Diabetologist of Central India, who has been successfully looking after Jindal Diabetes and Hormone Centre in Bhopal, Madhya Pradesh.\n\nDr. Jindal\'s educational qualification comprises of an MBBS degree and MD in General Medicine from Gandhi Medical College in Bhopal, and DM in Endocrinology from prestigious PGIMER in Chandigarh.\n\nEarlier, Dr. Jindal was associated with Gandhi Medical College as an Assistant Professor of Medicine, and People\'s College of Medical Sciences as an Associate Professor of Medicine. He is currently working as Professor of Medicine with PCMS in Bhopal.\n\nDr. Jindal has sixteen international publications to his credit in addition to two chapters which he has contributed in RSSDI textbook of Diabetes. He is a member of an editorial board of prestigious journal \'BMJ Case Reports\' and chief editor of hindi diabetes education magazine \"Madhumeh Vani\' and its website. Dr. Jindal has successfully held post of an Organising Secretary of ESICON 2013, Bhopal. He is a physician to the Governor of Madhya Pradesh.', '1,2'),
(12, 'Dr. Priya Runwal', 'sdoc1.jpg', 'Gynaecologist', '320', 'Gynaecologist', '54'),
(13, 'Dr. Sanjay Bansal', 'doc5.jpg', 'E.N.T', '250', 'E.N.T', '66'),
(14, 'Dr. Anant Bhargav', 'doc6.jpg', 'E.N.T', '250', 'E.N.T', '33'),
(15, 'Dr. Vijay Garg', 'doc7.jpg', 'Gen. Surgery', '450', 'Gen. Surgery', '23'),
(16, 'Dr. Naresh Sharma', 'doc8.png', 'Cardiologist', '400', 'Cardiologist', '32'),
(17, 'Dr. S.G Indapurkar', 'doc9.jpg', 'Cardiologist', '400', 'Cardiologist', '5'),
(18, 'Dr.Dharmendra Sharma', 'doc10.jpg', 'Cardiologist', '600', 'Cardiologist', '0'),
(19, 'Dr. Nilima Sing', 'sdoctor3.jpg', 'Gynaecologist', '250', 'Gynaecologist', '22'),
(20, 'Dr. Arvind Gupta', 'doc11.jpg', 'Neurophysician', '254', 'Neurophysician', '4'),
(21, 'Dr. Pankaj Jain', 'doc12.jpg', 'Neurophysician', '600', 'Neurophysician', '4'),
(22, 'Dr. Swati Jain', 'sdoctor2.jpg', 'Gynaecologist', '450', 'Gynaecologist', '8'),
(23, 'Dr. Dinesh Udeniya', 'doc13.jpg', 'Neurophysician', '300', 'Neurophysician', '9'),
(24, 'Dr. Deepak Sharma', 'doc14.png', 'Ortho', '350', 'Ortho', '4'),
(25, 'Dr. Santosh Tripathi', 'doc15.jpg', 'Ortho', '600', 'Ortho', '7'),
(26, 'Dr. Manish Gupta', 'doc16.jpg', 'Ortho', '430', 'Ortho', '5'),
(27, 'Dr. Akash Modi', 'doc17.png', 'Child Specialist', '410', 'Child Specialist', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fbid` int(11) NOT NULL,
  `fbname` varchar(50) DEFAULT NULL,
  `fbphone` varchar(15) DEFAULT NULL,
  `fbemail` varchar(50) DEFAULT NULL,
  `fbsubject` varchar(150) DEFAULT NULL,
  `fbmessage` varchar(500) DEFAULT NULL,
  `fbproductid` varchar(50) DEFAULT NULL,
  `fbtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fbid`, `fbname`, `fbphone`, `fbemail`, `fbsubject`, `fbmessage`, `fbproductid`, `fbtime`) VALUES
(7, 'Vikas Jain', '123123123', 'neelesh1222@gmail.com', 'test subject', 'erwe', NULL, '2018-05-19 09:14:49'),
(8, 'Neelesh', '123123123', 'nkp@gmail.com', 'testt', 'ttt', NULL, '2019-04-30 03:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logindetails`
--

CREATE TABLE `tbl_logindetails` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_pass` varchar(20) DEFAULT NULL,
  `user_type` int(1) DEFAULT NULL COMMENT '1-User, 2-Employee, 3-Admin ',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '0-disable, 1-active',
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logindetails`
--

INSERT INTO `tbl_logindetails` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_type`, `status`, `createDate`) VALUES
(2, 'renu', 'r@gmail.com', '3333', 2, 1, '2018-04-25 10:03:31'),
(6, 'meenal', 'meena@gmail.com', 'user', 1, 1, '2018-05-02 06:32:55'),
(7, 'tia', 't@gmail.com', '123', 1, 1, '2018-05-04 07:31:30'),
(8, 'Neelesh Kumar Prajapati', 'neelesh1222@gmail.com', '123', 1, 1, '2018-05-12 11:04:59'),
(9, 'Raksh Bobade', 'Nagmadi@gmail.com', '123', 1, 1, '2018-05-19 07:26:25'),
(10, 'Admin', 'admin', '123', 3, 1, '2018-05-19 07:47:19'),
(11, 'Neelesh', 'neelesh3@gmail.com', '123', 1, 1, '2019-08-07 14:17:30'),
(12, 'Neeraj', 'nm@gmail.com', '123', 1, 1, '2019-08-08 12:56:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_list`
--
ALTER TABLE `doctor_list`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`fbid`);

--
-- Indexes for table `tbl_logindetails`
--
ALTER TABLE `tbl_logindetails`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_logindetails`
--
ALTER TABLE `tbl_logindetails`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
