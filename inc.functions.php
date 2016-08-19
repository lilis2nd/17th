<?php
/**
 * Created by PhpStorm.
 * User: lilis
 * Date: 2016. 8. 9.
 * Time: 오후 10:14
 */

function copyright()
{
    $currentYear = date("Y");
    print "2001&ndash;$currentYear";
}

function age()
{
    $currentYear = date("Y");
    print $currentYear - 1982 + 1;
}

function talkInc($path)
{
    echo <<<HTML
<div class="col s12 m12 l12">
    <div class="card white hoverable">
        <div class="card-content">
HTML;
    include("$path");
	echo "<hr />";
	include("inc.disqus.comment.php");

    echo <<<HTML
        </div>
    </div>
</div>
HTML;
}

function login($target)
{

    if (isset($_POST['login']) && !empty($_POST['ID']) && !empty($_POST['PW'])) {
        if ($_POST['ID'] != 'lilis' || $_POST['PW'] != 'genius') {
            header("location:./");
        } elseif ($_POST['ID'] == 'lilis' || $_POST['PW'] == 'genius') {
            header("location:$target.php");
        }
    }
}


