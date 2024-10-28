@extends('backend.catalogues.create')

@section('title', $title)

@section('content')
    <form action="{{ route('admin.config.banner.store') }}" method="post" enctype="multipart/form-data">
        @csrf
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
                                        <option value="1">Liên hệ</option>
                                        <option value="2">Thông tin</option>
                                        <option value="3">Dự án</option>
                                        <option value="4">Làm việc</option>
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
                                        placeholder="Nhập tiêu đề (có thể trống)" value="{{ old('title') }}">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="meta_description">Mô tả ngắn</label>
                                    <textarea name="description" id="description" cols="30" rows="5" placeholder="Nhập mô tả ngắn (có thể trống)"
                                        class="form-control">{{ old('description') }}</textarea>
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
                            <img src="{{ showImage('') }}" class="img-fluid" id="show_featured_image"
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

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Trạng thái</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="status" id="status" class="form-select">
                                <option value="published" selected>Công khai</option>
                                <option value="unpublished">Không công cai</option>
                            </select>
                            @error('status')
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

