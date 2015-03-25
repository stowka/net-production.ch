<?php
	/**
	 * Default head section
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>

	<!-- Nav -->
	<span id="home"> </span>
	<nav class="nav" role="navigation">
		<div class="container">
				<ul class="nav navbar-nav">
					<li>
						<a class="menu menu-icon" href="#home">
							<img src="global/img/icons/home.png" width="20px">&nbsp;&nbsp;Home
						</a>
					</li>
					<li>
						<a class="menu menu-icon" href="#commitments">
							<img src="global/img/icons/commitments.png" width="20px">&nbsp;&nbsp;Commitments
						</a>
					</li>
					<li>
						<a class="menu menu-icon" href="#projects">
							<img src="global/img/icons/projects.png" width="20px">&nbsp;&nbsp;Projects
						</a>
					</li>
					<li>
						<a class="menu menu-icon" href="#teams">
							<img src="global/img/icons/team.png" width="20px">&nbsp;&nbsp;Team
						</a>
					</li>
					<li>
						<a class="menu menu-icon" href="#contacts">
							<img src="global/img/icons/contact.png" width="20px">&nbsp;&nbsp;Contact
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
				<div class="8u">
					<header>
						<img class="moblogo" src="global/img/logos/Logo-Black-Full-without-icon.png">
					</header>
						<p id="mobdescr" style="font-size:1.40em;">Notre agence web est là pour répondre à tous vos besoin, de site internet, applications mobiles à carte de visite et graphisme</p>
						
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
		$('a', $navbar).each(function(){
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