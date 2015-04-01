<?php
	/**
	 * Default head section
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>
<!-- Highlights -->
<section class="wrapper style1" id="commitments" style="box-shadow: inset 0px 5px 5px #999, inset 0px -5px 5px #999;">
	<div class="container">
		<div class="row 400%" style="display: inline-block; margin: auto">
			<?php foreach ($commitments as $commitment) { ?>
				<section class="3u 10u(narrower) commit-wrapper">
					<table class="commitments">					
						<thead>
							<tr>
								<th class="text-center">
									<div class="icon major">
									<img  src="global/img/icons/<?php echo $commitment->getPicture(); ?>" alt="<?php echo $commitment->getPicture()?>">
									</div>
									<h3><?php echo $commitment->getTitle(); ?></h3>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">
									<ul>
										<?php $text = str_replace("\n","</li>",str_replace("- ", "<li>", $commitment->getDescription())); ?>
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

