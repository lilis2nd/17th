<!-- Footer -->
<footer>
<?php
function copyright($n) {
	// $start = 2001;
	$current = date("Y");
	echo "$n &ndash; $current";
}
?>
<div class="container v-center">
	<p class="text-center"><small>Copyright&copy; <?php copyright(2001); ?> <a class="link-nochange" href="http://skyremix.com">Skyremix Studio</a> All rights reserved</small></p>
</div>
</footer>

</body>
</html>