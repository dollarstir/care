<?php

function begin($title)
{
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
                 <li><a href="">Available Residence</a></li>
                 
             </ul>
         </li>
         <li class="">
             <a class="has-arrow" href="#" aria-expanded="false">
                 <img src="img/menu-icon/3.svg" alt="">
                 <span>Records</span>
             </a>
             <ul>
                 <li><a href="">View Records</a></li>
                 
             </ul>
         </li>
         
     </ul>
 </nav>';
 }
function staffheader()
{
    echo '<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area">
                    
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
                            <p>Neurologist </p>
                            <h5>Dr. Robar Smith</h5>
                            <div class="profile_info_details">
                                <a href="#">My Profile <i class="ti-user"></i></a>
                                <a href="#">Settings <i class="ti-settings"></i></a>
                                <a href="lgo">Log Out <i class="ti-shift-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}
