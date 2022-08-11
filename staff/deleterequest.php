<?php

include '../includes/dbcon.php';
$id = $_GET['id'];
$residenceid = $_GET['residenceid'];
$q = mysqli_query($conn, "DELETE FROM records WHERE id = $id");

$r = mysqli_query($conn, 'UPDATE residence SET status = "available" WHERE id = '.$residenceid);
echo '<script>window.location="record.php"</script>';
