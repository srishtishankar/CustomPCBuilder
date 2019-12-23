-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 05:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_components`
--

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `Mother_Board` varchar(20) NOT NULL,
  `Compat_Var_Proc` int(1) NOT NULL,
  `Compat_Var_RAM` int(1) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`Mother_Board`, `Compat_Var_Proc`, `Compat_Var_RAM`, `price`) VALUES
('MSIH6IM', 1, 1, 9799),
('GigaByteH6IM', 1, 1, 5000),
('Asus MLXV2', 2, 2, 6900),
('Asus X 99A', 2, 2, 12000),
('ASRock B450M', 3, 3, 3400);

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE `processor` (
  `Processor` varchar(20) NOT NULL,
  `Compat_Var_MB` int(1) NOT NULL,
  `Compat_Var_RAM` int(1) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`Processor`, `Compat_Var_MB`, `Compat_Var_RAM`, `price`) VALUES
('Inteli5', 1, 1, 15000),
('Inteli3', 1, 1, 12000),
('AMD FX', 2, 2, 10000),
('Athlon', 2, 2, 10000),
('Ryzen', 3, 3, 17000);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `ram` varchar(20) NOT NULL,
  `Compat_Var_Proc` int(1) NOT NULL,
  `Compat_Var_MB` int(1) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`ram`, `Compat_Var_Proc`, `Compat_Var_MB`, `price`) VALUES
('KingstonDDR3', 1, 1, 1000),
('EVMDDR2', 1, 1, 500),
('Hynix DDR3', 2, 2, 1000),
('Samsung DDR3', 2, 2, 1100),
('Kingston 4GB', 3, 3, 1100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
