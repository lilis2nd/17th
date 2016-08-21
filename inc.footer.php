<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */

include_once("inc.google.php");
?>
<script id="dsq-count-scr" src="//skyremix.disqus.com/count.js" async></script>
<footer class="page-footer grey darken-3">
	<div class="container">
		<div class="row">
			<div class="col l6 m6 s12">
				<h5 class="white-text">SNS</h5>
				<div class="row">
					<div class="col s2 m2 l1">
						<a href="http://www.facebook.com/lilis.net" target="_blank"><img src="img/icon_facebook.png"/></a>
					</div>
					<div class="col s2 m2 l1">
						<a href="http://twitter.com/LILIS_net" target="_blank"><img src="img/icon_twitter.png"/></a>
					</div>
					<div class="col s2 m2 l1">
						<a href="https://www.instagram.com/lilis/" target="_blank"><img src="img/icon_instagram.png"/></a>
					</div>
				</div>
			</div>
			<div class="col l6 m6 s12">
				<p class="white-text">
					<span style="font-family: 'D2 coding', monospace;">Total: <?php include('inc.counter.php'); ?></span>
				</p>
			</div>
		</div>
	</div>
	<div class="footer-copyright grey darken-1">
		<div class="container">
			<div class="col l12 m4 s3 center-align">
				Copyright &copy; <?php copyright(); ?>, All rights reserved. <a class="grey-text text-lighten-4" href="http://lilis.net">Skyremix Studio</a>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
