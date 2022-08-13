<?php

// Staff Login function

function login($email, $password)
{
    include 'dbcon.php';
    $email = mysqli_real_escape_string($conn, $email);

    if (empty(trim($email)) || empty(trim($password))) {
        echo 'Login details cannot be empty';
    } else {
        if ($email == 'admin@gmail.com' && $password == '123') {
            $password = md5(mysqli_real_escape_string($conn, $password));
            $sel = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' AND password ='$password'");

            $row = mysqli_fetch_array($sel);
            session_start();
            $_SESSION['admin'] = $row;
            echo 'loginsuccess1';
        } else {
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
    }
}

// function for staff registration

function register($name, $email, $phone, $dob, $password, $repass)
{
    include 'dbcon.php';
    // making sure all fields are filled
    if (empty(trim($name)) || empty(trim($email)) || empty(trim($phone)) || empty(trim($dob)) || empty(trim($password)) || empty(trim($repass))) {
        echo 'please fill all fields';
    } else {
        if ($repass != $password) {
            echo 'Password mismatch';
        } elseif (empty($_FILES['image']['name'])) {
            echo 'kindly aploud your profile picture';
        } else {
            // checking if user exist
            $check = mysqli_query($conn, "SELECT * FROM staff WHERE email ='$email' OR phone ='$phone'");
            if (mysqli_num_rows($check) >= 1) {
                echo 'User already exist';
            } else {
                // inserting the user data into the database
                // $image = $_FILES['image']['name'];

                if (preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $password)) {
                    $image_name = $_FILES['image']['name'];
                    $image_tmp = $_FILES['image']['tmp_name'];
                    $image_size = $_FILES['image']['size'];
                    $image_error = $_FILES['image']['error'];
                    $image_type = $_FILES['image']['type'];
                    $image_ext = explode('.', $image_name);
                    $image_ext = strtolower(end($image_ext));
                    $allowed = ['jpg', 'jpeg', 'png'];
                    if (in_array($image_ext, $allowed)) {
                        if ($image_error === 0) {
                            if ($image_size <= 2097152) {
                                $image_name_new = uniqid('', true).'.'.$image_ext;
                                $image_destination = '../upload/'.$image_name_new;
                                move_uploaded_file($image_tmp, $image_destination);
                                $password = md5(mysqli_real_escape_string($conn, $password));
                                $datejoined = date('jS F, Y');
                                // $name = $fname.' '.$lname;
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
                } else {
                    echo 'Password must have atleast 8 characters, one lowercase, one uppercase, one number and one special character';
                }
            }
        }
    }
}

// function for forgot password
function forgotpass($email)
{
    include 'dbcon.php';
    $email = mysqli_real_escape_string($conn, $email);
    if (empty(trim($email))) {
        echo 'Email cannot be empty';
    } else {
        $sel = mysqli_query($conn, "SELECT * FROM staff WHERE email = '$email'");
        if (mysqli_num_rows($sel) >= 1) {
            $row = mysqli_fetch_array($sel);
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $dob = $row['dob'];
            $password = $row['password'];
            $datejoined = $row['datejoined'];
            $pic = $row['pic'];
            $token = uniqid('HaST');
            $subject = 'Password Reset';
            $message = '<html>
            <head>
            <title>Password Reset</title>
            </head>
            <body>
            <h1>Password Reset</h1>
            <p>Hi '.$name.',</p>
            <p>You recently requested to reset your password for your account on the '.$datejoined.'</p>
            <p><a href="ha.iamdollarstir.tk/reciever.php?action=checkpass&id='.$id.'&email='.$email.'&token='.$token.'">Click on this link reset password </a>/p>
            <p>Regards,</p>
            <p>The Homecare Team</p>
            </body>
            </html>';
            $mymail = 'homeassist@iamdollarstir.tk';
            $headers = 'From: '.$mymail."\r\n".
            'Reply-To: '.$email."\r\n".
            'X-Mailer: PHP/'.phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            if (mail($email, $subject, $message, $headers)) {
                echo 'Passwordsent';
            } else {
                echo 'Password could not be sent';
            }
        } else {
            echo 'Email does not exist';
        }
    }
}

function mailto($name, $email, $phone, $subject, $message)
{
    $subject1 = 'Message from '.$name;
    $message = '<html>
            <head>
            <title>'.$subject.'</title>
            </head>
            <body>
            <h1>'.$subject.'</h1>
            <p>From: '.$email.' ('.$phone.')</p>
            <p>'.$message.'</p>
            
            <p>Regards,</p>
            <p>The Homecare Team</p>
            </body>
            </html>';
    $mymail = 'homeassist@iamdollarstir.tk';
    $headers = 'From: '.$mymail."\r\n".
            'Reply-To: '.$email."\r\n".
            'X-Mailer: PHP/'.phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    if (mail('kolawolea844@gmail.com', $subject1, $message, $headers)) {
        echo 'success';
    } else {
        echo 'Failed to send messages';
    }
}
