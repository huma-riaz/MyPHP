<?php
//include("./conditions.php");
echo '<h3> DATA IN TABLE : </h3>';
$users = [
    [1, 'Huma', 'Girl', 19],
    [2, 'Hassan', 'Boy', 16],
    [3, 'Bilal', 'Boy', 23],
    [4, 'Aman', 'Girl', 14]
];
echo '<table border = 1>';
for($i = 0; $i < count($users); $i++) {
    echo '<tr>';
    for($j = 0; $j < count($users[$i]); $j++) {
    echo '<td>';
        echo $users[$i][$j];
    echo '</td>';
    }
    echo '</tr>';
};
echo '</table>';



echo '<h3> TYPE CASTING : </h3>';
$a = '500';
$a = (int) $a;
var_dump($a);     echo '<br>';

$b = 10;
$b = (string) $b;
var_dump($b);     echo '<br>';

$c = 'Helloo';
$c = (boolean) $c;
var_dump($c);     echo '<br>';

$d = "150";
$d = (float) $d;
var_dump($d);     echo '<br>';

$e = 'Hellooo';
$e = (array) $e;
var_dump($e);

//Array to string nhi hota...
/*$f = ["300"];
$f = (string) $f;
var_dump($f);     echo '<br>'; */


echo '<h3> LOCAL & GLOBAL VARIABLES : </h3>';
//LOCAL: function k andr he hoga
function first() {
    $name = 'Huma Riaz';
    echo $name. '<br>';
};
//$name= 'Hassan';   No change(local)
first();

//GLOBAL: use anywhere
$myname = 'Rafay';
function second() {
   //global $myname;        //global ko function mai use
   //$name= 'Farhan';
};
$myname = 'Bilal Riaz';
echo $myname;
second();       echo '<br>';

//NESTED FUNCTION :
$newname = 'Laiba';
function third() {
    $newname = 'Sara';
    echo $newname;

    function newthird() {
        $newname = 'Tommy';
        echo $newname;
    }
};
third();      echo '<br>';
newthird();   echo '<br>';
echo $newname;    echo '<br><br>';

?>