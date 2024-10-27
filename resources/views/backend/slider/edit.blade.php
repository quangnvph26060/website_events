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
            <h5 class="card-title">{{ $title }}</h5>
            <div class="card-tools"><a href="{{ route('admin.slider.index') }}" class="btn btn-sm btn-outline-secondary "><i class="fas fa-list me-2"></i>Danh sách</a></div>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.slider.update', $slider) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div id="slider-container">
                        <div class="form-group mb-3 shadow-sm position-relative">
                            <div class="row ">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="title" placeholder="Tiêu đề"
                                        class="form-control" value="{{ old("title", $slider->title) }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="short_content"
                                        placeholder="Nội dung ngắn" class="form-control"
                                        value="{{ old("short_content", $slider->short_content) }}">
                                </div>
                                <div class="col-md-12">
                                    <img class="img-fluid img-thumbnail w-100" id="show_path_image"
                                        style="max-height: 500px; cursor: pointer"
                                        src="{{ showImage($slider->path_image) }}" alt=""
                                        onclick="document.getElementById('path_image').click();">
                                    <input type="file" name="path_image"
                                        id="path_image" class="form-control file-input"
                                        accept="image/*"
                                        onchange="previewImage(event, 'show_path_image')">
                                </div>
                            </div>

                        </div>

                </div>

                <button class="btn btn-sm btn-primary">Lưu</button>

            </form>
        </div>
    </div>



@endsection


