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

        echo '<br>';
        var_dump(fdiv($x, 0)); // to avoid getting an error because of division by zero we use fdiv();
        
        echo '<br>';
        var_dump(fmod(4.5, 1.2)); // without fmod 4.5 % 1.2 will return 0 which is not the right value
        // fmod() is used to perform modulus operation between two float values

        $x = 11;
        $y = -2;
        echo '<br>';
        var_dump($x % $y); // 1
        // here the sign is taken from the no. that we are dividing (11) which is +ve, so the answer is +ve

        $x = -11;
        $y = 2;
        echo '<br>';
        var_dump($x % $y); // 1
        // here the sign is taken from the no. that we are dividing (-11) which is -ve, so the answer is -ve
    ?>
</body>
</html>