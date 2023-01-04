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
                <button class="input_box" type="submit" width="48" height="48"> = </button>
            </form>
        </section>
        <section>
            <?php





            if ($operation == "SSC" || $operation == "HSC") {
                echo '<section><form action="" method="GET">
               <select name="operation2" id="#">
                   <option value="Science">
                       <h1>Science</h1>
                   </option>
                   <option value="Arts">
                       <h1>Arts</h1>
                   </option>
                   <option value="Commerce">
                       <h1>Commerce</h1>
                   </option>
               </select>
               <button class="input_box" type="submit" width="48" height="48"> = </button>
           </form> </section>';
            }



            if ($operation2 === "Science") {
                echo 'Science' . PHP_EOL;
                echo '<form action="" method="GET">
                <label for="Physics">Physics:</label>
            <input class="#" name="Physics" type="number" step="0.1" placeholder="marks" width="48" height="48">
            <label for="Chemistry">Chemistry:</label>
            <input class="#" name="Chemistry" type="number" step="0.1" placeholder="marks" width="48" height="48">
            <label for="Biology">Biology:</label>
            <input class="#" name="Biology" type="number" step="0.1" placeholder="marks" width="48" height="48">
            <button class="input_box" type="submit" width="48" height="48"> = </button>
            </form>
            ';
            } else if ($operation2 === "Commerce") {
                echo 'commerce' . PHP_EOL;
                echo '<form action="" method="GET">
            <input class="#" name="Finance" type="text" placeholder="Bangla" width="48" height="48">
            <input class="#" name="Accounting" type="text" placeholder="English" width="48" height="48">
            <input class="#" name="Business" type="text" placeholder="Math" width="48" height="48">
            <button class="input_box" type="submit" width="48" height="48"> = </button>
            </form>
            ';
            } else if ($operation2 === "Arts") {
                echo 'Arts' . PHP_EOL;
                echo '<form action="" method="GET">
            <input class="#" name="Geography" type="text" placeholder="Bangla" width="48" height="48">
            <input class="#" name="Civic" type="text" placeholder="English" width="48" height="48">
            <input class="#" name="History" type="text" placeholder="Math" width="48" height="48">
            <button class="input_box" type="submit" width="48" height="48"> = </button>
            </form>
            ';
            }

            if ($operation === "Graduation") {
                echo 'Graduation' . PHP_EOL;
                echo ' <form action="" method="GET">
                <input class="#" name="sub1" type="text" placeholder="Bangla" width="48" height="48">
                <input class="#" name="sub2" type="text" placeholder="English" width="48" height="48">
                <input class="#" name="sub3" type="text" placeholder="Math" width="48" height="48">
                <button class="input_box" type="submit" width="48" height="48"> = </button>
                </form>
                    ';
            }

            if ($operation === "Masters") {
                echo 'Masters' . PHP_EOL;
                echo ' <form action="" method="GET">
                <input class="#" name="bangla" type="text" placeholder="Bangla" width="48" height="48">
                <button class="input_box" type="submit" width="48" height="48"> = </button>
                </form>
                    ';
            }


            if ($operation === "JSC") {
                echo 'jSC' . PHP_EOL;
                echo '<form action="" method="GET">
                <input class="#" name="Bangla" type="text" placeholder="Marks" width="48" height="48">
                <input class="#" name="English" type="text" placeholder="Marks" width="48" height="48">
                <input class="#" name="Mathematics" type="text" placeholder="Marks" width="48" height="48">
                <input class="#" name="Science" type="text" placeholder="Marks" width="48" height="48">
                <input class="#" name="Religions" type="text" placeholder="Marks" width="48" height="48">
                <input class="#" name="Bangladesh_Global" type="text" placeholder="Marks" width="48" height="48">
                <input class="#" name="Information_Technology" type="text" placeholder="Marks" width="48" height="48">
                <button class="input_box" type="submit" width="48" height="48"> = </button>
                </form>
                    ';
            }

            if($Chemistry >= 1)
            {
                
                echo "Hello";
                echo $grade['Chemistry'];
            }

            ?>
        </section>
        <?php
        

        ?>

    </section>

</body>

</html>