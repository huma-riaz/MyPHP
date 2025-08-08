<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "db_students";

$conn = new mysqli ($host, $username, $password, $db);
if ($conn-> connect_error) {
    echo 'Something wrong';
}else {
    echo "MySQL Connect :";
};      echo '<br>';

//$result = $conn-> query('show tables')-> fetch_all();
//print_r($result);

?>