@extends('frontend.layouts.master')
@section('title')
    {{ $content->meta_title }}
@endsection


@section('main')
    <div class="btcm">
        <div class="container">
            <div class="breadcrumbs d-flex align-items-center">
                <a href="/">Home</a>
                <span> » </span>
                <span class="breadcrumb_last" aria-current="page">Wholesalers</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wholesale-form-section">
            <div class="wholesale-form-left">
                <p>Please fill out the wholesale account form below to register your business.</p>
                {{ html()->form('POST', route('frontend.storeWholesale'))
                    ->id('inquery-form')
                    ->class('inquery-form')
                    ->open() 
                }}    
                <div class="input-field">
                    <label for="name">BUSINESS NAME <span
                        class="text-danger">*</span>
                    </label>
                    {{ html()->input('text','bname', old('fname'))
                        ->class('name')
                        ->attribute('maxlength', '100')
                    }}      
                    <span class="text-danger" style="font-size:15px">
                        @error('bname')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                </div>
                <div class="cole-two">
                    <div class="input-field">
                        <label for="fist">FIRST NAME <span
                            class="text-danger">*</span></label>
                            {{ html()->input('text','fname', old('fname'))
                                ->class('name')
                                ->attribute('maxlength', '20')
                            }}
                            <span class="text-danger" style="font-size:15px">
                                @error('fname')
                                    {{ $message }}
                                @enderror
                            </span>
                         <br>
                    </div>
                    <div class="input-field">
                            <label class="form-label">Username</label>           
                            {{ html()->input('text','lname', old('lname'))
                                ->class('name')
                                ->attribute('maxlength', '20')
                            }}   
                            <span class="text-danger" style="font-size:15px">
                                @error('lname')
                                    {{ $message }}
                                @enderror
                            </span>
                        <br>
                    </div>
                </div>
                <div class="input-field">
                    <label for="address">ADDRESS <span
                        class="text-danger">*</span></label>
                    {{ html()->input('text','address', old('address'))
                        ->class('name')
                        ->attribute('maxlength', '100')
                    }}  
                    <span class="text-danger" style="font-size:15px">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                </div>
                <div class="input-field">
                    <label for="city">CITY <span
                        class="text-danger">*</span></label>
                    {{ html()->input('text','city', old('city'))
                        ->class('name')
                        ->attribute('maxlength', '30')
                    }}              
                    <span class="text-danger" style="font-size:15px">
                        @error('city')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                </div>
                <div class="input-field">
                    <label for="state">State <span
                        class="text-danger">*</span></label>
                        {{ html()->select('state', $stateArray)
                            ->placeholder('Select')
                            ->class('state') 
                        }}
                    <span class="text-danger" style="font-size:15px">
                        @error('state')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                </div>
                <div class="input-field">
                    <label for="zip">zip code <span
                        class="text-danger">*</span></label>
                        {{ html()->input('text','zipcode', old('zipcode'))
                        ->class('name')
                        ->attribute('maxlength', '6')
                        }}  
                   
                    <span class="text-danger" style="font-size:15px">
                        @error('zipcode')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                </div>
                <div class="input-field">
                    <label for="website">website</label>
                    {{ html()->input('text','website', old('website'))
                        ->class('name')
                        ->attribute('maxlength', '70')
                    }}  
                    
                    <span class="text-danger" style="font-size:15px">
                        @error('website')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                </div>
                <div class="input-field">
                    <label for="email">EMAIL ADDRESS <span
                        class="text-danger">*</span></label>
                    {{ html()->input('text','email', old('email'))
                        ->class('name')
                        ->attribute('maxlength', '100')
                    }}
                    <span class="text-danger" style="font-size:15px">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                </div>
                <div class="input-field">
                    <label for="number">TELEPHONE NUMBER<span
                        class="text-danger">*</span></label>
                    {{ html()->input('number','number', old('number'))
                        ->class('name')
                        ->attribute('maxlength', '10')
                    }}
                   <span class="text-danger" style="font-size:15px">
                    @error('number')
                        {{ $message }}
                    @enderror
                </span>
                    <br>
                </div>
                <div class="wrap-btn">
                    <input type="submit" class="btn-black g-recaptcha "
                           {{-- data-sitekey="{{ env('NOCAPTCHA_SITEKEY')}}" --}}
                           data-callback='onSubmit' value="SEND">
                </div>
                {{ html()->form()->close() }}
            </div>
            <div class="wholesale-form-right">
                <strong>Wholesale Info</strong>
                <p>Contact us directly for more information</p>
                <ul>
                    <li><strong>Address:</strong>{{ config('constants.ADRESS') }}</li>
                    <li><strong>Hours:</strong>{{ config('constants.HOURS') }}</li>
                    <li><strong>Phone:</strong>{{ config('constants.PHONE') }}</li>
                    <li><strong>Email:</strong> <a href="mailto:info@zomoamerica.com">{{ config('constants.EMAIL1') }}</a>
                    </li>
                </ul>
                <br><a href="{{ route('frontend.home').'#distributor' }}">Authorized Wholesaler List</a>
            </div>
        </div>
    </div>
    <div class="footer-contact reveal">
        <div class="infomation-footer-contact container">
            <div class="footer-contact-box">
                <p class="title-in">{{ config('constants.FOOTER_TITLE') }}</p>
                <p>{{ config('constants.FOOTER_ADD') }}</p>
            </div>
            <div class="footer-contact-box">
                <p class="title-in">{{ config('constants.FOOTER_TITLE1') }}</p>
                <a href="tel:18669523331">{{ config('constants.FOOTER_TELEPHONE') }}</a>
                <a href="mailto:sales@zomousa.com">{{ config('constants.FOOTER_GMAIL') }}</a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {!! JsValidator::formRequest('App\Http\Requests\Wholesale', '#inquery-form') !!}
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
        
            $("#inquery-form").submit();
        }
    </script>
@endsection
