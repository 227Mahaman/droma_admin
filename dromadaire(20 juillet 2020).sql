-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 20 juil. 2020 à 14:00
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dromadaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

CREATE TABLE `actions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `action_url` varchar(20) DEFAULT NULL,
  `module` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actions`
--

INSERT INTO `actions` (`id`, `name`, `description`, `action_url`, `module`) VALUES
(1, 'Rôle', 'Gestion des rôle', 'role', 1),
(2, 'Module', 'Gestion des modules', 'module', 1),
(3, 'Ajouter utilisateur', 'permet d\'Ajouter un utilisateur', 'addUser', 1);

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id_agence` int(11) NOT NULL,
  `code_agence` varchar(255) NOT NULL,
  `nom_agence` varchar(255) NOT NULL,
  `ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`id_agence`, `code_agence`, `nom_agence`, `ville`) VALUES
(1, 'Ny_01', 'Siege', 1);

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `id_billet` int(11) NOT NULL,
  `code_billet` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_create` int(11) DEFAULT NULL,
  `depart` int(11) DEFAULT NULL,
  `destination` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `nationalite` varchar(255) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `file_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `file_name`, `file_url`, `file_type`, `file_size`) VALUES
(1, '100_7204.JPG', 'public/img/2020.07.19.20.22.49100_7204.JPG', 'image/jpeg', 1664639),
(2, '100_7204.JPG', 'public/img/2020.07.19.20.24.29100_7204.JPG', 'image/jpeg', 1664639),
(3, 'DSC0k4168.jpg', 'public/img/2020.07.19.22.28.41DSC0k4168.jpg', 'image/jpeg', 438014),
(4, 'IMG_6756.JPG', 'public/img/2020.07.20.00.23.19IMG_6756.JPG', 'image/jpeg', 834162);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `action_url` varchar(100) DEFAULT NULL,
  `sub_module` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES
(1, 'Administration', NULL, 'le module d\'administration', NULL, NULL),
(2, 'Configuration', 'fa-gears', 'Configuration de l\'application', NULL, NULL),
(3, 'Rôle', NULL, 'Gestion des rôle', 'role', 1),
(4, 'Module', NULL, 'Gestion des modules', 'module', 1),
(5, 'Ajouter utilisateur', NULL, 'permet d\'Ajouter un utilisateur', 'addUser', 1),
(6, 'Pays', NULL, 'pays', 'pays', 2),
(7, 'Ville', NULL, 'ville', 'ville', 2),
(8, 'Agence', NULL, 'agences', 'agence', 2),
(9, 'Tarif', NULL, 'Tarif', 'tarif', 2),
(10, 'Liste utilisateurs', NULL, 'Liste des utilisateurs', 'showUser', 1),
(11, 'Media', 'fa fa-upload', 'Le Module concernant le post des media', NULL, NULL),
(12, 'Ajouter un média', NULL, 'Ajout des medias', 'addMedia', 11),
(13, 'Liste des médias', NULL, 'Listing de nos medias', 'lstMedia', 11),
(14, 'NewsLetter', 'fa fa-info', 'Abonnement pour recevoir les notif', NULL, NULL),
(15, 'Abonné', NULL, 'Abonnement à nos notifications', 'abonne', 14),
(16, 'Envoi mail', NULL, 'Envoyer des mails aux abonnés', 'envoiMail', 14);

-- --------------------------------------------------------

--
-- Structure de la table `module_role`
--

CREATE TABLE `module_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module_role`
--

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `mail`) VALUES
(1, 'zalkiabass.456@gmail.com'),
(2, 'moctarayouba@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom`) VALUES
(1, 'Niger'),
(2, 'Mali'),
(3, 'Côte d\'ivoire'),
(4, 'Burkina Faso');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `intitule_post` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `theme` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_create` int(11) NOT NULL,
  `file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `intitule_post`, `description`, `theme`, `created_at`, `user_create`, `file`) VALUES
(1, 'NigerGoodTrip', 'tests tsts tsts tsts ', 'Social', '2020-07-19 20:28:41', 15, 3),
(2, 'Jeux Concours', 'Jeux photo', 'Concours', '2020-07-19 22:23:19', 15, 4);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `billet` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `cout` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Administrateur', 'Il a tout les droits');

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(11) NOT NULL,
  `code_tarif` varchar(100) NOT NULL,
  `valeur` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `code_tarif`, `valeur`) VALUES
(1, 'NIAMEY_OUAGA', '13000'),
(2, 'OUAGA_NIAMEY', '12000'),
(3, 'NIAMEY_MARADI', '11000'),
(4, 'MARADI_NIAMEY', '11000');

-- --------------------------------------------------------

--
-- Structure de la table `type_agent`
--

CREATE TABLE `type_agent` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_agent`
--

INSERT INTO `type_agent` (`id`, `label`) VALUES
(1, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `type_agent` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) DEFAULT 0,
  `password_` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `matricule`, `phone_number`, `type_agent`, `created_at`, `updated_at`, `photo`, `role`, `status`, `password_`) VALUES
(1, 'admin', 'Komche', 'AA01', '+22798960382', 1, '2019-08-26 19:05:41', '2020-06-11 10:01:27', 0, 1, 1, '$2y$10$ygiJopuOlQRY0g0R5T3O.O13HB7u6tCBcHDQLPA9fcm4p0/SYT1Bq'),
(15, '227', 'Mahaman', 'AA1', '+22796962435', 1, '2020-07-19 18:24:29', '2020-07-19 07:37:52', 2, 1, 1, '$2y$10$f1F1uqR4kNij7a9v3TidouT/olplMQf6FvXAkuKARO3KWwQJcOA0a');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `pays` int(11) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `intitule`, `pays`, `tarif`) VALUES
(1, 'Niamey', 1, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module` (`module`);

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id_agence`),
  ADD KEY `ville` (`ville`);

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`id_billet`),
  ADD KEY `user_create` (`user_create`),
  ADD KEY `destination` (`destination`),
  ADD KEY `depart` (`depart`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `sub_module` (`sub_module`);

--
-- Index pour la table `module_role`
--
ALTER TABLE `module_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`module`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `user_create` (`user_create`),
  ADD KEY `file` (`file`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `client` (`client`),
  ADD KEY `billet` (`billet`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Index pour la table `type_agent`
--
ALTER TABLE `type_agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_agent` (`type_agent`),
  ADD KEY `role` (`role`),
  ADD KEY `photo` (`photo`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`),
  ADD KEY `pays` (`pays`),
  ADD KEY `tarif` (`tarif`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id_agence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `id_billet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `module_role`
--
ALTER TABLE `module_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id_pays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_agent`
--
ALTER TABLE `type_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agence`
--
ALTER TABLE `agence`
  ADD CONSTRAINT `agence_ibfk_1` FOREIGN KEY (`ville`) REFERENCES `ville` (`id_ville`);

--
-- Contraintes pour la table `billet`
--
ALTER TABLE `billet`
  ADD CONSTRAINT `billet_ibfk_1` FOREIGN KEY (`depart`) REFERENCES `ville` (`id_ville`),
  ADD CONSTRAINT `billet_ibfk_2` FOREIGN KEY (`destination`) REFERENCES `ville` (`id_ville`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`sub_module`) REFERENCES `module` (`id`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`file`) REFERENCES `files` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`billet`) REFERENCES `billet` (`id_billet`);

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`pays`) REFERENCES `pays` (`id_pays`),
  ADD CONSTRAINT `ville_ibfk_2` FOREIGN KEY (`tarif`) REFERENCES `tarif` (`id_tarif`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
