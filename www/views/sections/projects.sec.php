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
						<?php $projects = Project::getAllByTypeAndLanguage($type->getId(), $lang);?>
						<li class="4u">
							<a 	href="http://cargocollective.com/jaimemartinez/" 
								data-projects='
								<?php foreach ($projects as $project):
									echo "<img src=\"global/img/screenshots/" . $project->getPicture() . "\" alt=\"" . $project->getPicture() . "\" width=\"30%\"></img><br>";
								endforeach; ?>'
								data-largesrc="global/img/categories/<?php echo $type->getImage(); ?>" 
								data-title="<?php echo $type->getLabel() ?>">
									<article class="box style2">
										<span class="image"><img src="global/img/categories/<?php echo $type->getImage(); ?>" alt="<?php echo $type->getLabel(); ?>"/></span>
										<h3><?php echo $type->getLabel()?></h3>
									</article>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</article>
	</div>
