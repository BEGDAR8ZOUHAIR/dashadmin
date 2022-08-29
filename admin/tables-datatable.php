<?php include('./includes/header.php'); ?>

    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>

        <!-- Topbar Start -->
        <?php include('./includes/top-bar.php'); ?>
        <!-- end Topbar -->
        
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->
                <?php include('./includes/side-bar.php'); ?>
                <!-- Left Sidebar End -->

                <div class="content-page">
                    <div class="content">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Tables</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Data Tables</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 



                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Scroll - Vertical</h4>
                                        <p class="text-muted font-14">
                                         table has been created
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#scroll-vertical-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#scroll-vertical-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="scroll-vertical-preview">
                                                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                     
                                                    </tbody>
                                                </table>                     
                                            </div> 
                                        
                                            <div class="tab-pane" id="scroll-vertical-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table id=&quot;scroll-vertical-datatable&quot; class=&quot;table dt-responsive nowrap&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;Name&lt;/th&gt;
                                                                    &lt;th&gt;Position&lt;/th&gt;
                                                                    &lt;th&gt;Office&lt;/th&gt;
                                                                    &lt;th&gt;Age&lt;/th&gt;
                                                                    &lt;th&gt;Start date&lt;/th&gt;
                                                                    &lt;th&gt;Salary&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                        
                                                        
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Tiger Nixon&lt;/td&gt;
                                                                    &lt;td&gt;System Architect&lt;/td&gt;
                                                                    &lt;td&gt;Edinburgh&lt;/td&gt;
                                                                    &lt;td&gt;61&lt;/td&gt;
                                                                    &lt;td&gt;2011/04/25&lt;/td&gt;
                                                                    &lt;td&gt;$320,800&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Garrett Winters&lt;/td&gt;
                                                                    &lt;td&gt;Accountant&lt;/td&gt;
                                                                    &lt;td&gt;Tokyo&lt;/td&gt;
                                                                    &lt;td&gt;63&lt;/td&gt;
                                                                    &lt;td&gt;2011/07/25&lt;/td&gt;
                                                                    &lt;td&gt;$170,750&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> 
                                            </div> 
                                        </div> 

                                    </div> 
                                </div> 
                            </div>
                        </div> -->
                       


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Scroll - Horizontal</h4>
                                        <p class="text-muted font-14">
                                            DataTables has the ability to show tables with horizontal scrolling

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#scroll-horizontal-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                        
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="scroll-horizontal-preview">
                                                <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>First name</th>
                                                            <th>Last name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                            <th>Active?</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger</td>
                                                            <td>Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                            <td> <!-- Switch-->
                                                                <div>
                                                                    <input type="checkbox" id="switch1" checked data-switch="success"/>
                                                                    <label for="switch1" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                </div>
                                                            </td>
                                                            <td class="table-action">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                     
                                                 
                                                    </tbody>
                                                </table>                                          
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="scroll-horizontal-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table id=&quot;scroll-horizontal-datatable&quot; class=&quot;table w-100 nowrap&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;First name&lt;/th&gt;
                                                                    &lt;th&gt;Last name&lt;/th&gt;
                                                                    &lt;th&gt;Position&lt;/th&gt;
                                                                    &lt;th&gt;Office&lt;/th&gt;
                                                                    &lt;th&gt;Age&lt;/th&gt;
                                                                    &lt;th&gt;Start date&lt;/th&gt;
                                                                    &lt;th&gt;Salary&lt;/th&gt;
                                                                    &lt;th&gt;Active?&lt;/th&gt;
                                                                    &lt;th&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Tiger&lt;/td&gt;
                                                                    &lt;td&gt;Nixon&lt;/td&gt;
                                                                    &lt;td&gt;System Architect&lt;/td&gt;
                                                                    &lt;td&gt;Edinburgh&lt;/td&gt;
                                                                    &lt;td&gt;61&lt;/td&gt;
                                                                    &lt;td&gt;2011/04/25&lt;/td&gt;
                                                                    &lt;td&gt;$320,800&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch1&quot; checked data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch1&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td class=&quot;table-action&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-pencil&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt; 
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->  
                    </div> <!-- End Content -->

                    <!-- Footer Start -->
                    <?php include('./includes/footer.php'); ?>
                    <!-- end Footer -->
                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->
        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>
            <div class="rightbar-content h-100" data-simplebar>
                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>
                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->
        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="assets/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="assets/js/vendor/buttons.bootstrap5.min.js"></script>
        <script src="assets/js/vendor/buttons.html5.min.js"></script>
        <script src="assets/js/vendor/buttons.flash.min.js"></script>
        <script src="assets/js/vendor/buttons.print.min.js"></script>
        <script src="assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="assets/js/vendor/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->
        
    </body>
</html>
