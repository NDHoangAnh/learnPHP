<?php
    session_start();
    if(isset($_SESSION['email']))
    {
        echo "Welcome to Dashboard page<br>";
        echo "Email: ". $_SESSION['email'];
        echo "<a href='./logout.php'>Log out</a>";
    } else 
    {
        echo "Welcome guest to Dashboard<br>";
        echo "<a href='./session.php'>Back to Login</a>";
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
    <h1>This is a dashboard</h1>
</body>
</html>