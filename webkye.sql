-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 09:07 PM
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
  `banner_alt_text` varchar(266) NOT NULL,
  `cover` text NOT NULL,
  `cover_alt_text` varchar(266) NOT NULL,
  `seo_url` varchar(266) NOT NULL,
  `meta_keywords` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `timestamp`, `title`, `short_desc`, `blog`, `updated_at`, `post_by`, `banner`, `banner_alt_text`, `cover`, `cover_alt_text`, `seo_url`, `meta_keywords`) VALUES
(1, '2024-04-12 12:28:00', 'gjg', 'gjkgh', '<p>jhkhjk</p>', '0000-00-00 00:00:00', '', '8656418439.jpg', 'ghjgj', '744slide-03.png', 'bhmb', 'ghjkg', 'gkghk');

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
(11, '2024-04-05 07:34:17', 'asd', '23423sdfs', 'sdfsd@gmail.com', 'UI/UX', 'sdfdfs', 1),
(12, '2024-04-10 18:13:45', 'df', '34', 'fds@gmail.com', 'UI/UX', 'dfcsdfs', 0),
(13, '2024-04-12 17:34:53', 'fsdfs34535', '5344532345243', 'dad@gmail.com', 'Search Engine Optimization (SEO)', 'sdfsdfsd', 0),
(14, '2024-04-12 17:42:46', 'service', '4343424', 'service@gmail.com', 'Graphic Designing', 'sdsdfsfs', 0),
(15, '2024-04-16 16:50:07', 'fghf', '546467464564', 'hfgh@gmail.com', 'Graphic Designing', 'tryrt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(2, 'sdfsfs?', 'sfdfsd'),
(3, 'fsdf?', 'fsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(266) NOT NULL,
  `subtitle` varchar(266) NOT NULL,
  `short_desc` varchar(266) NOT NULL,
  `long_desc` text NOT NULL,
  `client` varchar(266) NOT NULL,
  `url` text NOT NULL,
  `cat` varchar(266) NOT NULL,
  `cover` text NOT NULL,
  `alt_text` varchar(266) NOT NULL,
  `date` date NOT NULL,
  `tags` text NOT NULL,
  `seo_url` varchar(266) NOT NULL,
  `meta_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `subtitle`, `short_desc`, `long_desc`, `client`, `url`, `cat`, `cover`, `alt_text`, `date`, `tags`, `seo_url`, `meta_keywords`) VALUES
(3, 'portfolio banner', 'HTML, CSS, JS', 'sdfsgfgsg vfgsf dfgsg', 'sfsfgsf dfbfg fsgf', 'rajan', '', 'UI/UX', '955portfolio.png', 'portfolio', '2024-04-11', 'a:7:{i:0;s:4:\"fsdf\";i:1;s:2:\"sf\";i:2;s:3:\"gsg\";i:3;s:4:\"sfgs\";i:4;s:4:\"gsfg\";i:5;s:4:\"gsgs\";i:6;s:5:\"gsdgs\";}', 'seo_url', 'gsg,dfgdf,thd,dfhd'),
(6, 'Video', 'fgf', 'hfghfg', 'hfghf', 'fghfg', 'https://www.youtube.com/embed/KBT2gmAfav4?si=XbJxP5bb3dbi9F0n', 'Videos', '629slide-03.png', 'sdfs', '2024-04-17', 'a:2:{i:0;s:3:\"ghg\";i:1;s:4:\"ghjg\";}', 'seo_url_link', 'gjhghjg');

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

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `img`, `alt_text`) VALUES
(19, 3, '319_slide-03.png', 'fdgd'),
(20, 3, '801_Firefly motorola intelligence meets art 21148.jpg', 'dsfsf'),
(21, 6, '662_sunny.jpg', 'ghkg');

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
(13, 'icofont-architecture-alt', 'Website Development', 'Webkye builds websites that impress and attract customers. They combine strong tech skills with search engine magic to make your website shine online and grow your business.'),
(14, 'icofont-presentation', 'UI/UX Designing', 'UI/UX design creates user-friendly interfaces that keep visitors happy and coming back. Boost conversions & SEO with clear navigation and a delightful user experience. '),
(15, 'icofont-atom', 'Graphic Designing', 'Need eye-catching graphics? We bring brands to life! Logos, social media, websites - we design visuals that impress. Offer: Logos, social media, websites.'),
(16, 'icofont-file-video', 'Video Editing', 'Raw footage? We make it epic! Pro video editing for YouTube, social media & more. Engage your audience, boost conversions. Offer: Pro video editing, YouTube, social media.'),
(17, 'icofont-search-stock', 'Search Engine Optimization ', 'Need a boost on Google? Our SEO experts optimize content, build backlinks, and stay ahead of algorithms to drive traffic and grow your business. Let\'s outrank your competitors together!'),
(18, 'icofont-mail', 'Email Marketing', 'Boost sales with engaging email marketing! We craft personalized campaigns to connect with your audience and achieve your goals. Let\'s grow together!'),
(19, 'icofont-chart-histogram-alt', 'Social Media  Optimization ', 'Struggling to engage online? Our experts craft winning social media strategies to boost your brand presence. Let\'s connect and achieve your goals together!'),
(20, 'icofont-paper', 'Content Writing', 'Struggling with your brand\'s story? Our writers craft engaging content, optimized for search engines, to boost awareness and drive results.'),
(21, 'icofont-spreadsheet', 'Paid Advertising', 'Targeted ads on top platforms. We manage campaigns, optimize budgets, and track results for maximum ROI. Grow brand awareness, generate leads, and drive sales!');

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
  `comment` text NOT NULL,
  `project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `timestamp`, `name`, `designation`, `profile`, `country`, `comment`, `project`) VALUES
(1, '2024-04-16 15:16:33', 'Davis Tran', 'Software Engineer ', '466client-2.png', '282united-states-flag-icon.svg', 'They did fantastic work and completed it very quickly. Highly impressed!', 3),
(2, '2024-04-16 15:18:55', 'Teonta Pegues', 'Software Engineer', '628client-1.png', '544united-states-flag-icon.svg', 'Webkye went above and beyond when it came to my web development project. He wasn\'t just quick to respond to my questions, but he also proactively offered solutions and helped with other aspects I hadn\'t anticipated. I give him 5 stars!', 3),
(3, '2024-04-16 15:23:33', 'Ravi Gupta', 'Sales Executive', '260client-3.png', '405india-flag-icon (1).svg', 'The experience was good working with Rajan (webkye) & he is very cooperative and good in term of work. I can say he is truthful person. overall experience was good working with rajan. looking forward for more projects', 3),
(4, '2024-04-16 15:24:30', 'Davis Tran', 'Software Engineer', '926client-2.png', '744united-states-flag-icon.svg', 'They did a wonderful job once again and delivered even faster than expected. It\'s my second time working with them, and I\'m extremely satisfied!', 3),
(5, '2024-04-16 15:26:31', 'Deepak Sharma', 'N/A', '518images.png', '805india-flag-icon (1).svg', 'Webkye work on my e-commerce website is exceptional efficient, creative, and modern. Highly recommend!', 3),
(6, '2024-04-16 15:34:55', 'Teonta Pegues', 'Software Engineer', '31client-1.png', '706united-states-flag-icon.svg', 'This is my second time working with Webkye. I plan to work with him monthly to help me with my website and businesses. I wholeheartedly recommend webkye to anyone seeking a skilled and patient web developer. I am thrilled with the outcome of our collaboration and look forward to working with them again on future projects.', 3),
(7, '2024-04-16 15:56:46', 'Marco Capra ', 'Yacht Designer', '3081516554180440.jpeg', '502monaco-flag-icon.svg', 'Rajan (webkye) is a user-friendly website developer for designers. Great for showcasing portfolios with beautiful visuals and mobile responsiveness. Recommend for easy & professional online presence.', 3);

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
