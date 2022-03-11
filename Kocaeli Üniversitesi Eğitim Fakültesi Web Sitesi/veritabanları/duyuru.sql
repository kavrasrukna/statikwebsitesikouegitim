-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ara 2017, 23:26:35
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
-- Veritabanı: `duyuru`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlik`
--

CREATE TABLE `etkinlik` (
  `id` int(11) NOT NULL,
  `resim` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` mediumtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `etkinlik`
--

INSERT INTO `etkinlik` (`id`, `resim`, `baslik`, `aciklama`) VALUES
(136, 'resimler1/1.jpg', 'Sinav Takvimi/', 'Basvurular YENI - 2017-2018 Guz Yariyil Sonu Sinav Programi'),
(137, 'resimler1/2.jpg', 'Okul Deneyimi ve Ogretmenlik Uygulamasi', ''),
(139, 'resimler1/tev.jpg', '   Turk Egitim Vakfi Yurt Disi Yuksek Lisans Burs Basvurulari ', ''),
(140, 'resimler1/5.jpg', '13/12/2017/', '“Siire, Umuda” – Siir Dinletisinin ucuncusu duzenlendi.'),
(141, 'resimler1/6.jpg', '12/12/2017/', 'Etkinliklerle Ilk Okuma Yazma Ogretimi'),
(142, 'resimler1/8.jpg', '08/12/2017', '“PDR\"de Kariyer Alanlari” semineri gerçeklestirildi.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `etkinlik`
--
ALTER TABLE `etkinlik`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `etkinlik`
--
ALTER TABLE `etkinlik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
