-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 02 oct. 2018 à 08:30
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_2`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53'),
(2, 1, 'Maxime', 'Oui, ça commence pas très fort ce blog...', '2010-03-25 16:57:16'),
(4, 2, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(5, 2, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(7, 1, 'theo', 'test', '2018-05-28 14:40:02'),
(9, 2, 'John', 'Très bon article, j\'aime vraiment beaucoup le style d\'écriture. J\'ai hâte de découvrir la suite de cette aventure extraordinaire ! Vite !', '2018-06-07 20:23:59'),
(10, 10, 'Théo', 'Coucou, super article !', '2018-06-12 17:57:39'),
(11, 41, 'MJ', 'Salut', '2018-06-17 11:35:18'),
(12, 62, 'John', 'Magnifique billet ! Merci pour ce moment de partage.', '2018-06-20 13:05:49'),
(16, 62, 'test', 'test', '2018-09-25 20:28:52'),
(17, 62, 'test1', 'tessst', '2018-09-27 10:50:39');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(51, 'Chapitre 1: Petit point sur l\'Alaska', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 12:52:11'),
(52, 'Chapitre 2: Découverte de la capitale, Juneau', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 12:55:39'),
(53, 'Chapitre 3: Un pays glacial', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 12:56:42'),
(54, 'Chapitre 4: No man\'s land - Un desert', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 12:58:04'),
(55, 'Chapitre 5: Premier contact, des ours polaires', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 12:58:48'),
(56, 'Chapitre 6: La solitude', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 13:00:30'),
(57, 'Chapitre 7: La péninsule de Kenai', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 13:00:52'),
(58, 'Chapitre 8: Dépaysement total', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 13:01:16'),
(59, 'Chapitre 9: La fonte des glaces', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 13:01:56'),
(60, 'Chapitre 10: Réchauffement climatique', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 13:02:16'),
(61, 'Chapitre 11: Sur la chemin du retour', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 13:02:43'),
(62, 'Chapitre 12: Billet retour pour l\'Alaska', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor ut mauris vitae ultrices. Sed in eros sit amet libero cursus malesuada. Nunc gravida vel elit blandit fringilla. Curabitur dictum elit quam, id auctor ligula tempor vel. Donec malesuada laoreet justo, non tincidunt tortor dignissim id. Donec ultricies sem vitae diam cursus fermentum. Etiam tincidunt gravida ultricies.</p>\r\n<p style=\"text-align: justify;\">Phasellus tortor arcu, ultrices quis sagittis non, efficitur quis est. Pellentesque ac libero ut felis aliquet eleifend. Sed eu magna lorem. Donec eget lorem elit. Nulla facilisi. Donec dictum, erat vel molestie porta, sem nibh interdum dolor, sed ultricies dolor ex et magna. Pellentesque at odio eget mauris mollis facilisis at malesuada dui. Sed at sapien ac elit lobortis fermentum. Maecenas ac semper velit. Donec at porta dolor. Fusce nec purus felis. Sed arcu urna, sollicitudin ut varius in, pellentesque non sem. Nam pellentesque est quis lacus molestie, in accumsan neque convallis. Aenean id consequat arcu.</p>\r\n<p style=\"text-align: justify;\">Morbi malesuada eget nibh nec hendrerit. Aenean at luctus sapien. Etiam nec libero ac orci convallis placerat. Mauris fringilla vestibulum enim, non maximus urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam odio quam, lobortis at leo nec, dignissim efficitur nulla. Aenean accumsan eros non nisi fermentum lacinia.</p>\r\n<p style=\"text-align: justify;\">Pellentesque vulputate lorem accumsan mattis imperdiet. Maecenas tempor, tortor vel venenatis posuere, purus tellus condimentum mi, nec sollicitudin justo velit quis turpis. Nullam eget ligula justo. Cras congue in leo quis pharetra. Nulla eu placerat leo. Proin vitae consequat est. Pellentesque sed viverra leo. Morbi at pellentesque turpis. Integer sed elit consequat est varius scelerisque nec id velit. In pretium eleifend eros, vel fermentum felis aliquet in. Integer ante ligula, fringilla ac felis eget, ultricies lobortis erat.</p>\r\n<p style=\"text-align: justify;\">Phasellus aliquet convallis venenatis. Duis varius ornare cursus. Donec ut tincidunt ipsum. Sed ac nibh quis leo pellentesque imperdiet. Suspendisse ex orci, placerat vel tempor et, porta hendrerit erat. Donec rhoncus metus a eleifend elementum. Integer pretium nibh sit amet fermentum venenatis. Donec a ligula rhoncus, sollicitudin magna a, auctor ante. Vestibulum sit amet aliquet neque. Praesent et eros tristique, imperdiet augue at, pellentesque tortor. Mauris ante nulla, semper vitae tincidunt sed, dapibus nec nibh. In non odio augue. Phasellus nec est dolor. Ut ante nisi, tincidunt sed libero tincidunt, tincidunt fermentum purus. Vivamus non condimentum mauris.</p>', '2018-06-20 13:03:04');

-- --------------------------------------------------------

--
-- Structure de la table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `report_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `report`
--

INSERT INTO `report` (`id`, `comment_id`, `report_date`) VALUES
(37, 16, '2018-09-25 20:59:24'),
(39, 12, '2018-09-25 21:01:09');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_comments` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
