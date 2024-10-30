@extends('backend.layouts.master')

@section('title', $title)


@section('content')
    <div class="sa-entity-layout">
        <div class="sa-entity-layout__body">
            <form action="{{ route('admin.catalogues.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                {{-- <input type="text" name="slug" readonly id="slug" class="form-control convert_slug"
                    placeholder="Slug">

                <input type="text" onkeyup="ChangeToSlug()" name="title" id="title" class="form-control slug"
                    placeholder="Title"> --}}

                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Thông tin</h2>
                                </div>
                                <div class="mb-4">
                                    <label for="name" class="form-label">Tên danh mục</label>
                                    <input onkeyup="ChangeToSlug()" type="text" name="name"
                                        value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                                        id="convert_slug" placeholder="Nhập tên danh mục" />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="slug" class="form-label">Slug</label>
                                    <div class="input-group input-group--sa-slug">
                                        <span class="input-group-text" id="slug-addon">{{ url('/') }}</span>
                                        <input name="slug" value="{{ old('slug') }}" type="text"
                                            class="form-control @error('slug') is-invalid @enderror" id="slug"
                                            aria-describedby="slug-addon slug-help" />
                                    </div>
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <div id="slug-help" class="form-text">
                                        Mã định danh danh mục duy nhất mà con người có thể đọc được. Không dài hơn 255 ký
                                        tự.
                                    </div>

                                </div>
                                <div class="mb-4">
                                    <label for="description" class="form-label">Mô tả</label>
                                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                        rows="5" placeholder="Mô tả">
                                        {{ old('description') }}
                                    </textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Trạng thái</label>
                                    <div class="radio-container">
                                        <label class="toggle">
                                            <input type="checkbox" value="1" name="status" @checked(old('status')) class="status-change">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="w-100">
                            <button class="btn btn-primary"> <i class="fas fa-save"></i> Xác nhận</button>
                            <a href="{{ route('admin.catalogues.index') }}" class="btn btn-secondary"> <i
                                    class="fas fa-backspace me-2"></i>Quay lại</a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card w-100 ">
                            <div class="card-body p-5">
                                <div class="mb-4">
                                    <h2 class="mb-0 fs-exact-18">Là thẻ</h2>
                                </div>
                                <select class="sa-select2 form-select @error('is_tag') is-invalid @enderror"
                                    name="is_tag">
                                    <option selected value="1" @checked(old('is_tag', 1))>Có</option>
                                    <option  value="0" @checked(old('is_tag', 0))>Không</option>
                                </select>
                                @error('is_tag')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="card w-100">
                            <div class="card-body p-5">
                                <h2 class="mb-0 fs-exact-18">Ảnh tiêu biểu</h2>
                                <div class="max-w-20x">
                                    <img class="img-fluid img-thumbnail w-100" id="show_image"
                                        style="max-height: 240px; cursor: pointer" src="{{ showImage('') }}" alt=""
                                        onclick="document.getElementById('image').click();">
                                    <input type="file" name="image" id="image" class="form-control file-input"
                                        accept="image/*" onchange="previewImage(event, 'show_image')">
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script src="{{ asset('backend/assets/js/plugin/quill/quill.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/stroyka.js') }}"></script> --}}
@endpush
