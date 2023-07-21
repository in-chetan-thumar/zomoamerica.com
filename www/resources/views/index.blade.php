@extends('admin.layouts.master')
@section('title') @lang('translation.dashboards')  @endsection
@section('content')
    @component('components.breadcrumb',["lists"=>['Dashboard' =>'']])
        @slot('title')  @lang('translation.dashboards')  @endslot
    @endcomponent

    <div class="row">
       
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
