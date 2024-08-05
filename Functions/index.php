<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
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
        function greet() {
            return "Hello, Functions!";
        }

        $greet_var = greet();
        echo $greet_var;

        // Telling PHP that the expected return type of this function is int
        function returnInt(): int {
            return 1;
        }

        echo "<br>".returnInt();
    ?>
</body>
</html>