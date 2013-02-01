<?php
/**
 * Script non interactif d'installation du module contenus_html
 */

// deja appele par l'installer
// $db->beginTransaction();

$sql = <<<SQL


-- -----------------------------------------------------
-- Table `clementine_cms_contenu_html`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clementine_cms_contenu_html` (
  `id` INT UNSIGNED NOT NULL ,
  `lang` CHAR(2) NOT NULL ,
  `contenu_html` TEXT NOT NULL ,
  PRIMARY KEY (`id`, `lang`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SQL;

if (!$db->prepare($sql)->execute()) {
    $db->rollBack();
    return false;
}

// deja appele par l'installer
// $db->commit();
return true;
?>
