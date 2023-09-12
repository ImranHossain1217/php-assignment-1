<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid gray;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .input-field {
            width: 100%;
            padding: 10px 2px;
            margin-bottom: 10px;
            outline: none;
        }

        button {
            width: 100%;
            background-color: black;
            color: white;
            padding: 10px 0px;
            font-size: 16px;
            font-weight: 600;
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
        <h2>Grade Calculator</h2>
        <form action="" method="post">
            <div>
                <input class="input-field" type="number" name="num1" placeholder="Enter First Score" required>
            </div>
            <div>
                <input class="input-field" type="number" name="num2" placeholder="Enter Second Score" required>
            </div>
            <div>
                <input class="input-field" type="number" name="num3" placeholder="Enter Third Score" required>
            </div>
            <button type="submit">Generate Grade</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                $avarage = $num1 + $num2 + $num3;

                if ($avarage >= 240 && $avarage <= 300) {
                    echo "Your Avarage: {$avarage} <br>";
                    echo "Your Grade: A";
                } elseif ($avarage >= 210 && $avarage < 240) {
                    echo "Your Avarage: {$avarage} <br>";
                    echo "Your Grade: B";
                } elseif ($avarage >= 165 && $avarage < 210) {
                    echo "Your Avarage: {$avarage} <br>";
                    echo "Your Grade: C";
                } elseif ($avarage >= 120 && $avarage < 165) {
                    echo "Your Avarage: {$avarage} <br>";
                    echo "Your Grade: D";
                } else {
                    echo "Your Avarage: {$avarage} <br>";
                    echo "Your Grade: F";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>