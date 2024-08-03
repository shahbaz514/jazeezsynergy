-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2024 at 05:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jazeezsynergy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `img`, `description`, `cat_id`, `username`, `date`) VALUES
(2, 'Dried Chili Pepper | Jazeez Synergy', 'admin.1703237378.jpg', 'Very hot and fruity, with a fragrant flavor, it provides depth, heat and unique aroma to any dish or sauce. It can also be used as a slightly hotter substitute for paprika or a sweeter substitute for cayenne. A simple way of adding some kick and color to your dish!	', 2, 'admin', '2023-12-22 09:29:38'),
(3, 'Dried Hibiscus Flower	 | Jazeez Synergy', 'admin.1703237404.jpg', 'Dry Hibiscus Flower are hibiscus flowers that are put in a dehydrator or sun-dried until they shrink and turn brittle. Drying process helps to preserve their shape and color to some extent. They can be used to brew hibiscus tea and can also be used for garnishing soups and custards.	', 3, 'admin', '2023-12-22 09:30:04'),
(4, 'Dried Split Ginger	 | Jazeez Synergy', 'admin.1703237426.jpg', 'Dry Ginger known as Soonth, Sunth or Sukku in India, dried ginger is, as the name suggests, nothing but fresh ginger which has undergone a drying process by first washing and soaking overnight and then drying it out in the sun.	', 4, 'admin', '2023-12-22 09:30:26'),
(5, 'Sesame Seed | Jazeez Synergy', 'admin.1703237470.jpg', 'Sesame Seeds are dried, cleaned and hulled seeds of the sesame oilseed plant and are creamy off white to light tan in colour and free from off flavours and odours. USAGE RECOMMENDATION/DIRECTIONS FOR USE: Use as required.	', 5, 'admin', '2023-12-22 09:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `date`) VALUES
(2, 'Dried Chili Pepper', '2023-12-22 07:32:48'),
(3, 'Dried Hibiscus Flower', '2023-12-22 07:32:56'),
(4, 'Dried Split Ginger', '2023-12-22 07:33:04'),
(5, 'Sesame Seed', '2023-12-22 07:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(2, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', 'Testing', 'Testing', '2023-12-22 11:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `meet_date` text NOT NULL,
  `time` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `name`, `email`, `phone`, `meet_date`, `time`, `date`) VALUES
(2, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', '03463806125', '12/25/2023', '11:30am', '2023-12-22 09:43:21'),
(3, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', '03463806125', '12/20/2023', '12:30am', '2023-12-22 09:44:34'),
(4, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', '03463806125', '12/27/2023', '5:30pm', '2023-12-22 11:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `pro_name` text NOT NULL,
  `pro_qty` int(11) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_total_price` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `status` text NOT NULL,
  `last_updated` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `pro_name`, `pro_qty`, `pro_price`, `pro_total_price`, `name`, `email`, `phone`, `address`, `status`, `last_updated`, `date`) VALUES
(2, '1001', 'Dried Hibiscus Flower', 1, 100, 100, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Ahmed Nagar Tehsil Lalian', 'In Progress', '23-12-2023 06:46:42am', '2023-12-23 05:46:42'),
(4, '1002', 'Dried Hibiscus Flower', 10, 100, 1000, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Ahmed Nagar Tehsil Lalian', 'In Process', '23-12-2023 07:06:20am', '2023-12-23 06:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `img`, `date`) VALUES
(1, 'Nestle', 'admin.1703170689.png', '2023-12-21 14:58:09'),
(2, 'Mr. Chef', 'admin.1703170750.png', '2023-12-21 14:59:10'),
(3, 'Freddy Hirsch', 'admin.1703170784.png', '2023-12-21 14:59:44'),
(4, 'Green Sahara', 'admin.1703170814.png', '2023-12-21 15:00:14'),
(6, 'Golden Penny Foods', 'admin.1703170937.png', '2023-12-21 15:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `weight_unit` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `description`, `price`, `weight_unit`, `date`) VALUES
(2, 'Dried Hibiscus Flower', 'admin.1703168828.jpg', 'Dry Hibiscus Flower are hibiscus flowers that are put in a dehydrator or sun-dried until they shrink and turn brittle. Drying process helps to preserve their shape and color to some extent. They can be used to brew hibiscus tea and can also be used for garnishing soups and custards.', 100, 'KG', '2023-12-21 14:27:08'),
(3, 'Dried Split Ginger', 'admin.1703168875.jpg', 'Dry Ginger known as Soonth, Sunth or Sukku in India, dried ginger is, as the name suggests, nothing but fresh ginger which has undergone a drying process by first washing and soaking overnight and then drying it out in the sun.', 100, 'KG', '2023-12-21 14:27:55'),
(4, 'Dried Chili Pepper', 'admin.1703168966.jpg', 'Very hot and fruity, with a fragrant flavor, it provides depth, heat and unique aroma to any dish or sauce. It can also be used as a slightly hotter substitute for paprika or a sweeter substitute for cayenne. A simple way of adding some kick and color to your dish!\r\n', 100, 'KG', '2023-12-21 14:29:26'),
(5, 'Sesame Seed', 'admin.1703169000.jpg', 'Sesame Seeds are dried, cleaned and hulled seeds of the sesame oilseed plant and are creamy off white to light tan in colour and free from off flavours and odours. USAGE RECOMMENDATION/DIRECTIONS FOR USE: Use as required.', 100, 'KG', '2023-12-21 14:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `img`, `date`) VALUES
(1, 'Admin', 'admin', 'admin@jazeezsynergy.com', '123456', 'admin.277520242.jpg', '2023-12-21 14:14:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
