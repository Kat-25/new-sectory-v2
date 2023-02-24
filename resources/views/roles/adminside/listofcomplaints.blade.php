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
                        <h1 class="h3 mb-0 text-gray-800">Complaints</h1>    
                    </div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"><a target="_blank"
                            href=""> </a></p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        {{--  --}}
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                            <a href="{{ route('complaints.add')}}" class = "btn btn-primary waves-effect waves-light ">Add Complaint</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Complainant</th>
                                            <th>Time Of Incident</th>
                                            <th>Date Of Incident</th>
                                            <th>Type</th>
                                            <th>Details</th>
                                            <th>Evidence</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($complaints as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->complainant}}</td>
                                            <td>{{$item->timeOfIncident}}</td>
                                            <td>{{$item->dateOfIncident}}</td>
                                            <td>{{$item->type}}</td>
                                            <td>{{$item->details}}</td>
                                             {{-- image src, di pa modisplay sa table --}}
                                            <td>
                                                <div class="zoom" padding='10px'>
                                                    <img src="{{ asset($item->evidence) }}" width= '50' height='50' class="img img-responsive expand-image" onclick="expandImage()" />
                                                </div>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{url('admincomplaints') }}" class="btn btn-success btn-icon-split ml-3">
                                                <span class="text">View</span>
                                                </a>
                                                <a href="{{route('complaints.edit', $item->id) }}" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="text">Edit</span>
                                                </a>
                                                <a href="../Barangaystaff/complainstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                    <span class="text">Archive</span>
                                                </a>
                                                </td>
                                        </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                                            
                                        
                            </div>       
                        </div>
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
    
    <script>
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
        /* FOR ONCLICK ON IMAGE */
        * {
           box-sizing: border-box; 
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