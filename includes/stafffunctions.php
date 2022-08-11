<?php

function begin($title)
{
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<script>window.location.href = "../index.php";</script>';
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

 function staffsidebar()
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
                 <li><a href="residence.php">Available Residence</a></li>
                 
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
                 <span>Support</span>
             </a>
             <ul>
                 <li><a href="support.php">Contact Support</a></li>
                 <li><a href="messages.php">View Messages</a></li>
                 
             </ul>
         </li>
         
     </ul>
 </nav>';
 }
function staffheader()
{
    include 'dbcon.php';

    $id = $_SESSION['id'];
    $sel = mysqli_query($conn, "SELECT * FROM staff WHERE id = '$id'");
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

function support($staffid, $message)
{
    include 'dbcon.php';
    if (empty(trim($message))) {
        echo 'please enter a message';
    } else {
        $dateadded = date('jS F, Y');
        if (mysqli_query($conn, "INSERT INTO messages (staffid, message,dateadded) VALUES ('$staffid', '$message', '$dateadded')")) {
            echo 'success';
        } else {
            echo 'Failed to send message';
        }
    }
}

function listresidencestaff()
{
    // fetch all residence from the database  and display them in the table
    include 'dbcon.php';
    $sel = mysqli_query($conn, 'SELECT * FROM residence WHERE status = "available"');
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
        <td>'.$row['status'].'</td>
        
        <td>
            <div class="amoutn_action d-flex align-items-center">
                
                <div class="dropdown ms-4">
                    <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="'.$row['maplink'].'" target="blank">View on map</a>
                        <button class="dropdown-item makerequest" id="'.$row['id'].'">Make request</button>
                        

                    </div>
                </div>
            </div>
        </td>
    </tr>';
    }
}

function availableresidencestaff()
{
    include 'dbcon.php';
    $sel = mysqli_query($conn, "SELECT * FROM residence WHERE status = 'available'");
    $count = mysqli_num_rows($sel);

    return $count;
}

function workhistory()
{
    // session_start();
    $id = $_SESSION['id'];
    include 'dbcon.php';
    $sel = mysqli_query($conn, "SELECT * FROM records WHERE staffid = '$id'");
    while ($row = mysqli_fetch_array($sel)) {
        $sel2 = mysqli_query($conn, "SELECT * FROM residence WHERE id = '$row[residenceid]'");
        $row2 = mysqli_fetch_array($sel2);
        echo '<tr>
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
                        <a class="dropdown-item" href="'.$row2['maplink'].'" target="blank">View on map</a>';
        if ($row['status'] == 'approved') {
            echo '<a class="dropdown-item" href="completetask.php?id='.$row['id'].'&residenceid='.$row2['id'].'&staffid='.$row['staffid'].'">Click to complete</a>
            <a class="dropdown-item" target="blank" href="../upload/'.$row2['pastrecord'].'">View Residence Records</a>
            ';
        } elseif ($row['status'] == 'pending') {
            echo '<a class="dropdown-item" href="deleterequest.php?id='.$row['id'].'&residenceid='.$row2['id'].'">Cancel Request</a>';
        } elseif ($row['status'] == 'completed') {
            echo '<a class="dropdown-item" href="completetask.php?id='.$row['id'].'&residenceid='.$row2['id'].'&staffid='.$row['staffid'].'">View | Edit report</a>';
        }

        echo '</div>
                </div>
            </div>
        </td>';
    }
}

// adding staff report on residence

function completetask($id, $residenceid, $staffreport, $residencecomment)
{
    include 'dbcon.php';
    $datecompleted = date('jS F, Y');
    $update = mysqli_query($conn, "UPDATE records SET status = 'completed', datecompleted = '$datecompleted', staffreport = '$staffreport', residencecomment = '$residencecomment' WHERE id = '$id'");
    $update2 = mysqli_query($conn, "UPDATE residence SET status = 'completed', lasttreated = '$datecompleted'  WHERE id = '$residenceid'");
    if ($update && $update2) {
        echo 'reportsuccess';
    } else {
        echo 'failed';
    }
}

// staff messages
function messagesssent()
{
    include '../includes/dbcon.php';
    $id = $_SESSION['id'];
    $sel = mysqli_query($conn, "SELECT * FROM messages WHERE staffid = '$id'  ORDER BY id DESC");
    while ($row = mysqli_fetch_array($sel)) {
        echo '<tr>

        
        
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
                        <button class="dropdown-item deletemessage" id="'.$row['id'].'">Delete</button>
                        
                    </div>
                </div>
            </div>
        </td>
        
        
        </tr>';
    }
}

function deletemessage($id)
{
    include 'dbcon.php';
    $del = mysqli_query($conn, "DELETE FROM messages WHERE id = '$id'");
    if ($del) {
        echo 'messagedeleted';
    } else {
        echo 'failed';
    }
}

// makingrequest for residence
function makerequest($id)
{
    session_start();
    include 'dbcon.php';
    $date = date('jS F, Y');
    $staffid = $_SESSION['id'];
    $update = mysqli_query($conn, "UPDATE residence SET status = 'requested' WHERE id = '$id'");
    $insert = mysqli_query($conn, "INSERT INTO records (residenceid, staffid, requestdate,status) VALUES ('$id', '$staffid', '$date', 'pending')");
    if ($update && $insert) {
        echo 'requestsuccess';
    } else {
        echo 'failed to make request';
    }
}

function completedtask()
{
    include '../includes/dbcon.php';
    $id = $_SESSION['id'];
    $sel = mysqli_query($conn, "SELECT * FROM records WHERE staffid = '$id' AND status = 'completed'");
    $c = mysqli_num_rows($sel);

    return $c;
}
