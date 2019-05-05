-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2019 at 12:29 PM
-- Server version: 8.0.16
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pass_vr`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `applicationNo` varchar(256) NOT NULL,
  `applicantName` varchar(256) NOT NULL,
  `fatherName` varchar(256) NOT NULL,
  `motherName` varchar(256) NOT NULL,
  `nationality` varchar(256) NOT NULL,
  `isByBirth` tinyint(1) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `ageUnder18` tinyint(1) NOT NULL,
  `isUrgent` tinyint(1) NOT NULL,
  `religion` varchar(256) NOT NULL,
  `isTribial` tinyint(1) NOT NULL,
  `presentStreet` varchar(256) NOT NULL,
  `presentPost` varchar(256) NOT NULL,
  `presentThana` varchar(256) NOT NULL,
  `presentDistrict` varchar(256) NOT NULL,
  `permanentStreet` varchar(256) NOT NULL,
  `permanentPost` varchar(256) NOT NULL,
  `permanentThana` varchar(256) NOT NULL,
  `permanentDistrict` varchar(256) NOT NULL,
  `ispresentWCverified` tinyint(1) NOT NULL,
  `ispermanentWCverified` tinyint(1) NOT NULL,
  `isSBpermited` varchar(256) NOT NULL,
  `isSBverified` tinyint(1) NOT NULL,
  `imageType` varchar(10) NOT NULL,
  `SBpermiter` varchar(256) NOT NULL,
  `SBverifier` varchar(256) NOT NULL,
  `presentWCverifier` varchar(256) NOT NULL,
  `permanentWCverifier` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `countryId` int(3) NOT NULL DEFAULT '0',
  `countryAlphaCode` varchar(2) DEFAULT NULL,
  `countryName` varchar(52) DEFAULT NULL,
  `nationality` varchar(39) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countryId`, `countryAlphaCode`, `countryName`, `nationality`) VALUES
(4, 'AF', 'Afghanistan', 'Afghan'),
(8, 'AL', 'Albania', 'Albanian'),
(10, 'AQ', 'Antarctica', 'Antarctic'),
(12, 'DZ', 'Algeria', 'Algerian'),
(16, 'AS', 'American Samoa', 'American Samoan'),
(20, 'AD', 'Andorra', 'Andorran'),
(24, 'AO', 'Angola', 'Angolan'),
(28, 'AG', 'Antigua and Barbuda', 'Antiguan or Barbudan'),
(31, 'AZ', 'Azerbaijan', 'Azerbaijani, Azeri'),
(32, 'AR', 'Argentina', 'Argentine'),
(36, 'AU', 'Australia', 'Australian'),
(40, 'AT', 'Austria', 'Austrian'),
(44, 'BS', 'Bahamas', 'Bahamian'),
(48, 'BH', 'Bahrain', 'Bahraini'),
(50, 'BD', 'Bangladesh', 'Bangladeshi'),
(51, 'AM', 'Armenia', 'Armenian'),
(52, 'BB', 'Barbados', 'Barbadian'),
(56, 'BE', 'Belgium', 'Belgian'),
(60, 'BM', 'Bermuda', 'Bermudian, Bermudan'),
(64, 'BT', 'Bhutan', 'Bhutanese'),
(68, 'BO', 'Bolivia (Plurinational State of)', 'Bolivian'),
(70, 'BA', 'Bosnia and Herzegovina', 'Bosnian or Herzegovinian'),
(72, 'BW', 'Botswana', 'Motswana, Botswanan'),
(74, 'BV', 'Bouvet Island', 'Bouvet Island'),
(76, 'BR', 'Brazil', 'Brazilian'),
(84, 'BZ', 'Belize', 'Belizean'),
(86, 'IO', 'British Indian Ocean Territory', 'BIOT'),
(90, 'SB', 'Solomon Islands', 'Solomon Island'),
(92, 'VG', 'Virgin Islands (British)', 'British Virgin Island'),
(96, 'BN', 'Brunei Darussalam', 'Bruneian'),
(100, 'BG', 'Bulgaria', 'Bulgarian'),
(104, 'MM', 'Myanmar', 'Burmese'),
(108, 'BI', 'Burundi', 'Burundian'),
(112, 'BY', 'Belarus', 'Belarusian'),
(116, 'KH', 'Cambodia', 'Cambodian'),
(120, 'CM', 'Cameroon', 'Cameroonian'),
(124, 'CA', 'Canada', 'Canadian'),
(132, 'CV', 'Cabo Verde', 'Cabo Verdean'),
(136, 'KY', 'Cayman Islands', 'Caymanian'),
(140, 'CF', 'Central African Republic', 'Central African'),
(144, 'LK', 'Sri Lanka', 'Sri Lankan'),
(148, 'TD', 'Chad', 'Chadian'),
(152, 'CL', 'Chile', 'Chilean'),
(156, 'CN', 'China', 'Chinese'),
(158, 'TW', 'Taiwan, Province of China', 'Chinese, Taiwanese'),
(162, 'CX', 'Christmas Island', 'Christmas Island'),
(166, 'CC', 'Cocos (Keeling) Islands', 'Cocos Island'),
(170, 'CO', 'Colombia', 'Colombian'),
(174, 'KM', 'Comoros', 'Comoran, Comorian'),
(175, 'YT', 'Mayotte', 'Mahoran'),
(178, 'CG', 'Congo (Republic of the)', 'Congolese'),
(180, 'CD', 'Congo (Democratic Republic of the)', 'Congolese'),
(184, 'CK', 'Cook Islands', 'Cook Island'),
(188, 'CR', 'Costa Rica', 'Costa Rican'),
(191, 'HR', 'Croatia', 'Croatian'),
(192, 'CU', 'Cuba', 'Cuban'),
(196, 'CY', 'Cyprus', 'Cypriot'),
(203, 'CZ', 'Czech Republic', 'Czech'),
(204, 'BJ', 'Benin', 'Beninese, Beninois'),
(208, 'DK', 'Denmark', 'Danish'),
(212, 'DM', 'Dominica', 'Dominican'),
(214, 'DO', 'Dominican Republic', 'Dominican'),
(218, 'EC', 'Ecuador', 'Ecuadorian'),
(222, 'SV', 'El Salvador', 'Salvadoran'),
(226, 'GQ', 'Equatorial Guinea', 'Equatorial Guinean, Equatoguinean'),
(231, 'ET', 'Ethiopia', 'Ethiopian'),
(232, 'ER', 'Eritrea', 'Eritrean'),
(233, 'EE', 'Estonia', 'Estonian'),
(234, 'FO', 'Faroe Islands', 'Faroese'),
(238, 'FK', 'Falkland Islands (Malvinas)', 'Falkland Island'),
(239, 'GS', 'South Georgia and the South Sandwich Islands', 'South Georgia or South Sandwich Islands'),
(242, 'FJ', 'Fiji', 'Fijian'),
(250, 'FR', 'France', 'French'),
(254, 'GF', 'French Guiana', 'French Guianese'),
(258, 'PF', 'French Polynesia', 'French Polynesian'),
(260, 'TF', 'French Southern Territories', 'French Southern Territories'),
(262, 'DJ', 'Djibouti', 'Djiboutian'),
(266, 'GA', 'Gabon', 'Gabonese'),
(268, 'GE', 'Georgia', 'Georgian'),
(270, 'GM', 'Gambia', 'Gambian'),
(275, 'PS', 'Palestine, State of', 'Palestinian'),
(276, 'DE', 'Germany', 'German'),
(288, 'GH', 'Ghana', 'Ghanaian'),
(292, 'GI', 'Gibraltar', 'Gibraltar'),
(296, 'KI', 'Kiribati', 'I-Kiribati'),
(300, 'GR', 'Greece', 'Greek, Hellenic'),
(304, 'GL', 'Greenland', 'Greenlandic'),
(308, 'GD', 'Grenada', 'Grenadian'),
(312, 'GP', 'Guadeloupe', 'Guadeloupe'),
(316, 'GU', 'Guam', 'Guamanian, Guambat'),
(320, 'GT', 'Guatemala', 'Guatemalan'),
(324, 'GN', 'Guinea', 'Guinean'),
(328, 'GY', 'Guyana', 'Guyanese'),
(332, 'HT', 'Haiti', 'Haitian'),
(334, 'HM', 'Heard Island and McDonald Islands', 'Heard Island or McDonald Islands'),
(336, 'VA', 'Vatican City State', 'Vatican'),
(340, 'HN', 'Honduras', 'Honduran'),
(344, 'HK', 'Hong Kong', 'Hong Kong, Hong Kongese'),
(348, 'HU', 'Hungary', 'Hungarian, Magyar'),
(352, 'IS', 'Iceland', 'Icelandic'),
(356, 'IN', 'India', 'Indian'),
(360, 'ID', 'Indonesia', 'Indonesian'),
(364, 'IR', 'Iran', 'Iranian, Persian'),
(368, 'IQ', 'Iraq', 'Iraqi'),
(372, 'IE', 'Ireland', 'Irish'),
(376, 'IL', 'Israel', 'Israeli'),
(380, 'IT', 'Italy', 'Italian'),
(384, 'CI', 'Côte d\'Ivoire', 'Ivorian'),
(388, 'JM', 'Jamaica', 'Jamaican'),
(392, 'JP', 'Japan', 'Japanese'),
(398, 'KZ', 'Kazakhstan', 'Kazakhstani, Kazakh'),
(400, 'JO', 'Jordan', 'Jordanian'),
(404, 'KE', 'Kenya', 'Kenyan'),
(408, 'KP', 'Korea (Democratic People\'s Republic of)', 'North Korean'),
(410, 'KR', 'Korea (Republic of)', 'South Korean'),
(414, 'KW', 'Kuwait', 'Kuwaiti'),
(417, 'KG', 'Kyrgyzstan', 'Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz'),
(418, 'LA', 'Lao People\'s Democratic Republic', 'Lao, Laotian'),
(422, 'LB', 'Lebanon', 'Lebanese'),
(426, 'LS', 'Lesotho', 'Basotho'),
(428, 'LV', 'Latvia', 'Latvian'),
(430, 'LR', 'Liberia', 'Liberian'),
(434, 'LY', 'Libya', 'Libyan'),
(438, 'LI', 'Liechtenstein', 'Liechtenstein'),
(440, 'LT', 'Lithuania', 'Lithuanian'),
(442, 'LU', 'Luxembourg', 'Luxembourg, Luxembourgish'),
(446, 'MO', 'Macao', 'Macanese, Chinese'),
(450, 'MG', 'Madagascar', 'Malagasy'),
(454, 'MW', 'Malawi', 'Malawian'),
(458, 'MY', 'Malaysia', 'Malaysian'),
(462, 'MV', 'Maldives', 'Maldivian'),
(466, 'ML', 'Mali', 'Malian, Malinese'),
(470, 'MT', 'Malta', 'Maltese'),
(474, 'MQ', 'Martinique', 'Martiniquais, Martinican'),
(478, 'MR', 'Mauritania', 'Mauritanian'),
(480, 'MU', 'Mauritius', 'Mauritian'),
(484, 'MX', 'Mexico', 'Mexican'),
(496, 'MN', 'Mongolia', 'Mongolian'),
(498, 'MD', 'Moldova (Republic of)', 'Moldovan'),
(499, 'ME', 'Montenegro', 'Montenegrin'),
(500, 'MS', 'Montserrat', 'Montserratian'),
(504, 'MA', 'Morocco', 'Moroccan'),
(508, 'MZ', 'Mozambique', 'Mozambican'),
(512, 'OM', 'Oman', 'Omani'),
(516, 'NA', 'Namibia', 'Namibian'),
(520, 'NR', 'Nauru', 'Nauruan'),
(524, 'NP', 'Nepal', 'Nepali, Nepalese'),
(528, 'NL', 'Netherlands', 'Dutch, Netherlandic'),
(533, 'AW', 'Aruba', 'Aruban'),
(534, 'SX', 'Sint Maarten (Dutch part)', 'Sint Maarten'),
(535, 'BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire'),
(540, 'NC', 'New Caledonia', 'New Caledonian'),
(548, 'VU', 'Vanuatu', 'Ni-Vanuatu, Vanuatuan'),
(554, 'NZ', 'New Zealand', 'New Zealand, NZ'),
(558, 'NI', 'Nicaragua', 'Nicaraguan'),
(562, 'NE', 'Niger', 'Nigerien'),
(566, 'NG', 'Nigeria', 'Nigerian'),
(570, 'NU', 'Niue', 'Niuean'),
(574, 'NF', 'Norfolk Island', 'Norfolk Island'),
(578, 'NO', 'Norway', 'Norwegian'),
(580, 'MP', 'Northern Mariana Islands', 'Northern Marianan'),
(581, 'UM', 'United States Minor Outlying Islands', 'American'),
(583, 'FM', 'Micronesia (Federated States of)', 'Micronesian'),
(584, 'MH', 'Marshall Islands', 'Marshallese'),
(585, 'PW', 'Palau', 'Palauan'),
(586, 'PK', 'Pakistan', 'Pakistani'),
(591, 'PA', 'Panama', 'Panamanian'),
(598, 'PG', 'Papua New Guinea', 'Papua New Guinean, Papuan'),
(600, 'PY', 'Paraguay', 'Paraguayan'),
(604, 'PE', 'Peru', 'Peruvian'),
(608, 'PH', 'Philippines', 'Philippine, Filipino'),
(612, 'PN', 'Pitcairn', 'Pitcairn Island'),
(616, 'PL', 'Poland', 'Polish'),
(620, 'PT', 'Portugal', 'Portuguese'),
(624, 'GW', 'Guinea-Bissau', 'Bissau-Guinean'),
(626, 'TL', 'Timor-Leste', 'Timorese'),
(630, 'PR', 'Puerto Rico', 'Puerto Rican'),
(634, 'QA', 'Qatar', 'Qatari'),
(643, 'RU', 'Russian Federation', 'Russian'),
(646, 'RW', 'Rwanda', 'Rwandan'),
(654, 'SH', 'Saint Helena, Ascension and Tristan da Cunha', 'Saint Helenian'),
(659, 'KN', 'Saint Kitts and Nevis', 'Kittitian or Nevisian'),
(660, 'AI', 'Anguilla', 'Anguillan'),
(662, 'LC', 'Saint Lucia', 'Saint Lucian'),
(663, 'MF', 'Saint Martin (French part)', 'Saint-Martinoise'),
(666, 'PM', 'Saint Pierre and Miquelon', 'Saint-Pierrais or Miquelonnais'),
(670, 'VC', 'Saint Vincent and the Grenadines', 'Saint Vincentian, Vincentian'),
(674, 'SM', 'San Marino', 'Sammarinese'),
(682, 'SA', 'Saudi Arabia', 'Saudi, Saudi Arabian'),
(686, 'SN', 'Senegal', 'Senegalese'),
(688, 'RS', 'Serbia', 'Serbian'),
(690, 'SC', 'Seychelles', 'Seychellois'),
(694, 'SL', 'Sierra Leone', 'Sierra Leonean'),
(702, 'SG', 'Singapore', 'Singaporean'),
(703, 'SK', 'Slovakia', 'Slovak'),
(704, 'VN', 'Vietnam', 'Vietnamese'),
(705, 'SI', 'Slovenia', 'Slovenian, Slovene'),
(706, 'SO', 'Somalia', 'Somali, Somalian'),
(710, 'ZA', 'South Africa', 'South African'),
(716, 'ZW', 'Zimbabwe', 'Zimbabwean'),
(724, 'ES', 'Spain', 'Spanish'),
(728, 'SS', 'South Sudan', 'South Sudanese'),
(729, 'SD', 'Sudan', 'Sudanese'),
(732, 'EH', 'Western Sahara', 'Sahrawi, Sahrawian, Sahraouian'),
(740, 'SR', 'Suriname', 'Surinamese'),
(744, 'SJ', 'Svalbard and Jan Mayen', 'Svalbard'),
(748, 'SZ', 'Swaziland', 'Swazi'),
(752, 'SE', 'Sweden', 'Swedish'),
(756, 'CH', 'Switzerland', 'Swiss'),
(760, 'SY', 'Syrian Arab Republic', 'Syrian'),
(762, 'TJ', 'Tajikistan', 'Tajikistani'),
(764, 'TH', 'Thailand', 'Thai'),
(768, 'TG', 'Togo', 'Togolese'),
(772, 'TK', 'Tokelau', 'Tokelauan'),
(776, 'TO', 'Tonga', 'Tongan'),
(780, 'TT', 'Trinidad and Tobago', 'Trinidadian or Tobagonian'),
(784, 'AE', 'United Arab Emirates', 'Emirati, Emirian, Emiri'),
(788, 'TN', 'Tunisia', 'Tunisian'),
(792, 'TR', 'Turkey', 'Turkish'),
(795, 'TM', 'Turkmenistan', 'Turkmen'),
(796, 'TC', 'Turks and Caicos Islands', 'Turks and Caicos Island'),
(798, 'TV', 'Tuvalu', 'Tuvaluan'),
(800, 'UG', 'Uganda', 'Ugandan'),
(804, 'UA', 'Ukraine', 'Ukrainian'),
(807, 'MK', 'Macedonia (the former Yugoslav Republic of)', 'Macedonian'),
(818, 'EG', 'Egypt', 'Egyptian'),
(826, 'GB', 'United Kingdom of Great Britain and Northern Ireland', 'British, UK'),
(831, 'GG', 'Guernsey', 'Channel Island'),
(832, 'JE', 'Jersey', 'Channel Island'),
(833, 'IM', 'Isle of Man', 'Manx'),
(834, 'TZ', 'Tanzania, United Republic of', 'Tanzanian'),
(840, 'US', 'United States of America', 'American'),
(850, 'VI', 'Virgin Islands (U.S.)', 'U.S. Virgin Island'),
(858, 'UY', 'Uruguay', 'Uruguayan'),
(860, 'UZ', 'Uzbekistan', 'Uzbekistani, Uzbek'),
(862, 'VE', 'Venezuela (Bolivarian Republic of)', 'Venezuelan'),
(876, 'WF', 'Wallis and Futuna', 'Wallis and Futuna, Wallisian or Futunan'),
(882, 'WS', 'Samoa', 'Samoan'),
(887, 'YE', 'Yemen', 'Yemeni'),
(894, 'ZM', 'Zambia', 'Zambian');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`Id`, `Name`) VALUES
(0, 'Patuakhali'),
(1, 'Barguna'),
(2, 'Barisal'),
(3, 'Bhola'),
(4, 'Jhalokati'),
(7, 'Pirojpur'),
(8, 'Bandarban'),
(9, 'Brahmanbaria'),
(10, 'Chandpur'),
(11, 'Chittagong'),
(12, 'Comilla'),
(13, 'Cox Bazar'),
(14, 'Feni'),
(15, 'Khagrachhari'),
(16, 'Lakshmipur'),
(17, 'Noakhali'),
(18, 'Rangamati'),
(19, 'Dhaka'),
(20, 'Faridpur'),
(21, 'Gazipur'),
(22, 'Gopalganj'),
(23, 'Kishoreganj'),
(24, 'Madaripur'),
(25, 'Manikganj'),
(26, 'Munshiganj'),
(27, 'Narayanganj'),
(28, 'Narsingdi'),
(29, 'Rajbari'),
(30, 'Shariatpur'),
(31, 'Tangail'),
(32, 'Bagerhat'),
(33, 'Chuadanga'),
(34, 'Jessore'),
(35, 'Jhenaidah'),
(36, 'Khulna'),
(37, 'Kushtia'),
(38, 'Magura'),
(39, 'Meherpur'),
(40, 'Narail'),
(41, 'Satkhira'),
(42, 'Jamalpur'),
(43, 'Mymensingh'),
(44, 'Netrokona'),
(45, 'Sherpur'),
(46, 'Bogra'),
(47, 'Joypurhat'),
(48, 'Naogaon'),
(49, 'Natore'),
(50, 'Chapai Nawabganj'),
(51, 'Pabna'),
(52, 'Rajshahi'),
(53, 'Sirajganj'),
(54, 'Dinajpur'),
(55, 'Gaibandha'),
(56, 'Kurigram'),
(57, 'Lalmonirhat'),
(58, 'Nilphamari'),
(59, 'Panchagarh'),
(60, 'Rangpur'),
(61, 'Thakurgaon'),
(62, 'Habiganj'),
(63, 'Moulvibazar'),
(64, 'Sunamganj'),
(65, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `applicationNo` varchar(256) NOT NULL,
  `application_date` date DEFAULT NULL,
  `publishdate_estimated` date NOT NULL,
  `publishdate_actual` date DEFAULT NULL,
  `expired_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` int(11) NOT NULL,
  `religion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `religion`) VALUES
(2, 'Jainism'),
(3, 'Buddhism'),
(4, 'Hinduism'),
(5, 'Sikhism'),
(6, 'Christianity'),
(7, 'Muslim');

-- --------------------------------------------------------

--
-- Table structure for table `sbverifier`
--

CREATE TABLE `sbverifier` (
  `Id` int(11) NOT NULL,
  `userid` varchar(256) NOT NULL,
  `Name` varchar(512) NOT NULL,
  `password` varchar(256) NOT NULL,
  `ContactNo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sbverifier`
--

INSERT INTO `sbverifier` (`Id`, `userid`, `Name`, `password`, `ContactNo`) VALUES
(1, 'p123', 'police123', '123police', '017111100000'),
(2, 'p234', 'police234', '234police', '017111100000'),
(3, 'p345', 'police345', '345police', '017111100000'),
(4, 'p456', 'police456', '456police', '017111100000'),
(5, 'p567', 'police567', '567police', '017111100000');

-- --------------------------------------------------------

--
-- Table structure for table `thana`
--

CREATE TABLE `thana` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DistrictId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thana`
--

INSERT INTO `thana` (`Id`, `Name`, `DistrictId`) VALUES
(1, 'Dhamrai', 19),
(2, 'Dohar', 19),
(3, 'Keraniganj', 19),
(4, 'Nawabganj', 19),
(5, 'Savar', 19),
(6, 'Tejgaon Circle', 19),
(7, 'Gazipur Sadar', 19),
(8, 'Kaliakair', 19),
(9, 'Kaliganj', 19),
(10, 'Kapasia', 19),
(11, 'Sreepur', 19),
(12, 'Gopalganj Sadar', 19),
(13, 'Kashiani', 19),
(14, 'Kotalipara', 19),
(15, 'Muksudpur', 19),
(16, 'Tungipara', 19),
(17, 'Austagram', 19),
(18, 'Bajitpur', 19),
(19, 'Bhairab', 19),
(20, 'Hossainpur', 19),
(21, 'Itna', 19),
(22, 'Karimganj', 19),
(23, 'Katiadi', 19),
(24, 'Kishoreganj Sadar', 19),
(25, 'Kuliarchar', 19),
(26, 'Mithamain', 19),
(27, 'Nikli', 19),
(28, 'Pakundia', 19),
(29, 'Tarail', 19),
(30, 'Rajoir', 19),
(31, 'Madaripur Sadar', 19),
(32, 'Kalkini', 19),
(33, 'Shibchar', 19),
(34, 'Daulatpur', 19),
(35, 'Ghior', 19),
(36, 'Harirampur', 19),
(37, 'Manikgonj Sadar', 19),
(38, 'Saturia', 19),
(39, 'Shivalaya', 19),
(40, 'Singair', 19),
(41, 'Gazaria', 19),
(42, 'Lohajang', 19),
(43, 'Munshiganj Sadar', 19),
(44, 'Sirajdikhan', 19),
(45, 'Sreenagar', 19),
(46, 'Tongibari', 19),
(47, 'Araihazar', 19),
(48, 'Bandar', 19),
(49, 'Narayanganj Sadar', 19),
(50, 'Rupganj', 19),
(51, 'Sonargaon', 19),
(52, 'Baliakandi', 19),
(53, 'Goalandaghat', 19),
(54, 'Pangsha', 19),
(55, 'Rajbari Sadar', 19),
(56, 'Kalukhali', 19),
(57, 'Bhedarganj', 19),
(58, 'Damudya', 19),
(59, 'Gosairhat', 19),
(60, 'Naria', 19),
(61, 'Shariatpur Sadar', 19),
(62, 'Zajira', 19),
(63, 'Shakhipur', 19),
(64, 'Alfadanga', 19),
(65, 'Bhanga', 19),
(66, 'Boalmari', 19),
(67, 'Charbhadrasan', 19),
(68, 'Faridpur Sadar', 19),
(69, 'Madhukhali', 19),
(70, 'Nagarkanda', 19),
(71, 'Sadarpur', 19),
(72, 'Saltha', 19),
(73, 'Gopalpur', 19),
(74, 'Basail', 19),
(75, 'Bhuapur', 19),
(76, 'Delduar', 19),
(77, 'Ghatail', 19),
(78, 'Kalihati', 19),
(79, 'Madhupur', 19),
(80, 'Mirzapur', 19),
(81, 'Nagarpur', 19),
(82, 'Sakhipur', 19),
(83, 'Dhanbari', 19),
(84, 'Tangail Sadar', 19),
(85, 'Narsingdi Sadar', 19),
(86, 'Belabo', 19),
(87, 'Monohardi', 19),
(88, 'Palash', 19),
(89, 'Raipura', 19),
(90, 'Shibpur', 19);

-- --------------------------------------------------------

--
-- Table structure for table `wcverifier`
--

CREATE TABLE `wcverifier` (
  `Id` int(11) NOT NULL,
  `userid` varchar(256) NOT NULL,
  `Name` varchar(512) NOT NULL,
  `password` varchar(256) NOT NULL,
  `ContactNo` varchar(30) DEFAULT NULL,
  `postCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wcverifier`
--

INSERT INTO `wcverifier` (`Id`, `userid`, `Name`, `password`, `ContactNo`, `postCode`) VALUES
(1, 'w123', 'wc123', '123wc', '017111100000', 5000),
(2, 'w234', 'wc234', '234wc', '017111100000', 1031),
(3, 'w345', 'wc345', '345wc', '017111100000', 7248),
(4, 'w456', 'wc456', '456wc', '017111100000', 5246),
(5, 'w567', 'wc567', '567wc', '017111100000', 7336);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicationNo` (`applicationNo`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countryId`),
  ADD UNIQUE KEY `alpha_2_code` (`countryAlphaCode`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`applicationNo`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbverifier`
--
ALTER TABLE `sbverifier`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `thana`
--
ALTER TABLE `thana`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `DistrictId` (`DistrictId`);

--
-- Indexes for table `wcverifier`
--
ALTER TABLE `wcverifier`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sbverifier`
--
ALTER TABLE `sbverifier`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `thana`
--
ALTER TABLE `thana`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `wcverifier`
--
ALTER TABLE `wcverifier`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `thana`
--
ALTER TABLE `thana`
  ADD CONSTRAINT `thana_ibfk_1` FOREIGN KEY (`DistrictId`) REFERENCES `district` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
