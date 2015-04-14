-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2015 at 10:17 AM
-- Server version: 5.6.23
-- PHP Version: 5.5.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mmu_student_admin`
--
CREATE DATABASE IF NOT EXISTS `mmu_student_admin` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mmu_student_admin`;

-- --------------------------------------------------------

--
-- Table structure for table `academic_histories`
--

CREATE TABLE IF NOT EXISTS `academic_histories` (
  `id` int(11) NOT NULL,
  `index_number` varchar(50) NOT NULL,
  `year_of_completion` date NOT NULL,
  `qualification_name` text,
  `certified_by` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `person_id` (`person_id`),
  UNIQUE KEY `index_number` (`index_number`),
  KEY `certified_by` (`certified_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `academic_histories_subjects`
--

CREATE TABLE IF NOT EXISTS `academic_histories_subjects` (
  `subject_id` int(11) NOT NULL,
  `academic_history_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `others` text NOT NULL,
  `modified` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`subject_id`,`academic_history_id`,`grade_id`),
  KEY `academic_history_id` (`academic_history_id`),
  KEY `grade_id` (`grade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `village` varchar(50) DEFAULT NULL,
  `sub_county` varchar(128) DEFAULT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `address_line_1` varchar(80) DEFAULT NULL,
  `address_line_2` varchar(80) DEFAULT NULL,
  `university_id` int(11) DEFAULT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `university_id` (`university_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `village`, `sub_county`, `district`, `city`, `country`, `zipcode`, `address_line_1`, `address_line_2`, `university_id`, `created`, `modified`, `deleted`) VALUES
(4, 'Mushumba', 'Bunyaruguru', 'Rubirizi', 'N/A', '232', 0, 'P.O. Box 16499 Kampala, Uganda', '', NULL, 1428722027, 1428722027, 0),
(5, 'Mushumba', 'Bunyaruguru', 'Rubirizi', 'N/A', '232', 0, 'P.O. Box 16499 Kampala, Uganda', '', NULL, 1428722308, 1428722308, 0),
(6, 'Mushumba', 'Bunyaruguru', 'Rubirizi', 'N/A', '232', NULL, 'P.O. Box 16499 Kampala, Uganda', '', NULL, 1428722324, 1428722324, 0),
(7, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, 1428753456, 1428753456, 0),
(8, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, 1428753775, 1428753775, 0),
(9, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, 1428755080, 1428755080, 0),
(10, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, 1428755092, 1428755092, 0);

-- --------------------------------------------------------

--
-- Table structure for table `address_persons`
--

CREATE TABLE IF NOT EXISTS `address_persons` (
  `id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `address_id_2` (`address_id`,`person_id`,`type`),
  UNIQUE KEY `address_id_3` (`address_id`,`person_id`),
  KEY `address_id` (`address_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `received_by` int(11) NOT NULL,
  `date_received` date NOT NULL,
  `mark_complete` tinyint(1) NOT NULL,
  `marked_complete_by_id` text NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `person_id` int(11) NOT NULL,
  `hostel` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applications_courses`
--

CREATE TABLE IF NOT EXISTS `applications_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `applications_id` (`application_id`,`course_id`),
  KEY `course_id` (`course_id`),
  KEY `application_id` (`application_id`),
  KEY `course_id_2` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `application_courses`
--

CREATE TABLE IF NOT EXISTS `application_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `application_temps`
--

CREATE TABLE IF NOT EXISTS `application_temps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` char(36) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `code` varchar(40) NOT NULL,
  `Personalbiodata_json` text NOT NULL,
  `education_choice` text NOT NULL,
  `higher_education` text NOT NULL,
  `adult_education` text NOT NULL,
  `data` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `campuses`
--

CREATE TABLE IF NOT EXISTS `campuses` (
  `id` int(11) NOT NULL,
  `location` varchar(20) NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campuses`
--

INSERT INTO `campuses` (`id`, `location`, `modified`, `deleted`, `created`) VALUES
(0, 'Saaka', '2014-04-16 13:06:55', 0, '2014-04-16 13:06:55'),
(1, 'Kabundaire2iiiiiiiii', '2014-04-16 16:57:39', 0, '2014-04-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `campus_departments`
--

CREATE TABLE IF NOT EXISTS `campus_departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campus_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `campus_id` (`campus_id`,`department_id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `campus_schools`
--

CREATE TABLE IF NOT EXISTS `campus_schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campus_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `campus_id` (`campus_id`,`school_id`),
  KEY `school_id` (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `id` int(11) NOT NULL,
  `date_started` int(11) NOT NULL,
  `date_ended` int(11) DEFAULT NULL,
  `company_name` int(11) NOT NULL,
  `position_held` text NOT NULL,
  `person_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE IF NOT EXISTS `contact_details` (
  `id` int(11) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `po_city` varchar(30) DEFAULT NULL,
  `po_country` varchar(30) DEFAULT NULL,
  `post_office_box` varchar(20) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `long_name` varchar(80) NOT NULL,
  `iso2` char(2) DEFAULT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` varchar(6) DEFAULT NULL,
  `un_member` varchar(12) DEFAULT NULL,
  `calling_code` varchar(8) DEFAULT NULL,
  `cctld` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=251 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `long_name`, `iso2`, `iso3`, `numcode`, `un_member`, `calling_code`, `cctld`) VALUES
(1, 'Afghanistan', 'Islamic Republic of Afghanistan', 'AF', 'AFG', '004', 'yes', '93', '.af'),
(2, 'Aland Islands', '&Aring;land Islands', 'AX', 'ALA', '248', 'no', '358', '.ax'),
(3, 'Albania', 'Republic of Albania', 'AL', 'ALB', '008', 'yes', '355', '.al'),
(4, 'Algeria', 'People''s Democratic Republic of Algeria', 'DZ', 'DZA', '012', 'yes', '213', '.dz'),
(5, 'American Samoa', 'American Samoa', 'AS', 'ASM', '016', 'no', '1+684', '.as'),
(6, 'Andorra', 'Principality of Andorra', 'AD', 'AND', '020', 'yes', '376', '.ad'),
(7, 'Angola', 'Republic of Angola', 'AO', 'AGO', '024', 'yes', '244', '.ao'),
(8, 'Anguilla', 'Anguilla', 'AI', 'AIA', '660', 'no', '1+264', '.ai'),
(9, 'Antarctica', 'Antarctica', 'AQ', 'ATA', '010', 'no', '672', '.aq'),
(10, 'Antigua and Barbuda', 'Antigua and Barbuda', 'AG', 'ATG', '028', 'yes', '1+268', '.ag'),
(11, 'Argentina', 'Argentine Republic', 'AR', 'ARG', '032', 'yes', '54', '.ar'),
(12, 'Armenia', 'Republic of Armenia', 'AM', 'ARM', '051', 'yes', '374', '.am'),
(13, 'Aruba', 'Aruba', 'AW', 'ABW', '533', 'no', '297', '.aw'),
(14, 'Australia', 'Commonwealth of Australia', 'AU', 'AUS', '036', 'yes', '61', '.au'),
(15, 'Austria', 'Republic of Austria', 'AT', 'AUT', '040', 'yes', '43', '.at'),
(16, 'Azerbaijan', 'Republic of Azerbaijan', 'AZ', 'AZE', '031', 'yes', '994', '.az'),
(17, 'Bahamas', 'Commonwealth of The Bahamas', 'BS', 'BHS', '044', 'yes', '1+242', '.bs'),
(18, 'Bahrain', 'Kingdom of Bahrain', 'BH', 'BHR', '048', 'yes', '973', '.bh'),
(19, 'Bangladesh', 'People''s Republic of Bangladesh', 'BD', 'BGD', '050', 'yes', '880', '.bd'),
(20, 'Barbados', 'Barbados', 'BB', 'BRB', '052', 'yes', '1+246', '.bb'),
(21, 'Belarus', 'Republic of Belarus', 'BY', 'BLR', '112', 'yes', '375', '.by'),
(22, 'Belgium', 'Kingdom of Belgium', 'BE', 'BEL', '056', 'yes', '32', '.be'),
(23, 'Belize', 'Belize', 'BZ', 'BLZ', '084', 'yes', '501', '.bz'),
(24, 'Benin', 'Republic of Benin', 'BJ', 'BEN', '204', 'yes', '229', '.bj'),
(25, 'Bermuda', 'Bermuda Islands', 'BM', 'BMU', '060', 'no', '1+441', '.bm'),
(26, 'Bhutan', 'Kingdom of Bhutan', 'BT', 'BTN', '064', 'yes', '975', '.bt'),
(27, 'Bolivia', 'Plurinational State of Bolivia', 'BO', 'BOL', '068', 'yes', '591', '.bo'),
(28, 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', '535', 'no', '599', '.bq'),
(29, 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'BA', 'BIH', '070', 'yes', '387', '.ba'),
(30, 'Botswana', 'Republic of Botswana', 'BW', 'BWA', '072', 'yes', '267', '.bw'),
(31, 'Bouvet Island', 'Bouvet Island', 'BV', 'BVT', '074', 'no', 'NONE', '.bv'),
(32, 'Brazil', 'Federative Republic of Brazil', 'BR', 'BRA', '076', 'yes', '55', '.br'),
(33, 'British Indian Ocean Territory', 'British Indian Ocean Territory', 'IO', 'IOT', '086', 'no', '246', '.io'),
(34, 'Brunei', 'Brunei Darussalam', 'BN', 'BRN', '096', 'yes', '673', '.bn'),
(35, 'Bulgaria', 'Republic of Bulgaria', 'BG', 'BGR', '100', 'yes', '359', '.bg'),
(36, 'Burkina Faso', 'Burkina Faso', 'BF', 'BFA', '854', 'yes', '226', '.bf'),
(37, 'Burundi', 'Republic of Burundi', 'BI', 'BDI', '108', 'yes', '257', '.bi'),
(38, 'Cambodia', 'Kingdom of Cambodia', 'KH', 'KHM', '116', 'yes', '855', '.kh'),
(39, 'Cameroon', 'Republic of Cameroon', 'CM', 'CMR', '120', 'yes', '237', '.cm'),
(40, 'Canada', 'Canada', 'CA', 'CAN', '124', 'yes', '1', '.ca'),
(41, 'Cape Verde', 'Republic of Cape Verde', 'CV', 'CPV', '132', 'yes', '238', '.cv'),
(42, 'Cayman Islands', 'The Cayman Islands', 'KY', 'CYM', '136', 'no', '1+345', '.ky'),
(43, 'Central African Republic', 'Central African Republic', 'CF', 'CAF', '140', 'yes', '236', '.cf'),
(44, 'Chad', 'Republic of Chad', 'TD', 'TCD', '148', 'yes', '235', '.td'),
(45, 'Chile', 'Republic of Chile', 'CL', 'CHL', '152', 'yes', '56', '.cl'),
(46, 'China', 'People''s Republic of China', 'CN', 'CHN', '156', 'yes', '86', '.cn'),
(47, 'Christmas Island', 'Christmas Island', 'CX', 'CXR', '162', 'no', '61', '.cx'),
(48, 'Cocos (Keeling) Islands', 'Cocos (Keeling) Islands', 'CC', 'CCK', '166', 'no', '61', '.cc'),
(49, 'Colombia', 'Republic of Colombia', 'CO', 'COL', '170', 'yes', '57', '.co'),
(50, 'Comoros', 'Union of the Comoros', 'KM', 'COM', '174', 'yes', '269', '.km'),
(51, 'Congo', 'Republic of the Congo', 'CG', 'COG', '178', 'yes', '242', '.cg'),
(52, 'Cook Islands', 'Cook Islands', 'CK', 'COK', '184', 'some', '682', '.ck'),
(53, 'Costa Rica', 'Republic of Costa Rica', 'CR', 'CRI', '188', 'yes', '506', '.cr'),
(54, 'Cote d''ivoire (Ivory Coast)', 'Republic of C&ocirc;te D''Ivoire (Ivory Coast)', 'CI', 'CIV', '384', 'yes', '225', '.ci'),
(55, 'Croatia', 'Republic of Croatia', 'HR', 'HRV', '191', 'yes', '385', '.hr'),
(56, 'Cuba', 'Republic of Cuba', 'CU', 'CUB', '192', 'yes', '53', '.cu'),
(57, 'Curacao', 'Cura&ccedil;ao', 'CW', 'CUW', '531', 'no', '599', '.cw'),
(58, 'Cyprus', 'Republic of Cyprus', 'CY', 'CYP', '196', 'yes', '357', '.cy'),
(59, 'Czech Republic', 'Czech Republic', 'CZ', 'CZE', '203', 'yes', '420', '.cz'),
(60, 'Democratic Republic of the Congo', 'Democratic Republic of the Congo', 'CD', 'COD', '180', 'yes', '243', '.cd'),
(61, 'Denmark', 'Kingdom of Denmark', 'DK', 'DNK', '208', 'yes', '45', '.dk'),
(62, 'Djibouti', 'Republic of Djibouti', 'DJ', 'DJI', '262', 'yes', '253', '.dj'),
(63, 'Dominica', 'Commonwealth of Dominica', 'DM', 'DMA', '212', 'yes', '1+767', '.dm'),
(64, 'Dominican Republic', 'Dominican Republic', 'DO', 'DOM', '214', 'yes', '1+809, 8', '.do'),
(65, 'Ecuador', 'Republic of Ecuador', 'EC', 'ECU', '218', 'yes', '593', '.ec'),
(66, 'Egypt', 'Arab Republic of Egypt', 'EG', 'EGY', '818', 'yes', '20', '.eg'),
(67, 'El Salvador', 'Republic of El Salvador', 'SV', 'SLV', '222', 'yes', '503', '.sv'),
(68, 'Equatorial Guinea', 'Republic of Equatorial Guinea', 'GQ', 'GNQ', '226', 'yes', '240', '.gq'),
(69, 'Eritrea', 'State of Eritrea', 'ER', 'ERI', '232', 'yes', '291', '.er'),
(70, 'Estonia', 'Republic of Estonia', 'EE', 'EST', '233', 'yes', '372', '.ee'),
(71, 'Ethiopia', 'Federal Democratic Republic of Ethiopia', 'ET', 'ETH', '231', 'yes', '251', '.et'),
(72, 'Falkland Islands (Malvinas)', 'The Falkland Islands (Malvinas)', 'FK', 'FLK', '238', 'no', '500', '.fk'),
(73, 'Faroe Islands', 'The Faroe Islands', 'FO', 'FRO', '234', 'no', '298', '.fo'),
(74, 'Fiji', 'Republic of Fiji', 'FJ', 'FJI', '242', 'yes', '679', '.fj'),
(75, 'Finland', 'Republic of Finland', 'FI', 'FIN', '246', 'yes', '358', '.fi'),
(76, 'France', 'French Republic', 'FR', 'FRA', '250', 'yes', '33', '.fr'),
(77, 'French Guiana', 'French Guiana', 'GF', 'GUF', '254', 'no', '594', '.gf'),
(78, 'French Polynesia', 'French Polynesia', 'PF', 'PYF', '258', 'no', '689', '.pf'),
(79, 'French Southern Territories', 'French Southern Territories', 'TF', 'ATF', '260', 'no', NULL, '.tf'),
(80, 'Gabon', 'Gabonese Republic', 'GA', 'GAB', '266', 'yes', '241', '.ga'),
(81, 'Gambia', 'Republic of The Gambia', 'GM', 'GMB', '270', 'yes', '220', '.gm'),
(82, 'Georgia', 'Georgia', 'GE', 'GEO', '268', 'yes', '995', '.ge'),
(83, 'Germany', 'Federal Republic of Germany', 'DE', 'DEU', '276', 'yes', '49', '.de'),
(84, 'Ghana', 'Republic of Ghana', 'GH', 'GHA', '288', 'yes', '233', '.gh'),
(85, 'Gibraltar', 'Gibraltar', 'GI', 'GIB', '292', 'no', '350', '.gi'),
(86, 'Greece', 'Hellenic Republic', 'GR', 'GRC', '300', 'yes', '30', '.gr'),
(87, 'Greenland', 'Greenland', 'GL', 'GRL', '304', 'no', '299', '.gl'),
(88, 'Grenada', 'Grenada', 'GD', 'GRD', '308', 'yes', '1+473', '.gd'),
(89, 'Guadaloupe', 'Guadeloupe', 'GP', 'GLP', '312', 'no', '590', '.gp'),
(90, 'Guam', 'Guam', 'GU', 'GUM', '316', 'no', '1+671', '.gu'),
(91, 'Guatemala', 'Republic of Guatemala', 'GT', 'GTM', '320', 'yes', '502', '.gt'),
(92, 'Guernsey', 'Guernsey', 'GG', 'GGY', '831', 'no', '44', '.gg'),
(93, 'Guinea', 'Republic of Guinea', 'GN', 'GIN', '324', 'yes', '224', '.gn'),
(94, 'Guinea-Bissau', 'Republic of Guinea-Bissau', 'GW', 'GNB', '624', 'yes', '245', '.gw'),
(95, 'Guyana', 'Co-operative Republic of Guyana', 'GY', 'GUY', '328', 'yes', '592', '.gy'),
(96, 'Haiti', 'Republic of Haiti', 'HT', 'HTI', '332', 'yes', '509', '.ht'),
(97, 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', 'HM', 'HMD', '334', 'no', 'NONE', '.hm'),
(98, 'Honduras', 'Republic of Honduras', 'HN', 'HND', '340', 'yes', '504', '.hn'),
(99, 'Hong Kong', 'Hong Kong', 'HK', 'HKG', '344', 'no', '852', '.hk'),
(100, 'Hungary', 'Hungary', 'HU', 'HUN', '348', 'yes', '36', '.hu'),
(101, 'Iceland', 'Republic of Iceland', 'IS', 'ISL', '352', 'yes', '354', '.is'),
(102, 'India', 'Republic of India', 'IN', 'IND', '356', 'yes', '91', '.in'),
(103, 'Indonesia', 'Republic of Indonesia', 'ID', 'IDN', '360', 'yes', '62', '.id'),
(104, 'Iran', 'Islamic Republic of Iran', 'IR', 'IRN', '364', 'yes', '98', '.ir'),
(105, 'Iraq', 'Republic of Iraq', 'IQ', 'IRQ', '368', 'yes', '964', '.iq'),
(106, 'Ireland', 'Ireland', 'IE', 'IRL', '372', 'yes', '353', '.ie'),
(107, 'Isle of Man', 'Isle of Man', 'IM', 'IMN', '833', 'no', '44', '.im'),
(108, 'Israel', 'State of Israel', 'IL', 'ISR', '376', 'yes', '972', '.il'),
(109, 'Italy', 'Italian Republic', 'IT', 'ITA', '380', 'yes', '39', '.jm'),
(110, 'Jamaica', 'Jamaica', 'JM', 'JAM', '388', 'yes', '1+876', '.jm'),
(111, 'Japan', 'Japan', 'JP', 'JPN', '392', 'yes', '81', '.jp'),
(112, 'Jersey', 'The Bailiwick of Jersey', 'JE', 'JEY', '832', 'no', '44', '.je'),
(113, 'Jordan', 'Hashemite Kingdom of Jordan', 'JO', 'JOR', '400', 'yes', '962', '.jo'),
(114, 'Kazakhstan', 'Republic of Kazakhstan', 'KZ', 'KAZ', '398', 'yes', '7', '.kz'),
(115, 'Kenya', 'Republic of Kenya', 'KE', 'KEN', '404', 'yes', '254', '.ke'),
(116, 'Kiribati', 'Republic of Kiribati', 'KI', 'KIR', '296', 'yes', '686', '.ki'),
(117, 'Kosovo', 'Republic of Kosovo', 'XK', '---', '---', 'some', '381', ''),
(118, 'Kuwait', 'State of Kuwait', 'KW', 'KWT', '414', 'yes', '965', '.kw'),
(119, 'Kyrgyzstan', 'Kyrgyz Republic', 'KG', 'KGZ', '417', 'yes', '996', '.kg'),
(120, 'Laos', 'Lao People''s Democratic Republic', 'LA', 'LAO', '418', 'yes', '856', '.la'),
(121, 'Latvia', 'Republic of Latvia', 'LV', 'LVA', '428', 'yes', '371', '.lv'),
(122, 'Lebanon', 'Republic of Lebanon', 'LB', 'LBN', '422', 'yes', '961', '.lb'),
(123, 'Lesotho', 'Kingdom of Lesotho', 'LS', 'LSO', '426', 'yes', '266', '.ls'),
(124, 'Liberia', 'Republic of Liberia', 'LR', 'LBR', '430', 'yes', '231', '.lr'),
(125, 'Libya', 'Libya', 'LY', 'LBY', '434', 'yes', '218', '.ly'),
(126, 'Liechtenstein', 'Principality of Liechtenstein', 'LI', 'LIE', '438', 'yes', '423', '.li'),
(127, 'Lithuania', 'Republic of Lithuania', 'LT', 'LTU', '440', 'yes', '370', '.lt'),
(128, 'Luxembourg', 'Grand Duchy of Luxembourg', 'LU', 'LUX', '442', 'yes', '352', '.lu'),
(129, 'Macao', 'The Macao Special Administrative Region', 'MO', 'MAC', '446', 'no', '853', '.mo'),
(130, 'Macedonia', 'The Former Yugoslav Republic of Macedonia', 'MK', 'MKD', '807', 'yes', '389', '.mk'),
(131, 'Madagascar', 'Republic of Madagascar', 'MG', 'MDG', '450', 'yes', '261', '.mg'),
(132, 'Malawi', 'Republic of Malawi', 'MW', 'MWI', '454', 'yes', '265', '.mw'),
(133, 'Malaysia', 'Malaysia', 'MY', 'MYS', '458', 'yes', '60', '.my'),
(134, 'Maldives', 'Republic of Maldives', 'MV', 'MDV', '462', 'yes', '960', '.mv'),
(135, 'Mali', 'Republic of Mali', 'ML', 'MLI', '466', 'yes', '223', '.ml'),
(136, 'Malta', 'Republic of Malta', 'MT', 'MLT', '470', 'yes', '356', '.mt'),
(137, 'Marshall Islands', 'Republic of the Marshall Islands', 'MH', 'MHL', '584', 'yes', '692', '.mh'),
(138, 'Martinique', 'Martinique', 'MQ', 'MTQ', '474', 'no', '596', '.mq'),
(139, 'Mauritania', 'Islamic Republic of Mauritania', 'MR', 'MRT', '478', 'yes', '222', '.mr'),
(140, 'Mauritius', 'Republic of Mauritius', 'MU', 'MUS', '480', 'yes', '230', '.mu'),
(141, 'Mayotte', 'Mayotte', 'YT', 'MYT', '175', 'no', '262', '.yt'),
(142, 'Mexico', 'United Mexican States', 'MX', 'MEX', '484', 'yes', '52', '.mx'),
(143, 'Micronesia', 'Federated States of Micronesia', 'FM', 'FSM', '583', 'yes', '691', '.fm'),
(144, 'Moldava', 'Republic of Moldova', 'MD', 'MDA', '498', 'yes', '373', '.md'),
(145, 'Monaco', 'Principality of Monaco', 'MC', 'MCO', '492', 'yes', '377', '.mc'),
(146, 'Mongolia', 'Mongolia', 'MN', 'MNG', '496', 'yes', '976', '.mn'),
(147, 'Montenegro', 'Montenegro', 'ME', 'MNE', '499', 'yes', '382', '.me'),
(148, 'Montserrat', 'Montserrat', 'MS', 'MSR', '500', 'no', '1+664', '.ms'),
(149, 'Morocco', 'Kingdom of Morocco', 'MA', 'MAR', '504', 'yes', '212', '.ma'),
(150, 'Mozambique', 'Republic of Mozambique', 'MZ', 'MOZ', '508', 'yes', '258', '.mz'),
(151, 'Myanmar (Burma)', 'Republic of the Union of Myanmar', 'MM', 'MMR', '104', 'yes', '95', '.mm'),
(152, 'Namibia', 'Republic of Namibia', 'NA', 'NAM', '516', 'yes', '264', '.na'),
(153, 'Nauru', 'Republic of Nauru', 'NR', 'NRU', '520', 'yes', '674', '.nr'),
(154, 'Nepal', 'Federal Democratic Republic of Nepal', 'NP', 'NPL', '524', 'yes', '977', '.np'),
(155, 'Netherlands', 'Kingdom of the Netherlands', 'NL', 'NLD', '528', 'yes', '31', '.nl'),
(156, 'New Caledonia', 'New Caledonia', 'NC', 'NCL', '540', 'no', '687', '.nc'),
(157, 'New Zealand', 'New Zealand', 'NZ', 'NZL', '554', 'yes', '64', '.nz'),
(158, 'Nicaragua', 'Republic of Nicaragua', 'NI', 'NIC', '558', 'yes', '505', '.ni'),
(159, 'Niger', 'Republic of Niger', 'NE', 'NER', '562', 'yes', '227', '.ne'),
(160, 'Nigeria', 'Federal Republic of Nigeria', 'NG', 'NGA', '566', 'yes', '234', '.ng'),
(161, 'Niue', 'Niue', 'NU', 'NIU', '570', 'some', '683', '.nu'),
(162, 'Norfolk Island', 'Norfolk Island', 'NF', 'NFK', '574', 'no', '672', '.nf'),
(163, 'North Korea', 'Democratic People''s Republic of Korea', 'KP', 'PRK', '408', 'yes', '850', '.kp'),
(164, 'Northern Mariana Islands', 'Northern Mariana Islands', 'MP', 'MNP', '580', 'no', '1+670', '.mp'),
(165, 'Norway', 'Kingdom of Norway', 'NO', 'NOR', '578', 'yes', '47', '.no'),
(166, 'Oman', 'Sultanate of Oman', 'OM', 'OMN', '512', 'yes', '968', '.om'),
(167, 'Pakistan', 'Islamic Republic of Pakistan', 'PK', 'PAK', '586', 'yes', '92', '.pk'),
(168, 'Palau', 'Republic of Palau', 'PW', 'PLW', '585', 'yes', '680', '.pw'),
(169, 'Palestine', 'State of Palestine (or Occupied Palestinian Territory)', 'PS', 'PSE', '275', 'some', '970', '.ps'),
(170, 'Panama', 'Republic of Panama', 'PA', 'PAN', '591', 'yes', '507', '.pa'),
(171, 'Papua New Guinea', 'Independent State of Papua New Guinea', 'PG', 'PNG', '598', 'yes', '675', '.pg'),
(172, 'Paraguay', 'Republic of Paraguay', 'PY', 'PRY', '600', 'yes', '595', '.py'),
(173, 'Peru', 'Republic of Peru', 'PE', 'PER', '604', 'yes', '51', '.pe'),
(174, 'Phillipines', 'Republic of the Philippines', 'PH', 'PHL', '608', 'yes', '63', '.ph'),
(175, 'Pitcairn', 'Pitcairn', 'PN', 'PCN', '612', 'no', 'NONE', '.pn'),
(176, 'Poland', 'Republic of Poland', 'PL', 'POL', '616', 'yes', '48', '.pl'),
(177, 'Portugal', 'Portuguese Republic', 'PT', 'PRT', '620', 'yes', '351', '.pt'),
(178, 'Puerto Rico', 'Commonwealth of Puerto Rico', 'PR', 'PRI', '630', 'no', '1+939', '.pr'),
(179, 'Qatar', 'State of Qatar', 'QA', 'QAT', '634', 'yes', '974', '.qa'),
(180, 'Reunion', 'R&eacute;union', 'RE', 'REU', '638', 'no', '262', '.re'),
(181, 'Romania', 'Romania', 'RO', 'ROU', '642', 'yes', '40', '.ro'),
(182, 'Russia', 'Russian Federation', 'RU', 'RUS', '643', 'yes', '7', '.ru'),
(183, 'Rwanda', 'Republic of Rwanda', 'RW', 'RWA', '646', 'yes', '250', '.rw'),
(184, 'Saint Barthelemy', 'Saint Barth&eacute;lemy', 'BL', 'BLM', '652', 'no', '590', '.bl'),
(185, 'Saint Helena', 'Saint Helena, Ascension and Tristan da Cunha', 'SH', 'SHN', '654', 'no', '290', '.sh'),
(186, 'Saint Kitts and Nevis', 'Federation of Saint Christopher and Nevis', 'KN', 'KNA', '659', 'yes', '1+869', '.kn'),
(187, 'Saint Lucia', 'Saint Lucia', 'LC', 'LCA', '662', 'yes', '1+758', '.lc'),
(188, 'Saint Martin', 'Saint Martin', 'MF', 'MAF', '663', 'no', '590', '.mf'),
(189, 'Saint Pierre and Miquelon', 'Saint Pierre and Miquelon', 'PM', 'SPM', '666', 'no', '508', '.pm'),
(190, 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'VC', 'VCT', '670', 'yes', '1+784', '.vc'),
(191, 'Samoa', 'Independent State of Samoa', 'WS', 'WSM', '882', 'yes', '685', '.ws'),
(192, 'San Marino', 'Republic of San Marino', 'SM', 'SMR', '674', 'yes', '378', '.sm'),
(193, 'Sao Tome and Principe', 'Democratic Republic of S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'ST', 'STP', '678', 'yes', '239', '.st'),
(194, 'Saudi Arabia', 'Kingdom of Saudi Arabia', 'SA', 'SAU', '682', 'yes', '966', '.sa'),
(195, 'Senegal', 'Republic of Senegal', 'SN', 'SEN', '686', 'yes', '221', '.sn'),
(196, 'Serbia', 'Republic of Serbia', 'RS', 'SRB', '688', 'yes', '381', '.rs'),
(197, 'Seychelles', 'Republic of Seychelles', 'SC', 'SYC', '690', 'yes', '248', '.sc'),
(198, 'Sierra Leone', 'Republic of Sierra Leone', 'SL', 'SLE', '694', 'yes', '232', '.sl'),
(199, 'Singapore', 'Republic of Singapore', 'SG', 'SGP', '702', 'yes', '65', '.sg'),
(200, 'Sint Maarten', 'Sint Maarten', 'SX', 'SXM', '534', 'no', '1+721', '.sx'),
(201, 'Slovakia', 'Slovak Republic', 'SK', 'SVK', '703', 'yes', '421', '.sk'),
(202, 'Slovenia', 'Republic of Slovenia', 'SI', 'SVN', '705', 'yes', '386', '.si'),
(203, 'Solomon Islands', 'Solomon Islands', 'SB', 'SLB', '090', 'yes', '677', '.sb'),
(204, 'Somalia', 'Somali Republic', 'SO', 'SOM', '706', 'yes', '252', '.so'),
(205, 'South Africa', 'Republic of South Africa', 'ZA', 'ZAF', '710', 'yes', '27', '.za'),
(206, 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', '239', 'no', '500', '.gs'),
(207, 'South Korea', 'Republic of Korea', 'KR', 'KOR', '410', 'yes', '82', '.kr'),
(208, 'South Sudan', 'Republic of South Sudan', 'SS', 'SSD', '728', 'yes', '211', '.ss'),
(209, 'Spain', 'Kingdom of Spain', 'ES', 'ESP', '724', 'yes', '34', '.es'),
(210, 'Sri Lanka', 'Democratic Socialist Republic of Sri Lanka', 'LK', 'LKA', '144', 'yes', '94', '.lk'),
(211, 'Sudan', 'Republic of the Sudan', 'SD', 'SDN', '729', 'yes', '249', '.sd'),
(212, 'Suriname', 'Republic of Suriname', 'SR', 'SUR', '740', 'yes', '597', '.sr'),
(213, 'Svalbard and Jan Mayen', 'Svalbard and Jan Mayen', 'SJ', 'SJM', '744', 'no', '47', '.sj'),
(214, 'Swaziland', 'Kingdom of Swaziland', 'SZ', 'SWZ', '748', 'yes', '268', '.sz'),
(215, 'Sweden', 'Kingdom of Sweden', 'SE', 'SWE', '752', 'yes', '46', '.se'),
(216, 'Switzerland', 'Swiss Confederation', 'CH', 'CHE', '756', 'yes', '41', '.ch'),
(217, 'Syria', 'Syrian Arab Republic', 'SY', 'SYR', '760', 'yes', '963', '.sy'),
(218, 'Taiwan', 'Republic of China (Taiwan)', 'TW', 'TWN', '158', 'former', '886', '.tw'),
(219, 'Tajikistan', 'Republic of Tajikistan', 'TJ', 'TJK', '762', 'yes', '992', '.tj'),
(220, 'Tanzania', 'United Republic of Tanzania', 'TZ', 'TZA', '834', 'yes', '255', '.tz'),
(221, 'Thailand', 'Kingdom of Thailand', 'TH', 'THA', '764', 'yes', '66', '.th'),
(222, 'Timor-Leste (East Timor)', 'Democratic Republic of Timor-Leste', 'TL', 'TLS', '626', 'yes', '670', '.tl'),
(223, 'Togo', 'Togolese Republic', 'TG', 'TGO', '768', 'yes', '228', '.tg'),
(224, 'Tokelau', 'Tokelau', 'TK', 'TKL', '772', 'no', '690', '.tk'),
(225, 'Tonga', 'Kingdom of Tonga', 'TO', 'TON', '776', 'yes', '676', '.to'),
(226, 'Trinidad and Tobago', 'Republic of Trinidad and Tobago', 'TT', 'TTO', '780', 'yes', '1+868', '.tt'),
(227, 'Tunisia', 'Republic of Tunisia', 'TN', 'TUN', '788', 'yes', '216', '.tn'),
(228, 'Turkey', 'Republic of Turkey', 'TR', 'TUR', '792', 'yes', '90', '.tr'),
(229, 'Turkmenistan', 'Turkmenistan', 'TM', 'TKM', '795', 'yes', '993', '.tm'),
(230, 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'TC', 'TCA', '796', 'no', '1+649', '.tc'),
(231, 'Tuvalu', 'Tuvalu', 'TV', 'TUV', '798', 'yes', '688', '.tv'),
(232, 'Uganda', 'Republic of Uganda', 'UG', 'UGA', '800', 'yes', '256', '.ug'),
(233, 'Ukraine', 'Ukraine', 'UA', 'UKR', '804', 'yes', '380', '.ua'),
(234, 'United Arab Emirates', 'United Arab Emirates', 'AE', 'ARE', '784', 'yes', '971', '.ae'),
(235, 'United Kingdom', 'United Kingdom of Great Britain and Nothern Ireland', 'GB', 'GBR', '826', 'yes', '44', '.uk'),
(236, 'United States', 'United States of America', 'US', 'USA', '840', 'yes', '1', '.us'),
(237, 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 'UM', 'UMI', '581', 'no', 'NONE', 'NONE'),
(238, 'Uruguay', 'Eastern Republic of Uruguay', 'UY', 'URY', '858', 'yes', '598', '.uy'),
(239, 'Uzbekistan', 'Republic of Uzbekistan', 'UZ', 'UZB', '860', 'yes', '998', '.uz'),
(240, 'Vanuatu', 'Republic of Vanuatu', 'VU', 'VUT', '548', 'yes', '678', '.vu'),
(241, 'Vatican City', 'State of the Vatican City', 'VA', 'VAT', '336', 'no', '39', '.va'),
(242, 'Venezuela', 'Bolivarian Republic of Venezuela', 'VE', 'VEN', '862', 'yes', '58', '.ve'),
(243, 'Vietnam', 'Socialist Republic of Vietnam', 'VN', 'VNM', '704', 'yes', '84', '.vn'),
(244, 'Virgin Islands, British', 'British Virgin Islands', 'VG', 'VGB', '092', 'no', '1+284', '.vg'),
(245, 'Virgin Islands, US', 'Virgin Islands of the United States', 'VI', 'VIR', '850', 'no', '1+340', '.vi'),
(246, 'Wallis and Futuna', 'Wallis and Futuna', 'WF', 'WLF', '876', 'no', '681', '.wf'),
(247, 'Western Sahara', 'Western Sahara', 'EH', 'ESH', '732', 'no', '212', '.eh'),
(248, 'Yemen', 'Republic of Yemen', 'YE', 'YEM', '887', 'yes', '967', '.ye'),
(249, 'Zambia', 'Republic of Zambia', 'ZM', 'ZMB', '894', 'yes', '260', '.zm'),
(250, 'Zimbabwe', 'Republic of Zimbabwe', 'ZW', 'ZWE', '716', 'yes', '263', '.zw');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `academic_year` varchar(10) NOT NULL,
  `requirements_id` int(11) DEFAULT NULL,
  `course_type` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_type_id` (`course_type`),
  KEY `department_id` (`department_id`),
  KEY `requirements_id` (`requirements_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `code`, `description`, `academic_year`, `requirements_id`, `course_type`, `department_id`, `created`, `modified`, `deleted`) VALUES
(1, 'Public Administration', 'CPAD', 'The first step in starting a career path in the Public Sector. ', '', NULL, 1, 0, 0, 0, 0),
(2, 'Certificate in Business Management', 'CBM', '', '', NULL, 1, 0, 0, 0, 0),
(3, 'Diploma in Public Administration ', 'DPAD ', 'The Diploma in Public Administration is designed to develop graduates with a solid foundation in broad-based areas of Business Management and Public Administration. Communication Skills and ICT skills are stressed, as well as the general course of Ethics.\r\n\r\nThis course provides a platform for students to advance to a higher stage of career development or practicing at this level.', '', NULL, 2, 0, 0, 0, 0),
(4, 'Certificate in Mircofinance Management ', 'CMM', 'Microfinance institutions, particularly those in rural settings require graduates who can manage them more effectively and efficiently. From taking this program, graduates can expect to gain an understanding of operational procedures, the importance of controlling and auditing, as well as good governance and management of such institutions. Both experienced practitioners and students new to microfinance can expect to gain a wealth of knowledge that will offer them the first stage of a quality university education in the sector.', '', NULL, 1, 0, 0, 0, 0),
(5, 'Diploma in Rural Microfinance', 'DRM', 'This Course is intended to meet the increasing demands of the Ugandan and East-African financial sector for well-trained branch- and middle managers to provide microfinance services and expand the range of products, particularly to meet the demand of rural populations. This course attracts both local and international students in the region.\r\n\r\nThe curriculum for this course is founded on three thematic â€œpillarsâ€;\r\n\r\nThe Microfinance (MF) customer - the course draws on the latest literature (â€œPortfolios of Poorâ€) to understand the use of MF services by low-income-households. Moreover, it draws on the comparative advantage of working closely with the schoolâ€™s department of social and community development and the universityâ€™s school of agriculture to impart students with a profound knowledge of the profiles of rural households, communities and their agricultural enterprises.\r\n\r\nOrganizations â€“ theoretical background, evolution, strengths and weaknesses, legal/regulatory and policy context, growth potential of different organizations providing MF services.\r\n\r\nApplied knowledge - principles of economics and economic development, banking and finance, aspects of group formation and dynamics, accounting, loan cycle and portfolio management, liquidity and financial management, operations and controlling.', '', NULL, 2, 0, 0, 0, 0),
(6, 'Bachelor of Arts in Public Administration', 'BPAD', 'In the changing world public administration is a fundamental aspect in meeting the multidimensional challenges of society. The current era in the less developed countries surfaces with social, political and economic dilemmas which pose further greater challenges to the field of public management and administration. This program therefore aims at providing extensive knowledge of the problems of society and a thorough understanding of public administration as a problem solving approach to the public sector. The unique features of this program are that it blends theory and practice through lectures, tutorials, case studies, comparative analyses, group work, independent personal study, research work as well as a public administration practicum in the recess semesters of year one and year two.', '', NULL, 3, 0, 0, 0, 0),
(7, 'Bachelor of Business Management', 'BBMT', 'This program aims to provide an extensive understanding of management in organizations both in the private and public sectors. It provides a blend of theoretical studies with practical aspects of business management through lectures, tutorials, case studies, group work and independent study and research. Being resolute on practical placements in the recess semesters will provide a strong link to the community, which is vital in tackling real needs and challenges. The program has been designed in a way that provides opportunity for students to specialize in.', '', NULL, 3, 0, 0, 0, 0),
(8, 'Bachelor of Science in Banking and Development Finance', 'BBDF', 'This course is intended to meet the demands of the Ugandan changing Banking and financial sector by producing graduate professionals with specific skills in modern banking and financial institutions management.\r\n\r\nThe financial sector in Uganda in recent years has grown rapidly as indicated by the many commercial banks, microfinance institutions, insurance companies and financial cooperatives. There is increased government interest in microfinance considered to be central in government policy drive of â€œProsperity for All-Boona Baggagawaleâ€ introduced in February 2006. This perspective of growth is projected to require a large number of skilled and professional manpower in the financial sector as the policy aims at establishing of at least one SACCO per Sub County.\r\n\r\nAccording to AMFIU (2008) the bulk of the financial service providers in Uganda are unregulated and do lack skilled manpower and appropriate tools to develop financial products which meet the rural clientâ€™s needs. Also in spite of a relatively well developed formal financial sector of banks and a well advanced regulatory system, structural weaknesses and sector outreach depth still pins the Ugandan Banking sector behind the Banking sectors of other East African countries, DED (2009).\r\n\r\nMountains of the Moon University in line with its policy of establishing demand driven courses has established a need-based professional academic program tailored for the financial sector. This three year six-semester Bachelor of Science in Banking and Development Finance (BBDF) course is shaped in an interdisciplinary framework incorporating concepts and skills vital for the effective and efficient management of Banks and other financial institutions.\r\n\r\nOn completion of this course, graduates are competent enough to be absorbed in financial sector as skilled, efficient and professional manpower.', '', NULL, 3, 0, 0, 0, 0),
(9, 'Post-Graduate Diploma in Financial Management ', 'PGD-FM', 'Specifically designed to increase technical and professional knowledge among professionals in the financial sector. Students can expect to gain heightened skills in financial management, accountability, budgeting, auditing and financial monitoring. Practising professionals in mid-career positions stand to gain an exceptional amount of knowledge and skills in the area, which will see them in high demand after graduating.', '', NULL, 4, 0, 0, 0, 0),
(10, 'Postgraduate Diploma in Public Administration', 'PDPAM', '', '', NULL, 4, 0, 0, 0, 0),
(11, 'Post-Graduate Diploma in Human Resource Management ', 'PDGHRM', 'Aspiring and current practitioners in the expanding area of human resource management will gain specialised skills to enable them to build your career from this program. The course attracts students from a variety of backgrounds and many are already working in HR or management and wish to advance their career with an academic qualification. Others who are looking to make a career change, or simply want to understand organizations better will also find this program beneficial.', '', NULL, 4, 0, 0, 0, 0),
(12, ' Master of Public Administration/Management ', 'MPA', 'The MPA and Management program is aimed at those whose ambition is geared towards leading public service management and innovation. This degree design helps the university achieve its goal of blending the quality of a superior program with the flexibility necessary to meet the needs of working adults. It prepares students to serve as managers in the executive arm of local and national government, and increasingly non-governmental organizations (NGO) and nonprofit sectors, by placing a focus on the systematic investigation of executive organization and management. The MPA and Management program combines curricular structure, physical facilities, and real-world fieldwork opportunities to foster the managerial skills needed to meet today''s greater demands for accountability and effectiveness from public and nonprofit organizations. Emphasis is placed upon learning those administrative concepts, processes, and techniques that are associated with managing the public''s business. The program blends the theoretical with the practical dimensions of administration and encourages a broadened academic and professional perspective. It also provides an understanding of the role of public administration in social and political contexts. The demands of work, family, and other obligations leave little time for traditional graduate studies.  For this reason, we have made the MPA and management program more flexible and accessible.\r\n', '', NULL, 5, 0, 0, 0, 0),
(13, 'Master of Business Administration', 'MBA', 'As a busy and ambitious professional, you may want the range of skills and expertise that an MBA can provide, but do not have time to accommodate the schedule of a less flexible MBA programme. Firm on standards and quality, the MBA programme at the Mountains of the Moon University, is the premier qualification for individuals wishing to progress to strategic levels in their organizations.  It aims to provide a rigorous grounding in the key elements of knowledge, skills and understanding necessary for participants to operate effectively as strategic general managers in a business environment.  It is blended distance learning with high quality learning materials and access to tutors and fellow participants. ', '', NULL, 5, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses_modules`
--

CREATE TABLE IF NOT EXISTS `courses_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `courses_id` (`course_id`,`module_id`),
  KEY `course_id` (`course_id`),
  KEY `module_id` (`module_id`),
  KEY `module_id_2` (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses_modules_staff_details`
--

CREATE TABLE IF NOT EXISTS `courses_modules_staff_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `staff_number` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `module_id` (`module_id`),
  KEY `staff_detail_id` (`staff_number`),
  KEY `staff_number` (`staff_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_programmes`
--

CREATE TABLE IF NOT EXISTS `course_programmes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `modified` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course_programmes`
--

INSERT INTO `course_programmes` (`id`, `name`, `modified`, `created`, `deleted`) VALUES
(1, 'Day', 0, 0, 0),
(2, 'Weekend', 0, 0, 0),
(3, 'Long Distance', 0, 0, 0),
(4, 'Evening', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_programmes_courses`
--

CREATE TABLE IF NOT EXISTS `course_programmes_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` int(11) NOT NULL,
  `course_programme` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_id` (`course`,`course_programme`),
  KEY `course_id_2` (`course`),
  KEY `course_programme_id` (`course_programme`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `course_programmes_courses`
--

INSERT INTO `course_programmes_courses` (`id`, `course`, `course_programme`, `created`, `modified`, `deleted`) VALUES
(2, 1, 2, 0, 0, 0),
(5, 4, 2, 0, 0, 0),
(8, 3, 1, 0, 0, 0),
(9, 3, 2, 0, 0, 0),
(10, 2, 1, 0, 0, 0),
(11, 2, 2, 0, 0, 0),
(12, 5, 1, 0, 0, 0),
(13, 6, 2, 0, 0, 0),
(14, 6, 4, 0, 0, 0),
(15, 7, 1, 0, 0, 0),
(16, 7, 2, 0, 0, 0),
(17, 8, 1, 0, 0, 0),
(18, 9, 3, 0, 0, 0),
(19, 10, 3, 0, 0, 0),
(20, 11, 3, 0, 0, 0),
(21, 13, 3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_types`
--

CREATE TABLE IF NOT EXISTS `course_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `requirements_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `course_types`
--

INSERT INTO `course_types` (`id`, `name`, `description`, `requirements_id`, `duration`, `created`, `modified`, `deleted`) VALUES
(1, 'Certificate', '', 0, 1, 0, 0, 0),
(2, 'Diploma', '', 0, 2, 0, 0, 0),
(3, 'Bachelors', '', 0, 3, 0, 0, 0),
(4, 'Post Graduate Diploma', '', 0, 2, 0, 0, 0),
(5, 'Masters', '', 0, 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `campus` text NOT NULL,
  `school_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `school_id` (`school_id`),
  KEY `school_id_2` (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `campus`, `school_id`, `created`, `modified`, `deleted`) VALUES
(1, 'IT Academic Department', 'SAAKA', 2, '2015-04-14 09:22:36', '2015-04-14 09:22:36', 0),
(2, 'IT Technical Department', 'SAAKA', 2, '2015-04-14 09:22:55', '2015-04-14 09:22:55', 0),
(3, 'Business Management', 'SAAKA', 1, '2015-04-14 09:26:27', '2015-04-14 09:26:27', 0),
(4, 'Public Administration', 'SAAKA', 1, '2015-04-14 09:26:40', '2015-04-14 09:26:40', 0),
(5, 'Banking and Microfinance', 'SAAKA', 1, '2015-04-14 09:26:56', '2015-04-14 09:26:56', 0),
(6, 'Department of Education', 'SAAKA', 3, '2015-04-14 09:41:25', '2015-04-14 09:41:25', 0),
(7, 'Department of Science Education', 'SAAKA', 3, '2015-04-14 09:42:01', '2015-04-14 09:42:01', 0),
(8, 'Department of Arts Education', 'SSAKA', 3, '2015-04-14 09:42:17', '2015-04-14 09:42:17', 0),
(9, 'Department of Educational Foundations and Management', 'SAAKA', 3, '2015-04-14 09:42:35', '2015-04-14 09:42:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department_people`
--

CREATE TABLE IF NOT EXISTS `department_people` (
  `id` int(11) NOT NULL,
  `persons_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `title` text NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  KEY `department_id` (`department_id`),
  KEY `persons_id` (`persons_id`),
  KEY `department_id_2` (`department_id`),
  KEY `persons_id_2` (`persons_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disabilities`
--

CREATE TABLE IF NOT EXISTS `disabilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `modified` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `disabilities`
--

INSERT INTO `disabilities` (`id`, `name`, `modified`, `created`, `deleted`) VALUES
(1, 'none', 0, 0, 0),
(2, 'hearing', 0, 0, 0),
(3, 'dyslexia', 0, 0, 0),
(4, 'mobility', 0, 0, 0),
(5, 'blind', 0, 0, 0),
(6, 'diabetes', 0, 0, 0),
(7, 'epilepsy', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `path` text NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL COMMENT 'financial or academic or career or other',
  `size` int(11) NOT NULL,
  `applications_id` int(11) NOT NULL,
  `mime_type` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`),
  KEY `applications_id` (`applications_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `document_persons`
--

CREATE TABLE IF NOT EXISTS `document_persons` (
  `id` int(11) NOT NULL,
  `persons_id` int(11) NOT NULL,
  `documents_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `type` text NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  KEY `persons_id` (`persons_id`),
  KEY `documents_id` (`documents_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `english_proficiencies`
--

CREATE TABLE IF NOT EXISTS `english_proficiencies` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `reading_level` text NOT NULL,
  `speaking_level` text NOT NULL,
  `writing_level` text NOT NULL,
  `certification` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `modified` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2) NOT NULL,
  `level1` char(3) DEFAULT NULL,
  `level2` char(3) DEFAULT NULL,
  `modified` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `level1`, `level2`, `modified`, `created`, `deleted`) VALUES
(1, 'A', NULL, 'A', 0, 0, 0),
(2, 'B', NULL, 'A', 0, 0, 0),
(3, 'C', NULL, 'A', 0, 0, 0),
(4, 'D', NULL, 'A', 0, 0, 0),
(5, 'E', NULL, 'A', 0, 0, 0),
(6, 'O', NULL, 'A', 0, 0, 0),
(7, 'F', NULL, 'A', 0, 0, 0),
(8, 'D1', 'O', 'A', 0, 0, 0),
(9, 'D2', 'O', 'A', 0, 0, 0),
(10, 'C3', 'O', 'A', 0, 0, 0),
(11, 'C4', 'O', 'A', 0, 0, 0),
(12, 'C5', 'O', 'A', 0, 0, 0),
(13, 'C6', 'O', 'A', 0, 0, 0),
(14, 'P7', 'O', 'A', 0, 0, 0),
(15, 'P8', 'O', 'A', 0, 0, 0),
(16, 'F9', 'O', 'A', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE IF NOT EXISTS `institutions` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `can_certify` tinyint(1) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `institution_contacts`
--

CREATE TABLE IF NOT EXISTS `institution_contacts` (
  `id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `institution_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contact_id` (`contact_id`,`institution_id`),
  KEY `institution_id` (`institution_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  `name` text NOT NULL,
  `credit_units` text NOT NULL,
  `type` text NOT NULL COMMENT 'core  or elective',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `title` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `marital_status` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `surname`, `othername`, `date_of_birth`, `citizenship`, `gender`, `title`, `phone_number`, `religion`, `place_of_birth`, `marital_status`, `created`, `modified`, `deleted`) VALUES
(1, 'Baranga', 'Peter', '1998-12-17', 'Uganda', 'Male', 'Lecturer', '+256-782310089', 'Catholic', 'Fort Portal', 'Single', '2015-03-20 11:46:15', '2015-03-20 11:46:15', 0),
(5, '', '', '0000-00-00', '', '', '', '', '', '', '', '2015-04-11 11:57:36', '2015-04-11 11:57:36', 0),
(6, '', '', '0000-00-00', '', '', '', '', '', '', '', '2015-04-11 12:02:55', '2015-04-11 12:02:55', 0),
(7, '', '', '0000-00-00', '', '', '', '', '', '', '', '2015-04-11 12:24:40', '2015-04-11 12:24:40', 0),
(8, '', '', '0000-00-00', '', '', '', '', '', '', '', '2015-04-11 12:24:52', '2015-04-11 12:24:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `people_contacts`
--

CREATE TABLE IF NOT EXISTS `people_contacts` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`,`contact_id`),
  KEY `contact_id` (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `people_disabilities`
--

CREATE TABLE IF NOT EXISTS `people_disabilities` (
  `person_id` int(11) NOT NULL,
  `disability_id` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`person_id`,`disability_id`),
  KEY `disability_id` (`disability_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `people_feedbacks`
--

CREATE TABLE IF NOT EXISTS `people_feedbacks` (
  `person_id` int(11) NOT NULL,
  `feedback_id` int(11) NOT NULL,
  `others` text NOT NULL,
  `modified` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`person_id`,`feedback_id`),
  KEY `feedback_id` (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person_referees`
--

CREATE TABLE IF NOT EXISTS `person_referees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persons_id` int(11) NOT NULL,
  `referees_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persons_id` (`persons_id`),
  KEY `referees_id` (`referees_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `referees`
--

CREATE TABLE IF NOT EXISTS `referees` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `place_of_work` text NOT NULL,
  `position` text NOT NULL,
  `created` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referee_contacts`
--

CREATE TABLE IF NOT EXISTS `referee_contacts` (
  `id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `referee_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contact_id` (`contact_id`,`referee_id`),
  KEY `referee_id` (`referee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE IF NOT EXISTS `requirements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `dependant_requirement` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dependant_requirement` (`dependant_requirement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schema_migrations`
--

CREATE TABLE IF NOT EXISTS `schema_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `schema_migrations`
--

INSERT INTO `schema_migrations` (`id`, `class`, `type`, `created`) VALUES
(1, 'InitMigrations', 'Migrations', '2014-07-17 10:50:05'),
(2, 'ConvertVersionToClassNames', 'Migrations', '2014-07-17 10:50:05'),
(3, 'IncreaseClassNameLength', 'Migrations', '2014-07-17 10:50:06'),
(4, 'InitialMigration', 'app', '2014-07-17 10:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `campus` text NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `university_id` int(11) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `university_id` (`university_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `campus`, `deleted`, `university_id`, `modified`) VALUES
(1, 'School of Business', 'SAAKA', 0, 0, 127),
(2, 'School of Informatics and Computing', 'SAAKA', 0, 0, 127),
(3, 'School of Education', 'SAAKA', 0, 0, 127);

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE IF NOT EXISTS `staff_details` (
  `staff_number` int(11) NOT NULL,
  `NSSF number` int(11) NOT NULL,
  `contract type` text NOT NULL,
  `pay grade` text NOT NULL,
  `person_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`staff_number`),
  UNIQUE KEY `NSSF number` (`NSSF number`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_histories`
--

CREATE TABLE IF NOT EXISTS `staff_histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) DEFAULT NULL,
  `history_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_history`
--

CREATE TABLE IF NOT EXISTS `staff_history` (
  `id` int(11) NOT NULL,
  `staff_number` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `job_description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  `modified` tinyint(4) NOT NULL,
  KEY `department_id` (`department_id`),
  KEY `staff_number` (`staff_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `level1` char(1) DEFAULT NULL,
  `level2` char(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `level1`, `level2`, `created`, `modified`, `deleted`) VALUES
(1, 'English Language', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Literature in English', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Fasihi ya Kiswahili', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Christian Living Today', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'CRE:(St Luke''s Gospel)', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Islamic Religious Education', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'History', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Geography', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Political Education', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Latin', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Acoli', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'German', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'French', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Lango', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Lugbarati', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Luganda', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Lugha ya Kiswahili', 'O', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Arabic', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Runyankore/Rukiga', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Lusoga', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Ateso', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Dhopadhola', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Mathematics', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Additional Mathematics ', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'General Science', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Agric Principles and Practices', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Physics', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Chemistry', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Biology', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Art', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'IPS', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Music', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Health Education', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Clothing and Textiles', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Textile Science and Garment Construction', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Foods & Nutrition', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'IPS Foods & Nutrition', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Home Management', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Woodwork ', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Technical Drawing', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Mechanical Practice', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Metalwork', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Building Construction', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Building Practice', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Electricity and Electronics', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Power and Energy', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Electrical Practice', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Commerce', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Principles of Accounts', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Shorthand (60 w.p.m)', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Typewriting', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Office Practice', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Computer Studies', 'O', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Entrepreneurship Education', 'O', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Economics', NULL, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Christian Religious Education', NULL, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Kiswahili', NULL, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Geometrical & Mechanical Drawing', NULL, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Geometrical & Building Drawing', NULL, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Engineering Metalwork', NULL, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'General Paper', NULL, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Subsidiary Mathematics', NULL, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Subsidiary Computer', NULL, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE IF NOT EXISTS `universities` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` text NOT NULL,
  `date_started` date NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `status`, `date_started`, `modified`, `deleted`, `created`) VALUES
(0, 'Mountains of the Moon', 'Licenced', '2005-01-01', 127, 0, '2015-04-11 12:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','manager','dean','clerk','registrar','finance','staff') NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `deleted`) VALUES
(1, 'matlads', '$2a$10$9NnOYTK./ai/VrGaKnfyBewa2MpRUt6JCAIT4G3oRdMRpZGIlL53m', 'admin', '2015-03-22 10:07:41', '2015-04-14 10:11:04', '2035-01-01 00:00:00'),
(2, 'abid', '$2a$10$lu5Mj1IY1AdpS8XZV8aiV..HCxh31ww/I6eZfKWl5.qTtT89sTa2y', 'finance', '2015-04-11 12:13:00', '2015-04-11 12:13:00', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_histories`
--
ALTER TABLE `academic_histories`
  ADD CONSTRAINT `academic_histories_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `academic_histories_ibfk_2` FOREIGN KEY (`certified_by`) REFERENCES `institutions` (`id`);

--
-- Constraints for table `academic_histories_subjects`
--
ALTER TABLE `academic_histories_subjects`
  ADD CONSTRAINT `academic_histories_subjects_ibfk_2` FOREIGN KEY (`academic_history_id`) REFERENCES `academic_histories` (`id`),
  ADD CONSTRAINT `academic_histories_subjects_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `academic_histories_subjects_ibfk_4` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`);

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`);

--
-- Constraints for table `address_persons`
--
ALTER TABLE `address_persons`
  ADD CONSTRAINT `address_persons_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `address_persons_ibfk_3` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`);

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

--
-- Constraints for table `applications_courses`
--
ALTER TABLE `applications_courses`
  ADD CONSTRAINT `applications_courses_ibfk_1` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`),
  ADD CONSTRAINT `applications_courses_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `campus_departments`
--
ALTER TABLE `campus_departments`
  ADD CONSTRAINT `campus_departments_ibfk_1` FOREIGN KEY (`campus_id`) REFERENCES `campuses` (`id`),
  ADD CONSTRAINT `campus_departments_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `campus_schools`
--
ALTER TABLE `campus_schools`
  ADD CONSTRAINT `campus_schools_ibfk_1` FOREIGN KEY (`campus_id`) REFERENCES `campuses` (`id`),
  ADD CONSTRAINT `campus_schools_ibfk_2` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`);

--
-- Constraints for table `careers`
--
ALTER TABLE `careers`
  ADD CONSTRAINT `careers_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`course_type`) REFERENCES `course_types` (`id`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`requirements_id`) REFERENCES `requirements` (`id`);

--
-- Constraints for table `courses_modules`
--
ALTER TABLE `courses_modules`
  ADD CONSTRAINT `courses_modules_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `courses_modules_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`);

--
-- Constraints for table `courses_modules_staff_details`
--
ALTER TABLE `courses_modules_staff_details`
  ADD CONSTRAINT `courses_modules_staff_details_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `courses_modules_staff_details_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `courses_modules` (`id`),
  ADD CONSTRAINT `courses_modules_staff_details_ibfk_3` FOREIGN KEY (`staff_number`) REFERENCES `staff_details` (`staff_number`);

--
-- Constraints for table `course_programmes_courses`
--
ALTER TABLE `course_programmes_courses`
  ADD CONSTRAINT `course_programmes_courses_ibfk_1` FOREIGN KEY (`course`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_programmes_courses_ibfk_2` FOREIGN KEY (`course_programme`) REFERENCES `course_programmes` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`);

--
-- Constraints for table `department_people`
--
ALTER TABLE `department_people`
  ADD CONSTRAINT `department_people_ibfk_1` FOREIGN KEY (`persons_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `department_people_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `documents_ibfk_2` FOREIGN KEY (`applications_id`) REFERENCES `applications` (`id`);

--
-- Constraints for table `document_persons`
--
ALTER TABLE `document_persons`
  ADD CONSTRAINT `document_persons_ibfk_1` FOREIGN KEY (`persons_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `document_persons_ibfk_2` FOREIGN KEY (`documents_id`) REFERENCES `documents` (`id`);

--
-- Constraints for table `english_proficiencies`
--
ALTER TABLE `english_proficiencies`
  ADD CONSTRAINT `english_proficiencies_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

--
-- Constraints for table `institution_contacts`
--
ALTER TABLE `institution_contacts`
  ADD CONSTRAINT `institution_contacts_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contact_details` (`id`),
  ADD CONSTRAINT `institution_contacts_ibfk_2` FOREIGN KEY (`institution_id`) REFERENCES `institutions` (`id`);

--
-- Constraints for table `people_contacts`
--
ALTER TABLE `people_contacts`
  ADD CONSTRAINT `people_contacts_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `people_contacts_ibfk_2` FOREIGN KEY (`contact_id`) REFERENCES `contact_details` (`id`);

--
-- Constraints for table `people_disabilities`
--
ALTER TABLE `people_disabilities`
  ADD CONSTRAINT `people_disabilities_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `people_disabilities_ibfk_2` FOREIGN KEY (`disability_id`) REFERENCES `disabilities` (`id`);

--
-- Constraints for table `people_feedbacks`
--
ALTER TABLE `people_feedbacks`
  ADD CONSTRAINT `people_feedbacks_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `people_feedbacks_ibfk_2` FOREIGN KEY (`feedback_id`) REFERENCES `feedbacks` (`id`);

--
-- Constraints for table `person_referees`
--
ALTER TABLE `person_referees`
  ADD CONSTRAINT `person_referees_ibfk_1` FOREIGN KEY (`persons_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `person_referees_ibfk_2` FOREIGN KEY (`referees_id`) REFERENCES `referees` (`id`);

--
-- Constraints for table `referee_contacts`
--
ALTER TABLE `referee_contacts`
  ADD CONSTRAINT `referee_contacts_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contact_details` (`id`),
  ADD CONSTRAINT `referee_contacts_ibfk_2` FOREIGN KEY (`referee_id`) REFERENCES `referees` (`id`);

--
-- Constraints for table `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`dependant_requirement`) REFERENCES `requirements` (`id`);

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`);

--
-- Constraints for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD CONSTRAINT `staff_details_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

--
-- Constraints for table `staff_history`
--
ALTER TABLE `staff_history`
  ADD CONSTRAINT `staff_history_ibfk_1` FOREIGN KEY (`staff_number`) REFERENCES `staff_details` (`staff_number`),
  ADD CONSTRAINT `staff_history_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
