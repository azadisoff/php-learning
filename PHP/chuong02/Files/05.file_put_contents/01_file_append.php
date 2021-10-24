<?php
    // Lấy nội dung trong một file

    $filename = 'file/text.txt';
    $data = 'DEF';

    echo file_put_contents($filename, $data, FILE_APPEND);
    //  FILE_APPEND : chi tiếp nội dung vào file
?>