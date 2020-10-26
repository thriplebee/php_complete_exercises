<?php
    $x = 100;
    function everything(){
        $y = 200; // Local Scope
        // Use superglobals $GLOBALS
        echo $GLOBALS['x']; // We can use global varible like this way inside functions
    }
    
    // We can use $x global varible in this if block normal way
    if(5 == 5){
        echo $x."<br>";
    }

    everything(); // When using $GLOBALS, we don't have to pass argument $x
?>