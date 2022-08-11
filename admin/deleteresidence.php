<?php

include '../includes/dbcon.php';
 $id = $_GET['id'];
$sql = "DELETE FROM residence WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo 'window.location="residence.php";';
} else {
    echo 'window.location="residence.php";';
}
