<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>

<body>

    <!-- String variables -->

    <?php
    // String operator

    $a = "Hello";
    $b = "World!";
    $c = $a . " bigass " . $b;

    echo $c;

    // Arithmetic operator
    // back tics
    echo "<br>";

    echo 1 + 1;


    // Assignment Operators
    // () ** * / + - %


    $a = 2;
    $a = $a + 8;

    $b = 4;
    echo "<br>";
    echo $a;


    // Comparison Operator ==(disregards datatype) === != !==   !true or true
    $c = 2;
    $d = "3";

    if ($c != $d) {
        echo "True";
    }


    // Logical Operatos  (and / && ) (or ||)

    if ($c != $d) {
        echo "True";
    }
    ?>



</body>

</html>