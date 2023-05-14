@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Thumbnail</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image">

                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                {{-- {{ $dataStoreArea }} --}}
                                <label for="exampleFormControlSelect1" class="font-weight-bold">Apps</label>
                                <select class="form-control" name="apps" id="exampleFormControlSelect1">
                                    @forelse ($dataApps as $apps)
                                        <option value="{{ $apps->app_id }}">{{ $apps->title }}</option>
                                    @empty
                                        <option>Tidak Ada Data</option>
                                    @endforelse
                                </select>
                                <!-- error message untuk apps_area -->
                                @error('apps')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-md btn-primary">Save</button>
                                <button type="reset" class="btn btn-md btn-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
