<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
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
        $x = '10';
        var_dump(+$x); // We can change a value from string to integer by putting a plus or minus infront of it
        
        $x = 10;
        $y = 2;
        echo '<br>';
        var_dump($x / $y); // value after division will always be float except when the answer is a whole number
        
        $y = 3;
        echo '<br>';
        var_dump($x / $y);

    ?>
</body>
</html>