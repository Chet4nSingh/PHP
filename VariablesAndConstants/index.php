<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
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

        h1, p, form {
            border: 1px dashed green;
            padding: 4rem;
        }

        input {
            font-size: 2rem;
            padding: 0.5rem 1rem;
            outline: none;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid green;
            color: green;
            font-family: inherit;
        }

    </style>
</head>
<body>
    <h1><?= 'Hello World' ?></h1> <!--//* for printing one liners-->
    <p>
        <?php
            echo "Hello World"; //! We will get Parse Error without semicolon      
            echo "<br>Hello", " ", "World"; 
            echo "<br>Hello"." "."World";
            echo "<br>Joe's Invoice"; 
            echo '<br>Joe\'s Invoice'; 
        ?>
    </p>
    <p>
        <?php
            define('STATUS','paid'); //* no need for $ when defining constants            
            echo "<br>".STATUS;
            echo "<br>".defined('STATUS'); //* returns true or false if a constant has been defined or not
            //* true is printed as 1 on the screen.

            const NAME = 'Chetan';
            echo "<br>".NAME;
            //* Constants created with const are defined at compile time while 
            //* Constants created with define() are defined at run-time

            // if (true) {
            //     define('FOO', 'bar'); //* correct way to define constants in an if block
            //!    const FOO = 'bar';
            // }

            //* const cannot be used inside a conditional block: 
            //* In PHP, the const keyword is used to define constants, but it must be
            //* declared in the global scope, not inside any functions, loops, or conditional 
            //* statements like if.
        ?>
    </p>
    <!-- <form action="form_submit.php" method="POST">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name">                     
        </div>
        <button>Submit</button>           
    </form> -->

    <?php
        // Variables in PHP
        $greeting = "Hello, World!";
        $number = 42;
        $is_logged_in = true;
        $price = 19.99;

        echo $greeting;  // Outputs: Hello, World!
        echo $number;    // Outputs: 42
        echo $is_logged_in;  // Outputs: 1 (true)
        echo $price;     // Outputs: 19.99

        // Variable types
        $string = "This is a string";
        $integer = 100;
        $float = 10.5;
        $boolean = false;
        $array = array(1, 2, 3);
        $nullVar = null;

        // Variable variables
        $varName = "example";
        $$varName = "Variable variable";
        echo $example;  // Outputs: Variable variable

        // Constants in PHP
        define("SITE_NAME", "MyWebsite");
        define("PI", 3.14159);

        echo SITE_NAME;  // Outputs: MyWebsite
        echo PI;         // Outputs: 3.14159

        // Constants with case-insensitive names (Deprecated in PHP 7.3+)
        define("GREETING", "Hello!");
        echo GREETING;  // Outputs: Hello!

        // Constant arrays (PHP 7.0+)
        define("COLORS", ["Red", "Green", "Blue"]);
        echo COLORS[0];  // Outputs: Red

        // Magic constants
        echo __FILE__;  // Outputs: The full path of the file
        echo __DIR__;   // Outputs: The directory of the file
        echo __LINE__;  // Outputs: The current line number in the file

        // Class constants
        class MyClass {
            const VERSION = 1.0;
        }

        echo MyClass::VERSION;  // Outputs: 1.0

        // PHP 7.4+ Constant visibility in classes
        class AnotherClass {
            public const PUBLIC_CONST = "Public";
            protected const PROTECTED_CONST = "Protected";
            private const PRIVATE_CONST = "Private";
        }

        echo AnotherClass::PUBLIC_CONST;  // Outputs: Public
    ?>


</body>
</html>