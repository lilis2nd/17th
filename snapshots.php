<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
define('DIR', 'snapshots/');
$folders = glob(DIR . '*', GLOB_ONLYDIR);
$foldersCount = count($folders);

?>
	<main class="container">
		<div class="row">
				<?php

				foreach ($folders as $key => $val) {
					$folderName = explode("/", $val);
					include $folders[$key]."/description.php";
					$folderImg = glob(DIR . $folderName[1] . "/*.{png,jpg}", GLOB_BRACE);
					$count_folderImg = count($folderImg);
					$rand_Img = $folderImg[rand(0,$count_folderImg-1)];

					echo "<div class=\"col s12 m6 l4\">";
					echo "<div class=\"card grey lighten-5 hoverable\">";
					echo "<div class=\"card-panel\" style=\"padding: 0;\">";
					echo "<div class=\"card-content\">";
					echo "<div class=\"row valign-wrapper\" style=\"margin-bottom: 0;\">";
					echo "<div class=\"col s3\">";
					echo "<img src=\"$rand_Img\" alt=\"\" class=\"responsive-img\" />";
					echo "</div>";
					echo "<div class=\"col s9\">";
					echo "<p class=\"grey-text\">";
					if ($date_s == $date_e) {
						echo $date_s;
					} elseif ($date_s < $date_e) {
						echo $date_s ."&mdash;".$date_e;
					}
					echo "</p>";
					echo "<span class=\"card-title\"><a href=\"snaps_viewer.php?folder=$folderName[1]\">$title <i class=\"material-icons\">linked_camera</i></a></span>";
					echo "<p><span class=\"new badge red\" data-badge-caption=\"photos\">$count_folderImg</span></p>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
					echo "</div>";

					/*echo "<li><a href=\"snaps_viewer?folder=$folders[$key]\">$folderName[1]</a></li>";
					echo "<li>$title</li>";*/
				}

				?>
		</div>
		<div class="row">
			<div class="s12 center-align">
				<a class="btn-floating btn grey" href="media_upload.php">
					<i class="material-icons">lock</i> </a>
			</div>
		</div>
	</main>

<?php include('inc.footer.php'); ?>