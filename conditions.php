<?php

echo '<h1> CONDITIONS: </h1>';

echo '<b> If Condition: </b>';          echo '<br>';
$if1 = 15;
if($if1 < 17){
    echo 'Yes';          echo '<br>';
}

$if2 = 'Huma';
if($if2 != 'Huma Riaz') {
    echo 'Yes';            echo '<br><br>';
}

echo '<b> If else Condition: </b>';          echo '<br>';
$ife1 = 10;
if($ife1 > 15) {
    echo 'This is True';
}else {
    echo 'This is false';
}                             echo '<br>';

$ife2 = 'I am student of IT';
if($ife2 == 'Huma Riaz') {
    echo 'Okay';
}else {
    echo 'Something wrong';
}                               echo '<br><br>';


echo '<b> Else if Condition: </b>';          echo '<br>';
$eif1 = 10;
if($eif1 == 20 ) {
    echo 'first con';
}elseif($eif1 != 13 ) {
    echo 'second con';
}else {
    echo 'Anything';
}                            echo '<br>';

$eif2 = 'Multan';
if($eif2 == 'Multan') {
    echo 'False';
}else if ($eif2 !== 'Karachi') {
    echo 'True';
}else {
    echo 'Wrong';
}                             echo '<br><br>';


echo '<b> Switch Statement: </b>';          echo '<br>';

$days = 'monday';
switch($days) {
    case 'monday';
    echo 'first day';
    break;

    case 'tuesday';
    echo 'second day';
    break;

    case 'wednesday';
    echo 'third day';
    break;

    case 'thursday';
    echo 'forth day';
    break;
     
    case 'friday';
    echo 'fifth day';
    break;

    case 'saturday';
    echo 'sixth day';
    break;

    case 'sunday';
    echo 'seventh day';
    break;

    default;
    echo 'Check Again';
}             echo '<br><br>';

?>