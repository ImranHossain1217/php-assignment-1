<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border: 1px solid indigo;
            border-radius: 10px;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .input-field,
        .select-item {
            width: 100%;
            padding: 10px 0px;
            margin-bottom: 10px;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px 0px;
            color: white;
            background-color: indigo;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 18px;
        }

        .result {
            margin-top: 20px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Temperature Converter</h2>
        <form action="" method="post">
            <input type="number" name="number" placeholder="Enter Number" class="input-field" required>
            <br>
            <select name="operation" class="select-item">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
            </select>
            <br>
            <button>Convert</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST['number'];
                $operation = $_POST['operation'];
                switch ($operation) {
                    case 'celsius':
                        $result = ($number - 32) * (5 / 9);
                        echo "Celsius: {$result}°C";
                        break;
                    case 'fahrenheit':
                        $result = ($number * 9 / 5) + 32;
                        echo "Fahrenheit: {$result}°F";
                        break;
                    default:
                        echo "Please enter a number.";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>