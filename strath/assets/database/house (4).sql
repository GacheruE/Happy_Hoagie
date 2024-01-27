-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 12:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `agentslist`
--

CREATE TABLE `agentslist` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Reg_No` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentslist`
--

INSERT INTO `agentslist` (`Id`, `Name`, `Reg_No`) VALUES
(1, 'Abdul Ramadhan Odhiambo', 726),
(2, 'Abila Dickens Owour', 1341),
(3, 'Abisai O. M. Humphrey', 1224),
(4, 'Abuya Hellen Mary', 1635),
(5, 'Abwonji Paul Okech', 1636),
(6, 'Aganyo Dennis Omondi', 1795),
(7, 'Agili Daniel Ojijo', 590),
(8, 'Agutu W. O. John', 1500),
(9, 'Akello Edward Owour', 1290),
(10, 'Aluochier Isaac Aluoch Polo', 1844),
(11, 'Ameso Livingstone Owen', 1465),
(12, 'Amuok Fredrick Opiyo', 1125),
(13, 'Aoko Jullius O.', 1278),
(14, 'Auma O. Dominic', 539),
(15, 'Ayoob Khan Jamal', 1428),
(16, 'Azmina Alnashir Visram', 1141),
(17, 'Benson Maina Githinji', 1824),
(18, 'Bhatti Mohamed Afzal', 844),
(19, 'Bhoyyo Peter Kones', 850),
(20, 'Bid Hansil Dipak', 1659),
(21, 'Bilali Charles Bambo', 1717),
(22, 'Burns Seamus Joseph', 325),
(23, 'Bwoyele Julius', 1351),
(24, 'Chabari Francis Nyaga', 1063),
(25, 'Cheloti Irene Naliaka', 1610),
(26, 'Chelulei Abel Kipkorir', 1837),
(27, 'Cheruiyot Richard Kipkorir', 1726),
(28, 'Christabel Millicent Ojuok', 1856),
(29, 'Chumo Collins Kipkogei', 1791),
(30, 'Dar Hatim Adamali', 188),
(31, 'Dar Zainalabidin Y. Adamali', 187),
(32, '\"Dennis Bartholomew Kariuki Makenyeh\"', 1696),
(33, 'Doshi Bharat K. Dolatrai', 1436),
(34, 'Egondi Brayan Maneno', 1798),
(35, 'Ehsani Hamed', 1494),
(36, 'Emma Kaari Ng ang a', 1778),
(37, 'Evone Salomy Selvarajah', 1728),
(38, 'Fundi George Antony', 1812),
(39, 'Furaha Japhet Nyambu', 1742),
(40, 'Gachagua Winfred Wangu', 1481),
(41, 'Gachara Susan Wanjiku', 1041),
(42, 'Gachoka B. Kamau', 1349),
(43, 'Gachu Mbui James', 1768),
(44, 'Gachuhi Daniel Mwai', 1817),
(45, 'Gachuru Margaret', 1359),
(46, 'Gaitiama Robert Mithika', 1724),
(47, 'Gakuru Newton', 1207),
(48, 'Garner Sharon N. H.', 1048),
(49, 'Gatambu Eric Mutwiri', 1823),
(50, 'Gathari John Macharia', 1208),
(51, 'Gathoni John Waithaka', 1668),
(52, 'Gatobu Bernard Mwongera', 1376),
(53, 'Gichangi Duncan Mwangi', 77),
(54, 'Gichangi Duncan Mwangi', 77),
(55, 'Gichira C. P Mwangi', 1127),
(56, 'Gichuru Michael Kaguamba', 1249),
(57, 'Gitari M. Bernadette', 127),
(58, 'Gitau David Mungai', 1090),
(59, 'Gitau Joseph Njihia', 1264),
(60, 'Gitau Lawrence Gakwa', 1062),
(61, 'Githiaka Stephen Karari', 1231),
(62, 'Githinji L.C. Wangui', 1537),
(63, 'Gitonga David Wangai', 847),
(64, 'Gitonga Emma Wakuthii', 820),
(65, 'Gitonga Geoffrey Muchiri', 466),
(66, 'Gitonga Joseph Kithinji', 140),
(67, 'Gitonga Cyrus Ndumia', 1022),
(68, 'Goga Odhaimbo Paul', 1827),
(69, 'Gujral Nishi Rajiv', 1433),
(70, 'Harber Jeniffer', 1664),
(71, 'Hassanali Farhana Mohammed', 1065),
(72, 'Heho Jane Njahira', 1411),
(73, 'Hon. Esther M. Mathenge', 72),
(74, 'Hon. Kilonzo Charles Mutavi', 354),
(75, 'Hussein Bandali Murtaza', 35),
(76, 'Ikonya John Njoroge', 595),
(77, 'Ikua Stephen John', 1108),
(78, 'Jiwa Naushad Hussein M.', 161),
(79, 'Jiwa Yusuf M. N', 20),
(80, 'Juma Peter Mwombe', 1455),
(81, 'Kaburu Jacob Salesio', 1757),
(82, 'Kamau Lucy Wairimu', 1307),
(83, 'Kamita James Muhia', 1496),
(84, 'Kang\'ara Mary Wangui', 1375),
(85, 'Kanyangi Erastus Oyoo', 1647),
(86, 'Kanyari Irene', 717),
(87, 'Kanyi Simon Wanyiri', 814),
(88, 'Kaptingei Oscar', 1593),
(89, 'Karago Rose Wairimu', 1504),
(90, 'Karandu George Kamau', 486),
(91, 'Karanja E. Njihia', 1381),
(92, 'Karanja S. Macharia', 50),
(93, 'Karegi Esther', 1613),
(94, 'Kariuki W. Catherine', 748),
(95, 'Karori John Njoroge', 1302),
(96, 'Karundu Joseph Maina', 1140),
(97, 'Katei K. Stephen', 1172),
(98, 'Kaunda Juma Peter', 1430),
(99, 'Kavivya Bernard W.', 1011),
(100, 'Kebwage James Kababe', 927),
(101, 'Ketan Mohanlal Shah', 1785),
(102, 'Kiambi Richard Munyua', 517),
(103, 'Kibatha Samuel Njoroge', 1819),
(104, 'Kibe John Mbuthia', 1752),
(105, 'Kibera Peter Githae', 1363),
(106, 'Kiboko N. Stanley', 1566),
(107, 'Kibuchi Daniel Muriuki', 864),
(108, 'Kibugu Charity Wamuyu', 1743),
(109, 'Kibui Joseph Kahuthia', 52),
(110, 'Kigen Richard Kimutai', 1134),
(111, 'kigetu Mercy Francis', 1727),
(112, 'Kihoro Jesee Wachira', 1297),
(113, 'Kikenyi Ruth Nafula', 1746),
(114, 'Kiliru George Dan', 297),
(115, 'Kilui David Michubu', 1292),
(116, 'Kiman Evanson Ndung\'u', 1674),
(117, 'Kimani James Ngugi', 1662),
(118, 'Kimani Njuguna Humphrey', 343),
(119, 'Kimani Simon Muigai', 1801),
(120, 'Kimani Veronica Wangui', 1820),
(121, 'kimathi francis kahure', 39),
(122, 'Kimathi Joddy Gitonga', 1847),
(123, 'Kimeu Nicodemus Kyalo', 1361),
(124, 'Kimeu Peter Kitaka', 1280),
(125, 'King\'ori Billy Mugeneni', 1618),
(126, 'Kinuthia K. Miranga', 1179),
(127, 'Kinyagu John Kinuthia', 1630),
(128, 'Kinyua Fredrick J.', 102),
(129, 'kiongera George Muigai', 1080),
(130, 'Kipng\'etich Cleophas Bor', 1247),
(131, 'Kiprotich Stephen Rutto', 1528),
(132, 'Kiptoo Daniel Melly', 1598),
(133, 'Kiptoo Vincent Kibet', 786),
(134, 'Kiragu James', 556),
(135, 'Kiragu Jesse', 1708),
(136, 'Kirathe Beatrice Wangari', 1347),
(137, 'Kirk Kimaru katwa', 1772),
(138, 'Kirui Simon', 1670),
(139, 'Kitavi Joyce Mueni', 1380),
(140, 'Kithikii J. D. Kali', 1051),
(141, 'Kiti Robert Sylvester', 1683),
(142, 'Kirigwi Wairima Caroline', 1842),
(143, 'Kivunira Herman K.', 1150),
(144, 'Koome Benson Muriithi', 1476),
(145, 'Korir Linus Kipkirui', 1853),
(146, 'Koros Geoffrey Kiprotich', 1294),
(147, 'Kuria John Karanja', 1542),
(148, 'Kutoto Isaac Mulama', 1810),
(149, 'Kyaitha Ronald Sevu', 1515),
(150, 'Labassoh Wesley K.', 1300),
(151, 'Letio Fancy Jeruto', 1735),
(152, 'Linguli Godfrey Mutuma', 1216),
(153, 'Linus Joseph obutu', 1705),
(154, 'Lupao Edgar Wekesa', 1023),
(155, 'Mabea Zablon Agwata', 1059),
(156, 'Macharia James Gacheru', 1480),
(157, 'Macharia Michael Mugo', 1685),
(158, 'Macharia N. Eunice', 566),
(159, 'Machua David Kamau', 130),
(160, 'Madegwa Daniel', 1511),
(161, 'Madende O. Luke', 1049),
(162, 'Madete Eric Peter Mukaye', 711),
(163, 'Magana Stella Kagendo', 1539),
(164, 'Maina Chege', 263),
(165, 'Maina Dennis Gichango', 1458),
(166, 'Maina Stephen Waweru', 1298),
(167, 'Maira Isaac Onyango', 1811),
(168, 'Makanga Jane Njeri', 1188),
(169, 'Makathimo Mwenda K.', 933),
(170, 'Makau Elizabeth Mbete', 1706),
(171, 'Makau Nicholas Muli', 1821),
(172, 'Maringa James Tuigo', 1816),
(173, 'Mallo Erick Bwire', 1779),
(174, 'Manjau samwel Mwai', 1162),
(175, 'Margaret Naftaly Ndung u', 1628),
(176, 'Margaret Samuel Kamau', 1236),
(177, 'Marinda Teresa A. O.', 1510),
(178, 'Masika David Wambua', 125),
(179, 'Masika K. Mwema', 1313),
(180, 'Masyuki Catherine Wanza', 1334),
(181, 'Matete Stephen', 1711),
(182, 'Matu Daniel Gachingiri', 1400),
(183, 'Matu James Nderitu', 815),
(184, 'Matu Stephen Waweru', 1456),
(185, 'Maganjo Phoebe Wanjiru', 1850),
(186, 'Mokandu Gideon Onwon ga', 1809),
(187, 'Mungai Monicah Gathoni', 1761),
(188, 'Mbathi Joram Mugo', 1712),
(189, 'Mbinda Samuel Charles', 441),
(190, 'Mbiri Nora Mukhwana', 1754),
(191, 'Mbithi Caroline Katumbi', 1699),
(192, 'Mbithi Elizabeth Ngina', 1178),
(193, 'Mbogo A. Kamau', 1384),
(194, 'Mbugua Jane Waithera', 1314),
(195, 'Mbugua John Wanjahi', 1797),
(196, 'Mbugua K. Nelly', 963),
(197, 'Mbugua Peter Ndungu', 1738),
(198, 'Mbulo Kenedy Kaunda', 1274),
(199, 'Mburu Dedan Ndegwa', 1509),
(200, 'Mburu K. Fidelis', 1118),
(201, 'Meehir Shah', 1848),
(202, 'Metusela Kibotok Kibor', 1807),
(203, 'Migwi C. Kanai', 980),
(204, 'Mnjaa Gideon Ngure', 1788),
(205, 'Muange Judith Nzilani', 1540),
(206, 'Muchai Peninah Wanjiru', 1684),
(207, 'Muchira Joseph Mwaniki', 506),
(208, 'Muchiri E. Wahome', 257),
(209, 'Muchiri Geoffrey Gachara', 231),
(210, 'Muchiri S. Wanjiru', 1332),
(211, 'Muendo Rosemary Kiumo', 0),
(212, 'Mugambi Eric Gitonga', 1696),
(213, 'Mugo Consolata Wanjiru', 1753),
(214, 'Mugo James Moses', 801),
(215, 'Mugoh Davies', 1660),
(216, 'Muhoro Joseph Wangombe', 964),
(217, 'Muigai James', 1171),
(218, 'Muigai Simon Ngugi', 1014),
(219, 'Muigai Stephen Ng ang a', 912),
(220, 'Muinde M. Lilian', 845),
(221, 'Muindi Wilfred Mutuku', 1529),
(222, 'Muiru David Njoroge', 687),
(223, 'Muiruri Charles Muru', 1800),
(224, 'Muiruri Francis Ichangai', 1617),
(225, 'Muiruri Grace Wanjiku', 1256),
(226, 'Muiruri M. Michael', 1276),
(227, 'Muiruri Simon Maina', 1213),
(228, 'Mukaria Kannedy Mutwiri', 1709),
(229, 'Mukhongo J. Wycliffe', 767),
(230, 'Mukhwana Thomas', 1368),
(231, 'Mukira E. Macharia', 353),
(232, 'Mulei W Shelmith', 1329),
(233, 'Mulwa John Muia', 863),
(234, 'Munayi Melody Bathsheba', 1840),
(235, 'Munjuga Lucy Njugu', 1322),
(236, 'Muoka D. Mulwa', 1073),
(237, 'Muraguri Leah Nyambugi', 1784),
(238, 'Muregi Nelly Nyakio', 1293),
(239, 'Murigi Joyce Waithera', 437),
(240, 'Murigo Jeniffer Mumbi (DR)', 1149),
(241, 'Muriithi David Wachira', 1745),
(242, 'Muriithi K. James', 787),
(243, 'Murimi Alister Mutugi', 909),
(244, 'Muritu Edward Mwangi', 1296),
(245, 'Muriu James Karoki', 1608),
(246, 'Muriuki Christopher Mwangi', 1773),
(247, 'Muriuki Rosemary Gakundi', 1552),
(248, 'Muroki K. Vincent', 1007),
(249, 'Mururu K. James', 173),
(250, 'Museleku Erastus Kiita', 1578),
(251, 'Musumba Harron Okwako', 1470),
(252, 'Muswii P. Musyoki', 685),
(253, 'Musyoki Joseph Mutuku', 126),
(254, 'Mutahi Flora Wahome', 1299),
(255, 'Muthaura Franklin Mwenda', 1457),
(256, 'Muthee Hezron Wainaina', 1306),
(257, 'Muthomi Francis Michael', 1782),
(258, 'Mutua Kevin Muthama', 1568),
(259, 'Mutuku Stephen Mutiso', 1716),
(260, 'Mutunga Victoria Itumbi', 1382),
(261, 'Mutungi Nkirote Juddy', 1388),
(262, 'Mutungi Solomon M.', 296),
(263, 'Muturi Mary Njeri', 929),
(264, 'Mwai Felix Muriithi', 1611),
(265, 'Mwamburi M. Matilda', 1176),
(266, 'Mwandawiro Grantone Samboja', 1787),
(267, 'Mwangangi Daniel Mutinda', 1839),
(268, 'Mwangi E Paul Gichengo', 1573),
(269, 'Mwangi Maina', 696),
(270, 'Mwangi Peter Githinji', 1182),
(271, 'Mwangi Samuel', 683),
(272, 'Mwangi W. Njeri', 561),
(273, 'Mwaniki Joseph B. K.', 282),
(274, 'Mwanyumba Nyange Eric', 1804),
(275, 'Mwanzia Brian Iseka', 1669),
(276, 'Mwatu Kenneth Wahome', 339),
(277, 'Mwithimbu Muriithi', 1543),
(278, 'Mwiti John Ngari', 1805),
(279, 'Naimisha Shah', 406),
(280, 'Nath Tarloack Sharma', 1330),
(281, 'Ndegwa Catherine Wambui', 1585),
(282, 'Ndundu Julius Karanja', 989),
(283, 'Ndung u Consolata', 1688),
(284, 'Ndung u J. G. Kaberere', 448),
(285, 'Ndung\'u Peter Wandurua', 918),
(286, 'Ndurungi Eliud N. M.', 892),
(287, 'Ngaithe Boniface Gichuhi', 988),
(288, 'Ng ang a Catherine Wangui', 1776),
(289, 'Ng ang a Hildah Wambui', 1693),
(290, 'Ngetich David Kiprop', 1538),
(291, 'Ngiela Silas Onyango', 1177),
(292, 'Ngugi Ayub Wothiru', 1725),
(293, 'Ngugi James Wainaina', 1356),
(294, 'Ngugi Paul Munga', 1209),
(295, 'Ngure John Murang\'a', 1439),
(296, 'Njathi E. N. Paul', 446),
(297, 'Njau Peter Gachigi', 1317),
(298, 'Njehia Lilian Njeri', 1110),
(299, 'Njehia Timothy', 986),
(300, 'Njenga Danson Ngugi', 1654),
(301, 'Njenga David Mbiyu', 1233),
(302, 'Njenga Serah Nyokabi', 1703),
(303, 'Njeru Isabel Muthanje', 1466),
(304, 'Njeru K. Jeremiah', 1012),
(305, 'Njihia Catherine Wairimu', 1227),
(306, 'Njihia Samuel Mwangi', 120),
(307, 'Njonde S. Ndung u', 1040),
(308, 'Njonjo Lucy Njambi', 1783),
(309, 'Njoroge Daniel Wangai', 1650),
(310, 'Njoroge Grishon Njihia', 1471),
(311, 'Njoroge Hellen Njeri', 1633),
(312, 'Njoroge J. Mwaura', 1283),
(313, 'Njoroge Rose Wangari', 1541),
(314, 'Njoroge W. Rachael', 1212),
(315, 'Njue Gicovi Njiru', 1467),
(316, 'Njuguna Amos Mwangi', 851),
(317, 'Njuguna David Kigomo', 1762),
(318, 'Njuguna Francis Ben', 87),
(319, 'Njuguna Julius Gikuru', 1567),
(320, 'Njuguna Leah Wambui', 1378),
(321, 'Njuguna Michael', 982),
(322, 'Njuguna Moses Muriithi', 1044),
(323, 'Njuguna Kelvin Kamau', 1855),
(324, 'Nkonge Didacus Nyaga', 686),
(325, 'Nturibi Joy Kanana', 1586),
(326, 'Nzumbi Benson Nzioki', 1393),
(327, 'Nyaguthii Rebecca Gicheru', 1836),
(328, 'Nyakora Nora Agina', 842),
(329, 'Nyakwaye Musa', 791),
(330, 'Nyambura Suleiman Kamau', 1818),
(331, 'Nyamweya Joel Ombati', 1028),
(332, 'Nyororo Caroline Nkirote', 1170),
(333, 'Ochieng Dan Awendo', 1792),
(334, 'Okonjo Joyner Eunice', 1813),
(335, 'Opondo Brian Otieno', 1793),
(336, 'Ochich A.N. Caroline', 1358),
(337, 'Odiembo Samuel Otieno', 943),
(338, 'Odima Isaiah Olwande', 1442),
(339, 'Odongo Philip Kabita', 428),
(340, 'Oduor vincent weda', 1638),
(341, 'Ojijo Elisha Ochieng', 1771),
(342, 'Okal Ruth Achieng\'', 1124),
(343, 'Okoth Evalyn Adoyo', 1589),
(344, 'Okoth M. Omollo', 1308),
(345, 'Okumu Reginald', 942),
(346, 'Okwiri Paul Aloo', 388),
(347, 'Olima Washington H. A. (Prof.)', 701),
(348, 'Omengo Stephen Odhiambo', 1139),
(349, 'Omoke Justine Oyagi', 1285),
(350, 'Omollo Valentine', 1673),
(351, 'Omondi Godfrey', 1160),
(352, 'Omulo David Odhiambo', 1646),
(353, 'Ong\'ong\'a Okomboli', 1616),
(354, 'Onguko B. Joash', 1328),
(355, 'Ondik Emily Debora', 1846),
(356, 'Ongwae Wycliffe', 1337),
(357, 'Onsase peter Leo Onchieku', 1829),
(358, 'Onyango Bernard Ochieng\'', 1398),
(359, 'Opiyo Geoffrey Ouma', 1780),
(360, 'Oranja Humphrey', 1729),
(361, 'Oriko Daniel Odera', 1138),
(362, 'Orwa Simon Oruka', 1453),
(363, 'Osoro Gladys W. M.', 898),
(364, 'Osoro Moses Mathew', 897),
(365, 'Otiende Castro', 1056),
(366, 'Otieno Kelvin Onyango', 1443),
(367, 'Otieno Michael', 1663),
(368, 'Otunga Martin Odhiambo', 1686),
(369, 'Oundo Wilberforce Ojiambo', 1053),
(370, 'Oyuga Isaiah Bonyo', 1344),
(371, 'Parsaloi Timothy Saruni', 1018),
(372, 'Ragalo Batholomew O.', 137),
(373, 'Rajesh Amritlal Vadgama', 1731),
(374, 'Reriani J. Gitonga', 1419),
(375, 'Rika John Kagai', 575),
(376, 'Riungu Daniel Mathiu', 877),
(377, 'Rugano Salome Wanjeri', 1640),
(378, 'Ruitha James Wagema', 133),
(379, 'Ruparel Seeta Jayant', 899),
(380, 'Ruto David Cheruiyot', 1362),
(381, 'Ruttoh Paul K.', 1277),
(382, 'Saina George Kibet', 1838),
(383, 'Sanghani Rajendra K. R.', 105),
(384, 'Sarah Gloria Awinja', 1506),
(385, 'Saruni W. Anne', 1031),
(386, 'Shafana Rajani', 1694),
(387, 'shah Mitesh Khetshi Padamshi', 1830),
(388, 'Shake R. Haron', 883),
(389, 'Shukri Osman', 1767),
(390, 'Siror Nancy Jeruto', 810),
(391, 'Terer Boniface K.', 496),
(392, 'Thogo R. Wangui', 895),
(393, 'Thuo Kabura Mercy', 1415),
(394, 'Waburi Geoffrey Gatungu', 1132),
(395, 'Wachira Jesee Maina', 1555),
(396, 'Wahome Peter Kibui', 614),
(397, 'Waiganjo Geoffrey Chege', 953),
(398, 'Wairimu Florence Njau', 1399),
(399, 'Waithaka W. Margaret', 695),
(400, 'Wakanini H. P. Nderi', 1340),
(401, 'Wakianda Isaiah Waweru', 1843),
(402, 'Wambua Anthony Mwau', 1667),
(403, 'Wambugu Jacinta', 951),
(404, 'Wambugu Joseph Karugu', 1554),
(405, 'wambuku Monicah Gathigi', 1710),
(406, 'wamunya Leonard ndungu', 1505),
(407, 'Wanjihia Edward Mwangi', 692),
(408, 'Wanjiru M. Catherine', 921),
(409, 'Wanjiru Philip Macharia', 1612),
(410, 'Wanjohi Francis Kibugi', 1348),
(411, 'Wanjohi Harriet Waruguru', 1429),
(412, 'Wanyoike John Kinuthia', 1620),
(413, 'Wandala Duncan Otieno', 1759),
(414, 'Waruhiu Stephen Njoroge', 128),
(415, 'Watahi Charles Maina', 1142),
(416, 'Waweru Joan Gathoni', 1609),
(417, 'Waweru Paul Amos Mwangi', 1547),
(418, 'Were Herbert', 1287),
(419, 'Weru Mary Wanjiru', 1828),
(420, 'Yego Joel Kipkemboi', 622),
(421, 'Mutiria Arthur Muthee', 1774),
(422, 'Ming\'ala Kenneth E.', 948),
(423, 'Mbugua Anne wachuchu', 1849),
(424, 'Kaggikah Don Muiruri', 1802),
(425, 'Mbeshi Michael Jeti', 450),
(426, 'Kiarie Pauline W.', 494),
(427, 'Mutula Rodgers Pascal', 1826),
(428, 'Kamau Job Ndung\'u', 513),
(429, 'Gitonga Velzian Gikonyo', 429),
(430, '\"Philip Kiprotich Cheplong\"', 1353),
(431, 'Makumbi Lucy M.', 1345),
(432, 'Ndeto John Ndolo', 1548),
(433, 'Gatheru Erastus Kanyi', 83),
(434, 'Mugo Harry Fredrick', 85),
(435, 'Warui Simon Mugo', 759),
(436, 'Kithaka Jacob Gitonga', 1206),
(437, 'Mwangi Eddah Muthoni', 1222),
(438, '\"Koske Kennedy Kiprotich\"', 1679),
(439, 'Gatimu Samuel Nderitu', 1689),
(440, 'Gatere Patricia Muthoni', 1474),
(441, 'Mukundi Lilian Njeri', 1747),
(442, 'Mutie Kelvin Mutisya', 1803),
(443, 'Michael Otieno Okello', 1508),
(444, 'Jesse Kamau Maina', 1851),
(445, 'Mogambi J. Oindo', 654),
(446, 'Kaminja Moses Ng\'ang\'a', 1583),
(447, 'Mbugua John Muhia', 1582),
(448, 'Muhia M. Wambui', 576),
(449, 'Odour A. Jennifer', 524),
(450, 'Oyoo Bethwel Onyango', 1631),
(451, 'Mangaa Protus Otundo', 1632),
(452, ' Kamau Veronica Wangui', 1820),
(453, '\"Gatobu Bernard Mwongera\"', 1376),
(454, 'Meehir Shah', 1848),
(455, '\"Muendo Rosemary Kiumo\"', 1503),
(456, '\"Musalia Jacqueline Adamba\"', 1770),
(457, 'Mutwiwa Peter Nzuki', 1764),
(458, '\"Koskei Jonathan Kimutai\"', 1777),
(459, '\"Wahome Christine Wangui\"', 1698),
(460, 'kimani Renson kamau', 1707);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `Id` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Phone_Number` int(20) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Id`, `Name`, `Email`, `password`, `Phone_Number`, `usertype`) VALUES
(1, 'Esther Gacheru', 'esther@gmail.com', '1234', 799838477, 'client'),
(6, '.Esther Gacheru.', '.christine@gmail.com.', '.12345678.', 792746721, '.client.'),
(8, 'Susan Wanjiru', '.susan@gmail.com.', '.12345678.', 744567890, '.agent.'),
(10, 'Mary Aladwa', 'mary@gmail.com', 'pop', 733456721, 'agent'),
(11, 'Esther', 'esther.gacheru@strathmore.edu', '12', 792746721, 'client'),
(12, 'Agili Daniel Ojijo', 'agili@gmail.com', '123', 723445678, 'agent'),
(14, 'Abdul Ramadhan Odhiambo', 'abdul@gmail.com', '1234', 798765432, 'agent'),
(15, 'Abila Dickens Owour', 'abila@gmail.com', '1234', 798767864, 'agent'),
(21, 'Win Otieno', 'win@gmail.com', 'win', 788563221, 'client'),
(22, 'Abuya Hellen Mary', 'abuya@gmail.com', '1234', 722634578, 'agent'),
(23, 'Jed Otemba', 'jed@gmail.com', 'jed', 792364543, 'client'),
(24, 'Cynthia Musila', 'cynthia@gmail.com', '123', 745667898, 'agent'),
(25, 'Ivy Wanjiru', 'ivy@gmail.com', 'ivy', 765434490, 'client'),
(26, 'Yvonne Muiruri', 'yvonne@gmail.com', 'ear', 767889878, 'client'),
(27, 'Cedrick Okubo', 'cedrick@gmail.com', 'chu', 766545678, 'client'),
(28, 'Sharon Wendoh', 'sharon@gmail.com', '1234', 799871234, 'agent'),
(33, 'Jane Wacuka', 'jane@gmail.com', '1234', 733456722, 'client'),
(34, 'Abwonji Paul Okech', 'paul@gmail.com', 'pass', 722356789, 'agent'),
(35, 'Rhoda Wanjiku', 'rhoda@gmail.com', 'password', 788476354, 'client'),
(36, 'Peter Njoroge', 'peter@gmail.com', 'pin', 799465221, 'client'),
(38, 'Peter Njoroge', 'peter@gmail.com', 'pin', 799465221, 'client'),
(39, 'Peter Njoroge', 'peter@gmail.com', 'pin', 799465221, 'client'),
(40, 'Moses Wasamu', 'moses@gmail.com', 'pass', 733567844, 'client'),
(41, 'Fiona Gacheru', 'fiona@gmail.com', 'ear', 728978567, 'client'),
(42, 'Deborah Munene', 'deborah@gmail.com', 'deb', 733456728, 'client'),
(43, 'Sally Keju', 'sally@gmail.com', 'sally', 788986532, 'client'),
(49, 'Esther Gacheru', 'es@strathmore.edu', 'ten', 792746721, 'client'),
(50, 'Seth Kigen', 'seth@gmail.com', 'seth', 799812903, 'client'),
(51, 'Fin White', 'fin@gmail.com', 'fin', 791234567, 'client'),
(52, 'Jyn Wacuka', 'jyn@gmail.com', '123', 722445678, 'agent'),
(53, 'Ben Ten', 'ben@gmail.com', 'ben', 788765123, 'client'),
(54, 'Joel Kaburi', 'joel@gmail.com', 'joel', 712678408, 'client'),
(55, 'Esther Gacheru', 'esther@strathmore.edu', 'es', 792746720, 'client'),
(56, 'Richard Ngatia', 'rich@gmail.com', 'rich', 712567843, 'client'),
(57, 'Esther Gacheru', 'esther.gacheru@strathmore.edu', '12', 792746721, 'client'),
(58, 'Esther Gacheru', 'esther.gacheru@strathmore.edu', '9', 792746721, 'client'),
(59, 'Esther Gacheru', 'gach@strathmore.edu', '12', 792746721, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image1`, `image2`, `image3`, `image4`, `property_id`) VALUES
(5, '1c.jpg', '5a.jpg', '6.jpg', '7.jpg', 13),
(6, 'WhatsApp Image 2022-07-17 at 7.49.21 PM.jpeg', 'WhatsApp Image 2022-07-17 at 7.49.19 PM (1).jpeg', 'WhatsApp Image 2022-07-17 at 7.49.19 PM (3).jpeg', 'WhatsApp Image 2022-07-17 at 7.49.19 PM.jpeg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(11) NOT NULL,
  `clientsid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `clientsid`, `name`, `price`, `images`, `rooms`, `size`, `type`, `location`, `description`) VALUES
(13, 0, 'Villa 1', 'Ksh 40000', 'images/62d433ab9e14e5.58594048.jpg', '3 Bedrooms', '25000 sq ft', 'Mansion', 'South C', 'Beautiful villa set on its own compound. With a large open kitchen and a sunken living room'),
(14, 0, 'House 2', 'Ksh15000', 'images/62d46900696eb6.06234109.png', '1', '9000 sq ft', 'Servants Quarters', 'Madaraka', 'Spacious Servants Quarters. Comes fully funished.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verification_link` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `email_verification_link`, `email_verified_at`) VALUES
(1, 'Esther Gacheru', 'esther.gacheru@strathmore.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'dfa1f4292701ea4a2c2624a2c46dc8d14036', NULL),
(2, 'Esther Gacheru', 'christinegacheru01@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'f8996d54ddba9bd35d88efbe83be308f4604', NULL),
(3, 'Esther Gacheru', 'christygash@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'e097baeb2ea92bc0c5402d3ce31b75163056', NULL),
(4, 'Esther Gacheru', 'christine@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, '1751ec75bdc902ad32dc9bc8bc73967d8792', NULL),
(5, 'Esther Gacheru', 'esther@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, '54bd8156692e11ad96138370058242247629', NULL),
(6, 'Esther Gacheru', 'fiona@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'bf018f24ac3eb4d5cbcbee3b2ff5ba742273', NULL),
(7, 'Esther Gacheru', 'david@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'f3c52e5ef3d2b471d0ef51c66c21d10c8896', NULL),
(8, 'Esther Gacheru', 'chris@phpzag.com', '202cb962ac59075b964b07152d234b70', 0, 'ced8fab8638068181eadeda8b55b476c8714', NULL),
(9, 'Esther Gacheru', 'er@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '8c00c031aa67012e2e650016686cf72f2520', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentslist`
--
ALTER TABLE `agentslist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agentslist`
--
ALTER TABLE `agentslist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=461;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `property_id` FOREIGN KEY (`property_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
