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
                <h1>Update Promo</h1>
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
                                    {{-- <div class="card-body">
                        {{ $appdetail }}
                    </div> --}}

                                    <div class="card-body">
                                        <form action="{{ route('application.update', $appdetail->app_id) }}" method="POST"
                                            enctype="multipart/form-data">

                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label class="font-weight-bold">Image</label>
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

                                            <div class="form-group">
                                                <label class="font-weight-bold">Judul</label>
                                                <input type="text"
                                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                                    value="{{ old('title', $appdetail->title) }}"
                                                    placeholder="Masukkan Judul Post">

                                                <!-- error message untuk title -->
                                                @error('title')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-bold">Package</label>
                                                <input type="text"
                                                    class="form-control @error('package') is-invalid @enderror"
                                                    name="package" value="{{ old('package', $appdetail->package) }}"
                                                    placeholder="Masukkan Judul Post">

                                                <!-- error message untuk package -->
                                                @error('package')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-bold">Content</label>
                                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                                                    placeholder="Masukkan Konten Post">{{ old('content', $appdetail->deskripsi) }}</textarea>

                                                <!-- error message untuk content -->
                                                @error('content')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-bold">Privacy Policy</label>
                                                <textarea class="form-control @error('privacy_policy') is-invalid @enderror" name="privacy_policy" rows="5"
                                                    placeholder="Masukkan Privacy Policy">{{ old('privacy_policy', $appdetail->privacy_policy) }}</textarea>

                                                <!-- error message untuk privacy_policy -->
                                                @error('privacy_policy')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-md btn-primary">Update</button>
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
