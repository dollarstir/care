<?php

function begin1($title)
{
    session_start();
    if (!isset($_SESSION['admin'])) {
        echo '<script>window.location.href = "login.php";</script>';
    }

    echo '<!DOCTYPE html>
    <html lang="zxx">
    
    <head>
    
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>'.$title.'</title>
        <link rel="icon" href="img/logo.png" type="image/png">
    
        <link rel="stylesheet" href="css/bootstrap1.min.css" />
    
        <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    
        <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />
    
        <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />
    
        <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    
        <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    
        <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    
        <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
        <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />
    
        <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
        <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    
        <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
    
        <link rel="stylesheet" href="vendors/morris/morris.css">
    
        <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />
    
        <link rel="stylesheet" href="css/metisMenu.css">

        <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
    
        <link rel="stylesheet" href="css/style1.css" />
        <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
    </head>';
}
// Staff Sidebar

 function adminsidebar()
 {
     echo '<nav class="sidebar">
     <div class="logo d-flex justify-content-between">
         <a href="index.php"><img src="../assets/images/logo.png" alt=""></a>
         <div class="sidebar_close_icon d-lg-none">
             <i class="ti-close"></i>
         </div>
     </div>
     <ul id="sidebar_menu">
         
         <li>
             <a class="has-arrow" href="index.php" aria-expanded="false">

                 <img src="img/menu-icon/1.svg" alt="">
                 <span>Dashboard</span>
             </a>
             
         </li>
         
         <li class="">
             <a class="has-arrow" href="#" aria-expanded="false">
                 <img src="img/menu-icon/2.svg" alt="">
                 <span>Residence</span>
             </a>
             <ul>
             <li><a href="addresidence.php">Add Residence</a></li>
                 <li><a href="residence.php">Available Residence</a></li>
                 
             </ul>
         </li>
         <li class="">
             <a class="has-arrow" href="#" aria-expanded="false">
                 <img src="img/menu-icon/3.svg" alt="">
                 <span>Records</span>
             </a>
             <ul>
                 
                 <li><a href="record.php">View Records</a></li>
                 
             </ul>
         </li>

         <li class="">
             <a class="has-arrow" href="#" aria-expanded="false">
                 <img src="img/menu-icon/3.svg" alt="">
                 <span>Support</span>
             </a>
             <ul>
                 <li><a href="support.php">Contact Support</a></li>
                 
             </ul>
         </li>
         
     </ul>
 </nav>';
 }
function adminheader()
{
    include 'dbcon.php';

    $id = $_SESSION['admin']['id'];
    $sel = mysqli_query($conn, "SELECT * FROM admin WHERE id = '$id'");
    $row = mysqli_fetch_array($sel);
    echo '<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area">
                    <h3>Welcome '.$row['name'].'</h3>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">
                        <li>
                            <a href="#"> </a>
                        </li>
                        <li>
                            <a href="#">  </a>
                        </li>
                    </div>
                    <div class="profile_info">
                        <img src="img/client_img.png" alt="#">
                        <div class="profile_info_iner">
                            <p>Staff </p>
                            <h5>'.$row['name'].'</h5>
                            <div class="profile_info_details">
                                <!--<a href="#">My Profile <i class="ti-user"></i></a>
                                <a href="#">Settings <i class="ti-settings"></i></a>-->
                                <a href="logout.php">Log Out <i class="ti-shift-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}

function adminlogin($email, $password)
{
    include 'dbcon.php';
    $email = mysqli_real_escape_string($conn, $email);
    $password = md5(mysqli_real_escape_string($conn, $password));
    if (empty(trim($email)) || empty(trim($password))) {
        echo 'Login details cannot be empty';
    } else {
        $sel = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' AND password ='$password'");
        if (mysqli_num_rows($sel) >= 1) {
            $row = mysqli_fetch_array($sel);
            session_start();
            $_SESSION['admin'] = $row;
            echo 'loginsuccess1';
        } else {
            echo 'Login details not corerct';
        }
    }
}

function countall($table)
{
    include 'dbcon.php';
    $sel = mysqli_query($conn, "SELECT * FROM $table");
    $count = mysqli_num_rows($sel);

    return $count;
}

function availableresidence()
{
    include 'dbcon.php';
    $sel = mysqli_query($conn, "SELECT * FROM residence WHERE status = 'available'");
    $count = mysqli_num_rows($sel);

    return $count;
}

function undertreatment()
{
    include 'dbcon.php';
    $sel = mysqli_query($conn, "SELECT * FROM residence WHERE status = 'undertreatment'");
    $count = mysqli_num_rows($sel);

    return $count;
}

function addstaff($name, $email, $phone, $dob, $password, $repass)
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
            }
        }
    }
}
