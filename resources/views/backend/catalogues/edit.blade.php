@extends('backend.layouts.master')

@section('title', $title)


@section('content')
    <div class="sa-entity-layout">
        <div class="sa-entity-layout__body">
            <form action="{{ route('admin.catalogues.update', $catalogue) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Thông tin</h2>
                                </div>
                                <div class="mb-4">
                                    <label for="name" class="form-label">Tên danh mục</label>
                                    <input type="text" name="name" value="{{ old('name', $catalogue->name) }}"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="Nhập tên danh mục" />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="slug" class="form-label">Slug</label>
                                    <div class="input-group input-group--sa-slug">
                                        <span class="input-group-text" id="slug-addon">http://sgo_portfolio.test</span>
                                        <input name="slug" value="{{ old('slug', $catalogue->slug) }}" type="text"
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
                                        rows="8" placeholder="Mô tả">
                                    {{ old('description', $catalogue->description) }}
                                </textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Trạng thái</label>
                                    <div class="radio-container">
                                        <label class="toggle">
                                            <input type="checkbox" value="1" name="status"
                                                @checked(old('status', $catalogue->status)) class="status-change">
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
                                    <h2 class="mb-0 fs-exact-18">Danh mục cha</h2>
                                </div>
                                <select class="sa-select2 form-select @error('parent_id') is-invalid @enderror"
                                    name="parent_id">
                                    <option value="">[NONE]</option>
                                    @foreach ($catalogues as $cata)
                                        <option value="{{ $cata->id }}" @selected(old('parent_id', $catalogue->parent_id) == $cata->id)>
                                            {{ str_repeat('--', $cata->depth) . ' ' . $cata->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('parent_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="form-text">
                                    Chọn một danh mục sẽ là danh mục chính của danh mục hiện tại.
                                </div>
                            </div>
                        </div>
                        <div class="card w-100">
                            <div class="card-body p-5">
                                <h2 class="mb-0 fs-exact-18">Ảnh tiêu biểu</h2>
                                <div class="max-w-20x">
                                    <img class="img-fluid img-thumbnail w-100" id="show_image"
                                        style="height: 240px; cursor: pointer" src="{{ showImage($catalogue->image) }}"
                                        alt="" onclick="document.getElementById('image').click();">
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
    <script src="{{ asset('backend/assets/js/plugin/quill/quill.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/stroyka.js') }}"></script>
@endpush
