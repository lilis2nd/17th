<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
define('ETCDIR', 'etc/');
?>
	<main class="container">
		<div class="row">
			<div class="col l10 m10 s12">
				<div class="row">
					<?php
					$files = glob(ETCDIR . '*.php');
					arsort($files);
					$count_page = count($files);

					if (!isset($_REQUEST['page'])) {
						$page = basename($files[$count_page - 1], '.php');
					} else {
						$page = $_REQUEST['page'];
					}

					talkInc(ETCDIR . "$page.php");

					?>
				</div>
				<div class="row">
					<?php
					$currentInt = array_search(ETCDIR . $page . '.php', $files);
					$nextURL = "etc.php?page=" . basename($files[$currentInt - 1], '.php');
					$prevURL = "etc.php?page=" . basename($files[$currentInt + 1], '.php');
					echo "<ul class=\"pagination center-align\">\r\n";
					if ($currentInt == ($count_page - 1)) {
						echo "<li class=\"waves-effect\"><a href=\"$nextURL\"><i class=\"material-icons\">chevron_right</i></a></li>";
					} elseif ($currentInt == 0) {
						echo "<li class=\"waves-effect\"><a href=\"$prevURL\"><i class=\"material-icons\">chevron_left</i></a></li>";
					} else {
						print "<li class=\"waves-effect\"><a href=\"$prevURL\"><i class=\"material-icons\">chevron_left</i></a></li>";
						print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						print "<li class=\"waves-effect\"><a href=\"$nextURL\"><i class=\"material-icons\">chevron_right</i></a></li>";
					}
					echo "</ul>\r\n";
					?>
				</div>
				<div class="row">
					<div class="s12 center-align">
						<a class="btn-floating btn grey modal-trigger" href="#talkAdmin">
							<i class="material-icons">lock</i> </a>
					</div>
				</div>
			</div>

			<div class="col l2 m2 s12">
				<div class="row">
					<p>
						<small>Total: <?php echo $count_page; ?></small>
					</p>
					<ul id="etcList">
						<?php
						for ($i = ($count_page - 1); $i >= 0; $i--) {
							$exp = explode("/", $files[$i]);
							$fileName = basename($exp[1], '.php');
							echo "<li><small><a href=\"etc.php?page=$fileName\">$fileName</a></small></li>";
						}
						?>
					</ul>
				</div>
			</div>
		</div>
		<div id="talkAdmin" class="modal">
			<div class="modal-content">
				<form method="POST" action="talks_create.php">
					<div class="row">
						<div class="col s12 input-field">
							<input name="ID" id="ID" type="text" class="valid" autofocus /> <label for="ID">ID</label>
						</div>
					</div>
					<div class="row">
						<div class="col s12 input-field">
							<input name="PW" id="PW" type="password" class="valid" /> <label for="PW">Password</label>
						</div>
					</div>
					<div class="row">
						<div class="center-align">
							<button type="submit" name="login" id="login" class="btn waves-effect waves-light">Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>

<?php include('inc.footer.php'); ?>