-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2024 at 03:40 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `initial-d`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `track_id` int NOT NULL,
  `track_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `card_number` int NOT NULL,
  `exp` int NOT NULL,
  `cvv` int NOT NULL,
  `card_name` varchar(25) NOT NULL,
  `price` varchar(10) NOT NULL,
  `reg_id` int NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `track_id`, `track_name`, `date`, `status`, `card_number`, `exp`, `cvv`, `card_name`, `price`, `reg_id`) VALUES
(12, 37, 'Madras Motors Race Track, Chennai', '2024-10-10', 'Paid', 23343444, 3434, 343, 'NAME', '$5000', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

DROP TABLE IF EXISTS `tracks`;
CREATE TABLE IF NOT EXISTS `tracks` (
  `track_id` int NOT NULL AUTO_INCREMENT,
  `vendor_id` int NOT NULL,
  `image` varchar(400) NOT NULL,
  `track_name` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `organizer` varchar(100) NOT NULL,
  `noise_level` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `location` longtext NOT NULL,
  `track_length` varchar(10) NOT NULL,
  `track_width` varchar(10) NOT NULL,
  `total_area` varchar(10) NOT NULL,
  `vehicle_capacity` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lap_timing` varchar(10) NOT NULL,
  `speed_sustainability` varchar(10) NOT NULL,
  `max_grade` varchar(10) NOT NULL,
  `total_race` varchar(10) NOT NULL,
  `total_turn` varchar(10) NOT NULL,
  `bprint` varchar(400) NOT NULL,
  PRIMARY KEY (`track_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`track_id`, `vendor_id`, `image`, `track_name`, `event`, `date`, `vehicle_type`, `category`, `organizer`, `noise_level`, `price`, `location`, `track_length`, `track_width`, `total_area`, `vehicle_capacity`, `lap_timing`, `speed_sustainability`, `max_grade`, `total_race`, `total_turn`, `bprint`) VALUES
(37, 23, 'backiee-278386-landscape.jpg', 'Madras Motors Race Track, Chennai', 'Goa Motorsport Racing', '2024-10-10', 'Street Legal Car', 'Touring car racing', 'EA Sportz', '65.9bB', '$5000', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15430840.085431242!2d65.69748356703982!3d19.22597349730244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a528cc02c6b4795%3A0x59a35ca6e0095fb5!2sMadras%20International%20Circuit!5e0!3m2!1sen!2sin!4v1728120700416!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '9.50km', '6-13mts', '955 Acres', '200', '8min.25sec', '170kmph', '48.deg', '06.nos', '22', 't2.png'),
(36, 17, 'cardbox2.jpg', 'track3', 'demo5', '2024-10-01', 'Street Legal Car', 'Touring car racing', 'spellbovd', '47.9bB', '$5000', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.4591278851226!2d76.26638177451!3d10.143284170553912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b081a7de3c840b9%3A0xd50a6450e17f506e!2sSNGIST%20ARTS%20AND%20SCIENCE%20College%20Manakkapady!5e0!3m2!1sen!2sin!4v1728070501718!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '9.50km', '6-13mts', '955 Acres', '278', '8min.25sec', '150kmph', '48.deg', '06.nos', '22', 't2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE IF NOT EXISTS `user_login` (
  `login_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `vendor_id` int NOT NULL,
  `reg_id` int NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`login_id`, `username`, `password`, `status`, `type`, `vendor_id`, `reg_id`) VALUES
(3, 'alwinea69@gmail.com', '5089', 'Approved', 'admin', 0, 2),
(50, 'max@gmail.com', '123', 'Approved', 'vendor', 23, 0),
(49, 'abi@gmail.com', '123', 'Approved', 'vendor', 22, 0),
(28, 'maxpa@gmail.com', '123', 'Approved', 'vendor', 17, 0),
(48, 'jasmi9567@gmail.com', '9567', 'Approved', 'user', 0, 28),
(46, 'josephea481@gmail.com', '123', 'Approved', 'vendor', 21, 0),
(42, 'maxwin@gmail.com', '123', 'Approved', 'vendor', 20, 0),
(45, 'kv@gmail.com', '123', 'Approved', 'user', 0, 26);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `reg_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `image` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `licens` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `ph` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `instagram` varchar(300) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `x` varchar(300) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`reg_id`, `first_name`, `image`, `last_name`, `dob`, `licens`, `gender`, `ph`, `email`, `password`, `instagram`, `facebook`, `x`) VALUES
(28, 'jasmi', 'jasmi .jpg', 'joy', '2004-10-19', '125478', 'female', '9567459687', 'jasmi9567@gmail.com', '9567', '', '', ''),
(26, 'akash', 'herobugatti.jpg', 'kv', '2024-10-07', 'r45454 998', 'male', '06238559780', 'kv@gmail.com', '123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_registration`
--

DROP TABLE IF EXISTS `vendor_registration`;
CREATE TABLE IF NOT EXISTS `vendor_registration` (
  `vendor_id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(400) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `about` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `x` varchar(200) NOT NULL,
  `company_licens` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vendor_registration`
--

INSERT INTO `vendor_registration` (`vendor_id`, `image`, `name`, `email`, `phone`, `address`, `country`, `company_name`, `about`, `password`, `instagram`, `facebook`, `linkedin`, `x`, `company_licens`) VALUES
(17, 'carousel-car.jpg', 'alwin joseph ea', 'maxpa@gmail.com', '06238559780', 'Vallarpadam Panambukad', 'India', 'themaxpa', ' No 1 racetrack organizer', '123', 'https://www.instagram.com/themaxpa/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D', 'https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F', 'https://www.linkedin.com', 'themaxpa', 'vxgfdgfds'),
(19, '', 'akash', 'kv@gmail.com', '1234567890', 'Vallarpadam Panambukad', 'India', 'kv speedway', 'india No 1 racetrack organizer', '123', '', '', '', '', 'gdfggdfsgfgfdhfh'),
(20, 'user (1).png', 'maxwin', 'maxwin@gmail.com', '12345678', 'NADUVIKKUNATH HOUSE,PANAMBUKAD, VALLARPADAM P.O', 'India', 'maxwin speedway', 'we provide best trackday experience', '123', '', '', '', '', '345 5654 56'),
(21, 'herobugatti.jpg', 'joseph', 'josephea481@gmail.com', '06238559780', 'Vallarpadam Panambukad', 'India', 'themaxpa', 'india No 1 racetrack organizer', '123', '', '', '', '', ''),
(22, 'Cardbox-3.jpg', 'Abishek', 'abi@gmail.com', '536475688', 'dggygyhh h', 'india', 'tata  motors', 'best organizer ever!', '123', '', '', '', '', '3456789900'),
(23, '', 'maxwin', 'max@gmail.com', '06238559780', 'Vallarpadam Panambukad', 'India', 'maxwin ', 'india No 1 racetrack organizer', '123', '', '', '', '', '3433543');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
