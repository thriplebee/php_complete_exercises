<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expressions - 1</title>
</head>
<body>
    <?php
        // When we have regular expressions we put them in between /regular expression/
        $string = "My name is Jhon, Jhon is my name";

        // ---Check the regular expression is inside the string---
        if(preg_match("/Jhon/",$string)){ 
            echo "It is a match!<br>";
            echo "---------------------------------<br>";
        }
        else{
            echo "Not a match!<br>";
            echo "---------------------------------<br>";
        }

        // ---We can store the result in an array---
        if(preg_match("/Jhon/",$string,$arr)){ 
            print_r($arr);
            echo "<br>";
            echo "---------------------------------<br>";
            // It displays only one match and it ignores everything when it found the first match
        }

        // ---Store all the matches inside an array---
        if(preg_match_all("/Jhon/",$string,$arr)){ 
            print_r($arr);
            echo "<br>";
            echo "---------------------------------<br>";
            // It displays all matches
        }

        // ---Search 2 combined word---
        if(preg_match_all("/J(ho)n/",$string,$arr)){ 
            print_r($arr);
            echo "<br>";
            echo "---------------------------------<br>";
            // It search both 'jhon' and 'ho' and display all matches
        }

        // ---Replace some string with a given string---
        $stringReplace = preg_replace("/Jhon/","Kamal",$string);
        echo $stringReplace;
    ?>
</body>
</html>