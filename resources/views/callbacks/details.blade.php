@extends('layouts.app')
@section('content')
<div class="container">
        <ul class="breadcrumb">
            <li><a href="{{url('')}}">{!! trans('app.home') !!}</a></li>
            <li><a href="{{url('callbacks')}}">{!! trans('app.callbacks') !!}</a></li>
            <li class="active">Details</li>
        </ul>

        <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">General</a></li>
                <li role="presentation" class="dropdown">
                  <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents"><i class="fa fa-comment"></i> Call attempts <span class="caret"></span></a>
                  <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                    <li role="presentation">
                      <a href="#unanswered-calls" aria-controls="unanswered-calls" role="tab" data-toggle="tab">List all</a>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#callattempt">Register call attempt</a></li>
                  </ul>
                </li>
                <li role="presentation"><a href="#stats" aria-controls="messages" role="tab" data-toggle="tab">Statistics</a></li>
                <li role="presentation" class="dropdown">
                  <a href="#" class="dropdown-toggle" id="myTabDrop2" data-toggle="dropdown" aria-controls="myTabDrop2-contents">Actions <span class="caret"></span></a>
                  <ul class="dropdown-menu" aria-labelledby="myTabDrop2" id="myTabDrop2-contents">
                    <li><a href="#"><i class="fa fa-lock"></i> End call</a></li>
                    <li><a href="{{route('callbacks.destroy', $item["id"])}}"><i class="fa fa-trash"></i> Remove request</a></li>
                  </ul>
                </li>
              </ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ url('customers') }}" method="post" class="form-horizontal">
              <div class="form-group form-sep">
                  <label for="firstname"
                         class="col-md-3 control-label">{{ trans('callbacks.type') }}</label>
                  <div class="col-md-8">
                      <p class="form-control-static">Administration</p>
                  </div>
              </div>

              <div class="form-group form-sep">
                  <label for="firstname"
                         class="col-md-3 control-label">{{ trans('callbacks.status') }}</label>
                  <div class="col-md-8">
                      <p class="form-control-static"><a href="" class="badge">Open</a></p>
                  </div>
              </div>

                    <div class="form-group form-sep">
                        <label for="company"
                               class="col-md-3 control-label">{{ trans('callbacks.customer') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static">{!! $item["customers"]["fname"] !!} {!! $item["customers"]["name"] !!} </p>
                        </div>
                    </div>

                    <div class="form-group form-sep">
                        <label for="company"
                               class="col-md-3 control-label">{{ trans('callbacks.phone') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static"><a href="callto:{!! $item["customers"]["phone"] !!}">{!! $item["customers"]["phone"] !!}</a></p>
                        </div>
                    </div>

                    <div class="form-group form-sep">
                        <label for="firstname"
                               class="col-md-3 control-label">{{ trans('callbacks.assigned') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static">Glenn Hermans</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname"
                               class="col-md-3 control-label">{{ trans('callbacks.description') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static">{!! nl2br(e($item["description"])) !!}</p>
                        </div>
                    </div>
            </form>
        </div>
    </div>
  </div>

  <div role="tabpanel" class="tab-pane" id="unanswered-calls">
    <table class="table table-striped">
      <thead>
        <th>Date & time</th>
        <th>Agent</th>
        <th>Reason</th>
      </thead>
      <tbody>
        <tr>
          <td>29/09/2016 04:51</td>
          <td>Glenn Hermans</td>
          <td>Number is incorrect</td>
        </tr>

        <tr>
          <td>29/09/2016 06:51</td>
          <td>Glenn Hermans</td>
          <td>out of office</td>
        </tr>

        <tr>
          <td>29/09/2016 04:51</td>
          <td>Glenn Hermans</td>
          <td>Number is incorrect</td>
        </tr>

        <tr>
          <td>29/09/2016 06:51</td>
          <td>Glenn Hermans</td>
          <td>out of office</td>
        </tr>

        <tr>
          <td>29/09/2016 04:51</td>
          <td>Glenn Hermans</td>
          <td>Number is incorrect</td>
        </tr>

        <tr>
          <td>29/09/2016 06:51</td>
          <td>Glenn Hermans</td>
          <td>out of office</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div role="tabpanel" class="tab-pane" id="stats">
    <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal">

             <div class="form-group form-sep">
               <label for="company" class="col-md-3 control-label">Total call attempts</label>
                <div class="col-md-8">
                  <p class="form-control-static">6</p>
              </div>
            </div>

            <div class="form-group form-sep">
              <label for="company" class="col-md-3 control-label">Requested time</label>
               <div class="col-md-8">
                 <p class="form-control-static">{!! $item["created_at"] !!}</p>
             </div>
           </div>

            </div>
          </div>
  </div>
</div>



            </div>
        </div>

         <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>


    <div class="modal" id="callattempt" tabindex="-1" role="dialog" aria-labelledby="CallLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="CallLabel">Call attempt</h4>
      </div>
      <form class="form-horizontal">
      <div class="modal-body">
        <div class="form-group form-sep">
         <label class="col-md-3 control-label">Reason</label>
          <div class="col-md-9">
           <select name="reason" class="form-control">
           <option value="" selected=""></option>
           	<option value="out-of-office">Out of office</option>
           	<option value="busy">Busy</option>
           	<option value="no-response">No response</option>
           </select>
          </div>
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">{!! trans('app.close') !!}</button>
        <button type="button" class="btn btn-sm btn-primary">{!! trans('app.save') !!}</button>
      </div>
    </div>
  </div>
</div>
@endsection
