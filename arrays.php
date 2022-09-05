<?php
    echo "We talk about array";
    echo "<br/>";

    // khai báo
    $some_numbers = [1,3,4,5];
    $fruits = ['pineapple', 'melon','apple'];
    var_dump($some_numbers);
    echo '<br/>';
    echo $fruits[0];
    echo '<br/>';

    // associative: gồm 2 trường là key và value, truy cập theo key
    $colors = [
        3 => 'red',
        5 => 'green',
        7 => 'blue',
    ];
    echo $colors[5]; // green
    // key as a string
    $hex_colors = [
        'red' => "#FF000",
        'green' => '#00FF00',
        'blue' => '#0000FF',
    ];
    echo '<br/>';
    echo $hex_colors['green'];
    $person = [
        'full_name' => 'Nguyen Dac Hoang Anh',
        'age' => 20,
        'email' => 'hoanganh.axe.no.1@gmail.com'
    ];
    echo '<br/>';
    echo $person['email'];
    echo '<br/>';

    $people = [
        [
            'full_name' => 'Nguyen Dac Hoang Anh',
            'age' => 20,
            'email' => 'hoanganh.axe.no.1@gmail.com'
        ],
        [
            'full_name' => 'Nguyen Dac Hoang',
            'age' => 19,
            'email' => 'hoanganh.axe.no.2@gmail.com'
        ],
        [
            'full_name' => 'Nguyen Dac Anh',
            'age' => 18,
            'email' => 'hoanganh.axe.no.3@gmail.com'
        ]
    ];
    print_r($people);
    echo '<br/>';
    echo $people[1]['email'];
    echo '<br/>';
    var_dump(json_encode($people));
?>