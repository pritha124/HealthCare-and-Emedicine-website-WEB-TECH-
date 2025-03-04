-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 02:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emedicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `user_name`, `password`, `email`) VALUES
(1, '', 'shopan', '66482', 'sadmanshopan786@gmail.com'),
(2, '', 'pew', '12345', 'pew@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `problem` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `department`, `date`, `time`, `problem`) VALUES
(1, 'Cardiology', '2025-01-08', '03:43:00', 'cgbcgvnb'),
(2, 'Cardiology', '2025-01-17', '03:45:00', 'headache'),
(3, 'Cardiology', '2025-01-31', '16:21:00', 'gfggcbcnb'),
(4, 'Neurology', '2025-01-17', '04:23:00', 'vjgvjgvjgvjg'),
(5, 'Neurology', '2025-01-23', '04:40:00', 'pain'),
(6, 'Cardiology', '2025-01-24', '19:56:00', 'ajksajd'),
(9, 'Neurology', '2025-02-04', '03:50:00', 'bjbjb'),
(13, 'Neurology', '2025-02-04', '03:50:00', 'bjbjb'),
(15, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(16, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(17, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(18, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(19, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(20, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(21, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(22, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(23, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(24, 'Cardiology', '2025-01-13', '01:20:00', 'jhjfgjfjf'),
(25, 'Neurology', '2025-01-22', '01:23:00', 'nksnknsk'),
(26, 'Neurology', '2025-01-22', '01:23:00', 'nksnknsk'),
(27, 'Neurology', '2025-01-22', '01:23:00', 'nksnknsk'),
(28, 'Neurology', '2025-01-22', '01:23:00', 'nksnknsk'),
(29, 'Neurology', '2025-01-22', '01:23:00', 'nksnknsk'),
(30, 'Neurology', '2025-01-22', '01:23:00', 'nksnknsk'),
(31, 'Cardiology', '2025-02-06', '01:29:00', 'jj'),
(32, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(33, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(34, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(35, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(36, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(37, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(38, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(39, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(40, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(41, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(42, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(43, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(44, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(45, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(46, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(47, 'Skin', '2025-01-18', '07:44:00', 'bbmnb '),
(48, 'Cardiology', '2025-01-04', '06:49:00', 'vbjbb'),
(49, 'Cardiology', '2025-01-04', '06:49:00', 'vbjbb'),
(50, 'Cardiology', '2025-01-04', '06:49:00', 'vbjbb'),
(51, 'Cardiology', '2025-01-04', '06:49:00', 'vbjbb'),
(52, 'Cardiology', '2025-01-04', '06:49:00', 'vbjbb'),
(53, 'Cardiology', '2025-01-04', '06:49:00', 'vbjbb'),
(54, 'Cardiology', '2025-01-04', '06:49:00', 'vbjbb'),
(55, 'Cardiology', '2025-01-04', '06:49:00', 'vbjbb'),
(56, 'Dental', '2025-01-11', '07:59:00', 'vnbvm');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `working_hour` varchar(26) DEFAULT NULL,
  `off_day` varchar(30) DEFAULT NULL,
  `appointment` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `degree`, `department`, `working_hour`, `off_day`, `appointment`) VALUES
(1, 'Dr. Md. Shamsul Islam (Bokul)', 'MBBS (CU), DA (BSMMU), FCPS (Physical Medicine), Fellowship in Pain Medicine (India)', 'Medicine ', '4pm to 7pm ', 'Thu & Friday', ' +8801757980098'),
(2, 'Dr. Md. Sydur Rahman', 'MBBS, BCS (Health), MD (Physical Medicine & Rehabilitation)', 'Medicine', '4pm to 7pm ', 'Sat, Sun, Mon & Wed', '+8801841212275'),
(3, 'Dr. Shohag Chakrabarty', 'MBBS, BCS (Health), FCPS (Physical Medicine), FIPM, MACP', 'Medicine', '4pm to 8pm ', 'Friday & Saturday', '+8801601430568'),
(4, 'Dr. Muhammad Sakhawat Hossain', 'MBBS (Dhaka), BCS (Health) FCPS ( Medicine) FCPS (Chest Disease) Higher Training- Diabetes, Hormone ', 'Cardiology', '5pm to 8pm', 'Thu & Friday', '01902991500'),
(5, 'Assistant Professor Dr. Md Zahirul Islam (Shakil)', 'MBBS, DTCD, Felae-WHO  (France) Trained in asthma treatment in Australia Medicine, asthma, and thora', 'Cardiology', '6pm to 7.30 pm', 'Friday', '01902991500'),
(6, 'Professor (Retd) Dr. Khondker Shaheed Hussain', 'MBBS, MD (Cardiology).', 'Cardiology', '8pm to 9 pm', 'Friday', '01902991500'),
(7, 'Dr. Tanvir Ahmed Siddiqui', 'MBBS, BCS (Health), FCGP (Medicine), MD (Dermatology) Thesis, CCD (Bardem), Special Training Dermato', 'Skin and Dermatology', '6pm to 8 pm', 'Friday', '01902991500'),
(8, 'Dr. Ashraf Uddin Ahmed', 'MBBS, FCGP (General Medicine), DFID (Diabetes), CMS (Valor), D.Asthma (UK), DCP (Australia), CCD, UC', 'Skin and Dermatology', '6pm to 8 pm', 'Friday', '01902991500'),
(9, 'Dr. Md. Shakhawat Hossain (Babu)', 'MBBS, MD (Cardiology), CCD (BIRDEM)', 'Cardiology', '6pm to 10pm ', 'Sat, Mon & Wed', '+8801725694669'),
(10, 'Prof. Dr. Nurul Goni', 'MBBS, FCGP, CCD, UDC, C-CARD, MD, PHD', 'Cardiology', '8.30pm to 10pm ', 'Friday', '+8801725694669'),
(11, 'Prof. Brig. Gen. Dr. Md. Amzad Hossain Fakir', 'MBBS, FCPS (Medicine), FCPS (Nephrology, Pakistan), FRCP (Ireland)', 'Medicine', '4pm to 6pm', 'Friday', '+8809613787807'),
(12, 'Maj. Gen. Prof. Dr. Md. Abdul Ali Mia', 'MBBS, MCPS, FCPS', 'Medicine', '10am to 12pm', 'Sat & Tue', '+8801725694669'),
(13, 'Dr. Sadia Afrin Mahbuba', 'MBBS (DMC), BCS (Health), MCPS (Medicine), FCPS( Medicine) Final, DBST (BSMMU)', 'Medicine', '6pm to 9pm', 'Friday', '+8801779392234'),
(14, 'Dr. Md. Safiul Islam', 'MBBS, BCS (Health), FCPS (Medicine), FCCP (USA)', 'Medicine', '8pm to 10pm', 'Friday', '+8801725694669'),
(15, 'Prof. Lt. Col. Dr. Md. Abdul Wahab', 'MBBS, DDV, MCPS, FACP (USA), FCPS (Dermatology), FRCP (UK), Higher Training (Thailand)', 'Skin and Dermatology', '3.30pm to 8.30pm', 'Sun, Tue & Thu', '10606'),
(16, 'Dr. Md. Mahmud Ali', 'MBBS, BCS (Health), MCPS, FCPS, MS', 'ENT', '7pm to 8pm', 'Friday', '+8801724505932'),
(17, 'Prof. Brig. Gen. Dr. Hasina Sultana', 'MBBS, DGO (DU), FCPS (OBGYN)', 'Gynecology', '6pm to 9pm', 'Mon, Tue & Thu', '+8801725694669'),
(18, 'Prof. Brig. Gen. Abdur Rahman Mollah', 'MBBS, MS (ORTHO)', 'Orthopedics', '11am to 1pm', 'Friday', '+8809613787805'),
(19, 'Dr. Nur Uddin Mohammad Yousuf', 'MBBS (DMC), MD (Neurology)', 'Neurology', '10am to 8pm', 'Thursday & Friday', '+8801711144786'),
(20, 'Dr. Humayun Kabir Sarker', 'MBBS, BCS (Health), MD (Neurology), FCPS (Medicine)', 'Neurology', '2pm to 10pm', 'Thursday', '+8801321180930'),
(21, 'Dr. Md Abdullah Al Hasan', 'MBBS, BCS (Health), FCPS (Medicine), MD (Neurology)', 'Neurology', '3pm to 8pm', 'Friday', '+8801842365430'),
(22, 'Dr. Md. Imran Hossain', 'BDS (DU), PhD (Dental Surgery) France, MSS (Clinical) DU, MPH (USA), PGT (Orthodontic)\r\nPGT (OMS) BS', 'Dental', '10am to 9.30pm', 'Friday', '+8801789280929'),
(23, 'Prof. Dr. B.A.K Azad', 'BDS, DDS, MCPS, MDS (London), FICP (America)', 'Dental ', '4pm to 9pm', 'Sat & Tue', '+8801715157722'),
(24, 'Dr. Md. Haider Ali Khan', 'BDS (Dhaka), MPH (BSMMU), MPhil (BSMMU), BCS (Health), TCTP (Sri Lanka)\r\nAdvanced Training on Dental', 'Dental', 'Dental', 'Friday', '+8801611957515'),
(25, 'Dr. Proshenjit Sarker', 'BDS (Dhaka Dental College)\r\nPGT (Oral & Maxillofacial Surgery), PGT (Conservative & Endodontics), PG', 'Dental', '5pm to 10pm', 'Mon, Tue & Thu', '+8801711834378'),
(26, 'Prof. Dr. Motiur Rahman Molla', 'BDS, FCPS (Hons), PhD (OMS-Japan), FDS, RCPS (Glasgow, UK)', 'Dental', '9am to 5pm ', 'Friday', '10678'),
(27, 'Dr. Sk. Nazrul Islam', 'BDS (DU), PGT (BK), FAES (USA), MCPS (BD)', 'Dental', '10am to 8pm', 'Wednesday', '+8801711528345'),
(28, 'Dr. M. Wahiduzzaman', 'MBBS (Dhaka), MRCP (UK), FCPS (Medicine)', 'Medicine', '6pm to 10pm', 'Friday', '+8801999242424'),
(29, 'Dr. Farhana Afroz', 'MBBS, FCPS (Medicine)', 'Medicine', '2pm to 3:30pm', 'Sat, Mon & Wed', '+8809666787801'),
(30, 'Dr. Jayanta Kumar Saha', 'MBBS, D-CARD, FCPS (Medicine)', 'Medicine', '7pm to 9pm', 'Mon & Wednesday', '+8801766662050'),
(31, 'Dr. Ahsanul Haque Kawsar', 'MBBS, FCPS (Medicine)', 'Medicine', '6pm to 9pm', 'Mon & Thu', '+8809613787809'),
(32, 'Dr. Shaila Rahman', 'MBBS, MRCP (UK)', 'Medicine', '7pm to 9pm', 'Mon, Wed & Fri', '+8809613787809'),
(33, 'Dr. D.M. Sazzad Hossain', 'MBBS, BCS (Health), FCPS (Medicine), Fellowship Training (Gastroenterology)', 'Medicine', '5pm to 9pm', 'Thurs & Friday', '+8801689956599'),
(34, 'Prof. Dr. Mohammad Mohibur Rahman', 'MBBS, FCPS (Medicine), MD (Gastroenterology)', 'Medicine', '5pm to 9pm', 'Friday', '+8809606063030'),
(35, 'Dr. Mamunur Rashid', 'MBBS, BCS (Health), FCPS (Medicine), MD (Gastroenterology)', 'Medicine', '6:30pm to 10pm', 'Monday', '+8809613787809'),
(36, 'Dr. Md. Abdur Rob', 'MBBS, BCS (Health), FCPS (Medicine)', 'Medicine', '4pm to 8pm', 'Friday', '+8801810004550'),
(37, 'Prof. Dr. Jashim Uddin', 'MBBS (DMC), FCPS (MEDICINE)', 'Medicine', '4.30pm to 7pm', 'Friday', '+8801810-004550'),
(38, 'Dr. Mohammed Abu Naser Siddique', 'MBBS, BCS (Health), FCPS (Medicine)', 'Medicine', '5pm to 7pm', 'Friday', '+8801870581126'),
(39, 'Dr. M.A. Hassan Chowdhury', 'MBBS, FCPS (Medicine), FACP (USA), FRCP (UK)', 'Medicine', '6pm to 9pm', 'Friday', '+8801755666969'),
(40, 'Dr. Anisul Awal', 'MBBS, MCPS (Medicine), FCPS (Medicine), MD (Cardiology), FSCAI (USA)', 'Cardiology', '7pm to 11pm', 'No off day', '+88031656565'),
(41, 'Dr. SK Mallick', 'MBBS, MCPS (Medicine), MPH, MD (Cardiology), FIC', 'Cardiology', '11am to 1pm & 6pm to 8pm', 'Tuesday & Friday', '+8801881560721'),
(42, 'Dr. Md. Ekram Hossain', 'MBBS, MPH, D-CARD\r\nTrained in Critical Care Medicine & Asthma', 'Cardiology', '5pm to 10pm', 'Friday', '+8801810-004550'),
(43, 'Dr. Anisul Awal', 'MBBS, MCPS (Medicine), FCPS (Medicine), MD (Cardiology), FSCAI (USA)', 'Cardiology', '7pm to 11pm', 'No off day', '+88031656565'),
(44, 'Dr. Mohammad Ibrahim Chowdhury', 'MBBS, FCPS (Medicine), D-CARD, MD (Cardiology)', 'Cardiology', ' 6pm to 10pm', 'Thursday', '+88031656565'),
(45, 'Prof. Dr. M. A. Rouf', 'MBBS, FCPS (Medicine), D-CARD, MD, DTCD, DTM&H (Bangkok), FRSTM (UK)', 'Cardiology', '5pm to 9pm', 'Thursday', '+8801755666969'),
(46, 'Dr. Shaikh Mohammad Hasan Mamun', 'MBBS, FCPS (Medicine), MD (Cardiology), MRCP (UK)', 'Cardiology', '7pm to 10pm ', 'Sunday', ' +8801713998199'),
(47, 'Dr. Mohammad Nur Uddin Tareq', 'MBBS, BCS (Health), FCPS (Medicine), MD (Cardiology)', 'Cardiology', '6pm to 9pm', 'Friday', '+8801755666969'),
(48, 'Dr. Md. Abu Tarek Iqbal', 'MBBS, D-CARD, MD (Internal Medicine), MD (Cardiology)', 'Cardiology', '5pm to 10pm', 'Sat & Tue', '+8801755666969'),
(49, 'Dr. Jinnat Fatema Saira Safa', 'MBBS, MCPS (Medicine), FCPS (Medicine), MD (Cardiology)', 'Medicine ', '5pm to 9pm', 'Sat, Mon & Wed', ' +8801755019576'),
(50, 'Dr. Md. Abdul Mottalib', 'MBBS, MD (Cardiology)', 'Cardiology', '10am to 8pm', 'Thursday', '+8801835203547'),
(51, 'Dr. Mohammad Humayun Kabir', 'MBBS, BCS (Health), MD (Neurology)', 'Neurology ', '4pm to 7pm', 'Thu & Friday', '+8801810004550'),
(52, 'Dr. Samee M Adnan', 'MBBS, BCS (Health), MD (Neurology)', 'Neurology', '6.30pm to 10pm', 'Sun, Tue & Thu', '+8801897-848814'),
(53, 'Prof. Dr. Md. Hasanuzzaman', 'MBBS, FCPS (Medicine), MD (Neurology)', 'Neurology', '5pm to 9pm', 'Sat & Tue', ' +8801738413600'),
(54, 'Dr. Shiuly Majumdar', 'MBBS, FCPS (Medicine), MD (Neurology)', 'Neurology', '6pm to 10pm ', 'Sun, Tue & Thu', ' +8801814985619'),
(55, 'Dr. Md. Mahabubul Alam Khandker', 'MBBS, BCS (Health), FCPS (Medicine), MD (Neurology)', 'Neurology ', '4pm to 7pm', 'Tue, Wed & Thu', ' +8801984499600'),
(56, 'Dr. Pradip Kumar Kayasthagir', 'MBBS, MD (Neuromedicine)', 'Neurology', '5pm to 9pm', 'Sun, Tue & Thu', '+8801984499600'),
(57, 'Dr. Mohammad Lutfur Rahman Rahat', 'MBBS, MD (SKIN & VD, BSMMU)', 'Skin and Dermatology', '5pm to 10pm', 'Mon, Tue & Thu', '+8801307842071'),
(58, 'Dr. Shakti Chowdhury', 'MBBS (CMC), DDV (BSMMU)', 'Skin and Dermatology', '6pm to 10pm ', 'Friday', '01701-664440'),
(59, 'Prof. Dr. Mansurul Alam', 'MBBS, BCS (Health), FCPS (Dermatology), MD (SKIN & VD), PhD, FRCP (GLASGOW)', 'Skin and Dermatology', '3.30pm to 9pm', 'Friday', '+8801984499600'),
(60, 'Dr. Roksana Hoque', 'MBBS (CMC), DDV, MCPS (Dermatology & Venereology)\r\n', 'Skin and Dermatology', '11am to 1pm', 'Friday', '+8801713998166'),
(61, 'Dr. Samira Jamal', 'MBBS, BCS (Health), MD (Dermatology)', 'Skin and Dermatology', ' 4.30pm to 7pm ', 'Friday', '+8801755666969'),
(62, 'Prof. Dr. Md. Abul Kashem Chowdhury', 'MBBS, DDV, FCPS', 'Skin and Dermatology', '10am to 1pm & 5pm to 10pm', 'Friday', '+8801766662828'),
(63, 'Dr. Muhammad Manjurul Karim', 'MBBS, DD (Thailand), MSc (Dermatology)', 'Skin and Dermatology', '9am to 2pm', 'Friday', '+8809612247247'),
(64, 'Dr. Shamim Ara Sizu', 'MBBS, DDV, MD (Dermatology)', 'Skin and Dermatology', '10am to 8pm', 'Sat, Mon & Wed', '+8801976022333'),
(65, 'Dr. Shamsun Nahar', 'MBBS, DDV (CMC), Fellow (Aesthetic Dermatology & Trichology)', 'Skin and Dermatology', '3pm to 5pm', 'Thu & Friday', '+8801822685066'),
(66, 'Prof. Dr. Muhammad Ismail', 'MBBS, BCS (Health), MD (Dermatology & Venereology)', 'Skin and Dermatology', '6pm to 10.30pm', 'Friday', '+8801920174451'),
(67, 'Prof. Dr. Habibur Rahman', 'MBBS, BCS (Health), DDV (CU)', 'Skin and Dermatology', '10am to 12pm', 'Friday', ' +8801886610115'),
(68, 'Dr. Mohammad Rafiqul Mowla', 'MBBS, BCS (Health), MD (Dermatology), PhD', 'Skin and Dermatology', ' 4pm to 8pm', 'Friday', '+8809613787810'),
(69, 'Dr. Alvin Saha', 'MBBS (CU), DD (Bangkok & Japan), SLRTC (India)', 'Skin and Dermatology', '5pm to 10pm', 'Sat & Tue', '+8801819078842'),
(70, 'Dr. Pritish Barua', 'MBBS (CU), DGUM (UK), DD (Australia)', 'Skin and Dermatology', '6pm to 9pm', 'Sat & Tue', '+8801812506020'),
(71, 'Dr. Md. Sirajur Rahman Sarwar', 'MBBS (DMC), BCS (Health), MD (Cardiology), FCPS (Final)\r\nTrained on Cardiology (Malaysia, Singapore,', 'Cardiology ', '3pm to 4pm ', 'Friday', '+8801300667503, +8801726886201'),
(72, 'Prof. Dr. Shishir Basak', 'MBBS (DMC), MCPS (Medicine), D-CARD (DU), MD (Cardiology), MRCP (UK)', 'Cardiology', '4.30pm to 9pm', 'Friday', '+8801726450182'),
(73, 'Prof. Dr. Muhammad Shahabuddin', 'MBBS, MD (Cardiology)', 'Cardiology', '3pm to 10pm', 'Friday', '+8801715067019'),
(74, 'Prof. Dr. Ayesha Rafiq Chowdhury', 'MBBS, MRCP (UK), FCPS (Medicine), MD (Cardiology), Fellow (Interventional Cardiology)', 'Cardiology ', '4pm to 9pm ', 'Friday', '+8809636300300'),
(75, 'Dr. Md. Abdul Goni', 'MBBS (CU), D-CARD (BSMMU), PGT (Medicine & Cardiology)\r\nHighly Trained in Pediatric Cardiology & Ped', 'Cardiology', '8pm to 10pm', 'Sat, Mon & Wed', '+8801306448363'),
(76, 'Dr. Md. Shayedat Ullah', 'MBBS (Dhaka), BCS (Health), MACP (USA), MACE (USA), MD (Endocrinology & Metabolism) (BSMMU)', 'Endocrinology', '6.30pm to 10pm', 'Thu & Friday', '+8801987851666'),
(77, 'Prof. Dr. Md. Firoz Kabir', 'Prof. Dr. Md. Firoz Kabir', 'Eye Specialist', '3pm to 8pm', 'Friday', '+8801834220141'),
(78, 'Dr. Md. Shuktarul Islam (Tamim)', 'MBBS, MD (Neurology), CCD (BIRDEM)', 'Neurology ', '6pm to 10pm', 'Thu & Friday', '+8809610009626'),
(79, 'Prof. Dr. Md. Rafiqul Islam', 'MBBS, FCPS (Medicine)\r\nFellow Neurology, WHO (Thailand), Trained in Neurosonology (Singapore)', 'Neurology', '5pm to 8pm', 'Friday', '+8801750557722'),
(80, 'Dr. M. Masum Imran', 'MBBS, BCS (Health), MD (Neurology)\r\nFellow-Stroke (Paralysis) & Neurosonology (NUH, SIngapore)\r\nMemb', 'Neurology', '4pm to 10pm', 'No off day', '+8801726-731290'),
(81, 'Prof. Dr. Md. Azizul Haque', 'MBBS (Dhaka), FCPS (Medicine), MACP (USA)', 'Medicine', '11am to 2pm & 5pm to 8pm', 'Friday', '+8801711144786'),
(82, 'Dr. A.K.M. Shafiqul Islam Qayum', 'MBBS, BCS (Health), MCPS (Medicine), FCPS (Medicine), MD (Gastroenterology), MACP (USA)', 'Medicine', '2.30pm to 5.30pm', 'Friday', '+8801308397223'),
(83, 'Dr. Saha Imran\r\n', 'MBBS, FCPS (Medicine)', 'Medicine', '1pm to 8pm', 'Friday', ' +8801718653835'),
(84, 'Dr. Mohammad Shah Jamal', 'MBBS, FCPS (Medicine), MD (Gastroenterology), Training (Diabetes-BIRDEM)', 'Medicine', '2pm to 6pm', 'Sun & Wed', '+8801708437891'),
(85, 'Dr. Muhammad Shah Alam', 'MBBS, FCPS (Medicine), DEM (BIRDEM)', 'Medicine', ' 4pm to 8pm', 'Friday', '+8801711798083'),
(86, 'Dr. Md. Mostafizur Rahman Khandaker', 'BDS, PGT (Oral & Maxillofacial Surgery)\r\nTrained On Fixed Braces & Dental Implant, Specialist In Smi', 'Dental', '10am to 8pm ', 'Sat & Tue', '+8801316503605'),
(87, 'Dr. Sakina Akter', 'BDS, BCS', 'Dental ', '3pm to 8.30pm', 'No of day', '+8801716982626'),
(88, 'Dr. Ariful Rahman', 'BDS (CMC), BCS (Health), PGT, DDS (Dental Surgery)', 'Dental ', '4pm to 8pm', 'Friday', '+8801919496666'),
(89, 'Dr. Abu Saeed Ibn Harun', 'BDS, MS', 'Dental', '3pm to 8pm', 'Tues & Wednesday', ' +8801711144786'),
(90, 'Dr. Ummay Salma', 'BDS (Dhaka Dental College), BCS (Health)\r\nMS (Prosthodontics), Bangabandhu Sheikh Mujib Medical Univ', 'Dental', '4pm to 8pm', 'Friday', '+88 01919496666');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(1, 'What services does your website provide?', 'Our website provides healthcare services, including appointment bookings, medical advice, and access to hospital information.'),
(2, 'How can I book an appointment?', 'You can book an appointment by navigating to the \"Book Appointment\" section and filling in your details.'),
(3, 'Is there a fee for using your services?', 'Basic features are free, but some advanced features or consultations might have associated fees.'),
(4, 'How can I contact support?', 'You can contact support via email at support@example.com or through the contact form on our website.'),
(5, 'How do I reset my password?', 'To reset your password, go to the login page and click on the \"Forgot Password\" link. Follow the instructions sent to your email.'),
(6, 'Can I cancel my appointment?', 'Yes, you can cancel your appointment from the \"My Appointments\" section. Please cancel at least 24 hours in advance.'),
(7, 'What payment methods are accepted?', 'We accept online payments via cards, mobile wallets (Nagad, bKash), and cash on delivery for certain services.'),
(8, 'How secure is my personal information?', 'We use industry-standard encryption to ensure your data is secure and protected at all times.'),
(9, 'Do I need to create an account to use the website?', 'Yes, creating an account allows you to access all features, including booking appointments and viewing your history.'),
(10, 'Can I update my personal information?', 'Yes, you can update your personal information from the \"Profile\" section after logging in.'),
(11, 'What if I can’t find the doctor I’m looking for?', 'If you can’t find the doctor, please contact our support team, and we’ll assist you in finding the right specialist.'),
(12, 'How do I search for hospitals on the website?', 'You can use the search bar on the \"Hospital List\" page to search for hospitals by name or location.'),
(13, 'What is the refund policy?', 'Refunds are processed within 5-7 business days for canceled services. Please contact support for assistance.'),
(14, 'Is there a mobile app available?', 'Currently, our services are web-based. A mobile app is in development and will be launched soon.');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `hotline_number` varchar(15) NOT NULL,
  `available_tests` text NOT NULL,
  `doctors` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `address`, `hotline_number`, `available_tests`, `doctors`) VALUES
(1, 'Bangladesh Medical College Hospital', 'House 1, Road 5, Dhanmondi, Dhaka, Bangladesh', '+880 2 58151234', 'Blood Test, X-ray, Ultrasound, CT Scan', 'Dr. Amina Sultana, Dr. Rahman Kabir, Dr. Shahinur Rahman'),
(2, 'Apollo Hospitals Dhaka', 'Level-1, Plot-81, Block-C, Bashundhara R/A, Dhaka, Bangladesh', '+880 2 48951715', 'Blood Test, MRI, ECG, CT Scan, Ultrasound', 'Dr. Badrul Alam, Dr. Tanveer Hossain, Dr. Rina Begum'),
(3, 'Evercare Hospital Dhaka', 'Plot-1, Bashundhara R/A, Dhaka, Bangladesh', '+880 2 9841000', 'Blood Test, X-ray, MRI, ECG, Endoscopy', 'Dr. Mofizur Rahman, Dr. Fatima Nasrin, Dr. Shafiqul Islam'),
(4, 'United Hospital Limited', 'United Hospital Limited, Plot-15, Road-71, Gulshan, Dhaka, Bangladesh', '+880 2 9843400', 'Blood Test, Ultrasound, Endoscopy, CT Scan', 'Dr. Khaled Hossain, Dr. Zubair Rahman, Dr. Shirin Akter'),
(5, 'Square Hospitals', '18/F, West Panthapath, Dhaka, Bangladesh', '+880 2 9144444', 'Blood Test, MRI, X-ray, Ultrasound, CT Scan', 'Dr. Shafiqul Islam, Dr. Rabeya Sultana, Dr. Kamrul Hassan'),
(6, 'Medinova Medical Services', 'Plot 4/A, Road 4, Dhanmondi, Dhaka, Bangladesh', '+880 2 9614571', 'Blood Test, X-ray, ECG, Ultrasound', 'Dr. Iqbal Hossain, Dr. Sultana Zohra, Dr. Harunur Rashid'),
(7, 'National Heart Foundation Hospital & Research Institute', 'Plot-1, Road-11, Block-F, Lalmatia, Dhaka, Bangladesh', '+880 2 8141370', 'ECG, Blood Test, Cardiac Test, Ultrasound', 'Dr. Abu Naser, Dr. Shahnaz Parveen, Dr. A. K. M. Nuruzzaman'),
(8, 'Bangladesh Specialized Hospital', 'Plot-1, Road-1, Banani, Dhaka, Bangladesh', '+880 2 9821757', 'Blood Test, X-ray, CT Scan, MRI, Ultrasound', 'Dr. Mohammad Ali, Dr. Nasir Uddin, Dr. Rakibul Hasan'),
(9, 'Gonoshasthaya Kendra Hospital', 'Gonoshasthaya Kendra, Dhanmondi, Dhaka, Bangladesh', '+880 2 9662582', 'Blood Test, X-ray, ECG, Ultrasound', 'Dr. M. M. Akash, Dr. Saiful Islam, Dr. Nusrat Sultana'),
(10, 'Labaid Specialized Hospital', 'Block-B, Plot-1, Dhanmondi, Dhaka, Bangladesh', '+880 2 9121878', 'Blood Test, MRI, Ultrasound, X-ray', 'Dr. Syed Shamsul Alam, Dr. M. A. Sattar, Dr. Dipa Rahman');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `generic_name` varchar(255) NOT NULL,
  `mg` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `generic_name`, `mg`, `unit_price`) VALUES
(1, 'Paracetamol', 'Acetaminophen', 500, 1.50),
(2, 'Ibuprofen', 'Ibuprofen', 400, 2.00),
(3, 'Amoxicillin', 'Amoxicillin', 250, 1.20),
(4, 'Cetirizine', 'Cetirizine Hydrochloride', 10, 0.50),
(5, 'Azithromycin', 'Azithromycin', 500, 2.50);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `test_name`, `hospital`, `price`, `discount`) VALUES
(1, 'CBC', 'PG Hospital', 200, 5),
(2, 'Hepatitis B Virus', 'PG Hospital', 4000, 15),
(3, 'ECG', 'Al Helal Specialized Hospital Ltd.', 800, 15),
(4, 'Platelet count', 'Al Helal Specialized Hospital Ltd.\r\n', 250, 5),
(5, 'X-Ray', 'Labaid Dhanmondi', 600, 10),
(6, 'Hemoglobin (Hb%)', 'Labaid Dhanmondi', 150, 0),
(7, 'Urine R/m/E or Urine Routine Examination', 'Popular Diagnostic Centre Ltd.', 300, 2),
(8, 'MRI of Brain', 'Popular Diagnostic Centre Ltd.', 7000, 15),
(9, 'ECHO Test', 'Popular Diagnostic Centre Ltd.', 1400, 5),
(10, 'Dengue Test', 'Doctors Lab & Hospital (Pvt.) Ltd', 1000, 20),
(11, 'Skin Scraping For Fungus', 'Doctors Lab & Hospital (Pvt.) Ltd', 500, 12),
(12, 'Uric Acid', 'IDEAL HEALTH CITY', 400, 14),
(13, 'Dengue NS1 Ag', 'IDEAL HEALTH CITY', 500, 17),
(14, 'LFT', 'Ibn Sina', 650, 5),
(15, 'Urine Culture and Sensitivity', 'Ibn Sina', 300, 2),
(16, 'CBC', 'Ibn Sina Specialized Hospital', 300, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `gender` varchar(20) NOT NULL DEFAULT 'Male',
  `address` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `blood_group` varchar(3) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `email`, `phone`, `gender`, `address`, `dob`, `blood_group`, `image`, `file`) VALUES
(1, 'asdf', '1234', 'a@b.com', '01716718582', 'MALE', 'asdfsdf', '2025-01-01', 'A+', '../uploads/678d3cd35b1a55.57590501-c13fccbb-0af1-41ef-9f9c-c1b553c15c72.jpg', ''),
(4, 'Sadman Shopan', '66482', 'sadman@gmail.com', '01789328321', 'Male', 'Ullapara,Sirajgonj', '1998-10-30', 'AB+', 'Sadman Shopan_1737567471_profile.png', ''),
(14, 'asif', 'asif', 'asndjl@email.com', '01789328321', 'Male', 'Mirpur 1, Dhaka', '2025-01-16', 'B+', 'asif_1737566216_438259791_1860012921183180_7242649833838022013_n.jpg', NULL),
(15, 'spn', '1234', 'sadmanshopan786@gmail.com', '01789328321', 'Male', 'Mirpur 1, Dhaka', '2025-01-16', 'AB+', NULL, NULL),
(17, 'rana', 'rana', 'sadmanshopan786@gmail.com', '01789328321', 'Male', 'Mirpur 1, Dhaka', '2025-01-30', 'O+', 'rana_1737566397_Untitled hd.png', NULL),
(19, 'roman', 'roam', 'sadmanshopan786@gmail.com', '01789328321', 'Male', 'Mirpur 1, Dhaka', '2025-01-09', 'O+', 'roman_1737566952_Untitled.png', 'roman_1737566972_ML Report Geoup-08.pdf'),
(21, 'psvm', 'gfty', 'sadmanshopan786@gmail.com', '01789328321', 'Male', 'Mirpur 1, Dhaka', '2025-01-19', 'O+', NULL, NULL),
(22, 'masud rana', 'qazx', 'sadmanshopan786@gmail.com', '01789328321', 'Male', 'Mirpur 1, Dhaka', '2024-12-30', 'B-', NULL, NULL),
(24, 'vitysid', 'Pa$$w0rd!', 'cigilufohi@mailinator.com', '+1 (685) 619-70', 'Other', 'Quia incididunt aut', '1970-09-24', 'AB-', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `unique_user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
