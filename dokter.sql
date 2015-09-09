-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Sep 2015 pada 16.28
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_fkg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(11) NOT NULL AUTO_INCREMENT,
  `nik_dokter` varchar(512) NOT NULL,
  `nama_dokter` varchar(512) NOT NULL,
  `alamat_dokter` varchar(512) NOT NULL,
  `alamat_praktik_dokter` varchar(512) NOT NULL,
  `telepon_dokter` varchar(512) NOT NULL,
  `password_dokter` varchar(512) NOT NULL,
  PRIMARY KEY (`id_dokter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nik_dokter`, `nama_dokter`, `alamat_dokter`, `alamat_praktik_dokter`, `telepon_dokter`, `password_dokter`) VALUES
(1, '1001', 'Fauzan Mufid', 'Gebang', 'Gebang', '081200001111', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, '5112100059', 'Fadrian', 'Jember', 'Surabaya', '0857481948378', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, '5112100147', 'Yusuf', 'Jakarta', 'Surabaya', '083718491847', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, '5112100222', 'Hihiakus', 'Bandung', 'Bandung', '09876789', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, '9009', 'Ripas Filqadar', 'Manukan Rejo', 'Keputih Tambak', '080989999', '507819e72e1ca53c678f11c38bba8c5b'),
(7, '9009', 'Ghozie Manggala', 'ponorogo', 'ponorogo', '9000', '3683246a604cdd8a0db9991d5a6785a4'),
(8, '9000', 'Drg. Rosa ', 'kertajaya', 'kertajaya', '9000', '5f4dcc3b5aa765d61d8327deb882cf99'),
(9, '021211133035', 'gadis esti, drg', 'dharmawangsa', 'karangmenjangan', '081234567', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
