<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
    <tr>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($tableData as $key => $row)
        <tr>
            <td>{{ $row->email }}</td>
            <td>{{ $row->subject }}</td>
            <td>{{ $row->message  }}</td>
            <td>

                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" type="button"
                            class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                        Action
                    </button>
                    <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="showEditModel(event)"
                               href="{{route('backend.product.edit',$row->id)}}">View</a>

                    
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

