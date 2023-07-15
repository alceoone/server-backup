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
                                        <form action="{{ route('device.store') }}" method="POST"
                                            enctype="multipart/form-data">

                                            @csrf
                                            <div class="form-group">
                                                <label class="font-weight-bold">Nama</label>
                                                <input type="text"
                                                    class="form-control @error('nama') is-invalid @enderror" name="nama"
                                                    value="{{ old('nama') }}" placeholder="Masukkan Nama">

                                                <!-- error message untuk nama -->
                                                @error('nama')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-bold">Device ID</label>
                                                <input type="text"
                                                    class="form-control @error('device_id') is-invalid @enderror"
                                                    name="device_id" value="{{ old('device_id') }}"
                                                    placeholder="Masukkan Judul Device ID">

                                                <!-- error message untuk device_id -->
                                                @error('device_id')
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
@endsection
