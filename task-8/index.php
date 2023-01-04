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
        <style>
input[type=text], select {
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
            <input class="#" name="gpa" type="number" step="0.1" placeholder="CGPA">
                <button class="input_box" type="submit"> = </button>
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