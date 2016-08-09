<?php
/**
 * Created by PhpStorm.
 * User: lilis
 * Date: 2016. 8. 9.
 * Time: 오후 9:57
 */

include('functions.php');

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="author" content="LILIS">
    <title>Skyremix Studio - 17th</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css"
          media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/17th.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<main>
    <img src="./img/logo_skyremix_studio.svg" class="responsive-img" alt="Logo image">
    <div class="container" style="margin-top: 1em;">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card amber lighten-5">
                    <div class="card-content">
                        <span class="card-title"><strong>Under construction</strong></span>
                        <p>현재 17번째 리뉴얼 중입니다.<br/>
                            연락은 제 <a href="mailto:lilis@skyremix.com">이메일<i class="tiny material-icons">email</i></a>으로
                            부탁드립니다.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</main>

<footer class="page-footer grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12">
                <h5 class="white-text">SNS</h5>
            </div>
        </div>
        <div class="row">
            <div class="col l12 m4 s3">
                <a class="grey-text text-lighten-3 waves-effect waves-light btn blue"
                   href="http://www.facebook.com/lilis.net" target="_blank">Facebook</a>
                &nbsp;
                <a class="grey-text text-lighten-3 waves-effect waves-light btn blue"
                   href="http://twitter.com/LILIS_net"
                   target="_blank">Twitter</a>
                &nbsp;
                <a class="grey-text text-lighten-3 waves-effect waves-light btn blue"
                   href="https://www.instagram.com/lilis/"
                   target="_blank">Instagram</a>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey darken-1">
        <div class="container">
            <div class="col l12 m4 s3">
                Copyright &copy; <?php copyright(); ?>, All rights reserved. <a class="grey-text text-lighten-4 right" href="http://lilis.net">Skyremix Studio</a>
            </div>
        </div>
    </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</body>
</html>
