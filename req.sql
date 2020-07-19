INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES (6, 'Pays', NULL, 'pays', 'pays', 2);
INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES (6, 1, 6);

ALTER TABLE `module_role` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `module` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `tarif` CHANGE `code_tarif` `code_tarif` VARCHAR(100) NOT NULL;

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES
(7, 'Ville', NULL, 'ville', 'ville', 2),
(8, 'Agence', NULL, 'agences', 'agence', 2),
(9, 'Tarif', NULL, 'Tarif', 'tarif', 2),
(10, 'Liste utilisateurs', NULL, 'Liste des utilisateurs', 'showUser', 1);

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10);