<?php include("includes/dashboard-header.php"); ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid myhalf">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                
                <div class="row feedback-form">
                    <!-- column -->
                    <div class="col-lg-3 col-sm-4 custom-form-bg">
                        <div class="custom-form-wrap">
                            <h3 class="text-themecolor m-b-0 m-t-0">Questions</h3>
                                 <!-- Card -->
                            <div class="card welcom-card">
                                <div class="card-body">
                                    <h4 class="card-title">Welcome Screen</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                </div>
                            </div>
                            <!-- Card -->
                             <!-- Card -->
                            <div class="card add-question">
                                <div class="card-body">
                                    <h4 class="card-title">+ Add Question</h4>
                                    
                                </div>
                            </div>
                            <div class="card add-question active-question">
                                <div class="card-body">
                                    <i class="fa fa-trash text-right"></i>
                                    <h4 class="card-title">Question 1</h4>
                                    
                                </div>
                            </div>
                            <!-- Card -->
                             <!-- Card -->
                            <div class="card say-thanks">
                                <div class="card-body">
                                    <h4 class="card-title">Say Thanks</h4>
                                    <p class="card-text">+ Add a Thank You Screen</p>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-8">
                        <div class="form-input">
                            <input type="text" placeholder="Enter Form Name" name="">
                        </div>
                        <div class="form-btns">
                            <button class="btn pull-right btn-danger">Select</button>
                            <button class="btn pull-right btn-primary mr-2">Edit</button>
                            
                        </div>
                        <div class="welcom-scc">
                            <label class="custom-file-upload">
                                <input type="file" onchange="readURL(this);" />
                                <div>
                                    <img id="blah" src="../assets/images/upload.png" alt="your image" />
                                </div>
                                
                            </label>
                            <h3 class="">Welcome Text Goes Here...</h3>
                            <p>Enter Description Here</p>
                            <a href="#" class="btn pull-right btn-info">Start</a>
                        </div>
                        <div class="welcom-scc question-added">
                            <i class="fa fa-2x fa-trash text-right"></i>
                            <h3 class="">Enter Question Here</h3>
                            <div class="form-input">
                                <input type="text" placeholder="Answer 1" name="">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </div><br>
                            <div class="form-input">
                                <input type="text" placeholder="Answer 2" name="">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </div><br>
                            <a href="#">+Add another answer</a>
                        </div>
                        <div class="welcom-scc thank-you">
                            <label class="custom-file-upload">
                                <input type="file" onchange="readURL(this);" />
                                <div>
                                    <img id="blah" src="../assets/images/upload.png" alt="your image" />
                                </div>
                                
                            </label>
                            <h3 class="">Thank You Text Goes Here</h3>
                            <p>Enter Description Here</p>
                            <a href="#" class="btn pull-right btn-info">Close</a>
                        </div>
                        <div class="form-actions">
                            <a href="#" class="btn pull-right btn-info">Quit</a>
                            <div class="card add-question action">
                                <div class="card-body">
                                    <h4 class="card-title">+ Add Question</h4>
                                </div>
                            </div>
                            <a href="#" class="btn pull-right btn-primary">Save</a>
                        </div>
                    </div>
                    
                    <!-- column -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
                
            </div>    
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
           
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
<?php include("includes/dashboard-footer.php"); ?>
<!-- <script type="text/javascript">
$(".add-question").click(function(){
  $(this).addClass('active-question');
  $(this).find('.card-title').text('Question 1');
});
</script> -->