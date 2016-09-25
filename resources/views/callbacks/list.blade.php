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
    <label for="employee">Employee:</label>
    <select name="employee" id="employee" class="form-control">
    @foreach($users as $user_item)
     <option value="{!! $user_item["id"] !!}">{!! $user_item["fname"] !!} {!! $user_item["name"] !!}</option>
    @endforeach
  </select>
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
     <th>{{ trans('callbacks.customer') }}</th>
     <th>{{ trans('callbacks.assigned') }}</th>
     <th>{{ trans('callbacks.type') }}</th>
     <th>{{ trans('callbacks.queue') }}</th>
     <th>{{ trans('callbacks.status') }}</th>
    <th class="col-md-1"></th>
   </thead>
   <tbody>
     @foreach($callback as $item)
    <tr>
      <td><a href="javascript:;">{!! $item["customers"]["fname"] !!} {!! $item["customers"]["name"] !!}</a></td>
      <td><a href="javascript:;">{!! $item["users"]["fname"] !!} {!! $item["users"]["name"] !!}</a></td>
      <td>{!! $item["departments"]["name"] !!}</td>
      <td><span class="text-danger">{!! $item["created_at"] !!}</span></td>
      <td><span class="badge bg-red">Waiting</span></td>
      <td><a href="{{ url('callbacks/display') }}/1" data-toggle="tooltip" data-placement="bottom"
      title="{{ trans('app.details')}}"><i class="fa fa-info-circle fa-lg"></i></a></td>
    </tr>
    @endforeach
    </tbody>
   </table>

  </div>
 </div>
 </div>
</div>
</div>
@endsection
