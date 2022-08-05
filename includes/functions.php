<?php

// Staff Login function

function login($email, $password)
{
    include 'dbcon.php';
    $email = mysqli_real_escape_string($conn, $email);
    $password = md5(mysqli_real_escape_string($conn, $password));
    if (empty(trim($email)) || empty(trim($password))) {
        echo 'Login details cannot be empty';
    } else {
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
}

// function for staff registration

function register($fname, $lname, $email, $phone, $dob, $password, $repass)
{
    include 'dbcon.php';
    // making sure all fields are filled
    if (empty(trim($fname)) || empty(trim($lname)) || empty(trim($email)) || empty(trim($phone)) || empty(trim($dob)) || empty(trim($password)) || empty(trim($repass))) {
        echo 'please fill all fields';
    } else {
        if ($repass != $password) {
            echo 'Password mismatch';
        } elseif (!isset($_FILES['name']['image'])) {
            echo 'kindly aploud your profile picture';
        } else {
        }
    }
}
