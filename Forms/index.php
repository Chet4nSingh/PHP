<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
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

        div {
            width: 40%;
            padding: 2rem;
            border: 1px dashed green;
        }

        input {
            font-family: inherit;
            font-size: 2rem;
            padding: 1rem;
            padding-left: 2rem;
            background-color: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid green;
            color: green;
        }

        button {
            padding: 1rem;
            font-size: 2rem;
            background-color: green;
            color: black;
            outline: none;
            border: none;
            font-family: inherit;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>
</head>
<body>
    <div>
        <h2>Forms</h2>
        <form action="form_submit.php" method="POST">
            <label for="name">Name: </label><br>
            <input type="text" id="name" name="name" required>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>