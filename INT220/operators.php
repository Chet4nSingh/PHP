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
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-size: 2rem;
        }

        pre {
            border: 1px dashed green;
            padding: 4rem;
        }
    </style>
</head>
<body>
    <?php
        $year = 2020;
        echo "<pre>";
            if (($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0) echo "$year is a leap year.";
            else echo "$year is not a leap year.";
        echo "</pre>";

        echo "<pre>";
            $x = 5;
            $y = ~$x;
            echo "~5 = ".$y;
        echo "</pre>";
    ?>    
</body>
</html>