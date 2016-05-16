@extends('layouts.app')
@section('content')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="{{ url('customers') }}">Customers</a></li>
        <li class="active">{{trans('customers.register')}}</li>
    </ul>

   <form action="{{ url('customers') }}"  method="post" class="form-horizontal">
       <div class="form-group formSep">
        <label for="company" class="col-md-3 control-label">{{trans('customers.company')}} <span class="text-danger">*</span></label>
         <div class="col-md-8">
           <input type="text" name="company" id="company" class="form-control">
         </div>
        </div>

       <div class="form-group formSep">
        <label for="vat" class="col-md-3 control-label">{{trans('customers.vat')}} <span class="text-danger">*</span></label>
         <div class="col-md-8">
           <input type="text" name="vat" id="vat" class="form-control">
         </div>
        </div>        
        
        <div class="form-group formSep">
         <label for="name" class="col-md-3 control-label">{{trans('customers.name')}} <span class="text-danger">*</span></label>
          <div class="col-md-8">
            <input type="text" name="name" id="name" class="form-control">
          </div>
        </div>

        <div class="form-group formSep">
         <label for="firstname" class="col-md-3 control-label">{{trans('customers.first_name')}} <span class="text-danger">*</span></label>
          <div class="col-md-8">
            <input type="text" name="firstname" id="firstname" class="form-control">
          </div>
        </div>

        <div class="form-group formSep">
          <label for="address" class="col-md-3 control-label">{{trans('customers.address')}} <span class="text-danger">*</span></label>
           <div class="col-md-8">
            <input type="text" name="address" id="address" class="form-control">
           </div>
        </div> 

        <div class="form-group formSep">
          <label for="zipcode" class="col-md-3 control-label">{{trans('customers.zipcode')}} <span class="text-danger">*</span></label>
           <div class="col-md-8">
            <input type="text" name="zipcode" id="zipcode" class="form-control">
           </div>
        </div>

        <div class="form-group formSep">
          <label for="city" class="col-md-3 control-label">{{trans('customers.city')}} <span class="text-danger">*</span></label>
           <div class="col-md-8">
            <input type="text" name="city" id="city" class="form-control">
           </div>
        </div>

        <div class="form-group formSep">
          <label for="city" class="col-md-3 control-label">{{trans('customers.country')}} <span class="text-danger">*</span></label>
           <div class="col-md-8">
            <select name="country" id="country" class="form-control">
             <option value="" selected=""></option>
                <option value="Belgium">Belgium</option>
                <option value="Netherlands">Netherlands</option>
            </select>
           </div>
        </div> 

       <div class="form-group formSep">
         <label for="name" class="col-md-3 control-label">{{trans('customers.email')}} <span class="text-danger">*</span></label>
          <div class="col-md-8">
            <input type="text" name="email" id="email" class="form-control">
          </div>
        </div>         

        <div class="form-group formSep">
          <label for="phone" class="col-md-3 control-label">{{trans('customers.phone')}} <span class="text-danger">*</span></label>
           <div class="col-md-8">
            <input type="text" name="phone" id="phone" class="form-control">
           </div>
        </div>

       <div class="form-group formSep">
         <label for="name" class="col-md-3 control-label">{{trans('customers.mobile')}}</label>
          <div class="col-md-8">
            <input type="text" name="mobile" id="mobile" class="form-control">
          </div>
        </div> 
       <div class="form-group">
         <label for="name" class="col-md-3 control-label">&nbsp;</label>
          <div class="col-md-8">
            <button type="submit" class="btn btn-primary">{{ trans('app.save')}}</button>
          </div>
        </div>               
  </form>
</div>

@endsection
