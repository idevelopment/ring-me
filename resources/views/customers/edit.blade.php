@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('customers.search') }}</div>
                <div class="panel-body">
                <form action="{{ url('customers') }}"  method="post" class="form-horizontal">
                  <div class="form-group">
                   <label for="company" class="col-md-3 control-label">{{trans('customers.company')}}</label>
                   <div class="col-md-8">
                    <input type="text" id="company" name="company" class="form-control">
                   </div>
                  </div>

                  <div class="form-group">
                   <label for="firstname" class="col-md-3 control-label">{{trans('customers.first_name')}}</label>
                   <div class="col-md-8">
                    <input type="text" id="firstname" name="firstname" class="form-control">
                   </div>
                  </div>

                  <div class="form-group">
                   <label for="firstname" class="col-md-3 control-label">{{trans('customers.name')}}</label>
                   <div class="col-md-8">
                    <input type="text" id="firstname" name="firstname" class="form-control">
                   </div>
                  </div>                  

                 
                  <div class="form-group">
                   <label for="phone" class="col-md-3 control-label">{{trans('customers.phone')}}</label>
                   <div class="col-md-8">
                    <input type="text" id="phone" name="phone" class="form-control">
                   </div>
                  </div>

                  <div class="form-group">
                   <label for="name" class="col-md-3 control-label">{{trans('customers.mobile')}}</label>
                   <div class="col-md-8">
                    <input type="text" id="name" name="name" class="form-control">
                   </div>
                  </div>               
                </form>
            </div>
        </div>
    </div>
   </div>
 </div>
@endsection
