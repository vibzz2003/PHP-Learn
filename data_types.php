<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $x = array("Volvo", "BMW", "Toyota");
    var_dump($x);

    //php object
    //classes and objects are the two main aspects of oops
    //class is a template for an object, and object is an instance of a class
    //if you create a __cunstruct() function, PHP will automatically call this function when you create an object from this class
    class Car{
        public $color;
        public $model;
        public function __construct($color, $model){
            $this->color = $color;
            $this->model - $model;
        }
        public function message(){
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("red", "Volvo");
    var_dump($myCar);

    $a = 10;
    $a = (string) $a;
    var_dump($a);

    
    ?>
</body>
</html>