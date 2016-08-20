<?php
/**
 * Created by PhpStorm.
 * User: lilis
 * Date: 2016. 8. 9.
 * Time: 오후 10:14
 */

function copyright()
{
	$currentYear = date("Y");
	print "2001&ndash;$currentYear";
}

function age()
{
	$currentYear = date("Y");
	print $currentYear - 1982 + 1;
}

function talkInc($path)
{
	echo <<<HTML
<div class="col s12 m12 l12">
    <div class="card white hoverable">
        <div class="card-content">
HTML;
	include("$path");
	echo "<hr />";
	include("inc.disqus.comment.php");

	echo <<<HTML
        </div>
    </div>
</div>
HTML;
}

function loginForm($target)
{
	print <<< HTML
<div id="Admin" class="modal">
	<div class="modal-content">
		<form method="POST" action="$target.php">
			<div class="row">
				<div class="col s12 input-field">
					<input name="ID" id="ID" type="text" class="valid" autofocus/> <label for="ID">ID</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 input-field">
					<input name="PW" id="PW" type="password" class="valid"/> <label for="PW">Password</label>
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
HTML;

}

function login($target)
{

	if (isset($_POST['login']) && !empty($_POST['ID']) && !empty($_POST['PW'])) {
		if ($_POST['ID'] != 'lilis' || $_POST['PW'] != 'genius') {
			header("location:./");
		} elseif ($_POST['ID'] == 'lilis' && $_POST['PW'] == 'genius') {
			header("location:$target.php");
		}
	}
}

function videoGrid($array)
{
	$array = array_reverse($array);
	foreach ($array as $code => $title) {
		print <<<HTML
<div class="col s12 m6 l4">
	<div class="card hoverable">
		<div class="video-container">
			<iframe src="http://www.youtube.com/embed/$code" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="valign-wrapper">
			<p class="valign" style="margin-left: 0.5em;">$title</p>
		</div>
	</div>
</div>
HTML;
	}
}