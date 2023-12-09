-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 12:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_rent`
--

CREATE TABLE `car_rent` (
  `id` int(9) NOT NULL,
  `owner` text NOT NULL,
  `model` varchar(200) NOT NULL,
  `year` varchar(128) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `price` varchar(12) NOT NULL,
  `driver_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_rent`
--

INSERT INTO `car_rent` (`id`, `owner`, `model`, `year`, `contact`, `price`, `driver_name`) VALUES
(396975365, 'niloy', 'Toyota Corolla', '2010', '0123123123', '20', 'Rafiq Uddin Tomal');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(9) NOT NULL,
  `orders` int(11) NOT NULL,
  `order_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `orders`, `order_count`) VALUES
(100000001, 0, 0),
(116850903, 0, 0),
(130527415, 0, 0),
(149662330, 0, 0),
(173768004, 0, 0),
(176973221, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `decorator`
--

CREATE TABLE `decorator` (
  `id` int(9) NOT NULL,
  `owner` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `services` text NOT NULL,
  `team_details` text NOT NULL,
  `location` text NOT NULL,
  `coverage` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `price` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `decorator`
--

INSERT INTO `decorator` (`id`, `owner`, `name`, `services`, `team_details`, `location`, `coverage`, `contact`, `price`) VALUES
(201278555, 'niloy', 'Gulshan Decorators', '-birthday -Marriage  -simple party -office Program ', 'Our team is now a strong team of 15 waiters, 5 cooks, 3 security persons.', 'Gulshan Dhaka', 'Mohakhali, Gulshan, Tejgaon, Farmgate', '0123124142', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `food_team`
--

CREATE TABLE `food_team` (
  `id` int(9) NOT NULL,
  `owner` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `services` text NOT NULL,
  `Food Menu` text NOT NULL,
  `location` text NOT NULL,
  `coverage` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_team`
--

INSERT INTO `food_team` (`id`, `owner`, `name`, `services`, `Food Menu`, `location`, `coverage`, `contact`, `price`) VALUES
(531408849, 'niloy', 'CTG Catering Service', 'The most popular provider for authentic tasty foods in Chittagong', 'Morog Polao, Kacchi Biriyani, Haydrabadi Biriyani, Chinese Set Menu, Buffet (45 item)', 'Chittagong', 'Only Inside CTG', '0123123121', 19000),
(668240319, 'niloy', 'Dhaka Catering Team', 'We provide authentic tasty foods in every type of occasion.', 'Morog Polao, Kacchi Biriyani, Haydrabadi Biriyani, Chinese Set Menu, Buffet (70 item)', 'Gulshan, Dhaka', 'Mohakhali, Gulshan, Tejgaon, Farmgate', '0123213812', 20000),
(835673657, 'niloy', 'Gulshan Catering Service', 'The most popular provider for authentic tasty foods in Dhaka', 'Morog Polao, Kacchi Biriyani, Haydrabadi Biriyani, Chinese Set Menu, Buffet (70 item)', 'Dhaka', 'Inside Dhaka', '0123123112', 22000);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(9) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `nid` int(16) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `username`, `nid`, `dob`, `email`, `password`, `contact`, `usertype`) VALUES
(116850903, 'Jennifer Abedin', 'jenni', 123456, '2001-12-12', 'jenni@gmail.com', '123', '0123123124', 'C'),
(130527415, 'Customer1', 'customer1', 12345, '1999-11-11', 'customer1@gmail.com', '123', '0123456789', 'C'),
(149662330, 'Sayed', 'sayed', 1234, '2000-12-12', 'sayed@gmail.com', '123', '0123456789', 'C'),
(173768004, 'admin2', 'admin2', 111111, '1999-11-11', 'admin2@gmail.com', '12345', '0123123123', 'A'),
(176973221, 'admin', 'admin', 0, '1999-12-12', 'admin@gmail.com', '12345', '0120000000', 'A'),
(270389123, 'Niloy Farhan', 'niloy', 123456, '1999-12-16', 'niloy.farhan@g.bracu.ac.bd', '123', '0123456789', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(9) NOT NULL,
  `venue_id` int(9) NOT NULL,
  `total_income` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `venue_id`, `total_income`) VALUES
(201234211, 0, 0),
(270389123, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `photo_cinema`
--

CREATE TABLE `photo_cinema` (
  `id` int(9) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `Services` text NOT NULL,
  `Team Details` text NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Cinematography` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photo_cinema`
--

INSERT INTO `photo_cinema` (`id`, `owner`, `name`, `Services`, `Team Details`, `Location`, `Cinematography`, `contact`, `Price`) VALUES
(155313743, 'niloy', 'Dream Weaver Team 1', 'We provide photo shoot in all kind of events including Birthdays, Marriage, Conference, Seminar etc.', 'Our team is now a strong team of 105 Photographers, cinematographers & Editors', 'Dream Weaver is headquartered in Dhaka with a regional office in Chittagong and has an offshore operation in Singapore', 'Yes', '01239877421', '60000'),
(786598299, 'niloy', 'Dream Weaver Team 2', 'We provide photo shoot in all kind of events including Birthdays, Marriage, Conference, Seminar etc.', 'Our team is now a strong team of 105 Photographers, cinematographers & Editors', 'Dream Weaver is headquartered in Dhaka with a regional office in Chittagong and has an offshore operation in Singapore', 'Yes', '01239877421', '40000'),
(905279731, 'niloy', 'Dream Weaver Team 3', 'We provide photo shoot in all kind of events including Birthdays, Marriage, Conference, Seminar etc.', 'Our team is now a strong team of 105 Photographers, cinematographers & Editors', 'Dream Weaver is headquartered in Dhaka with a regional office in Chittagong and has an offshore operation in Singapore', 'Yes', '0123123123', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `name` varchar(50) NOT NULL,
  `cost` int(9) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `venue_id` int(9) NOT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `size` varchar(128) NOT NULL,
  `capacity` int(9) NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `price` varchar(128) NOT NULL,
  `v_review_id` int(9) NOT NULL,
  `income` int(9) NOT NULL,
  `Rating` int(11) NOT NULL DEFAULT 0,
  `review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venue_id`, `owner`, `name`, `size`, `capacity`, `location`, `description`, `contact`, `price`, `v_review_id`, `income`, `Rating`, `review`) VALUES
(1001, 'niloy', 'Dhaka Officers Club', '15000', 500, 'Bailey Road, Dhaka, Bangladesh', 'Officers Club Dhaka was established in 1967 on 4.5 acres (18,000 m2) land in a picturesque setting at Ramna, Bailey Road, Dhaka, Bangladesh.', '0123123123', '300000', 1001, 1000000, 0, '0'),
(1002, 'niloy', 'Zam Zam Convention Hall', '2000', 300, 'Dhaka Cantonment (Western Side of Naval Headquarters, Airport Road), Dhaka, Bangladesh', 'Welcome to Zam Zam Convention Hall, Mirpur - 1, Dhaka. Its a sister concern of X-group Chain Restaurant and it has started the journey from 27 July 2019.We provide quality foods and best possible customer services. Reception, Wedding & Engagement parties and corporate programs are organized here in professional manner. We have homely and well-secured environment to organize party & programs. It has largest convention halls with 7 different wings and able to accommodate huge number of functions. Huge parking area at basement and dedicated security team are there to look after. Our recent addition are: foodbitebd online which will enable you to order food online and introducing continental menu by a newly appointed long experienced Corporate Executive Chef to present it professionally. The Trade License number # 049672', '0123123124', '80000', 1002, 600000, 0, '0'),
(1003, 'niloy', 'Trust Milonayaton Convention Center', '1300', 400, 'Mirpur 11, Dhaka', 'Trust Milonayaton rent, price, details. ট্রাস্ট মিলনায়তন Cantonment, 545, Old Airport Road, Dhaka 1216. (Near Jahangir Gate, Mohakhali).Features, AC, Catering, CCTV, Cooking, Electric Generator, Parking', '0123123163', '120000', 1003, 800000, 0, '0'),
(1004, 'niloy', 'Bashundhora Convention Center', '15000', 1000, 'Bashundhora Dhaka', 'International Convention City Bashundhara (ICCB), the largest event venue in South Asia, is the grand place in own designed to gratify your needs. We aim to make any occasion truly memorable, whether it’s a corporate event or a personal celebration. A little away from the hustle and bustle of the city, our convention city is spread over a spacious area of 8.5 lac sq. ft. We have a capacity of accommodating more than 20,000 guests at a time. We offer a huge parking facility, end-to-end vigilance, four customized halls, well-groomed staffers and the country’s largest Expo Zone. ICCB is also enriched with a gamut of international standard amenities which make this place to opt for.', '0123123123', '400000', 1004, 1200000, 0, '0'),
(375056273, 'niloy', 'Royal Garden 2', '6900', 700, 'Dream Weaver is headquartered in Dhaka with a regional office in Chittagong and has an offshore operation in Singapore', 'Simple beautiful wedding venue', '012231231', '60000', 375056273, 0, 0, ''),
(593347922, 'niloy', 'Royal Garden 3', '6900', 700, 'House #21, Rd no 4, Katalgong, Chattogram', 'Simple beautiful wedding venue', '0123123123', '120000', 593347922, 0, 0, ''),
(749496941, 'niloy', 'Royal Garden', '1200', 700, 'House #21, Rd no 4, Katalgong, Chattogram', 'Simple beautiful wedding venue', '0198765432', '120000', 749496941, 0, 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_rent`
--
ALTER TABLE `car_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decorator`
--
ALTER TABLE `decorator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_team`
--
ALTER TABLE `food_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_cinema`
--
ALTER TABLE `photo_cinema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`venue_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
