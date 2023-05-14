@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @forelse($appContent as $dataAssets)
                                <div class="col-md-2">
                                    <img src="{{ '/storage/' . $dataAssets->folder . '/' . $dataAssets->image_name }}"
                                        width='200' height='200' class="img-fluid" />
                                    {{-- {{ $dataAssets->image_name }} --}}
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
@endsection
