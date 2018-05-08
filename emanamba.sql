-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 11:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emanamba`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `busID` int(11) NOT NULL,
  `regPlate` varchar(100) NOT NULL,
  `capacity` int(100) NOT NULL,
  `departureTown` varchar(100) NOT NULL,
  `departureDate` varchar(100) NOT NULL,
  `destinationTown` varchar(100) NOT NULL,
  `returnDate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`busID`, `regPlate`, `capacity`, `departureTown`, `departureDate`, `destinationTown`, `returnDate`) VALUES
(406, 'KBS 797X', 51, 'Bomet', '2018-05-15', 'Bondo', '2018-05-24'),
(407, 'KBH 393E', 20, 'Bomet', '2018-05-15', 'Bondo', '2018-05-24'),
(408, 'KBF 210H', 51, 'Bomet', '2018-05-15', 'Bujumbura', '2018-05-20'),
(409, 'KBX 177W', 20, 'Bomet', '2018-05-15', 'Bujumbura', '2018-05-21'),
(410, 'KBH 591F', 51, 'Bomet', '2018-05-15', 'Bumala', '2018-05-26'),
(411, 'KBU 261X', 20, 'Bomet', '2018-05-15', 'Bumala', '2018-05-25'),
(412, 'KBJ 796N', 51, 'Bomet', '2018-05-15', 'Bungoma', '2018-05-21'),
(413, 'KBT 779Q', 20, 'Bomet', '2018-05-15', 'Bungoma', '2018-05-21'),
(414, 'KBF 734S', 51, 'Bomet', '2018-05-15', 'Busia', '2018-05-25'),
(415, 'KBA 459U', 20, 'Bomet', '2018-05-15', 'Busia', '2018-05-22'),
(416, 'KBJ 771N', 51, 'Bomet', '2018-05-15', 'Chalinze', '2018-05-24'),
(417, 'KBM 317R', 20, 'Bomet', '2018-05-15', 'Chalinze', '2018-05-26'),
(418, 'KBQ 637M', 51, 'Bomet', '2018-05-15', 'Dar Es Salaam', '2018-05-22'),
(419, 'KBH 290A', 20, 'Bomet', '2018-05-15', 'Dar Es Salaam', '2018-05-24'),
(420, 'KBL 588M', 51, 'Bomet', '2018-05-15', 'Eldoret', '2018-05-22'),
(421, 'KBJ 103E', 20, 'Bomet', '2018-05-15', 'Eldoret', '2018-05-23'),
(422, 'KBU 433Y', 51, 'Bomet', '2018-05-15', 'Garissa', '2018-05-20'),
(423, 'KBX 705Y', 20, 'Bomet', '2018-05-15', 'Garissa', '2018-05-26'),
(424, 'KBY 459S', 51, 'Bomet', '2018-05-15', 'Goma', '2018-05-25'),
(425, 'KBR 381N', 20, 'Bomet', '2018-05-15', 'Goma', '2018-05-20'),
(426, 'KBW 356F', 51, 'Bondo', '2018-05-15', 'Bujumbura', '2018-05-21'),
(427, 'KBZ 418T', 20, 'Bondo', '2018-05-15', 'Bujumbura', '2018-05-22'),
(428, 'KBA 408K', 51, 'Bondo', '2018-05-15', 'Bumala', '2018-05-21'),
(429, 'KBQ 272W', 20, 'Bondo', '2018-05-15', 'Bumala', '2018-05-20'),
(430, 'KBF 617R', 51, 'Bondo', '2018-05-15', 'Bungoma', '2018-05-25'),
(431, 'KBV 331S', 20, 'Bondo', '2018-05-15', 'Bungoma', '2018-05-22'),
(432, 'KBZ 156W', 51, 'Bondo', '2018-05-15', 'Busia', '2018-05-25'),
(433, 'KBL 099M', 20, 'Bondo', '2018-05-15', 'Busia', '2018-05-23'),
(434, 'KBC 648L', 51, 'Bondo', '2018-05-15', 'Chalinze', '2018-05-20'),
(435, 'KBS 816A', 20, 'Bondo', '2018-05-15', 'Chalinze', '2018-05-20'),
(436, 'KBA 447G', 51, 'Bondo', '2018-05-15', 'Dar Es Salaam', '2018-05-25'),
(437, 'KBK 985Q', 20, 'Bondo', '2018-05-15', 'Dar Es Salaam', '2018-05-26'),
(438, 'KBS 463V', 51, 'Bondo', '2018-05-15', 'Eldoret', '2018-05-24'),
(439, 'KBW 156A', 20, 'Bondo', '2018-05-15', 'Eldoret', '2018-05-24'),
(440, 'KBM 872Y', 51, 'Bondo', '2018-05-15', 'Garissa', '2018-05-23'),
(441, 'KBU 443N', 20, 'Bondo', '2018-05-15', 'Garissa', '2018-05-22'),
(442, 'KBH 504C', 51, 'Bondo', '2018-05-15', 'Goma', '2018-05-22'),
(443, 'KBN 494Y', 20, 'Bondo', '2018-05-15', 'Goma', '2018-05-23'),
(444, 'KBN 594D', 51, 'Bujumbura', '2018-05-15', 'Bumala', '2018-05-21'),
(445, 'KBV 514M', 20, 'Bujumbura', '2018-05-15', 'Bumala', '2018-05-20'),
(446, 'KBD 983M', 51, 'Bujumbura', '2018-05-15', 'Bungoma', '2018-05-24'),
(447, 'KBZ 151Z', 20, 'Bujumbura', '2018-05-15', 'Bungoma', '2018-05-25'),
(448, 'KBM 726B', 51, 'Bujumbura', '2018-05-15', 'Busia', '2018-05-26'),
(449, 'KBT 521S', 20, 'Bujumbura', '2018-05-15', 'Busia', '2018-05-23'),
(450, 'KBL 933F', 51, 'Bujumbura', '2018-05-15', 'Chalinze', '2018-05-25'),
(451, 'KBL 361K', 20, 'Bujumbura', '2018-05-15', 'Chalinze', '2018-05-25'),
(452, 'KBN 780Y', 51, 'Bujumbura', '2018-05-15', 'Dar Es Salaam', '2018-05-21'),
(453, 'KBV 787L', 20, 'Bujumbura', '2018-05-15', 'Dar Es Salaam', '2018-05-24'),
(454, 'KBN 977Q', 51, 'Bujumbura', '2018-05-15', 'Eldoret', '2018-05-26'),
(455, 'KBE 346N', 20, 'Bujumbura', '2018-05-15', 'Eldoret', '2018-05-25'),
(456, 'KBY 799C', 51, 'Bujumbura', '2018-05-15', 'Garissa', '2018-05-20'),
(457, 'KBH 334Y', 20, 'Bujumbura', '2018-05-15', 'Garissa', '2018-05-26'),
(458, 'KBQ 036W', 51, 'Bujumbura', '2018-05-15', 'Goma', '2018-05-22'),
(459, 'KBL 418M', 20, 'Bujumbura', '2018-05-15', 'Goma', '2018-05-26'),
(460, 'KBY 084T', 51, 'Bumala', '2018-05-15', 'Bungoma', '2018-05-26'),
(461, 'KBL 694M', 20, 'Bumala', '2018-05-15', 'Bungoma', '2018-05-24'),
(462, 'KBX 544E', 51, 'Bumala', '2018-05-15', 'Busia', '2018-05-22'),
(463, 'KBM 711R', 20, 'Bumala', '2018-05-15', 'Busia', '2018-05-23'),
(464, 'KBW 880C', 51, 'Bumala', '2018-05-15', 'Chalinze', '2018-05-26'),
(465, 'KBL 981G', 20, 'Bumala', '2018-05-15', 'Chalinze', '2018-05-25'),
(466, 'KBS 712X', 51, 'Bumala', '2018-05-15', 'Dar Es Salaam', '2018-05-21'),
(467, 'KBP 755E', 20, 'Bumala', '2018-05-15', 'Dar Es Salaam', '2018-05-26'),
(468, 'KBW 407M', 51, 'Bumala', '2018-05-15', 'Eldoret', '2018-05-22'),
(469, 'KBQ 337Q', 20, 'Bumala', '2018-05-15', 'Eldoret', '2018-05-25'),
(470, 'KBF 784G', 51, 'Bumala', '2018-05-15', 'Garissa', '2018-05-20'),
(471, 'KBX 465J', 20, 'Bumala', '2018-05-15', 'Garissa', '2018-05-21'),
(472, 'KBF 099C', 51, 'Bumala', '2018-05-15', 'Goma', '2018-05-23'),
(473, 'KBE 263T', 20, 'Bumala', '2018-05-15', 'Goma', '2018-05-26'),
(474, 'KBU 962M', 51, 'Bungoma', '2018-05-15', 'Busia', '2018-05-21'),
(475, 'KBU 272L', 20, 'Bungoma', '2018-05-15', 'Busia', '2018-05-25'),
(476, 'KBF 858F', 51, 'Bungoma', '2018-05-15', 'Chalinze', '2018-05-23'),
(477, 'KBK 704W', 20, 'Bungoma', '2018-05-15', 'Chalinze', '2018-05-23'),
(478, 'KBN 588U', 51, 'Bungoma', '2018-05-15', 'Dar Es Salaam', '2018-05-20'),
(479, 'KBK 308S', 20, 'Bungoma', '2018-05-15', 'Dar Es Salaam', '2018-05-24'),
(480, 'KBC 227B', 51, 'Bungoma', '2018-05-15', 'Eldoret', '2018-05-25'),
(481, 'KBN 180F', 20, 'Bungoma', '2018-05-15', 'Eldoret', '2018-05-23'),
(482, 'KBV 885M', 51, 'Bungoma', '2018-05-15', 'Garissa', '2018-05-23'),
(483, 'KBB 988H', 20, 'Bungoma', '2018-05-15', 'Garissa', '2018-05-22'),
(484, 'KBB 428X', 51, 'Bungoma', '2018-05-15', 'Goma', '2018-05-23'),
(485, 'KBU 815D', 20, 'Bungoma', '2018-05-15', 'Goma', '2018-05-22'),
(486, 'KBV 975U', 51, 'Busia', '2018-05-15', 'Chalinze', '2018-05-21'),
(487, 'KBZ 432Q', 20, 'Busia', '2018-05-15', 'Chalinze', '2018-05-20'),
(488, 'KBK 683Z', 51, 'Busia', '2018-05-15', 'Dar Es Salaam', '2018-05-25'),
(489, 'KBL 932W', 20, 'Busia', '2018-05-15', 'Dar Es Salaam', '2018-05-22'),
(490, 'KBV 271Y', 51, 'Busia', '2018-05-15', 'Eldoret', '2018-05-20'),
(491, 'KBL 974U', 20, 'Busia', '2018-05-15', 'Eldoret', '2018-05-26'),
(492, 'KBK 016P', 51, 'Busia', '2018-05-15', 'Garissa', '2018-05-20'),
(493, 'KBT 652P', 20, 'Busia', '2018-05-15', 'Garissa', '2018-05-24'),
(494, 'KBB 926F', 51, 'Busia', '2018-05-15', 'Goma', '2018-05-23'),
(495, 'KBR 735C', 20, 'Busia', '2018-05-15', 'Goma', '2018-05-21'),
(496, 'KBE 058X', 51, 'Chalinze', '2018-05-15', 'Dar Es Salaam', '2018-05-23'),
(497, 'KBY 318P', 20, 'Chalinze', '2018-05-15', 'Dar Es Salaam', '2018-05-24'),
(498, 'KBU 231X', 51, 'Chalinze', '2018-05-15', 'Eldoret', '2018-05-25'),
(499, 'KBX 159V', 20, 'Chalinze', '2018-05-15', 'Eldoret', '2018-05-21'),
(500, 'KBD 822E', 51, 'Chalinze', '2018-05-15', 'Garissa', '2018-05-22'),
(501, 'KBH 233C', 20, 'Chalinze', '2018-05-15', 'Garissa', '2018-05-22'),
(502, 'KBG 540E', 51, 'Chalinze', '2018-05-15', 'Goma', '2018-05-20'),
(503, 'KBL 238E', 20, 'Chalinze', '2018-05-15', 'Goma', '2018-05-21'),
(504, 'KBM 651U', 51, 'Dar Es Salaam', '2018-05-15', 'Eldoret', '2018-05-26'),
(505, 'KBB 439K', 20, 'Dar Es Salaam', '2018-05-15', 'Eldoret', '2018-05-21'),
(506, 'KBT 975H', 51, 'Dar Es Salaam', '2018-05-15', 'Garissa', '2018-05-25'),
(507, 'KBM 504M', 20, 'Dar Es Salaam', '2018-05-15', 'Garissa', '2018-05-23'),
(508, 'KBK 667V', 51, 'Dar Es Salaam', '2018-05-15', 'Goma', '2018-05-23'),
(509, 'KBM 449S', 20, 'Dar Es Salaam', '2018-05-15', 'Goma', '2018-05-22'),
(510, 'KBL 648Q', 51, 'Eldoret', '2018-05-15', 'Garissa', '2018-05-26'),
(511, 'KBH 001X', 20, 'Eldoret', '2018-05-15', 'Garissa', '2018-05-21'),
(512, 'KBE 272Q', 51, 'Eldoret', '2018-05-15', 'Goma', '2018-05-21'),
(513, 'KBU 394G', 20, 'Eldoret', '2018-05-15', 'Goma', '2018-05-20'),
(514, 'KBR 181F', 51, 'Garissa', '2018-05-15', 'Goma', '2018-05-26'),
(515, 'KBD 159S', 20, 'Garissa', '2018-05-15', 'Goma', '2018-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `shuttles`
--

CREATE TABLE `shuttles` (
  `shuttleID` int(11) NOT NULL,
  `regPlate` varchar(100) NOT NULL,
  `capacity` int(100) NOT NULL,
  `departureTown` varchar(100) NOT NULL,
  `departureDate` varchar(100) NOT NULL,
  `destinationTown` varchar(100) NOT NULL,
  `returnDate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shuttles`
--

INSERT INTO `shuttles` (`shuttleID`, `regPlate`, `capacity`, `departureTown`, `departureDate`, `destinationTown`, `returnDate`) VALUES
(406, 'KBA 741J', 9, 'Bomet', '2018-05-15', 'Bondo', '2018-05-23'),
(407, 'KBN 034S', 8, 'Bomet', '2018-05-15', 'Bondo', '2018-05-26'),
(408, 'KBX 955U', 9, 'Bomet', '2018-05-15', 'Bujumbura', '2018-05-26'),
(409, 'KBN 796D', 8, 'Bomet', '2018-05-15', 'Bujumbura', '2018-05-21'),
(410, 'KBT 050N', 9, 'Bomet', '2018-05-15', 'Bumala', '2018-05-25'),
(411, 'KBX 411Z', 8, 'Bomet', '2018-05-15', 'Bumala', '2018-05-21'),
(412, 'KBC 930Q', 9, 'Bomet', '2018-05-15', 'Bungoma', '2018-05-22'),
(413, 'KBC 532B', 8, 'Bomet', '2018-05-15', 'Bungoma', '2018-05-21'),
(414, 'KBA 120R', 9, 'Bomet', '2018-05-15', 'Busia', '2018-05-21'),
(415, 'KBZ 881W', 8, 'Bomet', '2018-05-15', 'Busia', '2018-05-24'),
(416, 'KBB 482P', 9, 'Bomet', '2018-05-15', 'Chalinze', '2018-05-26'),
(417, 'KBA 522G', 8, 'Bomet', '2018-05-15', 'Chalinze', '2018-05-20'),
(418, 'KBE 362Z', 9, 'Bomet', '2018-05-15', 'Dar Es Salaam', '2018-05-21'),
(419, 'KBC 376R', 8, 'Bomet', '2018-05-15', 'Dar Es Salaam', '2018-05-24'),
(420, 'KBY 723W', 9, 'Bomet', '2018-05-15', 'Eldoret', '2018-05-20'),
(421, 'KBQ 699Y', 8, 'Bomet', '2018-05-15', 'Eldoret', '2018-05-26'),
(422, 'KBK 900U', 9, 'Bomet', '2018-05-15', 'Garissa', '2018-05-24'),
(423, 'KBL 201N', 8, 'Bomet', '2018-05-15', 'Garissa', '2018-05-21'),
(424, 'KBB 986T', 9, 'Bomet', '2018-05-15', 'Goma', '2018-05-20'),
(425, 'KBA 366J', 8, 'Bomet', '2018-05-15', 'Goma', '2018-05-20'),
(426, 'KBZ 186G', 9, 'Bondo', '2018-05-15', 'Bujumbura', '2018-05-20'),
(427, 'KBG 806U', 8, 'Bondo', '2018-05-15', 'Bujumbura', '2018-05-24'),
(428, 'KBR 473L', 9, 'Bondo', '2018-05-15', 'Bumala', '2018-05-20'),
(429, 'KBP 875T', 8, 'Bondo', '2018-05-15', 'Bumala', '2018-05-25'),
(430, 'KBC 203T', 9, 'Bondo', '2018-05-15', 'Bungoma', '2018-05-24'),
(431, 'KBV 294R', 8, 'Bondo', '2018-05-15', 'Bungoma', '2018-05-22'),
(432, 'KBY 437E', 9, 'Bondo', '2018-05-15', 'Busia', '2018-05-22'),
(433, 'KBM 339K', 8, 'Bondo', '2018-05-15', 'Busia', '2018-05-21'),
(434, 'KBC 402K', 9, 'Bondo', '2018-05-15', 'Chalinze', '2018-05-24'),
(435, 'KBK 908K', 8, 'Bondo', '2018-05-15', 'Chalinze', '2018-05-23'),
(436, 'KBE 180H', 9, 'Bondo', '2018-05-15', 'Dar Es Salaam', '2018-05-20'),
(437, 'KBZ 179N', 8, 'Bondo', '2018-05-15', 'Dar Es Salaam', '2018-05-25'),
(438, 'KBE 008N', 9, 'Bondo', '2018-05-15', 'Eldoret', '2018-05-21'),
(439, 'KBE 961F', 8, 'Bondo', '2018-05-15', 'Eldoret', '2018-05-22'),
(440, 'KBR 846B', 9, 'Bondo', '2018-05-15', 'Garissa', '2018-05-24'),
(441, 'KBK 429K', 8, 'Bondo', '2018-05-15', 'Garissa', '2018-05-25'),
(442, 'KBP 231K', 9, 'Bondo', '2018-05-15', 'Goma', '2018-05-25'),
(443, 'KBM 585M', 8, 'Bondo', '2018-05-15', 'Goma', '2018-05-20'),
(444, 'KBP 855Q', 9, 'Bujumbura', '2018-05-15', 'Bumala', '2018-05-21'),
(445, 'KBX 502G', 8, 'Bujumbura', '2018-05-15', 'Bumala', '2018-05-21'),
(446, 'KBP 225E', 9, 'Bujumbura', '2018-05-15', 'Bungoma', '2018-05-23'),
(447, 'KBN 191H', 8, 'Bujumbura', '2018-05-15', 'Bungoma', '2018-05-20'),
(448, 'KBE 321F', 9, 'Bujumbura', '2018-05-15', 'Busia', '2018-05-20'),
(449, 'KBU 639K', 8, 'Bujumbura', '2018-05-15', 'Busia', '2018-05-22'),
(450, 'KBK 482F', 9, 'Bujumbura', '2018-05-15', 'Chalinze', '2018-05-23'),
(451, 'KBP 834A', 8, 'Bujumbura', '2018-05-15', 'Chalinze', '2018-05-22'),
(452, 'KBU 587E', 9, 'Bujumbura', '2018-05-15', 'Dar Es Salaam', '2018-05-22'),
(453, 'KBG 943A', 8, 'Bujumbura', '2018-05-15', 'Dar Es Salaam', '2018-05-24'),
(454, 'KBH 944S', 9, 'Bujumbura', '2018-05-15', 'Eldoret', '2018-05-21'),
(455, 'KBV 905V', 8, 'Bujumbura', '2018-05-15', 'Eldoret', '2018-05-22'),
(456, 'KBP 654T', 9, 'Bujumbura', '2018-05-15', 'Garissa', '2018-05-23'),
(457, 'KBR 867J', 8, 'Bujumbura', '2018-05-15', 'Garissa', '2018-05-21'),
(458, 'KBP 134X', 9, 'Bujumbura', '2018-05-15', 'Goma', '2018-05-26'),
(459, 'KBQ 657A', 8, 'Bujumbura', '2018-05-15', 'Goma', '2018-05-22'),
(460, 'KBV 166D', 9, 'Bumala', '2018-05-15', 'Bungoma', '2018-05-24'),
(461, 'KBC 512S', 8, 'Bumala', '2018-05-15', 'Bungoma', '2018-05-22'),
(462, 'KBK 175A', 9, 'Bumala', '2018-05-15', 'Busia', '2018-05-24'),
(463, 'KBC 383V', 8, 'Bumala', '2018-05-15', 'Busia', '2018-05-23'),
(464, 'KBV 044Q', 9, 'Bumala', '2018-05-15', 'Chalinze', '2018-05-20'),
(465, 'KBY 223H', 8, 'Bumala', '2018-05-15', 'Chalinze', '2018-05-22'),
(466, 'KBB 299K', 9, 'Bumala', '2018-05-15', 'Dar Es Salaam', '2018-05-25'),
(467, 'KBQ 144N', 8, 'Bumala', '2018-05-15', 'Dar Es Salaam', '2018-05-20'),
(468, 'KBT 712L', 9, 'Bumala', '2018-05-15', 'Eldoret', '2018-05-20'),
(469, 'KBL 100J', 8, 'Bumala', '2018-05-15', 'Eldoret', '2018-05-22'),
(470, 'KBV 719F', 9, 'Bumala', '2018-05-15', 'Garissa', '2018-05-24'),
(471, 'KBJ 233H', 8, 'Bumala', '2018-05-15', 'Garissa', '2018-05-22'),
(472, 'KBX 392V', 9, 'Bumala', '2018-05-15', 'Goma', '2018-05-25'),
(473, 'KBU 608E', 8, 'Bumala', '2018-05-15', 'Goma', '2018-05-24'),
(474, 'KBY 867U', 9, 'Bungoma', '2018-05-15', 'Busia', '2018-05-22'),
(475, 'KBP 104L', 8, 'Bungoma', '2018-05-15', 'Busia', '2018-05-23'),
(476, 'KBM 215B', 9, 'Bungoma', '2018-05-15', 'Chalinze', '2018-05-23'),
(477, 'KBE 927A', 8, 'Bungoma', '2018-05-15', 'Chalinze', '2018-05-23'),
(478, 'KBQ 875G', 9, 'Bungoma', '2018-05-15', 'Dar Es Salaam', '2018-05-21'),
(479, 'KBP 867F', 8, 'Bungoma', '2018-05-15', 'Dar Es Salaam', '2018-05-26'),
(480, 'KBV 606K', 9, 'Bungoma', '2018-05-15', 'Eldoret', '2018-05-23'),
(481, 'KBA 291B', 8, 'Bungoma', '2018-05-15', 'Eldoret', '2018-05-21'),
(482, 'KBC 946Z', 9, 'Bungoma', '2018-05-15', 'Garissa', '2018-05-23'),
(483, 'KBN 747X', 8, 'Bungoma', '2018-05-15', 'Garissa', '2018-05-24'),
(484, 'KBB 786A', 9, 'Bungoma', '2018-05-15', 'Goma', '2018-05-20'),
(485, 'KBL 752Q', 8, 'Bungoma', '2018-05-15', 'Goma', '2018-05-26'),
(486, 'KBT 433D', 9, 'Busia', '2018-05-15', 'Chalinze', '2018-05-22'),
(487, 'KBT 065R', 8, 'Busia', '2018-05-15', 'Chalinze', '2018-05-20'),
(488, 'KBP 978G', 9, 'Busia', '2018-05-15', 'Dar Es Salaam', '2018-05-22'),
(489, 'KBU 812X', 8, 'Busia', '2018-05-15', 'Dar Es Salaam', '2018-05-26'),
(490, 'KBR 538A', 9, 'Busia', '2018-05-15', 'Eldoret', '2018-05-20'),
(491, 'KBL 944U', 8, 'Busia', '2018-05-15', 'Eldoret', '2018-05-23'),
(492, 'KBN 204J', 9, 'Busia', '2018-05-15', 'Garissa', '2018-05-25'),
(493, 'KBE 715E', 8, 'Busia', '2018-05-15', 'Garissa', '2018-05-23'),
(494, 'KBE 403W', 9, 'Busia', '2018-05-15', 'Goma', '2018-05-20'),
(495, 'KBW 826N', 8, 'Busia', '2018-05-15', 'Goma', '2018-05-20'),
(496, 'KBE 107N', 9, 'Chalinze', '2018-05-15', 'Dar Es Salaam', '2018-05-22'),
(497, 'KBY 562S', 8, 'Chalinze', '2018-05-15', 'Dar Es Salaam', '2018-05-26'),
(498, 'KBN 531X', 9, 'Chalinze', '2018-05-15', 'Eldoret', '2018-05-23'),
(499, 'KBH 824C', 8, 'Chalinze', '2018-05-15', 'Eldoret', '2018-05-20'),
(500, 'KBV 789A', 9, 'Chalinze', '2018-05-15', 'Garissa', '2018-05-23'),
(501, 'KBJ 797S', 8, 'Chalinze', '2018-05-15', 'Garissa', '2018-05-22'),
(502, 'KBZ 085K', 9, 'Chalinze', '2018-05-15', 'Goma', '2018-05-23'),
(503, 'KBZ 160W', 8, 'Chalinze', '2018-05-15', 'Goma', '2018-05-25'),
(504, 'KBR 393C', 9, 'Dar Es Salaam', '2018-05-15', 'Eldoret', '2018-05-23'),
(505, 'KBQ 421M', 8, 'Dar Es Salaam', '2018-05-15', 'Eldoret', '2018-05-20'),
(506, 'KBU 047R', 9, 'Dar Es Salaam', '2018-05-15', 'Garissa', '2018-05-22'),
(507, 'KBD 278Y', 8, 'Dar Es Salaam', '2018-05-15', 'Garissa', '2018-05-23'),
(508, 'KBY 131A', 9, 'Dar Es Salaam', '2018-05-15', 'Goma', '2018-05-22'),
(509, 'KBA 897F', 8, 'Dar Es Salaam', '2018-05-15', 'Goma', '2018-05-22'),
(510, 'KBD 960V', 9, 'Eldoret', '2018-05-15', 'Garissa', '2018-05-22'),
(511, 'KBB 188R', 8, 'Eldoret', '2018-05-15', 'Garissa', '2018-05-21'),
(512, 'KBY 436A', 9, 'Eldoret', '2018-05-15', 'Goma', '2018-05-24'),
(513, 'KBU 318E', 8, 'Eldoret', '2018-05-15', 'Goma', '2018-05-23'),
(514, 'KBJ 065F', 9, 'Garissa', '2018-05-15', 'Goma', '2018-05-25'),
(515, 'KBZ 205F', 8, 'Garissa', '2018-05-15', 'Goma', '2018-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `traveladvisory`
--

CREATE TABLE `traveladvisory` (
  `hotelID` int(11) NOT NULL,
  `hotelName` varchar(1000) NOT NULL,
  `hotelDescription` varchar(1000) NOT NULL,
  `hotelRates` int(10) NOT NULL,
  `hotelTown` varchar(1000) NOT NULL,
  `hotelContact` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traveladvisory`
--

INSERT INTO `traveladvisory` (`hotelID`, `hotelName`, `hotelDescription`, `hotelRates`, `hotelTown`, `hotelContact`) VALUES
(1, 'Hotel Kipepeo', 'In the heart of the city in the bustling River Road, close to the city''s main train station and 10 minutes from Kenyatta International Conference Centre. This is a good clean budget hotel in the heart of the capital.', 3400, 'Nairobi', '+254 203 13571'),
(2, 'Hotel Mariposa', 'It is located next to Tea Room along River Road,walking distance to the central business. It comprises of spaciously and elegantly furnished en suite rooms providing a calm and relaxing ambiance.', 2300, 'Nairobi', '+254 518 12370'),
(3, 'Hotel Saphire', 'It is located near the Mombasa train station. It is the only hotel in central Mombasa with a swimming pool!.We offers fabulous accommodation coupled with superior facilities.', 4400, 'Mombasa', '+254 708 83223'),
(4, 'Central Inn', 'Strategically located only a minute''s drive from the Entebbe - Kampala main road and 5 minutes to Entebbe International Airport and 30 minutes from Kampala.', 3000, 'Entebee', '+256 772 367972'),
(5, 'Eldoret Wagon', 'Eldoret Wagon Hotel is the first hotel in the region which began as a private member club for senior Railways staff. Its dining room ta an image of elongated railway wagon with a looped roof. ', 4500, 'Eldoret', '+254 053 2062270');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`busID`);

--
-- Indexes for table `shuttles`
--
ALTER TABLE `shuttles`
  ADD PRIMARY KEY (`shuttleID`);

--
-- Indexes for table `traveladvisory`
--
ALTER TABLE `traveladvisory`
  ADD PRIMARY KEY (`hotelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `busID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=516;
--
-- AUTO_INCREMENT for table `shuttles`
--
ALTER TABLE `shuttles`
  MODIFY `shuttleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=516;
--
-- AUTO_INCREMENT for table `traveladvisory`
--
ALTER TABLE `traveladvisory`
  MODIFY `hotelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
