<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INT220</title>
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
        //* 1st CODE
        // echo "Hello PHP<br>";
        //* defines a constant
        /* define("WISHES", "Good Evening");
        echo "WISHES<br>";
        echo constant("WISHES"); */
        //* both are similar

        //* 2nd CODE
        /* define("courses", [
        "PHP",
        "HTML",
        "CSS"
        ]);
        echo courses[0]; */

        //* 3rd CODE
        /* const WISHES=array("PHP",
        "HTML",
        "CSS");  
        echo WISHES[0]; */

        //* 4th CODE
        define("WISHES", "Good Evening");
        function test() {
        echo WISHES;
        }
        test();

        $languages = [ 'C', 'C ++', 'PHP', 'JavaScript' ];
        echo "<br>".$languages[0];
    ?>
    
</body>
</html>