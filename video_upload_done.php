<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
include('inc.videos.php');
$url_pre = $_POST['url'];
$title = $_POST['title'];

if (strpos($url_pre, '.be/') == true) {
	$url_exp = explode('/',$url_pre);
	$url = $url_exp[3];
} elseif (strpos($url_pre, '.com/') == true) {
	$url_exp = explode('/',$url_pre);
	$url_exp2 = explode('=',$url_exp[3]);
	$url = $url_exp2[1];
}
array_push($videoList, $videoList[$url] = $title);
unset($videoList[0]);

$file = fopen('inc.videos.php','w');
fwrite ($file,'<?php '."\r\n");
fwrite ($file,'$videoList = ['."\r\n");
foreach ($videoList as $key => $value) {
	$text = "'$key' => '$value',";
	fwrite($file,$text."\r\n");
}
fwrite($file,'];'."\r\n");
fwrite ($file,'?>'."\r\n");
fclose($file);

header("Location:video.php");

include('inc.footer.php');
?>