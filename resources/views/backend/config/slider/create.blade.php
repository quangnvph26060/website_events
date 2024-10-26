@extends('backend.layouts.master')

@section('title', $title)

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="card">
        <div class="card-header ">
            <h5 class="card-title">{{ $title }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.config.slider') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div id="slider-container">
                    @php
                        $maxId = 0; // Biến để theo dõi ID lớn nhất
                    @endphp
                    @foreach ($sliders as $item)
                        @php
                            $maxId = max($maxId, $item->id); // Cập nhật ID lớn nhất
                        @endphp
                        <div class="form-group mb-3 shadow-sm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="title[{{ $item->id }}]" placeholder="Tiêu đề" class="form-control" value="{{ $item->title }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="short_content[{{ $item->id }}]" placeholder="Nội dung ngắn" class="form-control" value="{{ $item->short_content }}">
                                </div>
                                <div class="col-md-12">
                                    <img class="img-fluid img-thumbnail w-100" id="show_path_image_{{ $item->id }}"
                                        style="max-height: 500px; cursor: pointer" src="{{ showImage($item->path_image) }}" alt=""
                                        onclick="document.getElementById('path_image_{{ $item->id }}').click();">
                                    <input type="file" name="path_image[{{ $item->id }}]" id="path_image_{{ $item->id }}"
                                        class="form-control file-input" accept="image/*"
                                        onchange="previewImage(event, 'show_path_image_{{ $item->id }}')">
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="removeSlider(this)">X</button>
                        </div>
                    @endforeach

                    @php
                        $sliderCount = $maxId > 0 ? $maxId + 1 : 1; // Đặt giá trị ban đầu cho sliderCount
                    @endphp
                </div>

                <button class="btn btn-sm btn-primary">Lưu</button>
                <button class="btn btn-outline-success btn-sm" type="button" onclick="addSlider()">Thêm slider</button>

            </form>
        </div>
    </div>

    <script>
        let sliderCount = {{ $sliderCount }}; // Sử dụng giá trị từ PHP

        function addSlider() {
            // Tạo một ID mới cho slider
            const newId = sliderCount;

            // Tạo HTML cho slider mới
            const newSlider = `
                <div class="form-group mb-3 shadow-sm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" name="title[${newId}]" placeholder="Tiêu đề" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" name="short_content[${newId}]" placeholder="Nội dung ngắn" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <img class="img-fluid img-thumbnail w-100" id="show_path_image_${newId}"
                                 style="max-height: 500px; cursor: pointer" src="{{ showImage('') }}" alt=""
                                 onclick="document.getElementById('path_image_${newId}').click();">
                            <input type="file" name="path_image[${newId}]" id="path_image_${newId}" class="form-control file-input"
                                 accept="image/*" onchange="previewImage(event, 'show_path_image_${newId}')">
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm" onclick="removeSlider(this)">X</button>
                </div>
            `;

            // Thêm slider mới vào vùng chứa
            document.getElementById('slider-container').insertAdjacentHTML('beforeend', newSlider);

            // Tăng biến đếm slider
            sliderCount++;
        }

        function removeSlider(button) {
            // Xóa slider tương ứng với nút "X" đã được nhấn
            const sliderGroup = button.parentElement;
            sliderGroup.remove();
        }
    </script>

@endsection
