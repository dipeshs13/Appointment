-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2024 at 03:36 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `a_id` int NOT NULL,
  `d_id` int NOT NULL,
  `u_id` int NOT NULL,
  `a_date` date NOT NULL,
  `a_time` time NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`a_id`, `d_id`, `u_id`, `a_date`, `a_time`, `status`) VALUES
(1, 3, 4, '2024-03-26', '13:54:00', 0),
(2, 6, 4, '2024-03-30', '01:44:00', 0),
(3, 6, 4, '2024-03-28', '01:47:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `d_id` int NOT NULL,
  `d_fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_phone` bigint NOT NULL,
  `d_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_cilinics` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_clocation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_imagesource` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_experienced` int NOT NULL,
  `d_qualification` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`d_id`, `d_fullname`, `d_username`, `d_email`, `d_phone`, `d_password`, `d_category`, `d_cilinics`, `d_clocation`, `d_imagesource`, `d_image`, `d_experienced`, `d_qualification`) VALUES
(1, 'Dipesh', 'dipesh12', 'dipesh12@gmail.com', 1623812, '$2y$10$5081jyLZ.onlzfjdeIaNFuo9Vt3vqzAraT3iq0KCn0lwe3FX2LTYi', 'Internists', 'cscd', 'sdsd', '../image/doctor.png', '../upload/profile/ doctor.png\n', 2, 'Master of Surgery - MS'),
(2, 'bijay', 'bijay12', 'bijay@gmail.com', 9867346374, '$2y$10$eNh6UoIyuO1qT/xa/5xkcePvvXokvQmFN1mol.kFZik7b0QfPH.wO', 'Hematologists', 'kathmandu Hospital', 'ccd', '../image/healthcare.png', '../doctorimage/ doctor.png\r\n', 1, 'Doctor of Medicine - MD'),
(3, 'Satish', 'satish12', 'satish@gmail.com', 984323223, '$2y$10$DaHhRQWxi31CMVqMMeFp7uD28PpcDfHeORH2WS1.TOBXV.2w/PU82', 'Endocrinologists', 'Peoples hospital', 'Nayabazar-16, Kathmandu', '../image/doctor.png', '../doctorimage/ doctor.png', 3, 'Bachelor of Physiotherapy - BPT'),
(4, 'Rayyan', 'rayyan32', 'raayyan@gmail.com', 9834342, '$2y$10$DI9YJNZTgKH98xQIR3pC.OT2wUghjiU2bWUMZshpO4.Sn8IbzDWZu', 'Dermatologists', 'kathmandu Hospital', 'Balajau', '../image/doctor.png', '../doctorimage/ doctor.png', 2, 'Master of Surgery - MS'),
(5, 'Sujan', 'sujan12', 'sujan@gmail.com', 13133, '$2y$10$IAPICjgWjt7xoo/e9fr/YeAiDJ0czgVZGYjwR5IreQZaj4J36SMze', 'Dermatologists', 'sdsd', 'sds', '../image/1.png', '../doctorimage/ doctor.png', 2, 'Bachelor of Medicine, Bachelor of Surgery - MBBS'),
(6, 'Dipesh', 'dipesh15', 'dipesh23@gmail.com', 9843696523, '$2y$10$mJM0RVMUjDez66yQeVhs6e/78kG6PK8ZrR0sBhgAkY2qXW3AZpimm', 'Dermatologists', 'Nayabazar Clinics', 'Nayabazar-16,Kathmandu', '../image/healthcare.png', '../doctorimage/ doctor.png', 4, 'Bachelor of Medicine, Bachelor of Surgery - MBBS'),
(16, 'satish chaudhary', 'satish123', 'ssdj@gmail.com', 2722324, '$2y$10$TeqIUubJlTxogdrJPW3INe/l0LRJ7Y4cTE2Ik/rDeLtcElUNYYo2S', 'Endocrinologists', 'ewdw', 'bsdksbd', '../upload/certificate/wp4288376.png', 'upload/profile/doctor.jpg', 2, 'Master of Surgery - MS'),
(18, 'test', 'test12', 'test@test.com', 92472232, '$2y$10$T/8NXu7K/wvCmcZwvuJTiOoqyJUdj/7KlRclDP0VSMVCp7lwfCl1S', 'Endocrinologists', 'ewdw', 'sds', '../upload/certificate/desktop-wallpaper-laptop-back-grounds-chill.jpg', 'upload/profile/unix-wallpaper-preview.jpg', 2, 'Master of Surgery - MS'),
(19, 'Nishan Mahat', 'Nishan12', 'nishan@gmail.com', 87324223, '$2y$10$3FxK7eZftz86mzZxVU2zUupZsCcuwXYPM5fxLGp1dxVDVEkk7jEvG', 'Gastroenterologists', 'ndsosn', 'dsndsd', 'upload/certificate/preview16.jpg', 'upload/profile/hh', 2, 'Doctor of Medicine - MD'),
(20, 'Nishan Mahat', 'snusda', 'nishan112@gmail.com', 87324223, '$2y$10$qMGFwbbMRRSR5U3XTO63bet4mFIJJNbPgzmlnhy/pgAtU813e/Gmq', 'Hematologists', 'sdsd', 'sdsd', 'upload/certificate/preview16.jpg', '../upload/profile/hh', 2, 'Master of Surgery - MS');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule`
--

CREATE TABLE `doctor_schedule` (
  `ds_id` int NOT NULL,
  `doctor_id` int NOT NULL,
  `ds_dayfrom` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ds_dayto` varchar(20) NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor_schedule`
--

INSERT INTO `doctor_schedule` (`ds_id`, `doctor_id`, `ds_dayfrom`, `ds_dayto`, `time_from`, `time_to`) VALUES
(10, 6, 'Sunday', 'Tuesday', '11:50:00', '13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int NOT NULL,
  `d_id` int NOT NULL,
  `u_id` int NOT NULL,
  `r_comment` varchar(200) NOT NULL,
  `r_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `d_id`, `u_id`, `r_comment`, `r_datetime`) VALUES
(1, 3, 4, 'Hello Satish is good doctor', '2024-03-19 09:05:50'),
(2, 1, 4, 'HEllo dipesh is good doctor!', '2024-03-19 09:12:55'),
(3, 3, 4, 'HEllo', '2024-03-19 09:14:51'),
(4, 3, 4, 'sc,sd', '2024-03-19 09:16:07'),
(5, 2, 4, 'HEllo bijay gurung', '2024-03-19 09:16:26'),
(6, 2, 4, 'HEllo bijay gurung is best doctor', '2024-03-19 09:51:38'),
(7, 3, 4, 'ehre', '2024-03-19 14:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int NOT NULL,
  `u_firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_lastname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_phone` bigint NOT NULL,
  `u_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_firstname`, `u_lastname`, `u_username`, `u_email`, `u_address`, `u_phone`, `u_password`, `u_dob`) VALUES
(1, 'Dipesh', 'Shrestha', 'dipesh12', 'dipesh@gmail.com', 'kathmandu', 985323, '$2y$10$DfKvKNnGFLKk8kvER6bVBedF8KQDG.dUwJwvciGZ3zW', '2024-02-05'),
(2, 'Satish', 'Chaudhary', 'satish12', 'satish123@gmail.com', 'kathmandu', 985323, '$2y$10$5Wfcz3TeDGBb.O3IrhMbEeSMyOOOozVdyMUximXfiIAlp4Fmj2ecK', '2020-01-07'),
(3, 'Bijay', 'Chaudhary', 'bijay12', 'bijay@gmail.com', 'kathmandu', 12334, '$2y$10$CT5kIJHWyNuE29d.9cp2euYYLwydi8uLCF0zG6XhwKb6ux407F7tK', '2024-02-01'),
(4, 'Dipesh', 'Shrestha', 'dipesh14', 'dipesh42@gmail.com', 'Nayabazar', 2424242, '$2y$10$kpWTJ3CeOEd7Xk9c2bx2wuIxnaItE30sDJdI0RiFExte0YDAEW8o.', '1986-03-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `a_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `d_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  MODIFY `ds_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
