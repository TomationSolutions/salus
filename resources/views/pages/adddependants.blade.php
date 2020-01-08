@extends('layout.master')
@section('title', 'Depedants')
@section('parentPageTitle', 'Add Depedants')
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
    <form class="card auth_form"  method="POST" action="{{ route('adddependents.post') }}" enctype="multipart/form-data">
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
            <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}">
            @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
        </div>
        <div class="input-group mb-3">
            
            
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="zmdi zmdi-smartphone"></i></span>
                </div>
                <input type="text" name="phone" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
            
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
       
        <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
            
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            
            <select class="select" name="hospital" id="inputGroupSelect01">
            
                <option selected>Hospital</option>
                @if(count($hospitals) > 0)
                @foreach($hospitals as $hospital)
                <option value="{{$hospital->id}}">{{$hospital->name}}</option>
            
               @endforeach
               @endif
                
            </select>
            @error('hospital')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 

            <div class="input-group mb-3">
            
                <select class="select" name="packages" id="inputGroupSelect01">
                    <option selected>Packages</option>
                    @if(count($packages) > 0) 
                        @foreach($packages as $package)
                        <option value="{{$package->id}}">{{$package->name}}</option>
                    
                    @endforeach
                    @endif
                    
                </select>
                @error('packages')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> 
                <div class="input-group mb-3">
                <div class="form-group">
                   
                    <input type="file" class="form-control-file" name="image" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Depedents passport (image).</small>
                  </div>
                  @error('packages')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

        <button type="submit" class="btn btn-primary btn-block waves-effect ">
            {{ __('Submit') }}
        </button>
       
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