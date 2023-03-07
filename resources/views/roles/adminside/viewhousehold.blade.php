
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('linkrels')
    @include('sectoryheader')

    <!-- Custom fonts for this template-->
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/sb_admin_2.min.css') }}"> --}}
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link rel="stylesheet" href="{{ asset('css/sb_admin_2.min.css') }}"> --}}

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
                        <h1 class="h3 mb-0 text-gray-800">HOUSEHOLDS</h1>
                        
                    </div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"><a target="_blank"
                            href=""></a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th scope="col">Household ID</th>
                                        <th scope="col">Household #</th>
                                        <th scope="col">Household Members</th>
                                        <th scope="col">House Address</th>
                                        <th scope="col">Purok Leader</th>
                                        <th scope="col">Household Status</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($households as $hos)
                                        <tr>
                                            <td>{{ $hos->householdID }}</td>
                                            <td>{{ $hos->householdNo }}</td>
                                            <td>
                                                @foreach ($residents as $resident)
                                                    @if ($resident->householdID == $hos->householdID)
                                                        {{ $resident->totalResidents }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $hos->householdAddress }}</td>
                                            <td>{{ $hos->purokLeader }}</td>
                                            <td>{{ $hos->householdStatus }}</td>
                                            
                                            {{-- <td> 
                                                <a href="{{"update/".$hos['householdID']}}">Update</a>
                                            
                                            </td> --}}
                                            
                                            <td class="d-flex justify-content-center"><a href="{{"housedetails/".$hos['householdID']}}" class="btn button btn-icon-split d-flex align-items-center justify-content-center" style="background-color: #5f7a74; color: #f2f2f2;" data-toggle="tooltip" data-placement="top" title="View">
                                                <span class="icon text-white-100">
                                                    <i class="fas fa-eye"></i>
                                                </span>
                                                {{-- <span class="text">View</span> --}}
                                            </a>
                                            <a href="{{"update/".$hos['householdID']}}" class="btn button btn-icon-split d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Edit" style="background-color: #3cbfb3; color: #ffffff; width:42px;">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                {{-- <span class="text">Edit</span> --}}
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn button btn-icon-split d-flex align-items-center justify-content-center" {{-- onclick="makeInactive('{{ $request->residentID }}')" --}} data-toggle="tooltip" data-placement="top" title="Deactivate" style="background-color: #343a40; color: #f2f2f2; width:42px;">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-warehouse"></i>
                                                </span>
                                                {{-- <span class="text">Archive</span> --}}
                                            </a>
                                             </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            @include('adminfooter')
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
      </script>

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
    {{-- <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}

    

</body>

</html>

