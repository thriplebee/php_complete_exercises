<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>
<body>
    <!-- For for getting user input -->
    <form action="" method="GET">
        <input type="text" name="person">
        <button type = "submit">Submit</button>
    </form>

    <?php
        $name  = $_GET['person']; // Store user input using GET method

        echo "Your name is ".$name; // Echo $name with string concatenation
    ?>
</body>
</html>