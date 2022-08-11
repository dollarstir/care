<?php
include '../includes/adminfunction.php';

begin1('Reply Messages'); ?>

<body class="crm_body_bg">



<?php adminsidebar(); ?>


    <section class="main_content dashboard_part">

    <?php adminheader();

    ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">


                            <?php
                                include '../includes/dbcon.php';
                                $id = $_GET['id'];
                                $sel = mysqli_query($conn, "SELECT * FROM messages WHERE   id = '$id'");
                                $row = mysqli_fetch_array($sel);
                                $staffid = $row['staffid'];
                                $sel2 = mysqli_query($conn, "SELECT * FROM staff WHERE id = '$staffid' ");
                                $row2 = mysqli_fetch_array($sel2);
                                ?>
                                <div class="main-title">
                                    <h3 class="mb-0">Reply to  <?php echo $row2['name']; ?></h3>
                                </div>
                            </div>
                            <form class="replymessage">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Message</label>
                                    <textarea class="form-control" id="exampleFormControlInput1"
                                        placeholder="enter your report" name="message"  readonly><?php echo $row['message']; ?></textarea>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Reply Message</label>
                                    <textarea class="form-control" id="exampleFormControlInput1"
                                        placeholder="enter reply" name="reply" ><?php echo  $row['reply']; ?></textarea>
                                        
                                </div>

                                <button type="submit" class="btn btn-primary">Send</button>


                                
                                
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
                                    Staff</a></p>
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
    <script src="../assets/js/sweetalert2.all.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="../includes/sender.js"></script>
</body>

</html>