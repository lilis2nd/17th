<?php
/**
 * Created by PhpStorm.
 * User: lilis
 * Date: 2016. 8. 13.
 * Time: 오후 4:28
 */

$host = 'localhost';
$id = 'skylilis';
$passwd = 'Genius1004!';
$db = 'skylilis';

$conn_server = mysqli_connect($host, $id, $passwd);
$conn_db = mysqli_select_db($db);
?>