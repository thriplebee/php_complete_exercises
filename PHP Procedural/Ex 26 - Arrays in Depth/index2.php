<?php
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays In-Depth 2</title>
</head>
<body>
    <?php
        // Insert Db table data into the array
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        $arr = array(); // Declare an array
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $arr[] = $row; // Insert rows into the array
            }
        }

        print_r($arr);

        echo '<br>';
        echo '--------------------------------';
        echo '<br><br>';

        // In last output we can see arrays inside arrays
        foreach($arr[1] as $d){ // Print only one row
            echo $d;
        }

        echo '<br>';
        echo '--------------------------------';
        echo '<br><br>';

        foreach($arr as $d){
            echo $d['username'].'<br>';
        }

    ?>
</body>
</html>