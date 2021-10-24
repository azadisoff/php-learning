<?php

    // Hiển thị tất cả các thư mục có tên kế thúc bằng mg
    $data = scandir('.');

    $result = array();
    foreach($data as $key => $value){
        if(is_dir($value)){
            if(preg_match('#mg#imsU', $value))
            $result[] = $value;
        }
    }
    
    echo '<pre>';
    print_r($result);
    echo '</pre>';

?>