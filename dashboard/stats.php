<?php include("includes/dashboard-header.php"); ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles filters">
                    <div class="col-lg-5 col-md-2 col-6 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Stats</h3>
                        
                    </div>

                    <div class="col-lg-3 col-md-6 offset-md-1 col-6">
                        <select id="sortingField" class="custom-select form-control input-sm col-md-6 pull-right ">
                            <option>Last Year</option>
                            <option>Age</option>
                            <option>Address</option>
                            <option>Country</option>
                            <option>Married</option>
                        </select>
                    </div>
                    <div class="col-lg-1 offset-lg-1 col-md-1 col-6 align-self-center">
                        <img class="" src="../assets/images/share-symbol.png">
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-6 col-6">
                        <button class="btn pull-right btn-danger ">Export</button>
                    </div>
                    
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-info">
                            <div class="box bg-info text-center">
                                <h6 class="text-white">Total<br> Meeting</h6>
                                <i class="fa fa-sort-desc down-red"></i>
                                <h1 class="font-light text-white">170</h1>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-primary card-inverse">
                            <div class="box bg-info text-center">
                                <h6 class="text-white">Total<br> Feedbacks</h6>
                                <i class="fa fa-sort-desc down-red"></i>
                                <h1 class="font-light text-white">140</h1>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-success">
                            <div class="box bg-info text-center">
                                <h6 class="text-white">No<br> Response</h6>
                                <i class="fa fa-sort-desc down-red"></i>
                                <h1 class="font-light text-white">136</h1>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-warning">
                            <div class="box bg-info text-center">
                                <h6 class="text-white">Avg Meeting<br> Score</h6>
                                <i class="fa fa-caret-up up-green"></i>
                                <h1 class="font-light text-white">72</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               <div class="row page-titles filters">
                    <div class="col-lg-4 col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Feedback Summary</h3>
                        
                    </div>
                    <div class="col-lg-2 offset-lg-4 col-md-3 col-6">
                        <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><img src="../assets/images/controls.png"></div>
                        </div>
                        <select id="sortingField" class="custom-select form-control input-sm">
                            <option>Filter</option>
                            <option>Age</option>
                            <option>Address</option>
                            <option>Country</option>
                            <option>Married</option>
                        </select>
                      </div>
                        
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <select id="sortingField" class="custom-select form-control input-sm">
                            <option>Sort By</option>
                            <option>Age</option>
                            <option>Address</option>
                            <option>Country</option>
                            <option>Married</option>
                        </select>
                    </div>
                </div>
                <div class="row feedback-summary">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-10">
                                        <p class="quest">Q1. Here is a question for you.</p>
                                    </div>
                                    <div class="col-md-4 col-2">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-155px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row response">
                                    <div class="col-md-3 col-12">
                                        <p>Response:</p>
                                        <span>Option 1 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 2 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 3 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 4 - 7 (10%)</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8 col-10">
                                        <p class="quest">Q1. Here is a question for you.</p>
                                    </div>
                                    <div class="col-md-4 col-2">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-155px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row response">
                                    <div class="col-md-3 col-12">
                                        <p>Response:</p>
                                        <span>Option 1 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 2 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 3 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 4 - 7 (10%)</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8 col-10">
                                        <p class="quest">Q1. Here is a question for you.</p>
                                    </div>
                                    <div class="col-md-4 col-2">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-155px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row response">
                                    <div class="col-md-3 col-12">
                                        <p>Response:</p>
                                        <span>Option 1 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 2 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 3 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 4 - 7 (10%)</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8 col-10">
                                        <p class="quest">Q1. Here is a question for you.</p>
                                    </div>
                                    <div class="col-md-4 col-2">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-155px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row response">
                                    <div class="ccol-md-3 col-12">
                                        <p>Response:</p>
                                        <span>Option 1 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 2 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 3 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 4 - 7 (10%)</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8 col-10">
                                        <p class="quest">Q1. Here is a question for you.</p>
                                    </div>
                                    <div class="col-md-4 col-2">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-155px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row response">
                                    <div class="col-md-3 col-12">
                                        <p>Response:</p>
                                        <span>Option 1 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 2 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 3 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 4 - 7 (10%)</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8 col-10">
                                        <p class="quest">Q1. Here is a question for you.</p>
                                    </div>
                                    <div class="col-md-4 col-2">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-155px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row response">
                                    <div class="col-md-3 col-12">
                                        <p>Response:</p>
                                        <span>Option 1 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 2 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 3 - 7 (10%)</span>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <span>Option 4 - 7 (10%)</span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
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