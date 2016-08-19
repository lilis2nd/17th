<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
define('ETCDIR','etc/');
?>
    <main class="container">
        <div class="row">
            <div class="col l10 m10 s12">
                <div class="row">
                    <?php
                    $files = glob(ETCDIR . '*.php');
                    arsort($files);
                    $count_page = count($files);

                    if (!isset($_REQUEST['page'])) {
                        $page = basename($files[$count_page - 1], '.php');
                    } else {
                        $page = $_REQUEST['page'];
                    }

                    talkInc(ETCDIR."$page.php");

                    ?>
                </div>
            </div>
            <div class="col l2 m2 s12">
                <div class="row">
                    <p>
                        <small>Total: <?php echo $count_page; ?></small>
                    </p>
                    <ul id="etcList">
                        <?php
                        for ($i = ($count_page -1); $i >= 0; $i--) {
                            $exp = explode("/",$files[$i]);
                            $fileName = basename($exp[1], '.php');
                            echo "<li><small><a href=\"etc.php?page=$fileName\">$fileName</a></small></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>

<?php include('inc.footer.php'); ?>