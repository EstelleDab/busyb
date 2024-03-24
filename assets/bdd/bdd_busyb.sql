-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2024 at 10:14 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdd_busyb`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`id`, `categorie`, `titre`, `texte`) VALUES
(1, 'CDD', 'concepteur/rédacteur web', 'Nous cherchons un(e) concepteur/trice, rédacteur/rice web pour créer des contenus engageants. Votre plume et votre créativité contribueront à valoriser l’identité de nos clients et à engager leur audience.\n'),
(2, 'stage', 'Développeur(euse) Web Front-End', 'De formation Web, à la recherche d\'un stage de fin d\'étude vous connaissez toutes les étapes de la réalisation d’une interface riche. \nRattaché(e) à l’équipe technique, vous participerez aux projets de développement de sites internet / intranet ou d’applications web sur des CMS Open Source : Drupal, WordPress et Automne CMS.\nVous serez très apprécié(e) pour votre maîtrise technique, votre curiosité, votre rigueur et votre autonomie.Si vous êtes passionné(e) par le développement web et que vous voulez relever des challenges techniques proposés par des projets complexes et ambitieux, alors ce stage est fait pour vous'),
(3, 'stage', 'Community Manager', 'Etudiant en formation DEUST ou BUT, ayant une bonne connaissance des principes clés du SEO et maitrisant les différentes plateformes de réseaux sociaux vous avez une bonne aisance rédactionnelle\net avez une expérience en publication de contenu sous toutes leur forme');

<<<<<<< Updated upstream
(2, 'stage', 'Développeur(euse) Web Front\-End', 'De formation Web, à la recherche d\'un stage de fin d\'étude vous connaissez toutes les étapes de la réalisation d’une interface riche. 
Rattaché(e) à l’équipe technique, vous participerez aux projets de développement de sites internet / intranet ou d’applications web sur des CMS Open Source : Drupal, WordPress et Automne CMS.'),

(3, 'stage', 'Community Manager', 'Etudiant en formation DEUST ou BUT, ayant une bonne connaissance des principes clés du SEO et maitrisant les différentes plateformes de réseaux sociaux vous avez une bonne aisance rédactionnelle
et avez une expérience en publication de contenu sous toutes leur forme'),

(4, 'CDI', 'Designer interfaces', 'Etudiant en formation DEUST ou BUT, ayant une bonne connaissance des principes clés du SEO et maitrisant les différentes plateformes de réseaux sociaux vous avez une bonne aisance rédactionnelle
et avez une expérience en publication de contenu sous toutes leur forme'),

(5, 'stage', 'Développeur full stack', 'Etudiant en formation DEUST ou BUT, ayant une bonne connaissance des principes clés du SEO et maitrisant les différentes plateformes de réseaux sociaux vous avez une bonne aisance rédactionnelle
et avez une expérience en publication de contenu sous toutes leur forme'),

(6, 'CDD', 'Project Manager', 'Etudiant en formation DEUST ou BUT, ayant une bonne connaissance des principes clés du SEO et maitrisant les différentes plateformes de réseaux sociaux vous avez une bonne aisance rédactionnelle
et avez une expérience en publication de contenu sous toutes leur forme'),

(7, 'CDI', 'Data analyst', 'Etudiant en formation DEUST ou BUT, ayant une bonne connaissance des principes clés du SEO et maitrisant les différentes plateformes de réseaux sociaux vous avez une bonne aisance rédactionnelle
et avez une expérience en publication de contenu sous toutes leur forme'),

(8, 'CDI', 'Graphiste', 'Etudiant en formation DEUST ou BUT, ayant une bonne connaissance des principes clés du SEO et maitrisant les différentes plateformes de réseaux sociaux vous avez une bonne aisance rédactionnelle
et avez une expérience en publication de contenu sous toutes leur forme'),

(9, 'stage', 'Community Manager', 'Etudiant en formation DEUST ou BUT, ayant une bonne connaissance des principes clés du SEO et maitrisant les différentes plateformes de réseaux sociaux vous avez une bonne aisance rédactionnelle
et avez une expérience en publication de contenu sous toutes leur forme'),

(10, 'CDD', 'Développeur back-end', 'Nous cherchons un(e) concepteur/trice, rédacteur/rice web pour créer des contenus engageants. Votre plume et votre créativité contribueront à valoriser l’identité de nos clients et à engager leur audience.
');


=======
-- --------------------------------------------------------

>>>>>>> Stashed changes
--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `note` int(5) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `auteur`, `date`, `note`, `texte`) VALUES
(1, 'Mickeline', '2024-03-07', 5, 'Vraiment quel plaisir de travailler avec BusyB ! Ces gens sont des professionnels, ça se voit jusque dans les plus petits détails.'),
(2, 'John-Jacques', '2024-02-13', 4, 'Du beau travail. Site stylé et fonctionnel. Equipe efficace et à l\'écoute.\r\nJ\'enlève tout de même une étoile car ils ne livrent pas le café.'),
(3, 'José', '2024-01-03', 5, 'Nous avons confié la réalisation du site de notre entreprise à Amandine et son équipe et le résultat est vraiment impeccable. Une équipe réactive et sympathique.'),
(4, 'Cunégonde', '2023-11-25', 5, 'Professionalisme et expertise au rendez-vous. Les délais ont été respectés et le produit fini est au delà de nos attentes. Ce fut un plaisir de travailler avec BusyB.'),
(5, 'Jean-Mich', '2023-03-14', 2, 'je mets 2 pour montrer comment leur gestion des étoiles sur les notes de leurs avis est au top !');

-- --------------------------------------------------------

--
-- Table structure for table `realisations`
--

CREATE TABLE `realisations` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `texte` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `realisations`
--

INSERT INTO `realisations` (`id`, `titre`, `date`, `texte`, `image`) VALUES
(1, 'Projet \"lignes de code\"', '2023-02-15', 'Notre projet \"Lignes de code\" est un projet de développement back-end conçu pour gérer et traiter de grandes quantités de données de manière efficace et sécurisée. Ce projet vise à créer une architecture robuste qui supporte les opérations de données intensives et offre une intégration fluide avec diverses applications front-end.\r\n<br>\r\n<br>\r\nLes points clés du projet :\r\n<br>\r\n● Traitement de données à grande échelle<br>\r\n● APIs flexibles<br>\r\n● Sécurité des données<br>\r\n● Haute disponibilité.', 'projet1.jpg'),
(2, 'Projet \"Terre avec des cercles de binaires\"', '2024-02-05', 'Notre projet \"Terre avec des cercles de binaires\" est un projet ambitieux de développement web international visant à créer une plateforme multilingue qui facilite la communication et la collaboration entre développeurs, entreprises et utilisateurs du monde entier. L’objectif était de développer un site web responsive, accessible et sécurisé, qui offre des fonctionnalités telles que la gestion de projets, le partage de ressources, et la mise en réseau professionnelle.\r\n<br>\r\n<br>\r\nLes points clés du projet :\r\n<br>\r\n● Interface multilingue<br>\r\n● Collaboration en temps réel<br>\r\n● Sécurité renforcée<br>\r\n● Optimisation mobile', 'projet2.jpg'),
(3, 'Projet \"Cadenas numérique sécurisant\"', '2023-12-12', 'Notre grand projet \"Cadenas numérique sécurisant\" vise à protéger les infrastructures informatiques contre les cyberattaques. Ce projet se concentre sur la mise en place de barrières de sécurité avancées, la surveillance continue des réseaux et la réponse rapide aux incidents de sécurité.\r\n<br>\r\n<br>\r\nLes éléments essentiels du projet :<br>\r\n● Défense en profondeur<br>\r\n● Intelligence artificielle<br>\r\n● Formation et sensibilisation<br>\r\n● Conformité réglementaire.', 'projet3.jpg'),
(4, 'Projet \"Encore un projet incroyable\"', '2023-08-09', 'Le projet \"Encore un projet incroyable\" est un projet innovant de développement d’application multi-supports, conçu pour offrir une expérience utilisateur homogène sur divers appareils tels que smartphones, tablettes et ordinateurs. L’objectif est de créer une application qui s’adapte automatiquement aux différentes tailles d’écran et systèmes d’exploitation, tout en maintenant des performances optimales.\r\n<br>\r\n<br>\r\nLes aspects clés du projet :<br>\r\n● Conception responsive<br>\r\n● Compatibilité cross-platform<br>\r\n● Expérience utilisateur unifiée<br>\r\n● Optimisation des performances.', 'projet4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realisations`
--
ALTER TABLE `realisations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `realisations`
--
ALTER TABLE `realisations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
