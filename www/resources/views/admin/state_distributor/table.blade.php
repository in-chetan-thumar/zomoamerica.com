<div class="table-rep-plugin table-wrapper table-responsive">
    <table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>No.</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>State</th>
            <th>City</th>
            <th>Created at</th>
        </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->first_name }}</td>
                <td>{{ $row->last_name }}</td>
                <td>{{ $row->telephone }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->state }}</td>
                <td>{{ $row->city }}</td>
                <td>{{$row->created_at_formatted }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$tableData->links()}}
</div>
