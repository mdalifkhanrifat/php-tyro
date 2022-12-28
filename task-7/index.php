<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .section_one_left {
            background-color: #fff;
            color: #000;
            height: 200px;
            width: 50%;
            float: left;
            text-align: center;

        }

        .section_one_right {
            background-color: #fff;
            color: #000;
            height: 200px;
            width: 50%;
            float: left;
            text-align: left;
        }

        .input_box {
            height: 20px;
            width: 48px;
        }
    </style>
</head>

<body>
    <h1>Question:</h1>
    <h2>Create a calculator with PHP. Collect input data through HTML form.</h2>
    <br>
    <br>

    <section>

        <section class="section_one_left">
            <form action="" method="GET">
                <input class="input_box" name="number1" type="number" placeholder="value 1" width="48" height="48">
                <select name="operation" id="#">
                    <option value="+">
                        <h1>+</h1>
                    </option>
                    <option value="-">
                        <h1>-</h1>
                    </option>
                    <option value="*">
                        <h1>*</h1>
                    </option>
                    <option value="/">
                        <h1>/</h1>
                    </option>
                    <option value="%">
                        <h1>%</h1>
                    </option>
                </select>
                <input class="input_box" name="number2" type="number" placeholder="value 2">
                <button class="input_box" type="submit" width="48" height="48"> = </button>
            </form>
        </section>

        <section class="section_one_right">
            <?php
            if (isset($_GET['number1'])) {
                $number1 = $_GET['number1'];
            } else {
                $number1 = 0;
            }

            if (isset($_GET['number2'])) {
                $number2 = $_GET['number2'];
            } else {
                $number2 = 0;
            }

            if (isset($_GET['operation'])) {
                $operation = $_GET['operation'];
            } else {
                $operation = '+';
            }

            if (is_numeric($number1) && is_numeric($number1)) {
                if ($operation === '+') {
                    $result = $number1 + $number2;
                } elseif ($operation === '-') {
                    $result = $number1 - $number2;
                } elseif ($operation === '*') {
                    $result = $number1 * $number2;
                } elseif ($operation === '/') {
                    $result = $number1 / $number2;
                } elseif ($operation === '%') {
                    $result = $number1 % $number2;
                } else {
                    $result = 0;
                }
            } else {
                $result = "input must be numeric";
            }

            ?>
            <input name="result" type="text" placeholder="Output" value="<?php echo $result ?>" height="48">
        </section>

    </section>

</body>

</html>