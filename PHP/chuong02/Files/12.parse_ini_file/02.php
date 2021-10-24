<?php
    //đọc dữ liệu tập tin cấu hình file .ini
    $data = parse_ini_file('php.ini', true);

    echo '<pre>';
    print_r($data);
    echo '</pre>';

?>