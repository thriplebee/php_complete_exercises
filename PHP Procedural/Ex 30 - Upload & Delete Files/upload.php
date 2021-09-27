<?php
    if(isset($_POST['submit'])){
        // ----$_FILES = Get all information of the file which form can submit----
        // $file = $_FILES['file'];
        // print_r($file); 

        // Seperate all information stored in that array
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name']; // Temporary location
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type']; 

        // echo $fileName.'<br>';
        // echo $fileTmpName.'<br>';
        // echo $fileSize.'<br>';
        // echo $fileError.'<br>';
        // echo $fileType.'<br>';

        // Seperate the extention from the file name
        $fileExt = explode('.',$fileName);
        // print_r($fileExt);

        // Convert file extention to lower case
        $fileActualExt = strtolower($fileExt['1']);

        // File types that we allow
        $allowed = array('jpg', 'jpeg', 'png');

        // Validation
        // Check if file extention is inside of that array
        if(in_array($fileActualExt, $allowed)){
            // Check the file errors
            if($fileError === 0){
                // Check the file size
                if($fileSize < 1000000){
                    // Create unique id name to avoid file overwrite
                    // This 'uniqid' function generate a random nuber based on current time format in micro seconds
                    $fileNewName = uniqid('',true).".".$fileActualExt;

                    // Actual upload destination of the file
                    $filDest = 'uploads/'.$fileNewName;

                    // Move the file from temp loaction to actual location
                    move_uploaded_file($fileTmpName, $filDest);
                    
                    header('Location: delete.php?upload=success&name='.$fileNewName.'');
                }
                else{
                    echo 'File is too big';
                }
            }
            else{
                echo 'There is an error related to your file';
            }
        }
        else{
            echo 'You cannot uploat this tyoe of files';
        }
    }
?>