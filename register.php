<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="shortcut icon" href="images/webicon.ico" type="image/x-icon">
    <link rel="strawberry-icon" href="images/strawberry-icon.png">
</head>

<body>
    <div class="container">
        <div class="title">Sign Up</div>
        <form action="dataregis.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="pwd" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div><div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" name="pwdrepeat" placeholder="Confirm your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="uid" placeholder="Enter your username" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Sign Up">
            </div>
            <div class="notif-sign">
                <p>
                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all fields!</p>";
                        }
                        else if ($_GET["error"] == "invaliduid"){
                            echo "<p>Choose a proper username!</p>";
                        }
                        else if ($_GET["error"] == "invalidemail"){
                            echo "<p>Choose a proper email!</p>";
                        }
                        else if ($_GET["error"] == "pwdnotmatch"){
                            echo "<p>Password doesn't match!</p>";
                        }
                        else if ($_GET["error"] == "stmtfailed"){
                            echo "<p>Something went wrong, try again!</p>";
                        }
                        else if ($_GET["error"] == "usernametaken"){
                            echo "<p>Username or Email already taken!</p>";
                        }
                        else if ($_GET["error"] == "none"){
                            echo "<p>You have signed up!</p>";
                        }
                    }
                ?></p>
            </div>
            <div class="login-ref">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>