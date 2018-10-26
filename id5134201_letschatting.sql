-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2018 at 07:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5134201_letschatting`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pasword` varchar(100) NOT NULL,
  `img_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`id`, `firstname`, `lastname`, `contact`, `username`, `pasword`, `img_path`) VALUES
(35, 'Shubhrajit', 'Sarkar', '8276004151', 'sam', 'f16bed56189e249fe4ca8ed10a1ecae60e8ceac0', 'letschat_pic/Shubhrajit'),
(36, 'Souvik', 'Roy', '9874657490', 'roy', 'ae685575101ee7165c90a8f2c30c6e60cdd9e482', 'letschat_pic/Souvik'),
(37, 'Snehasish', 'Mazumder', '8582929655', 'snehasish.cool', 'bb53ea8fa97b294dce5b6ba0b3f47fbeb59a833b', 'letschat_pic/Snehasish'),
(38, 'Sourav ', 'Rajak', '7477370591', 'Admiral_sourav', 'b8d94b4cf9db39cc05097c38d2d1fc4b262f1dcc', 'letschat_pic/Sourav '),
(39, 'SUBHRANEEL', 'HALDER', '8348509350', 'haldersubhraneel@gmail .com ', 'd396f232a5ca1f7a0ad8f1b59975515123780553', 'letschat_pic/SUBHRANEEL'),
(40, 'Satyajit', 'Ghosh', '9002108831', 'satyajitghoshckr1@gmail.com', '81d0fa5f524c0fa8381f3d9c1404df07e0da1ad7', 'letschat_pic/Satyajit'),
(41, 'Gg', 'Vv', '9999999999', 'Qwerty', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'letschat_pic/Gg'),
(42, 'Shyamal ', 'Shyam', '7890879867', 'Shyam12', '7c222fb2927d828af22f592134e8932480637c0d', 'letschat_pic/Shyamal '),
(43, 'Baka', 'Chada', '7890879867', 'A123', '75dca01832391c098332c8217cb5ca0461ced07c', 'letschat_pic/Baka'),
(44, 'Ab', 'Cd', '7278277178', 'Abcde', '7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1', 'letschat_pic/Ab'),
(45, 'Puja', 'kumari', '7280894168', 'Puja7629', '4cbd7e527ae829dd9f1438dbd545d8246440d0de', 'letschat_pic/Puja');

-- --------------------------------------------------------

--
-- Table structure for table `chat_details`
--

CREATE TABLE `chat_details` (
  `chat_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `chat_talk` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_details`
--

INSERT INTO `chat_details` (`chat_id`, `profile_id`, `client_id`, `chat_talk`) VALUES
(94, 35, 36, 'Hi souvik'),
(95, 36, 35, 'Hi'),
(96, 35, 36, 'whatsup'),
(97, 36, 35, 'Just doing'),
(98, 35, 36, 'oh why?'),
(99, 36, 35, 'exam pressure'),
(100, 35, 36, 'oh'),
(101, 36, 35, 'very much pressure'),
(102, 35, 36, 'yes thats ri8'),
(103, 35, 36, 'hmmm'),
(104, 35, 36, ''),
(105, 35, 36, 'all the best'),
(106, 35, 36, 'dd'),
(107, 35, 36, 'gg'),
(108, 36, 35, 'Vv'),
(109, 36, 35, 'Rr'),
(110, 35, 36, 'Hello'),
(111, 37, 35, 'Your live chatting website is quite good.I really liked it..\n\n'),
(112, 38, 35, 'Nyc'),
(113, 35, 37, 'Any suggestion for future betterment?'),
(114, 35, 38, 'Any suggestion?'),
(115, 35, 39, 'Hello'),
(116, 40, 35, 'Bolll'),
(117, 35, 40, 'Kmn?'),
(118, 41, 35, 'Hi'),
(119, 41, 35, 'Hello'),
(120, 35, 41, 'Hi'),
(121, 35, 36, 'Hi strwberry'),
(122, 42, 35, 'Vai mobile number verification to holo na'),
(123, 35, 42, 'Bujhlm na? Kothai verification er kotha blchs?'),
(124, 40, 35, 'Thik thakkk'),
(125, 40, 35, 'Ka hal chal ba....'),
(126, 40, 35, 'Ki korchis bhaii'),
(127, 35, 40, 'hey'),
(128, 40, 35, 'Hlo'),
(129, 40, 35, 'Hw r u???'),
(130, 36, 35, 'hi\n'),
(131, 35, 36, 'hi'),
(132, 35, 36, 'hello'),
(133, 0, 44, ''),
(134, 35, 37, 'hi'),
(135, 0, 0, ''),
(136, 0, 0, ''),
(137, 35, 36, 'hi'),
(138, 0, 0, ''),
(139, 45, 35, 'hello\n'),
(140, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_details`
--
ALTER TABLE `chat_details`
  ADD PRIMARY KEY (`chat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `chat_details`
--
ALTER TABLE `chat_details`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
