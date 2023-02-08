<?php
include_once 'fibonacci.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body class=" bg-gray-200">

    <section class=" min-h-[50%] max-h-[100%] flex items-center justify-center bg-gray-200">
        <section class="bg-white p-8 w-[32rem] relative inset-0 h-auto ">
            <section class="text-center">
                <form action="" method="GET">
                    <label for="value" class="block text-sm font-medium text-slate-700"><b>Value</b1></label>
                    <input class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" name="value" type="number" step="0.1" placeholder="value"> <br>
                    <input class="bg-red-600 text-white font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group" type="submit">
                </form>
            </section>
            <section>
                <a class="res">Result :</a>
            </section>
            <section class="relative px-6 py-4 border-t border-gray-200 scroll-smooth md:scroll-auto h-auto">

                <?php
                if (isset($_GET['value'])) {
                    $level =  $_GET['value'];
                } else {
                    $level = null;
                }
                if (is_numeric($level)) {
                    for ($i = 1; $i <= $level; $i++) {
                        echo '<section class="border rounded-lg p-1 bg-gray-200" >' . $i . '. Fibonacci number is ' . fibonacci($i) . '</section><br>';
                    }
                }
                ?>
            </section>
        </section>
    </section>

</body>

</html>