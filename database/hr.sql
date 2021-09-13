-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 سبتمبر 2021 الساعة 19:21
-- إصدار الخادم: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- بنية الجدول `allowance`
--

CREATE TABLE `allowance` (
  `id` int(11) NOT NULL,
  `AllowanceType` int(11) DEFAULT NULL,
  `AllowanceRatio` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `allowancetype`
--

CREATE TABLE `allowancetype` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `basicinfo`
--

CREATE TABLE `basicinfo` (
  `id` int(11) NOT NULL,
  `Uncode` varchar(20) NOT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `MaritalStatus` int(1) DEFAULT 0,
  `VisaNumber` int(11) DEFAULT NULL,
  `VisaIssuer` varchar(255) DEFAULT NULL,
  `PassportIssue` date DEFAULT NULL,
  `VisaExpiry` date DEFAULT NULL,
  `VisaIssuance` date DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `PassportExpiry` date DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Birthplace` varchar(255) DEFAULT NULL,
  `PassportNumber` varchar(20) DEFAULT NULL,
  `Profession` varchar(255) DEFAULT NULL,
  `IdCardExpiryDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `basicinfo`
--

INSERT INTO `basicinfo` (`id`, `Uncode`, `FullName`, `MaritalStatus`, `VisaNumber`, `VisaIssuer`, `PassportIssue`, `VisaExpiry`, `VisaIssuance`, `DateofBirth`, `PassportExpiry`, `Gender`, `Birthplace`, `PassportNumber`, `Profession`, `IdCardExpiryDate`) VALUES
(29, 'w3333', 'hend ', 1, 54566543, 'السعودية', '2021-09-13', '2021-09-13', '2021-09-13', '2021-09-16', '2021-09-13', 'female', 'سوريا', 'N 032644433', 'N 032644433', '2021-09-13'),
(30, 'e3456', 'هند عكلا', 2, 5484774, 'السعودية', '2021-09-13', '2021-09-13', '2021-09-16', '2021-09-13', '2021-09-13', 'female', 'سوريا', 'N 777777777', 'N 777777777', '2021-09-13'),
(31, 'e3365', 'dania3', 1, 54847444, 'السعودية', '2021-09-17', '2021-09-16', '2021-09-15', '2021-09-14', '2021-09-18', 'male', 'سوريا', 'N 444444444', 'N 444444444', '2021-09-19');

-- --------------------------------------------------------

--
-- بنية الجدول `branch`
--

CREATE TABLE `branch` (
  `b_id` int(11) NOT NULL,
  `b_Name` varchar(255) DEFAULT NULL,
  `b_Code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `BusinessPhoneNumber` int(11) DEFAULT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `CountryOfOrigin` varchar(255) DEFAULT NULL,
  `HouseNumber` int(11) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Password` int(11) DEFAULT NULL,
  `ConfirmPassword` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `contract`
--

CREATE TABLE `contract` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `dependents`
--

CREATE TABLE `dependents` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `RelativeRelation` varchar(255) DEFAULT NULL,
  `Birth` date DEFAULT NULL,
  `InsuranceNumber` int(11) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `SocialStatus` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `IdNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `deprtment`
--

CREATE TABLE `deprtment` (
  `d_id` int(11) NOT NULL,
  `d_Name` varchar(255) DEFAULT NULL,
  `d_Code` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `DiscountType` int(11) DEFAULT NULL,
  `DiscountRate` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `discounttype`
--

CREATE TABLE `discounttype` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `employmentstatus`
--

CREATE TABLE `employmentstatus` (
  `id` int(11) NOT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `InsuranceClass` int(11) DEFAULT NULL,
  `InsuranceCompany` int(11) DEFAULT NULL,
  `InsuranceValidity` int(11) DEFAULT NULL,
  `CardNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `insuranceclass`
--

CREATE TABLE `insuranceclass` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `insurancecompany`
--

CREATE TABLE `insurancecompany` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `insurancevalidity`
--

CREATE TABLE `insurancevalidity` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `Branch` int(11) DEFAULT NULL,
  `EmploymentStatus` int(11) DEFAULT NULL,
  `AppoINTEGERmentDate` date DEFAULT NULL,
  `JobType` varchar(255) DEFAULT NULL,
  `Qualification` varchar(255) DEFAULT NULL,
  `Department` int(11) DEFAULT NULL,
  `DirectManager` int(11) DEFAULT NULL,
  `JobTitle` varchar(255) DEFAULT NULL,
  `Specialization` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `manager`
--

CREATE TABLE `manager` (
  `m_id` int(11) NOT NULL,
  `m_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `TypeContract` int(11) DEFAULT NULL,
  `SalaryAmount` int(11) DEFAULT NULL,
  `DisableSalary` varchar(255) DEFAULT NULL,
  `ReasonSuspension` varchar(255) DEFAULT NULL,
  `SuspensionStart` date DEFAULT NULL,
  `SuspensionEnd` date DEFAULT NULL,
  `BankName` int(11) DEFAULT NULL,
  `IBAN` int(11) DEFAULT NULL,
  `WorkingHours` int(11) DEFAULT NULL,
  `LeaveDays` int(11) DEFAULT NULL,
  `ExcludeAttendance` varchar(255) DEFAULT NULL,
  `Inspection` varchar(255) DEFAULT NULL,
  `SalaryPayment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `salarypayment`
--

CREATE TABLE `salarypayment` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `status`
--

INSERT INTO `status` (`id`, `Name`) VALUES
(1, 'قيد العمل'),
(2, 'متوقف');

-- --------------------------------------------------------

--
-- بنية الجدول `test`
--

CREATE TABLE `test` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(23, 'hend okla');

-- --------------------------------------------------------

--
-- بنية الجدول `tickettype`
--

CREATE TABLE `tickettype` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `TravelDestination` varchar(255) DEFAULT NULL,
  `TicketType` int(11) DEFAULT NULL,
  `NumberOfTickets` int(11) DEFAULT NULL,
  `TicketValue` varchar(255) DEFAULT NULL,
  `DepartureDate` date DEFAULT NULL,
  `ReturnDate` date DEFAULT NULL,
  `ReplacementEmployee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `_contract`
--

CREATE TABLE `_contract` (
  `id` int(11) NOT NULL,
  `ContractCreation` date DEFAULT NULL,
  `ContractExpiry` date DEFAULT NULL,
  `_Text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AllowanceType` (`AllowanceType`);

--
-- Indexes for table `allowancetype`
--
ALTER TABLE `allowancetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basicinfo`
--
ALTER TABLE `basicinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Uncode` (`Uncode`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dependents`
--
ALTER TABLE `dependents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deprtment`
--
ALTER TABLE `deprtment`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DiscountType` (`DiscountType`);

--
-- Indexes for table `discounttype`
--
ALTER TABLE `discounttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employmentstatus`
--
ALTER TABLE `employmentstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `InsuranceClass` (`InsuranceClass`),
  ADD KEY `InsuranceCompany` (`InsuranceCompany`),
  ADD KEY `InsuranceValidity` (`InsuranceValidity`);

--
-- Indexes for table `insuranceclass`
--
ALTER TABLE `insuranceclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurancecompany`
--
ALTER TABLE `insurancecompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurancevalidity`
--
ALTER TABLE `insurancevalidity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Branch` (`Branch`),
  ADD KEY `EmploymentStatus` (`EmploymentStatus`),
  ADD KEY `Department` (`Department`),
  ADD KEY `DirectManager` (`DirectManager`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `TypeContract` (`TypeContract`),
  ADD KEY `BankName` (`BankName`),
  ADD KEY `SalaryPayment` (`SalaryPayment`);

--
-- Indexes for table `salarypayment`
--
ALTER TABLE `salarypayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickettype`
--
ALTER TABLE `tickettype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `TicketType` (`TicketType`),
  ADD KEY `ReplacementEmployee` (`ReplacementEmployee`);

--
-- Indexes for table `_contract`
--
ALTER TABLE `_contract`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basicinfo`
--
ALTER TABLE `basicinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `allowance`
--
ALTER TABLE `allowance`
  ADD CONSTRAINT `allowance_ibfk_1` FOREIGN KEY (`AllowanceType`) REFERENCES `allowancetype` (`id`);

--
-- القيود للجدول `discount`
--
ALTER TABLE `discount`
  ADD CONSTRAINT `discount_ibfk_1` FOREIGN KEY (`DiscountType`) REFERENCES `discounttype` (`id`);

--
-- القيود للجدول `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `insurance_ibfk_1` FOREIGN KEY (`InsuranceClass`) REFERENCES `insuranceclass` (`id`),
  ADD CONSTRAINT `insurance_ibfk_2` FOREIGN KEY (`InsuranceCompany`) REFERENCES `insurancecompany` (`id`),
  ADD CONSTRAINT `insurance_ibfk_3` FOREIGN KEY (`InsuranceValidity`) REFERENCES `insurancevalidity` (`id`);

--
-- القيود للجدول `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`Branch`) REFERENCES `branch` (`b_id`),
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`EmploymentStatus`) REFERENCES `employmentstatus` (`id`),
  ADD CONSTRAINT `job_ibfk_3` FOREIGN KEY (`Department`) REFERENCES `deprtment` (`d_id`),
  ADD CONSTRAINT `job_ibfk_4` FOREIGN KEY (`DirectManager`) REFERENCES `manager` (`m_id`);

--
-- القيود للجدول `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`TypeContract`) REFERENCES `contract` (`id`),
  ADD CONSTRAINT `salary_ibfk_2` FOREIGN KEY (`BankName`) REFERENCES `bank` (`id`),
  ADD CONSTRAINT `salary_ibfk_3` FOREIGN KEY (`SalaryPayment`) REFERENCES `salarypayment` (`id`);

--
-- القيود للجدول `travel`
--
ALTER TABLE `travel`
  ADD CONSTRAINT `travel_ibfk_1` FOREIGN KEY (`TicketType`) REFERENCES `tickettype` (`id`),
  ADD CONSTRAINT `travel_ibfk_2` FOREIGN KEY (`ReplacementEmployee`) REFERENCES `basicinfo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
