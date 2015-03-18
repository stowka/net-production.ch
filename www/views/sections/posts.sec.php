<?php
	/**
	 * Default head section
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>
<!-- Posts -->
<section class="wrapper style1" id="teams">
	<div class="container">

    <?php $rowTeam = 1; ?>
    <?php foreach($team as $member): ?>
        
        <?php if($rowTeam % 2 != 0): ?>
            <div class="row">
        <?php endif; ?>   
        
        <section class="6u 12u(narrower)">
            <div class="box post">
                <!--TODO : Change image link -->
                <a href="#" class="image left"><img
                   src="global/img/pictures/pic01.jpg" alt="" /></a>
				<div class="inner">
                <h3><?= $member->getName()?></h3>
                    <p><?=$member->getBiography()?></p>
				</div>
			</div>
		</section>
        
        <?php if($rowTeam % 2 === 0): ?>
            </div>
        <?php endif; ?>   

        <?php $rowTeam += 1 ?>
    <?php endforeach; ?>

	</div>
</section>

