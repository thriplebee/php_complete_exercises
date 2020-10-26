<?php
    $x = 100;

    function everything($x){
        $y = 200; // Local Scope
        echo $x; // We can use global variable like this
    }
    
    everything($x); // Call the function by passing $x
?>