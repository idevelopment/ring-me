@extends('layouts.app')
@section('content')
    <div class="container">
            <ul class="breadcrumb">
            <li><a href="{{url('')}}">{!! trans('app.home') !!}</a></li>
            <li class="active">{!! trans('app.callbacks') !!}</li>
        </ul>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Callback Requests</div>

                    <div class="panel-body">

<form class="form-group">
  <div class="col-md-4">
    <label for="customer">Customer</label> <input type="text" id="customer" name="customer" class="form-control"> 
  </div>
  <div class="col-md-4">
    <label for="employee">Employee:</label> <input type="text" id="employee" name="employee" class="form-control">
  </div>
  <div class="col-md-3">
    <label for="date">Date:</label> <input type="date" id="date" name="date" class="form-control">
  </div>
  <div class="col-md-1">
    <label>&nbsp;</label> <br>
    <button class="btn btn-primary">Filter</button>
  </div>
  </form>

  <div class="clearfix">&nbsp;</div>
  <div class="clearfix">&nbsp;</div>
  <table class="table table-striped">
   <thead>
    <th>Customer</th>
    <th>Agent</th>
    <th>Type</th>
    <th>Queue time</th>
    <th>Status</th>
    <th class="col-md-1"></th>
   </thead>
   <tbody>
    <tr>
      <td><a href="javascript:;">John Porter</a></td>
      <td><a href="javascript:;">Glenn Hermans</a></td>
      <td>Administration</td>
      <td><span class="text-danger">12 min</span></td>
      <td><span class="badge bg-red">Waiting</span></td>
      <td><a href="{{ url('callbacks/display') }}/1" data-toggle="tooltip" data-placement="bottom"
      title="{{ trans('app.details')}}"><i class="fa fa-info-circle fa-lg"></i></a></td>
    </tr>
    </tbody>
   </table>
  </div>
 </div>
 </div>
</div>
</div>
@endsection