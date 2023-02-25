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
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('adminheader')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Request Details</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">:</div>
                                            <a class="dropdown-item" href="#">CANCEL</a>
                                            <a class="dropdown-item" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <form method="get" name="complaintForm">
                                    @csrf
                                <div class="card-body">
                                <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-5 col-lg-5">
                                    <div>
                                        <h3>PERSONAL INFORMATION</h3>
                                        <label for="inputEmail4">First Name:</label>
                                        <input type="text" name="fname" class="form-control" value="{{ $data->firstName}}">
                                        <label for="inputEmail4">Last Name:</label>
                                        <input type="text" name="lname" class="form-control" value="{{ $data->middleName}}">
                                        <label for="inputEmail4">Middle Name:</label>
                                        <input type="text" name="mname" class="form-control">
                                        <label for="inputEmail4">Suffix:</label>
                                        <input type="text" name="suffix" class="form-control">
                                        <label for="inputEmail4">Birth Date:</label>
                                        <input type="text" name="bdate" class="form-control">
                                        <label for="inputEmail4">Birth Place:</label>
                                        <input type="text" name="bplace" class="form-control">
                                        <label for="inputEmail4">Age::</label>
                                        <input type="text" name="age" class="form-control">
                                        <label for="inputEmail4">Civil Status:</label>
                                        <input type="text" name="cstatus" class="form-control">
                                        <label for="inputEmail4">Occupation:</label>
                                        <input type="text" name="occupation" class="form-control">
                                        <label for="inputEmail4">Gender:</label>
                                        <input type="text" name="gender" class="form-control">
                                        <label for="inputEmail4">Blood Type:</label>
                                        <input type="text" name="btype" class="form-control">
                                        <label for="inputEmail4">Weight:</label>
                                        <input type="text" name="weight" class="form-control">
                                        <label for="inputEmail4">height:</label>
                                        <input type="text" name="height" class="form-control">
                                        <label for="inputEmail4">Citizenship:</label>
                                        <input type="text" name="citizenship" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5 col-lg-5">
                                        <div>
                                            <h3>EDUCATIONAL BACKGROUND</h3>
                                                <label for="inputEmail4">INSTITUTION GRADUATED:</label>
                                                <input type="text" name="school" class="form-control">
                                                <label for="inputEmail4">EDUCATIONAL ATTAINMENT:</label>
                                                <input type="text" name="education" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5 col-lg-5">
                                        <div>
                                            <h3>FAMILY BACKGROUND</h3>
                                            <label for="inputEmail4">FATHER'S FIRST NAME:</label>
                                            <input type="text" name="ffname" class="form-control">
                                            <label for="inputEmail4">FATHER'S MIDDLE NAME:</label>
                                            <input type="text" name="fmname" class="form-control">
                                            <label for="inputEmail4">FATHER'S LAST NAME:</label>
                                            <input type="text" name="flname" class="form-control">
                                            <label for="inputEmail4">FATHER'S SUFFIX:</label>
                                            <input type="text" name="fsuffix" class="form-control">
                                            <label for="inputEmail4">MOTHERS'S FIRST NAME:</label>
                                            <input type="text" name="mfname" class="form-control">
                                            <label for="inputEmail4">MOTHER'S MIDDLE NAME:</label>
                                            <input type="text" name="mmname" class="form-control">
                                            <label for="inputEmail4">MOTHER'S LAST NAME:</label>
                                            <input type="text" name="mlname" class="form-control">
                                            <label for="inputEmail4">MOTHER'S SUFFIX:</label>
                                            <input type="text" name="msuffix" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5 col-lg-5">
                                        <div>
                                            <h3>RESIDENCE</h3>
                                            <label for="inputEmail4">PERMANENT ADDRESS</label>
                                            <input type="text" name="permanent" class="form-control">
                                            <label for="inputEmail4">PRESENT ADDRESS</label>
                                            <input type="text" name="present" class="form-control">
                                            <label for="inputEmail4">CONTACT NUMBER</label>
                                            <input type="text" name="number" class="form-control">
                                            <label for="inputEmail4">HOUSEHOLD ID</label>
                                            <input type="text" name="householdid" class="form-control">
                                            <label for="inputEmail4">HOUSEHOLD NO.</label>
                                            <input type="text" name="householdno" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Back</button>
                                        <button type="submit" class="btn btn-primary">Approve</button>
                                        <button type="submit" class="btn btn-primary">Reject</button>
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
   @include('adminlogout')



    <!-- Custom scripts for all pages-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>