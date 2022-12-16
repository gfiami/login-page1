<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <h2><a href="./protected.php">Protected by login webpage</a></h2>
    <?php
    session_start();
    //if user is logged, show "logout" 
    if(isset($_SESSION["username"])){
    ?>
        <a href="./logout.php">Logout</a>
    <?php
    }
    ?>
    
</body>
</html>