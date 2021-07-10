-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 06:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `card`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(50) NOT NULL,
  `phone1` varchar(200) NOT NULL,
  `phone2` varchar(200) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `income` varchar(200) NOT NULL,
  `street` varchar(200) NOT NULL,
  `apartment` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `postcode` int(100) NOT NULL,
  `card_typeid` int(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'pending',
  `discount` int(11) NOT NULL DEFAULT '0',
  `profileId` int(200) NOT NULL,
  `makeStatus` varchar(80) NOT NULL DEFAULT 'notmake',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cardMakeTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `fname`, `lname`, `gmail`, `cnic`, `gender`, `dob`, `age`, `phone1`, `phone2`, `profession`, `income`, `street`, `apartment`, `city`, `country`, `postcode`, `card_typeid`, `status`, `discount`, `profileId`, `makeStatus`, `date`, `cardMakeTime`) VALUES
(330335, 'sabahat', 'saeed', 'sabahatsaeed31@gmail.com', '46456-1265416-5', 'male', '0054-02-05', 49, '(4564) 541-6542', '(4564) 165-3415', 'hgik vhkbj', '125412045', 'srdf4', 'f65', 'edmonton', 'Canada', 4869, 25, 'accept', 8, 1, 'make', '2019-02-24 22:57:29', '2019-04-06 20:36:26'),
(330336, 'wajahat', 'saeed', 'wajahatsaeed30@gmail.com', '46513-2653415-6', 'male', '1998-07-06', 20, '(0685) 416-5324', '(1502) 063-5412', 'engineer', '1500000000', 'srdf4', 'f65', 'edmonton', 'Canada', 4869, 27, 'accept', 0, 2, 'make', '2019-02-24 22:57:29', '2019-03-28 00:33:10'),
(330337, 'aet', 'aeg', 'faisalsaeed30@gmail.com', '33303-4545454545-9', 'male', '1997-02-07', 22, '(0345) 687-4563', '(0345) 687-4564', 'engineer', '180000000', 'srdf4', 'f65', 'edmonton', 'Canada', 4869, 28, 'pending', 0, 3, 'notmake', '2019-02-24 22:57:29', '2019-04-06 20:37:26'),
(330338, 'Rafaqat', 'saeed', 'rafaqatsaeed31@gmail.com', '33303-4568574-1', 'male', '1999-08-21', 19, '(0305) 346-5431', '(0306) 564-1685', 'Mechanical engg.', '154670000', 'street 3/2', 'house # 3o3', 'edmonton', 'Canada', 4869, 28, 'block', 0, 27, 'notmake', '2019-03-20 06:11:12', '2019-04-06 20:37:19'),
(330343, 'Saira', 'Saleem', 'sairasaleem31@gmail.com', '33003-0258465-2', 'female', '1997-02-07', 22, '(1310) 635-8632', '(1063) 568-3210', 'optometrist', '49006484', 'streett#4', 'g3/4', 'edmonton', 'Canada', 4869, 26, 'accept', 0, 36, 'notmake', '2019-03-26 06:36:55', '2019-03-26 06:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `card_shop`
--

CREATE TABLE `card_shop` (
  `id` int(200) NOT NULL,
  `shopname` varchar(200) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_shop`
--

INSERT INTO `card_shop` (`id`, `shopname`, `gmail`, `phone`, `address`, `status`, `date`) VALUES
(3, 'Sabahat Printing Press', 'sabahatsaeed31@gmail.com', '(0345) 467-1041', 'Adnan Printing Shop, near umt, johar town, lahore, Pakistan', 'active', '2019-02-26 05:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `card_type`
--

CREATE TABLE `card_type` (
  `id` int(100) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_type`
--

INSERT INTO `card_type` (`id`, `type`) VALUES
(27, 'business'),
(25, 'economy'),
(28, 'first'),
(26, 'premium');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `shopid` int(200) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `shopid`, `status`) VALUES
(2, 'heel', 'short, slender heel, usually from 3.5 centimeters (1.5 inches) to 4.75 centimeters (1.75 inches) high, with a slight curve setting the heel in from the back edge of the shoe.', 4, 'active'),
(4, 'Chappal', 'hand-crafted leather slippers that are locally tanned using vegetable dyes. Kolhapuri Chappals or Kolhapuri s as they are commonly referred to are a style of open-toed, T-strap sandal ', 4, 'active'),
(5, 'Pizza', '(Italian: [Ëˆpittsa], Neapolitan: [ËˆpittsÉ™]) is a savory dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and various other ingredients (anchovies, olives, meat, etc.) baked at a high temperature, traditionally in a w', 5, 'active'),
(6, 'Burger', ' is a sandwich consisting of one or more cooked patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The patty may be pan fried, grilled, or flame broiled. ... A hamburger topped with cheese is called a cheeseburger', 5, 'active'),
(7, 'Microdermabrasion ', 'Microdermabrasion uses tiny exfoliating crystals that are sprayed on the skin. ... Dermabrasion was developed to improve acne scars, pox marks, and scars from accidents or disease.', 8, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `discount` int(60) NOT NULL,
  `productid` int(60) NOT NULL,
  `card_typeid` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `discount`, `productid`, `card_typeid`) VALUES
(32, 1, 10, 25),
(33, 3, 10, 26),
(34, 5, 10, 27),
(35, 8, 10, 28),
(40, 0, 12, 25),
(41, 2, 12, 26),
(42, 3, 12, 27),
(43, 8, 12, 28),
(44, 0, 13, 25),
(45, 2, 13, 26),
(46, 4, 13, 27),
(47, 8, 13, 28),
(48, 6, 14, 25),
(49, 9, 14, 26),
(50, 11, 14, 27),
(51, 15, 14, 28),
(52, 10, 15, 25),
(53, 12, 15, 26),
(54, 13, 15, 27),
(55, 15, 15, 28),
(56, 0, 16, 25),
(57, 2, 16, 26),
(58, 3, 16, 27),
(59, 8, 16, 28),
(60, 5, 17, 25),
(61, 6, 17, 26),
(62, 7, 17, 27),
(63, 9, 17, 28),
(64, 2, 18, 25),
(65, 3, 18, 26),
(66, 7, 18, 27),
(67, 8, 18, 28),
(68, 10, 19, 25),
(69, 13, 19, 26),
(70, 17, 19, 27),
(71, 20, 19, 28),
(72, 2, 20, 25),
(73, 3, 20, 26),
(74, 6, 20, 27),
(75, 7, 20, 28);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `message` varchar(1500) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'recieve',
  `readStatus` varchar(50) NOT NULL DEFAULT 'unread',
  `starredStatus` varchar(50) NOT NULL DEFAULT 'unstarred',
  `favouriteStatus` varchar(50) NOT NULL DEFAULT 'unfavourite',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fname`, `lname`, `gmail`, `message`, `status`, `readStatus`, `starredStatus`, `favouriteStatus`, `date`) VALUES
(1, 'sabahat', 'saeed', 'sabahatsaeed31@gmail.com', 'hey i am sabahat saeed, i want to make card. please guide me, thanks...', 'recieve', 'unread', 'starred', 'favourite', '2019-03-28 11:15:55'),
(2, 'wajahat', 'saeed', 'wajahatsaeed30@gmail.com', 'hey give me info about cards. i not understand what type of card is it??', 'recieve', 'unread', 'starred', 'favourite', '2019-03-28 11:23:11'),
(3, 'saira', 'saleem', 'sairasaleem30@gmail.com', 'i want to know that is card valid in Columbia, CA  or only alberta state....', 'recieve', 'unread', 'starred', 'favourite', '2019-03-28 11:25:00'),
(4, 'saira', 'saleem', 'sairasaleem30@gmail.com', 'must reply, i want to make card, i want to know is card valid in Colombia, CA or nor.... ', 'recieve', 'unread', 'starred', 'favourite', '2019-03-28 11:26:38'),
(5, 'ali', 'akbar', 'aliakbar@gmail.com', 'hey, i am ali, i want to make card...', 'recieve', 'unread', 'starred', 'unfavourite', '2019-03-30 10:30:50'),
(6, 'ali', 'akbar', 'aliakbar@gmail.com', 'hey, i am ali, i want to make card...', 'recieve', 'unread', 'starred', 'favourite', '2019-03-30 10:32:06'),
(7, 'husnain', 'malik', 'husnainmalik123@gmail.com', 'i want to make card....', 'recieve', 'unread', 'unstarred', 'unfavourite', '2019-03-30 10:33:02'),
(8, 'sheeda', 'munshi', 'sheedamunshi126@gmail.com', 'paji ma bi card bnona maan. manu tareeqa dassooo....', 'recieve', 'unread', 'unstarred', 'unfavourite', '2019-03-30 10:35:07'),
(9, 'harron', 'bhati', 'harronbati897@gmail.com', 'sir tell me discount procedure thanks', 'recieve', 'unread', 'starred', 'unfavourite', '2019-03-30 10:36:11'),
(10, 'irza', 'waheed', 'irzawaheed21@gmail.com', 'let me give information. i want to make discount card and tell me too that is it valid in toba, thanks', 'recieve', 'unread', 'starred', 'favourite', '2019-03-30 10:37:30'),
(11, 'urooj', 'umar', 'uroojumar2409@gmail.com', 'give me discount detail', 'recieve', 'unread', 'starred', 'unfavourite', '2019-03-30 10:38:16'),
(12, 'ali', 'khan', 'alikhan@gmail.com', 'reply me what the problem.. why you block mee', 'recieve', 'unread', 'starred', 'favourite', '2019-03-30 10:44:10'),
(13, 'azka', 'Waheed', 'azkawaheed31@gmail.com', 'i want to make card. share with me package cards means that how much money pay for make card. or there have free...', 'recieve', 'read', 'unstarred', 'favourite', '2019-04-02 07:06:16'),
(14, 'sabahat', 'saeed', 'sabahatsaeed31@gmail.com', 'cftytuvj gcftyg', 'recieve', 'unread', 'unstarred', 'unfavourite', '2019-04-06 15:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `categoryid` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `categoryid`) VALUES
(10, 'high heels', 3525.96, 2),
(12, 'peshawari chapal', 896.75, 4),
(13, 'chicken burger', 420.16, 6),
(14, 'fajita (small pizza)', 790, 5),
(15, 'bata stylish heel', 1530, 2),
(16, 'stara heel', 2025, 2),
(17, 'majestic heel', 999.16, 2),
(18, 'service heel', 2530, 2),
(19, 'adidas heel', 5999.25, 2),
(20, 'face microdemabrasion', 9000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `userroll` int(50) NOT NULL DEFAULT '1',
  `shopname` varchar(200) DEFAULT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `forgot_key` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `userroll`, `shopname`, `fname`, `lname`, `gmail`, `password`, `phone`, `address`, `image`, `status`, `date`, `forgot_key`) VALUES
(1, 'sabahat71', 1, NULL, 'Sabahat', 'Saeed', 'sabahatsaeed31@gmail.com', 'Sabahat12', '(0345) 467-1041', 'edmonton, alberta,CA', 'upload/dp.jpg', 'active', '2019-02-24 22:59:10', '67ec2730b695861375c4704bedc6adbb'),
(2, 'wajahat', 1, NULL, 'wajahat', 'saeed', 'wajahatsaeed30@gmail.com', 'Wajahat321', '03454671041', 'johar town', 'upload/pp.jpg', 'active', '2019-02-24 22:59:10', '6507616f5569bf2c2c70e01c78276a72'),
(3, 'faisal711', 1, NULL, 'Faisal', 'saeed', 'faisal31@gmail.com', 'Faisal12', '(0345) 646-128', 'faisalabad', 'upload/download.jpg', 'active', '2019-02-24 22:59:10', ''),
(4, 'Bata12', 2, 'bata mall road branch', '', '', 'sabahatpycix12@gmail.com', 'Bata12', '(1683) 542-1065', 'bata plaza, mall road, Lahore, pakistan', '', 'active', '2019-02-27 06:18:30', ''),
(5, 'FriChiks12', 2, 'FriChiks narowal Branch', '', '', 'sajidnaeem056@gmail.com', 'Sajidnaeem056', '(0321) 745-0207', 'narowal, punjab, pakistan', '', 'active', '2019-02-27 06:47:49', ''),
(6, 'Admin11', 3, NULL, 'Sabahat', 'Saeed', 'sabahatsaeedpycix@gmail.com', 'Admin11', '03454671041', 'chak 330', '', 'active', '2019-02-27 22:30:58', ''),
(8, 'hina12', 2, 'Hina beauty paler ', '', '', 'hinabeautypaler12@gmail.com', 'Hina12', '(0165) 478-4510', 'pf road, rafiqi chowk, Shorcot cantt, pakistan', '', 'active', '2019-03-12 22:34:59', ''),
(9, 'Irz12', 2, 'Irz Transport company', '', '', 'irztransport@gmail.com', 'Irztransport12', '(0345) 488-6541', 'beyond dil-e-punjab restaurant, edmonton, alberta, canada', '', 'unactive', '2019-03-12 22:39:33', ''),
(10, 'naeem90', 2, 'Naeem Fruit farming', '', '', 'naeemfruitfarming@gmail.com', 'Naeem12', '(0346) 845-1808', 'chak 330 g.b stop, t.t.singh, pakistan', '', 'active', '2019-03-12 22:41:56', ''),
(11, 'ali13', 2, 'ali shoes', '', '', 'alishoes12@gmail.com', 'Ali123', '(0341) 654-9874', 'pf road, rafiqi chowk, Shorcot cantt, pakistan', '', 'active', '2019-03-12 22:43:11', ''),
(12, 'asad12', 2, 'Asad pan shop', '', '', 'asad12@gmail.com', 'Asad12', '(3416) 985-3200', 'pf road, rafiqi chowk, Shorcot cantt, pakistan', '', 'unactive', '2019-03-12 22:44:36', ''),
(13, 'raheem123', 2, 'raheem restaurant shorkot cantt', '', '', 'raheem123@gmail.com', 'Raheem123', '(0345) 646-8475', 'beyond dil-e-punjab restaurant, edmonton, alberta, canada', '', 'active', '2019-03-12 22:52:06', ''),
(14, 'azam12', 2, 'Azam barber shop', '', '', 'azambarber12@gmail.com', 'Azam123', '(0379) 867-8451', 'beyond tasty point restaurant, pirmahal, pakistan ', '', 'active', '2019-03-12 22:53:51', ''),
(15, 'ashraf12', 2, 'ashraf fries & fish', '', '', 'ashraffries123@gmail.com', 'Ashraf123', '(0345) 564-8451', 'beyond dil-e-punjab restaurant, edmonton, alberta, canada', '', 'active', '2019-03-12 22:55:59', ''),
(16, 'saba12', 2, 'Saba beauty paler', '', '', 'sababeautypaler@gmail.com', 'Saba12', '(0346) 748-4512', 'beyond dil-e-punjab restaurant, edmonton, alberta, canada', '', 'active', '2019-03-12 22:57:36', ''),
(17, 'cokeagency12', 2, 'coke agency pirmahal', '', '', 'cokeagencypirmahal@gmail.com', 'Coke12', '(0346) 358-5468', 'beyond dil-e-punjab restaurant, edmonton, alberta, canada', '', 'active', '2019-03-13 00:00:39', ''),
(18, 'sardar123', 2, 'sardar marriage hall', '', '', 'sardarmarriagehall@gmail.com', 'Sardar123', '(0346) 574-8451', 'beyond dil-e-punjab restaurant, edmonton, alberta, canada', '', 'active', '2019-03-13 00:02:48', ''),
(19, 'shine123', 2, 'shine coffee shop', '', '', 'shinecoffee123@gmail.com', 'Shine123', '(0345) 484-5125', 'beyond dil-e-punjab restaurant, edmonton, alberta, canada', '', 'active', '2019-03-13 00:03:49', ''),
(20, 'wdf123', 2, 'wdf ice bar', '', '', 'wdficebar@gmail.com', 'Wdf123', '(0345) 478-6541', 'beyond dil-e-punjab restaurant, edmonton, alberta, canada', '', 'active', '2019-03-13 00:04:52', ''),
(21, 'sofi123', 2, 'sofi store', '', '', 'sofistore123@gmail.com', 'Sofi123', '(4156) 455-5666', 'beyond dil-e-punjab restaurant, edmonton, alberta, canada', '', 'active', '2019-03-13 00:08:29', ''),
(22, 'zubair123', 2, 'zubair garments shorcot cantt', '', '', 'zubairgarments12@gmail.com', 'Zubair12', '(0345) 456-4589', 'rafiqi chowk, shorkot cantt, pakistan', '', 'active', '2019-03-13 00:15:09', ''),
(23, 'shabbir123', 2, 'shabbir taxi company', '', '', 'shabbirtaxicompany@gmail.com', 'Shabbir123', '(0341) 456-0080', 'shabbir taxi company, near railway station, shorkot cantt, pakistan', '', 'active', '2019-03-13 00:17:54', ''),
(24, 'sana_12', 2, 'sana beauty paler', '', '', 'sanabeautypaler12@gmail.com', 'Sana123', '(0415) 455-789', 'sana beauty paler, street 4, edmonton, canada', '', 'active', '2019-03-13 00:21:38', ''),
(25, 'imran123', 2, 'imran pizza hut', '', '', 'imranpizzahut@gmail.com', 'Imran123', '(0345) 789-7894', 'imran pizza hut, street 4, edmonton, canada', '', 'active', '2019-03-13 00:22:51', ''),
(26, 'salman123', 2, 'salman hospital', '', '', 'salmanhospital123@gmail.com', 'Salman123', '(0364) 458-6541', 'salman hospital, pirmahal, pakistan', '', 'active', '2019-03-13 00:24:43', ''),
(27, 'rafaqat71', 1, NULL, 'Rafaqat', 'Saeed', 'rafaqatsaeed30@gmail.com', 'Rafaqat12', '(0345) 468-845', 'toba tek singh', 'upload/download.jpg', 'unactive', '2019-03-14 00:53:59', ''),
(28, 'rafaqat711', 1, NULL, 'Rafaqat', 'Saeed', 'rafaqatsaeed71@gmail.com', 'Rafaqat71', '(0345) 468-745', 't.t.singh', 'upload/download.jpg', 'active', '2019-03-14 01:23:33', ''),
(36, 'saira30', 1, NULL, 'Saira', 'Saleem', 'sairasaleem30@gmail.com', 'Saira30', '(0317) 458-65218', 'edmonton, canada', 'upload/profile.PNG', 'active', '2019-03-26 06:34:18', ''),
(37, 'iramcloths1', 2, 'Iram Cloths', '', '', 'iramcloths1@gmail.com', 'Iramcloths1', '(0345) 648-4545', 'shorkotcantt, punjab, pakistan', '', 'active', '2019-04-03 23:59:52', ''),
(38, 'shabirpassengertransport1', 2, 'shabir passenger transport', '', '', 'shabirpassengertransport1@gmail.com', 'Shabirpassengertransport1', '(0345) 658-4865', 'shorkot cantt, punjab pakistan', '', 'active', '2019-04-04 00:01:50', ''),
(39, 'aqeelworkshop', 2, 'aqeel workshop', '', '', 'aqeelworkshop@gmail.com', 'Aqeelworkshop12', '(0345) 868-8965', 'shorkot cantt pakistan ', '', 'active', '2019-04-04 00:04:14', ''),
(40, 'imranspraycenter', 2, 'imran spray center', '', '', 'imranspraycenter@gmail.com', 'Imranspraycenter12', '(0364) 586-5312', '330 stop pirmahal road, toba tek singh, pakistan', '', 'active', '2019-04-04 00:07:42', ''),
(41, 'Shaguftaboteek3', 2, 'Shagufta Boteek', '', '', 'shaguftaboteek3@gmail.com', 'Shaguftaboteek3', '(0347) 846-5418', 'askari flat, lahore', '', 'active', '2019-04-04 00:09:53', ''),
(42, 'Juttshoes12', 2, 'Jutt Shoes', '', '', 'juttshoes12@gmail.com', 'Juttshoes12', '(0348) 651-2852', '330 stop, pirmahal shorkot cantt road, t.t.singh pakistan', '', 'active', '2019-04-04 00:21:23', ''),
(43, 'sabivuob', 2, ' jhknl', '', '', 'admin12@gmail.com', 'Sabahat321', '(7890) 890-890', 'hbijkl hijkl', '', 'active', '2019-05-03 21:34:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(200) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date`) VALUES
(47, '27.255.48.197', '2019-03-19 11:42:21'),
(48, '27.255.48.197', '2019-03-19 11:43:29'),
(49, '27.255.48.197', '2019-03-19 12:16:43'),
(50, '27.255.48.197', '2019-03-19 12:17:18'),
(51, '27.255.48.197', '2019-03-19 12:20:11'),
(52, '27.255.48.197', '2019-03-19 12:21:06'),
(53, '27.255.48.197', '2019-03-19 12:21:33'),
(54, '27.255.48.197', '2019-03-19 12:24:47'),
(55, '198.199.92.66', '2019-03-19 12:35:55'),
(56, '27.255.48.197', '2019-03-19 12:50:19'),
(57, '27.255.48.197', '2019-03-19 13:55:15'),
(58, '27.255.48.197', '2019-03-19 14:00:21'),
(59, '27.255.48.197', '2019-03-19 14:08:27'),
(60, '27.255.48.197', '2019-03-19 14:15:16'),
(61, '27.255.48.197', '2019-03-19 14:35:06'),
(62, '117.53.41.53', '2019-03-19 20:03:21'),
(63, '66.102.8.195', '2019-03-19 20:03:32'),
(64, '27.255.48.197', '2019-03-20 05:06:22'),
(65, '27.255.48.197', '2019-03-20 05:11:18'),
(66, '51.15.191.81', '2019-03-20 06:24:20'),
(67, '51.15.191.81', '2019-03-20 06:24:30'),
(68, '212.83.146.233', '2019-03-20 06:53:43'),
(69, '27.255.48.197', '2019-03-20 07:52:01'),
(70, '27.255.48.197', '2019-03-20 07:52:46'),
(71, '212.83.146.233', '2019-03-20 08:52:25'),
(72, '62.4.14.198', '2019-03-20 08:52:38'),
(73, '27.255.48.197', '2019-03-20 11:14:56'),
(74, '27.255.48.197', '2019-03-21 05:29:12'),
(75, '27.255.48.197', '2019-03-21 10:43:36'),
(76, '27.255.48.197', '2019-03-21 11:22:57'),
(77, '27.255.48.197', '2019-03-21 11:32:20'),
(78, '27.255.48.197', '2019-03-21 11:37:48'),
(79, '27.255.48.197', '2019-03-21 11:41:59'),
(80, '27.255.48.197', '2019-03-21 11:43:37'),
(81, '27.255.48.197', '2019-03-21 11:45:55'),
(82, '27.255.48.197', '2019-03-21 11:46:22'),
(83, '27.255.48.197', '2019-03-21 11:47:31'),
(84, '::1', '2019-03-22 05:04:52'),
(85, '::1', '2019-03-22 05:06:13'),
(86, '::1', '2019-03-22 06:17:04'),
(87, '::1', '2019-03-22 06:19:43'),
(88, '::1', '2019-03-22 06:20:11'),
(89, '::1', '2019-03-22 06:20:31'),
(90, '::1', '2019-03-22 06:20:34'),
(91, '::1', '2019-03-22 06:20:40'),
(92, '::1', '2019-03-22 06:20:50'),
(93, '::1', '2019-03-22 06:21:21'),
(94, '::1', '2019-03-22 06:25:49'),
(95, '::1', '2019-03-22 06:55:38'),
(96, '::1', '2019-03-22 07:02:29'),
(97, '::1', '2019-03-22 07:04:33'),
(98, '::1', '2019-03-22 07:16:08'),
(99, '::1', '2019-03-22 07:18:33'),
(100, '::1', '2019-03-22 07:19:33'),
(101, '::1', '2019-03-22 07:43:05'),
(102, '::1', '2019-03-22 10:26:34'),
(103, '::1', '2019-03-22 11:00:22'),
(104, '::1', '2019-03-22 11:02:05'),
(105, '::1', '2019-03-22 11:08:31'),
(106, '::1', '2019-03-22 11:09:32'),
(107, '::1', '2019-03-22 11:48:13'),
(108, '::1', '2019-03-22 13:12:37'),
(109, '::1', '2019-03-25 06:17:37'),
(110, '::1', '2019-03-25 06:25:48'),
(111, '::1', '2019-03-25 06:27:00'),
(112, '::1', '2019-03-25 06:28:22'),
(113, '::1', '2019-03-25 06:28:25'),
(114, '::1', '2019-03-25 06:49:10'),
(115, '::1', '2019-03-25 06:49:23'),
(116, '::1', '2019-03-25 06:50:06'),
(117, '::1', '2019-03-25 07:19:23'),
(118, '::1', '2019-03-25 07:19:49'),
(119, '::1', '2019-03-25 09:09:57'),
(120, '::1', '2019-03-25 10:39:59'),
(121, '::1', '2019-03-25 10:40:52'),
(122, '::1', '2019-03-25 10:50:24'),
(123, '::1', '2019-03-25 10:50:59'),
(124, '::1', '2019-03-25 10:55:57'),
(125, '::1', '2019-03-25 10:56:12'),
(126, '::1', '2019-03-25 10:57:22'),
(127, '::1', '2019-03-25 10:57:35'),
(128, '::1', '2019-03-25 11:26:12'),
(129, '::1', '2019-03-25 11:38:45'),
(130, '::1', '2019-03-25 11:52:47'),
(131, '::1', '2019-03-25 11:59:17'),
(132, '::1', '2019-03-25 12:00:37'),
(133, '::1', '2019-03-26 06:02:24'),
(134, '::1', '2019-03-26 06:58:02'),
(135, '::1', '2019-03-26 09:18:00'),
(136, '::1', '2019-03-26 09:19:05'),
(137, '::1', '2019-03-26 09:21:54'),
(138, '::1', '2019-03-26 09:25:43'),
(139, '::1', '2019-03-26 09:26:04'),
(140, '::1', '2019-03-26 09:26:45'),
(141, '::1', '2019-03-26 09:28:01'),
(142, '::1', '2019-03-26 09:28:24'),
(143, '::1', '2019-03-26 10:00:52'),
(144, '::1', '2019-03-26 10:21:03'),
(145, '::1', '2019-03-26 10:22:11'),
(146, '::1', '2019-03-26 10:22:27'),
(147, '::1', '2019-03-26 12:35:37'),
(148, '::1', '2019-03-26 12:40:40'),
(149, '::1', '2019-03-26 12:55:02'),
(150, '::1', '2019-03-26 12:55:58'),
(151, '::1', '2019-03-26 12:56:36'),
(152, '::1', '2019-03-26 13:06:39'),
(153, '::1', '2019-03-26 13:07:18'),
(154, '::1', '2019-03-26 13:08:24'),
(155, '::1', '2019-03-26 13:29:42'),
(156, '::1', '2019-03-26 13:31:47'),
(157, '::1', '2019-03-26 13:33:14'),
(158, '::1', '2019-03-26 13:37:06'),
(159, '::1', '2019-03-26 13:38:13'),
(160, '::1', '2019-03-26 13:39:08'),
(161, '::1', '2019-03-26 13:42:19'),
(162, '::1', '2019-03-26 13:43:57'),
(163, '::1', '2019-03-26 13:44:37'),
(164, '::1', '2019-03-26 13:46:59'),
(165, '::1', '2019-03-26 13:47:06'),
(166, '::1', '2019-03-26 13:47:18'),
(167, '::1', '2019-03-26 13:49:47'),
(168, '::1', '2019-03-26 13:50:28'),
(169, '::1', '2019-03-27 04:27:45'),
(170, '::1', '2019-03-27 04:29:02'),
(171, '::1', '2019-03-27 04:32:49'),
(172, '::1', '2019-03-27 04:33:32'),
(173, '::1', '2019-03-27 04:42:11'),
(174, '::1', '2019-03-27 04:43:15'),
(175, '::1', '2019-03-27 05:02:24'),
(176, '::1', '2019-03-27 05:03:54'),
(177, '::1', '2019-03-27 05:04:14'),
(178, '::1', '2019-03-27 05:05:05'),
(179, '::1', '2019-03-27 05:37:59'),
(180, '::1', '2019-03-27 05:51:51'),
(181, '::1', '2019-03-27 06:02:25'),
(182, '::1', '2019-03-27 06:08:21'),
(183, '::1', '2019-03-27 10:44:23'),
(184, '::1', '2019-03-27 10:52:15'),
(185, '::1', '2019-03-27 11:07:42'),
(186, '::1', '2019-03-27 11:11:02'),
(187, '::1', '2019-03-27 11:19:56'),
(188, '::1', '2019-03-27 11:21:47'),
(189, '::1', '2019-03-27 11:24:03'),
(190, '::1', '2019-03-27 11:25:32'),
(191, '::1', '2019-03-27 11:28:25'),
(192, '::1', '2019-03-27 11:50:50'),
(193, '::1', '2019-03-27 12:30:18'),
(194, '::1', '2019-03-27 12:30:25'),
(195, '::1', '2019-03-27 12:31:09'),
(196, '::1', '2019-03-27 12:31:51'),
(197, '::1', '2019-03-27 13:22:46'),
(198, '::1', '2019-03-27 13:41:42'),
(199, '::1', '2019-03-27 13:43:21'),
(200, '::1', '2019-03-28 04:14:34'),
(201, '::1', '2019-03-28 04:21:50'),
(202, '::1', '2019-03-28 07:12:39'),
(203, '::1', '2019-03-28 07:13:02'),
(204, '::1', '2019-03-28 07:14:50'),
(205, '::1', '2019-03-28 07:34:16'),
(206, '::1', '2019-03-28 07:48:24'),
(207, '::1', '2019-03-28 07:48:51'),
(208, '::1', '2019-03-28 07:53:02'),
(209, '::1', '2019-03-28 09:17:54'),
(210, '::1', '2019-03-28 10:57:57'),
(211, '::1', '2019-03-28 10:58:48'),
(212, '::1', '2019-03-28 11:34:56'),
(213, '::1', '2019-03-28 12:08:10'),
(214, '::1', '2019-03-28 12:08:33'),
(215, '::1', '2019-03-28 12:53:35'),
(216, '::1', '2019-03-28 13:52:23'),
(217, '::1', '2019-03-28 13:57:10'),
(218, '::1', '2019-03-28 14:01:24'),
(219, '::1', '2019-03-29 05:27:08'),
(220, '::1', '2019-03-29 05:34:51'),
(221, '::1', '2019-03-29 05:42:30'),
(222, '::1', '2019-03-29 05:44:39'),
(223, '::1', '2019-03-30 04:58:10'),
(224, '::1', '2019-03-30 06:23:39'),
(225, '::1', '2019-03-30 07:16:50'),
(226, '::1', '2019-03-30 07:16:55'),
(227, '::1', '2019-03-30 10:21:45'),
(228, '::1', '2019-03-30 10:22:49'),
(229, '::1', '2019-04-01 10:25:00'),
(230, '::1', '2019-04-02 04:58:26'),
(231, '::1', '2019-04-02 07:04:10'),
(232, '::1', '2019-04-02 10:46:03'),
(233, '::1', '2019-04-03 04:28:01'),
(234, '::1', '2019-04-03 05:21:01'),
(235, '::1', '2019-04-03 05:24:54'),
(236, '::1', '2019-04-03 13:19:10'),
(237, '::1', '2019-04-04 06:18:42'),
(238, '::1', '2019-04-04 06:19:19'),
(239, '::1', '2019-04-05 06:31:21'),
(240, '::1', '2019-04-05 06:34:54'),
(241, '::1', '2019-04-05 06:53:16'),
(242, '::1', '2019-04-06 15:34:01'),
(243, '::1', '2019-04-06 15:38:16'),
(244, '::1', '2019-04-06 15:39:39'),
(245, '::1', '2019-04-06 15:40:07'),
(246, '::1', '2019-04-06 15:40:31'),
(247, '::1', '2019-04-07 07:36:39'),
(248, '::1', '2019-04-07 07:38:46'),
(249, '::1', '2019-04-07 07:38:50'),
(250, '::1', '2019-04-19 15:32:07'),
(251, '::1', '2019-04-20 12:27:34'),
(252, '::1', '2019-04-21 15:22:28'),
(253, '::1', '2019-04-21 15:24:55'),
(254, '::1', '2019-04-29 09:42:29'),
(255, '::1', '2019-04-30 21:47:37'),
(256, '::1', '2019-05-03 16:10:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gmail` (`gmail`),
  ADD UNIQUE KEY `phone1` (`phone1`),
  ADD UNIQUE KEY `phone2` (`phone2`),
  ADD UNIQUE KEY `cnic` (`cnic`);

--
-- Indexes for table `card_shop`
--
ALTER TABLE `card_shop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gmail` (`gmail`);

--
-- Indexes for table `card_type`
--
ALTER TABLE `card_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gmail` (`gmail`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330344;
--
-- AUTO_INCREMENT for table `card_shop`
--
ALTER TABLE `card_shop`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `card_type`
--
ALTER TABLE `card_type`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
