@extends('backend.catalogues.create')

@section('title', $title)

@section('content')
    <form action="{{ route('admin.about.update', $about->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">{{ $title }}</h4>
                        <div class="card-tools">
                            <a href="{{ route('admin.about.index') }}" class="btn btn-primary"><i
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
                                        value="{{ $about->title }}">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group" id="content-fields">
                                    <label for="meta_keywords">Ý tưởng</label>
                                    @foreach ($about->content as $content)
                                        <div class="input-group">
                                            <input type="text" name="content[]" value="{{ $content }}"
                                                id="content" placeholder="Nhập ý tưởng đầu tiên ở đây" required
                                                class="form-control">
                                            <button type="button" class="remove-input" onclick="removeInput(this)"><i
                                                    class="fas fa-times"></i></button>
                                        </div>
                                    @endforeach


                                    <button type="button" id="edit-content" class="btn btn-success my-2">Add More
                                        Content</button>
                                    @error('content')
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
                            <img src="{{ showImage($about->image) }}" class="img-fluid" id="show_featured_image"
                                style="max-height: 240px; cursor: pointer" alt=""
                                onclick="document.getElementById('featured_image').click();">
                            <input type="file" name="image" id="featured_image" class="form-control file-input"
                                accept="image/*" onchange="previewImage(event, 'show_featured_image')">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </form>

    <style>
        .content-input {
            display: block;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;

        }

        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .remove-input {
            padding: 8px 12px;
            background-color: #ff4d4d;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .remove-input:hover {
            background-color: #ff1a1a;
        }
    </style>
@endsection

@push('scripts')
    <script>
        document.getElementById('edit-content').onclick = function() {
            var contentFields = document.getElementById('content-fields');
            var newInputGroup = document.createElement('div');
            newInputGroup.className = 'input-group';

            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'content[]';
            newInput.className = 'content-input';
            newInput.placeholder = 'Enter content here';
            newInput.required = true;

            var removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.className = 'remove-input';
            removeButton.onclick = function() {
                removeInput(removeButton);
            };

            var icon = document.createElement('i');
            icon.className = 'fas fa-times';
            removeButton.appendChild(icon);

            newInputGroup.appendChild(newInput);
            newInputGroup.appendChild(removeButton);
            contentFields.appendChild(newInputGroup);
        };

        function removeInput(button) {
            var inputGroup = button.parentNode;
            inputGroup.parentNode.removeChild(inputGroup);
        }
    </script>
@endpush
