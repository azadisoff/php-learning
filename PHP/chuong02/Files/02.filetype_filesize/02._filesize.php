<?php
    $filename = 'file/abc.html';

    $size = filesize($filename);

    // 1KB = 1024B
    // 1MB = 1024KB
    // 1GB = 1024MB
    // 1TB = 1024GB

    // Hàm hiển thị dung lượng của một FILE
    function converSize($size, $totalDigit = 2, $ditance = ' '){
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $length = count($units);
        for($i= 0; $i < $length; $i++){
            if($size > 1024){
                $size = $size / 1024;
            }else{
                $unit = $units[$i];
                break;
            }
        }
        $result = round($size, $totalDigit) . $ditance . $unit;
        return $result;
    }

    echo converSize($size);
?>