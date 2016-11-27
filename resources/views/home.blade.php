@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 text-left">
          {!! $chart->render() !!}
        </div>

        <div class="col-md-4 col-sm-4 text-left">
          {!! $overdue->render() !!}
        </div>

      <div class="col-lg-4 col-sm-4 text-left">
        {!! $assigned->render() !!}
      </div>
    </div>

    <div class="clearfix">&nbsp;</div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('callbacks.MyCallbacks') }}</div>

                    <div class="panel-body">
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
                            <tr>
                                <td><a href="javascript:;">John Porter</a></td>
                                <td><a href="javascript:;">Glenn Hermans</a></td>
                                <td>Administration</td>
                                <td><span class="text-danger">12 min</span></td>
                                <td><span class="badge bg-red">Overdue SLA time</span></td>
                                <td><a href="#" data-toggle="tooltip" data-placement="bottom"
                                       title="{{ trans('app.details')}}"><i class="fa fa-info-circle fa-lg"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="javascript:;">Tim Joosten</a></td>
                                <td><a href="javascript:;">Glenn Hermans</a></td>
                                <td>Technical</td>
                                <td><span class="text-success">7 min</span></td>
                                <td><span class="badge bg-green">Completed</span></td>
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

        <div class="row">
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading">Recent activity</div>
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
                                        <strong class="notification-title"><a href="#">Glenn Hermans</a> ended call with
                                            <a href="#">iDevelopment</a></strong>
                                        <p class="notification-desc">I totally don't wanna do it. Rimmer can do it.</p>

                                        <div class="notification-meta">
                                            <small class="timestamp">27. 11. 2015, 15:00</small>
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
                                        <strong class="notification-title"><a href="#">Nikola Tesla</a> resolved <a
                                                    href="#">T-14 - Awesome stuff</a></strong>

                                        <p class="notification-desc">Resolution: Fixed, Work log: 4h</p>

                                        <div class="notification-meta">
                                            <small class="timestamp">27. 10. 2015, 08:00</small>
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
                                        <strong class="notification-title"><a href="#">James Bond</a> resolved <a
                                                    href="#">B-007 - Desolve Spectre organization</a></strong>

                                        <div class="notification-meta">
                                            <small class="timestamp">1. 9. 2015, 08:00</small>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

                        <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('callbacks.MyCallbacks') }} </div>
                    <div class="panel-body">
                     <ul class="user-list">
                     <li>
                      <span class="badge bg-green pull-right">online</span>
                      <a href="#" class="sl_name">John Doe</a><br>
                     </li>
                <li>
                    <span class="badge bg-green pull-right">online</span>
                    <a href="#" class="sl_name">Kate Miller</a><br>
                </li>
                <li>
                    <span class="badge bg-red pull-right">offline</span>
                    <a href="#" class="">James Vandenberg</a><br>
                </li>
                <li>
                    <span class="badge bg-red pull-right">offline</span>
                    <a href="#" class="">Donna Doerr</a><br>
                </li>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
