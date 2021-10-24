<?php

    $path = '';
    $path = 'file/';
    $path = 'file/abc.ini';

    echo realpath($path); //trả về đường dẫn tuyệt đối của $path

?>