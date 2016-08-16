<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
define('TALKDIR', 'talks/');
?>
	<main class="container">
		<div class="row">
			<div class="col l10 m10 s10">
				<div class="row">
					<?php
					// 가장 최근 파일 불러오기
					$files = glob(TALKDIR . '*.php');
					arsort($files);
					$count_page = count($files);
					if (!isset($_REQUEST['date'])) {
						$date = basename($files[$count_page - 1], '.php');
					} else {
						$date = $_REQUEST['date'];
					}
					$recent_date = basename($files[$count_page - 1], '.php');
					if (!isset($date)) {
						include(TALKDIR . "$recent_date.php");
					} else {
						include(TALKDIR . "$date.php");
					}

					?>
				</div>
				<div class="row">
					<?php
					$temp = new DateTime($date);
					$tempDate = $temp->format('Ymd');
					$currentInt = array_search(TALKDIR . $tempDate . '.php', $files);
					$nextURL = "talks.php?date=" . basename($files[($currentInt - 1)], '.php');
					$prevURL = "talks.php?date=" . basename($files[($currentInt + 1)], '.php');

					if ($currentInt == ($count_page - 1)) {
						echo "<p class=\"center-align\"><a href=\"$nextURL\">이후<i class=\"material-icons tiny\">fast_forward</i></a></p>";
					} elseif ($currentInt == 0) {
						echo "<p class=\"center-align\"><a href=\"$prevURL\">이전<i class=\"material-icons tiny\">fast_rewind</i></a></p>";
					} else {
						print "<p class=\"center-align\"><a href=\"$prevURL\"><i class=\"material-icons tiny\">fast_rewind</i>이전</a>";
						print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						print "<a href=\"$nextURL\">이후<i class=\"material-icons tiny\">fast_forward</i></a></p>";
					}
					?>
				</div>
			</div>
			<div class="col l2 m2 s2">
				<div class="row">
					<ul class="center-align" id="talksList">
						<?php
						for ($i = ($count_page - 1); $i >= 0; $i--) {
							$exp = explode("/", $files[$i]);
							$fileName = basename($exp[1], '.php');
							echo "<li><small><a href=\"talks.php?date=" . $fileName . "\">" . date('Y/m/d', strtotime($fileName)) . "</a></small></li>\r\n";
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</main>

<?php include('inc.footer.php'); ?>