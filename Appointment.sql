-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2024 at 11:24 PM
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
  `a_id` int NOT NULL PRIMARY KEY,
  `d_id` int NOT NULL,
  `u_id` int NOT NULL,
  `a_date` date NOT NULL,
  `a_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `d_id` int NOT NULL PRIMARY KEY,
  `d_firstname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_lastname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_phone` bigint NOT NULL,
  `d_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_cilinics` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_clocation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_dob` date NOT NULL,
  `d_imagesource` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `d_gender` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `d_experienced` int NOT NULL,
  `d_qualification` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`d_id`, `d_firstname`, `d_lastname`, `d_username`, `d_email`, `d_address`, `d_phone`, `d_password`, `d_category`, `d_cilinics`, `d_clocation`, `d_dob`, `d_imagesource`, `d_gender`, `d_image`, `d_experienced`, `d_qualification`) VALUES
(1, 'Dipesh', 'Shrestha', 'dipesh12', 'dipesh12@gmail.com', 'kathmandu', 1623812, '$2y$10$5081jyLZ.onlzfjdeIaNFuo9Vt3vqzAraT3iq0KCn0lwe3FX2LTYi', 'Internists', 'cscd', 'sdsd', '2024-02-05', '../image/doctor.png', 'male', '../doctorimage/ doctor.png\r\n', 2, 'Master of Surgery - MS'),
(2, 'bijay', 'asaa', 'bijay12', 'bijay@gmail.com', 'dsdsd', 9867346374, '$2y$10$eNh6UoIyuO1qT/xa/5xkcePvvXokvQmFN1mol.kFZik7b0QfPH.wO', 'Hematologists', 'kathmandu Hospital', 'ccd', '2024-02-11', '../image/healthcare.png', 'male', '../doctorimage/ doctor.png\r\n', 1, 'Doctor of Medicine - MD'),
(3, 'Satish', 'Chaudhary', 'satish12', 'satish@gmail.com', 'Nayabazar', 984323223, '$2y$10$DaHhRQWxi31CMVqMMeFp7uD28PpcDfHeORH2WS1.TOBXV.2w/PU82', 'Endocrinologists', 'Peoples hospital', 'Nayabazar-16, Kathmandu', '2003-05-04', '../image/doctor.png', 'male', '../doctorimage/ doctor.png', 3, 'Bachelor of Physiotherapy - BPT'),
(4, 'Rayyan', 'Balami', 'rayyan32', 'raayyan@gmail.com', 'balaju', 9834342, '$2y$10$DI9YJNZTgKH98xQIR3pC.OT2wUghjiU2bWUMZshpO4.Sn8IbzDWZu', 'Dermatologists', 'kathmandu Hospital', 'Balajau', '2024-03-10', '../image/doctor.png', 'male', '../doctorimage/ doctor.png', 2, 'Master of Surgery - MS'),
(5, 'Sujan', 'Maharjan', 'sujan12', 'sujan@gmail.com', 'kathmandu', 13133, '$2y$10$IAPICjgWjt7xoo/e9fr/YeAiDJ0czgVZGYjwR5IreQZaj4J36SMze', 'Dermatologists', 'sdsd', 'sds', '2024-03-11', '../image/1.png', 'male', '../doctorimage/ doctor.png', 2, 'Bachelor of Medicine, Bachelor of Surgery - MBBS'),
(6, 'Dipesh', 'Shrestha', 'dipesh15', 'dipesh23@gmail.com', 'nayabazar', 9843696523, '$2y$10$mJM0RVMUjDez66yQeVhs6e/78kG6PK8ZrR0sBhgAkY2qXW3AZpimm', 'Dermatologists', 'Nayabazar Clinics', 'Nayabazar-16,Kathmandu', '1998-03-16', '../image/healthcare.png', 'male', '../doctorimage/ doctor.png', 4, 'Bachelor of Medicine, Bachelor of Surgery - MBBS');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int NOT NULL PRIMARY KEY,
  `d_id` int NOT NULL,
  `u_id` int NOT NULL,
  `r_comment` varchar(200) NOT NULL,
  `r_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int NOT NULL,
  `u_firstname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `u_lastname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `u_username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `u_email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `u_address` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `u_phone` bigint NOT NULL,
  `u_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
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
  MODIFY `a_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `d_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
