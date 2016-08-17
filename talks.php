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
//						include(TALKDIR . "$recent_date.php");
						talkInc(TALKDIR . "$recent_date.php");
					} else {
//						include(TALKDIR . "$date.php");
						talkInc(TALKDIR . "$date.php");
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
						echo "<p class=\"center-align\"><a href=\"$prevURL\"><i class=\"material-icons tiny\">fast_rewind</i>이전</a></p>";
					} else {
						print "<p class=\"center-align\"><a href=\"$prevURL\"><i class=\"material-icons tiny\">fast_rewind</i>이전</a>";
						print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						print "<a href=\"$nextURL\">이후<i class=\"material-icons tiny\">fast_forward</i></a></p>";
					}
					?>
				</div>
				<div class="row">
					<div class="center-align">
						<?php
						$page_first_exp = explode("/", $files[$count_page-1]);
						$page_last_exp = explode("/", $files[0]);
						$page_first = basename($page_first_exp[1],".php");
						$page_last = basename($page_last_exp[1],".php");
						$page_current_exp = explode("=",$_SERVER['QUERY_STRING']);
						$page_current = $page_current_exp[1];

						echo "<ul class=\"pagination\">\r\n";
						if ($currentInt == ($count_page -1)) {
							echo "<li class=\"waves-effect\"><a href=\"$nextURL\"><i class=\"material-icons\">chevron_right</i></a></li>";
						} elseif ($currentInt == 0) {
							echo "<li class=\"waves-effect\"><a href=\"$prevURL\"><i class=\"material-icons\">chevron_left</i></a></li>";
						}
						echo "</ul>\r\n";
						/*echo "<ul class=\"pagination\">\r\n";

						echo "<a href=\"talks.php?page=$page_first\">1</a>";
						echo "&nbsp;";
						echo "<a href=\"talks.php?page=$page_current\">$currentInt</a>";
						echo "&nbsp;";
						echo "<a href=\"talks.php?page=$page_last\">$count_page</a>";
						echo "</ul>\r\n";*/


						$test = array_search(TALKDIR . "$date.php", $files);
//						var_dump($test);

						?>
					</div>
					<?php

					//					echo $count_page -1;
					//					asort($files);
					echo "<pre>" . var_dump($files) . "</pre>";
					/*foreach ($files as $key=>$value) {
						$page_exp = explode('/',$value);
						$page_name = basename($page_exp[1],'.php');
						$key = $key - (count($files));
						echo "<a href=\"talks.php?date=".$page_name."\">".abs($key)."</a>&nbsp;";

					}*/
					?>
				</div>
			</div>
			<div class="col l2 m2 s2">
				<div class="row">
					<p class="center-align">
						<small>Total pages: <?php echo $count_page; ?></small>
					</p>
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