<?php
    echo "We talk about variable".'<br/>';
    // tạo biến
    $name = 'I miss u';
    $age = 18;
    $has_cr = false;
    // echo $has_cr; => không hiện gì vì là false
    // echo $age ,'<br/>' ;
    // echo $name;

    // hiển thị thông tin chi tiết của biến
    // var_dump($has_cr);

    // nối 2 hoặc nhiều xâu => sử dụng dấu . 
    echo $name.' is '.$age.'years old'."<br/>";
    echo "$name is $age years old"."<br/>";

    // biểu thức (expression): cộng, trừ, nhân, chia, chia dư
    echo 5 + 5;
    echo '<br/>';
    $sum = '2' + '3';
    echo '1' + '2';
    echo '<br/>';

    // constants
    define('SERVER_NAME','localhost');
    define('DATABASE_NAME','test_db');
    echo "server: ".SERVER_NAME. ', db : '.DATABASE_NAME;
?>