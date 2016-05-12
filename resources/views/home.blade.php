@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Open Call Requests</div>

                <div class="panel-body">
<table class="table table-filter">
<thead>
    <th>ID</th>
    <th>Contact</th>
    <th>Type</th>
    <th>Date</th>
</thead>
                                <tbody>
                                    <tr data-status="pagado">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox1">
                                                <label for="checkbox1"></label>
                                            </div>
                                        </td>
                                        <td><a href="javascript:;" class="star">Glenn Hermans</a>
                                        </td>
                                        <td>Callback</td>
                                        <td>05/05/2016 20:17 pm</td>
                                    </tr>
  
                           </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Open Requests</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
