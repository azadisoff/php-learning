<?php
    // Ghi nội dung vào tập tin
    $fileName = 'file/abc.txt';

    $record = file($fileName);

    $data = file_get_contents($fileName);

    preg_match_all('#\S#imsU', $data, $matches);
    preg_match_all('#\S\s\S#imsU', $data, $spaces);

    $record = count($record);
    $word = str_word_count($data);
    $space = count($spaces[0]);
    $chaNoSpac = count($matches[0]);
    
    echo '<ul>';
    echo '<li>Tổng số dòng: ' . $record . '</li>';
    echo '<li>Tổng số từ: ' . $word . '</li>';
    echo '<li>Tổng số khoản trắng: ' . $space . '</li>';
    echo '<li>Tổng số ký tự: ' . $chaNoSpac . '</li>';
    echo '</ul>';


?>