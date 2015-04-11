<?php
	/**
	 * Default head section
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
?>
<!-- Copyright -->
<div class="copyright">
	<ul class="menu">
		<li>&copy; Net Production K&ouml;be & Co. <?= $right->getValue() ?></li>		
	</ul>
</div>

<!-- Piwik -->
<script type="text/javascript">
 var _paq = _paq || [];
 _paq.push(['trackPageView']);
 _paq.push(['enableLinkTracking']);
 (function() {
       var u="//analytics.net-production.ch/";
       _paq.push(['setTrackerUrl', u+'piwik.php']);
       _paq.push(['setSiteId', 1]);
       var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
       g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
 })();
</script>
<noscript><p><img src="//analytics.net-production.ch/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->