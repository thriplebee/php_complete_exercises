<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protect from SQL Injection 1</title>
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

    <!-- Stop SQL Injection Method 1 -->
    <?php
        // This method will show input as only text to the database
        if(isset($_POST['btnSubmit'])){
            // Escape all diffrent characters then database can't see inout as a code
            $uName = mysqli_real_escape_string($conn, $_POST['uname']);
            $uPass = mysqli_real_escape_string($conn, $_POST['upass']);

            $sql = "INSERT INTO user(username,pwd) VALUES('$uName','$uPass')";

            // Running the query inside the database
            if(mysqli_query($conn, $sql)){
                echo "Sucessfully Insered!";
            }
        }
    ?>
</body>
</html>