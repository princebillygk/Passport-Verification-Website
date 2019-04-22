-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2019 at 08:00 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Id` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `AddressDetails` varchar(512) DEFAULT NULL,
  `AddressHolding` varchar(255) DEFAULT NULL,
  `AddressPost` varchar(255) DEFAULT NULL,
  `AddressThana` varchar(50) DEFAULT NULL,
  `AddressDistrict` varchar(50) DEFAULT NULL,
  `ThanaId` int(11) DEFAULT NULL,
  `DistrictId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `Id` int(11) NOT NULL,
  `ApplicationNo` varchar(20) NOT NULL,
  `ApplicantName` varchar(512) DEFAULT NULL,
  `FatherName` varchar(512) DEFAULT NULL,
  `MotherName` varchar(512) DEFAULT NULL,
  `Nationality` varchar(512) DEFAULT NULL,
  `IsByBirth` tinyint(4) NOT NULL,
  `DOB` datetime(3) DEFAULT NULL,
  `AgeUnder18` tinyint(4) NOT NULL,
  `AddressIdPermanent` int(11) NOT NULL,
  `AddressIdPresent` int(11) NOT NULL,
  `IsPermanentPresentSame` tinyint(4) NOT NULL,
  `IsFirstVerified` tinyint(4) NOT NULL,
  `FirstVerifierId` int(11) DEFAULT NULL,
  `Is2ndVerified` tinyint(4) NOT NULL,
  `SecondndVerifierId` int(11) DEFAULT NULL,
  `IsUrgent` tinyint(4) DEFAULT NULL,
  `Religion` varchar(50) DEFAULT NULL,
  `IsTribial` tinyint(4) DEFAULT NULL,
  `PhotoId` int(11) DEFAULT NULL,
  `NIDOrBirthCertId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `Id` int(11) NOT NULL,
  `Number` varchar(255) DEFAULT NULL,
  `ApplicationId` int(11) NOT NULL,
  `IssueDate` datetime(3) NOT NULL,
  `ExpiryDate` datetime(3) NOT NULL,
  `IssuePlace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thana`
--

CREATE TABLE `thana` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DistrictId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `verifier`
--

CREATE TABLE `verifier` (
  `Id` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Name` varchar(512) NOT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `AddressId` int(11) NOT NULL,
  `ContactNo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Address_ToTable` (`ThanaId`),
  ADD KEY `FK_Address_ToTable_1` (`DistrictId`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `AddressIdPermanent` (`AddressIdPermanent`),
  ADD KEY `AddressIdPresent` (`AddressIdPresent`),
  ADD KEY `FirstVerifierId` (`FirstVerifierId`),
  ADD KEY `SecondndVerifierId` (`SecondndVerifierId`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ApplicationId` (`ApplicationId`);

--
-- Indexes for table `thana`
--
ALTER TABLE `thana`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `DistrictId` (`DistrictId`);

--
-- Indexes for table `verifier`
--
ALTER TABLE `verifier`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Verifier_ToTable` (`AddressId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passport`
--
ALTER TABLE `passport`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thana`
--
ALTER TABLE `thana`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verifier`
--
ALTER TABLE `verifier`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_Address_ToTable` FOREIGN KEY (`ThanaId`) REFERENCES `thana` (`Id`),
  ADD CONSTRAINT `FK_Address_ToTable_1` FOREIGN KEY (`DistrictId`) REFERENCES `district` (`Id`);

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`AddressIdPermanent`) REFERENCES `address` (`Id`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`AddressIdPresent`) REFERENCES `address` (`Id`),
  ADD CONSTRAINT `application_ibfk_3` FOREIGN KEY (`FirstVerifierId`) REFERENCES `verifier` (`Id`),
  ADD CONSTRAINT `application_ibfk_4` FOREIGN KEY (`SecondndVerifierId`) REFERENCES `verifier` (`Id`);

--
-- Constraints for table `passport`
--
ALTER TABLE `passport`
  ADD CONSTRAINT `passport_ibfk_1` FOREIGN KEY (`ApplicationId`) REFERENCES `application` (`Id`);

--
-- Constraints for table `thana`
--
ALTER TABLE `thana`
  ADD CONSTRAINT `thana_ibfk_1` FOREIGN KEY (`DistrictId`) REFERENCES `district` (`Id`);

--
-- Constraints for table `verifier`
--
ALTER TABLE `verifier`
  ADD CONSTRAINT `FK_Verifier_ToTable` FOREIGN KEY (`AddressId`) REFERENCES `address` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
