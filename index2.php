<?php

$files =[
    'header',
    'menu',
    'main',
    'footer'
];

foreach ($files as $i => $file) {
    include($file.".php");
}