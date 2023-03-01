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
    <div id="wrapper">
        <!-- Sidebar -->
        @include('adminsidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('adminheader')
                <div class="containter-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">DOCUMENTS</h1>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDocumentModal">
                               Add Document
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Document Name</th>
                                            <th>Uploaded on</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($documents as $document)
                                            <tr>
                                                <td>{{ $document->id }}</td>
                                                <td>{{ $document->name }}</td>
                                                <td>{{ $document->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('documents.modal', $document) }}" class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewDocumentModal" title="View"><i class="fa fa-eye"></i></a>
                                                    <a href="{{ route('documents.download', $document) }}" class="btn btn-sm btn-primary" title="Download"><i class="fas fa-download"></i></a>
                                                    @if (!$document->is_archived)
                                                        <form action="{{ route('documents.archive', $document) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-danger" title="Archive"><i class="fas fa-archive"></i></button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('documents.unarchive', $document) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-secondary" title="Unarchive"><i class="fas fa-archive"></i></button>
                                                        </form>
                                                    @endif
                                                    <form action="{{ route('documents.delete', $document) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('addDocumentmodal')
        @include('viewDocumentModal')
    </div>
    @section('scripts')
    <script>
        $(document).ready(function() {
            $('#viewDocumentModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var url = button.attr('href');
                var modal = $(this);

                $.ajax({
                    url: url,
                    dataType: 'html',
                    success: function(data) {
                        modal.find('.modal-body').html(data);
                    }
                });
            });
        });
    </script>
    @endsection
</body>
</html>