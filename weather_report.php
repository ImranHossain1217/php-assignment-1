<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather Report</title>
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

    .input-field {
      width: 100%;
      padding: 10px 2px;
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
      font-weight: 600;
      font-size: 16px;
    }

    .result {
      margin-top: 20px;
      font-size: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Weather Report</h2>
    <form action="" method="post">
      <div>
        <input class="input-field" type="number" name="temparature" placeholder="Enter Temperature.." required>
      </div>
      <button type="submit">Weather Report</button>
    </form>
    <div class="result">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temparature = $_POST['temparature'];

        if ($temparature > 25) {
          echo "It's warm.🥵";
        } elseif ($temparature > 15 && $temparature < 25) {
          echo "It's Cool.😰";
        } else {
          echo "It's Freezing.🥶";
        }
      }
      ?>
    </div>
  </div>
</body>

</html>