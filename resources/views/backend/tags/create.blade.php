@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $title }}</h5>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.tags.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tên</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Xác nhận</button>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-lg-8">
          @include('backend.tags.index')
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        function confirmDelete(event, tagId) {
            event.preventDefault();

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
                    document.getElementById('delete-form-' + tagId).submit();
                }
            });
        }

        $("#multi-filter-select").DataTable({
            pageLength: 10,
            columnDefs: [{
                    orderable: true,
                    targets: [0, 1]
                }, // Chỉ bật sắp xếp cho cột "STT", "Tên danh mục", "Danh mục cha"
                {
                    orderable: false,
                    targets: '_all'
                } // Tắt sắp xếp cho các cột còn lại
            ],
            initComplete: function() {
                this.api()
                    .columns([0, 1]) // Chỉ lọc trên cột "Tên danh mục" và "Danh mục cha"
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
    <script src="{{ asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
@endpush

