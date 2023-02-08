<?php
include_once 'gpaCalculator.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input[type=number],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        section {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        .output {

            background-color: #77BFC7;
            color: white;
            text-align: center;

        }

        .res {
            background-color: #77BFC7;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            text-align: center;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    </style>
    </style>
</head>

<body>

    <section>
        <section class="section_one_left">
            <form action="" method="GET">
                <select name="operation" id="#">
                    <option value="JSC">
                        <h1>JSC</h1>
                    </option>
                    <option value="SSC">
                        <h1>SSC</h1>
                    </option>
                    <option value="HSC">
                        <h1>HSC</h1>
                    </option>
                    <option value="Graduation">
                        <h1>Graduation</h1>
                    </option>
                    <option value="Masters">
                        <h1>Masters</h1>
                    </option>
                </select>
                <label for="gpa">CGPA:</label>
                <input class="" name="gpa" type="number" step="0.1" placeholder="CGPA">
                <input class="" type="submit">
            </form>
        </section>
        <section>
            <a class="res">Result</a>
        </section>
        <section class="output">

            <?php echo '<b>' . $grade . '</b>'; ?>

        </section>


    </section>

</body>

</html>