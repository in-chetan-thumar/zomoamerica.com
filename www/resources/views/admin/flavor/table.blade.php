<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Flavor Title</th>
            <th>Category</th>
            <th>Sweet</th>
            <th>Citric</th>
            <th>Tobaco Intensity</th>
            <th>Menthol</th>
            <th>Cloud Volume</th>
            <th>Available In</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $row)
        {{-- {{$row}} --}}
            <tr>
                <td>{{ $row->flavor_title }}</td>
                <td>{{ $row->category->name }}</td>
                <td>{{ $row->sweet }}</td>
                <td>{{ $row->citric }}</td>
                <td>{{ $row->tobaco_intensity }}</td>
                <td>{{ $row->menthol }}</td>
                <td>{{ $row->cloud_volume }}</td>
                <td>{{ $row->flavors_available }}</td>

                <td>
                    @if ($row->is_active == 'Y')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                </td>
                <td>

                    <div class="btn-group" role="group">
                        <i class="mdi mdi-dots-vertical" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" ></i>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="showEditModel(event)"
                            href="{{ route('backend.product.flavors.edit', $row->id) }}">Edit</a>
                            
                                @if($row->is_active == 'Y')
                                <a class="dropdown-item" href="{{ route('flovermanagements.status',$row->id) }}">Inactive</a>
                                @else
                                <a class="dropdown-item" href="{{ route('flovermanagements.status',$row->id) }}">Active</a>
                                 @endif

                            <a class="dropdown-item"
                                href="{{ route('backend.product.flavors.delete', $row->id) }}">Delete</a>
                            
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $tableData->links() }}
