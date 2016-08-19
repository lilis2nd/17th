<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
define('TALKDIR', 'talks/');
?>
    <main class="container">
        <div class="row">
            <div class="col l10 m10 s12">
                <div class="row">
                    <?php
                    // 가장 최근 파일 불러오기
                    $files = glob(TALKDIR . '*.php');
                    arsort($files);
                    $count_page = count($files);


                    if (!isset($_REQUEST['date'])) {
                        $date = basename($files[$count_page - 1], '.php');
                    } else {
                        $date = $_REQUEST['date'];
                    }

                    $temp = new DateTime($date);
                    $tempDate = $temp->format('Ymd');
                    $currentInt = array_search(TALKDIR . $tempDate . '.php', $files);
                    $nextURL = "talks.php?date=" . basename($files[($currentInt - 1)], '.php');
                    $prevURL = "talks.php?date=" . basename($files[($currentInt + 1)], '.php');

                    $page_first_exp = explode("/", $files[$count_page - 1]);
                    $page_last_exp = explode("/", $files[0]);
                    $page_first = basename($page_first_exp[1], ".php");
                    $page_last = basename($page_last_exp[1], ".php");
                    $page_current_exp = explode("=", $_SERVER['QUERY_STRING']);
                    $page_current = $page_current_exp[1];

                    $recent_date = basename($files[$count_page - 1], '.php');
                    if (!isset($date)) {
                        talkInc(TALKDIR . "$recent_date.php");
                    } else {
                        talkInc(TALKDIR . "$date.php");
                    }

                    ?>
                </div>
                <div class="row">
                    <?php


                    echo "<ul class=\"pagination center-align\">\r\n";
                    if ($currentInt == ($count_page - 1)) {
                        echo "<li class=\"waves-effect\"><a href=\"$nextURL\"><i class=\"material-icons\">chevron_right</i></a></li>";
                    } elseif ($currentInt == 0) {
                        echo "<li class=\"waves-effect\"><a href=\"$prevURL\"><i class=\"material-icons\">chevron_left</i></a></li>";
                    } else {
                        print "<li class=\"waves-effect\"><a href=\"$prevURL\"><i class=\"material-icons\">chevron_left</i></a></li>";
                        print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        print "<li class=\"waves-effect\"><a href=\"$nextURL\"><i class=\"material-icons\">chevron_right</i></a></li>";
                    }
                    echo "</ul>\r\n";
                    ?>
                </div>
            </div>
            <div class="col l2 m2 s12">
                <div class="row">
                    <p class="center-align">
                        <a class="waves-effect waves-light grey lighten-3 black-text btn modal-trigger" href="#talkAdmin">Admin</a>
                    </p>
                    <p class="center-align">
                        <small>Total pages: <?php echo $count_page; ?></small>
                    </p>
                    <ul class="center-align" id="talksList">
                        <?php
                        for ($i = ($count_page - 1); $i >= 0; $i--) {
                            $exp = explode("/", $files[$i]);
                            $fileName = basename($exp[1], '.php');
                            echo "<li><small><a href=\"talks.php?date=" . $fileName . "\">" . date('Y/m/d', strtotime($fileName)) . "</a></small></li>\r\n";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="talkAdmin" class="modal">
            <div class="modal-content">
                <form method="POST" action="talks_create.php">
                    <div class="row">
                        <div class="col s12 input-field">
                            <input name="ID" id="ID" type="text" class="valid" autofocus/>
                            <label for="ID">ID</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 input-field">
                            <input name="PW" id="PW" type="password" class="valid"/>
                            <label for="PW">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="center-align">
                            <button type="submit" name="login" id="login" class="btn waves-effect waves-light">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function () {
            $('.modal-trigger').leanModal();
        });

    </script>
<?php include('inc.footer.php'); ?>