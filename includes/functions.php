<?php

// Staff Login function

function login($email, $password)
{
    include 'dbcon.php';
    $email  = mysqli_real_escape_string($conn,$email);
    $password = mysqli_real_escape_string($conn,$password);
    $sel = mysqli_query($conn,"SELECT * FROM staff WHERE ")
}
