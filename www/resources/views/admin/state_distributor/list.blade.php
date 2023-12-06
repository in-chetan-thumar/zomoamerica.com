@extends('admin.layouts.master')

@section('title') Authorize State Distributor Inquiry @endsection
@section('css')


@endsection
@section('content')

    @component('components.breadcrumb',['lists'=>['Dashboard'=>route('root')]])
        @slot('title') Authorize State Distributor Inquiry  @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <a href="{{ route('state.distributor.export') }}"  class="btn btn-primary">Export</a>
                    </div>
                    <div class="float-start">
                        {!! Form::open(['url' =>route('state-distributor.index'),'id' =>'form-search','class'=>'row row-cols-lg-auto g-3 align-items-center','id'=>'newsletter-form','method' => 'get']) !!}
                        <div class="form-group">
                            {!! Form::text('query_str',request()->query('query_str'),['class'=>'form-control data-filter','placeholder'=>'Search ']) !!}
                        </div>
                        <div class="form-group">
                            <button type="submit" name="type" value="submit" class="btn btn-primary waves-effect waves-light button-size">
                                Submit
                            </button>
                        </div>
                        <div class="form-group">
                            <a href="{{route('state-distributor.index')}}" class="btn btn-secondary waves-effect waves-light button-size">
                                Reset
                            </a>
                        </div>

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
    <script type="text/javascript" src="{{ asset('assets/js/news.js') }}"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(e) {
            if (!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });
    </script>
@endsection
