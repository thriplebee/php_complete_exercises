<?php
    // Delete selected image
    if(isset($_POST['delete'])){
        // Cehck URL
        if(isset($_GET['imname'])){
            // Set Path
            $path  = $_GET['imname'];
            // Delete the file
            if(unlink($path)){
                header('Location: index.php?delete='.explode("/",$path)[1].'');
                exit();
            }
            else{
                echo 'Failed to delete';
                exit();
            }
        }
    }
?>