-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 07:58 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES cp1250 */;

--
-- Database: `recepcijsko poslovanje`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `ID_korisnik` int(20) NOT NULL,
  `Ime` text COLLATE cp1250_croatian_ci NOT NULL,
  `Prezime` text COLLATE cp1250_croatian_ci NOT NULL,
  `email` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `ID_lvl` int(20) NOT NULL,
  `username` varchar(100) COLLATE cp1250_croatian_ci NOT NULL,
  `password` varchar(100) COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ID_korisnik`, `Ime`, `Prezime`, `email`, `ID_lvl`, `username`, `password`) VALUES
(1, 'ime', 'prezime', NULL, 2, 'test', 'test');

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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Ime` char(20) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Prezime` char(20) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `OIB` varchar(11) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Datum_rodjenja` int(11) DEFAULT NULL,
  `Adresa` char(20) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Grad` char(20) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Postanski_broj` int(20) DEFAULT NULL,
  `Zemlja` char(20) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Telefon` varchar(15) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Studij` varchar(20) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Soba_broj` int(10) DEFAULT NULL,
  `Broj_kartice` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci COMMENT='Podaci o studentima';

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`ID_korisnik`);

--
-- Indexes for table `racuni`
--
ALTER TABLE `racuni`
  ADD PRIMARY KEY (`ID_racuna`),
  ADD KEY `ID_studenta` (`ID_studenta`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `OIB` (`OIB`);

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
  MODIFY `ID_korisnik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `racuni`
--
ALTER TABLE `racuni`
  MODIFY `ID_racuna` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  ADD CONSTRAINT `racuni_ibfk_1` FOREIGN KEY (`ID_studenta`) REFERENCES `student` (`ID`);

--
-- Constraints for table `troskovi`
--
ALTER TABLE `troskovi`
  ADD CONSTRAINT `troskovi_ibfk_1` FOREIGN KEY (`ID_racuna`) REFERENCES `racuni` (`ID_racuna`),
  ADD CONSTRAINT `troskovi_ibfk_2` FOREIGN KEY (`ID_usluga`) REFERENCES `usluge` (`Id_usluga`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
