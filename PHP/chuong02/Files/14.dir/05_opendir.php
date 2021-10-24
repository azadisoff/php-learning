<?php

    $dir = opendir('..');

    // đọc thư mục trong hàm readdir
    while(($file = readdir($dir)) != false){
        echo 'filename: ' . $file . '<br/>';
    }

    closedir($dir); //đóng thư mục lại
?>