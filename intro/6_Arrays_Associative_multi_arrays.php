<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array: Indexed and Associaive Array</h1>
    <?php

    echo "<h2> This is multi associative arrays </h2>";
    echo "<br>";
    echo "<br>";
    $mult_ass_array = [
        "Mark" => array(
            "Fruits" => array("Mango", "Cherry"),
            "Skills" => array("MySQL", "WEB DEV", "BASIC NETWORKING"),
            "Hobbies" => array("Coding (anysort)", "Journaling", "Reading", "Workout")
        ),
        "Jane" => array(
            "Fruits" => array("Melon", "Strawberry"),
            "Skills" => array("Javascript", "Cybersec", "Graphic art"),
            "Hobbies" => array("Badminton", "Dancing", "Social gathering")

        )
    ];

    echo "This is for printting mark";
    echo "<br>";
    echo $mult_ass_array["Mark"]["Skills"][0];


    echo "<br>";
    echo "<br>";
    $array1 = [
        "Mark" => "Programmer",
        "Jane" => "Software Developer",
        "Shosho" => "CEO",
        "Faith" => "DevOps"
    ];

    echo $array1["Mark"]; //Associative requires string to index
    echo "<br>";
    echo "<br>";

    echo count($array1); // Counts n of elements
    echo "<br>";
    echo "<br>";
    var_dump($array1); //Vardump / print_r

    echo "<br>";
    echo "<br>";
    array_push($array1, "Helllo");
    $array1["Shox"] = "Graphic Design"; //Adds element to the very end
    echo "<br>";
    print_r($array1); //print with less detailed
    $array2 = [
        "A",
        "B",
        "C",
        "D"
    ];

    echo "<br>";
    echo "<br>";

    echo "<br> This is";
    echo "<br>";
    array_push($array2, "E"); //Adds element to the very end
    print_r($array2);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<h2> This is for fruits </h2>";
    echo "<br>";
    echo "<br>";
    $fruits = ["Apple", "Banana", "Cherry"];

    array_splice($fruits, 0, 2, ["Melon", "Berry", "Papaya"]);
    echo "<br>";
    echo "<br>";
    array_merge($fruits, $array1);
    echo "<br>";
    echo "<br>";
    print_r($fruits);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";



    ?>

</body>

</html>