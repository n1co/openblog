-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 19 Août 2013 à 13:52
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(20) NOT NULL,
  `cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `created`, `author`, `cat`) VALUES
(1, '1st Blog Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.', '2013-08-16 10:33:11', 'Konolol', 2),
(3, 'aaa', '       aaa                             ', '2013-08-16 11:03:12', 'Zbouby', 0),
(4, 'testest', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non felis erat. Duis euismod quam blandit, adipiscing dui eu, sagittis purus. Suspendisse ut faucibus tellus, vel accumsan tortor. Curabitur venenatis arcu lectus, eget vestibulum lacus egestas sed. Sed at dui posuere, tristique leo at, tincidunt ante. Cras semper tellus ligula, et convallis nisl iaculis ac. Maecenas suscipit mauris sit amet tristique rhoncus. Nullam quis odio eleifend arcu tincidunt blandit. Pellentesque vitae magna augue. Mauris interdum leo ligula, et lobortis eros pulvinar vel. Cras quis erat sagittis nisi ornare commodo non eu lacus. Morbi hendrerit lorem dolor, ac commodo libero laoreet non. Phasellus in nunc pharetra, rutrum justo vel, porta purus. Aenean sodales consectetur lacinia. Pellentesque ullamcorper, justo pulvinar posuere eleifend, ante nunc vehicula justo, sed auctor augue odio facilisis massa. Aliquam sit amet lectus vitae magna vehicula venenatis vel sed felis.\r\n\r\nAliquam facilisis facilisis lacus ac bibendum. Nunc quis nibh fringilla, sagittis ligula ut, elementum enim. Mauris non sagittis risus, id laoreet ante. Suspendisse vel hendrerit metus. Suspendisse pellentesque vel est sit amet faucibus. Vestibulum auctor scelerisque pharetra. Cras nec orci vel risus hendrerit hendrerit quis et arcu. Duis nec feugiat ipsum. Mauris eleifend nisi non gravida vestibulum. Suspendisse potenti.\r\n\r\nQuisque nulla est, vehicula eget imperdiet in, adipiscing ut diam. Cras accumsan felis ac lorem aliquam, eu bibendum dolor varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc sodales fermentum nulla et tempus. Pellentesque et venenatis ante. Ut volutpat sem eu sem pulvinar laoreet. Suspendisse potenti.\r\n\r\nProin magna metus, aliquam sed orci quis, tristique feugiat ante. Nunc sed mauris magna. Integer dignissim velit diam, hendrerit scelerisque turpis aliquet vel. Vestibulum sodales fringilla elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent quis orci quis nulla rhoncus semper. Sed elementum vestibulum massa, a varius justo hendrerit id. Quisque nisi tortor, mattis in nisi nec, pharetra placerat risus. Proin vel porttitor tortor. Maecenas scelerisque sem neque, at aliquam nunc interdum eget. Suspendisse viverra massa quis dui luctus facilisis. Nullam interdum consequat libero et pellentesque. Aliquam elementum mi id interdum placerat. Donec sed lacinia dolor. Donec a massa quis augue tincidunt tempus.\r\n\r\nCurabitur at elit et urna ultrices pellentesque. Cras in diam vitae diam dapibus malesuada sit amet gravida tellus. Nullam eu cursus elit, sit amet facilisis turpis. Proin id justo tempus, pulvinar erat vitae, consequat enim. Proin mollis eu ligula quis facilisis. Mauris non consequat est. Maecenas sit amet consequat sapien. Aenean interdum dignissim sem a ornare. Suspendisse vehicula ornare nunc, non faucibus magna commodo nec. Nunc vitae condimentum lectus, vitae dignissim diam. Sed vehicula enim tellus, nec vestibulum sapien hendrerit ultricies. Praesent elementum accumsan est sed tincidunt. Vivamus ipsum nisl, viverra id augue sed, interdum semper nunc. Quisque scelerisque suscipit enim non ullamcorper.', '2013-08-16 11:06:14', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
