@extends('admin.layouts.master-without-nav')
@section('title')
    @lang('translation.password-reset')
@endsection
@section('content')
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                    <a href="{{route('root')}}" class="d-inline-block auth-logo">
                                    <img src="{{ URL::asset('assets/images/logo-light.png')}}" alt="" height="20">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Reset Password</h5>
                                    <div class="alert alert-success text-center my-4 font-size-12" role="alert">
                                        Enter your Email and instructions will be sent to you!
                                    </div>
                                </div>
                                <div class="p-2 mt-4">
                                    @if (session('status'))
                                        <div class="alert alert-success text-center mb-4" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal" method="POST"
                                          action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="mb-3">
                                            {{ Form::bsEmail('Email','email',$email ?? old('email'),'',['class'=>'','placeholder'=>"Enter email"],[],false) }}
                                        </div>

                                        <div class="text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                                    type="submit">Reset
                                            </button>
                                        </div>
                                    </form>
                                    <div class="mt-5 text-center">
                                        <p>Remember It ? <a href="{{ url('login') }}"
                                                            class="font-weight-medium text-primary">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->


                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> {{env('APP_NAME')}}.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/eva-icon.init.js') }}"></script>
@endsection
