<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */

ini_set('max_file_uploads', 50);
ini_set('max_input_time', 120);
ini_set('memory_limit', '256M');
ini_set('post_max_size', '50M');
ini_set('upload_max_filesize', '50M');

?>
	<!DOCTYPE html>
	<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="LILIS">
		<title>Skyremix Studio</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/17th.css"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
		<script src="../tinymce/tinymce.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/prism.css">
		<script src="js/prism.js"></script>
		<script>
			$(document).ready(function () {
				$(".dropdown-button").dropdown();
				$(".button-collapse").sideNav();
				$('.modal-trigger').leanModal();
			});
		</script>
	</head>

	<body>
<!--	<script>
		window.fbAsyncInit = function () {
			FB.init({
				appId: '1207026882680660',
				xfbml: true,
				version: 'v2.7'
			});
		};

		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {
				return;
			}
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>-->
<?php
include('inc.functions.php');
include('inc.menu.php');
?>