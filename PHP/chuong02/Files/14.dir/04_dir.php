<?php

    $dir = dir('img');
    $dir = dir('.');
    $dir = dir('..');
    while(($file = $dir -> read()) != false){
        echo 'filename: ' . $file . '<br/>';
    }
?>