<?php
	/**
	 * Default head section
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>
<!-- Footer -->
<div id="footer">
	<div class="container" id="contact">
		<div class="row">

			<?php
				$value = Array();
				foreach ($words as $word) {
					$value[$word->getKeyword()] = $word->getValue();
				}
			?>
			<!--<section class="5u 7u(narrower) 12u$(mobilep)">
				<h3><?php echo $value['partner']?></h3>
				<ul class="links">
					<?php foreach ($partners as $partner): ?>
						<li><a href="<?php echo $partner->getUrl();?>"><?php echo $partner->getName();?></a></li>
					<?php endforeach; ?>
				</ul>
			</section>-->
			<section class="5u 7u(narrower) 12u$(mobilep)">
				<h3 class="partners"><?php echo $value['partner']?></h3>
				<ul class="links">
						<li class="partner"><a href="http://invention.ch" target="_blank"><img src="global/img/partners/invention2.png"/></a></li>
						<li class="partner"><a href="http://www.invention.ch/iromagazine/" target="_blank"><img src="global/img/partners/iro-mag2.png"/></a></li>
						<li class="partner"><a href="http://www.cabinetstartup.fr/" target="_blank"><img src="global/img/partners/cab-startup.png"/></a></li>
				</ul>
			</section>

			<section class="6u 12u(narrower)">
				<h3 style="color: #ddd"><?php echo $value['contact'];?></h3>
				<form method="post" action="./">
					<div class="row 50%">
						<div class="12u">
							<input type="text" name="name" class="form-control" id="name" style="width: 100%" placeholder="* <?php echo $value['contact-name'];?>" />
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
						<div class="12u">
							<select name="reason" class="form-control" id="reason" style="width: 100%">
								<?php foreach ($reasons as $reason): ?>
									<option value="<?php echo $reason->getLabel();?>"><?php echo $reason->getLabel();?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div id="trait"></div>
					<div class="row 50%">
						<div class="12u">
							<textarea style="width:582px; resize:none;" name="message" class="form-control" placeholder="<?php echo $value['contact-message'];?>" rows="5" id="message" style="resize: none;"></textarea>
						</div>
					</div>
					<div class="row 50%">
						<div class="12u">
							<ul class="actions">
								<li><button type="submit" class="button-plus button-contact"><?php echo $value['contact-send'];?></button></li>
							</ul>
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>

	<?php require_once('views/sections/icons.sec.php'); ?>
	<?php require_once('views/sections/copyright.sec.php'); ?>

</div>