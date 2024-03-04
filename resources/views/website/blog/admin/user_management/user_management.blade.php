@extends('layouts.auth')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    User Management Page
                </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body ">
                            <div class="card-header d-flex justify-content-between align-items-center mb-5">
                                <h4 class="card-title mb-0">User Management Page</h4>
                                <div class="d-flex">
                                    <a href="{{ route('editUserManagement') }}" class="btn btn-sm btn-primary ms-2">
                                        <span class="mdi mdi-plus mdi-18px me-1"></span>
                                        New Submit
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="userManagementTable" class="table table-striped" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th> Nama </th>
                                            <th> Role </th>
                                            <th> Button </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                var table = $('#userManagementTable').DataTable(); // Inisialisasi DataTable
                $.ajax({
                    url: '{{ route('userManagementData.fetch') }}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // Clear existing rows
                        table.clear().draw();

                        // Add fetched data to the table
                        $.each(data, function(index, user) {
                            table.row.add([
                                user.name,
                                user.role,
                                '<button class="btn btn-info btn-sm" onclick="showDetails(\'' +
                                user.id + '\')">Details</button>',
                            ]).draw();
                        });
                    },
                    error: function(error) {
                        console.error('Error fetching data:', error);
                    }
                });
            });

            function showDetails(id) {
                // Implement your logic to show details based on userId
                alert('Details for User ID ' + id);
                // atau navigasi ke halaman detail
                // window.location.href = '/user/detail/' + userId;
            }
        </script>
    @endsection
