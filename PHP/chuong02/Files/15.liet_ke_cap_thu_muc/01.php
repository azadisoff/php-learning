<!-- Bài tập liệt kê cấp thư mục chưa xử dụng kỹ thuật Đệ Quy -->
<ul>
    <li>D: file
        <ul>
            <li>D: child</li>
            <li>F: abc.ini</li>
            <li>F: def.txt</li>
            <li>F: text.txt</li>
        </ul>
    </li>
    <li>D: img
        <ul>
            <li>F: def.txt</li>
        </ul>
    </li>
    <li>F: abc</li>
    <li>F: 01.php</li>
    <li>F: abc.ini</li>
    <li>F: abc.txt</li>
    <li>F: def.txt</li>
</ul>

<hr/>

<?php
    $data = scandir('.');

    echo '<pre>';
    print_r($data);
    echo '</pre>';

    $result = '<ul>';
    foreach($data as $key => $value){
        if($value != '.' && $value != '..'){
            if(is_dir("./$value")){
                $result .= '<li>D: ' . $value . '<ul>';
                $datachild = scandir("./$value");
                foreach($datachild as $keyC => $valueC){
                    if($valueC != '.' && $valueC != '..'){
                        if(is_dir("./$value/$valueC")){
                            $result .= '<li>D: ' . $valueC . '</li>';
                        }else{
                            $result .= '<li>F: ' . $valueC . '</li>';
                        }
                    }
                }
                $result .= '</ul></li>';
            }else{
                $result .= '<li>F: ' . $value . '</li>';
            }
        }
    }
    $result .= '</ul>';

    echo $result;
?>