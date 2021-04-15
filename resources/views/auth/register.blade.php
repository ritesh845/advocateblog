@extends('layouts.main')
@section('content')

<section class="d-flex align-items-center py-50" >
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="card">
                 
                    <div class="card-body">
                      
                           <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="col-lg-12">
                                    <h4 class="mb-4">{{ __('Register') }}</h4>
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
                                <div class="col-lg-12">
                                     <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha"  placeholder="Enter Verification Code" required autocomplete="captcha" autofocus>
                                    @error('captcha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                                <div class="col-md-12 form-group">
                                    <span id="spancaptcha">{!! captcha_img('flat') !!}</span>
                                     <a href="javascript:void(0)" class="btn btn-sm btn-primary ml-3 text-white" id="btn-refresh"><i class="fa fa-refresh"></i></a>
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
</section>
<script >
    $(document).ready(function(){
        $("#btn-refresh").click(function(){
            $('#captcha').val('');
            $.ajax({
             type:'GET',
             url:'/refresh_captcha',
             success:function(data){
                $("#spancaptcha").empty().html(data)
               
             }
            });

        });
    })
</script>
@endsection
