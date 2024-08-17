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
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php
        //* while
        echo "<pre>";
        echo "<h3> while() {} </h3>";
        $i = 0;
        while ($i < 20) {
            if ($i > 9) break; //? breaks out of a single loop
            echo "$i ";
            $i ++;
        }
        echo "<br>";
        $i = 0;
        while ($i < 20) {
            while (true) {
                if ($i > 10) break 2; //? breaks out of 2 loops
                echo "$i ";
                $i ++;
            }            
        }
        echo "</pre>";

        //* do-while
        echo "<pre>";
        echo "<h3>do {} while()</h3>";
        $i = 0;
        do {
            echo "$i ";
            $i ++;
        } while ($i < 10);
        echo "</pre>";

        //* for
        echo "<pre>";
        echo "<h3>for() {}</h3>";
        for ($i = 0; $i < 10; $i ++) {
            echo "$i ";
        }
        echo "</pre>";

        //* for-each
    ?>    
</body>
</html>