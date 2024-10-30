@extends('backend.catalogues.create')

@section('title', $title)

@section('content')
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

    @endif --}}
    <form action="{{ route('admin.partners.update', $partner) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">{{ $title }}</h4>
                        <div class="card-tools">
                            <a href="{{ route('admin.partners.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-list me-2"></i>Danh
                                sách</a>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label fw-bold">Tên đối tác</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name', $partner->name) }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="website_url" class="form-label fw-bold">Đường dẫn website</label>
                                    <input type="text" name="website_url" id="website_url" class="form-control"
                                        value="{{ old('website_url', $partner->website_url) }}">
                                    @error('website_url')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="description" class="form-label fw-bold">Mô tả</label>
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ old('description', $partner->description) }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4 class="card-title">Ảnh đại diện</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <img src="{{ showImage($partner->logo) }}" class="img-fluid w-100" id="show_logo"
                                style="max-height: 150px; cursor: pointer" alt=""
                                onclick="document.getElementById('logo').click();">
                            <input type="file" name="logo" id="logo" class="form-control file-input"
                                accept="image/*" onchange="previewImage(event, 'show_logo')">
                            @error('logo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <h4 class="card-title">Trạng thái</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="is_active" id="is_active" class="form-select">
                                <option value="1" @checked(old('is_active', $partner->is_active))>Hoạt động</option>
                                <option value="0" @checked(old('is_active', $partner->is_active))>Ngưng hoạt động</option>
                            </select>
                            @error('is_active')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" mt-4 d-flex justify-content-start">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Xác nhận</button>
                </div>
            </div>
        </div>

    </form>
@endsection

@push('scripts')
    <script></script>
@endpush

@push('styles')
@endpush
