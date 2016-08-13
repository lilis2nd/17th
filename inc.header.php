<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
        })
    </script>
</head>

<body>
<?php
include('inc.functions.php');
include('inc.menu.php');
?>