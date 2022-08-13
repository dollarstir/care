<?php
include '../includes/adminfunction.php';

begin1('Edit Residence'); ?>

<body class="crm_body_bg">



<?php adminsidebar(); ?>


    <section class="main_content dashboard_part">

    <?php adminheader();
    include '../includes/dbcon.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM residence WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $timetaken = $row['timetaken'];
    $timetaken = explode('-', $timetaken);
    $from = $timetaken[0];
    $to = $timetaken[1];
    ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Edit Resident <?php echo $row['name']; ?> Details</h3>
                                </div>
                            </div>
                            <form class="editresidence">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="name" value="<?php echo $row['name']; ?>">

                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="email" value="<?php echo $row['email']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Phone Number</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="phone" value="<?php echo $row['phone']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Resident Address</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="address" value="<?php echo $row['address']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Link to location on Map</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="map" value="<?php echo $row['maplink']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Date of Birth</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="dob" value="<?php echo $row['dob']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Select Gender</label>
                                    <select class="default_sel mb_30 w-100" name="gender" value="<?php echo $row['gender']; ?>">
                                        <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Care Plan</label>
                                    <textarea class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="medcondition"><?php echo $row['medcondition']; ?></textarea>
                                </div>
                                <embed src="../upload/<?php echo $row['pastrecord']; ?>"  style="width:100%;height:150px;">

                                <div class="mb-3">
                                    
                                    <label class="form-label" for="exampleFormControlInput1">Change Past Record (Leave it blank to maintain current one)</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="pastrecord" value="<?php echo $row['pastrecord']; ?>">
                                </div>

                                <embed src="../upload/<?php echo $row['image']; ?>"  style="width:150px;height:150px;">
                                
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Change Residnce Picture (Leave it blank to maintain current one)</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="image" value="<?php echo  $row['image']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Period</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="period" value="<?php echo $row['howlong']; ?>" >
                                </div>

                                <div class="mb-3">
                                    
                                    <label class="form-label" for="exampleFormControlInput1"> Current Time From (<?php echo  $from; ?>) </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="from" value=" <?php echo  $from; ?>" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1"> Current Time To (<?php echo  $to; ?>) </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="to" value="<?php echo  $to; ?>">
                                </div>
                                


                                <button type="submit" class="btn btn-primary">Save</button>
                                
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