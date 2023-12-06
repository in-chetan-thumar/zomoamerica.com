<div class="table-rep-plugin table-wrapper table-responsive">
    <table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>No.</th>
            <th>Email</th>
            <th>Created at</th>
        </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->email }}</td>
                <td>{{$row->created_at_formatted }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$tableData->links()}}
</div>
