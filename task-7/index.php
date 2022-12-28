<?php
include_once 'calculator.php';
?>
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
            text-align: right;

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
    <p>
    - Value 1 (text input) <br>
- Value 2 (text input) <br>
- Action (dropdown, options: Addition, Substraction, Multiplication, Division) <br> <br>
    </p>
    <br>
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
            <input name="result" type="text" placeholder="Output" value="<?php echo $result ?>" height="48">
        </section>
    </section>

</body>

</html>