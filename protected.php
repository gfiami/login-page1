<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Page</title>
</head>
<body>
    <?php
    session_start();
    //if user isnt logged, redirect to a form to login with user and password
    if (!isset($_SESSION["username"])){
        header("Location: formlogin.php", true, 301);
    } else{
        //shows message and link to main page
        ?>
            <h1> Hi <?php echo($_SESSION["username"]) ?>! You are logged in.</h1>
            <h2><a href="index.php">Return to main page</a></h2>
        <?php
    }
    ?>

</body>
</html>