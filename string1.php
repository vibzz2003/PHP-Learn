<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //big diff between single and double quotes
    //double quotes process special characters, single quotes do not
    //when there is a varibale in the string, it returns the value of the variable
    $a = 5;
    echo"the value of a is: $a";

    //single quotes cannot do this
    echo strlen("Hello World");//returns the length of string

    echo str_word_count("hello world i m vibhor")//returns the number of words

    //strpos() function searches the specific word in a string
    //if the word is found, then it returns the character positiion, otherwise it returns false

    echo strpos("Hello World", "World");
    //returns 6 - the first character position in the string
    // the first character position is 0 not 1

    
    ?>
</body>
</html>