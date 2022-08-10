<?php
include '../includes/adminfunction.php';

begin1('Add Stuff'); ?>

<body class="crm_body_bg">



<?php adminsidebar(); ?>


    <section class="main_content dashboard_part">

    <?php adminheader(); ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Add Staff</h3>
                                </div>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Phone</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Date of Birth</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="dob">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Profile Picture</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="image">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1"></label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="password">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1"></label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="repass">
                                </div>
                                


                                <!-- <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Select option</label>
                                    <select class="default_sel mb_30 w-100">
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div> -->
                                
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            <div class="footer_part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer_iner text-center">
                            <p>2020 © Home Assit <a href="#"> <i class="ti-heart"></i> </a><a href="#">
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
    <script src="../assets/js/sweetalert2.all.min.js"></script>
    <script src="../includes/sender.js"></script>
</body>

</html>