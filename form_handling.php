<?php
echo '<h2> FORM HANDLING : </h2>';
//print_r($_POST);
echo 'Name is ' . $_POST['name'];   echo '<br>';
echo 'Email is ' . $_POST['email'];   echo '<br>';
echo 'Password is ' . $_POST['password'];   echo '<br>';
echo 'Age is ' . $_POST['age'];   echo '<br>';
echo 'Skills is ' . implode(', ' , $_POST['skills']);   echo '<br>';
echo 'Gender is ' . $_POST['gender'];   echo '<br>';
echo 'City is ' . $_POST['city'];   echo '<br>';
echo  $_POST['bio'];   echo '<br>';

?>