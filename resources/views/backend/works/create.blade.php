@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">{{ $title }}</h4>
            <div class="card-tools">
                <a href="{{ route('admin.works.index') }}" class="btn btn-primary"><i class="fas fa-list me-2"></i>Danh
                    sách</a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title') }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="category">Danh mục</label>
                        <select name="categories[]" class="sa-select2 form-select" multiple>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK" selected="">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                        </select>
                        @error('categories')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="form-label">Chọn ảnh</label>
                    <form action="{{ route('admin.works.store') }}" method="POST" enctype="multipart/form-data"
                        class="dropzone" id="my-dropzone">
                        @csrf

                        <div class="form-group">
                            <div class="fallback">
                                <input name="file[]" type="file" multiple />
                            </div>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i> Xác nhận</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('backend/assets/js/select2.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.sa-select2').select2();
            // Dropzone.options.myDropzone = {
            //     paramName: "file",
            //     maxFilesize: 2, // MB
            //     acceptedFiles: ".jpeg,.jpg,.png,.gif",
            //     init: function() {
            //         this.on("success", function(file, response) {
            //             file.previewElement.querySelector(".dz-remove").onclick = function() {
            //                 // Xóa file khỏi Dropzone
            //                 myDropzone.removeFile(file);
            //                 // Gửi yêu cầu xóa file tới server nếu cần thiết
            //             };
            //         });
            //     }
            // };

            Dropzone.auto
        });
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/dropzone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/select2.min.css') }}">

    <style>
        .dropzone {
            padding: 20px 20px !important;
        }
    </style>
@endpush
