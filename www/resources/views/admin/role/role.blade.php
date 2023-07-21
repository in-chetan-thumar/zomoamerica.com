@extends('admin.layouts.master')

@section('title') Role @endsection
@section('css')

@endsection
@section('content')

    @component('components.breadcrumb',['lists'=>['Dashboard'=>route('root')]])
        @slot('title') Role  @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        @can('roles.create')
                        <a href="{{route('roles.create')}}" class="btn btn-primary"><i
                                class="mdi mdi-plus"></i> New Role</a>
                        @endcan
                    </div>
                    <div class="clearfix"></div>
                    <table id="role-data " class="table table-striped table-bordered dt-responsive mt-3"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $key => $row)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->created_at_formatted }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupVerticalDrop1" type="button"
                                                class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true">
                                            Action</i>
                                        </button>
                                        <div class="dropdown-menu">
                                            @can('roles.edit')
                                                <a class="dropdown-item"
                                                   href="{{ route('roles.edit',$row->id) }} ">Edit</a>
                                            @endcan

                                            @can('roles.destroy')
                                                <a class="dropdown-item"
                                                   onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                                    Delete</a>
                                                <form id="delete-{{ $row->id }}"
                                                      action="{{ route('roles.destroy', $row->id) }}"
                                                      method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            @endcan
                                        </div>
                                    </div>
                                    {{--<a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$roles->appends($_GET)->links()}}
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
@endsection
@section('script')


@endsection
