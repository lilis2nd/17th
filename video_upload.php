<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
include('inc.videos.php');
login('video_upload');
?>
	<main class="container">
		<div class="row">
			<form class="s12" method="POST" action="video_upload_done.php">
				<div class="row">
					<div class="input-field col s12">
						<input type="text" id="url" name="url" autofocus/>
						<label for="url">Youtube 공유 URL</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="text" id="title" name="title" />
						<label for="title">영상 제목</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 center-align">
						<button type="submit" class="btn waves-effect waves-light" name="action">Submit<i class="material-icons right">send</i></button>
					</div>
				</div>
			</form>
		</div>
	</main>

<?php include('inc.footer.php'); ?>