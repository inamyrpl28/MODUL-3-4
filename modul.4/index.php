<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("location:beranda.php");
    }
    include ("function.php");
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Color</title>
        <!-- Load bootstrap css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>LOGIN</title>
    </head>
    <body>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "wrong") {
                    echo '<h3>Username dan Password salah!</h3>';
                }
            }
            if(isset($_GET["notif"])){
                if($_GET["notif"] == "logout"){
                    echo '<h3>Berhasil logout!</h3>';
                }
            }
            if(isset($_POST['submit'])){
                echo do_login($_POST['username'], $_POST['password']);
            }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="submit" value="SIGN IN">
        </form>

    </body>
</html>