@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('callbacks.MyCallbacks') }}</div>

                    <div class="panel-body">

                      <div class="row">
                        <div class="col-md-4 col-sm-4 text-left">
                          {!! $chart->render() !!}
                        </div>

                        <div class="col-lg-4 col-sm-4 text-left">
                          {!! $overdue->render() !!}
                        </div>

                      <div class="col-lg-4 col-sm-4 text-left">
                        {!! $assigned->render() !!}
                      </div>
                    </div>

                        <table class="table table-striped">
                            <thead>
                            <th>{{ trans('callbacks.customer') }}</th>
                            <th>{{ trans('callbacks.type') }}</th>
                            <th>{{ trans('callbacks.queue') }}</th>
                            <th>{{ trans('callbacks.status') }}</th>
                            <th class="col-md-1"></th>
                            </thead>
                            <tbody>
                              @foreach($callbacks as $item)
                             <tr>
                               <td><a href="{{ url('callbacks/display', $item["id"]) }}">{!! $item["customers"]["name"] !!}</a></td>
                               <td>{!! $item["departments"]["name"] !!}</td>
                               <td>
                                 {!! \Carbon\Carbon::parse($item["created_at"])->diffForHumans(); !!}
                               </td>
                               @if($item["status"] === 'open')
                               <td><span class="badge bg-orange">{{ trans('callbacks.open') }}</span></td>
                               @elseif($item["status"] === 'in_progress')
                               <td><span class="badge bg-orange">{{ trans('callbacks.in_progress') }}</span></td>
                               @else
                               <td><span class="badge bg-red">{{ trans('callbacks.closed') }}</span></td>
                               @endif
                               <td>
                                <a href="{{ url('callbacks/display', $item["id"]) }}" data-toggle="tooltip" data-placement="bottom"
                                title="{{ trans('app.details')}}"><i class="fa fa-info-circle fa-lg"></i></a>
                              </td>
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
