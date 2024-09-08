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
        // if statement
        $a = 10;
        if ($a > 5) {
            echo "$a is greater than 5";
        }

        // if-else statement
        $b = 3;
        if ($b > 5) {
            echo "$b is greater than 5";
        } else {
            echo "$b is not greater than 5";
        }

        // if-elseif-else statement
        $c = 8;
        if ($c > 10) {
            echo "$c is greater than 10";
        } elseif ($c == 8) {
            echo "$c is equal to 8";
        } else {
            echo "$c is less than 10";
        }

        // Nested if statements
        $d = 15;
        if ($d > 10) {
            if ($d < 20) {
                echo "$d is between 10 and 20";
            } else {
                echo "$d is greater than or equal to 20";
            }
        }

        // switch statement
        $day = "Monday";
        switch ($day) {
            case "Monday":
                echo "Today is Monday";
                break;
            case "Tuesday":
                echo "Today is Tuesday";
                break;
            case "Wednesday":
                echo "Today is Wednesday";
                break;
            default:
                echo "It's another day";
        }

        // Ternary operator
        $age = 18;
        $status = ($age >= 18) ? "Adult" : "Minor";
        echo $status;  // Outputs: Adult

        // Null coalescing operator
        $username = $_GET['user'] ?? 'Guest';  // If $_GET['user'] is not set, use 'Guest'
        echo "Hello, $username";

        // Short-circuiting with logical operators
        $loggedIn = true;
        $role = "admin";

        if ($loggedIn && $role == "admin") {
            echo "Welcome, Admin!";
        }

        // Match expression (PHP 8.0+)
        $number = 2;
        $result = match($number) {
            1 => "One",
            2 => "Two",
            3 => "Three",
            default => "Unknown number",
        };
        echo $result;  // Outputs: Two
    ?>
    
</body>
</html>