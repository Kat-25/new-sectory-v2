
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
                        <h1 class="h3 mb-0 text-gray-800">REGISTRATION REQUESTS</h1>
                        
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
                                            <th>No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Age</th>
                                            <th>Birth Place</th>
                                            <th>Request Status</th>
                                            <th>ID</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $request)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $request->firstName }}</td>
                                            <td>{{ $request->lastName }}</td>
                                            <td>{{ $request->birthPlace }}</td>
                                            <td>{{ $request->userAge }}</td>
                                            <td>{{ $request->accountStatus }}</td>
            
                                            <td>
                                                <img src="{{ asset($request->proofID) }}" width= '50' height='50' class="img img-responsive expand-image" onclick="expandImage()" />
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <a href="/registration-requests/details" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Approve</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Reject</span>
                                            </a>
                                             </td>
                                        </tr>
                                          {{-- <div class="center">
                                            <button onclick="toggleForm()">Signup</button>
                                          </div> --}}
                                    @endforeach
                                    </tbody>
                                </table>
                                {{-- <div class="overlay-form">
                                    <div class="close-btn" onclick="toggleForm()">&times;</div>
                                    <h1>VIEW DETAILS</h1>
                                    
                                    <div class="form-element">
                                      <label for="fullname">Fullname</label>
                                      <input type="text" id="fullname">
                                    </div>
                                </div>      --}}
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
    
    <script>
        function toggleForm(){
         document.body.classList.toggle('activeForm');
        }
        function expandImage() {
        // Get the image element that was clicked
        var image = event.target;

         // Create a new div element to display the expanded image
        var expandedImage = document.createElement("div");
        expandedImage.classList.add("expanded-image");

        // Create a new img element to display the expanded image
        var img = document.createElement("img");
        img.src = image.src;

        // Add the img element to the expandedImage div
        expandedImage.appendChild(img);

        // Add the expandedImage div to the body
        document.body.appendChild(expandedImage);

        // When the user clicks anywhere on the page, remove the expandedImage div
        window.onclick = function(event) {
        if (event.target == expandedImage) {
        document.body.removeChild(expandedImage);
        }
        }
    }
    </script>
    <style>
    /* start for overlay */
    body {
  margin:0px;
  font-family:"Open Sans",sans-serif;
  background:#383737;
}
.overlay-form {
  position:absolute;
  top:50vh;
  left:0px;
  width:100vw;
  height:0vh;
  background:rgba(255, 255, 255, 0.8);
  z-index:-1;
  opacity:0;
  padding:80px 100px;
  overflow:hidden;
  box-sizing:border-box;
  transition: top 500ms ease-in-out,
              opacity 500ms ease-in-out,
              height 0ms ease-in-out 500ms;  
}
.overlay-form .close-btn {
  position:absolute;
  top:20px;
  right:40px;
  color:#000000;
  font-size:40px;
  font-weight:600;
  cursor:pointer;
}
.overlay-form h1 {
  font-size:32px;
  color:#000000;
}
.overlay-form p {
  font-size:16px;
  color:#000000;
  margin:-15px 0px 30px;
}
.overlay-form .form-element {
  margin:20px 0px;
}
.overlay-form label {
  display:block;
  font-size:17px;
  color:#000000;
  margin-bottom:5px;
}
.overlay-form input {
  width:100%;
  padding:6px;
  font-size:17px;
  border:2px solid #272727;
  background:transparent;
  outline:none;
  border-radius:10px;
}
.overlay-form button,
.center button {
  margin-top:10px;
  width:100px;
  height:35px;
  font-size:15px;
  text-transform:uppercase;
  background:#fff;
  color:#222;
  border:none;
  outline:none;
  border-radius:10px;
}
.center {
  position:relative;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.center button {
  width:150px;
  height:40px;
  font-weight:600;
  box-shadow:3px 3px 2px 1px rgba(0,0,0,0.1);
  cursor:pointer;
}

body.activeForm .overlay-form {
  z-index:2;
  opacity:1;
  top:0px;
  height:100vh;
  transition: top 0ms ease-in-out,
              opacity 0ms ease-in-out,
              height 0ms ease-in-out 0ms;
  width:1300px;
  height:1300px;
}

    /* end for overlay */
        * {
           box-sizing: border-box; 
        }
        
        .zoom {
          padding: 5px;
          /* //background-color: green; */
          transition: transform .2s;
          width: 70px;
          height: 70px;
          margin: 0 auto;
        }
        
        .zoom:hover {
          -ms-transform: scale(2); /* IE 9 */
          -webkit-transform: scale(7); /* Safari 3-8 */
          transform: scale(7); 
        }
        .expanded-image {
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .expanded-image img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
        }

    </style>
    
    

</body>

</html>

