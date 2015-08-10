<script type="text/javascript">
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing');
	});
});

</script>
<script type="text/javascript" src="global/js/collapse.js"></script>
<script>
	$(function() {
		Grid.init();
	});
</script>