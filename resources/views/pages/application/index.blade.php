@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('application.create') }}" class="btn btn-md btn-success mb-3">Create App
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
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endsection
