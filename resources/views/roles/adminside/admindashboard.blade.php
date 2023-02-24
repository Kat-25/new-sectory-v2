
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('sectoryheader')

    <!-- Custom fonts for this template-->
    
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/sb_admin_2.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link href="../css/sb-admin-2.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/sb_admin_2.min.css') }}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       <!-- Sidebar -->
       @include('adminsidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- top bar -->
                @include('adminheader')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total Residents</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$residentCount}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Households</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$houseCount}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tree fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Pending Account Requests
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pendingAccCount}}</div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Certificate Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-weight fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                  
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Resident Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Archive</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                 <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i>Household
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i>Resident
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i>Staff
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 mb-2 text-gray-800"></h1>
                            <p class="mb-4"><a target="_blank"
                                    href=""></a></p>

                                    <!-- DataTales Example -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">View Latest Announcements</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th></th>
                                                            <th>Description</th>
                                                            <th></th>
                                                            <th>Date</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                        <td>Tiger Nixon</td>
                                                            <th></th>
                                                            <td>System Architect</td>
                                                            <th></th>
                                                            <td>2011/04/25</td>
                                                            <th></th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            
        </div>
        <!-- End of Content Wrapper -->
        @include('adminfooter')

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div> --}}
    @include('adminlogout')

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>