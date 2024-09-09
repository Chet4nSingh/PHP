<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INT220</title>
    <style>
        body {
            font-family: monospace;
            background-color: #000;
            color: green;
            display: grid;
            /* grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr; */
            place-items: center;
            height: 100vh;
            margin: 0;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php
        /*
        $dir = scandir(__DIR__);
        print_r($dir);
        echo "<br>";
        echo is_file($dir[2])? "true": "false";
        */

        // Reading a file
        $content = file_get_contents('example.txt');
        echo $content;

        // Writing to a file
        file_put_contents('example.txt', 'Hello, World!');

        // Appending to a file
        file_put_contents('example.txt', 'Append this text.', FILE_APPEND);

        // Checking if a file exists
        if (file_exists('example.txt')) {
            echo 'File exists.';
        }

        // Deleting a file
        unlink('example.txt');

        // Creating a directory
        mkdir('new_directory');

        // Deleting a directory
        rmdir('new_directory');

        // Reading a directory
        $files = scandir('path_to_directory');
        print_r($files);

        // Renaming a file or directory
        rename('old_name.txt', 'new_name.txt');

        // Copying a file
        copy('source.txt', 'destination.txt');

        // Getting file information
        $fileInfo = pathinfo('example.txt');
        echo $fileInfo['dirname'];
        echo $fileInfo['basename'];
        echo $fileInfo['extension'];
        echo $fileInfo['filename'];

        // Checking if a file is readable/writable
        if (is_readable('example.txt')) {
            echo 'File is readable.';
        }

        if (is_writable('example.txt')) {
            echo 'File is writable.';
        }

        // Opening a file for reading
        $file = fopen('example.txt', 'r');
        while ($line = fgets($file)) {
            echo $line;
        }
        fclose($file);

        // Opening a file for writing
        $file = fopen('example.txt', 'w');
        fwrite($file, "Writing some text to the file.\n");
        fclose($file);

        // Reading a file line by line into an array
        $lines = file('example.txt');
        print_r($lines);

        // Getting the size of a file
        $fileSize = filesize('example.txt');
        echo $fileSize;

        // Moving a file
        rename('source.txt', 'new_directory/destination.txt');

        // include() example
        // Includes and evaluates the specified file. If the file is not found, a warning is emitted, but the script continues.

        include('header.php');  // Assuming 'header.php' exists, it will be included here
        echo "This is the main content of the page.";
        include('footer.php');  // Assuming 'footer.php' exists, it will be included here

        // If 'file_does_not_exist.php' does not exist, a warning will be issued, but the script will continue
        include('file_does_not_exist.php');
        echo "This will still be executed even if the include() fails.";

        // require() example
        // Similar to include(), but if the file is not found, it emits a fatal error and stops the script execution.

        require('header.php');  // If 'header.php' is not found, the script will stop
        echo "This is the main content of the page.";
        require('footer.php');  // If 'footer.php' is not found, the script will stop

        // If 'file_does_not_exist.php' does not exist, the script will stop, and the following code will not be executed
        require('file_does_not_exist.php');
        echo "This will NOT be executed if the require() fails.";


        // include_once() and require_once() examples
        // Ensures the file is included or required only once, even if called multiple times

        include_once('header.php');  // Will include the file only once
        require_once('footer.php');  // Will require the file only once
    ?>    
</body>
</html>