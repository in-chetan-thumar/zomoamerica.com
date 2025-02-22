@extends('admin.layouts.master')

@section('title')
    User list
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb', ['lists' => ['Dashboard' => route('root')]])
        @slot('title')
            Wholesale list
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <a href="{{ route('backend.product.wholesale.export', request()->all()) }}"
                            class="btn btn-secondary waves-effect waves-light" style="margin-top:25px">
                            Export
                        </a>
                    </div>
                    <div class="float-start">
                    {{ html()->form('get', route('backend.product.wholesale'))
                        ->id('form-search')
                        ->class('row row-cols-lg-auto align-items-center')
                        ->open()
                     }}

                        {{-- {!! Form::open([
                            'url' => route('backend.product.wholesale'),
                            'id' => 'form-search',
                            'class' => 'row row-cols-lg-auto  align-items-center',
                            'method' => 'get',
                        ]) !!} --}}
                        <div class="form-group">
                            {{html()->label('Start Date', 'Telephone')
                                ->attribute('style', 'justify-content: right') }}
                         <span style="color: red;">*</span>
                            {{ html()->date('start_date', date('Y-m-d'))
                                ->class('form-control')
                            }}
                        </div>
                        <div class="form-group">
                            {{ html()->label('End Date', 'Telephone')
                                ->attribute('style', 'justify-content: right')
                            }}
                            <span style="color: red;">*</span>
                            {{ html()->date('end_date', date('Y-m-d'))
                                ->class('form-control')
                            }}
                        
                        </div>
                        <button type="submit" name="type" value="submit"
                            class="btn btn-primary waves-effect waves-light" style="margin-top:25px">
                            Submit
                        </button>
                        &nbsp;
                        <a href="{{ route('backend.product.wholesale') }}"
                            class="btn btn-secondary waves-effect waves-light" style="margin-top:25px">
                            Reset
                        </a>
                        {{ html()->form()->close() }}
                    </div>
                </div>
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
