-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2022 at 03:17 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_student2`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_lectures`
--

DROP TABLE IF EXISTS `attendance_lectures`;
CREATE TABLE IF NOT EXISTS `attendance_lectures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `courses_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `day_1` smallint(6) DEFAULT NULL,
  `day_2` smallint(6) DEFAULT NULL,
  `day_3` smallint(6) DEFAULT NULL,
  `day_4` smallint(6) DEFAULT NULL,
  `day_5` smallint(6) DEFAULT NULL,
  `day_6` smallint(6) DEFAULT NULL,
  `day_7` smallint(6) DEFAULT NULL,
  `day_8` smallint(6) DEFAULT NULL,
  `day_9` smallint(6) DEFAULT NULL,
  `day_10` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ATTENDAN_COURSE_LE_COURSES` (`courses_id`),
  KEY `FK_ATTENDAN_PRESENCE_STUDENTS1` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `courses_id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_id` int(11) DEFAULT NULL,
  `lev_id` int(11) DEFAULT NULL,
  `courses_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`courses_id`),
  KEY `FK_COURSES_FOLLOW_IT_LEVELS` (`lev_id`),
  KEY `FK_COURSES_HAVE_COLLEGE` (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courses_id`, `dep_id`, `lev_id`, `courses_name`) VALUES
(1, 1, 4, 'شبكات وامن المعلومات'),
(2, 1, 1, 'تنظيم وادارة'),
(3, 1, 1, 'احصاء تطبيقي'),
(4, 1, 2, 'حقوق انسان'),
(5, 1, 3, 'القانون التجاري'),
(6, 1, 3, 'تجارة الكترونية'),
(7, 2, 3, 'محاسبة تكاليف'),
(8, 2, 4, 'محاسبة تكاليف متقدمة');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `dep_id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dep_id`, `dep_name`) VALUES
(1, 'قسم نظم المعلومات الادارية'),
(2, 'قسم المحاسبة'),
(3, 'قسم الادارة'),
(4, 'قسم الانجليزي'),
(5, 'قسم التمويل');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `Expenses_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `expenses_name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`Expenses_id`),
  KEY `FK_EXPENSES_DETERMINE_LEVELS_O` (`level_id`),
  KEY `FK_EXPENSES_DETERMINE_COLLEGE_` (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`Expenses_id`, `level_id`, `dep_id`, `expenses_name`, `value`) VALUES
(1, 1, 1, 'مصاريف الفرقة الاولي شعبه نظم المعلومات الادارية', 9220),
(2, 2, 1, 'مصاريف الفرقة الثانية شعبه نظم معلومات ادارية', 8700),
(3, 3, 1, 'مصاريف الفرقة الثالثة شعبه نظم معلومات ادارية', 8400),
(4, 4, 1, 'مصاريف الفرقة الرابعه شعبه نظم معلومات ادارية', 10221),
(5, 1, 2, 'مصاريف الفرقة الاولي شعبه المحاسبة والمراجعه عربي', 9500),
(6, 2, 2, 'مصاريف الفرقة الثانية شعبه المحاسبة والمراجعه عربي', 8900),
(7, 3, 2, 'مصاريف الفرقة الثالثة شعبه المحاسبة والمراجعه عربي', 8400),
(8, 4, 2, 'مصاريف الفرقة الرابعه شعبه المحاسبة والمراجعه عربي', 7900),
(9, 1, 4, 'مصاريف الفرقة الاولي شعبه المحاسبة والمراجعه انجليزي', 10200),
(10, 2, 4, 'مصاريف الفرقة الثانية شعبه المحاسبة والمراجعه انجليزي', 10000),
(11, 3, 4, 'مصاريف الفرقة الثالثة شعبه المحاسبة والمراجعه انجليزي', 10100),
(12, 4, 4, 'مصاريف الفرقة الرابعه شعبه المحاسبة والمراجعه انجليزي', 9400);

-- --------------------------------------------------------

--
-- Table structure for table `installment`
--

DROP TABLE IF EXISTS `installment`;
CREATE TABLE IF NOT EXISTS `installment` (
  `installment_id` int(11) NOT NULL AUTO_INCREMENT,
  `the_amount_paid` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `Expenses_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  PRIMARY KEY (`installment_id`),
  KEY `fk1` (`Expenses_id`),
  KEY `fk2` (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `installment`
--

INSERT INTO `installment` (`installment_id`, `the_amount_paid`, `payment_date`, `Expenses_id`, `stu_id`) VALUES
(1, 5000, '2022-04-28', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `lev_id` int(11) NOT NULL AUTO_INCREMENT,
  `lev_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lev_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`lev_id`, `lev_name`) VALUES
(1, 'فرقة اولى'),
(2, 'فرقة ثانية'),
(3, 'فرقة ثالثة'),
(4, 'فرقة رابعة');

-- --------------------------------------------------------

--
-- Table structure for table `phone_student`
--

DROP TABLE IF EXISTS `phone_student`;
CREATE TABLE IF NOT EXISTS `phone_student` (
  `stu_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  KEY `fk4` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `full_name` varchar(50) NOT NULL,
  `Acceptance_type` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `National_ID` varchar(50) NOT NULL,
  `Educational_Qualification` varchar(250) NOT NULL,
  `stu_phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`stu_id`),
  KEY `FK_STUDENTS_FOLLOW IT_LEVELS_O` (`level_id`),
  KEY `FK_STUDENTS_HAVE_COLLEGE_` (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_id`, `level_id`, `dep_id`, `full_name`, `Acceptance_type`, `address`, `Nationality`, `gender`, `Date_of_Birth`, `National_ID`, `Educational_Qualification`, `stu_phone`) VALUES
(1, 1, 2, 'علي محمد محمد الدسوق', 'تنسيق', 'الدقهلية', 'مصري', 'ذكر', '1990-03-16', '12345678945895', ' دبلوم المعاهد الفنية الصناعية.', '01566254785'),
(2, 4, 1, 'خالد عبدالرحيم محمد احمد', 'محول', 'كفر الدوار بحيرة', 'مصري', 'ذكر', '1999-04-04', '34243445657423', 'الثانوية العامة بشعبتيها العلمى والأدبى وما يعادلها من الشهادات العربية والأجنبية.', '0125469555'),
(3, 1, 1, 'عمر ياسر محمد خلدون', 'تنسيق', 'الغربية بسيون', 'مصري', 'ذكر', '1998-03-31', '12457854645789', 'الثانوية العامة بشعبتيها العلمى والأدبى وما يعادلها من الشهادات العربية والأجنبية.', '0121245451'),
(4, 1, 1, 'السيد صبحي علي السيد', 'تنسيق', 'دمنهور', 'مصري', 'ذكر', '1998-06-06', '12548795268465', 'الثانوية العامة بشعبتيها العلمى والأدبى وما يعادلها من الشهادات العربية والأجنبية.', '0124546461'),
(5, 1, 1, 'حامد علي السيد عمر', 'وافد', 'ميامي', 'سوري', 'ذكر', '1999-06-11', '25874689514578', 'الثانوية العامة بشعبتيها العلمى والأدبى وما يعادلها من الشهادات العربية والأجنبية.', '0124546461'),
(6, 1, 1, 'مي السيد احمد السيد', 'تنسيق', 'المحموديه', 'مصرية', 'انثي', '1998-06-09', '2589874568524', 'الثانوية العامة بشعبتيها العلمى والأدبى وما يعادلها من الشهادات العربية والأجنبية.', '+44562189'),
(7, 3, 2, 'مني السيد حسام الدين علي', 'وافد', 'الاسكندرية', 'سوري', 'انثي', '2000-09-01', '12548545632545', 'الثانوية العامة بشعبتيها العلمى والأدبى وما يعادلها من الشهادات العربية والأجنبية.', '0124546461');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_lectures`
--
ALTER TABLE `attendance_lectures`
  ADD CONSTRAINT `1` FOREIGN KEY (`courses_id`) REFERENCES `courses` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `2` FOREIGN KEY (`stu_id`) REFERENCES `students` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `6` FOREIGN KEY (`dep_id`) REFERENCES `departments` (`dep_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `7` FOREIGN KEY (`lev_id`) REFERENCES `level` (`lev_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `FK_EXPENSES_DETERMINE_COLLEGE_` FOREIGN KEY (`dep_id`) REFERENCES `departments` (`dep_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_EXPENSES_DETERMINE_LEVELS_O` FOREIGN KEY (`level_id`) REFERENCES `level` (`lev_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `installment`
--
ALTER TABLE `installment`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`Expenses_id`) REFERENCES `expenses` (`Expenses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`stu_id`) REFERENCES `students` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phone_student`
--
ALTER TABLE `phone_student`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`stu_id`) REFERENCES `students` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `3` FOREIGN KEY (`level_id`) REFERENCES `level` (`lev_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `4` FOREIGN KEY (`dep_id`) REFERENCES `departments` (`dep_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
