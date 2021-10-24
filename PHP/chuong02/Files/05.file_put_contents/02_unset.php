<?php

    $filename = 'file/text.txt';

    if(file_exists($filename)){
        $data = file($filename);
        unset($data[2]); //bỏ một nội dung trong tập tin

        // ghi đè nội dung vào file text.txt
        file_put_contents($filename, $data);
    }else{
        echo 'Tap tin khong ton tai';
    }


?>