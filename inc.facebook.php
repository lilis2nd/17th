<?php
$uri = $_SERVER['REQUEST_URI'];
/*$uri_exp = explode('/',$uri);
$uri_cond = explode('.',$uri_exp[2]);
if ($uri_cond[0] == 'talks') {
	$fbTitle = 'Talks - ';
} elseif ($uri_cond[0] == 'etc') {
	$fbTitle = 'ETC - ';
} elseif ($uri_cond[0] == 'snaps_viewer') {
	$fbTitle = 'Snapshots - ';
}*/
?>
<meta property="og:url" content="http://lilis.net<?php echo $_SERVER['REQUEST_URI']; ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="Skyremix Studio"/>
<meta property="og:site_name" content="Skyremix Studio"/>
<meta property="og:description" content="LILIS's playground"
<meta property="og:image" content="http://lilis.net/17th/img/skyremix_logo.png"/>
<meta property="fb:app_id" content="1207026882680660"/>
<meta property="og:locale" content="ko_KR"/>
