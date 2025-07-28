<?php
echo '<h1> LOOP: </h1>';

echo '<b> For Loop : </b><br>';
$name = 'Huma';
for($start=1;$start<=5;$start++) {
    //echo $start;
    echo $name;
    echo '<br>';
}
echo '<br> TABLE Of 5 : <br>';
$table = 5;
for($start=1;$start<=10;$start++) {
    echo '5 x ' . $start . ' = ' . $table * $start;
        echo '<br>';
}


echo '<b><br> Break And Continue : </b><br>';
echo 'BREAK : <br>';
for($i=1; $i<=10; $i++) {
    echo $i;
    echo '<br>';
    if($i==4) {
        break;
    }
}
echo 'CONTINUE : <br>';
for($i=11; $i<=20; $i++) {
    if($i==14 || $i==18 || $i==17) {
        continue;
    }
    echo $i;
    echo '<br>';
}



echo '<b><br> NESTED FOR LOOP : </b><br>';
for($i=1; $i<=3; $i++) {
    for($a=1; $a<=3; $a++) {
        echo $i;
        echo '<br>';
    }
}



echo '<b><br> WHILE LOOP : </b><br>';
$num = 0;
while($num<5) {
    $num++;
    echo $num;
    echo '<br>';
}
echo '<br>';
$num2 = 10;
while($num2 >5) {
    $num2--;
    echo $num2;
    echo '<br>';
}



echo '<b><br> DO WHILE LOOP : </b><br>';
$do1 = 1;
do {
    $do1++;
    echo 'Huma <br>';
}while($do1<=3);

$do2 = 0;
do{
    $do2++;
    echo $do2;
   // echo '<br>';
}while($do2<=4);      echo '<br>';


echo '<b><br> FOR EACH LOOP : </b><br>';
$var = ['Huma', 'Hassan', 'Kiran', 'Bilal', 'Riaz'];
foreach($var as $name) {
    //echo $name;
    echo '<br>';

 /*if($name == 'Kiran') {
    break;
}*/

if($name == 'Bilal' || $name == 'Riaz') {
    continue;
}
echo $name;
}

?>