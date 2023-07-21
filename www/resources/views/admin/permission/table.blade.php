<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
    <tr>
        <th>Title</th>
        <th>Name</th>
        <th>Permission label</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($tableData as $key => $row)
        <tr>
            <td>{{ $row->title }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->permission_label }}</td>
            <td>
                @if($row->is_active == 'Y')
                    <span class="badge bg-success">Active</span>
                @else
                    <span class="badge bg-danger">Inactive</span>
                @endif
            </td>
            <td>

                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" type="button"
                            class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                        Action
                    </button>
                    <div class="dropdown-menu">
                        @can('permission.edit')
                            <a class="dropdown-item" onclick="showEditModel(event)"
                               href="{{route('permission.edit',$row->id)}}">Edit</a>
                        @endcan

                        @if($row->is_active == 'Y')
                            <a class="dropdown-item" href="{{ route('permission.status',$row->id) }}">Inactive</a>
                        @else
                            <a class="dropdown-item" href="{{ route('permission.status',$row->id) }}">Active</a>
                        @endif
                            @can('permission.destroy')
                                <a class="dropdown-item"
                                   onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                   Delete</a>
                                <form id="delete-{{ $row->id }}"
                                      action="{{ route('permission.destroy', $row->id) }}"
                                      method="POST">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            @endcan
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{$tableData->links()}}
