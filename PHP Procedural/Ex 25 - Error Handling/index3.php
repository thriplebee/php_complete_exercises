<?php
    // Include the database connection file
    include 'inc/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling - 3</title>
    <style>
        .error{
            color: red;
        }

        .success{
            color: green;
        }
    </style>
</head>
<body>
    <!-- Sign Up Form -->
    <form action = "inc/signup2.inc.php" method = "POST">
        <!-- Keep user entered values in the text boxes -->
        <!-- Dynamically set up the input elements according to url 'email' and 'pass' parameters -->
        <?php
            // Email
            // If url has email
            if(isset($_GET['email'])){
                $email = $_GET['email'];
                echo '<input type = "text" name = "uEmail" placeholder = "Enter Email" value = "'.$email.'"><br>';
            }
            else{
                echo '<input type = "text" name = "uEmail" placeholder = "Enter Email"><br>';
            }

            // Password
            // If url has pass
            if(isset($_GET['pass'])){
                $pass = $_GET['pass'];
                echo '<input type = "text" name = "uPass" placeholder = "Enter Password" value = "'.$pass.'"><br>';
            }
            else{
                echo '<input type = "text" name = "uPass" placeholder = "Enter Password"><br>';
            }
        ?>
        <input type = "submit" name = "btnSignup" value = "Sign Up">
    </form>

    <?php
        // Display Error Messages according to this code
        // First we have to identify the header function url
        // Method 2
        // 'signup' some kind of data
        // Then we can use GET method

        // If don't have 'signup' inside the url
        if(!isset($_GET['signup'])){
            exit();
        }
        else{
            // This variable equals to whatever comes after the 'signup='
            $signupCheck = $_GET['signup'];

            if($signupCheck == "empty"){
                echo "<p class = 'error'>You did not fill in all fields!</p>";
            }
            else if($signupCheck == "invalidemail"){
                echo "<p class = 'error'>You have used invalid email address!</p>";
            }
            else if($signupCheck == "success"){
                echo "<p class = 'success'>You Signed Up Successfully!</p>";
            }
        }
    ?>
</body>
</html>