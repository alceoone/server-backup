@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="px-4 py-16 bg-white w-1/2 md:px-24 md:py-24 lg:px-8 lg:py-20 text-justify">
            <div class="p-4">
                {!! $data->privacy_policy !!}
            </div>
        </div>
    </div>
@endsection
