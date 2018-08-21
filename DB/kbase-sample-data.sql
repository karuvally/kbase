-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2018 at 02:19 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbase`
--

-- --------------------------------------------------------

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `remember_token`, `created_at`, `updated_at`, `name`, `address`, `city`, `district`, `state`, `co_ordinates`, `phone_no`, `password`, `username`, `gender`, `age`, `banned`, `rating`) VALUES
(4, 'Cratwr6DHFEhDE6bIe8Dz4i26qz844Gs0QkbLJnr9nrFoyrrkALOkOvDdGAN', NULL, NULL, 'admin', '', '', '', '', '', '', '$2y$10$/Wg0d8a6iwIB1ncd4r.YYedSGT.wyHVo4jIyxbWW5xcMG5Q7PXd5m', 'admin@12.com', '', 0, 0, 0);


--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(42, 'camp manager'),
(43, 'collection manager'),
(41, 'main admin'),
(45, 'virtual volunteer'),
(44, 'volunteer');


--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `dashboard`, `view_camp_manager`, `create_camp_manager`, `update_camp_manager`, `view_collection_center_manager`, `create_collection_center_manager`, `update_collection_center_manager`, `news`, `created_at`, `updated_at`) VALUES
(36, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL);


--
-- Dumping data for table `permission_maps`
--

INSERT INTO `permission_maps` (`id`, `permission_name`, `path`, `element`, `created_at`, `updated_at`) VALUES
(13, 'dashboard', 'dashboard', 'Dashboard', NULL, NULL);


--
-- Dumping data for table `permission_roles`
--

INSERT INTO `permission_roles` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(32, 41, 36, NULL, NULL);


--
-- Dumping data for table `sub_permissions`
--

INSERT INTO `sub_permissions` (`id`, `permission_name`, `path`, `element`, `parent_id`) VALUES
(1, 'view_camp_manager', 'view_camp_manager ', 'View Camp Manager', 13);


--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(15, 4, 41, NULL, NULL);


--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES
(1, NULL, 'Food'),
(2, 1, 'Ready To Serve'),
(3, 1, 'Raw Materials');


--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`) VALUES
(1, 'KG'),
(2, 'Liters'),
(3, 'Persons');


--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `unit_id`, `perishable`) VALUES
(1, 2, 'Biriyani', 3, 1),
(2, 2, 'Rice & Curry', 3, 1),
(3, 2, 'Drinking Water', 2, 0);


--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `name`) VALUES
(1, 'Dummy Camp 1'),
(2, 'Dummy Camp 2');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
