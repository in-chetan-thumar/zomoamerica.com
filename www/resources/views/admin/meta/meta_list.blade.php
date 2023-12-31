@extends('admin.layouts.master')

@section('title')
    Meta list
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb', ['lists' => ['Dashboard' => route('root')]])
        @slot('title')
            Meta list
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <a href="{{ route('backend.metaDetail.create') }}" onclick="showSaveModel(event)"
                            class="btn btn-primary"><i class="mdi mdi-plus"></i>&nbsp;Add User</a>
                    </div>
                    <div class="float-start">
                        {!! Form::open([
                            'url' => route('usermanagements.index'),
                            'id' => 'form-search',
                            'class' => 'row row-cols-lg-auto g-3 align-items-center',
                            'method' => 'get',
                        ]) !!}
                        <div class="form-group">
                            {{ Form::label('Start Date') }}
                            {{ Form::date('start_date', date('Y-m-d'), ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('End Date') }}
                            {{ Form::date('end_date', date('Y-m-d'), ['class' => 'form-control']) }}
                        </div>
                        <button type="submit" name="type" value="submit"
                            class="btn btn-primary waves-effect waves-light" style="margin-top:40px">
                            Submit
                        </button>

                        {!! Form::close() !!}
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
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/user.js') }}"></script>
@endsection
