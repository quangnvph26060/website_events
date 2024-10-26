@extends('backend.catalogues.create')

@section('title', $title)

@section('content')
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

    @endif --}}
    <form action="{{ route('admin.slider.update' , $slider->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">{{ $title }}</h4>
                        <div class="card-tools">
                            <a href="{{ route('admin.slider.index') }}" class="btn btn-primary"><i
                                    class="fas fa-list me-2"></i>Danh
                                sách</a>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ $slider->title }}">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                      
                          
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="short_content">Mô tả</label>
                                    <textarea name="short_content" id="short_content" cols="30" rows="5" class="form-control">{{ $slider->short_content }}</textarea>
                                    @error('short_content')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Xác nhận</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ảnh tiêu biểu</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <img src="{{ showImage($slider->path_image) }}" class="img-fluid" id="show_featured_image"
                                style="max-height: 240px; cursor: pointer" alt=""
                                onclick="document.getElementById('featured_image').click();">
                            <input type="file" name="path_image" id="featured_image" class="form-control file-input"
                                accept="image/*" onchange="previewImage(event, 'show_featured_image')">
                            @error('path_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
