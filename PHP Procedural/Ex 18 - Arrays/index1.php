<?php
    // Arrays is a collection of similar tyoes if data elements
    // Each element has an unique index number (Starts with 0)
    // Any array has a size
    // Array is a reference data type

    $array = array("Kamal","Nimal","Saman","Ruwan","Dasun");

    echo $array['2']."<br>";
    echo $array['3']."<br>";
    echo $array['4']."<br>";

    echo sizeof($array)."<br>";; // Size of the array

    echo print_r($array)."<br>"; // Print the information about some variables in a more human-readable way

    echo var_dump($array)."<br>"; // Dumps information about one or more variables. The information holds type, length and value of the variable(s).

    // Advantages : Code Efficiency
    // Disadvantages : Size Limits
?>