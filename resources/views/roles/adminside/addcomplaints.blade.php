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
                                    <h6 class="m-0 font-weight-bold text-primary">Complaints</h6>
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
                                <form method="POST" action={{ route('complaints.store') }} name="complaintForm">
                                    @csrf
                                <div class="card-body">
                                <div class="form-group">
                                <div class="form-row">
                                        <div class="form-group col-md-3 col-lg-3">
                                        <label for="inputEmail4">Complainant</label>
                                        <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="col-sm-3 col-lg-3">
                                        <label for="inputEmail4">Date</label>
                                        <input type="date" name="date" class="form-control datetimepicker-input" data-target="#datetimepicker1" />
                                        </div>
                                        <div class="col-sm-3 col-lg-3">
                                            <div class="form-group">
                                                <strong>Time:</strong>
                                                <input type="time" name="time" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                        <label for="text">Type:</label>
                                        <select id="inputState" name="type"class="form-control">   
                                            <option selected>Choose...</option>
                                            <option>high</option>
                                            <option>mid</option>
                                            <option>low</option>
                                        </select>
                                        </div>
                                    </div>
                                        <div class="col-lg-12">
                                            <label for="exampleFormControlTextarea1">Details:</label>
                                            <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                            <div class="card-body">
                                                    <div class="col mt-5">
                                                        <h5 class="card-title">Upload Evidence</h5>
                                                        <div class="input-group">                               
                                                            {{-- <label for="exampleFormControlFile1">File input</label> --}}
                                                            <input type="file" name="evidence" class="form-control" id="customFile">
                                                        </div> 
                                                    </div>
                                                    <div class="col-3">
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Add Complaint</button>
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