<?php
    // If Else - Conditional Statements

    $x = 20;
    $y = 30;
    $z = 20;
    $w = 10;

    if($x == $y || $x == $z){ // if x equal to y OR x equal to z OR Both
        echo "Hello Sri Lanka";
        echo "<br>";
        echo "<br>";
    }

    else if($y != 30){ // else if y is not equal to 30
        echo "Hello America";
        echo "<br>";
        echo "<br>";  
    }

    if($x == $z && $x == $w){ // else if x equal to z AND z equal to w (Both)
        echo "Hello Japan";
        echo "<br>";
        echo "<br>";  
    }
    else{ // if any above conditions is not right then
        echo "Hello World";
    }

?>