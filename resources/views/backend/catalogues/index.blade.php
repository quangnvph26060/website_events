@extends('backend.layouts.master')

@section('title', $title)

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">{{ $title }}</h4>
            <div class="card-tools">
                <a href="{{ route('admin.catalogues.create') }}" class="btn btn-primary">Thêm danh mục</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Tên danh mục</th>
                            <th>Danh mục cha</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Tên danh mục</th>
                            <th>Danh mục cha</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($catalogues as $catalogue)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img width="100px" height="100px" src="{{ showImage($catalogue->image) }}"
                                        alt="{{ $catalogue->name }}"></td>
                                <td>{{ $catalogue->name }}</td>
                                <td>{{ $catalogue->parent ? '--' . $catalogue->parent->name : '[NONE]' }}</td>
                                <td>
                                    <form action="{{ route('admin.catalogues.change-status', $catalogue) }}" method="post"
                                        id="change-form-{{ $catalogue->id }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="radio-container">
                                            <label class="toggle">
                                                <input onchange="confirmStatus(event, '{{ $catalogue->id }}')"
                                                    type="checkbox" class="status-change" @checked($catalogue->status)>
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <button type="submit" class="d-none">ok</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('admin.catalogues.edit', $catalogue->id) }}"
                                        class="btn btn-primary"><i class="far fa-edit me-2"></i>Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>

    <script>
        $("#multi-filter-select").DataTable({
            pageLength: 10,
            columnDefs: [{
                    orderable: true,
                    targets: [0, 2, 3]
                }, // Chỉ bật sắp xếp cho cột "STT", "Tên danh mục", "Danh mục cha"
                {
                    orderable: false,
                    targets: '_all'
                } // Tắt sắp xếp cho các cột còn lại
            ],
            initComplete: function() {
                this.api()
                    .columns([0, 2, 3]) // Chỉ lọc trên cột "Tên danh mục" và "Danh mục cha"
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



        function confirmStatus(event, catalogueId) {
            event.preventDefault(); // Ngăn việc submit form ngay lập tức

            Swal.fire({
                title: 'Cập nhật trạng thái?',
                text: "Bạn sẽ không thể hoàn nguyên điều này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('change-form-' + catalogueId).submit();
                }
            });
        }
    </script>
@endpush

@push('styles')
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
