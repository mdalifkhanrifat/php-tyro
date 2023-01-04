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
                <label for="CGPA">Physics:</label>
            <input class="#" name="cgpa" type="number" step="0.1" placeholder="CGPA" width="48" height="48">
                <button class="input_box" type="submit" width="48" height="48"> = </button>
            </form>
        </section>
        <section>

        <?php

        echo 'Result: '.$grade;

        ?>
            
        </section>
      

    </section>

</body>

</html>