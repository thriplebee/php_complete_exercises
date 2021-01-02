<?php
    // ------------File Handling-----------
    
    // ----Create a file----
    touch("sample.txt");
    touch("./file/sample.txt");


    // ----Delete a file----
    unlink("./file/sample.txt");


    // ----Create a folder----
    mkdir("sampledir");


    // ----Delete a folder----
    rmdir("sampledir");


    // ----Create a file in Append (a) mode and Write some data----
    $file = fopen("file.txt","a");
    fwrite($file, "ThripleBee");
    fwrite($file, "\nSubscribe Us!");
    fclose($file);


    // ----Read the file in Read (r) mode----
    $file = fopen("file.txt","r");
    while(!feof($file)){
        echo fgets($file).'<br>';
    }

    fclose($file);


    // ----Get file size of a file----
    echo filesize("file.txt").'<br>';


    // ----Check whether file is available or not----
    if(file_exists("file1.txt")){
        echo "File is available!"."<br>";
    }
    else{
        echo "File is not available!"."<br>";
    }


    // ----Create a file in Write (m) mode and Write some data using different function----
    $file = fopen("test.txt","w");
    fputs($file, 2000);
    fclose($file);


    // ----Write variable data into the file----
    $arr = file("test.txt");
    print_r($arr);
    $co = $arr[0];
    $co++;

    $file = fopen("test.txt","w");
    fputs($file, $co);
    fclose($file);

    echo '<br>'.$co;
?>