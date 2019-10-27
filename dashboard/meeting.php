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
                    <div class="col-lg-6 col-md-4 col-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Meetings</h3>
                        
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
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
                    <div class="col-lg-2 col-md-2">
                        <!-- <button class="btn pull-right btn-danger">Export</button> -->
                        <div class="exports">
                          <button type="button" class="btn pull-right btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Export as Word  </a>
                            <a class="dropdown-item" href="#">Export as CSV</a>
                            <a class="dropdown-item" href="#">Export as PDF</a>
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
               
                <div class="row recent-table">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="demo-foo-addrow" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th class="b1">Subject</th>
                                                <th>Date & Time</th>
                                                <th>Members</th>
                                                <th>Feedback</th>
                                                <th class="b2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>asdDaily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>10</td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>10 <i class="fa fa-caret-up up-green"></i></td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>8</td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>8</td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>8 <i class="fa fa-caret-down down-red"></i></td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>10</td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>asdDaily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>10</td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>10 <i class="fa fa-caret-up up-green"></i></td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>8</td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>8</td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>8 <i class="fa fa-caret-down down-red"></i></td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                            <tr>
                                                <td>Daily Standup Meeting…</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td>12</td>
                                                <td>10</td>
                                                <td><a href="">View Details ></a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split m-t-30"> </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                    </table>
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