<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
define('SNAPSHOTS', 'snapshots/');
define('TALKS','talks/');
define('ETC','etc/');

// index photograph - random folder & random img
$folders = glob(SNAPSHOTS . '*', GLOB_ONLYDIR);
$foldersCount = count($folders);
$rand_folder = $folders[rand(0, $foldersCount - 1)];
$folderPic = glob($rand_folder . '/*.{png,jpg,jpeg}', GLOB_BRACE);
$folderPicCount = count($folderPic);
$rand_Img = $folderPic[rand(0, $folderPicCount - 1)];
$rand_Img_Folder = explode('/',$rand_Img);
$rand_Img_description = include($rand_Img_Folder[0].'/'.$rand_Img_Folder[1].'/description.php');
$img = "<a href=\"snaps_viewer.php?folder=$rand_Img_Folder[1]\"><img src=\"$rand_Img\" class=\"responsive-img\"/></a>";


// recent talks
$talks = glob(TALKS.'*');
$talks = array_reverse($talks);
$talksCount = count($talks);
if ($talksCount <5) {
	$limit = $talksCount;
} else {
	$limit = 5;
}

// recent etc
$etcs = glob(ETC.'*');
$etcs = array_reverse($etcs);
$etcsCount = count($etcs);
if ($etcsCount <5) {
	$limitEtc = $etcsCount;
} else {
	$limitEtc = 5;
}
?>
	<main class="container">
		<div class="row">
			<div class="col s12 m12 l8 center-align">
				<div class="card hoverable">
					<div class="card-panel">
						<div class="card-content" id="indexPic">
							<?php echo $img; ?>
							<p><strong><?php echo $title; ?></strong></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col s6 m6 l4">
				<div class="card hoverable">
					<div class="card-panel" style="padding:0">
						<div class="card-content">
							<div class="row" style="margin-bottom: 0;">
								<div class="col s12 center-align blue-grey darken-4 white-text">
									Talks...
								</div>
								<div class="col s12 overflow" style="padding: 0; font-size: 90%">
									<ul id="indexTalk">
										<?php
										for ($i = 0; $i < $limit; $i++) {
											$talkExp = explode("/", $talks[$i]);
											$talk = basename($talkExp[1],'.php');
											$talkDateTemp = new DateTime($talk);
											$talkDate = $talkDateTemp->format('Y/m/d');

											$talkFile = fopen($talks[$i], "r");
											$talkMod = str_replace('<span class="card-title">','',fgets($talkFile));
											$talkTitle = str_replace('</span>','',$talkMod);
											fclose($talkFile);
											echo "<li><a href=\"talks.php?date=$talk\"><span class=\"grey-text\">[$talkDate]</span> ".$talkTitle."</a></li>";
										}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col s6 m6 l4">
				<div class="card hoverable">
					<div class="card-panel" style="padding: 0">
						<div class="card-content">
							<div class="row" style="margin-bottom: 0;">
								<div class="col s12 center-align blue-grey darken-4 white-text">
									ETC...
								</div>
								<div class="col s12 overflow" style="padding: 0; font-size: 90%">
									<ul id="indexEtc">
										<?php
										for ($i=0; $i < $limitEtc; $i++) {
											$etcExp = explode("/",$etcs[$i]);
											$etc = basename($etcExp[1],'.php');
											$etcFile = fopen($etcs[$i], "r");
											$etcMod = str_replace('<span class="card-title">','',fgets($etcFile));
											$etcTitle = str_replace('</span>','',$etcMod);
											fclose($etcFile);
											echo "<li><a href=\"etc.php?page=$etc\">".$etcTitle."</a></li>";
										}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<pre>
				<?php

				?>
			</pre>
		</div>
	</main>

<?php include('inc.footer.php'); ?>