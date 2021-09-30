<?php
    // --Functions to validate inputs--

    // Check if register inputs are empty
    function inputsEmptyRegister($fname, $lname, $email, $mobile, $pass, $re_pass){
        $value;
        if(empty($fname) || empty($lname) || empty($email) || empty($mobile) || empty($pass) || empty($re_pass)){
            $value = true;
        }else{
            $value = false;
        }
        return $value;
    }

    // Check if login inputs are empty
    function inputsEmptyLogin($email, $pass){
        $value;
        if(empty($email) || empty($pass)){
            $value = true;
        }else{
            $value = false;
        }
        return $value;
    }

    // Check if names are invalid
    function nameInvalid($fname, $lname){
        $value;
        if(!preg_match("/^[a-zA-Z]+$/", $fname)){
            $value = true;
        }
        else if(!preg_match("/^[a-zA-Z]+$/", $lname)){
            $value = true;
        }
        else{
            $value = false;
        }
        return $value;
    }

    // Check if email is invalid
    function emailInvalid($email){
        $value;
        if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}$/", $email)){
            $value = true; 
        }
        else{
            $value = false;
        }
        return $value;
    }

    // Check if mobile is invalid
    function mobileInvalid($mobile){
        $value;
        if(!preg_match("/^[0][\d]{9}$/", $mobile)){
            $value = true; 
        }
        else{
            $value = false;
        }
        return $value;
    }

    // Check if password is invalid
    function passwordInvalid($pass){
        $value;
        if(!preg_match("/^.{5,}$/", $pass)){
            $value = true; 
        }
        else{
            $value = false;
        }
        return $value;
    }

    // Check if pass and re_pass aren't similar
    function passNotMatch($pass, $re_pass){
        $value;
        if($pass !== $re_pass){
            $value = true;
        }
        else{
            $value = false;
        }
        return $value;
    }

    // Check if email or mobile available in the system
    function emailOrMobileAvailable($conn, $email, $mobile){
        $value;
        // Query
        $sql = "SELECT * FROM users WHERE email = ? OR mobile = ?;";
        // Initialize the prepared statement
        $stmt = mysqli_stmt_init($conn);
        // Bind the statement with the query and check errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../index.php?err=failedstmt");
            exit();
        }
        else{
            // Bind data with the statement
            mysqli_stmt_bind_param($stmt, "si", $email, $mobile);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Save results if available
            $data = mysqli_stmt_get_result($stmt);
            // Check if there is at least one result
            if(!mysqli_fetch_assoc($data)){
                $value = false;
            }
            else{
                $value = true;
            }
        }
        // Close the statement
        mysqli_stmt_close($stmt);

        return $value;
    }
?>