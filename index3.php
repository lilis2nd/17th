<!DOCTYPE html>
<html lang="ko">

<head>
	<title>Skyremix Studio - 17th</title>
	<meta charset="utf-8">
	<meta name="author" content="LILIS">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./css/17th.css">
</head>

<body class="temp">
<?php include_once('google.php') ?>
<div class="container-fluid">
	<!-- Top Logo -->
	<!-- <h1 class="">Skyremix Studio</h1> -->
	<img src="./img/logo_skyremix_studio.svg" class="img-responsive" alt="Logo image">
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 text-center v-center">
			<h1>Under construction</h1>
			<p>현재 17번째 리뉴얼 중입니다.</p>
			<p>연락은 제 <a href="mailto:lilis@skyremix.com" class="link-nochange"><span
						class="glyphicon glyphicon-envelope"></span>이메일</a>로 부탁드립니다.</p>
		</div>
	</div>
	<div class="row">
		<!-- Progress bar -->
		<div class="col-lg-12">
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
				     aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
					10%
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="container v-center">
		<?php
		$year = date("Y");
		function copyright($start)
		{
			global $year;
			if ($year > $start) {
				echo $start . " &ndash; " . $year;
			} else {
				echo $start;
			}
		}

		?>
		<p class="text-center">
			<small>Copyright &copy; <?php copyright(2001); ?>
				<a class="link-nochange" href="http://skyremix.com">Skyremix Studio</a></small>
		</p>
	</div>
</footer>
</body>
</html>
