<!-- Portfolio -->
	<div class="wrapper style3" id="projects">
		<article id="portfolio">
			<header>
				<h2>Posuere quis curae vis odio aliquet.</h2>
				<p>Proin odio consequat  sapien vestibulum consequat lorem dolore feugiat lorem ipsum dolore.</p>
			</header>
			<div class="container">
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
			</div>
		</article>
	</div>
