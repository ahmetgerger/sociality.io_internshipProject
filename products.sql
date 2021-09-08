-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Eyl 2021, 01:36:26
-- Sunucu sürümü: 8.0.18
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `project9`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`product_id`, `name`, `image`, `price`) VALUES
(1, 'Birth Flower necklace, Engraved Botanical Disc Necklace, Personalized Necklace, Bouquet Necklace, Floral Necklace, Birthday Gift for Her', 'https://i.etsystatic.com/25922464/r/il/e456e5/3317913909/il_794xN.3317913909_5uv8.jpg', '13.44'),
(2, 'CANNE-ROF Women Leather Jacket,Red fur with leather coat,leather jacket, real genuine jacket, 100% Natural Lamb Skin, Barya Leather', 'https://i.etsystatic.com/26504063/r/il/682f1b/2749321816/il_794xN.2749321816_1hi1.jpg', '1,134.23'),
(3, 'Brass or Silver Leaf Bookmark Set', 'https://i.etsystatic.com/12149676/r/il/b96248/2959017777/il_794xN.2959017777_t44r.jpg', '9.50'),
(4, 'Plant Animal Decorations - houseplant gifts', 'https://i.etsystatic.com/12149676/r/il/da031a/2975998837/il_794xN.2975998837_5ksf.jpg', '5.95'),
(5, 'FOREST FAIRY FIGURINE | Garden Ornament | Polyresin Figurines | Terrarium Supplies | Stunning Ornaments', 'https://i.etsystatic.com/23560486/r/il/bf4b5f/3182153168/il_794xN.3182153168_m0rp.jpg', '7.99'),
(6, 'Pressed Feather Fern 16 pieces', 'https://i.etsystatic.com/12632662/r/il/046e89/935153446/il_794xN.935153446_exd4.jpg', '5.02'),
(7, 'Tropical bird bookmarks; Toucan, Macaw, Lovebird and Hummingbird', 'https://i.etsystatic.com/12149676/r/il/41a787/1241569497/il_794xN.1241569497_225x.jpg', '7.95'),
(8, 'Bookmarks Set of 3 (450gsm), bookmarks gold foil, celestial bookmarks, moon bookmarks, celestial bookmarks moon and stars gold foiled', 'https://i.etsystatic.com/18056866/r/il/7eee8c/3259112986/il_794xN.3259112986_bkt1.jpg', '4.31'),
(9, 'Lotus and Pagoda set of 2 metal fan bookmark', 'https://i.etsystatic.com/18075218/r/il/bb9e56/3238001545/il_794xN.3238001545_uuyo.jpg', '7.99'),
(10, 'Elegant Pressed Flower and Leaf Resin Bookmark, unique present, Ideal little gift to say thinking of you', 'https://i.etsystatic.com/23629533/r/il/e2e345/2817813230/il_794xN.2817813230_cmuh.jpg', '8.95');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
