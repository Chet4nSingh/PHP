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
        var_dump(+$x); //* We can change a value from string to integer by putting a plus or minus infront of it
        
        $x = 10;
        $y = 2;
        echo '<br>';
        var_dump($x / $y); //* value after division will always be float except when the answer is a whole number
        
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

        $x = 11;
        $y = 2;
        echo '<br>';
        var_dump($x <=> $y); 
        // 1, x > y
        // 0, x === y
        // -1, x < y

        $x = null;
        $y = $x ?? 'Hello'; // nullish coalescing operator
        // $y will only be equal to the value after ?? if $x is null
        echo '<br>';
        var_dump($y);
        
        $y = $x ?? 'Hello'; // here $x is not defined but instead of throwing an error $y is simply evaluated to 'Hello'
        echo '<br>';
        var_dump($y);

        $x = @file('file.txt'); // @ - error suppressing operator 
        // it just silences your application, doesn't fix any issues and we wouldn't even know if we had any issues in the first place

        // Arithmetic Operators
        $a = 10;
        $b = 5;

        echo $a + $b;  // Addition: 15
        echo $a - $b;  // Subtraction: 5
        echo $a * $b;  // Multiplication: 50
        echo $a / $b;  // Division: 2
        echo $a % $b;  // Modulus: 0
        echo $a ** $b; // Exponentiation: 100000

        // Assignment Operators
        $c = 10;
        $c += 5;  // Equivalent to $c = $c + 5;
        $c -= 5;  // Equivalent to $c = $c - 5;
        $c *= 5;  // Equivalent to $c = $c * 5;
        $c /= 5;  // Equivalent to $c = $c / 5;
        $c %= 5;  // Equivalent to $c = $c % 5;

        // Comparison Operators
        $d = 10;
        $e = "10";

        var_dump($d == $e);   // Equal: true (value is the same)
        var_dump($d === $e);  // Identical: false (type is different)
        var_dump($d != $e);   // Not equal: false (value is the same)
        var_dump($d !== $e);  // Not identical: true (type is different)
        var_dump($d > $e);    // Greater than: false
        var_dump($d < $e);    // Less than: false
        var_dump($d >= $e);   // Greater than or equal to: true
        var_dump($d <= $e);   // Less than or equal to: true
        var_dump($d <=> $e);  // Spaceship: 0 (equal)

        // Increment/Decrement Operators
        $f = 10;
        echo ++$f;  // Pre-increment: 11
        echo $f++;  // Post-increment: 11 (then $f becomes 12)
        echo --$f;  // Pre-decrement: 11
        echo $f--;  // Post-decrement: 11 (then $f becomes 10)

        // Logical Operators
        $g = true;
        $h = false;

        var_dump($g && $h);  // And: false
        var_dump($g || $h);  // Or: true
        var_dump(!$g);       // Not: false
        var_dump($g xor $h); // Xor: true

        // String Operators
        $str1 = "Hello ";
        $str2 = "World";

        echo $str1 . $str2;  // Concatenation: Hello World
        $str1 .= $str2;      // Concatenation assignment: $str1 = $str1 . $str2
        echo $str1;          // Outputs: Hello World

        // Array Operators
        $arr1 = array("a" => "apple", "b" => "banana");
        $arr2 = array("c" => "cherry", "d" => "date");

        $result = $arr1 + $arr2;  // Union of $arr1 and $arr2
        print_r($result);         // Outputs: Array ( [a] => apple [b] => banana [c] => cherry [d] => date )

        var_dump($arr1 == $arr2);    // Equality: false (compares key-value pairs)
        var_dump($arr1 === $arr2);   // Identity: false (compares key-value pairs and order)
        var_dump($arr1 != $arr2);    // Inequality: true
        var_dump($arr1 <> $arr2);    // Inequality: true
        var_dump($arr1 !== $arr2);   // Non-identity: true

        // Type Operators
        class MyClass {}
        $object = new MyClass();

        var_dump($object instanceof MyClass);  // Instanceof: true

        // Null Coalescing Operator
        $i = null;
        $j = $i ?? "default";  // If $i is null, use "default"
        echo $j;  // Outputs: default

        // Nullsafe Operator (PHP 8.0+)
        $object = null;
        $result = $object?->property;  // Avoids error, returns null if $object is null
        echo $result;  // Outputs: nothing (null)

    ?>
</body>
</html>