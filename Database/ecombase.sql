-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 12:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecombase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `admin-name` varchar(255) NOT NULL,
  `admin-password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin-name`, `admin-password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(32, 'Base Makeup'),
(34, 'Face Makeup'),
(35, 'Lip Makeup'),
(36, 'Cleansers & Toners'),
(37, 'Moisturizers & Serum'),
(38, 'Hair Treatments'),
(39, 'Sun Protection'),
(40, 'Shampoos & Condition'),
(41, 'Fine Jewelries'),
(42, 'Fashion Jewelries'),
(43, 'Minimalist Jewelries'),
(44, 'Eye Makeup');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_page`
--

CREATE TABLE `checkout_page` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Dob` datetime(6) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Contact` int(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_page`
--

INSERT INTO `checkout_page` (`id`, `Name`, `Email`, `Dob`, `Address`, `Contact`, `Category`, `Remarks`) VALUES
(1, 'Mohsin Ali', 'panhwermohsinali@gmail.com', '2024-01-21 00:00:00.000000', 'karachi Sindh Pakistan', 2147483647, 'Eye makeup', 'Hello World !');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `category_id`, `product_img`) VALUES
(60, 'Foundation', '200', 32, 'download (1).jfif'),
(61, 'Concealer', '200', 32, 'download (3).jfif'),
(62, 'Primer', '200', 34, 'download (2).jfif'),
(65, 'BB Cream', '500', 32, 'BB cream.jpg'),
(66, 'CC cream', '850', 32, 'CC-Cream.jpg'),
(67, ' Colour Collecting P', '900', 32, 'Colour-Correcting-Primer.jpg'),
(69, 'Contour-Kit', '700', 32, 'Contour-Kit.jpg'),
(70, 'Cushion-Foundation', '650', 32, 'Cushion-Foundation.jpg'),
(71, 'Highlighter', '750', 32, 'Highlighter.jpg'),
(72, 'Hydrating-Primer', '960', 32, 'Hydrating-Primer.jpg'),
(73, 'Mineral-Foundation', '780', 32, 'Mineral-Foundation.jpg'),
(74, 'Primer', '500', 32, 'Primer.jpg'),
(75, 'Setting-Spray', '450', 32, 'Setting-Spray.jpg'),
(76, 'Stick-Foundation', '800', 32, 'Stick-Foundation.jpg'),
(77, 'Tinted-Moisturizer', '180', 32, 'Tinted-Moisturizer.jpg'),
(78, 'Antioxidant-Toner', '800', 36, 'Antioxidant-Toner.jpg'),
(79, 'Balancing-Toner', '400', 36, 'Balancing-Toner.jpg'),
(80, 'Brightening-Toner', '600', 36, 'Brightening-Toner.jpg'),
(81, 'Calming-Toner', '350', 36, 'Calming-Toner.jpg'),
(82, 'Clarifying-Toner', '450', 36, 'Clarifying-Toner.jpg'),
(83, 'Cleansing-Balm', '300', 36, 'Cleansing-Balm.jpg'),
(84, 'Exfoliating-Cleanser', '745', 36, 'Exfoliating-Cleanser.jpg'),
(85, 'Exfoliating-Toner', '350', 36, 'Exfoliating-Cleanser.jpg'),
(86, 'Gel-Cleanser', '180', 36, 'Gel-Cleanser.jpg'),
(87, 'Hydrating-Toner', '700', 36, 'Hydrating-Toner.jpg'),
(88, 'Micellar-Water', '720', 36, 'Micellar-Water.jpg'),
(89, 'Oil-Cleanser', '160', 36, 'Oil-Cleanser.jpg'),
(90, 'Pore-Refining-Toner', '360', 36, 'Pore-Refining-Toner.jpg'),
(108, 'Brow-Gel', '800', 44, 'Brow-Gel.jpg'),
(109, 'Colored-Eyeliner', '500', 44, 'Colored-Eyeliner.jpg'),
(110, 'Eyebrow-pencil', '120', 44, 'Eyebrow-pencil.jpg'),
(111, 'Eye-Glitter', '350', 44, 'Eye-Glitter.jpg'),
(112, 'Eyelash-curler', '500', 44, 'Eyelash-curler.jpg'),
(113, 'Eyeliner', '120', 44, 'Eyeliner.jpg'),
(114, 'Eyemakeup-Brushes', '1500', 44, 'Eyemakeup-Brushes.jpg'),
(115, 'Eyemakeup-remover', '110', 44, 'Eyemakeup-remover.jpg'),
(116, 'eye-Makeup-Setting-S', '400', 44, 'eye-Makeup-Setting-Spray.jpg'),
(117, 'Eyeprimer', '130', 44, 'Eyeprimer.jpg'),
(118, 'Eyeshadow-Palette', '230', 44, 'Eyeshadow-Palette.jpg'),
(119, 'False-Eyelashes', '180', 44, 'False-Eyelashes.jpg'),
(120, 'liquid-eyeshadow', '140', 44, 'liquid-eyeshadow.jpg'),
(121, 'Mascara', '100', 44, 'Mascara.jpg'),
(122, 'Undereye-Concealer', '700', 44, 'Undereye-Concealer.jpg'),
(123, 'Blush', '190', 34, 'Blush.jpg'),
(124, 'Bronzer', '300', 34, 'Bronzer.jpg'),
(125, 'CC-Cream (1)', '100', 34, 'CC-Cream (1).jpg'),
(126, 'Color-Adjusting-Drop', '600', 34, 'Color-Adjusting-Drops.jpg'),
(127, 'Color-Corrector', '345', 34, 'Color-Corrector.jpg'),
(128, 'Concealer', '380', 34, 'Concealer.jpg'),
(129, 'Contour-Kit', '160', 34, 'Contour-Kit.jpg'),
(130, 'Face-Brushes', '90', 34, 'Face-Brushes.jpg'),
(131, 'Foundation', '340', 34, 'Foundation.jpg'),
(132, 'Highlighter', '290', 36, 'Highlighter.jpg'),
(133, 'Makeup-Primer', '160', 34, 'Makeup-Primer.jpg'),
(134, 'Makeup-Sponge', '50', 34, 'Makeup-Sponge.jpg'),
(135, 'Matte-Setting-Powder', '400', 34, 'Matte-Setting-Powder.jpg'),
(136, 'Setting-Powder', '80', 34, 'Setting-Powder.jpg'),
(137, 'Tinted-Moisturizer', '300', 34, 'Tinted-Moisturizer.jpg'),
(138, 'a', '260', 42, 'a.jpg'),
(139, 'Adjustable-Fashion-R', '200', 42, 'Adjustable-Fashion-Ring.jpg'),
(140, 'Anklet', '120', 42, 'Anklet.jpg'),
(141, 'Beaded-Drop-Earrings', '250', 42, 'Beaded-Drop-Earrings.jpg'),
(142, 'Bohemian-Beaded-Brac', '350', 42, 'Bohemian-Beaded-Bracelet.jpg'),
(143, 'Choker-Necklace', '400', 42, 'Choker-Necklace.jpg'),
(144, 'Cuff-Bracelet', '200', 42, 'Cuff-Bracelet.jpg'),
(145, 'Ear-Cuff-Set', '150', 42, 'Ear-Cuff-Set.jpeg'),
(146, 'Geometric-Pendant-Ne', '500', 42, 'Geometric-Pendant-Necklace.jpg'),
(147, 'Hoop-Earrings', '550', 42, 'Hoop-Earrings.jpg'),
(148, 'Hoop-Earrings', '550', 42, 'Hoop-Earrings.jpg'),
(149, 'Layered-Necklace-Set', '550', 42, 'Layered-Necklace-Set.jpg'),
(150, 'Pearl-Statement-Neck', '600', 42, 'Pearl-Statement-Necklace.jpg'),
(151, 'Rhinestone-Statement', '650', 42, 'Rhinestone-Statement-Bracelet.jpg'),
(152, 'Stackable-Rings', '700', 42, 'Stackable-Rings.jpg'),
(153, 'Tassel-Earring', '750', 42, 'Tassel-Earring.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `id` int(255) NOT NULL,
  `total_revenue` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`id`, `total_revenue`) VALUES
(1, 500),
(2, 900),
(3, 750),
(4, 500),
(5, 500),
(6, 500),
(7, 500),
(8, 500),
(9, 500),
(10, 500),
(11, 500),
(12, 500),
(13, 500),
(14, 200),
(15, 200);

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `name`, `email`, `number`, `message`) VALUES
(5, 'Mohsin Ali', 'panhwermohsin@gmail.com', 2147483647, 'Hello World !'),
(6, 'Areeb', 'areeb@gmail.com', 2147483647, 'Hi World !');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(6, 'Muhammad Areeb', 'mohammadareeb@gmail.com', 'veticancity'),
(7, 'Mohsin Ali', 'panhwermohsinali@gmail.com', '12345'),
(8, 'Shadab Hussain', 'shadab@gmail.com', '786786'),
(9, 'Zaeem ', 'zaeem@gmail.com', '786786'),
(10, 'Atta Muhammad', 'atta@gmail.com', 'atta124'),
(11, 'Azan', 'azan@gmail.com', 'azan786'),
(12, 'Shahrukh Khan', 'aryan@gmail.com', 'dunki124'),
(13, 'Salman', 'salman@gmail.com', '123'),
(14, 'Ahmed Ali', 'ahmed@gmail.com', '678678'),
(15, 'Abrar Ahmed', 'abrar@gmail.com', '567567'),
(16, 'Tanzeel', 'tanzeel@gmail.com', 'tanzeel10'),
(17, 'Asghar', 'asghar@gmail.com', 'asghar'),
(18, 'Aatif Hussain', 'aatif@gmail.com', 'web3'),
(19, 'kamran', 'kamran@gmail.com', 'function786'),
(20, 'John Doe', 'john@gmail.com', 'johnsena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_page`
--
ALTER TABLE `checkout_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `checkout_page`
--
ALTER TABLE `checkout_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `revenue`
--
ALTER TABLE `revenue`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
