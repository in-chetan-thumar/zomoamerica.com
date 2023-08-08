<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Keyword</th>
            <th>Route</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->meta_title }}</td>
                <td>{{ $row->meta_description }}</td>
                <td>{{ $row->meta_keyword }}</td>
                <td>{{ $row->meta_route }}</td>

                <td>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="showEditModel(event)"
                                href="{{ route('backend.metaDetail.edit', $row->id) }}">Edit</a>
                            <a class="dropdown-item"
                                onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                Delete</a>
                            <form id="delete-{{ $row->id }}"
                                action="{{ route('backend.metaDetail.delete', $row->id) }}">
                                @csrf
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $tableData->links() }}
