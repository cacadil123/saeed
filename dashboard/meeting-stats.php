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
                    <div class="col-lg-5 col-md-7 col-sm-7 col-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Daily Standup Meetings</h3>
                        
                    </div>

                    <div class="col-lg-1 offset-lg-5 col-md-1 offset-md-2 col-6 align-self-center myshare">
                        <img  src="../assets/images/share-symbol.png">
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-6 col-6">
                        <button class="btn pull-right btn-danger ">Export</button>
                    </div>
                    
                </div>
                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
             <div class="row meeting-stats">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> 
                                <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">
                                <span class="">STATS</span>
                                </a> 
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" onclick="g_meeting()" data-toggle="tab" href="#profile" role="tab" aria-selected="false">
                                    <span class="">GOOD MEETING</span>
                                </a> 
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" onclick="ng_meeting()" data-toggle="tab" href="#messages" role="tab" aria-selected="false">
                                    <span class="">NOT A GOOD MEETING</span>
                                </a> 
                            </li>
                        </ul>
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active show" id="home" role="tabpanel">
                                <div class="home-wrap p-20">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>date & time</p>
                                            <h4 class="date">April 17, 2019</h4>
                                            <span class="time">14:07 IST</span>
                                        </div>
                                        <div class="col-md-3">
                                            <p>Members</p>
                                            <h4>12</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <p>feedback</p>
                                            <h4 class="blue">10</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <p>no response</p>
                                            <h4 class="grey">02</h4>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="home-wrap2 p-20">
                                    <div class="row">
                                        <div class="col-md-6 left-line">
                                            <p class="text-uppercase">Meeting score</p>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <div class="fz-mscore">
                                                        <div class="m-score">
                                                            <h3>84</h3>
                                                        </div>
                                                        <small class="text-uppercase">This is a<br> GOOd meeting</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <p class="m-review">0 - 50 = Bad Meeting</p>
                                                    <p class="m-review">50 - 75 = Okay Meeting</p>
                                                    <p class="m-review">75 - 100 = Good Meeting</p>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-uppercase">Round up</p>
                                            <div class="row">
                                                <div class="col-lg-4 col-12">
                                                    <canvas id="howmeet1" height="250"> </canvas>
                                                </div>
                                                <div class="col-lg-7 col-12">
                                                    <div class="col">
                                                        <!-- <p class="m-review legend1">Good Meeting - 3 (10%)</p>
                                                        <p class="m-review legend2">Not a Good Meeting - 7 (10%)</p>
                                                        <p class="m-review legend3">No Response - 7 (10%)</p> -->
                                                        <div id="js-legend" class="chart-legend"></div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane g-meeting p-20"  id="profile" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 left-line">
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row align-items-center ">
                                                    <div class="">
                                                        <!-- <p class="m-review"><i class="fa fa-circle orange-c"></i> Option 1</p>
                                                        <p class="m-review"><i class="fa fa-circle blue-c"></i> Option 2</p> -->
                                                        <div id="js-legend2" class="chart-legend"></div>
                                                    </div>
                                                    <div class="doughnut1">
                                                        <canvas id="doughnut1" width="200" height="180"></canvas>

                                                    </div>
                                                    <div class="myreview">
                                                        <p class="m-review option">Option 1: 7 (10%)</p>
                                                        <p class="m-review option">Option 2: 7 (10%)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-8 col-10">
                                                <p class="quest">Q2. Here is a question for you.</p>
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row align-items-center ">
                                        
                                                    <div class="howmeet2">
                                                        <!-- <canvas id="barchart1" height="150"></canvas> -->
                                                        <canvas id="howmeet2" height="200"> </canvas>
                                                    </div>
                                                    <div class="myoption">
                                                        <div class="col">
                                                            <p class="m-review option">Option 1: 7 (10%)</p>
                                                            <p class="m-review option">Option 2: 7 (10%)</p>
                                                            <p class="m-review option">Option 3: 7 (10%)</p>
                                                            <p class="m-review option">Option 4: 7 (10%)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 left-line">
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row align-items-center ">
                                                    <div class="">
                                                        <!-- <p class="m-review"><i class="fa fa-circle orange-c"></i> Option 1</p>
                                                        <p class="m-review"><i class="fa fa-circle blue-c"></i> Option 2</p> -->
                                                        <div id="js-legend3" class="chart-legend"></div>
                                                    </div>
                                                    <div class="doughnut2">
                                                        <canvas id="doughnut2" height="180"> </canvas>
                                                    </div>
                                                    <div class="myreview">
                                                        <p class="m-review option">Option 1: 7 (10%)</p>
                                                        <p class="m-review option">Option 2: 7 (10%)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row align-items-center ">
                                                    
                                                    <div class="howmeet4">
                                                        <canvas id="howmeet4" height="200"> </canvas>
                                                    </div>
                                                    <div class="myoption">
                                                        <p class="m-review option">Option 1: 7 (10%)</p>
                                                            <p class="m-review option">Option 2: 7 (10%)</p>
                                                            <p class="m-review option">Option 3: 7 (10%)</p>
                                                            <p class="m-review option">Option 4: 7 (10%)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane g-meeting p-20" id="messages" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 left-line">
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row align-items-center ">
                                                    <div class="">
                                                        <!-- <p class="m-review"><i class="fa fa-circle orange-c"></i> Option 1</p>
                                                        <p class="m-review"><i class="fa fa-circle blue-c"></i> Option 2</p> -->
                                                        <div id="js-legend4" class="chart-legend"></div>
                                                    </div>
                                                    <div class="doughnut3">
                                                        <canvas id="doughnut3" height="180"></canvas>

                                                    </div>
                                                    <div class="myreview">
                                                        <p class="m-review option">Option 1: 7 (10%)</p>
                                                        <p class="m-review option">Option 2: 7 (10%)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-8 col-10">
                                                <p class="quest">Q2. Here is a question for you.</p>
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row align-items-center ">
                                        
                                                    <div class="howmeet3">
                                                        <!-- <canvas id="barchart1" height="150"></canvas> -->
                                                        <canvas id="howmeet3" height="200"> </canvas>
                                                    </div>
                                                    <div class="myreview">
                                                        <p class="m-review option">Option 1: 7 (10%)</p>
                                                        <p class="m-review option">Option 2: 7 (10%)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 left-line">
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row align-items-center ">
                                                    <div class="">
                                                        <!-- <p class="m-review"><i class="fa fa-circle orange-c"></i> Option 1</p>
                                                        <p class="m-review"><i class="fa fa-circle blue-c"></i> Option 2</p> -->
                                                        <div id="js-legend5" class="chart-legend"></div>
                                                    </div>
                                                    <div class="doughnut4">
                                                        <canvas id="doughnut4" height="180"> </canvas>
                                                    </div>
                                                    <div class="myreview">
                                                        <p class="m-review option">Option 1: 7 (10%)</p>
                                                        <p class="m-review option">Option 2: 7 (10%)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row align-items-center ">
                                                    
                                                    <div class="howmeet5">
                                                        <canvas id="howmeet5" height="200"> </canvas>
                                                    </div>
                                                    <div class="myreview">
                                                        <p class="m-review option">Option 1: 7 (10%)</p>
                                                        <p class="m-review option">Option 2: 7 (10%)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
