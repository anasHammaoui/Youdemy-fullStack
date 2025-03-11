-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2025 at 10:21 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youdemy`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `admin_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `admin_id`) VALUES
(3, 'web dev', 6),
(6, 'graphic design', NULL),
(8, 'internet marketing', NULL),
(10, 'CATEGORY', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int NOT NULL,
  `course_name` varchar(70) DEFAULT NULL,
  `course_type` enum('video','document') DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `course_desc` varchar(255) DEFAULT NULL,
  `course_cdn` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_type`, `teacher_id`, `category_id`, `thumbnail`, `course_desc`, `course_cdn`) VALUES
(24, 'full stack dev zero to hero', 'video', 10, 3, 'https://placehold.co/600x400/orange/white', 'the best development course', 'https://www.youtube.com/embed/PgAZ8KzfhO8'),
(25, 'HTML and CSS crash course for beginners', 'video', 10, 6, 'https://placehold.co/600x400/red/white', 'master html and css in 10 days', 'https://www.youtube.com/embed/PgAZ8KzfhO8'),
(28, 'Bootcamp for web developers', 'video', 10, 3, 'https://placehold.co/600x400/blue/white', 'the best bootcamp', 'https://www.youtube.com/embed/PgAZ8KzfhO8'),
(32, 'JAVASCRIPT', 'video', 10, 3, 'https://placehold.co/600x400/orange/white', 'THE BEST COURSE FOR JAVASCRIPT', 'https://mp4-c.udemycdn.com/2023-07-01_08-36-26-10e6d09f5a18ac63c7354216693383e5/2/WebHD_720p.mp4?Expires=1737213556&amp;Signature=7nQ9Cdo4ma3TBJxxLtmzoP17hljZY~7LF281Bl~lpmF5Se2t9WryZudcSz0ztG10p9px0KhH-kI831MF9Wcedc0i-8b5lRO-xXSYnTbQwIVLfzqWkr~13wfdS-UcN7peKi90B8PW7cO5uBiY8B17N6BGDmGi0Fuqv-aOgZFK18bm7kc-50lvWUEUyckoW5f9kdLKa5SPqQrY~f6~C0KxNuYYnt1xUZAFFVtA2MsdBmQROYJKz1xZx2HEzwbRLgxQ7QIBhZoD00hqwnNLAXmQkH9iX74F7Ofpv07cW2GPzjgE60Be5lpzzwZL8kgyrTWOJDMEMh3Ybxjko-vw3JNm4A__&amp;Key-Pair-Id=K3MG148K9RIRF4');

-- --------------------------------------------------------

--
-- Table structure for table `courstags`
--

CREATE TABLE `courstags` (
  `tag_id` int NOT NULL,
  `course_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courstags`
--

INSERT INTO `courstags` (`tag_id`, `course_id`) VALUES
(27, 24),
(29, 24),
(30, 24),
(31, 24),
(29, 25),
(30, 25),
(31, 25),
(27, 28),
(28, 28),
(29, 28),
(27, 32),
(28, 32),
(29, 32),
(30, 32);

-- --------------------------------------------------------

--
-- Table structure for table `enrollement`
--

CREATE TABLE `enrollement` (
  `enroll_id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL,
  `enroll_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enroll_status` enum('accepted','pending') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enrollement`
--

INSERT INTO `enrollement` (`enroll_id`, `student_id`, `course_id`, `enroll_date`, `enroll_status`) VALUES
(11, 11, 24, '2025-01-21 15:54:25', 'accepted'),
(14, 11, 25, '2025-01-21 20:17:49', 'accepted'),
(16, 11, 32, '2025-01-22 10:37:29', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int NOT NULL,
  `tag_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_name`) VALUES
(27, 'web developer'),
(28, 'bootcamp'),
(29, ' javascript'),
(30, ' html'),
(31, ' css'),
(32, 'self improvement'),
(33, ' self confidence'),
(34, ' social'),
(35, ' communication'),
(36, 'facebook ads'),
(37, 'adobe ps'),
(38, ' adobe ai'),
(39, ' xd'),
(40, ' canva');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_role` enum('admin','teacher','student') DEFAULT NULL,
  `user_status` enum('accepted','pending') DEFAULT 'accepted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `user_password`, `user_role`, `user_status`) VALUES
(6, 'admin', 'admin@gmail.com', '$2y$10$IQN4cmW6PEikNgS6Zad6DuSrZw3cnm12ri8VhDax64GAMevnGSH3O', 'admin', 'accepted'),
(10, 'teacher1', 'teacher@gmail.com', '$2y$10$qiDMpbXz7LCieT7vJeYlkuRecbnw1RHHB5EenaUP268B3r/NlE2Vu', 'teacher', 'accepted'),
(11, 'anas', 'anas@gmail.com', '$2y$10$v.0a0.jVWQLU34Z3ShSB9.UcVsJK3ARkWets1/HjDL/Ay/d88cn62', 'student', 'accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `courstags`
--
ALTER TABLE `courstags`
  ADD PRIMARY KEY (`tag_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `enrollement`
--
ALTER TABLE `enrollement`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `enrollement`
--
ALTER TABLE `enrollement`
  MODIFY `enroll_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `courstags`
--
ALTER TABLE `courstags`
  ADD CONSTRAINT `courstags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`tag_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courstags_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE;

--
-- Constraints for table `enrollement`
--
ALTER TABLE `enrollement`
  ADD CONSTRAINT `enrollement_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enrollement_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
