-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 02:18 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recepcijsko poslovanje`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `ID_korisnik` int(20) NOT NULL,
  `ime` char(50) COLLATE cp1250_croatian_ci NOT NULL,
  `prezime` char(50) COLLATE cp1250_croatian_ci NOT NULL,
  `email` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `ID_lvl` int(20) NOT NULL,
  `username` varchar(100) COLLATE cp1250_croatian_ci NOT NULL,
  `password` varchar(100) COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ID_korisnik`, `ime`, `prezime`, `email`, `ID_lvl`, `username`, `password`) VALUES
(3, '', '', 'name@hr.hr', 1, 'test', 'test');

-- --------------------------------------------------------

--
-- Stand-in structure for view `po gradu pula`
-- (See below for the actual view)
--
CREATE TABLE `po gradu pula` (
);

-- --------------------------------------------------------

--
-- Table structure for table `racuni`
--

CREATE TABLE `racuni` (
  `ID_racuna` int(10) NOT NULL,
  `ID_studenta` int(10) NOT NULL,
  `Datum` date NOT NULL,
  `Aktivan_racun` tinyint(1) NOT NULL,
  `Placeno` datetime(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sobe`
--

CREATE TABLE `sobe` (
  `ID_sobe` int(10) NOT NULL,
  `opis` varchar(300) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `soba_cista` tinyint(1) DEFAULT NULL,
  `Soba_izdana` tinyint(1) DEFAULT NULL,
  `br_sobe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `ime` char(50) COLLATE utf8_bin NOT NULL,
  `prezime` char(50) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci NOT NULL,
  `email` varchar(50) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `oib` bigint(10) NOT NULL,
  `datum_rod` varchar(11) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `adresa` varchar(50) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `grad` char(50) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `postanski_br` int(50) DEFAULT NULL,
  `zemlja` char(50) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `telefon` varchar(20) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `studij` varchar(50) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `soba_br` int(10) DEFAULT NULL,
  `br_kartice` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Podaci o studentima';

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `ime`, `prezime`, `email`, `oib`, `datum_rod`, `adresa`, `grad`, `postanski_br`, `zemlja`, `telefon`, `studij`, `soba_br`, `br_kartice`) VALUES
(9, 'Iva', 'Cukrov', '', 12345678912, '1.1.1990', 'sv. mihovila 3', 'Pula', 52100, 'Hrvatska', '098/111222', NULL, 100, 100),
(11, 'Iva', 'Cukrov', '', 100000000012, '1.1.1990', 'sv. mihovila 3', 'Pula', 52100, 'Hrvatska', '098/111222', NULL, 100, 100),
(12, 'Ime', 'prezime', NULL, 12345, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Å timac', 'ss', NULL, 112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Å timac', 'aaww', NULL, 1121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Ante', 'Gotovina', NULL, 1122334455, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'alo', 'Malo', NULL, 100000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'alo', 'Malo', NULL, 1000001, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Test', 'test', NULL, 123464278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `troskovi`
--

CREATE TABLE `troskovi` (
  `ID_trosak` int(11) NOT NULL,
  `ID_racuna` int(11) NOT NULL,
  `ID_usluga` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `datum` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usluge`
--

CREATE TABLE `usluge` (
  `Id_usluga` int(11) NOT NULL,
  `Naziv_usluge` char(11) COLLATE cp1250_croatian_ci NOT NULL,
  `Cijena` varchar(11) COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

-- --------------------------------------------------------

--
-- Structure for view `po gradu pula`
--
DROP TABLE IF EXISTS `po gradu pula`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `po gradu pula`  AS  select `student`.`id` AS `ID`,`student`.`ime` AS `Ime`,`student`.`prezime` AS `Prezime`,`student`.`email` AS `email`,`student`.`oib` AS `OIB`,`student`.`Datum_rodjenja` AS `Datum_rodjenja`,`student`.`Adresa` AS `Adresa`,`student`.`Grad` AS `Grad`,`student`.`Postanski_broj` AS `Postanski_broj`,`student`.`Zemlja` AS `Zemlja`,`student`.`Telefon` AS `Telefon`,`student`.`Studij` AS `Studij`,`student`.`Soba_broj` AS `Soba_broj`,`student`.`Broj_kartice` AS `Broj_kartice` from `student` where (`student`.`Grad` = 'Pula') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`ID_korisnik`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `racuni`
--
ALTER TABLE `racuni`
  ADD PRIMARY KEY (`ID_racuna`),
  ADD KEY `ID_studenta` (`ID_studenta`);

--
-- Indexes for table `sobe`
--
ALTER TABLE `sobe`
  ADD PRIMARY KEY (`ID_sobe`),
  ADD UNIQUE KEY `br_sobe` (`br_sobe`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `OIB` (`oib`);

--
-- Indexes for table `troskovi`
--
ALTER TABLE `troskovi`
  ADD PRIMARY KEY (`ID_trosak`),
  ADD KEY `ID_racuna` (`ID_racuna`),
  ADD KEY `ID_usluga` (`ID_usluga`);

--
-- Indexes for table `usluge`
--
ALTER TABLE `usluge`
  ADD PRIMARY KEY (`Id_usluga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `ID_korisnik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `racuni`
--
ALTER TABLE `racuni`
  MODIFY `ID_racuna` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `troskovi`
--
ALTER TABLE `troskovi`
  MODIFY `ID_trosak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usluge`
--
ALTER TABLE `usluge`
  MODIFY `Id_usluga` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `racuni`
--
ALTER TABLE `racuni`
  ADD CONSTRAINT `racuni_ibfk_1` FOREIGN KEY (`ID_studenta`) REFERENCES `student` (`id`);

--
-- Constraints for table `troskovi`
--
ALTER TABLE `troskovi`
  ADD CONSTRAINT `troskovi_ibfk_1` FOREIGN KEY (`ID_racuna`) REFERENCES `racuni` (`ID_racuna`),
  ADD CONSTRAINT `troskovi_ibfk_2` FOREIGN KEY (`ID_usluga`) REFERENCES `usluge` (`Id_usluga`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
