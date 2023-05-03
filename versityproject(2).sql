-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 05:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `versityproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_classes`
--

CREATE TABLE `all_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_classes`
--

INSERT INTO `all_classes` (`id`, `title`, `summary`, `description`, `thumbnail`, `link`, `created_at`, `updated_at`, `deleted_at`, `category_id`, `user_id`) VALUES
(6, 'class one part 1', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'HBlJFfxVW2.png', 'https://drive.google.com/file/d/1SQe6o8wJo55z7lVt9HrQGtVQTfNWJYCd/view?usp=sharing', '2021-05-21 08:26:41', NULL, NULL, 1, 1),
(7, 'class one part 2', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'DMEoLUpi7t.jpg', 'https://www.google.com/search?client=firefox-b-d&q=class+one+part+one+thumbnail', '2021-05-21 08:27:28', NULL, NULL, 2, 1),
(8, 'class one part 3', 'In Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and', 'In Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and\r\n\r\nIn Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and\r\nIn Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and\r\n\r\nIn Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and', 'bZIb50BAlQ.jpg', 'https://mail.google.com/mail/u/0/#inbox', '2021-05-21 08:28:23', NULL, NULL, 1, 1),
(9, 'class one part 4', 'In Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and', 'In Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and\r\n\r\nIn Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and\r\n\r\nIn Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and\r\n\r\nIn Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and', 'InzbbUAASs.jpg', 'https://drive.google.com/file/d/1iA1tRMeR79fwVaLwLPihaTBAiPx_PEiC/view?usp=sharing', '2021-05-21 08:29:46', NULL, NULL, 2, 2),
(10, 'class one part 5', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'G6khKXJxoE.png', 'http://127.0.0.1:8000/add-class', '2021-05-21 08:36:55', NULL, NULL, 3, 2),
(11, 'class one part 6', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'HBlJFfxVW2.png', 'https://drive.google.com/file/d/1SQe6o8wJo55z7lVt9HrQGtVQTfNWJYCd/view?usp=sharing', '2021-05-21 08:26:41', NULL, NULL, 1, 1),
(12, 'class one part 7', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'DMEoLUpi7t.jpg', 'https://www.google.com/search?client=firefox-b-d&q=class+one+part+one+thumbnail', '2021-05-21 08:27:28', NULL, NULL, 1, 2),
(13, 'class one part 8', 'In Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and', 'In Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and\r\n\r\nIn Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and\r\nIn Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and\r\n\r\nIn Chapter 6 you built a PHP class to handle file uploads. In this chapter you\'ll create two classes: one to generate thumbnail images, the other to upload and', 'bZIb50BAlQ.jpg', 'https://mail.google.com/mail/u/0/#inbox', '2021-05-21 08:28:23', NULL, NULL, 2, 1),
(14, 'class one part 9', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'G6khKXJxoE.png', 'http://127.0.0.1:8000/add-class', '2021-05-21 08:36:55', NULL, NULL, 2, 2),
(15, 'class one part 10', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'HBlJFfxVW2.png', 'https://drive.google.com/file/d/1SQe6o8wJo55z7lVt9HrQGtVQTfNWJYCd/view?usp=sharing', '2021-05-21 08:26:41', NULL, NULL, 3, 1),
(16, 'class one part 11', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'DMEoLUpi7t.jpg', 'https://www.google.com/search?client=firefox-b-d&q=class+one+part+one+thumbnail', '2021-05-21 08:27:28', NULL, NULL, 3, 2),
(17, 'class one part 12', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'G6khKXJxoE.png', 'http://127.0.0.1:8000/add-class', '2021-05-21 08:36:55', NULL, NULL, 3, 2),
(18, 'class one part 13', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'HBlJFfxVW2.png', 'https://drive.google.com/file/d/1SQe6o8wJo55z7lVt9HrQGtVQTfNWJYCd/view?usp=sharing', '2021-05-21 08:26:41', NULL, NULL, 1, 1),
(19, 'class one part 14', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\n\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'DMEoLUpi7t.jpg', 'https://www.google.com/search?client=firefox-b-d&q=class+one+part+one+thumbnail', '2021-05-21 08:27:28', NULL, NULL, 1, 1),
(20, 'class one part 15', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'Acts of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli\r\nActs of imagination produce results as practical as changing one\'s mind, ... Of course, Vassar has not always been sensitive to issues of class or race, but the ... Colleges and universities were established in part to provide the communal stimuli', 'G6khKXJxoE.png', 'http://127.0.0.1:8000/add-class', '2021-05-21 08:36:55', NULL, NULL, 1, 2),
(21, 'class one part 10', 'You then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this', 'You then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this', 'woMOIlJFLN.png', 'https://www.edureka.co/community/65622/how-add-new-column-to-existing-table-of-laravel-in-migration', '2021-05-27 00:34:27', NULL, NULL, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Class One', 'one', '2021-05-19 00:35:22', NULL, NULL),
(2, 'Class Two', 'two', '2021-05-19 00:55:04', NULL, NULL),
(3, 'Class Three', 'three', '2021-05-19 08:33:55', NULL, NULL),
(4, 'Class Four', 'four', '2021-06-11 09:45:41', NULL, NULL),
(5, 'Class Five', 'five', '2021-07-11 01:14:03', NULL, NULL),
(6, 'seven', 'seven', '2021-09-16 15:17:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `create_exams`
--

CREATE TABLE `create_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `google_class_join_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `create_exams`
--

INSERT INTO `create_exams` (`id`, `title`, `user_id`, `role_id`, `category_id`, `google_class_join_code`, `exam_link`, `youtube_link`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'First Term Exam', 1, 1, 1, 'hdffg42ff41', 'https://www.google.com/search?client=firefox-b-d&q=exam+description', 'https://www.google.com/search?client=firefox-b-d&q=exam+description', 'An exam is a formal test that you take to show your knowledge or ability in a particular subject, or to obtain a qualification. ... If you have a medical exam, a doctor looks at your body, feels it, or does simple tests in order to check how healthy you are.', '2021-07-08 23:40:17', '2021-07-08 23:40:17', NULL),
(2, 'Mid Term Exam', 1, 1, 1, 'b6t419wtr4', 'https://mail.google.com/mail/u/2/#search/examination/FMfcgxwHNMbdSXfmclRSlZMVTCsSKZdG', NULL, 'A midterm exam, is an exam given near the middle of an academic grading term, or near the middle of any given quarter or semester. Midterm exams are a type of formative assessment, to measure students\' grasp of the course materials and identify areas that need work.', '2021-07-08 23:51:43', '2021-07-08 23:51:43', NULL),
(3, 'Mid Term Exam', 1, 1, 1, 'b6t419wtr4', 'https://mail.google.com/mail/u/2/#search/examination/FMfcgxwHNMbdSXfmclRSlZMVTCsSKZdG', NULL, 'A midterm exam, is an exam given near the middle of an academic grading term, or near the middle of any given quarter or semester. Midterm exams are a type of formative assessment, to measure students\' grasp of the course materials and identify areas that need work.', '2021-07-08 23:53:11', '2021-07-08 23:53:11', NULL),
(4, 'Mid Term Exam', 1, 1, 1, 'b6t419wtr4', 'https://mail.google.com/mail/u/2/#search/examination/FMfcgxwHNMbdSXfmclRSlZMVTCsSKZdG', NULL, 'A midterm exam, is an exam given near the middle of an academic grading term, or near the middle of any given quarter or semester. Midterm exams are a type of formative assessment, to measure students\' grasp of the course materials and identify areas that need work.', '2021-07-08 23:54:35', '2021-07-08 23:54:35', NULL),
(5, 'Mid Term Exam', 7, 3, 3, '4e4wq3zY', 'https://sites.google.com/a/mail.brandman.edu/edsu-533-classroom-tutorial/create-a-test-using-google-forms', NULL, 'Students can\'t unenroll from an archived class. This can limit how students can manage the classes they\'re done taking. The class calendar remains in your .\r\nStudents can\'t unenroll from an archived class. This can limit how students can manage the classes they\'re done taking. The class calendar remains in your .', '2021-07-11 01:40:23', '2021-07-11 01:40:23', NULL),
(6, 'Bangla', 3, 3, 1, 'hdffg42ff41', 'https://docs.google.com/forms/d/1oVWLbN2IWMtKmTV7PFR15hSq47-oOFjSGxuOlxOrXW4/edit', NULL, 'Event Address: 123 Your Street Your City, ST 12345\r\nContact us at (123) 456-7890 or no_reply@example.com', '2021-09-16 07:39:32', '2021-09-16 07:39:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `j_w_t_s`
--

CREATE TABLE `j_w_t_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `title`, `summary`, `description`, `thumbnail`, `link`, `category_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'We ggCan Ensure Your', 'You then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this', 'You then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this', 'R9w9tnins2.jpg', 'https://www.google.com/search?client=firefox-b-d&q=image+intervention+in+laravel', 1, 2, '2021-05-27 00:44:26', NULL, NULL),
(2, 'Many blogs provide comment', 'You then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this', 'You then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this', 'beJbWrX49v.jpg', 'https://drive.google.com/file/d/1iA1tRMeR79fwVaLwLPihaTBAiPx_PEiC/view?usp=sharing', 1, 2, '2021-05-27 00:45:35', NULL, NULL),
(3, 'often informal diary', 'You then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this', 'You then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this\r\nYou then need to use the Schema::table() method (as you\'re accessing an existing table, not creating a new one). And you can add a column like this', '7fR1jm7sSy.jpg', 'https://scribemedia.com/write-book-description/', 1, 2, '2021-05-27 00:46:24', NULL, NULL),
(4, 'growth of blogs in the', 'If you would like to specify a custom output path for the generated migration, you may use the --path option when executing the make:migration command. The given path should be relative to your application\'s base path.', 'If you would like to specify a custom output path for the generated migration, you may use the --path option when executing the make:migration command. The given path should be relative to your application\'s base path.\r\nIf you would like to specify a custom output path for the generated migration, you may use the --path option when executing the make:migration command. The given path should be relative to your application\'s base path.\r\nIf you would like to specify a custom output path for the generated migration, you may use the --path option when executing the make:migration command. The given path should be relative to your application\'s base path.', '134zGYNWM3.jpeg', 'https://www.google.com/search?client=firefox-b-d&q=class+one+part+one+thumbnail', 1, 1, '2021-05-27 00:48:45', NULL, NULL),
(5, 'The emergence and', 'If you would like to specify a custom output path for the generated migration, you may use the --path option when executing the make:migration command. The given path should be relative to your application\'s base path.', 'If you would like to specify a custom output path for the generated migration, you may use the --path option when executing the make:migration command. The given path should be relative to your application\'s base path.\r\nIf you would like to specify a custom output path for the generated migration, you may use the --path option when executing the make:migration command. The given path should be relative to your application\'s base path.\r\nIf you would like to specify a custom output path for the generated migration, you may use the --path option when executing the make:migration command. The given path should be relative to your application\'s base path.', 'ZKYYkgMMmd.jpg', 'https://www.edureka.co/community/65622/how-add-new-column-to-existing-table-of-laravel-in-migration', 1, 1, '2021-05-27 00:49:30', NULL, NULL);

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_05_18_142808_create_all_classes_table', 3),
(11, '2021_05_19_051313_create_categories_table', 4),
(14, '2021_05_26_143132_create_libraries_table', 6),
(15, '2021_05_27_061259_add_collums_to_all_classes_table', 7),
(17, '2021_06_13_153523_add_collums_to_users_table', 8),
(18, '2019_09_22_192348_create_messages_table', 9),
(19, '2019_10_16_211433_create_favorites_table', 9),
(20, '2019_10_18_223259_add_avatar_to_users', 9),
(21, '2019_10_20_211056_add_messenger_color_to_users', 9),
(22, '2019_10_22_000539_add_dark_mode_to_users', 9),
(23, '2019_10_25_214038_add_active_status_to_users', 9),
(24, '2021_06_21_150929_create_zooms_table', 10),
(25, '2021_07_08_131441_add_collums_to_users_table', 11),
(26, '2021_07_08_154424_create_create_exams_table', 12),
(27, '2021_07_17_062622_add_collums_to_users_table', 13),
(28, '2021_07_31_134312_create_notices_table', 13),
(31, '2021_09_21_142556_create_zoom__apis_table', 14),
(32, '2021_09_21_214054_create_j_w_t_s_table', 14),
(33, '2021_09_24_121159_add_column_to_zoom_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 2),
(1, 'App\\User', 3),
(2, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(3, 'App\\User', 1),
(3, 'App\\User', 2),
(3, 'App\\User', 3),
(3, 'App\\User', 4),
(4, 'App\\User', 1),
(4, 'App\\User', 2),
(4, 'App\\User', 3),
(5, 'App\\User', 4),
(5, 'App\\User', 7),
(6, 'App\\User', 4),
(7, 'App\\User', 1),
(7, 'App\\User', 2),
(8, 'App\\User', 1),
(8, 'App\\User', 2),
(8, 'App\\User', 3),
(8, 'App\\User', 4),
(8, 'App\\User', 7),
(9, 'App\\User', 1),
(9, 'App\\User', 2),
(10, 'App\\User', 1),
(10, 'App\\User', 2),
(10, 'App\\User', 3),
(11, 'App\\User', 1),
(11, 'App\\User', 2),
(11, 'App\\User', 3),
(12, 'App\\User', 1),
(12, 'App\\User', 2),
(12, 'App\\User', 3),
(12, 'App\\User', 4),
(13, 'App\\User', 1),
(13, 'App\\User', 2),
(13, 'App\\User', 3),
(14, 'App\\User', 1),
(15, 'App\\User', 1),
(15, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 1),
(2, 'App\\User', 2),
(3, 'App\\User', 2),
(3, 'App\\User', 9),
(4, 'App\\User', 4),
(4, 'App\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `thumbnail`, `category_id`, `link`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'notice', 'Fiction-writing also has modes: action, exposition, description, dialogue, summary, and transition.[4] Author Peter Selgin refers to methods, including action, dialogue, thoughts, summary, scenes, and description.[5] Currently, there is no consensus within the writing community regarding the number and composition of fiction-writing modes and their uses.\r\n\r\nDescription is the fiction-writing mode for transmitting a mental image of the particulars of a story. Together with dialogue, narration, exposition, and summarization, description is one of the most widely recognized of the fiction-writing modes. As stated in Writing from A to Z, edited by Kirk Polking, description is more than the amassing of details; it is bringing something to life by carefully choosing and arranging words and phrases to produce the desired effect.[6] The most appropriate and effective techniques for presenting description are a matter of ongoing discussion among writers and writing coaches.', '83CYhp438B.jpg', 3, 'https://en.wikipedia.org/wiki/Description', 1, '2021-08-06 10:31:37', '2021-08-07 00:09:08', NULL),
(8, 'notice2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, autem cum labore officiis, distinctio ad illo rerum obcaecati ipsam illum adipisci sunt. Doloremque quaerat quod, explicabo et esse, eos perspiciatis.', 'O3OlUDB4NX.jpg', 4, 'https://kenwheeler.github.io/slick/', 1, '2021-08-06 23:08:30', '2021-08-07 00:08:16', NULL);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add articles', 'web', '2021-05-09 00:06:46', '2021-05-09 00:06:46'),
(2, 'edit articles', 'web', '2021-05-09 00:07:13', '2021-05-09 00:07:13'),
(3, 'view articles', 'web', '2021-05-09 00:07:31', '2021-05-09 00:07:31'),
(4, 'delete articles', 'web', '2021-05-09 00:08:12', '2021-05-09 00:08:12'),
(5, 'give exam articles', 'web', '2021-05-09 00:14:12', '2021-05-09 00:14:12'),
(6, 'view result articles', 'web', '2021-05-09 00:14:46', '2021-05-09 00:14:46'),
(7, 'add users', 'web', '2021-05-09 00:18:23', '2021-05-09 00:18:23'),
(8, 'edit users', 'web', '2021-05-09 00:18:53', '2021-05-09 00:18:53'),
(9, 'delete users', 'web', '2021-05-09 00:19:08', '2021-05-09 00:19:08'),
(10, 'add class', 'web', '2021-05-09 00:20:06', '2021-05-09 00:20:06'),
(11, 'edit class', 'web', '2021-05-09 00:20:19', '2021-05-09 00:20:19'),
(12, 'view class', 'web', '2021-05-09 00:20:28', '2021-05-09 00:20:28'),
(13, 'delete class', 'web', '2021-05-09 00:20:39', '2021-05-09 00:20:39'),
(14, 'view user', 'web', '2021-05-09 00:22:40', '2021-05-09 00:22:40'),
(15, 'restore class', 'web', '2021-05-09 00:24:30', '2021-05-09 00:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-05-09 00:02:30', '2021-05-09 00:02:30'),
(2, 'editor', 'web', '2021-05-09 00:03:28', '2021-05-09 00:03:28'),
(3, 'teacher', 'web', '2021-05-09 00:04:18', '2021-05-09 00:04:18'),
(4, 'student', 'web', '2021-05-09 00:04:41', '2021-05-09 00:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(4, 2),
(5, 4),
(6, 4),
(8, 2),
(8, 3),
(8, 4),
(9, 2),
(11, 2),
(12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_name` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `provider`, `provider_id`, `images`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `role_name`, `avatar`, `messenger_color`, `dark_mode`, `active_status`, `designation`, `category_id`) VALUES
(1, 'Swadip Dutta', '2183091033@uttarauniversity.edu.bd', '2021-05-07 10:05:48', '$2y$10$Q14mQ8N0kC0ruuOUofn2Uect6PXJshCGRlOs0ryC7s1Xuo3fNBwKK', NULL, NULL, 'atseo7JqTn.jpg', NULL, '2021-05-07 10:02:05', '2021-07-06 01:17:25', NULL, 1, 'avatar.png', '#2180f3', 0, 0, 'As a High School', NULL),
(2, 'Sakib Islam', 'shomironduttaswadip1@gmail.com', '2021-05-08 10:32:53', '$2y$10$zu90od25cVTycDnXQ3PVvO9nyRLSfMRwS67b/h2CEV/4KOSmgPVyK', NULL, NULL, 'GBtWfZWFYW.png', NULL, '2021-05-08 10:31:09', '2021-09-03 09:04:38', NULL, 2, 'avatar.png', '#2180f3', 0, 0, NULL, NULL),
(3, 'Tarek', 'mironduttawdip@gmail.com', '2021-06-11 09:26:37', '$2y$10$5KdHIvRRWC8wf7cMiwHtpez0GF3T1yNpELHWg5kPZzf8fKSyYrZqu', NULL, NULL, 'am8CuYOuRS.jpg', NULL, '2021-06-11 09:26:16', '2021-09-16 06:11:39', NULL, 3, 'avatar.png', '#2180f3', 0, 0, NULL, NULL),
(4, 'Rakib', 'shomirdutaswadip@gmail.com', '2021-06-11 09:30:26', '$2y$10$sHnTxTWvr4s9nP5aA4QcS.f6rafXvdI2bozMUB.J6OlaVL7k4rAXy', NULL, NULL, 'Eyqh0bKsh0.jpg', NULL, '2021-06-11 09:28:40', '2021-09-16 06:26:19', NULL, 4, 'avatar.png', '#2180f3', 0, 0, NULL, 1),
(5, 'Sk Nazmul', 'shomironttaswadip@gmail.com', '2021-08-19 14:39:19', '$2y$10$J6FP92U/yLhqSPeOYaSO0OnDvPRhl0nWcTkH/xh15lLoFpDpjAcW.', NULL, NULL, 'rjcspEAphl.jpg', NULL, '2021-06-15 01:12:32', '2021-09-16 14:45:47', NULL, 4, 'avatar.png', '#2180f3', 0, 0, NULL, 3),
(6, 'ssd', 'ronduttaswadip@gmail.com', NULL, '$2y$10$gNzBoZe2MReS.WH/chWwQ.6rV5j91QBLJyf4kZaxdxCMww7bVJP6i', NULL, NULL, NULL, NULL, '2021-07-08 09:37:51', '2021-07-08 09:37:51', NULL, 3, 'avatar.png', '#2180f3', 0, 0, NULL, NULL),
(7, 'shahid Islam', 'shomironduttaswadip@gmail.com', '2021-07-09 15:23:34', '$2y$10$oD/3TAMHQV4gVbHlUlhdAu8/vQSWShHQTmpM9/lq/mVPmnjVHhzq.', NULL, NULL, '9BXbnRQLAh.png', NULL, '2021-07-08 09:40:52', '2021-09-17 14:42:04', NULL, 3, 'avatar.png', '#2180f3', 0, 0, 'As a High School', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zooms`
--

CREATE TABLE `zooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` int(11) DEFAULT NULL,
  `host_ids` int(11) DEFAULT NULL,
  `host_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zooms`
--

INSERT INTO `zooms` (`id`, `uuid`, `host_ids`, `host_email`, `topic`, `type`, `status`, `start_time`, `duration`, `timezone`, `start_url`, `join_url`, `password`, `created_at`, `updated_at`, `start_date`, `category_id`) VALUES
(25, 0, 0, 'shomironduttaswadip@gmail.com', 'English', NULL, NULL, '1800', NULL, NULL, 'https://us04web.zoom.us/s/71632841433?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IkpVdWlLX0dZUkt5SHI5UGRlcldUR2ciLCJpc3MiOiJ3ZWIiLCJzdHkiOjEsIndjZCI6InVzMDQiLCJjbHQiOjAsIm1udW0iOiI3MTYzMjg0MTQzMyIsInN0ayI6IjBic0kzb3VXUEpOa05KRnBXaENUT3BIX2RDODk3emZ3bzBLM05jT2JkbWsuQUcud0JLd2haUmctMHpsTDRxTnk0TTkyMGpiNS1WUWU4NVpLa0VtdDdBdlBIRU83dWh4M2RaYkY0cTBmdDBoVHhMZWtsc0p3NjhlVU5YalVKRmQuS3F3S3VmcHlVSEM5YlZ5T3o1TUpRQS50VGFQWlY5VUo5R1lHRVRGIiwiZXhwIjoxNjMyNDIyODk4LCJpYXQiOjE2MzI0MTU2OTgsImFpZCI6IkpKQUg3VHpBU1dPclFNbGxOUXJQR2ciLCJjaWQiOiIifQ.LBEAKpYnNsp-6_nouFrV6_Fu3ZO5jxQyynPDf4pQjgQ', 'https://us04web.zoom.us/j/71632841433?pwd=SGtic09nN1FrUlk1bTJXZWlKREtCdz09', 'ZV01pY', NULL, NULL, '2021-09-24', 1),
(26, 0, 0, 'shomironduttaswadip@gmail.com', 'Bangla', NULL, NULL, '11:00', NULL, NULL, 'https://us04web.zoom.us/s/73605092797?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IkpVdWlLX0dZUkt5SHI5UGRlcldUR2ciLCJpc3MiOiJ3ZWIiLCJzdHkiOjEsIndjZCI6InVzMDQiLCJjbHQiOjAsIm1udW0iOiI3MzYwNTA5Mjc5NyIsInN0ayI6ImI0MkJEMjBsRm5NdUVSNWhkRi1KZlRGaE1ZZEZLbndvTHhpdk8tUTNXN3cuQUcuVVk5U21oVDdVajJDd1dfbzRBSm5xWWFMRDdyZjhscGx1dm44MGcyVWxTbzl2SVVqc2dMc0VzaFJXOVN4ektTa1RFRXhzXzNFc0dKLUF6aUYuVkNEVkkwV0tmMXVNU3FHNmMyQUM3QS5lZlVrTVBiRjNuMWRCMi1iIiwiZXhwIjoxNjMyNDczNTE4LCJpYXQiOjE2MzI0NjYzMTgsImFpZCI6IkpKQUg3VHpBU1dPclFNbGxOUXJQR2ciLCJjaWQiOiIifQ.8zCENxfDSWpnQ912sgSIUjjMn9oVB-G6FxjNRFeHrOE', 'https://us04web.zoom.us/j/73605092797?pwd=ai96enZ4dDFDRm1tVm9QeXRidzNpZz09', 'X8wNhB', NULL, NULL, '2021-09-25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `zoom__apis`
--

CREATE TABLE `zoom__apis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` int(11) DEFAULT NULL,
  `host_id` int(11) DEFAULT NULL,
  `host_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_classes`
--
ALTER TABLE `all_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_exams`
--
ALTER TABLE `create_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `j_w_t_s`
--
ALTER TABLE `j_w_t_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zooms`
--
ALTER TABLE `zooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zoom__apis`
--
ALTER TABLE `zoom__apis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_classes`
--
ALTER TABLE `all_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `create_exams`
--
ALTER TABLE `create_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `j_w_t_s`
--
ALTER TABLE `j_w_t_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zooms`
--
ALTER TABLE `zooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `zoom__apis`
--
ALTER TABLE `zoom__apis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
