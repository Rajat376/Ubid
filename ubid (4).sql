-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 07:22 PM
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
-- Database: `ubid`
--

-- --------------------------------------------------------

--
-- Table structure for table `qnbank`
--

CREATE TABLE `qnbank` (
  `ID` int(11) NOT NULL,
  `qn1` varchar(200) DEFAULT NULL,
  `qn2` varchar(200) DEFAULT NULL,
  `opt1` varchar(100) DEFAULT NULL,
  `opt2` varchar(100) DEFAULT NULL,
  `opt3` varchar(100) DEFAULT NULL,
  `opt4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qnbank`
--

INSERT INTO `qnbank` (`ID`, `qn1`, `qn2`, `opt1`, `opt2`, `opt3`, `opt4`) VALUES
(1, 'What food does', 'like?', 'Samosa', 'Pizza', 'Pasta', 'Burger'),
(2, 'What kind of music does', 'like?', 'Hip Hop', 'Pop', 'Rock', 'Classical'),
(4, 'What kind of places does', 'like to visit?', 'Beach', 'Mountain', 'Historical', 'Wildlife'),
(5, 'What kind of movies does', 'like?', 'Thriller', 'Comedy', 'Horror', 'Drama'),
(6, 'Which of these game does', 'like to play?', 'Badminton', 'Cricket', 'Soccer', 'Table Tennis'),
(7, 'What is favorite beverage of', ' ?', 'Coffee', 'tea', 'Juice', 'Wine'),
(8, 'what is favorite season of', ' ?', 'Winter', 'Summer', 'Spring', 'Autumn'),
(9, 'What is favorite gadget of ', ' ?', 'Mobile', 'PC', 'Play station', 'VR Headset'),
(10, 'what is favorite transport of', ' ?', 'Train', 'Bus', 'Car', 'Aero plane'),
(11, 'WHAT IS FAVORITE PET OF', ' ?', 'Dog', 'Cat', 'Parrots', 'Hamster'),
(12, 'What kind of cuisines does ', 'like ?', 'Italian', 'Chinese', 'Indian', 'Turkish'),
(13, 'what is favorite food franchise of ', '?', 'Mc Donalds', 'KFC', 'Dominos', 'Haldiram'),
(14, 'What is favorite fruit of', ' ?', 'Apple', 'Melon', 'Grapes', 'Mango'),
(15, 'What kind of shows does ', 'prefer to watch?', 'Web Series', 'Anime', 'Reality Shows', 'TV Serials'),
(16, 'Which adventure sport does', ' like?', 'Rafting', 'Paragliding', 'Skiing', 'Bungee Jumping'),
(17, 'What is the favorite Cricketer of', ' ?', ' Sachin Tendulkar', 'Virat Kohli', 'Rohit Sharma', 'MS DHONI'),
(18, 'What is favorite retro game of ', '?', 'Mario', 'Roadrash', 'Sonic', 'Contra'),
(19, 'What is favorite kids show of', ' ?', 'Shinchan', 'Doraemon', 'Pokemon', 'Huggimaru'),
(20, 'What is the favorite kids show of ', ' ?', 'Oswald', 'Noddy', 'Gali Gali SimSim', 'Mickey Mouse'),
(21, 'What is the favorite japanese anime of', ' ?', 'Naruto', 'DeathNote', 'One Piece', 'Dragon Ball Series'),
(22, 'What is favorite action superhero television series of', '?', 'Power Rangers', 'Rescue Force', 'Ryukendo', 'Ben 10'),
(23, 'Which genre of show do', 'like?', 'Action', 'Romance', 'Sci-fi', 'Mystery'),
(24, 'What is favorite soft drink of', ' ?', 'Coke', 'Sprite', 'Pepsi', 'Fanta'),
(25, 'What is the favorite Indian web series of?', '?', 'Kota Factoy', 'Mirzapur', 'Family Man', 'Scam 1992'),
(26, 'What is the favorite dessert of ', ' ?', 'Ice Creams', 'Cakes /Pastries', 'Pudding', 'Brownies'),
(27, 'What is the favorite Indian sweet of', '?', 'Rasagolla', 'Kheer', 'Milk cake ', 'Gajar Halwa'),
(28, 'What is the favorite ice cream flavor of', ' ?', 'Chocolate', 'Butter Scotch', 'Vanilla', 'Strawberry'),
(29, 'What is favorite chinese cuisine of', '?', 'Chow Mein', 'Manchurian', 'Spring Rolls', 'Hotpot'),
(30, 'What is the favorite dream job of', ' ?', 'Astronaut', 'Entrepreneur', 'Food Critic', 'Sportsperson'),
(31, 'what would ', 'rather choose?', 'loose ability to walk', 'loose ability to hear', 'loose ability to see', 'loose ability to speak'),
(32, 'what would', 'rather choose?', 'be in jail for 2 yr', 'loose all the memory', 'be in debt of 1 crore', 'loose ability to speak'),
(33, 'At what age', 'will get married?', '22-24', '25-30', '30-35', 'never'),
(34, 'what is the favorite subject of', '?', 'maths', 'history', 'english', 'science'),
(35, 'What would ', 'be a pro at?', 'swimming', 'athletics', 'gaming', 'bargaining'),
(36, 'which power would', ' like to get', 'superstrength', 'invisibility', 'supersonic speed', 'telepathy'),
(37, 'What would', ' do in free time?', 'studying', 'playing', 'sleeping', 'watching content'),
(38, 'If ', 'was in a circus which character would he/she be?', 'Joker', 'Animal Trainer', 'Stunt Biker', 'Aerial expert'),
(41, 'If ', 'could do anything illegal without getting caught, what would it be?', 'pull train chain ', 'Kill maths teacher', 'Shut down Trump Twitter ', 'Kill people who ask stupid que like this '),
(42, 'what kind of comedy does', ' prefer', 'Stand-Up', 'Sketch comedy', 'Dramatic Comedy', 'Physical Comedy'),
(44, 'If  ', ' could make up a school subject, what would it be?', 'Cryptocurrency', 'Jugaad', 'Psychology', 'Art of selling'),
(45, 'Which of these skills would', ' love to have?', 'Bargaining', 'Manage and Multiply Money', 'Smooth talking', 'make anyone fall for you');

-- --------------------------------------------------------

--
-- Table structure for table `roomstart`
--

CREATE TABLE `roomstart` (
  `roomname` varchar(100) DEFAULT NULL,
  `strt` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qnbank`
--
ALTER TABLE `qnbank`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roomstart`
--
ALTER TABLE `roomstart`
  ADD UNIQUE KEY `roomname` (`roomname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qnbank`
--
ALTER TABLE `qnbank`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
