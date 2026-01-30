-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2026 at 06:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ishi_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `chooseus`
--

CREATE TABLE `chooseus` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `status` tinyint(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chooseus`
--

INSERT INTO `chooseus` (`id`, `title`, `description`, `icon`, `status`, `created_at`) VALUES
(20, 'ishi', 'ishi', 'heart-icon.png', 1, '2026-01-12 11:55:40'),
(21, 'ishi', 'ishi', 'status-icon.png', 1, '2026-01-12 11:56:16'),
(22, 'ishi', 'ishi', 'user-icon.png', 1, '2026-01-12 11:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'PINKY SAHANI', 'pinky@gmail.com', 'yhyh', '2026-01-14 15:19:41'),
(18, 'sneha', 'sneha@gmail.com', 'sneha', '2026-01-14 16:09:18'),
(21, 'PINKY SAHANI', 'pinkysahaniups1999@gmail.com', 'your website is best ', '2026-01-18 16:41:50'),
(22, 'umesh6', 'pinkysahaniups1999@gmail.com', 'testing email body', '2026-01-18 16:59:13'),
(23, 'pinky 56', 'pinkysahaniups1999@gmail.com', 'this layout is awesome', '2026-01-18 17:05:08'),
(24, 'pooja', 'pinkysahaniups1999@gmail.com', 'ishi clinic is best clinic', '2026-01-19 04:14:26'),
(25, 'neha ', 'pinkysahaniups1999@gmail.com', 'best clinic', '2026-01-19 05:05:59'),
(26, 'virat', 'virat@gmail.com', 'hello', '2026-01-19 05:07:39'),
(27, 'rohit', 'rohit@gmail.com', 'hello', '2026-01-19 05:18:47'),
(29, 'PINKY SAHANI', 'pinkysahaniups1999@gmail.com', 'hello hjjkh jlhklj;l', '2026-01-19 07:53:07'),
(30, 'pihu', 'pinkysahaniups1999@gmail.com', 'ishi clinic is the best clinic', '2026-01-19 07:56:35'),
(31, 'pihu', 'pihu@gmail.com', 'ishi advanced homoeo and naturopathic center', '2026-01-19 07:58:12'),
(32, 'umesh', 'umesh@gmail.com', 'ishi clinic is the best clinic', '2026-01-20 15:47:14'),
(33, 'pink', 'pinkysahaniups1999@gmail.com', 'hello ishi clinic is the best clinic', '2026-01-20 15:50:41'),
(34, 'rohit', 'rohit@gmail.com', 'best clinic', '2026-01-20 15:58:05'),
(35, 'pojja', 'pooja@gmail.com', 'best clinic', '2026-01-20 16:07:40'),
(36, 'PINKY SAHANI', 'pinkysahaniups1999@gmail.com', 'uihi Advance Homoeo & Naturopathic Center\r\nIIT Road, Bank of Baroda Regional Office के सामने,\r\nदेवघाट, प्रयागराज', '2026-01-21 15:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `image`, `status`, `created_at`) VALUES
(1, 'jksahjk', 'sakjdo', '1768204145_therapy-child.jpg', 1, '2026-01-12 07:49:05'),
(4, 'jdfkljosargj', 'dklfjilsjf', '1768205020_therapy-joint.jpg', 1, '2026-01-12 08:03:40'),
(5, 'jhdfkf', 'hjjkdfhn', '1768206724_hero.jpg', 1, '2026-01-12 08:32:04'),
(6, 'djkfhjk', 'dkjkl', '1768367633_feature1.png', 1, '2026-01-14 05:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description_text` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `description_text`, `image`, `status`) VALUES
(9, '       Advance Homoeo &  Naturopathic Healing', ' संपूर्ण और सुरक्षित उपचार — जटिल एवं असाध्य रोगों का सफल समाधान', ' Personalized natural therapies for long-term wellness.', 'hero.jpg', 1),
(24, '      Advance Homoeo & Naturopathic Healing', ' संपूर्ण और सुरक्षित उपचार — जटिल एवं असाध्य रोगों का सफल समाधान', '  Personalized natural therapies for long-term wellness.', 'about.jpg', 1),
(25, ' Advance Homoeo & Naturopathic Healing', '    संपूर्ण और सुरक्षित उपचार — जटिल एवं असाध्य रोगों का सफल समाधान', ' Personalized natural therapies for long-term wellness.', 'feature1.png', 1),
(31, 'dfef', 'dkjc,m', 'dfedf', 'advancehono.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `image`, `status`, `created_at`) VALUES
(1, 'ncvlkj', '1768044942_aboutishi.png', 1, '2026-01-10 11:35:42'),
(5, 'kldkl', '1768046449_advancehono.png', 1, '2026-01-10 12:00:49'),
(8, 'dr  pinky', '1768061747_team1.jpg', 1, '2026-01-10 16:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `therapies`
--

CREATE TABLE `therapies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `therapies`
--

INSERT INTO `therapies` (`id`, `title`, `description`, `image`, `status`, `created_at`) VALUES
(30, 'Joint Pain & Arthritis', ' Holistic treatment for arthritis, stiffness and chronic joint disorders.', 'therapy-joint.jpg', 1, '2026-01-05 13:07:32'),
(31, 'Skin Diseases', '    Safe, natural healing for eczema, psoriasis, acne & allergies.', 'skin.png', 1, '2026-01-05 13:09:30'),
(32, 'Women’s Health', ' Expert care for PCOD, thyroid, hormonal imbalance & gynecology issues.', 'therapy-women.jpg', 1, '2026-01-05 13:10:34'),
(33, 'Pediatric Care', '  Gentle, effective natural care for kids with allergies & immunity issues.', 'therapy-child.jpg', 1, '2026-01-05 13:13:28'),
(34, 'Lifestyle & Stress', ' Mind-body healing for stress, anxiety and sleep issues.', 'therapy-stress.jpg', 1, '2026-01-05 13:14:13'),
(35, 'Online Consultation', '  Expert online guidance with digital prescriptions & follow-ups.', 'therapy-online.jpg', 1, '2026-01-05 13:14:59'),
(36, 'test 1', 'hi', 'about ishi page.png', 1, '2026-01-28 15:27:50'),
(37, 'test 2', 'hello', 'advancehono.png', 1, '2026-01-28 15:50:22'),
(38, 'test', 'hello', 'A1.png', 1, '2026-01-29 04:06:58'),
(39, 'ishi', 'hello', 'aboutishi.png', 1, '2026-01-29 05:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `role`, `password`, `created_at`) VALUES
(39, 'PINKY SAHANI', 'pinkysahaniups1999@gmail.com', 'master', '$2y$10$XZgWnqxZepozavNtIaLUFutvX27NbdhiHM3hacSDwRlPKkNEP5.he', '2026-01-24 05:53:21'),
(40, 'umesh sahani', 'umesh@gmail.com', 'master', '$2y$10$BUjxTsZ.zm.fh8AVZRgqo.b.JCUAeY3.QpYxi5r6TUUd5KuXp0uSK', '2026-01-24 05:54:43'),
(41, 'reshma', 'reshma@gmail.com', 'master', '$2y$10$G2EycK/ii6Dndgdd8xAg6.jFL4PXEKflPB834qFgu/JpXC2erR3v2', '2026-01-24 11:35:40'),
(42, 'rohan singh', 'rohan@gmail.com', 'master', '$2y$10$dTugWKxo9qZSd.wzS3VRnOBI4HXWcy4qPrBsFOPDmu6hj46qexmG6', '2026-01-25 13:57:30'),
(43, 'mamta', 'mamta@gmail.com', 'master', '$2y$10$kRqERyrE3vYnNXZqnaXfIuVvDIrr5Miilaz4xuP6gUrw9Ch/unlGS', '2026-01-25 17:14:05'),
(44, 'nimmi', 'nimmi@gmail.com', 'master', '$2y$10$b7SG4jDrNW2xswJNRiO1OehCvbj9mCXsAb9JuiZT.FvtFWaXlZqvi', '2026-01-27 05:08:16'),
(45, 'neha singh', 'neha@gmail.com', 'master', '$2y$10$y0DOjhE9kzILun6t707LcuX6UbGkAiqYW/cj6i0UcLk9ntyy920Qa', '2026-01-27 13:08:54'),
(46, 'shiv', 'shiv@gmail.com', 'master', '$2y$10$IX8dMyv3wPSeKEizf7RJne/S/4ooHJZIV/o2xAQVFpk/hNoGJsd0G', '2026-01-27 14:27:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chooseus`
--
ALTER TABLE `chooseus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapies`
--
ALTER TABLE `therapies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chooseus`
--
ALTER TABLE `chooseus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `therapies`
--
ALTER TABLE `therapies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
