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

                    <div class="form-group">
                        <label for="content" class="form-label">Nội dung</label>
                        <textarea name="content" id="content" cols="30" rows="10"
                            placeholder="Nội dung">{!! old('content', $configHome->content) !!}</textarea>
                    </div>
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        const BASE_URL = "{{ url('/') }}";
    </script>
    <script>
         CKEDITOR.replace('content', {
                filebrowserImageUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form',
            });
    </script>

@endpush
