<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */

include_once("inc.google.php");
?>

<footer class="page-footer grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12">
                <h5 class="white-text">SNS</h5>
            </div>
        </div>
        <div class="row">
            <div class="col l10 m5 s1">
                <a class="grey-text text-lighten-3 waves-effect waves-light btn blue"
                    href="http://www.facebook.com/lilis.net" target="_blank">Facebook</a> &nbsp; <a
                    class="grey-text text-lighten-3 waves-effect waves-light btn blue"
                    href="http://twitter.com/LILIS_net" target="_blank">Twitter</a> &nbsp; <a
                    class="grey-text text-lighten-3 waves-effect waves-light btn blue"
                    href="https://www.instagram.com/lilis/" target="_blank">Instagram</a>
                <p class="white-text">Total: <span style="font-family: monospace;"><?php include('inc.counter.php'); ?></span></p>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey darken-1">
        <div class="container">
            <div class="col l12 m4 s3 center-align">
                Copyright &copy; <?php copyright(); ?>, All rights reserved. <a class="grey-text text-lighten-4"
                    href="http://lilis.net">Skyremix Studio</a>
            </div>
        </div>
    </div>
</footer></body></html>
