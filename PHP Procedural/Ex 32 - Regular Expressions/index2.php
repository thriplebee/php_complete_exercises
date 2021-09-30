<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expressions - 2 - Very Important</title>
</head>
<body>
    <!-- Form -->
    <form method="POST">
        <input type="text" name="input" placeholder="Regular Expressions">
        <input type="submit" name="submit" value="Check">
    </form>

    <!-- More about Regular expressions -->
    <?php
        // ---Validate Form---

        // Regular expressions basics
        $regexBasics1 = "/^[a-zA-Z\s\d\.]{2,5}+$/";

        $regexBasics2 = "/^[A-Z][a-z][@][\d]$/";

        // Regular expression for email validation
        $regexEmail = "/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}+$/";

        // Regular expression for phone number validation (+94)71-4432-333
        $regexPhone = "/^[(][+][\d]{2}[)][\d]{2}[-][\d]{4}[-][\d]{3}$/";

        if(isset($_POST['submit'])){
            if(preg_match($regexEmail, $_POST['input'])){
                echo "<p style='color:green; font-size:17px'>Correct</p>";
            }
            else{
                echo "<p style='color:red; font-size:17px'>Wrong</p>";
            }
        }
    ?>

    <!-- Syntax Guide -->
    <h3>Syntax Guide</h3>
    <pre>
        ^  -  Start

        $  -  End

        []  -  Rules that are applied to one character

        a-z  -  Allow simple letters

        A-Z  -  Allow capital letters

        \w  -  Allow all letters with some characters

        +  -  Apply a rule to everything

        \s  -  Allow spaces

        0-9  or  \d  -  Allow Digits

        .  -  Allow all

        \.  -  Allow period

        {4}  -  Apply rule to the next 4 characters (Must be 4 characters all the time)

        {2,5}  -  Apply rule to the next 2 to 5 characters

        [A-Z][a-z][@][\d]  -  First character should be Capital, Second should be Simple, Thrid should be '@', Fourth should be a digit
    </pre>
</body>
</html>