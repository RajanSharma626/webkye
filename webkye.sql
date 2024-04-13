-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 02:55 PM
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
-- Database: `webkye`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `profile` text NOT NULL,
  `name` varchar(266) NOT NULL,
  `email` varchar(266) NOT NULL,
  `designation` varchar(266) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `profile`, `name`, `email`, `designation`, `password`, `role`) VALUES
(2, '', '', 'rajansharma.webkye@gmail.com', '', '7496ccc67f8591128e0e6cb496dbe455', 0),
(4, '', '', 'dev@wowevents.in', '', '6357efdbf68e89e78f45fa8e8e4829cc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(266) NOT NULL,
  `short_desc` text NOT NULL,
  `blog` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `post_by` varchar(266) NOT NULL,
  `banner` text NOT NULL,
  `cover` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(266) NOT NULL,
  `subject` varchar(266) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `timestamp`, `name`, `phone`, `email`, `subject`, `message`, `status`) VALUES
(1, '2024-04-02 15:47:06', 'Rajan Sharma', '8468027626', 'rajan@gmail.com', 'Web development', 'hello rajan', 1),
(2, '2024-04-02 15:51:38', 'nanu', '8468027626', 'rajan@gmail.com', 'Web development', 'fdsfsfs', 1),
(3, '2024-04-02 15:56:08', 'dd', '5343453', 'rajan@gmail.com', 'Search Engine Optimization (SEO)', 'dvsdv', 1),
(11, '2024-04-05 07:34:17', 'asd', '23423sdfs', 'sdfsd@gmail.com', 'UI/UX', 'sdfdfs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(266) NOT NULL,
  `short_desc` varchar(266) NOT NULL,
  `long_desc` text NOT NULL,
  `client` varchar(266) NOT NULL,
  `url` text NOT NULL,
  `cover` text NOT NULL,
  `alt_text` varchar(266) NOT NULL,
  `date` datetime NOT NULL,
  `tags` text NOT NULL,
  `seo_url` varchar(266) NOT NULL,
  `meta_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `short_desc`, `long_desc`, `client`, `url`, `cover`, `alt_text`, `date`, `tags`, `seo_url`, `meta_keywords`) VALUES
(2, 'gdfgdf', 'gdfgd', 'dfgd', 'gdfg', 'http://localhost/webkye-main/admin/add-project', '292slide-03.png', 'dfbg', '2024-04-19 00:00:00', 'a:4:{i:0;s:3:\"bbc\";i:1;s:3:\"ghf\";i:2;s:5:\"fghfg\";i:3;s:5:\"fghfg\";}', 'http://localhost/webkye-main/admin/add-project', 'dfgd,gfhf,hfghf,fghf');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `img` text NOT NULL,
  `alt_text` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(266) NOT NULL,
  `heading` varchar(266) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `heading`, `description`) VALUES
(2, 'icofont icofont-rocket-alt-1', 'title', 'vsdvsvss dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(266) NOT NULL,
  `designation` varchar(266) NOT NULL,
  `profile` text NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `profile`, `rank`) VALUES
(1, 'Rajan Sharma', 'web Developerm', '550person-front-computer-working-html.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(266) NOT NULL,
  `designation` varchar(266) NOT NULL,
  `profile` text NOT NULL,
  `country` varchar(266) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `timestamp`, `name`, `designation`, `profile`, `country`, `comment`) VALUES
(2, '2024-03-31 12:04:00', 'Rajan ', 'web developer', '162IMG_9881 (1).jpg', '757dd.svg ', 'vvfgf fdsf dsfsf sdfs'),
(3, '2024-03-31 14:01:00', 'Rajan Sharma', 'Web Designer', '992i01_img_20230131_231602-removebg-1-min.png', '61usa.svg', 'fdfsf sdfs dvsfsdf'),
(4, '2024-03-31 17:32:43', 'webkye', 'agency', '137logo-03.png', '773india-flag-icon.svg', 'dfg fdgd dfgd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
