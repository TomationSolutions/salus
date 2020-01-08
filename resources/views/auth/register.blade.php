@extends('layout.authentication')
@section('title', 'Register')
@section('content')
<div class="row">
    <div class="col-lg-4 col-sm-12">
        <form class="card auth_form" method="POST" action="{{ route('register') }}">
             @csrf
            <div class="header">
                <img class="logo" src="{{asset('assets/images/logo.svg')}}" alt="">
                <h5>Sign Up</h5>
                <span></span>
            </div>
           
               
            <div class="body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name or Company Name">
                    @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                    </div>
                </div> 
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01"><span>Account Type</span></label>
                    </div>
                    <select class="custom-select" name="is_admin" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="2">Personal</option>
                        <option value="2">Company</option>
                        
                    </select>
                    </div>                       
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                    <div class="input-group-append">                                
                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                    </div>                            
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
                    <div class="input-group-append">                                
                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                    </div>                            
                </div>
               
                <div class="checkbox">
                    <input id="remember_me" type="checkbox">
                    <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of usage</a></label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                    {{ __('Register') }}
                </button>
                <div class="signin_with mt-3">
                    <a class="link" href="{{route('login')}}">You already have a membership?</a>
                </div>
            </div>
        </form>
        <div class="copyright text-center">
            &copy;
            <script>document.write(new Date().getFullYear())</script>,
            <span>copyright <a href="" target="_blank">Salus Trust</a></span>
        </div>
    </div>
    <div class="col-lg-8 col-sm-12">
        <div class="card">
            <img src="{{asset('assets/images/signup.svg')}}" alt="Sign Up" />
        </div>
    </div>
</div>
@stop