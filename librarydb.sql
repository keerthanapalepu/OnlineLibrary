-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 07:01 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_database`
--

CREATE TABLE `admin_database` (
  `admin_name` varchar(15) NOT NULL,
  `admin_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_database`
--

INSERT INTO `admin_database` (`admin_name`, `admin_password`) VALUES
('20bcs082', '20bcs082'),
('20bcs085', '20bcs085'),
('20bcs149', '12345'),
('gagan', 'gagan'),
('HELLO', 'HELLO');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ARTICLE_ID` varchar(15) NOT NULL,
  `TOPIC` varchar(50) NOT NULL,
  `WRITTER` varchar(15) NOT NULL,
  `FILENAME` varchar(150) NOT NULL,
  `PATH` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ARTICLE_ID`, `TOPIC`, `WRITTER`, `FILENAME`, `PATH`) VALUES
('11', 'online classes', 'Journalist', 'online classes', '/Lab/Interactive library/pdfs/'),
('12', 'challenges of women', 'Journalist', 'challenges of women', '/Lab/Interactive library/pdfs/'),
('13', 'israel palastine', 'Journalist', 'israel palastine', '/Lab/Interactive library/pdfs/'),
('15', 'black fungus', 'Journalist', 'black fungus', '/Lab/Interactive library/pdfs/');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BOOKID` varchar(150) NOT NULL,
  `BOOKNAME` varchar(20) NOT NULL,
  `AUTHOR` varchar(20) NOT NULL,
  `FILENAME` varchar(30) NOT NULL,
  `PATH_pdf` varchar(100) NOT NULL,
  `PATH_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BOOKID`, `BOOKNAME`, `AUTHOR`, `FILENAME`, `PATH_pdf`, `PATH_photo`) VALUES
('104', 'Shoe Dog', 'Phil Knight', 'Shoe Dog', '/Lab/Interactive library/pdfs/', '/Lab/Interactive library/pdfs/'),
('105', 'The Daily Stoic', 'Ryan Holiday', 'The Daily Stoic', '/Lab/Interactive library/pdfs/', '/Lab/Interactive library/pdfs/'),
('111', 'Wings of fire', 'APJ Abdul Kalam', 'Wings of fire', '/Lab/Interactive library/pdfs/', '/Lab/Interactive library/pdfs/');

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

CREATE TABLE `magazines` (
  `MAG_ID` varchar(15) NOT NULL,
  `MAG_NAME` varchar(100) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL,
  `FILENAME` varchar(150) NOT NULL,
  `PATH` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `magazines`
--

INSERT INTO `magazines` (`MAG_ID`, `MAG_NAME`, `CATEGORY`, `FILENAME`, `PATH`) VALUES
('1', 'Sunday Magazine', 'FASHION', 'Sunday Magazine', '/Lab/Interactive library/pdfs/'),
('3', 'Race Tech', 'TECH', 'Race Tech', '/Lab/Interactive library/pdfs/'),
('4', 'Muse', 'SCIENCE', 'Muse', '/Lab/Interactive library/pdfs/'),
('5', 'Popular Science', 'SCIENCE', 'Popular Science', '/Lab/Interactive library/pdfs/');

-- --------------------------------------------------------

--
-- Table structure for table `user_database`
--

CREATE TABLE `user_database` (
  `username` varchar(15) NOT NULL,
  `user_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_database`
--

INSERT INTO `user_database` (`username`, `user_password`) VALUES
('20bcs017', '20bcs017'),
('20bcs057', '20bcs057'),
('20bcs082', '20bcs082'),
('20bcs085', '20bcs085'),
('20bcs149', '12345'),
('20bcs181', '20bcs181'),
('keer', 'keer'),
('keerthana', '12345'),
('kumari', 'kumari'),
('raj', 'raj'),
('rani', 'rani'),
('RANI1', 'RANI1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_database`
--
ALTER TABLE `admin_database`
  ADD PRIMARY KEY (`admin_name`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ARTICLE_ID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BOOKID`);

--
-- Indexes for table `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`MAG_ID`);

--
-- Indexes for table `user_database`
--
ALTER TABLE `user_database`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
