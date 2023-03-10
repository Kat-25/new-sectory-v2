
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
                        <h1 class="h3 mb-0 text-gray-800">RESIDENTS</h1>
                        
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
                                            <th>Resident ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Age</th>
                                            <th>Birth Place</th>
                                            <th>Household No.</th>
                                            <th>ID</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $request)
                                        <tr data-resident-id="{{ $request->residentID }}">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $request->residentID}}</td>
                                            <td>{{ $request->firstName }}</td>
                                            <td>{{ $request->lastName }}</td>
                                            <td>{{ $request->userAge }}</td>
                                            <td>{{ $request->birthPlace }}</td>
                                            <td>{{ $request->householdNo}}</td>
                                            <td class="align-middle text-center">
                                                <img src="{{ asset($request->proofID) }}" width="50" height="50" class="img img-responsive expand-image" onclick="expandImage()" />                                   
                                              <td class="align-middle">
                                                <div class="d-flex justify-content-center">
                                                  <a href="{{"viewresident/".$request['residentID']}}" class="btn button btn-icon-split d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="View" style="background-color: #20c9a6; color: #ffffff;">
                                                    <span class="icon text-white-50">
                                                      <i class="fas fa-eye"></i>
                                                    </span>
                                                    {{-- <span class="text">View</span> --}}
                                                  </a>
                                                  <a href="{{"updateres/".$request['residentID']}}" class="btn button btn-icon-split d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Edit" style="background-color: #3cbfb3; color: #ffffff; width:42px;">
                                                    <span class="icon text-white-50">
                                                      <i class="fas fa-edit"></i>
                                                    </span>
                                                    {{-- <span class="text">Edit</span> --}}
                                                  </a>
                                                  <a href="" class="btn button btn-icon-split d-flex align-items-center justify-content-center" onclick="makeInactive('{{ $request->residentID }}')" data-toggle="tooltip" data-placement="top" title="Deactivate" style="background-color: #343a40; color: #f2f2f2; width:42px;">
                                                    <span class="icon text-white-50">
                                                      <i class="fas fa-user-times"></i>
                                                    </span>
                                                    {{-- <span class="text">Deactivate</span> --}}
                                                  </a>
                                                </div>
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
                        <span aria-hidden="true">??</span>
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
        function makeInactive(residentID) {
            // Find the row with the matching residentID
            var row = document.querySelector("tr[data-resident-id='" + residentID + "']");
          
            // Update the accountStatus cell of the row to "Approved"
            // var accountStatusCell = row.querySelector("td:nth-child(7)");
            // accountStatusCell.textContent = "Approved";
          
            // Make an AJAX request to update the database
            axios.post('/make-InactiveStatus', {
              residentID: residentID,
              residentStatus: 'Inactive'
              
            })
            .then(function (response) {
                event.preventDefault();
              console.log(response.data);
              if (response.data.redirect) {
                window.location.href = response.data.redirect;
              }
            })
            .catch(function (error) {
              console.log(error);
              event.preventDefault();
              if (error.response) {
                console.log(error.response.data);
                console.log(error.response.status);
                console.log(error.response.headers);
              }
            });
          }
          
    </script>

    <script>
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <!-- Page level custom scripts -->
    {{-- <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}

    

</body>

</html>

