-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 04:23 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_projet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(3) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `prenom_utilisateur` varchar(255) NOT NULL,
  `email_utilisateur` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role_utilisateur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `mot_de_passe`, `role_utilisateur`) VALUES
(1, 'bellous', 'othmane', 'othmane.bellous@gmail.com', '123', 'admin'),
(2, 'bahri', 'sara', 'sara@gmail.com', '123456', 'admin'),
(4, 'ennaji', 'mona', 'mona@gmail.com', '12345', 'abonné'),
(5, 'lotfi', 'adam', 'adam@gmail.com', 'adam123', 'abonné'),
(6, 'samir', 'samir', 'samir@gmail.com', 'samirrrrr', 'abonné'),
(7, 'khairi', 'said', 'said@gmail.com', 'oooooooooooo', 'abonné'),
(8, 'moujahid', 'anas', 'anas@gmail.com', 'mmoujahid', 'abonné'),
(9, 'chakiri', 'mohammed', 'mohammed@gmail.com', 'abcdsfre', 'abonné'),
(11, 'farisi', 'yassine', 'yassine@gmail.com', 'vghnjuy', 'abonné'),
(12, 'ziani', 'abdellah', 'abdellah@gmail.com', 'ttrreee', 'abonné'),
(13, 'jebli', 'safae', 'safae@gmail.com', '12345', 'abonné');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
