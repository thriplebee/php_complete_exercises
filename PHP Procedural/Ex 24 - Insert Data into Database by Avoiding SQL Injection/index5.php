<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Data form Db using Prepared statements</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <!-- To get user inputs -->
    <form method = "POST">
        <input type = "text" name = "keyword" placeholder = "Enter Username"><br>
        <input type = "submit" name = "btnFind" value = "Find">
    </form>

    <!-- Stop SQL Injection Method 2 -->
    <?php
        // Insert data using prepared statements
        if(isset($_POST['btnFind'])){
            $keyword = $_POST['keyword'];

            $sql = "SELECT * FROM user WHERE username = ?";

            // Create a prepared statement
            $stmt = mysqli_stmt_init($conn);

            // Prepare the prepared statement
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "SQL statement failed!";
            }
            else{
                // Bind parameters to the placeholders
                mysqli_stmt_bind_param($stmt, "s", $keyword);

                // Run parameter inside the databse
                mysqli_stmt_execute($stmt);

                // Get the data
                $result = mysqli_stmt_get_result($stmt);

                // Print Data
                while($row = mysqli_fetch_assoc($result)){
                    echo $row['id']."  ".$row['username']."  ".$row['pwd']."<br>";
                }
            }
        }
    ?>
</body>
</html>