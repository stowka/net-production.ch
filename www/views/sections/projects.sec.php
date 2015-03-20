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
							<a href="#<?php echo $type->getKeyword();?>" class="clickme" id="<?php echo $type->getKeyword(); ?>"><img src="global/img/categories/<?php echo $type->getImage(); ?>" alt="<?php echo $type->getLabel(); ?>"/></a>
							<h3><a href="#"><?php echo $type->getLabel()?></a></h3>
						</article>
					</div>
				<?php endforeach; ?>
				
				<?php foreach ($projects as $projectType): ?>
				<?php echo array_search($projectType, $projects);?>
					<div class="type-details <?php echo array_search($projectType, $projects);?>">
							<?php foreach ($projectType as $project): ?>
							<div class="project-details" style="background-image:url(global/img/projects/<?php echo $project->getPicture();?>);">
								<h3><?php echo $project->getTitle(); ?></h3>
								<p></p>
							</div>

			            <?php endforeach; ?>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</article>
	</div>

<script type='text/javascript'>
	  jQuery(document).ready(function(){

	   //jQuery('.type-details').hide();

	   $(document).find(".clickme").on('click',function(){

	   	var test = $(this).attr("id");

	    console.log( $(this).attr("id"));

	   	 $(".type-details").removeClass("active");
	   	$("."+test).addClass("active");

	   	 //$("#cms").show();
	     jQuery('.type-details.active').slideToggle(400);
	    
	     return false;
	   });
	});
	
</script>
