<?php
	/**
	 * Default head section
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>
<!-- Highlights -->
<section class="wrapper style1">
	<div class="container">
		<div class="row 400%">
		<?php foreach ($commitments as $commitment) { ?>
			<section class="3u 8u(narrower)">
				<div class="box highlight">
					<i class="icon major fa-paper-plane"></i>
					<h3><?php echo utf8_encode($commitment->getTitle()); ?></h3>
					<?php $text = str_replace("\n","</li>",str_replace("-", "<li>", $commitment->getDescription())); ?>
					<p><?php echo utf8_encode($text); ?></p>
				</div>
			</section>
		<?php }?>
		</div>
	</div>
</section>