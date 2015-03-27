<?php
	/**
	 * Default head section
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>

	<!-- Nav -->
	<span id="home"> </span>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
	 		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	 			<span class="sr-only">Toggle navigation</span>
	 			<span class="icon-bar"></span>
	 			<span class="icon-bar"></span>
	 			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#home">Net-Production</a>
		</div>
		<!-- /.navbar-collapse -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">y
			<ul class="nav navbar-nav">
				<li class="menu-item">
					<a class="menu menu-icon" href="#<?= $h->getKeyword() ?>">
						<img src="global/img/icons/<?= $h->getKeyword() ?>.png" width="20px">&nbsp;&nbsp;<?= $h->getValue() ?>
					</a>
				</li>
				<li class="menu-item">
					<a class="menu menu-icon" href="#<?= $com->getKeyword() ?>">
						<img src="global/img/icons/<?= $com->getKeyword() ?>.png" width="20px">&nbsp;&nbsp;<?= $com->getValue() ?>
					</a>
				</li>
				<li class="menu-item">
					<a class="menu menu-icon" href="#<?= $pro->getKeyword() ?>">
						<img src="global/img/icons/<?= $pro->getKeyword() ?>.png" width="20px">&nbsp;&nbsp;<?= $pro->getValue() ?>
					</a>
				</li>
				<li class="menu-item">
					<a class="menu menu-icon" href="#<?= $t->getKeyword() ?>">
						<img src="global/img/icons/<?= $t->getKeyword() ?>.png" width="20px">&nbsp;&nbsp;<?= $t->getValue() ?>
					</a>
				</li>
				<li class="menu-item">
					<a class="menu menu-icon" href="#<?= $co->getKeyword() ?>">
						<img src="global/img/icons/<?= $co->getKeyword() ?>.png" width="20px">&nbsp;&nbsp;<?= $co->getValue() ?>
					</a>
				</li>
				<li class="navbar-right"> 
					<a class="menu menu-right" href="?lang=en_UK">
						<?php if($lang == "en_UK"): ?>
							<b class="selected"> en </b>
						<?php else : ?>
							en
						<?php endif; ?>
					</a>
				</li>
				<li class="navbar-right"> 
					<a class="menu menu-right" href="?lang=fr_CH" >
						<?php if($lang == "fr_CH"): ?>
							<b class="selected"> fr </b>
						<?php else : ?>
							fr
						<?php endif; ?>
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- header + logo -->

	<div class="wrapper style1 first">
		<article class="container" id="top">
			<div class="row">
				<div class="4u">
					<span class="image fit"><img class="moblogo" src="global/img/logos/logo.png" alt="" /></span>
				</div>
				<div class="">
					<header>
						<img class="moblogo" src="global/img/logos/Logo-Black-Full-without-icon.png">
					</header>
					<?php foreach ($homes as $home): ?>
						<p id="mobdescr" style="font-size:1.40em;"><?php echo $home->getText(); ?></p>
					<?php endforeach; ?>	
				</div>
			</div>
		</article>
	</div>

<script type="text/javascript">
	$(document).ready(function(){
		var sections = [];
		var id = false;
		var scrolled_id = false;
		var $navbar = $('.navbar-nav');
		$('a.menu-icon', $navbar).each(function(){
			sections.push($($(this).attr('href')));
		});
		$(window).scroll(function(e){
			var scrollTop = $(this).scrollTop() + ($(window).height() / 2);
			for(var i in sections){
				var section = sections[i];
				if(scrollTop > section.offset().top){
					scrolled_id = section.attr('id');
				}
			}
			if(scrolled_id !== id) {
				id = scrolled_id;
				$('a', $navbar).removeClass('active');
				$('a[href="#' + scrolled_id + '"]', $navbar).addClass('active');
			}
		});
	});
</script>

<script type="text/javascript">
	$('.nav a').on('click', function(){
	    $(".navbar-toggle").click(); //bootstrap 3.x by Richard
	});
</script>