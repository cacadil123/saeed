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
                        <h3 class="text-themecolor m-b-0 m-t-0">User Admin</h3>
                        
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
                        <button data-toggle="modal" data-target="#add-user" href="javascript:void(0);" class="btn pull-right btn-danger">+ Add User</button>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
                <div class="row recent-table user-admin-table">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="demo-foo-addrow" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th class="b1">Name</th>
                                                <th>Access</th>
                                                <th>Last Activity</th>
                                                <th class="b2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mike Matthews</td>
                                                <td>Admin</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td class="text-nowrap">
                                                    <a data-toggle="modal" data-target="#edit-user" href="javascript:void(0);"> <i class="fa fa-pencil text-inverse"></i> </a>
                                                    <a data-toggle="modal" data-target="#delete-user" href="javascript:void(0);"> <i class="fa fa-trash-o text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mike Matthews</td>
                                                <td>Admin</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td class="text-nowrap">
                                                    <a href="#"> <i class="fa fa-pencil text-inverse"></i> </a>
                                                    <a href="#"> <i class="fa fa-trash-o text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mike Matthews</td>
                                                <td>Admin</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td class="text-nowrap">
                                                    <a href="#"> <i class="fa fa-pencil text-inverse"></i> </a>
                                                    <a href="#"> <i class="fa fa-trash-o text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mike Matthews</td>
                                                <td>Admin</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td class="text-nowrap">
                                                    <a href="#"> <i class="fa fa-pencil text-inverse"></i> </a>
                                                    <a href="#"> <i class="fa fa-trash-o text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mike Matthews</td>
                                                <td>Admin</td>
                                                <td>April 17, 2019<br><span>12.10 PM</span></td>
                                                <td class="text-nowrap">
                                                    <a href="#"> <i class="fa fa-pencil text-inverse"></i> </a>
                                                    <a href="#"> <i class="fa fa-trash-o text-danger"></i> </a>
                                                </td>
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
<div id="add-user" class="modal fade edit-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Add new user</h4>
                <form class="form-horizontal m-t-40">
                    <div class="form-group">
                        <input type="email" class="form-control col-sm-7 col-12" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <select class="custom-select col-sm-7 col-12" id="">
                            <option selected>Access</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="row justify-content-center m-t-40">
                        <div class="col-sm-4 col-6">
                            <button type="button" class="btn btn-block btn-danger">Add User</button>
                        </div>
                        <div class="col-sm-4 col-6">
                            <button data-dismiss="modal" type="button" class="btn btn-block btn-outline-info">Cancel</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div id="edit-user" class="modal fade edit-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Edit User</h4>
                <form class="form-horizontal m-t-40">
                    <div class="form-group">
                        <input type="text" class="form-control col-sm-7 col-12" placeholder="John@doe.com">
                    </div>
                    <div class="form-group">
                        <select class="custom-select col-sm-7 col-12" id="">
                            <option selected>Manager</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="row justify-content-center m-t-40">
                        <div class="col-sm-4 col-6">
                            <button type="button" class="btn btn-block btn-danger">Update</button>
                        </div>
                        <div class="col-sm-4 col-6">
                            <button data-dismiss="modal" type="button" class="btn btn-block btn-outline-info">Cancel</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div id="delete-user" class="modal fade edit-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img src="../assets/images/stop.png">
                <h4>Are you sure you want to delete this?</h4>
                <form class="form-horizontal m-t-40">
                    
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-6">
                            <button type="button" class="btn btn-block btn-danger">Yes, Delete</button>
                        </div>
                        <div class="col-sm-4 col-6">
                            <button data-dismiss="modal" type="button" class="btn btn-block btn-outline-info">Cancel</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>