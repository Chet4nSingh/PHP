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
        function getFactorial($n): int {
            if ($n === 0 || $n === 1) return 1;
            return $n * getFactorial($n - 1);
        }

        $n = 5;
        $result = getFactorial($n);x: 
        echo "5!: ".$result;
    ?>
</body>
</html>