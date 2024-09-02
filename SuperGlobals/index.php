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
        /* echo "root: ".$_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo "self: ".$_SERVER["PHP_SELF"];
        echo "<br>";
        echo "serverName: ".$_SERVER["SERVER_NAME"];
        echo "<br>";
        echo "requestMethod: ".$_SERVER["REQUEST_METHOD"]; */

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

        
        // $_GET example
        echo $_GET['name'];  // Assuming the URL is: example.com/page.php?name=John

        // $_POST example
        echo $_POST['username'];  // Assuming the form method is POST with a field named 'username'

        // $_REQUEST example
        echo $_REQUEST['email'];  // Works with both GET and POST methods

        // $_SERVER example
        echo $_SERVER['HTTP_USER_AGENT'];  // Returns the user-agent of the browser
        echo $_SERVER['SERVER_NAME'];      // Returns the server name
        echo $_SERVER['REQUEST_METHOD'];   // Returns the request method (GET, POST, etc.)

        
    ?>

</body>
</html>