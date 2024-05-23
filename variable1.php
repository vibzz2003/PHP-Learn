<!DOCTYPE html>
<html lang="en">
<?php
$x = 5 /* + 15 */ + 5;
echo $x;

$y = 10; //the variable starts with a $ sign followed by the name of the variable
$z = "Name" //when u assign a text value to a variable, put the " " to the value

echo "I love $z"; //it will print that - I love Name
//or 
echo "I love" . $z . "!";//produces the same output

echo $x + $y; //produces 15

//php has no command for declaring a variable and the data type depends on the value of the variable
//php supports String, Integer, Float, Boolean, Array, Object, NULL, Resource

// to get the data type of the variable, use the var_dump() function

var_dump($x);

var_dump("JOHN");
var_dump("3.14");
var_dump(true);
var_dump([2,3,4]);
var_dump(NULL);

$a = $b = $c = "Fruit"; //multi value assign
?>
<body>
    
</body>
</html>