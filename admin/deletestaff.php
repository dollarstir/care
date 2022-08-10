<?php

$id = $_GET['id'];
$sql = "DELETE FROM staff WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo 'window.location="staff.php";';
} else {
    echo 'window.location="staff.php";';
}
