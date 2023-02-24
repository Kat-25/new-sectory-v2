
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
                        <h1 class="h3 mb-0 text-gray-800">UPDATE RESIDENT INFO</h1>
                        
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
                        <div class="container-fluid" id="grad1">
                            <div class="row justify-content-center mt-0">
                            <div class="col-11 col-sm-9 col-md-11 col-lg-11 text-center p-0 mt-3 mb-2">
                            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                <h2><strong>Update Account</strong></h2>
                                <p><a class="small" href="admindashboard">Go back to dashboard</a></p>
                                <div class="row">
                                    <div class="col-md-12 mx-0">
                                        <form id="msform" action="/updateres" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <!-- progressbar -->
                                            <ul id="progressbar">
                                                <li class="active" id="account"><strong>Account Type</strong></li>
                                                <li id="personal"><strong>Personal Information</strong></li>
                                                <li id="payment"><strong>Educational Background</strong></li>
                                                <li id="payment"><strong>Family Background and Contact</strong></li>
                                            </ul>
                                            
                                            <!-- fieldsets -->
                                            <fieldset>
                                            <div class="form-card">
                                                    <h2 class="fs-title">Account Type</h2>
                                                    <select id="userrole" name="userrole" class="form-control mb-3">
                                                        
                                                            <option value="{{$residents['userRole']}}" selected>{{$residents['userRole']}}</option>
                                                            <option value="Staff">Staff</option>
                                                            <option value="Admin">Administrator</option>
                                                    </select> 

                                                    <div class="mb-2">
                                                        {{-- <label class="form-label" for="householdidh">Household ID:</label> --}}
                                                        <input class='form-control' type="hidden" name="residentidh" id='residentidh' value="{{$residents['residentID']}}">
                                                    </div>
                                                
                                                </div>
                                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                
                                                    <h2 class="fs-title">Personal Information</h2>
                                                    <input type="text" name="fname" placeholder="First Name" value="{{$residents['firstName']}}" class="form-control @error('fname') is-invalid @enderror"/>
                                                    @error('fname')
                                                        <div class="invalid-feedback">{{ "The First name is required." }}</div>
                                                    @enderror
                                                    <input type="text" name="lname" placeholder="Last Name" value="{{$residents['lastName']}}" class="form-control @error('lname') is-invalid @enderror"/>
                                                    @error('lname')
                                                        <div class="invalid-feedback">{{ "The Last name is required." }}</div>
                                                    @enderror
    
                                                    <input type="text" name="mname" placeholder="Middle Name" value="{{$residents['middleName']}}" class="form-control"/>
                                                    
                                                    <input type="text" name="sname" placeholder="Suffix" value="{{$residents['userSuffix']}}" class="form-control"/>

                                                    <h6 class="" style="color:black"><strong>Identification (Any Valid ID's)</strong></h6>
                                                    <p></p>
                                                    <input class="form-control" name="photo" type="file" value="{{$residents['proofID']}}" id="photo">
                                                    
                                                    
                                                    <select id="gender" name="gender" class="form-control mb-3" class="form-control @error('gender') is-invalid @enderror">
                                                            <option selected value="{{$residents['userGender']}}">{{$residents['userGender']}}</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                    </select> 
                                                    @error('gender')
                                                        <div class="invalid-feedback">{{ "The Gender is required." }}</div>
                                                    @enderror
                                                    <input type="date" id="birthdate" name="birthdate" placeholder="Birth Date" value="{{$residents['birthDate']}}" class="form-control @error('birthdate') is-invalid @enderror"/>
                                                    @error('birthdate')
                                                        <div class="invalid-feedback">{{ "The Birth date is required." }}</div>
                                                    @enderror
                                                    <input type="text" name="birthplace" placeholder="Birth Place" value="{{$residents['birthPlace']}}" class="form-control @error('birthplace') is-invalid @enderror"/>
                                                    @error('birthplace')
                                                        <div class="invalid-feedback">{{ "The Birth place is required." }}</div>
                                                    @enderror
                                                    <input type="text" name="age" placeholder="Age" value="{{$residents['userAge']}}" class="form-control @error('age') is-invalid @enderror"/>
                                                    @error('age')
                                                        <div class="invalid-feedback">{{ "The Age is required." }}</div>
                                                    @enderror
                                                    <select id="civilstatus" name="civilstatus" class="form-control mb-3 @error('civilstatus') is-invalid @enderror">
                                                            <option selected value="{{$residents['civilStatus']}}">{{$residents['civilStatus']}}</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Single">Single</option>
                                                            <option value="Widowed">Widowed</option>
                                                            <option value="Divorced">Divorced</option>
                                                            <option value="Separated">Separated</option>
                                                    </select> 
                                                    @error('civilstatus')
                                                        <div class="invalid-feedback">{{ "The Civil status is required." }}</div>
                                                    @enderror
                                                    <input type="text" name="occupation" placeholder="Occupation" value="{{$residents['userOccupation']}}" class="form-control @error('occupation') is-invalid @enderror"/>
                                                    @error('occupation')
                                                        <div class="invalid-feedback">{{ "The Occupation is required." }}</div>
                                                    @enderror
                                                    <input type="text" name="bloodtype" placeholder="Blood Type" value="{{$residents['bloodType']}}" class="form-control @error('bloodtype') is-invalid @enderror"/>
                                                    @error('bloodtype')
                                                        <div class="invalid-feedback">{{ "The Bloodtype is required." }}</div>
                                                    @enderror
                                                    <input type="text" name="religion" placeholder="Religion" value="{{$residents['userReligion']}}" class="form-control @error('religion') is-invalid @enderror"/>
                                                    @error('religion')
                                                        <div class="invalid-feedback">{{ "The Religion is required." }}</div>
                                                    @enderror
                                                    <input type="text" name="weight" placeholder="Weight(kg)" value="{{$residents['userWeight']}}" class="form-control @error('weight') is-invalid @enderror"/>
                                                    @error('weight')
                                                        <div class="invalid-feedback">{{ "The Weight is required." }}</div>
                                                    @enderror
                                                    <input type="text" name="height" placeholder="Height(cm)" value="{{$residents['userHeight']}}" class="form-control @error('height') is-invalid @enderror"/>
                                                    @error('height')
                                                        <div class="invalid-feedback">{{ "The Height is required." }}</div>
                                                    @enderror
                                                    <input type="text" name="citizenship" placeholder="Citizenship" value="{{$residents['userCitizenship']}}" class="form-control @error('citizenship') is-invalid @enderror"/>
                                                    @error('citizenship')
                                                        <div class="invalid-feedback">{{ "The Citizenship is required." }}</div>
                                                    @enderror
                                                    <h2 class="fs-title mt-4">Household</h2>
                                                    <h6 class="">Household Role</h6>
                                                    <select id="householdrole" name="householdrole" value="{{$residents['householdRole']}}" class="form-control mb-3">
                                                        <option selected value="{{$residents['householdRole']}}">{{$residents['householdRole']}}</option>
                                                        <option value="Household Leader">Household Leader</option>
                                                    </select> 
                                                    {{-- <input type="text" name="householdid" placeholder="Household ID:"/>
                                                    <input type="text" name="householdno" placeholder="Household No:"/>
                                                    
                                                    <input type="text" name="householdid" id="householdid" class="form-control" placeholder='First Name' value="">
                                                    
                                                    <input type='text' name="householdno" id='householdno' class='form-control' placeholder='Enter user id' onkeyup="GetDetail(this.value)" value="">
                                                    
                                                    <label for="householdno">Household Number:</label>
                                                    <input type="text" id="householdno" name="householdno">
    
                                                    <label for="householdid">Household ID:</label>
                                                    <input type="text" name="householdid" id="householdid"> --}}
    
                                                    <label for="householdno">Household Number:</label>
                                                    <input type="text" name="householdno" id="householdno" value="{{$residents['householdNo']}}" class="form-control">
                                                    
                                                    <label for="householdid">Household ID</label>
                                                    <input type="text" class="form-control" id="householdid" value="{{$residents['householdID']}}" name="householdid" readonly>
                                                    
                                                    {{-- 1 == true --}}
                                                        <label for="residentstatus">Resident Status: </label>
                                                        <select id="residentstatus" name="residentstatus">
                                                        <option value="{{$residents['residentStatus']}}" selected>{{$residents['residentStatus']}}</option>
                                                        <option value="Inactive">Inactive</option>
                                                        </select>
                                                        
                                                        <select id="firsttimelog" name="firsttimelog" style="display: none">
                                                        <option value="{{$residents['firstTimeLogin']}}" style="display: none" selected>{{$residents['firstTimeLogin']}}</option>
                                                        </select>
    
                                                        <select id="accountstatus" name="accountstatus" style="display: none">
                                                            <option value="{{$residents['accountStatus']}}" style="display: none" selected>{{$residents['accountStatus']}}</option>
                                                        </select>
                                                
                                                </div>
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                        <h2 class="fs-title">Educational Background</h2>
                                                        
                                                        <input type="text" name="nameofschool" placeholder="Name of School" value="{{$residents['userSchool']}}"/>
                                                        <input type="text" name="educationalattainment" placeholder="Educational Attainment" value="{{$residents['userEducation']}}"/>
                                                        
                                                    </div>
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                                            </fieldset>
                                            <fieldset>
                                            <div class="form-card">
                                
                                                    <h2 class="fs-title">Family Background</h2>
                                                    <h6 class="">Father's Name</h6>
                                                    <input type="text" name="fatherfname" placeholder="First Name" value="{{$residents['fatherFirstName']}}"/>
                                                    <input type="text" name="fatherlname" placeholder="Last Name" value="{{$residents['fatherLastName']}}"/>
                                                    <input type="text" name="fathermname" placeholder="Middle Name" value="{{$residents['fatherMiddleName']}}"/>
                                                    <input type="text" name="fathersname" placeholder="Suffix" value="{{$residents['fatherSuffix']}}"/>
                                                    <h6 class="">Mother's (Maiden Name)</h6>
                                                    <input type="text" name="motherfname" placeholder="First Name" value="{{$residents['motherFirstName']}}"/>
                                                    <input type="text" name="motherlname" placeholder="Last Name" value="{{$residents['motherLastName']}}"/>
                                                    <input type="text" name="mothermname" placeholder="Middle Name" value="{{$residents['motherMiddleName']}}"/>
                                                    <input type="text" name="mothersname" placeholder="Suffix" value="{{$residents['motherSuffix']}}"/>
                                                
                                                    <h2 class="fs-title">Contact Information</h2>
                                                    <input type="text" name="permanentaddress" placeholder="Permanent Address" value="{{$residents['permanentAddress']}}"/>
                                                    <input type="text" name="presentaddress" placeholder="Present Address" value="{{$residents['presentAddress']}}"/>
                                                    <input type="text" name="contactnumber" placeholder="Contact Number" value="{{$residents['contactNumber']}}"/>
                                                </div>
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                                <input type="submit" name="make_payment" class="next action-button" value="Confirm"/>
                                    
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title text-center">Success !</h2>
                                                    <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-3">
                                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-7 text-center">
                                                            <h5>"Successfully Updated Account."</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
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

