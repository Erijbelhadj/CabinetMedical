-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 04:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cabinetfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5492819768D3EA09` (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `text`, `date`, `image`, `User_id`) VALUES
(1, 'sémenaire', '<p>dddddddddd</p>', '2015-06-07 12:28:57', 'f26586e765cc3bd55230223557a63056fa42d920.jpeg', 1),
(2, 'conference de presse au hospital sahloul sousse', 'il ya rien a commenter  !! vienez   découvrir  tout seules vous souhaiez le bienvenue Monsieur et madame', '2015-08-11 03:25:12', '2502ac265b3797fdb783c9607cda69196616b719.jpeg', 1),
(3, 'tabagisme', '<p>journe&eacute; mondiale de coeur</p>\r\n\r\n<p>lieu:hospitale farhat hached sousse</p>', '2018-03-29 19:44:54', '83bba75fa65621dd412417d036f6c0dc98398a3f.jpeg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cabinet`
--

CREATE TABLE IF NOT EXISTS `cabinet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sec_id` int(11) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4CED05B068D3EA09` (`User_id`),
  KEY `IDX_4CED05B0DD35623E` (`sec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`id`, `nom`, `adresse`, `email`, `phone`, `phonem`, `fax`, `sec_id`, `User_id`, `image`) VALUES
(1, 'sahel', 'ddd', 'ddd', 'dd', 'ddd', 'ddd', 1, 1, 'ddd'),
(2, 'fff', 'fdfd', 'fff', '7477', '777', '777', 1, 1, 'ced967f3faf0d91cdca5d28d9ce4fc4b97e4ec89.jpeg'),
(3, 'dddd', 'ddd', 'ddd', 'ddd', 'ddd', 'ddd', NULL, 1, 'ad20ffe5c1a252507dd553610d0ed4ed2c7e2e8e.jpeg'),
(4, 'Excellence', 'Mahdiaa 5100', 'excellence@gmail.com', '73654677', '73654988', '72635466', NULL, 1, '31b389349e257ce5d778517847b0ab832e9c397b.jpeg'),
(5, 'al ahlem', 'avenue de larue public', 'ahlem@gmail.com', '234567777', '675567778', '77866555', NULL, 24, '539212dc96138793c61adf256982451974be53de.jpeg'),
(6, 'IHES', 'SOUSSE', 'Cabinet@gmail.com', '3465777', '345666', '77789667', NULL, 1, '7d5329dd144a58db1e606bb1660a86ed7c0da955.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cabinet_medecin`
--

CREATE TABLE IF NOT EXISTS `cabinet_medecin` (
  `medecin_id` int(11) NOT NULL,
  `cabinet_id` int(11) NOT NULL,
  PRIMARY KEY (`medecin_id`,`cabinet_id`),
  KEY `IDX_DC85F6AF4F31A84` (`medecin_id`),
  KEY `IDX_DC85F6AFD351EC` (`cabinet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cabinet_medecin`
--

INSERT INTO `cabinet_medecin` (`medecin_id`, `cabinet_id`) VALUES
(1, 1),
(2, 1),
(2, 3),
(3, 2),
(4, 1),
(4, 2),
(4, 3),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE IF NOT EXISTS `consultation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `traitement` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `conclusion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `med_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `cab_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_964685A6793E396C` (`med_id`),
  KEY `IDX_964685A66B899279` (`patient_id`),
  KEY `IDX_964685A693DFA100` (`cab_id`),
  KEY `IDX_964685A6A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id`, `name`, `traitement`, `type`, `date`, `conclusion`, `med_id`, `patient_id`, `cab_id`, `user_id`) VALUES
(1, 'Contrôle pour Yasine', 'Traitements contre une allergie', 'Controle', '2015-06-12 00:00:00', 'Pas de commentaires', 1, 1, 1, 1),
(2, 'qsdsqdsqdsqdqs', '<p>sqdsqdsqdsqd</p>', 'm', '2010-01-01 00:00:00', '<p>qsdsqd</p>', 5, 1, 1, 28),
(3, 'consultation', '<p>il aura aucun traitement il est en bonne sant&eacute;</p>', 'm', '2015-06-11 00:00:00', '<p>pas de commentaire de diagnostiques</p>', 5, 2, 1, 28),
(4, 'conn', '<p>antibiotique</p>', 'e', '2014-04-01 00:00:00', '<p>hhhhh</p>', 5, 2, 1, 28),
(5, 'consul', '<p>antibiotique</p>', 'm', '2015-06-10 00:00:00', '<p>eee</p>', 5, 2, 1, 28),
(6, 'ggg', '<p>ggg</p>', 'e', '2010-01-01 00:00:00', '<p>ffff</p>', 5, 3, 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `msg` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `User_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4C62E63868D3EA09` (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `mail`, `msg`, `tel`, `date`, `User_id`) VALUES
(2, 'faten', 'faten@gmail.com', 'bonjour', '78945612', '2015-06-05 22:55:29', 1),
(3, 'llll', 'ùùù', 'ùùùù', '666', '2015-06-05 22:58:37', 1),
(4, 'zzz', 'zzz', 'zzzz', '789', '2015-06-05 23:01:13', 1),
(5, 'faten', 'faten@gmail.com', 'bhhjjhjhjhjhj', '789456', '2015-06-07 12:20:22', 1),
(6, 'nnnnnnnnn', 'ARIJ@HOTMAIL.FR', 'cccv je vois bien :)', '948595559', '2015-06-17 12:19:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specialite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1BDA53C6A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`id`, `specialite`, `about`, `code`, `user_id`) VALUES
(1, 'ffff', '<p>oooooopo</p>', '55555', 1),
(2, 'chirgui', '<p>rien</p>', '78946', 18),
(3, 'hhh', '<p>hhh</p>', '777', 22),
(4, 'andochrino', '<p>ancienn diplom&eacute; de l&#39;institut de m&eacute;decine Tunis</p>', '5100', 25),
(5, 'cardologue', '<p>diplom&eacute; de l&#39;institut de m&eacute;decine Tunis</p>', '2738', 28),
(6, 'dd', 'LELEEL', '33', 23),
(7, 'cardiologie', '<p>diplom&eacute; de universit&eacute; de france</p>', '344', 40);

-- --------------------------------------------------------

--
-- Table structure for table `medecin_cabinet`
--

CREATE TABLE IF NOT EXISTS `medecin_cabinet` (
  `cabinet_id` int(11) NOT NULL,
  `medecin_id` int(11) NOT NULL,
  PRIMARY KEY (`cabinet_id`,`medecin_id`),
  KEY `IDX_32C4C08DD351EC` (`cabinet_id`),
  KEY `IDX_32C4C08D4F31A84` (`medecin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medecin_cabinet`
--

INSERT INTO `medecin_cabinet` (`cabinet_id`, `medecin_id`) VALUES
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `operationmed`
--

CREATE TABLE IF NOT EXISTS `operationmed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `montant` double NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `medecin_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cabinet_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CFF64B716B899279` (`patient_id`),
  KEY `IDX_CFF64B714F31A84` (`medecin_id`),
  KEY `IDX_CFF64B71A76ED395` (`user_id`),
  KEY `IDX_CFF64B71D351EC` (`cabinet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codecnam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handicape` longtext COLLATE utf8_unicode_ci NOT NULL,
  `antecedent` longtext COLLATE utf8_unicode_ci NOT NULL,
  `chirgui` longtext COLLATE utf8_unicode_ci NOT NULL,
  `allergie` longtext COLLATE utf8_unicode_ci NOT NULL,
  `traitementencour` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1ADAD7EBA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `codecnam`, `handicape`, `antecedent`, `chirgui`, `allergie`, `traitementencour`, `user_id`) VALUES
(1, '98884', '<p>Non,</p>', '<p>consulter et prendre un augmeant</p>', '<p>oui en 2007</p>', '<p>uiii</p>', '<p>doliprane 1000 repos 4 jours&nbsp;</p>', 1),
(2, '223', '<p>non hamdoullah</p>', '<p>pas de commentaire</p>', '<p>pas encore</p>', '<p>non pas</p>', '<p>je n&#39;aiaucune traitement en cours&nbsp;</p>', 23),
(3, '0999888', '<p>NON</p>', '<p>NN</p>', '<p>NN</p>', '<p>NN</p>', '<p>NN</p>', 31),
(4, '0945444', 'NO', 'MALADIR', 'NOM', 'UII', 'ZECLAER', 38),
(5, '45', '<p>NON</p>', '<p>non</p>', '<p>OUI sur les jambes</p>', '<p>oui</p>', '<p>curacn&eacute;</p>', 5);

-- --------------------------------------------------------

--
-- Table structure for table `prisecharge`
--

CREATE TABLE IF NOT EXISTS `prisecharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateprise` datetime NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaiss` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_882171E36B899279` (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prisecharge`
--

INSERT INTO `prisecharge` (`id`, `patient_id`, `titre`, `dateprise`, `nom`, `prenom`, `datenaiss`) VALUES
(1, 1, 'enfant', '2010-01-01 00:00:00', 'trk', 'nour', '2010-01-01'),
(2, 2, 'conjoint', '2010-01-01 00:00:00', 'Belhadj', 'Arij', '2010-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

CREATE TABLE IF NOT EXISTS `rdv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `num` int(11) NOT NULL,
  `cab_id` int(11) DEFAULT NULL,
  `med_id` int(11) DEFAULT NULL,
  `pat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_10C31F8693DFA100` (`cab_id`),
  KEY `IDX_10C31F86793E396C` (`med_id`),
  KEY `IDX_10C31F8663EFD976` (`pat_id`),
  KEY `IDX_10C31F86A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `rdv`
--

INSERT INTO `rdv` (`id`, `titre`, `date`, `num`, `cab_id`, `med_id`, `pat_id`, `user_id`, `active`) VALUES
(1, 'rendez vous urgent', '2015-06-04 00:00:00', 1, 1, 1, 1, 1, 0),
(2, 'fff', '2015-06-03 00:00:00', 0, 1, 1, 1, 1, 1),
(3, 'rendez-vous urgent', '2015-06-19 00:00:00', 0, 1, 2, 2, 23, 0),
(4, 'rr', '2015-06-17 00:00:00', 0, 1, 5, 2, 23, 0),
(5, 'rendezvous urgenttt', '2015-06-26 00:00:00', 0, 1, 1, 2, 23, 0),
(7, 'rendez-vous pour ma conjionte', '2015-06-25 00:00:00', 0, 3, 2, 2, 23, 1),
(8, 'rendez-vous urgent', '2015-06-18 00:00:00', 0, 3, 2, 2, 23, 0),
(9, '', '2015-06-27 00:00:00', 0, 1, 4, 2, 23, 2),
(11, '', '2015-06-27 00:00:00', 0, 1, 1, 2, 23, 2),
(12, 'bb', '2015-06-30 00:00:00', 0, 3, 4, 2, 23, 2),
(13, 'vvvv', '2015-06-20 00:00:00', 0, 1, 1, 2, 23, 0),
(14, '', '2015-06-21 00:00:00', 0, 1, 1, 2, 23, 1),
(15, 'RENDEZ', '2015-06-30 00:00:00', 0, 1, 1, 2, 23, 2),
(16, 'rendez-vous', '2015-06-29 00:00:00', 0, 3, 2, 3, 31, 0),
(17, 'rendez-vous', '2018-03-30 00:00:00', 0, 1, 5, 2, 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rigime`
--

CREATE TABLE IF NOT EXISTS `rigime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `sec` int(11) DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6F76A77D6B899279` (`patient_id`),
  KEY `IDX_6F76A77D65C7A01B` (`sec`),
  KEY `IDX_6F76A77DA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `securite`
--

CREATE TABLE IF NOT EXISTS `securite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D19A898E6B899279` (`patient_id`),
  KEY `IDX_D19A898EA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `securite`
--

INSERT INTO `securite` (`id`, `type`, `datedebut`, `datefin`, `patient_id`, `user_id`) VALUES
(1, '', '2010-01-01 00:00:00', '2010-01-01 00:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `poste` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profilePicture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `nom`, `prenom`, `cin`, `phone`, `poste`, `profilePicture`) VALUES
(1, 'arij', 'arij', 'arijj@hotmail.fr', 'arijj@hotmail.fr', 1, 'oh75trpyp1cwkgkockc8c08g8wcs8sg', '965FP8p+cDRqPlMHD7HDVJ35wcliniP7PS88kBTD/WSxs+c7fWO6Uqocsv0imWsZPd21IVxJ8/UO+wR+I0CLnA==', '2018-04-30 14:12:52', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'arij', 'arij', '849994', '4444444', '437774', '7b8dd632706db1469604f3cc2148b4c0f4016ed2.jpeg'),
(2, 'BB', 'bb', 'ari@GMAIL.COM', 'ari@gmail.com', 1, 'evo1yief714c0sc4g0gg48cc8goow88', 'khj+r+fzBN9h6pHYbnewBLpImPQR9Xo8h5HaFAxOqZ4BodXVyM9+6hFN/dBYGsexMtBjx7KvVwcpxS+rMd/+4Q==', '2015-06-05 20:02:54', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'bb', 'bb', '222', '5555', '22', '455'),
(3, 'azqs', 'azqs', 'waxxelzzz@gmail.com', 'waxxelzzz@gmail.com', 1, '1vpyo8xc2t344kg8skg0owcgwogkwcg', 'VxG1aUJdBfvXNwcCP5TF4gnxYKOYkglEqXCDtz237yUXlnxOSPe5W6vXpEyho/kOrU2bZBNqQ1ljhIZXUOJwBQ==', '2015-06-06 21:47:28', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'fatenn', 'ss', 'sss', '445', 'sss', '8d18b04f3de107f983e1efec424e9b6589260466.jpeg'),
(4, 'sqd', 'sqd', 'aaa@gmail.com', 'aaa@gmail.com', 1, '2hdwm988me04wo4gssswwgo8ogsg08o', '3NoHgf8MevnWqJhUUhi+hB8gZZ43T+bAAE2f2DoJqOqdSetORjc8KvZdlJMudvxsOUM+9hxLD1unyPPaDzsM9w==', '2015-06-06 22:00:55', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'achraf', 'smida', '5555', '555', 'aaa', 'qsdqd'),
(5, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, 's3o4lmpk70g0cwowk484c0ocgw08kgg', 'hXGZ7WTVMUvP9gJy5rCojTDNA+dMnOZMmQwzuYbHjaB7vJ7v1Ns4VidSkW6NLTZ85+CYL5i9ULDPXXbJLH43hw==', '2018-03-29 19:27:14', 0, 0, NULL, NULL, NULL, 'a:4:{i:0;s:10:"ROLE_ADMIN";i:1;s:15:"ROLE_SECRETAIRE";i:2;s:12:"ROLE_MEDECIN";i:3;s:12:"ROLE_PATIENT";}', 0, NULL, 'erijbelhadj', 'admin', '255550000', '555555888', 'admin', '5f3fc2a22c9ea88ee1e0566389684327cb581d11.jpeg'),
(6, 'secretaire', 'secretaire', 'secretaire@gmail.com', 'secretaire@gmail.com', 0, '2iycz94vpso4wk88gs0sg04ocg08o8k', 'aa1lB6qZ6zjrAtyZvekJMaZBedfz+4ovWlAJ5C9igt9xCuJx4rjeFHEgZZ6qh3c+xYAJC5M904nuAEVcPxkEqQ==', '2015-06-06 22:46:58', 0, 0, NULL, NULL, NULL, 'a:3:{i:0;s:15:"ROLE_SECRETAIRE";i:1;s:12:"ROLE_MEDECIN";i:2;s:12:"ROLE_PATIENT";}', 0, NULL, 'secretaire', 'secretaire', '888', '88', 'secretaire', 'secretaire'),
(7, 'az', 'az', 'ggg@gmail.com', 'ggg@gmail.com', 1, '6ua4is7seps0wwsoscs8ocoo400k0s8', 'MTsEDYwQohi4dDgPI0kP/rjIOfoXKYLm2COpObRZaQsUSYVbX52BtTssnJ7jr/wM5JZipWHzj/n/b8SvZOlJqg==', '2015-06-06 22:56:38', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'az', 'az', 'az', '6', 'az', 'az'),
(8, 'www', 'www', 'secqqretaire@gmail.com', 'secqqretaire@gmail.com', 1, 'tnbcglkvydwo8owck0g8884o088w0ks', 'bp+Uurz+OGWGu/4z6yLZoB99MFmcUXGLrEUWwsYFaa1Nh8oV139usknuNfyU6sPokimBnaZRUKC7tDuobZa25w==', '2015-06-06 22:58:30', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'secqqretaire', 'secqqretaire', '6', '+++', 'secqqretaire', 'secqqretaire'),
(9, 'secqqretairee', 'secqqretairee', 'secqqretaireuuu@gmail.com', 'secqqretaireuuu@gmail.com', 1, '3pyqnnybunk04w8ogo84cgsckokok40', 'wUMI/dBJrAuoOKD/Frn/7j6ON4cGr6KP8g1FwR5Jhj1laErG9ymj4rgFp9Ib4/QCmKbkwXzYNtwHoWw+bs1QJw==', '2015-06-06 22:59:37', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'ss', 'secqqretaire', 'secqqretaire', '9899', 'secqqretaire', 'secqqretaire'),
(10, 'aaa', 'aaa', 'azer@gmail.com', 'azer@gmail.com', 1, 'p34j57nr5n4csco8kw4o0gccsoc4o0c', 'Jb9ET41YKQth/4SKr83WC9oZe+NZ7EiZz7Lal81VH72IqYObgiIbFo4bk3YPk51SxgQ6UvGLyZRiHE9aYtMeIg==', '2015-06-06 23:04:40', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'aaaa', 'aaaa', '12313212', 'aaa', 'aaa', 'aaaaa'),
(11, 'ssss', 'ssss', 'ssss@gmail.com', 'ssss@gmail.com', 1, 'qq42rpo5h7kkc8c8oggw8oss8wcosog', 'i6/tT9w3RKlHfQe4vAUWmETevxRzEiS+0clkh1pm51W38AfFGudBmpuGWIQ3Hap1VyQ6yPUr1CP6y6gh8IgB2A==', '2015-06-06 23:08:07', 0, 0, NULL, NULL, NULL, 'a:3:{i:0;s:15:"ROLE_SECRETAIRE";i:1;s:12:"ROLE_MEDECIN";i:2;s:12:"ROLE_PATIENT";}', 0, NULL, 'ssss', 'ssss', '55', 'ssss', 'ssss', '275399bbf7d2352dbeaf7a8ba48e9840e13f11c7.jpeg'),
(12, 'secee', 'secee', 'secee@gmail.com', 'secee@gmail.com', 0, '1orhk8eoeyjow0ow4cgco88wk488osg', 'UD2y7kPO1YgOFYfo9QlEozJ5SXL1IDeyQ9NpgFfjWp+EiKm0rXDG7uwAz/UhQYTDXS/YSI94a73d2iu6DVmPdQ==', '2015-06-06 23:15:18', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:15:"ROLE_SECRETAIRE";i:1;s:12:"ROLE_PATIENT";}', 0, NULL, 'ss', 'secee', 'secee', 'secee', 'secee', 'secee'),
(13, 'dddd', 'dddd', 'dddd@gmail.com', 'dddd@gmail.com', 0, 'fxasdcfbqnsw4kggokcsgwsww4gwk8s', 'HP/xTbDRurTwrJFkHoLdgCHJ9BBy78VZTz+LFcrVJYAT9Pn97a7aoz8q/6pB8sY2aXMpGDdzk7uhy8xduc2Fzg==', '2015-06-06 23:18:46', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:15:"ROLE_SECRETAIRE";i:1;s:12:"ROLE_PATIENT";}', 0, NULL, 'dddd', 'dddd', 'dddd', 'dddd', 'dddd', 'dddd'),
(14, 'ggiii', 'ggiii', 'ggiii@gmail.com', 'ggiii@gmail.com', 0, 'jrg7g1rqb34gog0oc8k8o0owcokscco', 'I/2xs3T/4NDaKFedSl1wGslfsfXrjf2N4fwepnKjR7XFK+VjrkmbHQAs7MKG79nBnknKXhWmLF4q0jXUETWj1g==', '2015-06-06 23:21:34', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:15:"ROLE_SECRETAIRE";i:1;s:12:"ROLE_PATIENT";}', 0, NULL, 'ggiii', 'ggiii', 'ggiii', 'ggiii', 'ggiii', 'ggiii'),
(15, 'aacc', 'aacc', 'ssqssq@gmail.com', 'ssqssq@gmail.com', 0, 'gq0cx3baij48gog8os8c8g84s440kgs', '9M1r3T6HFRl3ZPv7zSiKxA6NqG9iBBjAueJH3dLVbwxuDmdJduxw6700tobmB8DjVFyLvutt5XeJi8qEhdp9XA==', '2015-06-06 23:26:31', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:15:"ROLE_SECRETAIRE";i:1;s:12:"ROLE_PATIENT";}', 0, NULL, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa'),
(16, 'patientt', 'patientt', 'patient@gmail.com', 'patient@gmail.com', 0, 'h0ezr8bc5wgksgk4w8swok8wksgw4s4', 'G4liyzITFcqkkcldT/kQHt0HUf4Av1sNYNoUk22k/uRDKBzO/uCnGxBUVyVWjs2HhP3ZLA7NB12UwtV39zJJ1A==', '2015-06-06 23:28:15', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_PATIENT";}', 0, NULL, 'patient', 'patient', 'patient', 'patient', 'patient', 'patient'),
(17, 'med', 'med', 'med@gmail.com', 'med@gmail.com', 0, 'bwacdsu5l5sgcc80o4c0808ws4wck4s', '0sSTmFhRG5Kz4pPR3/B+UDuJp7rzK5uXsjNBliohScnivcW0GR4q/frQfYxRE+k3GVJ6/yRK+dlpUZfi72REEA==', '2015-06-06 23:29:46', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_MEDECIN";}', 0, NULL, 'med', 'med', 'med', '4444', 'med', 'med'),
(18, 'mohamed', 'mohamed', 'mohamed@gmail.com', 'mohamed@gmail.com', 0, 'tcmsxzep880ksw84swcw4sw4kw8s4gg', 'n4K6TVGtJFwRu/SqJH+d/kGi1ura3Gjg/AMHXaOtz9BHpvX6f2KhFzbpbfLyM8li3kxGESWBZ+UdtTRI3OMC/g==', '2015-06-06 23:37:30', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_MEDECIN";}', 0, NULL, 'mohamed', 'ben mabrouk', '02456796', '97895123', 'médecin', 'mohamed'),
(19, 'rrr', 'rrr', 'uhhhj@gmail.com', 'uhhhj@gmail.com', 1, 'atjbptd303cw0co8swkwcw80cwo0co4', 'k/j6LVvxpKhI0LgdmgCc3hqhHT1wTb60Q5gtybVI5GDefMygti1U6Nvk/VdlkP1iQyElX+Iny7vj28kMIjAVPA==', '2015-06-07 00:39:16', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'jkj', 'zsz', '88', 'ddd', 'sss', NULL),
(20, 'ttttt', 'ttttt', 'jkjk@gmail.com', 'jkjk@gmail.com', 1, 't7r422ik6a8ccw0wswws44skg8csgsc', 'h+E5BD/xmEDQB6lIXIKoYpoLSa+6iKamp950vQrSnN8iwjBwG8Qqp4TipRElehpDSNTBBg9v2SNiA33VE0kVOg==', '2015-06-07 00:40:29', 0, 0, NULL, NULL, NULL, 'a:4:{i:0;s:10:"ROLE_ADMIN";i:1;s:15:"ROLE_SECRETAIRE";i:2;s:12:"ROLE_MEDECIN";i:3;s:12:"ROLE_PATIENT";}', 0, NULL, 'ss', 'sss', 'sss', 'sss', 'sss', '9a99f21121e7d5358501d0d27587d7acde978ac5.jpeg'),
(21, 'aaaaat', 'aaaaat', 'daaaddd@gmail.com', 'daaaddd@gmail.com', 1, 'dvc8bhhuiko4o4g0ggwks84w0sko00w', '11uu9yMRDUs3vtDvqy4vLKwDDXsu4p34LCq0Ayro7CGYLoZGqnCmmBShP4NIGvhU+DPo9yNhRa6kNkUOK5/YPA==', '2015-06-07 00:43:38', 0, 0, NULL, NULL, NULL, 'a:4:{i:0;s:10:"ROLE_ADMIN";i:1;s:15:"ROLE_SECRETAIRE";i:2;s:12:"ROLE_MEDECIN";i:3;s:12:"ROLE_PATIENT";}', 0, NULL, 'eee', 'eee', 'eeee', 'eee', 'eee', '13cbb5f9c3ceea930526b8bedac8c0e2d6ee6290.jpeg'),
(22, 'medd', 'medd', 'hhh@gmail.com', 'hhh@gmail.com', 1, '61zjrgcugkcgk0k4go8os0wk8kckcw0', 'JiSXdIqI/uA57JoMlIF8xafXm+mD6liVaUdPue3n+HEZXSj1DuXkkh0Pn0tD9GEAsiS0dMFyO+01dfP6ySDsLg==', '2015-06-07 12:53:19', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_MEDECIN";}', 0, NULL, 'kkkkk', 'llll', 'ff', 'ff', 'fff', '17ab3e17880fdcf5c7c2d6961a27cf15eaefe1ad.jpeg'),
(23, 'hoss', 'hoss', 'hoss@gmail.com', 'hoss@gmail.com', 1, 'shbwoecopq8wkss0k0cgcco8cgcc8c0', '/VwVzjH/+d394ouDZc+lsVRlRVpfo4r+WIVzugk8Llzbwl3IaH1IA+Xp0egxOvCpxjbXKf++jPRYpfKJ7icLnA==', '2018-04-30 14:08:15', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_PATIENT";}', 0, NULL, 'erij', 'belhadj', '0988333', '63555443', '5100', 'ccd6c7cc9621acc5ac25eb4428ed61288126c5fb.jpeg'),
(24, 'selsebil', 'selsebil', 'selsebil@hotmail.fr', 'selsebil@hotmail.fr', 1, 'c8lqdokhfnwoo8ck804owcsgwc448go', 'yAjcvX4V1YxW8baXFJpJ9FWLq8E9BJjXwzWBSsF6oEkdunSHLW6Ua6XBbxj3MYm3SBPs3sZsrqvjrhZJoMKi/g==', '2016-03-13 01:10:06', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_SECRETAIRE";}', 0, NULL, 'selsebil', 'selsebil', '09743844', '72637449', 'selsebil', 'f30804779591aa56b5605588d7002e24ad0648ac.png'),
(25, 'nadhem', 'nadhem', 'nadhem@outlook.com', 'nadhem@outlook.com', 0, '4l1idlwmv1usksw4s48osgkcgw40g4w', 'iFWn1GGQH86g8UUIU//jxayMIMlc388Pxh7eoVe8K5uxbB6x5XOqHiP4jgi8UcqpJNGTEVB1fzYoraMUFDGAhw==', '2015-06-11 16:30:04', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_MEDECIN";}', 0, NULL, 'nadhem', 'nadhem', '0987399', '23940333', '5100', '383d7f851f4f0b307a88f27d737ea0e5faa01440.png'),
(26, 'seif', 'seif', 'nadhemm@outlook.com', 'nadhemm@outlook.com', 1, 'lrnpmwm53i80s40g8oss0w0ksg4cwcw', 'Xll80qae1ZXbYL9iJ6D0h+riP+V+m+3g10dkYT4Wi5H5hF2IhsrXYPRMDBmAdbVkKzmXvkZ4LkObji+qeHgjoA==', '2015-06-11 16:38:05', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'nadhem', 'nadhem', '0987399', '23940333', '5100', NULL),
(27, 'seifff', 'seifff', 'seifff@outlook.com', 'seifff@outlook.com', 1, 'klx4scndiio0gkwgcgogcsk4sco4sck', 'iBMFKPrQSwANeQqObFYpDjhyDbyt67EEpUJguXS0w7uiGhXVBgH/Q3Bs/hr4g7Tvs5qbOQ2k9zZ78iSscanLRA==', '2015-06-11 16:39:06', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'seiff', 'seiff', '0987399', '23940333', '5100', NULL),
(28, 'bahija', 'bahija', 'bahija@gmail.com', 'bahija@gmail.com', 1, 'bxjs1hn8gy88ck4kgw4wc0oocsgggwk', 't94SWxX8kqQIMQ1401v5ewa878Q0sX57ML+mARccwasKxMfotSw6TDgT6To8gJBC/+bSroa3GUnnn3SpR2dJEQ==', '2015-06-17 00:06:24', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_MEDECIN";}', 0, NULL, 'bahija', 'bahija', '0964882', '22884187', 'bahija', 'ee05ab3a9b322af889491da5897bc335733d504c.jpeg'),
(29, 'bou', 'bou', 'bouthayna@gmail.com', 'bouthayna@gmail.com', 1, 'g6q6na2jky0484swokw8k00c8o44w0o', 'mVMQw/UMA/6XDP8FiTIOa5D9Kc0jhVJyjN2NPcLX4NJ/i9lLAgyQWr85MoUe2A5YLPp6ftHYmiolbZH5YzUnGg==', '2015-06-12 16:40:46', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_SECRETAIRE";}', 0, NULL, 'bouthayna', 'bouthayna', '098666', '73653888', 'bouthayna', '8471650027c0c2432199849cff5a78e1d43f9505.png'),
(30, 'ha', 'ha', 'hassen@hotmail.fr', 'hassen@hotmail.fr', 0, '5g1g4yshwyskk00wswg48s0s4s0wwsk', 'iTmEtG+HNsbhXqpv0QGq0LmvOVXoPaT8OthXIdNFGVTTLlyIgQnm5Wsz2hRamCt1rukTfSuu+8HLqi3OVMimBw==', '2015-06-13 10:30:04', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_SECRETAIRE";}', 0, NULL, 'hassen', 'belhadj', '0942098', '73654300', '5100', '383d7f851f4f0b307a88f27d737ea0e5faa01440.png'),
(31, 'manel', 'manel', 'manel@hotmail.fr', 'manel@hotmail.fr', 1, 'qaesm4lj6b4o8s0cowwgkoscws88swg', 'pGdki9sncJJ40me5j2Zi03U66+9FeYAWMRAlhzcLsllxpT+/A7tR4h8oSFIzPnx7iICc8Tqn+Zfer/nhlg320A==', '2015-06-17 00:08:18', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_PATIENT";}', 0, NULL, 'manel', 'belhadjj', '09384488', '53664778', '51000', '1c06ffedac476e66fac49854ab02869eab0e8730.jpeg'),
(32, 'AZERTY', 'azerty', 'ARIJ@HOTMAIL.FR', 'arij@hotmail.fr', 1, 'p47tnhebakgwk0k4k8gwsw048oswogo', 'B9+kH1L3A/L6pG4nD02FBkgJYJyh6gZ2o8y+EmLODaP8yaf7hVhb0/6H9csaT2svq6PdeeAqQi+onHqBfzNKig==', '2016-03-13 01:06:57', 0, 0, NULL, NULL, NULL, 'a:4:{i:0;s:10:"ROLE_ADMIN";i:1;s:15:"ROLE_SECRETAIRE";i:2;s:12:"ROLE_MEDECIN";i:3;s:12:"ROLE_PATIENT";}', 0, NULL, 'ARRIJ', 'BB', '8888', '9999', '3888', '383d7f851f4f0b307a88f27d737ea0e5faa01440.png'),
(33, 'erij', 'erij', 'arij@gmail.com', 'arij@gmail.com', 1, 'qgowlzfaiqokw4wkw00k0skw4kkscgw', 'U0iJhLwvY7ox5uK6S+aOPilMOc3qDa9Hj2PrZmAIShgHT2OwJ80cr6hpGsjeSx36elG1w3vLzzaqMmRF/1vBgg==', '2017-01-04 19:42:57', 0, 0, NULL, NULL, NULL, 'a:4:{i:0;s:10:"ROLE_ADMIN";i:1;s:15:"ROLE_SECRETAIRE";i:2;s:12:"ROLE_MEDECIN";i:3;s:12:"ROLE_PATIENT";}', 0, NULL, 'arij', 'bel', '333333', '333', '233333', '383d7f851f4f0b307a88f27d737ea0e5faa01440.png'),
(34, 'amine', 'amine', 'amine@flss.com', 'amine@flss.com', 0, 'gskpdta62mg4s04wcswk8k0sgcc00k4', 'hFcBpsdrjymGJiwQQAlxRSIlIMvOqyU0Ouovigu5bh6PdE27pDdtVKOm32najVRf5AL4YIQr3AkgZmqlLU7U6Q==', '2017-01-04 19:48:34', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_PATIENT";}', 0, NULL, 'amine', 'amine', '9333', '3444', '2233', '383d7f851f4f0b307a88f27d737ea0e5faa01440.png'),
(35, 'menel', 'menel', 'menel@gmail.com', 'menel@gmail.com', 0, 'kunu7e7b1fk0sgwoogk04ks00oswk8k', 'FTyba2IO2jJDxk6MioTPCxeuz48BsAIOtZFhFa34+JG/t3x347Ra6IvcNRO/LiZJaRCvz+fhIjoM4sh9eovRBA==', '2017-01-04 19:51:15', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_SECRETAIRE";}', 0, NULL, 'menel', 'belhadj', '22222', '2223222', '22223', '383d7f851f4f0b307a88f27d737ea0e5faa01440.png'),
(36, 'ARIJJ', 'arijj', 'arijtuh@gmail.com', 'arijtuh@gmail.com', 0, '93azmazy0ogs48s4ccs8gw8cg40o8cs', 'J+Xhdx/RLf19V0TK0dUI9oiwLokGymziFJqp9zHfVmx7fXWofVxTQB+jkhd7TbS18ZD53/HWMpQ2mNbgeGdJSw==', '2018-03-28 02:06:36', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_PATIENT";}', 0, NULL, 'belhadj', 'erij', '09420907', '222222222', '5100', '383d7f851f4f0b307a88f27d737ea0e5faa01440.png'),
(37, 'AMEL', 'amel', 'amel@gmail.com', 'amel@gmail.com', 0, 'aer5mk5mibs4wsocwc0c8kgs80kwo8c', '/mr2idR+euGGAK9NMBMCmDS6kOTBIRig11wT/BJGViUZxIQH9qQzxSyGXQ64E6wpZVZZN/7+FFHDU7thgzNyDQ==', '2018-03-28 02:18:15', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_PATIENT";}', 0, NULL, 'amel', 'bb', '1234', '222222222', '2333', '383d7f851f4f0b307a88f27d737ea0e5faa01440.png'),
(38, 'AMINEE', 'aminee', 'BB@GMAIL.COM', 'bb@gmail.com', 0, 'mpyngach4v4kk84c0owkgcgkwgooo0g', 'roBaiOkr7tTEt7SVegtZ4/XF/1MDVbBd0QBrsgMiR7PzrWCtAJvWsDXBZXdeIhalxAaIfr2PXKavstci36FiDw==', '2018-03-28 03:52:58', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_PATIENT";}', 0, NULL, 'Amine', 'Belhadj', '09483922', '222222222', '5100', '383d7f851f4f0b307a88f27d737ea0e5faa01440.png'),
(39, 'fatma', 'fatma', 'fatma@gmail.com', 'fatma@gmail.com', 1, 'b9cikr7wop44kowkwk8ssc0s4ogw8k8', '7DeKoYV7ENuombMjAHiHu9Ekf6VTnhNvOYMAuXImB32QfCZsWM8kOPbGKbV/CLSqM+m6VhNczvMGSAEA56z8ZA==', '2018-03-29 20:21:55', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'fatma', 'fatma', '09323232', '238888483', '5100', NULL),
(40, 'maryem', 'maryem', 'meryem@gmail.com', 'meryem@gmail.com', 1, 'chig4ycely8gwgok4ssc8coo40k40co', 'U43Lh/D/mtf/iqD0z8a+eD/1NG/JaPCSssKbG8tqRSz7IFAZaupS+HMiru+bl4S9+AJkHPT0c8/mXB3H8QCLsg==', '2018-03-29 20:42:17', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_MEDECIN";}', 0, NULL, 'meryem', 'meryem', '01234567', '3433333', '5100', '8843cbfadcbbc0bd64c769c22e038103c2cd8891.jpeg'),
(41, 'yosra', 'yosra', 'yosra@gmail.com', 'yosra@gmail.com', 1, 'ppmbd1e06qs00k4coook00ccw8844ow', 'htqaU2ijPgvyvOzmX0+BQQI/4QKl+CuCJJiZtO9tJZTeY6CIlUFr9WTHJOiMIJ4YCBotiPLLLpExWMdDphP8BA==', '2018-03-29 21:51:56', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_SECRETAIRE";}', 0, NULL, 'yosra', 'yosra', '12345678', '99999999', '5100', 'd819426b4185f2b307d35cc0f6fa3ef93e218a3f.jpeg'),
(42, 'AAAAAA', 'aaaaaa', 'aa@gmail.com', 'aa@gmail.com', 1, '47snr587auio0gcsc4ks4cosc4c400c', '7XmDe80O0U9tVWKyy0ATOvebHxS10Zt5A/DjamnL0rQqmXYxLkTIV9KukTvoAlPFMP49P2asTyyMS8iGUrKTMg==', '2018-04-30 11:42:47', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'bb', 'dd', '222', '222', '444', NULL),
(43, 'BBB', 'bbb', 'aaB@gmail.com', 'aab@gmail.com', 1, 'd6y60lzdsa0oow80wc0wogg4g80gww', '3OPbn8lZt+413wF1wqJTp6E0Jz0z2NMTWC6tsd/mEEBuOrcctgG3Akiq2wOT8gzOpc6+JHhOtGpmJQOrqqr+aQ==', '2018-04-30 11:43:27', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'bb', 'dd', '222', '222', '444', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actualite`
--
ALTER TABLE `actualite`
  ADD CONSTRAINT `FK_5492819768D3EA09` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `cabinet`
--
ALTER TABLE `cabinet`
  ADD CONSTRAINT `FK_4CED05B068D3EA09` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_4CED05B0DD35623E` FOREIGN KEY (`sec_id`) REFERENCES `securite` (`id`);

--
-- Constraints for table `cabinet_medecin`
--
ALTER TABLE `cabinet_medecin`
  ADD CONSTRAINT `FK_DC85F6AF4F31A84` FOREIGN KEY (`medecin_id`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `FK_DC85F6AFD351EC` FOREIGN KEY (`cabinet_id`) REFERENCES `cabinet` (`id`);

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `FK_964685A66B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `FK_964685A6793E396C` FOREIGN KEY (`med_id`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `FK_964685A693DFA100` FOREIGN KEY (`cab_id`) REFERENCES `cabinet` (`id`),
  ADD CONSTRAINT `FK_964685A6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `FK_4C62E63868D3EA09` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `FK_1BDA53C6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `medecin_cabinet`
--
ALTER TABLE `medecin_cabinet`
  ADD CONSTRAINT `FK_32C4C08D4F31A84` FOREIGN KEY (`medecin_id`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `FK_32C4C08DD351EC` FOREIGN KEY (`cabinet_id`) REFERENCES `cabinet` (`id`);

--
-- Constraints for table `operationmed`
--
ALTER TABLE `operationmed`
  ADD CONSTRAINT `FK_CFF64B714F31A84` FOREIGN KEY (`medecin_id`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `FK_CFF64B716B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `FK_CFF64B71A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_CFF64B71D351EC` FOREIGN KEY (`cabinet_id`) REFERENCES `cabinet` (`id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `FK_1ADAD7EBA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `prisecharge`
--
ALTER TABLE `prisecharge`
  ADD CONSTRAINT `FK_882171E36B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`);

--
-- Constraints for table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `FK_10C31F8663EFD976` FOREIGN KEY (`pat_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `FK_10C31F86793E396C` FOREIGN KEY (`med_id`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `FK_10C31F8693DFA100` FOREIGN KEY (`cab_id`) REFERENCES `cabinet` (`id`),
  ADD CONSTRAINT `FK_10C31F86A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `rigime`
--
ALTER TABLE `rigime`
  ADD CONSTRAINT `FK_6F76A77D65C7A01B` FOREIGN KEY (`sec`) REFERENCES `securite` (`id`),
  ADD CONSTRAINT `FK_6F76A77D6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `FK_6F76A77DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `securite`
--
ALTER TABLE `securite`
  ADD CONSTRAINT `FK_D19A898E6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `FK_D19A898EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
