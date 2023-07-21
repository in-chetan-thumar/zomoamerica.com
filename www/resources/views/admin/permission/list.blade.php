@extends('admin.layouts.master')

@section('title') Permission list @endsection
@section('css')


@endsection
@section('content')

    @component('components.breadcrumb',['lists'=>['Dashboard'=>route('root')]])
        @slot('title') Permission list  @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        @can('permission.create')
                        <a href="{{route('permission.create')}}" onclick="showSaveModel(event)" class="btn btn-primary"><i
                                class="mdi mdi-plus"></i>&nbsp;Add permission</a>
                        @endcan
                    </div>
                    <div class="float-start">
                    </div>
                    <div class="clearfix"></div>
                    <div class="divtable">
                        {!! $table !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="divOffcanvas">

        </div>
    </div>
@endsection
@section('script-bottom')
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/permission.js')}}"></script>
@endsection
