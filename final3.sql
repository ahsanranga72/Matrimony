-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 07:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatlists`
--

CREATE TABLE `chatlists` (
  `xid` int(11) NOT NULL,
  `xname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xpic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yid` int(11) NOT NULL,
  `yname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ypic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chatlists`
--

INSERT INTO `chatlists` (`xid`, `xname`, `xpic`, `yid`, `yname`, `ypic`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ahsan Habib', '71243191_2479921728787268_6875238791074807808_n.jpg', 2, 'Female', 'women.jpg', 0, '2019-10-31 11:12:14', '2019-10-31 11:28:45'),
(2, 'Female', 'women.jpg', 1, 'Ahsan Habib', '71243191_2479921728787268_6875238791074807808_n.jpg', 0, '2019-10-31 11:12:14', '2019-10-31 11:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `chat_lists`
--

CREATE TABLE `chat_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `serial` int(10) UNSIGNED NOT NULL,
  `idfrom` int(11) NOT NULL,
  `idfrom_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idfrom_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idto` int(11) NOT NULL,
  `idto_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idto_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`serial`, `idfrom`, `idfrom_name`, `idfrom_pic`, `idto`, `idto_name`, `idto_pic`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ahsan Habib', '71243191_2479921728787268_6875238791074807808_n.jpg', 2, 'Female', 'women.jpg', 'Hii, i am Ahsan Habib :)', '2019-10-31 11:12:13', '2019-10-31 11:12:13'),
(2, 2, 'Female', 'women.jpg', 1, 'Ahsan Habib', '71243191_2479921728787268_6875238791074807808_n.jpg', 'Hello...', '2019-10-31 11:14:15', '2019-10-31 11:14:15'),
(3, 2, 'Female', 'women.jpg', 1, 'Ahsan Habib', '71243191_2479921728787268_6875238791074807808_n.jpg', 'i am female..', '2019-10-31 11:28:44', '2019-10-31 11:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(68, '2014_10_12_000000_create_users_table', 1),
(69, '2014_10_12_100000_create_password_resets_table', 1),
(70, '2019_09_30_114407_create_user_profiles_table', 1),
(71, '2019_10_15_191452_create_messages_table', 1),
(72, '2019_10_16_002409_create_chatlists_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahsan Habib', 'ahsan@gmail.com', '2019-10-31 06:45:16', '$2y$10$vvyZRfw9HW0gt5MUnb1RU.RuuitcZOetEEIgo33qJbuakbr8ni7aC', 'FwicGLAQgyVFiOgVNoIkxYVHAHUb5gKBLMh1IE0J9EXzMCk3ooUIqvKtBWw1', '2019-10-31 06:42:21', '2019-10-31 06:45:16'),
(2, 'Female', 'female@gmail.com', '2019-10-31 07:24:17', '$2y$10$3IsFncyLRU.7cQ2eTwPpnOumf0TujASxMm.ajlYnO6dX9T335okUq', 'tPecsQiQ84Mw2QZrE05AtcjcxxZ5XR4vnwar80S7VT9lcO8eEOoyDUNYlOsD', '2019-10-31 07:22:14', '2019-10-31 07:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritalstatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` double(8,2) DEFAULT NULL,
  `physicalstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familyvalue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familystatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educationlevel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fieldofeducation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annualincome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ancestralfamilyorigin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motheroccupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fatheroccupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noofbrother` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noofmarriedbrother` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noofsister` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noofmarriedsister` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `bodytype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spokenlanguage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eatinghabit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favourite` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagefrom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pageto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pmaritalstatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preligion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mreligious` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpreligious` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memployment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpemployment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mlifestyle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mplifestyle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mfamily` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpfamily` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtravelling` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mptravelling` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mmusic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpmusic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mgame` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpgame` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msmoking` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpsmoking` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdrinking` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpdrinking` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`avatar`, `id`, `name`, `mail`, `owner`, `country`, `district`, `citizenship`, `sex`, `birthdate`, `age`, `religion`, `maritalstatus`, `height`, `physicalstatus`, `familyvalue`, `familystatus`, `ethnicity`, `educationlevel`, `fieldofeducation`, `employedin`, `annualincome`, `ancestralfamilyorigin`, `motheroccupation`, `fatheroccupation`, `noofbrother`, `noofmarriedbrother`, `noofsister`, `noofmarriedsister`, `weight`, `bodytype`, `complexion`, `spokenlanguage`, `eatinghabit`, `hobbies`, `favourite`, `psex`, `pagefrom`, `pageto`, `pmaritalstatus`, `preligion`, `mreligious`, `mpreligious`, `memployment`, `mpemployment`, `mlifestyle`, `mplifestyle`, `mfamily`, `mpfamily`, `mtravelling`, `mptravelling`, `mmusic`, `mpmusic`, `mgame`, `mpgame`, `msmoking`, `mpsmoking`, `mdrinking`, `mpdrinking`, `created_at`, `updated_at`) VALUES
('71243191_2479921728787268_6875238791074807808_n.jpg', 1, 'Ahsan Habib', 'ahsan@gmail.com', 'Self', 'Bangladesh', NULL, NULL, 'Male', '1995-01-01', 24, 'Islam', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Female', '18', '33', 'Single', 'Islam', 'Very Religious', 'Very Religious', 'Employment', 'Employment', 'Rich', 'Rich', 'Joint', 'Joint', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', '2019-10-31 06:44:26', '2019-10-31 12:20:34'),
('women.jpg', 2, 'Female', 'female@gmail.com', 'Self', NULL, NULL, NULL, 'Female', '1998-01-01', 21, 'Islam', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Male', '18', '47', 'Single', 'Islam', 'Very Religious', 'Very Religious', 'Employment', 'Employment', 'Rich', 'Rich', 'Joint', 'Joint', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', '2019-10-31 07:23:49', '2019-10-31 07:44:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_lists`
--
ALTER TABLE `chat_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`serial`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD UNIQUE KEY `user_profiles_id_unique` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_lists`
--
ALTER TABLE `chat_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `serial` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
