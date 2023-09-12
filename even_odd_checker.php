<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <style>
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid skyblue;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .input-field {
            width: 100%;
            padding: 10px 2px;
            margin-bottom: 15px;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px 0px;
            background-color: skyblue;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
        }

        .result {
            margin-top: 20px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Even Odd Checker</h2>
        <form action="" method="post">
            <div>
                <input class="input-field" type="number" name="number" placeholder="Enter Your Number.." required>
            </div>
            <button type="submit">Check</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST['number'];

                if ($number % 2 == 0) {
                    echo "Your Number Even.";
                } else {
                    echo "Your Number Odd.";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>