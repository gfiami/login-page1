<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1> Login Page </h1>
    <?php
    if(isset($_GET["error"])){
        echo("<hr/><h2>" .$_GET['error']."</h2> <hr/>");
    }
    ?>
    <form action="login.php" method="POST">
        <p>Username: <input type="text" name="login" placeholder="user"/></p>
        <p>Password: <input type="password" name="password" placeholder="password"/></p>
        <input type="submit" value="Login"/>
    </form>

</body>
</html>