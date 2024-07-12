-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 12 juil. 2024 à 07:10
-- Version du serveur : 8.0.37-0ubuntu0.24.04.1
-- Version de PHP : 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `task_manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int NOT NULL,
  `task_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `end_date` date NOT NULL,
  `statut` enum('expired','in progress') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'in progress',
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `description`, `end_date`, `statut`, `user_id`) VALUES
(2, 'concevoir la base de donnee', 'definir un mcd convertir en mld...', '2024-07-15', 'expired', 4),
(3, 'creer la page d\'accueil', 'dghhjkl', '2024-07-17', 'in progress', 4),
(5, 'concevoir la base de donnee', 'sjjkkk', '2024-07-18', 'expired', 5),
(6, 'concevoir la base de donnee', 'creation du mcd, mld, installation du serveur de bd', '2024-07-13', 'in progress', 5);

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `id` int NOT NULL,
  `team_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `teams`
--

INSERT INTO `teams` (`id`, `team_name`) VALUES
(10, 'New Team');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `statut` enum('Admin','Employé') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Employé'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `email`, `password`, `statut`) VALUES
(2, 'Bazize', 'Yanis', 'yanis@mail.com', '$2y$10$aUwXa8qEEBCS18KV6zFg3ewv5yechhVEwoqnDyQMixW46dSwfjw.O', 'Employé'),
(3, 'Ngom', 'Abraham Ibou Diokel', 'diokel@mail.com', '$2y$10$dyFmErUD.f.We.dfZqYEf.OfO9UNaelitWnohoGre.QIyPVOrWPmi', 'Employé'),
(4, 'Ben Rabiaa', 'Chahine', 'ben@mail.com', '$2y$10$aeuoPkFj6ffgoqACEctpT.RSnLXlNih1/xDoC1IW8Ue01olDp1GNi', 'Employé'),
(5, 'Benouar', 'Yeris', 'benouar@mail.com', '$2y$10$gmXSdMciw3Eif0FJ.zPOlOx6gQoyfKWsq6yzU9EvmmG6/im13WENi', 'Employé'),
(6, 'Campello--Terentieff', 'Victor', 'campelo@mail.com', '$2y$10$83akbHEIHvQCLgbd6tsze.blhhHTno6dAtgDxQSMhtZojYt0CePgW', 'Employé'),
(7, 'Faure', 'Manuel', 'manuel@mail.com', '$2y$10$qKdfHWiJBojRzIM.c7Heo.pTR7fA24xEHZfGGpjJIVxyMAgqZg8Ju', 'Employé'),
(8, 'Gaid', 'Aziz', 'aziz@mail.com', '$2y$10$I2m3jUSpm3Rgz..kRV.Qg.SZkwtl0N.r1acL2l9clZzk6SyTZ1I/6', 'Employé'),
(9, 'Mieghakanda', 'Petrony De Clismard', 'petrony@mail.com', '$2y$10$8tWTla81A.FiJCv7UrE4Z.3hNZQqlIYsVe.vuysT/.XelziQ/VTdW', 'Employé'),
(10, 'Natsios', 'Sotirios', 'sotirios@mail.com', '$2y$10$xLa1f3WAE8PgjBntrmvz/.6zfm7sV0ug0MMCdeSDjUIuAiZl29yua', 'Employé'),
(11, 'Nyirumulinga', 'Maelle', 'maelle@mail.com', '$2y$10$ACe717ToFy//eeBP4//ow.IJ2666VWEzISZR230OicXfTgk6XypyC', 'Employé'),
(12, 'Vercueil', 'Clement', 'clement@mail.com', '$2y$10$zu5g2HzvT4p8Zz0ZddCHDeMNZANB/ePo3F3aSjtvXJ9fxZr5I5Qdy', 'Employé'),
(13, 'Kadima', 'Flory', 'flory@mail.com', '$2y$10$abxYKeYqHsPc7q7tU8dWbeNSI2wYS1R0OEVO.ZM4RIY3mAjiLuTda', 'Employé'),
(14, 'Hirtz', 'Adrien', 'adrien@mail.com', '$2y$10$1mts4erU5ho.0lbjZwJ3zOrbTSyfep6OBoXxr6.oENoozLUIhlcp6', 'Employé'),
(15, 'Doe', 'John', 'john@mail.com', '$2y$10$8tVRkX/CVUqUp1qPQ/d7nuRL5OfbCfkgdtpLq91Gu3IchleQoE2Ra', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `user_teams`
--

CREATE TABLE `user_teams` (
  `user_id` int NOT NULL,
  `team_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_teams`
--

INSERT INTO `user_teams` (`user_id`, `team_id`) VALUES
(7, 10),
(8, 10),
(10, 10),
(11, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `user_teams`
--
ALTER TABLE `user_teams`
  ADD PRIMARY KEY (`user_id`,`team_id`),
  ADD KEY `team_user` (`team_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `user_teams`
--
ALTER TABLE `user_teams`
  ADD CONSTRAINT `user_teams_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `user_teams_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
