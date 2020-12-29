<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays In-Depth 1</title>
</head>
<body>
    <?php
        // Insert data into arrays
        // Method 1
        $arr1 = array();
        $arr1[] = "Kasun";
        $arr1[] = 100;
        echo $arr1['0'].'<br>';
        echo $arr1['1'].'<br>';
        print_r($arr1);
        echo '<br>';
        echo '--------------------------------';
        echo '<br><br>';

        // Method 2
        $arr2 = array();
        array_push($arr2, "Nadun", 200, "Chamal");
        echo $arr2['0'].'<br>';
        echo $arr2['1'].'<br>';
        print_r($arr2);
        echo '<br>';
        echo '--------------------------------';
        echo '<br><br>';

        // Method 3
        $arr3 = array();
        array_push($arr3, "Chamara");
        array_push($arr3, 300);
        echo $arr3['0'].'<br>';
        echo $arr3['1'].'<br>';
        print_r($arr3);
    ?>
</body>
</html>