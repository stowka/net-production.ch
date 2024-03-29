<!-- Portfolio -->
	<div class="wrapper style3" id="projects">
		<article id="portfolio">
			<header style="margin-bottom: 0">
				<h2 style="margin-bottom: 0">Portfolio</h2>
			</header>
			<div class="main container">
				<ul id="og-grid" class="og-grid">
					<?php 
						$i = 0;
						foreach ($types as $type):
							$i += 1;
							$projects = Project::getAllByTypeAndLanguage($type->getId(), $lang);

							/* LINKS */
							if ($i <= 2): ?>
								<li class="4u polaroid">
									<a 	
										data-projects='
										<?php 
										foreach ($projects as $project): 
											
											echo "<li class=\"li-project\" ><a href=\"" . $project -> getUrl() ."\" target=\"_blank\"><div class=\"img-project square animated\" >",
											 
											"<img src=\"global/img/screenshots/mini/" . $project->getPicture() . "\" alt=\"" . $project->getPicture() . "\" width=\"30%\">",
											
											"<div class=\"title-project\" ><h3>" . $project -> getTitle() . "</h3>",
											"<p class=\"mob-h3-project\">" . $project -> getDescription() . "</p></div>",
											"</div></a></li>";

										endforeach; ?>'
										data-largesrc="" 
										data-title="<?php echo $type->getLabel() ?>">
											<article class="box style2">
												<span class="image"><img src="global/img/categories/<?php echo $type->getImage(); ?>" alt="<?php echo $type->getLabel(); ?>"/></span>
												<h3><?php echo $type->getLabel()?></h3>
											</article>
									</a>
								</li>

							<?php /* FANCYBOX */ ?>
							<?php elseif ($i <= 3): ?>
								<li class="4u polaroid">
									<a 	
										data-projects='
										<?php 
										foreach ($projects as $project): 
											
											echo "<li class=\"li-project\" ><a class=\"fancybox\" rel=\"group-" . $type->getId() . "\" href=\"global/img/screenshots/mini/" . $project->getPicture() . "\" target=\"_blank\"><div class=\"img-project square animated\" >",
											 
											 "<img src=\"global/img/screenshots/mini/" . $project->getPicture() . "\" alt=\"" . $project->getPicture() . "\" width=\"30%\">";
											
											echo "<div class=\"title-project\" ><h3>" . $project -> getTitle() . "</h3>",
											"<p class=\"mob-h3-project\">" . $project -> getDescription() . "</p></div>",
											"</div></a></li>";

										endforeach; ?>'
										data-largesrc="" 
										data-title="<?php echo $type->getLabel() ?>">
											<article class="box style2">
												<span class="image"><img src="global/img/categories/<?php echo $type->getImage(); ?>" alt="<?php echo $type->getLabel(); ?>"/></span>
												<h3><?php echo $type->getLabel()?></h3>
											</article>
									</a>
								</li>

							<?php elseif ($i <= 4): ?>
								<li class="4u polaroid">
									<a 	
										data-projects='
										<?php 
										foreach ($projects as $project): 
											
											echo "<li class=\"li-project\" ><a class=\"fancybox\" rel=\"group-" . $type->getId() . "\" href=\"global/img/screenshots/full/" . str_replace("png", "jpg", str_replace(" ", "%20", $project->getPicture())) . "\" target=\"_blank\"><div class=\"img-project square animated\" >",
											 
											 "<img src=\"global/img/screenshots/mini/" . $project->getPicture() . "\" alt=\"" . $project->getPicture() . "\" width=\"30%\">";
											
											echo "<div class=\"title-project\" ><h3>" . $project -> getTitle() . "</h3>",
											"<p class=\"mob-h3-project\">" . $project -> getDescription() . "</p></div>",
											"</div></a></li>";

										endforeach; ?>'
										data-largesrc="" 
										data-title="<?php echo $type->getLabel() ?>">
											<article class="box style2">
												<span class="image"><img src="global/img/categories/<?php echo $type->getImage(); ?>" alt="<?php echo $type->getLabel(); ?>"/></span>
												<h3><?php echo $type->getLabel()?></h3>
											</article>
									</a>
								</li>


							<?php else: ?>
								<li class="4u polaroid">
									<a 	
										data-projects='
										<?php 
										foreach ($projects as $project): 
											
											echo "<li class=\"li-project\" ><a class=\"fancybox\" rel=\"group-" . $type->getId() . "\" href=\"global/img/photograph/" . $project->getPicture() . "\" target=\"_blank\"><div class=\"img-project square animated\" >",
											 
											 "<img src=\"global/img/photograph/" . $project->getPicture() . "\" alt=\"" . $project->getPicture() . "\" width=\"30%\">";
											
											echo "<div class=\"title-project\" ><h3>" . $project -> getTitle() . "</h3>",
											"<p class=\"mob-h3-project\">" . $project -> getDescription() . "</p></div>",
											"</div></a></li>";

										endforeach; ?>'
										data-largesrc="" 
										data-title="<?php echo $type->getLabel() ?>">
											<article class="box style2">
												<span class="image"><img src="global/img/categories/<?php echo $type->getImage(); ?>" alt="<?php echo $type->getLabel(); ?>"/></span>
												<h3><?php echo $type->getLabel()?></h3>
											</article>
									</a>
								</li>
						<?php endif;
					endforeach; ?>
				</ul>
			</div>
		</article>
	</div>

	<script type="text/javascript">

	$(document).ready(function() {
		$(".fancybox").fancybox();
	});

	$(document).ready(function() {

		var element = $('.square');
		$('body').on('mouseenter','.square', function() {
			$(this).addClass('tada');
		});

		$('body').on('mouseleave','.square', function() {
			$(this).removeClass('tada');
		});

	});

	</script>
