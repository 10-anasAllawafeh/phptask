<?php

// without constructor

// class human{

//     public $name;
//     public $age;
//     public $height;

//     function set_properties($name,$age,$height){
        
//         $this-> name= $name;
//         $this-> age= $age;
//         $this-> height= $height;
//     }

//     function get_properties(){
//         return $this->name.$this->age.$this->height;
//     }
// }

// $Duaa= new human();
// $Duaa->set_properties('Duaa','27','190');
// echo $Duaa->get_properties();

// with constructor

// class human{

//     public $name;
//     public $age;
//     public $height;

//     function __construct($name,$age,$height)
//     {
//         $this-> name= $name;
//         $this-> age= $age;
//         $this-> height= $height; 
//         return $this->name.$this->age.$this->height;
//     }
// }
// $Duaa= new human('Duaa','27','190');
// print_r($Duaa);


// class Person {
//     public $name;
//     protected $age;
//     public function __construct($name, $age) {
//         $this -> name = $name;
//         $this -> age = $age;
//     }
//     public function introduce() {
//         echo "My name is ".$this->name." My age is ".$this->age;
//     }
// }

// class Tom extends Person {
//     // public $name;
//     public function sayHello(){
//         $this->name;
//         echo "Hello World <br>";
//     }
// }
// $tom = new Tom('Tom',"29");
// $tom -> sayHello();
// $tom -> introduce();






// class Persons {
//     public $name="hadi";
//     public $age=22;

//     public function  get (){
//         return  $this->age . $this->name;
//     }

// }

// $hadi = new Persons();
// echo $hadi->get();


class SixGrade {
    protected $id;
    public $name;
    private $age=13;
    public $eyeColor;
    

    
    public function __construct($id,$name,$eyeColor){
        $this->id= $id;
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        echo $this->id;
       echo $this->get_name(). '<br>';
       echo $this->get_age(). "<br>";
       echo $this->get_eyeColor(). '<br>';
    }

    public function  get_name (){
        return  $this->name;
    }
    public function get_age(){
        
        return $this->age;
    }
    public function get_eyeColor(){
        return $this->eyeColor;
    }


}

echo "hadi info:".'<br>';
$hadi = new SixGrade(1,'hadi','black');

echo "duaa info:".'<br>';
$Dua = new SixGrade(2,'Dua','Green');


echo "dyar info:".'<br>';
$dyar = new SixGrade(3,'dyar','Green');


class player extends SixGrade {

    public function get_id($id)
    {
        $this->id=$id;
        echo $this->id;
    }
}
echo "anas info:".'<br>';
$anas = new player(4,'anas','Green');
$anas ->get_id(5);


?>
