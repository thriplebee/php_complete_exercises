<?php
    // --Logout--
    session_start();
    session_unset();
    session_destroy();

    // Redirect to index page
    header("location: ../index.php");
?>