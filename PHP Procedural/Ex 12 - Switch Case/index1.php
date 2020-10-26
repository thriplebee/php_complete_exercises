<?php
    // Switch Case

    $grade = 'A';

    switch($grade){
        case 'W':
            echo "Your marks must be between 0 - 35";
        break;
        case 'S':
            echo "Your marks must be between 35 - 45";
        break;
        case 'C':
            echo "Your marks must be between 45 - 55";
        break;
        case 'B':
            echo "Your marks must be between 55 - 65";
        break;
        case 'A':
            echo "Your marks must be between 65 - 100";
        break;
        default:
            echo "Invalid Input";
    }
    
?>