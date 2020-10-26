<?php
    // Session Start
    session_start();

    // Echo session variables that were set on previous page
    echo "My height is ".$_SESSION["height"]."<br>";
    echo "My name is ".$_SESSION["name"]."<br>";

    // Remove all session variables
    session_unset();

    // Destroy the session
    session_destroy();
?>