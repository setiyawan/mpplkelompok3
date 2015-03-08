-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2015 at 06:12 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `ID_Buku` int(11) NOT NULL AUTO_INCREMENT,
  `NRP` varchar(20) NOT NULL,
  `Nama_Buku` varchar(30) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Tahun` int(11) NOT NULL,
  `Penerbit` varchar(30) NOT NULL,
  `Kategori` varchar(3) NOT NULL,
  `Penulis` varchar(20) NOT NULL,
  `Gambar_Buku` varchar(10) NOT NULL,
  `Status` varchar(1) NOT NULL,
  `JReservasi` int(11) NOT NULL,
  PRIMARY KEY (`ID_Buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`ID_Buku`, `NRP`, `Nama_Buku`, `Deskripsi`, `Tahun`, `Penerbit`, `Kategori`, `Penulis`, `Gambar_Buku`, `Status`, `JReservasi`) VALUES
(1, '511210009', 'Ayo Berhitung', 'Blahblahblah', 0, '', '123', 'Albert Enstein', '', '1', 15);

--
-- Triggers `buku`
--
DROP TRIGGER IF EXISTS `delete_buku`;
DELIMITER //
CREATE TRIGGER `delete_buku` AFTER DELETE ON `buku`
 FOR EACH ROW begin
insert into log(NRP,kegiatan,waktu) values (old.id_buku,'delete buku',SYSDATE());
delete from reservasi where ID_Buku = old.id_buku;
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `insert_buku`;
DELIMITER //
CREATE TRIGGER `insert_buku` AFTER INSERT ON `buku`
 FOR EACH ROW insert into log(NRP,kegiatan,waktu) values(new.id_buku,'insert buku',SYSDATE())
//
DELIMITER ;
DROP TRIGGER IF EXISTS `update_buku`;
DELIMITER //
CREATE TRIGGER `update_buku` AFTER UPDATE ON `buku`
 FOR EACH ROW insert into log(NRP,kegiatan,waktu) values(new.id_buku,'update buku',sysdate())
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `ID_Log` int(11) NOT NULL AUTO_INCREMENT,
  `NRP` varchar(20) NOT NULL,
  `Kegiatan` text NOT NULL,
  `Waktu` date NOT NULL,
  PRIMARY KEY (`ID_Log`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID_Log`, `NRP`, `Kegiatan`, `Waktu`) VALUES
(1, '5112100089', 'insert user', '2015-03-05'),
(2, '51121000000', 'insert user', '2015-03-05'),
(3, '5112100089', 'update user', '2015-03-07'),
(4, '512101', 'insert user', '2015-03-07'),
(5, '5212100012', 'insert user', '2015-03-07'),
(6, '5212100012', 'delete user', '2015-03-07'),
(7, '512101', 'update user', '2015-03-07'),
(8, '1', 'insert buku', '2015-03-09'),
(9, '1', 'update buku', '2015-03-09'),
(10, '1', 'update buku', '2015-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
  `ID_Reservasi` int(11) NOT NULL AUTO_INCREMENT,
  `NRP` varchar(20) NOT NULL,
  `ID_Buku` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  PRIMARY KEY (`ID_Reservasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `NamaUser` varchar(30) NOT NULL,
  `NRP` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `JenisKel` varchar(1) NOT NULL,
  `NoTelp` varchar(15) NOT NULL,
  `Alamat` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Foto` varchar(30) NOT NULL,
  `Pekerjaan` varchar(15) NOT NULL,
  `VerifikasiKode` varchar(8) NOT NULL,
  `StatusUser` varchar(1) NOT NULL,
  PRIMARY KEY (`NRP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NamaUser`, `NRP`, `Password`, `JenisKel`, `NoTelp`, `Alamat`, `Email`, `Foto`, `Pekerjaan`, `VerifikasiKode`, `StatusUser`) VALUES
('Budi Anduk', '51121000000', '09876', 'L', '08031931992', 'Jl POPOPO', 'a@gmail.com', '', 'Dosen', '41414', '1'),
('Iroyan Alfi Aziz TS', '5112100089', '123123', 'L', '03172326403', 'Jl. Poklonskaya 313', 'muhammadnear@gmail.com', '', 'Pelajar', '1357', '1'),
('admin_joss', '512101', 'asa', 'L', '031031031031', 'Admin Broooh', 'admin@gmail.com', '', 'admin', '12312313', '2');

--
-- Triggers `user`
--
DROP TRIGGER IF EXISTS `delete_user`;
DELIMITER //
CREATE TRIGGER `delete_user` AFTER DELETE ON `user`
 FOR EACH ROW begin
insert into log(NRP, kegiatan, waktu) values(old.NRP,'delete user',sysdate());
delete from reservasi where NRP=old.NRP;
delete from buku where NRP = old.NRP;
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `insert_user`;
DELIMITER //
CREATE TRIGGER `insert_user` AFTER INSERT ON `user`
 FOR EACH ROW insert into log(NRP,kegiatan,waktu) values(new.NRP,'insert user',sysdate())
//
DELIMITER ;
DROP TRIGGER IF EXISTS `update_user`;
DELIMITER //
CREATE TRIGGER `update_user` AFTER UPDATE ON `user`
 FOR EACH ROW insert into log(NRP,kegiatan,waktu) values (new.NRP,'update user',sysdate())
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
