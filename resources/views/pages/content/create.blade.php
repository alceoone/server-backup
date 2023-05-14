@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="container lst row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dataApps" class="font-weight-bold">Application</label>
                                        <select class="form-control" name="application" id="dataApps">
                                            @forelse ($dataApp as $application)
                                                <option value="{{ $application->app_id }}">{{ $application->title }}
                                                </option>
                                            @empty
                                                <option>Tidak Ada Data</option>
                                            @endforelse
                                        </select>
                                        <!-- error message untuk store_area -->
                                        @error('store_area')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="font-weight-bold">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" value="{{ old('title') }}" placeholder="Title Name">
                                        <!-- error message untuk title -->
                                        @error('title')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="font-weight-bold">Category</label>
                                        <select class="form-control" name="category" id="exampleFormControlSelect1">
                                            @forelse ($dataCategory as $category)
                                                <option value="{{ $category->categories_id }}">{{ $category->title }}
                                                </option>
                                            @empty
                                                <option>Tidak Ada Data</option>
                                            @endforelse
                                        </select>
                                        <!-- error message untuk store_area -->
                                        @error('store_area')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- Image --}}
                                    <div class="list-images">
                                        @if (isset($list_images) && !empty($list_images))
                                            @foreach (json_decode($list_images) as $key => $img)
                                                <div class="box-image">
                                                    <input type="hidden" name="images_uploaded[]"
                                                        value="{{ $img }}" id="img-{{ $key }}">
                                                    <img src="{{ asset('files/' . $img) }}" class="picture-box">
                                                    <div class="wrap-btn-delete"><span data-id="img-{{ $key }}"
                                                            class="btn-delete-image">x</span></div>
                                                </div>
                                            @endforeach
                                            <input type="hidden" name="images_uploaded_origin"
                                                value="{{ $list_images }}">
                                            <input type="hidden" name="id" value="{{ $id }}">
                                        @endif
                                    </div>
                                    <div class="input-group hdtuto control-group lst increment">
                                        <div class="list-input-hidden-upload">
                                            <input type="file" name="filenames[]" id="file_upload"
                                                class="myfrm form-control hidden">
                                        </div>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success btn-add-image" type="button"><i
                                                    class="fldemo glyphicon glyphicon-plus"></i>+Add image</button>
                                        </div>
                                    </div>
                                    {{-- Image End --}}
                                </div>

                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-md btn-primary"
                                    onclick="return formSubmitted = true;">Save</button>
                                <button type="reset" class="btn btn-md btn-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // pop Confirmasi
        var formSubmitted = false;

        window.addEventListener("beforeunload", function(e) {
            if (!formSubmitted) {
                var confirmationMessage = "Apakah anda yakin ingin meninggalkan halaman ini?";
                e.returnValue = confirmationMessage; // Untuk Chrome
                return confirmationMessage; // Untuk Firefox
            }
        });

        function onSubmitForm() {
            formSubmitted = true;
        }
        // Endpop Confirmasi

        $(document).ready(function() {
            $(".btn-add-image").click(function() {
                $('#file_upload').trigger('click');
            });

            $('.list-input-hidden-upload').on('change', '#file_upload', function(event) {
                let today = new Date();
                let time = today.getTime();
                let image = event.target.files[0];
                let file_name = event.target.files[0].name;
                let box_image = $('<div class="box-image"></div>');
                box_image.append('<img src="' + URL.createObjectURL(image) + '" class="picture-box">');
                box_image.append('<div class="wrap-btn-delete"><span data-id=' + time +
                    ' class="btn-delete-image">x</span></div>');
                $(".list-images").append(box_image);

                $(this).removeAttr('id');
                $(this).attr('id', time);
                let input_type_file =
                    '<input type="file" name="filenames[]" id="file_upload" class="myfrm form-control hidden">';
                $('.list-input-hidden-upload').append(input_type_file);
            });

            $(".list-images").on('click', '.btn-delete-image', function() {
                let id = $(this).data('id');
                $('#' + id).remove();
                $(this).parents('.box-image').remove();
            });
        });
    </script>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush
