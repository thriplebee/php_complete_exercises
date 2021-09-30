<?php
    // --Add dbh file--
    require_once "./dbh.inc.php";
    // --Add validation file--
    require_once "./validations.inc.php";
    
    // If user clicks the login button
    if(isset($_POST["login-btn"])){
        // Get form input data
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $remember = $_POST["re-check"];

        // Input validation
        if(inputsEmptyLogin($email, $pass)){
            header("location: ../index.php?err=empty_inputs");
        }
        else if(emailInvalid($email)){
            header("location: ../index.php?err=invalid_email");
        }
        else if(passwordInvalid($pass)){
            header("location: ../index.php?err=invalid_password");
        }
        else{
            // If all inputs are error free
            loginUser($conn, $email, $pass, $remember);
        }
    }
    else{
        header("location: ../index.php");
        exit();
    }

    // Function for login
    function loginUser($conn, $email, $pass, $remember){
        // Query
        $sql = "SELECT * FROM users WHERE email = ?;";
        // Initialize the prepared statement
        $stmt = mysqli_stmt_init($conn);
        // Bind the statement with the query and check errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../index.php?err=failedstmt");
        }
        else{
            // Bind data with the statement
            mysqli_stmt_bind_param($stmt, "s", $email);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Save results if available
            $data = mysqli_stmt_get_result($stmt);
            // Check if there is at least one result
            if($row = mysqli_fetch_assoc($data)){
                // Get encrypted password
                $passHashed = $row["password"];
                // Verify password
                $isPassOk = password_verify($pass, $passHashed);
                if($isPassOk){
                    // Setup session variables
                    session_start();
                    $_SESSION["user_email"] = $row["email"];
                    $_SESSION["user_fname"] = $row["fname"];
                    $_SESSION["user_lname"] = $row["lname"];
                    $_SESSION["user_mobile"] = $row["mobile"];

                    // If remember me checked
                    if(isset($remember)){
                        // Create cookies for email and password
                        setcookie("emailcookie", $email, time() + (3600 * 24 * 7), "/");
                        setcookie("passwordcookie", $pass, time() + (3600 * 24 * 7), "/");
                    }
                    else{
                        // Destroy cookies value
                        if(isset($_COOKIE["emailcookie"])){
                            setcookie("emailcookie", "", time() - (3600 * 24 * 7), "/");
                        }
                        if(isset($_COOKIE["passwordcookie"])){
                            setcookie("passwordcookie", "", time() - (3600 * 24 * 7), "/");
                        }
                    }

                    header("location: ../profile.php");
                }
                else{
                    header("location: ../index.php?err=loginfailedpass");
                    exit();
                }
            }
            else{
                header("location: ../index.php?err=loginfailedemail");
                exit();
            }
        }
        // Close the statement
        mysqli_stmt_close($stmt);
    }
?>