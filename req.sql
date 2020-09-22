//Envigueur
ALTER TABLE `agence` ADD `file` INT NULL AFTER `ville`, ADD INDEX (`file`);

-- //25 Juiilet 2020
ALTER TABLE `tarif` ADD `vdepart` INT NULL AFTER `valeur`, ADD `vdestination` INT NULL AFTER `vdepart`, ADD INDEX (`vdestination`), ADD INDEX (`vdepart`);
ALTER TABLE `ville` DROP `tarif`;

ALTER TABLE `billet` DROP `depart_destination`;
ALTER TABLE `billet` ADD `depart` INT NULL AFTER `bus`, ADD `destination` INT NULL AFTER `depart`, ADD INDEX (`depart`), ADD INDEX (`destination`);

-- MAJ komche
ALTER TABLE `tarif` ADD FOREIGN KEY (`vdepart`) REFERENCES `ville`(`id_ville`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `tarif` ADD FOREIGN KEY (`vdestination`) REFERENCES `ville`(`id_ville`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `agence` ADD `localisation` VARCHAR(300) NOT NULL AFTER `nom_agence`;

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES
(17, 'Réservation', '', 'gestion des réservations', NULL, NULL),
(18, 'Consulter', NULL, 'consulter une réservation', 'consulter', 17);
--26 juillet 2020
CREATE TABLE `avis` (
  `id_avis` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `txt` text NOT NULL,
  `file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`),
  ADD KEY `client` (`client`),
  ADD KEY `file` (`file`);
ALTER TABLE `avis`
  MODIFY `id_avis` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `avis_ibfk_2` FOREIGN KEY (`file`) REFERENCES `files` (`id`);
COMMIT;

ALTER TABLE `avis` CHANGE `txt` `txt` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL, CHANGE `file` `file` INT(11) NULL;
ALTER TABLE `avis` ADD `url_v` VARCHAR(255) NULL AFTER `file`;

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES
(17, 'Ajouter un tèmoignage', NULL, 'Ajouter des tèmoignages client', 'addAvis', 11);

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES
(17, 1, 17);

####
Création new TABLE
##1
CREATE TABLE `garages` (
  `id_garage` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `garages`
  ADD PRIMARY KEY (`id_garage`);
ALTER TABLE `garages`
  MODIFY `id_garage` int(11) NOT NULL AUTO_INCREMENT;
##2
CREATE TABLE `bus` (
  `id_bus` int(11) NOT NULL,
  `numero_plaque` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `chauffeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`),
  ADD KEY `chauffeur` (`chauffeur`);
ALTER TABLE `bus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT;
##3
CREATE TABLE `employes` (
  `id_employe` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id_employe`);
ALTER TABLE `employes`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT;
##4
CREATE TABLE `information` (
  `id_information` int(11) NOT NULL,
  `bp` int(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `information`
  ADD PRIMARY KEY (`id_information`);
ALTER TABLE `information`
  MODIFY `id_information` int(11) NOT NULL AUTO_INCREMENT;

##Mardi 22##
INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES
(20, 'SiteWeb', NULL, 'Pouvoir changer les informations du site web', 'siteweb', 2);
INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES
(20, 1, 20);

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES
(21, 'Ajouter un chauffeur', NULL, 'permet d\\\'ajouter les chauffeurs', 'addChauffeur', 1),
(22, 'Liste chauffeurs', NULL, 'Liste des chauffeurs', 'lstChauffeur', 1),
(23, 'Ajouter gare', NULL, 'Permet d\\\'ajouter les gares', 'addGare', 1),
(24, 'Liste gares', NULL, 'Lister l\\\'ensemble de nos gares', 'lstGare', 1),
(25, 'Ajouter un bus', NULL, 'Permet d\\\'enregistrer les bus', 'addBus', 1),
(26, 'Liste des bus', NULL, 'Listing des bus', 'lstBus', 1);