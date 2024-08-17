<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
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
        $score = 95;
        if ($score >= 95) echo "<h1>Grade: A</h1>";
        else if ($score >= 75) echo "<h1>Grade: B</h1>";
        else if ($score >= 55) echo "<h1>Grade: C</h1>";
        else if ($score >= 35) echo "<h1>Grade: D</h1>";
        else echo "<h1>Grade: E</h1>";
    ?>    
</body>
</html>