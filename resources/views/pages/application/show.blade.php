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
                                        <div class="row">
                                            @forelse($appContent as $dataAssets)
                                                <div class="col-md-2">
                                                    <img src="{{ '/storage/' . $dataAssets->folder . '/' . $dataAssets->image_name }}"
                                                        width='200' height='200' class="img-fluid" />
                                                    {{-- {{ $dataAssets->image_name }} --}}
                                                    <form class="my-2"
                                                        action="{{ route('application.destroy', $dataAssets->images_id) }}"
                                                        method="Post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            @empty
                                                There are no assets.
                                            @endforelse
                                        </div>

                                        {!! $appContent->withQueryString()->links('pagination::bootstrap-5') !!}
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
