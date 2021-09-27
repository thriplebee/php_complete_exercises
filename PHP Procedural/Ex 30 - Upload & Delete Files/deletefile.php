<?php
    // Check URL
    if(isset($_GET['newname'])){
        // Set Path
        $path = "uploads/".$_GET['newname']."";
        // Delete the file
        if(unlink($path)){
            header('Location: index.php?delete=success');
            exit();
        }
        else{
            echo "Failed to delete";
            exit();
        }
    }
?>