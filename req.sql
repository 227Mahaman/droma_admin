//Envigueur
ALTER TABLE `agence` ADD `file` INT NULL AFTER `ville`, ADD INDEX (`file`);

//25 Juiilet 2020
ALTER TABLE `tarif` ADD `vdepart` INT NULL AFTER `valeur`, ADD `vdestination` INT NULL AFTER `vdepart`, ADD INDEX (`vdestination`), ADD INDEX (`vdepart`);
ALTER TABLE `ville` DROP `tarif`;