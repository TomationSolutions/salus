@extends('layout.master')
@section('title', 'Depedants')
@section('parentPageTitle', 'My Depedants')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/multi-select/css/multi-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/nouislider/nouislider.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>
<script src="https://js.paystack.co/v1/inline.js"></script>

<style>
.input-group-text {
    padding: 0 .75rem;
}
</style>
@stop
@section('content')

   <!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>My</strong> Depedants</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Hospital</th>
                                <th>Packages</th>
                                <th>View Card</th>
                                <!-- <th>Salary</th> -->
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Hospital</th>
                                <th>Packages</th>
                                <th>View Card</th>
                                <!-- <th>Salary</th> -->
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                            @if(count($dependants) > 0)
                                @foreach($dependants as $dependant)
                                <td>{{$dependant->name}}</td>
                                <td>{{$dependant->email}}</td>
                                <td>{{$dependant->phone}}</td>
                                <td>Allen Ikeja</td>
                                <td>Gold</td>
                                <td><button type="button" class="btn btn-info">View Card</button></td>
                                <!-- <td>$320,800</td> -->
                           
                            </tr>
                            @endforeach
                            @endif
                            
                            
                            
                        </tbody>
                    </table>
</div>
                    <form>
  <div class="form-row align-items-center float-right">
    
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">Total Amount</div>
        </div>
        <input type="text" class="form-control" placeholder="#267,009" disabled>
      </div>
    </div>
   
    <div class="col-auto">
      <!-- <button type="submit" class="btn btn-primary mb-2">Make Payment</button> -->
      <button type="button" class="btn btn-primary mb-2" onclick="payWithPaystack()"> Make Payment</button> 
    </div>
  </div>
</form>

                
            </div>
        </div>
    </div>

    
</div>
 

@stop
@section('page-script')
<script src="{{asset('assets/pay.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('assets/plugins/nouislider/nouislider.js')}}"></script>
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@stop