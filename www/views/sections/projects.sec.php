<!-- Portfolio -->
	<div class="wrapper style3" id="projects">
		<article id="portfolio">
			<header>
				<h2>Posuere quis curae vis odio aliquet.</h2>
				<p>Proin odio consequat  sapien vestibulum consequat lorem dolore feugiat lorem ipsum dolore.</p>
			</header>
			









			<div class="main container">
				<ul id="og-grid" class="og-grid">
					<?php foreach ($types as $type): ?>
					<li class="4u">
						<a href="http://cargocollective.com/jaimemartinez/" data-projects="projet1!www.net-production.ch!deltapianotrio.png-/-projet2!www.net-production.ch!pharmaciegeny.png" data-largesrc="global/img/categories/<?php echo $type->getImage(); ?>" data-title="<?php echo $type->getLabel() ?>" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
								<article class="box style2">
									<span class="image"><img src="global/img/categories/<?php echo $type->getImage(); ?>" alt="<?php echo $type->getLabel(); ?>"/></span>
									<h3><?php echo $type->getLabel()?></h3>
								</article>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<!--<div class="container">
				<div class="row">
				
				<?php foreach ($types as $type): ?>
					<div class="4u">
						<article class="box style2">
							<a href="#" class=" image"><img src="global/img/categories/<?php echo $type->getImage(); ?>" alt="<?php echo $type->getLabel(); ?>"/></a>
							<h3><a href="#"><?php echo $type->getLabel()?></a></h3>
						</article>
					</div>
				<?php endforeach; ?>
				
				<?php foreach ($projects as $projectType): ?>
					<div class="type-details">
						<?php foreach ($projectType as $project): ?>
							<div class="project-details" style="background-image:url(global/img/projects/<?php echo $project->getPicture();?>);">
								<h3><?php echo $project->getTitle(); ?></h3>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endforeach; ?>
				</div>
			</div>-->
		</article>
	</div>
