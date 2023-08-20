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
                <h1>Create App</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Minecraft</a></div>
                    <div class="breadcrumb-item">Create</div>
                </div>
            </div>
            <div class="section-body">
                <div class="page-wrapper">
                    <div class="page-content">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('minecraft.store') }}" method="POST"
                                            enctype="multipart/form-data">

                                            @csrf

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
                                                <label class="font-weight-bold">Category</label>
                                                <input type="text"
                                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                                    value="{{ old('title') }}" placeholder="Masukkan Title Category">

                                                <!-- error message untuk title -->
                                                @error('title')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-bold">category image</label>
                                                <input type="file"
                                                    class="form-control @error('image') is-invalid @enderror"
                                                    name="image">

                                                <!-- error message untuk title -->
                                                @error('image')
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
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
        CKEDITOR.replace('privacy_policy');
    </script>
@endsection
