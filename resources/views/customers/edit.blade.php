@extends('layouts.app')
@section('content')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{url('')}}">Home</a></li>
        <li><a href="{{url('customers')}}">Customers</a></li>
        <li class="active">Details</li>
    </ul>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('customers.details') }}</div>
                <div class="panel-body">
   <form action="{{ url('customers') }}"  method="post" class="form-horizontal">

       <div class="form-group formSep">
        <label for="company" class="col-md-3 control-label">{{trans('customers.company')}}</label>
         <div class="col-md-8">
           <p class="form-control-static">Telenet</p>
         </div>
        </div>

       <div class="form-group formSep">
        <label for="company" class="col-md-3 control-label">{{trans('customers.vat')}}</label>
         <div class="col-md-8">
           <p class="form-control-static">BE</p>
         </div>
        </div>        

        <div class="form-group formSep">
         <label for="firstname" class="col-md-3 control-label">{{trans('customers.contact')}}</label>
          <div class="col-md-8">
            <p class="form-control-static">John Porter</p>
          </div>
        </div>

        <div class="form-group formSep">
          <label for="firstname" class="col-md-3 control-label">{{trans('customers.address')}}</label>
           <div class="col-md-8">
            <p class="form-control-static">
            <address>
             Liersesteenweg 4<br>
             2800 Mechelen<br>
             Belgium
            </address>
            </p>
           </div>
        </div>                  

       <div class="form-group formSep">
         <label for="name" class="col-md-3 control-label">{{trans('customers.email')}}</label>
          <div class="col-md-8">
           <p class="form-control-static">-</p>
          </div>
        </div>         

        <div class="form-group formSep">
          <label for="phone" class="col-md-3 control-label">{{trans('customers.phone')}}</label>
           <div class="col-md-8">
             <p class="form-control-static">015666666</p>
           </div>
        </div>

       <div class="form-group">
         <label for="name" class="col-md-3 control-label">{{trans('customers.mobile')}}</label>
          <div class="col-md-8">
           <p class="form-control-static">-</p>
          </div>
        </div>         
  </form>
      </div>

</div>
                
            </div>
        </div>


            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('customers.history') }}</div>
                <div class="panel-body">
                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Type</th>
                      <th>Date</th>
                      <th>Agent</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#">CB01</td>
                      <td>Administration</td>
                      <td>13/05/2016</td>
                      <td>Glenn Hermans</td>
                      <td><span class="badge bg-red">Waiting</span></td>
                    </tr>

                    <tr>
                      <td><a href="#">CB02</td>
                      <td>Technical</td>
                      <td>13/05/2016</td>
                      <td>Glenn Hermans</td>
                      <td><span class="badge bg-red">Waiting</span></td>
                    </tr>                    
                  </tbody>
                  </table>
                </div>
        </div>

    </div>
   </div>
 </div>
@endsection
