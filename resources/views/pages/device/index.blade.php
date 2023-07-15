@extends('layouts2.app')

@section('title', 'Show App')

@push('style')
    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet" href="{{ asset('library/dropzone/dist/dropzone.css') }}"> --}}
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Show App</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Layout</a></div>
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
                                        <a href="{{ route('device.create') }}" class="btn btn-md btn-success mb-3">Create
                                            Category</a>

                                        <div class="col-12 table-responsive">
                                            <table class="table table-bordered user_datatable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Thumbnail</th>
                                                        <th>Title</th>
                                                        <th width="100px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                        {{-- @forelse ($data as $user)
                            {{ $user->name }}
                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                        @endforelse --}}
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
                ajax: "{{ route('device.index') }}",
                columns: [{
                        data: 'id',
                        name: 'No'
                    },
                    {
                        data: 'nama',
                        name: 'Title'
                    },
                    {
                        data: 'id_device',
                        name: 'Title'
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
