-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 07:35 AM
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
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_lvl` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ID_korisnik`, `ime`, `prezime`, `email`, `ID_lvl`, `username`, `password`) VALUES
(3, '', '', 'name@hr.hr', '1', 'test', 'test');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sobe`
--

CREATE TABLE `sobe` (
  `ID_sobe` int(10) NOT NULL,
  `opis` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soba_cista` tinyint(1) DEFAULT NULL,
  `Soba_izdana` tinyint(1) DEFAULT NULL,
  `br_sobe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `ime` text COLLATE utf8_unicode_ci NOT NULL,
  `prezime` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oib` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `datum_rod` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grad` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postanski_br` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zemlja` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `studij` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soba_br` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `br_kartice` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Podaci o studentima';

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `ime`, `prezime`, `email`, `oib`, `datum_rod`, `adresa`, `grad`, `postanski_br`, `zemlja`, `telefon`, `studij`, `soba_br`, `br_kartice`) VALUES
(9, 'Iva\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Cukrov\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '', '12345678912', '1.1.1990', 'sv. mihovila 3', 'Pula', '52100', 'Hrvatska', '098/111222', NULL, '100', '100'),
(11, 'Iva\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Cukrov\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '', '100000000012', '1.1.1990', 'sv. mihovila 3', 'Pula', '52100', 'Hrvatska', '098/111222', NULL, '100', '100'),
(12, 'Ime\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'prezime\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Ante\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Gotovina\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, '1122334455', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'alo\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Malo\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, '100000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'alo\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Malo\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, '1000001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Test\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'test\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, '123464278', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Netko\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Nesto\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, '78945612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'ola hola\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'mola\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, '55522244', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'ee\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'bb\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'rrrr@email.com', '1594', '15.16.2016', 'nesto', 'Zagreb', '10100', 'Hrvatsk', '525646', 'ikt', '205', '205'),
(29, 'rr\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'ee\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '', '1234', '', '', '', '', '', '', '', '', ''),
(40, 'Siniša', 'Štimac', NULL, '5552223388', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'šššš', 'šššeee', '', '13222222222', '', '', '', '', '', '', '', '', ''),
(51, 'Šime', 'Ćupriž', 'cuprz@unipu.hr', '12121989111', '12.12.1989', 'Ćorak 1', 'Zagreb', '10100', 'Hrvatska', '091555333444', 'OIKT', '303', '303'),
(52, 'Ponedjeljko', 'Teštić', 'pt@unipu.hr', '55544222888', '19.12.2000', 'Vozilići 2', 'Vozilići', '52150', 'Hrvatska', '091222555', 'Fet', '108', '108');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usluge`
--

CREATE TABLE `usluge` (
  `Id_usluga` int(11) NOT NULL,
  `Naziv_usluge` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `Cijena` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
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
