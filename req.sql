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