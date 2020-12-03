-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 02:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '32250170a0dca92d53ec9624f336ca24', '2020-11-21 06:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `bloodID` int(11) NOT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `BGBloodbank` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bloodID`, `BloodGroup`, `BGBloodbank`) VALUES
(2, 'SVP Blood Bank', 'O+'),
(3, 'Karma Blood Bank', 'A+'),
(4, 'M.K.Gandhi Blood Ban', 'A+'),
(5, 'M.K.Gandhi Blood Ban', 'AB+'),
(6, 'M.K.Gandhi Blood Ban', 'A-'),
(7, 'M.K.Gandhi Blood Ban', 'AB-'),
(8, 'St.Teresa Blood Bank', 'AB+'),
(9, 'Karma Blood Bank', 'O+'),
(11, 'St.Teresa Blood Bank', 'O+'),
(13, 'SVP Blood Bank', 'B+'),
(14, 'SVP Blood Bank', 'A+'),
(15, 'SVP Blood Bank', 'A-'),
(16, 'SVP Blood Bank', 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `BBID` int(255) NOT NULL,
  `bbName` varchar(225) NOT NULL,
  `bblocation` varchar(225) NOT NULL,
  `bbcity` varchar(225) NOT NULL,
  `bbpincode` int(6) NOT NULL,
  `bbstate` varchar(225) NOT NULL,
  `bbContactNo` int(255) NOT NULL,
  `bbheadName` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Blood Bank table data';

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`BBID`, `bbName`, `bblocation`, `bbcity`, `bbpincode`, `bbstate`, `bbContactNo`, `bbheadName`) VALUES
(1, 'M.K.Gandhi Blood Bank', '37, New Loha Mandi Rd, Harmada', 'Jaipur', 302013, 'Rajasthan ', 992885944, 'Dr. Vishal Bhatia'),
(2, 'SVP Blood Bank', 'J-2/37, Mahavir Marg, opp. Jai Club, Panch Batti, C Scheme, Ashok Nagar', 'Jaipur', 302001, 'Rajasthan', 961050568, 'Dr. Rajendra Agarwal'),
(3, 'Karma Blood Bank', 'B1, Ashadeep Enclave-A, Opposite Ashadeep Green Avenue, Nilay Kunj Road, Jagatpura', 'Jaipur', 302025, 'Rajasthan', 978435896, 'Mr.Narendra Mittal'),
(4, 'St.Teresa Blood Bank', '11, 34, Girdhar Marg, Sector 11, Malviya Nagar, , Rajasthan 302017', 'Jaipur', 302017, 'Rajasthan', 830662769, 'Dr.Sumit Goyal');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `dID` int(255) NOT NULL,
  `dname` varchar(225) NOT NULL,
  `demailID` varchar(225) NOT NULL,
  `dphoneNO` int(225) NOT NULL,
  `donationCenter` varchar(225) NOT NULL,
  `dob` date NOT NULL,
  `dbloodGroup` varchar(5) NOT NULL,
  `ddate` date NOT NULL,
  `dtime` time NOT NULL,
  `dmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='donor table data';

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`dID`, `dname`, `demailID`, `dphoneNO`, `donationCenter`, `dob`, `dbloodGroup`, `ddate`, `dtime`, `dmessage`) VALUES
(1, 'Rahul sharma', 'rahulsharma123@gmail.com', 766849437, 'M.K.Gandhi Blood Bank', '0000-00-00', 'A+', '0000-00-00', '08:00:00', 'Null'),
(2, 'Pratik agarwal', 'pagarwal234@gmail.com', 982759149, 'SVP Blood Bank', '0000-00-00', 'B+', '0000-00-00', '09:00:00', 'Null'),
(3, 'Ankit garg', 'Ankitg456@gmail.com', 969409155, 'Karma Blood Bank', '0000-00-00', 'B-', '2012-05-20', '00:00:05', 'I may be bit late but will reach there by 5:15'),
(4, 'Ranu mittal', 'Ranum678@gmail.com', 894928472, 'St.Teresa Blood Bank', '0000-00-00', 'O+', '2012-11-20', '11:00:00', 'Null'),
(5, 'Shubham kumar', 'Shubhkum789@gmail.com', 894922027, 'M.K.Gandhi Blood Bank', '0000-00-00', 'AB+', '0000-00-00', '02:00:00', 'Null'),
(6, 'Aman tripathi', 'Amantrip987@gmail.com', 637609817, 'SVP Blood Bank', '0000-00-00', 'O-', '0000-00-00', '10:00:00', 'Null'),
(7, 'Anuj goyal', 'Anujg657@gmail.com', 805818998, 'SVP Blood Bank', '0000-00-00', 'B-', '2012-10-20', '01:00:00', 'Null'),
(8, 'Tanisha singhal', 'Tanishasinghal479@gmail.com', 635015711, 'Karma Blood Bank', '0000-00-00', 'B+', '0000-00-00', '09:00:00', 'Null'),
(9, 'Maya gupta', 'Mayagupta409@gmail.com', 772784056, 'SVP Blood Bank', '0000-00-00', 'AB+', '0000-00-00', '04:00:00', 'Null'),
(10, 'Pankaj soni', 'Pankajsoni876@gmail.com', 855980921, 'SVP Blood Bank', '0000-00-00', 'AB-', '0000-00-00', '06:00:00', 'Null'),
(11, 'Dharmesh patel', 'Dharmeshpatel876@gmail.com', 946877006, 'St.Teresa Blood Bank', '0000-00-00', 'A+', '0000-00-00', '10:00:00', 'Null'),
(12, 'Anisha goyal', 'Anishagoyal498@gmail.com', 941455250, 'SVP Blood Bank', '0000-00-00', 'Unkno', '0000-00-00', '07:00:00', 'My bloodgroup is B+ but I am not sure of it'),
(13, 'Darshan agarwal', 'Darshanagr390@gmail.com', 941455250, 'Karma Blood Bank', '0000-00-00', 'O+', '0001-10-21', '03:00:00', 'Null'),
(14, 'Ashish singhal', 'Anishasinghal580@gmail.com', 935202625, 'St.Teresa Blood Bank', '0000-00-00', 'B+', '2012-05-20', '05:00:00', 'Null'),
(15, 'Ajay tripathi', 'Ajaytripathi290@gmail.com', 963686414, 'SVP Blood Bank', '0000-00-00', 'A-', '0000-00-00', '06:00:00', 'Null'),
(16, 'Akshay chaudhary', 'Akshaychaudhary456@gmail.com', 844106885, 'M.K.Gandhi Blood Bank', '0000-00-00', 'B-', '0001-05-21', '11:00:00', 'Null'),
(17, 'Mukul yadav', 'Mukyad467@gmail.com', 978516994, 'M.K.Gandhi Blood Bank', '0000-00-00', 'O+', '0000-00-00', '01:00:00', 'Null'),
(18, 'Sneha gupta', 'Snehagupta698@gmail.com', 935202624, 'St.Teresa Blood Bank', '0000-00-00', 'AB-', '0000-00-00', '02:00:00', 'Null'),
(19, 'Pallavi sharda', 'Pallavisharda908@gmail.com', 979909337, 'SVP Blood Bank', '0000-00-00', 'A+', '0000-00-00', '09:00:00', 'Null'),
(20, 'Shashank parashar', 'Shashankparashar578@gmail.com', 820904202, 'SVP Blood Bank', '0000-00-00', 'B-', '0001-05-21', '10:00:00', 'Null'),
(21, 'Sumit yadav', 'Sumityadav980@gmail.com', 958793442, 'Karma Blood Bank', '0000-00-00', 'O+', '0000-00-00', '11:00:00', 'Null'),
(22, 'Raj Kumar', 'Rajkumar489@gmail.com', 812806733, 'St.Teresa Blood Bank', '0000-00-00', 'AB+', '2012-01-20', '12:15:00', 'Null'),
(23, 'Kapil Mishra', 'Kapilmishra389@gmail.com', 637789690, 'M.K.Gandhi Blood Bank', '0000-00-00', 'O-', '0000-00-00', '01:00:00', 'Please send Blood Bank Location Maps location to my Phone.'),
(24, 'Renu Goyal', 'Renugoyal590@gmail.com', 701483835, 'SVP Blood Bank', '0000-00-00', 'A-', '0000-00-00', '05:00:00', 'Null'),
(25, 'Neeraj Kumar', 'nkeum345@gmail.com', 946168805, 'SVP Blood Bank', '0000-00-00', 'O+', '0000-00-00', '11:00:00', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `nlentries`
--

CREATE TABLE `nlentries` (
  `eidnl` int(255) NOT NULL,
  `nlemailID` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nlentries`
--

INSERT INTO `nlentries` (`eidnl`, `nlemailID`) VALUES
(1, 'vaibhav123@gmail.com'),
(2, 'vasu123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `pID` int(255) NOT NULL,
  `pName` varchar(225) NOT NULL,
  `pPatientName` varchar(225) NOT NULL,
  `pEmail` varchar(225) NOT NULL,
  `pPhoneNO` int(225) NOT NULL,
  `bloodBank` varchar(225) NOT NULL,
  `pbloodGroup` varchar(5) NOT NULL,
  `pmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='patient table data';

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`pID`, `pName`, `pPatientName`, `pEmail`, `pPhoneNO`, `bloodBank`, `pbloodGroup`, `pmessage`) VALUES
(1, 'Shikhar Nigam', 'Raj Nigam', 'Shikar245@gmail.com', 772607671, 'M.K.Gandhi Blood Bank', 'A+', 'Urgently Required'),
(2, 'Vishal Garg', 'Varsha Sharma', 'Vishalsharma12@gmail.com', 797628950, 'SVP Blood Bank', 'A-', 'Null'),
(4, 'Komal Mehta', 'Vinod Mehta', 'Komal934@gmail.com', 890955946, 'St.Teresa Blood Bank', 'B-', 'Urgently Required'),
(5, 'Dheeraj Goyal', 'Jagdish Goyal', 'Dheeraj876@gmail.com', 954917861, 'Karma Blood Bank', 'AB+', 'Null'),
(6, 'Mahak Gupta', 'Mahesh Gupta', 'Mahak456@gmail.com', 986745235, 'SVP Blood Bank', 'AB-', 'Urgently Required'),
(7, 'Vineet Agarwal', 'Govind Agarwal', 'Vineet345@gmail.com', 953783456, 'St.Teresa Blood Bank', 'O+', 'Null'),
(8, 'Keshav sharma', 'Gaurav Parashar', 'Keshav698@gmail.com', 946245063, 'SVP Blood Bank', 'O-', 'Urgently Required'),
(9, 'Harsh Rathore', 'Girish Rathore', 'Harshr345@gmail.com', 952902328, 'Karma Blood Bank', 'A+', 'Null'),
(10, 'Manish Mittal', 'Prateek Sharma', 'Manishm988@gmail.com', 957683456, 'SVP Blood Bank', 'B-', 'Urgently Required'),
(11, 'Saurabh Shukla', 'Rajeev Shukla', 'Saurabh765@gmail.com', 945237849, 'St.Teresa Blood Bank', 'AB+', 'Null'),
(12, 'Tanuj Patel', 'Bhavesh Patel', 'Tanuj345@gmail.com', 931452683, 'M.K.Gandhi Blood Bank', 'O-', 'Urgently Required'),
(13, 'Rashmi Agarwal', 'Kajal Tripathi', 'Rashmi454@gmail.com', 935367512, 'M.K.Gandhi Blood Bank', 'A-', 'Urgently Required');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`bloodID`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`BBID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`dID`);

--
-- Indexes for table `nlentries`
--
ALTER TABLE `nlentries`
  ADD PRIMARY KEY (`eidnl`) USING BTREE;

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`pID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `bloodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `BBID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `dID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nlentries`
--
ALTER TABLE `nlentries`
  MODIFY `eidnl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `pID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
