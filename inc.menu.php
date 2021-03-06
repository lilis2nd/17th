<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
// Talks 메뉴 page 설정
$menu_talk_files = glob('talks/*.php');
arsort($menu_talk_files);
$menu_talk_count = count($menu_talk_files);
$menu_talk_recent_full = $menu_talk_files[$menu_talk_count - 1];
$menu_talk_recent_exp = explode('/', $menu_talk_recent_full);
$menu_talk_recent_name = basename($menu_talk_recent_exp[1], '.php');

$menu_etc_files = glob('etc/*.php');
arsort($menu_etc_files);
$menu_etc_count = count($menu_etc_files);
$menu_etc_recent_full = $menu_etc_files[$menu_etc_count - 1];
$menu_etc_recent_exp = explode('/', $menu_etc_recent_full);
$menu_etc_recent_name = basename($menu_etc_recent_exp[1], '.php');
?>
<header>
	<div class="">
		<ul id="dropPhotos" class="dropdown-content">
			<li><a href="snapshots.php">Snapshots</a></li>
			<li><a href="projects.php">Projects</a></li>
		</ul>
		<nav class="light-blue darken-4">
			<div class="nav-wrapper">
				<a href="./" class="brand-logo">Skyremix Studio</a>
				<a href="./" data-activates="mobile"
				   class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="./">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="talks.php?date=<?php echo $menu_talk_recent_name; ?>">Talks</a></li>
					<li><a class="dropdown-button" href="#" data-activates="dropPhotos">Photos<i
								class="material-icons right">arrow_drop_down</i></a></li>
					<li><a href="video.php">Videos</a></li>
					<li><a href="etc.php?page=<?php echo $menu_etc_recent_name; ?>">Etc.</a></li>
					<li><a href="http://lilis.tistory.com/">Blog <span class="new badge"
								data-badge-caption="old"></span></a></li>
				</ul>
				<ul class="side-nav" id="mobile">
					<li><a href="./">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="talks.php?date=<?php echo $menu_talk_recent_name; ?>">Talks</a></li>
					<li class="divider"></li>
					<li><a href="snapshots.php">Snapshots</a></li>
					<li><a href="projects.php">Projects</a></li>
					<li><a href="video.php">Videos</a></li>
					<li class="divider"></li>
					<li><a href="etc.php?page=<?php echo $menu_etc_recent_name; ?>">Etc.</a></li>
					<li><a href="http://lilis.tistory.com/">Blog <span class="new badge"
								data-badge-caption="old"></span></a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>

<script>
	//    현재 페이지의 nav에 active class 걸기
	$(function () {
		$('nav a[href^="' + location.pathname.split("/")[2] + '"]').parent().addClass('active');
	});
</script>