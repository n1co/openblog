-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 25 Août 2013 à 20:22
-- Version du serveur: 5.5.32-0ubuntu0.13.04.1
-- Version de PHP: 5.4.9-4ubuntu2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `catId` int(11) NOT NULL AUTO_INCREMENT,
  `catTitle` varchar(20) NOT NULL,
  PRIMARY KEY (`catId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`catId`, `catTitle`) VALUES
(1, 'Cat 1'),
(2, 'Cat 42'),
(3, 'Wouuuuuu !'),
(4, 'FUUUUUU');

-- --------------------------------------------------------

--
-- Structure de la table `plugins`
--

CREATE TABLE IF NOT EXISTS `plugins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_file` varchar(50) NOT NULL,
  `enabled` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `plugins`
--

INSERT INTO `plugins` (`id`, `plugin_file`, `enabled`) VALUES
(1, 'test', 1);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `onfront` int(11) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(20) NOT NULL,
  `cat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `onfront`, `title`, `content`, `created`, `author`, `cat`) VALUES
(1, 1, '1st Blog PostRERERE', '                                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.AAAAA\r\n\r\n\r\n\r\n\r\n\r\n', '2013-08-16 10:33:11', 'Konolol', 3),
(23, 1, 'Wouuuu super post édité !', '                     Alors:<div><br></div><div>Blablabla <b>BLA</b></div><div><b><br></b></div><div style="text-align: center;">test !</div><div style="text-align: center;"><ol><li style="text-align: justify;">test</li><li style="text-align: justify;"><span style="text-align: left; line-height: 1.428571429;">test</span><br></li><li style="text-align: justify;"><span style="text-align: left; line-height: 1.428571429;">test</span><br></li><li style="text-align: justify;"><span style="text-align: left; line-height: 1.428571429;">test</span><br></li><li style="text-align: justify;"><span style="text-align: left; line-height: 1.428571429;">test</span><br></li><li style="text-align: justify;"><span style="text-align: left; line-height: 1.428571429;">test</span></li></ol><div style="text-align: left;"><font size="5">testtest TEST</font></div><div style="text-align: left;"><font size="5"><br></font></div><div style="text-align: left;"><font size="5">éèèéèéèè&amp;é"''(-è_çà$ù*!:;,;</font></div></div>\r\n\r\n', '2013-08-19 12:55:52', 'dsgdg', 1),
(28, 1, 'fdfgdfg', 'dfgggd', '2013-08-21 20:02:22', '', 2),
(29, 1, 'fdfgdfg', 'dfgggd', '2013-08-21 20:06:10', '', 2),
(30, 1, 'fdfgdfg', 'dfgggd', '2013-08-21 20:06:10', '', 2),
(31, 1, 'fdfgdfg', 'dfgggd', '2013-08-21 20:06:10', '', 2),
(33, 1, 'fdfgdfg', 'dfgggd', '2013-08-21 20:06:10', '', 2),
(36, 1, 'fdfgdfg', 'dfgggd', '2013-08-21 20:06:11', '', 2),
(38, 1, 'fdfgdfg', 'dfgggd', '2013-08-21 20:06:11', '', 2),
(40, 1, 'TEST!', '                                                 <b><font face="georgia" size="6">              Salut, test !\r\n</font></b><div><b><br></b></div><div><b><a href="http://google.com" title="Google" target="_blank"><font face="times new roman">G</font></a><a href="http://gggg" title="" target="">o<font face="impact">o</font><font face="comic sans ms">g</font><font face="courier new">l</font><font face="trebuchet ms">e</font></a><br></b></div><div><b><br></b></div><div><b>[b]test[/b]</b></div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '2013-08-21 20:06:11', 'Konolulz', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `mail`, `password`, `username`) VALUES
(1, 'nico83110@gmail.com', 'ea1c52256ef184551b2cb5cbcca05bd6fe67f22905d284a5046a933c5ccbbd60', 'Konolol');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
