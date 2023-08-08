<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Product Title</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->product_title }}</td>
                <td>{{ $row->product_name }}</td>
                <td>{{ $row->product_description }}</td>
                <td>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            @can('usermanagements.edit')
                                <a class="dropdown-item" onclick="showEditModel(event)"
                                    href="{{ route('usermanagements.edit', $row->id) }}">Edit</a>
                            @endcan


                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
