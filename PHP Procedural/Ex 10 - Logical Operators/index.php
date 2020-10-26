<?php
    // Logical Operators

    $x = 20;
    $y = 30;
    $z = 20;
    $w = 10;

    if($x == $y || $x == $z){ // '||' means or
        echo "'x' equal to 'y' OR 'x' equal to  'z' OR both conditions are true...";
        echo "<br>";
        echo "<br>";
    }

    if($y == 30 && $y == ($w+20)){ // '&&' means and
        echo "'y' equal to 30 AND 'y' equal to  'w'+20, This means both conditons should be true...";
        echo "<br>";
        echo "<br>";  
    }

    if($x == $z xor $x == $w){ // '&&' means and
        echo "'x' equal to 'z' OR 'x' equal to  'w', But NOT both conditions should be true or false";
    }

?>