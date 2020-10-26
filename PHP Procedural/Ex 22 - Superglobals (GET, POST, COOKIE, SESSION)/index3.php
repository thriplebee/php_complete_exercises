<?php
    // Superglobals
    // These are built in variables in PHP that available in all scopes

    // Cookies - $_COOKIE
    /*
        Store date in browser
        Hackers can easily access them
        It has a time limit (Cookie will delete automatically when exceeding that time limit)
        Ex : Save what kind of clothes some customer like
    */

    // Create Cookie
    $my = "myname";
    setcookie($my,"Jhonathan Price", time() + (86400 * 30));

    // Retreive Cookie
    if(!isset($_COOKIE[$my])){
        echo "Cookie named ".$my." is not set!";
    }
    else{
        echo "Cookie ".$my." is set!<br>";
        echo "Value is : ".$_COOKIE[$my];
    }
?>