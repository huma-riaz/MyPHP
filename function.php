<?php
echo '<h1> FUNCTIONS : </h1>';

function setfunc() {
    echo '<b> TYPES OF FUNCTION : </b> <br> ';
    echo '1- Function with Parameter.  <br>';
    echo '2- Function with Return Statement. <br>';
    echo '3- Function with Default Parameter. <br>';
    echo '4- Nested Function. <br>';
    echo '5- Variable Function. <br>';
    echo '6- Basic but Important Function. <br>';
}
setfunc();
//setfunc();


echo '<h3> FUNCTION WITH PARAMETER : </h3>';
function setdetails($name,$age) {
    echo 'Your Name : ' . $name;
    echo '. Your Age : ' . $age;
}
setdetails('Huma ' , 19);         echo '<br>';
setdetails('Hassan ' , 15);       echo '<br>';
setdetails('Bilal ' , 22);


echo '<h3> NESTED FUNCTION : </h3>';
function test1() {
    echo 'First Function <br>';
function test2() {
    echo 'Second Function ';
}

}
//test2();
test1();
test2();


echo '<h3>FUNCTION WITH VARIABLES : </h3>';
function testv() {
    echo 'Hellooo ';     
}
testv();
$v1 = 'Everyone';
echo $v1;       echo '<br>';

function main() {
    testv();
    //echo 'Check ';
}
main();


echo '<h3>BASIC & IMPORTANT FUNCTION : </h3>';
$var1= 'Check Letters ';
echo $var1; 
echo strlen($var1);        echo '<br>';

//DATE
echo date('d,m,y');            echo '<br>';
echo date('D');                echo '<br>';

//CHECK STRING
echo is_string($var1);         echo '<br>';
echo is_int($var1);            echo '<br>';

//STOP CODE
echo 'Starting Point';       echo '<br>';
//die;
echo 'Middle Point';         echo '<br>';
//exit();
echo 'Ending Point';         echo '<br><br>';

//SKIP 
//Missing starting letters.
$var2 = 'My Name Is Huma Riaz ';
echo substr($var2,10);

?>