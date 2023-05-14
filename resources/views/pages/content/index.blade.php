@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('assets.create') }}" class="btn btn-md btn-primary mb-3">Add Asset</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
