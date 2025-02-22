@extends('admin.layouts.master')

@section('title') News letter @endsection
@section('css')


@endsection
@section('content')

    @component('components.breadcrumb',['lists'=>['Dashboard'=>route('root')]])
        @slot('title') News letter  @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <a href="{{ route('newsletter.export') }}" class="btn btn-primary">Export</a>
                    </div>
                    <div class="float-start">
                        {{ html()->form('get', route('newsletter.index'))
                            ->id('newsletter-form')
                            ->class('row row-cols-lg-auto g-3 align-items-center')
                            ->attribute('enctype', 'multipart/form-data')
                            ->open() 
                        }}
                        <div class="form-group">
                        {{html()->text('query_str', request()->query('query_str'))
                            ->class('form-control data-filter')
                            ->attribute('placeholder', 'Search by email')
                            }}
                        </div>
                        <div class="form-group">
                            <button type="submit" name="type" value="submit" class="btn btn-primary waves-effect waves-light button-size">
                                Submit
                            </button>
                        </div>
                        <div class="form-group">
                            <a href="{{route('newsletter.index')}}" class="btn btn-secondary waves-effect waves-light button-size">
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
    <script type="text/javascript" src="{{ asset('assets/js/news.js') }}"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(e) {
            if (!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });
    </script>
@endsection
