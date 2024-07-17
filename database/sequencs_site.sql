-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2023 at 10:36 PM
-- Server version: 8.0.32-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sequencs_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `orderID` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ordering` text NOT NULL,
  `orderType` varchar(255) NOT NULL,
  `orderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orderr`
--

INSERT INTO `orderr` (`orderID`, `name`, `phone`, `email`, `ordering`, `orderType`, `orderDate`) VALUES
(47, 'Aljawhara ', '0566091995', 'Altammamii2@gmail.com', 'ادارة معرض ', 'الرئيسية', '2022-08-15 15:43:59'),
(73, 'تتيويممم', '8282828', 'Ahhahag@gmail.com', 'تيتيتيتينتينينينث', 'الرئيسية', '2022-09-15 03:16:05'),
(74, 'تتيويممم', '8282828', 'Ahhahag@gmail.com', 'تيتيتيتينتينينينث', 'الرئيسية', '2022-09-15 03:16:19'),
(75, 'Bhwhjsjjehs', '82727272', 'Hahahahhsj@gaggs.com', 'Dndhehheej', 'الرئيسية', '2022-09-15 04:06:08'),
(76, 'Iiiiii', '3938383', 'Gsgsn@gmail.com', 'Hwhwhwhhwhwh', 'الرئيسية', '2022-09-15 04:06:47'),
(77, 'Iiiiii', '3938383', 'Gsgsn@gmail.com', 'Hwhwhwhhwhwh', 'الرئيسية', '2022-09-15 04:10:56'),
(78, 'Ttattataya', '818282828', 'Gsgsn@gmail.com', 'Hqhwhwhhwhw', 'الرئيسية', '2022-09-15 04:11:16'),
(79, 'Aljawhara ', '0566091995', 'Altammamii2@gmail.com', 'ااااااا', 'الرئيسية', '2022-09-15 08:45:14'),
(80, 'Wgwgghw', '05555573', 'Jsjs@hjs.com', 'Can you help me ', ' تنظيم المعارض والمؤتمرات', '2022-09-15 10:02:07'),
(81, 'From index', '654444', 'Ggkkj@gmail.com ', 'Tttfctfffghjj', 'الرئيسية', '2022-09-15 10:03:05'),
(82, 'From index', '654444', 'Ggkkj@gmail.com ', 'Tttfctfffghjj', 'الرئيسية', '2022-09-15 10:05:50'),
(83, 'From index', '654444', 'Ggkkj@gmail.com ', 'Tttfctfffghjj', 'الرئيسية', '2022-09-15 10:06:11'),
(84, 'ليان محمد', '055555', 'Lolo@gmail.com', 'هنا طلب تم من الصفحة الرئيسية', 'الرئيسية', '2022-09-15 10:13:01'),
(85, 'ليان محمد', '055555', 'Lolo@gmail.com', 'هنا طلب تم من الصفحة الرئيسية', 'الرئيسية', '2022-09-15 10:16:19'),
(86, 'Aljawhara ', '0566091995', 'Altammamii2@gmail.com', 'ااااااا', 'الرئيسية', '2022-09-15 17:20:37'),
(87, 'Aljawhara ', '0566091995', 'Altammamii2@gmail.com', 'ااااااا', 'الرئيسية', '2022-09-16 01:20:49'),
(88, 'Wgbbys', '7272772', 'Ggkkj@gmail.com', 'Jwjjsjsjssنينيتي', 'الرئيسية', '2022-09-16 03:00:42'),
(89, 'Test', '7262662', 'llll@gmail.com', 'Hsjshshhshshs', 'الرئيسية', '2022-09-16 03:19:09'),
(90, 'Test', '7262662', 'llll@gmail.com', 'Hsjshshhshshs', 'الرئيسية', '2022-09-16 03:19:37'),
(91, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:36'),
(92, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:36'),
(93, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:37'),
(94, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:38'),
(95, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:38'),
(96, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:39'),
(97, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:39'),
(98, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:40'),
(99, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:41'),
(100, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:42'),
(101, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:43'),
(102, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:43'),
(103, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:44'),
(104, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:45'),
(105, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:45'),
(106, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:46'),
(107, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:46'),
(108, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:47'),
(109, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:47'),
(110, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:48'),
(111, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:48'),
(112, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:49'),
(113, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:49'),
(114, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:50'),
(115, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:50'),
(116, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:51'),
(117, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:52'),
(118, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:52'),
(119, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:53'),
(120, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:54'),
(121, 'Sggegeg', '7272772', 'Hshshhs@gmail.com ', 'Shhehdhhs', 'الرئيسية', '2022-09-16 03:30:55'),
(122, 'Hshwhhw', '727272', 'Gasjsj@gmail.com', 'Hshshshshs', 'الرئيسية', '2022-09-16 03:35:56'),
(123, 'Hshwhhw', '727272', 'Gasjsj@gmail.com', 'Hshshshshs', 'الرئيسية', '2022-09-16 03:36:25'),
(124, 'Aljawhara ', '0566091995', 'Altammamii2@gmail.com', 'ااااااا', 'الرئيسية', '2022-09-16 17:23:51'),
(125, 'Aljawhara ', '0566091995', 'Altammamii2@gmail.com', 'ااااااا', 'الرئيسية', '2022-09-16 17:23:55'),
(126, 'ليااان', '505050', 'tawafmesar@gmail.com', 'اويتيتتي', 'الرئيسية', '2022-09-18 03:17:10'),
(127, 'Layan', '81891819', 'tawafmesar@gmail.com', 'نينينينزسزس', 'الرئيسية', '2022-09-18 03:31:09'),
(128, 'تاااام', '8181899', 'annana@gmail.com', 'تيتيتيتتيتي', 'الرئيسية', '2022-09-18 03:33:07'),
(129, 'Lolo', '818182', 'tawafmesar@gmail.com', 'Sggagsggw', 'الرئيسية', '2022-09-18 03:36:52'),
(130, 'Tatagwg', '7177172', 'jehadtawaf@gmail.com', 'Hshshsggs', 'الرئيسية', '2022-09-18 03:42:34'),
(131, 'Tatagwg', '7177172', 'jehadtawaf@gmail.com', 'Hshshsggs', 'الرئيسية', '2022-09-18 03:47:05'),
(132, 'Jojo', '57787', 'layan@gmail.com', 'عيتتshhshsh', 'الرئيسية', '2022-09-18 03:47:48'),
(133, 'Lolo', '188181', 'annana@gmail.com', 'Ususuhe', ' تنظيم المعارض والمؤتمرات', '2022-09-18 03:55:40'),
(134, 'Jsjsjs', '818182', 'Hahahahhsj@gaggs.com', 'Zjjsskkssk', '  إدارة وتنظيم الفعاليات ', '2022-09-18 03:59:19'),
(135, 'تجربه', '55555', 'Hahahahhsj@gaggs.com', 'ترجبة الايميل ', ' تنظيم المعارض والمؤتمرات', '2022-09-29 23:48:48'),
(136, 'testt', '2122112', 'tad@gmail.com', 'test from en page', 'الرئيسية', '2023-03-25 02:45:29'),
(137, 'gasgsa', '12122121', 'gagagg@gmail.com', 'test', 'الرئيسية', '2023-03-25 22:33:37'),
(138, 'gasgsa', '12122121', 'gagagg@gmail.com', 'test', 'الرئيسية', '2023-03-25 22:35:24'),
(139, 'kaskba', '121221', 'nxn@gmail.com', 'testttt', 'الرئيسية', '2023-03-25 22:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `password`) VALUES
(2, 'jojo', 'Jawh908070Jawh'),
(3, 'admin', 'admin90807060');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `orderID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
