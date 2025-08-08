<?php
include('./config.php');

$query = "INSERT INTO students (id, name, gender, city) 
VALUES (NULL, 'Farhan', 'Male', 'Quetta')";

$result = mysqli_query($conn, $query);

if($result) {
    echo 'Data Inserted';
}else {
    echo 'Something Wrong';
}

?>