<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
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

        div {
            width: 40%;
            padding: 2rem;
            border: 1px dashed green;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <?php 

            echo "$_POST[name]";
        ?>
    </div>
</body>
</html>