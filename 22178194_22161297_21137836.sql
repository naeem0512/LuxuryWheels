-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2024 at 02:43 PM
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
-- Database: `22178194_22161297_21137836`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `updationDate`) VALUES
(1, 'admin', 'admin', '2017-06-18 12:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Bentley', '2023-11-13 21:49:01', '2023-11-15 20:30:38'),
(2, 'Ferrari', '2023-11-13 21:50:50', NULL),
(3, 'Lamborghini', '2023-11-13 21:51:10', NULL),
(4, 'McLaren', '2023-11-13 21:51:50', NULL),
(5, 'Porsche', '2023-11-13 21:52:16', NULL),
(6, 'Mercedes-Benz', '2023-11-13 21:52:56', NULL),
(7, 'Rolls ROyce', '2023-11-13 21:53:06', NULL),
(8, 'Land Rover', '2023-11-13 21:53:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactusinfo`
--

CREATE TABLE `contactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `ContactNo` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contactusinfo`
--

INSERT INTO `contactusinfo` (`id`, `Address`, `Email`, `ContactNo`) VALUES
(1, 'Address: 15 Bartholomew Row, Birmingham, B5 5JU', 'Emailluxurywheels@mail.bcu.ac.uk', 'Phone: 01213315000');

-- --------------------------------------------------------

--
-- Table structure for table `contactusquery`
--

CREATE TABLE `contactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contactusquery`
--

INSERT INTO `contactusquery` (`id`, `name`, `Email`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Mohammed Khan', 'Mohammed.Khan@mail.bcu.ac.uk', '21474832333', 'Dear Luxury Wheels Team,\r\n\r\nI hope this message finds you well. I am writing to inquire about your exquisite collection of luxury wheels and accessories. As an enthusiast of high-end automotive customization, I am keen to explore the options available through your website.\r\n\r\nI am particularly interested in the following:\r\n\r\n1. Wheel Designs: Could you provide information on the latest wheel designs in your inventory, including specifications such as size, finish, and compatibility with various luxury car models?\r\n\r\n2. Pricing: I would like to receive pricing details for the luxury wheels and any special offers or promotions currently available.\r\n\r\n3. Customization: Do you offer customization options for the wheels, including finishes, colors, and engraving? If so, I\'d like to know more about the customization process.\r\n\r\nI am truly excited to explore the possibilities of enhancing my luxury vehicle with your products. Your expertise in the field is highly regarded, and I am eager to receive your guidance and recommendations.\r\n\r\nThank you for your time and assistance.\r\n\r\nBest regards,\r\n\r\nMohammed\r\n', '2017-06-18 10:03:07', 1),
(2, 'Dada', 'Daol.@aol.com', '344212423', 'Dear Luxury Wheels Team,\r\n\r\nI hope this message finds you well. I am reaching out to express my interest in your exceptional collection of luxury wheels and accessories. As a discerning enthusiast of fine automobiles, I am keen to explore the options available through your website.\r\n\r\nI am particularly interested in the following:\r\n\r\n1. Wheel Catalog: Could you please provide me with access to your comprehensive wheel catalog or send me a digital brochure showcasing your latest and most exquisite wheel designs?\r\n\r\n2. Design and Customization:D I\'m looking for wheels that not only exude elegance but can also be customized to match the unique character of my vehicle. Could you share details about customization options, including finishes, colors, and any bespoke services available?\r\n\r\n3. Pricing and Promotions: I\'d appreciate information on the pricing of your luxury wheels and any ongoing promotions or exclusive offers that might be available.\r\n\r\n4. Compatibility and Recommendations: My vehicle is a [Toyota Prius]. Could you confirm the compatibility of your wheels with my car and provide any specific recommendations based on my vehicle\'s specifications?\r\n\r\n5. Installation Services: Do you have a network of recommended professional installers who are experienced with your products? I want to ensure a seamless and expert installation.\r\n\r\n6. Quality and Warranty: Please provide insights into the quality, craftsmanship, and durability of your wheels. Additionally, I am interested in understanding the terms of any warranty offered with your products.\r\n\r\nI am genuinely excited about the opportunity to enhance my vehicle with your luxury wheel collection. Your reputation in this field is awesome.\r\n\r\nThank You.\r\n\r\nRegards,\r\nDafe Magege\r\n', '2023-10-27 13:40:04', 1),
(8, 'Mohammed Ahmed', 'Mohammed.Ahmed@mail.bcu.ac.uk', '628291913', 'Subject: Request for Information on Luxury Wheel Options\r\n\r\nDear Luxury Wheels Team,\r\n\r\nI hope this message finds you in good health. I am writing to seek information about the range of luxury wheel options available on your website. As a car enthusiast with a passion for fine automobiles, I am eager to explore the premium wheel choices you offer.\r\n\r\nI am particularly interested in the following:\r\n\r\n1. Wheel Catalog: Could you kindly provide me with access to your online wheel catalog or send me a digital brochure showcasing your luxurious wheel designs? I would love to get a glimpse of your latest offerings.\r\n\r\n2. Compatibility: I own a [Car Make and Model], and I\'d like to know if your wheels are compatible with my vehicle. Please provide details on wheel sizes, bolt patterns, and any specific recommendations for my car.\r\n\r\n3. Pricing: It would be greatly appreciated if you could share the pricing information for the luxury wheels in your collection. Are there any package deals or discounts available?\r\n\r\n4. Customization: Do you offer customization services for your wheels? I\'m interested in unique finishes, colors, and any personalized options that might be available.\r\n\r\n5. Installation: Can you recommend experienced installers in my area who are familiar with your products? I would like to ensure a professional and seamless installation.\r\n\r\n6. Warranty and Quality: I am keen to understand the warranty terms for your wheels and your commitment to product quality. Any information on the durability and craftsmanship would be valuable.\r\n\r\n7. Customer Testimonials: If you have any customer reviews or testimonials regarding your wheels, I would love to read about others\' experiences with your products.\r\n\r\n8. Contact Information: Please provide me with the best way to reach your customer support team for further inquiries or to discuss my specific requirements.\r\n\r\nI am excited about the prospect of enhancing my vehicle with your luxury wheel offerings and look forward to your guidance and assistance in making an informed decision.\r\n\r\nThank you for your time and consideration. \r\n\r\nWarm regards,\r\n\r\nMohammed Ahmed\r\n', '2023-10-29 08:36:34', 1),
(9, 'd', 'd@aol.com', '12334', 'etsti', '2024-01-08 00:39:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `detail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '																																								Terms and Conditions:\r\n\r\nBy renting a vehicle from Luxury Wheels, you agree to the following terms and conditions:\r\n\r\n1. Rental Agreement: The rental is subject to the terms outlined in the Rental Agreement. You must review and accept this agreement before taking possession of the vehicle.\r\n\r\n2. Payment: You agree to pay all rental charges, fees, and any additional charges incurred during the rental period.\r\n\r\n3. Vehicle Use: The rented vehicle should only be used in accordance with local traffic laws and regulations. It is not to be used for racing or other illegal activities.\r\n\r\n4. Insurance: You must maintain liability insurance that covers the rental vehicle.\r\n\r\n5. Return: You are responsible for returning the vehicle in the same condition as when rented, subject to standard wear and tear.\r\n\r\n6. Age Requirement: Renters must be at least 25 years old.\r\n\r\n7. Reservation Modification: You can modify or cancel reservations according to our reservation policy.'),
(2, 'privacy', '																				Privacy Policy:\r\n\r\nAt Luxury Wheels, we are committed to protecting your privacy and the security of your personal information. This Privacy Policy outlines our practices regarding the collection, use, and disclosure of your data.\r\n\r\nWhat Information We Collect:\r\nWe collect information provided by you during the reservation process, including your name, contact details, driver\'s license, and payment information. We also use cookies and similar technologies to collect data on website usage.\r\n\r\nHow We Use Your Information:\r\nWe use your data for the purpose of processing reservations, improving our services, and communicating with you. We do not sell or share your personal information with third parties for marketing purposes.\r\n\r\nSecurity Measures:\r\nWe employ industry-standard security measures to protect your data from unauthorized access, disclosure, alteration, and destruction.'),
(3, 'aboutus', 'About Us at Luxury Wheels: \r\n\r\nWe specialize in delivering the pinnacle of automotive elegance and performance. Our mission is to provide you with access to the most prestigious and exotic vehicles on the planet, allowing you to experience the thrill of driving luxury and sports cars that exemplify class, style, and power.\r\n\r\nWho We Are:\r\nLuxury Wheels is a team of automotive enthusiasts who share a deep passion for exceptional vehicles. We understand the unique bond that exists between car aficionados and their cherished machines. With this shared enthusiasm, we have curated a remarkable collection of luxury and exotic cars for your enjoyment.\r\n\r\nWhat We Offer:\r\nOur fleet includes a handpicked selection of high-end vehicles from renowned manufacturers. Whether you seek the allure of a sleek sports car, the sophistication of a luxury sedan, or the commanding presence of an SUV, Luxury Wheels has the perfect vehicle to make your driving experience extraordinary.\r\n\r\nWhy Choose Luxury Wheels:\r\n\r\nExclusivity: We offer a carefully curated fleet featuring the most prestigious automotive brands.\r\nQuality: Our vehicles are meticulously maintained to ensure optimal performance and safety.\r\nConvenience: We provide seamless booking and delivery services to make your experience as smooth as possible.\r\nJoin us on a journey of automotive luxury and adventure. Experience the thrill, sophistication, and innovation of the world\'s most iconic vehicles. Your dream drive awaits with Luxury Wheels.'),
(4, 'faqs', 'Frequently Asked Questions?\r\n\r\n1. How can I rent a luxury car from Luxury Wheels?\r\nBooking a luxury car with Luxury Wheels is easy. Visit our website, select the vehicle you desire, specify your rental dates, and complete the booking process. You can also reach out to our customer support team for assistance.\r\n\r\n2. What are the rental requirements?\r\nTo rent a luxury car, you need to be at least 25 years old, have a valid driver\'s license, and provide proof of insurance. Additional requirements may vary based on the specific vehicle.\r\n\r\n3. Can I choose a specific model and color for my rental?\r\nYes, you can select your preferred model and color when making a reservation. We strive to accommodate your preferences whenever possible.\r\n\r\n4. What is included in the rental rate?\r\nThe rental rate typically includes standard mileage and insurance coverage. Additional details are provided during the booking process.\r\n\r\n5. How do I return the vehicle after my rental period?\r\nYou can return the vehicle to our designated location or arrange for our team to pick it up. Additional fees may apply for pick-up services.');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `Email`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(19, 'dafe@aol.com', 8, '12/12/32', '12/12/23', 'Yes', 0, '2023-11-16 13:35:27'),
(23, 'bcu@bcu.com', 6, '1/1/12', '1/1/23', 'HHH', 0, '2023-11-16 13:57:48'),
(28, 'bcu@bcu.com', 1, '12/12/13', '12/12/13', 'Holla. ', 0, '2024-01-07 23:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `Email`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(5, 'Dada', 'dafe@aol.com', 'e10adc3949ba59abbe56e057f20f883e', '7272737', '', '', '', '', '2023-10-27 03:06:03', '2023-11-12 19:18:01'),
(6, 'Dafe', 'd.magege@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '7879159591', NULL, NULL, NULL, NULL, '2023-11-12 18:41:22', NULL),
(7, 'Up', 'bcu@bcu.com', 'e10adc3949ba59abbe56e057f20f883e', '2763277828', NULL, NULL, NULL, NULL, '2023-11-16 13:57:09', NULL),
(8, 'Magege', NULL, 'e10adc3949ba59abbe56e057f20f883e', '12345', NULL, NULL, NULL, NULL, '2023-12-06 17:13:04', NULL),
(9, 'naeem', 'mohammed.ahmed55@mail.bcu.ac.uk', '82a59afa8a8c8ac5d117e7478e68f912', '1031301301', NULL, NULL, NULL, NULL, '2024-01-23 13:13:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `BrandName` varchar(150) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `vehicle_id` int(11) DEFAULT NULL,
  `availability_status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `VehiclesTitle`, `BrandName`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`, `vehicle_id`, `availability_status`) VALUES
(1, 'Roma', '2', 'The Roma is a quintessential grand-touring machine and Ferrari\'s entry-level model. But don\'t let the entry-level label fool you: This Ferrari\'s combination of performance, comfort and style is fully worthy of the brand\'s legendary heritage. It will rack up nearly endless touring miles with ease and grace and you\'ll attract looks of envy as you drive by. The Roma is a compelling alternative to the more expensive Portofino M and the brand\'s top performance models.', 55, 'Gas', 2023, 4, 'ferrari_roma_01.jpg', 'ferrari_roma_05.jpg', 'ferrari_roma_04.jpg', 'ferrari_roma_02.jpg', '', 0, 0, 0, 1, 1, 1, 1, 0, 1, 0, 0, 0, '2017-06-19 16:18:43', '2023-12-12 17:45:20', NULL, NULL),
(2, 'Aventador', '3', 'In production for over a decade, the Lamborghini Aventador has reached the end of its long and winding road. To celebrate the model\'s success, the 2022 Aventador comes only in new LP 780-4 Ultimae specification, its sonorous 6.5-liter V12 engine now equipped with titanium intake valves to make the Ultimae the most powerful example of the supercar ever made.\r\n', 59, 'Gas', 2022, 2, '2022_lamborghini_aventador_convertible_ultimae-roadster_fq_oem_5_1280x855.jpg', '2022_lamborghini_aventador_convertible_ultimae-roadster_rq_oem_1_1280x855.avif', '2022_lamborghini_aventador_convertible_ultimae-roadster_i_oem_2_1280x855.webp', '2022_lamborghini_aventador_convertible_ultimae-roadster_fq_oem_6_1280x855.avif', NULL, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, '2020-10-31 09:34:38', '2023-12-12 17:46:02', NULL, NULL),
(3, 'Huracan Convertible', '3', 'It\'s hard to believe that Lamborghini\'s entry-level (and we use that term loosely) sports car, the Huracan, has been around for nearly a decade. Despite nearing 10 years old, the car still delivers true supercar performance and feels fresh with Lamborghini providing a steady stream of updates and new variants.\r\nModel Year, 2023\r\n', 61, 'Gas', 2023, 2, '2023_lamborghini_huracan_convertible_evo-spyder_fq_oem_1_1280x855.jpg', '2023_lamborghini_huracan_convertible_evo-spyder_rq_oem_1_1280x855.jpg', '2023_lamborghini_huracan_convertible_evo-rwd-spyder_i_oem_1_1280x855.avif', '2023_lamborghini_huracan_convertible_evo-spyder_rq_oem_2_1280x855.avif', NULL, 0, 0, 0, 1, 1, 1, 1, 0, 1, 1, 0, 0, '2020-10-31 10:01:23', '2023-12-12 17:46:02', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactusinfo`
--
ALTER TABLE `contactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactusquery`
--
ALTER TABLE `contactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactusinfo`
--
ALTER TABLE `contactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactusquery`
--
ALTER TABLE `contactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
