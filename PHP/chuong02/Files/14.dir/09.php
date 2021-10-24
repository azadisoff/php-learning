<?php

    // Hiển thị tất cả các thư mục có tên kế thúc bằng mg
    $dir = opendir('.');
 
    $result = array();
    while(($file = readdir($dir)) != false){
        if(is_dir($file)){
            if(preg_match('#mg#imsU', $file))
            $result[] = $file;
        }
    }

    echo '<pre>';
    print_r($result);
    echo '</pre>';

    closedir($dir);
?>