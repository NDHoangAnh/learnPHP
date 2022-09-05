<?php
    echo "We talk about function in php <br>";

    $y = 20;
    function sayHello($name)
    {
        global $y; // sử dụng global để biến y được dùng trong hàm
        echo "y = $y<br>";
        echo "Hello $name";
    }
    sayHello('hoàng anh<br>');

    // có thể truyền tham số có giá trị mặc đính
    function sum($a =0, $b=0)
    {
        return $a + $b;
    }
    echo sum(2,3), '<br/>';

    // có thể gán 1 biến cho 1 function
    $multiply = function($a,$b)
    {
        return $a * $b;
    };
    echo $multiply(2,3);
    echo '<br/>';

    // arrow function
    $subtract = fn($a,$b) => $a - $b;
    echo $subtract(6,7);

    // some built-in function for array
    $names = ['john', 'anna', 'hoang', 'anh'];
    echo "number of items :".count($names);
    // search inside array: in_array('...', $name_arr);
    // insert an item: array_push($name_arr, '...', '...');
    // insert to the beginning of the array: array_unshift($name_arr, '...')
    // remove the last item: array_pop($name_arr);
    // remove the first item: array_shift($name_arr);
    // remove an item: unset($name_arr[...]);
    // chunk an array: array_chunk($name_arr, 2);
    // merge array: array_merge($name1, $name2);
    // spread operator: $new_name = [...$name_arr]; => nhân bản array
    // merge and clone: nhân bản 2 mảng rồi gộp lại thành mảng mới => $new_name = [...$name1, ...$name2];
    // combine two array: array_combine($name1, $name2);  => các element của name1 sẽ là key, các element ủa name2 sẽ là values
    // flip: đảo key vs value => array_flip($name)
    // range(a,b) => in ra các số từ a -> b
    // ánh xạ 2 mảng (map): tạo ra 1 mnagr có độ rộng giống mảng cũ nhg giá trị khác
    // => $new_name = array_map(function($element){
    //   return ...
    //}, $name_arr)

    // filter an array: 
    /**
     * $new_name = array_filter($name_arr, function($name_element)
     * {    
     *      return ...
     * });
     */




    
?>