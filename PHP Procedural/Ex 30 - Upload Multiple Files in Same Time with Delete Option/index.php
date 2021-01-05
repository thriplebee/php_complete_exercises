<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple File Uploading</title>
    <style>
        /* ---Form upload--- */
        body > form{
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: yellow;
        }

        /* ---Image display--- */
        body > div{
            max-width: 70%;
            margin: 10px auto;
            padding: 0px 10px;
            background: pink;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        /* Image card */
        body > div > div{
            margin: 10px;
        }

        /* Image */
        body > div > div > img{
            max-width: 250px;
        }

        /* ---Responsive--- */
        @media(max-width: 380px){
            body > div{
                max-width: 85%;
            }
        }

    </style>
</head>
<body>
    <!-- Image upload form -->
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <button name="upload">Upload</button>
    </form>

    <?php
        // Upload multiple images
        if(isset($_POST['upload'])){
            // ----Print the information of uploaded files----
            // echo '<pre>';
            // print_r($_FILES['files']);
            // echo '</pre>';

            // Move uploaded files into the 'uploads' folder
            foreach($_FILES['files']['name'] as $index => $name){
                // echo $index.' | '.$name.'<br>';
                if(move_uploaded_file($_FILES['files']['tmp_name'][$index], 'uploads/'.$name)){
                    echo 'Succesfully uploaded '.$name.'<br>';
                }
                else{
                    echo 'Error while uploading!';
                }
            }
        }

        // Display image delete message
        if(isset($_GET['delete'])){
            echo 'Succesfully deleted '.$_GET['delete'];
        }
    ?>

    <!-- Display uploaded images -->
    <div>
        <!-- Fetch uploaded images and display them -->
        <?php
            // Get all images of the directory
            $path = 'uploads/*.*';
            $allImages = glob($path);
            // print_r($allImages);

            // Display images with a delete button
            for($i = 0; $i < count($allImages); $i++){
                echo '<div>
                    <img src='.$allImages[$i].'>
                    <form action="delete.php?imname='.$allImages[$i].'" method="POST">
                        <button type="submit" name="delete">Delete</button> 
                    </form>
                </div>';
            }
        ?>
    </div>
</body>
</html>