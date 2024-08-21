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

        h1, h2 {
            border: 1px dashed green;
            padding: 4rem;
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
            echo STATUS;
            echo defined('STATUS'); //* returns true or false if a constant has been defined or not
            //* true is printed as 1 on the screen.

            const NAME = 'Chetan';
            echo NAME;
            //* Constants created with const are defined at compile time while 
            //* Constants created with define() are defined at run-time

            // if (true) {
            //!    const FOO = 'bar';
            // }

            //* const cannot be used inside a conditional block: 
            //* In PHP, the const keyword is used to define constants, but it must be
            //* declared in the global scope, not inside any functions, loops, or conditional 
            //* statements like if.
        ?>
    </p>

</body>
</html>