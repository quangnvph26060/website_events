@extends('backend.layouts.master')

@section('title', $title)

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">{{ $title }}</h4>
            <div class="card-tools">
                <a href="{{ route('admin.works.index') }}" class="btn btn-primary"><i class="fas fa-list me-2"></i>Danh
                    sách</a>
            </div>
        </div>

        <form action="{{ route('admin.works.store') }}" method="post" enctype="multipart/form-data">
            @csrf
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
                            <label for="title">Danh mục</label>
                            <select name="cata_id" id="cata_id" class="form-control">
                                <option value="">Chọn một danh mục</option>
                                @foreach ($catas as $cata)
                                    <option value="{{ $cata->id }}" @selected(old('cata_id') == $cata->id)>{{ $cata->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="customer">Khách hàng</label>
                            <input type="text" name="customer" id="customer" class="form-control"
                                value="{{ old('customer') }}">
                            @error('customer')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="project_name">Tên dự án</label>
                            <input type="text" name="project_name" id="project_name" class="form-control"
                                value="{{ old('project_name') }}">
                            @error('project_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="participants_count">Số người tham gia</label>
                            <input type="text" name="participants_count" id="participants_count" class="form-control"
                                value="{{ old('participants_count') }}">
                            @error('participants_count')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="year">Năm</label>
                            <input type="text" name="year" id="year" class="form-control"
                                value="{{ old('year') }}">
                            @error('year')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="location">Địa điểm</label>
                            <input type="text" name="location" id="location" class="form-control"
                                value="{{ old('location') }}">
                            @error('location')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="category">Gắn thẻ</label>
                            <select name="categories[]" class="sa-select2 form-select" multiple>
                                @foreach ($catalogues as $catalogue)
                                    <option value="{{ $catalogue->id }}" @if (in_array($catalogue->id, old('categories', []))) selected @endif>
                                        {{ $catalogue->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('categories')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">Chọn ảnh</label>
                        <div id="image" class="dropzone dz-clickable">
                            <div class="dz-message needsclick">
                                <br>Drop files here or click to upload.<br><br>
                            </div>
                        </div>
                    </div>
                    <!-- Hidden inputs will be appended here by Dropzone -->
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Xác nhận</button>
                </div>
            </div>
        </form>

    </div>

@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('backend/assets/js/select2.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.sa-select2').select2();


            $('#cata_id').select2({
                placeholder: 'Chọn danh mục',
                allowClear: true
            });
        });

        Dropzone.autoDiscover = false;
        $(function() {
            let uploadedImages = [];

            const dropzone = new Dropzone("#image", {
                url: "{{ route('admin.temp-images.create') }}",
                maxFiles: 10,
                paramName: "image",
                addRemoveLinks: true,
                acceptedFiles: "image/jpeg,image/png,image/gif",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(file, response) {
                    let inputHidden =
                        `<input type="hidden" name="image_path[]" value="${response.path}" id="file-${file.upload.uuid}">`;
                    $('#image').append(inputHidden);
                    uploadedImages.push(response.path);
                    file.upload.path = response.path; // Lưu đường dẫn để sử dụng khi xóa
                },
                removedfile: function(file) {
                    let fileRef;
                    if ((fileRef = file.previewElement) != null) {
                        fileRef.parentNode.removeChild(file.previewElement);
                    }

                    // Gửi yêu cầu xóa file bằng đường dẫn đã lưu
                    $.ajax({
                        url: "{{ route('admin.temp-images.destroy') }}", // Route xóa
                        type: 'DELETE',
                        data: {
                            path: file.upload.path, // Gửi đường dẫn file
                            _token: $('meta[name="csrf-token"]').attr('content') // CSRF token
                        },
                        success: function(response) {
                            console.log(response.success); // Hiển thị thông báo thành công
                        },
                        error: function(xhr) {
                            console.error('Error deleting file:', xhr
                                .responseText); // Xử lý lỗi nếu có
                        }
                    });

                    $(`#file-${file.upload.uuid}`).remove();
                    const index = uploadedImages.indexOf(file.upload.path);
                    if (index !== -1) {
                        uploadedImages.splice(index, 1);
                    }
                }
            });
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
