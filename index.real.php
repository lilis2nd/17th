<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
define('SNAPSHOTS', 'snapshots/');
define('TALKS','talks/');

// index photograph - random folder & random img
$folders = glob(SNAPSHOTS . '*', GLOB_ONLYDIR);
$foldersCount = count($folders);
$rand_folder = $folders[rand(0, $foldersCount - 1)];
$folderPic = glob($rand_folder . '/*.{png,jpg,jpeg}', GLOB_BRACE);
$folderPicCount = count($folderPic);
$rand_Img = $folderPic[rand(0, $folderPicCount - 1)];

// recent talks
$talks = glob(TALKS.'*');
$talks = array_reverse($talks);
$talksCount = count($talks);
if ($talksCount <5) {
	$limit = $talksCount;
} else {
	$limit = 5;
}
?>
	<main class="container">
		<div class="row">
			<div class="col s12 m12 l8 center-align">
				<div class="card hoverable">
					<div class="card-panel">
						<div class="card-content" id="indexPic">
							<img src="<?php echo $rand_Img; ?>" class="responsive-img"/>
						</div>
					</div>
				</div>
			</div>
			<div class="col s6 m6 l4">
				<div class="card hoverable">
					<div class="card-panel" style="padding:0">
						<div class="card-content">
							<div class="row">
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
							<div class="row">
								<div class="col s12 center-align blue-grey darken-4 white-text">
									ETC...
								</div>
								<div class="col s12 overflow" style="padding: 0; font-size: 90%">
									<ul id="indexEtc">
										<?php
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