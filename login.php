<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="images/webicon.ico" type="image/x-icon">
    <link rel="strawberry-icon" href="images/strawberry-icon.png">
    
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="images/loginbg.jpg" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <div class="logo">
                    <a href="index.php"><img src="images/logopujon.png" alt=""></a>
                </div>
                <h2>Login</h2>
                <form action="datalogin.php" method="POST">
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="uid" required>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="pwd" required>
                    </div>
                    <div class="inputBx">
                        <input class="submit" type="submit" name="submit" value="Login">
                    </div>
                    <div class="notif">
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput"){
                                echo "<p>Fill in all fields!</p>";
                            }
                            else if ($_GET["error"] == "wronglogin"){
                                echo "<p>Incorect Username or Password!</p>";
                            }
                        }
                        ?> 
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account? <a href="register.php">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>