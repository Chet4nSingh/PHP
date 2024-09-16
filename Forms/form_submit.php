<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <style>
        :root {
            --TEXT-COLOR: purple;
        }

        body {
            font-family: monospace;
            background-color: #000;
            color: var(--TEXT-COLOR);
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-size: 2rem;
        }

        div {
            width: 40%;
            padding: 2rem;
            border: 1px dashed var(--TEXT-COLOR);
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <?php 

            echo "Name: $_POST[name]<br>";
            echo "Reg no.: $_POST[regno]"

        ?>
    </div>
</body>
</html>