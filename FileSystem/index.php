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

    ?>    
</body>
</html>