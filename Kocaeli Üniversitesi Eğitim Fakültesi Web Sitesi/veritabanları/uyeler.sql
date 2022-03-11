-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ara 2017, 23:27:12
-- Sunucu sürümü: 10.1.26-MariaDB
-- PHP Sürümü: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uyeler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo`
--

CREATE TABLE `tablo` (
  `id` int(11) NOT NULL,
  `ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tablo`
--

INSERT INTO `tablo` (`id`, `ad`, `soyad`, `kullanici_adi`, `sifre`) VALUES
(7, 'hatice', 'Ã¶zdemir', 'hozdemir', '123456789'),
(9, 'gozde', 'kaya', 'gk12', 'gk12'),
(18, 'rükna', 'kavras', 'rkavras', '12345');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tablo`
--
ALTER TABLE `tablo`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tablo`
--
ALTER TABLE `tablo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
