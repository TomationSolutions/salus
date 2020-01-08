@extends('layout.master')
@section('title', 'Advanced')
@section('parentPageTitle', 'Form')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/multi-select/css/multi-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/nouislider/nouislider.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>
<style>
.input-group-text {
    padding: 0 .75rem;
}
</style>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="col-lg-7 col-md-6">
    <form class="card auth_form"  method="POST" action="{{ route('login') }}">
    @csrf 
   
    <div class="body">

        <div class="input-group mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name">
            @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
        </div>
        <div class="input-group mb-3">
            
            <select class="select" name="gender" id="inputGroupSelect01">
                <option selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                
            </select>
            @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 

        <div class="input-group mb-3">
            <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('name') }}" placeholder="Name or Company Name">
            @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
        </div>
        <div class="input-group mb-3">
            <input type="phone" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name or Company Name">
            @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
            <div class="input-group-append">
                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control  @error('password') is-invalid @enderror" name="password" value="{{old('password')}}" placeholder="Password">
            <div class="input-group-append">                                
                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
            </div> 
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror                          
        </div>
        
        <div class="checkbox">
            <input id="remember_me" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember_me">Remember Me</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
            {{ __('Login') }}
        </button>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
    <div class="signin_with mt-3">
        <a class="link" href="{{route('register')}}">You didn't have account?</a>
    </div>
</form>
</div>
</div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('assets/plugins/nouislider/nouislider.js')}}"></script>
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@stop