<?php
    // xóa một thư mục
    $path = 'abc';

    if(file_exists($path)){
        rmdir($path);
    }
?>