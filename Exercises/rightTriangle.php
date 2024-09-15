<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
    <style>
        body {
            font-family: monospace;
            background-color: #000;
            color: white;
            padding: 4rem;
            height: 100vh;
            margin: 0;
            font-size: 2rem;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php 
        function rightTriangle($row): void {
            for ($i = 0; $i < $row; $i ++) {
                for ($j = 0; $j < $i + 1; $j ++) {
                    echo "* ";
                }
                echo "<br>";
            }
        }

        rightTriangle(16);
    ?>
</body>
</html>