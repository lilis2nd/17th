<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
define('TALKDIR', 'talks/');

if ($_POST['Dir'] == 'talks') {
    define('DIR', 'talks/');
} elseif ($_POST['Dir'] == 'etc') {
    define('DIR', 'etc/');
}

$talk_title_pre = $_POST['title'];
$talk_title = "<span class=\"card-title\">$talk_title_pre</span>\r\n";
$talk_date_pre = $_POST['date'];
$talk_date = "<p class=\"grey-text\">$talk_date_pre</p>\r\n";
$talk_filename_pre = new DateTime($talk_date_pre);
$talk_filename = $talk_filename_pre->format('Ymd');
$talk_text = $_POST['input'];
$talk_file = DIR . $talk_filename . ".php";
?>
    <main class="container">
        <div class="col s12 center-align">
            <?php
            if (isset($_POST)) {
                if ($_POST['Dir'] == 'talks') {
                    $talk_write = fopen($talk_file, "w+") or die('파일 생성이 실패했습니다.');
                    chmod($talk_file, 0777);
                    fwrite($talk_write, $talk_title);
                    fwrite($talk_write, $talk_date);
                    fwrite($talk_write, $talk_text);
                    fclose($talk_write);
                } elseif ($_POST['Dir'] == 'etc') {
                    $etc_title = str_replace(' ','_',$talk_title_pre);
                    $etc_file = DIR . $talk_filename . '_' . $etc_title . '.php';

                    $etc_write = fopen($etc_file, "w+") or die('파일 생성이 실패했습니다.');
                    chmod($etc_file, 0777);
                    fwrite($etc_write, $talk_title);
                    fwrite($etc_write, $talk_date);
                    fwrite($etc_write, $talk_text);
                    fclose($etc_write);
                }
            } else {
                die;
            }
            ?>
            <p>글이 게시되었습니다.</p>
        </div>
    </main>

<?php include('inc.footer.php'); ?>