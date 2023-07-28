<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->slug }}</td>
                <td>
                    @if ($row->is_active == 'Y')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                </td>
                <td>{{ $row->created_at }}</td>
                <td>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="showEditModel(event)"
                                href="{{ route('backend.product.flavors.category.edit', $row->id) }}">Edit</a>
                            <a class="dropdown-item" onclick="showEditModel(event)"
                                href="{{ route('backend.product.flavors.category.delete', $row->id) }}">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $tableData->links() }}
