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
                            <th>Thời gian</th>
                        </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Danh mục</th>
                            <th>Thời gian</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($works->isNotEmpty())
                            @foreach ($works as $work)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ route('admin.works.edit', $work) }}">{{ Str::limit($work->title, 70, '...') }}</a></td>
                                    <td><a href="{{ route('admin.works.edit', $work) }}">{{ Str::limit($work->title, 70, '...') }}</a></td>
                                    <td>
                                        @if ($work->catalogues->isNotEmpty())
                                            @foreach ($work->catalogues as $catalogue)
                                                <span class="badge bg-primary">{{ $catalogue->name }}</span>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($work->created_at)->diffForHumans() }}</td>
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
                    targets: [0,1,2,3]
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
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
