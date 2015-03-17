<?php
	/**
	 * Default home view
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>

<!doctype html>
<html lang="<?php displayLanguage('fr_CH'); ?>">
	<?php includeSection('head') ?>

	<body>
		<?php includeSection('menu'); ?>
		<?php includeSection('banner'); ?>

		<?php includeSection('commitments'); ?>

		<?php includeSection('giant'); ?>

		<?php includeSection('projects'); ?>

		<?php includeSection('posts'); ?>

		<?php includeSection('team'); ?>

		<?php includeSection('contact'); ?>
	</body>
</html>