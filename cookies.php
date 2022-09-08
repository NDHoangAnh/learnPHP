<?php
    echo "Cookie in php";
    // save data in remote browser
    /**
     * retrieve dữ liệu khi người dùng vào lại site
     */
    // setcookie(name, value, time);
    setcookie('name', 'hoang', time()+ 24*3600);

    if(isset($_COOKIE['name'])) // cookie cũng là 1 loại super global
    {
        echo $_COOKIE['name'];
    }
?>