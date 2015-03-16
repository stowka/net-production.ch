<?php
	/**
	 * Default home view
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>

<!doctype html>
<html lang="<?php displayLanguage(); ?>">
	<?php includeSection('head') ?>

	<body>
		<?php includeSection('header'); ?>
		<?php includeSection('banner'); ?>

		<?php includeSection('highlights'); ?>

		<?php includeSection('gigantic-heading'); ?>

		<?php includeSection('posts'); ?>

		<?php includeSection('CTA'); ?>

		<?php includeSection('footer'); ?>
	</body>
</html>