<div class="row">
    <div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading">{{ trans('callbacks.recentCallbacks') }}</div>

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
         @foreach($Callbacks as $item)
        <tr @if($item["status"] === 'open') class="warning" @endif>
          <td><a href="{{ url('callbacks/display', $item["id"]) }}">{!! $item["customers"]["name"] !!}</a></td>
          <td><a href="{{ url('callbacks/display', $item["id"]) }}">{!! $item["users"]["fname"] !!} {!! $item["users"]["name"] !!}</a></td>
          <td>{!! $item["departments"]["name"] !!}</td>
          <td>
            {!! \Carbon\Carbon::parse($item["created_at"])->diffForHumans(); !!}
          </td>
          @if($item["status"] === 'open')
          <td>{{ trans('callbacks.open') }}</td>
          @elseif($item["status"] === 'in_progress')
          <td>{{ trans('callbacks.in_progress') }}</td>
          @else
          <td><span>{{ trans('callbacks.closed') }}</span></td>
          @endif
          <td>
           <a href="{{ url('callbacks/display', $item["id"]) }}" class="btn btn-sm btn-default">{{trans('app.edit')}}</a>
         </td>
        </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
 </div>
</div>
