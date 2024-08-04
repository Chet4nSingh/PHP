<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        body {
            font-family: monospace;
            background-color: #000;
            color: green;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
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
        $programmingLanguages = ["Java", "Python", "C ++"];
        echo "<pre>";
        print_r($programmingLanguages);
        echo "</pre>";

        // Pushing new element at the end of array
        $programmingLanguages[] = "JavaScript";
        echo "<pre>";
        print_r($programmingLanguages);
        echo "</pre>";

        // Pushing multiple new elements at the end of array
        array_push($programmingLanguages, "C", "Go");
        echo "<pre>";
        print_r($programmingLanguages);
        echo "</pre>";
    ?>
</body>
</html>