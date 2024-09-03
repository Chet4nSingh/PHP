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
        /* 
        
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
        
        */

        // Current date and time
        echo date('Y-m-d H:i:s');  // Outputs: 2024-09-02 12:45:30 (example)

        // Current timestamp
        echo time();  // Outputs: 1693646730 (current Unix timestamp)

        // Formatting date and time
        echo date('l, F j, Y');  // Outputs: Monday, September 2, 2024

        // Creating a specific date and time
        $date = mktime(15, 20, 0, 9, 2, 2024);
        echo date('Y-m-d H:i:s', $date);  // Outputs: 2024-09-02 15:20:00

        // Converting a string to time
        $dateString = '2024-12-25 10:00:00';
        $timestamp = strtotime($dateString);
        echo date('Y-m-d H:i:s', $timestamp);  // Outputs: 2024-12-25 10:00:00

        // Adding days to a date
        $futureDate = strtotime('+7 days');
        echo date('Y-m-d', $futureDate);  // Outputs: 2024-09-09

        // Getting the difference between two dates
        $date1 = new DateTime('2024-09-01');
        $date2 = new DateTime('2024-09-10');
        $interval = $date1->diff($date2);
        echo $interval->days;  // Outputs: 9

        // Current time in a different timezone
        $dt = new DateTime('now', new DateTimeZone('America/New_York'));
        echo $dt->format('Y-m-d H:i:s');  // Outputs: 2024-09-02 08:45:30 (example in New York time)
        
    ?>    
</body>
</html>