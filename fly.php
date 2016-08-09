<?php
$img_url = "http://www.stockvault.net/blog/wp-content/uploads/2013/11/Portrait-8.jpg";
$exif = exif_read_data($img_url, 0, true);
//echo "http://cfile27.uf.tistory.com/image/12167F1E4C08CD56C5AF2A:<br />\n";
/*foreach ($exif as $key => $section) {
	foreach ($section as $name => $val) {
		echo "<p>$key.$name: $val</p>\n";
	}
}*/

echo "<img src=\"$img_url\" class=\"photo\" />\r\n";

echo "<p>Camera: ".$exif['IFD0']['Model']."</p>\r\n";
echo "<p>ISO: ".$exif['EXIF']['ISOSpeedRatings']."</p>\r\n";
echo "<p>Shutter Speed: ".$exif['EXIF']['ExposureTime']."</p>\r\n";
echo "<p>F Value: ".$exif['EXIF']['FNumber']."</p>\r\n";
?>
<!--<img src="http://cfile27.uf.tistory.com/image/12167F1E4C08CD56C5AF2A" class="photo">-->
