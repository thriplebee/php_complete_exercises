<?php
    // Include database connection
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <?php
        // Create a query
        $sql = "SELECT * FROM user";

        // Querying (Run above query in database)
        $result = mysqli_query($conn, $sql);

        // Chcek results (How Many)
        $resultCheck = mysqli_num_rows($result);

        // If number of result > 0;
        if($resultCheck > 0){
            // Print the result using while loop
            while($row = mysqli_fetch_assoc($result)){
                echo $row['id']." ".$row['username']." ".$row['pwd']."<br>";
            }
        }
    ?>
</body>
</html>
