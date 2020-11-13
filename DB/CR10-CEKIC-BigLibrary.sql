-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 13. Nov 2020 um 20:07
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `CR10-CEKIC-BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `CR10-CEKIC-BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `CR10-CEKIC-BigLibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `author_firstname` varchar(50) NOT NULL,
  `author_lastname` varchar(50) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `short_description` varchar(3000) NOT NULL,
  `publish_date` date NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(150) NOT NULL,
  `publisher_size` enum('big','medium','small') NOT NULL,
  `type` enum('book','CD','DVD') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `data`
--

INSERT INTO `data` (`id`, `title`, `image`, `author_firstname`, `author_lastname`, `ISBN`, `short_description`, `publish_date`, `publisher_name`, `publisher_address`, `publisher_size`, `type`) VALUES
(1, 'In Search of Lost Time', 'https://prodimage.images-bn.com/pimages/9781772268850_p0_v1_s600x595.jpg', 'Marcel', 'Proust', '978-3-86680-192-9', 'Swann\'s Way, the first part of A la recherche de temps perdu.', '1913-11-03', 'Pinguin', 'Sweden', 'big', 'book'),
(2, 'Ulysses', 'https://images-na.ssl-images-amazon.com/images/I/71Zweh-pI+L.jpg', 'James', 'Joyce', '978-3-86680-192-4', 'Ulysses chronicles the passage of Leopold Bloom through Dublin during an ordinary day. ', '1904-11-03', 'Pinguin', 'Sweden', 'big', 'book'),
(22, 'Don Quixote', 'https://www.enfrentearte.com/wp-content/uploads/2017/03/DonQuijoteDeLaMancha-767176.jpg', 'Miguel', 'de Cervantes', '978-3-16-148410-0', 'Alonso Quixano, a retired country gentleman in his fifties, lives in an unnamed.', '1950-09-22', 'Pinguin', 'Sweden', 'big', 'book'),
(23, 'The Great Gatsby', 'https://images-na.ssl-images-amazon.com/images/I/81af+MCATTL.jpg', 'F. Scott', 'Fitzgerald', '978-3-16-148410-0', 'The novel chronicles an era that Fitzgerald himself dubbed the ', '2020-11-12', 'Penguin', 'sweden', 'medium', 'book'),
(24, 'One hundred years of solitude', 'https://images-na.ssl-images-amazon.com/images/I/81whMR8ZdQL.jpg', 'Gabriel', 'Garcia Marquez', '978-3-86680-192-5', 'One of the 20th century\'s enduring works, One Hundred Years of Solitude is a widely.', '2020-10-05', 'Pinguin', 'sweden', 'big', 'book'),
(25, 'War and Peace', 'https://images-na.ssl-images-amazon.com/images/I/A1aDb5U5myL.jpg', 'Leo', 'Tolstoy', '978-3-16-148410-8', 'Epic in scale, War and Peace delineates in graphic detail.', '2020-11-12', 'penguin', 'sweden', 'big', 'book'),
(26, 'Lolita', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Lolita_1955.JPG/170px-Lolita_1955.JPG', 'Vladimir', 'Naabokov', '978-3-16-148410-2', 'The book is internationally famous for its innovative style.', '2020-11-01', 'Penguin', 'sweden', 'big', 'book'),
(27, 'Hamlet', 'https://m.media-amazon.com/images/I/41ZprmZ5KqL.jpg', 'William', 'Shakespeare', '978-3-16-14823', 'The Tragedy of Hamlet, Prince of Denmark, or more simply Hamlet.', '2020-08-07', 'Penguin', 'sweden', 'big', 'book'),
(28, 'The Odyssey', 'https://prodimage.images-bn.com/pimages/9781435166721_p0_v7_s550x406.jpg', 'Homer', '', '978-3-16-1455', 'The Odyssey is one of two major ancient Greek.', '2020-11-07', 'Penguin', 'sweden', 'big', 'book'),
(29, 'Crime and Punishment', 'https://upload.wikimedia.org/wikipedia/en/4/4b/Crimeandpunishmentcover.png', 'Fyodor', 'Dostoyevsky', '978-3-16-14899', 'It is a murder story, told from a murder;s point of view.', '2020-06-11', 'Penguin', 'sweden', 'small', 'book');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
