<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protect from SQL Injection 2 (Prepeared Statements)</title>
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

    <!-- Stop SQL Injection Method 2 -->
    <?php
        // Insert data using prepared statements
        if(isset($_POST['btnSubmit'])){
            $uName = $_POST['uname'];
            $uPass = $_POST['upass'];

            $sql = "INSERT INTO user(username,pwd) VALUES(?,?)";

            // Create a prepared statement
            $stmt = mysqli_stmt_init($conn);

            // Prepare the prepared statement
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "SQL statement failed!";
            }
            else{
                // Bind parameters to the placeholders
                mysqli_stmt_bind_param($stmt, "ss", $uName, $uPass);
                // Initializing $stmt | Number of 's' depends on number of Question Marks

                // Run parameters inside the database
                mysqli_stmt_execute($stmt);
                echo "Sucessfully Inserted!";
            }
        }
    ?>
</body>
</html>