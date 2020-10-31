<?php
    // Include the database connection file
    include 'inc/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling - 1</title>
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
    <form action = "inc/signup1.inc.php" method = "POST">
        <input type = "text" name = "uEmail" placeholder = "Enter Email"><br>
        <input type = "text" name = "uPass" placeholder = "Enter Password"><br>
        <input type = "submit" name = "btnSignup" value = "Sign Up">
    </form>

    <?php
        // Display Error Messages according to this code
        // First we have to identify the header function url
        // Method 1

        // Store URL
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        // Check URL
        if(strpos($fullurl, "signup=empty") ==  true){
            echo "<p class = 'error'>You did not fill in all fields!</p>";
        }
        else if(strpos($fullurl, "signup=invalidemail") ==  true){
            echo "<p class = 'error'>You have used invalid email address!</p>";
        }
        else if(strpos($fullurl, "signup=success") ==  true){
            echo "<p class = 'success'>You Signed Up Successfully!</p>";
        }
    ?>
</body>
</html>