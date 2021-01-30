-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 02 déc. 2020 à 21:19
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ajax`
--

-- --------------------------------------------------------

--
-- Structure de la table `sondage`
--

CREATE TABLE `sondage` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sondage`
--

INSERT INTO `sondage` (`id`, `titre`, `date`) VALUES
(10, 'Que vais je manger : ', '2020-12-02 20:45:33');

-- --------------------------------------------------------

--
-- Structure de la table `sondage_questions`
--

CREATE TABLE `sondage_questions` (
  `id` int(11) NOT NULL,
  `id_sondage` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sondage_questions`
--

INSERT INTO `sondage_questions` (`id`, `id_sondage`, `titre`) VALUES
(18, 10, 'Ce matin '),
(19, 10, 'Ce midi');

-- --------------------------------------------------------

--
-- Structure de la table `sondage_reponses`
--

CREATE TABLE `sondage_reponses` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `reponse` text NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sondage_reponses`
--

INSERT INTO `sondage_reponses` (`id`, `id_question`, `reponse`, `vote`) VALUES
(19, 18, 'Brioche', 2),
(20, 18, 'Tartine', 1),
(21, 19, 'Bifsteak', 0),
(22, 19, 'KFC', 2),
(23, 19, 'Mcdo', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `motdepasse`) VALUES
(11, 'admin', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(13, 'a', 'a@a.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(15, 'Corentin', 'corentinancel@gmail.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8');

-- --------------------------------------------------------

--
-- Structure de la table `user_chat`
--

CREATE TABLE `user_chat` (
  `id_message` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `writtedBy` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_chat`
--

INSERT INTO `user_chat` (`id_message`, `user_id`, `friend_id`, `content`, `writtedBy`) VALUES
(15, 11, 15, 'ah ok', 11),
(16, 11, 15, 'wamllah', 11);

-- --------------------------------------------------------

--
-- Structure de la table `user_friends`
--

CREATE TABLE `user_friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `isFriend` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_friends`
--

INSERT INTO `user_friends` (`id`, `user_id`, `friend_id`, `isFriend`) VALUES
(43, 13, 15, 1),
(44, 11, 13, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `sondage`
--
ALTER TABLE `sondage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sondage_questions`
--
ALTER TABLE `sondage_questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sondage_reponses`
--
ALTER TABLE `sondage_reponses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_chat`
--
ALTER TABLE `user_chat`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `user.id` (`user_id`),
  ADD KEY `friend.id` (`friend_id`),
  ADD KEY `writtedBy.id` (`writtedBy`);

--
-- Index pour la table `user_friends`
--
ALTER TABLE `user_friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `friend_id` (`friend_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sondage`
--
ALTER TABLE `sondage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `sondage_questions`
--
ALTER TABLE `sondage_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `sondage_reponses`
--
ALTER TABLE `sondage_reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user_chat`
--
ALTER TABLE `user_chat`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user_friends`
--
ALTER TABLE `user_friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user_chat`
--
ALTER TABLE `user_chat`
  ADD CONSTRAINT `friend.id` FOREIGN KEY (`friend_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user.id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `writtedBy.id` FOREIGN KEY (`writtedBy`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user_friends`
--
ALTER TABLE `user_friends`
  ADD CONSTRAINT `friend_id` FOREIGN KEY (`friend_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
