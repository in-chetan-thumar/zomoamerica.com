@extends('admin.layouts.master')
@section('title') @lang('translation.starter')  @endsection
@section('content')
    @component('components.breadcrumb',["lists"=>['' =>'']])
        @slot('title')  @lang('translation.dashboards')  @endslot
    @endcomponent
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
