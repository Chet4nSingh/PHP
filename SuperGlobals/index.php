<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobals</title>
    <style>
        body {
            font-family: monospace;
            background-color: #000;
            color: green;
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php 
        echo "root: ".$_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo "self: ".$_SERVER["PHP_SELF"];
        echo "<br>";
        echo "serverName: ".$_SERVER["SERVER_NAME"];
        echo "<br>";
        echo "requestMethod: ".$_SERVER["REQUEST_METHOD"];

        // echo "getMethod: ".$_GET["name"];

        // OTHERS

        /* 
        $_GET[""];
        $_POST[""];
        $_SESSION[""];
        $_FILES[""];
        $_COOKIE[""];
        $_ENV[""]; 
        */
    ?>
</body>
</html>