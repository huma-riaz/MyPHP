<h1>OPERATORS: </h1>
<?php
echo '<b> Arithmetic Operators: </b> <br>';

$a = 5;
$b = 2;
echo $a + $b;       echo '<br>';
echo $a - $b;       echo '<br>';
echo $a * $b;       echo'<br>';
echo $a / $b;       echo'<br>';
echo $a ** $b;      echo'<br>'; // power solve (5 x 5)

const num1 = 10;
const num2 = 5;
echo num1 * num2;          // constant
echo'<br><br>';



echo '<b> Assignment Operators: </b> <br>';
$ass1 = 5;
$ass2 = 20;

//$ass1 = $ass2;              
$ass1 += $ass2;      
//$ass1 -= $ass2;
//$ass1 *= $ass2;
//$ass1 /= $ass2; 
echo $ass1;       echo'<br><br>';



echo '<b> Comparison Operators: </b> <br>';
$com1 = 10;
$com2 = 5;
$com3 = '10';           //data type different hai....

var_dump($com1 == $com2);     echo'<br>';      //Equal
var_dump($com1 == $com3);     echo'<br>';

var_dump($com1 === $com2);    echo'<br>';      //Check Type  Identical
var_dump($com1 === $com3);    echo'<br>';

var_dump($com1 != $com2);     echo'<br>';      //Not Equal
var_dump($com1 != $com3);     echo'<br>';

var_dump($com1 <> $com2);    echo'<br>';      //Not Equal
var_dump($com1 <> $com3);     echo'<br>';

var_dump($com1 > $com2);      echo'<br>';      //Greater

var_dump($com1 < $com2);      echo'<br>';      //Less

var_dump($com1 >= $com2);      echo'<br>';      //Greater than or equal
var_dump($com1 >= $com3);      echo'<br>';      //Greater than or equal


var_dump($com1 <= $com2);      echo'<br>';      //Less than or equal
var_dump($com1 <= $com3);      echo'<br><br>';      //Less than or equal



echo '<b> INCREMENT & DECREMENT: </b> <br>';
// PRE-Increment
echo 'Pre-Increment: ';

$inc = 5;
echo $inc;        echo '<br>';
echo ++$inc;      echo '<br><br>'; 

echo 'Post-Increment: ';
echo $inc;        echo '<br>';
echo $inc++;      echo '<br><br>';

echo 'Pre-Decrement: ';
$dec = 10;
echo $dec;        echo '<br>';
echo --$dec;      echo '<br><br>'; 

echo 'Post-Decrement: ';
echo $dec;       echo '<br>';
echo $dec--;      echo '<br><br><br>'; 



echo '<b> STRING: </b>';      echo '<br>';

$st = 'Huma';
echo 'My name is ' . $st;      echo '<br><br>';



echo '<h2> Logical Operators: </h2>';
// And && , Or || , xor (one condition must be true)
$lo1 = 10;
$lo2 = 20;
$lo3 = 30;

echo'<b> AND: </b>';
if($lo1 == 10 && $lo2 == 20) {
    echo 'Both statement are true';
}                             echo '<br>';

echo'<b> OR: </b>';
if($lo1 == 10 || $lo3 = 20) {
    echo 'One statement is true';
}                             echo '<br>';

echo'<b> XOR: </b>';
if($lo1 == 20 xor $lo3 == 30) {
    echo 'Only one statement is true';
}                              echo '<br>';

echo'<b> Multiple: </b>';
if ($lo1 == 10 && $lo2 == 20 || $lo3 == 10 ) {
    echo 'All is Okkk';
}

?>