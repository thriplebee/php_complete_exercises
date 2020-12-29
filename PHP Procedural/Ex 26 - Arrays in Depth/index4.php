<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays In-Depth 4</title>
</head>
<body>
    <?php
        // Associative Arrays
        // Every data element has a key
        // Good for naming things
        // There are 2 ways to declare/define an associative array

        // Way 1
        $arr1 = array("name" => "Kasun Rajitha", "maths" => 80, "science" => 70);

        echo $arr1["name"];

        echo '<br>';
        echo '--------------------------------';
        echo '<br><br>';

        // Way 2
        $arr2 = array();
        $arr2["email"] = "name@email.com";
        $arr2["username"] = "name123";
        $arr2["password"] = "dfdgdg23123";

        echo $arr2["email"];

        echo '<br>';

        print_r($arr2);

    ?>
</body>
</html>