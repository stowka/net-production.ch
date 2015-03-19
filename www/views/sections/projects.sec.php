<!-- Portfolio -->
	<div class="wrapper style3" id="projects">
		<article id="portfolio">
			<header>
				<h2>Posuere quis curae vis odio aliquet.</h2>
				<p>Proin odio consequat  sapien vestibulum consequat lorem dolore feugiat lorem ipsum dolore.</p>
			</header>
			<div class="container">
				<div class="row">
				
				<?php foreach ($types as $type) { ?>
				<div class="4u">
					<article class="box style2">
						<a href="#fancybox<?php echo $type->getId();?>" class="fancybox"><img src="global/img/<?php echo $type->getImage(); ?>" alt="<?php echo $type->getImage(); ?>"/></a>
						<h3><a href="#"><?php echo $type->getLabel()?></a></h3>
					</article>
				</div>
				<?php } ?>
				</div>
			</div>
			<!-- <footer>
				<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
				<center><a href="#contact" class="button big scrolly">Ata ut neque nisi et</a></center>
			</footer> -->
			
			<!-- Fancybox pour chaque catégorie -->
			<?php foreach ($types as $type) { ?>
				<div id="fancybox<?php echo $type->getId(); ?>" style="display:none">
					<?php echo $type->getLabel();?>
				</div>
			<?php } ?>
		</article>
	</div>

	<script type="text/javascript">
		$(".fancybox").fancybox();
	</script>
