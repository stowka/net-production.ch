<?php
	/**
	 * Default home view
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>

<!doctype html>
<html lang="<?php displayLanguage('fr_CH'); ?>">
	<?php require_once('views/sections/head.sec.php') ?>

	<body>
		<?php require_once('views/sections/menu.sec.php'); ?>
		<?php require_once('views/sections/banner.sec.php'); ?>

		<?php require_once('views/sections/commitments.sec.php'); ?>

		<?php require_once('views/sections/giant.sec.php'); ?>

		<?php require_once('views/sections/projects.sec.php'); ?>

		<?php require_once('views/sections/team.sec.php'); ?>

		<?php require_once('views/sections/contact.sec.php'); ?>
	</body>
</html>