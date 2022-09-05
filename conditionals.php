<?php
    echo "we talk about conditional in php<br>";

    $age = 30;
    if($age >= 18)
    {
        echo "Lớn hơn 18 rồi";
    } else {
        echo "young";
    }
    echo '<br/>';
    $date_time = date("F j y");
    echo $date_time;

    // hàm kiểm tra mảng rỗng : empty($name)
    // toán tử coalescing ??

    $sfavorite_color = 'aqua';
    switch($sfavorite_color)
    {
        case 'red':
            echo 'choose red';
            break;
        case 'green':
            echo 'green';
            break;
        case 'blue':
            echo 'choose blue';
            break;
        default:
            echo 'not any of them';
    }

?>