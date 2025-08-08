<?php
echo '<h2> OOP : </h2>';
echo '<b> CLASS : </b>';        echo '<br>';

class Maths {
    function sum($val1,$val2) {
    echo $val1+$val2;
}
};
$math = new Maths();
$math->sum(20,50);        echo '<br>';
$math->sum(10,10);        echo '<br><br>';


echo '<b> PROPERTIES : </b>';        echo '<br>';
Class Properties{
    public $name ='Huma Riaz';
    function update($name){
        $this->name=$name;
    }
}
$obj1 = new Properties();
$obj1-> update('Hassan');
echo $obj1 -> name;          echo '<br><br>';


echo '<b> CONSTRUCTOR : </b>';        echo '<br>';
Class Myconst{
    public $name;
    function __construct() {
        //echo 'Yes, This is Called';
        echo $this->name='Huma ';
        // echo $this->name='Huma';
        echo $this->name='Bilal';
    }
}
$obj2 = new Myconst();          echo '<br><br>';


echo '<b> INHERITANCE : </b>';        echo '<br>';
Class Myparent{
    function setname($name,$age){
        echo 'My name is ' .$name.  ' My age is '. $age;
    }
}             echo '<br>';

Class Mychild extends Myparent{
    function setchild() {
        echo 'Okkkk';
    }
}       
$obj3 = new Myparent();
$obj3->setname('Huma ', 19);    echo '<br>';
$obj4 = new Mychild();
$obj4->setchild();



?>