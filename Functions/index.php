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

        // Telling PHP that the expected return type of this function is integer
        function returnInt(): int {
            return 1;
        }

        echo "<br>".returnInt();

        // Telling PHP that this function can return either null or an integer
        function returnNullOrInt(): ?int {
            return null;
        }

        echo "<br>".returnNullOrInt();

        // Telling PHP that this function can return integer, float or array
        function returnAnyOfThree(): int | float | array {
            // return 1; // OR
            // return 1.5; // OR
            return [1,2,3];
        }

        print_r(returnAnyOfThree());

        // Parameterized functions
        function foo($x, $y) {
            return $x + $y;
        }

        echo "<br>".foo(5, 10);
    ?>
</body>
</html>