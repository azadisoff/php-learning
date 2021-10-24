<?php
    // phân quyền bằng lệnh chmod
    $path = 'libs/chmod';

    if(!file_exists($path)){
        mkdir($path, 0666);
    }

    chmod($path, 0666); //cấp quyền truy cập

    // fileperms xem quyền truy cập
    echo substr(sprintf('%o', fileperms($path)), -4); //0777
?>