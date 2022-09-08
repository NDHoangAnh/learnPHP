<?php
    echo "Super globals in php<br>";
    // biến global: $_name
    // print_r($_SERVER);
    // print_r($_POST/GET)  => gửi tham số qua url 
    /**
     * kiểm tra xem tham số có tồn tại không => isset($_GET(...)) => trả về true or false
     * coalescing: ..(1).. ?? ..(2)..  => (1) đúng thì trả về (2)
     */
    // $name = $_GET['name'] ?? '';
    // $age =  $_GET['age'] ?? '';
    // echo $name;
    // echo $age;

    // $email = $_POST['email'] ?? '';
    $email = htmlspecialchars($_POST['email']) ?? '';
    $password = $_POST['password'] ?? '';
    echo $email;
    echo $password; // trên form thật thì không dùng mấy dòng này

    // cách khác: filter_var (php sanitize)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
          method="GET">
        <div>
            <label for="name">Your name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age">
        </div>
        <input type="submit" name="submit" value="Submit">
    </form> -->

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"
          method="POST">  <!--method post sẽ không hiện giống method get -->
        <div>
            <label for="name">Email </label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>