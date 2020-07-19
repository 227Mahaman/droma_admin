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

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES
(11, 'Media', 'fa fa-upload', 'Le Module concernant le post des media', NULL, NULL),
(12, 'Ajouter un média', NULL, 'Ajout des medias', 'addMedia', 11),
(13, 'Liste des médias', NULL, 'Listing de nos medias', 'lstMedia', 11);

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES
(11, 1, 11),
(12, 1, 12),
(13, 1, 13);

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES
(14, 'NewsLetter', 'fa fa-info', 'Abonnement pour recevoir les notif', NULL, NULL),
(15, 'Abonné', NULL, 'Abonnement à nos notifications', 'abonne', 14),
(16, 'Envoi mail', NULL, 'Envoyer des mails aux abonnés', 'envoiMail', 14);

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES
(14, 1, 14),
(15, 1, 15),
(16, 1, 16);