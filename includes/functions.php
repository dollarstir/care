<?php

// Staff Login function

function login($email, $password)
{
    include 'dbcon.php';
    $email = mysqli_real_escape_string($conn, $email);
    $password = md5(mysqli_real_escape_string($conn, $password));
    $sel = mysqli_query($conn, "SELECT * FROM staff WHERE email = '$email' AND password ='$password'");
    if (mysqli_num_rows($sel) >= 1) {
        $row = mysqli_fetch_array($sel);
        session_start();
        $_SESSION['id'] = $row['id'];
        echo 'loginsuccess';
    } else {
        echo 'Login details not corerct';
    }
}
