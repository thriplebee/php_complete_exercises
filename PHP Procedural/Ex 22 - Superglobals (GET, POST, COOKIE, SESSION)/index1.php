<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals - GET</title>
</head>
<body>
    <form method = "GET">
        <input type="text" name = "name"><br>
        <button type = "submit">Press Me!</button>
    </form>

    <?php
        // Superglobals
        // These are built in variables in PHP that available in all scopes
        
        // $_GET
        // This means pass the form values into the url, So then we can see it
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo "Your name is ".$name;
        }
    ?>
</body>
</html>