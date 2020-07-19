INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES (6, 'Pays', NULL, 'pays', 'pays', 2);
INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES (6, 1, 6);

ALTER TABLE `module_role` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `module` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;