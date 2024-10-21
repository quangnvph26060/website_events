@extends('backend.layouts.master')

@section('content')
    <div class="sa-entity-layout">
        <div class="sa-entity-layout__body">

            <div class="row">

                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="mb-5">
                                <h2 class="mb-0 fs-exact-18">Thông tin</h2>
                            </div>
                            <div class="mb-4">
                                <label for="form-category/name" class="form-label">Tên danh mục</label><input type="text"
                                    class="form-control" id="form-category/name" value="Hand Tools" />
                            </div>
                            <div class="mb-4">
                                <label for="form-category/slug" class="form-label">Slug</label>
                                <div class="input-group input-group--sa-slug">
                                    <span class="input-group-text"
                                        id="form-category/slug-addon">https://example.com/catalog/</span><input
                                        type="text" class="form-control" id="form-category/slug"
                                        aria-describedby="form-category/slug-addon form-category/slug-help"
                                        value="hand-tools" />
                                </div>
                                <div id="form-category/slug-help" class="form-text">
                                    Mã định danh danh mục duy nhất mà con người có thể đọc được. Không dài hơn 255 ký tự.
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="form-category/description" class="form-label">Mô tả</label>
                                <textarea id="form-category/description" class="form-control" rows="8" placeholder="Mô tả">
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card w-100 ">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <h2 class="mb-0 fs-exact-18">Danh mục cha</h2>
                            </div>
                            <select class="sa-select2 form-select">
                                <option>[None]</option>
                                <option selected="">Tools</option>
                                <option>Screwdrivers</option>
                                <option>Chainsaws</option>
                                <option>Hand tools</option>
                                <option>Machine tools</option>
                                <option>Power machinery</option>
                                <option>Measurements</option>
                                <option>Power tools</option>
                            </select>
                            <div class="form-text">
                                Chọn một danh mục sẽ là danh mục chính của danh mục hiện tại.
                            </div>
                        </div>
                    </div>
                    <div class="card w-100">
                        <div class="card-body p-5">
                            <h2 class="mb-0 fs-exact-18">Ảnh tiêu biểu</h2>
                            <div class="max-w-20x">
                                <img class="img-fluid img-thumbnail w-100" id="image-container"
                                    style="height: 240px; cursor: pointer" src="{{ showImage('') }}" alt=""
                                    onclick="document.getElementById('banner').click();">
                                <input type="file" name="banner" id="banner" class="form-control file-input"
                                    accept="image/*" onchange="previewImage(event, 'image-container')">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/plugin/quill/quill.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/stroyka.js') }}"></script>
@endpush
