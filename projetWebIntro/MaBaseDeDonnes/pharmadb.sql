-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pharmadb
CREATE DATABASE IF NOT EXISTS `pharmadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pharmadb`;

-- Dumping structure for table pharmadb.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dateAjout` datetime DEFAULT NULL,
  `name1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fileUrl1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fileUrl2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descrit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `auteur` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Cette table enregistre les informations sur mes produits';

-- Dumping data for table pharmadb.article: ~6 rows (approximately)
INSERT INTO `article` (`id`, `nom`, `dateAjout`, `name1`, `fileUrl1`, `name2`, `fileUrl2`, `descrit`, `auteur`) VALUES
	(1, 'La pharmacie, une &oelig;uvre de Dieu ', '2023-12-23 07:17:36', 'C:UserskulewAppDataLocalTempphpDB23.tmp', 'dossier/55873edb536bc32bd3e8f5b759c760c1.jpg', 'C:UserskulewAppDataLocalTempphpDB72.tmp', 'dossier/TpECM.pdf', 'je me suis sentis perdu d\'attendre que la science n\'avait pas de lien avec le teaxher du net.', 'Robert Kule'),
	(2, 'Le web au service de la communaut&eacute; ', '2023-12-23 07:33:13', 'C:UserskulewAppDataLocalTempphp2672.tmp', 'dossier/images.png', 'C:UserskulewAppDataLocalTempphp2673.tmp', 'dossier/ThermoCours.pdf', 'je me suis sentis perdu d\'attendre que la medecine n\'avait pas de lien avec le teaxher du net.', 'Robert Kule'),
	(3, 'le monde sans la medecine', '2023-12-23 08:32:13', 'C:UserskulewAppDataLocalTempphp29AA.tmp', 'dossier/202bd58933900ee978fbdea3a64326a9.jpg', 'C:UserskulewAppDataLocalTempphp2A09.tmp', 'dossier/displayVisibleNoBootstrap.pdf', 'je me suis sentis perdu d\'attendre que le web n\'avait pas de lien avec le teaxher du net.', 'Robert Kule'),
	(4, 'Le teacher du net et la medecine', '2023-12-24 01:01:51', 'C:UserskulewAppDataLocalTempphp3354.tmp', 'dossier/2e9efcc7e2ec55a1a09e5a1fd59e1e6f.jpg', 'C:UserskulewAppDataLocalTempphp3365.tmp', 'dossier/installationDeLatex.pdf', 'ce blog parle de l&#039;importance des personnes sur ce site. Le web est tr&egrave;s important actuellement car le monde sans le net est foutue actuellement.', ' HERITIER AMURI TCHALUMBA'),
	(5, 'Le d&eacute;but du web et la m&eacute;decine ', '2023-12-24 01:44:22', 'C:UserskulewAppDataLocalTempphp23E7.tmp', 'dossier/1cb7d70c4ab9ec502fffc6b4ef40643e.jpg', 'C:UserskulewAppDataLocalTempphp23F8.tmp', 'dossier/document.pdf', 'Il fait maintenant plus de 20 ans que l&#039;informatique existe, personne n&#039;a jamais pens&eacute; &agrave; combiner la m&eacute;decine et la dite science. Et bien-s&ucirc;r &agrave; part nous, la R-Kule pharma.\r\nNous nous sommes sentis heureux de combiner ce message ', 'Robert Kule'),
	(6, 'L&#039;&eacute;glise et la medecine ', '2023-12-24 15:04:04', 'C:UserskulewAppDataLocalTempphpC9C5.tmp', 'dossier/9c61355a9c027192b0ffe41b80ffe228.jpg', 'C:UserskulewAppDataLocalTempphpC9D5.tmp', 'dossier/document.pdf', 'Ce que nous savons, nous suffit. si la bible aide, nous serons pas seul. Dieu est avec nous ', 'Robert Kule'),
	(7, 'Un jour &agrave; l&#039;ulpgl Goma', '2023-12-27 12:11:05', 'C:UserskulewAppDataLocalTempphpC26D.tmp', 'dossier/6acac3b59845d2ff863cf944b63925b9.jpg', 'C:UserskulewAppDataLocalTempphpC2BD.tmp', 'dossier/installationDeLatex.pdf', 'Nous somme l&#039;ulpgl. Nous voulons vous aidez &agrave; &eacute;crire nos code chaque jour.\r\nNous vous proposons de visiter notre site ulpgl.net pour nous retrouver.\r\nMerci d&#039;avance.', 'Robert Kule');

-- Dumping structure for table pharmadb.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `dateajout` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pharmadb.questions: ~4 rows (approximately)
INSERT INTO `questions` (`id`, `nom`, `email`, `question`, `dateajout`) VALUES
	(1, ' Gift Zawadi', 'gift@gmail.com', 'Pourquoi avoir une seule chose sur le site. Seulement les publicit&eacute;s ?', '2023-12-25'),
	(2, 'Robert Kule', 'rkule@gmail.com', 'Qui etes vous?', '2023-12-26'),
	(3, 'Robert Kule', 'rkule@gmail.com', 'Je suis aussi invit&eacute;?\r\n', '2023-12-26'),
	(4, 'gloria', 'glo@gmail.com', 'bonjour Rkule,nous sommes grandement satissfait de vos locaux', '2023-12-27'),
	(5, 'Robert Kule', 'rkule@gmail.com', 'Qui etes vous?', '2023-12-27'),
	(6, 'Robert Kule', 'rkule@gmail.com', 'Qui sommes nous', '2023-12-27'),
	(7, 'Robert Kule', 'rkule@gmail.com', 'RFGHJJHDHHH', '2023-12-27');

-- Dumping structure for table pharmadb.reponses
CREATE TABLE IF NOT EXISTS `reponses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL DEFAULT '0',
  `reponse` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dateajout` datetime NOT NULL,
  `exped` varchar(50) DEFAULT NULL,
  `reped` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Cette donne des réponses aux questions posées sur nos contacts';

-- Dumping data for table pharmadb.reponses: ~6 rows (approximately)
INSERT INTO `reponses` (`id`, `question`, `reponse`, `dateajout`, `exped`, `reped`) VALUES
	(1, 'Qu\'elle est le but de cette entreprise?', 'contribuer à améliorer la santé des populations africaines en leur fournissant des médicaments sûrs, efficaces et abordables. L\'entreprise s\'engage à développer des médicaments qui répondent aux besoins spécifiques des patients africains.', '2023-12-15 00:00:00', NULL, NULL),
	(2, 'Qui est le fondateur de cette organisation?', 'Le fondateur de notre entreprise est Robert KULE', '2023-12-15 10:03:21', NULL, NULL),
	(3, 'Je suis le web?', 'C&#039;est impossible car le web c&#039;est nous ', '2023-12-24 15:25:03', NULL, NULL),
	(4, 'Qui etes vous?', 'Nous sommes votre soins de santé', '2023-12-26 04:38:53', NULL, NULL),
	(5, 'Qui etes vous?', 'C&#039;est toi qui pose cette question. C&#039;est simple, Je suis près de toi pour assurer ta protection contre les maladies.', '2023-12-26 08:02:33', NULL, ''),
	(6, 'bonjour Rkule,nous sommes grandement satissfait de vos locaux', 'Merci beaucoup gloria pour votre visite ', '2023-12-27 07:00:18', NULL, ''),
	(7, 'Qui sommes nous', 'nous sommes vous', '2023-12-27 11:05:13', NULL, ''),
	(8, 'RFGHJJHDHHH', 'GGDGHBFD', '2023-12-27 11:54:00', NULL, '');

-- Dumping structure for table pharmadb.utilisateurs
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `sexe` enum('M','F') DEFAULT NULL,
  `motDePasse` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `adresse` varchar(50) DEFAULT NULL,
  `numeroDeTelephone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `typeDeCompte` tinyint(1) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pharmadb.utilisateurs: ~8 rows (approximately)
INSERT INTO `utilisateurs` (`id`, `nom`, `sexe`, `motDePasse`, `adresse`, `numeroDeTelephone`, `email`, `typeDeCompte`) VALUES
	(1, 'Robert Kule', 'M', '$2y$10$MJa/X3mWGjIYF2SEOHFkLu2BUneVUaHMNgZafVpmz1bg21C.WXkLa', 'Goma/ville', '0976482090', 'rkule@gmail.com', 1),
	(2, 'KISONIA TAYIVISA Guy', 'M', '$2y$10$gJdNXqObNEuopwwlzqdXLeNG5myLKa1SkUkPqElJvtMA6NBJIsMDO', 'goma', '0979675646', 'irguytayivisa@gmail.com', 0),
	(3, 'Gloria', 'F', '$2y$10$MtVePtYjlwhiTXtYXUWNAOdGUBZYtUYaNF5la9CRffTOFlleNB.ya', 'Kyeshero ', '0999153933', 'gloriamalyro@gmail.com', 0),
	(4, ' HERITIER AMURI TCHALUMBA', 'M', '$2y$10$.IAVRvedxhCHrHAqi9WkVOWTWso4K3bCHHItq6leS8/3IDiWdZUwa', ' KASIKA/GOMA', ' +243973822440', 'heritier@gmail.com', 0),
	(5, ' Gift Zawadi', 'F', '$2y$10$4oAVDXOFbb.buyCqwCx.fu2HT2Lm2noD6cNXNhHnDkDDb3oo2tw2S', ' Butembo, kyavuyiri', ' +243973822439', 'gift@gmail.com', 0),
	(6, 'gloria', 'F', '$2y$10$wbMcBjEvFqS2JBh5nlQSZ.tLfYxC4Men/C7/6hflz6z2V67bKxYc.', 'Goma/ville', '0999153933', 'glo@gmail.com', 0),
	(7, 'Ikuzwe', 'M', '$2y$10$3wJAm57eIKk48Evkqo6sEe8gC1mzUg0XhlEYz1e/v9z9qYxH8pcBe', 'Goma', '0975756285', 'barthelemyikuzwe@gmail.com', 0),
	(8, 'HERITIER AMURI', 'F', '$2y$10$ssT/X466QWfvj1MLWmz98OzQNjmeqP5lsTas4XKADh2OYt.3YoRRm', 'KASIKA/GOMA', '+243973822440', 'kl@gmail.com', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
