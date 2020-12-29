<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays In-Depth 5</title>
</head>
<body>
    <?php
        // Multi Dimensional Arrays
        // Arrays inside arrays
        // Very helpful when we are dealing with databases

        $arr1 = array(array(1,2,3,4,5), "Kasun", "Dasun", 22.5);

        print_r($arr1);

        echo '<br>';
        echo '--------------------------------';
        echo '<br><br>';

        $arr2 = array("Kamal",array("Chamari", "Sanduni", "Diane", array(22,33,44,55,34),"Chamara"),445.67);

        print_r($arr2);

        echo '<br>';
        echo '<br>';

        // Print any element of the main array
        echo $arr2[0];

        echo '<br>';
        echo '<br>';

        // Print any element of array inside the main array
        echo $arr2[1][2];

        echo '<br>';
        echo '<br>';

        // Print any element of array inside the secondary array
        echo $arr2[1][3][2];
    ?>
</body>
</html>