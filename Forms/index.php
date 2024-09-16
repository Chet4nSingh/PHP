<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <style>
        :root {
            --TEXT-COLOR: purple;
        }

        body {
            font-family: monospace;
            background-color: #000;
            color: var(--TEXT-COLOR);
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-size: 2rem;
        }

        div {
            width: 40%;
            padding: 2rem;
            border: 1px dashed var(--TEXT-COLOR);
        }

        input {
            font-family: inherit;
            font-size: 2rem;
            padding: 1rem;
            padding-left: 2rem;
            background-color: black;
            border: none;
            outline: none;
            border-bottom: 1px solid var(--TEXT-COLOR);
            color: var(--TEXT-COLOR);
        }

        button {
            padding: 1rem;
            font-size: 2rem;
            background-color: var(--TEXT-COLOR);
            color: black;
            outline: none;
            border: none;
            font-family: inherit;
            border: 1px solid var(--TEXT-COLOR);
            transition: 75ms;
        }

        button:hover {
            background-color: black;
            color: var(--TEXT-COLOR);
            border: 1px solid var(--TEXT-COLOR);
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
            <p>
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required>
            </p>
            <p>
                <label for="regno">Reg no.: </label>
                <input type="text" id="regno" name="regno" required>
            </p>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>