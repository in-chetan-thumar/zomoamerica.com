@extends('admin.layouts.master-without-nav')
@section('title')
    Two Step Verification
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
                            {{--                        <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>--}}
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="mb-4">
                                    <div class="avatar-lg mx-auto">
                                        <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 mt-4">
                                    <div class="text-muted text-center mb-4 mx-lg-3">
                                        <h4>
                                            @if(config('constants.EMAIL_OTP_LOGIN'))
                                                Verify Your Email
                                            @elseif(config('constants.MOBILE_OTP_LOGIN'))
                                                Verify Your Mobile
                                            @endif
                                         </h4>
                                        <p>Please enter the 6 digit code sent to <span
                                                class="fw-semibold">
                                                @if(config('constants.EMAIL_OTP_LOGIN'))
                                                    {{app('common-helper')->maskEmailAddress(auth()->user()->email)}}
                                                @elseif(config('constants.MOBILE_OTP_LOGIN'))
                                                    {{app('common-helper')->maskPhoneNumber(auth()->user()->mobile)}}
                                                @endif
                                                </span></p>
                                    </div>

                                    <form method="POST" action="{{ route('verify.store') }}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    {{ Form::bsText('','two_factor_code',old('username'),'',['class'=>' only-number-allow','maxlength'=>"6",'placeholder' => "Enter 6 digits otp"],[],true) }}
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success w-100">Confirm</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            @if (auth()->user()->is_account_locked == 'N')
                                <p class="mb-0">Didn't receive a code ? <a href="{{ route('verify.resend') }}"
                                                                           class="fw-semibold text-primary text-decoration-underline">Resend</a>
                                </p>
                            @endif
                        </div>

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
    <!-- particles js -->
    <script src="{{asset('assets/libs/particles.js/particles.js.min.js')}}"></script>
    <!-- two-step-verification js -->
    <script src="{{asset('assets/js/pages/two-step-verification.init.js')}}"></script>
@endsection
