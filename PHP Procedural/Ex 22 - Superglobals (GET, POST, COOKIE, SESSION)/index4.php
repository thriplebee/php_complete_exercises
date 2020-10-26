<?php
    // Superglobals
    // These are built in variables in PHP that available in all scopes

    // Session - $_SESSION
    /* A session is a way to store information (in variables) to be used across multiple pages.
       When you work with an application, you open it, do some changes, and then you close it.
       Session variables hold information about one single user, and are available to all pages in one application.
       Delete when browser closed
       Hackers can't easily access them
       Ex: User Login System
    */

    // Session Start
    session_start();

    // Set Session Variables
    $_SESSION["height"] = 5.10;
    $_SESSION["name"] = "Thriple Bee";

    echo "Session variables are set.";

    // Next -> Sample.php
?>