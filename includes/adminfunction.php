<?php

function begin1($title)
{
    session_start();
    if (!isset($_SESSION['admin'])) {
        echo '<script>window.location.href = "../login.php";</script>';
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
                 <span>Resident</span>
             </a>
             <ul>
             <li><a href="addresidence.php">Add Resident</a></li>
                 <li><a href="residence.php">View Resident</a></li>
                 
             </ul>
         </li>
         <li class="">
             <a class="has-arrow" href="#" aria-expanded="false">
                 <img src="img/menu-icon/3.svg" alt="">
                 <span>Requests</span>
             </a>
             <ul>
                 
                 <li><a href="record.php">View Requests</a></li>
                 
             </ul>
             </li>
             <li class="">
                 <a class="has-arrow" href="#" aria-expanded="false">
                     <img src="img/menu-icon/3.svg" alt="">
                     <span>Staff</span>
                 </a>
                 <ul>
                     <li><a href="addstaff.php">Add Staff</a></li>
                     <li><a href="staff.php">View Staff</a></li>
                     
                 </ul>
             </li>

             <li class="">
                 <a class="has-arrow" href="#" aria-expanded="false">
                     <img src="img/menu-icon/3.svg" alt="">
                     <span>Support Messages</span>
                 </a>
                 <ul>
                     <li><a href="support.php">View Messages</a></li>
                     
                     
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
            }
        }
    }
}

function liststaff()
{
    include 'dbcon.php';
    $sel = mysqli_query($conn, 'SELECT * FROM staff');
    while ($row = mysqli_fetch_array($sel)) {
        echo '<tr>
                <td>'.$row['id'].'</td>
                <td><div class="patient_thumb d-flex align-items-center">
                    <div class="student_list_img mr_20">
                        <img src="../upload/'.$row['pic'].'" alt="" srcset="">
                    </div>
                    <p>'.$row['name'].'</p>
                    </div>
                </td>
                <td>'.$row['email'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['dob'].'</td>
                <td>'.$row['datejoined'].'</td>
                
                <td>
                    <div class="amoutn_action d-flex align-items-center">
                                                        
                        <div class="dropdown ms-4">
                            <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="editstaff.php?id='.$row['id'].'">Edit Staff</a>
                                <button class="dropdown-item deletestaff" id="'.$row['id'].'">Delete</button>

                            </div>
                        </div>
                    </div>

                </td>
                
                
            </tr>';
    }
}

function addresidence($name, $email, $phone, $address, $map, $dob, $gender, $medcondition, $period, $time)
{
    include 'dbcon.php';
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '../upload/'.$filename;
    $pastrecord = $_FILES['pastrecord']['name'];
    $tempname1 = $_FILES['pastrecord']['tmp_name'];
    $folder1 = '../upload/'.$pastrecord;
    if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempname1, $folder1)) {
        $dateadded = date('jS F, Y');
        // var_dump(mysqli_query($conn, "INSERT INTO residence (name,image,address,maplink,dob,gender,medcondition,pastrecord,howlong,timetaken,status,dateadded) VALUES ('$name','$filename','$address','$map','$dob','$gender','$medcondition','$pastrecord','$period','$time','available','$dateadded')"));
        $insert = mysqli_query($conn, "INSERT INTO residence (name,email,phone,image,address,maplink,dob,gender,medcondition,pastrecord,howlong,timetaken,status,dateadded) VALUES ('$name','$email','$phone','$filename','$address','$map','$dob','$gender','$medcondition','$pastrecord','$period','$time','available','$dateadded')");
        if ($insert) {
            echo 'success';
        } else {
            echo 'Residence failed to add';
        }
    } else {
        echo 'failed to upload';
    }
}

function listresidence()
{
    // fetch all residence from the database  and display them in the table
    include 'dbcon.php';
    $sel = mysqli_query($conn, 'SELECT * FROM residence');
    while ($row = mysqli_fetch_array($sel)) {
        echo ' <tr>
        <th scope="row">
            <div class="patient_thumb d-flex align-items-center">
                <div class="student_list_img mr_20">
                    <img src="../upload/'.$row['image'].'" alt="" srcset="">
                </div>
                <p>'.$row['name'].'</p>
            </div>
        </th>
        <td>'.$row['address'].'</td>
        <td>'.$row['medcondition'].'</td>
        <td>'.$row['howlong'].'</td>
        <td>'.$row['timetaken'].'</td>
        
        <td>
            <div class="amoutn_action d-flex align-items-center">
                
                <div class="dropdown ms-4">
                    <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="'.$row['maplink'].'" target="blank">View on map</a>
                        <a class="dropdown-item" target="blank" href="../upload/'.$row['pastrecord'].'">View Resident Records</a>
                        <a class="dropdown-item" href="editresidence.php?id='.$row['id'].'">Edit</a>
                        <button class="dropdown-item deleteresidence" id="'.$row['id'].'">Delete</button>

                    </div>
                </div>
            </div>
        </td>
    </tr>';
    }
}

// getting all requests from staff

function staffrequest()
{
    include 'dbcon.php';
    $sel = mysqli_query($conn, 'SELECT * FROM records  ORDER BY id DESC');
    while ($row = mysqli_fetch_array($sel)) {
        $resid = $row['residenceid'];
        $sel2 = mysqli_query($conn, "SELECT * FROM residence WHERE id = '$resid' ");
        $row2 = mysqli_fetch_array($sel2);
        $staffid = $row['staffid'];
        $sel3 = mysqli_query($conn, "SELECT * FROM staff WHERE id = '$staffid' ");
        $row3 = mysqli_fetch_array($sel3);
        echo '<tr>

        <th scope="row">
            <div class="patient_thumb d-flex align-items-center">
                <div class="student_list_img mr_20">
                    <img src="../upload/'.$row3['pic'].'" alt="" srcset="">
                </div>
                <p>'.$row3['name'].'</p>
            </div>
        </th>
        <th scope="row">
            <div class="patient_thumb d-flex align-items-center">
                <div class="student_list_img mr_20">
                    <img src="../upload/'.$row2['image'].'" alt="" srcset="">
                </div>
                <p>'.$row2['name'].'</p>
            </div>
        </th>
        <td>'.$row2['address'].'</td>
        <td>'.$row['requestdate'].'</td>
        <td>'.$row['approvaldate'].'</td>
        <td>'.$row['datecompleted'].'</td>
        <td>'.$row['status'].'</td>
        
        <td>
            <div class="amoutn_action d-flex align-items-center">
                
                <div class="dropdown ms-4">
                    <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="'.$row2['maplink'].'" target="blank">View Resident location</a>
                        <a class="dropdown-item" target="blank" href="../upload/'.$row2['pastrecord'].'">View Resident Records</a>
                        ';

        if ($row['status'] == 'approved') {
            echo '
            
            ';
        } elseif ($row['status'] == 'pending') {
            echo '<button class="dropdown-item approvestaff" id="'.$row['id'].'">Approve Request</button>';
        } elseif ($row['status'] == 'completed') {
            echo '<a class="dropdown-item" href="viewreport.php?id='.$row['id'].'&residenceid='.$row2['id'].'&staffid='.$staffid.'">View Report</a>';
        }

        echo '</div>
                </div>
            </div>
        </td></tr>';
    }
}

// function to approve request

function approverequest($id)
{
    include 'dbcon.php';
    $sel = mysqli_query($conn, "SELECT * FROM records WHERE id = '$id' ");
    $row = mysqli_fetch_array($sel);
    $resid = $row['residenceid'];
    $sel2 = mysqli_query($conn, "SELECT * FROM residence WHERE id = '$resid' ");
    $row2 = mysqli_fetch_array($sel2);

    $date = date('jS F Y');
    $update = mysqli_query($conn, "UPDATE records SET status = 'approved', approvaldate = '$date' WHERE id = '$id' ");
    $update2 = mysqli_query($conn, "UPDATE residence SET status = 'undertreatment' WHERE id = '$resid' ");
    if ($update && $update2) {
        echo 'requestsuccess';
    } else {
        echo 'failed';
    }
}

function supportmessages()
{
    include '../includes/dbcon.php';
    $sel = mysqli_query($conn, 'SELECT * FROM messages  ORDER BY id DESC');
    while ($row = mysqli_fetch_array($sel)) {
        $staffid = $row['staffid'];
        $sel2 = mysqli_query($conn, "SELECT * FROM staff WHERE id = '$staffid'");
        $row2 = mysqli_fetch_array($sel2);
        echo '<tr>

        
        <th scope="row">
            <div class="patient_thumb d-flex align-items-center">
                <div class="student_list_img mr_20">
                    <img src="../upload/'.$row2['pic'].'" alt="" srcset="">
                </div>
                <p>'.$row2['name'].'</p>
            </div>
        </th>
        <td>'.$row['message'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td>'.$row['reply'].'</td>
        <td>'.$row['replydate'].'</td>
        <td>
            <div class="amoutn_action d-flex align-items-center">
                
                <div class="dropdown ms-4">
                    <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="replymessage.php?id='.$row['id'].'">Reply</a>
                        
                    </div>
                </div>
            </div>
        </td>
        
        
        </tr>';
    }
}

function replymessage($id, $reply)
{
    include '../includes/dbcon.php';
    $replydate = date('jS F, Y');
    $update = mysqli_query($conn, "UPDATE messages SET reply = '$reply', replydate = '$replydate' WHERE id = '$id' ");
    if ($update) {
        echo 'replysuccess';
    } else {
        echo 'failed';
    }
}

function deleteresidence($id)
{
    include 'dbcon.php';
    $del = mysqli_query($conn, "DELETE FROM residence WHERE id = '$id'");
    if ($del) {
        echo 'residencedeleted';
    } else {
        echo 'failed';
    }
}

function deletestaff($id)
{
    include 'dbcon.php';
    $del = mysqli_query($conn, "DELETE FROM staff WHERE id = '$id'");
    if ($del) {
        echo 'staffdeleted';
    } else {
        echo 'failed';
    }
}

function editresidence($id, $name, $email, $phone, $address, $map, $dob, $gender, $medcondition, $period, $time)
{
    include 'dbcon.php';
    if (empty($_FILES['image']['name']) && empty($_FILES['pastrecord']['name'])) {
        $filename = '';
        $pastrecord = '';
        $update = mysqli_query($conn, "UPDATE residence SET name = '$name', email = '$email', phone = '$phone', address = '$address', maplink = '$map', dob = '$dob',dob = '$dob',gender ='$gender', medcondition='$medcondition' ,howlong='$period',timetaken='$time' WHERE id = '$id' ");
        if ($update) {
            echo 'Updated Successfully';
        } else {
            echo 'failed';
        }
    } elseif (empty($_FILES['image']['name']) && !empty($_FILES['pastrecord']['name'])) {
        $filename = '';
        $pastrecord = $_FILES['pastrecord']['name'];
        $pastrecordtmp = $_FILES['pastrecord']['tmp_name'];
        $pastrecordpath = '../upload/'.$pastrecord;
        // move_uploaded_file($pastrecordtmp, $pastrecordpath);

        if (move_uploaded_file($pastrecordtmp, $pastrecordpath)) {
            $update = mysqli_query($conn, "UPDATE residence SET name = '$name', email = '$email', phone = '$phone', address = '$address', maplink = '$map', dob = '$dob',dob = '$dob',gender ='$gender', medcondition='$medcondition',pastrecord= '$pastrecord' ,howlong='$period',timetaken='$time' WHERE id = '$id' ");
            if ($update) {
                echo 'Updated Successfully';
            } else {
                echo 'failed';
            }
        } else {
            echo 'failed to upload';
        }
    } elseif (!empty($_FILES['image']['name']) && empty($_FILES['pastrecord']['name'])) {
        $filename = $_FILES['image']['name'];
        $filetmp = $_FILES['image']['tmp_name'];
        $filepath = '../upload/'.$filename;
        $pastrecord = '';
        // move_uploaded_file($filetmp, $filepath);
        if (move_uploaded_file($filetmp, $filepath)) {
            $update = mysqli_query($conn, "UPDATE residence SET name = '$name', email = '$email', phone = '$phone', address = '$address', maplink = '$map', dob = '$dob',dob = '$dob',gender ='$gender', medcondition='$medcondition',image ='$filename' ,howlong='$period',timetaken='$time' WHERE id = '$id' ");
            if ($update) {
                echo 'Updated Successfully';
            } else {
                echo 'failed';
            }
        } else {
            echo 'failed to upload';
        }
    } else {
        $filename = $_FILES['image']['name'];
        $filetmp = $_FILES['image']['tmp_name'];
        $filepath = '../upload/'.$filename;

        $pastrecord = $_FILES['pastrecord']['name'];
        $pastrecordtmp = $_FILES['pastrecord']['tmp_name'];
        $pastrecordpath = '../upload/'.$pastrecord;

        if (move_uploaded_file($filetmp, $filepath) && move_uploaded_file($pastrecordtmp, $pastrecordpath)) {
            $update = mysqli_query($conn, "UPDATE residence SET name = '$name', email = '$email', phone = '$phone', address = '$address', maplink = '$map', dob = '$dob',dob = '$dob',gender ='$gender', medcondition='$medcondition',pastrecord= '$pastrecord',image ='$filename' ,howlong='$period',timetaken='$time' WHERE id = '$id' ");
            if ($update) {
                echo 'Updated Successfully';
            } else {
                echo 'failed';
            }
        } else {
            echo 'failed to upload';
        }
    }
}

// edit staff
function editstaff($id, $name, $email, $phone, $dob, $password, $repass)
{
    include 'dbcon.php';
    if (empty(trim($name)) || empty(trim($email)) || empty(trim($phone)) || empty(trim($dob))) {
        echo 'please fill all fields';
    } else {
        if ($repass != $password) {
            echo 'Password mismatch';
        } elseif (empty($_FILES['image']['name'])) {
            if (empty(trim($password))) {
                $update = mysqli_query($conn, "UPDATE staff SET name = '$name', email = '$email', phone = '$phone', dob = '$dob' WHERE id = '$id' ");
                if ($update) {
                    echo 'Updated Successfully';
                } else {
                    echo 'failed';
                }
            } else {
                $password = md5(mysqli_real_escape_string($conn, $password));
                $update = mysqli_query($conn, "UPDATE staff SET name = '$name', email = '$email', phone = '$phone', dob = '$dob', password = '$password' WHERE id = '$id' ");
                if ($update) {
                    echo 'Updated Successfully';
                } else {
                    echo 'failed';
                }
            }
        } else {
            $filename = $_FILES['image']['name'];
            $filetmp = $_FILES['image']['tmp_name'];
            $filepath = '../upload/'.$filename;
            if (move_uploaded_file($filetmp, $filepath)) {
                if (empty(trim($password))) {
                    $update = mysqli_query($conn, "UPDATE staff SET name = '$name', email = '$email', phone = '$phone', dob = '$dob', pic = '$filename' WHERE id = '$id' ");
                    if ($update) {
                        echo 'Updated Successfully';
                    } else {
                        echo 'failed';
                    }
                } else {
                    $password = md5(mysqli_real_escape_string($conn, $password));
                    $update = mysqli_query($conn, "UPDATE staff SET name = '$name', email = '$email', phone = '$phone', dob = '$dob', password = '$password', pic = '$filename' WHERE id = '$id' ");
                    if ($update) {
                        echo 'Updated Successfully';
                    } else {
                        echo 'failed';
                    }
                }
            } else {
                echo 'failed to upload';
            }
        }
    }
}
