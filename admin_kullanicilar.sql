-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 23 May 2021, 19:34:36
-- Sunucu sürümü: 5.5.68-MariaDB
-- PHP Sürümü: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `admin_kullanicilar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sinavlar`
--

CREATE TABLE `sinavlar` (
  `kayitIsim` varchar(15) NOT NULL,
  `turkceDogru` int(15) NOT NULL,
  `turkceYanlis` int(15) NOT NULL,
  `tarihDogru` int(15) NOT NULL,
  `tarihYanlis` int(15) NOT NULL,
  `cografyaDogru` int(15) NOT NULL,
  `cografyaYanlis` int(15) NOT NULL,
  `felsefeDogru` int(15) NOT NULL,
  `felsefeYanlis` int(15) NOT NULL,
  `dinDogru` int(15) NOT NULL,
  `dinYanlis` int(15) NOT NULL,
  `matematikDogru` int(15) NOT NULL,
  `matematikYanlis` int(15) NOT NULL,
  `fizikDogru` int(15) NOT NULL,
  `fizikYanlis` int(15) NOT NULL,
  `kimyaDogru` int(15) NOT NULL,
  `kimyaYanlis` int(15) NOT NULL,
  `biyolojiDogru` int(15) NOT NULL,
  `biyolojiYanlis` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `kullaniciadi` varchar(25) NOT NULL,
  `sifre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`kullaniciadi`, `sifre`) VALUES
('ogretmen', '0gretmen_');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
