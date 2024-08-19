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
            min-height: 100vh;
            margin: 0;
            font-size: 2rem;
        }

        pre {
            padding: 4rem;
            border: 1px dashed green;
        }
    </style>
</head>
<body>
    <?php
        $currentTime = time();
        echo $currentTime; //* Today
        echo "<br>";
        echo $currentTime + 5 * 24 * 60 * 60; //* 5 days later
        echo "<br>";
        echo $currentTime - 24 * 60 * 60; //* Yesterday
        echo "<br>";
        
        echo date('d/m/Y g:ia')."<br>";
        echo date('d/m/Y g:ia', $currentTime + 5 * 24 * 60 * 60)."<br>";
        echo date('d/m/Y g:ia', $currentTime - 24 * 60 * 60)."<br>";
        
        date_default_timezone_set('UTC');
        echo date('d/m/Y g:ia')."<br>";
        echo date('d/m/Y g:ia', $currentTime + 5 * 24 * 60 * 60)."<br>";
        echo date('d/m/Y g:ia', $currentTime - 24 * 60 * 60)."<br>";
    ?>    
</body>
</html>