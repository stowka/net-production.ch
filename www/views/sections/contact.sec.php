<?php
	/**
	 * Default head section
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>
<!-- Footer -->
<div id="footer">
	<div class="container" id="contacts">
		<div class="row">
			<section class="3u 6u(narrower) 12u$(mobilep)">
				<h3>Augue mi Morbi</h3>
				<ul class="links">
					<li><a href="#">Mattis et quis rutrum</a></li>
					<li><a href="#">Suspendisse amet varius</a></li>
					<li><a href="#">Sed et dapibus quis</a></li>
					<li><a href="#">Rutrum accumsan dolor</a></li>
					<li><a href="#">Mattis rutrum accumsan</a></li>
					<li><a href="#">Suspendisse varius nibh</a></li>
					<li><a href="#">Sed et dapibus mattis</a></li>
				</ul>
			</section>
			<section class="3u 6u$(narrower) 12u$(mobilep)">
				<h3>Diam Vitae ut Felis</h3>
				<ul class="links">
					<li><a href="#">Duis neque nisi dapibus</a></li>
					<li><a href="#">Sed et dapibus quis</a></li>
					<li><a href="#">Rutrum accumsan sed</a></li>
					<li><a href="#">Mattis et sed accumsan</a></li>
					<li><a href="#">Duis neque nisi sed</a></li>
					<li><a href="#">Sed et dapibus quis</a></li>
					<li><a href="#">Rutrum amet varius</a></li>
				</ul>
			</section>

			<?php

				$value = Array();
				foreach ($words as $word) {
					$value[$word->getKeyword()] = $word->getValue();
				}
			?>
			<section class="6u 12u(narrower)">
				<h3><?php echo $value['contact'];?></h3>
				<form method="post" action="./">
					<div class="row 50%">
						<div class="6u 12u(mobilep)">
							<input type="text" name="name" class="form-control" id="name" placeholder="* <?php echo $value['contact-name'];?>" />
						</div>
					</div>
					<div class="row 50%">
						<div class="6u 12u(mobilep)">
							<input type="email" name="email" class="form-control" placeholder="* <?php echo $value['contact-email'];?>" />
						</div>

						<div class="6u 12u(mobilep)">
							<input type="tel" name="tel" class="form-control" placeholder="<?php echo $value['contact-phone'];?>" />
						</div>
					</div>
					<div class="row 50%">
						<div class="6u 12u(mobilep)">
							<select name="reason" class="form-control" id="reason">
								<?php foreach ($reasons as $reason): ?>
									<option value="<?php echo $reason->getLabel();?>"><?php echo $reason->getLabel();?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div id="trait"></div>
					<div class="row 50%">
						<div class="12u">
							<textarea name="message" class="form-control" placeholder="<?php echo $value['contact-message'];?>" rows="5" id="message" style="resize: none;"></textarea>
						</div>
					</div>
					<div class="row 50%">
						<div class="12u">
							<ul class="actions">
								<li><button type="submit" class="button alt"><?php echo $value['contact-send'];?></button></li>
							</ul>
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>

	<?php includeSection('icons'); ?>
	<?php includeSection('copyright'); ?>

</div>