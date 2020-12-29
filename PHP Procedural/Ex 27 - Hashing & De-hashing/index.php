<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing & De-Hashing</title>
</head>
<body>
    <form action="" method="POST">
        <!-- Hashing & De-hashing -->
        <input type="text" name="pass" placeholder="Type Your Password">
        <input type="submit" value="Hash" name="btnConvert">
    </form>
    <!-- PHP Script -->
    <?php
        // Hashing
        // Smoetimes we have to encrypt our users' data when saving them into database.
        // Because someone might be try to hack the db and steal them.
        // For that purpose we are using inbuilt hashing and de-hashing features in php
        if(isset($_POST['btnConvert'])){
            $pass = $_POST['pass'];
            $passHashed = password_hash($pass, PASSWORD_DEFAULT);
            echo '<p>Default Password = '.$pass.'</p><br>';
            echo '<p>Default Password = '.$passHashed.'</p><br>';
            // Every time you refresh the browser, hashed password will be change

            // De-hashing
            $passDehash = password_verify($pass, $passHashed);
            echo '<p>Password Match = '.$passDehash.'</p>';
        }
    ?>
</body>
</html>