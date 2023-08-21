<!-- tells us this is the form handler inside the intro directory -->
<!-- This is pure PHP file -->

<!-- This  directory should not be accessed by the users that's
    why we separated this from public folder. -->

<?php

// // Output some data = datatype(number of char) "POST"
// var_dump($_SERVER["REQUEST_METHOD"]);

// // Output some data = "POST" 
// echo $_SERVER["REQUEST_METHOD"];



// If user access this page using REQ method that is == "POST"

// This has to be checked every single time to enfore security of the page
if ($_SERVER["REQUEST_METHOD"]) {

    //                  SECURE
    // htmlspecialchars - PHP built-in function that takes data 
    //                  and converts it to html entities that disables
    //                  the injection of the any sorts of code in side fields in the form
    //                  
    //                  anythings will not be picked as a code or any malicious code
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    // error handler
    // we want inputs to be complete

    if (empty($firstname)) {
        exit(header("Location: ../intro/2_Form_handling.php"));
    }

    echo "These are the data we get when form is submitted";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo   $favouritepet;


    //  - might do some certain things that might destroy the database
    //  - by injecting javascript


    //          GENERAL RULE OF THUMB  

    //          ALWAYS SANITIZE THE DATA THAT THE USER WAS ABLE TO SUBMIT
    //          DON'T TRUST THE DATA THEY JUST SUBMIT 


    // Once this file runs, it goes back the the header section
    //      because we don't want users to access this formhandler/developer's file

    exit(header("Location: ../intro/2_Form_handling.php"));
} else {

    // If anything, url will be directed to user
    exit(header("Location: ../intro/2_Form_handling.php"));
}

?>