@extends('admin.layouts.master')

@section('title') User list @endsection
@section('css')


@endsection
@section('content')

    @component('components.breadcrumb',['lists'=>['Dashboard'=>route('root')]])
        @slot('title') User list  @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <a href="{{route('backend.product.create')}}" onclick="showSaveModel(event)" class="btn btn-primary"><i
                                class="mdi mdi-plus"></i>&nbsp;Add User</a>
                    </div>
                    <div class="float-start">
                        {{ html()->form('GET', route('usermanagements.index'))
                                ->id('form-search')
                                ->class('row row-cols-lg-auto g-3 align-items-center')
                                ->open() 
                        }}
                        <div class="form-group">
                            {!! html()->text('query_str', request()->query('query_str'))
                                ->class('form-control')
                                ->attribute('placeholder', 'Search by name / email')
                                ->attribute('style', 'width: 330px;') 
                            !!}
                        </div>
                     
                        <button type="submit" name="type" value="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        &nbsp;
                        <!-- <a href="{{route('usermanagements.index')}}" class="btn btn-secondary waves-effect waves-light">
                            Reset
                        </a> -->
                        {{ html()->form()->close() }}
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
    <script type="text/javascript" src="{{ asset('assets/js/user.js')}}"></script>
@endsection
