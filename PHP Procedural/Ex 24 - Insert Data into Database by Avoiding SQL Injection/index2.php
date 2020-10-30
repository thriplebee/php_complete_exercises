<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get User Inputs and Insert</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <!-- To get user inputs -->
    <form method = "POST">
        <input type = "text" name = "uname" placeholder = "Username"><br>
        <input type = "text" name = "upass" placeholder = "Password"><br>
        <input type = "submit" name = "btnSubmit" value = "Submit">
    </form>

    <?php
        if(isset($_POST['btnSubmit'])){
            // Assign text box vakues to variables
            $uName = $_POST['uname'];
            $uPass = $_POST['upass'];

            $sql = "INSERT INTO user(username,pwd) VALUES('$uName','$uPass')";

            // Running the query inside the database
            if(mysqli_query($conn, $sql)){
                echo "Sucessfully Insered!";
            }
        }
    ?>
</body>
</html>