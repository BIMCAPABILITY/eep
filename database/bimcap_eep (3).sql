-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 06:31 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimcap_eep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_date` varchar(200) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `admin_password`, `admin_date`, `admin_status`) VALUES
(1, 'admin', 'admin', '24/1/2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `department_date` varchar(200) NOT NULL,
  `department_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_date`, `department_status`) VALUES
(2, 'Account Management ', '25-01-2023 14:07:11', 1),
(4, 'IT', '06-02-2023 07:36:04', 1),
(5, 'BIM Management', '06-02-2023 12:48:16', 1),
(6, 'R&D', '06-02-2023 12:48:23', 1),
(7, 'Human Resources', '06-02-2023 12:48:35', 1),
(8, 'BIMCAP Manila', '06-02-2023 12:48:46', 1),
(9, 'BIMCAP Hong Kong', '06-02-2023 12:48:55', 1),
(10, 'TEST D', '07-02-2023 08:47:22', 1),
(11, 'Marketing Department', '16-02-2023 19:09:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(200) NOT NULL,
  `f_department_id` int(11) NOT NULL,
  `designation_date` varchar(200) NOT NULL,
  `designation_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `f_department_id`, `designation_date`, `designation_status`) VALUES
(2, 'Front End Developer', 1, '25-01-2023 14:19:22', 1),
(4, 'Account Manager', 2, '03-02-2023 11:31:02', 1),
(5, 'Web Developer', 4, '06-02-2023 07:36:19', 1),
(6, 'Director', 5, '06-02-2023 12:49:42', 1),
(7, 'BIM Manager', 5, '06-02-2023 12:49:50', 1),
(8, 'BIM Coordinator', 5, '06-02-2023 12:50:03', 1),
(9, 'Digital Marketing Manager', 11, '16-02-2023 19:10:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_experience`
--

CREATE TABLE `employee_d_experience` (
  `employee_d_experience_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_experience` text DEFAULT NULL,
  `ed_experience_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_d_experience`
--

INSERT INTO `employee_d_experience` (`employee_d_experience_id`, `employee_id`, `ed_experience`, `ed_experience_date`) VALUES
(1, 20, 'test', '01-03-2023 13:03:04'),
(2, 20, '', '01-03-2023 13:11:18'),
(3, 23, '', '01-03-2023 15:14:27'),
(4, 23, '', '02-03-2023 04:41:23'),
(5, 20, '', '02-03-2023 06:56:08'),
(6, 20, '', '02-03-2023 07:30:00'),
(7, 20, '', '02-03-2023 07:38:50'),
(8, 20, '', '02-03-2023 07:44:15'),
(9, 20, '', '02-03-2023 09:06:50'),
(10, 26, 'test', '02-03-2023 12:32:21'),
(11, 23, '', '02-03-2023 12:47:04'),
(12, 23, '', '02-03-2023 12:55:10'),
(13, 23, 'test', '02-03-2023 12:55:28'),
(14, 27, 'test', '02-03-2023 18:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_individual_profile`
--

CREATE TABLE `employee_d_individual_profile` (
  `employee_d_individual_profile_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_individual_profile_email` varchar(200) DEFAULT NULL,
  `ed_individual_profile_contact` varchar(200) DEFAULT NULL,
  `ed_individual_profile_age` varchar(200) DEFAULT NULL,
  `ed_individual_profile_intrest` int(200) DEFAULT NULL,
  `ed_individual_profile_address` varchar(200) DEFAULT NULL,
  `ed_individual_profile_city` varchar(200) DEFAULT NULL,
  `ed_individual_profile_country` varchar(200) DEFAULT NULL,
  `ed_individual_profile_doj` varchar(200) DEFAULT NULL,
  `ed_individual_profile_movie` varchar(200) DEFAULT NULL,
  `ed_individual_profile_book` varchar(200) DEFAULT NULL,
  `ed_individual_profile_tvshow` varchar(200) DEFAULT NULL,
  `ed_individual_profile_color` varchar(200) DEFAULT NULL,
  `ed_individual_profile_music` varchar(200) DEFAULT NULL,
  `ed_individual_profile_food` varchar(200) DEFAULT NULL,
  `ed_submit_status` int(11) NOT NULL DEFAULT 1,
  `ed_individual_profile_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_d_individual_profile`
--

INSERT INTO `employee_d_individual_profile` (`employee_d_individual_profile_id`, `employee_id`, `ed_individual_profile_email`, `ed_individual_profile_contact`, `ed_individual_profile_age`, `ed_individual_profile_intrest`, `ed_individual_profile_address`, `ed_individual_profile_city`, `ed_individual_profile_country`, `ed_individual_profile_doj`, `ed_individual_profile_movie`, `ed_individual_profile_book`, `ed_individual_profile_tvshow`, `ed_individual_profile_color`, `ed_individual_profile_music`, `ed_individual_profile_food`, `ed_submit_status`, `ed_individual_profile_date`) VALUES
(1, 23, 'roy@gmail.com', '+1 1234567', '28', 0, 'testing', 'testing ', 'us', '2023-02-01', 'test', 'test', 'test', 'test', 'test', 'test', 2, '02-03-2023 04:41:23'),
(2, 20, 'frank.murphy@example.com', '1234567890', '', 0, '1521 Hunters Creek Dr', 'dontknow', 'us', '', '', '', '', '', '', '', 2, '02-03-2023 06:56:08'),
(3, 20, 'frank.murphy@example.com', '1234567890', '', 0, '1521 Hunters Creek Dr', 'dontknow', 'us', '', '', '', '', '', '', '', 2, '02-03-2023 07:30:00'),
(4, 20, 'frank.murphy@example.com', '1234567890', '', 0, '1521 Hunters Creek Dr', 'dontknow', 'us', '', '', '', '', '', '', '', 2, '02-03-2023 07:38:50'),
(5, 20, 'frank.murphy@example.com', '1234567890', '', 0, '1521 Hunters Creek Dr', 'dontknow', 'us', '', '', '', '', '', '', '', 2, '02-03-2023 07:44:15'),
(6, 20, 'frank.murphy@example.com', '1234567890', '', 0, '1521 Hunters Creek Dr', 'dontknow', 'us', '', '', '', '', '', '', '', 2, '02-03-2023 09:06:50'),
(7, 26, 'salman@gmail.com', '+880 1236547895', '20', 0, 'ABC', 'ABC', 'bd', '2022-12-09', 'test', 'test', 'test', 'test', 'test', 'test', 2, '02-03-2023 12:32:21'),
(8, 23, 'roy@gmail.com', '+1 1234567', '', 0, 'testing', 'testing ', 'us', '2023-02-01', '', '', '', '', '', '', 2, '02-03-2023 12:47:04'),
(9, 23, 'roy@gmail.com', '+1 1234567', '', 0, 'testing', 'testing ', 'us', '2023-02-01', '', '', '', '', '', '', 2, '02-03-2023 12:55:10'),
(10, 23, 'roy@gmail.com', '+1 1234567', '', 0, 'testing', 'testing ', 'us', '2023-02-01', '', '', '', '', '', '', 2, '02-03-2023 12:55:28'),
(11, 27, 'bala@gmail.com', '+55 9874563215', '20', 0, 'ABC', 'ABC', 'br', '2023-02-02', 'test', 'test', 'test', 'test', 'test', 'test', 2, '02-03-2023 18:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_personality`
--

CREATE TABLE `employee_d_personality` (
  `employee_d_personality_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_personality_type` varchar(200) DEFAULT NULL,
  `ed_personality_role` varchar(200) DEFAULT NULL,
  `ed_personality_code` varchar(200) DEFAULT NULL,
  `ed_personality_strategy` varchar(200) DEFAULT NULL,
  `ed_personality_mind` int(11) DEFAULT NULL,
  `ed_personality_energy` int(11) DEFAULT NULL,
  `ed_personality_nature` int(11) DEFAULT NULL,
  `ed_personality_tactics` int(11) DEFAULT NULL,
  `ed_personality_identify` int(11) DEFAULT NULL,
  `ed_personality_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_d_personality`
--

INSERT INTO `employee_d_personality` (`employee_d_personality_id`, `employee_id`, `ed_personality_type`, `ed_personality_role`, `ed_personality_code`, `ed_personality_strategy`, `ed_personality_mind`, `ed_personality_energy`, `ed_personality_nature`, `ed_personality_tactics`, `ed_personality_identify`, `ed_personality_date`) VALUES
(1, 20, 'test', 'test', 'test', 'test', 2, 3, 2, 5, 3, '02-03-2023 06:56:08'),
(2, 20, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '02-03-2023 07:38:50'),
(3, 20, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '02-03-2023 07:44:15'),
(4, 20, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '02-03-2023 09:06:50'),
(5, 26, 'test', 'test', 'test', 'test', 2, 3, 2, 4, 3, '02-03-2023 12:32:21'),
(6, 23, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '02-03-2023 12:47:04'),
(7, 23, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '02-03-2023 12:55:10'),
(8, 23, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '02-03-2023 12:55:28'),
(9, 27, 'test', 'test', 'test', 'test', 4, 3, 4, 3, 4, '02-03-2023 18:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_qualification`
--

CREATE TABLE `employee_d_qualification` (
  `employee_d_qualification_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_qualification_text` text DEFAULT NULL,
  `ed_qualification_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_d_qualification`
--

INSERT INTO `employee_d_qualification` (`employee_d_qualification_id`, `employee_id`, `ed_qualification_text`, `ed_qualification_date`) VALUES
(1, 23, 'test', '01-03-2023 15:14:27'),
(2, 23, '', '02-03-2023 04:41:23'),
(3, 20, 'test', '02-03-2023 06:56:08'),
(4, 20, 'test', '02-03-2023 07:30:00'),
(5, 20, 'test', '02-03-2023 07:38:50'),
(6, 20, 'test', '02-03-2023 07:44:15'),
(7, 20, '', '02-03-2023 09:06:50'),
(8, 26, 'test', '02-03-2023 12:32:21'),
(9, 23, '', '02-03-2023 12:47:04'),
(10, 23, '', '02-03-2023 12:55:10'),
(11, 23, '', '02-03-2023 12:55:28'),
(12, 27, 'test', '02-03-2023 18:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_salary_history`
--

CREATE TABLE `employee_d_salary_history` (
  `employee_d_salary_history_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_salary_date` varchar(200) DEFAULT NULL,
  `ed_salary_currency` varchar(200) DEFAULT NULL,
  `ed_salary_amount` varchar(200) DEFAULT NULL,
  `ed_salary_post_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_d_salary_history`
--

INSERT INTO `employee_d_salary_history` (`employee_d_salary_history_id`, `employee_id`, `ed_salary_date`, `ed_salary_currency`, `ed_salary_amount`, `ed_salary_post_date`) VALUES
(1, 20, '2023-03-01', 'RS', '30000', '01-03-2023 13:11:18'),
(2, 23, '', '', '', '01-03-2023 15:14:27'),
(3, 23, '', '', '', '02-03-2023 04:41:23'),
(4, 20, '', '', '', '02-03-2023 06:56:08'),
(5, 20, '', '', '', '02-03-2023 07:30:00'),
(6, 20, '', '', '', '02-03-2023 07:38:50'),
(7, 20, '', '', '', '02-03-2023 07:44:15'),
(8, 20, '', '', '', '02-03-2023 09:06:50'),
(9, 26, '2023-02-02', 'RS', '20000', '02-03-2023 12:32:21'),
(10, 23, '', '', '', '02-03-2023 12:47:04'),
(11, 23, '', '', '', '02-03-2023 12:55:10'),
(12, 23, '', '', '', '02-03-2023 12:55:28'),
(13, 27, '2023-02-15', 'IN', '100000', '02-03-2023 18:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_skills`
--

CREATE TABLE `employee_d_skills` (
  `ed_skills_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_arc` int(11) DEFAULT NULL,
  `ed_str` int(11) DEFAULT NULL,
  `ed_mep` int(11) DEFAULT NULL,
  `ed_mgmt` int(11) DEFAULT NULL,
  `ed_docs` int(11) DEFAULT NULL,
  `ed_4d` int(11) DEFAULT NULL,
  `ed_clash` int(11) DEFAULT NULL,
  `ed_dyna` int(11) DEFAULT NULL,
  `ed_rndr` int(11) DEFAULT NULL,
  `ed_mrkt` int(11) DEFAULT NULL,
  `ed_bd` int(11) DEFAULT NULL,
  `ed_skills_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_d_skills`
--

INSERT INTO `employee_d_skills` (`ed_skills_id`, `employee_id`, `ed_arc`, `ed_str`, `ed_mep`, `ed_mgmt`, `ed_docs`, `ed_4d`, `ed_clash`, `ed_dyna`, `ed_rndr`, `ed_mrkt`, `ed_bd`, `ed_skills_date`) VALUES
(1, 20, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, '01-03-2023 12:41:02'),
(2, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01-03-2023 12:41:19'),
(3, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01-03-2023 12:52:44'),
(4, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01-03-2023 13:03:04'),
(5, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01-03-2023 13:11:18'),
(6, 23, NULL, NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '01-03-2023 15:14:27'),
(7, 23, NULL, NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '02-03-2023 04:41:23'),
(8, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-03-2023 06:56:08'),
(9, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-03-2023 07:30:00'),
(10, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-03-2023 07:38:50'),
(11, 20, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-03-2023 07:44:15'),
(12, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-03-2023 09:06:50'),
(13, 26, NULL, 1, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, NULL, '02-03-2023 12:32:21'),
(14, 23, NULL, NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '02-03-2023 12:47:04'),
(15, 23, NULL, NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '02-03-2023 12:55:10'),
(16, 23, NULL, NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '02-03-2023 12:55:28'),
(17, 27, NULL, NULL, 1, NULL, NULL, NULL, 1, 1, NULL, 1, 1, '02-03-2023 18:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_software_expertise`
--

CREATE TABLE `employee_d_software_expertise` (
  `employee_d_software_expertise_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_software_revit` int(11) DEFAULT NULL,
  `ed_software_navisworks` int(11) DEFAULT NULL,
  `ed_software_autocad` int(11) DEFAULT NULL,
  `ed_software_rhinoceros` int(11) DEFAULT NULL,
  `ed_software_3dsmax` int(11) DEFAULT NULL,
  `ed_software_iconodynmad` int(11) DEFAULT NULL,
  `ed_software_enscape` int(11) DEFAULT NULL,
  `ed_software_agacad` int(11) DEFAULT NULL,
  `ed_software_sketchup` int(11) DEFAULT NULL,
  `ed_software_msword` int(11) DEFAULT NULL,
  `ed_software_msexcel` int(11) DEFAULT NULL,
  `ed_software_photoshop` int(11) DEFAULT NULL,
  `ed_software_ai` int(11) DEFAULT NULL,
  `ed_software_indesign` int(11) DEFAULT NULL,
  `ed_software_ae` int(11) DEFAULT NULL,
  `ed_software_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_d_software_expertise`
--

INSERT INTO `employee_d_software_expertise` (`employee_d_software_expertise_id`, `employee_id`, `ed_software_revit`, `ed_software_navisworks`, `ed_software_autocad`, `ed_software_rhinoceros`, `ed_software_3dsmax`, `ed_software_iconodynmad`, `ed_software_enscape`, `ed_software_agacad`, `ed_software_sketchup`, `ed_software_msword`, `ed_software_msexcel`, `ed_software_photoshop`, `ed_software_ai`, `ed_software_indesign`, `ed_software_ae`, `ed_software_date`) VALUES
(1, 20, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, '02-03-2023 07:44:15'),
(2, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-03-2023 09:06:50'),
(3, 26, 2, 3, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, '02-03-2023 12:32:21'),
(4, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-03-2023 12:47:04'),
(5, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-03-2023 12:55:10'),
(6, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-03-2023 12:55:28'),
(7, 27, 7, 6, 7, 6, 7, 6, 7, 6, 7, 6, 7, 6, 7, 6, 7, '02-03-2023 18:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_status`
--

CREATE TABLE `employee_d_status` (
  `employee_d_status_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_part_full` int(11) DEFAULT NULL,
  `eb_status_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_d_status`
--

INSERT INTO `employee_d_status` (`employee_d_status_id`, `employee_id`, `ed_part_full`, `eb_status_date`) VALUES
(1, 20, 1, '01-03-2023 12:52:44'),
(2, 20, NULL, '01-03-2023 13:03:04'),
(3, 20, NULL, '01-03-2023 13:11:18'),
(4, 23, NULL, '01-03-2023 15:14:27'),
(5, 23, NULL, '02-03-2023 04:41:23'),
(6, 20, NULL, '02-03-2023 06:56:08'),
(7, 20, NULL, '02-03-2023 07:30:00'),
(8, 20, NULL, '02-03-2023 07:38:50'),
(9, 20, NULL, '02-03-2023 07:44:15'),
(10, 20, 2, '02-03-2023 09:06:50'),
(11, 26, 2, '02-03-2023 12:32:21'),
(12, 23, NULL, '02-03-2023 12:47:04'),
(13, 23, NULL, '02-03-2023 12:55:10'),
(14, 23, NULL, '02-03-2023 12:55:28'),
(15, 27, 2, '02-03-2023 18:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `employee_performance`
--

CREATE TABLE `employee_performance` (
  `emp_performance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `manager_name` varchar(200) DEFAULT NULL,
  `emp_performance_start_date` varchar(200) NOT NULL,
  `emp_performance_end_date` varchar(200) NOT NULL,
  `main_emp_avg` float NOT NULL,
  `performance_post_date` varchar(200) NOT NULL,
  `submit_employee_status` int(11) NOT NULL DEFAULT 0,
  `submit_manager_status` int(11) NOT NULL DEFAULT 0,
  `employee_performance_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_performance`
--

INSERT INTO `employee_performance` (`emp_performance_id`, `employee_id`, `manager_id`, `manager_name`, `emp_performance_start_date`, `emp_performance_end_date`, `main_emp_avg`, `performance_post_date`, `submit_employee_status`, `submit_manager_status`, `employee_performance_status`) VALUES
(1, 14, NULL, NULL, '2023-01-16', '2023-02-09', 3.65, '09-02-2023 08:34:45', 0, 0, 1),
(2, 11, NULL, NULL, '2023-02-01', '2023-02-09', 3.96, '09-02-2023 18:17:09', 0, 0, 1),
(3, 18, NULL, NULL, '2022-09-13', '2023-02-01', 3.16, '16-02-2023 19:14:01', 0, 0, 1),
(4, 17, NULL, NULL, '2022-09-29', '2023-02-01', 2.28, '16-02-2023 19:23:59', 0, 0, 1),
(5, 19, 23, 'amnda', '2022-11-01', '2022-10-13', 2.62, '16-02-2023 19:34:36', 0, 2, 1),
(6, 16, NULL, NULL, '2023-02-23', '2023-03-02', 0.27, '17-02-2023 08:21:01', 0, 0, 1),
(7, 20, 23, 'amanda', '2022-12-01', '2023-02-22', 2.96, '22-02-2023 07:59:46', 1, 2, 1),
(8, 24, NULL, NULL, '2023-02-01', '2023-02-24', 0.63, '23-02-2023 20:02:55', 0, 0, 1),
(9, 21, NULL, NULL, '2023-02-01', '2023-02-24', 0.2, '23-02-2023 20:08:57', 0, 0, 1),
(10, 21, NULL, NULL, '2023-02-01', '2023-02-24', 0.2, '23-02-2023 20:09:21', 0, 0, 1),
(11, 25, 27, 'bala', '2023-02-01', '2023-02-24', 3.41, '23-02-2023 20:15:12', 1, 2, 1),
(12, 23, NULL, NULL, '2023-02-24', '2023-02-25', 3.23, '24-02-2023 07:17:09', 1, 0, 1),
(13, 26, 23, 'amanda', '2022-12-01', '2023-03-02', 2.8, '02-03-2023 18:20:57', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `main_employee_id` int(11) NOT NULL,
  `employee_first_name` varchar(200) NOT NULL,
  `employee_last_name` varchar(200) NOT NULL,
  `employee_email` varchar(200) NOT NULL,
  `employee_number` varchar(200) NOT NULL,
  `employee_address` varchar(200) NOT NULL,
  `employee_city` varchar(200) NOT NULL,
  `employee_country` varchar(200) NOT NULL,
  `employee_department` varchar(200) NOT NULL,
  `employee_designation` varchar(200) NOT NULL,
  `employee_image` varchar(200) NOT NULL,
  `employee_doj` varchar(200) NOT NULL,
  `employee_dot` varchar(200) NOT NULL,
  `employee_status` int(11) NOT NULL,
  `emp_post_date` varchar(200) NOT NULL,
  `emp_password` varchar(200) NOT NULL,
  `emp_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`main_employee_id`, `employee_first_name`, `employee_last_name`, `employee_email`, `employee_number`, `employee_address`, `employee_city`, `employee_country`, `employee_department`, `employee_designation`, `employee_image`, `employee_doj`, `employee_dot`, `employee_status`, `emp_post_date`, `emp_password`, `emp_level`) VALUES
(11, 'Avinash', 'Singhal', 'avinash.singhal@bimcap.com', '01234 567890', '206, Sai Yeung Choi Street South ', 'Durg', 'gb', '2', 'Account Manager', 'upload/2023/feb/03/heheman.jpg', '2021-12-01', '', 1, '03-02-2023 10:22:50', '', NULL),
(12, 'Albert Flores', 'Flores', 'albertflores@gmail.com', '+852 1236547896', '206, Sai Yeung Choi Street South ', 'Mong Kok', 'hk', '4', 'Web Developer', 'upload/2023/feb/03/user-1-ad58ce72.jpg', '2022-12-01', '', 1, '03-02-2023 11:35:03', '', NULL),
(13, 'Belle Ferguson', 'Ferguson', 'belleferguson@gmail.com', '1236547892', '206, Sai Yeung Choi Street South ', 'Mong Kok', 'jp', '2', 'Account Manager', 'upload/2023/feb/03/balle.png', '2023-01-13', '', 1, '03-02-2023 11:52:34', '', NULL),
(14, 'Nadeem', 'Babu', 'nadeem@bimcap.com', '088177 77405', 'Luchki para durg 491001', 'Durg', 'in', '4', 'Web Developer', 'upload/2023/feb/09/nadeemq.jpg', '2023-01-16', '', 1, '06-02-2023 07:37:14', '', NULL),
(16, 'Kevin', 'Cheng', 'k@abc.com', '+1 56785', 'ABC', 'ABC', 'us', '5', 'Director', 'upload/2023/feb/07/nadeemq.jfif', '2023-02-02', '', 1, '07-02-2023 08:47:04', '', NULL),
(17, 'Thomas', 'Morin', 'thomas.morin@gmail.com', '+1 1234569857', '3421 West Ninth Street ', 'Waterloo', 'ca', '2', 'Account Manager', 'upload/2023/feb/16/thomas.jfif', '2021-09-16', '', 1, '16-02-2023 18:08:54', '', NULL),
(18, 'Elizabeth', 'Alford', 'elizabeth@gmail.com', '1236547896', '700 East University Avenue', 'Des Moines', 'bh', '11', 'Digital Marketing Manager', 'upload/2023/feb/16/spide2.jpg', '2022-11-17', '', 1, '16-02-2023 19:03:29', '', NULL),
(19, 'Jeffery', 'Gourlay', 'jeffery@gmail.com', '+1 1236547896', 'Port Neal Landing', 'Sergeant Bluff', 'us', '11', 'Digital Marketing Manager', 'upload/2023/feb/16/images.jfif', '2022-10-12', '', 1, '16-02-2023 19:32:52', '', NULL),
(20, 'Frank', 'Murphy', 'frank.murphy@example.com', '1234567890', '1521 Hunters Creek Dr', 'dontknow', 'us', '2', 'Account Manager', 'upload/2023/feb/21/24.jpg', '', '', 1, '21-02-2023 12:10:07', '123', 2),
(22, 'Richmond', 'Jhon', 'richmond.john@bimcap.com', '+63 76789876', 'Manila', 'Manila', 'ph', '5', 'BIM Coordinator', 'upload/2023/feb/22/FjU2lkcWYAgNG6d.jpg', '2023-02-01', '', 1, '22-02-2023 12:45:23', 'P@ss1234', 2),
(23, 'amanda', 'roy', 'roy@gmail.com', '+1 1234567', 'testing', 'testing ', 'us', '2', 'Account Manager', 'upload/2023/feb/23/roy.jpg', '2023-02-01', '', 1, '23-02-2023 19:17:08', '123', 3),
(24, 'harry', 'potter', 'potter@gmail.com', '+1 1234567890', 'test', 'test', 'af', '4', 'Web Developer', 'upload/2023/feb/23/potter.jpg', '2023-02-01', '', 1, '23-02-2023 19:26:00', '123', 2),
(25, 'joee', 'lobo', 'lobo@gmail.com', '+1 1234567896', 'test', 'test', 'us', '2', 'Account Manager', 'upload/2023/feb/23/licensed-image.jfif', '2023-02-01', '2023-02-01', 1, '23-02-2023 20:14:29', '123', 2),
(26, 'salman', 'khan', 'salman@gmail.com', '+880 1236547895', 'ABC', 'ABC', 'bd', '4', 'Web Developer', 'upload/2023/mar/02/blank-profile-photo.jpeg', '2022-12-09', '', 1, '02-03-2023 11:42:44', '12345', 2),
(27, 'bala', 'anadh', 'bala@gmail.com', '+55 9874563215', 'ABC', 'ABC', 'br', '2', 'Account Manager', 'upload/2023/mar/02/blank-profile-photo2.jpeg', '2023-02-02', '', 1, '02-03-2023 11:44:20', '123', 3),
(28, 'rocky', 'ar', 'rocky@gmail.com', '+53 1234567895', 'test', 'test', 'cu', '4', 'Web Developer', 'upload/2023/mar/02/batman.jpg', '2023-02-02', '2023-03-02', 1, '02-03-2023 18:37:09', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `p_adaptability_table`
--

CREATE TABLE `p_adaptability_table` (
  `p_adaptability_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `adaptability_short_amount_of_time` int(11) DEFAULT NULL,
  `adaptability_ability_to_adjust_depending` int(11) DEFAULT NULL,
  `adaptability_work_on_multiple_projects` int(11) DEFAULT NULL,
  `adaptability_learn_new_disciplines_software` int(11) DEFAULT NULL,
  `p_adaptability_emp_avg` float DEFAULT NULL,
  `adaptability_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_adaptability_table`
--

INSERT INTO `p_adaptability_table` (`p_adaptability_id`, `employee_id`, `adaptability_short_amount_of_time`, `adaptability_ability_to_adjust_depending`, `adaptability_work_on_multiple_projects`, `adaptability_learn_new_disciplines_software`, `p_adaptability_emp_avg`, `adaptability_comments`) VALUES
(1, 14, 4, 5, 3, 2, 3.5, 'test'),
(2, 14, 4, 5, 3, 2, 3.5, 'test'),
(3, 11, 4, 3, 5, 3, 3.75, 'test'),
(4, 11, 4, 3, 5, 3, 3.75, 'test'),
(5, 18, 3, 3, 2, 3, 2.75, 'test'),
(6, 17, 2, 2, 2, 2, 2, 'test'),
(7, 19, 2, 3, 2, 4, 2.75, 'Test'),
(8, 16, NULL, NULL, NULL, NULL, 0, ''),
(9, 20, 3, 4, 3, 4, 3.5, ''),
(10, 20, 3, 4, 3, 4, 3.5, ''),
(11, 24, NULL, NULL, NULL, NULL, 0, ''),
(12, 21, NULL, NULL, NULL, NULL, 0, ''),
(13, 21, NULL, NULL, NULL, NULL, 0, ''),
(14, 21, NULL, NULL, NULL, NULL, 0, ''),
(15, 25, 3, 4, 3, 3, 3.25, 'test'),
(16, 23, 4, 4, 4, 4, 4, ''),
(17, 26, 3, 2, 2, 3, 2.5, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_communication_table`
--

CREATE TABLE `p_communication_table` (
  `p_communication_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `communication_proactively_asking` int(11) DEFAULT NULL,
  `communication_responds_to_messages` int(11) DEFAULT NULL,
  `communication_proactively_informing` int(11) DEFAULT NULL,
  `communication_level_of_english` int(11) DEFAULT NULL,
  `communication_team_client` int(11) DEFAULT NULL,
  `communication_Informs_the_supervisor` int(11) DEFAULT NULL,
  `communication_comments` text DEFAULT NULL,
  `communication_emp_avg` float DEFAULT NULL,
  `p_communication_post_date` varchar(200) NOT NULL,
  `p_communication_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_communication_table`
--

INSERT INTO `p_communication_table` (`p_communication_id`, `employee_id`, `communication_proactively_asking`, `communication_responds_to_messages`, `communication_proactively_informing`, `communication_level_of_english`, `communication_team_client`, `communication_Informs_the_supervisor`, `communication_comments`, `communication_emp_avg`, `p_communication_post_date`, `p_communication_status`) VALUES
(1, 14, 4, 4, 3, 4, 3, 4, 'test', 3.67, '09-02-2023 08:34:15', 1),
(2, 14, 4, 4, 3, 4, 3, 4, 'test', 3.67, '09-02-2023 08:34:45', 1),
(3, 11, 3, 4, 3, 5, 4, 5, 'test', 4, '09-02-2023 18:15:34', 1),
(4, 11, 3, 4, 3, 5, 4, 5, 'test', 4, '09-02-2023 18:17:09', 1),
(5, 18, 2, 4, 2, 2, 4, 2, 'test', 2.67, '16-02-2023 19:14:01', 1),
(6, 17, 2, 2, 2, 2, 2, 2, 'test', 2, '16-02-2023 19:23:59', 1),
(7, 19, 4, 1, 3, 1, 4, 2, 'Test', 2.5, '16-02-2023 19:34:36', 1),
(8, 16, 3, 3, 3, 3, 2, 2, '', 2.67, '17-02-2023 08:21:01', 1),
(9, 20, 3, 4, 2, 5, 4, 4, 'test', 3.67, '22-02-2023 07:58:53', 1),
(10, 20, 3, 4, 2, 5, 4, 4, 'test', 3.67, '22-02-2023 07:59:46', 1),
(11, 24, 3, 3, 2, 2, 2, 2, '123', 2.33, '23-02-2023 20:02:55', 1),
(12, 21, 2, 2, 2, 2, 2, 2, 'test', 2, '23-02-2023 20:08:08', 1),
(13, 21, 2, 2, 2, 2, 2, 2, 'test', 2, '23-02-2023 20:08:57', 1),
(14, 21, 2, 2, 2, 2, 2, 2, 'test', 2, '23-02-2023 20:09:20', 1),
(15, 25, 4, 4, 3, 4, 3, 2, 'test', 3.33, '23-02-2023 20:15:12', 1),
(16, 23, 5, 4, 4, 4, 4, 4, '', 4.17, '24-02-2023 07:17:09', 1),
(17, 26, 3, 2, 2, 2, 2, 1, 'test', 2, '02-03-2023 18:20:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_creativity_problem_solving_table`
--

CREATE TABLE `p_creativity_problem_solving_table` (
  `p_creativity_problem_solving_table` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `creativity_problem_solving_learn_new_project` int(11) DEFAULT NULL,
  `creativity_problem_solving_depending_project_needs` int(11) DEFAULT NULL,
  `creativity_problem_solving_work_multiple_projects` int(11) DEFAULT NULL,
  `creativity_problem_solving_knowledge_to_new_challenges` int(11) DEFAULT NULL,
  `p_creativity_problem_solving_emp_avg` float DEFAULT NULL,
  `creativity_problem_solving_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_creativity_problem_solving_table`
--

INSERT INTO `p_creativity_problem_solving_table` (`p_creativity_problem_solving_table`, `employee_id`, `creativity_problem_solving_learn_new_project`, `creativity_problem_solving_depending_project_needs`, `creativity_problem_solving_work_multiple_projects`, `creativity_problem_solving_knowledge_to_new_challenges`, `p_creativity_problem_solving_emp_avg`, `creativity_problem_solving_comments`) VALUES
(1, 14, 3, 4, 3, 4, 3.5, 'test'),
(2, 14, 3, 4, 3, 4, 3.5, 'test'),
(3, 11, 4, 5, 4, 5, 4.5, 'test'),
(4, 18, 3, 2, 3, 2, 2.5, 'test'),
(5, 17, 1, 1, 1, 1, 1, 'test'),
(6, 19, 2, 3, 2, 3, 2.5, 'Test'),
(7, 16, NULL, NULL, NULL, NULL, 0, ''),
(8, 20, 2, 3, 2, 3, 2.5, ''),
(9, 20, 2, 3, 2, 3, 2.5, ''),
(10, 24, NULL, NULL, NULL, NULL, 0, ''),
(11, 21, NULL, NULL, NULL, NULL, 0, ''),
(12, 21, NULL, NULL, NULL, NULL, 0, ''),
(13, 21, NULL, NULL, NULL, NULL, 0, ''),
(14, 25, 3, 4, 4, 4, 3.75, 'test'),
(15, 23, 3, 4, 3, 4, 3.5, ''),
(16, 26, 3, 2, 2, 3, 2.5, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_dependability_table`
--

CREATE TABLE `p_dependability_table` (
  `p_dependability_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `dependability_handle_a_team` int(11) DEFAULT NULL,
  `dependability_handle_a_project` int(11) DEFAULT NULL,
  `dependability_the_set_deadlines` int(11) DEFAULT NULL,
  `dependability_emp_avg` float DEFAULT NULL,
  `dependability_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_dependability_table`
--

INSERT INTO `p_dependability_table` (`p_dependability_id`, `employee_id`, `dependability_handle_a_team`, `dependability_handle_a_project`, `dependability_the_set_deadlines`, `dependability_emp_avg`, `dependability_comments`) VALUES
(1, 14, 5, 4, 5, 4.67, 'test'),
(2, 14, 5, 4, 5, 4.67, 'test'),
(3, 11, 4, 3, 4, 3.67, 'test'),
(4, 11, 4, 3, 4, 3.67, 'test'),
(5, 18, 4, 2, 3, 3, 'test'),
(6, 17, 3, 2, 3, 2.67, 'test'),
(7, 19, 2, 4, 2, 2.67, 'Test'),
(8, 16, NULL, NULL, NULL, 0, ''),
(9, 20, 2, 3, 2, 2.33, ''),
(10, 20, 2, 3, 2, 2.33, ''),
(11, 24, NULL, NULL, NULL, 0, ''),
(12, 21, NULL, NULL, NULL, 0, ''),
(13, 21, NULL, NULL, NULL, 0, ''),
(14, 21, NULL, NULL, NULL, 0, ''),
(15, 25, 4, 4, 3, 3.67, 'test'),
(16, 23, 3, 3, 3, 3, ''),
(17, 26, 4, 3, 4, 3.67, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_initiative_proactive_table`
--

CREATE TABLE `p_initiative_proactive_table` (
  `p_initiative_proactive_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `initiative_proactive_ability_to_learn_new_project` int(11) DEFAULT NULL,
  `initiative_proactive_adjust_depending_on_the_project` int(11) DEFAULT NULL,
  `initiative_proactive_work_on_multiple_projects` int(11) DEFAULT NULL,
  `initiative_proactive_learn_new_disciplines_software` int(11) DEFAULT NULL,
  `p_initiative_proactive_emp_avg` float DEFAULT NULL,
  `initiative_proactive_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_initiative_proactive_table`
--

INSERT INTO `p_initiative_proactive_table` (`p_initiative_proactive_id`, `employee_id`, `initiative_proactive_ability_to_learn_new_project`, `initiative_proactive_adjust_depending_on_the_project`, `initiative_proactive_work_on_multiple_projects`, `initiative_proactive_learn_new_disciplines_software`, `p_initiative_proactive_emp_avg`, `initiative_proactive_comments`) VALUES
(1, 14, 3, 4, 3, 2, 3, 'test'),
(2, 11, 4, 5, 4, 5, 4.5, 'test'),
(3, 18, 4, 3, 4, 3, 3.5, 'test'),
(4, 17, 3, 2, 1, 2, 2, 'test'),
(5, 19, 2, 4, 3, 2, 2.75, 'Test'),
(6, 16, NULL, NULL, NULL, NULL, 0, ''),
(7, 20, 4, 3, 2, 4, 3.25, ''),
(8, 20, 4, 3, 2, 4, 3.25, ''),
(9, 24, NULL, NULL, NULL, NULL, 0, ''),
(10, 21, NULL, NULL, NULL, NULL, 0, ''),
(11, 21, NULL, NULL, NULL, NULL, 0, ''),
(12, 21, NULL, NULL, NULL, NULL, 0, ''),
(13, 25, 4, 4, 4, 3, 3.75, 'test'),
(14, 23, 4, 3, 3, 3, 3.25, ''),
(15, 26, 4, 2, 4, 3, 3.25, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_knowledge_table`
--

CREATE TABLE `p_knowledge_table` (
  `p_knowledge_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `knowledge_standards_and_portfolio` int(11) DEFAULT NULL,
  `knowledge_bim_project_requirements` int(11) DEFAULT NULL,
  `knowledge_of_the_construction_industry` int(11) DEFAULT NULL,
  `knowledge_emp_avg` float DEFAULT NULL,
  `knowledge_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_knowledge_table`
--

INSERT INTO `p_knowledge_table` (`p_knowledge_id`, `employee_id`, `knowledge_standards_and_portfolio`, `knowledge_bim_project_requirements`, `knowledge_of_the_construction_industry`, `knowledge_emp_avg`, `knowledge_comments`) VALUES
(1, 14, 3, 4, 4, 3.67, 'test'),
(2, 14, 3, 4, 4, 3.67, 'test'),
(3, 11, 4, 3, 4, 3.67, 'test'),
(4, 11, 4, 3, 4, 3.67, 'test'),
(5, 18, 4, 4, 3, 3.67, 'test'),
(6, 17, 2, 2, 2, 2, 'test'),
(7, 19, 3, 4, 3, 3.33, 'Test'),
(8, 16, NULL, NULL, NULL, 0, ''),
(9, 20, 2, 3, 4, 3, ''),
(10, 20, 2, 3, 4, 3, ''),
(11, 24, NULL, NULL, NULL, 0, ''),
(12, 21, NULL, NULL, NULL, 0, ''),
(13, 21, NULL, NULL, NULL, 0, ''),
(14, 21, NULL, NULL, NULL, 0, ''),
(15, 25, 2, 4, 3, 3, 'test'),
(16, 23, 3, 3, 3, 3, ''),
(17, 26, 4, 2, 2, 2.67, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_productivity_table`
--

CREATE TABLE `p_productivity_table` (
  `productivity_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `productivity_speed_of_modelling` int(11) DEFAULT NULL,
  `productivity_absence_or_minimum` int(11) DEFAULT NULL,
  `productivity_timelines_and_deadlines` int(11) DEFAULT NULL,
  `productivity_emp_avg` float DEFAULT NULL,
  `productivity_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_productivity_table`
--

INSERT INTO `p_productivity_table` (`productivity_id`, `employee_id`, `productivity_speed_of_modelling`, `productivity_absence_or_minimum`, `productivity_timelines_and_deadlines`, `productivity_emp_avg`, `productivity_comments`) VALUES
(1, 14, 2, 4, 4, 3.33, 'test'),
(2, 14, 2, 4, 4, 3.33, 'test'),
(3, 11, 3, 4, 3, 3.33, 'test'),
(4, 11, 3, 4, 3, 3.33, 'test'),
(5, 18, 4, 3, 4, 3.67, 'test'),
(6, 17, 3, 3, 3, 3, 'test'),
(7, 19, 2, 3, 2, 2.33, 'Test'),
(8, 16, NULL, NULL, NULL, 0, ''),
(9, 20, 2, 5, 1, 2.67, ''),
(10, 20, 2, 5, 1, 2.67, ''),
(11, 24, 2, 2, 2, 2, ''),
(12, 21, NULL, NULL, NULL, 0, ''),
(13, 21, NULL, NULL, NULL, 0, ''),
(14, 21, NULL, NULL, NULL, 0, ''),
(15, 25, 2, 4, 4, 3.33, 'test'),
(16, 23, 3, 2, 2, 2.33, ''),
(17, 26, 4, 3, 4, 3.67, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_quality_table`
--

CREATE TABLE `p_quality_table` (
  `p_quality_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `quality_attention_to_details` int(11) DEFAULT NULL,
  `quality_mistakes_requiring_correction` int(11) DEFAULT NULL,
  `quality_meets_the_expectations` int(11) DEFAULT NULL,
  `quality_conducts_qa_qc` int(11) DEFAULT NULL,
  `quality_follows_the_correct_workflow_set` int(11) DEFAULT NULL,
  `quality_emp_avg` float DEFAULT NULL,
  `quality_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_quality_table`
--

INSERT INTO `p_quality_table` (`p_quality_id`, `employee_id`, `quality_attention_to_details`, `quality_mistakes_requiring_correction`, `quality_meets_the_expectations`, `quality_conducts_qa_qc`, `quality_follows_the_correct_workflow_set`, `quality_emp_avg`, `quality_comments`) VALUES
(1, 14, 5, 4, 5, 4, 5, 3.33, 'test'),
(2, 14, 5, 4, 5, 4, 5, 3.33, 'test'),
(3, 11, 4, 4, 5, 3, 5, 3.33, 'test'),
(4, 11, 4, 4, 5, 3, 5, 3.33, 'test'),
(5, 18, 5, 3, 4, 3, 2, 3.67, 'test'),
(6, 17, 3, 3, 3, 3, 3, 3, 'test'),
(7, 19, 1, 2, 4, 3, 1, 2.2, 'Test'),
(8, 16, NULL, NULL, NULL, NULL, NULL, 0, ''),
(9, 20, 4, 2, 4, 2, 4, 3.2, ''),
(10, 20, 4, 2, 4, 2, 4, 3.2, ''),
(11, 24, NULL, NULL, NULL, NULL, NULL, 2, ''),
(12, 21, NULL, NULL, NULL, NULL, NULL, 0, ''),
(13, 21, NULL, NULL, NULL, NULL, NULL, 0, ''),
(14, 21, NULL, NULL, NULL, NULL, NULL, 0, ''),
(15, 25, 4, 3, 2, 4, 3, 3.2, 'test'),
(16, 23, 3, 3, 3, 3, 3, 3, ''),
(17, 26, 3, 2, 3, 2, 3, 2.6, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_signature`
--

CREATE TABLE `p_signature` (
  `p_signature_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `p_signature_img` varchar(200) NOT NULL,
  `p_signature_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_signature`
--

INSERT INTO `p_signature` (`p_signature_id`, `employee_id`, `p_signature_img`, `p_signature_date`) VALUES
(7, 11, 'upload/2023/feb/16/nadeem_s1.png', '16-02-2023 11:45:11'),
(10, 17, 'upload/2023/feb/16/nadeem_s1.png', '16-02-2023 19:37:41'),
(11, 19, 'upload/2023/feb/17/nadeem_s1.png', '17-02-2023 07:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `p_software_table`
--

CREATE TABLE `p_software_table` (
  `p_software_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `software_bitrix_tasks_and_leaves` int(11) DEFAULT NULL,
  `software_digital_tools_production_communication` int(11) DEFAULT NULL,
  `software_emp_avg` float DEFAULT NULL,
  `software_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_software_table`
--

INSERT INTO `p_software_table` (`p_software_id`, `employee_id`, `software_bitrix_tasks_and_leaves`, `software_digital_tools_production_communication`, `software_emp_avg`, `software_comments`) VALUES
(1, 14, 3, 4, 3.5, 'test'),
(2, 14, 3, 4, 3.5, 'test'),
(3, 11, 4, 5, 4.5, 'test'),
(4, 11, 4, 5, 4.5, 'test'),
(5, 18, 4, 3, 3.5, 'test'),
(6, 17, 3, 2, 2.5, 'test'),
(7, 19, 2, 3, 2.5, 'Test'),
(8, 16, NULL, NULL, 0, ''),
(9, 20, 3, 2, 2.5, ''),
(10, 20, 3, 2, 2.5, ''),
(11, 24, NULL, NULL, 0, ''),
(12, 21, NULL, NULL, 0, ''),
(13, 21, NULL, NULL, 0, ''),
(14, 21, NULL, NULL, 0, ''),
(15, 25, 3, 4, 3.5, 'test'),
(16, 23, 3, 3, 3, ''),
(17, 26, 3, 2, 2.5, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_time_management_table`
--

CREATE TABLE `p_time_management_table` (
  `p_time_management_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `time_management_scheduled_work_shift` int(11) DEFAULT NULL,
  `time_management_required_working_hours` int(11) DEFAULT NULL,
  `time_management_deadlinesclearly_with_your_teammates` int(11) DEFAULT NULL,
  `time_management_emp_avg` float DEFAULT NULL,
  `time_management_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_time_management_table`
--

INSERT INTO `p_time_management_table` (`p_time_management_id`, `employee_id`, `time_management_scheduled_work_shift`, `time_management_required_working_hours`, `time_management_deadlinesclearly_with_your_teammates`, `time_management_emp_avg`, `time_management_comments`) VALUES
(1, 14, 4, 5, 4, 4.33, 'test'),
(2, 14, 4, 5, 4, 4.33, 'test'),
(3, 11, 4, 5, 4, 4.33, 'test'),
(4, 11, 4, 5, 4, 4.33, 'test'),
(5, 18, 3, 2, 3, 2.67, 'test'),
(6, 17, 3, 2, 3, 2.67, 'test'),
(7, 19, 2, 3, 3, 2.67, 'Test'),
(8, 16, NULL, NULL, NULL, 0, ''),
(9, 20, 3, 2, 4, 3, ''),
(10, 20, 3, 2, 4, 3, ''),
(11, 24, NULL, NULL, NULL, 0, ''),
(12, 21, NULL, NULL, NULL, 0, ''),
(13, 21, NULL, NULL, NULL, 0, ''),
(14, 21, NULL, NULL, NULL, 0, ''),
(15, 25, 3, 4, 3, 3.33, 'test'),
(16, 23, 3, 3, 3, 3, ''),
(17, 26, 3, 2, 3, 2.67, 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee_d_experience`
--
ALTER TABLE `employee_d_experience`
  ADD PRIMARY KEY (`employee_d_experience_id`);

--
-- Indexes for table `employee_d_individual_profile`
--
ALTER TABLE `employee_d_individual_profile`
  ADD PRIMARY KEY (`employee_d_individual_profile_id`);

--
-- Indexes for table `employee_d_personality`
--
ALTER TABLE `employee_d_personality`
  ADD PRIMARY KEY (`employee_d_personality_id`);

--
-- Indexes for table `employee_d_qualification`
--
ALTER TABLE `employee_d_qualification`
  ADD PRIMARY KEY (`employee_d_qualification_id`);

--
-- Indexes for table `employee_d_salary_history`
--
ALTER TABLE `employee_d_salary_history`
  ADD PRIMARY KEY (`employee_d_salary_history_id`);

--
-- Indexes for table `employee_d_skills`
--
ALTER TABLE `employee_d_skills`
  ADD PRIMARY KEY (`ed_skills_id`);

--
-- Indexes for table `employee_d_software_expertise`
--
ALTER TABLE `employee_d_software_expertise`
  ADD PRIMARY KEY (`employee_d_software_expertise_id`);

--
-- Indexes for table `employee_d_status`
--
ALTER TABLE `employee_d_status`
  ADD PRIMARY KEY (`employee_d_status_id`);

--
-- Indexes for table `employee_performance`
--
ALTER TABLE `employee_performance`
  ADD PRIMARY KEY (`emp_performance_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`main_employee_id`);

--
-- Indexes for table `p_adaptability_table`
--
ALTER TABLE `p_adaptability_table`
  ADD PRIMARY KEY (`p_adaptability_id`);

--
-- Indexes for table `p_communication_table`
--
ALTER TABLE `p_communication_table`
  ADD PRIMARY KEY (`p_communication_id`);

--
-- Indexes for table `p_creativity_problem_solving_table`
--
ALTER TABLE `p_creativity_problem_solving_table`
  ADD PRIMARY KEY (`p_creativity_problem_solving_table`);

--
-- Indexes for table `p_dependability_table`
--
ALTER TABLE `p_dependability_table`
  ADD PRIMARY KEY (`p_dependability_id`);

--
-- Indexes for table `p_initiative_proactive_table`
--
ALTER TABLE `p_initiative_proactive_table`
  ADD PRIMARY KEY (`p_initiative_proactive_id`);

--
-- Indexes for table `p_knowledge_table`
--
ALTER TABLE `p_knowledge_table`
  ADD PRIMARY KEY (`p_knowledge_id`);

--
-- Indexes for table `p_productivity_table`
--
ALTER TABLE `p_productivity_table`
  ADD PRIMARY KEY (`productivity_id`);

--
-- Indexes for table `p_quality_table`
--
ALTER TABLE `p_quality_table`
  ADD PRIMARY KEY (`p_quality_id`);

--
-- Indexes for table `p_signature`
--
ALTER TABLE `p_signature`
  ADD PRIMARY KEY (`p_signature_id`);

--
-- Indexes for table `p_software_table`
--
ALTER TABLE `p_software_table`
  ADD PRIMARY KEY (`p_software_id`);

--
-- Indexes for table `p_time_management_table`
--
ALTER TABLE `p_time_management_table`
  ADD PRIMARY KEY (`p_time_management_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee_d_experience`
--
ALTER TABLE `employee_d_experience`
  MODIFY `employee_d_experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee_d_individual_profile`
--
ALTER TABLE `employee_d_individual_profile`
  MODIFY `employee_d_individual_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_d_personality`
--
ALTER TABLE `employee_d_personality`
  MODIFY `employee_d_personality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee_d_qualification`
--
ALTER TABLE `employee_d_qualification`
  MODIFY `employee_d_qualification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee_d_salary_history`
--
ALTER TABLE `employee_d_salary_history`
  MODIFY `employee_d_salary_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee_d_skills`
--
ALTER TABLE `employee_d_skills`
  MODIFY `ed_skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee_d_software_expertise`
--
ALTER TABLE `employee_d_software_expertise`
  MODIFY `employee_d_software_expertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_d_status`
--
ALTER TABLE `employee_d_status`
  MODIFY `employee_d_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee_performance`
--
ALTER TABLE `employee_performance`
  MODIFY `emp_performance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `main_employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `p_adaptability_table`
--
ALTER TABLE `p_adaptability_table`
  MODIFY `p_adaptability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `p_communication_table`
--
ALTER TABLE `p_communication_table`
  MODIFY `p_communication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `p_creativity_problem_solving_table`
--
ALTER TABLE `p_creativity_problem_solving_table`
  MODIFY `p_creativity_problem_solving_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `p_dependability_table`
--
ALTER TABLE `p_dependability_table`
  MODIFY `p_dependability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `p_initiative_proactive_table`
--
ALTER TABLE `p_initiative_proactive_table`
  MODIFY `p_initiative_proactive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `p_knowledge_table`
--
ALTER TABLE `p_knowledge_table`
  MODIFY `p_knowledge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `p_productivity_table`
--
ALTER TABLE `p_productivity_table`
  MODIFY `productivity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `p_quality_table`
--
ALTER TABLE `p_quality_table`
  MODIFY `p_quality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `p_signature`
--
ALTER TABLE `p_signature`
  MODIFY `p_signature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `p_software_table`
--
ALTER TABLE `p_software_table`
  MODIFY `p_software_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `p_time_management_table`
--
ALTER TABLE `p_time_management_table`
  MODIFY `p_time_management_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
