-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 02:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_predictor`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `Name` varchar(50) NOT NULL,
  `Stream` varchar(50) NOT NULL,
  `Level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`Name`, `Stream`, `Level`) VALUES
(' Hans Raj College', 'Commerce', 'L2'),
('Acharya Narendra Dev College', 'Commerce', 'L2'),
('Acharya Narendra Dev College', 'Science', 'L2'),
('Atma Ram Sanatan Dharm College', 'Commerce', 'L1'),
('Atma Ram Sanatan Dharma College', 'Arts', 'L2'),
('Atma Ram Sanatan Dharma College', 'Science', 'L3'),
('Bhaskraycharya College Of Applied Sciences', 'Science', 'L3'),
('College of Vocational Studies', 'Science', 'L5'),
('Daulat Ram College', 'Commerce', 'L2'),
('Dayal Singh College', 'Arts', 'L2'),
('Dayal Singh College', 'Science', 'L4'),
('Deen Dayal Upadhyay College', 'Science', 'L2'),
('Deen Dayal Upadhyaya College', 'Commerce', 'L2'),
('Delhi College of Arts and Commerce (DCAC)', 'Arts', 'L3'),
('Delhi College of Arts and Commerce (DCAC)', 'Commerce', 'L3'),
('Gargi College', 'Arts', 'L2'),
('Gargi College', 'Commerce', 'L2'),
('Gargi College', 'Science', 'L2'),
('Hansraj College', 'Arts', 'L1'),
('Hansraj College', 'Science', 'L1'),
('Hindu College', 'Arts', 'L1'),
('Hindu College', 'Commerce', 'L1'),
('Hindu College', 'Science', 'L1'),
('Indraprastha college', 'Commerce', 'L4'),
('Indraprastha College', 'Science', 'L4'),
('Indraprastha College For Women', 'Arts', 'L3'),
('Jesus and Mary College', 'Arts', 'L3'),
('Jesus and Mary College (JMC)', 'Commerce', 'L3'),
('Kalindi College', 'Science', 'L3'),
('Kamala Nehru College (KNC)', 'Commerce', 'L3'),
('Keshav Mahavidyalaya', 'Science', 'L3'),
('Kirori Mal College', 'Arts', 'L2'),
('Kirori mal college', 'Commerce', 'L4'),
('Kirori Mal College', 'Science', 'L2'),
('Lady Shri Ram College for Women', 'Arts', 'L1'),
('Lady Shri Ram College for Women', 'Commerce', 'L1'),
('Maharaja Agrasen College', 'Science', 'L3'),
('Mata Sundari College', 'Science', 'L5'),
('Miranda House', 'Arts', 'L1'),
('Miranda House', 'Science', 'L1'),
('Motilal Nehru College', 'Commerce', 'L4'),
('P.G.D.A.V College', 'Science', 'L5'),
('Ram Lal Anand College', 'Science', 'L4'),
('Ramanujan College', 'Arts', 'L3'),
('Ramanujan College', 'Science', 'L4'),
('Ramjas College', 'Arts', 'L3'),
('Ramjas College', 'Commerce', 'L3'),
('Ramjas College', 'Science', 'L2'),
('Shaheed Rajguru College', 'Science', 'L5'),
('Shivaji College', 'Arts', 'L3'),
('Shri Ram College of Commerce', 'Commerce', 'L1'),
('Shyama Prasad Mukherjee College', 'Science', 'L5'),
('Sri Guru Gobind Singh College of Commerce (SGGS)', 'Commerce', 'L3'),
('Sri Guru Tegh Bahadur Khalsa College', 'Science', 'L4'),
('Sri Venkateshwara College', 'Arts', 'L2'),
('Sri Venkateswara College', 'Commerce', 'L1'),
('Sri Venkateswara College', 'Science', 'L1'),
('St. Stephen\'s College', 'Arts', 'L1'),
('St. Stephen\'s College', 'Science', 'L1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`Name`,`Stream`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
