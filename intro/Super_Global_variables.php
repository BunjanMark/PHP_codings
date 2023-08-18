<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Display the root folder of the file

    echo $_SERVER["DOCUMENT_ROOT"];

    echo "<br>";

    // Display the file path of this code/ php file
    echo $_SERVER["PHP_SELF"];

    echo "<br>";


    // Name of the server (Which is local)
    echo $_SERVER["SERVER_NAME"];

    echo "<br>";

    // displays how this pages is accessed 

    // GET / POST / PUT / DELETE
    echo $_SERVER["REQUEST_METHOD"];

    // $_GET[""];
    // $_POST[""];
    // $_REQUEST[""];
    // $_FILES[""];
    // $_COOKIE[""];
    // $_SESSION[""];
    // $_ENV[""];
    ?>
</body>

</html>