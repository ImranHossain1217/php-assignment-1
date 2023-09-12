<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparesion Tool</title>
    <style>
        body {
            background-color: gray;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 30px;
            border: gray;
            border-radius: 10px;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .input-field {
            width: 100%;
            padding: 10px 2px;
            margin-bottom: 10px;
        }

        button {
            background-color: darkblue;
            padding: 10px 0px;
            width: 100%;
            color: white;
            font-size: 16px;
            font-weight: 500;
            border: none;
            border-radius: 10px;
        }

        .result {
            margin-top: 20px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Comparesion Tool</h2>
        <form action="" method="post">
            <div>
                <input class="input-field" type="number" name="num1" placeholder="Enter First Number" required>
            </div>
            <div>
                <input class="input-field" type="number" name="num2" placeholder="Enter Second Number" required>
            </div>
            <button type="submit">Check Large Number</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                $largeNumber = ($num1 > $num2) ? "Large Number: {$num1}" : "Large Number: {$num2}";
                echo $largeNumber;
            }
            ?>
        </div>
    </div>
</body>

</html>