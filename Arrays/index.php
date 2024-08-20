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
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-size: 2rem;
        }

        pre {
            border: 1px dashed green;
            padding: 4rem;
        }
    </style>
</head>
<body>
    <?php 
        /* $programmingLanguages = ["Java", "Python", "C ++"];
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
        echo "</pre>"; */

        // KEY => VALUE
        /* $programmingLanguages = [
            'PHP' => 8.0,
            'Java' => 21,
        ];

        echo "<pre>";
        print_r($programmingLanguages);
        echo "<br>".$programmingLanguages['PHP'];
        echo "</pre>"; */

        // Keys can only be Strings or Integers
        /*$array = [true => "Changes to 1", 1 => "Changes to String 1", '1' => "Already String 1", null => "null Changes to Empty String"];
        echo "<pre>";
        print_r($array);
        echo "</pre>"; */

        echo "<pre>";
        $array1 = ['a', 'b', 'c'];
        $array2 = ['1','2','3'];
        print_r(array_combine($array1, $array2));
        echo "</pre>";

        echo "<pre>";
        $array = [1, 2, 3, 4, 5, 6 , 7, 8];
        print_r(array_filter($array, function($v) { return $v % 2 === 0; }));
        echo "</pre>";
    ?>
</body>
</html>