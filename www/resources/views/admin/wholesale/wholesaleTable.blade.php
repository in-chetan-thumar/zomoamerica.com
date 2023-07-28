<table id="user-data" class="table table-striped table-bordered dt-responsive mt-2"
       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
    <tr>
        <th>Buisness Name</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Adress</th>
        <th>City</th>
        <th>State</th>
        <th>Email</th>
        <th>Telephone</th> 
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($tableData as $key => $row)
        <tr>
            <td>{{$row->buisness_name}}</td>
            <td>{{$row->first_name}}</td>
            <td>{{$row->last_name}}</td>
            <td>{{$row->adress}}</td>
            <td>{{$row->city}}</td>
            <td>{{$row->state}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->telephone}}</td>
            <td>
                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" type="button"
                            class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                        Action
                    </button>
                    <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="showEditModel(event)"
                               href="{{route('backend.product.wholesale.edit',$row->id)}}">View</a>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$tableData->links()}}

