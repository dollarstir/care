<?php
include '../includes/adminfunction.php';

begin1('Home'); ?>

<body class="crm_body_bg">



    <?php adminsidebar(); ?>


    <section class="main_content dashboard_part">

        <?php adminheader(); ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="img/icon/man.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter"><?php echo countall('residence'); ?></span> </h3>
                                                    <p>All Residents</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="img/icon/cap.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter"><?php echo availableresidence(); ?></span> </h3>
                                                    <p>Available Residents</p>
                                                </div>
                                            </div>

                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="img/icon/cap.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter"><?php undertreatment(); ?></span> </h3>
                                                    <p>Residents Under treatment</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="col-xl-12">
                        <div class="white_box QA_section card_height_100">
                            <div class="white_box_tittle list_header m-0 align-items-center">
                                <div class="main-title mb-sm-15">
                                    <h3 class="m-0 nowrap">Available Residence</h3>
                                </div>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field-area2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table ">

                                <table class="table lms_table_active2">
                                    <thead>
                                        <tr>
                                            <th scope="col"> Name of Residence</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Appointment Date</th>
                                            
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/pataint.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/2.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/3.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/4.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/5.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/6.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/6.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-xl-12">
                        <div class="white_box QA_section card_height_100">
                            <div class="white_box_tittle list_header m-0 align-items-center">
                                <div class="main-title mb-sm-15">
                                    <h3 class="m-0 nowrap">Work History</h3>
                                </div>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field-area2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table ">

                                <table class="table lms_table_active2">
                                    <thead>
                                        <tr>
                                            <th scope="col"> Name of Residence</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Appointment Date</th>
                                            
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/pataint.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/2.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/3.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/4.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/5.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/6.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="patient_thumb d-flex align-items-center">
                                                    <div class="student_list_img mr_20">
                                                        <img src="img/patient/6.png" alt="" srcset="">
                                                    </div>
                                                    <p>Jhon Kural</p>
                                                </div>
                                            </th>
                                            <td>Monte Carlo</td>
                                            <td>11/03/2020</td>
                                            
                                            <td>
                                                <div class="amoutn_action d-flex align-items-center">
                                                    
                                                    <div class="dropdown ms-4">
                                                        <a class="btn btn-primary dropdown-toggle" style="color:white !important;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Request schedule</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->
                    
                    
                    
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 ?? Home Assit <a href="#"> <i class="ti-heart"></i> </a><a href="#">
                                    Admin</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap1.min.js"></script>

    <script src="js/metisMenu.js"></script>

    <script src="vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="vendors/chartlist/Chart.min.js"></script>

    <script src="vendors/count_up/jquery.counterup.min.js"></script>

    <script src="vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="vendors/gijgo/gijgo.min.js"></script>

    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>
    <script src="js/chart.min.js"></script>

    <script src="vendors/progressbar/jquery.barfiller.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>

    <script src="vendors/text_editor/summernote-bs4.js"></script>
    <script src="vendors/apex_chart/apexcharts.js"></script>

    <script src="js/custom.js"></script>
    <script src="vendors/apex_chart/bar_active_1.js"></script>
    <script src="vendors/apex_chart/apex_chart_list.js"></script>
</body>

</html>