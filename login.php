<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <?php
        session_start();
        $error = "";
        if (!isset($_POST["login"]) || ($_POST["login"] == "")){
            $error = "Please, enter user name";
        }elseif(!isset($_POST["password"]) || ($_POST["password"] == "")) {
            $error = "Please, enter password";
        } else{
            $login = $_POST["login"];
            $password = $_POST["password"];
            //test login failed
            if($login != "admin" || $password != "1234"){     //only acceptable login and password for this website
                $erro = "Check if your user name or password is correct";
            //login success
            } else{
                $_SESSION["username"] = "Administrator";
            }
        }
        //if an error occur, redirect to form again with an error showing
        if($error != ""){
            header("Location: formlogin.php?error=$error", true, 301);
            //if there isn't an error redirect to protected page, there the page will check that the user is logged and show logout button
        } else{
            header("Location: protected.php", true, 301);
        }
        ?>
</body>
</html>