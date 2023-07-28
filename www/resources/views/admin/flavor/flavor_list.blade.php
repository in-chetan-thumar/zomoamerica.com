@extends('admin.layouts.master')

@section('title')
    Flavor list
@endsection
@section('css')
.remove{
    cursor:pointer;
}
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
                            class="btn btn-primary"><i class="mdi mdi-plus"></i>&nbsp;Add User</a>
                    </div>
                    <div class="float-start">
                        {!! Form::open([
                            'url' => route('backend.product.flavors'),
                            'id' => 'form-search',
                            'class' => 'row row-cols-lg-auto g-3 align-items-center',
                            'method' => 'get',
                        ]) !!}

                        <div class="row p-3">
                            {{ Form::label('Start Date') }}
                            {{ Form::date('start_date', date('Y-m-d')) }}
                        </div>
                        <div class="row p-3">
                            {{ Form::label('End Date') }}
                            {{ Form::date('end_date', date('Y-m-d')) }}
                        </div>
                        <button type="submit" name="type" value="submit"
                            class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        &nbsp;
                        <!--<a href="{{ route('backend.product.export') }}" class="btn btn-secondary waves-effect waves-light">
                                    Export
                                </a> -->

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
//  $(document).ready(function () {
//     if (window.File && window.FileList && window.FileReader) {
        function load(e){
        // $("#files").on("change", function (e) {
            var files = e.target.files,
            filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i];
                var fileReader = new FileReader();
                fileReader.onload = function (e) {
                    var file = e.target;
                    $(
                        '<span class="pip">' +
                            '<img class="imageThumb" height="100" src="' +
                            e.target.result +
                            '" title="' +
                            file.name +
                            '"/>'+'<span class="remove">X</span>' +
                             +
                            "</span>"
                    ).insertAfter("#files");

                    $(".remove").click(function (e) {
                        console.log(e);
                          $(this).parents('span').remove();
                        // $(this).parent(".pip").remove();
                        // $("#files").val("");
                    });
                };
                fileReader.readAsDataURL(f);
            }
        };
    // } else {
    //     alert("Your browser doesn't support to File API");
    // }
// });

    </script>
@endsection
