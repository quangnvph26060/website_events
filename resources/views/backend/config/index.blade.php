@extends('backend.layouts.master')

@section('title', $title)


@section('content')


    <div class="page-inner">
        <div class="page-header">
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Thông tin công ty</a>
                </li>

            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <div class="card-header">
                            <h4 class="card-title">
                                Thông tin về <span style="color: red;">{{ $config->name }}</span>
                            </h4>
                        </div>
                        <div>
                            <div class="basic-form">
                                <form class="form-valide-with-icon" action="{{ route('admin.config.update') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label class="text-label">Tiêu đề SEO</label>
                                        <input type="text" class="form-control" name="title_seo"
                                            placeholder="Tiêu đề SEO" value="{{ $config->title_seo }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Từ khóa SEO</label>
                                        <textarea class="form-control" name="meta_seo" placeholder="Từ khóa SEO">{{ $config->meta_seo }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Mô tả SEO</label>
                                        <textarea class="form-control" name="description_seo" placeholder="Mô tả SEO">{{ $config->description_seo }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Mô tả công ty</label>
                                        <textarea class="form-control" name="description" placeholder="Mô tả công tu">{{ $config->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Tên cửa hàng</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-home"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Tên cửa hàng" value="{{ $config->name }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Địa chỉ</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="address" placeholder="Địa chỉ"
                                                value="{{ $config->address }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email cửa hàng" value="{{ $config->email }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Điện thoại </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="tel" class="form-control" name="constant_hotline"
                                                placeholder="Điện thoại " value="{{ $config->constant_hotline }}">
                                        </div>
                                    </div>





                                    <div class="input-group mb-3" style="justify-content: space-between">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-primary" type="button">Hình ảnh Logo</button>

                                        </div>

                                        <div class="custom-file" style="text-align: end">
                                            <input type="file" class="custom-file-input" id="banner" name="logo">


                                        </div>

                                    </div>
                                    <div class="form-group" style="text-align: center">
                                        <img id="profileImagebanner" style="width:150px; height:auto"
                                            src="{{ isset($config->logo) && !empty($config->logo) ? showImage($config->logo) : asset('images/avatar2.jpg') }}"
                                            alt="image banner" class="v">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-label">Footer</label>
                                        <input type="text" class="form-control" name="footer" placeholder="Footer"
                                            value="{{ $config->footer }}">
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @push('styles')
        <style>
            /* Tạo khoảng cách giữa các phần tử */
            .form-group {
                margin-bottom: 20px;
            }

            /* Tăng chiều cao của input và textarea */
            .form-control {
                height: 45px;
                padding: 10px 15px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid #ccc;
                transition: border-color 0.3s ease;
            }

            /* Thay đổi đường viền khi focus */
            .form-control:focus {
                border-color: #007bff;
                outline: none;
                box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
            }

            /* Style cho các label */
            .text-label {
                font-size: 16px;
                font-weight: bold;
                color: #333;
                margin-bottom: 8px;
            }

            /* Style cho button */
            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                font-size: 16px;
                border-radius: 5px;
                transition: background-color 0.3s ease, box-shadow 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #0056b3;
                box-shadow: 0 4px 12px rgba(0, 123, 255, 0.2);
            }

            /* Căn chỉnh button */
            .form-group .btn {
                display: block;
                width: 100%;
                max-width: 150px;
                margin: 0 auto;
            }

            /* Style cho input group */
            .input-group {
                display: flex;
                align-items: center;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .input-group-prepend .input-group-text {
                background-color: #f8f9fa;
                border-right: none;
                border-radius: 5px 0 0 5px;
                padding: 10px;
                border: none;
            }

            .input-group .form-control {
                border: none;
                border-radius: 0 5px 5px 0;
                padding-left: 0;
            }

            /* Tạo khoảng cách và căn chỉnh ảnh trong phần logo */
            #image_show img {
                display: block;
                margin: 20px auto;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .custom-file-input:focus+.custom-file-label {
                border-color: #007bff;
                box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
            }

            /* Tạo hiệu ứng hover cho các liên kết */
            a {
                color: #007bff;
                transition: color 0.3s ease;
            }

            a:hover {
                color: #0056b3;
                text-decoration: none;
            }

            /* Style cho tiêu đề card */
            .card-header h4 {
                font-size: 20px;
                font-weight: bold;
                color: #333;
            }

            .card-header h4 span {
                color: #e74c3c;
            }

            /* Tạo khoảng cách bên trong cho card */
            .card-body {
                padding: 30px;
                background-color: #f8f9fa;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            .input-group {
                margin-bottom: 20px;
                /* Khoảng cách dưới mỗi nhóm input */
            }

            .btn-primary {
                background-color: #007bff;
                /* Màu nền cho nút */
                border-color: #007bff;
                /* Màu viền cho nút */
                transition: background-color 0.3s;
                /* Hiệu ứng chuyển đổi */
            }

            .btn-primary:hover {
                background-color: #0056b3;
                /* Màu nền khi hover */
                border-color: #0056b3;
                /* Màu viền khi hover */
            }

            .custom-file-input:lang(en)~.custom-file-label::after {
                content: "Browse";
                /* Đổi tên nút thành 'Browse' */
            }

            .custom-file-label {
                border: 1px solid #ced4da;
                /* Viền cho nhãn file */
                border-radius: 0.25rem;
                /* Bo góc cho nhãn file */
                background-color: #f8f9fa;
                /* Màu nền nhãn file */
                transition: background-color 0.3s;
                /* Hiệu ứng chuyển đổi */
            }

            .custom-file-input:focus~.custom-file-label {
                border-color: #80bdff;
                /* Màu viền khi input file được focus */
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                /* Hiệu ứng bóng */
            }

            .custom-file-input:valid~.custom-file-label {
                color: #495057;
                /* Màu chữ khi file đã chọn */
            }

            .input-group {
                margin-bottom: 20px;
                /* Khoảng cách dưới mỗi nhóm input */
            }

            .btn-primary {
                background-color: #007bff;
                /* Màu nền cho nút */
                border-color: #007bff;
                /* Màu viền cho nút */
                transition: background-color 0.3s;
                /* Hiệu ứng chuyển đổi */
                font-size: 14px;
                /* Kích thước font chữ nhỏ hơn */
                padding: 8px 12px;
                /* Padding để nút nhỏ hơn */
            }

            .btn-primary:hover {
                background-color: #0056b3;
                /* Màu nền khi hover */
                border-color: #0056b3;
                /* Màu viền khi hover */
            }

            .custom-file {
                font-size: 14px;
                /* Kích thước font chữ cho nhãn file nhỏ hơn */
            }

            .custom-file-input:lang(en)~.custom-file-label::after {
                content: "Browse";
                /* Đổi tên nút thành 'Browse' */
            }

            .custom-file-label {
                border: 1px solid #ced4da;
                /* Viền cho nhãn file */
                border-radius: 0.25rem;
                /* Bo góc cho nhãn file */
                background-color: #f8f9fa;
                /* Màu nền nhãn file */
                transition: background-color 0.3s;
                /* Hiệu ứng chuyển đổi */
                padding: 8px 12px;
                /* Padding để nhãn nhỏ hơn */
            }

            .custom-file-input:focus~.custom-file-label {
                border-color: #80bdff;
                /* Màu viền khi input file được focus */
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                /* Hiệu ứng bóng */
            }

            .custom-file-input:valid~.custom-file-label {
                color: #495057;
                /* Màu chữ khi file đã chọn */
            }
        </style>
    @endpush





@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/plugin/quill/quill.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/stroyka.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <script>
        $(document).ready(function() {

            $('#banner').on('change', function(event) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#profileImagebanner').attr('src', e.target.result);
                };
                if (event.target.files[0]) {
                    reader.readAsDataURL(event.target.files[0]);
                }
            });

            $('#logo1').on('change', function(event) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#profileImagelogo1').attr('src', e.target.result);
                };
                if (event.target.files[0]) {
                    reader.readAsDataURL(event.target.files[0]);
                }
            });
            $('#logo2').on('change', function(event) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#profileImagelogo2').attr('src', e.target.result);
                };
                if (event.target.files[0]) {
                    reader.readAsDataURL(event.target.files[0]);
                }
            });
            $('#logo3').on('change', function(event) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#profileImagelogo3').attr('src', e.target.result);
                };
                if (event.target.files[0]) {
                    reader.readAsDataURL(event.target.files[0]);
                }
            });
        });
    </script>
@endpush
