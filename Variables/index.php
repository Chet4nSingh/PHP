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
    <h1><?= 'Hello World' ?></h1> //* for printing one liners
    <h2>
        <?php
            echo "Hello World"; //! We will get Parse Error without semicolon      
            echo "<br>Hello", " ", "World"; 
            echo "<br>Hello"." "."World";
            echo "<br>Joe's Invoice"; 
            echo '<br>Joe\'s Invoice'; 
        ?>
    </h2>
</body>
</html>