<?php
// Scheduled Message Program
    $daysOftheWeek = date("w");

    switch($daysOftheWeek){
        case 1:
            echo "<p>Today is Monday!</p>";
        break;
        case 2:
            echo "<p>Today is Tuesday!</p>";
        break;
        case 3:
            echo "<p>Today is Wednesday!</p>";
        break;
        case 4:
            echo "<p>Today is Thursday!</p>";
        break;
        case 5:
            echo "<p>Today is Firday!</p>";
        break;
        case 6:
            echo "<p>Today is Saturday!</p>";
        break;
        default:
            echo "<p>Today is Sunday!</p>";
    }
?>