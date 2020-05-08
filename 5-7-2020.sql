-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 12:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_vriddhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parentId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parentId`, `name`, `url`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '0', 'CCTV SOLUTIONS', '#', 'CCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONS', 1, '2020-05-05 15:29:18', '2020-05-05 15:29:18'),
(2, '0', 'CCTV SOLUTIONS', '#', 'CCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONS', 1, NULL, NULL),
(3, '0', 'CCTV SOLUTIONS', '#', 'CCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONS', 1, NULL, NULL),
(4, '0', 'CCTV SOLUTIONS', '#', 'CCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONS', 1, NULL, NULL),
(5, '0', 'CCTV SOLUTIONS', '#', 'CCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONS', 1, NULL, NULL),
(6, '0', 'CCTV SOLUTIONS', '#', 'CCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONSCCTV SOLUTIONS', 1, NULL, NULL);

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
-- Table structure for table `front_pages`
--

CREATE TABLE `front_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_pages`
--

INSERT INTO `front_pages` (`id`, `title`, `description`, `slug`, `header_img`, `link_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'about us', '<section class=\"inner-con\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-7\">\r\n<div class=\"about-cont-box\">\r\n<h2 class=\"main_hadding_h2 underline margin-bottom_50px\">About&nbsp;</h2>\r\n<p><strong>Maximon Solutions Ltd</strong> &ndash; is a wholly independent U.K. based company, specialising in the design &amp; manufacture of advanced two way radio, GPS tracking and other communication accessories to a global market place. With extensive experience in Military Radio Communications our founder has been able to transfer this to commercial two way radio, allowing the production of innovative and effective products. It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do what we say we&rsquo;ll do when we say we&rsquo;ll do it! Maximon Solutions Ltd &ndash; is a wholly independent U.K. based company, specialising in the design &amp; manufacture of advanced two way radio, GPS tracking and other communication accessories to a global market place.</p>\r\n</div>\r\n</div>\r\n<div class=\"col-md-5\">\r\n<div class=\"about-right-img\"><img style=\"width: 100%;\" src=\"{{ asset(\'front_assets/image/about-img2.jpg\') }}\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-12 text-center\">\r\n<p><strong>Lorem Ipsum is simply dummy text of the printing and</strong> typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not onlyfi ve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with <strong>the release of Letraset sheets containing</strong>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n<p>popularised in the 1960s with <strong>the release of Letraset sheets containing</strong>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n<p><strong>Lorem Ipsum is simply dummy text of the printing and</strong> type remaining essentially unchanged. It was popularised in the 1960s with <strong>the release of Letraset sheets containing</strong>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n</div>\r\n<div class=\"col-md-12\">\r\n<div class=\"about-text-box-heading\">\r\n<h5>Short and long term radio hire</h5>\r\n</div>\r\n<p class=\"about-short-text\">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n</div>\r\n<div class=\"col-md-12\">\r\n<div class=\"about-text-box-heading\" style=\"background: #fdc500;\">\r\n<h5 class=\" color-black\">Radio Repear workshop</h5>\r\n</div>\r\n<p class=\"about-short-text\">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n</div>\r\n<div class=\"col-md-12\">\r\n<div class=\"about-text-box-heading\">\r\n<h5>Short and long term radio hire</h5>\r\n</div>\r\n<p class=\"about-short-text\">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'about_us', 'about.png', 'fedcdc', 1, '2020-05-27 21:09:04', '2020-05-06 16:14:54'),
(3, 'radio hire', '<section class=\"inner-con\">\r\n  <div class=\"container\">\r\n   \r\n  <div class=\"row\">\r\n      <div class=\"col-md-7\">\r\n      <div class=\"about-cont-box\">\r\n        <h2 class=\"main_hadding_h2 underline margin-bottom_50px\">Radio Hire</h2>\r\n      <p>It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do what we say we’ll do when we say we’ll do it! Maximon Solutions Ltd – is a wholly independent U.K. based company, specialising in the design & manufacture of advanced two way radio, GPS tracking and other communication accessories to a global market place. </p>\r\n      <p>It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do what we say we’ll do when we say we’ll do it! Maximon Solutions</p>\r\n      </div>\r\n    </div>\r\n    <div class=\"col-md-5\">\r\n      <div class=\"about-right-img\">\r\n        <img src=\"{{ asset(\'front_assets/image/video-img.jpg\') }}\" style=\"width: 100%;\">\r\n        <div class=\"play-icon\">\r\n          <img src=\"{{ asset(\'front_assets/image/video-icon.png\') }}\">\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </div>\r\n\r\n  <div class=\"row\">\r\n    <div class=\"col-md-12\">\r\n      <div class=\"free-heading-box\">\r\n        Which type of Radio is Best for you?\r\n      </div>\r\n       <p><strong>It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do wh</strong></p>\r\n      <div class=\"free-con-bxo\">\r\n        <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict military ethos strict military ethos  is used to retain high standards</p>\r\n      <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict strict military ethos is used to retain high standards</p>\r\n      <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict military ethos is used to retain high standards</p>\r\n      <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict military ethos is used to retain high standards</p>\r\n      <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict military ethos is used to retain high standards</p>\r\n      </div>\r\n     \r\n    </div>\r\n  </div>\r\n  \r\n  </div>\r\n</section>', 'radio_hire', 'radio_hire.png', '#', 1, '2020-05-27 21:09:04', '2020-05-06 16:14:58'),
(4, 'free buyer\'s guide', '<section class=\"inner-con\">\r\n    <div class=\"container\">\r\n     \r\n    <div class=\"row\">\r\n        <div class=\"col-md-7\">\r\n        <div class=\"about-cont-box\">\r\n          <h2 class=\"main_hadding_h2 underline margin-bottom_50px\">Free Buyer\'s Guide</h2>\r\n        <p>It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do what we say we’ll do when we say we’ll do it! Maximon Solutions Ltd – is a wholly independent U.K. based company, specialising in the design & manufacture of advanced two way radio, GPS tracking and other communication accessories to a global market place. </p>\r\n        <p>It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do what we say we’ll do when we say we’ll do it! Maximon Solutions</p>\r\n        </div>\r\n      </div>\r\n      <div class=\"col-md-5\">\r\n        <div class=\"about-right-img\">\r\n          <img src=\"{{ asset(\'front_assets/image/free-buyers.jpg\') }}\" style=\"width: 100%;\">\r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"row\">\r\n      <div class=\"col-md-12\">\r\n        <div class=\"free-heading-box\">\r\n          The Checklist covers 12 factors you need to consider when selecting a two way radio, including\r\n        </div>\r\n        <div class=\"free-con-bxo\">\r\n          <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict military ethos is used to retain high standards</p>\r\n        <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict military ethos is used to retain high standards</p>\r\n        <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict military ethos is used to retain high standards</p>\r\n        <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict military ethos is used to retain high standards</p>\r\n        <p><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>It also ensures a strict military ethos is used to retain high standards</p>\r\n        </div>\r\n        <p><strong>It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do wh</strong></p>\r\n      </div>\r\n    </div>\r\n    \r\n    </div>\r\n  </section>\r\n\r\n\r\n  <section class=\"book-form-sec\">\r\n    <div class=\"container\">\r\n      <div class=\"row\">\r\n        <div class=\"col-md-12 text-center\">\r\n          <div class=\"center-heading\">\r\n            <h2>Book a Hire</h2>\r\n          <p>or ask for more information</p>\r\n          </div>\r\n        </div>\r\n        <div class=\"book-form-box\">\r\n          <form>\r\n            <div class=\"row\">\r\n              <div class=\"col-md-6\">\r\n                <label>Name*</label>\r\n                <input type=\"text\" name=\"name\">\r\n              </div>\r\n              <div class=\"col-md-6\">\r\n                <label>Conmpany*</label>\r\n                <input type=\"text\" name=\"c-name\">\r\n              </div>\r\n\r\n              <div class=\"col-md-6\">\r\n                <label>Email*</label>\r\n                <input type=\"text\" name=\"email\">\r\n              </div>\r\n\r\n              <div class=\"col-md-6\">\r\n                <label>Phone*</label>\r\n                <input type=\"text\" name=\"phone\">\r\n              </div>\r\n\r\n              <div class=\"col-md-6\">\r\n                <label>Hire Start Date*</label>\r\n                <input type=\"text\" name=\"start-d\">\r\n              </div>\r\n\r\n              <div class=\"col-md-6\">\r\n                <label>Hire End Date*</label>\r\n                <input type=\"text\" name=\"end-d\">\r\n              </div>\r\n\r\n              <div class=\"col-md-6\">\r\n                <label>Postal Address*</label>\r\n                <textarea></textarea>\r\n              </div>\r\n\r\n              <div class=\"col-md-6\">\r\n                <label>Extra Information*</label>\r\n                <textarea></textarea>\r\n              </div>\r\n              <div class=\"col-md-12 text-center margin-top-30\">\r\n                <button class=\"custom-btn\">Submit</button>\r\n              </div>\r\n            </div>\r\n          </form>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </section>', 'free_buyers_guide', 'free_buyers_guide.png', '#', 1, '2020-05-27 21:09:04', '2020-05-06 16:15:00');

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
(184, '2014_10_12_000000_create_users_table', 1),
(185, '2014_10_12_100000_create_password_resets_table', 1),
(186, '2019_08_19_000000_create_failed_jobs_table', 1),
(187, '2020_04_20_004326_create_products_table', 1),
(188, '2020_04_21_190235_create_categories_table', 1),
(189, '2020_04_24_214832_create_banners_table', 1),
(190, '2020_04_26_212803_create_product_attributes_table', 1),
(191, '2020_04_29_010622_create_user_contacts_table', 1),
(192, '2020_04_29_184413_create_product_images_table', 1),
(193, '2020_05_03_090255_create_blogs_table', 1),
(194, '2020_05_04_192642_create_front_pages_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actualPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryId`, `name`, `code`, `color`, `desciption`, `actualPrice`, `discount`, `price`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ggggggg', 'ggggggg', 'ggggggg', '<p>ggggggg</p>', '77', '8', '99', '2541.png', 1, '2020-05-05 15:30:54', '2020-05-05 15:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `img`, `email_verified_at`, `isAdmin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Karan', '8787041546', 'aacharya63.karan@gmail.com', NULL, NULL, 1, '$2y$10$HoY/1LMnUeLkbNNQqBEdCubzoQtcTIixYGqShL0NRGD7y/58hGZii', NULL, NULL, NULL),
(2, 'Shivam', NULL, 'shivam@vss.com', NULL, NULL, 0, '$2y$10$j26HXd3LYLQaB5jfzMQIZeYG8/7K0Qvy.hr0cO9FVNvYv8lBVrKpa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_addr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_pages`
--
ALTER TABLE `front_pages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_pages`
--
ALTER TABLE `front_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
