<?php
    // Error handlers in PHP
    // Error handling depends on the situation
    if(isset($_POST['btnSignup'])){
        include 'dbh.inc.php';

        // Avoid SQL Injection
        $uEmail = mysqli_real_escape_string($conn, $_POST['uEmail']);
        $uPass = mysqli_real_escape_string($conn, $_POST['uPass']);

        // Check if input fields are empty
        if(empty($uEmail) || empty($uPass)){
            header("Location: ../index1.php?signup=empty");
        }
        else{
            // Validate email using inbuilt email validator
            if(!filter_var($uEmail, FILTER_VALIDATE_EMAIL)){
                header("Location: ../index1.php?signup=invalidemail");
            }
            else{
                $sql = "INSERT INTO user(username,pwd) VALUES('$uEmail','$uPass')";
                // Try - Catch Block - Exception Handling
                try{
                    if(!mysqli_query($conn, $sql)){
                        throw new Exception('Cannot run the sql query inside the database');
                        // This line will never executed
                        echo "\nAfter Throw!";
                    }
                    else{
                        header("Location: ../index1.php?signup=success");
                    }
                }
                // Catch blokc will executed only when exception has been thrown by try block
                catch(Exception $e){
                    echo "\nException Caught : ".$e->getMessage();
                }
                finally{
                    echo "\nNo matter what this block will always execute!";
                }
            }
        }
    }
?>