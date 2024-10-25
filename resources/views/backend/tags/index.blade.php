<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4 class="card-title">Danh sách thẻ</h4>
        <div class="card-tools">
            @if (! request()->routeIs('admin.tags.create'))
                <a href="{{ route('admin.tags.create') }}" class="btn btn-primary"><i class="fas fa-plus me-2"></i>Thêm mới
                    (+)</a>
            @endif
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="multi-filter-select" class="display table table-striped table-hover">
                <thead>
                    <tr>
                    <tr>
                        <th>STT</th>
                        <th>Tên thẻ</th>
                        <th>Hành động</th>
                    </tr>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên thẻ</th>
                        <th>Hành động</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if ($tags->isNotEmpty())
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>
                                    <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST"
                                        class="d-inline" id="delete-form-{{ $tag->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="confirmDelete(event, {{ $tag->id }})">
                                            <i class="fa fa-trash"></i>
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
