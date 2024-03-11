-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2024 at 08:20 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

-- --------------------------------------------------------
--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`id`, `categorie`, `titre`, `texte`) VALUES
(1, 'CDD', 'concepteur/rédacteur web', 'Nous cherchons un(e) concepteur/trice, rédacteur/rice web pour créer des contenus engageants. Votre plume et votre créativité contribueront à valoriser l’identité de nos clients et à engager leur audience.
Compétences :
    Rédaction web optimisée SEO
    Création de contenus variés (articles, landing pages, newsletters)
    Bonne compréhension des enjeux marketing
Type de mission : freelance'), 

(2, 'stage', 'Développeur(euse) Web Front\-End', 'De formation Web, à la recherche d\'un stage de fin d\'étude vous connaissez toutes les étapes de la réalisation d’une interface riche. 

Rattaché(e) à l’équipe technique, vous participerez aux projets de développement de sites internet / intranet ou d’applications web sur des CMS Open Source : Drupal, WordPress et Automne CMS.
Vous serez très apprécié(e) pour votre maîtrise technique, votre curiosité, votre rigueur et votre autonomie.

Si vous êtes passionné(e) par le développement web et que vous voulez relever des challenges techniques proposés par des projets complexes et ambitieux, alors ce stage est fait pour vous');
--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `note` int(1) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `auteur`, `date`, `note`, `texte`) VALUES
(1, 'Mickeline', '2024-03-07', 5, 'Vraiment quel plaisir de travailler avec BusyB ! Ces gens sont des professionnels, ça se voit jusque dans les plus petits détails'),
(2, 'John-Jacques', '2024-02-13', 4, 'Du beau travail. Site stylé et fonctionnel. Equipe efficace et à l\'écoute.\r\nJ\'enlève tout de même une étoile car ils ne livrent pas le café.'),
(3, 'José', '2024-01-03', 5, 'Nous avons confié la réalisation du site de notre entreprise à Amandine et son équipe et le résultat est vraiment impeccable. Une équipe réactive et sympathique.'),
(4, 'Cunégonde', '2023-11-25', 5, 'Professionalisme et expertise au rendez-vous. Les délais ont été respectés et le produit fini est au delà de nos attentes. Ce fut un plaisir de travailler avec BusyB'); 
--------------------------------------------------------
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
(1, 'Projet \"lignes de code\"', '2023-02-15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nulla at dui pellentesque sollicitudin. Nullam finibus consequat tellus, eu fringilla odio elementum ac. Nam mattis tempus urna, et finibus sem fermentum elementum. Cras elementum dolor orci. Phasellus eget justo posuere, tempus dui at, blandit lorem. Quisque laoreet tellus diam. Etiam aliquam erat eget mauris efficitur fringilla. Morbi vestibulum tortor id diam eleifend dictum. Duis ante risus, sollicitudin fringilla urna sit amet, tristique pellentesque magna. Donec fermentum malesuada neque in luctus. Vivamus eget vehicula risus. Curabitur nec malesuada nisl, ut tempor ligula. Donec elementum purus metus, quis faucibus erat auctor ornare.', 'projet1.jpg'),
(2, 'Projet \"Terre avec des cercles de binaires\"', '2024-02-05', 'Pellentesque iaculis lobortis elit, ac malesuada lorem. Phasellus id viverra velit. Morbi in neque sed libero vulputate aliquet. Vestibulum porttitor ante vitae pellentesque consequat. Quisque et ligula in dolor cursus egestas. Donec eget sem ligula. Nunc at magna a mauris porta lacinia et quis mauris. Cras ultricies efficitur mi, id auctor nisl iaculis sit amet. Pellentesque nec ornare leo, fermentum porttitor tortor. Proin ligula nisi, molestie at malesuada ut, pharetra quis enim.', 'projet2.jpg'),
(3, 'Projet \"Cadenas numérique sécurisant\"', '2023-12-12', ' Phasellus ligula elit, viverra sed varius a, ultricies vitae tortor. Maecenas lacinia rhoncus cursus. Nunc eleifend interdum tellus, imperdiet porta diam pretium ac. Sed ac consequat lectus. Nunc ullamcorper metus non augue imperdiet, eget porta nunc sodales. Quisque nec blandit velit, non rutrum turpis. Mauris id consectetur justo. Pellentesque porta quis sapien in dignissim. Integer facilisis pharetra nibh ac ornare. Aenean vitae libero lorem. Etiam bibendum eget est id varius. Cras quis feugiat magna, quis mattis diam.\r\n\r\nFusce eleifend, sapien vitae volutpat gravida, dui ante suscipit magna, id laoreet ex velit eget erat. In non tortor urna. Nulla facilisi. Nullam euismod ligula eu dapibus faucibus. Donec libero nibh, pretium id cursus sit amet, tincidunt et nisi. In porttitor sapien sem, nec vulputate magna dapibus sed. Ut vitae nulla in mauris efficitur lobortis at ut turpis. Suspendisse ac erat ante. ', 'projet3.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `realisations`
--
ALTER TABLE `realisations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
