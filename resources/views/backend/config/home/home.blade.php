@extends('backend.layouts.master')

@section('title', $title)

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

    @endif
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ $title }}</h5>
        </div>

        <form action="{{ route('admin.config.home.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body" style="border-bottom: 2px solid red">
                <div class="row">
                    <div class="form-group">
                        <label for="title_1" class="form-label">Tiêu đề</label>
                        <input type="text" name="title_1" class="form-control"
                            value="{{ old('title_1', $configHome->title_1) }}">
                    </div>
                    <div class="form-group">
                        <label for="quote_1" class="form-label">Châm ngôn </label>
                        <input type="text" name="quote_1" class="form-control"
                            value="{{ old('quote_1', $configHome->quote_1) }}">
                    </div>

                    {{-- @dd($configHome->content) --}}
                    @foreach ($configHome->content as $i => $content)
                        <div class="form-group">
                            <label for="content_{{ $i }}" class="form-label">Nội dung</label>
                            <textarea name="content[]" id="content_{{ $i }}" cols="30" rows="10" class="summernote"
                                placeholder="Nội dung">{!! old('content.' . ($i - 1), $content) !!}</textarea>
                        </div>
                    @endforeach
                </div>

            </div>

            <div class="card-body " style="border-bottom: 2px solid red">
                <div class="row">
                    <div class="form-group">
                        <label for="title_2" class="form-label">Tiêu đề</label>
                        <input type="text" name="title_2" class="form-control"
                            value="{{ old('title_2', $configHome->title_2) }}">
                    </div>
                    <div class="form-group">
                        <label for="quote_2" class="form-label">Châm ngôn</label>
                        <input type="text" name="quote_2" class="form-control"
                            value="{{ old('quote_2', $configHome->quote_2) }}">
                    </div>


                </div>
            </div>

            <div class="card-body " style="border-bottom: 2px solid red">
                <div class="row">
                    <div class="form-group">
                        <label for="title_3" class="form-label">Tiêu đề</label>
                        <input type="text" name="title_3" class="form-control"
                            value="{{ old('title_3', $configHome->title_3) }}">
                    </div>
                    <div class="form-group">
                        <label for="quote_3" class="form-label">Châm ngôn</label>
                        <input type="text" name="quote_3" class="form-control"
                            value="{{ old('quote_3', $configHome->quote_3) }}">
                    </div>
                    <div class="form-group">
                        <label for="image_3" class="form-label">Ảnh</label>
                        <img class="img-fluid img-thumbnail w-100" id="show_image_3"
                            style="max-height: 500px; cursor: pointer" src="{{ showImage($configHome->image_3 ?? '') }}"
                            alt="" onclick="document.getElementById('image_3').click();">
                        <input type="file" name="image_3" id="image_3" class="form-control file-input" accept="image/*"
                            onchange="previewImage(event, 'show_image_3')">
                    </div>
                </div>
            </div>

            <div class="card-body " style="border-bottom: 2px solid red">
                <div class="row">
                    <div class="form-group">
                        <label for="title_4" class="form-label">Tiêu đề</label>
                        <input type="text" name="title_4" class="form-control"
                            value="{{ old('title_4', $configHome->title_4) }}">
                    </div>
                    <div class="form-group">
                        <label for="quote_4" class="form-label">Châm ngôn</label>
                        <input type="text" name="quote_4" class="form-control"
                            value="{{ old('quote_4', $configHome->quote_4) }}">
                    </div>
                </div>
            </div>

            <div class="card-body" style="border-bottom: 2px solid red">
                <div class="form-group">
                    <label for="map" class="form-label">Map</label>
                    <input type="text" name="map" class="form-control"
                        value="{{ old('map', $configHome->map) }}">
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary btn-sm m-2" type="submit">Xác nhận</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/summernote-bs4.min.js') }}"></script>
    <script>
        $('.summernote').summernote({
            height: '200px',
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['codeview']],
            ]
        });
    </script>
@endpush
