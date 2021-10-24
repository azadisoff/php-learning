<?php
    // $filename = 'file';
    $path = 'file/abc.txt';

    $pathinfo = pathinfo($path);

    // Hiển thị toàn bộ thông tin của file theo mảng array
    echo '<pre>';
    print_r($pathinfo);
    echo '</pre>';
    /*
    Array
    (
    [dirname] => file
    [basename] => abc.txt
    [extension] => txt
    [filename] => abc
    )
    */
?>