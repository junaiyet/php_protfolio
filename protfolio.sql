-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 06:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(80) NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `image`, `status`) VALUES
(1, 'Enim in sunt adipis Enim in sunt adipis', '1.png', 0),
(2, '', '2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_contents`
--

CREATE TABLE `banner_contents` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(80) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_contents`
--

INSERT INTO `banner_contents` (`id`, `sub_title`, `title`, `description`, `status`) VALUES
(5, 'Quia porro assumenda', 'Exercitation facere ', 'Cumque quis repellen', 0),
(6, 'Laudantium reprehen', 'Et sapiente irure se', 'Quae dicta eos dolor', 0),
(7, 'Hey', 'I\'m Junaiyet Mia', 'Hello, I\'m Juaniyet Mia From Bangladesh. I\'m a professional Web Developer. ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_images`
--

CREATE TABLE `banner_images` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(80) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_images`
--

INSERT INTO `banner_images` (`id`, `banner_image`, `status`) VALUES
(4, '4.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `barnd`
--

CREATE TABLE `barnd` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brand_logos`
--

CREATE TABLE `brand_logos` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_logos`
--

INSERT INTO `brand_logos` (`id`, `brand_logo`, `status`) VALUES
(1, '1.png', 1),
(2, '2.png', 1),
(3, '3.png', 1),
(4, '4.png', 1),
(5, '5.png', 1),
(6, '6.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `address` varchar(80) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `address`, `number`, `email`, `status`) VALUES
(3, 'Momtaz Plaza (4th Floor) House#7, Road#4, Dhanmondi, Dhaka-1205', '8801936326678', 'junaiyet@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `counte`
--

CREATE TABLE `counte` (
  `id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counte`
--

INSERT INTO `counte` (`id`, `percentage`, `status`) VALUES
(1, 10, 1),
(2, 20, 1),
(3, 30, 1),
(4, 40, 1),
(5, 50, 0),
(6, 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dark_logos`
--

CREATE TABLE `dark_logos` (
  `id` int(11) NOT NULL,
  `dark_logo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dark_logos`
--

INSERT INTO `dark_logos` (`id`, `dark_logo`, `status`) VALUES
(6, '6.png', 1),
(7, '7.png', 0),
(8, '8.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `light_logos`
--

CREATE TABLE `light_logos` (
  `id` int(11) NOT NULL,
  `light_logo` varchar(80) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `light_logos`
--

INSERT INTO `light_logos` (`id`, `light_logo`, `status`) VALUES
(3, '3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `servire`
--

CREATE TABLE `servire` (
  `id` int(11) NOT NULL,
  `service_icon` varchar(80) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servire`
--

INSERT INTO `servire` (`id`, `service_icon`, `title`, `description`, `status`) VALUES
(4, 'fa-television', 'Ui Designe', 'User interface design or user interface engineering is the design', 1),
(5, 'fa-cloud', 'Graphic design', 'Graphic design is the profession and academic discipline whose activity consists', 1),
(6, 'fa-tv', 'Web design', 'web design encompasses many different skills and disciplines in the production', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `topic` varchar(80) NOT NULL,
  `description` varchar(80) NOT NULL,
  `percentage` varchar(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `topic`, `description`, `percentage`, `status`) VALUES
(3, 'html', ' HyperText Markup Language,', '90', 1),
(4, 'css', 'Cascading Styl', '85', 1),
(5, 'js', 'JavaScript', '10', 1),
(6, 'php', 'general-purpose scripting language', '30', 1),
(7, 'Sass ', 'Sass is a preprocessor scripting language t', '95', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `icon_class` varchar(50) NOT NULL,
  `social_link` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `icon_class`, `social_link`, `status`) VALUES
(1, 'fa-facebook-official', 'https://www.facebook.com/', 0),
(2, 'fa-wordpress', 'https://wordpress.org/', 1),
(3, 'fa-whatsapp', 'https://web.whatsapp.com/', 1),
(4, 'fa-twitter', 'https://twitter.com/', 1),
(5, 'fa-behance', 'https://www.behance.net/', 1),
(6, 'fa-bold', 'https://www.behance.net/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` varchar(80) NOT NULL,
  `description` varchar(260) NOT NULL,
  `name` varchar(80) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `description`, `name`, `designation`, `status`) VALUES
(1, '1.jpg', 'Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et', 'Lorem Ipsum Dolor', 'Sit Ame', 1),
(2, '2.jpg', 'Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et', 'Lucius Stein', 'Junior Front-End Developer', 1),
(3, '3.jpg', 'Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et', 'May Ferrell', 'Sit Amesafs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `profile_photo` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_photo`, `created_at`, `status`, `role`) VALUES
(1, 'Margaret Owens', 'qylan@mailinator.com', '$2y$10$265NXIDBiLyssP6CyDmyheMBlwzEg/ceeEgRwY4DYKdiwQtT7FXtK', '1.jpg', '2022-02-12 10:02:49', 0, 4),
(2, 'JUNAIYET', 'junaiyet@gmail.com', '$2y$10$1R3RTOfu2kaSOnk7fknjN.PiL3tqien5aV2.C26DIQ2smuEMw8JZ.', '2.jpg', '2022-02-12 10:03:58', 0, 1),
(3, 'Lisandra Gardner', 'rinim@mailinator.com', '$2y$10$SI/nv27APOmTjwhzscm52uBhXZ0oogScq3SOYaoTmNoZy9ttF9.wS', '3.jpg', '2022-02-13 12:59:48', 0, 2),
(4, 'Zelenia Ochoa', 'lohi@mailinator.com', '$2y$10$M.MXQ.qaC1jEb.dZsqPsmuFeQe2WTIl4zLyXZuhnmOrOuqZkCVTq2', '4.jpg', '2022-02-13 01:00:21', 0, 3),
(5, 'Madonna Drake', 'kisa@mailinator.com', '$2y$10$CPnFm63RWA.VgPPtzmY/p.2teI2F1SMcT4MzyiKYuNpAmOKrW5MMO', '5.jpg', '2022-02-14 10:01:20', 0, NULL),
(6, 'Medge Brady', 'navexoqe@mailinator.com', '$2y$10$v2iNUH40mI/RqDQBd3z9fes29iK9ulxIciO1eE3GXYOMvoLvdost6', '6.jpg', '2022-02-14 10:01:54', 1, NULL),
(7, 'Avye Velazquez', 'fufavigu@mailinator.com', '$2y$10$s2UCvh.hESiotqSGdWpP2./6/VsyUFx/UjXbJuweqoyglpKgleAIe', '7.jpg', '2022-02-14 10:03:10', 1, NULL),
(8, 'Kirby Garrison', 'rahivowezo@mailinator.com', '$2y$10$Xlm.H8b80RTu79WUBBicPu6WYhXJCfM9JZ4PTnw/Wsn2HRlpzOpia', '8.jpg', '2022-02-14 10:05:21', 1, NULL),
(9, 'Alan Benton', 'jinavo@mailinator.com', '$2y$10$vaSD37KBGZ4clY2/9R3wU.Ft6g0RBj8YMB6k6gCefnxJzUwMxvuEO', '9.jpg', '2022-02-14 10:06:15', 0, NULL),
(10, 'Zena Mccoy', 'locy@mailinator.com', '$2y$10$uzpyFafXtP9/X8dPLSHBc.xZ6RW3gfXinwyIhJKav4wDcNwwzbIvm', '10.png', '2022-02-14 10:14:23', 1, 0),
(11, 'Hayden Glenn', 'bewupaq@mailinator.com', '$2y$10$PLRHO.j8CS5axMcBadaLRuFzeuJFMnVwOP8rMtFDyvf9Axwukq9WW', '11.jpg', '2022-02-14 10:17:21', 1, 0),
(12, 'Patrick Buchanan', 'mibuta@mailinator.com', '$2y$10$i.8Z9s8kZBVXIYx7Zv3amelMsFDmyL6Zm0Vtgb9.NLUCgCLmIyMim', '12.jpg', '2022-02-14 10:20:44', 1, 0),
(13, 'Ashton Curry', 'ladufav@mailinator.com', '$2y$10$OtXOml69RRZIPFMKnqP9aOkpQEtIV5ygVa.bFFoodWbAedamPZNwm', '13.jpg', '2022-02-14 10:22:09', 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_contents`
--
ALTER TABLE `banner_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_images`
--
ALTER TABLE `banner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barnd`
--
ALTER TABLE `barnd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_logos`
--
ALTER TABLE `brand_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counte`
--
ALTER TABLE `counte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dark_logos`
--
ALTER TABLE `dark_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `light_logos`
--
ALTER TABLE `light_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servire`
--
ALTER TABLE `servire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_contents`
--
ALTER TABLE `banner_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banner_images`
--
ALTER TABLE `banner_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barnd`
--
ALTER TABLE `barnd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand_logos`
--
ALTER TABLE `brand_logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counte`
--
ALTER TABLE `counte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dark_logos`
--
ALTER TABLE `dark_logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `light_logos`
--
ALTER TABLE `light_logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `servire`
--
ALTER TABLE `servire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
