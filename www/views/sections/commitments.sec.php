<?php
	/**
	 * Default head section
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>
<!-- Highlights -->
<section class="wrapper style1" id="commitments">
	<div class="container">
		<div class="row 400%">
			<?php foreach ($commitments as $commitment) { ?>
				<section class="3u 8u(narrower)">
					<table class="table">					
						<thead>
							<tr>
								<th class="text-center">
									<img src="global/img/icons/<?php echo $commitment->getId()?>.png" alt="<?php echo $commitment->getId()?>.png">
									<h3><?php echo $commitment->getTitle(); ?></h3>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">
									<ul>
										<?php $text = str_replace("\n","</li>",str_replace("-", "<li>", $commitment->getDescription())); ?>
										<p><?php echo $text; ?></p>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
			<?php }?>
		</div>
	</div>
</section>
