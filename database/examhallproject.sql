-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 06:55 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examhallproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `block`, `created_at`, `updated_at`) VALUES
(1, 'Block A', '2021-04-16 01:59:40', '2021-04-16 01:59:40'),
(2, 'Block B', '2021-04-16 02:00:08', '2021-04-16 02:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `address`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Butwal Multiple Campus', 'Butwal', 'test description', '2021-04-16 02:08:31', '2021-04-16 02:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `department_code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Science and Technology', 'SC', 'Department description', '2021-04-16 02:03:40', '2021-04-16 02:03:40'),
(2, 'computer science', '402', 'hey', NULL, NULL),
(3, 'Science and Technology', 'SC', 'department description', '2021-04-16 06:25:09', '2021-04-16 06:25:09'),
(4, 'Management', 'Mgt', 'Management description', '2021-04-16 06:25:40', '2021-04-16 06:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `exammanagements`
--

CREATE TABLE `exammanagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exam_Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exammanagements`
--

INSERT INTO `exammanagements` (`id`, `Name`, `department_id`, `faculty_id`, `subject_id`, `semester`, `Exam_Date`, `Start_Time`, `End_Time`, `created_at`, `updated_at`) VALUES
(1, 'Final Exam', 1, 1, 1, '1', '2021-04-29', '13:50:00', '15:59:00', '2021-04-16 08:21:55', '2021-04-16 08:21:55'),
(2, 'Internal Exam', 1, 1, 2, '2', '2021-04-11', '14:00:00', '18:00:00', '2021-04-18 09:27:00', '2021-04-18 09:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `exammanagement_seatallocation`
--

CREATE TABLE `exammanagement_seatallocation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exammanagement_id` bigint(20) UNSIGNED NOT NULL,
  `seatallocation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exammanagement_seatallocation`
--

INSERT INTO `exammanagement_seatallocation` (`id`, `exammanagement_id`, `seatallocation_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `examsubjects`
--

CREATE TABLE `examsubjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `short_name`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Bachelor in CSIT', 'CSIT', 1, '2021-04-16 02:09:13', '2021-04-16 02:09:13'),
(2, 'Bachelor in Management', 'MGT', 4, '2021-04-16 08:25:28', '2021-04-16 08:25:28'),
(3, 'Bachelor in Education', 'BED', 4, '2021-04-16 08:25:54', '2021-04-16 08:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `floor`, `block_id`, `created_at`, `updated_at`) VALUES
(1, 'Floor 1', 1, '2021-04-16 02:01:18', '2021-04-16 02:01:18'),
(2, 'Floor 2', 1, '2021-04-16 02:01:35', '2021-04-16 02:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_23_062935_create_register_table', 1),
(5, '2021_01_23_072256_create_registers_table', 1),
(6, '2021_01_24_122458_create_departments_table', 1),
(7, '2021_01_24_134344_create_faculties_table', 1),
(8, '2021_01_25_032536_create_subjects_table', 1),
(9, '2021_01_26_070533_create_exammanagements_table', 1),
(10, '2021_02_06_071022_create_staff_manages_table', 1),
(11, '2021_04_02_163402_create_colleges_table', 1),
(13, '2021_04_04_094518_create_blocks_table', 1),
(14, '2021_04_04_155557_create_floors_table', 1),
(15, '2021_04_10_160551_create_examsubjects_table', 1),
(16, '2021_04_15_103103_create_roommanagments_table', 1),
(17, '2021_04_16_053905_create_semesters_table', 1),
(18, '2021_04_02_172539_create_student_manages_table', 2),
(21, '2021_04_16_133003_create_seatallocations_table', 3),
(22, '2021_04_18_040050_create_seat_allocation_rooms_table', 4),
(23, '2021_04_18_063501_create_seatallocation_exams_table', 4),
(24, '2021_04_18_082347_create_registrations_table', 5),
(25, '2021_04_18_103624_create_exammanagement_seatallocation_table', 5),
(26, '2021_04_18_104101_create_roommanagment_seatallocation_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roommanagments`
--

CREATE TABLE `roommanagments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roomno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_id` bigint(20) UNSIGNED NOT NULL,
  `floor_id` bigint(20) UNSIGNED NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rows` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `columns` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roommanagments`
--

INSERT INTO `roommanagments` (`id`, `roomno`, `block_id`, `floor_id`, `capacity`, `rows`, `columns`, `staff_id`, `created_at`, `updated_at`) VALUES
(1, '10', 1, 1, '60', '8', '4', 1, '2021-04-16 09:24:48', '2021-04-16 09:24:48'),
(2, '11', 1, 1, '30', '8', '4', 1, '2021-04-16 09:26:47', '2021-04-16 09:26:47'),
(3, '12', 2, 1, '40', '8', '4', 1, '2021-04-16 09:30:04', '2021-04-16 09:30:04'),
(5, 'Room 1', 1, 1, '30', '9', '8', 1, '2021-04-16 19:55:31', '2021-04-16 19:55:31'),
(6, 'Room 2', 1, 1, '30', '6', '4', 2, '2021-04-17 01:03:56', '2021-04-17 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `roommanagment_seatallocation`
--

CREATE TABLE `roommanagment_seatallocation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roommanagment_id` bigint(20) UNSIGNED NOT NULL,
  `seatallocation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roommanagment_seatallocation`
--

INSERT INTO `roommanagment_seatallocation` (`id`, `roommanagment_id`, `seatallocation_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 5, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seatallocations`
--

CREATE TABLE `seatallocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seatallocations`
--

INSERT INTO `seatallocations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Java Internet', '2021-04-18 05:23:49', '2021-04-18 05:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `seat_allocation_rooms`
--

CREATE TABLE `seat_allocation_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seat_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester`, `created_at`, `updated_at`) VALUES
(1, '1st Semester', NULL, NULL),
(2, '2nd Semester', NULL, NULL),
(3, '3rd Semester', NULL, NULL),
(4, '4th Semester', NULL, NULL),
(5, '5th Semester', NULL, NULL),
(6, '6th Semester', NULL, NULL),
(7, '7th Semester', NULL, NULL),
(8, '8th Semester', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_manages`
--

CREATE TABLE `staff_manages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staffname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_manages`
--

INSERT INTO `staff_manages` (`id`, `staffname`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Chiranjive Ghimire', 1, '2021-04-16 02:04:06', '2021-04-16 02:04:06'),
(2, 'Anita Khanal', 1, '2021-04-16 19:52:06', '2021-04-16 19:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `student_manages`
--

CREATE TABLE `student_manages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registerNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbolno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_manages`
--

INSERT INTO `student_manages` (`id`, `name`, `college_id`, `faculty_id`, `department_id`, `year`, `semester`, `registerNumber`, `symbolno`, `dob`, `email`, `parent`, `mobile`, `address`, `created_at`, `updated_at`) VALUES
(1, 'sirjana gharti', 1, 1, 2, '2073', '1', '2-43-343-2016', '11871', '2055-03-26', 'ghartisirjana8@gmail.com', 'Gharti', '9857439475', 'Butwal', '2021-04-16 02:49:20', '2021-04-16 02:49:20'),
(2, 'Sirjana Gharti', 1, 1, 2, '2073', '7', '2-43-343-2016', '11814', '2055-03-26', 'ghartisirjana8@gmail.com', 'Gharti', '9876435273', 'Butwal', '2021-04-16 03:18:30', '2021-04-16 03:18:30'),
(3, 'Anita khanal', 1, 1, 2, '2074', '8', '2-43-343-2016', '11849', '2054-05-26', 'nasirja@gmail.com', 'Khanal', '9876435273', 'Butwal', '2021-04-18 08:39:23', '2021-04-18 08:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subjectname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectname`, `subjectcode`, `semester`, `faculty_id`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Java', '121', '7th', 1, 1, '2021-04-16 08:15:27', '2021-04-16 08:15:27'),
(2, 'SPM', '567', '7th', 1, 1, '2021-04-17 01:31:46', '2021-04-17 01:31:46'),
(3, 'Java', '456', '7th', 1, 1, '2021-04-17 01:31:46', '2021-04-17 01:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `address`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sirjana Gharti', 'Palpa', 'ghartisirjana8@gmail.com', NULL, '$2y$10$CV2R9FO4U8yY5dRZ67/gJOeBPGtPMcgOKxT.GY4YczvHRcBal3XAu', 'Admin', NULL, '2021-04-16 06:29:35', '2021-04-16 06:29:35'),
(2, 'Anita Khanal', 'Butwal', 'anitakhanal95@gmail.com', NULL, '$2y$10$9zIvRpdGgFSD5FEV/4efqOuokq0uC5ipgciP8K5oBGOz/eSAG/Eme', 'Admin', NULL, '2021-04-17 09:24:42', '2021-04-17 09:24:42'),
(3, 'Sirjana Gharti', 'Butwal', 'krishna@gmail.com', NULL, 'krishna', 'Admin', NULL, '2021-04-18 03:19:57', '2021-04-18 03:19:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exammanagements`
--
ALTER TABLE `exammanagements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exammanagements_department_id_foreign` (`department_id`),
  ADD KEY `exammanagements_faculty_id_foreign` (`faculty_id`),
  ADD KEY `exammanagements_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `exammanagement_seatallocation`
--
ALTER TABLE `exammanagement_seatallocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examsubjects`
--
ALTER TABLE `examsubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculties_department_id_foreign` (`department_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `floors_block_id_foreign` (`block_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roommanagments`
--
ALTER TABLE `roommanagments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roommanagments_block_id_foreign` (`block_id`),
  ADD KEY `roommanagments_floor_id_foreign` (`floor_id`),
  ADD KEY `roommanagments_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `roommanagment_seatallocation`
--
ALTER TABLE `roommanagment_seatallocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seatallocations`
--
ALTER TABLE `seatallocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_allocation_rooms`
--
ALTER TABLE `seat_allocation_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seat_allocation_rooms_seat_id_foreign` (`seat_id`),
  ADD KEY `seat_allocation_rooms_room_id_foreign` (`room_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_manages`
--
ALTER TABLE `staff_manages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_manages`
--
ALTER TABLE `student_manages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_manages_college_id_foreign` (`college_id`),
  ADD KEY `student_manages_faculty_id_foreign` (`faculty_id`),
  ADD KEY `student_manages_department_id_foreign` (`department_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_faculty_id_foreign` (`faculty_id`),
  ADD KEY `subjects_department_id_foreign` (`department_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exammanagements`
--
ALTER TABLE `exammanagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exammanagement_seatallocation`
--
ALTER TABLE `exammanagement_seatallocation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `examsubjects`
--
ALTER TABLE `examsubjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roommanagments`
--
ALTER TABLE `roommanagments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roommanagment_seatallocation`
--
ALTER TABLE `roommanagment_seatallocation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seatallocations`
--
ALTER TABLE `seatallocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seat_allocation_rooms`
--
ALTER TABLE `seat_allocation_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff_manages`
--
ALTER TABLE `staff_manages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_manages`
--
ALTER TABLE `student_manages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exammanagements`
--
ALTER TABLE `exammanagements`
  ADD CONSTRAINT `exammanagements_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `exammanagements_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `exammanagements_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `floors`
--
ALTER TABLE `floors`
  ADD CONSTRAINT `floors_block_id_foreign` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`);

--
-- Constraints for table `roommanagments`
--
ALTER TABLE `roommanagments`
  ADD CONSTRAINT `roommanagments_block_id_foreign` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`),
  ADD CONSTRAINT `roommanagments_floor_id_foreign` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`),
  ADD CONSTRAINT `roommanagments_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff_manages` (`id`);

--
-- Constraints for table `seat_allocation_rooms`
--
ALTER TABLE `seat_allocation_rooms`
  ADD CONSTRAINT `seat_allocation_rooms_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `roommanagments` (`id`),
  ADD CONSTRAINT `seat_allocation_rooms_seat_id_foreign` FOREIGN KEY (`seat_id`) REFERENCES `seatallocations` (`id`);

--
-- Constraints for table `student_manages`
--
ALTER TABLE `student_manages`
  ADD CONSTRAINT `student_manages_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`),
  ADD CONSTRAINT `student_manages_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `student_manages_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `subjects_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
