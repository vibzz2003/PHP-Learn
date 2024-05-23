<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $x = 5;

    function myTest(){
        //using x inside this will generate error
        echo"<p>Variable x inside the function is: $x</p>";
    }
    myTest();

    echo"<p>Variable x outside the function is: $x</p>";

    function myTest1(){
        $y = 10;
        echo"Variable is: $y";
    }

    myTest1();

    echo"Calling the function variable outside will create error: $y";
    //we can have local variables with the same name in different fucntions because the local variables are recognised by the function in which they are declared


    //The global keyword is used to access a variable from within a function also

    $z = 15;
    $w = 5;
    function myTest2(){
        global $z;
        $z = $w + $z;
    }

    myTest2();
    echo $z;

    //php stores all global variables in an array $GLOBALS[index]. the index holds the name of the variable 

    function myTest3(){
        $GLOBALS['z'] = $GLOBALS['w'] + $GLOBALS['z'];
    }
    myTest3();
    echo $z;

    //when a function is completed, the variables are deleted. Sometimes we dont want the variables to get deleted, so we use static keyword
    function myTest4(){
        static $a = 0;
        echo $a;
        $a++;
    }
    myTest4(); //0
    myTest4(); //1
    myTest4(); //2

    
    ?>
    
</body>
</html>