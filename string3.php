<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //concatenate the strings using .
    $x = "Hello";
    $y = "World";
    $z = $x . $y;
    echo $z;

    $w = $x . " " . $y;
    echo $w;

    $u = "$x $y";//space added, if space between variables in double quotes is there
    echo $u;

    //we can return a range of characters by usign substr() fucntion
    // we have to specify the startindex and the number of characters which we want to return
    $a = "Hello World!";
    echo substr($a, 6, 5); //start the slicing at index 6 and slice 5 position later
    //returns World
    echo substr($a, 6); //returns World!
    echo substr($a, -5, 3);//slices from the reverse
    //returns orl
    //last index has index -1
    echo substr($a, 5, -3);//starts from index 5, till the charcter at index -3

    ?>
</body>
</html>