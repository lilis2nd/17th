<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
include('inc.videos.php');
?>
	<main class="container">
		<div class="row">
			<?php videoGrid($videoList); ?>
		</div>
		<div class="row">
			<div class="s12 center-align">
				<a class="btn-floating btn grey modal-trigger" href="#Admin">
					<i class="material-icons">lock</i> </a>
			</div>
		</div>
		<?php loginForm('video_upload'); ?>
	</main>

<?php include('inc.footer.php'); ?>