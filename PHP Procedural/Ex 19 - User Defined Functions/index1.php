<?php
    // User defined fucntions

    $x = 100;

    // Create a function
    function newCalc($i){ // $i gets the $x value
        $ans = $i * 0.87;
        echo "Here 75% of what you wrote ".$ans."<br>";
    }

    // Calling the function by passing $x
    newCalc($x);
?>