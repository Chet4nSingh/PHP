<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <?php 
        // 1. Creating Arrays
        $arr = array(1, 2, 3);
        $arr = range(1, 5); // [1, 2, 3, 4, 5]

        // 2. Adding/Removing Elements
        array_push($arr, 4, 5); // Adds 4 and 5 to $arr
        $last = array_pop($arr); // Removes and returns the last element
        array_unshift($arr, 0); // Adds 0 to the start of $arr
        $first = array_shift($arr); // Removes and returns the first element

        // 3. Array Slicing and Merging
        $sliced = array_slice($arr, 1, 3); // Extracts a portion of the array
        $merged = array_merge($arr, [6, 7]); // Merges two arrays

        // 4. Searching Arrays
        $exists = in_array(3, $arr); // Checks if a value exists in an array
        $key = array_search(2, $arr); // Searches for a value and returns its key

        // 5. Filtering and Mapping
        $filtered = array_filter($arr, function($value) {
            return $value % 2 == 0; // Filters even numbers
        });
        $mapped = array_map(function($value) {
            return $value * 2; // Doubles each value
        }, $arr);

        // 6. Reducing Arrays
        $sum = array_reduce($arr, function($carry, $item) {
            return $carry + $item; // Sums up array values
        }, 0);

        // 7. Sorting Arrays
        sort($arr); // Sorts the array in ascending order
        rsort($arr); // Sorts the array in descending order
        asort($arr); // Sorts the array and maintains index association
        ksort($arr); // Sorts the array by key

        // 8. Array Keys and Values
        $keys = array_keys($arr); // Returns all the keys of the array
        $values = array_values($arr); // Returns all the values of the array

        // 9. Array Functions on Associative Arrays
        $flipped = array_flip($arr); // Flips keys and values
        $combined = array_combine(['a', 'b', 'c'], [1, 2, 3]); // Combines keys and values into an associative array

        // 10. Array Unique and Count
        $unique = array_unique([1, 2, 2, 3, 3]); // Removes duplicate values
        $count = count($arr); // Counts the number of elements in the array

        // 11. Array Sorting with Custom Functions
        usort($arr, function($a, $b) {
            return $a - $b; // Sorts the array using a custom comparison function
        });
        uasort($arr, function($a, $b) {
            return $a - $b; // Sorts and maintains index association using a custom function
        });
        uksort($arr, function($a, $b) {
            return strcmp($a, $b); // Sorts by key using a custom comparison function
        });

        // 12. Array Chunking
        $chunks = array_chunk($arr, 2); // Splits the array into chunks of two elements each

        // 13. Array Padding
        $padded = array_pad($arr, 5, 0); // Pads the array to a specified length with a value

        // 14. Array Intersection and Difference
        $intersect = array_intersect($arr, [1, 2, 3]); // Returns the intersection of arrays
        $diff = array_diff($arr, [1, 2]); // Returns the difference between arrays

        // 15. Array Column Extraction (for associative arrays)
        $data = [
            ['id' => 1, 'name' => 'Alice'],
            ['id' => 2, 'name' => 'Bob'],
            ['id' => 3, 'name' => 'Charlie']
        ];
        $names = array_column($data, 'name'); // Extracts the 'name' column

        // 16. Array Combining with Keys and Values
        $keys = ['a', 'b', 'c'];
        $values = [1, 2, 3];
        $combined = array_combine($keys, $values); // Combines arrays into an associative array

        // 17. Array Key Existence
        $exists = array_key_exists('a', $combined); // Checks if a key exists in an array

        // 18. Array Splicing
        array_splice($arr, 2, 1, [10, 11]); // Removes and replaces parts of an array

        // 19. Array Mapping Over Keys and Values
        $mapped = array_map(function($key, $value) {
            return $key . '-' . $value;
        }, array_keys($combined), array_values($combined)); // Maps over keys and values

        // 20. Array Walk
        array_walk($arr, function(&$value, $key) {
            $value = $value * 2; // Applies a function to each element
        });

        // 21. Array Reduction with Keys
        $result = array_reduce(array_keys($arr), function($carry, $key) use ($arr) {
            return $carry + $arr[$key];
        }, 0); // Reduces an array using both keys and values

        // 22. Array Reverse
        $reversed = array_reverse($arr); // Reverses the array

        // 23. Array Filling
        $filled = array_fill(0, 5, 'PHP'); // Fills an array with a specified value

        // 24. Array Filling Keys
        $keys = ['a', 'b', 'c'];
        $filledKeys = array_fill_keys($keys, 'PHP'); // Fills an array with keys and a specified value

        // 25. Array Filtering with Keys
        $filtered = array_filter($arr, function($value, $key) {
            return $key % 2 == 0; // Filters array by both key and value
        }, ARRAY_FILTER_USE_BOTH);

        // 26. Array Keys Case Change
        $lowercased = array_change_key_case($combined, CASE_LOWER); // Changes all keys to lowercase

        // 27. Array Random Elements
        $random = array_rand($arr, 2); // Picks one or more random keys from an array
        $randomValues = array_intersect_key($arr, array_flip($random)); // Gets the random values

        // 28. Array Reducing by Intersection
        $reducedIntersect = array_reduce(array_intersect($arr, [2, 3, 4]), function($carry, $item) {
            return $carry + $item;
        }, 0); // Reduces the intersection of arrays

        // 29. Array Unique with String Comparison
        $unique = array_unique(['a', 'A', 'b', 'B'], SORT_STRING); // Removes duplicates with case-insensitive comparison

        // 30. Array Serialization
        $serialized = serialize($arr); // Serializes the array for storage or transfer
        $unserialized = unserialize($serialized); // Unserializes the array back to its original form

    ?>
</body>
</html>