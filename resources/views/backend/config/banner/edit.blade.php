@extends('backend.catalogues.create')

@section('title', $title)

@section('content')
    <form action="{{ route('admin.config.banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">{{ $title }}</h4>
                        <div class="card-tools">
                            <a href="{{ route('admin.config.banner.index') }}" class="btn btn-primary"><i
                                    class="fas fa-list me-2"></i>Danh
                                sách</a>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="page_name">Tên page <i style="color: red">*</i></label>
                                    <select name="page_name" id="" class="form-select">
                                        <option value="1" {{ $banner->page_name == 1 ? 'selected' : '' }}>Thông tin</option>
                                        <option value="2" {{ $banner->page_name == 2 ? 'selected' : '' }}>Dự án</option>
                                        <option value="3" {{ $banner->page_name == 3 ? 'selected' : '' }}>Làm việc</option>
                                        <option value="4" {{ $banner->page_name == 4 ? 'selected' : '' }}>Liên hệ</option>
                                    </select>
                                    @error('page_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Nhập tiêu đề (có thể trống)" value="{{ $banner->title }}">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="meta_description">Mô tả ngắn</label>
                                    <textarea name="description" id="description" cols="30" rows="5" placeholder="Nhập mô tả ngắn (có thể trống)"
                                        class="form-control">{{ $banner->description }}</textarea>
                                    @error('description')
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
                        <h4 class="card-title">Ảnh banner<i style="color: red">*</i></h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <img src="{{ showImage($banner->path_image) }}" class="img-fluid" id="show_featured_image"
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

@push('scripts')
@endpush
