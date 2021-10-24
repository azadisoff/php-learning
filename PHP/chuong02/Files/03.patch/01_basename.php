<?php
    // $filename = 'file';
    $path = 'file/abc.txt';

    // Hiển thị tên tập tin có phần mở rộng
    echo basename($path) . '<br/>';

    // Hiển thị tên tập tin không có phần mở rộng
    echo basename($path, '.txt') . '<br/>';

?>