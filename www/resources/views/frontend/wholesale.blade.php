@extends('frontend.layouts.master')
@section('title')
    Product
@endsection


@section('main')

    <body class="product-page">
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
                    <p>Please fill out the wholesale account form below to register your business. Please note that all
                        fields are mandatory.</p>
                    {!! Form::open([
                        'url' => route('frontend.storeWholesale'),
                        'method' => 'POST',
                        'id' => 'wholesale-form',
                        'class' => 'inquery-form',
                    ]) !!}
                    <div class="input-field">
                        <label for="name">BUSINESS NAME:</label>
                        {!! Form::text('bname', old('bname'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Buisness Name',
                            'maxlength' => '50'
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('bname')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="cole-two">
                        <div class="input-field">
                            <label for="fist">FIRST NAME:</label>
                            {!! Form::text('fname', old('fname'), null, [
                                'class' => ' name',
                                'placeholder' => 'Your First Name',
                                'maxlength' => '20'
                            ]) !!}
                            <span class="text-danger" style="font-size:15px">
                                @error('fname')
                                    {{ $message }}
                                @enderror
                            </span>
                            <br>
                        </div>
                        <div class="input-field">
                            <label for="Last">LAST NAME:</label>
                            {!! Form::text('lname', old('lname'), null, [
                                'class' => ' name',
                                'placeholder' => 'Your Last Name',
                                'maxlength' => '20'
                            ]) !!}
                            <span class="text-danger" style="font-size:15px">
                                @error('lname')
                                    {{ $message }}
                                @enderror
                            </span>
                            <br>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="address">ADDRESS:</label>
                        {!! Form::text('address', old('address'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Address',
                            'maxlength' => '40'
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="city">CITY:</label>
                        {!! Form::text('city', old('city'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your City',
                            'maxlength' => '10'
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('city')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                    <label for="state">State:</label>
                        {{ Form::Select('state', $stateArray, '', ['class' => '', 'placeholder' => 'Select']) }}
                        <span class="text-danger" style="font-size:15px">
                            @error('state')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="zip">zip code:</label>
                        {!! Form::text('zipcode', old('zipcode'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your zipcode',
                            'maxlength' => '10'
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('zipcode')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="website">website:</label>
                        {!! Form::text('website', old('website'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Website',
                            'maxlength' => '70'
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('website')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="email">EMAIL ADDRESS:</label>
                        {!! Form::text('email', old('email'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Address',
                            'maxlength' => '50'
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="number">TELEPHONE NUMBER:</label>
                        {!! Form::text('number', old('number'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Number',
                            
                        ]) !!}
                        <span class="text-danger" style="font-size:15px">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    {!! NoCaptcha::display() !!}
                    <span class="text-danger" style="font-size:15px">
                        @error('g-recaptcha-response')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="wrap-btn">
                        <input type="submit" class="btn-black" value="SEND">
                    </div>
                    {{ Form::close() }}

                </div>
                <div class="wholesale-form-right">
                    <strong>Wholesale Info</strong>
                    <p>Contact us directly for more information</p>
                    <ul>
                        <li><strong>Address:</strong> Zomo America <br>
                            138 Michigan Ave Paterson,<br>
                            NJ 07503</li>
                        <li><strong>Hours:</strong> Mon-Fri 11am to 6pm</li>
                        <li><strong>Phone:</strong> 1.201.778.0188</li>
                        <li><strong>Email:</strong> <a href="mailto:info@zomoamerica.com">info@zomoamerica.com</a></li>
                    </ul>
                    <br><a href="#">Authorized Wholesaler List</a>
                </div>
            </div>
        </div>
        <div class="footer-contact">
            <div class="infomation-footer-contact container">
                <div class="footer-contact-box">
                    <p class="title-in">Corporate</p>
                    <p> 704 North Valley Street Suite R&S Anaheim, CA 92801</p>
                </div>
                <div class="footer-contact-box">
                    <p class="title-in">Sales</p>
                    <a href="tel:18669523331">1-866-952-3331</a>
                    <a href="mailto:sales@zomousa.com">sales@zomousa.com</a>
                </div>
            </div>
        </div>
    @section('js')
        {!! JsValidator::formRequest('App\Http\Requests\Wholesale', '#wholesale-form') !!}
        {!! NoCaptcha::renderJs() !!}
    @endsection

</body>
@endsection
