-- Database: `vbs`
--
CREATE DATABASE `vbs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vbs`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `isbn` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(20) DEFAULT NULL,
  `author` varchar(10) DEFAULT NULL,
  `publisher` varchar(10) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL,
  `price` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `name`, `author`, `publisher`, `year`, `price`) VALUES
('0079713270', 'VB 2008', 'Tim Tam', 'Microsoft', '1989', 24.00),
('0137491360', 'Java', 'Kava Noway', 'Microsoft', '1985', 70.00),
('0128456000', 'C# .NET', 'Ta Ta', 'Microsoft', '1945', 70.00),
('0211654600', 'Google', 'Sam Soon', 'Microsoft', '2007', 15.00),
('0134443400', 'ASP .NET', 'Sam Java', 'Microsoft', '2008', 90.00),
('0234646000', 'Office 2007', 'Bill Goawa', 'Microsoft', '1998', 80.00),
('5146484000', 'Flash', 'Jim See', 'Microsoft', '2006', 120.00),
('8244435000', 'Election with Java', 'Kavin Rudd', 'Microsoft', '2001', 45.00),
('0211374000', 'Programming for Web', 'Mr Book', 'Microsoft', '2009', 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_no` varchar(4) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `tel_no` varchar(20) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`customer_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_no`, `last_name`, `first_name`, `tel_no`, `password`) VALUES
('ch22', 'Smith', 'Tim', '0856553446', 'password'),
('ch33', 'Nadil', 'Sund', '0856468446', 'password'),
('ch88', 'Winsor', 'Simon', '0853368446', 'password'),
('ch99', 'Lee', 'Chen', '0856462222', 'password'),
('ch11', 'Nadil', 'S', '121123453', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_no` varchar(10) NOT NULL DEFAULT '',
  `customer_no` varchar(10) DEFAULT NULL,
  `date` varchar(8) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`transaction_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_no`, `customer_no`, `date`, `isbn`) VALUES
('ch2428411', 'ch24', '05/14/09', '8244435000'),
('ch2422666', 'ch24', '05/14/09', '5146484000'),
('ch2417141', 'ch24', '05/14/09', '0079713270'),
('ch2230764', 'ch22', '05/14/09', '0134443400'),
('ch2229663', 'ch22', '05/14/09', '0128456000'),
('ch6727416', 'ch67', '05/14/09', '0211374000'),
('ch676513', 'ch67', '05/14/09', '0211374000'),
('ch2729526', 'ch27', '05/14/09', '0134443400'),
('ch2732727', 'ch27', '05/14/09', '0234646000'),
('ch708388', 'ch70', '05/14/09', '5146484000'),
('ch7023469', 'ch70', '05/14/09', '8244435000'),
('ch7028386', 'ch70', '05/14/09', '5146484000'),
('ch7017011', 'ch70', '05/14/09', '8244435000'),
('ch7820203', 'ch78', '05/19/09', '0079713270'),
('ch7825672', 'ch78', '05/19/09', '0137491360'),
('ch1126102', 'ch11', '09/24/09', '0079713270'),
('ch113575', 'ch11', '09/24/09', '0137491360');
