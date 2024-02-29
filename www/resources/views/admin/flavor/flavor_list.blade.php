<style>
    .remove {
        cursor: pointer;
    }
</style>
@extends('admin.layouts.master')
@section('title')
    Flavor list
@endsection
@section('content')
    @component('components.breadcrumb', ['lists' => ['Dashboard' => route('root')]])
        @slot('title')
            Flavor list
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <a href="{{ route('backend.product.flavors.create') }}" onclick="showSaveModel(event)"
                            class="btn btn-primary"><i class="mdi mdi-plus"></i>&nbsp;Add Flavor</a>
                    </div>
                    <div class="float-start">
                        {!! Form::open([
                            'url' => route('backend.product.flavors'),
                            'id' => 'form-search',
                            'class' => 'row row-cols-lg-auto g-3 align-items-center',
                            'method' => 'get',
                        ]) !!}

                        <div class="form-group">
                            {!! Form::text('query_str', request()->query('query_str'), [
                                'class' => 'form-control',
                                'placeholder' => 'Search by flavor title ',
                            ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::select('category_id', $category, request()->query('category_id'), [
                                'class' => 'form-control zone',
                                'placeholder' => 'Select category',
                            ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::select('is_active', $status, request()->query('is_active'), [
                                'class' => 'form-control zone',
                                'placeholder' => 'Select status',
                            ]) !!}
                        </div>
                        <button type="submit" name="type" value="submit"
                            class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        &nbsp;
                        <a href="{{ route('backend.product.flavors') }}" class="btn btn-secondary waves-effect waves-light">
                            Reset
                        </a>
                        &nbsp;
                        {{-- <div class="form-group">
                            <a href="{{ route('backend.product.export') }}" class="btn btn-secondary waves-effect waves-light">
                                                                    Export
                                                                </a>
                        </div> --}}


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
    <script type="text/javascript">
        function loadFile(id = '') {

            let fid = id;
            $.ajax({
                url: "{{ route('backend.product.flavors.removeImage') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    fid: fid
                },
                success: function(data) {
                    toastr.success(data.message);
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    toastr.error('Error occurred!');
                }
            })
        }
    </script>
@endsection
