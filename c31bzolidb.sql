-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2023 at 11:09 AM
-- Server version: 10.3.38-MariaDB-0+deb10u1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c31bzolidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'General'),
(2, 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `chat_name` varchar(100) NOT NULL,
  `publicity` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_name`, `publicity`, `owner_id`) VALUES
(1, 'General', 1, 33),
(2, 'Mathematics', 1, 33),
(28, 'F1', 2, 51),
(30, 'fasz', 2, 52),
(34, 'Sex room', 2, 46),
(40, 'Room Name', 2, 33);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_content` varchar(1000) NOT NULL,
  `comment_time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments_reaction`
--

CREATE TABLE `comments_reaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `further_comments`
--

CREATE TABLE `further_comments` (
  `f_comment_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `f_comment_content` varchar(100) NOT NULL,
  `f_comment_time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_comment_reaction`
--

CREATE TABLE `f_comment_reaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_comment_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `membership_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `user_id`, `chat_id`, `membership_type`) VALUES
(28, 51, 28, 1),
(30, 52, 30, 1),
(50, 46, 34, 1),
(106, 33, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_type`
--

CREATE TABLE `membership_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership_type`
--

INSERT INTO `membership_type` (`type_id`, `type_name`) VALUES
(1, 'owner'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `message_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `chat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `user_id`, `message_content`, `message_timestamp`, `chat_id`) VALUES
(162, 33, 'hello', '2023-03-09 15:57:52', 1),
(163, 46, 'Ez', '2023-03-09 19:37:33', 2),
(164, 46, 'ez', '2023-03-09 19:37:36', 2),
(165, 46, 'Egy zegx hirdetés?', '2023-03-09 19:37:42', 2),
(166, 51, 'Szép jó reggel!', '2023-03-10 07:10:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `poster_id`, `post_title`, `cat_id`, `post_content`, `post_time_stamp`) VALUES
(5, 45, 'Maths is shit', 2, 'Maths is shitv2', '2023-03-09 14:37:52'),
(6, 52, 'Ez rosszabb, mint bármi más', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at erat at purus sollicitudin aliquet et id augue. Curabitur vitae metus nisi. Duis vitae leo lorem. Curabitur eu sem vulputate augue pharetra aliquet sed id neque. Donec volutpat condimentum metus, vel auctor dolor consequat sed. Proin quis sem at lacus dictum consectetur sed in lacus. Suspendisse sit amet sagittis tortor. Ut vel mollis purus.', '2023-03-09 14:40:27'),
(7, 45, '2 paragraph lorem', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel viverra tellus, vitae laoreet libero. Duis venenatis augue sed sodales tempus. Duis metus nisl, convallis vel tortor in, tempor condimentum odio. Ut pharetra justo sed tellus hendrerit, in porttitor nisi convallis. Donec eu risus sit amet sapien posuere sollicitudin nec at nisl. Fusce hendrerit dictum lorem ac vulputate. Nulla facilisi.  Vivamus consequat lobortis libero in placerat. Nulla eget bibendum erat. Praesent auctor, libero sit amet fermentum dictum, dolor lectus ullamcorper ligula, malesuada tempor magna diam sit amet metus. Aliquam vehicula commodo augue, fringilla dignissim eros. Fusce vehicula bibendum risus non blandit. In congue tincidunt nisl, ut mattis elit auctor suscipit. Donec et pretium velit. Curabitur ante libero, euismod ac lorem in, convallis lacinia orci. Ut rhoncus sagittis enim at pulvinar. Sed ultricies erat et urna laoreet, eu pretium neque ornare.', '2023-03-09 14:41:11'),
(8, 45, '1000char paragraph lorem', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel viverra tellus, vitae laoreet libero. Duis venenatis augue sed sodales tempus. Duis metus nisl, convallis vel tortor in, tempor condimentum odio. Ut pharetra justo sed tellus hendrerit, in porttitor nisi convallis. Donec eu risus sit amet sapien posuere sollicitudin nec at nisl. Fusce hendrerit dictum lorem ac vulputate. Nulla facilisi.  Vivamus consequat lobortis libero in placerat. Nulla eget bibendum erat. Praesent auctor, libero sit amet fermentum dictum, dolor lectus ullamcorper ligula, malesuada tempor magna diam sit amet metus. Aliquam vehicula commodo augue, fringilla dignissim eros. Fusce vehicula bibendum risus non blandit. In congue tincidunt nisl, ut mattis elit auctor suscipit. Donec et pretium velit. Curabitur ante libero, euismod ac lorem in, convallis lacinia orci. Ut rhoncus sagittis enim at pulvinar. Sed ultricies erat et urna laoreet, eu pretium neque ornare.  Integer vitae est suscipit, posuere lacus', '2023-03-09 14:42:19'),
(9, 45, '10 paragraph lorem', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis tortor elit. Pellentesque laoreet convallis ante porta finibus. Proin nec fermentum turpis. Ut vel commodo nibh, et volutpat augue. Curabitur non erat ex. Suspendisse posuere dolor id nibh feugiat, non semper dolor pulvinar. Quisque tempus consectetur mi, vitae tempus nunc molestie ut. Fusce in pellentesque ipsum. Curabitur feugiat ultricies augue, eleifend pellentesque nulla aliquam et. Pellentesque consectetur ante eu tellus mattis eleifend. Ut viverra tempus pretium. Curabitur erat odio, sodales ac laoreet vitae, tincidunt consectetur neque.  Maecenas a libero mattis ante fringilla dictum. Duis ultricies, ligula ac gravida dapibus, magna justo scelerisque lorem, vitae volutpat nunc sem eu nisi. Donec dapibus, nulla at bibendum ullamcorper, lacus magna rhoncus mi, in mollis turpis turpis in nisl. Ut diam diam, efficitur nec felis in, mattis viverra dolor. Integer elit mi, laoreet vitae libero non, posuere dignissim ex. Sed eget metus nec turpis sagittis imperdiet sit amet sit amet dui. Donec maximus scelerisque quam. Donec accumsan nulla eros, ac venenatis nulla tristique blandit. Nulla ultrices ultrices mattis. Curabitur elementum quam in ipsum laoreet finibus. Aenean faucibus luctus lectus ac mollis. Ut hendrerit efficitur massa, pharetra tincidunt enim finibus quis. Ut fermentum tellus sit amet sollicitudin ultrices. Nulla tempus semper lorem, nec interdum lorem.  Fusce bibendum accumsan ipsum a dapibus. Ut lacinia, mauris at consequat condimentum, tellus ex pharetra ligula, sed efficitur purus dolor maximus lacus. Mauris condimentum magna erat, tincidunt semper lectus volutpat id. Nulla vel mollis diam, id consequat nisl. Donec molestie mauris quis lacus faucibus ullamcorper. Fusce venenatis purus nibh. Sed luctus tristique semper. Donec arcu felis, efficitur sed quam eu, feugiat dictum orci. Phasellus scelerisque porttitor mi ut suscipit. Aenean posuere erat ac magna aliquam, at dictum dui vestibulum.  In et tellus cursus, tempor felis eu, consectetur lorem. Ut est nunc, molestie ac maximus vitae, facilisis a lectus. Donec posuere dignissim volutpat. Vestibulum mattis est ipsum, quis lobortis ipsum varius in. Nulla maximus odio in justo sollicitudin suscipit quis quis leo. Nulla condimentum sagittis purus, vel hendrerit mi ornare vel. Cras iaculis ultrices leo, a rhoncus odio rhoncus molestie. Donec tincidunt, elit id tristique hendrerit, lacus diam egestas felis, in hendrerit dolor nibh quis lectus.  Sed eu dapibus purus. Curabitur ullamcorper, sapien sit amet pulvinar eleifend, felis leo eleifend lorem, sit amet fringilla eros orci pretium dolor. Nunc tempus varius velit. Pellentesque pretium augue pulvinar dictum luctus. Aliquam erat volutpat. Integer posuere fringilla diam eget iaculis. Proin luctus lectus risus, et convallis felis mattis et.  Quisque non libero arcu. Nulla ipsum arcu, iaculis a lacinia vitae, euismod laoreet ex. Nunc efficitur ipsum diam. Maecenas varius magna ut nibh accumsan accumsan. Sed odio nunc, scelerisque sit amet tortor in, egestas eleifend purus. In vitae arcu eget ligula rhoncus faucibus ut nec ex. Vivamus viverra nisl neque, non consequat nisi maximus id. Maecenas nec suscipit orci. Duis non nibh nibh. Nullam rhoncus elit ullamcorper iaculis viverra. Aenean pharetra ligula nec urna viverra ultricies. Phasellus pulvinar viverra vehicula. Nulla sodales feugiat arcu, sed sollicitudin lectus molestie id.  Suspendisse potenti. Mauris venenatis, velit pharetra vulputate consectetur, nibh elit imperdiet massa, et pellentesque sem tellus id ex. Sed eu lectus nibh. Ut non tellus accumsan, semper felis imperdiet, bibendum neque. Cras tempus sem at porttitor hendrerit. Donec non pulvinar urna. Vivamus et elit vel elit laoreet dictum venenatis vitae tortor. Donec egestas augue vitae dui faucibus, a facilisis felis pretium. Etiam blandit magna urna, sed varius ante ornare a. Donec ornare, erat vel maximus hendrerit, tellus sapien molestie mauris, sed pellentesque quam nunc eu sem. Vivamus mauris urna, accumsan eget hendrerit nec, imperdiet placerat tellus. Proin elementum ligula eu mauris condimentum ultricies. Donec non feugiat quam. Duis at nunc mattis, dapibus turpis sit amet, dapibus ante. Duis eu libero ante.  Phasellus consequat felis vel sodales condimentum. In sed imperdiet lectus, ac blandit risus. Sed a accumsan orci. Vestibulum non nisl mi. Cras blandit neque sit amet arcu vulputate accumsan. Phasellus consectetur nulla ultricies, blandit eros ac, tempor ipsum. Quisque eros nulla, accumsan vitae erat semper, aliquam auctor neque. Donec tincidunt quis purus ut malesuada.  Suspendisse et faucibus quam, in feugiat leo. Nunc eros nisl, aliquam id est ut, porttitor finibus nisi. Duis blandit mollis massa, et blandit neque pulvinar non. Duis porttitor lacus blandit orci sodales, vitae tristique metus consectetur. Maecenas lobortis interdum aliquet. Donec tincidunt aliquet nisi non sollicitudin. In sagittis mattis imperdiet.  Aliquam erat volutpat. Donec porttitor congue nunc ac ultrices. Etiam nec purus a magna lacinia convallis vitae vitae nisl. Nunc nec feugiat erat. Nam lobortis, velit gravida pretium luctus, nulla augue iaculis nisl, sit amet porta sem nunc at velit. Praesent blandit accumsan lobortis. Quisque imperdiet elit quis tortor tincidunt egestas. Aenean elementum, eros vel posuere luctus, eros justo scelerisque sem, in iaculis turpis risus ac neque. Sed congue augue nec turpis rhoncus, eget iaculis purus posuere. Pellentesque in ornare felis, a pellentesque massa. Cras id elit blandit, placerat libero sit amet, dictum risus. Curabitur convallis dolor eu ligula dapibus lobortis. Proin placerat ornare ultricies. Suspendisse non dictum urna, vel iaculis quam.', '2023-03-09 14:44:01'),
(10, 33, 'Hi', 1, 'hello', '2023-03-09 17:11:12'),
(12, 51, 'F1', 1, 'Sebastian Vettel lion the Singapore', '2023-03-10 07:12:40'),
(13, 51, 'F1', 1, 'Bahrain race week 1st Vestappen 2nd Perez 3nd Alonso', '2023-03-10 07:16:40'),
(14, 51, 'F1', 1, 'Jeddah 17-19 Mar', '2023-03-10 07:17:45'),
(15, 51, 'F1', 1, 'Australia 31 Mar-02 Apr', '2023-03-10 07:18:38'),
(16, 51, 'F1', 1, 'Azerbaijan 28-30 APR', '2023-03-10 08:14:00'),
(17, 51, 'F1', 1, 'Miami 05-07 May', '2023-03-10 08:14:29'),
(18, 51, 'F1', 1, 'Emilia Romagna 19-21 May', '2023-03-10 08:14:53'),
(19, 51, 'F1', 1, 'Monaco 26-28 May', '2023-03-10 08:15:27'),
(20, 51, 'F1', 1, 'Spain 02-04 Jun', '2023-03-10 08:16:04'),
(21, 51, 'F1', 1, 'Canada 16-18 Jun', '2023-03-10 08:16:29'),
(22, 51, 'F1', 1, 'Austria 30 Jun -02 Jul', '2023-03-10 08:16:52'),
(23, 51, 'F1', 1, 'United Kingdom 07-09 Jul', '2023-03-10 08:17:22'),
(24, 51, 'F1', 1, 'Hungary 21-23 Jul', '2023-03-10 08:18:02'),
(25, 51, 'F1', 1, 'Spa-Francorchamos 28-30 Jul', '2023-03-10 08:18:34'),
(26, 51, 'F1', 1, 'Netherlands 25-27 Aug', '2023-03-10 08:19:01'),
(27, 51, 'F1', 1, 'Monza 01-03 Sep', '2023-03-10 08:19:23'),
(28, 51, 'F1', 1, 'Singapore 15-17 Sep', '2023-03-10 08:19:55'),
(29, 51, 'F1', 1, 'Japan Suzuka 22-24 Sep', '2023-03-10 08:20:17'),
(30, 51, 'F1', 1, 'Qatar Lusail 06-08 Oct', '2023-03-10 08:20:53'),
(31, 51, 'F1', 1, 'USA Austin 20-22 Oct', '2023-03-10 08:21:10'),
(32, 51, 'F1', 1, 'Mexico 27-29 Oct', '2023-03-10 08:21:26'),
(33, 51, 'F1', 1, 'Brazil Sao Paulo 03-05 Nov', '2023-03-10 08:21:58'),
(34, 51, 'F1', 1, 'Las Vegas 16-18 Nov', '2023-03-10 08:22:21'),
(35, 51, 'F1', 1, 'Abu Dhabi Yas Marina 24-26 Nov', '2023-03-10 08:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `Publicity`
--

CREATE TABLE `Publicity` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Publicity`
--

INSERT INTO `Publicity` (`id`, `p_name`) VALUES
(1, 'public'),
(2, 'private');

-- --------------------------------------------------------

--
-- Table structure for table `reaction`
--

CREATE TABLE `reaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userEmail`, `userPassword`, `userType`) VALUES
(26, 'HeilHilter', '0f5e8ee3a6bd7490985c9224b893ec63', '6652f1488aff7d45ce587ebf5d2c0efb', 1),
(30, 'DrSenkihazi', 'a1ad177fc7a6b5373018326d03fe5e4d', '5fd913ce9a195ccd408ef63c7752db09', 1),
(33, 'Zotlan', '4313364fdcd951df53eae7da25f12057', '391095d7004733654636ffe5d68053f8', 3),
(37, 'DrSenkihazi2', '755fedeead5b7242e87225628dbd064f', '8f3ba5fd2beac46774ceba7798b4e2c4', 1),
(38, 'SebastianVettel', 'ebb27a67f4d790211d5916f118e86862', '6652f1488aff7d45ce587ebf5d2c0efb', 1),
(39, 'ad', 'ed70e8869404c4e0c7eb6a7d83afa7b0', 'ab2b0d90bfaa90b8db4763b74b9f75b4', 1),
(40, 'bicsiteszt', '000025d20db984ed0ad38105cc6ce71c', '85ff04a72d4d50d1924be51d94fcb1df', 1),
(41, 'Plisa84', '487acb19827952443c38d425862392d7', 'd0573354ecf7269ae370cf61a294e4ec', 1),
(43, 'Cradle76', '58d9b21b31dad5db995dca0d707bf60d', 'b8dd7f1a2c678170167346f6e0130efa', 1),
(44, 'asd', 'c89befacfb823e2b03135e27c616b743', '4fc770b0cb055f12759542dbf2ba916e', 1),
(45, 'Hemi', '5a6b7fc900b461aa99ef34dcf5f67ca3', 'dfa1d0f5f9cf058d366568a4b081fac3', 1),
(46, 'MikeOxlong', '379cde01d37ce7dd527f847f52a8e570', 'e3345e46f057bef14b391dd9914b6915', 1),
(49, 'tester', '8c3fe1ad25e6d5f47512ea7365419966', '391095d7004733654636ffe5d68053f8', 1),
(50, 'asdasdasd', '92c32b4a46a35225298a5cf8e871953c', '450c226525d6248377b2a374ab79041d', 1),
(51, 'Seb', 'ebb27a67f4d790211d5916f118e86862', '1bf6717f338767ca7c67adfaa938ca77', 1),
(52, 'tokrist', '7e77773cf76558d686a9abb01b0b3854', '1c6216b3218aecf26fa3a53b4868adc8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`type_id`, `type_name`) VALUES
(1, 'student'),
(2, 'teacher'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vote_type`
--

CREATE TABLE `vote_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `chat_name` (`chat_name`),
  ADD KEY `publicity` (`publicity`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `comments_reaction`
--
ALTER TABLE `comments_reaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`comment_id`,`vote`),
  ADD KEY `vote` (`vote`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `further_comments`
--
ALTER TABLE `further_comments`
  ADD PRIMARY KEY (`f_comment_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `f_comment_reaction`
--
ALTER TABLE `f_comment_reaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`f_comment_id`,`vote`),
  ADD KEY `f_comment_id` (`f_comment_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `chat_id` (`chat_id`),
  ADD KEY `membership_type` (`membership_type`);

--
-- Indexes for table `membership_type`
--
ALTER TABLE `membership_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `chat_id` (`chat_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `poster_id` (`poster_id`),
  ADD KEY `category_id` (`cat_id`);

--
-- Indexes for table `Publicity`
--
ALTER TABLE `Publicity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reaction`
--
ALTER TABLE `reaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`post_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `votes` (`vote`),
  ADD KEY `vote` (`vote`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `user_type` (`userType`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `vote_type`
--
ALTER TABLE `vote_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments_reaction`
--
ALTER TABLE `comments_reaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `further_comments`
--
ALTER TABLE `further_comments`
  MODIFY `f_comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_comment_reaction`
--
ALTER TABLE `f_comment_reaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `membership_type`
--
ALTER TABLE `membership_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `Publicity`
--
ALTER TABLE `Publicity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reaction`
--
ALTER TABLE `reaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `vote_type`
--
ALTER TABLE `vote_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`publicity`) REFERENCES `Publicity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments_reaction`
--
ALTER TABLE `comments_reaction`
  ADD CONSTRAINT `comments_reaction_ibfk_1` FOREIGN KEY (`vote`) REFERENCES `vote_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_reaction_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_reaction_ibfk_3` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `further_comments`
--
ALTER TABLE `further_comments`
  ADD CONSTRAINT `further_comments_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `f_comment_reaction`
--
ALTER TABLE `f_comment_reaction`
  ADD CONSTRAINT `f_comment_reaction_ibfk_1` FOREIGN KEY (`id`) REFERENCES `vote_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_comment_reaction_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_comment_reaction_ibfk_3` FOREIGN KEY (`f_comment_id`) REFERENCES `further_comments` (`f_comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `membership_ibfk_2` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`chat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `membership_ibfk_3` FOREIGN KEY (`membership_type`) REFERENCES `membership_type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`chat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`poster_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reaction`
--
ALTER TABLE `reaction`
  ADD CONSTRAINT `reaction_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reaction_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reaction_ibfk_4` FOREIGN KEY (`vote`) REFERENCES `vote_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userType`) REFERENCES `user_type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
