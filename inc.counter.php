<?php
if (file_exists('count.txt')) {
	$file = fopen('count.txt', r);
	$dat = fread($file, filesize('count.txt'));
	echo number_format($dat+1);
	fclose($file);
	$file = fopen('count.txt', w);
	fwrite($file, $dat+1);
} else {
	$file = fopen('count.txt', w);
	fwrite($file, 1);
	echo '1';
	fclose($file);
}
?>
