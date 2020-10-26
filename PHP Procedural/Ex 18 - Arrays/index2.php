<?php
    // Value type & Reference Type

    $array = array("Kamal","Nimal","Saman","Ruwan","Dasun");

    // Value / Primtive Type
    $newarr1 = $array; // Copy existing array(Only values) to a newarray1

    var_dump($array);
    var_dump($newarr1);

    $array['5'] = "Chamari"; // Add a new element to existing array

    var_dump($array);
    var_dump($newarr1);

    // Reference Type
    $newarr2 = &$newarr1; // Copy reference/address of newarray1 to a newarray2

    $newarr1['5'] = "Sarith";

    var_dump($array);
    var_dump($newarr1);
?>