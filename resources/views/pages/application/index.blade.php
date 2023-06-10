@extends('layouts2.app')

@section('title', 'Application List')

@push('style')
    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet" href="{{ asset('library/dropzone/dist/dropzone.css') }}"> --}}
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Application List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Application</a></div>
                    <div class="breadcrumb-item">Default Layout</div>
                </div>
            </div>
            <div class="section-body">
                <div class="page-wrapper">
                    <div class="page-content">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('application.create') }}"
                                            class="btn btn-md btn-success mb-3">Create App
                                            Wallpaper</a>

                                        <div class="col-12 table-responsive">
                                            <table class="table table-bordered user_datatable">
                                                <thead>
                                                    <tr>
                                                        <th>App ID</th>
                                                        <th>Icon</th>
                                                        <th>Title</th>
                                                        <th>Package</th>
                                                        <th>Key</th>
                                                        <th>Key Privacy</th>
                                                        <th width="100px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(function() {
            var table = $('.user_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('application.index') }}",
                columns: [{
                        data: 'user_app_id',
                        name: 'App ID'
                    },
                    {
                        data: 'image_icon',
                        name: 'Icon',
                        "render": function(data, type, full, meta) {
                            if (!data) {
                                return "<img src=\"https://cdn.pixabay.com/photo/2021/07/25/08/03/account-6491185_960_720.png\" height=\"50\"/>";
                            } else {
                                return "<img src=\"storage/application/" + data +
                                    "\" height=\"50\"/>";
                            }
                        }
                    },
                    {
                        data: 'title',
                        name: 'Title'
                    },
                    {
                        data: 'package',
                        name: 'Package'
                    },
                    {
                        data: 'key',
                        name: 'Key'
                    },
                    {
                        data: 'subKey',
                        name: 'Key Privacy'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endpush
