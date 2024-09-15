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
        function getRemainder($x, $y): int {
            return $x % $y;
        }

        $x = -9;
        $y = 4;
        $result = getRemainder($x, $y);
        echo "Result: ".$result;
    ?>
</body>
</html>