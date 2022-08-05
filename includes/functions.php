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
            // checking if user exist
            $check = mysqli_query($conn, "SELECT * FROM staff WHERE email ='$email' OR phone ='$phone'");
            if (mysqli_num_rows($check) >= 1) {
                echo 'User already exist';
            } else {
                // inserting the user data into the database
                $image = $_FILES['name']['image'];
                $image_name = $_FILES['name']['name'];
                $image_tmp = $_FILES['name']['tmp_name'];
                $image_size = $_FILES['name']['size'];
                $image_error = $_FILES['name']['error'];
                $image_type = $_FILES['name']['type'];
                $image_ext = explode('.', $image_name);
                $image_ext = strtolower(end($image_ext));
                $allowed = ['jpg', 'jpeg', 'png'];
                if (in_array($image_ext, $allowed)) {
                    if ($image_error === 0) {
                        if ($image_size <= 2097152) {
                            $image_name_new = uniqid('', true).'.'.$image_ext;
                            $image_destination = 'uploads/'.$image_name_new;
                            move_uploaded_file($image_tmp, $image_destination);
                            $password = md5(mysqli_real_escape_string($conn, $password));
                            $datejoined = date('jS F, Y');
                            $name = $fname.' '.$lname;
                            $insert = mysqli_query($conn, "INSERT INTO staff (name,email,phone,dob,pic,password,datejoined) VALUES ('$name','$email','$phone','$dob','$image_name_new','$password','$datejoined')");
                            if ($insert) {
                                echo 'Registration successful';
                            } else {
                                echo 'Registration failed';
                            }
                        } else {
                            echo 'Image size is too big';
                        }
                    } else {
                        echo 'There was an error uploading your image';
                    }
                } else {
                    echo 'Image type is not allowed';
                }
                // $datejoined = date('jS F, Y');
                // $name = $fname.' '.$lname;
                // $insert = mysqli_query($conn, "INSERT INTO staff (name,email,phone,dob,pic,password,datejoined) VALUES ('$name','$email','$phone','$dob','$pic','$password','$datejoined')");
                // if ($insert) {
                //     echo 'Registration successful';
                // } else {
                //     echo 'Registration failed';
                // }
            }
        }
    }
}
