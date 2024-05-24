<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //modifying strings
    //strtoupper() function returns the string in upper case
    $x = "Hello Worlds";
    echo strtoupper($x);

    //strtolower() for lower case

    //str_replace() function replaces some characters with other characters in the string
    $y = "Hello World";
    echo str_replace("World", "Nona", $y);

    //strrev() to reverse string
    echo strrev($y);

    //trim() to remove whitespaces
    echo trim($y);

    //converting string to array
    //explode() to do this
    //the first parameter represents the "seperator"
    $a = "Hello my name is Vibhor";
    $b = explode(" ", $a);
    print_r($b);
    ?>
</body>
</html>