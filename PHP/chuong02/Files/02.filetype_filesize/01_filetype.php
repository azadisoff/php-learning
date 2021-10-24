<?php
    $filename = 'file/abc.txt';
    $folder = 'file/';

    // giá trị trả về là DIR
    // $type = filetype($folder);

    // giá trị trả về là FILE
    $type = filetype($filename);

    echo $type;

?>