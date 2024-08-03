<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            display: grid;
            place-items: center;
            margin: 0;
            height: 100vh;
            font-family: sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $name = "Dark Matter.";
        $read = false;
        
        if ($read) {
            $message = "You have read $name";
        } else {
            $message = "You have NOT read $name";
        }
     ?>
    <h1><?= $message ?></h1>
</body>
</html>