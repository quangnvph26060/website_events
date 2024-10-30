@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">{{ $title }}</h4>
            <div class="card-tools">
                <a href="{{ route('admin.partners.create') }}" class="btn btn-primary btn-sm">Thêm đối tác</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                        <tr>
                            <th>STT</th>
                            <th>Tên đối tác</th>
                            <th>Đường dẫn website</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Tên đối tác</th>
                            <th>Đường dẫn website</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($partners->isNotEmpty())
                            @foreach ($partners as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        {{-- {{ $item->website_url }}  <a href="{{ $item->website_url }}" target="_blank">{{ $item->website_url }}</a> --}}
                                        @if ($item->website_url)
                                            <a href="{{ $item->website_url }}" target="_blank">{{ $item->website_url }}</a>
                                        @else
                                            Đang cập nhật...
                                        @endif
                                    </td>
                                    <td>{!! $item->is_active
                                        ? '<span class="badge bg-success">Hoạt động</span>'
                                        : '<span class="badge bg-danger">Ngưng hoạt động</span>' !!}</td>
                                    <td>
                                        <a href="{{ route('admin.partners.edit', $item) }}"
                                            class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                                        <form action="{{ route('admin.partners.destroy', $item) }}" method="post"
                                            id="delete-form-{{ $item->id }}" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="confirmDelete(event, '{{ $item->id }}')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
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
        function confirmDelete(event, postId) {
            event.preventDefault();

            Swal.fire({
                title: 'Bạn có chắc chắn không?',
                text: "Bạn sẽ không thể hoàn nguyên điều này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, Xóa nó!',
                cancelButtonText: 'Huỷ'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + postId).submit();
                }
            });
        }

        $("#multi-filter-select").DataTable({
            pageLength: 10,
            columnDefs: [{
                    orderable: true,
                    targets: [0, 1, 3]
                }, // Chỉ bật sắp xếp cho cột "STT", "Tên danh mục", "Danh mục cha"
                {
                    orderable: false,
                    targets: '_all'
                } // Tắt sắp xếp cho các cột còn lại
            ],
            initComplete: function() {
                this.api()
                    .columns([0, 1, 2]) // Chỉ lọc trên cột "Tên danh mục" và "Danh mục cha"
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
            "order": [
                [0, "desc"]
            ]
        });
    </script>
@endpush

@push('styles')
    <script src="{{ asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
@endpush
