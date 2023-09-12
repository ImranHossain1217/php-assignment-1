<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            background-color: indigo;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .input-field {
            width: 100%;
            padding: 10px 2px;
            margin-bottom: 10px;
            outline: none;
        }

        .select-field {
            width: 100%;
            padding: 10px 0px;
            text-align: center;
            font-size: 18px;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            background-color: indigo;
            padding: 10px 2px;
            color: white;
            font-size: 16px;
            font-weight: 600;
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
        <h2>Simple Calculator</h2>
        <form action="" method="post">
            <div>
                <input class="input-field" type="number" name="num1" placeholder="Enter First Number" required>
            </div>
            <div>
                <input class="input-field" type="number" name="num2" placeholder="Enter First Number" required>
            </div>
            <select name="operation" class="select-field">
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
            </select>
            <br>
            <button type="submit">Calculate</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                switch ($operation) {
                    case 'addition':
                        $result = $num1 + $num2;
                        echo "Result: {$result}";
                        break;
                    case 'subtraction':
                        $result = $num1 - $num2;
                        echo "Result: {$result}";
                        break;
                    case 'multiplication':
                        $result = $num1 * $num2;
                        echo "Result: {$result}";
                        break;
                    case 'division':
                        if ($num1 != 0) {
                            $result = $num1 / $num2;
                            echo "Result: {$result}";
                        } else {
                            echo "You can not Divide by Zero";
                        }
                        break;

                    default:
                        echo "Enter Two Number";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>