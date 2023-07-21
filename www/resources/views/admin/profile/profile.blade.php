@extends('admin.layouts.master')

@section('title')
    Profile
@endsection
@section('css')
<style>
    .form-control.is-invalid{
        background-image: none !important;
    }
</style>
@endsection
@section('content')
    @component('components.breadcrumb', ['lists' => ['Dashboard' => route('root')]])
        @slot('title')
            Profile
        @endslot
    @endcomponent


    <!-- start row -->
    <div class="row">
        <div class="col-lg-3 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="profile-widgets py-3">
                        <div class="text-center">
                            <div class="">
                                <img src="{{ auth()->user()->profile_image }}" alt=""
                                    class="avatar-lg mx-auto img-thumbnail rounded-circle">
                            </div>

                            <div class="mt-3 ">
                                <a href="#"
                                    class="text-dark font-weight-medium font-size-16">{{ auth()->user()->name }}</a>
                                <p class="text-body mt-1 mb-1">{{ auth()->user()->email }}</p>
                                <p class="text-body mt-1 mb-1">{{ auth()->user()->getRoleNames()->first() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="card">
                <div class="card-header bg-transparent border-bottom">
                    <ul class="nav nav-tabs nav-tabs-custom card-header-tabs ms-auto" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#profileinfo" role="tab">
                                Profile info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#changepassword" role="tab">
                                Change Password
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="profileinfo" role="tabpanel">
                            {!! Form::open([
                                'url' => route('profiles.update', auth()->user()->id),
                                'method' => 'PATCH',
                                'id' => 'user-form',
                                'enctype' => 'multipart/form-data',
                            ]) !!}
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 mb-2">
                                    <div class="form-group">
                                        {{ Form::label('Profile') }}
                                        {!! Form::file('profile', ['class' => 'form-control']) !!}
                                        {{-- @error('profile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 mb-2">
                                    <div class="form-group">
                                        {{ Form::label('Name') }}<span class="required">*</span>
                                        {!! Form::text('name', isset(auth()->user()->name) ? auth()->user()->name : old('name'), [
                                            'class' => 'form-control',
                                            'placeholder' => 'Name',
                                        ]) !!}
                                        {{-- @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 mb-2">
                                    <div class="form-group">
                                        {{ Form::label('Email') }}<span class="required">*</span>
                                        {!! Form::text('email', isset(auth()->user()->email) ? auth()->user()->email : old('email'), [
                                            'class' => 'form-control',
                                            'placeholder' => 'Email',
                                        ]) !!}
                                        {{-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 mb-2">
                                    <div class="form-group">
                                        {{ Form::label('Mobile') }}<span class="required">*</span>
                                        {!! Form::text('mobile', isset(auth()->user()->mobile) ? auth()->user()->mobile : old('mobile'), [
                                            'class' => 'form-control',
                                            'placeholder' => 'Mobile',
                                        ]) !!}
                                        {{-- @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    {{ Form::submit('Update', ['class' => 'btn btn-primary waves-effect waves-light']) }}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="changepassword" role="tabpanel">

                            {!! Form::open([
                                'url' => route('change.password'),
                                'method' => 'POST',
                                'id' => 'chagepassword-form',
                                'enctype' => 'multipart/form-data',
                            ]) !!}
                            <div class="row">
                                <div class="col-xl-4 col-lg-12 ">
                                    <div class="mb-3">
                                        <label for="current_password">Current password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control password-input" name="current_password"
                                                 placeholder="Enter current password">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button"><i class="ri-eye-fill align-middle"></i></button>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-12">
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" id="password-input" class="form-control password-input" name="password"
                                                 placeholder="Enter password">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button"><i class="ri-eye-fill align-middle"></i></button>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded" style="display: none;">
                                        <h5 class="fs-13">Password must contain:</h5>
                                        <p id="pass-length" class="fs-12 mb-2 invalid">Minimum <b>8 characters</b></p>
                                        <p id="pass-lower" class="fs-12 mb-2 valid">At least one <b>lowercase</b> letter (a-z)</p>
                                        <p id="pass-upper" class="invalid fs-12 mb-2">At least one <b>uppercase</b> letter (A-Z)</p>
                                        <p id="pass-number" class="invalid fs-12 mb-2">At least one <b>number</b> (0-9)</p>
                                        <p id="pass-special" class="invalid fs-12 mb-0">At least one <b>special character</b></p>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-12">
                                    <div class="mb-3">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control password-input"
                                                name="password_confirmation" 
                                                placeholder="Enter confirm password">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button"><i class="ri-eye-fill align-middle"></i></button>
                                                @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror

                                        </div>
                                    </div>
                                </div>

                                


                                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                    {{ Form::submit('Change Password', ['class' => 'btn btn-primary waves-effect waves-light']) }}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </div>


    </div>

    <!-- end row -->
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ChangePasswordRequest', '#chagepassword-form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\UserProfileRequest', '#user-form') !!}
    <script src="{{ URL::asset('assets/js/pages/passowrd-create.init.js') }}"></script>
@endsection
