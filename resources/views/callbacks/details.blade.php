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
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Call attempts</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Statistics</a></li>
              </ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('callbacks.details') }}
         <span class="pull-right">
          <div class="dropdown">
           <button class="btn btn-default btn-xs dropdown-toggle " type="button" data-toggle="dropdown"> <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
             <li><a href="#" data-toggle="modal" data-target="#callattempt">Call attempt</a></li>
             <li><a href="#">Add comment</a></li>
             <li class="divider"></li>
             <li><a href="#"><i class="fa fa-lock"></i> End call</a></li>
            </ul>
          </div>

         </span>
         </div>
        <div class="panel-body">
            <form action="{{ url('customers') }}" method="post" class="form-horizontal">

                    <div class="form-group form-sep">
                        <label for="company"
                               class="col-md-3 control-label">{{ trans('callbacks.customer') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static"> Telenet NV </p>
                        </div>
                    </div>

                    <div class="form-group form-sep">
                        <label for="company"
                               class="col-md-3 control-label">{{ trans('callbacks.phone') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static"><a href="callto:+3215666666">+3215666666</a></p>
                        </div>
                    </div>

                    <div class="form-group form-sep">
                        <label for="firstname"
                               class="col-md-3 control-label">{{ trans('callbacks.type') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static"><a href="#" id="type" data-type="select" data-pk="1" data-url="/update" data-title="Change type">Administration</a> </p>
                        </div>
                    </div>

                    <div class="form-group form-sep">
                        <label for="firstname"
                               class="col-md-3 control-label">{{ trans('callbacks.queue') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static text-danger"> 12 min</p>
                        </div>
                    </div>

                    <div class="form-group form-sep">
                        <label for="firstname"
                               class="col-md-3 control-label">{{ trans('callbacks.assigned') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static"><a href="">Glenn Hermans</a> </p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname"
                               class="col-md-3 control-label">{{ trans('callbacks.status') }}</label>
                        <div class="col-md-8">
                            <p class="form-control-static"><a href="">Open</a></p>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('callbacks.activity') }}</div>
        <div class="panel-body">
        <ul class="notifications">

                <li class="notification">
                    <div class="media">
                        <div class="media-left">
                            <div class="media-object">
                                <img src="{{ asset('img/user-icon.png') }}" width="50" height="50"
                                     class="img-circle" alt="Name">
                            </div>
                        </div>
                        <div class="media-body">
                            <strong class="notification-title"><a href="#">Telenet NV</a> requested a call with
                                <a href="#">Glenn Hermans</a></strong>
                            <p class="notification-desc">I would like to ask if it is possible to call us back regarding our latest invoice</p>

                            <div class="notification-meta">
                                <small class="timestamp">19/05/2016, 15:00</small>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="notification">
                    <div class="media">
                        <div class="media-left">
                            <div class="media-object">
                                <img src="{{ asset('img/user-icon.png') }}" width="50" height="50"
                                     class="img-circle" alt="Name">
                            </div>
                        </div>
                        <div class="media-body">
                            <strong class="notification-title"><a href="#">Glenn Hermans</a> started a call with <a href="#">Telenet NV</a></strong>
                            <div class="notification-meta">
                                <small class="timestamp">19/05/2016, 15:00</small>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="notification">
                    <div class="media">
                        <div class="media-left">
                            <div class="media-object">
                                <img src="{{ asset('img/user-icon.png') }}" width="50" height="50"
                                     class="img-circle" alt="Name">
                            </div>
                        </div>
                        <div class="media-body">
                            <strong class="notification-title"><a href="#">Glenn Hermans</a> ended call with
                                <a href="#">Telenet NV</a></strong>
                            <p class="notification-desc">Made credit note for latest invoice..</p>

                            <div class="notification-meta">
                                <small class="timestamp">19/05/2016, 15:30</small>
                            </div>
                        </div>
                    </div>
                </li>
          </ul>
       </div>
    </div>
  </div>
  <div role="tabpanel" class="tab-pane" id="profile">...</div>
  <div role="tabpanel" class="tab-pane" id="messages">...</div>
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

<script type="text/javascript">

	    $(document).ready(function() {
	    $.fn.editable.defaults.mode = 'inline';
        $('#type').editable({
        value: 1,
        source: [
              {value: 1, text: 'Administration'},
              {value: 2, text: 'Technical'},
           ]
    });
    });
</script>
@endsection
