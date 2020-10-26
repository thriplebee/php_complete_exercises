<?php
    // Variable Scope
    
    $x = 100; // Global Scope
    // Which means we can use this varible anywhere of this code

    function something(){
        $y = 200; // Local Scope
        // Whic means we can use this varaible only inside this function
        echo $y."<br>";
    }

    echo $x."<br>"; // Use $x
    echo $y."<br>"; // Use $y --> Error

    something(); // Calling the function
?>