{{-- <table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th style="width:20%">Title</th>
            <th style="width:50%">Description</th>
            <th style="width:10%">Action</th>
        </tr>
    </thead>
    <tbody>
        @if (count($tableData) == 0)
            <tr>
                <td colspan="3" class="text-center">
                    <h3>No Data Found</h3>
                </td>
            </tr>
        @else
            @foreach ($tableData as $key => $row)
                <tr>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->description }}</td>
                    <td></td>

                    <td>

                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Action <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" onclick="showNewsEditModal(event)"
                                    href="{{ route('news-list.edit', $row->news_id) }}">Edit</a>

                                <a class="dropdown-item"
                                    onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->news_id }}').submit()">
                                    Delete</a>
                                <form id="delete-{{ $row->news_id }}"
                                    action="{{ route('news-list.destroy', $row->news_id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

{{ $tableData->links() }} --}}

<div class="table-rep-plugin table-wrapper table-responsive">
    <table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>Title</th>
            <th>Discription</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->title }}</td>
                <td>{{$row->description }}</td>
                <td>
                       @if($row->is_active == 'Y')
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    
                </td>
                {{-- <td>{{ $row->created_at_formatted }}</td> --}}
                <td>
    
                    <div class="btn-group" role="group">
    
                        <i class="mdi mdi-dots-vertical" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" ></i>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="showNewsEditModal(event)"
                                href="{{ route('news-list.edit', $row->news_id) }}">Edit</a>
                            
                                @if($row->is_active == 'Y')
                                <a class="dropdown-item" href="{{ route('newsmanagements.status',$row->news_id) }}">Inactive</a>
                                @else
                                <a class="dropdown-item" href="{{ route('newsmanagements.status',$row->news_id) }}">Active</a>
                                 @endif


                            <a class="dropdown-item"
                                onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->news_id }}').submit()">
                                Delete</a>
                            <form id="delete-{{ $row->news_id }}"
                                action="{{ route('news-list.destroy', $row->news_id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    {{$tableData->links()}}
    </div>
    
