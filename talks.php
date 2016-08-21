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
			<div class="col l10 m10 s12">
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

					$temp = new DateTime($date);
					$tempDate = $temp->format('Ymd');
					$currentInt = array_search(TALKDIR . $tempDate . '.php', $files);
					$nextURL = "talks.php?date=" . basename($files[($currentInt - 1)], '.php');
					$prevURL = "talks.php?date=" . basename($files[($currentInt + 1)], '.php');

					$page_first_exp = explode("/", $files[$count_page - 1]);
					$page_last_exp = explode("/", $files[0]);
					$page_first = basename($page_first_exp[1], ".php");
					$page_last = basename($page_last_exp[1], ".php");
					$page_current_exp = explode("=", $_SERVER['QUERY_STRING']);
					$page_current = $page_current_exp[1];

					$recent_date = basename($files[$count_page - 1], '.php');
					if (empty($date)) {
						null;
					} else {
						talkInc(TALKDIR . "$date.php");
					}

//					제목 가져오기
					/*$tFile = fopen(TALKDIR . "$date.php", "r");
					$tFileMod = str_replace('<span class="card-title">','',fgets($tFile));
					$title = str_replace('</span>','',$tFileMod);
					fclose($tFile);*/
//					var_dump($title);
					?>
				</div>
				<div class="row">
					<?php
					echo "<ul class=\"pagination center-align\">\r\n";
					if (empty($date)) {
						null;
					} elseif ($count_page == 1) {
						null;
					} else {

						if ($currentInt == ($count_page - 1)) {
							echo "<li class=\"waves-effect\"><a href=\"$nextURL\"><i class=\"material-icons\">chevron_right</i></a></li>";
						} elseif ($currentInt == 0) {
							echo "<li class=\"waves-effect\"><a href=\"$prevURL\"><i class=\"material-icons\">chevron_left</i></a></li>";
						} else {
							print "<li class=\"waves-effect\"><a href=\"$prevURL\"><i class=\"material-icons\">chevron_left</i></a></li>";
							print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							print "<li class=\"waves-effect\"><a href=\"$nextURL\"><i class=\"material-icons\">chevron_right</i></a></li>";
						}
					}
					echo "</ul>\r\n";
					?>
				</div>
				<div class="row">
					<div class="s12 center-align">
						<a class="btn-floating btn grey modal-trigger" href="#Admin">
							<i class="material-icons">lock</i> </a>
					</div>
				</div>
			</div>
			<div class="col l2 m2 s12">
				<div class="row">
					<p class="grey-text">
						<small>Total: <?php echo $count_page; ?></small>
					</p>
					<ul id="talksList">
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
		<?php loginForm('talks_create'); ?>
	</main>
	<script>
		$(document).ready(function () {
			$('.modal-trigger').leanModal();
		});

	</script>
<?php include('inc.footer.php'); ?>