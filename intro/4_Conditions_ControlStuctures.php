<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Conditions and control structure</h4>
    <!-- 

        conditional achitectures and their functions 

        match = (Strict type) this is similar to switch but the
                return value is stored in a variable

        switch = 1 variable checks different value
                (Loose type) this conditional structure
                does not require to return a value
                and does requires break keyworkd thus
                making multiple commans
        
        if-else = allows logical operators 
     -->
    <?php

    $bool = true;
    $a = "1";
    $b = 4;

    // follows strict comparison
    $result = match ($a) {
        1 => "Variable is equal to 1",
        2 => "Variable is equal to 2",
        "1", 3, 4, 5, 7 => "Variable is equal to odd",
        default => "nothing matches"
    };

    echo "This is match conditional <br>";
    echo $result;
    echo "<br><br><br><br><br>";

    echo "This is if-else conditional <br>";
    // Checks conditions for different variables with different values / data types
    if ($a < $b) {
        echo "This is true";
    } else if ($bool) {
        echo "Tho";
    }

    echo "<br> <br> This is switch <br> <br>";


    // checks condition for single variable with different values
    switch ($a) {
        case 2:
            echo "this is 2";
            break;
        case 1:
            echo "hello this is 1";
            break;
        default:
            echo "this is invalid";
    }


    ?>
</body>

</html>