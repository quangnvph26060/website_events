@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">{{ $title }}</h4>
            <div class="card-tools">
                <a href="{{ route('admin.works.create') }}" class="btn btn-primary">Thêm tác phẩm</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Danh mục</th>
                            <th>Thẻ tag</th>
                            <th>Thời gian</th>
                            <th>Hành động</th>
                        </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Danh mục</th>
                            <th>Thẻ tag</th>
                            <th>Thời gian</th>
                            <th>Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($works->isNotEmpty())
                            @foreach ($works as $work)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a
                                            href="{{ route('admin.works.edit', $work) }}">{{ Str::limit($work->title, 70, '...') }}</a>
                                    </td>
                                    <td>{{ $work->catalogue->name }}</td>
                                    <td>
                                        @if ($work->catalogues->isNotEmpty())
                                            @foreach ($work->catalogues as $catalogue)
                                                <span class="badge bg-primary">{{ $catalogue->name }}</span>
                                            @endforeach
                                        @else
                                            <span class="badge bg-primary">Không có thẻ tag</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($work->created_at)->diffForHumans() }}</td>
                                    <td>
                                        <form action="{{ route('admin.works.destroy', $work) }}" method="post"
                                            id="delete-form-{{ $work->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="confirmDelete(event, '{{ $work->id }}')">
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
    <script src="{{ asset('backend/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>

    <script>
        $("#multi-filter-select").DataTable({
            pageLength: 10,
            columnDefs: [{
                    orderable: true,
                    targets: [0,  2, 3, 4]
                }, // Chỉ bật sắp xếp cho cột "STT", "Tên danh mục", "Danh mục cha"
                {
                    orderable: false,
                    targets: '_all'
                } // Tắt sắp xếp cho các cột còn lại
            ],
            initComplete: function() {
                this.api()
                    .columns([0, 2,4]) // Chỉ lọc trên cột "Tên danh mục" và "Danh mục cha"
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

        function confirmDelete(event, catalogueId) {
            event.preventDefault(); // Ngăn việc submit form ngay lập tức

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + catalogueId).submit();
                }
            });
        }
    </script>
@endpush

@push('styles')
    <script src="{{ asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
@endpush
