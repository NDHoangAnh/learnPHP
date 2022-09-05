<?php
    echo "we talk about iterations(loop) in php <br>";

    for($i = 0 ; $i < 10; $i++)
    {
        echo $i, '<br/>';
    }

    // while, do-while

    // hàm đếm số phần tử của mảng : count($name)
    // foreach
    $fruits = ['apple', 'orange','lemon'];
    foreach($fruits as $fruit)
    {
        echo "$fruit <br>";
    }
    foreach($fruits as $index => $fruit)
    {
        echo "$index - $fruit <br>";
    }

    $person = [
        'full_name' => 'hoàng anh',
        'email' => 'aaa@gmail.com',
        'age' => 20
    ];
    foreach($person as $key => $value)
    {
        echo "$key : $value<br>" ;
    }
?>