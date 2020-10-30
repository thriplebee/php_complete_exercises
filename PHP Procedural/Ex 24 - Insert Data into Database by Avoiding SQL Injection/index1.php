<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Harrd Coded Values</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <?php
        // Just insert hardcoded values into database
        $sql = "INSERT INTO user(username,pwd) VALUES('tharaka','456')";

        // Running the query inside the database
        if(mysqli_query($conn, $sql)){
            echo "Sucessfully Inserted!";
        }
    ?>

</body>
</html>