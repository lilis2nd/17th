<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
define('SNAPDIR', 'snapshots/');
$req = $_REQUEST['folder'];
$dirList = glob(SNAPDIR . $req . '/*.{png,jpg,jpeg}', GLOB_BRACE);
$count_dir = count($dirList);
include(SNAPDIR . $req . '/description.php');
if ($date_s == $date_e) {
    $date = $date_s;
} elseif ($date_s < $date_e) {
    $date = "$date_s&mdash;$date_e";
}
include('inc.bread.snapshots.php');
?>
    <main class="container">
        <div class="row">
            <div class="s12 m12 l12">
                <?php echo "<h4>$title <small><span class=\"grey-text\">$date</span></small></h4>"; ?>
            </div>
        </div>

        <?php
        echo "<div class=\"row center-align\">";
        for ($i = 0; $i < $count_dir; $i++) {
            $exif = exif_read_data($dirList[$i], NULL, true, true);
            echo "<div class=\"col s12 m6 l4\">";
            echo "<div class=\"card hoverable\">";
            echo "<div class=\"card-image\">";
            echo "<img class=\"materialboxed\" src=\"$dirList[$i]\"/>";
            echo "</div>";
            if (!$exif) {

            } else {
                $camera = $exif['IFD0']['Model'];
                $aperture_1 = $exif['EXIF']['FNumber'];
                $aperture_exp = explode('/', $aperture_1);
                $aperture = $aperture_exp[0] / $aperture_exp[1];
                $shutterSpeed = $exif['EXIF']['ExposureTime'];
                $iso = $exif['EXIF']['ISOSpeedRatings'];
                $focalLength_1 = $exif['EXIF']['FocalLength'];
                $focalLength_exp = explode('/', $focalLength_1);
                $focalLength = $focalLength_exp[0] / $focalLength_exp[1];
                echo "<div class=\"card-content\">";
                echo "<ul class=\"left-align\">";
                echo "<li>Camera: $camera</li>";
                echo "<li>Focal Length: $focalLength mm</li>";
                echo "<li>Aperture: F$aperture</li>";
                echo "<li>Shutter Speed: $shutterSpeed</li>";
                echo "<li>ISO: $iso</li>";
                echo "</ul>";
                echo "</div>";

            }
            echo "</div>";
            echo "</div>";

        }
        echo "</div>";
        ?>
        <div class="row">
            <div class="s12">
                <?php include("inc.disqus.comment.php"); ?>
            </div>
        </div>
    </main>

<?php include('inc.footer.php'); ?>