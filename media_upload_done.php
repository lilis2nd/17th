<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');

$dir = $_POST['Dir'];
$date_s_pre = $_POST['date_s'];
$date_e_pre = $_POST['date_e'];
$date_s = date("Y/m/d", strtotime($date_s_pre));
$date_e = date("Y/m/d", strtotime($date_e_pre));
$title = $_POST['title'];
$img = $_FILES;

if ($date_s == $date_e) {
    $date = date("Ymd", strtotime($date_s));
} elseif ($date_s < $date_e) {
    $date = date("Ymd", strtotime($date_s)) . "-" . date("Ymd", strtotime($date_e));
}

$fullDir = $dir . '/' . $date;
if (!file_exists($fullDir)) {
    mkdir($fullDir, 0777, true);
} else {
    echo "Folder already exists.";
}

$file = fopen($fullDir . '/description.php', w);
fwrite($file, '<?php' . "\r\n");
fwrite($file, '$title = "' . $title . '";');
fwrite($file, '$date_s = "' . $date_s . '";');
fwrite($file, '$date_e = "' . $date_e . '";');
fwrite($file, '?>' . "\r\n");
fclose($file);

//$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
//$max_file_size = 1024*100; //100 kb
$path = "$fullDir/"; // Upload directory
$count = 0;

switch ($dir) {
    case 'snapshots':
        if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
            // Loop $_FILES to execute all files
            foreach ($_FILES['upload']['name'] as $f => $name) {
                if ($_FILES['upload']['error'][$f] == 4) {
                    continue; // Skip file if any error found
                }
                if ($_FILES['upload']['error'][$f] == 0) {
                    if (move_uploaded_file($_FILES["upload"]["tmp_name"][$f], $path . $name))
                        $count++; // Number of successfully uploaded file
                }
            }
        }
        break;
    case 'videos':
        break;
}


?>
    <main class="container">
        <div class="row">
            <div class="s12 center-align">
                <p>사진 업로드가 완료되었습니다.</p>
                <pre class="left-align">
                  <?php var_dump($_POST);
                  var_dump($_FILES); ?>
              </pre>
            </div>
        </div>
    </main>

<?php include('inc.footer.php'); ?>