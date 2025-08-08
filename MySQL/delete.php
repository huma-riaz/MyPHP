<?php
include('./config.php');

$id = 5;
$query = "DELETE FROM students WHERE id = $id";
$result = mysqli_query($conn, $query);

if($result) {
    echo 'Data Deleted';
}else {
    echo 'Something Wrong';
}

?>