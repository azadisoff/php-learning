<?php

    $path = '.'; //thư mục hiện hành

    $data = scandir($path);

    echo '<pre>';
    print_r($data);
    echo '</pre>';
?>