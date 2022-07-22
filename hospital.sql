-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 09:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_register`
--

CREATE TABLE `attendance_register` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `patient_name` varchar(40) NOT NULL,
  `card_number` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `contact_address` varchar(40) NOT NULL,
  `state` varchar(20) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `first_contact` varchar(10) NOT NULL,
  `nok_name` varchar(20) NOT NULL,
  `nok_relationship` varchar(50) NOT NULL,
  `nok_address` varchar(200) NOT NULL,
  `nok_phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_register`
--

INSERT INTO `attendance_register` (`id`, `date`, `patient_name`, `card_number`, `date_of_birth`, `sex`, `age`, `contact_address`, `state`, `telephone`, `first_contact`, `nok_name`, `nok_relationship`, `nok_address`, `nok_phone`) VALUES
(1, '2022-06-30 02:13:16', 'Cleo Mante', 'L745', '2000-05-24', 'female', '54', '6955 Bella Village', 'Bauchi', '010-894-5550', 'no', 'Savion Jones', 'Cousin', '154 Dalton Freeway', '123-738-4640'),
(2, '2022-06-30 02:22:21', 'Jessie Lueilwitz', 'W432', '1994-06-18', 'male', '24', '1803 Lila Extensions', 'Abia', '012-965-9785', 'yes', 'Hillary Buckridge', 'Sister', '225 Torphy Mount', '372-043-3874'),
(3, '2022-06-30 00:00:00', 'Katharina Collier', 'E110', '2014-12-04', 'male', '20', '830 Hauck Terrace', 'Abia', '777-002-9551', 'yes', 'Randy', 'Sister', '9678 Gertrude Meadows', '614-877-0242'),
(4, '2022-06-29 14:23:11', 'Lenny Weber', 'N898', '2021-08-03', 'female', '40', '3231 Jones Road', 'Jigawa', '073-241-2659', 'no', '48', 'Father', '3396 Nicole Mill', '650-761-3220'),
(5, '2022-06-30 02:22:15', 'Lilian Price', 'W291', '2022-09-24', 'female', '217', '342 Gleason Path', 'Lagos', '738-355-7549', 'no', '498', 'Brother', '4475 Rath Valley', '059-576-6878'),
(6, '2022-06-30 02:18:14', 'Regan Runolfsdott', 'R56116', '2015-06-21', 'male', '34', '61322 Romaguera Stravenue', 'Abia', '390-261-0708', 'yes', '514', 'Sister', '73568 Antonetta Street', '021-966-7446'),
(7, '2021-07-31 00:00:00', 'Samson Kertzmann', '25579-8460', '2023-04-29', 'female', '26', '82687 Luettgen Isle', 'Rivers', '979-106-4358', 'no', 'Zakary Champlin', 'Nephew', '229 Bogisich Lodge', '653-828-6147'),
(8, '2022-09-01 00:00:00', 'Verna Sipes', 'Brady Weim', '2021-12-28', 'female', '', '286 Clare Haven', 'Oyo', '318-604-1108', 'no', 'Jenifer Buckridge', 'Aunt', '801 Elsa Garden', '665-812-3413');

-- --------------------------------------------------------

--
-- Table structure for table `labour`
--

CREATE TABLE `labour` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `card_number` varchar(8) NOT NULL,
  `age` int(10) NOT NULL,
  `client_type` varchar(30) NOT NULL,
  `disc` varchar(10) NOT NULL,
  `transportation_in` varchar(20) NOT NULL,
  `parity` int(10) NOT NULL,
  `dod` datetime NOT NULL,
  `m_o_d` varchar(10) NOT NULL,
  `partograph_used` varchar(40) NOT NULL,
  `recieved_oxy` varchar(20) NOT NULL,
  `m_c` varchar(20) NOT NULL,
  `recieved_mgso4` varchar(10) NOT NULL,
  `admitted` varchar(10) NOT NULL,
  `discharged` varchar(10) NOT NULL,
  `reffered_out` varchar(10) NOT NULL,
  `dead` varchar(30) NOT NULL,
  `time_of_delivery` time NOT NULL,
  `pre_term` varchar(10) NOT NULL,
  `not_breathing_a_b` varchar(10) NOT NULL,
  `not_breathing_a_b_success` varchar(10) NOT NULL,
  `birth_weight` varchar(8) NOT NULL,
  `baby_gender` varchar(10) NOT NULL,
  `who_took_delivery` varchar(100) NOT NULL,
  `cord_clamp_time` time NOT NULL,
  `gel_applied` varchar(8) NOT NULL,
  `baby_put_to_breast` varchar(30) NOT NULL,
  `temperature` varchar(8) NOT NULL,
  `name_of_delivery_personnel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `out_patient_dept`
--

CREATE TABLE `out_patient_dept` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `patient_name` varchar(40) NOT NULL,
  `card_number` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age_grade` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `attendance_type` varchar(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `bmi` int(10) NOT NULL,
  `presenting_complaints` varchar(100) NOT NULL,
  `lab_inv_done` varchar(200) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `drugs_given` varchar(100) NOT NULL,
  `outcome_of_visits` varchar(100) NOT NULL,
  `clinical_diagnosis` varchar(100) NOT NULL,
  `rdt` varchar(50) NOT NULL,
  `microscopy` varchar(50) NOT NULL,
  `act_given` varchar(50) NOT NULL,
  `severe_malaria` varchar(50) NOT NULL,
  `pre_referral_treatment` varchar(50) NOT NULL,
  `tubeculosis` varchar(50) NOT NULL,
  `hepatitis_b` varchar(25) NOT NULL,
  `hepatitis_c` varchar(25) NOT NULL,
  `gender_violence` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_patient_dept`
--

INSERT INTO `out_patient_dept` (`id`, `date`, `patient_name`, `card_number`, `sex`, `age_grade`, `age`, `attendance_type`, `weight`, `height`, `bmi`, `presenting_complaints`, `lab_inv_done`, `diagnosis`, `drugs_given`, `outcome_of_visits`, `clinical_diagnosis`, `rdt`, `microscopy`, `act_given`, `severe_malaria`, `pre_referral_treatment`, `tubeculosis`, `hepatitis_b`, `hepatitis_c`, `gender_violence`) VALUES
(3, '2022-03-15 07:00:00', 'Lucio Denesik', 'Monty Aufd', 'female', '12months - 59months', 12, 'Follow Up', 0, 0, 0, 'Nesciunt ea.', 'malaria', '785 Howell Shore', 'Ad omnis deserunt voluptatem inventore pariatur sed et temporibus.', 'd', 'pw', '> 5yrs', '> 5yrs NEG', 'PW', '>5yrs', 'IV-Artesunate', 'no', 'no', 'no', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`) VALUES
(1, 'Abia'),
(3, 'Adamawa'),
(4, 'Akwa Ibom'),
(5, 'Anambra'),
(6, 'Bauchi'),
(7, 'Bayelsa'),
(8, 'Benue'),
(9, 'Borno'),
(10, 'Cross River'),
(11, 'Delta'),
(12, 'Ebonyi'),
(13, 'Edo'),
(14, 'Ekiti'),
(15, 'Enugu'),
(16, 'Gombe'),
(17, 'Imo'),
(18, 'Jigawa'),
(19, 'Kaduna'),
(20, 'Kano'),
(21, 'Katsina'),
(22, 'Kebbi'),
(23, 'Kogi'),
(24, 'Kwara'),
(25, 'Lagos'),
(26, 'Nasarawa'),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau'),
(33, 'Rivers'),
(34, 'Sokoto'),
(35, 'Taraba'),
(36, 'Yobe'),
(37, 'Zamfara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_register`
--
ALTER TABLE `attendance_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour`
--
ALTER TABLE `labour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_patient_dept`
--
ALTER TABLE `out_patient_dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_register`
--
ALTER TABLE `attendance_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `labour`
--
ALTER TABLE `labour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `out_patient_dept`
--
ALTER TABLE `out_patient_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
