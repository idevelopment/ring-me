@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Open Call Requests</div>

                    <div class="panel-body">

<form class="form-group">
  <div class="col-md-4">
    <label for="customer">Customer</label> <input type="text" id="customer" name="customer" class="form-control"> 
  </div>
  <div class="col-md-4">
    <label>Employee:</label> <input type="text" name="employee" class="form-control">
  </div>
  <div class="col-md-3">
    <label>Date:</label> <input ng-init="maxNum=0" class="form-control" type="date">
  </div>
  <div class="col-md-1">
    <label>&nbsp;</label> <br>
    <button class="btn btn-primary">Filter</button>
  </div>
  </form>

  <div class="clearfix">&nbsp;</div>
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
                                <td><a href="#" data-toggle="tooltip" data-placement="bottom"
                                       title="{{ trans('app.details')}}"><i class="fa fa-info-circle fa-lg"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       </div>
@endsection