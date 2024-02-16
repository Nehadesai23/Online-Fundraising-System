-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2007 at 11:01 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `charitydb`
--
CREATE DATABASE IF NOT EXISTS `charitydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `charitydb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(101, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE IF NOT EXISTS `approved` (
  `id` int(11) NOT NULL,
  `reporter_image` varchar(255) DEFAULT NULL,
  `reporter_name` varchar(255) DEFAULT NULL,
  `reporter_mobile` varchar(255) DEFAULT NULL,
  `reporter_email` varchar(255) DEFAULT NULL,
  `reporter_address` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`id`, `reporter_image`, `reporter_name`, `reporter_mobile`, `reporter_email`, `reporter_address`, `username`, `password`, `action`) VALUES
(9, 'img/author-1.jpg', 'reporter1', '9657565467', 'reporter1@gmail.com', 'belgaum', 'reporter1', 'reporter1', 'approved'),
(11, 'img/p5.jpg', 'reporter3', '9569547854', 'reporter3@gmail.com', 'belgaum', 'reporter3', 'reporter3', 'approved'),
(13, 'img/p6.jpg', 'reporter5', '8786758765', 'reporter5@gmail.com', 'belgaum', 'reporter5', 'reporter5', 'approved'),
(14, 'img/p1.jpg', 'reporter6', '8475654543', 'reporter6@gmail.com', 'belgaum', 'reporter6', 'reporter6', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `contribute`
--

CREATE TABLE IF NOT EXISTS `contribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `charity_name` varchar(255) DEFAULT NULL,
  `charity_mobile` varchar(255) DEFAULT NULL,
  `charity_email` varchar(255) DEFAULT NULL,
  `charity_address` varchar(255) DEFAULT NULL,
  `contr_amount` float NOT NULL,
  `total_contr` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `contribute`
--

INSERT INTO `contribute` (`id`, `charity_name`, `charity_mobile`, `charity_email`, `charity_address`, `contr_amount`, `total_contr`) VALUES
(66, 'Charity One', '9689875898', 'charity1@gmail.com', 'Angol', 20000, 275000),
(67, 'Charity Two', '9745876545', 'charity2@gmail.com', 'RPD', 30000, 275000),
(68, 'Charity Three', '9854367854', 'charity3@gmail.com', 'Goaves', 15000, 275000),
(69, 'Charity Four', '8745678954', 'charity4@gmail.com', 'Belgaum', 70000, 275000),
(70, 'Charity10', '9847676356', 'charity10@gmail.com', 'Belgaum', 60000, 275000),
(71, 'Charity11', '9876567890', 'charity11@gmail.com', 'Belgaum', 80000, 275000);

-- --------------------------------------------------------

--
-- Table structure for table `donate_to_ppl`
--

CREATE TABLE IF NOT EXISTS `donate_to_ppl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate_to_ppl`
--

INSERT INTO `donate_to_ppl` (`id`, `name`, `mobile`, `address`, `amount`) VALUES
(2, 'needy2', '9689587898', 'Goaves', 10000),
(5, 'needy5', '8578698985', 'RPD', 15000),
(1, 'needy1', '9689589489', 'Vadgaon', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE IF NOT EXISTS `donator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donator_name` varchar(255) DEFAULT NULL,
  `donator_mobile` varchar(255) DEFAULT NULL,
  `donator_email` varchar(255) DEFAULT NULL,
  `charity_name` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `donator`
--

INSERT INTO `donator` (`id`, `donator_name`, `donator_mobile`, `donator_email`, `charity_name`, `amount`) VALUES
(23, 'donor10', '9876567876', 'charity5@gmail.com', 'Charity Five', 10000),
(24, 'donor10', '9876567876', 'donor10@gmail.com', 'Charity Four', 40000),
(25, 'Donor11', '9689875898', 'dionor11@gmail.com', 'Charity One', 50000),
(26, 'donor12', '9487656788', 'donor12@gmail.com', 'Charity One', 10000),
(27, 'donor12', '9487656788', 'donor12@gmail.com', 'Charity Six', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE IF NOT EXISTS `donors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_image` varchar(255) DEFAULT NULL,
  `donor_name` varchar(255) DEFAULT NULL,
  `donor_mobile` varchar(355) DEFAULT NULL,
  `donor_email` varchar(255) DEFAULT NULL,
  `donor_address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `donor_image`, `donor_name`, `donor_mobile`, `donor_email`, `donor_address`, `username`, `password`) VALUES
(1, 'img/person_4.jpg', 'John Smith', '9569547854', 'john@gmail.com', 'Goaves', 'John', 'Smith'),
(2, 'img/person_3.jpg', 'Rose Watt', '8698458987', 'rose@gmail.com', 'Angol', 'Rose', 'Watt'),
(4, 'img/p5.jpg', 'Thomson Peter', '8965435678', 'thomson@gmail.com', 'Goaves', 'Thomson', 'Peter'),
(5, 'img/p5.jpg', 'donor10', '8568594856', 'donor10@gmail.com', 'Belgaum', 'donor10', 'donor10'),
(6, 'img/next.jpg', 'Donor11', '9657565467', 'donor11@gmail.com', 'belgaum', 'donor11', 'donor11'),
(7, 'img/author-1.jpg', 'donor12', '9487656788', 'donor12@gmail.com', 'Belgaum', 'donor12', 'donor12');

-- --------------------------------------------------------

--
-- Table structure for table `needy_people`
--

CREATE TABLE IF NOT EXISTS `needy_people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reporter_id` int(11) NOT NULL,
  `needy_people_image` varchar(255) DEFAULT NULL,
  `needy_people_name` varchar(255) DEFAULT NULL,
  `needy_people_mobile` varchar(11) DEFAULT NULL,
  `needy_people_address` varchar(255) DEFAULT NULL,
  `needy_people_income_certf` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `needy_people`
--

INSERT INTO `needy_people` (`id`, `reporter_id`, `needy_people_image`, `needy_people_name`, `needy_people_mobile`, `needy_people_address`, `needy_people_income_certf`) VALUES
(1, 23, 'img/img1.jpg', 'needy1', '9689589489', 'Vadgaon', 'ic/ic1.docx'),
(2, 23, 'img/img2.jpeg', 'needy2', '9689587898', 'Goaves', 'ic/ic2.docx'),
(3, 24, 'img/img5.jpg', 'needy3', '9787678987', 'Belgaum', 'ic/ic3.docx'),
(4, 24, 'img/img6.jpg', 'needy4', '9689905690', 'Angol', 'ic/ic4.docx'),
(5, 25, 'img/img7.jpg', 'needy5', '8578698985', 'RPD', 'ic/ic5.docx'),
(6, 25, 'img/img8.jpg', 'needy6', '9378476376', 'Goaves', 'ic/ic6.docx'),
(7, 26, 'img/img9.jpg', 'needy7', '9589659489', 'Angol', 'ic/ic7.docx'),
(8, 26, 'img/img10.jpg', 'needy8', '9586948578', 'Belgaum', 'ic/ic8.docx'),
(9, 1, 'img/img6.jpg', 'Needy10', '8788787656', 'RPD', 'ic/ic1.docx'),
(10, 3, 'img/img7.jpg', 'Needy 10', '8467553654', 'Belgaum', 'ic/ic1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `notapproved`
--

CREATE TABLE IF NOT EXISTS `notapproved` (
  `id` int(11) NOT NULL,
  `reporter_image` varchar(255) DEFAULT NULL,
  `reporter_name` varchar(255) DEFAULT NULL,
  `reporter_mobile` varchar(11) DEFAULT NULL,
  `reporter_email` varchar(255) DEFAULT NULL,
  `reporter_address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `action` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notapproved`
--

INSERT INTO `notapproved` (`id`, `reporter_image`, `reporter_name`, `reporter_mobile`, `reporter_email`, `reporter_address`, `username`, `password`, `action`) VALUES
(10, 'img/user-info.png', 'reporter2', '9689875898', 'reporter2@gmail.com', 'belgaum', 'reporter2', 'reporter2', 'not approved'),
(12, 'img/cat-widget2.jpg', 'reporter4', '9787467846', 'reporter4@gmail.com', 'Belgaum', 'reporter4', 'reporter4', 'not approved');

-- --------------------------------------------------------

--
-- Table structure for table `reg_charity_org`
--

CREATE TABLE IF NOT EXISTS `reg_charity_org` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `charity_org_name` varchar(255) DEFAULT NULL,
  `charity_org_mobile` varchar(255) DEFAULT NULL,
  `charity_org_email` varchar(255) DEFAULT NULL,
  `charity_org_address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `charity_org_name` (`charity_org_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `reg_charity_org`
--

INSERT INTO `reg_charity_org` (`id`, `charity_org_name`, `charity_org_mobile`, `charity_org_email`, `charity_org_address`, `username`, `password`) VALUES
(1, 'Charity One', '9689875898', 'charity1@gmail.com', 'Angol', 'charity1', 'charity1'),
(2, 'Charity Two', '9745876545', 'charity2@gmail.com', 'RPD', 'charity2', 'charity2'),
(3, 'Charity Three', '9854367854', 'charity3@gmail.com', 'Goaves', 'charity3', 'charity3'),
(4, 'Charity Four', '8745678954', 'charity4@gmail.com', 'Belgaum', 'charity4', 'charity4'),
(5, 'Charity Five', '9876567876', 'charity5@gmail.com', 'Vadgaon', 'charity5', 'charity5'),
(6, 'Charity Six', '8976567898', 'charity6@gmail.com', 'Belgaum', 'charity6', 'charity6'),
(7, 'Charity Seven', '8968796876', 'charity7@gmail.com', 'Belgaum', 'charity7', 'charity7'),
(8, 'Charity10', '9847676356', 'charity10@gmail.com', 'Belgaum', 'charity10', 'charity10'),
(9, 'Charity11', '9876567890', 'charity11@gmail.com', 'Belgaum', 'charity11', 'charity11'),
(10, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reporter`
--

CREATE TABLE IF NOT EXISTS `reporter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reporter_image` varchar(255) DEFAULT NULL,
  `reporter_name` varchar(255) DEFAULT NULL,
  `reporter_mobile` varchar(255) DEFAULT NULL,
  `reporter_email` varchar(255) DEFAULT NULL,
  `reporter_address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `reporter`
--

INSERT INTO `reporter` (`id`, `reporter_image`, `reporter_name`, `reporter_mobile`, `reporter_email`, `reporter_address`, `username`, `password`, `action`) VALUES
(9, 'img/author-1.jpg', 'reporter1', '9657565467', 'reporter1@gmail.com', 'belgaum', 'reporter1', 'reporter1', 'not approved'),
(10, 'img/user-info.png', 'reporter2', '9689875898', 'reporter2@gmail.com', 'belgaum', 'reporter2', 'reporter2', 'approved'),
(11, 'img/p5.jpg', 'reporter3', '9569547854', 'reporter3@gmail.com', 'belgaum', 'reporter3', 'reporter3', 'approved'),
(12, 'img/cat-widget2.jpg', 'reporter4', '9787467846', 'reporter4@gmail.com', 'Belgaum', 'reporter4', 'reporter4', 'approved'),
(13, 'img/p6.jpg', 'reporter5', '8786758765', 'reporter5@gmail.com', 'belgaum', 'reporter5', 'reporter5', 'approved'),
(14, 'img/p1.jpg', 'reporter6', '8475654543', 'reporter6@gmail.com', 'belgaum', 'reporter6', 'reporter6', 'not approved');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE IF NOT EXISTS `total` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_amount` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `to_name` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `mobile`, `action`, `from_name`, `to_name`, `amount`) VALUES
(72, '9689875898', 'Contributed', 'Charity One', NULL, 20000),
(73, '9745876545', 'Contributed', 'Charity Two', NULL, 30000),
(74, '9854367854', 'Contributed', 'Charity Three', NULL, 15000),
(75, '8745678954', 'Contributed', 'Charity Four', NULL, 70000),
(77, '9876567876', 'Donated', 'donor10', 'Charity Five', 10000),
(78, '9876567876', 'Donated', 'donor10', NULL, 40000),
(79, '9689587898', 'GivenToNeedy', NULL, 'needy2', 10000),
(80, '8578698985', 'GivenToNeedy', NULL, 'needy5', 15000),
(81, '9847676356', 'Contributed', 'Charity10', NULL, 60000),
(82, '9689875898', 'Donated', 'Donor11', 'Charity One', 50000),
(83, '9689589489', 'GivenToNeedy', NULL, 'needy1', 50000),
(84, '9876567890', 'Contributed', 'Charity11', NULL, 80000),
(85, '9487656788', 'Donated', 'donor12', 'Charity One', 10000),
(86, '9487656788', 'Donated', 'donor12', NULL, 25000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
