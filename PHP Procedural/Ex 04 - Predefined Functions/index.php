<?php
    /* What is a function in php

    Peace of php code that does one certain thing... */

    /* What is predefined functions
    
    Peace of php code that alredy designed inside php language which users can use it later */

    /* What is user defined functions

    Functions that user can creacte in php */

    // Examples for predefined functions

    $name = "I love cake";
    $result1 = strlen($name); // This is a predefined function that can display the lenght of some text...
    echo $result1;
    echo "<br>";

    $result2 = str_word_count($name); // This is predefined function that can counts the numebr of words in some text...
    echo $result2;
    echo "<br>";

    $result3 = strrev($name); // This is predefined function that can use to reverse the text...
    echo $result3;
    echo "<br>";

    $result4 = strpos($name, "cake"); // This is predefined function that can find the start position of some text...
    echo $result4;
    echo "<br>";

    $result5 = str_replace("cake","bread",$name); // This is predefined function that can replace text with another text...
    echo $result5;
    echo "<br>";
?>