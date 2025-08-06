<?php
echo '<h1> ARRAY : </h1>';
/*$names = ['Huma ', 'Hassan ', 'Laiba ', 'Ayesha ', 'Bilal ', 'Rafay '];
echo $names [0];
echo $names [1];
echo $names [4];
echo '<br>';
*/

echo '<h3> TYPES OF ARRAY : </h3>';
echo '1_  Indexed Array. ';   echo '<br>';
echo '2_  Associative Array. ';   echo '<br>';
echo '3_  Multidimensional Array. ';   echo '<br><br>';



echo '<b> INDEXED ARRAY (Simple Array) : </b>';     echo '<br>';
$names = ['Huma ', 'Hassan ', 'Farhan ', 'Aman ', 'Kiran ', 'Rafay '];
foreach($names as $name) {
    echo $name;
}          echo '<br><br>';



echo '<b> ASSOCIATIVE ARRAY : </b>';   echo '<br>';
$ass1 = [
    'Name ' => 'Huma',
    'Age ' => 19,
    'City ' => 'Karachi',
    'Gender ' => 'Girl'
];  
//echo $ass1['Name ']; echo '<br>';
//echo $ass1 ['Gender ']; echo '<br>';

foreach($ass1 as $key => $myinfo) {
    echo $key . 'is ' . $myinfo;
    echo '<br>';
}          echo '<br><br>';


echo '<b> MULTIDIMENSIONAL ARRAY : </b>';   echo '<br>';
$multi = [
    [1, 'Huma', 'Girl', 19],
    [2, 'Hassan', 'Boy', 16]
    //[3, 'Bilal', 'Boy', 23]
];
//Echo se print nhi hoga isliye hm print_r ka use krty hn
//echo $multi;

//print_r ($multi);
for($i=0; $i<count($multi); $i++) {
    for($j=0; $j<count($multi[$i]); $j++) {
        echo $multi[$i][$j];
        echo '<br>';
    }
};        echo '<br>';


echo '<b> MULTIDIMENSIONAL ASSOCIATIVE ARRAY : </b>';   echo '<br>';
$mass = [
    ['Name '=> 'Huma', 'City '=> 'Karachi'],
    ['Name '=> 'Hassan', 'City '=> 'Lahore'],
    ['Name '=> 'Rafay', 'City '=> 'Multan']
];
/*foreach($mass as $assm) {
    print_r($assm);
}*/
echo '<table border = 1>';
foreach($mass as $assm) {
    echo '<tr>';
    foreach($assm as $key => $mval) {
    echo '<td>';
        echo $key. $mval;
        echo '<br>';
    echo '</td>';
    }
    echo '</tr>';
};
    echo '</table> <br><br>';



echo '<b> ADD & REMOVE ELEMENT IN ARRAY : </b>';   echo '<br>';
$ele = ['Ayeza', 'Eshal', 'Farhan', 'Aman', 'Hoor'];
//print_r($ele);
//ADD:
array_push($ele, 'Eshal', 'Rafay');
//print_r($ele);

//SUB:for single name
//array_pop($ele);
//array_pop($ele);
array_splice($ele, -2);
print_r($ele);
echo '<br><br>';


echo '<b> IMPORTANT ARRAY FUNCTION : </b>';   echo '<br>';
$imp = ['Huma ', 'Zayyan ', 'Hassan ', 'Noor ', 'Huma ', 'Hassan'];
$ikeys = ['name'=> 'Huma', 'age'=> 19];
print_r($imp);       echo '<br>';
//$imp = 'Huma';
//CHECK ARRAY:
if(is_array($imp)) {
    echo 'Yes, this is an array';
}else {
    echo 'this is not an array';
};          echo '<br>';
//COUNT ARRAY:
echo count($imp);        echo '<br>';
//REMOVE ARRAY:
unset($imp[3]);  
print_r($imp);       echo '<br>';
//ADD ARRAY:
array_push($imp, 'Razia'); 
print_r($imp);       echo '<br>';
//REMOVE ARRAY:
array_pop($imp);
print_r($imp);       echo '<br>';
//SHOW ARRAY KEYS:
print_r(array_keys($ikeys));    echo '<br>';
//STRING VALUES FROM ARRAY:
echo implode($imp);         echo '<br>';
//STRING TO ARRAY:
$chg = 'Hello, My, name is, Huma';
print_r(explode(',', $chg));     echo '<br>';
//MERGE ARRAY: 
print_r(array_merge($imp,$ikeys));     echo '<br>';
//DO NOT REPEAT SAME ELEMENT:
print_r(array_unique($imp));

?>