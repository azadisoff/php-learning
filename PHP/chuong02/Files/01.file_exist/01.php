<?php
    // $filename = 'file';
    $filename = 'file/abc.txt';

    if(file_exists($filename)){
        echo 'Ton tai';
    }else{
        echo 'Khong ton tai';
    }

?>