-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 06 mar. 2024 à 10:50
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BDD_realisations`
--

-- --------------------------------------------------------

--
-- Table structure for table `realisations`
--

CREATE TABLE `realisations` (
  `identifiant` int(11) NOT NULL,
  `date` date NOT NULL,
  `titre` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `texte` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realisations`
--

INSERT INTO `realisations` (`identifiant`, `date`, `titre`, `image`, `texte`) VALUES
(1, '2023-02-12', 'Projet 1', 'projet1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nulla at dui pellentesque sollicitudin. Nullam finibus consequat tellus, eu fringilla odio elementum ac. Nam mattis tempus urna, et finibus sem fermentum elementum. Cras elementum dolor orci. Phasellus eget justo posuere, tempus dui at, blandit lorem. Quisque laoreet tellus diam. Etiam aliquam erat eget mauris efficitur fringilla. Morbi vestibulum tortor id diam eleifend dictum. Duis ante risus, sollicitudin fringilla urna sit amet, tristique pellentesque magna. Donec fermentum malesuada neque in luctus. Vivamus eget vehicula risus. Curabitur nec malesuada nisl, ut tempor ligula. Donec elementum purus metus, quis faucibus erat auctor ornare. '),
(2, '2023-07-28', 'Projet 2', 'projet2.jpg', 'Pellentesque iaculis lobortis elit, ac malesuada lorem. Phasellus id viverra velit. Morbi in neque sed libero vulputate aliquet. Vestibulum porttitor ante vitae pellentesque consequat. Quisque et ligula in dolor cursus egestas. Donec eget sem ligula. Nunc at magna a mauris porta lacinia et quis mauris. Cras ultricies efficitur mi, id auctor nisl iaculis sit amet. Pellentesque nec ornare leo, fermentum porttitor tortor. Proin ligula nisi, molestie at malesuada ut, pharetra quis enim. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `realisations`
--
ALTER TABLE `realisations`
  ADD PRIMARY KEY (`identifiant`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `realisations`
--
ALTER TABLE `realisations`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
