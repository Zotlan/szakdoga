-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2023 at 07:00 PM
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
(23, 'szar', 2, 50),
(24, 'asd', 2, 50),
(25, 'your mom gay', 2, 46);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `further_comments`
--

CREATE TABLE `further_comments` (
  `f_comment_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `f_comment_content` varchar(100) NOT NULL
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
(23, 50, 23, 1),
(24, 50, 24, 1),
(25, 46, 25, 1);

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
  `message_content` varchar(1000) NOT NULL,
  `message_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `chat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `user_id`, `message_content`, `message_timestamp`, `chat_id`) VALUES
(89, 33, 'hello', '2023-03-05 17:52:06', 1),
(90, 33, 'you here', '2023-03-05 17:52:12', 1),
(91, 49, 'sure i am', '2023-03-05 17:52:24', 1),
(92, 33, 'yeeeeeeeeeeeeeeeeeeeeees', '2023-03-05 17:52:28', 1),
(93, 33, 'its alive', '2023-03-05 17:52:34', 1),
(94, 49, 'shit works like a charm', '2023-03-05 17:52:38', 1),
(95, 49, 'still ugly as fuck', '2023-03-05 17:52:46', 1),
(96, 33, 'well thats a stretch', '2023-03-05 17:52:47', 1),
(97, 33, 'well yeah', '2023-03-05 17:52:54', 1),
(98, 33, 'again', '2023-03-05 17:52:58', 1),
(99, 33, ' not a ui designer', '2023-03-05 17:53:06', 1),
(100, 49, 'one thing', '2023-03-05 17:53:18', 1),
(101, 33, 'and its a bit rough still in terms of back-end too', '2023-03-05 17:53:26', 1),
(102, 49, 'chat wont follow scrolling', '2023-03-05 17:53:36', 1),
(103, 49, 'shit annoying it just goes back ', '2023-03-05 17:53:51', 1),
(104, 49, 'at the start of the convo', '2023-03-05 17:54:08', 1),
(105, 33, 'like i said still rough around the edges', '2023-03-05 17:54:11', 1),
(106, 46, 'oi cunts', '2023-03-05 17:54:45', 1),
(107, 33, 'hey there', '2023-03-05 17:55:34', 1),
(108, 49, 'who u', '2023-03-05 17:55:40', 1),
(109, 33, 'dont use special charcters', '2023-03-05 17:55:43', 1),
(110, 49, 'special needs characters', '2023-03-05 17:55:59', 1),
(111, 33, 'ill fix it tomorrow', '2023-03-05 17:56:26', 1),
(112, 33, 'along with the scroll wheel', '2023-03-05 17:56:36', 1),
(113, 33, 'but now im gonna go commit and eat dinner', '2023-03-05 17:56:51', 1),
(114, 33, 'see ya bastards', '2023-03-05 17:56:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` varchar(1000) NOT NULL,
  `post_image_path` varchar(100) DEFAULT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `comments_id` int(11) DEFAULT NULL,
  `f_comments_id` int(11) DEFAULT NULL,
  `liked` tinyint(1) NOT NULL,
  `disliked` tinyint(1) NOT NULL
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
(50, 'asdasdasd', '92c32b4a46a35225298a5cf8e871953c', '450c226525d6248377b2a374ab79041d', 1);

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
-- Indexes for table `further_comments`
--
ALTER TABLE `further_comments`
  ADD PRIMARY KEY (`f_comment_id`),
  ADD KEY `comment_id` (`comment_id`);

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
  ADD KEY `user_id` (`user_id`,`post_id`,`comments_id`,`f_comments_id`),
  ADD KEY `f_comments_id` (`f_comments_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `comments_id` (`comments_id`);

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
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `further_comments`
--
ALTER TABLE `further_comments`
  MODIFY `f_comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `membership_type`
--
ALTER TABLE `membership_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
-- Constraints for table `further_comments`
--
ALTER TABLE `further_comments`
  ADD CONSTRAINT `further_comments_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `reaction_ibfk_1` FOREIGN KEY (`f_comments_id`) REFERENCES `further_comments` (`f_comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reaction_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reaction_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reaction_ibfk_4` FOREIGN KEY (`comments_id`) REFERENCES `comments` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userType`) REFERENCES `user_type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
