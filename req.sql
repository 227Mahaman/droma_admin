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
