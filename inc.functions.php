<?php
/**
 * Created by PhpStorm.
 * User: lilis
 * Date: 2016. 8. 9.
 * Time: 오후 10:14
 */

function copyright() {
    $currentYear = date("Y");
    print "2001&ndash;$currentYear";
}

function age() {
    $currentYear = date("Y");
    print $currentYear - 1982 +1;
}

function talkInc($path) {
	echo <<<HTML
<div class="col s12 m12 l12">
    <div class="card white hoverable">
        <div class="card-content">
HTML;
	include("$path");

	echo <<<HTML
        </div>
    </div>
</div>
HTML;

}