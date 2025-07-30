<?php


echo '<h2> GET METHOD : </h2>';
if (isset($_GET['user_name']) && isset($_GET['user_age'])) {
    echo 'My name is ' . $_GET['user_name'];
    echo '<br>';
    echo 'My age is ' . $_GET['user_age'];
} else {
    echo 'User name & age not defined.';
}



echo '<h2> POST  METHOD : </h2>';
//print_r($_POST);
if (isset($_GET['user_class']) && isset($_GET['user_section'])) {
    echo 'My name is ' . $_GET['user_class'];
    echo '<br>';
    echo 'My age is ' . $_GET['user_section'];
} else {
    echo 'User class & section not defined.';
}


echo '<h2> REQUEST  METHOD : </h2>';
//print_r($_REQUEST);
//echo $_REQUEST['user_name'];     echo '<br>';
//echo $_REQUEST['user_age'];

 foreach($_REQUEST as $values) {
    print_r($values);
    echo '<br>';
};


echo '<h2> SUPER GLOBAL VARIABLES : </h2>';
//$a = 10;
print_r ($GLOBALS);     echo '<br><br>';
//print_r ($_SERVER);       

echo '<b>$_FILES UPLOAD : </b> <br>';
print_r($_FILES);     echo '<br><br>';


echo '<b>CALL PHP ON BUTTON CLICK : </b>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Click</title>
</head>
<body>
    <form action="" method="POST">
        <button name="button">Call Function</button>
    </form>
</body>
</html>
<?php
if(isset($_REQUEST['button'])) {
    call_btn();
};
function call_btn() {
    echo 'Yes, On Click You Can Call Your Function <br><br>';
};

echo '<b>$_COOKIES : </b>';
setcookie('colors', 'red', time()+(3600));    echo '<br>';
setcookie('fruit', 'apple', time()+(86400));
print_r($_COOKIE);       echo '<br><br>';


echo '<b>$_SESSION : </b>';
session_start();
$_SESSION['colors'] = 'Orange';
print_r($_SESSION);



?>
