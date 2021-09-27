<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Uploading</title>
</head>
<body>
    <!-- Upload files and images to website root folder -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <!-- 'enctype' sttribute for file uploading -->
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>