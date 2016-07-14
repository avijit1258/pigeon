-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2016 at 09:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('super_admin','admin') COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `type`, `fullname`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'avijit1258', '$2y$10$xZHVbABVtTT94pRqF1qZWehPvAV.yf349.8sFqDnEQyC22dHMa27i', 'super_admin', 'Avijit Bhattacharjee', 1, NULL, NULL, NULL),
(2, 'nazia1408', '$2y$10$ABzG3w26ekO0MCCMeF..4OZ0aqeZbKEV4KGIKXjwuFYND2.PCiCOy', 'super_admin', 'Nazia Sultana', 1, NULL, NULL, NULL),
(3, 'razin223', '$2y$10$cSNfWSr4Tl80Lyztj8kyx.GQw4BnP6IBDZ4wIzSRo5Cnh9oz0L11W', 'super_admin', 'Razin Abid', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(10) UNSIGNED NOT NULL,
  `bus_number` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_number`, `seats`, `company_id`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Khulna Metro 1234', 41, 1, 1, 1464728644, NULL, NULL, NULL),
(2, 'Khulna Metro 2345', 41, 1, 1, 1464728644, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `id` int(10) UNSIGNED NOT NULL,
  `coach_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `coach_type_id` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED NOT NULL,
  `seat_id` int(10) UNSIGNED NOT NULL,
  `starting_counter_id` int(10) UNSIGNED NOT NULL,
  `starting_time` time NOT NULL,
  `ending_counter_id` int(10) UNSIGNED NOT NULL,
  `ending_time` time NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`id`, `coach_name`, `coach_type_id`, `route_id`, `seat_id`, `starting_counter_id`, `starting_time`, `ending_counter_id`, `ending_time`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Khl-Dhk AC 1', 1, 1, 1, 1, '07:00:00', 17, '15:00:00', 1, 1464728644, NULL, NULL, NULL),
(2, 'Khl-Dhk Chair Coach 3', 2, 1, 1, 1, '08:00:00', 17, '16:00:00', 1, 1464728644, NULL, NULL, NULL),
(3, 'Dhk-Khl AC 2', 1, 2, 1, 17, '07:00:00', 1, '15:00:00', 1, 1464803474, NULL, NULL, NULL),
(4, 'Dhk-Khl Chair Coach 4', 2, 2, 1, 17, '08:00:00', 1, '16:00:00', 1, 1464803513, NULL, NULL, NULL),
(5, 'Khl-Ctg Chair Coach 101', 2, 3, 2, 1, '15:00:00', 21, '08:00:00', 1, 1464803600, NULL, NULL, NULL),
(6, 'Ctg-Khl Chair Coach 102', 2, 4, 2, 21, '15:00:00', 1, '08:00:00', 1, 1464803647, NULL, NULL, NULL),
(7, 'Khl-Cox Bzr Chair Coach 202', 2, 5, 2, 1, '16:00:00', 24, '14:00:00', 1, 1464803753, NULL, NULL, NULL),
(8, 'Cox Bzr-Khl Chair Coach 203', 2, 6, 2, 24, '16:00:00', 1, '14:00:00', 1, 1464803802, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coach_departure_times`
--

CREATE TABLE `coach_departure_times` (
  `id` int(10) UNSIGNED NOT NULL,
  `coach_id` int(10) UNSIGNED NOT NULL,
  `counter_id` int(10) UNSIGNED NOT NULL,
  `time` time NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coach_departure_times`
--

INSERT INTO `coach_departure_times` (`id`, `coach_id`, `counter_id`, `time`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '07:00:00', 1, 1464845509, NULL, NULL, NULL),
(2, 1, 2, '07:05:00', 1, 1464845509, NULL, NULL, NULL),
(3, 1, 3, '07:15:00', 1, 1464845509, NULL, NULL, NULL),
(4, 1, 4, '07:20:00', 1, 1464845509, NULL, NULL, NULL),
(5, 1, 5, '07:30:00', 1, 1464845509, NULL, NULL, NULL),
(6, 1, 6, '07:35:00', 1, 1464845509, NULL, NULL, NULL),
(7, 1, 7, '07:45:00', 1, 1464845509, NULL, NULL, NULL),
(8, 1, 8, '08:00:00', 1, 1464845509, NULL, NULL, NULL),
(9, 1, 9, '08:15:00', 1, 1464845509, NULL, NULL, NULL),
(10, 1, 10, '08:30:00', 1, 1464845509, NULL, NULL, NULL),
(11, 1, 11, '09:00:00', 1, 1464845509, NULL, NULL, NULL),
(12, 1, 12, '09:30:00', 1, 1464845509, NULL, NULL, NULL),
(13, 1, 13, '10:00:00', 1, 1464845509, NULL, NULL, NULL),
(14, 1, 14, '10:30:00', 1, 1464845509, NULL, NULL, NULL),
(15, 1, 15, '14:00:00', 1, 1464845509, NULL, NULL, NULL),
(16, 1, 16, '14:30:00', 1, 1464845509, NULL, NULL, NULL),
(17, 1, 17, '15:00:00', 1, 1464845509, NULL, NULL, NULL),
(18, 2, 1, '08:00:00', 1, 1464852919, NULL, NULL, NULL),
(19, 2, 2, '08:05:00', 1, 1464852919, NULL, NULL, NULL),
(20, 2, 3, '08:15:00', 1, 1464852919, NULL, NULL, NULL),
(21, 2, 4, '08:20:00', 1, 1464852919, NULL, NULL, NULL),
(22, 2, 5, '08:30:00', 1, 1464852919, NULL, NULL, NULL),
(23, 2, 6, '08:35:00', 1, 1464852919, NULL, NULL, NULL),
(24, 2, 7, '08:45:00', 1, 1464852919, NULL, NULL, NULL),
(25, 2, 8, '09:00:00', 1, 1464852919, NULL, NULL, NULL),
(26, 2, 9, '09:15:00', 1, 1464852919, NULL, NULL, NULL),
(27, 2, 10, '09:30:00', 1, 1464852919, NULL, NULL, NULL),
(28, 2, 11, '10:00:00', 1, 1464852919, NULL, NULL, NULL),
(29, 2, 12, '10:30:00', 1, 1464852919, NULL, NULL, NULL),
(30, 2, 13, '11:00:00', 1, 1464852919, NULL, NULL, NULL),
(31, 2, 14, '11:30:00', 1, 1464852919, NULL, NULL, NULL),
(32, 2, 15, '15:00:00', 1, 1464852919, NULL, NULL, NULL),
(33, 2, 16, '15:30:00', 1, 1464852919, NULL, NULL, NULL),
(34, 2, 17, '16:00:00', 1, 1464852919, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coach_types`
--

CREATE TABLE `coach_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `coach_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coach_types`
--

INSERT INTO `coach_types` (`id`, `coach_type`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'A.C', 1, 1464728644, NULL, NULL, NULL),
(2, 'Chair Coach', 1, 1464728644, NULL, NULL, NULL),
(3, 'Noraml', 1, 1464728644, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` time NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hanif Corporation', 1, '00:20:16', NULL, NULL, NULL),
(2, 'Eagle Corporation', 1, '00:20:16', NULL, NULL, NULL),
(3, 'Dola Corporation', 1, '00:20:16', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `counter_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zone_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `counter_name`, `zone_id`, `company_id`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Royal Counter', 1, 1, 1, 1464728644, NULL, NULL, NULL),
(2, 'Shibbari More', 1, 1, 1, 1464728644, NULL, NULL, NULL),
(3, 'Sonadanga', 1, 1, 1, 1464728644, NULL, NULL, NULL),
(4, 'Boyra More', 1, 1, 1, 1464728644, NULL, NULL, NULL),
(5, 'Notun Rasta', 1, 1, 1, 1464728644, NULL, NULL, NULL),
(6, 'Daulatpur', 1, 1, 1, 1464728644, NULL, NULL, NULL),
(7, 'Fulbari Gate', 1, 1, 1, 1464728644, NULL, NULL, NULL),
(8, 'Fultala', 1, 1, 1, 1464728644, NULL, NULL, NULL),
(9, 'Noapara ', 2, 1, 1, 1464728644, NULL, NULL, NULL),
(10, 'Basundia', 2, 1, 1, 1464728644, NULL, NULL, NULL),
(11, 'Monihar ', 2, 1, 1, 1464728644, NULL, NULL, NULL),
(12, 'New Market', 2, 1, 1, 1464728644, NULL, NULL, NULL),
(13, 'Shema Khali ', 2, 1, 1, 1464728644, NULL, NULL, NULL),
(14, 'Magura Bus Stand', 3, 1, 1, 1464728644, NULL, NULL, NULL),
(15, 'Nabi Nagar', 5, 1, 1, 1464728644, NULL, NULL, NULL),
(16, 'Savar', 6, 1, 1, 1464728644, NULL, NULL, NULL),
(17, 'Gabtoli', 6, 1, 1, 1464728644, NULL, NULL, NULL),
(18, 'Shamoli', 6, 1, 1, 1464728644, NULL, NULL, NULL),
(19, 'Motijheel', 6, 1, 1, 1464728644, NULL, NULL, NULL),
(20, 'Jatrabari', 6, 1, 1, 1464728644, NULL, NULL, NULL),
(21, 'Dampara', 10, 1, 1, 1464728644, NULL, NULL, NULL),
(22, 'Bridge Bazar', 10, 1, 1, 1464728644, NULL, NULL, NULL),
(23, 'Dolphin Point', 11, 1, 1, 1464728644, NULL, NULL, NULL),
(24, 'Cox''s Bazar Bus Stand', 11, 1, 1, 1464728644, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

CREATE TABLE `fares` (
  `id` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED NOT NULL,
  `boarding_counter` int(10) UNSIGNED NOT NULL,
  `dropping_counter` int(10) UNSIGNED NOT NULL,
  `coach_type_id` int(10) UNSIGNED NOT NULL,
  `seat_type_id` int(10) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `online_price` decimal(8,2) NOT NULL,
  `sell_complete` decimal(2,1) NOT NULL,
  `active_special_price` tinyint(1) NOT NULL,
  `special_price_start_date` int(11) NOT NULL,
  `special_price_end_date` int(11) NOT NULL,
  `special_price` decimal(8,2) NOT NULL,
  `online_special_price` decimal(8,2) NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_26_085319_create_admins_table', 1),
('2016_06_04_172511_create_companies_table', 1),
('2016_07_02_063858_create_zones_table', 1),
('2016_07_02_154807_create_counters_table', 1),
('2016_07_10_093232_create_buses_table', 1),
('2016_07_10_093606_create_coach_types_table', 1),
('2016_07_10_093814_create_coach_departure_times_table', 1),
('2016_07_10_094108_create_coaches_table', 1),
('2016_07_10_094618_create_routes_table', 1),
('2016_07_10_094837_create_route_zones_table', 1),
('2016_07_10_095005_create_fares_table', 1),
('2016_07_10_095436_create_seats_table', 1),
('2016_07_10_095950_create_seat_types_table', 1),
('2016_07_10_100156_create_seat_arrangements_table', 1),
('2016_07_10_101304_add_foreign_keys_to_buses_table', 1),
('2016_07_10_101544_add_foreign_keys_to_companies_table', 1),
('2016_07_10_101713_add_foreign_keys_to_coach_types_table', 1),
('2016_07_10_101840_add_foreign_keys_to_coach_departure_times_table', 1),
('2016_07_10_102208_add_foreign_keys_to_coaches_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `route_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route_name`, `company_id`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Khulna-Dhaka', 1, 1, 1464728644, NULL, NULL, NULL),
(2, 'Dhaka-Khulna', 1, 1, 1464728644, NULL, NULL, NULL),
(3, 'Khulna-Chittagong', 1, 1, 1464728644, NULL, NULL, NULL),
(4, 'Chittagong-Khulna', 1, 1, 1464728644, NULL, NULL, NULL),
(5, 'Khulna-Cox''s Bazar', 1, 1, 1464728644, NULL, NULL, NULL),
(6, 'Cox''s Bazar-Khulna', 1, 1, 1464728644, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `route_zones`
--

CREATE TABLE `route_zones` (
  `id` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `sequel` tinyint(1) NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `route_zones`
--

INSERT INTO `route_zones` (`id`, `route_id`, `zone_id`, `sequel`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1464794907, NULL, NULL, NULL),
(2, 1, 2, 2, 1, 1464794907, NULL, NULL, NULL),
(3, 1, 3, 3, 1, 1464794907, NULL, NULL, NULL),
(4, 1, 4, 4, 1, 1464794907, NULL, NULL, NULL),
(5, 1, 5, 5, 1, 1464794907, NULL, NULL, NULL),
(6, 1, 6, 6, 1, 1464794907, NULL, NULL, NULL),
(7, 2, 6, 1, 1, 1464794983, NULL, NULL, NULL),
(8, 2, 5, 2, 1, 1464794983, NULL, NULL, NULL),
(9, 2, 4, 3, 1, 1464794983, NULL, NULL, NULL),
(10, 2, 3, 4, 1, 1464794983, NULL, NULL, NULL),
(11, 2, 2, 5, 1, 1464794983, NULL, NULL, NULL),
(12, 2, 1, 6, 1, 1464794983, NULL, NULL, NULL),
(13, 3, 1, 1, 1, 1464795054, NULL, NULL, NULL),
(14, 3, 2, 2, 1, 1464795054, NULL, NULL, NULL),
(15, 3, 3, 3, 1, 1464795054, NULL, NULL, NULL),
(16, 3, 4, 4, 1, 1464795054, NULL, NULL, NULL),
(17, 3, 5, 5, 1, 1464795054, NULL, NULL, NULL),
(18, 3, 6, 6, 1, 1464795054, NULL, NULL, NULL),
(19, 3, 7, 7, 1, 1464795054, NULL, NULL, NULL),
(20, 3, 8, 8, 1, 1464795054, NULL, NULL, NULL),
(21, 3, 9, 9, 1, 1464795054, NULL, NULL, NULL),
(22, 3, 10, 10, 1, 1464795054, NULL, NULL, NULL),
(23, 4, 10, 1, 1, 1464795109, NULL, NULL, NULL),
(24, 4, 9, 2, 1, 1464795109, NULL, NULL, NULL),
(25, 4, 8, 3, 1, 1464795109, NULL, NULL, NULL),
(26, 4, 7, 4, 1, 1464795109, NULL, NULL, NULL),
(27, 4, 6, 5, 1, 1464795109, NULL, NULL, NULL),
(28, 4, 5, 6, 1, 1464795109, NULL, NULL, NULL),
(29, 4, 4, 7, 1, 1464795109, NULL, NULL, NULL),
(30, 4, 3, 8, 1, 1464795109, NULL, NULL, NULL),
(31, 4, 2, 9, 1, 1464795109, NULL, NULL, NULL),
(32, 4, 1, 10, 1, 1464795109, NULL, NULL, NULL),
(33, 5, 1, 1, 1, 1464795184, NULL, NULL, NULL),
(34, 5, 2, 2, 1, 1464795184, NULL, NULL, NULL),
(35, 5, 3, 3, 1, 1464795184, NULL, NULL, NULL),
(36, 5, 4, 4, 1, 1464795184, NULL, NULL, NULL),
(37, 5, 5, 5, 1, 1464795184, NULL, NULL, NULL),
(38, 5, 6, 6, 1, 1464795184, NULL, NULL, NULL),
(39, 5, 7, 7, 1, 1464795184, NULL, NULL, NULL),
(40, 5, 8, 8, 1, 1464795184, NULL, NULL, NULL),
(41, 5, 9, 9, 1, 1464795184, NULL, NULL, NULL),
(42, 5, 10, 10, 1, 1464795184, NULL, NULL, NULL),
(43, 5, 11, 11, 1, 1464795184, NULL, NULL, NULL),
(44, 6, 11, 1, 1, 1464795270, NULL, NULL, NULL),
(45, 6, 10, 2, 1, 1464795270, NULL, NULL, NULL),
(46, 6, 9, 3, 1, 1464795270, NULL, NULL, NULL),
(47, 6, 8, 4, 1, 1464795270, NULL, NULL, NULL),
(48, 6, 7, 5, 1, 1464795270, NULL, NULL, NULL),
(49, 6, 6, 6, 1, 1464795270, NULL, NULL, NULL),
(50, 6, 5, 7, 1, 1464795270, NULL, NULL, NULL),
(51, 6, 4, 8, 1, 1464795270, NULL, NULL, NULL),
(52, 6, 3, 9, 1, 1464795270, NULL, NULL, NULL),
(53, 6, 2, 10, 1, 1464795270, NULL, NULL, NULL),
(54, 6, 1, 11, 1, 1464795270, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(10) UNSIGNED NOT NULL,
  `seat_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `row` tinyint(4) NOT NULL,
  `col` tinyint(4) NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `seat_name`, `row`, `col`, `company_id`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Economy Class 41 Seat', 12, 6, 1, 1, 1464728644, NULL, NULL, NULL),
(2, 'Economy Class 36 Seat', 11, 6, 1, 1, 1464728644, NULL, NULL, NULL),
(3, 'Business Class 28 Seat', 9, 4, 1, 1, 1464728644, NULL, NULL, NULL),
(4, 'Mixed Class 38 Seat', 10, 5, 1, 1, 1464728644, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat_arrangements`
--

CREATE TABLE `seat_arrangements` (
  `id` int(10) UNSIGNED NOT NULL,
  `seat_id` int(10) UNSIGNED NOT NULL,
  `row_id` tinyint(4) NOT NULL,
  `col_id` tinyint(4) NOT NULL,
  `seat_type_id` int(10) UNSIGNED NOT NULL,
  `seat_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seat_arrangements`
--

INSERT INTO `seat_arrangements` (`id`, `seat_id`, `row_id`, `col_id`, `seat_type_id`, `seat_name`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 2, 'Ext1', 1, 1464728644, NULL, NULL, NULL),
(2, 1, 1, 4, 2, 'Ext2', 1, 1464728644, NULL, NULL, NULL),
(3, 1, 2, 3, 2, 'Ext3', 1, 1464728644, NULL, NULL, NULL),
(4, 1, 2, 4, 2, 'Ext4', 1, 1464728644, NULL, NULL, NULL),
(5, 1, 3, 1, 2, 'A1', 1, 1464728644, NULL, NULL, NULL),
(6, 1, 3, 2, 2, 'A2', 1, 1464728644, NULL, NULL, NULL),
(7, 1, 3, 5, 2, 'A3', 1, 1464728644, NULL, NULL, NULL),
(8, 1, 3, 6, 2, 'A4', 1, 1464728644, NULL, NULL, NULL),
(9, 1, 4, 1, 2, 'B1', 1, 1464728644, NULL, NULL, NULL),
(10, 1, 4, 2, 2, 'B2', 1, 1464728644, NULL, NULL, NULL),
(11, 1, 4, 5, 2, 'B3', 1, 1464728644, NULL, NULL, NULL),
(12, 1, 4, 6, 2, 'B4', 1, 1464728644, NULL, NULL, NULL),
(13, 1, 5, 1, 2, 'C1', 1, 1464728644, NULL, NULL, NULL),
(14, 1, 5, 2, 2, 'B2', 1, 1464728644, NULL, NULL, NULL),
(15, 1, 5, 5, 2, 'C3', 1, 1464728644, NULL, NULL, NULL),
(16, 1, 5, 6, 2, 'C4', 1, 1464728644, NULL, NULL, NULL),
(17, 1, 6, 1, 2, 'D1', 1, 1464728644, NULL, NULL, NULL),
(18, 1, 6, 2, 2, 'D2', 1, 1464728644, NULL, NULL, NULL),
(19, 1, 6, 5, 2, 'D3', 1, 1464728644, NULL, NULL, NULL),
(20, 1, 6, 6, 2, 'D4', 1, 1464728644, NULL, NULL, NULL),
(21, 1, 7, 1, 2, 'E1', 1, 1464728644, NULL, NULL, NULL),
(22, 1, 7, 2, 2, 'E2', 1, 1464728644, NULL, NULL, NULL),
(23, 1, 7, 5, 2, 'E3', 1, 1464728644, NULL, NULL, NULL),
(24, 1, 7, 6, 2, 'E4', 1, 1464728644, NULL, NULL, NULL),
(25, 1, 8, 1, 2, 'F1', 1, 1464728644, NULL, NULL, NULL),
(26, 1, 8, 2, 2, 'F2', 1, 1464728644, NULL, NULL, NULL),
(27, 1, 8, 5, 2, 'F3', 1, 1464728644, NULL, NULL, NULL),
(28, 1, 8, 6, 2, 'F4', 1, 1464728644, NULL, NULL, NULL),
(29, 1, 9, 1, 2, 'G1', 1, 1464728644, NULL, NULL, NULL),
(30, 1, 9, 2, 2, 'G2', 1, 1464728644, NULL, NULL, NULL),
(31, 1, 9, 5, 2, 'G3', 1, 1464728644, NULL, NULL, NULL),
(32, 1, 9, 6, 2, 'G4', 1, 1464728644, NULL, NULL, NULL),
(33, 1, 10, 1, 2, 'H1', 1, 1464728644, NULL, NULL, NULL),
(34, 1, 10, 2, 2, 'H2', 1, 1464728644, NULL, NULL, NULL),
(35, 1, 10, 5, 2, 'H3', 1, 1464728644, NULL, NULL, NULL),
(36, 1, 10, 6, 2, 'H4', 1, 1464728644, NULL, NULL, NULL),
(37, 1, 11, 1, 2, 'I1', 1, 1464728644, NULL, NULL, NULL),
(38, 1, 11, 2, 2, 'I2', 1, 1464728644, NULL, NULL, NULL),
(39, 1, 11, 5, 2, 'I3', 1, 1464728644, NULL, NULL, NULL),
(40, 1, 11, 6, 2, 'I4', 1, 1464728644, NULL, NULL, NULL),
(41, 1, 12, 1, 2, 'J1', 1, 1464728644, NULL, NULL, NULL),
(42, 1, 12, 2, 2, 'J2', 1, 1464728644, NULL, NULL, NULL),
(43, 1, 12, 5, 2, 'J3', 1, 1464728644, NULL, NULL, NULL),
(44, 1, 12, 6, 2, 'J4', 1, 1464728644, NULL, NULL, NULL),
(45, 1, 12, 3, 2, 'J5', 1, 1464728644, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat_types`
--

CREATE TABLE `seat_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `seat_type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `seat_data` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `modification_date` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seat_types`
--

INSERT INTO `seat_types` (`id`, `seat_type_name`, `seat_data`, `modified_by`, `modification_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Business', '', 1, 1464728644, NULL, NULL, NULL),
(2, 'Economy', '', 1, 1464728644, NULL, NULL, NULL),
(3, 'Super Economy', '', 1, 1464728644, NULL, NULL, NULL),
(4, 'Engine Cover', '', 1, 1464728644, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('admin','manager','counterman','online_sell') COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `fullname`, `active`, `company_id`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'avijit-hanif', '$2y$10$Ew3nwJQA29u.6otgH8mjjeOUvn8onh1aoJCSWmzXZxloOzSpf81Ca', 'admin', 'Avijit Bhattacharjee', 1, 1, NULL, '2016-07-13 01:51:35', 'T5FnpfbuzHkkVfp1HjqdFedM4OFTYyc2gLC3bxELmeraY9l0RMUamdnR8j4q'),
(2, 'nazia-hanif', '$2y$10$MeIuSdFXz/yh3M5YZ4/xYOZhcI8sx2X6JaBKyuEVqRw4n2CxwpLmm', 'admin', 'Nazia Sultana', 1, 1, NULL, NULL, NULL),
(3, 'razin-hanif', '$2y$10$aDSOHzaBve/y/ipVghXgSeHgzKExezDAndWpbExAdqtdNoYr9ZxMy', 'admin', 'Razin Abid', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(10) UNSIGNED NOT NULL,
  `zone_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_at` time NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `zone_name`, `modified_by`, `modified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Barguna', 1, '07:37:59', NULL, NULL, NULL),
(2, 'Barisal', 1, '07:37:59', NULL, NULL, NULL),
(3, 'Bhola', 1, '07:37:59', NULL, NULL, NULL),
(4, 'Jhalokati', 1, '07:37:59', NULL, NULL, NULL),
(5, 'Patuakhali', 1, '07:37:59', NULL, NULL, NULL),
(6, 'Pirojpur', 1, '07:37:59', NULL, NULL, NULL),
(7, 'Bandarban', 1, '07:37:59', NULL, NULL, NULL),
(8, 'Brahmanbaria', 1, '07:37:59', NULL, NULL, NULL),
(9, 'Chandpur', 1, '07:37:59', NULL, NULL, NULL),
(10, 'Chittagong', 1, '07:37:59', NULL, NULL, NULL),
(11, 'Comilla', 1, '07:37:59', NULL, NULL, NULL),
(12, 'Cox s Bazar', 1, '07:37:59', NULL, NULL, NULL),
(13, 'Feni', 1, '07:37:59', NULL, NULL, NULL),
(14, 'Khagrachhari', 1, '07:37:59', NULL, NULL, NULL),
(15, 'Lakshmipur', 1, '07:37:59', NULL, NULL, NULL),
(16, 'Noakhali', 1, '07:37:59', NULL, NULL, NULL),
(17, 'Rangamati', 1, '07:37:59', NULL, NULL, NULL),
(18, 'Dhaka', 1, '07:37:59', NULL, NULL, NULL),
(19, 'Faridpur', 1, '07:37:59', NULL, NULL, NULL),
(20, 'Gazipur', 1, '07:37:59', NULL, NULL, NULL),
(21, 'Bagerhatalganj', 1, '07:37:59', NULL, NULL, NULL),
(22, 'Kishoreganj', 1, '07:37:59', NULL, NULL, NULL),
(23, 'Madaripur', 1, '07:37:59', NULL, NULL, NULL),
(24, 'Manikganj', 1, '07:37:59', NULL, NULL, NULL),
(25, 'Munshiganj', 1, '07:37:59', NULL, NULL, NULL),
(26, 'Narayanganj', 1, '07:37:59', NULL, NULL, NULL),
(27, 'Narsingdi', 1, '07:37:59', NULL, NULL, NULL),
(28, 'Rajbari', 1, '07:37:59', NULL, NULL, NULL),
(29, 'Shariatpur', 1, '07:37:59', NULL, NULL, NULL),
(30, 'Tangail', 1, '07:37:59', NULL, NULL, NULL),
(31, 'Bagerhat', 1, '07:37:59', NULL, NULL, NULL),
(32, 'Chuadanga', 1, '07:37:59', NULL, NULL, NULL),
(33, 'Jessore', 1, '07:37:59', NULL, NULL, NULL),
(34, 'Jhenaidah', 1, '07:37:59', NULL, NULL, NULL),
(35, 'Khulna', 1, '07:37:59', NULL, NULL, NULL),
(36, 'Kushtia', 1, '07:37:59', NULL, NULL, NULL),
(37, 'Magura', 1, '07:37:59', NULL, NULL, NULL),
(38, 'Meherpur', 1, '07:37:59', NULL, NULL, NULL),
(39, 'Narail', 1, '07:37:59', NULL, NULL, NULL),
(40, 'Satkhira', 1, '07:37:59', NULL, NULL, NULL),
(41, 'Mymensingh', 1, '07:37:59', NULL, NULL, NULL),
(42, 'Netrakona', 1, '07:37:59', NULL, NULL, NULL),
(43, 'Sherpur', 1, '07:37:59', NULL, NULL, NULL),
(44, 'Bogra', 1, '07:37:59', NULL, NULL, NULL),
(45, 'Joypurhat', 1, '07:37:59', NULL, NULL, NULL),
(46, 'Naogaon', 1, '07:37:59', NULL, NULL, NULL),
(47, 'Natore', 1, '07:37:59', NULL, NULL, NULL),
(48, 'Chapainawabganj', 1, '07:37:59', NULL, NULL, NULL),
(49, 'Pabna', 1, '07:37:59', NULL, NULL, NULL),
(50, 'Rajshahi', 1, '07:37:59', NULL, NULL, NULL),
(51, 'Sirajganj', 1, '07:37:59', NULL, NULL, NULL),
(52, 'Dinajpur', 1, '07:37:59', NULL, NULL, NULL),
(53, 'Gaibandha', 1, '07:37:59', NULL, NULL, NULL),
(54, 'Kurigram', 1, '07:37:59', NULL, NULL, NULL),
(55, 'Lalmonirhat', 1, '07:37:59', NULL, NULL, NULL),
(56, 'Nilphamari', 1, '07:37:59', NULL, NULL, NULL),
(57, 'Panchagarh', 1, '07:37:59', NULL, NULL, NULL),
(58, 'Rangpur', 1, '07:37:59', NULL, NULL, NULL),
(59, 'Thakurgaon', 1, '07:37:59', NULL, NULL, NULL),
(60, 'Habiganj', 1, '07:37:59', NULL, NULL, NULL),
(61, 'Moulvibazar', 1, '07:37:59', NULL, NULL, NULL),
(62, 'Sunamganj', 1, '07:37:59', NULL, NULL, NULL),
(63, 'Sylhet', 1, '07:37:59', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buses_company_id_foreign` (`company_id`),
  ADD KEY `buses_modified_by_foreign` (`modified_by`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coaches_coach_type_id_foreign` (`coach_type_id`),
  ADD KEY `coaches_route_id_foreign` (`route_id`),
  ADD KEY `coaches_seat_id_foreign` (`seat_id`),
  ADD KEY `coaches_starting_counter_id_foreign` (`starting_counter_id`),
  ADD KEY `coaches_ending_counter_id_foreign` (`ending_counter_id`),
  ADD KEY `coaches_modified_by_foreign` (`modified_by`);

--
-- Indexes for table `coach_departure_times`
--
ALTER TABLE `coach_departure_times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coach_departure_times_coach_id_foreign` (`coach_id`),
  ADD KEY `coach_departure_times_counter_id_foreign` (`counter_id`),
  ADD KEY `coach_departure_times_modified_by_foreign` (`modified_by`);

--
-- Indexes for table `coach_types`
--
ALTER TABLE `coach_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coach_types_modified_by_foreign` (`modified_by`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_modified_by_foreign` (`modified_by`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fares`
--
ALTER TABLE `fares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_zones`
--
ALTER TABLE `route_zones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_arrangements`
--
ALTER TABLE `seat_arrangements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_types`
--
ALTER TABLE `seat_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `coach_departure_times`
--
ALTER TABLE `coach_departure_times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `coach_types`
--
ALTER TABLE `coach_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `fares`
--
ALTER TABLE `fares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `route_zones`
--
ALTER TABLE `route_zones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seat_arrangements`
--
ALTER TABLE `seat_arrangements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `seat_types`
--
ALTER TABLE `seat_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `buses_modified_by_foreign` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coaches`
--
ALTER TABLE `coaches`
  ADD CONSTRAINT `coaches_coach_type_id_foreign` FOREIGN KEY (`coach_type_id`) REFERENCES `coach_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coaches_ending_counter_id_foreign` FOREIGN KEY (`ending_counter_id`) REFERENCES `counters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coaches_modified_by_foreign` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coaches_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coaches_seat_id_foreign` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coaches_starting_counter_id_foreign` FOREIGN KEY (`starting_counter_id`) REFERENCES `counters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coach_departure_times`
--
ALTER TABLE `coach_departure_times`
  ADD CONSTRAINT `coach_departure_times_coach_id_foreign` FOREIGN KEY (`coach_id`) REFERENCES `coaches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coach_departure_times_counter_id_foreign` FOREIGN KEY (`counter_id`) REFERENCES `counters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coach_departure_times_modified_by_foreign` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coach_types`
--
ALTER TABLE `coach_types`
  ADD CONSTRAINT `coach_types_modified_by_foreign` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_modified_by_foreign` FOREIGN KEY (`modified_by`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
