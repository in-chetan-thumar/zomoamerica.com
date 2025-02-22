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
                            class="btn btn-primary"><i class="mdi mdi-plus"></i>&nbsp;Add meta details</a>
                    </div>
                    <div class="float-start">
                        {{ html()->form('GET', route('backend.metaDetail'))
                            ->id('form-search')
                            ->class('row row-cols-lg-auto g-3 align-items-center')
                            ->open() 
                        }}
                        <div class="form-group">
                            {{ html()->label('Start Date') }}
                            {{ html()->date('start_date', date('Y-m-d'))
                                ->class('form-control') }}
                        </div>
                        <div class="form-group">
                            {{html()->label('End Date') }}
                            {{ html()->date('end_date', date('Y-m-d'))
                             ->class('form-control') }}
                        </div>
                        <div class="form-group d-flex align-items-end" style="gap: 10px; margin-top: 32px;">
                            <button type="submit" name="type" value="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <a href="{{ route('backend.metaDetail') }}" class="btn btn-secondary waves-effect waves-light">
                                Reset
                            </a>
                        </div>
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
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/user.js') }}"></script>
@endsection
