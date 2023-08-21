<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <H1 id="h1">TEST</H1>
    <!--  echo htmlspecialchars($_SERVER["PHP_SELF"]) -->
    <!-- ..intro/form_handler.php -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="num1">Number one: </label>
        <input type="number" name="num1" id="num1">
        <br>
        <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <br>
        <label for="num2">Number two: </label>
        <input type="number" name="num2" id="num2">
        <button type="submit">submit

        </button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get data and sanitize
        $num01 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);





        // Error handling
        $error = false;

        if (empty($num01) || empty($num02) || empty($operator)) {


            $error = true;

            echo "<p>Error, please enter numbers</p>";
        } else {
            $ans = 0;
            switch ($operator) {
                case "+":
                    $ans = $num01 + $num02;
                    break;
                case "-":
                    $ans = $num01 - $num02;
                    break;
                case "*":
                    $ans = $num01 * $num02;
                    break;
                case "/":
                    $ans = $num01 / $num02;
                    break;
                default:
                    echo "Ooppps, somethine went wrong..";
            }
            echo "<p>Here is the result: $ans </p>";
            exit;
        }
    }
    ?>

    <!-- 
echo htmlspecialchars($_SERVER["PHP_SELF"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data and sanitize
    $num01 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
    $num02 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);





    // Error handling
    $error = false;

    if (empty($num01) || empty($num02)) {


        $error = true;
        header("Location: ../intro/ ");
        echo "<p>You need to input numbers</p>";
        exit;
    } else {
        $answer = $num01 + $num02;
        echo "Hello";
        echo $answer;
    }
}
 -->

</body>

</html>