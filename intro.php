<?php

echo '<h1>PHP INTRO: </h1>';
//echo "Helloooo";
//echo ("As A Function");
//echo 10 + 10;

//<--------------VARIABLES----------->


echo '<b>VARIABLES</b>';
$name = "Huma Riaz";
echo '<br>';
//variables mai value change hoskti hai......
//$name = 'Thomas';

echo $name . '<br>';
echo $name . '<br>';
echo $name . '<br>';
echo $name . '<br>';

$nmbr = 5;
echo $nmbr * 2 . '<br>';
echo $nmbr * 5 . '<br>';
echo $nmbr * 8 . '<br><br><br>';



//<!-----------PHP with HTML------------->

echo "<b style='color:black'> PHP With HTML</b><br>";
echo "<text style='color:blue' > Color Change </text> <br>";
$age = 20;
echo "<b style='color:green' > I'm " . $age . " years old </b> <br><br><br>";
?>

<!--------------HTML With PHP------------->
<b>HTML With PHP</b> <br>

<b style= 'color:purple'><?php echo $age ?> is my age</b> <br>
<b style= 'color:orange'>My name is <?php echo $name ?> </b>  <br><br> <br>



<!---------------CONSTANT---------------->
<b>CONSTANT</b> <br>
<?php

const myname = 'Hassan';
echo myname;
echo '<br><br> <br>';
 //myname = 'Hassan Riaz';
 //Constant mai values change nhi hoskti hn........

?>



<!---------------DATA TYPE---------------->
<b>DATA TYPE</b> <br>
<?php

 $type = 'Friends';
 //echo $type;
 echo var_dump($type);
 echo '<br>';

 $nmbrr = 20;
 echo var_dump($nmbrr);
 echo '<br>';

 $float = 10.5;
 echo var_dump($float);
 echo '<br>';

 $bool = true;
 echo var_dump($bool);
 echo '<br>';

 $arr = ['Huma', 19 , 'Hassan' , 15];
 echo var_dump($arr);
 echo '<br>';

 $emp = null;
 echo var_dump($emp);
 echo '<br>';

?>