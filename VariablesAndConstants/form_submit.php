<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
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

        h1, p {
            border: 1px dashed green;
            padding: 4rem;
        }

    </style>
</head>
<body>
    <p>
        <?php
            echo $_POST["name"];
        ?>
    </p>
</body>
</html>