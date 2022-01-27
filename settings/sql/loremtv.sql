-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 27 Oca 2022, 15:24:05
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `guneytv`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gorunntulemeip`
--

DROP TABLE IF EXISTS `gorunntulemeip`;
CREATE TABLE IF NOT EXISTS `gorunntulemeip` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ipAdresi` varchar(35) NOT NULL,
  `haberid` int(10) UNSIGNED NOT NULL,
  `girissayisi` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=427 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gorunntulemeip`
--

INSERT INTO `gorunntulemeip` (`id`, `ipAdresi`, `haberid`, `girissayisi`) VALUES
(426, '127.0.0.1', 5, 1),
(425, '127.0.0.1', 7, 4),
(424, '127.0.0.1', 59, 3),
(423, '127.0.0.1', 22, 0),
(422, '127.0.0.1', 13, 1),
(421, '127.0.0.1', 16, 1),
(420, '127.0.0.1', 14, 0),
(419, '127.0.0.1', 14, 4),
(418, '127.0.0.1', 4, 0),
(417, '127.0.0.1', 4, 4),
(416, '127.0.0.1', 17, 0),
(415, '127.0.0.1', 21, 4),
(414, '127.0.0.1', 58, 0),
(413, '127.0.0.1', 55, 0),
(412, '127.0.0.1', 20, 2),
(411, '127.0.0.1', 19, 1),
(410, '127.0.0.1', 17, 4),
(409, '127.0.0.1', 2, 0),
(408, '127.0.0.1', 12, 2),
(407, '127.0.0.1', 21, 4),
(406, '127.0.0.1', 18, 4),
(405, '127.0.0.1', 15, 0),
(404, '127.0.0.1', 14, 4),
(403, '127.0.0.1', 16, 4),
(402, '127.0.0.1', 11, 1),
(401, '127.0.0.1', 8, 1),
(400, '127.0.0.1', 10, 4),
(399, '127.0.0.1', 6, 1),
(398, '127.0.0.1', 7, 4),
(397, '127.0.0.1', 7, 4),
(396, '127.0.0.1', 7, 4),
(395, '127.0.0.1', 7, 4),
(394, '127.0.0.1', 7, 4),
(393, '127.0.0.1', 7, 4),
(392, '127.0.0.1', 7, 4),
(391, '127.0.0.1', 7, 4),
(390, '127.0.0.1', 7, 4),
(389, '127.0.0.1', 7, 4),
(388, '127.0.0.1', 7, 4),
(387, '127.0.0.1', 7, 4),
(386, '127.0.0.1', 7, 4),
(385, '127.0.0.1', 7, 4),
(384, '127.0.0.1', 7, 4),
(383, '127.0.0.1', 7, 4),
(382, '127.0.0.1', 7, 4),
(381, '127.0.0.1', 7, 4),
(380, '127.0.0.1', 7, 4),
(379, '127.0.0.1', 7, 4),
(378, '127.0.0.1', 7, 4),
(377, '127.0.0.1', 7, 4),
(376, '127.0.0.1', 7, 4),
(375, '127.0.0.1', 7, 4),
(374, '127.0.0.1', 7, 4),
(373, '127.0.0.1', 7, 4),
(372, '127.0.0.1', 7, 4),
(371, '127.0.0.1', 7, 4),
(370, '127.0.0.1', 7, 4),
(369, '127.0.0.1', 7, 4),
(368, '127.0.0.1', 7, 4),
(367, '127.0.0.1', 7, 4),
(366, '127.0.0.1', 7, 4),
(365, '127.0.0.1', 7, 4),
(364, '127.0.0.1', 8, 4),
(363, '127.0.0.1', 8, 4),
(362, '127.0.0.1', 8, 4),
(361, '127.0.0.1', 8, 4),
(360, '127.0.0.1', 8, 4),
(359, '127.0.0.1', 8, 4),
(358, '127.0.0.1', 8, 4),
(357, '127.0.0.1', 8, 4),
(356, '127.0.0.1', 8, 4),
(355, '127.0.0.1', 8, 4),
(354, '127.0.0.1', 8, 4),
(353, '127.0.0.1', 8, 4),
(352, '127.0.0.1', 8, 4),
(351, '127.0.0.1', 8, 4),
(350, '127.0.0.1', 8, 4),
(349, '127.0.0.1', 8, 4),
(348, '127.0.0.1', 8, 4),
(347, '127.0.0.1', 8, 4),
(346, '127.0.0.1', 8, 4),
(345, '127.0.0.1', 8, 4),
(344, '127.0.0.1', 8, 4),
(343, '127.0.0.1', 8, 4),
(342, '127.0.0.1', 8, 4),
(341, '127.0.0.1', 9, 4),
(340, '127.0.0.1', 9, 4),
(339, '127.0.0.1', 9, 4),
(338, '127.0.0.1', 10, 4),
(337, '127.0.0.1', 3, 0),
(336, '127.0.0.1', 1, 2),
(335, '127.0.0.1', 5, 4),
(334, '127.0.0.1', 2, 4),
(333, '127.0.0.1', 7, 4),
(332, '127.0.0.1', 8, 4),
(331, '127.0.0.1', 9, 4),
(330, '127.0.0.1', 10, 4),
(329, '127.0.0.1', 11, 4),
(328, '127.0.0.1', 11, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `g_adminusers`
--

DROP TABLE IF EXISTS `g_adminusers`;
CREATE TABLE IF NOT EXISTS `g_adminusers` (
  `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userName` varchar(200) NOT NULL,
  `userNickName` varchar(200) NOT NULL,
  `userEmail` varchar(200) NOT NULL,
  `userPassword` varchar(220) NOT NULL,
  `userTel` varchar(200) NOT NULL,
  `userIP` varchar(200) NOT NULL,
  `userStatus` tinyint(3) UNSIGNED NOT NULL,
  `userDurum` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `g_adminusers`
--

INSERT INTO `g_adminusers` (`userID`, `userName`, `userNickName`, `userEmail`, `userPassword`, `userTel`, `userIP`, `userStatus`, `userDurum`) VALUES
(1, 'Emre DEMİR', 'developerEmredmr', 'femredemir699@gmail.com', '6b4f5edb7a0bacde6e1ab303e45b759a', '05310000000', '::1', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `g_galeriresim`
--

DROP TABLE IF EXISTS `g_galeriresim`;
CREATE TABLE IF NOT EXISTS `g_galeriresim` (
  `galeriID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `galeriResimAdi` varchar(255) NOT NULL,
  `galeriResimDurumu` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`galeriID`)
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `g_galeriresim`
--

INSERT INTO `g_galeriresim` (`galeriID`, `galeriResimAdi`, `galeriResimDurumu`) VALUES
(135, '1630589386-guneytv.jpg', 1),
(136, '2.png', 1),
(137, '3.jpg', 1),
(138, '4.jpg', 1),
(139, '5.jpg', 1),
(140, '6.jpg', 1),
(141, '1haber', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `g_haber`
--

DROP TABLE IF EXISTS `g_haber`;
CREATE TABLE IF NOT EXISTS `g_haber` (
  `G_HaberID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `KategoriID` int(10) UNSIGNED DEFAULT NULL,
  `turID` int(10) UNSIGNED DEFAULT NULL,
  `G_HaberBaslik` varchar(250) DEFAULT NULL,
  `G_AnaResimID` int(11) DEFAULT NULL,
  `G_AnaAciklama` varchar(250) DEFAULT NULL,
  `G_icerik` text,
  `G_Tarih` varchar(250) DEFAULT NULL,
  `G_Desciription` varchar(255) DEFAULT NULL,
  `videoKodu` varchar(250) DEFAULT NULL,
  `G_haberKaynak` varchar(250) DEFAULT NULL,
  `G_IP` varchar(200) DEFAULT NULL,
  `G_Goruntulenme` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Durum` tinyint(3) UNSIGNED DEFAULT '0',
  PRIMARY KEY (`G_HaberID`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `g_haber`
--

INSERT INTO `g_haber` (`G_HaberID`, `KategoriID`, `turID`, `G_HaberBaslik`, `G_AnaResimID`, `G_AnaAciklama`, `G_icerik`, `G_Tarih`, `G_Desciription`, `videoKodu`, `G_haberKaynak`, `G_IP`, `G_Goruntulenme`, `Durum`) VALUES
(1, 1, 2, '5 günde bin 500 benekli balon balığı yakalandı 5 günde bin 500 benekli balon balığı yakalandı 5 günde bin 500 benekli balon balığı yakalandı ', 135, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1627038416', 's', '', '', 's', 1, 1),
(2, 2, 2, '5 günde bin 500 benekli balon balığı yakalandı ', 137, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1626937416', 's', '', '', 's', 2, 1),
(3, 3, 2, '5 günde bin 500 benekli balon balığı yakalandı ', 136, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1627038416', 's', '', '', 's', 1, 1),
(4, 4, 4, '5 günde bin 500 benekli balon balığı yakalandı ', 141, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1627038416', 's', 'c2pDijXc7k4', '', 's', 2, 1),
(5, 5, 1, '5 günde bin 500 benekli balon balığı yakalandı ', 141, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1627038416', 's', '', '', 's', 2, 1),
(6, 2, 2, '5 günde bin 500 benekli balon balığı yakalandı ', 135, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1627038416', 's', '', '', 's', 1, 1),
(7, 3, 1, '5 günde bin 500 benekli balon balığı yakalandı ', 141, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1627038416', 's', '', '', 's', 36, 1),
(8, 4, 4, '5 günde bin 500 benekli balon balığı yakalandı ', 135, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1627038416', 's', 'BmBmWZDRbSU', '', 's', 25, 1),
(9, 2, 1, '5 günde bin 500 benekli balon balığı yakalandı ', 139, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1627038416', 's', '', '', 's', 4, 1),
(10, 2, 1, '5 günde bin 500 benekli balon balığı yakalandı ', 138, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', 'asda', '1627038416', 's', '', '', 's', 3, 1),
(11, 0, 1, '5 günde bi', 142, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler', '<p>Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.</p><h4>\"SERBEST VE AÇIK HİNT-PASİFİK\" VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEK</h4><p>Suga ve Macron, Çin\'in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı \"Serbest ve Açık Hint-Pasifik\" vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.</p><h4>AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLER</h4><p>Görüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.</p><p><span class=\"image-inline ck-widget\" contenteditable=\"false\"><img src=\"https://icdn.ensonhaber.com/resimler/diger/kok/2021/07/25/japonya-fransa_2545.jpg\" alt=\"Tokyo Olimpiyatları nda Japonya ile Fransa dan iş birliği vurgusu #1\"></span></p><h4>JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAK</h4><p>Bunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya\'nın şimdiye kadar edindiği tecrübelerin Fransa\'ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa\'nın başkentinde düzenlenecek.</p><h4>İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİ</h4><p>Öte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.</p><h4><br data-cke-filler=\"true\"></h4><h4>FRANSA\'NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİ</h4><p>Kyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa\'nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.</p><p>Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.</p><h4>\"SERBEST VE AÇIK HİNT-PASİFİK\" VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEK</h4><p>Suga ve Macron, Çin\'in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı \"Serbest ve Açık Hint-Pasifik\" vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.</p><h4>AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLER</h4><p>Görüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.</p><p><span class=\"image-inline ck-widget\" contenteditable=\"false\"><img src=\"https://icdn.ensonhaber.com/resimler/diger/kok/2021/07/25/japonya-fransa_2545.jpg\" alt=\"Tokyo Olimpiyatları nda Japonya ile Fransa dan iş birliği vurgusu #1\"></span></p><h4>JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAK</h4><p>Bunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya\'nın şimdiye kadar edindiği tecrübelerin Fransa\'ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa\'nın başkentinde düzenlenecek.</p><h4>İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİ</h4><p>Öte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.</p><h4><br data-cke-filler=\"true\"></h4><h4>FRANSA\'NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİ</h4><p>Kyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa\'nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.</p>', '1629124411', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler', 'qoAdkJXvyXc', 'Güney TV', '127.0.0.1', 0, 0),
(30, 0, 0, '5 günde bin', 138, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500&#039;lerden beri endüstri standardı sahte meti', 'Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.&quot;SERBEST VE AÇIK HİNT-PASİFİK&quot; VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin&#039;in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı &quot;Serbest ve Açık Hint-Pasifik&quot; vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya&#039;nın şimdiye kadar edindiği tecrübelerin Fransa&#039;ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa&#039;nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA&#039;NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa&#039;nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.&quot;SERBEST VE AÇIK HİNT-PASİFİK&quot; VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin&#039;in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı &quot;Serbest ve Açık Hint-Pasifik&quot; vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya&#039;nın şimdiye kadar edindiği tecrübelerin Fransa&#039;ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa&#039;nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA&#039;NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa&#039;nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.&amp;nbsp;', '1629121721', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500&#039;lerden beri endüstri standardı sahte meti', NULL, 'Güney TV', '127.0.0.1', 0, 0),
(31, 0, 0, '5 günde bin', 143, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500&#039;lerden beri endüstri standardı sahte meti', 'Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.&quot;SERBEST VE AÇIK HİNT-PASİFİK&quot; VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin&#039;in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı &quot;Serbest ve Açık Hint-Pasifik&quot; vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya&#039;nın şimdiye kadar edindiği tecrübelerin Fransa&#039;ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa&#039;nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA&#039;NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa&#039;nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.&quot;SERBEST VE AÇIK HİNT-PASİFİK&quot; VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin&#039;in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı &quot;Serbest ve Açık Hint-Pasifik&quot; vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya&#039;nın şimdiye kadar edindiği tecrübelerin Fransa&#039;ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa&#039;nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA&#039;NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa&#039;nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.&amp;nbsp;', '1629121816', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500&#039;lerden beri endüstri standardı sahte meti', NULL, 'Güney TV', '127.0.0.1', 0, 0),
(32, 0, 0, '5 günde bin 500 benekli balon balığı yakalandı 5 gü günde bin 500 benekli balon balığı yakalandı 5 g günde bin 500 benekli balon balığı yakalandı 5 gnde bi5', 143, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500&#039;lerden beri endüstri standardı sahte meti', 'Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.&quot;SERBEST VE AÇIK HİNT-PASİFİK&quot; VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin&#039;in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı &quot;Serbest ve Açık Hint-Pasifik&quot; vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya&#039;nın şimdiye kadar edindiği tecrübelerin Fransa&#039;ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa&#039;nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA&#039;NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa&#039;nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.&quot;SERBEST VE AÇIK HİNT-PASİFİK&quot; VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin&#039;in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı &quot;Serbest ve Açık Hint-Pasifik&quot; vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya&#039;nın şimdiye kadar edindiği tecrübelerin Fransa&#039;ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa&#039;nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA&#039;NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa&#039;nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.', '1629121824', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500&#039;lerden beri endüstri standardı sahte metinler', NULL, 'Güney TV', '127.0.0.1', 0, 0),
(33, 0, 0, '5 günde bin 500 benekli balon balığı yakalandı 5 gü günde bin 500 benekli balon balığı yakalandı 5 g günde bin 500 benekli balon balığı yakalandı 5 gnde bi5', 140, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500&#039;lerden beri endüstri standardı sahte meti', 'Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.&quot;SERBEST VE AÇIK HİNT-PASİFİK&quot; VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin&#039;in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı &quot;Serbest ve Açık Hint-Pasifik&quot; vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya&#039;nın şimdiye kadar edindiği tecrübelerin Fransa&#039;ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa&#039;nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA&#039;NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa&#039;nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.&quot;SERBEST VE AÇIK HİNT-PASİFİK&quot; VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin&#039;in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı &quot;Serbest ve Açık Hint-Pasifik&quot; vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya&#039;nın şimdiye kadar edindiği tecrübelerin Fransa&#039;ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa&#039;nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA&#039;NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa&#039;nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.', '1629121836', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500&#039;lerden beri endüstri standardı sahte meti', NULL, 'Güney TV', '127.0.0.1', 0, 0),
(38, 0, 0, '5 günde bin 500 benekli balon balığı yakalandı 5 gü günde bin 500 benekli balon balığı yakalandı 5 g günde bin 500 benekli balon balığı yakalandı 5 gnde bi5', 136, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler', 'Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.\"SERBEST VE AÇIK HİNT-PASİFİK\" VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin\'in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı \"Serbest ve Açık Hint-Pasifik\" vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya\'nın şimdiye kadar edindiği tecrübelerin Fransa\'ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa\'nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA\'NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa\'nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.\"SERBEST VE AÇIK HİNT-PASİFİK\" VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin\'in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı \"Serbest ve Açık Hint-Pasifik\" vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya\'nın şimdiye kadar edindiği tecrübelerin Fransa\'ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa\'nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA\'NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa\'nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.', '1629122217', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler', NULL, 'Güney TV', '127.0.0.1', 0, 0),
(59, 1, 2, '5 günde bin 500 benekli balon balığı yakalandı 5 günde bin 500 benekli balon balığı yakalandı 5 günde bin 500 benekli balon balığı yakalandı', 135, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler', 'Japonya Başbakanı Suga Yoşihide ile Tokyo Olimpiyatları açılış töreni kapsamında ülkeyi ziyaret eden Fransa Cumhurbaşkanı Emmanuel Macron, bu vesile ile siyasi ve ekonomik birçok konuda görüştü.\"SERBEST VE AÇIK HİNT-PASİFİK\" VİZYONUNA YÖNELİK YAKIN İŞ BİRLİĞİNİN GELİŞTİRİLECEKSuga ve Macron, Çin\'in tehditkar faaliyetlerine karşı hukukun üstünlüğüne dayalı \"Serbest ve Açık Hint-Pasifik\" vizyonunun gerçekleştirilmesine yönelik yakın iş birliğinin geliştirilmesinde mutabakata vardı.AŞILARA KÜRESEL DÜZEYDE ADİL ERİŞİMİN KONUSUNDA HEMFİKİRLERGörüşme sonrası duyurulan ortak bildiriye göre iki lider, koronavirüsle mücadelede aşılara küresel düzeyde adil erişimin sağlanması için hızlı ve etkili çözüm bulunması gerektiğini vurguladı.JAPONYA, FRANSA’YA OLİMPİYAT TECRÜBELERİNİ AKTARACAKBunun yanı sıra Tokyo 2020 Oyunları sürecinde Japonya\'nın şimdiye kadar edindiği tecrübelerin Fransa\'ya aktarılmasında da anlaşıldı. 2024 Yaz Olimpiyatları, Fransa\'nın başkentinde düzenlenecek.İKLİM DEĞİŞİKLİĞİYLE MÜCADELEDE İŞ BİRLİĞİÖte yandan iki ülke, iklim değişikliğiyle mücadelede de iş birliği yapacak.FRANSA\'NIN BÖLGE İSTİKRARA KATKI SUNMAK İSTEĞİKyodo ajansı, Hint ve Pasifik okyanuslarında ada bölgelerine sahip Fransa\'nın çok uluslu askeri tatbikatlar ile bölgeye yönelik ilgisini artırdığını, ABD ve Japonya dahil demokratik ülkelerle bölge istikrarına katkı sunmak istediğini bildirdi.', '1630603019', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler', NULL, 'Güney TV', '127.0.0.1', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `g_resimler`
--

DROP TABLE IF EXISTS `g_resimler`;
CREATE TABLE IF NOT EXISTS `g_resimler` (
  `resimid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `resimadi` varchar(255) NOT NULL,
  `resimdurumu` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`resimid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `g_yonetimkunye`
--

DROP TABLE IF EXISTS `g_yonetimkunye`;
CREATE TABLE IF NOT EXISTS `g_yonetimkunye` (
  `yonetimKunyeID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `G_Unvan` varchar(255) NOT NULL,
  `G_Isim` varchar(255) NOT NULL,
  `durum` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`yonetimKunyeID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `g_yonetimkunye`
--

INSERT INTO `g_yonetimkunye` (`yonetimKunyeID`, `G_Unvan`, `G_Isim`, `durum`) VALUES
(1, 'Yönetim Kurulu Başkanı', 'Ahmet TUFAN', 1),
(2, 'Genel Yayın Yönetmeni', 'Kaya KAYGU', 1),
(3, 'İzleyici Temsilcisi', 'Kaya KAYGU', 1),
(4, 'Reklam', 'lorem@gmail.com', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberkategori`
--

DROP TABLE IF EXISTS `haberkategori`;
CREATE TABLE IF NOT EXISTS `haberkategori` (
  `kategoriid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `G_Haberkategori` varchar(250) NOT NULL,
  `G_HaberkategoriDurum` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`kategoriid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haberkategori`
--

INSERT INTO `haberkategori` (`kategoriid`, `G_Haberkategori`, `G_HaberkategoriDurum`) VALUES
(1, 'Ekonomi', 1),
(2, 'Finans', 1),
(3, 'Çevre', 1),
(4, 'Video Haber', 1),
(5, 'Spor', 1),
(6, 'Kültür Sanat', 1),
(7, 'Genel', 1),
(8, 'Asayiş', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberturu`
--

DROP TABLE IF EXISTS `haberturu`;
CREATE TABLE IF NOT EXISTS `haberturu` (
  `turid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `turAdi` varchar(200) NOT NULL,
  `turDurum` tinyint(4) NOT NULL,
  PRIMARY KEY (`turid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haberturu`
--

INSERT INTO `haberturu` (`turid`, `turAdi`, `turDurum`) VALUES
(1, 'Genel', 1),
(2, 'Manset', 1),
(3, 'SagBaslikHaber', 1),
(4, 'Video Haber', 1),
(5, 'Slider Manset', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hostandmail`
--

DROP TABLE IF EXISTS `hostandmail`;
CREATE TABLE IF NOT EXISTS `hostandmail` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `baslik` varchar(200) NOT NULL,
  `baslikicerik` varchar(200) NOT NULL,
  `durum` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hostandmail`
--

INSERT INTO `hostandmail` (`id`, `baslik`, `baslikicerik`, `durum`) VALUES
(1, 'Yer Sağlayıcı', 'Web Hosting', 1),
(2, 'Elektronik Posta', 'femredemir699@gmail.com', 1),
(3, 'Yazılım ve Sistem Yönetimi', 'femredemir699@gmail.com', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sitegenelbilgi`
--

DROP TABLE IF EXISTS `sitegenelbilgi`;
CREATE TABLE IF NOT EXISTS `sitegenelbilgi` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `siteAdi` varchar(255) NOT NULL DEFAULT 'Site Adi',
  `siteTitle` varchar(255) NOT NULL DEFAULT 'Site Title',
  `siteDescription` varchar(250) NOT NULL DEFAULT 'Site Description',
  `siteLogo` varchar(250) NOT NULL,
  `siteURL` varchar(255) NOT NULL,
  `siteSlogan` varchar(255) NOT NULL,
  `siteMail` varchar(255) NOT NULL,
  `siteMailSifre` varchar(250) NOT NULL,
  `siteMailHost` varchar(250) NOT NULL,
  `isletmeResmiAd` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sitegenelbilgi`
--

INSERT INTO `sitegenelbilgi` (`id`, `siteAdi`, `siteTitle`, `siteDescription`, `siteLogo`, `siteURL`, `siteSlogan`, `siteMail`, `siteMailSifre`, `siteMailHost`, `isletmeResmiAd`) VALUES
(1, 'Lorem TV', 'Lorem TV', 'Site Description', 'logo.png', 'http://localhost/guneytv/', 'Güney\'in Güçlü Sesi', 'femredemir699@gmail.com', '123456789', 'smtp.gmail.com', 'Lorem Radyo Televizyon Yayıncılık ve Ticaret A.Ş.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteicerikdurumu`
--

DROP TABLE IF EXISTS `siteicerikdurumu`;
CREATE TABLE IF NOT EXISTS `siteicerikdurumu` (
  `icerikid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `iceriksayfası` varchar(250) NOT NULL,
  `icerikAdi` varchar(250) NOT NULL,
  `icerikDurumu` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`icerikid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siteicerikdurumu`
--

INSERT INTO `siteicerikdurumu` (`icerikid`, `iceriksayfası`, `icerikAdi`, `icerikDurumu`) VALUES
(1, 'iletisim', 'mail', 1),
(2, 'iletisim', 'iletisimFormu', 1),
(3, 'iletisim', 'harita', 1),
(4, 'header', 'sondakika', 1),
(5, 'anasayfa', 'Ust Manset', 1),
(6, 'anasayfa', 'Slider Manset', 1),
(7, 'anasayfa', 'Video Haber', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteiletisim`
--

DROP TABLE IF EXISTS `siteiletisim`;
CREATE TABLE IF NOT EXISTS `siteiletisim` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `siteAdres` text NOT NULL,
  `siteAdresililce` varchar(255) NOT NULL,
  `siteTelefon` varchar(250) NOT NULL,
  `siteTelefon2` varchar(250) NOT NULL,
  `siteFax` varchar(250) NOT NULL,
  `siteHaritaLink` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siteiletisim`
--

INSERT INTO `siteiletisim` (`id`, `siteAdres`, `siteAdresililce`, `siteTelefon`, `siteTelefon2`, `siteFax`, `siteHaritaLink`) VALUES
(1, 'İşletme adresi Lorem Ipsum is simply dummy ', 'Tarsus/MERSİN', '(0324) 300 00 00', '', '(0324) 300 00 00', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d797.4837354831899!2d34.8782316292477!3d36.91581987098385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1626525394444!5m2!1str!2str');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sitekunyebilgileri`
--

DROP TABLE IF EXISTS `sitekunyebilgileri`;
CREATE TABLE IF NOT EXISTS `sitekunyebilgileri` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `G_KunyeBaslik` varchar(255) NOT NULL,
  `G_BaslikIcerik` varchar(255) NOT NULL,
  `durum` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sitekunyebilgileri`
--

INSERT INTO `sitekunyebilgileri` (`id`, `G_KunyeBaslik`, `G_BaslikIcerik`, `durum`) VALUES
(1, 'Ünvanı', 'Lorem Radyo Televizyon Yayıncılık ve Ticaret A.Ş.', 1),
(2, 'Logo / Çağrı İşareti', 'Televizyon (Lorem TV)', 1),
(3, 'Yayın Ortamı', 'Karasal ortamı', 1),
(4, 'Lisans Tipi', 'T3', 1),
(5, 'Yayın Türü', 'Genel', 1),
(6, 'Yazışma Adresi', 'Adres Lorem Ipsum is simply dummy text Tarsus – MERSİN ', 1),
(7, 'Telefon ve Faks', '(324) 300 00 00', 1),
(8, 'İnternet Adresi', 'www.lorem.com.tr', 0),
(9, 'E-Posta Adresi ', 'lorem@gmail.com', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sitepage`
--

DROP TABLE IF EXISTS `sitepage`;
CREATE TABLE IF NOT EXISTS `sitepage` (
  `pageid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pageName` varchar(250) NOT NULL,
  `pagesNumber` int(10) UNSIGNED NOT NULL,
  `pageDurum` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`pageid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sitepage`
--

INSERT INTO `sitepage` (`pageid`, `pageName`, `pagesNumber`, `pageDurum`) VALUES
(1, 'Künye', 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sitesosyalmedyalink`
--

DROP TABLE IF EXISTS `sitesosyalmedyalink`;
CREATE TABLE IF NOT EXISTS `sitesosyalmedyalink` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sosyalMedyaAdi` varchar(255) NOT NULL,
  `sosyalMedyaLogo` varchar(255) NOT NULL,
  `sosyalMedyaLink` varchar(255) NOT NULL,
  `linkDurumu` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sitesosyalmedyalink`
--

INSERT INTO `sitesosyalmedyalink` (`id`, `sosyalMedyaAdi`, `sosyalMedyaLogo`, `sosyalMedyaLink`, `linkDurumu`) VALUES
(1, 'instagram', 'instagram', 'https://www.instagram.com', 1),
(2, 'facebook', 'facebook', 'https://www.facebook.com', 1),
(3, 'youtube', 'youtube', 'https://www.youtube.com', 1),
(4, 'twitter', 'twitter', 'https://twitter.com', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slidergosterilensayi`
--

DROP TABLE IF EXISTS `slidergosterilensayi`;
CREATE TABLE IF NOT EXISTS `slidergosterilensayi` (
  `sliderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sliderAdi` varchar(200) NOT NULL,
  `sliderSayfa` varchar(200) NOT NULL,
  `sliderAdet` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`sliderID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slidergosterilensayi`
--

INSERT INTO `slidergosterilensayi` (`sliderID`, `sliderAdi`, `sliderSayfa`, `sliderAdet`) VALUES
(1, 'homegenelhaber', 'anasayfa', 15),
(2, 'videohaber', 'anasayfa', 3),
(3, 'anasayfamansetslider', 'anasayfa', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sozlesmemetinleri`
--

DROP TABLE IF EXISTS `sozlesmemetinleri`;
CREATE TABLE IF NOT EXISTS `sozlesmemetinleri` (
  `metinid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `HakkimizdaMetin` text,
  `GizlilikSozlesmesiMetin` text,
  `KullanimKosullariMetin` text,
  `cerezpolitikasi` text,
  PRIMARY KEY (`metinid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sozlesmemetinleri`
--

INSERT INTO `sozlesmemetinleri` (`metinid`, `HakkimizdaMetin`, `GizlilikSozlesmesiMetin`, `KullanimKosullariMetin`, `cerezpolitikasi`) VALUES
(1, 'HakkimizdaMetin', 'GizlilikSozlesmesiMetin', 'KullanimKosullariMetin', 'cerezpolitikasi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tarihler`
--

DROP TABLE IF EXISTS `tarihler`;
CREATE TABLE IF NOT EXISTS `tarihler` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tarih` varchar(250) NOT NULL,
  `gunad` varchar(250) NOT NULL,
  `haftaDurumu` tinyint(3) UNSIGNED NOT NULL,
  `firstdate` int(10) UNSIGNED NOT NULL,
  `lastdate` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tarihler`
--

INSERT INTO `tarihler` (`id`, `tarih`, `gunad`, `haftaDurumu`, `firstdate`, `lastdate`) VALUES
(20, '31.07.2021', 'Cumartesi', 0, 26, 1),
(19, '30.07.2021', 'Cuma', 0, 26, 1),
(18, '29.07.2021', 'Perşembe', 0, 26, 1),
(17, '28.07.2021', 'Çarşamba', 0, 26, 1),
(16, '27.07.2021', 'Salı', 0, 26, 1),
(15, '26.07.2021', 'Pazartesi', 0, 26, 1),
(8, '19.07.2021', 'Pazartesi', 0, 19, 25),
(9, '20.07.2021', 'Salı', 0, 19, 25),
(10, '21.07.2021', 'Çarşamba', 0, 19, 25),
(11, '22.07.2021', 'Perşembe', 0, 19, 25),
(12, '23.07.2021', 'Cuma', 0, 19, 25),
(13, '24.07.2021', 'Cumartesi', 0, 19, 25),
(14, '25.07.2021', 'Pazar', 0, 19, 25),
(21, '01.08.2021', 'Pazar', 0, 26, 1),
(22, '02.08.2021', 'Pazartesi', 0, 2, 8),
(23, '03.08.2021', 'Salı', 0, 2, 8),
(24, '04.08.2021', 'Çarşamba', 0, 2, 8),
(25, '05.08.2021', 'Perşembe', 0, 2, 8),
(26, '06.08.2021', 'Cuma', 0, 2, 8),
(27, '07.08.2021', 'Cumartesi', 0, 2, 8),
(28, '08.08.2021', 'Pazar', 0, 2, 8),
(29, '09.08.2021', 'Pazartesi', 0, 9, 15),
(30, '10.08.2021', 'Salı', 0, 9, 15),
(31, '11.08.2021', 'Çarşamba', 0, 9, 15),
(32, '12.08.2021', 'Perşembe', 0, 9, 15),
(33, '13.08.2021', 'Cuma', 0, 9, 15),
(34, '14.08.2021', 'Cumartesi', 0, 9, 15),
(35, '15.08.2021', 'Pazar', 0, 9, 15),
(48, '22.08.2021', 'Cumartesi', 0, 17, 23),
(47, '21.08.2021', 'Cuma', 0, 17, 23),
(46, '20.08.2021', 'Perşembe', 0, 17, 23),
(45, '19.08.2021', 'Çarşamba', 0, 17, 23),
(44, '18.08.2021', 'Salı', 0, 17, 23),
(43, '17.08.2021', 'Pazartesi', 0, 17, 23),
(49, '23.08.2021', 'Pazar', 0, 17, 23),
(50, '16.08.2021', 'Pazartesi', 0, 16, 22),
(51, '17.08.2021', 'Salı', 0, 16, 22),
(52, '18.08.2021', 'Çarşamba', 0, 16, 22),
(53, '19.08.2021', 'Perşembe', 0, 16, 22),
(54, '20.08.2021', 'Cuma', 0, 16, 22),
(55, '21.08.2021', 'Cumartesi', 0, 16, 22),
(56, '22.08.2021', 'Pazar', 0, 16, 22),
(57, '30.08.2021', 'Pazartesi', 0, 30, 5),
(58, '31.08.2021', 'Salı', 0, 30, 5),
(59, '01.09.2021', 'Çarşamba', 0, 30, 5),
(60, '02.09.2021', 'Perşembe', 0, 30, 5),
(61, '03.09.2021', 'Cuma', 0, 30, 5),
(62, '04.09.2021', 'Cumartesi', 0, 30, 5),
(63, '05.09.2021', 'Pazar', 0, 30, 5),
(64, '13.09.2021', 'Pazartesi', 0, 13, 19),
(65, '14.09.2021', 'Salı', 0, 13, 19),
(66, '15.09.2021', 'Çarşamba', 0, 13, 19),
(67, '16.09.2021', 'Perşembe', 0, 13, 19),
(68, '17.09.2021', 'Cuma', 0, 13, 19),
(69, '18.09.2021', 'Cumartesi', 0, 13, 19),
(70, '19.09.2021', 'Pazar', 0, 13, 19),
(71, '24.01.2022', 'Pazartesi', 1, 24, 30),
(72, '25.01.2022', 'Salı', 1, 24, 30),
(73, '26.01.2022', 'Çarşamba', 1, 24, 30),
(74, '27.01.2022', 'Perşembe', 1, 24, 30),
(75, '28.01.2022', 'Cuma', 1, 24, 30),
(76, '29.01.2022', 'Cumartesi', 1, 24, 30),
(77, '30.01.2022', 'Pazar', 1, 24, 30);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yayinakisi`
--

DROP TABLE IF EXISTS `yayinakisi`;
CREATE TABLE IF NOT EXISTS `yayinakisi` (
  `yAkisID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `YTarihID` int(10) UNSIGNED NOT NULL,
  `Yayinicerik` varchar(250) NOT NULL,
  `YayinicerikSaati` int(10) UNSIGNED NOT NULL,
  `durum` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`yAkisID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yayinakisi`
--

INSERT INTO `yayinakisi` (`yAkisID`, `YTarihID`, `Yayinicerik`, `YayinicerikSaati`, `durum`) VALUES
(3, 9, 'Sabah Haberleri', 1626595200, 1),
(4, 9, 'Çizgi Dizi', 1626602400, 1),
(5, 10, 'Film', 0, 1),
(6, 10, 'Akşam Haberleri', 0, 1),
(7, 11, 'haber', 1626947100, 1),
(8, 11, 'film', 1626954300, 1),
(9, 11, 'Çizgi film', 1626939900, 1),
(10, 32, 'asdasdsadas', 18, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
