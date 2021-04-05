@extends('layouts.main')
@section('content')

<section class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="signup">
                    <div class="row">
                        <div class="col-md-5 signup-greeting overlay" style="background-image: url({{asset('signup.jpg')}});">
                            <img src="{{asset('template/img/'.session('site_logo'))}}" alt="logo">
                            <h4>Welcome!</h4>
                            <p>It is just important to evaluate the best email services available and make a choice that suits your needs. Many people are just complacent with the email service provider they currently use, Check out advocatemail.com for its features.</p>
                        </div>
                        <div class="col-md-7">
                            <div class="signup-form">
                               <form method="POST" action="{{ route('register') }}">
                                @csrf
                                    <div class="col-lg-12">
                                        <h4>{{ __('Register') }}</h4>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Your Name" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="col-lg-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                    </div>

                                    <div class="col-lg-12">
                                         <input id="licence_no" type="text" class="form-control @error('licence_no') is-invalid @enderror" name="licence_no" value="{{ old('licence_no') }}" placeholder="Enter Bar Licence Number" required autocomplete="licence_no" autofocus>
                                        @error('licence_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-primary btn-sm">{{ __('Register') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
