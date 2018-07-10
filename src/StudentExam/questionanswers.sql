-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 07:45 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentexams`
--

-- --------------------------------------------------------

--
-- Table structure for table `questionanswers`
--

CREATE TABLE IF NOT EXISTS `questionanswers` (
  `questionId` int(15) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `optionA` varchar(250) NOT NULL,
  `optionB` varchar(250) NOT NULL,
  `optionC` varchar(250) NOT NULL,
  `optionD` varchar(250) NOT NULL,
  PRIMARY KEY (`questionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `questionanswers`
--

INSERT INTO `questionanswers` (`questionId`, `question`, `answer`, `optionA`, `optionB`, `optionC`, `optionD`) VALUES
(1, 'What does HTML stands for?', 'Hypertext Markup Language', 'Home Text Making Language', 'Hypertext Markup Language', 'Hypertext Makeup Language', 'None of the above'),
(2, 'What does CSS stands for?', 'Cascading Style Sheets', 'Collection Styles Sheets', 'Compact Sheet Styles', 'Cascading Style Sheets', 'None of the above'),
(3, 'CSS property to make an element hide / show? ', 'Display', 'Toggle', 'Disappear', 'Show', 'Display'),
(4, 'What does PHP stands for?', 'PHP: Hypertext Preprocessor', 'Personal Home Page', 'PHP: Processing Hypertext Procedure', 'Preprocessing Hypertext Predecessor', 'PHP: Hypertext Preprocessor'),
(5, 'Which method is used to submit values from a form?', 'POST', 'POST', 'FETCH', 'DELETE', 'BRING'),
(6, 'Which HTML element is used to show text in bold?', 'Strong', 'bold', 'Thick', 'Strong', 'Fat'),
(7, 'Which BOOTSTRAP class is used to place elements on the right?', 'pull-right', 'Take-right', 'pull-right', 'Push-left', 'Push-right'),
(8, 'Which method is used to use parameters from URL?', '$_GET[ ]', '$_SESSION[ ]', '$_CATCH[ ]', '$_FETCH[ ]', '$_GET[ ]'),
(9, 'Which class gives fixed width for elements in BOOTSTRAP?', '.container', '.container-fluid', '.container-fixed', '.container', '.container-fixed-width'),
(10, 'Which event occurs when the user clicks on an HTML element?', 'onClick', 'onBlur', 'onSubmit', 'onClick', 'onFocus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;evaluationevaluation
