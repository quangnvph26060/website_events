@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">
                Yêu Cầu Liên Hệ
            </h3>
            <div class="card-tools">
                <form action="" method="post" style="width: 300px" id="email-form">
                    <div class="input-group d-flex">
                        <input type="text" name="email" id="email" value="{{ env('MAIL_TO') }}"
                            placeholder="Nhập email nhận thông báo" class="form-control">
                        <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Tiêu đề</th>
                            <th>Công ty</th>
                            <th>Thời gian tạo</th>

                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($contacts->isNotEmpty())
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->fullName }}</td>
                                    <td>
                                        {{ $contact->email }}
                                    </td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->company }}</td>
                                    <td>{{ \Carbon\Carbon::parse($contact->created_at)->format('d-m-Y H:i') }}
                                        ({{ \Carbon\Carbon::parse($contact->created_at)->locale('vi')->diffForHumans() }})
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $('#email-form').submit(function(e) {
            e.preventDefault();
            var email = $('#email').val();
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    email
                },
                success: function(response) {
                    if (response.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công',
                            text: response.message,
                        })

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Thất bại',
                            text: response.error,
                        })
                    }
                },
                error: function(error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Thất bại',
                        text: response.message,
                    })
                }
            })
        });

        $("#multi-filter-select").DataTable({
            pageLength: 10,
            columnDefs: [{
                    orderable: true,
                    targets: [0, 1, 3, 4]
                }, // Chỉ bật sắp xếp cho cột "STT", "Tên danh mục", "Danh mục cha"
                {
                    orderable: false,
                    targets: '_all'
                } // Tắt sắp xếp cho các cột còn lại
            ],
            initComplete: function() {
                this.api()
                    .columns([0, 1, 3]) // Chỉ lọc trên cột "Tên danh mục" và "Danh mục cha"
                    .every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select"><option value=""></option></select>'
                            )
                            .appendTo($(column.footer()).empty())
                            .on("change", function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column
                                    .search(val ? "^" + val + "$" : "", true, false)
                                    .draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                select.append(
                                    '<option value="' + d + '">' + d + "</option>"
                                );
                            });
                    });
            },
        });
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css') }}">

    <script src="{{ asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
@endpush
