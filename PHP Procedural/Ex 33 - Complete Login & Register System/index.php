<?php
    session_start();
    if(isset($_SESSION["user_email"])){
        header("location: ./profile.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register System</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- Messages -->
    <?php
        if(isset($_GET["err"])){
            // Both forms related messages
            if($_GET["err"] === "empty_inputs"){
                echo "<p class='msg' style='background-color: #ee2222;'>All the input fields must be filled!</p>";
            }
            else if($_GET["err"] === "invalid_name"){
                echo "<p class='msg' style='background-color: #ee2222;'>Both names must be written in only letters!</p>";
            }
            else if($_GET["err"] === "invalid_email"){
                echo "<p class='msg' style='background-color: #ee2222;'>A proper email must be entered!</p>";
            }
            else if($_GET["err"] === "invalid_mobile"){
                echo "<p class='msg' style='background-color: #ee2222;'>Mobile number must be 10 digit long & start with 0!</p>";
            }
            else if($_GET["err"] === "invalid_password"){
                echo "<p class='msg' style='background-color: #ee2222;'>Password must be at least 5 characters long!</p>";
            }
            else if($_GET["err"] === "different_pass"){
                echo "<p class='msg' style='background-color: #ee2222;'>Both passwords must be matched!</p>";
            }
            else if($_GET["err"] === "available_emailormobile"){
                echo "<p class='msg' style='background-color: #ee2222;'>Email & mobile number must be be brand new!</p>";
            }
            else if($_GET["err"] === "failedstmt"){
                echo "<p class='msg' style='background-color: #ee2222;'>Failed to execute the query!</p>";
            }

            // Register form related message
            else if($_GET["err"] === "noerrors"){
                echo "<p class='msg' style='background-color: #25aa25;'>Successfully registered!</p>";
            }

            // Login form related message
            else if($_GET["err"] === "loginfailedemail"){
                echo "<p class='msg' style='background-color: #ee2222;'>Wrong email, please enter the correct email!</p>";
            }
            else if($_GET["err"] === "loginfailedpass"){
                echo "<p class='msg' style='background-color: #ee2222;'>Wrong password, please enter the correct password!</p>";
            }
        }
    ?>
    <!-- Forms -->
    <div class="forms">
        <!-- Login Form -->
        <form action="./includes/login.inc.php" method="post" class="login">
            <h2>Login</h2>
            <input type="text" name="email" placeholder="Enter Your Email..." value="<?php if(isset($_COOKIE["emailcookie"])){ echo $_COOKIE["emailcookie"]; } ?>">
            <input type="password" name="pass" placeholder="Enter Your Password..." value="<?php if(isset($_COOKIE["passwordcookie"])){ echo $_COOKIE["passwordcookie"]; } ?>">
            <div class="rem">
                <input type="checkbox" name="re-check" id="re-check" <?php if(isset($_COOKIE["emailcookie"])){ ?> checked <?php } ?>>
                <label for="re-check">Remember Me</label>
            </div>
            <button type="submit" name="login-btn">Login</button>
        </form>

        <!-- Register Form -->
        <form action="./includes/register.inc.php" method="post" class="register">
            <h2>Register</h2>
            <input type="text" name="fname" placeholder="Enter Your First Name...">
            <input type="text" name="lname" placeholder="Enter Last Name...">
            <input type="text" name="email" placeholder="Enter Your Email...">
            <input type="text" name="mobile" placeholder="Enter Your Mobile...">
            <input type="password" name="pass" placeholder="Enter Your Password...">
            <input type="password" name="re_pass" placeholder="Enter Your Password Again...">
            <button type="submit" name="register-btn">Register</button>
        </form>
    </div>
</body>
</html>