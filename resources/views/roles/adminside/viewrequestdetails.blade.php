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
                                <form id="msform1" action="/viewreq" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="form-group col-md-5 col-lg-5">
                                                    {{-- @foreach($data as $data) --}}
                                                        {{-- {{ route('registrationdetails.show', ['id' => $data->id]) }} --}}
                                                    <div>
                                                        <h3>PERSONAL INFORMATION</h3>
                                                        <div class="mb-2">
                                                            {{-- <label class="form-label" for="householdidh">Household ID:</label> --}}
                                                            <input class='form-control' type="hidden" name="residentidh" id='residentidh' value="{{$residents['residentID']}}">
                                                        </div>
                                                        <label for="fname">Account Status:</label>
                                                        <input type="text" readonly class="form-control" name="accountStatus" value="{{$residents['accountStatus']}}">
                                                        <label for="fname">Resident Status:</label>
                                                        <input type="text" readonly class="form-control" name="residentStatus" value="{{$residents['residentStatus']}}">
    
                                                        <input type="hidden" name="newAccountStatus" id="newAccountStatus">


                                                         <label for="fname">First Name:</label>
                                                        <input type="text" readonly class="form-control" name="fname" value="{{$residents['firstName']}}">
                                                        <label for="inputEmail4">Last Name:</label>
                                                        <input type="text" readonly class="form-control" name="lname" value="{{$residents['lastName']}}" >
                                                        <label for="inputEmail4">Middle Name:</label>
                                                        <input type="text" readonly class="form-control" name="mname" value="{{$residents['middleName']}}">
                                                        <label for="inputEmail4">Suffix:</label>
                                                        <input type="text" readonly class="form-control" name="suffix" value="{{$residents['userSuffix']}}">
                                                        <label for="inputEmail4">Birth Date:</label>
                                                        <input type="text" readonly class="form-control" name="bdate" value="{{$residents['birthDate']}}">
                                                        <label for="inputEmail4">Birth Place:</label>
                                                        <input type="text" readonly class="form-control" name="bplace" value="{{$residents['birthPlace']}}">
                                                        <label for="inputEmail4">Age::</label>
                                                        <input type="text" readonly class="form-control" name="age" value="{{$residents['userAge']}}">
                                                        <label for="inputEmail4">Civil Status:</label>
                                                        <input type="text" readonly class="form-control" name="cstatus" value="{{$residents['civilStatus']}}">
                                                        <label for="inputEmail4">Occupation:</label>
                                                        <input type="text" readonly class="form-control" name="occupation" value="{{$residents['userOccupation']}}">
                                                        <label for="inputEmail4">Gender:</label>
                                                        <input type="text" readonly class="form-control" name="gender" value="{{$residents['userGender']}}">
                                                        <label for="inputEmail4">Blood Type:</label>
                                                        <input type="text" readonly class="form-control" name="btype" value="{{$residents['bloodType']}}">
                                                        <label for="inputEmail4">Religion:</label>
                                                        <input type="text" readonly class="form-control" name="religion" value="{{$residents['userReligion']}}">
                                                        <label for="inputEmail4">Weight:</label>
                                                        <input type="text" readonly class="form-control" name="weight" value="{{$residents['userWeight']}}">
                                                        <label for="inputEmail4">height:</label>
                                                        <input type="text" readonly class="form-control" name="height" value="{{$residents['userHeight']}}">
                                                        <label for="inputEmail4">Citizenship:</label>
                                                        <input type="text" readonly class="form-control" name="citizenship" value="{{$residents['userCitizenship']}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-5 col-lg-5">
                                                    <div>
                                                        <h3>EDUCATIONAL BACKGROUND</h3>
                                                            <label for="inputEmail4">INSTITUTION GRADUATED:</label>
                                                            <input type="text" readonly class="form-control" name="school" value="{{$residents['userSchool']}}" >
                                                            <label for="inputEmail4">EDUCATIONAL ATTAINMENT:</label>
                                                            <input type="text" readonly class="form-control" name="education" value="{{$residents['userEducation']}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-5 col-lg-5">
                                                    <div>
                                                        <h3>FAMILY BACKGROUND</h3>
                                                        <label for="inputEmail4">FATHER'S FIRST NAME:</label>
                                                        <input type="text" readonly class="form-control" name="ffname" value="{{$residents['fatherFirstName']}}">
                                                        <label for="inputEmail4">FATHER'S MIDDLE NAME:</label>
                                                        <input type="text" readonly class="form-control" name="fmname" value="{{$residents['fatherMiddleName']}}">
                                                        <label for="inputEmail4">FATHER'S LAST NAME:</label>
                                                        <input type="text" readonly class="form-control" name="flname" value="{{$residents['fatherLastName']}}">
                                                        <label for="inputEmail4">FATHER'S SUFFIX:</label>
                                                        <input type="text" readonly class="form-control" name="fsuffix" value="{{$residents['fatherSuffix']}}">
                                                        <label for="inputEmail4">MOTHERS'S FIRST NAME:</label>
                                                        <input type="text" readonly class="form-control" name="mfname" value="{{$residents['motherFirstName']}}">
                                                        <label for="inputEmail4">MOTHER'S MIDDLE NAME:</label>
                                                        <input type="text" readonly class="form-control" name="mmname" value="{{$residents['motherMiddleName']}}">
                                                        <label for="inputEmail4">MOTHER'S LAST NAME:</label>
                                                        <input type="text" readonly class="form-control" name="mlname" value="{{$residents['motherLastName']}}">
                                                        <label for="inputEmail4">MOTHER'S SUFFIX:</label>
                                                        <input type="text" readonly class="form-control" name="msuffix" value="{{$residents['motherSuffix']}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-5 col-lg-5">
                                                    <div>
                                                        <h3>RESIDENCE</h3>
                                                        <label for="inputEmail4">PERMANENT ADDRESS</label>
                                                        <input type="text" readonly class="form-control" name="permanent" value="{{$residents['permanentAddress']}}">
                                                        <label for="inputEmail4">PRESENT ADDRESS</label>
                                                        <input type="text" readonly class="form-control" name="present" value="{{$residents['presentAddress']}}">
                                                        <label for="inputEmail4">CONTACT NUMBER</label>
                                                        <input type="text" readonly class="form-control" name="number" value="{{$residents['contactNumber']}}">
                                                        <label for="inputEmail4">HOUSEHOLD ID</label>
                                                        <input type="text" readonly class="form-control" name="householdid" value="{{$residents['householdID']}}">
                                                        <label for="inputEmail4">HOUSEHOLD NO.</label>
                                                        <input type="text" readonly class="form-control" name="householdno" value="{{$residents['householdNo']}}">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    <button type="submit" class="btn btn-primary">Back</button>
                                                    
                                                    {{-- <button type="submit" class="btn btn-primary" name="status" value="Approved">Approve</button>
                                                    <button type="submit" class="btn btn-primary" name="status" value="Rejected">Reject</button> --}}
                                                    {{-- <button type="button" class="btn btn-primary" onclick="setAccountStatus('Approved')">Approve</button>
                                                    <button type="button" class="btn btn-primary" onclick="setAccountStatus('Rejected')">Reject</button>
                                                </div>    --}}
                                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    <div class="row mx-auto justify-content-center">
                                                      <div class="col-xs-2 col-sm-2 col-md-2 mr-n3 mb-md-0">
                                                        <button type="button" class="btn btn-primary btn-block border" onclick="window.history.back()">Back</button>
                                                      </div>
                                                      <div class="col-xs-2 col-sm-2 col-md-2 mr-n3 mb-md-0">
                                                        <button type="button" class="btn btn-primary btn-block border bg-success text-white" onclick="setAccountStatus('Approved')">Approve</button>
                                                      </div>
                                                      <div class="col-xs-2 col-sm-2 col-md-2">
                                                        <button type="button" class="btn btn-primary btn-block border bg-danger text-white" onclick="setAccountStatus('Rejected')">Reject</button>
                                                      </div>
                                                    </div>
                                                </div>
                                                  
                                                  
                                                {{-- @endforeach           --}}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}

    <script>
        function setAccountStatus(status) {
            document.getElementById("newAccountStatus").value = status;
            document.getElementById("msform1").submit();
        }
    </script>
</body>

</html>