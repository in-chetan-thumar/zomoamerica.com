<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created at</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($tableData as $key => $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->getRoleNames()->first()  }}</td>
            <td>
                @if($row->is_account_locked == 'Y')
                    <span class="badge bg-success">Active</span>
                @else
                    <span class="badge bg-danger">Inactive</span>
                @endif
            </td>
            <td>{{ $row->created_at_formatted }}</td>
            <td>

                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" type="button"
                            class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                        Action
                    </button>
                    <div class="dropdown-menu">
                        @can('usermanagements.edit')
                            <a class="dropdown-item" onclick="showEditModel(event)"
                               href="{{route('usermanagements.edit',$row->id)}}">Edit</a>
                        @endcan

                        @if($row->is_account_locked == 'Y')
                            <a class="dropdown-item" href="{{ route('usermanagements.status',$row->id) }}">Inactive</a>
                        @else
                            <a class="dropdown-item" href="{{ route('usermanagements.status',$row->id) }}">Active</a>
                        @endif
                            @can('usermanagements.destroy')
                                <a class="dropdown-item"
                                   onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                   Delete</a>
                                <form id="delete-{{ $row->id }}"
                                      action="{{ route('usermanagements.destroy', $row->id) }}"
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
