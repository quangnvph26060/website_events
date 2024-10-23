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

        <form action="{{ route('admin.works.update', $work) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title', $work->title) }}">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="category">Danh mục</label>
                            <select name="categories[]" class="sa-select2 form-select" multiple>
                                @foreach ($catalogues as $catalogue)
                                    <option value="{{ $catalogue->id }}" @selected(in_array($catalogue->id, old('categories', $selectedCategories)))>
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
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            @foreach ($work->images as $image)
                                <div class="col-md-2 position-relative pe-0 me-4">
                                    <img src="{{ showImage($image->image_path) }}" class="img-fluid w-100 rounded"
                                        alt="">
                                    <button type="button"
                                        class="btn btn-danger btn-sm remove-image position-absolute end-0 top-0"
                                        data-id="{{ $image->id }}">Xóa</button>
                                </div>
                            @endforeach
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

            // Sự kiện khi nhấn nút "Xóa" ở mỗi ảnh
            $(document).on('click', '.remove-image', function() {
                const imageId = $(this).data('id');
                const button = $(this); // Lưu trữ button hiện tại để xử lý sau

                // Xóa ảnh khỏi giao diện
                button.closest('.col-md-2').remove();

                // Lưu id ảnh đã xóa vào ô input ẩn
                $('<input>', {
                    type: 'hidden',
                    name: 'deleted_images[]',
                    value: imageId,
                    class: 'deleted-image-id'
                }).appendTo('#image'); // Thêm vào bên trong phần #image hoặc bất kỳ nơi nào phù hợp
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
                    file.upload.path = response.path;
                },
                removedfile: function(file) {
                    let fileRef;
                    if ((fileRef = file.previewElement) != null) {
                        fileRef.parentNode.removeChild(file.previewElement);
                    }

                    $.ajax({
                        url: "{{ route('admin.temp-images.destroy') }}", // Route xóa
                        type: 'DELETE',
                        data: {
                            path: file.upload.path,
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response.success);
                        },
                        error: function(xhr) {
                            console.error('Error deleting file:', xhr.responseText);
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
