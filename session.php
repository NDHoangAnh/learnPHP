<?php
    echo "Session in php<br>";
    // session được lưu trữ trên server
    // có thể được sử dụng trong nhiều trang khác nhau
    session_start();
    if(isset($_POST['submit'])) // kiểm tra đã ấn submit chưa
    {   
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if($email == 'hoanganh.axe.no.1@gmail.com' && $password == '123456')
        {
            $_SESSION['email'] = $email;  // lưu địa chỉ email vào session
            // redirect to another page
            header('Location: ./dashboard.php');
        } else 
        {
            echo "Incorrect email or password";
        }
    }
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
    <h1>Login to your account</h1>
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
