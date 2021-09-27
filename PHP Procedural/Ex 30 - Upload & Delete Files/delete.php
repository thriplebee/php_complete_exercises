<?php
    // Check URL
    if(isset($_GET['name'])){
        $name = $_GET['name'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Uploaded File</title>
</head>
<body>
    <!-- Delete the uploaded file -->
    <form action="deletefile.php?newname=<?php echo $name; ?>" method="POST" enctype="multipart/form-data">
        <button type="submit" name="submit">Delete</button>
    </form>
</body>
</html>