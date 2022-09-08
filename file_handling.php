<?php
    echo "File handling in php<br>";
    
    // đọc dữ liệu từ file 
    $file_path = './fruits.txt';
    if(file_exists($file_path))
    {
        //echo readFile($file_path); // hiện ra nội dung file và có 1 số ở cuối là dung lượng file (byte)
        $file_handle = fopen($file_path, 'r'); // mở file; mở với option 'r' là mở chỉ đọc 
        $file_content = fread($file_handle, filesize(($file_path))); // cũng hiện file nhg k hiện dung lượng
        fclose($file_handle);
        echo $file_content;
    } else 
    {
        $file_handle = fopen($file_path, 'w'); // mở file với option 'w' là mở để ghi
        $file_content = 'banana'.PHP_EOL.'mango'.PHP_EOL.'grape'; //php_eol : xuống dòng
        fwrite($file_handle, $file_content);
        fclose($file_handle);
    }
?>

