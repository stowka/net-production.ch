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
				<table class="table>"
					
					<thead>
						<tr>
							<th class="text-center">
								<i class="icon major fa-paper-plane"></i>
								<br>
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
					<!-- <div class="box highlight"> </div> -->
					</tbody>
				</table>
			</section>
		<?php }?>
		</div>
	</div>
</section>
