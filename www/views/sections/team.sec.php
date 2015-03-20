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
         <div class="row">  
        
            <!--<section class="6u 12u(narrower)">-->
                <div class="box post">
                    <?php if($rowTeam % 2 != 0): ?>
                        <?php if ("" != $member->getImage()): ?>
                            <a href="#" class="image left">
                                <img src="global/img/portraits/<?php echo $member->getImage();?>" alt="<?php echo $member->getName();?>"/>
                            </a>
                        <?php 
                        else : ?>
                            <a href="#" class="image left">
                                <img style="width:100%; height:100%;" src="global/img/portraits/inconnu.png" alt="<?php echo $member->getName();?>"/>
                            </a>
                        <?php endif; ?>

        				<div class="inner">
                        <h3><?= utf8_encode($member->getName())?></h3>
                        <h4><?= utf8_encode($member->getPosition())?></h4>
                        <p><?=utf8_encode($member->getBiography())?></p>
        				</div>
                    <?php 
                     else : ?>

                            <?php if ("" != $member->getImage()) :?>
                                <a href="#" class="image right">
                                    <img src="global/img/portraits/<?php echo $member->getImage();?>" alt="<?php echo $member->getName();?>"/>
                                </a>
                             
                            <?php else : ?>
                                <a href="#" class="image right">
                                    <img src="global/img/portraits/inconnu.png" alt="<?php echo $member->getName();?>"/>
                                </a>
                            <?php endif; ?>

                            <div class="inner">
                            <h3 style="text-align:right;"><?= utf8_encode($member->getName())?></h3>
                            <h4 style="text-align:right;"><?= utf8_encode($member->getPosition())?></h4>
                            <p><?=utf8_encode($member->getBiography())?></p>
                            </div>

                   <?php endif; ?>

    			</div>
    		<!--</section>-->      
    
        </div>
        <?php $rowTeam += 1; ?>
    <?php endforeach; ?>

	</div>

<!--    test : 
<!--<div data-anijs="if: mouseover, do: tada animated"> -->
<!-- <a class="test" href="#"><img id="square" class="tada animated" src="global/img/portraits/inconnu.png"/><span>title</span><a> 
<!--</div>-->
   
</section>

<!--<script type="text/javascript">
var element = $('#square');

// when mouseover execute the animation
element.mouseover(function(){
  
  // the animation starts
  element.toggleClass('tada animated');
  
  // do something when animation ends
  element.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(e){
   
   // trick to execute the animation again
    $(e.target).removeClass('tada animated');
  
  });
  
});

</script>-->