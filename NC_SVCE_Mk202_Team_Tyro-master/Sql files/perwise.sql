-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 02:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `perwise`
--

CREATE TABLE `perwise` (
  `StateName` varchar(10) DEFAULT NULL,
  `DistrictName` varchar(12) DEFAULT NULL,
  `BlockName` varchar(18) DEFAULT NULL,
  `TotalpersondaysworkednonSCST` int(7) DEFAULT NULL,
  `TotalpersondaysworkedbySCs` int(7) DEFAULT NULL,
  `TotalpersondaysworkedbySTs` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perwise`
--

INSERT INTO `perwise` (`StateName`, `DistrictName`, `BlockName`, `TotalpersondaysworkednonSCST`, `TotalpersondaysworkedbySCs`, `TotalpersondaysworkedbySTs`) VALUES
('TAMIL NADU', 'CUDDALORE', 'ANNAGRAMAM', 170235, 70635, 707),
('TAMIL NADU', 'CUDDALORE', 'CUDDALORE', 135781, 75889, 79),
('TAMIL NADU', 'CUDDALORE', 'KAMMAPURAM', 149659, 47977, 950),
('TAMIL NADU', 'CUDDALORE', 'KATTUMANNAR KOIL', 132266, 130212, 624),
('TAMIL NADU', 'CUDDALORE', 'KEERAPALAYAM', 260072, 207730, 1310),
('TAMIL NADU', 'CUDDALORE', 'KUMARATCHI', 134318, 152375, 1453),
('TAMIL NADU', 'CUDDALORE', 'KURINJIPADI', 179828, 115991, 939),
('TAMIL NADU', 'CUDDALORE', 'MANGALUR', 143052, 103239, 52),
('TAMIL NADU', 'CUDDALORE', 'MELBHUVANAGIRI', 199766, 135152, 1288),
('TAMIL NADU', 'CUDDALORE', 'NALLUR', 103022, 76042, 611),
('TAMIL NADU', 'CUDDALORE', 'PANRUTI', 123650, 34897, 85),
('TAMIL NADU', 'CUDDALORE', 'PARANGIPETTAI', 167326, 126517, 2333),
('TAMIL NADU', 'CUDDALORE', 'VRIDHACHALAM', 58183, 36762, 731),
('TAMIL NADU', 'DHARMAPURI', 'DHARMAPURI', 174269, 12427, 902),
('TAMIL NADU', 'DHARMAPURI', 'HARUR', 71930, 28979, 2568),
('TAMIL NADU', 'DHARMAPURI', 'KARIMANGALAM', 158309, 19831, 116),
('TAMIL NADU', 'DHARMAPURI', 'MORAPPUR', 186779, 28115, 616),
('TAMIL NADU', 'DHARMAPURI', 'NALLAMPALLI', 214052, 12186, 207),
('TAMIL NADU', 'DHARMAPURI', 'PALACODE', 281790, 14573, 564),
('TAMIL NADU', 'DHARMAPURI', 'PAPPIREDDIPATTI', 84601, 40208, 39821),
('TAMIL NADU', 'DHARMAPURI', 'PENNAGARAM', 258432, 20455, 1700),
('TAMIL NADU', 'KANCHIPURAM', 'ACHARAPAKKAM', 123457, 93921, 4172),
('TAMIL NADU', 'KANCHIPURAM', 'CHITHAMUR', 94940, 111580, 1539),
('TAMIL NADU', 'KANCHIPURAM', 'KANCHIPURAM', 162500, 72254, 4006),
('TAMIL NADU', 'KANCHIPURAM', 'KATTANKOLATHUR', 79077, 71659, 5187),
('TAMIL NADU', 'KANCHIPURAM', 'KUNDRATHUR', 61824, 59640, 1795),
('TAMIL NADU', 'KANCHIPURAM', 'LATHUR', 85082, 73726, 1031),
('TAMIL NADU', 'KANCHIPURAM', 'MADURANTAKAM', 139786, 192528, 7094),
('TAMIL NADU', 'KANCHIPURAM', 'SRIPERUMBUDUR', 110199, 73449, 1876),
('TAMIL NADU', 'KANCHIPURAM', 'THIRUKALUKUNDRAM', 155807, 75207, 3257),
('TAMIL NADU', 'KANCHIPURAM', 'THIRUPORUR', 77199, 35121, 1698),
('TAMIL NADU', 'KANCHIPURAM', 'THOMAS MALAI', 17981, 3792, 278),
('TAMIL NADU', 'KANCHIPURAM', 'UTHIRAMERUR', 252195, 129438, 3875),
('TAMIL NADU', 'KANCHIPURAM', 'WALAJABAD', 222470, 130140, 2515),
('TAMIL NADU', 'MADURAI', 'ALANGANALLUR', 102809, 30221, 0),
('TAMIL NADU', 'MADURAI', 'CHELLAMPATTI', 229331, 46556, 56),
('TAMIL NADU', 'MADURAI', 'KALLIKUDI', 213005, 32844, 24),
('TAMIL NADU', 'MADURAI', 'KOTTAMPATTI', 237510, 44084, 0),
('TAMIL NADU', 'MADURAI', 'MADURAI EAST', 93199, 45303, 21),
('TAMIL NADU', 'MADURAI', 'MADURAI WEST', 43937, 27934, 383),
('TAMIL NADU', 'MADURAI', 'MELUR', 136467, 28282, 51),
('TAMIL NADU', 'MADURAI', 'SEDAPATTI', 269490, 80024, 66),
('TAMIL NADU', 'MADURAI', 'T.KALLUPATTY', 226485, 78373, 41),
('TAMIL NADU', 'MADURAI', 'THIRUMANGALAM', 251133, 62578, 18),
('TAMIL NADU', 'MADURAI', 'THIRUPPARANKUNDRAM', 92269, 21745, 2194),
('TAMIL NADU', 'MADURAI', 'USILAMPATTI', 200256, 26346, 177),
('TAMIL NADU', 'MADURAI', 'VADIPATTI', 102181, 39259, 108),
('TAMIL NADU', 'NAGAPATTINAM', 'KEELAIYUR', 414978, 282795, 73),
('TAMIL NADU', 'NAGAPATTINAM', 'KILVELUR', 235083, 285738, 1616),
('TAMIL NADU', 'NAGAPATTINAM', 'KOLLIDAM', 245334, 198935, 1344),
('TAMIL NADU', 'NAGAPATTINAM', 'KUTHALAM', 165849, 126186, 359),
('TAMIL NADU', 'NAGAPATTINAM', 'MAYILADUTHURAI', 188315, 189434, 260),
('TAMIL NADU', 'NAGAPATTINAM', 'NAGAPATTINAM', 246672, 193148, 252),
('TAMIL NADU', 'NAGAPATTINAM', 'SEMBANARKOIL', 316587, 244169, 414),
('TAMIL NADU', 'NAGAPATTINAM', 'SIRKALI', 238335, 210148, 503),
('TAMIL NADU', 'NAGAPATTINAM', 'THALAINAYAR', 162754, 148305, 203),
('TAMIL NADU', 'NAGAPATTINAM', 'THIRUMARUGAL', 260704, 289885, 794),
('TAMIL NADU', 'NAGAPATTINAM', 'VEDARANYAM', 266651, 122676, 255),
('Total', '0', '0', 9909171, 5467615, 105191);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;