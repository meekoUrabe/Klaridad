-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2026 at 04:12 PM
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
-- Database: `klaridad`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `name`) VALUES
(1, 'Arena Blanco'),
(2, 'Ayala'),
(3, 'Baliwasan'),
(4, 'Baluno'),
(5, 'Boalan'),
(6, 'Bolong'),
(7, 'Buenavista'),
(8, 'Bunguiao'),
(9, 'Busay (Sacol Island)'),
(10, 'Cabaluay'),
(11, 'Cabatangan'),
(12, 'Cacao'),
(13, 'Calabasa'),
(14, 'Calarian'),
(15, 'Camino Nuevo'),
(16, 'Campo Islam'),
(17, 'Canelar'),
(18, 'Capisan'),
(19, 'Cawit'),
(20, 'Culianan'),
(21, 'Curuan'),
(22, 'Dita'),
(23, 'Divisoria'),
(24, 'Dulian (Upper Bunguiao)'),
(25, 'Dulian (Upper Pasonanca)'),
(26, 'Guisao'),
(27, 'Guiwan'),
(28, 'Kasanyangan'),
(29, 'La Paz'),
(30, 'Labuan'),
(31, 'Lamisahan'),
(32, 'Landang Gua'),
(33, 'Landang Laum'),
(34, 'Lanzones'),
(35, 'Lapakan'),
(36, 'Latuan (Curuan)'),
(37, 'Licomo'),
(38, 'Limaong'),
(39, 'Limpapa'),
(40, 'Lubigan'),
(41, 'Lumayang'),
(42, 'Lumbangan'),
(43, 'Lunzuran'),
(44, 'Maasin'),
(45, 'Malagutay'),
(46, 'Mampang'),
(47, 'Manalipa'),
(48, 'Mangusu'),
(49, 'Manicahan'),
(50, 'Mariki'),
(51, 'Mercedes'),
(52, 'Muti'),
(53, 'Pamucutan'),
(54, 'Pangapuyan'),
(55, 'Panubigan'),
(56, 'Pasilmanta (Sacol Island)'),
(57, 'Pasobolong'),
(58, 'Pasonanca'),
(59, 'Patalon'),
(60, 'Putik'),
(61, 'Quiniput'),
(62, 'Recodo'),
(63, 'Rio Hondo'),
(64, 'Salaan'),
(65, 'San Jose Cawa-Cawa'),
(66, 'San Jose Gusu'),
(67, 'San Ramon'),
(68, 'San Roque'),
(69, 'Sangali'),
(70, 'Santa Barbara'),
(71, 'Santa Catalina'),
(72, 'Santa Maria'),
(73, 'Santo Niño'),
(74, 'Sibulao (Caruan)'),
(75, 'Sinunuc'),
(76, 'Talon-Talon'),
(77, 'Taluksangay'),
(78, 'Tetuan'),
(79, 'Tictapul'),
(80, 'Tigbalabag'),
(81, 'Tigtabon'),
(82, 'Tolosa'),
(83, 'Tugbungan'),
(84, 'Tulungatung'),
(85, 'Tumaga'),
(86, 'Tumbagaan'),
(87, 'Turno'),
(88, 'Ubay'),
(89, 'Ulo'),
(90, 'Upper Calarian'),
(91, 'Victoria'),
(92, 'Vitali'),
(93, 'Zamboanga Central'),
(94, 'Zone I (Pob.)'),
(95, 'Zone II (Pob.)'),
(96, 'Zone III (Pob.)'),
(97, 'Zone IV (Pob.)');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `name`) VALUES
(1, 'Zamboanga City');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `project_s_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `budget` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture_path` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `project_s_id` int(11) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`project_s_id`, `status`) VALUES
(1, 'Ongoing'),
(2, 'Completed'),
(3, 'Discontinued'),
(4, 'Overdue');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `report_c_id` int(11) NOT NULL,
  `report_s_id` int(11) NOT NULL,
  `anonymous` smallint(6) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `picture_path` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_category`
--

CREATE TABLE `report_category` (
  `report_c_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_category`
--

INSERT INTO `report_category` (`report_c_id`, `category`) VALUES
(1, 'Infrastructure'),
(2, 'Sanitation'),
(3, 'Public Safety'),
(4, 'Health'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `report_status`
--

CREATE TABLE `report_status` (
  `report_s_id` int(11) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_status`
--

INSERT INTO `report_status` (`report_s_id`, `status`) VALUES
(1, 'In Review'),
(2, 'Received'),
(3, 'Resolved');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sector_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sector_id`, `city_id`, `barangay_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16),
(17, 1, 17),
(18, 1, 18),
(19, 1, 19),
(20, 1, 20),
(21, 1, 21),
(22, 1, 22),
(23, 1, 23),
(24, 1, 24),
(25, 1, 25),
(26, 1, 26),
(27, 1, 27),
(28, 1, 28),
(29, 1, 29),
(30, 1, 30),
(31, 1, 31),
(32, 1, 32),
(33, 1, 33),
(34, 1, 34),
(35, 1, 35),
(36, 1, 36),
(37, 1, 37),
(38, 1, 38),
(39, 1, 39),
(40, 1, 40),
(41, 1, 41),
(42, 1, 42),
(43, 1, 43),
(44, 1, 44),
(45, 1, 45),
(46, 1, 46),
(47, 1, 47),
(48, 1, 48),
(49, 1, 49),
(50, 1, 50),
(51, 1, 51),
(52, 1, 52),
(53, 1, 53),
(54, 1, 54),
(55, 1, 55),
(56, 1, 56),
(57, 1, 57),
(58, 1, 58),
(59, 1, 59),
(60, 1, 60),
(61, 1, 61),
(62, 1, 62),
(63, 1, 63),
(64, 1, 64),
(65, 1, 65),
(66, 1, 66),
(67, 1, 67),
(68, 1, 68),
(69, 1, 69),
(70, 1, 70),
(71, 1, 71),
(72, 1, 72),
(73, 1, 73),
(74, 1, 74),
(75, 1, 75),
(76, 1, 76),
(77, 1, 77),
(78, 1, 78),
(79, 1, 79),
(80, 1, 80),
(81, 1, 81),
(82, 1, 82),
(83, 1, 83),
(84, 1, 84),
(85, 1, 85),
(86, 1, 86),
(87, 1, 87),
(88, 1, 88),
(89, 1, 89),
(90, 1, 90),
(91, 1, 91),
(92, 1, 92),
(93, 1, 93),
(94, 1, 94),
(95, 1, 95),
(96, 1, 96),
(97, 1, 97);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GrrHjnXoZc1FeUcZah7Ajh0nqirq1tpTK8xaeyC7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVd1VHFpbTRDTjlHbnpEc2MycGk1bWV3djl3akI5U0Q0dkJJdENJcCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hY2NvdW50L3NpZ251cCI7czo1OiJyb3V0ZSI7czoxNDoiYWNjb3VudC5zaWdudXAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774192307);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `role` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `role`) VALUES
(1, 'Citizen'),
(2, 'Barangay Official'),
(3, 'City Government');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`,`sector_id`,`project_s_id`),
  ADD KEY `fk_project_sector_id` (`sector_id`),
  ADD KEY `fk_project_project_s_id` (`project_s_id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`project_s_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `fk_report_user_id` (`user_id`),
  ADD KEY `fk_report_sector_id` (`sector_id`),
  ADD KEY `fk_report_report_c_id` (`report_c_id`),
  ADD KEY `fk_report_report_s_id` (`report_s_id`);

--
-- Indexes for table `report_category`
--
ALTER TABLE `report_category`
  ADD PRIMARY KEY (`report_c_id`);

--
-- Indexes for table `report_status`
--
ALTER TABLE `report_status`
  ADD PRIMARY KEY (`report_s_id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sector_id`),
  ADD KEY `city_id` (`city_id`,`barangay_id`),
  ADD KEY `fk_sector_barangay_id` (`barangay_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_role_id` (`user_role_id`,`city_id`,`barangay_id`),
  ADD KEY `fk_user_city_id` (`city_id`),
  ADD KEY `fk_user_barangay_id` (`barangay_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `project_s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_category`
--
ALTER TABLE `report_category`
  MODIFY `report_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report_status`
--
ALTER TABLE `report_status`
  MODIFY `report_s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `sector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_project_project_s_id` FOREIGN KEY (`project_s_id`) REFERENCES `project_status` (`project_s_id`),
  ADD CONSTRAINT `fk_project_sector_id` FOREIGN KEY (`sector_id`) REFERENCES `sector` (`sector_id`),
  ADD CONSTRAINT `fk_project_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `fk_report_report_c_id` FOREIGN KEY (`report_c_id`) REFERENCES `report_category` (`report_c_id`),
  ADD CONSTRAINT `fk_report_report_s_id` FOREIGN KEY (`report_s_id`) REFERENCES `report_status` (`report_s_id`),
  ADD CONSTRAINT `fk_report_sector_id` FOREIGN KEY (`sector_id`) REFERENCES `sector` (`sector_id`),
  ADD CONSTRAINT `fk_report_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `sector`
--
ALTER TABLE `sector`
  ADD CONSTRAINT `fk_sector_barangay_id` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`),
  ADD CONSTRAINT `fk_sector_city_id` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_barangay_id` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`),
  ADD CONSTRAINT `fk_user_city_id` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `fk_user_user_role_id` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`user_role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
