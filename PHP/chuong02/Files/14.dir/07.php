<?php

    // Hiển thị tất cả các thư mục có tên kế thúc bằng mg
    $data = glob('*mg', GLOB_ONLYDIR);

    echo '<pre>';
    print_r($data);
    echo '</pre>';

?>